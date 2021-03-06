<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Travel;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Ruta;
use App\Http\Controllers\Vuelo;

use App\Models\Rutas;
use App\Models\Cliente;
use App\Models\Vuelos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Travel::class,'getIndex'] );

///Clientes

Route::get('clientes', [Clientes::class, 'index'])
	->name('listado_clientes');

Route::get('clientes/registrar', [Clientes::class, 'form_registro'])
	->name('form_registroCli');

Route::post('clientes/registrar', [Clientes::class, 'registrar'])
	->name('registrar_cliente');

Route::get('clientes/actualizar/{id}', [Clientes::class, 'form_actualiza'])
	->name('form_actualizaCli');

Route::post('clientes/actualizar/{id}', [Clientes::class, 'actualizar'])
	->name('actualiza_cliente');

Route::get('clientes/eliminar/{id}', [Clientes::class, 'eliminar'])
	->name('elimina_Cliente');

//RUTAS

Route::get('rutas', [Ruta::class, 'index'])
	->name('listado_Ruta');

Route::get('rutas/registrar', [Ruta::class, 'form_registro'])
	->name('form_registroRuta');

Route::post('rutas/registrar', [Ruta::class, 'registrar'])
	->name('registrar_Ruta');

Route::get('rutas/actualizar/{id}', [Ruta::class, 'form_actualiza'])
	->name('form_actualizaRuta');

Route::post('rutas/actualizar/{id}', [Ruta::class, 'actualizar'])
	->name('actualiza_Ruta');

Route::get('rutas/eliminar/{id}', [Ruta::class, 'eliminar'])
	->name('elimina_Ruta');

//VUELOS
Route::get('vuelos', [Vuelo::class, 'index'])
	->name('listado_Vuelo');

Route::get('vuelos/registrar', [Vuelo::class, 'form_registro'])
	->name('form_registroVuelo');

Route::post('vuelos/registrar', [Vuelo::class, 'registrar'])
	->name('registrar_Vuelo');

Route::get('vuelos/actualizar/{id}', [Vuelo::class, 'form_actualiza'])
	->name('form_actualizaVuelo');

Route::post('vuelos/actualizar/{id}', [Vuelo::class, 'actualizar'])
	->name('actualiza_Vuelo');

Route::get('vuelos/eliminar/{id}', [Vuelo::class, 'eliminar'])
	->name('elimina_Vuelo');
