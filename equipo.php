<?php
/*

Template name: Equipo 

*/
get_header();
?>
	    
	    <div id="content">
		    <div class="container">
			    <div class="row">
				    <div class="col s10 offset-s1">
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
							    <div class="col s2 equipo_foto">
								    <?php the_post_thumbnail('full', array( 'class' => 'responsive-img' ) ); ?>
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
				    <div class="col s8 offset-s2">
					    <p class="interior_titulo">COMUNICACIÓN Y EXTENSIÓN</p>
					    <div class="container-fluid">
						    <div class="row center">
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
							    <div class="col s2 equipo_foto">
								    <?php the_post_thumbnail('full', array( 'class' => 'responsive-img' ) ); ?>
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
				    <div class="col s6 offset-s3">
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
							    <div class="col s3 equipo_foto">
								    <?php the_post_thumbnail('full', array( 'class' => 'responsive-img' ) ); ?>
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