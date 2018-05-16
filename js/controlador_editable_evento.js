jQuery(function($){
	
	$( "#selectSection" ).change(function () {
  	  	 $( "select option:selected" ).each(function() {
        $.ajax({
			url: 'controlador_evento.php',
			type: 'POST',
			//dataType: 'json',
			success: function(response){
                console.log(response);
				producto = response.split('#');
                $('#fecha').val(producto[0]);
                $('#nombre').val(producto[1]);
                $('#speaker').val(producto[2]);
                $('#hora').val(producto[3]);
                $('#lugar').val(producto[4]);
                $('#descripcion').val(producto[5]);
           
			},
			error: function(jqXHR, status, error){
				alert('disculpe ocurrió un error');
			},
			complete: function(jqXHR, status) {
				console.log('peticion realizada');
			}
		});
	  })
  })
  .change();
    
});


