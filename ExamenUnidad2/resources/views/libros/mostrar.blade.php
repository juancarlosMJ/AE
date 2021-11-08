@extends('layout.plantilla')
@section('title','Usuarios' . $libro)
@section('contenido')
<div class="row mt-3">
    <div class="col">
        <button type="button" class="btn btn-dange"><a href="{{route('libros.index')}}"></a></button>
     
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="jumbotron jumbotron-fluid">
            <div class="container"style="color:blueviolet">
                <h1 class="display-4 text-center">Titulo del libro: {{$libro->titulo}}</h1>
                <p class="lead">
                <div class="card mt-3" style="color:rgb(43, 107, 226)">
                    <p class="text-center mt-2"><h1> DATOS.</h1></p>
                    <div class="card-body" style="color:rgb(33, 64, 167)">
                        <p>Autor:{{$libro->autor}}</p>
                        <p>Editorial:{{$libro->editorial}}</p>
                        <p>Fecha:{{$libro->fecha_publicacion}}</p>
                        <p>Numero de paginas:{{$libro->numero_pagina}}</p>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection