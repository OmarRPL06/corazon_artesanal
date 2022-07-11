@extends('layouts.base')
@section('contenido')
    <div class="container-tittle">
        <h3>BIENVENIDOS</h3>
        <h3>Javier Mejorará el Navbar</h3>
        <h3>y</h3>
        <h3>Jaime Mejorará el Footer</h3>
    </div>

    <div class="container-card-orpl">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/imagenes/ejemplo.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Ejemplo de como mostrar imagen en laravel</p>
            </div>
        </div>
    </div>
    <div class="container-card-orpl">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('/imagenes/ejemplo.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Ejemplo de como mostrar imagen en laravel</p>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
