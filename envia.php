<?php 

$mail='mfpinzong@gmail.com'; 
$name = $_POST['name']; 
$email = $_POST['email']; 
$subject = $_POST['subject'];
$mensaje = $_POST['mensaje']; 

$thank="gracias.htm"; 

$message = " 
Name:".$name." 
email:".$email." 
subject:".$subject."
datos:".$nombre.",".$email.",".$subject.",".$mensaje."";
if (mail($mail,"from - Contacto",$message)) 
Header ("Location: $thank" ); 

?> 

