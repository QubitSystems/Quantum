<?php
		
		include('conexion.php');
		include('seccion.php');
                
            
             
            $plan =$_POST['planBeneficios'];
            $diapositiva =$_POST['diapositivas'];
            $conexion = new conexion; 
            $seccion =new seccion;
        
           /* $conexion ->actualizar_datos("UPDATE `eventos` SET `fecha`=$fecha,`nomb_evento`=$nomb_evento,`speaker`=$speaker,`hora`=$hora,`direccion`=$lugar,`descripcion`=$descripcion where id=$id");
            */
            $consultaPersonalizada = "UPDATE recursos SET plan='$plan' ,diapositivas='$diapositiva'where id=1";  
	       $conexion->actualizar_datos($consultaPersonalizada);
            
?>
       
            