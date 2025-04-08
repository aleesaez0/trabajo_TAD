@extends('layouts.app')

@section('title', 'Crear Nueva Persona')

@section('content')
    <div class="container">
        <h1 class="my-4">Crear Nueva Persona</h1>

        <form action="{{ route('personas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>
@endsection