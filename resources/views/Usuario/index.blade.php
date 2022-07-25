@extends('layouts.base')
@section('contenido')

<div class="container">
    <br>
 <h4>Gestion de Usuarios</h4>
 <div class="row">
    <div class="col-xl-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Opciones</th>
                        <th>IdUser</th>
                        <th>Nombre</th>
                        <th>Apellido1</th>
                        <th>Apellido2</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Usuario</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <th><a href="#">Editar</a>|<a href="#">Eliminar</a></th>
                        <th>{{$usuario->idUser}}</th>
                        <th>{{$usuario->nombre}}</th>
                        <th>{{$usuario->apellido_Paterno}}</th>
                        <th>{{$usuario->apellido_Materno}}</th>
                        <th>{{$usuario->telefono}}</th>
                        <th>{{$usuario->email}}</th>
                        <th>{{$usuario->password}}</th>
                        <th>{{$usuario->user}}</th>
                        <th>{{$usuario->tipo}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>
</div>
@include('includes.footer')
@endsection