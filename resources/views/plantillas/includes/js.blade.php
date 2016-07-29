	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<!--script-->
	<script type="text/javascript">
		$(".button-collapse").sideNav();
	</script>
	<!-- tooltip -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.tooltipped').tooltip({delay: 50});
		});
	</script>
	<!-- bt scroll -->
	<script type="text/javascript">
	    $(document).ready(function(){
	        $(window).scroll(function(){
	            if ($(this).scrollTop() > 100) {
	                $('.scrollup').fadeIn();
	            } else {
	                $('.scrollup').fadeOut();
	            }
	        });
	        $('.scrollup').click(function(){
	            $("html, body").animate({ scrollTop: 0 }, 600);
	            return false;
	        });
	    });
	</script>

	<!-- ANIMACION -->
	<script src="js/animacion.js"></script>
	<script>
    	new WOW().init();
    </script>


    <!-- ACORDEON -->
    <script>
    	$(document).ready(function(){
		    $('.collapsible').collapsible({
		      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
		    });
		});
    </script>
    <!-- MODAL -->
    <script>
    	$(document).ready(function(){
	    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	    	$('.modal-trigger').leanModal();
	  	});
    </script>

    <!-- ORGANIGRAMA -->
    <script src="js/ajax.js"></script>
    <script src="js/organigrama.js"></script>
    <script>
		$(function() {
			var tree = new treefilter($("#my-tree"), {
				multiselect : true
			});
		});
	</script>

	<!-- MAPA -->
	<script src="http://www.openlayers.org/api/OpenLayers.js"></script>
	<script>
    	mapa = new OpenLayers.Map("divMapa");
    	mapa.addLayer(new OpenLayers.Layer.OSM());
    	mapa.zoomToMaxExtent();
	</script>