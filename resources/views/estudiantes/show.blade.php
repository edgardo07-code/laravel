@extends('layouts.app')

@section('titulo', 'Estudiantes')

@section('contenido')
<div class="d-flex gap-3 p-4">
<img width="50px" height="50px" src="{{Storage::url($estudiante->imagen)}}" alt="">

<div>
<span class="text-white">Nombre:</span>
<br>
<h3 class="text-white">{{$estudiante->nombre}} {{$estudiante->apellido}}</h3>
</div>
<div>
<span class="text-white">Edad:</span>
<br>
<h3 class="text-white">{{$estudiante->edad}}</h3>
</div>
<br>

<div>
    <span class="text-white">Inscrito a:</span>
    <ul class="list-group ">
        <li class="list-group-item bg-none active" >{{$estudiante->curso}}</li>
    </ul>
</div>
</div>

@endsection
