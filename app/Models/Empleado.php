<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'apellido',
        'genero',
        'fecha_nacimiento',
        'telefono',
        'tipo_sangre',
        'direccion',
        'contacto',
        'creado_en',
        'actualizado_en',
        'estado',
        'numero_ci',
        'correo',
        'foto',
    ];
}
