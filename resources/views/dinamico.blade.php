@extends('plantilla')

@section('titulo', "Usuario{$indice->id}")

@section('contenido')
<br><br><br>
<h1>Usuario # {{ $indice->id }}</h1>

<p>Nombre del usuario : {{ $indice->name }}</p>
<p>Correo Electronico : {{ $indice->email }}</p>

<a href="{{ url()->previous() }}">Regresar</a>
<br>
<a href="{{ url("/usuarios/$indice->id/editar") }}">Editar Usuario</a>

@endsection()