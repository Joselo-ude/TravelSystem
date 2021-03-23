@extends('master')
   @section('content')

<h1> Listado de Clientes </h1> <br>

<table class="table" border='2'>
    <thead>
        <tr>
            
            <th scope="col">Identificación </th>
            <th scope="col">Nombres </th>
            <th scope="col">Apellidos </th>
            <th scope="col">Correo</th>
            <th scope="col">Genero </th>
            <th scope="col" colspan=2 > <div align="center"> Opciones </div></th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $c)
            <tr>
                
                <td> {{ $c->cedula }} </td>
                <td> {{ $c->nombres }} </td>
                <td> {{ $c->apellidos }} </td>
                <td> {{ $c->correo}}</td>

                @if($c->genero == 'F')
                    <td> Femenino </td>
                @else
                    <td> Masculino </td>
                @endif

                <td> <a href="{{route('form_actualizaCli',$c->cedula)}}" class="btn btn-success">Editar</a></td>
			    <td> <a href="{{route('elimina_Cliente', $c->cedula)}}" class="btn btn-danger">Eliminar</a> </td>
            </tr>
    @endforeach
    </tbody>
</table


@stop