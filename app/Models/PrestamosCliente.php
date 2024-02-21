<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestamosCliente extends Model
{
    use HasFactory;

    public function prestamos()
    {
        return $this->belongsTo(Prestamos::class, 'prestamo_id','id');
    }

}
