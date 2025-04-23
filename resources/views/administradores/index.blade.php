@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-danger fw-bold">Listado de Administradores</h2>

    <div class="card bg-dark text-light shadow-sm border-0">
        <div class="card-body">
            @if($administradores->isEmpty())
                <p class="text-muted fst-italic">No hay administradores registrados aún.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-dark table-hover table-striped align-middle">
                        <thead class="table-danger">
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($administradores as $admin)
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->user_id }}</td>
                                    <td>{{ $admin->user->name }}</td>
                                    <td>{{ $admin->user->email }}</td>
                                    <td>
                                        <form action="{{ route('administradores.destroy', $admin) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este administrador?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
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
