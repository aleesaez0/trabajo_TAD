@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-light py-5 text-center">
        <div class="container">
            <h1 class="display-4 fw-bold text-danger">Bienvenido a sexToys</h1>
            <p class="lead text-muted mb-4">La mejor tienda online de juguetes sexuales. Explora nuestros productos, añade al
                carrito y realiza pedidos fácilmente.</p>
            <a href="{{ route('productos.index') }}" class="btn btn-danger btn-lg">Ver Productos</a>
        </div>
    </section>

    <!-- Características -->
    <section class="py-5 border-top">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4 shadow-sm bg-white rounded">
                        <i class="bi bi-truck display-5 text-danger mb-3"></i>
                        <h5>Envío Rápido</h5>
                        <p class="text-muted">Recibe tus productos en tiempo récord a cualquier parte.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 shadow-sm bg-white rounded">
                        <i class="bi bi-shield-lock display-5 text-danger mb-3"></i>
                        <h5>Compra Segura</h5>
                        <p class="text-muted">Tus datos están protegidos y tus pagos son seguros.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 shadow-sm bg-white rounded">
                        <i class="bi bi-stars display-5 text-danger mb-3"></i>
                        <h5>Calidad Garantizada</h5>
                        <p class="text-muted">Productos de primeras marcas con garantía incluida.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-danger text-white py-5 text-center">
        <div class="container">
            <h2 class="mb-3">¿Listo para comprar?</h2>
            <a href="{{ route('productos.index') }}" class="btn btn-outline-light btn-lg">Explorar Productos</a>
        </div>
    </section>
@endsection