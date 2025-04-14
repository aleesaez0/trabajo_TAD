@extends('layouts.app')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-4">Bienvenido a tu Tienda Online</h1>
    <p class="lead">Explora nuestros productos y disfruta de tus compras.</p>
    <a href="{{ route('productos.index') }}" class="btn btn-primary mt-3">Ver productos</a>
</div>
@endsection
