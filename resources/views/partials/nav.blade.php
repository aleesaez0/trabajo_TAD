<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">Proyecto EPD3 TAD</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('personas.index') }}">Personas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bibliotecarios.index') }}">Bibliotecarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bibliotecas.index') }}">Bibliotecas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('libros.index') }}">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
                </li>
            </ul>
        </div>
    </div>
</nav>