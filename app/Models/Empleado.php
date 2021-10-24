<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'id',
        'foto',
        'fechadealta',
        'nombre',
        'dpi',
        'empresa',
        'puesto',
        'telefono',
        'direccion',
        'igss',
        'docdpi'
    ];
}
