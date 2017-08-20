<?php get_header(); ?>
  
  <main>
	  <div class="container">
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
								<?php the_post_thumbnail('noticias', array( 'class' => 'responsive-img' ) ); ?>
							</div>
							<div class="col l6 post_noticia_lg">
								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
								<a href="<?php echo get('enlace');?>" target="_self" class="btn_rojo">Comprar Entradas</a>
							</div>
						</div><!-- /.row -->
					</div><!-- /.section -->
					
					<div class="divider"></div>
					<?php }else{ ?>
					<div class="section"  >
						<div id="cartelera<?php echo get_the_id(); ?>" style="padding-top: 100px; margin-top: -100px;"></div>	
						<div class="row">
							<div class="col l6 push-l6 s12">
								<?php the_post_thumbnail('noticias', array( 'class' => 'responsive-img' ) ); ?>
							</div>
							<div class="col l6 pull-l6 s12 post_noticia_lg">
								<h5><?php the_title(); ?></h5>
								<?php the_content(); ?>
								<a href="<?php echo get('enlace');?>" target="_self" class="btn_rojo">Comprar Entradas</a>
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
						<div class="calendario">
							<h5>Calendario</h5>
							<div id="mini-clndr">
							  <script id="mini-clndr-template" type="text/template">
							    <div class="controls">
							      <div class="clndr-previous-button">&lsaquo;</div><div class="month"><%= month %> <%= year %></div><div class="clndr-next-button">&rsaquo;</div>
							    </div>
							
							    <div class="days-container">
							      <div class="days">
							        <div class="headers">
							          <% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
							        </div>
							        <% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
							      </div>
							      <div class="events">
							        <div class="headers">
							          <div class="x-button">x</div>
							          <div class="event-header">CARTELERA</div>
							        </div>
							        <div class="events-list"> 
										<% _.each(eventsThisMonth, function(event) { %> 
											<div class="event eventday event-<%=moment(event.date).format('YYYY-MM-DD')%>"> 
												<a href="<%= event.location %>"><%= moment(event.date).format('DD/MM') %> - <%= event.title %></a> 
											</div> 
										<% }); %> 
										</div>							        
						      		</div>
							      </div>
							    </div>
							
							  </script>
							</div>	
						</div><!-- /.calendario -->
					</div><!-- /.section -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
  </main>
  
<?php get_footer(); ?>


    <script>
	     moment.locale('es');

/*
 var events = [
	<?php
        $eventos = array(
	        'post_type' 		=> 'evento',
		    'posts_per_page' 	=> '300'
        );
        $query = new WP_Query( $eventos ); 
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) : $query->the_post();	
	?>	
    { date: '<?php echo  get('fecha'); ?>', title: '<?php the_title(); ?>', location: '<?php echo  get('lugar'); ?>' },
	  <?php 	
        endwhile; 
		} 
	?> 
  ];
*/
 var events = [
		
    { date: '2017-08-23', title: 'Activación', location: 'Nikkita' },
	  	
    { date: '2017-08-25', title: 'Activación', location: 'Nikkita' },
	  	
    { date: '2017-08-04', title: 'Activación', location: 'U pacifico, Santander' },
	  	
    { date: '2017-08-06', title: 'Activación', location: 'Metro Escuela Militar,	U. Andes' },
	  	
    { date: '2017-08-21', title: 'Activación', location: 'Nikkita' },
	  	
    { date: '2017-08-25', title: 'Activaciones', location: 'U Católica, Finis, Falabella' },
	  	
    { date: '2017-08-08', title: 'Fiesta Praga', location: 'Hotel W' },
	  	
    { date: '2017-08-05', title: 'UNAB', location: 'Metro Los Domínicos' }
	   
  ];

  $('#mini-clndr').clndr({
    template: $('#mini-clndr-template').html(),
    weekOffset: 0,
    events: events,
    showAdjacentMonths: false,
	clickEvents: { click: function(target) { if(target.events.length) { var daysContainer = $('#mini-clndr').find('.days-container'); daysContainer.toggleClass('show-events', true); var selectedClass = target.date.format('YYYY-MM-DD'); $('.eventday').hide(); $('.event-'+selectedClass).show(); $('#mini-clndr').find('.x-button').click( function() { daysContainer.toggleClass('show-events', false); }); } } },
    adjacentDaysChangeMonth: true,
    forceSixRows: true
  });

	</script>