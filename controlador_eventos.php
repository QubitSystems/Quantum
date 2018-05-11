<?php
	include('conexion.php');
	include('seccion.php');
	include('consultas.php');
	$idioma = $_POST['idioma'];
	//$arreglo_final = array();

	$seccion = new seccion;
	$conexion = new conexion;
	//PRIMER TEXTO
	$campos = array('fecha', 'nombre','speaker','hora','lugar','descripcion','imagen'); //campo a buscar una vez devuelta la consulta.
	$arreglo_datos = $conexion->obtener_datos("SELECT fecha,nombre,speaker,hora,lugar,descripcion,imagen FROM eventos", $campos);
	$seccion->colocar_arreglo_texto($arreglo_datos);
	$arr = $seccion->obtener_arreglo_texto();

	foreach($arr as $fila){
		echo utf8_encode($fila[0])."#".$fila[1]."|"; //fila en la columna 0 y en la columna 1
	}
	
?>