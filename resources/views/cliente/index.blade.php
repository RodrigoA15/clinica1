@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-dark table-responsive table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Celular </th>
            <th scope="col">Direccion</th>
            <th scope="col">Acciones</th>


          </tr>
        </thead>
        <tbody>
         @foreach ($cliente as $clientes)
         <tr>
            <th scope="row">{{$clientes->id}}</th>
            <th scope="col">{{$clientes->cedula_cliente}}</th>

            <td>{{$clientes->nombre_cliente}}</td>
            <td>{{$clientes->apellido_cliente}}</td>
            <td>{{$clientes->correo_cliente}}</td>
            <td>{{$clientes->celular_cliente}}</td>
            <td>{{$clientes->direccion_cliente}}</td>

            <td>

                <a href="{{route('clientes.edit', $clientes)}}" class="btn btn-warning">Editar</a>
                <form action="{{route('clientes.destroy', $clientes)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Eliminar</button>

                </form>
            </td>
          
          </tr>
         @endforeach
          
        </tbody>
      </table>
</div>
    
@endsection