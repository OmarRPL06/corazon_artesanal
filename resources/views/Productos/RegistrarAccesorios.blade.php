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
                        <li class="active"><a href="{{ url('/tipo/producto') }}">Tipo de producto<i class="ti-arrow-right"></i></a></li>
                        <li class="active">Vender Ropas</li>
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
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="form-main">
                        <div class="section-title text-center">
                            <h2>Apartado para vender Accesorios Artesanales</h2>
                        </div>
                        @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li> -> {!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form bold" action="{{ route('registro.producto') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Indica el nombre del producto:<span>*</span></label>
                                        <input type="text" name="nombre_producto"
                                            placeholder="Ej..: Playera Mexicana De Hombre Pantera Moda Original Artesanal"
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Precio $00.00 MX:<span>*</span></label>
                                        <input name="precio" type="text" placeholder="Ingrese el precio..." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Marca:<span>*</span></label>
                                        <input name="tipo" type="text" placeholder="Ingrese la marca..." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Modelo:<span>*</span></label>
                                        <input name="tipo" type="text" placeholder="Ingrese el modelo..." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Tipo de tela:<span>*</span></label>
                                        <input name="tipo" type="text" placeholder="Ingrese el tipo de tela..."
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Estado del Producto:<span>*</span></label>
                                        <select name="estado" class="form-control font-sans-serif-form-orpl">
                                            <option>Elige una opción</option>
                                            <option>Nuevo</option>
                                            <option>Usado - Como nuevo</option>
                                            <option>Usado - Buen estado</option>
                                            <option>Usado - Aceptable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Color:<span>*</span></label>
                                        <input name="color" type="text" placeholder="Ingrese el color.." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Talla:<span>*</span></label>
                                        <input name="talla" type="text" placeholder="Ingrese la talla..." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Tipo de manga:<span>*</span></label>
                                        <input name="manga" type="text" placeholder="Ingrese el tipo de manga..."
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Tipo de cuello:<span>*</span></label>
                                        <input name="cuello" type="text" placeholder="Ingrese el tipo de cuello..."
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Existencia:<span>*</span></label>
                                        <input name="existencia" type="text" placeholder="Ejemplo: 3" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>IVA / 0<span>*</span></label>
                                        <input name="iva" type="text" placeholder="Ingrese el iva o coloque 0..."
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Imagen del producto<span>*</span></label>
                                        <input class="form-control" name="img" type="file"
                                            placeholder="Ingrese el Estado..." required accept="image/*">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group button text-center">
                                        <button type="submit" class="btn ">Publicar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Contact -->

@include('includes.footer')
@endsection
