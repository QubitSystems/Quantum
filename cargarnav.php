jQuery(function($){	
	var rutaCompleta = window.location.pathname;
	var ultimoIndice = rutaCompleta.lastIndexOf('/'); //Ultimo índice
	var pagina = rutaCompleta.substring(ultimoIndice, rutaCompleta.lenght);
	var numeroDelPunto = pagina.indexOf('.');
	var paginanueva = pagina.substring(1, numeroDelPunto);
	console.log('Nombre de la página: '+paginanueva)
	switch(paginanueva){
		case '/':{ $('#m1').attr('class', 'dropdown current');}
			break;
		case 'oportunidad':{ $('#m1').attr('class', 'dropdown current');}
			break;
		case 'quantum' :{ $('#m2').attr('class', 'dropdown current');} 
			break;
		case 'servicio' :{ $('#m3').attr('class', 'dropdown current');}
			break;
		case 'contacto' :{ $('#m4').attr('class', 'dropdown current');}
			break;
		case 'brokers' :{ $('#m5').attr('class', 'dropdown current');}
			break;
		default:
			break;
	}
});	