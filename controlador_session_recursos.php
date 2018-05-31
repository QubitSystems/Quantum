  <?php
	include('conexion.php');
	include('seccion.php');
	
	session_start();
	
	$token = $_POST['token'];
	$seccion = new seccion;
	$conexion = new conexion;
	//NOMBRE Y CONTRASEÑA
	$campos = array( 'codigo'); //campo a buscar una vez devuelta la consulta.
	$arreglo_datos = $conexion->obtener_datos("select *from token", $campos);
	$seccion->colocar_arreglo_texto($arreglo_datos[0]);
	$arr = $seccion->obtener_arreglo_texto();
	
	if($arr[0]== $token){
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $token;
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start']+(5*60);
		
		header('Location: http://localhost/Repositorio/Quantum/recursos.php');
		exit;
	}
	else {
		$_SESSION['usuarioInvalido'] = true;
		header('Location: http://localhost/Repositorio/Quantum/login-recursos.php');
	}
?>