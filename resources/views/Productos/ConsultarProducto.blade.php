@extends('layouts.Base2')
@section('contenido')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{ url('/') }}">Inicio<i class="ti-arrow-right"></i></a></li>
                        <li class="active">Mis Productos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<section class="contact-us section padding-contact-orlp">
    <div class="container">
        <div class="contact-head">
            <div class="form-main">
                <div class="row">
                    <div class="section-title text-center">
                        <h2>Mis productos en venta</h2>
                    </div>
                    @foreach ($producto as $productos)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product alto">
                            <div class="product-img img-container">
                                <a href="product-details.html">
                                    <img class="default-img " src="{{ asset("/uploads/$productos->img") }}" alt="#">
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
    </div>
</section>
@include('includes.footer')
@endsection
