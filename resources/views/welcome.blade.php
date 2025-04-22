
@extends('layouts.app')

@section('title', 'Bienvenido a sexToys')

@section('content')

<!--====== Header Style 1 Part Start ======-->
<section class="header-style-1">
    <div class="header-big">
        <div class="header-items-active">
            <div class="single-header-item bg_cover" style="background-image: url({{ asset('assets/images/header-1/header-big-1.jpg') }});">
                <div class="header-item-content">
                    <h3 class="title">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
                    <a href="javascript:void(0)" class="link">Our Valentine's Day collection</a>
                </div>
            </div>
            <div class="single-header-item bg_cover" style="background-image: url({{ asset('assets/images/header-1/header-big-2.jpg') }});">
                <div class="header-item-content">
                    <h3 class="title">Don’t say it with flowers: A NOMOS watch is a gift that lasts</h3>
                    <a href="javascript:void(0)" class="link">Our Valentine's Day collection</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Header Style 1 Part Ends ======-->

<!--====== Content Card Style 4 Part Start ======-->
<section class="content-card-style-4 pt-70 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-8">
                <div class="single-content mt-15 text-center">
                    <div class="content-icon">
                        <i class="mdi mdi-truck-fast"></i>
                    </div>
                    <div class="content-content">
                        <h4 class="title"><a href="#">Envío en 2 horas</a></h4>
                        <p>Disponible en las principales ciudades</p>
                        <a href="#" class="more">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-8">
                <div class="single-content mt-15 text-center">
                    <div class="content-icon">
                        <i class="mdi mdi-message-text"></i>
                    </div>
                    <div class="content-content">
                        <h4 class="title"><a href="#">¿Necesitas ayuda?</a></h4>
                        <p>Contacta por chat o llámanos</p>
                        <a href="#" class="more">Contáctanos</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-7 col-sm-8">
                <div class="single-content mt-15 text-center">
                    <div class="content-icon">
                        <i class="mdi mdi-ticket-percent"></i>
                    </div>
                    <div class="content-content">
                        <h4 class="title"><a href="#">Financia tus compras</a></h4>
                        <p>Consigue ofertas especiales y cashback</p>
                        <a href="#" class="more">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Content Card Style 4 Part Ends ======-->

@endsection
