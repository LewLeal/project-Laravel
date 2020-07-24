@extends('usuarios.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Proyecto Prueba</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('usuarios.create') }}"> Crear nuevo usuario</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>RUT</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Estado</th>
        </tr>
        @foreach ($usuarios_encontrados as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->rut }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->direccion }}</td>
            
            
            @if ($usuario->estado == 1 )
                <td style="background-color:green">Activo</td>
            @else
            <td style="background-color:red">Inactivo</td>
            @endif
            
        </tr>
        @endforeach
    </table>
  
   
      
@endsection