<?php get_header(); ?>
  
  <main>
	  <div class="container">
		  <div class="row">
	    	<div class="col s12">
	      	<div id="owl-demo" class="owl-carousel">
	   			<?php
			        $originales = array(
				        'post_type' => 'slider_home'
			        );
			        $query = new WP_Query( $originales ); 
					$e = 0;
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) : $query->the_post();
	        			$idprograma = get_the_ID();	
				?>			
				<div class="item banner_item">
					<?php if(get('texto_rojo')){ ?>
					<?php if(get('enlace')){ ?><a href="<?php echo get('enlace'); ?>" <?php if(get('enlace_externo')){ ?>target="_blank"<?php } ?> class="banner_item_post"><?php } ?>
						<h5><?php the_title(); ?></h5><!-- limitar a 50 caracteres -->
	            	<?php if(get('enlace')){ ?></a><!-- /.banner_item_post --><?php } ?>
	            	<?php } ?>
					<?php if(get('enlace')){ ?><a href="<?php echo get('enlace'); ?>" <?php if(get('enlace_externo')){ ?>target="_blank"<?php } ?>><?php } ?>
						<?php the_post_thumbnail('slider-home', array( 'class' => 'img-responsive' ) ); ?>
					<?php if(get('enlace')){ ?></a><!-- proporción 1600x600 --> <!-- dejar opcional link, _self o _blank --><?php } ?>
				</div><!-- /.banner_item -->
				<?php 		
	        			$e++;
		            endwhile; 
					} 
				?>							
	        </div><!-- /owl-demo -->
	    	</div><!-- /col -->
	  	</div><!-- /row -->
	  	
	  	<div class="divider"></div>
	  	
	  	<div class="section no-pad-bot">
				<div class="row">
					<div class="col l12">
						<div class="titulo_oscuro">
							Teatro Ictus <span> Cartelera</span>
						</div><!-- ./titulo -->
					</div><!-- /.col -->
				</div><!-- ./row -->
			</div><!-- /.section -->
				
			<div class="row">
				<div class="col l8 m6">

	   			<?php
			        $originales = array(
				        'post_type' => 'cartelera',
						'posts_per_page' => 1
			        );
			        $query = new WP_Query( $originales ); 
					$e = 0;
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) : $query->the_post();
	        			$idprograma = get_the_ID();	
				?>							
					
					<div class="section">	
						<div class="row">
							<div class="col l6">
								<?php the_post_thumbnail('noticias', array( 'class' => 'responsive-img' ) ); ?>
							</div>
							<div class="col l6 post_noticia_lg">
									<h5><?php the_title(); ?></h5>
									<p><?php the_excerpt(); ?></p><!-- limitar a 140 caracteres -->
								<a href="<?php bloginfo('url'); ?>/cartelera#cartelera<?php echo get_the_id(); ?>" target="_self" class="btn_rojo">Más Información</a>
							</div>
						</div><!-- /.row -->
					</div><!-- /.section -->
				<?php 		
	        			$e++;
		            endwhile; 
					} 
				?>			
					<div class="divider"></div><!-- /.divider -->


	   			<?php
			        $originales = array(
				        'post_type' => 'cartelera',
						'posts_per_page' => 1,
						'offset' => 1
			        );
			        $query = new WP_Query( $originales ); 
					$e = 0;
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) : $query->the_post();
	        			$idprograma = get_the_ID();	
				?>							
					<div class="section">
						<div class="row">
								<div class="col l6 push-l6 s12">
									<?php the_post_thumbnail('noticias', array( 'class' => 'responsive-img' ) ); ?>
								</div>
								<div class="col l6 pull-l6 s12 post_noticia_lg">
									<h5><?php the_title(); ?></h5>
									<p><?php the_excerpt(); ?></p><!-- limitar a 140 caracteres -->
									<a href="<?php bloginfo('url'); ?>/cartelera#cartelera<?php echo get_the_id(); ?>" target="_self" class="btn_rojo">Más Información</a>
								</div>
						</div><!-- /.row -->
					</div><!-- /.section -->
				<?php 		
	        			$e++;
		            endwhile; 
					} 
				?>			
					
				</div><!-- /.col -->
				
				<div class="col l4 m6 s12">
					<div class="section">
						<?php include('include-calendario.php'); ?>
					</div><!-- /.section -->
				</div><!-- /.col -->
			</div><!-- /.row -->
			
			<div class="divider"></div>
		
			<div class="section">
				<div class="row">
					<div class="col l12">
						<div class="titulo_oscuro">
							Noticias <span>Destacadas</span>
						</div><!-- ./titulo -->
					</div><!-- /.col -->
				</div><!-- ./row -->
			</div><!-- /.section -->
			
			<div class="row">
			<?php	                                         
			    $args = array(
					'category_name'  => 'noticia',
					'posts_per_page' => 3
			    );
				$the_query = new WP_Query ($args);
				
			    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			?> 				
				
				<div class="col l4 m4">
					<div class="post_noticia">
						<a href="<?php the_permalink(); ?>" target="_self" class="img_link">
							<?php the_post_thumbnail('noticias', array( 'class' => 'responsive-img' ) ); ?>
						</a><!-- proporción 580x300 -->
						<div class="section">
							<p><?php echo get_the_date(); ?></p>
							<h5><a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a></h5><!-- limitar a 70 caracteres -->
							<p><?php the_excerpt(); ?></p><!-- limitar a 140 caracteres -->
							<p><a href="<?php the_permalink(); ?>" target="_self">Continuar leyendo...</a></p>
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->
				</div><!-- /.col -->
				<?php endwhile; else: ?>
				<?php endif; ?>        				
			</div><!-- ./row -->
			
		</div><!-- /.container -->
			
		<div class="container-fluid bg_grey">
			<div class="container">
				<div class="section">
					<div class="row">
					  <div class="col l8 m8 hide-on-small-only">
						  <img src="<?php bloginfo('template_url'); ?>/assets/img/footer_60anos_personajes.png" class="responsive-img"/>
					  </div><!-- /.col -->
					  <div class="col l4 m4">
						  <img src="<?php bloginfo('template_url'); ?>/assets/img/footer_60anos_logo.png" class="responsive-img"/>
					  </div><!-- /.col -->
					</div><!-- /.row -->
			  </div><!-- /.section -->
			  
		  	<div class="section">
					<div class="row">
						<div class="col l4 m4">
							<div class="post_footer">
								<a href="" target="_self" class="img_link"><img src="<?php bloginfo('template_url'); ?>/assets/img/60anos_home1.jpg" class="responsive-img"/></a><!-- proporción 580x300 -->
								<div class="section">
									<h5>TEATRO ICTUS</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p><!-- limitar a 140 caracteres -->
									<a href="historia" target="_self" class="btn_rojo">Más Información</a>
								</div><!-- /.section -->
							</div><!-- /.post_noticia -->
						</div><!-- /.col -->
						
						<div class="col l4 m4">
							<div class="post_footer">
								<a href="" target="_self" class="img_link"><img src="<?php bloginfo('template_url'); ?>/assets/img/60anos_home2.jpg" class="responsive-img"/></a><!-- proporción 580x300 -->
								<div class="section">
									<h5>HISTORIA</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p><!-- limitar a 140 caracteres -->
									<a href="historia.html" target="_self" class="btn_rojo">Más Información</a>
								</div><!-- /.section -->
							</div><!-- /.post_noticia -->
						</div><!-- /.col -->
						
						<div class="col l4 m4">
							<div class="post_footer">
								<a href="" target="_self" class="img_link"><img src="<?php bloginfo('template_url'); ?>/assets/img/60anos_home3.jpg" class="responsive-img"/></a><!-- proporción 580x300 -->
								<div class="section">
									<h5>BIBLIOTECA</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p><!-- limitar a 140 caracteres -->
									<a href="biblioteca.html" target="_self" class="btn_rojo">Más Información</a>
								</div><!-- /.section -->
							</div><!-- /.post_noticia -->	
						</div><!-- /.col -->
					</div><!-- ./row -->
				</div><!-- /.section -->
			</div><!-- /.container -->
		</div><!-- /.container-fluid -->
  </main>
  
