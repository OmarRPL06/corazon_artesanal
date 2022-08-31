@extends('layouts.base_old')
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
                                            <!--<p>{{ $productos->tipo }}, Talla: {{ $productos->talla }},
                                                {{ $productos->modelo }}</p>
                                            <p>Color: {{ $productos->color }}</p>
                                            <p>Existencia: {{ $productos->existencia }}</p>-->
                                            <!-- Product price-->
                                            ${{ $precio_real }}.00
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-2 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                            <a class="btn btn-darkorange btn-sm" href="#">
                                                <i class="bi-cart-fill me-1"></i>
                                            </a>
                                            <a class="btn btn-darkorange btn-sm" href="#">
                                                <i class="bi bi-pencil-fill me-1"></i>
                                            </a>
                                            <button class="btn btn-darkorange btn-sm" data-bs-toggle="modal" data-bs-target="#VentanaEliminar">
                                                <i class="bi bi-trash-fill me-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                      <!-- Modal -->
                                    <div class="modal fade" id="VentanaEliminar" tabindex="-1"
                                        aria-labelledby="VentanaEliminar" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="VentanaEliminar">Eliminar producto...</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6><b>{{ auth()->user()->name }}</b>: ¿Desea eliminar el producto?</h6>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-danger btn-sm"href="{{ url('/eliminar/producto/orpl/' . $productos->idProducto) }}">Eliminar</a>
                                                    <button type="button" class="btn btn-success btn-sm" data-bs-dismiss="modal">Cancelar</button>
                                                </div>
                                            </div>
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
    @include('includes.footer_old')
@endsection
