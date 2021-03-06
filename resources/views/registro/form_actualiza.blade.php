@extends('master')
   @section('content')

<div class="container">
<h1> Actualizacion de Clientes </h1>
    <form action="{{route('actualiza_cliente', $cliente->id) }}" method="POST">
        @csrf

        <label for="idCli">ID </label>
        <input type="null" id='idCli' name='idCli' class="form-control" required value="{{$cliente->id}}"> <br> <br>

        <label for="cedulaCli">Cedula </label>
        <input type="text" id='cedulaCli' name='cedulaCli' class="form-control" required value="{{$cliente->cedula}}"> <br> <br>
       
        <label for="nombreCli">Nombres</label>
        <input type="text" id='nombreCli' name='nombreCli' class="form-control" required value="{{$cliente->nombre}}"> <br> <br>

        <label for="apellidosCli">Apellidos </label>
        <input type="text" id='apellidosCli' name='apellidosCli' class="form-control" required value="{{$cliente->apellidos}}"> <br> <br>
        

        <label for="correoCli">Correo</label>
        <input type="text" id='correoCli' name='correoCli' class="form-control" required value="{{$cliente->correo}}"> <br> <br>

        
        <label for="genero">Genero </label>
        <select class="form-select" aria-label="Default select example" name="genero">
            <option value="F" > Femenino </option>
            <option value="M" > Masculino </option>

        </select>

        
    
        <br> <br>
        <button type="submit" class="btn btn-success">Actualizar </button>

    </form>
@stop