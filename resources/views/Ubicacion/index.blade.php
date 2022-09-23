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
							<li class="active">Contacto</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section padding-contact-orlp">
		<div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h4>Ponte en contacto con la empresa</h4>
                                <h3>Escribemos un mensaje</h3>
                            </div>
                            <form class="form bold" method="post" action="mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label>Escribe tu nombre completo<span>*</span></label>
                                            <input required name="name" type="text" placeholder="Ingresa tu nombre con apellidos...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Escribe tu correo electrónico<span>*</span></label>
                                            <input required name="email" type="email" placeholder="Ingresa tu correo electrónico...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Escribe tu número teléfono<span>*</span></label>
                                            <input required name="company_name" type="text" placeholder="Ingresa tu número de teléfono">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <label>Escribe tu Mensaje<span>*</span></label>
                                            <textarea required name="message" placeholder="Ingresa tu mensaje..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">Enviar Mensaje</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="single-head">
                            <div class="single-info">
                                <i class="fa fa-phone"></i>
                                <h4 class="title">Llámanos ahora:</h4>
                                <ul>
                                    <li>+52 919-173-54-21</li>
                                    <li>+52 919-173-54-21</li>
                                    <li>+52 919-173-54-21</li>
                                    <li>+52 919-173-54-21</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-envelope-open"></i>
                                <h4 class="title">Correo Electrónico:</h4>
                                <ul>
                                    <li><a href="mailto:info@yourwebsite.com">soporte_artesanal@gmail.com</a></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-location-arrow"></i>
                                <h4 class="title">Nuestra dirección:</h4>
                                <ul>
                                    <li>C. Segunda Pte. Sur 232, Barrio Guadalupe, 29950 Ocosingo, Chiapas.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<!--/ End Contact -->

	<!-- Map Section -->
	<div class="map-section">
        <div class="col-sm-12 ">
            @php
                $respuesta = file_get_contents('https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyC1013AP-y0F2d8zZtwDRbsFVVr7aMbblU&origin=16.903077,-92.095733&destination=16.903077,-92.095733&mode=driving');
                $json = json_decode($respuesta);

                $distancia = $json->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
                $duracion = $json->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"text"};
            @endphp
            <iframe class="sombra" width="100%" height="473" frameborder="0" style="border-radius:10px"
                src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyC1013AP-y0F2d8zZtwDRbsFVVr7aMbblU&origin=16.903077,-92.095733&destination=16.903077,-92.095733&mode=driving"
                allowfullscreen></iframe>
        </div>
    </div>
	<!--/ End Map Section -->

@include('includes.footer')
@endsection

