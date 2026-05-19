<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Cliente;
use App\Models\Habitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with('cliente', 'habitacion')->get();

        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $habitaciones = Habitacion::all();

        return view('reservas.create', compact('clientes', 'habitaciones'));
    }

 public function store(Request $request)
    {
    $request->validate([
        'cliente_id' => 'required',
        'habitacion_id' => 'required',
        'fecha_entrada' => 'required',
        'fecha_salida' => 'required'
    ],[
        'cliente_id.required' => 'Seleccione un cliente',
        'habitacion_id.required' => 'Seleccione una habitacion',
        'fecha_entrada.required' => 'Ingrese fecha de entrada',
        'fecha_salida.required' => 'Ingrese fecha de salida'
    ]);

    Reserva::create([
        'cliente_id' => $request->cliente_id,
        'habitacion_id' => $request->habitacion_id,
        'fecha_entrada' => $request->fecha_entrada,
        'fecha_salida' => $request->fecha_salida
    ]);

    return redirect('/reservas');
    }

    public function edit($id)
    {
        $reserva = Reserva::find($id);

        $clientes = Cliente::all();
        $habitaciones = Habitacion::all();

        return view('reservas.edit', compact('reserva', 'clientes', 'habitaciones'));
    }

    public function update(Request $request, $id)
    {
        $reserva = Reserva::find($id);

        $reserva->update([
            'cliente_id' => $request->cliente_id,
            'habitacion_id' => $request->habitacion_id,
            'fecha_entrada' => $request->fecha_entrada,
            'fecha_salida' => $request->fecha_salida
        ]);

        return redirect('/reservas');
    }

    public function destroy($id)
    {
        $reserva = Reserva::find($id);

        $reserva->delete();

        return redirect('/reservas');
    }
}