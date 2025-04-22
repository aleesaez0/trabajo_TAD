@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Catálogo de Productos</h2>
        <div class="row g-4">
            @foreach ($productos as $producto)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        @if ($producto->imagen)
                            <div class="img-wrapper">
                                <img src="{{ $producto->imagen }}" class="card-img-top" alt="{{ $producto->nombre }}">
                            </div>
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>

                            <p class="card-text descripcion">
                                {{ Str::limit($producto->descripcion, 100, '...') }}
                                @if(strlen($producto->descripcion) > 100)
                                    <span class="ver-mas"
                                        onclick="this.previousSibling.textContent = '{{ addslashes($producto->descripcion) }}'; this.style.display='none'">Ver
                                        más</span>
                                @endif
                            </p>

                            <p class="fw-bold mt-auto">{{ $producto->precio }} €</p>

                            <form method="POST" action="{{ route('carro.agregar', $producto) }}">
                                @csrf
                                <input type="hidden" name="cantidad" value="1">
                                <button class="btn btn-success w-100 mt-2">Añadir al carro</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection