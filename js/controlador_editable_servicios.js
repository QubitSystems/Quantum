jQuery(function($){
	$.ajax({
		url: 'control_modifica_servicio.php',
		data: {id:'id'},
		type: 'POST',
		//dataType: 'json',
		success: function(response){
			//console.log(response);  
			var fila = response.split('|') 
            var col_fila1 = fila[0].split('#')
			$('#nomb_servicio1').text(col_fila1[0])
            $('#desc_servicio1').text(col_fila1[1])
            $('#caract1_1').text(col_fila1[2])
            $('#caract2_1').text(col_fila1[3])
            $('#caract3_1').text(col_fila1[4])
            $('#imagen1').text(col_fila1[5])
            $('#imagen2').text(col_fila1[6])
            
    
            	},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});