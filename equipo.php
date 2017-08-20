<?php
/*

Template name: Equipo 

*/
get_header();
?>
	    
	    <div id="content">
		    <div class="container">
			    <div class="row">
				    <div class="col-sm-10 col-sm-offset-1">
					    <p class="interior_titulo">ELENCO ICTUS</p>
					    <div class="container-fluid">
						    <div class="row">
							    <?php
								    $args = array(
										'post_type' => 'equipo',
										'tax_query' => array(
											array(
												'taxonomy' => 'cargos',
												'field'    => 'slug',
												'terms'    => 'elenco-ictus',
											),
										),
									);
									$query = new WP_Query( $args );
									if ( $query->have_posts() ) {
										while ( $query->have_posts() ) : $query->the_post();
								?>
							    <div class="col-sm-2 equipo_foto">
								    <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ) ); ?>
								    <?php the_title(); ?>
								</div>
								<?php 		
						            endwhile; 
									} 
								?>	
						    </div>
					    </div>
					  </div>
			    </div><!-- /row -->
			    
			    <div class="row">
				    <div class="col-sm-8 col-sm-offset-2">
					    <p class="interior_titulo">COMUNICACIÓN Y EXTENSIÓN</p>
					    <div class="container-fluid">
						    <div class="row">
							    <?php
								    $args = array(
										'post_type' => 'equipo',
										'tax_query' => array(
											array(
												'taxonomy' => 'cargos',
												'field'    => 'slug',
												'terms'    => 'comunicacion-y-extension',
											),
										),
									);
									$query = new WP_Query( $args );
									if ( $query->have_posts() ) {
										while ( $query->have_posts() ) : $query->the_post();
								?>
							    <div class="col-sm-2 equipo_foto">
								    <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ) ); ?>
								    <?php the_title(); ?> <strong><?php echo get('cargo'); ?></strong>
								</div>
								<?php 		
						            endwhile; 
									} 
								?>	
						    </div>
					    </div>
					  </div>
			    </div><!-- /row -->
			    
			    <div class="row">
				    <div class="col-sm-6 col-sm-offset-3">
					    <p class="interior_titulo">SALA LA COMEDIA</p>
					    <div class="container-fluid">
						    <div class="row">
							    <?php
								    $args = array(
										'post_type' => 'equipo',
										'tax_query' => array(
											array(
												'taxonomy' => 'cargos',
												'field'    => 'slug',
												'terms'    => 'sala-la-comedia',
											),
										),
									);
									$query = new WP_Query( $args );
									if ( $query->have_posts() ) {
										while ( $query->have_posts() ) : $query->the_post();
								?>
							    <div class="col-sm-3 equipo_foto">
								    <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ) ); ?>
								    <?php the_title(); ?> <strong><?php echo get('cargo'); ?></strong>
								</div>
								<?php 		
						            endwhile; 
									} 
								?>	
						    </div>
					    </div>
					  </div>
			    </div><!-- /row -->
			    
			  </div><!-- /container -->
	    </div><!-- /content -->
	    
<?php get_footer(); ?>