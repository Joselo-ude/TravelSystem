<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rutas;

class Ruta extends Controller
{
    public function index(){
        // Consultar clientes con Eloquent
        $ruta = Rutas::all();   
        return view('rutas.detalle',['ruta' => $ruta] );
    }

    public function form_registro()  {
        return view('rutas.form_registro');
    }


    public function registrar(Request $request) {
        $category = new Rutas();
        $category->id = $request->input('idRuta');
        $category->origen = $request->input('origenRuta');
      
        
        
        $category->save();
        return redirect()->route('listado_Ruta');
    }

    public function form_actualiza($id){
        // Funcion que genera el formulario de actualizacion con base en la categoria seleccionada
        $ruta = Rutas::findOrFail($id);
        return view ('rutas.form_actualiza', compact('ruta'));
    }

    public function actualizar(Request $request, $id)
    {
        $ruta = Rutas::findOrFail($id);
        $ruta->origen = $request->input('origenRuta');
        ;
        
        $ruta->save();
        return redirect()->route('listado_Ruta');  
    }

    public function eliminar($id)
    {
        $ruta = Rutas::findOrFail($id);
        $ruta->delete();
        return redirect()->route('listado_Ruta');
    }
}
