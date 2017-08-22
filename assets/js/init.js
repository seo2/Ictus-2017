(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$("#formContacto").submit(function(e) {
	$("#formContacto button").html('<i class="fa fa fa-spinner fa-spin"></i>');
	$.ajax({
	    type: "POST",
	    url: 	$("#formContacto").attr('action'),
	    data: 	$("#formContacto").serialize(),
	    success: function(msg) {
	    	console.log(msg);
	    	if(msg=='ok'){
	        	alert("Enviado");
				//$('#formContacto').data('formValidation').resetForm();
				$('#formContacto')[0].reset();
				$("#formContacto button").html('enviar');
	    	}else{
	        	alert("ha ocurrido un error");
				$('#formContacto button').prop('disabled', false);
				$('#formContacto button').removeClass('disabled');
	    	}
			$("#formContacto button").html('enviar');
	    },
	    error: function(xhr, status, error) {
			//alert(status);
		}
	});

    e.preventDefault(); // avoid to execute the actual submit of the form.
});