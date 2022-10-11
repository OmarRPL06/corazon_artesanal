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
                        <li class="active">Crear Cuenta</li>
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
                            <h2>Crear Cuenta</h2>
                        </div>
                        @if(session('success'))
                            <ul class="alert alert-danger">
                                <li> -> {{session('success')}}</li>
                            </ul>
                        @endif
                        @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li> -> {!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form bold" action="{{ route('usuario.registrar') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre(s):<span>*</span></label>
                                        <input type="text" name="nombre"
                                            placeholder="Ingrese su Nombre..."
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Apellido Paterno:<span>*</span></label>
                                        <input name="apellido_paterno" type="text" placeholder="Ingrese su Apellido Paterno..." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Apellido Materno:<span>*</span></label>
                                        <input name="apellido_materno" type="text" placeholder="Ingrese su Apellido Materno..."
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Teléfono:<span>*</span></label>
                                        <input name="telefono" type="text" placeholder="Ingrese su num. de telefono..." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Correo electrónico:<span>*</span></label>
                                        <input name="email" type="text" placeholder="Ingrese su email..." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Contraseña:<span>*</span></label>
                                        <input name="password" type="text" placeholder="Mínimo 8 caracteres..." required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Repita su contraseña:<span>*</span></label>
                                        <input name="password_verify" type="text" placeholder="Mínimo 8 caracteres..." required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group button text-center padding-top-20">
                                        <button type="submit" class="btn">Registrarse</button>
                                        <a href="{{ url('/login') }}" class="btn">Ya tengo Cuenta</a>
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

    @include('includes.footer')
@endsection
