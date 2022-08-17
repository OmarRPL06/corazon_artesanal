<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/styles-jps.css">
    <link rel="stylesheet" href="/bootstrap/css/omar.css">
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>

<div class="container border">
    <div class="content position-absolute top-50 start-50 translate-middle">
        <div class="card alto" style="width: 18rem;">
            <div class="card-header text-center card-title-orpl">
                LOGIN
            </div>
            <div class="card-body">
                <form action="{{route('usuario.store')}}" method="post" class="font-sans-serif-orpl text-center">
                    @csrf

                    <div class="content lbl-text">
                        <div class="mb-3">
                            <label for="">Usuario</label>
                            <div class="mb-3">
                                <div class="col-ms-3">
                                    <input class="form-control font-sans-serif-form-orpl input-jps" type="email" name="email" value="" placeholder="Write your Email"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 ">
                            <label for="">Contraseña</label>
                            <div class="mb-3">
                                <div class="col-ms-3">
                                    <input class="form-control font-sans-serif-form-orpl input-jps" type="password" value=""
                                        placeholder="password" name="password" required>
                                </div>
                            </div>
                            @error('message')
                            <p>Error</p>
                            @enderror

                        </div>
                    </div>
                    <input type="submit" value="INICIAR" class="btn btn-primary btn-jps">
                </form>
                <a href="/user/jgc">Crear una cuenta</a>
                <p>
                    <a href="#">Olvido su contraseña?</a>
                </p>
            </div>
        <a href="/login">Regresar</a>

        </div>
    </div>
</div>