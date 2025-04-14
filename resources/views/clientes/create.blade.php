@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Nuevo Cliente</h2>
    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf
        <!-- Campos del formulario -->
        <button class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
