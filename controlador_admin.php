<?php
		
		include('conexion.php');
		include('seccion.php');
       
       $seccion = new seccion;
	   $conexion = new conexion;
	   //PRIMER TEXTO
        $campos = array('password'); //campo a buscar una vez devuelta la consulta.
        $arreglo_datos = $conexion->obtener_datos("select * from admin",$campos);
        $seccion->colocar_arreglo_texto($arreglo_datos[0]);
	       $arr = $seccion->obtener_arreglo_texto();

	//Arreglo con todas las respuestas
	$arregloRespuesta = array('Texto1'=>$arr[0] );

	//RESPUESTA
	//echo json_encode($arreglo_final);	
	echo $arregloRespuesta['Texto1'];
            
?>