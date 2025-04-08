@extends('layouts.app')

@section('title', 'Listado de Bibliotecas')

@section('content')
    <div class="container">
        <h1 class="my-4">Listado de Bibliotecas</h1>
        <a href="{{ route('bibliotecas.create') }}" class="btn btn-primary mb-3">Crear Nueva Biblioteca</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bibliotecas as $biblioteca)
                    <tr>
                        <td>{{ $biblioteca->nombre }}</td>
                        <td>
                            <a href="{{ route('bibliotecas.show', $biblioteca->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('bibliotecas.edit', $biblioteca->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('bibliotecas.destroy', $biblioteca->id) }}" method="POST" style="display:inline;">
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