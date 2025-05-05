@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2>Editar Producto</h2>

        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control"
                    rows="3">{{ $producto->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio (€)</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control"
                    value="{{ $producto->precio }}" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" value="{{ $producto->stock }}" required>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">URL de la imagen</label>
                <input type="text" name="imagen" id="imagen" class="form-control" value="{{ $producto->imagen }}">
            </div>

            <div class="mb-3">
                <label for="categorias" class="form-label">Categorías</label>
                <select name="categorias[]" id="categorias" class="form-select" multiple>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $producto->categorias->contains($categoria->id) ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
                <div class="form-text">Pulsa Ctrl (Windows) o Cmd (Mac) para seleccionar múltiples.</div>
            </div>

            <button class="btn btn-primary">Guardar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection