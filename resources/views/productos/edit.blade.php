@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Editar Producto</h2>
    <form method="POST" action="{{ route('productos.update', $producto) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
        </div>
        <div class="mb-3">
            <label for="precio">Precio</label>
            <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock">Stock</label>
            <input type="number" name="stock" value="{{ $producto->stock }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="imagen">Imagen (URL)</label>
            <input type="text" name="imagen" value="{{ $producto->imagen }}" class="form-control">
        </div>
        <button class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
