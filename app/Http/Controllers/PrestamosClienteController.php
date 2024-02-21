<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Periodicidad;
use Illuminate\Http\Request;
use App\Models\PrestamosCliente;


class PrestamosClienteController extends Controller
{
    //
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    
    public function prestamos($id)
    {   
        //
        $cliente = Clientes::find($id);
        $prestamosCliente = PrestamosCliente::where('cliente_id', $id)->get();
        return view('prestamos.prestamos', compact('prestamosCliente','cliente'));

    }

}
