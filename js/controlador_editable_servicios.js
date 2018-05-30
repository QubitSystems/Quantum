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
            $('#titulo1').text(col_fila1[0])
			$('#nomb_servicio1').text(col_fila1[1])
            $('#desc_servicio1').text(col_fila1[2])
            $('#caract1_1').text(col_fila1[3])
            $('#caract2_1').text(col_fila1[4])
            $('#caract3_1').text(col_fila1[5])
            $('#imagen1').text(col_fila1[6])
            $('#imagen2').text(col_fila1[7])
            
            var col_fila2 = fila[1].split('#')
			$('#titulo2').text(col_fila2[0])
            $('#nomb_servicio2').text(col_fila2[1])
            $('#desc_servicio2').text(col_fila2[2])
            $('#caract1_2').text(col_fila2[3])
            $('#caract2_2').text(col_fila2[4])
            $('#caract3_2').text(col_fila2[5])
            $('#imagen1').text(col_fila2[6])
            $('#imagen2').text(col_fila2[7])
            
            var col_fila3 = fila[2].split('#')
			$('#titulo3').text(col_fila3[0])
            $('#nomb_servicio3').text(col_fila3[1])
            $('#desc_servicio3').text(col_fila3[2])
            $('#caract1_3').text(col_fila3[3])
            $('#caract2_3').text(col_fila3[4])
            $('#caract3_3').text(col_fila3[5])
            $('#imagen1').text(col_fila3[6])
            $('#imagen2').text(col_fila3[7])
            
             var col_fila4 = fila[3].split('#')
			$('#titulo4').text(col_fila4[0])
            $('#nomb_servicio4').text(col_fila4[1])
            $('#desc_servicio4').text(col_fila4[2])
            $('#caract1_4').text(col_fila4[3])
            $('#caract2_4').text(col_fila4[4])
            $('#caract3_4').text(col_fila4[5])
            $('#imagen1').text(col_fila4[6])
            $('#imagen2').text(col_fila4[7])
            
            var col_fila5 = fila[4].split('#')
			$('#titulo5').text(col_fila5[0])
            $('#nomb_servicio5').text(col_fila5[1])
            $('#desc_servicio5').text(col_fila5[2])
            $('#caract1_5').text(col_fila5[3])
            $('#caract2_5').text(col_fila5[4])
            $('#caract3_5').text(col_fila5[5])
            $('#imagen1').text(col_fila5[6])
            $('#imagen2').text(col_fila5[7])
            
            var col_fila6 = fila[5].split('#')
			$('#titulo6').text(col_fila6[0])
            $('#nomb_servicio6').text(col_fila6[1])
            $('#desc_servicio6').text(col_fila6[2])
            $('#caract1_6').text(col_fila6[3])
            $('#caract2_6').text(col_fila6[4])
            $('#caract3_6').text(col_fila6[5])
            $('#imagen1').text(col_fila6[6])
            $('#imagen2').text(col_fila3[7])
            
            var col_fila7 = fila[6].split('#')
			$('#titulo7').text(col_fila7[0])
            $('#nomb_servicio7').text(col_fila7[1])
            $('#desc_servicio7').text(col_fila3[2])
            $('#caract1_7').text(col_fila7[3])
            $('#caract2_7').text(col_fila7[4])
            $('#caract3_7').text(col_fila7[5])
            $('#imagen1').text(col_fila7[6])
            $('#imagen2').text(col_fila7[7])
            
             var col_fila8= fila[7].split('#')
			$('#titulo8').text(col_fila8[0])
            $('#nomb_servicio8').text(col_fila8[1])
            $('#desc_servicio8').text(col_fila8[2])
            $('#caract1_8').text(col_fila8[3])
            $('#caract2_8').text(col_fila8[4])
            $('#caract3_8').text(col_fila8[5])
            $('#imagen1').text(col_fila8[6])
            $('#imagen2').text(col_fila8[7])
            
             var col_fila9 = fila[8].split('#')
			$('#titulo9').text(col_fila9[0])
            $('#nomb_servicio9').text(col_fila9[1])
            $('#desc_servicio9').text(col_fila9[2])
            $('#caract1_9').text(col_fila9[3])
            $('#caract2_9').text(col_fila9[4])
            $('#caract3_9').text(col_fila9[5])
            $('#imagen1').text(col_fila9[6])
            $('#imagen2').text(col_fila9[7])
    
            	},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});