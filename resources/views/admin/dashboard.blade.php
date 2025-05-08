@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Panel de Administración</h2>

        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card text-white bg-danger shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios Registrados</h5>
                        <p class="fs-3">{{ $totalUsuarios }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Pedidos Realizados</h5>
                        <p class="fs-3">{{ $totalPedidos }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-primary shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Facturado</h5>
                        <p class="fs-3">{{ number_format($totalFacturado, 2) }} €</p>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="mb-3">Productos con bajo stock</h4>
        @if($productosBajoStock->isNotEmpty())
            <table class="table table-bordered">
                <thead class="table-danger">
                    <tr>
                        <th>Nombre</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productosBajoStock as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->stock }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-success">Todos los productos tienen stock suficiente.</div>
        @endif
    </div>
@endsection