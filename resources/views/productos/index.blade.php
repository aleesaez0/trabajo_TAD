@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">Listado de Productos</h2>
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Nuevo Producto</a>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Categorías</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->precio }} €</td>
                                <td>{{ $producto->stock }}</td>

                                <td>
                                    @foreach ($producto->categorias as $categoria)
                                        <span class="badge bg-info text-dark">
                                            {{ $categoria->nombre }}
                                            {{-- Botón para quitar categoría --}}
                                            <form action="{{ route('productos.categorias.detach', [$producto, $categoria]) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-close ms-1"
                                                    aria-label="Eliminar categoría"></button>
                                            </form>
                                        </span>
                                    @endforeach

                                    {{-- Formulario para añadir categoría --}}
                                    <form action="{{ route('productos.categorias.attach', $producto) }}" method="POST"
                                        class="mt-2 d-flex gap-2">
                                        @csrf
                                        <select name="categoria_id" class="form-select form-select-sm" required>
                                            <option value="">Añadir categoría</option>
                                            @foreach ($categorias as $cat)
                                                @if (!$producto->categorias->contains($cat))
                                                    <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <button class="btn btn-sm btn-success">+</button>
                                    </form>
                                </td>

                                <td>
                                    <a href="{{ route('productos.edit', $producto) }}" class="btn btn-sm btn-warning">Editar</a>
                                    <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection