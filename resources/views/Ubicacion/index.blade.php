@extends('layouts.base')
@section('contenido')
    <div class="container-card">
        <div class="card">
            <div class="card-header">
                <div class="card-title-orpl text-center">Bienvenido, Verifica la distancia y el tiempo de recorrido en llegar
                    a la empresa NAHUTEC...</div>
            </div>
            <div class="container-form-map">
                <div class="row">
                    <div class="col-md-4">
                        <p>Rellena el formulario para ver el tiempo de recorrido.</p>
                        <div class="card bg-form">
                            <form class="row g-3 font-sans-serif-orpl" action="{{ route('buscar.ubicacion') }}"
                                method="POST">
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
                                <div class="col-md-12">
                                    <label for="" class="form-label">Estado:</label>
                                    <input type="text" class="form-control font-sans-serif-form-orpl" id=""
                                        name="estado" placeholder="Ingrese el Estado..." required
                                        pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{1,254}" title="Solo Letras">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Colonia/Barrio:</label>
                                    <input type="text" class="form-control font-sans-serif-form-orpl" id=""
                                        name="colonia" placeholder="Ingrese la colonia de donde vive..." required
                                        pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}" title="Solo Letras y numeros">
                                </div>
                                <div class="col-md-12">

                                    <label for="" class="form-label">Municipio:</label>
                                    <input type="text" class="form-control font-sans-serif-form-orpl" id=""
                                        name="municipio" placeholder="Ingrese la ciudad de donde vive..." required
                                        title="Solo Letras y numeros">
                                </div>

                                <div class="col-md-12">
                                    <label for="" class="form-label">Calle:</label>
                                    <input type="text" class="form-control font-sans-serif-form-orpl" id=""
                                        name="calle" placeholder="Ingrese el nombre de la calle en que vive..." required
                                        pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}" title="Solo Letras y numeros">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">N° de Calle:</label>
                                    <input type="text" class="form-control font-sans-serif-form-orpl" id=""
                                        name="num_calle" placeholder="Ejemplo: 74" required pattern="[0-9]{1,50}"
                                        title="Solo se aceptan numeros">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Codigo Postal:</label>
                                    <input type="text" class="form-control font-sans-serif-form-orpl" id=""
                                        name="c_postal" placeholder="Ejemplo: 29950" required pattern="[0-9]{1,50}"
                                        title="Solo se aceptan numeros">
                                </div>
                                <div class="col-md-12">
                                    <center>
                                        <button type="submit" class="btn btn-success btn-sm">Ver Recorrido</button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if (isset($estado))
                        <div class="col-md-8">
                            <p>Presentamos el Mapa del recorrido hacia la empresa.</p>
                            @php
                                $respuesta = file_get_contents('https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyC1013AP-y0F2d8zZtwDRbsFVVr7aMbblU&origin=16.903077,-92.095733&destination=' . $latitude . ',' . $longitude . '&mode=driving');
                                $json = json_decode($respuesta);

                                $distancia = $json->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
                                $duracion = $json->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"text"};
                            @endphp
                            <iframe class="sombra" width="100%" height="473" frameborder="0" style="border-radius:10px"
                                src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyC1013AP-y0F2d8zZtwDRbsFVVr7aMbblU&origin=16.903077,-92.095733&destination={{ $latitude }},{{ $longitude }}&mode=driving"
                                allowfullscreen></iframe>
                            <br class="d-lg-none d-block"><br class="d-lg-none d-block">
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="card-header">
                                <div class="row">
                                    <h5>Detalles del Recorrido:</h5>
                                    <hr>
                                    <div class="col-md-4">
                                        <p><b>Origen:
                                            </b>{{ $calle . ' #' . $num_calle . ', ' . $colonia . ', Municipio de ' . $municipio . ', ' . $estado . ', CP: ' . $c_postal }}.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><b>Destino : </b>C. Segunda Pte. Sur 232,
                                            Barrio Guadalupe, 29950 Ocosingo, Chiapas.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div><strong>Distancia: </strong>{{ $distancia }}</div>
                                        <div><strong>Duración: </strong>{{ $duracion }}</div>
                                        <div><strong>Modo: </strong><cite>Driving</cite></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-8">
                            <p>En esta parte mostramos la ubicación actual de la empresa.</p>
                            @php
                                $respuesta = file_get_contents('https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyC1013AP-y0F2d8zZtwDRbsFVVr7aMbblU&origin=16.903077,-92.095733&destination=16.903077,-92.095733&mode=driving');
                                $json = json_decode($respuesta);

                                $distancia = $json->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
                                $duracion = $json->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"text"};
                            @endphp
                            <iframe class="sombra" width="100%" height="473" frameborder="0" style="border-radius:10px"
                                src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyC1013AP-y0F2d8zZtwDRbsFVVr7aMbblU&origin=16.903077,-92.095733&destination=16.903077,-92.095733&mode=driving"
                                allowfullscreen></iframe>
                            <br class="d-lg-none d-block"><br class="d-lg-none d-block">
                        </div>
                        <div class="col-md-12">
                            <br>
                            <div class="card-header">
                                <div class="row">
                                    <h5>Descripción y Ubicación de la empresa actualmente:</h5>
                                    <hr>
                                    <div class="col-md-4">
                                        <p><b>NAHUTEC</b>, es una empresa muy reciente el cual a dado en marcha el proyecto de corazón artesanal, una aplicación web, donde los artesanos podrán vender sus productos en linea.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><b>Dirección: </b>C. Segunda Pte. Sur 232,
                                            Barrio Guadalupe, 29950 Ocosingo, Chiapas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
@php
$latitude = null;
$longitude = null;
@endphp
<script src="gmaps.min.js"></script>
<script type="text/javascript">
    var map;
    $(document).ready(function() {
        map = new GMaps({
            div: '#map',
            lat: {{ $latitude }},
            lng: {{ $longitude }},
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.HYBRID
        });

        map.addMarker({
            lat: {{ $latitude }},
            lng: {{ $longitude }}

        });
    });
</script>
