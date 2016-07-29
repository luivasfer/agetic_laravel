@extends('plantillas.principal')

@section('titulo','Organigrama')

@section('contenido')
<?php  $opcionOn = 1 ;?>
<div id="contenido">
	<div class="row">
		<div class="col s12">
			<ul id="my-tree">
				<li class="animated bounceInRight">
					<div class="personal">
						<div class="foto">
							<img src="img/personal/nicolas_laguna.jpg" alt="Nicolas Laguna">
						</div>
						<div class="datosPersonales">
							<h4>NICOLAS LAGUNA</h4>
							<h5>Director Ejecutivo</h5>
						</div>
						<a href="transparencia" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
							<div class="enlace"></div>
						</a>
					</div>
					<ul>
						<li class="animated fadeInRight wow">
							<div class="personal">
								<div class="foto">
									<img src="http://lorempixel.com/201/200/people" alt="Nicolas Laguna">
								</div>
								<div class="datosPersonales">
									<h4>PEDRO CANELAS</h4>
									<h5>Jefe de unidad administrativa financiera</h5>
								</div>
								<a href="transparencia" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>
							<ul>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/202/200/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>OMAR GUTIERREZ</h4>
											<h5>Responsable administrativo</h5>
										</div>
										<a href="transparencia" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de recursos humanos</div></li>
										<li><div>Profesional de bienes y servicios</div></li>
										<li><div>Profesional de activos fijos y almacén</div></li>
										<li><div>Técnico de apoyo administrativo</div></li>
										<li><div>Técnico de recursos humanos</div></li>
									</ul>
								</li>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/203/200/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>ARMANDO DÁVILA</h4>
											<h5>Responsable financiero</h5>
										</div>
										<a href="transparencia" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de contabilidad</div></li>
										<li><div>Profesional de presupuesto</div></li>
									</ul>									
								</li>
							</ul>
						</li>
						<li class="animated fadeInRight m1 wow">
							<div class="personal">
								<div class="foto">
									<img src="http://lorempixel.com/202/202/people" alt="Nicolas Laguna">
								</div>
								<div class="datosPersonales">
									<h4>PEDRO CANELAS</h4>
									<h5>Jefe de Unidad Jurídica</h5>
								</div>
								<a href="transparencia" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>
							<ul>
								<li><div>Profesional de Análisis</div></li>
								<li><div>Profesional de Gestión</div></li>
							</ul>
						</li>
						<li class="animated fadeInRight m2 wow">
							<div class="personal">
								<div class="foto">
									<img src="http://lorempixel.com/199/199/people" alt="Nicolas Laguna">
								</div>
								<div class="datosPersonales">
									<h4>NATALIA ANTEZANA</h4>
									<h5>Responsable de comunicación</h5>
								</div>
								<a href="transparencia" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>
							<ul>
								<li><div>Profesional de comunicación en redes sociales</div></li>
								<li><div>Técnico de diagramación</div></li>
							</ul>
						</li>
						<li class="animated fadeInRight m3 wow">
							<div class="personal">
								<div class="foto">
									<img src="http://lorempixel.com/205/205/people" alt="Nicolas Laguna">
								</div>
								<div class="datosPersonales">
									<h4>ALBERTO RAMOS</h4>
									<h5>Jefe de Unidad de Servicios e Infraestructura Tecnológica</h5>
								</div>
								<a href="transparencia" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>

							<ul>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/206/206/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>MARCO PALACIOS</h4>
											<h5>Responsable de servicios</h5>
										</div>
										<a href="transparencia" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de gestión de capacidad y disponibilidad</div></li>
										<li><div>Profesional de soporte técnico</div></li>
										<li><div>Técnico de soporte técnico interno</div></li>
									</ul>
								</li>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/206/206/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>RUBEN ANTEZANA</h4>
											<h5>Profesional de hardware y comunicaciones</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de administración de comunicaciones</div></li>
										<li><div>Técnico en administración de hardware</div></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="animated fadeInRight m4 wow">
							<div class="personal">
									<div class="foto">
										<img src="http://lorempixel.com/206/206/people" alt="Nicolas Laguna">
									</div>
									<div class="datosPersonales">
										<h4>ADRIAN CALDERON</h4>
										<h5>Jefe de unidad de gobierno electrónico</h5>
									</div>
									<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>
							<ul>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/207/207/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>RUBEN ROMERO</h4>
											<h5>Responsable de Información y Participación</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de Información socioeconómica</div></li>
										<li><div>Profesional de Información Geográfica</div></li>
										<li><div>Profesional de Proyectos de Información y participación</div></li>
										<li><div>Profesional en análisis de datos socioeconómicos</div></li>
										<li><div>Profesional en análisis de datos geográficos</div></li>
									</ul>
								</li>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/208/208/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>RAUL ALIAGA</h4>
											<h5>Responsable de Procesos y Procedimientos Gubernamentales</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de diseño de trámites</div></li>
										<li><div>Profesional de procesos y procedimientos</div></li>
										<li><div>Profesional de procesos de interoperabilidad</div></li>
										<li><div>Profesional en implementación de trámites</div></li>
										<li><div>Profesional en implementación de procesos y procedimientos</div></li>
										<li><div>Profesional en gestión de de proyectos de gobierno electrónico</div></li>
										<li><div>Profesional de apoyo en diseño de trámites</div></li>
										<li><div>Profesional de apoyo en procesos y procedimientos</div></li>
										<li><div>Profesional de gestión de interoperabilidad</div></li>
									</ul>					
								</li>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/209/209/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>SERGIO AGUILAR</h4>
											<h5>Responsable de coordinación interinstitucional</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de Relacionamiento Interinstitucional</div></li>
										<li><div>Profesional de Enlace Interinstitucional</div></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="animated fadeInRight m5 wow">
							<div class="personal">
								<div class="foto">
									<img src="http://lorempixel.com/198/198/people" alt="Nicolas Laguna">
								</div>
								<div class="datosPersonales">
									<h4>SYLVAIN DAMIEN LESAGE</h4>
									<h5>Jefe de unidad de innovación, investigación y desarrollo</h5>
								</div>
								<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>
							<ul>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/197/197/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>ELMER MENDOZA</h4>
											<h5>Responsable de investigación</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de investigación en seguridad de la información</div></li>
										<li><div>Profesional de investigación en gobierno electrónico</div></li>
										<li><div>Profesional de investigación en seguridad de la información</div></li>
										<li><div>Profesional de investigación en gestión de datos e información</div></li>
										<li><div>Profesional de investigación en gobierno electrónico</div></li>
									</ul>
								</li>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/198/198/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>NORMAN HUASEBE</h4>
											<h5>Responsable de desarrollo y actualización de servicios</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de innovación y diseño</div></li>
										<li><div>Profesional de desarrollo de sistemas</div></li>
										<li><div>Profesional de desarrollo web</div></li>
										<li><div>Profesional de desarrollo e implementación de modelo de datos</div></li>
										<li><div>Profesional de desarrollo móvil</div></li>
										<li><div>Técnico de desarrollo de sistemas</div></li>
										<li><div>Técnico de desarrollo de aplicaciones</div></li>
										<li><div>Técnico de desarrollo web</div></li>
									</ul>
								</li>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/197/197/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>MARCELO ARTEAGA</h4>
											<h5>Responsable de desarrollo de sistemas de información pública</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de innovación y diseño</div></li>
										<li><div>Profesional de desarrollo de sistemas</div></li>
										<li><div>Profesional de desarrollo de sistemas de información geográfica</div></li>
										<li><div>Profesional de desarrollo e implementación de modelo de datos</div></li>
										<li><div>Profesional de validación de sistemas</div></li>
										<li><div>Técnico de desarrollo de aplicaciones</div></li>
									</ul>
								</li>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/196/196/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>MIJAIL FLORES</h4>
											<h5>Responsable de innovación y desarrollo en gob. electrónico</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
								
									<ul>
										<li><div>Profesional de innovación y diseño</div></li>
										<li><div>Profesional de desarrollo</div></li>
										<li><div>Profesional de desarrollo de sistemas</div></li>
										<li><div>Profesional de desarrollo web</div></li>
										<li><div>Profesional de desarrollo de aplicaciones</div></li>
										<li><div>Profesional de desarrollo e implementación de modelo de datos</div></li>
										<li><div>Profesional de desarrollo móvil</div></li>
										<li><div>Profesional de validación de sistemas</div></li>
										<li><div>Técnico de desarrollo de sistemas</div></li>
										<li><div>Técnico de desarrollo de aplicaciones</div></li>
										<li><div>Técnico de desarrollo web</div></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="animated fadeInRight m6 wow">
							<div class="personal">
								<div class="foto">
									<img src="http://lorempixel.com/195/195/people" alt="Nicolas Laguna">
								</div>
								<div class="datosPersonales">
									<h4>HENRRY RAMOS</h4>
									<h5>Jefe de unidad Centro de Gestión de Incidentes Informáticos</h5>
								</div>
								<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>
							<ul>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/194/194/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>MIGUEL MELGAREJO</h4>
											<h5>Responsable de auditoría informática</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de evaluación de seguridad</div></li>
										<li><div>Profesional de análisis forense</div></li>
										<li><div>Profesional de detección de vulnerabilidades</div></li>
									</ul>
								</li>
								<li class="animated fadeIn">
									<div class="personal">
										<div class="foto">
											<img src="http://lorempixel.com/193/193/people" alt="Nicolas Laguna">
										</div>
										<div class="datosPersonales">
											<h4>ANGELA OVANDO</h4>
											<h5>Responsable de auditoría informática</h5>
										</div>
										<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
											<div class="enlace"></div>
										</a>
									</div>
									<ul>
										<li><div>Profesional de gestión de incidentes informáticos</div></li>
										<li><div>Profesional de gestión de amenazas y vulnerabilidades</div></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="animated fadeInRight m7 wow">
							<div class="personal">
								<div class="foto">
									<img src="http://lorempixel.com/192/192/people" alt="Nicolas Laguna">
								</div>
								<div class="datosPersonales">
									<h4>ILSE BACKOVIK</h4>
									<h5>Jefe de unidad Centro de Análisis de la Información</h5>
								</div>
								<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>
							<ul>
								<li><div>Profesional de análisis económico</div></li>
								<li><div>Profesional de análisis social</div></li>
								<li><div>Profesional de análisis político</div></li>
								<li><div>Profesional de análisis tecnológico</div></li>
								<li><div>Profesional de análisis económico</div></li>
								<li><div>Profesional de análisis social</div></li>
								<li><div>Profesional de análisis político</div></li>
								<li><div>Profesional de análisis tecnológico</div></li>
								<li><div>Secretaria</li>
							</ul>
						</li>
						<li class="animated fadeInRight m8 wow">
							<div class="personal">
								<div class="foto">
									<img src="http://lorempixel.com/191/191/people" alt="Nicolas Laguna">
								</div>
								<div class="datosPersonales">
									<h4>RAMIRO REINAGA</h4>
									<h5>Responsable de planificación</h5>
								</div>
								<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>
							<ul>
								<li><div>Profesional de planificación</div></li>
								<li><div>Profesional de seguimiento a la ejecución</div></li>
							</ul>
						</li>
						<li class="animated wow fadeInRight m9 ">
							<div class="personal">
								<div class="foto">
									<img src="http://lorempixel.com/191/191/people" alt="Nicolas Laguna">
								</div>
								<div class="datosPersonales">
									<h4>ANDRES PAREDES</h4>
									<h5>Responsable de auditoría interna</h5>
								</div>
								<a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="ver ficha">
									<div class="enlace"></div>
								</a>
							</div>
							<ul>
								<li><div>Profesional de apoyo en auditoría interna</div></li>
							</ul>
						</li>
						<li><div>Secretaria de dirección ejecutiva</div></li>
						<li><div>Secretaria de jefaturas de unidad</div></li>
						<li><div>Mensajero de dirección ejecutiva</div></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	
</div>

@endsection

<!-- SUBMENU -->
@section ('submenu')
	@include ('plantillas/includes/submenuNosotros')
@endsection
