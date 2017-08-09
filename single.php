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
			
	        <?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="section">
				<div class="row">
				<div class="col l10 offset-l1 s12">
					<div class="post_noticia_interior">
						<div id="owl-demo" class="owl-carousel">
							<div class="item banner_item">
							  <img src="<?php bloginfo('template_url'); ?>/assets/img/banner_edgardo_bruna.jpg" class="responsive-img"/><!-- proporción 1600x600 -->
							</div><!-- /.banner_item -->
		
							<div class="item banner_item">
							  <img src="<?php bloginfo('template_url'); ?>/assets/img/banner_edgardo_bruna.jpg" class="responsive-img"/><!-- proporción 1600x600 -->
							</div><!-- /.banner_item -->
							
							<div class="item banner_item">
							  <img src="<?php bloginfo('template_url'); ?>/assets/img/banner_edgardo_bruna.jpg" class="responsive-img"/><!-- proporción 1600x600 -->
							</div><!-- /.banner_item -->
							
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
				<div class="col l4 m4">
					<div class="post_noticia">
						<a href="noticia.html" target="_self" class="img_link"><img src="<?php bloginfo('template_url'); ?>/assets/img/noticia_01.jpg" class="responsive-img"/></a><!-- proporción 580x300 -->
						<div class="section">
							<p>Enero 1 de 2017</p>
							<h5><a href="noticia.html" target="_self">SALA LA COMEDIA SERÁ SEDE DE LA SEGUNDA EDICIÓN DEL ENCUENTRO FRONTERIZO</a></h5><!-- limitar a 70 caracteres -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p><!-- limitar a 140 caracteres -->
							<p><a href="noticia.html" target="_self">Continuar leyendo...</a></p>
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->
				</div><!-- /.col -->
				
				<div class="col l4 m4">
					<div class="post_noticia">
						<a href="" target="_self" class="img_link"><img src="<?php bloginfo('template_url'); ?>/assets/img/noticia_01.jpg" class="responsive-img"/></a><!-- proporción 580x300 -->
						<div class="section">
							<p>Enero 1 de 2017</p>
							<h5><a href="" target="_self">SALA LA COMEDIA SERÁ SEDE DE LA SEGUNDA EDICIÓN DEL ENCUENTRO FRONTERIZO</a></h5><!-- limitar a 70 caracteres -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p><!-- limitar a 140 caracteres -->
							<p><a href="#" target="_self">Continuar leyendo...</a></p>
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->
				</div><!-- /.col -->
				
				<div class="col l4 m4">
					<div class="post_noticia">
						<a href="" target="_self" class="img_link"><img src="<?php bloginfo('template_url'); ?>/assets/img/noticia_01.jpg" class="responsive-img"/></a><!-- proporción 580x300 -->
						<div class="section">
							<p>Enero 1 de 2017</p>
							<h5><a href="" target="_self">SALA LA COMEDIA SERÁ SEDE DE LA SEGUNDA EDICIÓN DEL ENCUENTRO FRONTERIZO </a></h5><!-- limitar a 72 caracteres -->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum dui sapien, non volutpat sem viverra vel. Donec eu nunc ac enim metus.</p><!-- /.140 caracteres -->
							<p><a href="#" target="_self">Continuar leyendo...</a></p>
						</div><!-- /.section -->
					</div><!-- /.post_noticia -->	
				</div><!-- /.col -->
			</div><!-- ./row -->
			
		</div><!-- /.container -->
  </main>
  

<?php get_footer(); ?>
