<?php
		
		include('conexion.php');
		include('seccion.php');
       //mostrar la data en al momento de hacer el select al combo box
            
            $conexion = new conexion;
            $seccion =new seccion;
            $id = $_POST['id'];

            $campos=array('url');
            $arreglo_datos =$conexion->obtener_datos("select*from videos where id=$id",$campos);
            $seccion->colocar_arreglo_texto($arreglo_datos[0]);
	        $arr = $seccion->obtener_arreglo_texto();
	           //Arreglo con todas las respuestas
	           $arregloRespuesta = array('Texto1'=>$arr[0]);
                //RESPUESTA
                //echo json_encode($arreglo_final);	
             echo   $arregloRespuesta['Texto1'];
            
     
?>
