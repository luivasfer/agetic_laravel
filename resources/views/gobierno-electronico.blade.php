@extends('plantillas.principal')

@section('titulo','Gobierno Electrónico')

@section('contenido')
<?php  $opcionOn = 2 ;?>
	<div id="contenido">

		<div class="row">
			<div class="col s12">
				<p class="wow fadeIn m1">Es un cambio en la forma de gestionar y administrar el bien común y los recursos públicos, que incorpora la tecnología y los principios de la eficiencia y eficacia en la atención al ciudadano y la ejecución de obras y presupuesto público.</p>
				<p class="wow fadeIn m1">A través de estas plataformas tecnológicas, también se podrá acceder a la información estatal de manera ágil y se impulsará la participación de la sociedad.</p>
				<p class="wow fadeIn m1">Gobierno Electrónico garantizará servicios más cercanos y eficientes para los bolivianos y las bolivianas.</p>
				<h3 class="wow pulse">Plan de Implementación de Gobierno Electrónico</h3>
				<p class="wow fadeIn m2">El Plan de Implementación de Gobierno Electrónico tiene como objetivo la modernización del Estado empleando tecnologías de información y comunicación y otras herramientas que permitan otorgar servicios y atención de calidad a la ciudadanía, transparentar la gestión pública garantizando el derecho a la información y generando mecanismos tecnológicos de particitext-decoration: none;pación y control social para las y los ciudadanos, organizaciones sociales y pueblos y naciones indígena originario campesinos.</p>
				<h3 class="wow pulse">Plan de Implementación de Software Libre y Estándares Abiertos</h3>
				<p class="wow fadeIn m3">El Plan de Implementación de Software Libre y Estándares Abiertos tiene como objetivo establecer los lineamientos que orienten a las entidades públicas a la adopción del uso de software libre y estándares abiertos. Este plan comprende la política orientada al desarrollo de seguridad informática nacional, descolonización del conocimiento y soberanía tecnológica, generando las condiciones para la producción y desarrollo de la industria tecnológica en el Estado Plurinacional de Bolivia.</p>
				<h3 class="wow pulse">Datos Abiertos</h3>
				<p class="wow fadeIn m3">Los datos del gobierno son un bien colectivo y estarán abiertos para que cualquiera los pueda consultar, utilizar y complementar. Los ciudadanos y las ciudadanas podrán acceder a información pública de manera rápida y sencilla.</p>
				<p class="wow fadeIn m3">A través del conocimiento abierto se fomentarán procesos de innovación e investigación en diversos campos.</p>
				<p class="wow fadeIn m3">Todas y todos podremos utilizar nuestra información libremente.</p>
				<h3 class="wow pulse">Soberanía Tecnológica</h3>
				<p class="wow fadeIn m3">La liberación científica y tecnológica de los bolivianos y las bolivianas requiere romper los lazos de dependencia que desde el principio de la colonización española nos han mantenido sólo como consumidores de tecnología.</p>
				<p class="wow fadeIn m3">El desarrollo y control efectivo de nuestro pueblo sobre la tecnología que utiliza, permitirá que nos convirtamos en productores de conocimiento para conducir nuestro futuro.</p>
				<p class="wow fadeIn m3">Un pueblo milenario con soberanía tecnológica es invencible.</p>
				<h3 class="wow pulse">Interoperabilidad</h3>
				<p class="wow fadeIn m3">Es la forma en que las instituciones comparten información en el mundo digital mediante la interacción entre sistemas, evitando el uso de papel para el beneficio de la ciudadanía.</p>
				<p class="wow fadeIn m3">Con la Interoperabilidad de instituciones del Estado se logrará la desburocratización de la gestión pública y un gobierno más eficiente.</p>
				<h3 class="wow pulse">Ciber Seguridad</h3>
				<p class="wow fadeIn m3">Se desarrollarán e implementarán políticas, prácticas y control para proteger la infraestructura de tecnologías de información y comunicación del Estado Plurinacional de Bolivia para que la información del país no sea vulnerada por ningún individuo, gobierno, ni corporaciónservice_area nacional o internacional.</p>
				<p class="wow fadeIn m3">Las ciudadanas y las ciudadanos cuentan con el derecho universal al acceso y uso de las tecnologías de información y comunicación y el derecho constitucional a la privacidad.</p>
				<p class="wow fadeIn m3">La información del Estado y la sociedad boliviana estará protegida.</p>
			</div>
			<div class="col s12">
				
				
			</div>
			<div class="col s12">
				
				
			</div>
		</div>

		@include ('plantillas.includes.footer')
	</div>
@endsection

<!-- SUBMENU -->
@section ('submenu')
	@include ('plantillas/includes/submenuGobierno')
@endsection
