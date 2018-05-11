<?php
	include('crud.php');
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$nroProduct = $_POST['nroProduct'];
	
	echo $direcion." ".$telefono." ".$correo;
	actualizarDatos($direccion, 5, $nroProduct);
	actualizarDatos($telefono, 6, $nroProduct);
	actualizarDatos($correo, 7, $nroProduct);
?>