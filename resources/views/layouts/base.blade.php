<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(NAHUTEC) Corazón Artesanal</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/omar.css">
    <link rel="stylesheet" href="/bootstrap/css/jaime.css">
    <link rel="stylesheet" href="/bootstrap/css/footer_jna.css">

    <script src="/bootstrap/js/jquery-3.6.0.min.js"></script>

    <script src="/bootstrap/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light-black p-3">
        <a class="navbar-brand text-white" href="{{ url('/') }}">NAHUTEC</a>
        <div class="container-fluid conatiner-lg-6">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex mb-0 h1" role="search">
                <input class="form-control me-2 form-control-sm" type="search" placeholder="Buscar producto..."
                    aria-label="Search">
                <button class="btn btn-darkorange text-white btn-sm" type="submit">Buscar</button>
            </form>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categoria
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Ropa</a></li>
                            <li><a class="dropdown-item" href="#">Blusa</a></li>
                            <li><a class="dropdown-item" href="#">Sudaderas</a></li>
                            <li><a class="dropdown-item" href="#">Sueteres</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/consultar/producto/db/orpl') }}">Mis Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white">Moda</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link text-white">Ayuda {{ Auth::check() }}</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-darkorange btn-sm" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        <span class="badge bg-light-black text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
                @if (Auth::guest())
                    <a href="{{ url('/login') }}" class="btn btn-darkorange m-1 btn-sm text-white"><i
                            class="bi bi-box-arrow-in-right icon-logIn"></i> Ingresar</a>
                @else
                    <a href="{{ url('/logout/session') }}" class="btn btn-darkorange m-1 btn-sm text-white"><i
                            class="bi bi-box-arrow-in-right icon-logOut"></i> Salir</a>
                @endif
            </div>
        </div>
    </nav>

    @yield('contenido')

</body>

</html>
