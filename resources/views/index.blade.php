@extends('layouts.Base')
@section('contenido')

<!-- Slider Area -->
<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-9 offset-lg-3 col-12">
                    <div class="text-inner">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <div class="hero-text">
                                    <h1><span>Busque su producto</span>Artesanía Chiapaneca</h1>
                                    <p>Realiza tus compras<br>Con entregas a domicilio y<br>de la mejor calidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->

<!-- Start Product Area -->
<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Productos mas recientes</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">

                                    @foreach ($producto as $productos)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product alto">
                                                <div class="product-img img-container">
                                                    <a href="product-details.html">
                                                        <img class="default-img" src="{{ asset("/uploads/$productos->img") }}" alt="#">
                                                        <img class="hover-img" src="{{ asset("/uploads/$productos->img") }}" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action padding-right-10">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        </div>
                                                        <div class="product-action-2 padding-left-10">
                                                            <a title="Agregar al carrito" href="#">Agregar al carrito</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content product-content-padding">
                                                    <div class="product-price color-green">
                                                        @php
                                                            $precio = $productos->precio;
                                                            $iva = $productos->iva;
                                                            $precio_real = $precio + $iva;
                                                        @endphp
                                                        <span>${{ $precio_real }}.00</span>
                                                    </div>
                                                    <h3><a href="product-details.html">{{ $productos->nombreProducto }}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->


@include('includes.footer')
@endsection
