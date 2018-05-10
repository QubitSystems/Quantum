<?php
	include('conexion.php');
	include('seccion.php');
	include('consultas.php');
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	
	$conexion = new conexion;
	//ACTUALIZA DATOS
	$consultaPersonalizada = "UPDATE contacto SET direccion='$direccion', telefono='$telefono', correo='$correo'";
	$conexion->actualizar_datos($consultaPersonalizada);
?>