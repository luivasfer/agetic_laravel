@extends('plantillas.principal')

@section('titulo','Organigrama')

@section('contenido')
<?php  $opcionOn = 1 ;?>
	<div id="contenido">
		<div class="col s12">
			<ul class="collapsible popout" data-collapsible="accordion">
			    <li class="animated fadeIn">
			    	<div class="collapsible-header opcion1">Derector General Ejecutivo</div>
			      	<div class="collapsible-body animated pulse">
						<div class="row">
							<div class="col s12">
								<div class="personal1">
									director
								</div>
								<hr class="hr1">
							</div>
							<div class="col m4">
								<div class="personal1">
									<div class="foto1">
										
									</div>
									director
								</div>
							</div>
							<div class="col m4">
								<div class="personal1">
									director
								</div>
							</div>
							<div class="col m4">
								<div class="personal1">
									director
								</div>
							</div>
						</div>
			      	</div>
			    </li>
			    <li class="animated fadeIn m1">
			    	<div class="collapsible-header opcion1">Unidad Administrativa Financiera</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/nomina-de-proveedores-2016.pdf" target="_blank">Nómina de Proveedores 2016</a></td>
								</tr>
								<tr>
									<td width="50">
										<img src="img/svg/archivo.svg" width="25" alt="pdf">
									</td>
									<td>
										<a href="#presupuesto" target="_blank" class="waves-light modal-trigger">Presupuesto</a>
									</td>
									
									<div id="presupuesto" class="modal">
									   	<div class="modal-content">
									   		<h4>Presupuesto</h4>
									   		<hr>
									   		<p>5% de las recaudaciones de la ATT</p>
									   		<p>Presupuesto vigente 2016 - <span class="blanco">Bs. 30.580.336,00</span></p>
									   		<p> + Recursos adicionales para programas y proyectos</p>
									   	</div>
									</div>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>
			    <li  class="animated fadeIn m2">
			    	<div class="collapsible-header opcion1">Unidad Jurídica</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/informacion-gestion.pdf" target="_blank">Información de Gestión</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>
			  
			    <li  class="animated fadeIn m3">
			    	<div class="collapsible-header opcion1">Responsable de comunicación</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/informes-viajes-exterior.pdf" target="_blank">Informes de los resultados al exterior</a></td>
								</tr>
							</tbody>http://www.agetic.gob.bo/index.php/transparencia/
						</table>
			    	</div>
			    </li>
			  
			    <li  class="animated fadeIn m3">
			    	<div class="collapsible-header opcion1">Unidad Servicios e Infraestructura Tecnológica</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/informes-viajes-exterior.pdf" target="_blank">Informes de los resultados al exterior</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>
			  
			    <li  class="animated fadeIn m3">
			    	<div class="collapsible-header opcion1">Unidad Gobierno Electrónico</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/informes-viajes-exterior.pdf" target="_blank">Informes de los resultados al exterior</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>

			    <li  class="animated fadeIn m3">
			    	<div class="collapsible-header opcion1">Unidad Innovación, Investigación y Desarrollo</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/informes-viajes-exterior.pdf" target="_blank">Informes de los resultados al exterior</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>
			    
				<li  class="animated fadeIn m3">
			    	<div class="collapsible-header opcion1">Unidad Centro de Gestión de Incidentes Informáticos</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/informes-viajes-exterior.pdf" target="_blank">Informes de los resultados al exterior</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>

			    <li  class="animated fadeIn m3">
			    	<div class="collapsible-header opcion1">Unidad Centro de Análisis de la Información</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/informes-viajes-exterior.pdf" target="_blank">Informes de los resultados al exterior</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>

				<li  class="animated fadeIn m3">
			    	<div class="collapsible-header opcion1">Responsable de auditoría informática</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/informes-viajes-exterior.pdf" target="_blank">Informes de los resultados al exterior</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>

			    <li  class="animated fadeIn m3">
			    	<div class="collapsible-header opcion1">Responsable de auditoría interna</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/informes-viajes-exterior.pdf" target="_blank">Informes de los resultados al exterior</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>
			    

		  	</ul>
		</div>
		@include ('plantillas.includes.footer')
	</div>
@endsection

<!-- SUBMENU -->
@section ('submenu')
	@include ('plantillas/includes/submenuNosotros')
@endsection
