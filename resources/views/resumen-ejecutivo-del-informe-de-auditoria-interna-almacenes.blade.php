@extends('plantillas.principal')

@section('titulo','Transparencia')

@section('contenido')
<?php  $opcionOn = 1 ;?>
<div id="contenido">
	<div class="row">
		<div class="col s12">
			<a href="transparencia" class="boton"><i><img class="imgSinEstilo" src="img/svg/volver.svg" width="15" alt="Volver"></i> Volver</a>
			<h4>Resumen Ejecutivo del Informe de Auditoria Interna AGETIC/UAI/INF N° – 004/2016, referente a la Auditoria Especial sobre Almacenes</h4>
			<hr>
			<h4>Resumen Ejecutivo</h4>
			<h4>Informe de control interno emergente de la auditoria especial sobre almacenes, por el periodo comprendido entre el <span class="blanco"> 9 de septiembre al 31 de marzo del 2016.</span></h4>
			<p>Informe de Auditoría interna Nº AGETIC/UAI/INF N° – 004/2016, correspondiente a la Auditoria Especial sobre Almacenes, por el periodo comprendido entre el 9 de septiembre al 31 de marzo del 2016.</p>
			<p>El objetivo del presente examen es el de emitir una opinión independiente sobre el cumplimiento del ordenamiento jurídico administrativo y otras disposiciones legales relacionadas a la administración de almacenes, bienes de consumo, como el D.S. N° 181 del 28/06/2009 referente a las Normas Básicas del Sistema de Administración de Bienes y Servicios – Titulo II Subsistema de Manejo de Bienes, Capitulo II Administración de Almacenes.</p>
			<p>Nuestro examen comprendió las operaciones relacionadas con la administración de almacenes referente a: Recepción, ingreso, identificación, codificación, clasificación, catalogación, almacenamiento, asignación de espacios, salida de almacenes, registro de almacenes y medidas de salvaguarda, al 31 de marzo de 2016. Revisión que comprendió a: </p>
			<ul>
				<li>Estado de Ejecución presupuestaria de gastos al 31 de diciembre de 2015</li>
				<li>Mayor por objeto del gasto consolidado por partida al 31 de diciembre de 2015, del Grupo 30000</li>
				<li>Ejecución presupuestaria de gastos al 31 de marzo de 2016</li>
				<li>Mayor por objeto del gasto consolidado por partida al 31 de marzo de 2016, del Grupo 30000</li>
				<li>Registros de ejecución de gastos C-31, relacionados con el grupo 30000 y por el periodo de septiembre 2015 al 31 de marzo de 2016</li>
				<li>Estado de Materiales y Suministros al 31 de marzo de 2016, por grupo contable</li>
				<li>Inventario de Materiales y Suministros al 31 de diciembre de 2015 (físico valorado)</li>
				<li>Inventario de Materiales y Suministros al 31 de marzo de 2016 (físico valorado),</li>
				<li>Kardex de movimiento de Materiales y Suministros al 31 de diciembre de 2015,</li>
				<li>Kardex de movimiento de Materiales y Suministros al 31 de marzo de 2016,</li>
				<li>Archivo del registro de ingreso de materiales del 09 de septiembre al 31 de diciembre de 2015</li>
				<li>Archivo del registro de ingresos de materiales del 01 enero al 31 marzo de 2016,</li>
				<li>Archivo del registro de salida de materiales del 09 de septiembre al 31 de diciembre de 2015</li>
				<li>Archivo del registro de salida de materiales del 01 enero al 31 marzo de 2016.</li>
			</ul>
			<h4>Resultados de Examen</h4>
			<p>Como resultado de nuestra auditoria de la Auditoria Especial, se han identificado las siguientes deficiencias de control interno, habiéndose emitido las recomendaciones necesarias para subsanar las mismas.</p>
			<ol type="1">
				<li>Ausencia de manual de procedimientos para el manejo y administracion de almacenes</li>
				<li>Falta de implementación del sistema de almacenes</li>
				<li>Inadecuada asignación de códigos a los materiales que conforman el inventario de almacenes.</li>
				<li>Reportes del sistema de almacenes con información inadecuada</li>
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
