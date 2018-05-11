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
			$('#correo').text(a[2])
		},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});