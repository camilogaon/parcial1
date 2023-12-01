@extends('adminlte::page')

@section('title', 'Libros')

@section('content_header')
    <h1>Listado de Libros</h1>
@stop

@section('content')

    <table class="table">
        <thead>
            <tr>
            <th scope="col">ISBN</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Genero Literario</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Observacion</th>
            <th scope="col">foto</th>
            <th scope="col">Area</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp

            @foreach($libros as $p)
            <tr>

                <td>{{$p->ISBN}}</td>
                <td>{{$p->nombre}}</td>
                <td>{{$p->descripcion}}</td>
                <td>{{$p->generoLiterario}}</td>
                <td>{{$p->precioUnitario}}</td>
                <td>{{$p->observacion}}</td>
                <td>{{$p->foto}}</td>
                <td>{{$p->area}}</td>
                @php
                $i= $i+ 1;
                @endphp
            </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

