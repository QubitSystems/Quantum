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
            $('#v-pills-servicio1-tab').attr('style',col_fila1[0])
            $('#titulo1').text(col_fila1[1])
			$('#nomb_servicio1').text(col_fila1[2])
            $('#desc_servicio1').text(col_fila1[3])
            $('#caract1_1').text(col_fila1[4])
            $('#caract2_1').text(col_fila1[5])
            $('#caract3_1').text(col_fila1[6])
            $('#imagen1_1').attr("src",col_fila1[7])
            $('#imagen1_2').attr("src",col_fila1[8])
            
            var col_fila2 = fila[1].split('#')
            $('#v-pills-servicio2-tab').attr('style',col_fila2[0])
			$('#titulo2').text(col_fila2[1])
            $('#nomb_servicio2').text(col_fila2[2])
            $('#desc_servicio2').text(col_fila2[3])
            $('#caract1_2').text(col_fila2[4])
            $('#caract2_2').text(col_fila2[5])
            $('#caract3_2').text(col_fila2[6])
             $('#imagen2_1').attr("src",col_fila2[7])
            $('#imagen2_2').attr("src",col_fila2[8])
           
            var col_fila3 = fila[2].split('#')
            $('#v-pills-servicio3-tab').attr('style',col_fila3[0])
			$('#titulo3').text(col_fila3[1])
            $('#nomb_servicio3').text(col_fila3[2])
            $('#desc_servicio3').text(col_fila3[3])
            $('#caract1_3').text(col_fila3[4])
            $('#caract2_3').text(col_fila3[5])
            $('#caract3_3').text(col_fila3[6])
            $('#imagen3_1').attr("src",col_fila3[7])
            $('#imagen3_2').attr("src",col_fila3[8])
           
            
             var col_fila4 = fila[3].split('#')
             $('#v-pills-servicio4-tab').attr('style',col_fila4[0])
			$('#titulo4').text(col_fila4[1])
            $('#nomb_servicio4').text(col_fila4[2])
            $('#desc_servicio4').text(col_fila4[3])
            $('#caract1_4').text(col_fila4[4])
            $('#caract2_4').text(col_fila4[5])
            $('#caract3_4').text(col_fila4[6])
            $('#imagen4_1').attr("src",col_fila4[7])
            $('#imagen4_2').attr("src",col_fila4[8])
           
            var col_fila5 = fila[4].split('#')
            $('#v-pills-servicio5-tab').attr('style',col_fila5[0])
			$('#titulo5').text(col_fila5[1])
            $('#nomb_servicio5').text(col_fila5[2])
            $('#desc_servicio5').text(col_fila5[3])
            $('#caract1_5').text(col_fila5[4])
            $('#caract2_5').text(col_fila5[5])
            $('#caract3_5').text(col_fila5[6])
             $('#imagen5_1').attr("src",col_fila5[7])
            $('#imagen5_2').attr("src",col_fila5[8])
            
            var col_fila6 = fila[5].split('#')
            $('#v-pills-servicio6-tab').attr('style',col_fila6[0])
			$('#titulo6').text(col_fila6[1])
            $('#nomb_servicio6').text(col_fila6[2])
            $('#desc_servicio6').text(col_fila6[3])
            $('#caract1_6').text(col_fila6[4])
            $('#caract2_6').text(col_fila6[5])
            $('#caract3_6').text(col_fila6[6])
             $('#imagen6_1').attr("src",col_fila6[7])
            $('#imagen6_2').attr("src",col_fila6[8])
            
            var col_fila7 = fila[6].split('#')
            $('#v-pills-servicio7-tab').attr('style',col_fila7[0])
			$('#titulo7').text(col_fila7[1])
            $('#nomb_servicio7').text(col_fila7[2])
            $('#desc_servicio7').text(col_fila3[3])
            $('#caract1_7').text(col_fila7[4])
            $('#caract2_7').text(col_fila7[5])
            $('#caract3_7').text(col_fila7[6])
            $('#imagen7_1').attr("src",col_fila7[7])
            $('#imagen7_2').attr("src",col_fila7[8])
           
             var col_fila8= fila[7].split('#')
             $('#v-pills-servicio8-tab').attr('style',col_fila8[0])
			$('#titulo8').text(col_fila8[1])
            $('#nomb_servicio8').text(col_fila8[2])
            $('#desc_servicio8').text(col_fila8[3])
            $('#caract1_8').text(col_fila8[4])
            $('#caract2_8').text(col_fila8[5])
            $('#caract3_8').text(col_fila8[6])
            $('#imagen8_1').attr("src",col_fila8[7])
            $('#imagen8_2').attr("src",col_fila8[8])
           
            
             var col_fila9 = fila[8].split('#')
             $('#v-pills-servicio9-tab').attr('style',col_fila9[0])
			$('#titulo9').text(col_fila9[1])
            $('#nomb_servicio9').text(col_fila9[2])
            $('#desc_servicio9').text(col_fila9[3])
            $('#caract1_9').text(col_fila9[4])
            $('#caract2_9').text(col_fila9[5])
            $('#caract3_9').text(col_fila9[6])
           $('#imagen9_1').attr("src",col_fila9[7])
            $('#imagen9_2').attr("src",col_fila9[8])
           
            	},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});