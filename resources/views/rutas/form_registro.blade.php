@extends('master2')
   @section('content')

<div class="container">
<h1> Registro de Rutas </h1>
    <form action="{{ url('rutas/registrar') }}" method="POST">
        @csrf
        
        <label for="idRuta">ID</label>
        <input type="text" id='idRuta' name='idRuta' class="form-control" required> <br> <br>

        <label for="origenRuta">Origen - Destino </label>
        <input type="text" id='origenRuta' name='origenRuta' class="form-control" required> <br> <br>

        

        
    
        <br> <br>
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
@stop