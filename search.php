<?php get_header(); ?>

  <main>
	  <div class="container">
			
			<div class="divider"></div>
		
			<div class="section">
				<div class="row">
					<div class="col l12 s12">
						<div class="titulo_oscuro">
							Resultado de la búsqueda: <span><?php echo $_GET['s']; ?></span>
						</div><!-- ./titulo -->
					</div><!-- /.col -->
				</div><!-- ./row -->
			</div><!-- /.section -->
			
			<?php include('include-search.php'); ?>
			
			<div class="row">
		    <?php
			    $e=0;
		    if (have_posts()) :
		    	while (have_posts()) :
		    		the_post();
		    		$e++;
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
			<?php
				
				if($e==3){
			?>
				<div class="clear"></div>
			<?php
					$e=0;
				}
				
		    	endwhile;
		    endif;
		    ?>			
			
			</div><!-- ./row -->
			

			
		</div><!-- /.container -->
  </main>
  
<?php get_footer(); ?>