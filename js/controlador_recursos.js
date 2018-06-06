jQuery(function($){
	$.ajax({
		url: 'controlador_recursos.php',
		data: {nada: 'nada'},
		type: 'POST',
		//dataType: 'json',
		success: function(response){
			//console.log(response);
			var a = response.split('#')
			$('#planBeneficios').val(a[0])
			$('#diapositivas').val(a[1])

		},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});