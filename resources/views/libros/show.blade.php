@extends('layouts.app')

@section('title', 'Detalles del Libro')

@section('content')
    <div class="container">
        <h1 class="my-4">Detalles del Libro</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $libro->titulo }}</h5>
                <p><strong>Autor: </strong>{{ $libro->autor }}</p>
                <p><strong>Prestado: </strong>{{ $libro->prestado ? "Sí" : "No" }}</p>
                <a href="{{ route('libros.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </div>

        <div class="mt-4">
            @if($libro->prestado)
                <form action="{{ route('libros.devolver', $libro->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-arrow-counterclockwise"></i> Devolver Libro
                    </button>
                </form>
                <p class="mt-2 text-muted">
                    Prestado a: {{ $libro->usuario->persona->nombre }}
                </p>
            @else
                <a href="{{ route('libros.prestar', $libro->id) }}" class="btn btn-success">
                    <i class="bi bi-hand-thumbs-up"></i> Prestar Libro
                </a>
            @endif
        </div>
    </div>
@endsection