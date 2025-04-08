@extends('layouts.app')

@section('title', 'Detalles del Usuario')

@section('content')
    <div class="container">
        <h1 class="my-4">Detalles del Usuario</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $usuario->persona->nombre }}</h5>
                <p class="card-text"><strong>Edad:</strong> {{ $usuario->persona->edad }} años</p>
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h5>Libros Prestados</h5>
            </div>
            <div class="card-body">
                @if($usuario->libros->count() > 0)
                    <ul class="list-group">
                        @foreach($usuario->libros as $libro)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $libro->titulo }}
                                <form action="{{ route('usuarios.devolver-libro', $usuario->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="fk_libro" value="{{ $libro->id }}">
                                    <button type="submit" class="btn btn-sm btn-outline-warning">
                                        <i class="bi bi-arrow-counterclockwise"></i> Devolver
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">No tiene libros prestados</p>
                @endif
            </div>
        </div>
    </div>
@endsection