@extends('plantilla')

@section('titulo', "Crear Usuario")

@section('contenido')
<br><br><br>
<h1>Registro de nuevo Usuario</h1>

<form action="{{ url('usuarios/nuevoUs') }}" method="POST">
	{{ csrf_field() }}

	<input type="text" placeholder="Nombre" name="name" 
	value="{{ old('name') }}" required><br>
	<input type="email" placeholder="Email" name="email" 
	value="{{ old('email') }}" required><br>
	<input type="password" placeholder="Password" name="password" required><br>
	<select name="prof">
		<option value="1">Email</option>
		<option value="2">Radio</option>
		<option value="3">Internet</option>
		<option value="4">Periodico</option>
		<option value="5">Pagina Web</option>
		<option value="6">Recomendacion</option>
		<option value="7">Beca</option>
	</select>
	<button type="submit">Crear usuario</button>
</form>


<a href="{{ route('usuarios.index') }}">Regresar</a>

@endsection()