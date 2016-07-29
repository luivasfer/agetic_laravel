
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
		</div>
	</div>
	
	<!-- MENU PRINCIPAL-->
	@include ('plantillas.includes.menu-principal')

	@yield ('contenido')

	<!-- JS -->
	@include('plantillas.includes.js')

</body>
</html>