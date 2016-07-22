@extends('plantillas.principal')

@section('titulo','Nosotros')

@section('contenido')
	<div id="contenido">
		<div class="row">
			<div class="col s12">
				<h3 class="wow pulse">Misión</h3>
				<p class="wow fadeIn m1">Liderar el proceso de desarrollo e implementación de gobierno electrónico y tecnologías de la información y comunicación orientados a la soberanía científica y tecnológica del Estado Plurinacional de Bolivia</p>
			</div>
			<div class="col s12">
				<h3 class="wow pulse">Visión</h3>
				<p class="wow fadeIn m2">La Agencia de Gobierno Electrónico y Tecnologías de la Información y Comunicación (AGETIC) es la institución líder del Estado Plurinacional en materia de gobierno electrónico y tecnologías de información y comunicación.</p>
			</div>
			<div class="col s12">
				<h3 class="wow pulse">Decreto y AGETIC</h3>
				<p class="wow fadeIn m3">La Agencia de Gobierno Electrónico y Tecnologías de Información y Comunicación se creó mediante Decreto Supremo N° 2514, el 9 de septiembre de 2015. Es una entidad descentralizada dependiente del Ministerio de la Presidencia. Sus competencias son:</p>
				<ul>
					<li class="wow fadeInRight">Desarrollo de Tecnologías de la Información y Comunicación.</li>
					<li class="wow fadeInRight">Simplificación de Trámites.</li>
					<li class="wow fadeInRight">Sistemas de Información para el Estado y la población.</li>
					<li class="wow fadeInRight">Seguridad informática de las entidades públicas del Estado Plurinacional de Bolivia.</li>
				</ul><a href=""></a>
			</div>
		</div>

		<div class="row">
			<div class="col x12 m6 l4">
				<img src="img/nosotros/imagen1.jpg" width="100%" alt="img1" class="wow flipInX m2">
				<hr>
				<p class="wow fadeInUp m1">La AGETIC impulsará la implementación de políticas, estrategias, acciones y servicios para avanzar en la soberanía científica y tecnológica, que priorice a las ciudadanas y los ciudadanos en su relación con el Estado.</p>
			</div>
			<div class="col x12 m6 l4">
				<img src="img/nosotros/imagen2.jpg" width="100%" alt="img2" class="wow flipInX m4">
				<hr>
				<p class="wow fadeInUp m3">Trabajará para que los bolivianos y las bolivianas accedan a los servicios y trámites estatales de manera simple e intuitiva, a la información pública de forma ágil y puedan ejercer control social a través de plataformas tecnológicas.</p>
			</div>
			<div class="col x12 m6 l4">
				<img src="img/nosotros/imagen3.jpg" width="100%" alt="img3" class="wow flipInX m6">
				<hr>
				<p class="wow fadeInUp m5">Se contribuirá a mejorar la calidad de la atención para todas y todos los bolivianos para el Vivir Bien.</p>
			</div>
		</div>
		@include ('plantillas.includes.footer')
	</div>
@endsection

<!-- SUBMENU -->
@section ('submenu')
	<div class="submenu">
		<a href="#" class="tooltipped m1 animated fadeInUp" data-position="buttom" data-delay="50" data-tooltip="Transparencia">
			<img src="img/svg/transparencia.svg" alt="Transparencia">
		</a>
		<a href="#" class="tooltipped m2 animated fadeInUp" data-position="buttom" data-delay="50" data-tooltip="Organigrama">
			<img src="img/svg/organigrama.svg" alt="organigrama">
		</a>
		<a href="#" class="tooltipped m3 animated fadeInUp" data-position="buttom" data-delay="50" data-tooltip="Contacto">
			<img src="img/svg/contacto.svg" alt="contacto">
		</a>
	</div>
@endsection
