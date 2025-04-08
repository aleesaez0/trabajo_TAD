@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <div class="container">
        <h1 class="my-4">Editar Usuario</h1>

        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="fk_persona" class="form-label">Persona:</label>
                <select name="fk_persona" id="fk_persona" class="form-select" required>
                    @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}" {{ $bibliotecario->fk_persona == $persona->id ? 'selected' : '' }}>
                            {{ $persona->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>
@endsection