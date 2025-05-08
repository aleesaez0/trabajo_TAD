@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="mb-4 text-center text-danger">Recuperar Contraseña</h4>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" name="email" class="form-control" required autofocus>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Enviar enlace</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
