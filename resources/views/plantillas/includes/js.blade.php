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