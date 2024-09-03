@extends('layouts.app')

@section('titulo', 'Editar Estudiante')

@section('contenido')
<div class="container col-md-6 bg-dark text-light p-4">
    <div>
    <h1 class="text-center">Agregar un Estudiante</h1>
    </div>
<form action="/estudiantes" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
        <input type="text" class="form-control bg-transparent text-light" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="col-sm-4 col-form-label">Apellido</label>
        <input type="text" class="form-control bg-transparent text-light" id="apellido" name="apellido">
    </div>
    <div class="mb-3">
        <label for="edad" class="col-sm-4 col-form-label">Edad</label>
        <input type="number" class="form-control bg-transparent text-light" id="edad" name="edad">
    </div>
    <div class="mb-3">
        <label for="curso" class="col-sm-4 col-form-label">Curso</label>
        <select name="curso" id="curso" class="form-control bg-transparent text-light">
            <option value="">Elija una opción...</option>
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="javascript">JavaScript</option>
            <option value="java">Java</option>
            <option value="phyton">Phyton</option>
            <option value="c#">C#</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="imagen" class="col-sm-4 col-form-label">Imágen de Perfil</label>
        <input type="file" name="imagen" id="imagen">
    </div>
    <div class="row">
        <div class="offset-sm-4 col-md-4 d-grid">
            <button type="submit" class="btn btn-outline-primary btn-small">Enviar</button>
        </div>
    </div>
</div>
</form>
@endsection
