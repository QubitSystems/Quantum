jQuery(function($){
		/*$('#changeH').click(function(){
		$.ajax({
			url: 'controlador_actualiza_home.php',
			data: {id: $( "select.slide option:selected" ).text(), title: $('#title_slide').text(), subtitle: $('#subtitle_slide').text()},
			type: 'POST',
			success: function(response){
				//...
			},
			error: function(xhr, status){
				console.log('Disculpe, ocurrió un problema')
			},
			complete: function(xhr, status){
				console.log('Petición realizada')
			}
		})
	});
	
	$('#changeN').click(function(){
		//console.log($('#title').val()+ " "+$('#subtitle').val()+" "+$('#h1').val()+" "+$('#descripcion').val())
		$.ajax({
			url: 'controlador_actualiza_nosotros.php',
			data: {title: $('#title').val(), subtitle: $('#subtitle').val(), h1: $('#h1').val(), descripcion: $('#descripcion').val(), idioma:1},
			type: 'POST',
			success: function(response){
				console.log(response)
			},
			error: function(xhr, status){
				console.log('Disculpe, ocurrió un problema')
			},
			complete: function(xhr, status){
				console.log('Petición realizada')
			}
		})
	});
	
	
	$('#changeE').click(function(){
		$.ajax({
			url: 'controlador_actualiza_producto.php',
			data: {descProduct: $('#descProduct').val(), product: $( "select option:selected" ).val(), idioma:1},
			type: 'POST',
			success: function(response){
				alert("Se actualizo correctamente!!!");
				console.log("RESPUESTA AL ESCOGER EL SELECT PRODUCTO: "+response)
			},
			error: function(xhr, status){
				console.log('Disculpe, ocurrió un problema')
			},
			complete: function(xhr, status){
				console.log('Petición realizada')
			}
		})
	});*/
    $('#changeE').click(function(){
       $.ajax({
           url:'controlador_actualiza_evento.php',
           data:{imagen:$('#imagen')},
           type:'POST',
           success : function(response){
           alert("Se actualizo correctamente !!!");
           console.log("Respuesta al escoger el select evento:" + response)
       },
              error:function(xhr, status){
           console.log('Disculpe, ocurrio un problema')
       }, complete:function(xhr, status){
           console.log('Peticion realizada')
       }
           
       }) 
    });
	$('#changeC').click(function(){
		$.ajax({
			url: 'controlador_actualiza_contacto.php',
			data: {direccion: $('#direccion').val(), telefono: $('#telefono').val(), correo: $('#correo').val()},
			type: 'POST',
			success: function(response){
				alert(" Se actualizo correctamente!!!");
				//console.log(response);
			},
			error: function(xhr, status){
				console.log('Disculpe, ocurrió un problema')
			},
			complete: function(xhr, status){
				console.log('Petición realizada')
			}
		})
	});
});	
