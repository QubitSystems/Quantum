<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
                
            var_dump($_FILES);
    
            $id=$_POST['id'];
            $fecha =$_POST['fecha'];
            $nomb_evento =$_POST['nombre'];
            $speaker =$_POST['speaker'];
            $hora =$_POST['hora'];
            $lugar =$_POST['direccion'];
            $descripcion =$_POST['descripcion'];
            //$img_evento =$_POST['img_evento'];
            $conexion = new conexion; 
            $seccion =new seccion;
        
           /* $conexion ->actualizar_datos("UPDATE `eventos` SET `fecha`=$fecha,`nomb_evento`=$nomb_evento,`speaker`=$speaker,`hora`=$hora,`direccion`=$lugar,`descripcion`=$descripcion where id=$id");
            */
           $consultaPersonalizada = "UPDATE eventos SET fecha='$fecha',nomb_evento='$nomb_evento',speaker='$speaker',hora='$hora',direccion='$lugar',descripcion='$descripcion'  where id='$id'";  
	       $conexion->actualizar_datos($consultaPersonalizada);
            
?>
       
            