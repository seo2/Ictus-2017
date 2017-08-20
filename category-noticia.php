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
			
			<div class="section">
				<div class="row">
					<form class="col l6 offset-l3 s12" action="#">
  					<div class="busqueda">
              <div class="input-field">
                <input placeholder="Tu Búsqueda de Noticias" id="" type="text">
              </div>
              <button class="btn_busqueda" type="submit" name="action"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div><!-- /.busqueda -->
					</form>
				</div><!-- /.row -->
			</div><!-- /.section -->
			
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
			
			<div>
				<ul class="pagination center">
				    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
				    <li class="active"><a href="#!">1</a></li>
				    <li class="waves-effect"><a href="#!">2</a></li>
				    <li class="waves-effect"><a href="#!">3</a></li>
				    <li class="waves-effect"><a href="#!">4</a></li>
				    <li class="waves-effect"><a href="#!">5</a></li>
				    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
				</ul>
			</div>
			
		</div><!-- /.container -->
  </main>
  
<?php get_footer(); ?>