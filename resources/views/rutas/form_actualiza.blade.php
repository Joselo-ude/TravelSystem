@extends('master2')
   @section('content')

<div class="container">
<h1> Actualizacion de Rutas </h1>
    <form action="{{route('actualiza_Ruta', $ruta->id) }}" method="POST">
        @csrf

        <label for="idRuta">ID </label>
        <input type="text" id='idRuta' name='idRuta' class="form-control" required value="{{$ruta->id}}" readonly> <br> <br>

        <label for="origenRuta">Origen - Destino </label>
        <input type="text" id='origenRuta' name='origenRuta' class="form-control" required value="{{$ruta->origen}}"> <br> <br>
       
        
       

        
    
        <br> <br>
        <button type="submit" class="btn btn-success">Actualizar </button>

    </form>
@stop