@extends('plantillas.principal')

@section('titulo','Transparencia')

@section('contenido')
<?php  $opcionOn = 1 ;?>
	<div id="contenido">
		<div class="col s12">
			<ul class="collapsible popout" data-collapsible="accordion">
			    <li class="animated fadeIn">
			    	<div class="collapsible-header opcion">Recursos Humanos</div>
			      	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/escala-salarial-agetic-2016.pdf" target="_blank">Escala Salarial AGETIC 2016</a></td>
								</tr>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/organigrama.pdf" target="_blank">Organigrama</a></td>
								</tr>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/nomina-de-personal-agetic.pdf" target="_blank">Nómina personal AGETIC</a></td>
								</tr>
							</tbody>
						</table>
			      	</div>
			    </li>
			    <li class="animated fadeIn m1">
			    	<div class="collapsible-header opcion">Información Financiera</div>
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
									   		<p class=" ">5% de las recaudaciones de la ATT</p>
									   		<p class=" ">Presupuesto vigente 2016 - <span class="blanco">Bs. 30.580.336,00</span></p>
									   		<p class=" "> + Recursos adicionales para programas y proyectos</p>
									   	</div>
									</div>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>
			    <li  class="animated fadeIn m2">
			    	<div class="collapsible-header opcion">Información de Gestión</div>
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
			    	<div class="collapsible-header opcion">Informes de los resultados al exterior</div>
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
			    <li class="animated fadeIn m4">
			    	<div class="collapsible-header opcion">Marco normativo</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/ley-n-164.pdf" target="_blank">Ley N° 164</a></td>
								</tr>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/decreto-supremo-1793.pdf" target="_blank">Decreto Supremo 1793</a></td>
								</tr>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/resolucionbi-ministerial.pdf" target="_blank">ResolucionBi-ministerial</a></td>
								</tr>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/decreto-supremo-2514-creación-AGETIC.pdf" target="_blank">Decreto Supremo 2514 Creación AGETIC</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>
			    <li class="animated fadeIn m5">
			    	<div class="collapsible-header opcion">Transparencia Institucional</div>
			    	<div class="collapsible-body animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50"><img src="img/svg/pdf.svg" width="25" alt="pdf"></td>
									<td><a href="pdf/rendicion-de-cuentas-AGETIC-2016.pdf" target="_blank">Rendicion de Cuentas AGETIC 2016</a></td>
								</tr>
							</tbody>
						</table>
			    	</div>
			    </li>
			    <li class="animated fadeIn m6">
			    	<div class="collapsible-header">Informes de Auditoria</div>
			    	<div class="collapsible-body opcion animated pulse">
						<table>
							<tbody>
								<tr>
									<td width="50" valign=""><img src="img/svg/enlace.svg" style="vertical-align: super !important;" width="26" alt="pdf"></td>
									<td><a href="/informe-de-control-interno">Informe de control interno emergente del examen sobre la confiabilidad de los registros y estados financieros de la Agencia de Gobierno Electrónico y Tecnologías de Información y Comunicación, por el periodo comprendido entre el 9 de septiembre al 31 de diciembre del 2015.</a></td>
								</tr>

								<tr>
									<td width="50"><img src="img/svg/enlace.svg" width="26" alt="pdf"></td>
									<td><a href="opinion-del-auditor-interno">Opinión del auditor interno “Examen sobre la confiabilidad de los registros y estados financieros de la Agencia de Gobierno Electrónico y Tecnologías de Información y Comunicación, por el periodo comprendido entre el 9 de septiembre al 31 de diciembre del 2015”</a></td>
								</tr>

								<tr>
									<td width="50"><img src="img/svg/enlace.svg" width="26" alt="pdf"></td>
									<td><a href="resumen-ejecutivo-del-informe-de-auditoria-interna-poa">Resumen Ejecutivo del Informe de Auditoria Interna AGETIC/UAI/INF N° – 003/2016, referente a la Planificación Estratégica y Programa Operativo Anual gestión 2016</a></td>
								</tr>
								<tr>
									<td width="50"><img src="img/svg/enlace.svg" width="26" alt="pdf"></td>
									<td><a href="resumen-ejecutivo-del-informe-de-auditoria-interna-almacenes">Resumen Ejecutivo del Informe de Auditoria Interna AGETIC/UAI/INF N° – 004/2016, referente a la Auditoria Especial sobre Almacenes</a></td>
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
