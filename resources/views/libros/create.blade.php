@extends('layouts.app')

@section('title', 'Crear Nuevo Libro')

@section('content')
    <div class="container">
        <h1 class="my-4">Crear Nuevo Libro</h1>

        <form action="{{ route('libros.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="fk_biblioteca">Biblioteca:</label>
                <select class="form-select" name="fk_biblioteca" id="fk_biblioteca" required>
                    @foreach ($bibliotecas as $biblioteca)
                        <option value="{{ $biblioteca->id }}">{{ $biblioteca->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('libros.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>
@endsection