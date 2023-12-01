@extends('adminlte::page')

@section('title', 'Libros')

@section('content_header')
    <h1>Listado de Libros</h1>
@stop

@section('content')

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id Area</th>
            <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @php
            @endphp

            @foreach($areas as $p)
            <tr>
                <td>{{$p->idArea}}</td>
                <td>{{$p->descripcion}}</td>
                @php
                @endphp
            </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

