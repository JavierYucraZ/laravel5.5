@extends('plantilla')
@section('titulo', 'Contacto')

@section('contenido')

	<p>Recibiste un mensaje de: {{ $mensaje['name'] }}</p>
	<p><strong>Email : </strong>{{ $mensaje['email'] }}</p>
	<p><strong>Asunto : </strong> {{ $mensaje['subject'] }}</p>
	<p><strong>Contenido : </strong> {{ $mensaje['content'] }}</p>

@endsection()