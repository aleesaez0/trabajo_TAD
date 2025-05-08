
@extends('layouts.app')

@section('title', 'Crear cuenta')

@section('content')
<section class="signup-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="signup-form box-style">
                    <h3 class="mb-30 text-center">Crear una cuenta</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="single-input">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" placeholder="Introduce tu nombre completo" required>
                        </div>

                        <div class="single-input">
                            <label for="email">Correo electrónico</label>
                            <input type="email" id="email" name="email" placeholder="Introduce tu correo" required>
                        </div>

                        <div class="single-input">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" placeholder="Crea una contraseña" required>
                        </div>

                        <div class="single-input">
                            <label for="password_confirmation">Confirmar contraseña</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite la contraseña" required>
                        </div>

                        <div class="login-btn mt-30">
                            <button class="main-btn primary-btn w-100" type="submit">Registrarse</button>
                        </div>

                        <p class="text-center mt-20">¿Ya tienes cuenta?
                            <a href="{{ route('login') }}">Inicia sesión</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
