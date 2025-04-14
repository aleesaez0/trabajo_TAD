@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Catálogo de Productos</h2>
        <div class="row g-4">
            @foreach ($productos as $producto)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        @if ($producto->imagen)
                            <img src="{{ $producto->imagen }}" class="card-img-top" alt="{{ $producto->nombre }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">{{ $producto->descripcion }}</p>
                            <p class="fw-bold">{{ $producto->precio }} €</p>

                            <form method="POST" action="{{ route('carro.agregar', $producto) }}">
                                @csrf
                                <input type="hidden" name="cantidad" value="1">
                                <button class="btn btn-success w-100">Añadir al carro</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection