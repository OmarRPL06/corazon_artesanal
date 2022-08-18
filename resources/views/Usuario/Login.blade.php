<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/styles-jps.css">
    <link rel="stylesheet" href="/bootstrap/css/omar.css">
    <link rel="stylesheet" href="/bootstrap/css/jaime.css">

    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>

<div class="container border">
    <div class="content position-absolute top-50 start-50 translate-middle">
        <div class="card alto" style="width: 18rem;">
            <div class="card-header text-center card-title-orpl bg-light-black color-darkorange">
                LOGIN
            </div>
            <div class="card-body">
                <form action="{{ route('usuario.store') }}" method="post" class="font-sans-serif-orpl text-center">
                    @csrf
                    <div class="content lbl-text">
                        <div class="mb-3">
                            <label for="">Usuario:</label>
                            <div class="mb-3">
                                <div class="col-ms-3">
                                    <input class="form-control font-sans-serif-form-orpl input-jps" type="email"
                                        name="email" placeholder="Digite su Usuario o Email..." required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 ">
                            <label for="">Contraseña:</label>
                            <div class="mb-3">
                                <div class="col-ms-3">
                                    <input class="form-control font-sans-serif-form-orpl input-jps" type="password" placeholder="Ingrese su contraseña..." name="password" required autocomplete="off">
                                </div>
                            </div>
                            @error('message')
                                <p class="text-error">Error: Ingrese los datos correctos</p>
                            @enderror
                        </div>
                    </div>
                    <input type="submit" value="INICIAR" class="btn btn-darkorange btn-jps btn-sm text-white">
                </form>
                <a href="/user/jgc" class="text-login">Crear una cuenta</a>
                <p>
                    <a href="#" class="text-login">Olvido su contraseña?</a>
                </p>
            </div>
        </div>
        <a href="/" class="text-login">Regresar</a>
    </div>
</div>
