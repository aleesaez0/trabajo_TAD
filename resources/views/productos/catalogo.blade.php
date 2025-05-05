@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Catálogo de Productos</h2>

        {{-- Filtro por categoría --}}
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <form method="GET" action="{{ route('productos.index') }}">
                    <div class="input-group">
                        <label class="input-group-text" for="categoria">Categoría</label>
                        <select class="form-select" name="categoria" id="categoria" onchange="this.form.submit()">
                            <option value="">Todas</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ request('categoria') == $categoria->id ? 'selected' : '' }}>
                                    {{ $categoria->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>

        {{-- Grid de productos --}}
        <div class="row g-4">
            @forelse ($productos as $producto)
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
            @empty
                <p class="text-center">No hay productos disponibles en esta categoría.</p>
            @endforelse
        </div>
    </div>
@endsection
