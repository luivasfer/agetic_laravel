@extends('plantillas.principal')

@section('titulo','Transparencia')

@section('contenido')
<?php  $opcionOn = 1 ;?>
<div id="contenido">
	<div class="row">
		<div class="col s12">
			<a href="transparencia" class="boton"><i><img class="imgSinEstilo" src="img/svg/volver.svg" width="15" alt="Volver"></i> Volver</a>
			<h4>Resumen Ejecutivo del Informe de Auditoria Interna AGETIC/UAI/INF N° – 003/2016, referente a la Planificación Estratégica y Programa Operativo Anual gestión 2016.</h4>
			<hr>
			<h4>Resumen Ejecutivo</h4>
			<h4>Agencia De Gobierno Electronico y Tecnologias de la Información y Comunicación</h4>
			<h4>Unidad de Auditoria Interna</h4>
			<h4>Programa Operativo Anual – Mayo a Diciembre de 2016</h4>
			<ol type="A">
				<li>Objetivos para la gestión 2016</li>
				<ol>
					<li>Dos informes de auditorias SAYCO</li>
					<li>Tres informes de auditoría especial</li>
				</ol>
				<li>Actividades relacionadas con los objetivos de gestión</li>
				<ol>
					<li>Dos informes de auditorias SAYCO</li>
						<ul>
							<li>Evaluación sobre la eficacia del diseño del Sistema de Programación de Operaciones. </li>
							<li>Evaluación sobre la eficacia del diseño del sistema de Presupuesto</li>
						</ul>
					<li>Tres informes de auditoría especial</li>
					<ul>
						<li>Auditoría Especial a la aprobación e implementación del PCO-DJBR. </li>
						<li>Auditoría Especial sobre almacenes.</li>
						<li>Auditoria Especial sobre activos fijos.</li>
					</ul>
					<li>Auditorías no programadas a requerimiento de la Máxima Autoridad del Ministerio de la AGETIC, Contraloría General del Estado o a criterio de la Unidad de Auditoría Interna.</li>
					<li>Capacitación y desarrollo profesional de los auditores internos</li>
					<ul>
						<li>Jefe 5 días</li>
						<li>Auditor 10 días</li>
					</ul>
				</ol>
			</ol>
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
