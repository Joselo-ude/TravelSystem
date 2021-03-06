@extends('master')
   @section('content')

<h1> Listado de Rutas </h1> <br>

<table class="table" border='2'>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Origen </th>
            
           
            <th scope="col" colspan=2 > <div align="center"> Opciones </div></th>
        </tr>
    </thead>
    <tbody>
    @foreach($ruta as $c)
            <tr>
                <td> {{ $c->id }} </td>
                <td> {{ $c->origen }} </td>
               
                

                <td> <a href="{{route('form_actualizaRuta',$c->id)}}" class="btn btn-success">Editar</a></td>
			    <td> <a href="{{route('elimina_Ruta', $c->id)}}" class="btn btn-danger">Eliminar</a> </td>
            </tr>
    @endforeach
    </tbody>
</table


@stop