@extends('layouts.app')

@section('title', 'Listado de Bibliotecarios')

@section('content')
    <div class="container">
        <h1 class="my-4">Listado de Bibliotecarios</h1>
        <a href="{{ route('bibliotecarios.create') }}" class="btn btn-primary mb-3">Crear Nuevo Bibliotecario</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Biblioteca</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bibliotecarios as $bibliotecario)
                    <tr>
                        <td>{{ $bibliotecario->persona->nombre }}</td>
                        <td>{{ $bibliotecario->persona->edad }}</td>
                        <td>{{ $bibliotecario->biblioteca->nombre }}</td>
                        <td>
                            <a href="{{ route('bibliotecarios.show', $bibliotecario->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('bibliotecarios.edit', $bibliotecario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('bibliotecarios.destroy', $bibliotecario->id) }}" method="POST" style="display:inline;">
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