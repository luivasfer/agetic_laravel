@extends('plantillas.principal')

@section('titulo','Transparencia')

@section('contenido')
<?php  $opcionOn = 1 ;?>
<div id="contenido">
	<div class="row">
		<div class="col s12">
			<a href="transparencia" class="boton"><i><img class="imgSinEstilo" src="img/svg/volver.svg" width="15" alt="Volver"></i> Volver</a>
			<h4>Opinión del auditor interno “examen sobre la confiabilidad de los registros y estados financieros de la agetic</h4>
			<hr>
			<h4>Resumen Ejecutivo</h4>
			<p class=" ">Informe de Auditoría interna Nº AGETIC/UAI/INF N° – 001/2016, correspondiente a la evaluación del control interno de Examen sobre la Confiabilidad de los Registros y Estados Financieros de la Agencia de Gobierno Electrónico y Tecnologías de Información y Comunicación, por el periodo comprendido entre el 9 de septiembre al 31 de diciembre del 2015.</p>
			<p class=" ">El objetivo del examen de la confiabilidad fue emitir una opinión sobre la Confiabilidad de los registros contables y estados financieros terminados al 31 de diciembre de 2015 de acuerdo con las Normas del Sistema de Contabilidad Gubernamental Integrada como: la situación patrimonial y financiera, los resultados de sus operaciones, los flujos de efectivo, la evolución del patrimonio neto, la ejecución presupuestaria de recursos y gastos.</span></p>
			<p class=" ">Nuestro examen comprendió las principales operaciones, los registros utilizados y la siguiente información financiera emitida por la entidad para el ejercicio terminado al 31 de diciembre de 2015.</p>
			<ul>
				<li>Balance General</li>
				<li>Estado de Recurso y Gastos Corrientes</li>
				<li>Estado de Flujo de Efectivo</li>
				<li>Estado de Cambio en el Patrimonio Neto</li>
				<li>Estado de Ejecución Presupuestaria de Recursos</li>
				<li>Estado de Ejecución Presupuestaria de Gastos</li>
				<li>Cuenta Ahorro – Inversión – Financiamiento</li>
				<li>Notas a los Estados Financieros</li>
				<li>Estados de Cuenta e Información Complementaria</li>
				<li>Comprobantes contables de ingresos (C-21) y gastos (C-31) </li>
			</ul>
			<p class=" ">Como resultado de nuestra auditoria de confiabilidad de los registros y estados financieros correspondientes a la gestión 2015, se han identificado las siguientes deficiencias de control interno, habiéndose emitido las recomendaciones necesarias para subsanar las mismas.</p>
			<p class=" ">En nuestra opinión, los Estados Financieros Registros de Ejecución Presupuestaria de Recursos, Gastos y otros Estados Complementarios PRESENTAN INFORMACIÓN CONFIABLE sobre la situación patrimonial y financiera de la Entidad al 31 de Diciembre de 2015, como resultados de sus operaciones del año terminado a esa fecha, de acuerdo con las Normas Básicas del Sistema de Contabilidad Integrada aprobadas mediante Resolución Suprema N°222957 del 04 de marzo de 2005 y las Normas Básicas del Sistema de Presupuesto, aprobadas con Resolución Suprema N° 225558 de 01 de diciembre de 2005 y se ha considerado la aplicación de la Resolución Ministerial N° 704/89 del 22 de junio de 1989.</p>
			<p>La Paz, 29 de febrero de 2016</p>
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
