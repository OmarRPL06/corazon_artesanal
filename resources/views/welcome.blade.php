@extends('layouts.base')
@section('contenido')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/imagenes/f15.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>¡Forma parte de nuestra Tribu!</h5>
        <p>Corazón Artesanal se fundó en el 2022, con el objetivo de UNIR CULTURAS CON EL CORAZÓN.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/imagenes/f14.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Dejar una huella en el mundo</h5>
        <p>“Para cambiar al mundo es necesario comenzar por uno mismo”.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/imagenes/f13.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Aprender sobre nuevas culturas</h5>
        <p>Impulsar el valor que tiene la ARTESANÍA MEXICANA.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </section>
</div>

<!--/<div class="btn1">
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
</div>
</div>-->






</div>
</section>
<div class="container my-5">
  <div class="card red py-2" id="intro">
    <div class="card-body text-black">
      <h5 class="mb-4 font-weight-bold">Encuentra las mejores promociones y ofertas.</h5>
      <p class="mb-n2">Medios de pago:
        <a target="_blank" href="#" class="mb-2 mx-2 btn btn-primary"> ver todos</a>
      </p>
    </div>
  </div>

  <hr class="my-5">

  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
    </div>

    <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top" src="{{ asset('/imagenes/ca1.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Blusa tradicional</h4>
              <p class="card-text">Hecho y bordado a mano.</p>
              <a class="btn btn-primary">Añadir al carrito</a>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top" src="{{ asset('/imagenes/ca1.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Nombre articulo</h4>
              <p class="card-text">Descripcion del articulo.</p>
              <a class="btn btn-primary">Añadir al carrito</a>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top" src="{{ asset('/imagenes/ca1.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Nombre articulo</h4>
              <p class="card-text">Descripcion del articulo.</p>
              <a class="btn btn-primary">Añadir al carrito</a>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top" src="{{ asset('/imagenes/ca1.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Nombre articulo</h4>
              <p class="card-text">Descripcion del articulo.</p>
              <a class="btn btn-primary">Añadir al carrito</a>
            </div>
          </div>
        </div>

      </div>
      <!--/.Primera diapositiva-->

      <!--Segunda diapo -->
      <div class="carousel-item">
        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top" src="{{ asset('/imagenes/ca2.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Nombre articulo</h4>
              <p class="card-text">Descripcion del articulo.</p>
              <a class="btn btn-primary">Añadir al carrito</a>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top" src="{{ asset('/imagenes/ca2.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Nombre articulo</h4>
              <p class="card-text">Descripcion del articulo.</p>
              <a class="btn btn-primary">Añadir al carrito</a>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top" src="{{ asset('/imagenes/ca2.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Nombre articulo</h4>
              <p class="card-text">Descripcion del articulo.</p>
              <a class="btn btn-primary">Añadir al carrito</a>
            </div>
          </div>
        </div>

        <div class="col-md-3" style="float:left">
          <div class="card mb-2">
            <img class="card-img-top" src="{{ asset('/imagenes/ca2.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Nombre articulo</h4>
              <p class="card-text">Descripcion del articulo.</p>
              <a class="btn btn-primary">Añadir al carrito</a>
            </div>
          </div>
        </div>

      </div>
      <!--/.Second slide-->



    </div>
    <!--/.Slides-->

  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Paga con Mastercard</h5>
          <p class="card-text">10% de Descuento adicional.</p>
          <a href="#" class="btn btn-primary">Ver más</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Gorras y Playeras</h5>
          <p class="card-text">Hasta un 20% de descuento.</p>
          <a href="#" class="btn btn-primary">Ver más</a>
        </div>
      </div>
    </div>
  </div>

  <!--/.Second slide
<div class="card3">
<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>

<div class="card4">
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>-->

  <div class="card5 ">
    <div class="card bg-dark text-white">
      <img class="card-img" src="{{ asset('/imagenes/AR.jpg') }}" alt="Card image">
      <div class="card-img-overlay">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text">Last updated 3 mins ago</p>
      </div>
    </div>
  </div>

  <!--/<div class="card6">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
</div>-->

  <div class="cardjna">
    <div class="cardh1">
      <div class="card-body" style="text-align: center;">
        Lo mas Vendido.
      </div>
    </div>
    <div class="cardh2">
      <div class="cardh2" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('/imagenes/h1.jpg') }}" alt="">
        <div class="card-body">
          <p class="card-text">Blusa.</p>
        </div>
      </div>
    </div>
    <div class="cardh3">
      <div class="cardh3" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('/imagenes/h1.jpg') }}" alt="">
        <div class="card-body">
          <p class="card-text">Blusa.</p>
        </div>
      </div>
    </div>
  </div>

  @include('includes.footer')
  @endsection
