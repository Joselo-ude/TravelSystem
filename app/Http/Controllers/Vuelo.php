<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelos;
use App\Models\Rutas;

class Vuelo extends Controller
{
    public function index(){
        // Consultar clientes con Eloquent
        $vue = Vuelos::all();   
        return view('vuelo.detalle',['vue' => $vue] );
    }
    public function index2(){
        // Consultar clientes con Eloquent
        $vue = Vuelos::all();   
        return view('visualizar.detalleCompra',['vue' => $vue] );
    }
   
   

    public function form_registro()  {
        $ruta = Rutas::all();
    return view('vuelo.form_registro', compact('ruta'));
        
    }


    public function registrar(Request $request) {
        $vue = new Vuelos();
        $vue->id = $request->input('idVuelo');
        $vue->id_ruta = $request->input('idRuta');
        $vue->Fecha = $request->input('fecha');
        $vue->hora_llegada = $request->input('horaSal');
        $vue->hora_Salida = $request->input('horaLle');
        
       
        
        $vue->save();
        return redirect()->route('listado_Vuelos');
    }

    public function form_actualiza($id){
        // Funcion que genera el formulario de actualizacion con base en la categoria seleccionada
        $vue = Vuelos::findOrFail($id);
        $ruta = Rutas::all();
        return view('vuelo.form_actualiza', compact('vue','ruta'));
        
    }

    public function actualizar(Request $request, $id)
    {
        $vue = Vuelos::findOrFail($id);
     
        $vue->id_ruta = $request->input('idRuta');
        $vue->Fecha = $request->input('fecha');
        $vue->hora_llegada = $request->input('horaSal');
        $vue->hora_Salida = $request->input('horaLle');
        
        
       
        $vue->save();
        return redirect()->route('listado_Vuelos');  
    }

    public function eliminar($id)
    {
        $c = Vuelos::findOrFail($id);
        $c->delete();
        return redirect()->route('listado_Vuelos');
    }
}
