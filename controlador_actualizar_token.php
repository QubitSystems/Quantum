<?php
		
		include('conexion.php');
		include('seccion.php');
       
            $id=$_POST['id'];
            
            $token =$_POST['token'];
         
            $conexion = new conexion;
            
            $seccion =new seccion;
        
           $consultaPersonalizada = "UPDATE token SET codigo='$token' where id=1";
	       $conexion->actualizar_datos($consultaPersonalizada);
            
            
?>