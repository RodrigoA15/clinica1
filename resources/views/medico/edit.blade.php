@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('medicos.update', $medico)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Cedula</label>
              <input type="number" class="form-control" id="cedula_medico" name="cedula_medico" value="{{$medico->cedula_medico}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_medico" name="nombre_medico" value="{{$medico->nombre_medico}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido_medico" name="apellido_medico" value="{{$medico->apellido_medico}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo_medico" name="correo_medico" value="{{$medico->correo_medico}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular_medico" name="celular_medico" value="{{$medico->celular_medico}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion_medico" name="direccion_medico" value="{{$medico->direccion_medico}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Especialidad</label>
                <input type="text" class="form-control" id="especialidad_medico" name="especialidad_medico" value="{{$medico->especialidad_medico}}">
              </div>
        


          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection