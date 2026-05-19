<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HabitacionController extends Controller
{
    public function index()
    {
        $habitaciones = DB::table('habitacions')->get();

        return view('habitaciones.index', compact('habitaciones'));
    }

    public function create()
    {
        return view('habitaciones.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'numero' => 'required',
        'tipo' => 'required',
        'precio' => 'required',
        'estado' => 'required'
    ],[
        'numero.required' => 'Ingrese el numero',
        'tipo.required' => 'Seleccione un tipo',
        'precio.required' => 'Ingrese el precio',
        'estado.required' => 'Seleccione un estado'
    ]);

    Habitacion::create([
        'numero' => $request->numero,
        'tipo' => $request->tipo,
        'precio' => $request->precio,
        'estado' => $request->estado
    ]);

    return redirect('/habitaciones');
    }

    public function show($id)
    {
    $habitacion = Habitacion::find($id);

    return view('habitaciones.show', compact('habitacion'));
    }

    public function edit($id)
    {
        $habitacion = Habitacion::find($id);

        return view('habitaciones.edit', compact('habitacion'));
    }

    public function update(Request $request, $id)
    {
        $habitacion = Habitacion::find($id);

        $habitacion->update([
            'numero' => $request->numero,
            'tipo' => $request->tipo,
            'precio' => $request->precio,
            'estado' => $request->estado
        ]);

        return redirect('/habitaciones');
    }

    public function destroy($id)
    {
        $habitacion = Habitacion::find($id);

        $habitacion->delete();

        return redirect('/habitaciones');
    }
}