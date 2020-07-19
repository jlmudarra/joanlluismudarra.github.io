<?php

	// site owner
	$site_name = 'Joan Lluis Mudarra Barros';
	$sender_domain = 'joanlluismudarra@gmail.com';
	$to = 'joanlluismudarra@gmail.com';
	
	// contact form fields
	$name = trim( $_POST['name'] );
	$email = trim( $_POST['email'] );
	$subject = trim( $_POST['subject'] );
	$message = trim( $_POST['message'] );
	
	
	$para      = 'joanlluismudarra@gmail.com';
	$titulo    = 'Message From - ' . $email;
	$mensaje   = $name . ' - ' .$message;
	$cabeceras = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	
	mail($para, $titulo, $mensaje, $cabeceras);
	
?>