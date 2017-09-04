  <footer class="bg_grey">
	  <div class="container">
			<div class="divider divider_footer"></div>
		  <div class="section">
				<div class="row">
				  <div class="col l12 m12">
						<div class="txt_footer">
							<strong>Teatro ICTUS</strong> Sala <strong>La Comedia</strong><br> 
							Merced 349 - Barrio Lastarria<br>
							Reservas: <strong>+56 2 2 639 1523 / +56 2 2 639 2101</strong><br><br>
							A pasos de <strong>Metro Universidad Católica</strong> y <br> <strong>Metro Bellas Artes.</strong><br> Estacionamiento pagado a 50 mts.
						</div>
				  </div><!-- /.col -->
			  </div><!-- /.row -->
		  </div><!-- /.section -->
	  </div><!-- /.container -->
  </footer>
  
  <?php wp_footer(); ?>
  
  
  <script>
	  $(document).ready(function(){
		  $(".dropdown-button").dropdown({
			  hover: true
			});
		$("#owl-demo").owlCarousel({
		 			
	      navigation : false,
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem : true,
	      autoPlay : false,
	      stopOnHover : true,
	      paginationNumbers: false
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
		 
				});
			});
		  $('.collapsible').collapsible({
		        accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
      });
			$('.scrollspy').scrollSpy();
			$('.dropdown-button').dropdown('open');
  </script>
  
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-595fd8ffdab95fd2"></script>
  <script type="text/javascript">
		var addthis_config = addthis_config||{};
		addthis_config.lang = 'es' //show in Spanish regardless of browser settings;
	</script>

  </body>
</html>