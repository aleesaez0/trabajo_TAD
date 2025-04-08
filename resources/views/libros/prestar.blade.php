@extends('layouts.app')

@section('title', 'Prestar Libro')

@section('content')
    <div class="container">
        <h1>Prestar: {{ $libro->titulo }}</h1>

        <form action="{{ route('libros.prestar.store', $libro->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Seleccionar Usuario</label>
                <select name="fk_usuario" class="form-select" required>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">
                            {{ $usuario->persona->nombre }} (ID: {{ $usuario->id }})
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-circle"></i> Confirmar Préstamo
            </button>
            <a href="{{ route('libros.show', $libro->id) }}" class="btn btn-secondary">
                <i class="bi bi-x-circle"></i> Cancelar
            </a>
        </form>
    </div>
@endsection