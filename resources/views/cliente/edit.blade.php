@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('clientes.update', $cliente)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Cedula</label>
              <input type="text" class="form-control" id="cedula_cliente" name="cedula_cliente" value="{{$cliente->cedula_cliente}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" value="{{$cliente->nombre_cliente}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido_cliente" name="apellido_cliente" value="{{$cliente->apellido_cliente}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo_cliente" name="correo_cliente" value="{{$cliente->correo_cliente}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular_cliente" name="celular_cliente" value="{{$cliente->celular_cliente}}" >
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" value="{{$cliente->direccion_cliente}}" >
              </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
