<div class="navigation">
  <header class="navbar-style-7 position-relative">
    <div class="container">
      <div class="navbar-mobile d-lg-none">
        <div class="row align-items-center">
          <div class="col-3">
            <div class="navbar-toggle icon-text-btn">
              <a class="icon-btn primary-icon-text mobile-menu-open-7" href="javascript:void(0)">
                <i class="mdi mdi-menu"></i>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="mobile-logo text-center">
              <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
              </a>
            </div>
          </div>
          <div class="col-3">
            <div class="navbar-cart">
              <a class="icon-btn primary-icon-text icon-text-btn" href="{{ route('carro.ver') }}">
                <img src="{{ asset('assets/images/icon-svg/cart-1.svg') }}" alt="Icon">
                <span class="icon-text text-style-1">88</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="navbar-container navbar-sidebar-7">
      <div class="navbar-close d-lg-none">
        <a class="close-mobile-menu-7" href="javascript:void(0)">
          <i class="mdi mdi-close"></i>
        </a>
      </div>

      <div class="navbar-wrapper">
        <div class="container-lg">
          <nav class="main-navbar d-lg-flex justify-content-between align-items-center">
            <div class="desktop-logo d-none d-lg-block">
              <a href="{{ url('/') }}">
                <h2 class="text-danger fw-bold m-0">sexToys</h2>
              </a>
            </div>
            <div class="navbar-menu">
              <ul class="main-menu">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                @auth
          @if(auth()->user()->cliente)
        <li><a href="{{ route('cliente.dashboard') }}">Mi Panel</a></li>
        <li><a href="{{ route('productos.index') }}">Productos</a></li>
        <li><a href="{{ route('carro.ver') }}">Carro</a></li>
        <li><a href="{{ route('pedidos.index') }}">Mis Pedidos</a></li>
      @endif
          @if(auth()->user()->administrador)
        <li><a href="{{ route('admin.dashboard') }}">Admin Panel</a></li>
        <li><a href="{{ route('admin.pedidos.index') }}">Pedidos</a></li>
        <li><a href="{{ route('productos.index') }}">Productos</a></li>
        <li><a href="{{ route('clientes.index') }}">Clientes</a></li>
        <li><a href="{{ route('administradores.index') }}">Administradores</a></li>
      @endif
          <li>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link nav-link">Cerrar sesiÃ³n</button>
            </form>
          </li>
        @else
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="{{ route('register') }}">Registro</a></li>
    @endauth
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="overlay-7"></div>
  </header>
</div>