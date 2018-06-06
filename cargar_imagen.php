<?php 
	class cargar_imagen{
		
		function subir_imagen($nombre_campo_input, $nombre_nuevo_archivo, $ruta, $tamanio){
			if(isset($nombre_campo_input) && ($nombre_campo_input['error'] == UPLOAD_ERR_OK)){
				if($nombre_campo_input['size']<=$tamanio){
					$sep=explode('image/',$nombre_campo_input["type"]); // Separamos image/
					$tipo=$sep[1]; // Optenemos el tipo de imagen que es 
					if($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp"|| $tipo == "jpg"|| $tipo == "png"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen 
						$newPath = $ruta.$nombre_nuevo_archivo;
						 if (move_uploaded_file($nombre_campo_input['tmp_name'], $newPath)) {
							print "File saved in $newPath";
                            
						 } 
						 else {
								print "Couldn't move file to $newPath";
						 }
					}
				}
				else{
					print "El archivo sobrepasa el tamaño límite, escoja un archivo menor o igual a: '$tamanio' bytes";
				}	
			}else {
					print "No valid file uploaded.";
			}
		}	 
	}	 
?>