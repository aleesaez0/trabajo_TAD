@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-danger fw-bold">Tabla de Clientes</h2>
        </div>

        <div class="card bg-dark text-light shadow-lg border-0">
            <div class="card-body">
                <p class="fst-italic text-muted">Aquí encuentras a quienes ya viven su lado más atrevido con nosotros.</p>

                @if($clientes->isEmpty())
                    <p class="text-muted text-center mt-4">Aún no hay clientes registrados 😢</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover table-dark table-striped align-middle">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Registrado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->id }}</td>
                                        <td>{{ $cliente->user->name }}</td>
                                        <td>{{ $cliente->user->email }}</td>
                                        <td>{{ $cliente->created_at->format('d/m/Y') }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST"
                                                onsubmit="return confirm('¿Seguro que deseas eliminar este cliente?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i> Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection