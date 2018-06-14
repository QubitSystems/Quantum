jQuery(function($){
	$.ajax({
		url: 'controlador_contacto.php',
		data: {nada: 'nada'},
		type: 'POST',
		//dataType: 'json',
		success: function(response){
			//console.log(response);
			var a = response.split('#')
			$('#direccion').text(a[0])
			$('#telefono').text(a[1])
            $('#celular').text(a[2])
			$('#correo').text(a[3])
            $('#correosecond').text(a[4])
		},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});