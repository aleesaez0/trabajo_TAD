@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Mis Productos Favoritos</h2>

        <div class="row g-4">
            @forelse ($favoritos as $producto)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $producto->imagen }}" class="card-img-top" alt="{{ $producto->nombre }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">{{ Str::limit($producto->descripcion, 100, '...') }}</p>
                            <p class="fw-bold mt-auto">{{ $producto->precio }} €</p>
                            <a href="#" class="btn btn-primary mt-2">Ver producto</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No tienes productos favoritos todavía.</p>
            @endforelse
        </div>
    </div>
@endsection