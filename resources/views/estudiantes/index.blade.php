@extends('layouts.app')

@section('titulo', 'Estudiantes')

@section('contenido')
<div class="p-4">
    <a href="/estudiantes/create" class="btn btn-info">Crear</a>
</div>


<br>
<h3 class="text-danger">Listado de Estudiantes Inscritos</h3>
<br>
<div class="row">
    @foreach ($estudiantes as $estudiante )
    <div class="col-sm">
        <img width="50px" height="50px" src="{{ Storage::url($estudiante->imagen) }}" alt="">
        <div class="card-body text-white">
            <h5 class="card-title">{{$estudiante->nombre}}</h5>
            <h5 class="card-title">{{$estudiante->apellido}}</h5>
            <p class="card-text">{{$estudiante->curso}}</p>
        </div>
        <a href="/estudiantes/{{$estudiante->id}}" class="btn btn-success">Ver más</a>
    </div>

    @endforeach
</div>

@endsection
