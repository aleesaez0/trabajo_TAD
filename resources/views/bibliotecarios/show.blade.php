@extends('layouts.app')

@section('title', 'Detalles del Bibliotecario')

@section('content')
    <div class="container">
        <h1 class="my-4">Detalles del Bibliotecario</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $bibliotecario->persona->nombre }}</h5>
                <p class="card-text"><strong>Edad:</strong> {{ $bibliotecario->persona->edad }}</p>
                <p class="card-text"><strong>Biblioteca:</strong> {{ $bibliotecario->biblioteca->nombre }}</p>
                <a href="{{ route('bibliotecarios.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </div>
    </div>
@endsection