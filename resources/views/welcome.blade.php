@extends('layouts.base')
@section('contenido')
    <!-- Inicio Slider -->
    <div id="carouselExampleDark" class="carousel slide slide-top" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <center><img src="/imagenes/banner.jpg" class="d-block img-slider" width="700" height="380"></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pinturas Artesanales</h5>
                    <p>Pinturas 100% hechas con talento del artesano.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <center><img src="/imagenes/f16.jpeg" class="d-block img-slider" width="700" height="380"></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bordados y entre mas cosas</h5>
                    <p>Colchas, sabanas y mas cosas.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <center><img src="/imagenes/f13.jpg" class="d-block img-slider" width="700" height="380"></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Creación de telas artesanales</h5>
                    <p>Gran calidad en de las prendas a vender.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Fin Slider -->

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($producto as $productos)
                    <div class="col mb-5">
                        <div class="card h-100 alto">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset("/uploads/$productos->img") }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-3">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h6 class="fw-bolder">{{ $productos->nombreProducto }}</h6>
                                    @php
                                        $precio = $productos->precio;
                                        $iva = $productos->iva;
                                        $precio_real = $precio + $iva;
                                    @endphp
                                    <!--  -->
                                    <p>{{ $productos->tipo }}, Talla: {{ $productos->talla }}, {{ $productos->modelo }}</p>
                                    <p>Color: {{ $productos->color }}</p>
                                    <p>Existencia: {{ $productos->existencia }}</p>
                                    <!-- Product price-->
                                    ${{ $precio_real }}.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                    <button class="btn btn-darkorange btn-sm" type="submit">
                                        <i class="bi-cart-fill me-1"><a href="#"></a></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('includes.footer')
@endsection
