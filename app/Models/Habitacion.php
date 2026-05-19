<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'tipo',
        'precio',
        'estado'
    ];

    public function reservas()
    {
    return $this->hasMany(Reserva::class);
    }
}
