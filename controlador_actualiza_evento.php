<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
                
            var_dump($_FILES);
    
            $id=$_POST['selectEvento'];
            $fecha =$_POST['fecha'];
            $nomb_evento =$_POST['nombre'];
            $speaker =$_POST['speaker'];
            $hora =$_POST['hora'];
            $lugar =$_POST['lugar'];
            $descripcion =$_POST['descripcion'];
            $img_evento =$_FILES['img_evento'];
            $date =time();
           /** $cargar_img = new cargar_imagen;
            if(isset($img_evento)){
		      $cargar_img->subir_imagen($img_evento, $date.$nomb_evento.$id. '.jpg', 'images/Eventos/', 2000000);
            }**/
            $nombre_nuevo_archivo = $date.$nomb_evento.$id.'.jpg';
            $tamanio = 2000000;
             $ruta = 'images/Eventos/';
           	if(isset($img_evento) && ($img_evento['error'] == UPLOAD_ERR_OK)){
				if($img_evento['size']<=$tamanio){
					$sep=explode('image/',$img_evento["type"]); // Separamos image/
					$tipo=$sep[1]; // Optenemos el tipo de imagen que es 
					if($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp"|| $tipo == "jpg"|| $tipo == "png"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen 
						$newPath = $ruta.$nombre_nuevo_archivo;
						 if (move_uploaded_file($img_evento['tmp_name'], $newPath)) {
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
            
            $conexion = new conexion; 
            $seccion =new seccion;
        
           /* $conexion ->actualizar_datos("UPDATE `eventos` SET `fecha`=$fecha,`nomb_evento`=$nomb_evento,`speaker`=$speaker,`hora`=$hora,`direccion`=$lugar,`descripcion`=$descripcion where id=$id");
            */
           $consultaPersonalizada = "UPDATE eventos SET fecha='$fecha',nomb_evento='$nomb_evento',speaker='$speaker',hora='$hora',direccion='$lugar',descripcion='$descripcion',imagen='$newPath'  where id='$id'";  
	       $conexion->actualizar_datos($consultaPersonalizada);
            
?>
       
            