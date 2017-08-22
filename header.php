<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  
  <?php wp_head(); ?>
  
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico" />
  
</head>
<body data-spy="scroll"  data-target=".ajustar_menu">
	
	<header>
	  <div class="top_menu">
		  <div class="container barra_menu">
			  <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_ictus.png" width="120" height="120"/>
		  </div><!-- /.barra_menu -->
		  
		  <div class="ajustar_menu">
		  	<nav role="navigation" class="menu">
		      <div class="nav-wrapper container">
		        <a id="logo-container" href="<?php bloginfo('url'); ?>" class="brand-logo left"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo_ictus_horizontal.png" class="retina" alt="Teatro Ictus"/></a>
		        
		        <ul class="right hide-on-med-and-down">
		          	<li><a href="<?php bloginfo('url'); ?>" target="_self" <?php if(is_home()){ ?>class="active"<?php } ?>>Portada</a></li>
		          	<li><a href="<?php bloginfo('url'); ?>/cartelera" target="_self" <?php if(is_post_type_archive('cartelera')){ ?>class="active"<?php } ?>>Cartelera</a></li>
		          	<li><a href="<?php bloginfo('url'); ?>/category/noticia" target="_self" <?php if(is_category('noticia')){ ?>class="active"<?php } ?>>Noticias</a></li>
		          	<li><a href="<?php bloginfo('url'); ?>/ictus-60-anos" target="_self"  <?php if(is_page('ictus-60-anos')){ ?> class="active"<?php } ?>>Historia</a></li>
<!-- 		          	<li><a href="biblioteca.html" target="_self" class="">Biblioteca</a></li> -->
		          	<li><a href="<?php bloginfo('url'); ?>/equipo" target="_self" <?php if(is_page('equipo')){ ?> class="active"<?php } ?>>Equipo</a></li>
		          	<li><a href="<?php bloginfo('url'); ?>/contacto" target="_self" <?php if(is_page('contacto')){ ?> class="active"<?php } ?>>Contacto</a></li>
		          	<li><a href="<?php bloginfo('url'); ?>/transparencia" target="_self" <?php if(is_page('transparencia')){ ?> class="active"<?php } ?>>Transparencia</a></li>
		          	<li><a href="https://www.facebook.com/Teatro-Ictus-254680174566051/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/teatroictus/" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCXYpH4ZakwVvXJifEXEZm8Q" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<li><a href="https://www.instagram.com/teatroictus/" target="_blank"><i class="fa fa-instagram"></i></a></li>
		        </ul>
		        
		        <ul id="nav-mobile" class="side-nav">
			        <li><img src="<?php bloginfo('template_url'); ?>/assets/img/logo_ictus_gray.png" width="78" height="50" style="margin: 40px 0 20px 0" alt="Teatro Ictus"/></li>
		          	<li><a href="<?php bloginfo('url'); ?>" target="_self" <?php if(is_home()){ ?>class="active"<?php } ?>>Portada</a></li>
				  	<li><a href="<?php bloginfo('url'); ?>/cartelera" target="_self" <?php if(is_post_type_archive('cartelera')){ ?>class="active"<?php } ?>>Cartelera</a></li>
		          	<li><a href="<?php bloginfo('url'); ?>/category/noticia" target="_self" <?php if(is_category('noticia')){ ?>class="active"<?php } ?>>Noticias</a></li>
		          	<li><a href="<?php bloginfo('url'); ?>/ictus-60-anos" target="_self"  <?php if(is_page('ictus-60-anos')){ ?> class="active"<?php } ?>>Historia</a></li>
<!-- 		          	<li><a href="biblioteca.html" target="_self" class="">Biblioteca</a></li> -->
		          	<li><a href="<?php bloginfo('url'); ?>/equipo" target="_self" <?php if(is_page('equipo')){ ?> class="active"<?php } ?>>Equipo</a></li>
				  	<li><a href="<?php bloginfo('url'); ?>/contacto" target="_self" <?php if(is_page('contacto')){ ?> class="active"<?php } ?>>Contacto</a></li>
		          	<li><a href="<?php bloginfo('url'); ?>/transparencia" target="_self" <?php if(is_page('transparencia')){ ?> class="active"<?php } ?>>Transparencia</a></li>
		          	<li class="redes_sociales">
		          		<a href="https://www.facebook.com/Teatro-Ictus-254680174566051/" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/teatroictus/" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://www.youtube.com/channel/UCXYpH4ZakwVvXJifEXEZm8Q" target="_blank"><i class="fa fa-youtube"></i></a>
						<a href="https://www.instagram.com/teatroictus/" target="_blank"><i class="fa fa-instagram"></i></a>
					</li>	
				    <li>
					      <strong>Teatro ICTUS</strong> sala <strong>La Comedia</strong><br> 
					      Merced 349 - Barrio Lastarria<br>
								Reservas: <strong>+56 2 2 639 1523 &nbsp +56 2 2 639 2101</strong><br><br>
								A pasos de <strong>Metro Universidad Católica</strong> y <br> <strong>Metro Bellas Artes.</strong><br> Estacionamiento a 50 mts.
					</li>
		        </ul>
		        <a href="#" data-activates="nav-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
		      </div>
		    </nav>
		  </div><!-- /.ajustar_menu -->
	  </div><!-- /.top_menu -->
  </header>