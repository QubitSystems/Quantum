jQuery(function($){
	$.ajax({
		url: 'controlador_contacto.php',
		data: {nada: 'nada'},
		type: 'POST',
		//dataType: 'json',
		success: function(response){
			console.log(response);
			var a = response.split('#')
			$('#direccion').val(a[0])
			$('#telefono').val(a[1])
			$('#celular').val(a[2])
            $('#correo').val(a[3])
			$('#correosecond').val(a[4])
		},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});