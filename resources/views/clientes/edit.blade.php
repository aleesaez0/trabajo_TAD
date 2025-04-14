@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Editar Cliente</h2>
    <form method="POST" action="{{ route('clientes.update', $cliente) }}">
        @csrf
        @method('PUT')
        <!-- Campos del formulario -->
        <button class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
