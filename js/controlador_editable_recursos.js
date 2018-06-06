jQuery(function($){
	$.ajax({
		url: 'control_modifica_recursos.php',
		data: {id: 'id'},
		type: 'POST',
		//dataType: 'json',
		success: function(response){
			//console.log(response);
            //se hace la carga de la data almacenada en la bd y se reemplaza la url anterior con la funcion attr 
			var a = response.split('#')
            //console.log(a);
            var v1= a[0];
            var video1= $('#planBeneficio').attr("href",v1);
            //console.log("el enlace  del repo 1 es"+ video1);
            var v2 = a[1];
            var video2 = $('#diapositivas').attr("href",v2);
            //console.log("el enlace del repo 2 es:"+ video2);
         
		},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});