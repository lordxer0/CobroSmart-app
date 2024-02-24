<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Prestamos;
use App\Models\Periodicidad;
use App\Models\PrestamosCliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use NumberFormatter;

class PrestamosController extends Controller
{
    //
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $prestamos = Prestamos::all();
        return view('prestamos.prestamos',compact('prestamos'));
    }
    
    public function guardarPrestamo(Request $Request)
    {   
        DB::beginTransaction();
       
        try {
            $Prestamo = new Prestamos;
            
            $Prestamo->valor_prestamo = str_replace('.','',mb_substr($Request->all()['Valor_prestamo'],2));
            $Prestamo->intereses = $Request->all()['intereses']; 
            $Prestamo->valor_cuota = str_replace('.','',mb_substr($Request->all()['valor_cuota'],2));;
            $Prestamo->num_cuotas = $Request->all()['numero_cuotas'];
            $Prestamo->periodicidad_id = $Request->all()['periodicidad'];
    
            $Prestamo->save();
            
            $PrestamosCliente = new PrestamosCliente;
    
            $PrestamosCliente->cliente_id = $Request->all()['user'];
            $PrestamosCliente->prestamo_id = $Prestamo->id;
            $PrestamosCliente->estado = 1;
            $PrestamosCliente->estado_prestamo_id = 1;
    
            $PrestamosCliente->save();

            $mensaje = 'Proceso realizado con exito';
            
            DB::commit();
        } catch (\Throwable $e) {
            $mensaje = 'Fallo la Transaccion';
            DB::rollback(); // test with comment, and without comment, check DB for results 😉
        }
       
        return redirect()->route('prestamos',['id' => $Request->all()['user']])->with('msg', $mensaje);

    }

    public function prestamos($id)
    {   
        $cliente = Clientes::find($id);
        $periodicidades = Periodicidad::all();
        
        return view('prestamos.crearPrestamo', compact('cliente','periodicidades'));
    }

}
