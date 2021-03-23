@extends('master')
   @section('content')

<h1> Listado de Vuelos </h1> <br>

<table class="table" border='2'>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ruta </th>
            <th scope="col">Fecha </th>
            <th scope="col">Hora salida </th>
            <th scope="col">Hora llegada</th>
           
            <th scope="col" colspan=2 > <div align="center"> Opciones </div></th>
        </tr>
    </thead>
    <tbody>
    @foreach($vue as $c)
            <tr>
                <td> {{ $c->id }} </td>
                <td> {{ $c->id_ruta}} </td>
                <td> {{ $c->Fecha }} </td>
                <td> {{ $c->hora_salida }} </td>
                <td> {{ $c->hora_llegada }} </td>
                

                <td> <a href="{{route('form_registroC',$c->id)}}" class="btn btn-success">Comprar</a></td>
			    
            </tr>
    @endforeach
    </tbody>
</table


@stop