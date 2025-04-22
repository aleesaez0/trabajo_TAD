
{{-- resources/views/partials/footer.blade.php --}}
<section class="footer-style-3 pt-100 pb-100">
    <div class="container">
        <div class="footer-top">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 col-sm-10">
                    <div class="footer-logo text-center">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
                        </a>
                    </div>
                    <h5 class="heading-5 text-center mt-30">Síguenos</h5>
                    <ul class="footer-follow text-center">
                        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-widget-wrapper text-center pt-20">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="footer-title">Producto</h5>
                        <ul class="footer-link">
                            <li><a href="#">Tienda</a></li>
                            <li><a href="#">Ofertas</a></li>
                            <li><a href="#">Favoritos</a></li>
                            <li><a href="#">Novedades</a></li>
                            <li><a href="#">Populares</a></li>
                            <li><a href="#">Negocios</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="footer-title">Desarrolladores</h5>
                        <ul class="footer-link">
                            <li><a href="#">Documentación</a></li>
                            <li><a href="#">APIs</a></li>
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Blog Dev</a></li>
                            <li><a href="#">Soporte Técnico</a></li>
                            <li><a href="#">Comunidad</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="footer-title">Empresa</h5>
                        <ul class="footer-link">
                            <li><a href="#">Quiénes somos</a></li>
                            <li><a href="#">Empleo</a></li>
                            <li><a href="#">Prensa</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="footer-title">Ayuda</h5>
                        <ul class="footer-link">
                            <li><a href="#">Centro de Ayuda</a></li>
                            <li><a href="#">Términos y condiciones</a></li>
                            <li><a href="#">Política de privacidad</a></li>
                            <li><a href="#">Envíos</a></li>
                            <li><a href="#">Devoluciones</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center">
            <p>
                &copy; {{ date('Y') }} <a href="{{ url('/') }}">sexToys</a>. Todos los derechos reservados.
            </p>
        </div>
    </div>
</section>
