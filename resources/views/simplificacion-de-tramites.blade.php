@extends('plantillas.principal')

@section('titulo','Simplificación de trámites')

@section('contenido')
	<?php  $opcionOn = 2 ;?>
	<div id="contenido">
		<div class="row">
			<div class="col s12">
				<p class="wow fadeIn m1">Las bolivianas y los bolivianos podrán ahorrar en promedio un 70% de tiempo en sus trámites burocráticos: si antes se tardaban 10 días, ahora sólo serán 72 horas, reduciendo el costo de las legalizaciones y fotocopias.</p>
				<p class="wow fadeIn m1">A través de una reingeniería de procesos las instituciones y interoperabilidad de instituciones del Estado se logrará la desburocratización de la gestión pública y un gobierno más eficiente.</p>
				<p class="wow fadeIn m1">Con simplificación de trámites los papeles y las filas serán historia.</p>
				<h3 class="wow pulse">Certificados Digitales y Firma Digital</h3>
				<h4>Qué es Certificado Digital?</h4>
				<p class="wow fadeIn m2">Un certificado digital emitido por la Entidad Certificadora (ADSIB) le permite al signatario o usuario realizar firmas digitales avanzadas y autenticar su identidad con la validez legal, vincula un documento digital o mensaje electrónico de datos y garantiza la integridad del documento digital o mensaje electrónico con firma digital.</p>
				<h4 class="wow pulse">Qué es la Firma Digital?</h4>
				<p class="wow fadeIn m3">Es el conjunto de datos electrónicos integrados, ligados o asociados de manera lógica a otros datos electrónicos, utilizado por el signatario como su medio de identificación.</p>
				<h4 class="wow pulse">Para qué se utiliza la firma digital?</h4>
				<p class="wow fadeIn m3">Validar identidad, evitar falsificaciones, seguridad datos confidenciales, gestiones antes administraciones públicas, factura digital y otros.</p>

				<h3 class="wow pulse">Proyecto: Simplificación y Digitalización del Trámite de Habilitación a Defensas de Grado y Titulación en Universidades Privadas</h3>
				<p class="wow fadeIn m3">Es un proyecto que está coordinado entre el Ministerio de Educación y la AGETIC. El objetivo del proyecto es reducir los requisitos y tiempos invertidos por el estudiante en el trámite de habilitación a defensas de grado y de titulación profesional.</p>
				<p class="wow fadeIn m3">Mediante mecanismos de interoperabilidad con el SEGIP, a través de la digitalización, la Dirección General de Educación Superior Universitaria y la Unidad de Títulos del Ministerio realizará la sistematización de los planes de estudio y el desarrollo de un nuevo sistema informático, incorporando la firma digital como herramienta legal.</p>
				<p class="wow fadeIn m3">Esta modernización e implementación de la firma digital en el proceso permitirá reducir los tiempos hasta en un 70%. Si el proceso tenía una duración de 30 días ahora el trámite se reducirá a 3 días.</p>
				
				<h3 class="wow pulse">Proyecto: Firma Digital Aduana Nacional</h3>
				<p class="wow fadeIn m3">Es un proyecto coordinado entre la ADSIB, la Aduana Nacional y la AGETIC. El objetivo del proyecto es implementar la firma digital en los procesos aduaneros. En un primera fase se involucrará a los exportadores y en una segunda fase se integrará a los importadores como empresas de transporte y despachantes.</p>
				<p class="wow fadeIn m3">Se estima que alrededor de 5 mil operadores de comercio exterior utilicen la firma digital y un nuevo sistema informático desarrollado por la Aduana Nacional.</p>
				<p class="wow fadeIn m3">Como resultado, los operadores de comercio exterior ya no tendrán que entregar documentos físicos a la Aduana para realizar sus trámites. Todas la operaciones podrán realizarse remotamente desde el nuevo sistema y con la firma digital.</p>
				<h3 class="wow pulse">Proyecto: Recepción de Documentos Firmados Digitalmente</h3>
				<p class="wow fadeIn m3">Este proyecto está coordinado entre el Viceministerio de Telecomunicaciones, la ATT, ADSIB, ENTEL y AGETIC. El objetivo del proyecto incorporar la firma digital en los procesos administrativos de relacionamiento interinstitucional y/o recepción de correspondencia.</p>
				<p class="wow fadeIn m3">Como resultado del proyecto, las entidades públicas recepcionarán documentos digitalmente firmados y la realización de trámites en línea.</p>
				<h3 class="wow pulse">Comités Interinstitucionales de Simplificación de Trámites:</h3>
				<p class="wow fadeIn m3">Para el desarrollo de proyectos de Simplificación de Trámites, la AGETIC conforma Comités Interinstitucionales integradas por distintas instituciones convirtiéndolas en actores del proceso.</p>
				<p class="wow fadeIn m3">A la fecha AGETIC lidera el Comité Interinstitucional de Simplificación de Trámites del Proyecto de Afiliación en Cajas de Salud Patronal e Individual, en coordinación con once entidades que participan activamente del proyecto.</p>
			</div>
		</div>

		@include ('plantillas.includes.footer')
	</div>
@endsection

<!-- SUBMENU -->
@section ('submenu')
	@include ('plantillas/includes/submenuGobierno')
@endsection
