<!-- /*
NOTE: This is main stylesheet of template, This file contains the styling for the actual Template. Please do not change anything here! write in a custom.css file if required!
*/ -->
<?php

if(isset($_POST["action"])) {
    if(isset($_POST['dejarenblanco'])){
    		$dejarenblanco = $_POST['dejarenblanco'];
	}
	if(isset($_POST['nocambiar'])){
    		$nocambiar = $_POST['nocambiar'];
	}
if ($dejarenblanco == '' && $nocambiar == 'http://') {
  $name = $_POST['name'];                 // Sender's name
  $email = $_POST['email'];     // Sender's email address
  $phone  = $_POST['phone'];     // Sender's email address
  $referencia = $_POST['referencia'];
  $message = $_POST['message'];    // Sender's message
  $from = ' Formulario de envio';    
  $to = 'rasecsv0@gmail.com';     // Recipient's email address
  $subject = 'Mensaje de  Contacto ';
    
 $body ="From: $name \n E-Mail: $email \n Telefono : $phone \n Referencia: $referencia \n Interes : $message"  ;
	
	// init error message 
	$errmsg='';
  // Check if name has been entered
  if (!$_POST['name']) {
        die('Ingresar un nombre');
      //$errmsg = 'Ingresar un nombre';
  }

  
  // Check if email has been entered and is valid
  if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errmsg = 'Ingresar un email valido';
  }
  
  if(!$_POST['referencia']){
      $errmsg='Ingresar una referencia';
  }
  //Check if message has been entered
  if (!$_POST['message']) {
   $errmsg = 'Ingrese un mensaje';
  }
 
	$result='';
  // If there are no errors, send the email
  if (!$errmsg) {
		if (mail ($to, $subject, $body)) {
			//$result='<div class="alert alert-success">Thank you for contacting us. Your message has been successfully sent. We will contact you very soon!</div>'; 
            $result='<script type="text/javascript">
                alert("Su mensaje fue enviado con exito");
				window.location.href="../contacto.php";
                </script>';
		} 
		else {
		  $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
		}
	}
	else{
		$result='<div class="alert alert-danger">'.$errmsg.'</div>';
	}
	echo $result;
 }
}
?>
