@extends('layouts.base')
@section('contenido')

    <div class="container-card">
        <div class="card">
            <div class="card-header">
                <div class="card-title-orpl text-center">Vender Producto</div>
            </div>
            <div class="container-form">
                <form class="row g-3 font-sans-serif-orpl" action="#" method="POST">
                    @csrf
                    @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> -> {!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-12">
                        <label for="" class="form-label">Nombre del producto:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="nombres"
                            placeholder="Ingrese el nombre del producto" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{2,100}"
                            title="Solo se aceptan letras.">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Tipo de Producto:</label>
                        <input type="email" class="form-control font-sans-serif-form-orpl" id="" name="email"
                            placeholder="Ejemplo: Playeras, Pantalon, Shorts, Gorras, etc..." required>
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label">Modelo del Producto:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="calle"
                            placeholder="Ejemplo:" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}"
                            title="Solo Letras y numeros">
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">Existencia:</label>
                        <input type="number" class="form-control font-sans-serif-form-orpl" id="" name="ciudad"
                            placeholder="Ejmp: 1" required title="Solo Letras y numeros">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Talla:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="telefono"
                            placeholder="Ingrese su numero de telefono..." required pattern="[0-9]{10,10}"
                            title="Debe de contener 10 digitos y solo numeros">
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Color:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="num_calle"
                            placeholder="Ingrese el numero de la calle..." required pattern="[0-9]{1,50}"
                            title="Solo se aceptan numeros">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="colonia"
                            placeholder="Ingrese la colonia de donde vive..." required
                            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}" title="Solo Letras y numeros">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">IVA:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="colonia"
                            placeholder="Ingrese la colonia de donde vive..." required
                            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}" title="Solo Letras y numeros">
                    </div>

                    <div class="col-md-3">
                        <label for="" class="form-label">Imagen del producto:</label>
                        <input type="file" class="form-control font-sans-serif-form-orpl" id="" name="estado"
                            placeholder="Ingrese el Estado..." required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{1,254}"
                            title="Solo Letras">
                    </div>
                    <div class="col-12">
                        <center>
                            <button type="submit" class="btn btn-primary">Calcular Envío</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
