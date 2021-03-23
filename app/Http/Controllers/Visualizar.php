<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Compra;
class Visualizar extends Controller
{
    //public function index(){
        // Consultar clientes con Eloquent
       // $compra = Compra::all();   
     //   return view('visualizar.detalleCompra',['compra' => $compra] );
   // }

    public function registro()  {
        return view('visualizar.Comprar');
    }


    public function registrar(Request $request) {
        $compra = new Compra();
        $compra->id = $request->input('idCli');
        $compra->id_vuelo = $request->input('cedulaCli');
        $compra->nombres = $request->input('nombreCli');
        $compra->apellidos = $request->input('apellidosCli');
        $compra->correo = $request->input('correoCli');
        
        $compra->genero = $request->input('genero');
        
        $compra->save();
        return redirect()->route('listado_Compra');
    }
}
