@extends('plantilla')

@section('titulo', "Pagina de usuarios")

@section('contenido')
  <br><br><br>

  @if($usuarios->isEmpty())
    <span>No hay usuarios</span>
  @else
  <table class="table table-dark">
    <thead>
      <tr>
        <td>Nombre</td>
        <td>Email</td>
        <td>Ingreso_id</td>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $usuario)
      <tr>
        <td>{{ $usuario->name }}</td>
        <td>{{ $usuario->email }}</td>
        <td>{{ $usuario->controlador }}</td>
        <td><a href="{{ url("/usuarios/$usuario->id/$usuario->foraneas_id") }}"><button class="btn btn-primary">Ver detalles</button></a></td>
        <td>
          <form name="form" action="{{ route('eliminar.usuario', $usuario) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type=submit 
            onclick="return confirm('Quieres eliminar este usuario?')"> Eliminar usuario </button>
          </form> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endif
<br>
  <a href="{{ route('crear.usuario') }}"><button class="btn btn-success">Crear Usuario</button></a>
<br> 
<a href="{{ url('/contact')  }}">Contactanos</a>

@endsection

