<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    use HasFactory;

    public function prestamosCliente()
    {
        return $this->hasMany(PrestamosCliente::class, 'prestamo_id','id');
    }

    public function periodicidad()
    {
        return $this->belongsTo(Periodicidad::class, 'periodicidad_id','id');
    }

}
