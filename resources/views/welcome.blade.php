@extends('layouts.app')

@section('title', 'Bienvenido a sexToys')

@section('content')

    <section class="header-style-1">
        <div class="header-big">
            <div class="header-items-active">
                <div class="single-header-item bg_cover"
                    style="background-image: url({{ asset('assets/images/header-1/header-big-1.jpg') }});">
                    <div class="header-item-content">
                        <h3 class="title">Haz que cada noche cuente... 🔥</h3>
                        <a>Inicia sesión y explora nuestra colección más seductora</a>
                    </div>
                </div>
                <div class="single-header-item bg_cover"
                    style="background-image: url({{ asset('assets/images/header-1/header-big-2.jpg') }});">
                    <div class="header-item-content">
                        <h3 class="title">Regala placer, regala deseo</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection