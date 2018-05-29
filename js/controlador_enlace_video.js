jQuery(function($){
	$.ajax({
		url: 'control_modifica_video.php',
		data: {id: 'id'},
		type: 'POST',
		//dataType: 'json',
		success: function(response){
			//console.log(response);
			var a = response.split('|')
            console.log(a);
            var v1= a[0];
            var video1= $('#video1').attr("href",v1);
            console.log("el enlace  del video 1 es"+ video1);
            var v2 = a[1];
            var video2 = $('#video2').attr("href",v2);
            console.log("el enlace del video 2 es:"+ video2);
            
            var v3 = a[2];
            var video3 = $('#video3').attr("href",v3);
            console.log("el enlace del video 3 es:"+ video3);
            
            var v4 = a[3];
            var video4 = $('#video4').attr("href",v4);
            console.log("el enlace del video 4 es: "+ video4);
            
            var v5 = a[4];
            var video5 = $('#video5').attr("href",v5);
            console.log("el enlace del video 5 es:" + video5);
            
            var v6 = a[5];
            var video6 = $('#video6').attr("href",v6);
            console.log("el enlace del video 6 es: "+ video6);
            
            var v7 = a[6];
            var video7 = $('#video7').attr("href",v7);
            console.log("el enlace del video 7 es: " + video7);
          /*  $('#video1').val(a[0])
            $('#video2').val(a[1])
            $('#video3').val(a[2])
            $('#video4').val(a[3])
            $('#video5').val(a[4])
            $('#video6').val(a[5])
            $('#video7').val(a[6])*/
		},
		error: function(jqXHR, status, error){
			alert('disculpe ocurrió un error');
		},
		complete: function(jqXHR, status) {
			console.log('peticion realizada');
		}
	});
});