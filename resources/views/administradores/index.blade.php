@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Listado de Administradores</h2>
    <a href="{{ route('administradores.create') }}" class="btn btn-primary mb-3">Nuevo</a>
    <div class="card shadow-sm">
        <div class="card-body">
            <!-- Tabla de administradores aquí -->
        </div>
    </div>
</div>
@endsection
