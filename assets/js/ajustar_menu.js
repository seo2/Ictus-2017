var ajustarMenu = $('.ajustar_menu').offset().top;

$(window).scroll(function() {
	  if ($(window).scrollTop() >= ajustarMenu) {
	      $('.ajustar_menu').addClass("navbar-fixed");
	      $('.brand-logo').addClass("brand-logo2");
	  } else {
	      $('.ajustar_menu').removeClass("navbar-fixed");
	      $('.brand-logo').removeClass("brand-logo2")
	  }
});

