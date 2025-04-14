@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Editar Pedido</h2>
    <form method="POST" action="{{ route('pedidos.update', $pedido) }}">
        @csrf
        @method('PUT')
        <!-- Campos del formulario -->
        <button class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
