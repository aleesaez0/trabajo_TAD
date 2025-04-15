@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center text-danger">Mis Pedidos</h2>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        @if($pedidos->count())
            <div class="table-responsive">
                <table class="table table-hover align-middle shadow-sm border">
                    <thead class="table-danger">
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td class="fw-semibold">#{{ $pedido->id }}</td>
                                <td>{{ \Carbon\Carbon::parse($pedido->fecha)->format('d/m/Y H:i') }}</td>
                                <td>{{ number_format($pedido->total, 2) }} €</td>
                                <td>
                                    <span class="badge bg-{{ $pedido->estado === 'enviado' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($pedido->estado) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('pedidos.show', $pedido) }}" class="btn btn-outline-danger btn-sm">
                                        Ver Detalle
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning text-center">No tienes pedidos realizados todavía.</div>
        @endif
    </div>
@endsection