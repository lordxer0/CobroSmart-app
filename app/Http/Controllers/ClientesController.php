<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function crearCliente()
    {   
        return view('clientes.crearCliente');
    }
    
    public function guardarNuevoCliente(Request $Request)
    {   
        $usuarioAutenticado = Auth::user();
        $guardado = $Request->all();
        
        $guardado['usuario_id'] = $usuarioAutenticado->id;

        $cliente = new Clientes($guardado);

        $cliente->save();

        return redirect()->route('clientes')->with('msg', 'Proceso realizado exitosamente');
    }

    public function editarCliente($id)
    {   
        $cliente = Clientes::findOrFail($id);
        return view('clientes.editarCliente', compact('cliente'));
    }

    public function actualizarCliente(Request $Request)
    {   
        $datos = $Request->all();
        Validator::make($datos, [
            'id' => 'required|numeric',
        ])->validate();

        return redirect()->route('clientes')->with('msg', 'Proceso realizado exitosamente');
    }

    public function verCliente($id)
    {
        $clientes = Clientes::findOrFail($id);
        return view('clientes.verCliente', compact('clientes'));
    }
}
