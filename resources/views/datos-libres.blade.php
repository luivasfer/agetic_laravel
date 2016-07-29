@extends('plantillas.principal')

@section('titulo','Datos libres')

@section('contenido')
<?php  $opcionOn = 2 ;?>
	<div id="contenido">
		<div class="row">
			<div class="col s12">
				<p class="wow fadeIn">Los datos del gobierno son un bien colectivo y estarán abiertos para que cualquiera los pueda consultar, utilizar y complementar. Los ciudadanos y las ciudadanas podrán acceder a información pública de manera rápida y sencilla.</p>
				<p class="wow fadeIn">A través del conocimiento abierto se fomentarán procesos de innovación e investigación en diversos campos.</p>
				<p class="wow fadeIn">Todas y todos podremos utilizar nuestra información libremente.</p>
			</div>
		</div>

		@include ('plantillas.includes.footer')
	</div>
@endsection

<!-- SUBMENU -->
@section ('submenu')
	@include ('plantillas/includes/submenuGobierno')
@endsection
