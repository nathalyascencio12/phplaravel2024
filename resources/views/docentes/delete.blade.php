@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Eliminar Docente</h1>
    <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST">
        @csrf
        @method('DELETE')
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
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
@endsection
