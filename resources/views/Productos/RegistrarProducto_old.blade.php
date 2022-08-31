@extends('layouts.base_old')
@section('contenido')

    <div class="container-card">
        <div class="card">
            <div class="card-header">
                <div class="card-title-orpl text-center">Apartado para Vender Playera</div>
            </div>
            <div class="container-form">
                <div id="message">
                    @if (session('success'))
                        <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
                    @endif
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
                <form id="forms" class="row g-3 font-sans-serif-orpl" action="{{ route('registro.producto') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-6">
                        <label for="" class="form-label">Indica el nombre del producto:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id=""
                            name="nombre_producto" placeholder="Ej..: Playera Mexicana De Hombre Pantera Moda Original Artesanal" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Precio $00.00 MX:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="precio"
                            placeholder="Ingrese la colonia de donde vive..." required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Marca:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="tipo"
                            placeholder="Ingrese la marca del producto..." required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Modelo:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="tipo"
                            placeholder="Ingrese el modelo..." required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Tipo de tela:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="tipo"
                            placeholder="Ingrese el tipo de tela..." required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Estado del Producto:</label>
                        <select name="estado" class="form-control font-sans-serif-form-orpl">
                            <option>Elige una opción</option>
                            <option>Nuevo</option>
                            <option>Usado - Como nuevo</option>
                            <option>Usado - Buen estado</option>
                            <option>Usado - Aceptable</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Color:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="color"
                            placeholder="Ingrese el color.." required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Talla:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="talla"
                            placeholder="Ingrese la talla..." required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Tipo de manga:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id=""
                            name="manga" placeholder="Ingrese el tipo de manga..." required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Tipo de cuello:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id=""
                            name="cuello" placeholder="Ingrese el tipo de cuello..." required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Existencia:</label>
                        <input type="number" class="form-control font-sans-serif-form-orpl" id=""
                            name="existencia" placeholder="Ejmp: 1" required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">IVA / NA:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="iva"
                            placeholder="Ingrese la iva o NA..." required>
                    </div>
                    <div class="col-sm-3">
                        <label for="" class="form-label">Imagenes del producto:</label>
                        <input type="file" class="form-control font-sans-serif-form-orpl" id="" name="img"
                            placeholder="Ingrese el Estado..." required accept="image/*">
                    </div>
                    <div class="col-sm-12">
                        <center>
                            <button type="submit" class="btn btn-success btn-sm">Publicar</button>
                            <a href="{{ url('/consultar/producto/db/orpl') }}" class="btn btn-danger btn-sm">Cancelar</a>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('includes.footer_old')
@endsection

