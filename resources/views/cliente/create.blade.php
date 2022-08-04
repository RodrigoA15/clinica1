@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('clientes.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Cedula</label>
              <input type="text" class="form-control" id="cedula_cliente" name="cedula_cliente">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido_cliente" name="apellido_cliente">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo_cliente" name="correo_cliente">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular_cliente" name="celular_cliente">
              </div>
              <div class="mb-3">
              <select class="form-control" name="estado" id="estado">
                <option value="">Estado</option>
                @foreach ($cliente as $clientes)
                    <option value="{{$clientes->id}}">{{$clientes->id}}</option>
                @endforeach
              </select>
              </div>
           
        


          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection