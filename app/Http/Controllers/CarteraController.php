<?php

namespace App\Http\Controllers;

use App\Models\Cartera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarteraController extends Controller
{
    //
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    // DEBE RETORNAR ALERTAS POR CADA GESTION QUE SE REALICE EN LA BASE DE DATOS.
    
    public function index()
    {   
        $carteras = Cartera::all();
        return view('carteras.carteras',compact('carteras'));
    }

    public function crearCartera()
    {
        return view('carteras.crearCartera');
    }

    public function editarCartera($id)
    {   
        $cartera = Cartera::Find($id);
        return view('carteras.crearCartera',compact('cartera'));
    }

    public function guardarCartera(Request $Request){
        
        DB::beginTransaction();
       
        try {
            if(!empty($Request->all()['id'])){
                $cartera = Cartera::Find($Request->all()['id']);
            }else{
                $cartera = new Cartera;
                $cartera->total_cartera = 0 ;
            }
            $cartera->nombre = $Request->all()['nombres'] ;
            
            $cartera->save();
           
            $mensaje = 'Proceso realizado con exito';
            
            DB::commit();
        } catch (\Throwable $e) {
            $mensaje = 'Fallo la Transaccion';
            DB::rollback(); // test with comment, and without comment, check DB for results 😉
        }
       
        return redirect()->route('carteras')->with('msg', $mensaje);
    }

    public function detalleCartera($id){
        
    }

}
