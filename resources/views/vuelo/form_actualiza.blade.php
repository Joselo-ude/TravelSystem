@extends('master')
   @section('content')

<div class="container">
<h1> Actualizacion de Vuelos </h1>
    <form action="{{route('actualiza_Vuelo', $vue->id) }}" method="POST">
        @csrf

        <label for="idVuelo">ID </label>
        <input type="text" id='idVuelo' name='idVuelo' class="form-control" required value="{{$vue->id}}"> <br> <br>

        <label for="idRuta"> Origen</label> 
        <select class="custom-select" id="idRuta" name="idRuta">
            @foreach($ruta as $c)
            <option value="{{$c->id}}">{{$c->origen}}</option>
            
            @endforeach
        </select>

        <label for="fecha">fecha </label>
        <input type="date" id='fecha' name='fecha' class="form-control" required value="{{$vue->fecha}}"> <br> <br>
       
        <label for="horaSal">Hora Salida</label>
        <input type="text" id='horaSal' name='horaSal' class="form-control" required value="{{$vue->hora_salida}}"> <br> <br>

        <label for="horaLle">Hora Llegada</label>
        <input type="text" id='horaLle' name='horaLle' class="form-control" required value="{{$vue->hora_llegada}}"> <br> <br>

       

        
    
        <br> <br>
        <button type="submit" class="btn btn-success">Actualizar </button>

    </form>
@stop