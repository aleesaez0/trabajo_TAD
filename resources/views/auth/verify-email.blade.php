@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <div class="col-md-6 mx-auto">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h4 class="mb-4 text-danger">Verifica tu correo electrónico</h4>
                <p class="mb-3">Antes de continuar, por favor revisa tu correo para confirmar tu cuenta.</p>
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Reenviar enlace de verificación</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
