@extends('layouts.app')

@section('title', 'Detalles de la Biblioteca')

@section('content')
    <div class="container">
        <h1 class="my-4">Detalles de la Biblioteca</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $biblioteca->nombre }}</h5>
                <a href="{{ route('bibliotecas.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </div>
        <h5 class="card-title m-4">Libros de {{ $biblioteca->nombre }}</h5>
        <div class="card mt-4">

            <div class="card-body">
                <a href="{{ route('libros.create') }}" class="btn btn-primary">Añadir libro</a>
                @if($biblioteca->catalogo->count() > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Título del Libro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($biblioteca->catalogo as $libro)
                                <tr>
                                    <td>{{ $libro->titulo }}</td>
                                    <td>
                                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-muted">No tiene libros</p>
                @endif
            </div>
        </div>
    </div>
@endsection