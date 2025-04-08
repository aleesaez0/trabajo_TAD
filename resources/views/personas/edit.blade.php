@extends('layouts.app')

@section('title', 'Editar Persona')

@section('content')
    <div class="container">
        <h1 class="my-4">Editar Persona</h1>

        <form action="{{ route('personas.update', $persona->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $persona->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" value="{{ $persona->edad }}" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>
@endsection