<?php
	include('conexion.php');
	include('seccion.php');
	include('consultas.php');
	$_POST['nada'];
	//$arreglo_final = array();

	$seccion = new seccion;
	$conexion = new conexion;
	//PRIMER TEXTO
	$campos = array('direccion', 'telefono','correo'); //campo a buscar una vez devuelta la consulta.
	$arreglo_datos = $conexion->obtener_datos(consultas::CONSULTA2, $campos);
	$seccion->colocar_arreglo_texto($arreglo_datos[0]);
	$arr = $seccion->obtener_arreglo_texto();

	//Arreglo con todas las respuestas
	$arregloRespuesta = array('Texto1'=>$arr[0], 'Texto2'=>$arr[1], 'Texto3'=>$arr[2]);

	//RESPUESTA
	//echo json_encode($arreglo_final);	
	echo $arregloRespuesta['Texto1']."#".$arregloRespuesta['Texto2']."#".$arregloRespuesta['Texto3'];
?>