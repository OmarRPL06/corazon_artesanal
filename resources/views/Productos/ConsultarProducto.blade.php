@extends('layouts.base')
@section('contenido')
    <div class="container-card">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card-title-orpl"><i> Mis Productos en Venta</i></div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ url('/registrar/producto/orpl') }}" class="btn btn-primary btn-sm">Subir Nuevo Producto
                            +</a>
                    </div>
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
                                    <a href="#" class="btn btn-primary">Comprar</a>
                                </div>
                            </div>
                            <br>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    @include('includes.footer')
@endsection
