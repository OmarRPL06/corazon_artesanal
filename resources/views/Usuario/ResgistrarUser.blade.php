@extends('layouts.base')
@section('contenido')

    <div class="container-card">
        <div class="card">
            <div class="card-header">
                <div class="card-title-orpl text-center">Alta usuario</div>
            </div>
            <div class="container-form">
                <form class="row g-3 font-sans-serif-orpl" action="{{route('usuario.RegistrarUser')}}" method="POST">
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
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="nombre"
                            placeholder="Ejemplo: Fulanito Gomez" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{2,100}"
                            title="Solo se aceptan letras.">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="apellido_Paterno"
                            placeholder="Ejemplo: Cruz" required>
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label">Apellido Materno:</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="apellido_Materno"
                            placeholder="Gomez" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}"
                            title="Solo Letras">
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">Telefono</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="telefono"
                            placeholder="Ejemplo: 9192412544" required title="Solo Letras y numeros">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Correo Electronico:</label>
                        <input type="email" class="form-control font-sans-serif-form-orpl" id="" name="email"
                            placeholder="Ejemplo:gomezjero98@gmail.com" required
                            title="Ingresa tu correo electronico">
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Contraseña</label>
                        <input type="password" class="form-control font-sans-serif-form-orpl" id="pass" name="password"
                            placeholder="Ejemplo: laselva.234#jgc#" required>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Usuario</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="user"
                            placeholder="Jgc2022laselva" required
                            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}" title="Solo Letras y numeros">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Tipo</label>
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="tipo"
                            placeholder="Ejemplo: Cliente mostrador" required
                            >
                    </div>
                    <div class="col-12">
                        <center>
                            <button type="submit" class="btn btn-darkorange btn-sm text-white">Registrar datos</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
