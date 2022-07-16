<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corazón Artesanal</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/omar.css">
    <link rel="stylesheet" href="/bootstrap/css/jaime.css">
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-info p-3">
        <a class="navbar-brand" href="#">NAHUTEC</a>
        <div class="container-fluid conatiner-lg-6">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Moda</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link">Ayuda</a>
                    </li>
                </ul>
                <form class="d-flex mb-0 h1" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar productos, y más" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('contenido')

</body>

</html>