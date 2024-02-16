<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Clientes;

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
        return view('clientes.clientes',compact('clientes'));
    }
    
    public function guardarNuevoCliente(Request $Request)
    {   
        $usuarioAutenticado = Auth::user();
        $guardado = $Request->all();
        
        $guardado['usuario_id'] = $usuarioAutenticado->id;

        Clientes::updateOrCreate(
            ["id" => $Request->input('id', null),"identificacion" => $Request->input('identificacion', null)],
            $guardado
        );

        return redirect()->route('clientes');
    }

    public function editarCliente($id)
    {   
        
        $cliente = Clientes::findOrFail($id);
        return view('clientes.crearCliente', compact('cliente'));

    }

}
