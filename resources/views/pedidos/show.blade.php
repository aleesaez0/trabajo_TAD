@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Detalle del Pedido #{{ $pedido->id }}</h2>

        <div class="card mb-4">
            <div class="card-body">
                <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($pedido->fecha)->format('d/m/Y H:i') }}</p>
                <p><strong>Total:</strong> {{ number_format($pedido->total, 2) }} €</p>
                <p><strong>Estado:</strong>
                    <span class="badge bg-{{ $pedido->estado == 'enviado' ? 'success' : 'secondary' }}">
                        {{ ucfirst($pedido->estado) }}
                    </span>
                </p>
            </div>
        </div>

        <h5>Productos del Pedido:</h5>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-danger">
                    <tr>
                        <th>Producto</th>
                        <th>Imagen</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lineas as $linea)
                        <tr>
                            <td>{{ $linea->producto->nombre ?? 'Producto eliminado' }}</td>
                            <td>
                                @if($linea->producto?->imagen)
                                    <img src="{{ $linea->producto->imagen }}" alt="imagen"
                                        style="width: 80px; height: 60px; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ $linea->cantidad }}</td>
                            <td>{{ number_format($linea->precio_unitario, 2) }} €</td>
                            <td>{{ number_format($linea->cantidad * $linea->precio_unitario, 2) }} €</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection