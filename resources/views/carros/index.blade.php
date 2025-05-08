@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Tu Carro</h2>

        @if(session('error'))
            <div class="alert alert-danger text-center">{{ session('error') }}</div>
        @endif

        @if($carro && $carro->lineas->count())
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-danger">
                            <tr>
                                <th>Producto</th>
                                <th>Imagen</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carro->lineas as $linea)
                                <tr>
                                    <td>{{ $linea->producto->nombre ?? 'Producto eliminado' }}</td>
                                    <td>
                                        @if($linea->producto?->imagen)
                                            <img src="{{ $linea->producto->imagen }}" alt="imagen"
                                                style="width: 80px; height: 60px; object-fit: cover;">
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('carros.lineas.cantidad', $linea) }}" method="POST"
                                            class="d-flex align-items-center gap-2">
                                            @csrf
                                            @method('PATCH')
                                            <input type="number" name="cantidad" value="{{ $linea->cantidad }}" min="1"
                                                class="form-control form-control-sm w-auto">
                                            <button class="btn btn-sm btn-outline-primary">✔</button>
                                        </form>
                                    </td>
                                    <td>{{ number_format($linea->precio_unitario, 2) }} €</td>
                                    <td>{{ number_format($linea->cantidad * $linea->precio_unitario, 2) }} €</td>
                                    <td>
                                        <form action="{{ route('carros.lineas.eliminar', $linea) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('¿Eliminar este producto del carro?')">🗑️</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-end mt-3">
                        <form method="POST" action="{{ route('carro.confirmar') }}">
                            @csrf
                            <button class="btn btn-danger">Confirmar Pedido</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-warning text-center">
                No tienes productos en el carro.
            </div>
        @endif
    </div>
@endsection