jQuery(function($){

	$( "#selectProduct" ).change(function () {
      $( "select option:selected" ).each(function() {
  	  	$.ajax({
			url: 'controlador_producto.php',
			data: {seccion: $( "select.1 option:selected" ).text()},
			type: 'POST',
			//dataType: 'json',
			success: function(response){
				evento = response.split('#');
				$('#fecha').val(evento[0])
				$('#nombre').val(evento[1])
                $('#speaker').val(evento[2])
                $('#hora').val(evento[3])
                $('#lugar').val(evento[4])
                $('#descripcion').val(evento[5])
                $('#imagen').val(evento[6])
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
  
  $( "#selectSection" ).change(function () {
    $( "select.1 option:selected" ).each(function() {
      console.log("La seccion escojida es: "+ $( this ).text())
	  if($(this).text()=="Evento 1"){
		 $("#selectProduct").children().remove();
	  }
	  else if($(this).text()=="Evento 2"){
		  $("#selectProduct").children().remove();
	  }
	  else if($(this).text()=="Evento 3"){
		  $("#selectProduct").children().remove();	 	
	  }
        
	  else if($(this).text()=="Evento 4"){
		  $("#selectProduct").children().remove(); 	
	  }
	  else if($(this).text()=="Evento 5"){
		  $("#selectProduct").children().remove();
		 	
	  }
	})
  })
  .change();
});