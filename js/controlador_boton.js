jQuery(function($){
		   
       $('#changeE').click(function(){
        var id = document.getElementById("selectEvento").value;
        console.log("El valor del evento es : " + id);
       $.ajax({
           url:'controlador_actualiza_evento.php',
           data:{'id':id ,fecha:$('#fecha').val(), nombre:$('#nombre').val(),speaker:$('#speaker').val(),hora:$('#hora').val(),direccion:$('#lugar').val(),descripcion:$('#descripcion').val()},
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
        $('#changeS').click(function(){
         var id = document.getElementById("selectServicio").value;
        console.log("El valor del servicio es : " + id);
        $.ajax({
           url:'control_actualizar_servicios.php',
           data:{'id':id ,titulo:$('#titulo').val(),nomb_servicio:$('#nomb_servicio').val(), desc_servicio:$('#desc_servicio').val(),caract1:$('#caracteristica1').val(),caract2:$('#caracteristica2').val(),caract3:$('#caracteristica3').val()},
           type:'POST',
           success : function(response){
               
           alert("Se actualizo correctamente !!!");
           console.log("Respuesta al escoger el select servicio:" + response)
               
       },
           error:function(xhr, status){
           console.log('Disculpe, ocurrio un problema')
       }, complete:function(xhr, status){
           console.log('Peticion realizada')
       }
           
       }) 
    });

     $('#changeV').click(function(){
        var id = document.getElementById("selectVideo").value;
        console.log("El valor del video es : " + id);
       $.ajax({
           url:'controlador_actualiza_videos.php',
           data:{'id':id ,url:$('#url').val() },
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

   $('#changeT').click(function(){
		$.ajax({
			url: 'controlador_actualizar_token.php',
			data: {token: $('#token').val()},
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
    
    
   $('#changeA').click(function(){
		$.ajax({
			url: 'controlador_actualizar_admin.php',
			data: {password: $('#password').val()},
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
