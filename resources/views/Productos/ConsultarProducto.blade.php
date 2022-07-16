@extends('layouts.base')
@section('contenido')
    <div class="container-card">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card-title-orpl text-center">Mis Productos en Venta</div>
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
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of
                                        the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
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
