<?php get_header(); ?>
  
  <main>
	  <div class="container">
			<div class="divider"></div>
	  	<div class="section no-pad-bot">
				<div class="row">
					<div class="col l12">
						<div class="titulo_oscuro">
							Cartelera <span> Sala La Comedia</span>
						</div><!-- ./titulo -->
					</div><!-- /.col -->
				</div><!-- ./row -->
			</div><!-- /.section -->
				
			<div class="row">
				<div class="col l8 m6">
				    <?php
					    $i = 0;
				    if (have_posts()) :
				    	while (have_posts()) :
				    		the_post();
				    		$i++;
				    		if($i==1){ 
				    ?>					
					<div class="section" >	
						<div id="cartelera<?php echo get_the_id(); ?>" style="padding-top: 100px; margin-top: -100px;"></div>	
						<div class="row">
							<div class="col l6">
								<?php the_post_thumbnail('full', array( 'class' => 'responsive-img' ) ); ?>
							</div>
							<div class="col l6 post_noticia_lg">
								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
								<?php if(get('enlace')){ ?>
								<a href="<?php echo get('enlace');?>" target="_blank" class="btn_rojo">Más información</a>
								<?php } ?>
							</div>
						</div><!-- /.row -->
					</div><!-- /.section -->
					
					<div class="divider"></div>
					<?php }else{ ?>
					<div class="section"  >
						<div id="cartelera<?php echo get_the_id(); ?>" style="padding-top: 100px; margin-top: -100px;"></div>	
						<div class="row">
							<div class="col l6 push-l6 s12">
								<?php the_post_thumbnail('full', array( 'class' => 'responsive-img' ) ); ?>
							</div>
							<div class="col l6 pull-l6 s12 post_noticia_lg">
								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
								<? if(get('enlace')){ ?>
								<a href="<?php echo get('enlace');?>" target="_blank" class="btn_rojo">Más información</a>
								<? } ?>
							</div>
						</div><!-- /.row -->
					</div><!-- /.section -->
					
					<div class="divider"></div>
				    <?php
					    
						    $i=0;
					    }
				    	endwhile;
				    endif;
				    ?>				
				</div><!-- /.col -->
				
				<div class="col l4 m6 s12">
					<div class="section">
						<?php include('include-calendario.php'); ?>
					</div><!-- /.section -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
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