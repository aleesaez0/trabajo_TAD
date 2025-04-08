@extends('layouts.app')

@section('title', 'Crear Nueva Biblioteca')

@section('content')
    <div class="container">
        <h1 class="my-4">Crear Nueva Biblioteca</h1>

        <form action="{{ route('bibliotecas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('bibliotecas.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>
@endsection