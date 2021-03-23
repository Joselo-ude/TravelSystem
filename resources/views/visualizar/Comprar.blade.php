@extends('master')
   @section('content')

<div class="container">
<h1> Compra Tiquete </h1>
    <form action="{{ url('compras/registrar') }}" method="POST">
        @csrf
        
        <label for="idCompra">ID</label>
        <input type="text" id='idCompra' name='idCompra' class="form-control" required> <br> <br>

        <label for="idVuelo">vuelo #</label>
        <input type="text" id='idVuelo' name='idVuelo' class="form-control" required> <br> <br>
        
        <label for="idcliente">Cliente</label>
        <input type="text" id='idcliente' name='idcliente' class="form-control" required> <br> <br>

        

        
        <label for="horaSal">Hora Salida </label>
        <input type="text" id='horaSal' name='horaSal' class="form-control" required> <br> <br>


        <label for="horaLle">Hora Llegada</label>
        <input type="text" id='horaLle' name='horaLle' class="form-control" required> <br> <br>

        <label for="fecha">Fecha compra </label>
        <input type="date" id='fecha' name='fecha' class="form-control" required> <br> <br>


        
    
        <br> <br>
        <button type="submit" class="btn btn-success">Comprar </button>

    </form>
@stop