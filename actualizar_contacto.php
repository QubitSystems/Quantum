<?php
	include('crud.php');
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
	$correo = $_POST['correo'];
    $correosecond = $_POST['correosecond'];
	$nroProduct = $_POST['nroProduct'];
	
	echo $direcion." ".$telefono." ".$correo;
	actualizarDatos($direccion, 5, $nroProduct);
	actualizarDatos($telefono, 6, $nroProduct);
    actualizarDatos($celular, 7, $nroProduct);
	actualizarDatos($correo, 8, $nroProduct);
    actualizarDatos($correosecond, 9, $nroProduct);
?>