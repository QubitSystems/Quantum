<?php
		
		include('conexion.php');
		include('seccion.php');
       
            $id=$_POST['id'];
            
            $password =$_POST['password'];
         
            $conexion = new conexion;
            
            $seccion =new seccion;
        
           $consultaPersonalizada = "UPDATE admin SET password='$password' where id=1";
	       $conexion->actualizar_datos($consultaPersonalizada);
            
            
?>