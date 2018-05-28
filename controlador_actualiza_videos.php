<?php
		
		include('conexion.php');
		include('seccion.php');
       
            $id=$_POST['id'];
            
            $url =$_POST['url'];
         //   $archivo = $_FILES['imagen'];

            $conexion = new conexion;
            
            $seccion =new seccion;
        
           $consultaPersonalizada = "UPDATE videos SET url='$url' where id='$id'";
	       $conexion->actualizar_datos($consultaPersonalizada);
            
            
?>