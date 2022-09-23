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
                        <li class="active">Tipo de producto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<div class="title padding-top-30 padding-left-20">
    <h4>Elige el tipo de publicación</h4>
</div>
<!-- Start Small Banner  -->
<section class="small-banner section padding-bottom-40 padding-left-10 padding-right-10">
    <div class="container-fluid">
        <div class="row">
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner alto">
                    <img src="/ecommerce/images/vender-ropa.jpg" alt="#">
                    <div class="content">
                        <p>Ropas de todo tipo</p>
                        <h3>Vender Ropas</h3>
                        <a href="{{ url('/registrar/producto/orpl') }}">Crear Publicación</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-banner alto">
                    <img src="/ecommerce/images/vender-calzado.jpg" alt="#">
                    <div class="content">
                        <p>Calzado de todo tipo</p>
                        <h3>Vender Calzado</h3>
                        <a href="#">Crear Publicación</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-12">
                <div class="single-banner tab-height alto">
                    <img src="/ecommerce/images/vender-accesorios.jpg" alt="#">
                    <div class="content">
                        <p>Otros Accesorios Artesanales</p>
                        <h3>Vender Accesorios</h3>
                        <a href="#">Crear Publicaión</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
        </div>
    </div>
</section>
<!-- End Small Banner -->
@include('includes.footer')
@endsection
