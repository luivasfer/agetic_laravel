@extends('plantillas.principal')

@section('titulo','CTIC')

@section('contenido')
<?php  $opcionOn = 2 ;?>
	<div id="contenido">
		<div class="row">
			<div class="col s12">
				<h3>Consejo para las Tecnologías de Información y Comunicación del Estado Plurinacional de Bolivia (CTIC-EPB)</h3>
				<p class="wow fadeIn  ">El Consejo para las Tecnologías de Información y Comunicación del Estado Plurinacional de Bolivia (CTIC-EPB), es una instancia creada mediante el <span class="blanco"> Decreto Supremo N° 2514.</span> El Consejo es un espacio pensado para debatir temas específicos que sean relevantes en el ámbito de las TIC para la implementación de gobierno electrónico. A través del Consejo se elaborarán propuestas de normativa, estándares, protocolos, guías, catálogos y otros mecanismos técnicos para el funcionamiento de políticas coordinadas entre las instituciones de gobierno.</p>
				<a href="https://www.ctic.gob.bo/" target="_blank" >
					<img src="img/logo-ctic.png" alt="Logo ctic" class="hvr-wobble-vertical">
				</a>
			</div>
		</div>
		@include ('plantillas.includes.footer')
	</div>
@endsection

<!-- SUBMENU -->
@section ('submenu')
	@include ('plantillas/includes/submenuGobierno')
@endsection
