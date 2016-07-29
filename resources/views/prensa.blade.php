@extends('plantillas.principal')

@section('titulo','Prensa')

@section('contenido')
	<?php  $opcionOn = 3 ;?>
	<div id="contenido">
		<div class="row">
			<div class="col s12">
				<p class="wow fadeIn">Falta contenido</p>
				<p class="wow fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, cupiditate? Enim quod qui officia error atque aliquam ex beatae, cumque odio assumenda asperiores, dolores nostrum soluta aspernatur recusandae perferendis alias.</p>
			</div>
		</div>
		@include ('plantillas.includes.footer')
	</div>
@endsection

<!-- SUBMENU -->
@section ('submenu')
	@include ('plantillas/includes/submenuPrensa')
@endsection
