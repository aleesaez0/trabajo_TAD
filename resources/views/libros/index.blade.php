@extends('layouts.app')

@section('title', 'Listado de Libros')

@section('content')
    <div class="container">
        <h1 class="my-4">Listado de Libros</h1>
        <a href="{{ route('libros.create') }}" class="btn btn-primary mb-3">Crear Nuevo Libro</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Prestado</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->prestado ? "Sí" : "No" }}</td>
                        <td>{{ $libro->usuario?->persona?->nombre ?? "-" }}</td>
                        <td>
                            <a href="{{ route('libros.show', $libro->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection