@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Listado de Clientes</h2>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Nuevo</a>
    <div class="card shadow-sm">
        <div class="card-body">
            <!-- Tabla de clientes aquí -->
        </div>
    </div>
</div>
@endsection
