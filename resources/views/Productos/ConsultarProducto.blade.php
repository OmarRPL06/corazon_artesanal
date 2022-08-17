@extends('layouts.base')
@section('contenido')
    <div class="container-card">
        <div class="card">
            <div class="card-header">
                <div class="align-left">
                    <div class="card-title-orpl">Mis Productos en Venta</div>
                </div>
                <div class="align-right">
                    <a href="{{ url('/registrar/producto/orpl') }}" class="btn btn-darkorange btn-sm text-white">Subir
                        Producto +</a>
                </div>
            </div>
            <div class="container-table">
                <div class="row">
                    @foreach ($producto as $productos)
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset("/uploads/$productos->img") }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    @php
                                        $precio = $productos->precio;
                                        $iva = $productos->iva;
                                        $precio_real = $precio + $iva;
                                    @endphp
                                    <h5 class="card-title">${{ $precio_real }}</h5>
                                    <p>Envío gratis</p>
                                    <p>{{ $productos->nombreProducto }}</p>
                                    <p>{{ $productos->tipo }}, Talla: {{ $productos->talla }}, {{ $productos->modelo }}</p>
                                    <p>Color: {{ $productos->color }}</p>
                                    <p>Existencia: {{ $productos->existencia }}</p>
                                    <a href="#" class="btn btn-primary btn-sm">Comprar</a>
                                    <a href="#" class="btn btn-warning btn-sm">Agregar Al carrito</a>
                                    <a href="#" class="btn btn-success btn-sm">Modificar</a>
                                    <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                </div>
                            </div>
                            <br>
                        </div>
                    @endforeach
                </div>
            </div>
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
                                    <div class="card-body p-4">
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
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                            <button class="btn btn-darkorange btn-sm" type="submit">
                                                <i class="bi-cart-fill me-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- Fin section -->
        </div>
    </div>

    @include('includes.footer')
@endsection
