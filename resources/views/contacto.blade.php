@extends('plantillas.principal')

@section('titulo','Contacto')

@section('contenido')
<?php  $opcionOn = 1 ;?>
<div id="contenido">
	<div class="row">
		<div class="col s12">
			<h3 class="wow pulse">Dirección</h3>
			<p class="wow fadeIn m1  ">Obrajes, Calle 9 esquina Costanerita # 104 Edificio Ministerio de Deportes Piso 4</p>
			<h3 class="wow pulse">Teléfono</h3>
			<p class="wow fadeIn m1  ">(591 -2) 2128706</p>
			<h3 class="wow pulse">Contacto</h3>
			<p class="wow fadeIn m1  "><a href="mailto:agetic@agetic.gob.bo.com">contacto@agetic.gob.bo</a></p>
			<h3 class="wow pulse center-align">Formulario de Contacto</h3>
		</div>
	</div>
	<div class="row">
		<form class="col s12">
			<div class="row">
				<div class="input-field col s12 m6">
					<input placeholder="Nombre (s)" id="nombre" type="text" class="validate">
					<label for="nombre">Datos Personales</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="apellido" type="text" class="validate">
					<label for="apellido">Apellido (s)</label>
				</div>
			</div>
			<div class="row animated wow fadeIn">
				<div class="input-field col s12">
					<input id="email" type="email" class="validate">
					<label for="email">Correo electrónico</label>
				</div>
			</div>
			<div class="row animated wow fadeIn m4">
		        <div class="input-field col s12">
		        	<textarea id="mensaje" class="materialize-textarea"></textarea>
		        	<label for="mensaje">Mensaje</label>
		        </div>
		    </div>
		    <div class="row animated wow fadeIn m5">
		    	<div>
		    		<input type="submit" class="btn guindobg" value="Enviar">
		    	</div>
		    </div>
		</form>
	</div>
	<div class="row">
		<div class="col s12">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-68.11019986867905%2C-16.529664174738144%2C-68.10665935277939%2C-16.52754793370751&amp;layer=mapnik&amp;marker=-16.528606057122303%2C-68.10842961072922" style="border: 4px solid #300024; box-shadow:4px 4px 10px rgba(0,0,0,.60); opacity:.80"></iframe>
		</div>
	</div>

	@include ('plantillas.includes.footer')
</div>
@endsection

<!-- SUBMENU -->
@section ('submenu')
@include ('plantillas/includes/submenuNosotros')
@endsection
