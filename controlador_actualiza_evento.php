<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
         /* */
            $id=$_POST['id'];
            $fecha =$_POST['fecha'];
            $nomb_evento =$_POST['nombre'];
            $speaker =$_POST['speaker'];
            $hora =$_POST['hora'];
            $lugar =$_POST['direccion'];
            $descripcion =$_POST['descripcion'];
          // $date = time();
            //$archivo = $_FILES['imagen'];
          // $imagen=$_POST['imagen'];
            $conexion = new conexion;
            
            $seccion =new seccion;
        
           /* $conexion ->actualizar_datos("UPDATE `eventos` SET `fecha`=$fecha,`nomb_evento`=$nomb_evento,`speaker`=$speaker,`hora`=$hora,`direccion`=$lugar,`descripcion`=$descripcion where id=$id");
            */
           $consultaPersonalizada = "UPDATE eventos SET fecha='$fecha',nomb_evento='$nomb_evento',speaker='$speaker',hora='$hora',direccion='$lugar',descripcion='$descripcion'  where id='$id'";  
	       $conexion->actualizar_datos($consultaPersonalizada);
            
?>
       
            