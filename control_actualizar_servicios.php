<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       
            $id=$_POST['id'];
            $nombre =$_POST['nombre'];
            $descripcion =$_POST['descripcion'];
            $caract1 =$_POST['caracteristica1'];
             $caract2 =$_POST['caracteristica2'];
            $caract3 =$_POST['caracteristica3'];
            $caract4 =$_POST['caracteristica4'];
           
            //   $archivo1 = $_FILES['imagen1'];
   
            //   $archivo2 = $_FILES['imagen2'];

            $conexion = new conexion;
            
            $seccion =new seccion;
           $cargar_img = new cargar_imagen;
           if(isset($archivo)){
		      $cargar_img->subir_imagen($archivo, $nombre_imagen.$id. '.jpg', 'images/', 2000000);
	       }
            $consultaPersonalizada = "UPDATE servicios SET nombre='$nombre',descripcion='$descipcion',caracteristica1='$caract1',caracteristica2='$caract2',caracteristica3='$caract3',caracteristica4='$caract4' where id='$id'";
	       $conexion->actualizar_datos($consultaPersonalizada);
            
            
?>
    