@extends('master2')
   @section('content')

<div class="container">
<h1> Registro de Vuelos </h1>
    <form action="{{ url('vuelos/registrar') }}" method="POST">
        @csrf
        
        <label for="idVuelo">ID</label>
        <input type="text" id='idVuelo' name='idVuelo' class="form-control" required> <br> <br>

        

        <label for="idRuta"> Origen</label> 
        <select class="custom-select" id="idRuta" name="idRuta">
            @foreach($ruta as $c)
            <option value="{{$c->origen}}">{{$c->id}}</option>
            
            @endforeach
        </select>
        

        <label for="fecha">Fecha </label>
        <input type="date" id='fecha' name='fecha' class="form-control" required> <br> <br>

        <label for="horaSal">Hora Salida </label>
        <input type="text" id='horaSal' name='horaSal' class="form-control" required> <br> <br>


        <label for="horaLle">Hora Llegada</label>
        <input type="text" id='horaLle' name='horaLle' class="form-control" required> <br> <br>

        

        
    
        <br> <br>
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
@stop