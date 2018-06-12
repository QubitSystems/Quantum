<?php 
session_start();
?>
<?php
    
	include('conexion.php');
	include('seccion.php');
	include('consultas.php');
    include('constantes_url.php');
	
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$seccion = new seccion;
	$conexion = new conexion;
	//NOMBRE Y CONTRASEÑA
	$campos = array('user', 'password'); //campo a buscar una vez devuelta la consulta.
	$arreglo_datos = $conexion->obtener_datos(consultas::CONSULTA1, $campos);
	$seccion->colocar_arreglo_texto($arreglo_datos[0]);
	$arr = $seccion->obtener_arreglo_texto();

    
        if($arr[0]== $user && $arr[1]==$pass){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $usu;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start']+(5*60);

            header(constantes_url::acceso);
            exit;
        }else {
            $_SESSION['userInvalido'] = true;
            header(constantes_url::denegado);
            
        }
  
        
?>