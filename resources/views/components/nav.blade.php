<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">eStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        @auth
      <!-- Enlaces comunes -->
      <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Productos</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('carro.ver') }}">Carro</a></li>

      @if(auth()->user()->cliente)
      <li class="nav-item"><a class="nav-link" href="{{ route('pedidos.index') }}">Mis pedidos</a></li>
    @endif

      @if(auth()->user()->administrador)
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('admin.pedidos.index') }}">Pedidos</a></li>
    @endif

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