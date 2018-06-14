<?php
	include('conexion.php');
	include('seccion.php');
	include('consultas.php');
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
	$correo = $_POST['correo'];
    $correosecond =$_POST['correosecond'];
	
	$conexion = new conexion;
	//ACTUALIZA DATOS
	$consultaPersonalizada = "UPDATE contacto SET direccion='$direccion', telefono='$telefono', celular='$celular', correo='$correo',correo2='$correosecond'";
	$conexion->actualizar_datos($consultaPersonalizada);
?>