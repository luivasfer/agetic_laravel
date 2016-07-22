<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AGETIC - Bolivia :: Agencia de gobierno electrónico y tecnologías de las información y comunicación</title>

	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="css/incio.css">
	<link rel="stylesheet" href="css/animate.css">	
	<link rel="stylesheet" href="css/e_hover.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

	<nav id="menuResponsiveInicio">
		<ul class="right hide-on-med-and-down">
			<li><a href="#!">First Sidebar Link</a></li>
			<li><a href="#!">Second Sidebar Link</a></li>
		</ul>
		<ul id="slide-out" class="side-nav">
			<li>
				<a href="/" data-activates="nosotros" class="dropdown-button">
					<span class="iconosResponsive">
						<img src="img/svg/inicio.svg" width="25" alt="nosotros">
					</span>
					<span class="texto">Incio</span>
				</a>
			</li>
			<li>
				<a href="nosotros">
					<span class="iconosResponsive">
						<img src="img/svg/nosotros.svg" width="25" alt="nosotros">
					</span>
					<span class="texto">Nosotros</span>
				</a>
			</li>
			<li>
				<a href="gobierno-electronico">
					<span class="iconosResponsive">
						<img src="img/svg/gobierno_electronico.svg" width="25" alt="nosotros">
					</span>
					<span class="texto">Gobierno Electrónico</span>
				</a>
			</li>
			<li>
				<a href="prensa">
					<span class="iconosResponsive">
						<img src="img/svg/comunicacion.svg" width="25" alt="nosotros">
					</span>
					<span class="texto">Prensa</span>
				</a>
			</li>
			<li>
				<a href="campana">
					<span class="iconosResponsive">
						<img src="img/svg/campana.svg" width="25" alt="nosotros">
					</span>
					<span class="texto">Campaña</span>
				</a>
			</li>
		</ul>
		<a href="#" id="botonResponsive" data-activates="slide-out" class="button-collapse animated rotateIn">
			<div class="linea"></div>
			<div class="linea"></div>
			<div class="linea"></div>
		</a>
	</nav>
			
	
	
	<div class="container">
		<section id="logoPrincipal">
			<img src="img/svg/logoAgetic.svg" alt="Logo Agetic" class="animated fadeIn">
		</section>
		<div id="cajaMenuPrincipal">
			<section class="menuPrincipal">
				<a href="nosotros" class="o1 hvr-float animated flipInX">
					<div class="opciones">
						<img src="img/svg/nosotros.svg" alt="nosotros">
					</div>
					<h5>NOSOTROS</h5>
				</a>
				<a href="gobierno-electronico" class="o2 hvr-float animated flipInX">
					<div class="opciones">
						<img src="img/svg/gobierno_electronico.svg" alt="Gobierno Electrónico">
					</div>
					<h5>GOBIERNO ELECTRÓNICO</h5>
				</a>
				<a href="prensa" class="o3 hvr-float animated flipInX">
					<div class="opciones">
						<img src="img/svg/comunicacion.svg" alt="Prensa">
					</div>
					<h5>PRENSA</h5>
				</a>
				<a href="campanas" class="o4 hvr-float animated flipInX">
					<div class="opciones">
						<img src="img/svg/campana.svg" alt="Campañas">
					</div>
					<h5>CAMPAÑAS</h5>
				</a>
			</section>
		</div>

	</div>
	
	<footer>
		<div class="linea">
			<div class="banderaBolivia"></div>
			<span id="ministerio">Estado Plurinacional de Bolivia - Ministerio de la Presidencia</span>
			<div id="ministerio_e">Estado Plurinacional de Bolivia <br> Ministerio de la Presidencia <br></div>
			<div class="redSocial">
				<a href="https://www.facebook.com/AGETIC/" target="_blank"><div class="facebook hvr-float animated fadeIn"></div></a>
				<a href="https://twitter.com/AgeticBolivia" target="_blank"><div class="twitter hvr-float animated fadeIn"></div></a>
				<a href="https://www.youtube.com/channel/UCEJbZkvWhboLhVBSqC_XOoQ" target="_blank"><div class="youtube hvr-float animated fadeIn"></div></a>
				<a href="https://www.instagram.com/ageticbolivia/" target="_blank"><div class="instagram hvr-float animated fadeIn"></div></a>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>

	<!--script-->
	<script type="text/javascript">
		$(".button-collapse").sideNav();
	</script>
	
</body>
</html>