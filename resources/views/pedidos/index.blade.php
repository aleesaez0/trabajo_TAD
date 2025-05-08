@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Mis Pedidos</h2>

        @if($pedidos->count())
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-hover table-striped align-middle">
                        <thead class="table-danger">
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $pedido)
                                <tr>
                                    <td>#{{ $pedido->id }}</td>
                                    <td>{{ $pedido->fecha->format('d/m/Y H:i') }}</td>
                                    <td>{{ number_format($pedido->total, 2) }} €</td>
                                    <td><span class="badge bg-danger">{{ ucfirst($pedido->estado) }}</span></td>
                                    <td>
                                        <a href="{{ route('pedidos.show', $pedido) }}"
                                            class="btn btn-sm btn-outline-secondary">Ver</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="alert alert-warning text-center">
                No tienes pedidos realizados.
            </div>
        @endif
    </div>
@endsection