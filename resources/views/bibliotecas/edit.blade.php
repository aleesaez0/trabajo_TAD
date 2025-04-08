@extends('layouts.app')

@section('title', 'Editar Biblioteca')

@section('content')
    <div class="container">
        <h1 class="my-4">Editar Biblioteca</h1>

        <form action="{{ route('bibliotecas.update', $biblioteca->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $biblioteca->nombre }}"
                    required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>
@endsection