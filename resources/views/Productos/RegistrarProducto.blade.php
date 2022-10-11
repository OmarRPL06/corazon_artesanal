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
                        <li class="active">Vender un articulo</li>
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
                            <h2>Vender Artículo</h2>
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
                            @csrf
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
                                        <label class="block">Categoría:<span>*</span></label>
                                        <select name="categoria" class="form-control">
                                            <option>Selecciona una categoría</option>
                                            <option>Playera</option>
                                            <option>Camisa</option>
                                            <option>Pantalon</option>
                                            <option>Short</option>
                                            <option>Blusa</option>
                                            <option>Falda</option>
                                            <option>Vestido</option>
                                            <option>Gorra</option>
                                            <option>Calzado</option>
                                            <option>Sandalia</option>
                                            <option>Accesorio</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Marca:<span>*</span></label>
                                        <input name="marca" type="text" placeholder="Ingrese la marca..." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Modelo:<span>*</span></label>
                                        <input name="modelo" type="text" placeholder="Ingrese el modelo..." required>
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
                                        <label>Foto(s):<span>*</span></label>
                                        <input class="form-control" name="img" type="file"
                                            placeholder="Ingrese el Estado..." required accept="image/*">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Descripción del producto:<span>*</span></label>
                                        <textarea name="descripcion" cols="30" rows="10" placeholder="Ingrese en este apartado, lo que es la talla, color, numero, material de que esta hecha, etc..."></textarea>
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
