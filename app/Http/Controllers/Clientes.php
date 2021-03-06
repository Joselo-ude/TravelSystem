<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class Clientes extends Controller
{
    public function index(){
        // Consultar clientes con Eloquent
        $clientes = Cliente::all();   
        return view('registro.detalle',['clientes' => $clientes] );
    }

    public function form_registro()  {
        return view('registro.form_registro');
    }


    public function registrar(Request $request) {
        $cliente = new Cliente();
        $cliente->id = $request->input('idCli');
        $cliente->cedula = $request->input('cedulaCli');
        $cliente->nombres = $request->input('nombreCli');
        $cliente->apellidos = $request->input('apellidosCli');
        $cliente->correo = $request->input('correoCli');
        
        $cliente->genero = $request->input('genero');
        
        $cliente->save();
        return redirect()->route('listado_clientes');
    }

    public function form_actualiza($id){
        // Funcion que genera el formulario de actualizacion con base en la categoria seleccionada
        $cliente = Cliente::findOrFail($id);
        return view ('registro.form_actualiza', compact('cliente'));
    }

    public function actualizar(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->cedula = $request->input('cedulaCli');
        $cliente->nombres = $request->input('nombreCli');
        $cliente->apellidos = $request->input('apellidosCli');
        $cliente->correo = $request->input('correoCli');
        
        $cliente->genero = $request->input('genero');
       
        $cliente->save();
        return redirect()->route('listado_clientes');  
    }

    public function eliminar($id)
    {
        $c = Cliente::findOrFail($id);
        $c->delete();
        return redirect()->route('listado_clientes');
    }
}
