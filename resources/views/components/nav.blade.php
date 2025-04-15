<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">eStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        @auth
      {{-- Enlaces para CLIENTES --}}
      @if(auth()->user()->cliente)
      <li class="nav-item"><a class="nav-link" href="{{ route('cliente.dashboard') }}">Mi Panel</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Productos</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('carro.ver') }}">Carro</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('pedidos.index') }}">Mis Pedidos</a></li>
    @endif

      {{-- Enlaces para ADMINISTRADORES --}}
      @if(auth()->user()->administrador)
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Panel</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.pedidos.index') }}">Pedidos</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Productos</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('carros.index') }}">Carros</a></li>
    @endif

      {{-- Cierre de sesión --}}
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-link nav-link">Cerrar sesión</button>
        </form>
      </li>
    @else
    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registro</a></li>
  @endauth
      </ul>
    </div>
  </div>
</nav>