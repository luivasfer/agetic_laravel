
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield ('titulo') :: AGETIC</title>

	@include('plantillas.includes.css')
	
</head>
<body>
	<a href="#" class="scrollup hvr-float">Scroll</a>
	<!-- OPCION MENU RESPONSIVE -->
	@include('plantillas.includes.cabecera-responsive')		
	<!-- OPCION MENU RESPONSIVE -->

	<!-- MENU RESPONSIVE -->
	@include('plantillas.includes.menu-responsive')

	<div id="logoInterior">
		<a href="/">
			<img src="img/svg/logoAgetic1.svg" class="animated slideInRight">
		</a>
		<div id="submenuInterior">
			<h1 class="animated slideInLeft">@yield ('titulo')</h1>
			<hr>
			@yield ('submenu')
			<div id="submenuInteriorResponsive" class="animated fadeInRight">
				<input id="activar" name="activar" type="checkbox">
				<label class="inputlabel" for="activar"></label>
				<div class="desplegable">
					<div class=" m1 animated fadeInUp"><a href="#">Transparencia</a></div>
					<div class=" m2 animated fadeInUp"><a href="#">Orgranigrama</a></div>
					<div class=" m3 animated fadeInUp"><a href="#">Contacto</a></div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- MENU PRINCIPAL-->
	@include ('plantillas.includes.menu-principal')

	@yield ('contenido')

	<!-- JS -->
	@include('plantillas.includes.js')

</body>
</html>