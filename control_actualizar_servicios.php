<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       
            $id=$_POST['id'];
            $titulo = $_POST['titulo'];
            $nomb_servicio =$_POST['nomb_servicio'];
            $desc_servicio =$_POST['desc_servicio'];
            $caract1 =$_POST['caract1'];
            $caract2 =$_POST['caract2'];
            $caract3 =$_POST['caract3'];
            
           
            //$archivo1 = $_FILES['imagen1'];
   
            //$archivo2 = $_FILES['imagen2'];
            $conexion = new conexion;
            $seccion =new seccion;
            $cargar_img = new cargar_imagen;
            if(isset($archivo)){
		      $cargar_img->subir_imagen($archivo, $nombre_imagen.$id. '.jpg', 'images/', 2000000);
            }
            $consultaPersonalizada = "UPDATE servicios SET titulo='$titulo', nomb_servicio='$nomb_servicio',desc_servicio='$desc_servicio',caracteristica1='$caract1',caracteristica2='$caract2',caracteristica3='$caract3' where id='$id'";
	       $conexion->actualizar_datos($consultaPersonalizada);
            
            
?>
          