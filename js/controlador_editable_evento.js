jQuery(function($){
    
	$( "#selectSection" ).change(function () {
  	  	 $( "select option:selected" ).each(function() {
        $.ajax({
			url: 'control_evento.php',
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
                
                 var col_fila1=fila[0].split('#');
                $('#fecha1').val(col_fila1[0]);
                $('#nombre1').val(col_fila1[1]);
                $('#speaker1').val(col_fila1[2]);
                $('#hora1').val(col_fila1[3]);
                $('#direccion1').val(col_fila1[4]);
                $('#descripcion1').val(col_fila1[5]);
                $('#imagen1').val(col_fila1[6]);
                
                 var col_fila1=fila[0].split('#');
                $('#fecha1').val(col_fila1[0]);
                $('#nombre1').val(col_fila1[1]);
                $('#speaker1').val(col_fila1[2]);
                $('#hora1').val(col_fila1[3]);
                $('#direccion1').val(col_fila1[4]);
                $('#descripcion1').val(col_fila1[5]);
                $('#imagen1').val(col_fila1[6]);
           
			},
			error: function(jqXHR, status, error){
				alert('disculpe ocurrió un error');
			},
			complete: function(jqXHR, status) {
				console.log('peticion realizada');
			}
		});
	  })
  })
  .change();
    
});


