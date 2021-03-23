@extends('master')
   @section('content')

<h1> Listado de Rutas </h1> <br>

<table class="table" border='2'>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Origen </th>
            
           
            
        </tr>
    </thead>
    <tbody>
    @foreach($ruta as $c)
            <tr>
                <td> {{ $c->id }} </td>
                <td> {{ $c->origen }} </td>
               
                

               
            </tr>
    @endforeach
    </tbody>
</table


@stop