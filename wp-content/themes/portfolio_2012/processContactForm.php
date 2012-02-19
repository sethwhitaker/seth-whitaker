<?php 
	if($_POST['name']): $name = $_POST['name'];
	if($_POST['email']): $email = $_POST['email'];
	if($_POST['message']): $message = $_POST['message'];
	$to = 'sdw3489@gmail.com';
	$subject = 'Contact Form Message from'.$email;
	$headers = 'From:'.$email. "\r\n" .
    'Reply-To: '.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	
	$fullmessage = 'From '. $name. '-  ' .$message; 
	
	mail($to, $subject, $fullmessage, $headers);
	header('Location: http://www.seth-whitaker.com/');
?>

