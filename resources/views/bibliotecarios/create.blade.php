@extends('layouts.app')

@section('title', 'Crear Bibliotecario')

@section('content')
    <div class="container">
        <h1 class="my-4">Crear Nuevo Bibliotecario</h1>

        <form action="{{ route('bibliotecarios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fk_persona">Persona:</label>
                <select class="form-select" name="fk_persona" id="fk_persona" required>
                    @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
                    @endforeach
                </select>
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
                <a href="{{ route('bibliotecarios.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>
@endsection