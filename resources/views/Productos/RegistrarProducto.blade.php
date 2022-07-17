@extends('layouts.base')
@section('contenido')

    <div class="container-card">
        <div class="card">
            <div class="card-header">
                <div class="card-title-orpl text-center">Vender Producto</div>
            </div>
            <div class="container-form">
                <div id="message">
                    @if(session('success'))
                        <div class="alert alert-success text-center" role="alert">{{session('success')}}</div>
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
                <form id="forms" class="row g-3 font-sans-serif-orpl" action="{{ route('registro.producto') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="" class="form-label">Nombre del producto:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="nombre_producto"
                            placeholder="Ingrese el nombre del producto" required>
                        <input type="hidden" name="idUser" value="1">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Tipo de Producto:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="tipo"
                            placeholder="Ejemplo: Playeras, Pantalon, Shorts, Gorras, etc..." required>
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label">Modelo del Producto:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="modelo"
                            placeholder="Ejemplo:" required>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">Existencia:</label>
                        <input type="number" class="form-control font-sans-serif-form-orpl" id="" name="existencia"
                            placeholder="Ejmp: 1" required>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Talla:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="talla"
                            placeholder="Ingrese su numero de telefono..." required>
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Color:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="color"
                            placeholder="Ingrese el numero de la calle..." required>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="precio"
                            placeholder="Ingrese la colonia de donde vive..." required>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">IVA:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="iva"
                            placeholder="Ingrese la colonia de donde vive..." required>
                    </div>

                    <div class="col-md-3">
                        <label for="" class="form-label">Imagen del producto:</label>
                        <input type="file" class="form-control font-sans-serif-form-orpl" id="" name="img"
                            placeholder="Ingrese el Estado..." required accept="image/*">
                    </div>
                    <div class="col-12">
                        <center>
                            <button type="submit" class="btn btn-primary btn-sm">Registrar</button>
                            <a href="{{ url('/consultar/producto/db/orpl') }}" class="btn btn-danger btn-sm">Cancelar</a>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection

<script type="text/javascript">

    function borrar() {
        $("#message").load(" #message");
    }

    setInterval(function(){
        borrar();
    }, 3000);

</script>
