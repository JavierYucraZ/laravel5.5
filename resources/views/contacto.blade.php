@extends('plantilla')

@section('titulo', "Pagina de Contacto")

@section('contenido')

<h1>Formulario de Envio de Correo Electronico</h1>
<form method="POST" action="{{ url('/contact') }}">
  {{ csrf_field() }}
  <input type="text" name="name" placeholder="Nombre" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="text" name="subject" placeholder="Asunto" required><br>
  <textarea name="content" placeholder="Su mensaje aca" cols="30" rows="5" required></textarea><br>
  <button type="submit">Enviar Mensaje</button>
</form>

@endsection()