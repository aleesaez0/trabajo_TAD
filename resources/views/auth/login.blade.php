
@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
<section class="login-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="login-form box-style">
                    <h3 class="mb-30 text-center">Iniciar sesión</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="single-input">
                            <label for="email">Correo electrónico</label>
                            <input type="email" id="email" name="email" placeholder="Introduce tu correo" required autofocus>
                        </div>

                        <div class="single-input">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" placeholder="Introduce tu contraseña" required>
                        </div>

                        <div class="d-flex justify-content-between flex-wrap mt-20">
                            <div class="single-checkbox">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">Recuérdame</label>
                            </div>
                            <div class="forgot">
                            </div>
                        </div>

                        <div class="login-btn mt-30">
                            <button class="main-btn primary-btn w-100" type="submit">Entrar</button>
                        </div>

                        <p class="text-center mt-20">¿No tienes cuenta?
                            <a href="{{ route('register') }}">Crear cuenta</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