<?php get_footer(); ?>

			 
    <script>
	     moment.locale('es');

 var events = [
	<?php
        $eventos = array(
	        'post_type' 		=> 'cartelera',
		    'posts_per_page' 	=> '300'
        );
        $query = new WP_Query( $eventos ); 
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) : $query->the_post();
				$title = get_the_title();	
		
				$horarios = get_order_group('fechas_dia');
				foreach($horarios as $horario){   
	?>        
    { id: '<?php echo get_the_id(); ?>', date: '<?php echo  get('fechas_dia',$horario); ?>', title: '<?php echo $title; ?>', location: '<?php echo  get('fechas_horario',$horario); ?> <?php echo  get('fechas_precio',$horario); ?>' },
	  <?php 
		  }	
        endwhile; 
		} 
	?> 
  ];

  $('#mini-clndr').clndr({
    template: $('#mini-clndr-template').html(),
    weekOffset: 0,
    events: events,
    showAdjacentMonths: false,
	clickEvents: { 
		click: function(target) { 
			if(target.events.length) { 
				var daysContainer = $('#mini-clndr').find('.days-container'); 
				daysContainer.toggleClass('show-events', true); 
				var selectedClass = target.date.format('YYYY-MM-DD'); 
				$('.eventday').hide(); 
				$('.event-'+selectedClass).show(); 
				$('#mini-clndr').find('.x-button').click( function() { 
					daysContainer.toggleClass('show-events', false); 
				});
			} 
		} 
	},
    adjacentDaysChangeMonth: true,
    forceSixRows: true
  });

	</script>