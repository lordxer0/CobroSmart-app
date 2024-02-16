<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $clientes = Clientes::all();
        return view('clientes.clientes',compact('Clientes'));
    }
    
    public function guardarNuevoCliente(Request $Request)
    {   
        Clientes::updateOrCreate(
            ["id" => $Request->input('id', null)],
            $Request->all()
        );
        return redirect()->route('Clientes');
    }

}
