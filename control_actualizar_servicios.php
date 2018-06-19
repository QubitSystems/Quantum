<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
            
         
            $id=$_POST['selectServicio'];
           
            
   //Si el checkbox condiciones tiene valor y es igual a 1
            if (isset($_POST['condiciones']) && $_POST['condiciones'] == '1'){
                $validar= "display:none";
            }else{
                $validar= "";
            }
            echo $validar;
            $titulo = $_POST['titulo']; 
            $nomb_servicio =$_POST['nomb_servicio'];
            $desc_servicio =$_POST['desc_servicio'];
            $caract1 =$_POST['caract1'];
            $caract2 =$_POST['caract2'];
            $caract3 =$_POST['caract3'];
            $archivo =$_FILES['img_servicio1'];
            $archivoTwo = $_FILES['img_servicio2'];
            //$archivo1 = $_FILES['imagen1'];
            $data = date('d-m-Y');
            
            //$archivo2 = $_FILES['imagen2'];
            $conexion = new conexion;
            $seccion =new seccion;
            
            
            //metodo para subir imagen 1
            
             $nombre_nuevo_archivo = $nomb_servicio.$id.'.jpg';
            $tamanio = 2000000;
             $ruta = 'images/Servicios/';
           	if(isset($archivo) && ($archivo['error'] == UPLOAD_ERR_OK)){
				if($archivo['size']<=$tamanio){
					$sep=explode('image/',$archivo["type"]); // Separamos image/
					$tipo=$sep[1]; // Optenemos el tipo de imagen que es 
					if($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp"|| $tipo == "jpg"|| $tipo == "png"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen 
						$newPath = $ruta.$nombre_nuevo_archivo;
						 if (move_uploaded_file($archivo['tmp_name'], $newPath)) {
							print "File guardad en  $newPath";
                            
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
					print "No se ha seleccionado un archivo";
			}

            //metodo para subir imagen 2
            $nombre_nuevo_archivoTwo = $data.$nomb_servicio.$id.'.jpg';
            
           	if(isset($archivoTwo) && ($archivoTwo['error'] == UPLOAD_ERR_OK)){
				if($archivoTwo['size']<=$tamanio){
					$sep=explode('image/',$archivoTwo["type"]); // Separamos image/
					$tipo=$sep[1]; // Optenemos el tipo de imagen que es 
					if($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp"|| $tipo == "jpg"|| $tipo == "png"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen 
						$newPathTwo = $ruta.$nombre_nuevo_archivoTwo;
						 if (move_uploaded_file($archivoTwo['tmp_name'], $newPathTwo)) {
							print "File saved in $newPathTwo";
                            
						 } 
						 else {
								print "Couldn't move file to $newPathTwo";
						 }
					}
				}
				else{
					print "El archivo sobrepasa el tamaño límite, escoja un archivo menor o igual a: '$tamanio' bytes";
				}
            }else {
					print "No se selecciono un archivo valido.";
			}
            if($newPath =="" && $newPathTwo==""){
                   $consultaPersonalizada = "UPDATE servicios SET validar='$validar',titulo='$titulo', nomb_servicio='$nomb_servicio',desc_servicio='$desc_servicio',caracteristica1='$caract1',caracteristica2='$caract2',caracteristica3='$caract3' where id='$id'";
            }elseif($newPath=="" && $newPathTwo!=""){
                   $consultaPersonalizada = "UPDATE servicios SET validar='$validar',titulo='$titulo', nomb_servicio='$nomb_servicio',desc_servicio='$desc_servicio',caracteristica1='$caract1',caracteristica2='$caract2',caracteristica3='$caract3',imagen2='$newPathTwo' where id='$id'";
	      
            }elseif($newPath!="" && $newPathTwo==""){
                   $consultaPersonalizada = "UPDATE servicios SET validar='$validar',titulo='$titulo', nomb_servicio='$nomb_servicio',desc_servicio='$desc_servicio',caracteristica1='$caract1',caracteristica2='$caract2',caracteristica3='$caract3',imagen1='$newPath' where id='$id'";
	      
            }else{
                   $consultaPersonalizada = "UPDATE servicios SET validar='$validar',titulo='$titulo', nomb_servicio='$nomb_servicio',desc_servicio='$desc_servicio',caracteristica1='$caract1',caracteristica2='$caract2',caracteristica3='$caract3',imagen1='$newPath',imagen2='$newPathTwo' where id='$id'";
            }
            
           $conexion->actualizar_datos($consultaPersonalizada);
            
            
?>
          