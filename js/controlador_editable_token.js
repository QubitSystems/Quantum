jQuery(function($){
	$.ajax({
		url: 'controlador_token.php',
		data: {nada: 'nada'},
		type: 'POST',
		//dataType: 'json',
		success: function(response){
			//console.log(response);
			var a = response.split('#')
			$('#token').val(a[0])
			
		},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});