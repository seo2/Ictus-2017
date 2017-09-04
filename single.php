<?php get_header(); ?>
  
  <main>
	  <div class="container">
			
			<div class="divider"></div>
		
			<div class="section">
				<div class="row">
					<div class="col l12 s12">
						<div class="titulo_oscuro">
							Noticias <span>Destacadas</span>
						</div><!-- ./titulo -->
					</div><!-- /.col -->
				</div><!-- ./row -->
			</div><!-- /.section -->

			<?php include('include-search.php'); ?>
			
	        <?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php 
				$elid 		= get_the_id();
				$exclude_ids = array($elid);
					
			?>
			<div class="section">
				<div class="row">
				<div class="col l10 offset-l1 s12">
					<div class="post_noticia_interior">
						
						<div id="owl-demo" class="galeriafotos owl-carousel">
							<div class="item banner_item">
								<?php the_post_thumbnail('noticias', array( 'class' => 'responsive-img' ) ); ?>
							</div><!-- /.banner_item -->
					        <?php $imagenes = muestra_galeria(); ?>
							<?php foreach ($imagenes as $imagen): ?>
							<div class="item banner_item">
								<img src="<?php echo wp_get_attachment_url($imagen->ID); ?>" class="responsive-img"/>
							</div><!-- /.banner_item -->
							<?php endforeach ?> 
						</div><!-- /owl-demo -->
						
						<div class="section">
							<p><?php echo get_the_date(); ?></p>
							<h5><?php the_title(); ?></h5>
							
							<p>Por <strong><?php the_author(); ?></strong></p><br>
							<?php the_content(); ?>
							
						</div><!-- /.section -->
					</div><!-- /.post_noticia_interior -->
				</div><!-- /.col -->
			</div><!-- ./row -->
			</div><!-- /.section -->

<?php endwhile; ?>
<?php // Navegación ?>
<?php else : ?>
<?php // Cuando no hay post ?>
<?php endif; ?>			
			<div class="divider"></div>
		
			<div class="section">
				<div class="row">
					<div class="col l12">
						<div class="titulo_oscuro">
							Noticias <span>Relacionadas</span>
						</div><!-- ./titulo -->
					</div><!-- /.col -->
				</div><!-- ./row -->
			</div><!-- /.section -->
			
			
			<div class="row">
			<?php	                                         
			    $args = array(
					'category_name'  => 'noticia',
					'posts_per_page' => 3,
					'orderby'		 => 'rand',
					'post__not_in'   => $exclude_ids
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
  </main>
  

<?php get_footer(); ?>
