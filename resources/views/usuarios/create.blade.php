@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')
    <div class="container">
        <h1 class="my-4">Crear Nuevo Usuario</h1>

        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fk_persona">Persona:</label>
                <select class="form-select" name="fk_persona" id="fk_persona" required>
                    @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>
@endsection