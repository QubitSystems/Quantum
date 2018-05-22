jQuery(function($){
    var id = document.getElementById("selectEvento").value;
        console.log("El valor del evento es estoy en otra pagina: " + id);
	$( "#selectSection" ).change(function () {
            
  	  	 
        $.ajax({
            data:{'id':id}
			url: 'controlador_actualiza_evento.php',
			type: 'POST',
			//dataType: 'json',
			success: function(response){
                console.log(response);
                var fila = response.split('|');
                var col_fila1=fila[0].split('#');
                $('#fecha1').val(col_fila1[0]);
                $('#nombre1').val(col_fila1[1]);
                $('#speaker1').val(col_fila1[2]);
                $('#hora1').val(col_fila1[3]);
                $('#direccion1').val(col_fila1[4]);
                $('#descripcion1').val(col_fila1[5]);
                $('#imagen1').val(col_fila1[6]);
                
                 var col_fila2=fila[1].split('#');
                $('#fecha2').val(col_fila2[0]);
                $('#nombre2').val(col_fila2[1]);
                $('#speaker2').val(col_fila2[2]);
                $('#hora2').val(col_fila2[3]);
                $('#direccion2').val(col_fila2[4]);
                $('#descripcion2').val(col_fila2[5]);
                $('#imagen2').val(col_fila2[6]);
                
                 var col_fila3=fila[2].split('#');
                $('#fecha3').val(col_fila3[0]);
                $('#nombre3').val(col_fila3[1]);
                $('#speaker3').val(col_fila3[2]);
                $('#hora3').val(col_fila3[3]);
                $('#direccion3').val(col_fila3[4]);
                $('#descripcion3').val(col_fila3[5]);
                $('#imagen3').val(col_fila3[6]);
                
                 var col_fila4=fila[3].split('#');
                $('#fecha4').val(col_fila4[0]);
                $('#nombre4').val(col_fila4[1]);
                $('#speaker4').val(col_fila4[2]);
                $('#hora4').val(col_fila4[3]);
                $('#direccion4').val(col_fila4[4]);
                $('#descripcion4').val(col_fila4[5]);
                $('#imagen4').val(col_fila4[6]);
                
                 var col_fila5=fila[4].split('#');
                $('#fecha5').val(col_fila5[0]);
                $('#nombre5').val(col_fila5[1]);
                $('#speaker5').val(col_fila5[2]);
                $('#hora5').val(col_fila5[3]);
                $('#direccion5').val(col_fila5[4]);
                $('#descripcion5').val(col_fila5[5]);
                $('#imagen5').val(col_fila5[6]);
           
			},
			error: function(jqXHR, status, error){
				alert('disculpe ocurrió un error');
			},
			complete: function(jqXHR, status) {
				console.log('peticion realizada');
			}
		});
	  
  })
  .change();
    
});


