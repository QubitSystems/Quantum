jQuery(function($){
   $.ajax({
       type:'POST',
       url :'controlador_servicio.php',
       
   })
    .done(function(listas_desp){
       $('#selectServicio').html(listas_desp);
   })
    .fail(function(){
       alert('Error al cargar el archivo');
   })
})


/*jQuery(function($){
	$.ajax({
		url: 'controlador_granos.php',
		data: {idioma: 1},
		type: 'POST',
		//dataType: 'json',
		success: function(response){
			console.log(response);
			var fila = response.split('|');
			
			var col_fila1 = fila[0].split('#');
			$('#p1').text(col_fila1[0]);
			$('#desc1').text(col_fila1[1]);
            
			
			var col_fila2 = fila[1].split('#');
			$('#p2').text(col_fila2[0]);
			$('#desc2').text(col_fila2[1]);
			
			var col_fila3 = fila[2].split('#');
			$('#p3').text(col_fila3[0]);
			$('#desc3').text(col_fila3[1]);
			
			var col_fila4 = fila[3].split('#');
			$('#p4').text(col_fila4[0]);
			$('#desc4').text(col_fila4[1]);
			
			var col_fila5 = fila[4].split('#');
			$('#p5').text(col_fila5[0]);
			$('#desc5').text(col_fila5[1]);
			
			var col_fila6 = fila[5].split('#');
			$('#p6').text(col_fila6[0]);
			$('#desc6').text(col_fila6[1]);
		},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});*/