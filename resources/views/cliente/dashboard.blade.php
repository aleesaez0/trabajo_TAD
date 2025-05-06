@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="text-center mb-4">¡Hola {{ auth()->user()->name }}!</h2>

        <form method="POST" action="{{ route('user.setLocale') }}">
            @csrf
            <select name="locale" onchange="this.form.submit()">
                <option value="en" {{ auth()->user()->locale == 'en' ? 'selected' : '' }}>English</option>
                <option value="es" {{ auth()->user()->locale == 'es' ? 'selected' : '' }}>Español</option>
                <option value="fr" {{ auth()->user()->locale == 'fr' ? 'selected' : '' }}>Français</option>
            </select>
        </form>

        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <i class="bi bi-box-seam display-4 text-danger"></i>
                        <h5 class="mt-3">Mis Pedidos</h5>
                        <p>Consulta tu historial de pedidos.</p>
                        <a href="{{ route('pedidos.index') }}" class="btn btn-outline-danger">Ver Pedidos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <i class="bi bi-bag-check display-4 text-danger"></i>
                        <h5 class="mt-3">Mi Carro</h5>
                        <p>Revisa los productos que has añadido.</p>
                        <a href="{{ route('carro.ver') }}" class="btn btn-outline-danger">Ver Carro</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <i class="bi bi-shop display-4 text-danger"></i>
                        <h5 class="mt-3">Tienda</h5>
                        <p>Explora nuestros productos disponibles.</p>
                        <a href="{{ route('productos.index') }}" class="btn btn-outline-danger">Ver Productos</a>
                    </div>
                </div>
            </div>
        </div>

        @if($ultimoPedido)
            <div class="card mt-5 shadow-sm">
                <div class="card-header bg-danger text-white">
                    Último Pedido
                </div>
                <div class="card-body">
                    <p><strong>ID:</strong> #{{ $ultimoPedido->id }}</p>
                    <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($ultimoPedido->fecha)->format('d/m/Y H:i') }}</p>
                    <p><strong>Total:</strong> {{ number_format($ultimoPedido->total, 2) }} €</p>
                    <a href="{{ route('pedidos.show', $ultimoPedido) }}" class="btn btn-sm btn-outline-danger">Ver Detalle</a>
                </div>
            </div>
        @endif
    </div>
@endsection