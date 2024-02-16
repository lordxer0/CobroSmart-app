<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'usuario_id',
        'nombres',
        'apellidos',
        'tipo_documento',
        'identificacion',
        'telefono',
        'celular',
        'direccion',
        'observaciones'
    ];

}
