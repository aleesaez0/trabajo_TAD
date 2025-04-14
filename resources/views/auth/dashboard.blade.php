@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Bienvenido, {{ auth()->user()->name }}</h2>
    <p>Has iniciado sesión correctamente.</p>
</div>
@endsection
