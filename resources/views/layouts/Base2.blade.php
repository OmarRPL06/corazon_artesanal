<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>(NAHUTEC) Corazón Artesanal</title>
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/ecommerce/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/ecommerce/css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/ecommerce/css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="/ecommerce/css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="/ecommerce/css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="/ecommerce/css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/ecommerce/css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="/ecommerce/css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/ecommerce/css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="/ecommerce/css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="/ecommerce/css/reset.css">
    <link rel="stylesheet" href="/ecommerce/style.css">
    <link rel="stylesheet" href="/ecommerce/css/responsive.css">
    <link rel="stylesheet" href="/bootstrap/css/omar.css">
    <link rel="stylesheet" href="/bootstrap/css/padding.css">

</head>

<body class="js">
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> +52 (919) 173-54-21</li>
                                <li><i class="ti-email"></i> soporte_artesanal@gmail.com</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="fa fa-location-arrow"></i> <a href="{{ url('/form/ubicacion') }}">Ubicación</a></li>
                                <li><i class="ti-info"></i> <a href="#">Nosotros</a></li>
                                <li><i class="fa fa-user-circle"></i> <a href="#">Mi Cuenta</a></li>
                                @if (Auth::guest())
                                    <li><i class="fa fa-sign-out"></i><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
                                @else
                                    <li><i class="fa fa-sign-out"></i><a href="{{ url('/logout/session') }}">Cerrar Sesión</a></li>
                                @endif
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="/ecommerce/images/logo.png" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Buscar ahora..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <form>
                                    <input name="search" placeholder="Busca tu producto ahora....." type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-user-circle-o"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="#" class="single-icon"><i class="ti-bag"></i> <span
                                        class="total-count">2</span></a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>2 Productos</span>
                                        <a href="#">Ir a Carrito</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i
                                                    class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70"
                                                    alt="#"></a>
                                            <h4><a href="#">Woman Ring</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </li>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$134.00</span>
                                        </div>
                                        <a href="checkout.html" class="btn animate">Verificar pago</a>
                                    </div>
                                </div>
                                <!--/ End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
                                                <li><a href="#">Ofertas</a></li>
                                                <li><a href="#">Historial</a></li>
                                                @if (! Auth::guest())
                                                    <li><a href="#">Vender<i class="ti-angle-down"></i>
                                                            <!--<span class="new">Nuevo</span>--></a>
                                                        <ul class="dropdown">
                                                            <li><a href="{{ url('/tipo/producto') }}">Subir Producto</a></li>
                                                            <li><a href="{{ url('/consultar/producto/db/orpl') }}">Mis productos en venta</a></li>
                                                        </ul>
                                                    </li>
                                                @endif
                                                <li><a href="#">Compras<i class="ti-angle-down"></i>
                                                        <!--<span class="new">Nuevo</span>--></a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ url('/carrito/producto') }}">Ver Carrito</a></li>
                                                        <li><a href="{{ url('/pagar/producto') }}">Pagar cuenta</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="blog-single-sidebar.html">Ver comentarios</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('/form/ubicacion') }}">Contacto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->

    @yield('contenido')


</body>

</html>

<!-- Jquery -->
<script src="/ecommerce/js/jquery.min.js"></script>
<script src="/ecommerce/js/jquery-migrate-3.0.0.js"></script>
<script src="/ecommerce/js/jquery-ui.min.js"></script>
<!-- Popper JS -->
<script src="/ecommerce/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="/ecommerce/js/bootstrap.min.js"></script>
<!-- Color JS -->
<script src="/ecommerce/js/colors.js"></script>
<!-- Slicknav JS -->
<script src="/ecommerce/js/slicknav.min.js"></script>
<!-- Owl Carousel JS -->
<script src="/ecommerce/js/owl-carousel.js"></script>
<!-- Magnific Popup JS -->
<script src="/ecommerce/js/magnific-popup.js"></script>
<!-- Waypoints JS -->
<script src="/ecommerce/js/waypoints.min.js"></script>
<!-- Countdown JS -->
<script src="/ecommerce/js/finalcountdown.min.js"></script>
<!-- Nice Select JS -->
<script src="/ecommerce/js/nicesellect.js"></script>
<!-- Flex Slider JS -->
<script src="/ecommerce/js/flex-slider.js"></script>
<!-- ScrollUp JS -->
<script src="/ecommerce/js/scrollup.js"></script>
<!-- Onepage Nav JS -->
<script src="/ecommerce/js/onepage-nav.min.js"></script>
<!-- Easing JS -->
<script src="/ecommerce/js/easing.js"></script>
<!-- Active JS -->
<script src="/ecommerce/js/active.js"></script>
