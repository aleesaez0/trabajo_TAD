@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Gestión de Pedidos</h2>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        @if($pedidos->count())
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-danger">
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Teléfono</th>
                            <th>Total</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td>#{{ $pedido->id }}</td>
                                <td>{{ $pedido->carro->cliente->user->name ?? '-' }}</td>
                                <td>{{ $pedido->carro->cliente->telefono ?? '-' }}</td>
                                <td>{{ number_format($pedido->total, 2) }} €</td>
                                <td>{{ \Carbon\Carbon::parse($pedido->fecha)->format('d/m/Y H:i') }}</td>
                                <td>
                                    <span class="badge bg-{{ $pedido->estado == 'enviado' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($pedido->estado) }}
                                    </span>
                                </td>
                                <td>
                                    @if($pedido->estado !== 'enviado')
                                        <form action="{{ route('admin.pedidos.enviar', $pedido) }}" method="POST">
                                            @csrf @method('PATCH')
                                            <button class="btn btn-sm btn-danger">Marcar Enviado</button>
                                        </form>
                                    @else
                                        <span class="text-muted">Completado</span>
                                    @endif
                                    <a href="{{ route('admin.pedidos.show', $pedido) }}"
                                        class="btn btn-sm btn-outline-secondary">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning text-center">
                No hay pedidos disponibles.
            </div>
        @endif
    </div>
@endsection