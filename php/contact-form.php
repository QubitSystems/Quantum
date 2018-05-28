<!-- /*
NOTE: This is main stylesheet of template, This file contains the styling for the actual Template. Please do not change anything here! write in a custom.css file if required!
*/ -->

<?php
if(isset($_POST["action"])) {
  $name = $_POST['name'];                 // Sender's name
  $email = $_POST['email'];     // Sender's email address
  $phone  = $_POST['phone'];     // Sender's email address
  $referencia = $_POST['referencia'];
  $message = $_POST['message'];    // Sender's message
  $from = ' Contact Form';    
  $to = 'rasecsv0@gmail.com';     // Recipient's email address
  $subject = 'Message from Contact Demo ';
    
 $body ="From: $name \n E-Mail: $email \n Phone : $phone \n Referencia: $referencia \n Message : $message"  ;
	
	// init error message 
	$errmsg='';
  // Check if name has been entered
  if (!$_POST['name']) {
   $errmsg = 'Ingresar un nombre';
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
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success">TThank you for contacting us. Your message has been successfully sent. We will contact you very soon!</div>'; 
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
?>
