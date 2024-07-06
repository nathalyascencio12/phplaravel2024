@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detalle del Estudiante</h1>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $estudiante->nombre }}" disabled>
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="apellido" value="{{ $estudiante->apellido }}" disabled>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ $estudiante->email }}" disabled>
    </div>
    <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
