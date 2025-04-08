@extends('layouts.app')

@section('title', 'Detalles de la Persona')

@section('content')
    <div class="container">
        <h1 class="my-4">Detalles de la Persona</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $persona->nombre }}</h5>
                <p class="card-text"><strong>Edad:</strong> {{ $persona->edad }} años</p>
                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </div>
    </div>
@endsection