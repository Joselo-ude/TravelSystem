@extends('master')
   @section('content')

<div class="container">
<h1> Registro de Clientes </h1>
    <form action="{{ url('clientes/registrar') }}" method="POST">
        @csrf
        
       

        <label for="cedulaCli">Cedula </label>
        <input type="text" id='cedulaCli' name='cedulaCli' class="form-control" required> <br> <br>

        <label for="nombreCli">Nombres</label>
        <input type="text" id='nombreCli' name='nombreCli' class="form-control" required> <br> <br>

        <label for="apellidosCli">Apellidos</label>
        <input type="text" id='apellidosCli' name='apellidosCli' class="form-control" required> <br> <br>
    
        <label for="genero">Genero </label>
        <select class="form-select" aria-label="Default select example" name="genero">
            <option value="F" > Femenino </option>
            <option value="M" > Masculino </option>
        </select>
        <br> <br>
        <label for="correoCli">Correo </label>
        <input type="text" id='correoCli' name='correoCli' class="form-control" required> <br> <br>

        

        
    
        <br> <br>
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
@stop