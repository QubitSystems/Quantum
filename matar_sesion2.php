<?php
	include('control_session_token.php');
	if($_POST['signOff'])
		cerrarSession();	
?>