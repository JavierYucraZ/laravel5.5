@extends('plantilla')

@section('titulo', "Usuario{$indiceUsuario->id}/{$indiceIngreso->id}")

@section('contenido')
<br><br><br>
<h1>Usuario # {{ $indiceUsuario->id }}</h1>

<p>Nombre del usuario : {{ $indiceUsuario->name }}</p>
<p>Correo Electronico : {{ $indiceUsuario->email }}</p>
<p>Medio de Ingreso : {{ $indiceIngreso->controlador }}</p>

<a href="{{ url()->previous() }}">Regresar</a>
<br>
<a href="{{ url("/usuarios/$indiceUsuario->id/editar") }}">Editar Usuario</a>

@endsection()