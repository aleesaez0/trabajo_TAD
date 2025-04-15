
@extends('layouts.app')

@section('title', 'Panel de Usuario')

@section('content')
<section class="account-page-area pt-100 pb-100 gray-bg">
    <div class="container">
        <div class="account-wrapper">
            <h3 class="mb-30">Bienvenido, {{ Auth::user()->name }}</h3>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-account-card">
                        <h5>Mis pedidos</h5>
                        <p>Consulta el estado de tus compras y su historial.</p>
                        <a href="{{ route('pedidos.index') }}" class="main-btn primary-btn">Ver pedidos</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-account-card">
                        <h5>Carrito</h5>
                        <p>Revisa los productos que tienes listos para comprar.</p>
                        <a href="{{ route('carro.ver') }}" class="main-btn primary-btn">Ver carrito</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-account-card">
                        <h5>Productos</h5>
                        <p>Explora nuestro catálogo completo de productos.</p>
                        <a href="{{ route('productos.index') }}" class="main-btn primary-btn">Ver productos</a>
                    </div>
                </div>
            </div>

            @if(Auth::user()->administrador)
            <hr class="my-5">
            <h4 class="mb-4">Zona Administrativa</h4>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-account-card">
                        <h5>Gestión de pedidos</h5>
                        <a href="{{ route('admin.pedidos.index') }}" class="main-btn secondary-1-btn">Ir a pedidos</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-account-card">
                        <h5>Clientes</h5>
                        <a href="{{ route('clientes.index') }}" class="main-btn secondary-1-btn">Ver clientes</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-account-card">
                        <h5>Administrar productos</h5>
                        <a href="{{ route('productos.index') }}" class="main-btn secondary-1-btn">Gestionar productos</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
