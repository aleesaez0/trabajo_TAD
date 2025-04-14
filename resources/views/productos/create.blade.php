@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Nuevo Producto</h2>
    <form method="POST" action="{{ route('productos.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="precio">Precio</label>
            <input type="number" name="precio" step="0.01" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="imagen">Imagen (URL)</label>
            <input type="text" name="imagen" class="form-control">
        </div>
        <button class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
