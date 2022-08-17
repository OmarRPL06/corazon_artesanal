@extends('layouts.base')
@section('contenido')

    <!-- Inicio Slider -->
    <div id="carouselExampleDark" class="carousel slide slide-top" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <center><img src="/imagenes/banner.jpg" class="d-block img-slider" width="700" height="380"></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pinturas Artesanales</h5>
                    <p>Pintaras 100% hechas con talento del artesano.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <center><img src="/imagenes/f16.jpeg" class="d-block img-slider" width="700" height="380"></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bordados y entre mas cosas</h5>
                    <p>Colchas, sabanas y mas cosas.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <center><img src="/imagenes/f13.jpg" class="d-block img-slider" width="700" height="380"></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Creación de telas artesanales</h5>
                    <p>Gran calidad en de las prendas a vender.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Fin Slider -->

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca3.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Gorra para mujer con bordado de flores</h5>
                                <!-- Product price-->
                                $200.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Rebaja badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca2.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Guayabera negra</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$320.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Rebaja badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca4.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Bolso artesanal</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$500.00</span>
                                $250.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca6.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">2 Guayaberas Artesanales Talla (2xl)</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $400.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Rebaja badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca5.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Funda artesanal con bordado para celular</h5>
                                <!-- Product price-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <span class="text-muted text-decoration-line-through btn-sm">$150.00</span>
                                $95.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/h3.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Camisa Guayabera Corte Artesanal Mexicano Talla M 1pz</h5>
                                <!-- Product price-->
                                $349.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Rebaja badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/h5.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Bonito Mandil Bordada Artesanal</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$600.00</span>
                                $298.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/jn.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Hermosa Blusa Artesanal Bordado Mariposa Altos De Chiapas</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $199.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca3.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Gorra para mujer con bordado de flores</h5>
                                <!-- Product price-->
                                $200.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Rebaja badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca2.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Guayabera negra</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$320.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Rebaja badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca4.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Bolso artesanal</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$500.00</span>
                                $250.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca6.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">2 Guayaberas Artesanales Talla (2xl)</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $400.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Rebaja badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/ca5.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Funda artesanal con bordado para celular</h5>
                                <!-- Product price-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <span class="text-muted text-decoration-line-through btn-sm">$150.00</span>
                                $95.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/h3.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Camisa Guayabera Corte Artesanal Mexicano Talla M 1pz</h5>
                                <!-- Product price-->
                                $349.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Rebaja badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Rebaja
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/h5.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Bonito Mandil Bordada Artesanal</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$600.00</span>
                                $298.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 alto">
                        <!-- Product image-->
                        <img class="card-img-top" src="/imagenes/jn.jpg"
                            alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Hermosa Blusa Artesanal Bordado Mariposa Altos De Chiapas</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $199.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto btn-sm" href="#">Comprar</a>
                                <button class="btn btn-darkorange btn-sm" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')
@endsection
