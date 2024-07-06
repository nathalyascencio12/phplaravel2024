@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detalle del Docente</h1>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $docente->nombre }}" disabled>
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="apellido" value="{{ $docente->apellido }}" disabled>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ $docente->email }}" disabled>
    </div>
    <a href="{{ route('docentes.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
