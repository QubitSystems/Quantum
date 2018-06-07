<?php
    include('constantes_url.php');
	function validar_Session(){
		session_start();
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			
		}
		else{
			header(constantes_url::acceso_denegado); 
			exit;
		}
		$now = time();
		if($now > $_SESSION['expire']){
			session_destroy();
			header(constantes_url::tiempo_expirado);
		}
	}
	
	function cerrarSession(){
		session_start();
		unset($_SESSION['username']);
		session_destroy();
		header(constantes_url::finalizar_session);
	}
	
	function is_InValid(){
		session_start();
		if(isset($_SESSION['usuarioInvalido']) && $_SESSION['usuarioInvalido'] == true){
			echo "<script>alert('Usuario y/o ".utf8_decode('contraseña')." invalido')</script>";
		}
		else{
		}
	}	
	
	function break_Session_Invalid(){
		if(isset($_SESSION['usuarioInvalido']) && $_SESSION['usuarioInvalido'] == true){
			session_start();
			unset($_SESSION['usuarioInvalido']);
			session_destroy();
		}
	}
	?>	