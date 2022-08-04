@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Citas</h2>
        <form action="{{route('citas.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="fecha_cita" name="fecha_cita">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hora</label>
                <input type="time" class="form-control" id="hora_cita" name="hora_cita">
              </div>
            

              <div class="mb-3">
                <select class="form-control" name="" id="">
                    <option value="">Especialidad</option>
                     @foreach ($servicio as $servicios)
                        <option value="{{$servicios->id}}">{{$servicios->nombre_servicio}}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <select class="form-control" name="" id="">
                    <option value="">Medico</option>
                     @foreach ($medico as $medicos)
                        <option value="{{$medicos->id}}">{{$medicos->nombre_medico}}</option>
                    @endforeach
                </select>
              </div>
             
              


          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
