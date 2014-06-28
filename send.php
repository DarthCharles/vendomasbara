<?php

// Here we get all the information from the fields sent over by the form.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$correo_vendedor = $_POST['correo_vendedor'];

// Aqui modificas los datos el remitento, el asunto etc, etc
$to = $email = $correo_vendedor;
$subject = "Request";
$message ="From: ". $email ."\n". 
"Name: ".$_POST["name"]."\n".
"Message: ".$_POST["message"]."\n";
$headers = 'From: vendedor@vendomasbara.com';
// this line checks that we have a valid email address
 $mailres = mail($to, $subject, $message, $headers); //This method sends the mail.

 if ($mailres) {
 	echo "Your email was successfully sent!"; // success message
 	
 	
 }else{
 	echo "Sorry, it seems there was an error.";
 }
 

 
 
 


 ?>