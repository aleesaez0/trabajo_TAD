@extends('layouts.app')

@section('title', 'Editar Libro')

@section('content')
    <div class="container">
        <h1 class="my-4">Editar Libro</h1>

        <form action="{{ route('libros.update', $libro->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $libro->titulo }}" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control" value="{{ $libro->autor }}" required>
            </div>
            <div class="mb-3">
                <label for="prestado" class="form-label">Prestado:</label>
                <input type="checkbox" name="prestado" id="prestado" value="1" {{ $libro->prestado == 1 ? 'checked' : '' }}>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('libros.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>
@endsection