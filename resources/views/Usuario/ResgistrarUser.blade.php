@extends('layouts.base')
@section('contenido')

    <div class="container-card">
        <div class="card">
            <div class="card-header">
                <div class="card-title-orpl text-center">Alta usuario</div>
            </div>
            <div class="container-form">
<<<<<<< HEAD
                <form class="row g-3 font-sans-serif-orpl" action="#" method="POST">
=======
                <form class="row g-3 font-sans-serif-orpl" action="{{route(Usuario.store)}}" method="POST">
>>>>>>> jero10
                    /*@csrf
                    @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> -> {!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif*/
                    <div class="col-12">
                        <label for="" class="form-label">Nombre</label>
<<<<<<< HEAD
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="nombres"
=======
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="nombre"
>>>>>>> jero10
                            placeholder="Ejemplo: Fulanito Gomez" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{2,100}"
                            title="Solo se aceptan letras.">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Apellido Paterno: </label>
<<<<<<< HEAD
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="email"
=======
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="apellido_Paterno"
>>>>>>> jero10
                            placeholder="Ejemplo: Cruz" required>
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label">Apellido Materno:</label>
<<<<<<< HEAD
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="calle"
=======
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="apellido_Materno"
>>>>>>> jero10
                            placeholder="Gomez" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}"
                            title="Solo Letras">
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">Telefono</label>
<<<<<<< HEAD
                        <input type="number" class="form-control font-sans-serif-form-orpl" id="" name="ciudad"
=======
                        <input type="number" class="form-control font-sans-serif-form-orpl" id="" name="telefono"
>>>>>>> jero10
                            placeholder="Ejemplo: 9192412544" required title="Solo Letras y numeros">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Correo Electronico:</label>
<<<<<<< HEAD
                        <input type="gmail" class="form-control font-sans-serif-form-orpl" id="" name="telefono"
=======
                        <input type="gmail" class="form-control font-sans-serif-form-orpl" id="" name="gmail"
>>>>>>> jero10
                            placeholder="Ejemplo: gomezjero98@gmail.com" required
                            title="Debe de contener 10 digitos y solo numeros">
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Contraseña</label>
<<<<<<< HEAD
                        <input type="password" class="form-control font-sans-serif-form-orpl" id="" name="num_calle"
=======
                        <input type="password" class="form-control font-sans-serif-form-orpl" id="" name="password"
>>>>>>> jero10
                            placeholder="Ejemplo: laselva.234#jgc#" required pattern="[0-9]{1,50}"
                            title="Solo se aceptan numeros">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Usuario</label>
<<<<<<< HEAD
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="colonia"
=======
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="usuario"
>>>>>>> jero10
                            placeholder="Jgc2022laselva" required
                            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}" title="Solo Letras y numeros">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Tipo</label>
<<<<<<< HEAD
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="colonia"
                            placeholder="Ejemplo: Cliente mostrador" required
                            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9\s]{1,254}" title="Solo Letras y numeros">
=======
                        <input type="text" class="form-control font-sans-serif-form-orpl" id="" name="tipo"
                            placeholder="Ejemplo: Cliente mostrador" required
                            pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ0]" title="Solo Letras y numeros">
>>>>>>> jero10
                    </div>
                    <div class="col-12">
                        <center>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
