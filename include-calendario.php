
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
												<a href="<?php bloginfo('url'); ?>/cartelera#cartelera<%= event.id %>"><%= moment(event.date).format('DD/MM') %> - <%= event.title %><br> <%= event.location %></a> 
																							
												
												
											</div> 
										<% }); %> 
										</div>							        
						      		</div>
							    </div>
							
							  </script>
							</div>								
						</div><!-- /.calendario -->