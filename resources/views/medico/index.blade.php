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
            <th scope="col">Especialidad</th>

            <th scope="col">Acciones</th>


          </tr>
        </thead>
        <tbody>
         @foreach ($medico as $medicos)
         <tr>
            <th scope="row">{{$medicos->id}}</th>
            <th scope="col">{{$medicos->cedula_medico}}</th>

            <td>{{$medicos->nombre_medico}}</td>
            <td>{{$medicos->apellido_medico}}</td>
            <td>{{$medicos->correo_medico}}</td>
            <td>{{$medicos->celular_medico}}</td>
            <td>{{$medicos->direccion_medico}}</td>
            <td>{{$medicos->direccion_medico}}</td>


            <td>

                <a href="{{route('medicos.edit', $medicos)}}" class="btn btn-warning">Editar</a>
                <form action="{{route('medicos.destroy', $medicos)}}" method="post">
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