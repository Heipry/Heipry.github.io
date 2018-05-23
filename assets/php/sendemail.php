<?php 



error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) ); //Aquí se genera un control de errores "NO BORRAR NI SUSTITUIR"
require_once "Mail.php"; //Aquí se llama a la función mail "NO BORRAR NI SUSTITUIR"

$to = 'heipry@gmail.com'; //Aquí definimos quien recibirá el formulario
$from = $_POST['email']; //Aquí definimos que cuenta mandará el correo, generalmente perteneciente al mismo dominio
$host = 'smtp.eancar.com'; //Aquí definimos cual es el servidor de correo saliente desde el que se enviaran los correos
$username = 'web1.eancar.com'; //Aqui se define el usuario de la cuenta de correo
$password = 'Web1.eancar'; //Aquí se define la contraseña de la cuenta de correo que enviará el mensaje
$subject = $_POST['subject']; //Aquí se define el asunto del correo
$body = $_POST['name'].": ".$_POST['message']; //Aquí se define el cuerpo de correo


//A partir de aquí empleamos la función mail para enviar el formulario

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);



?>
<!DOCTYPE HTML>
<html lang="en-US">
<meta charset="UTF-8">
<head>
	<script>alert("Gracias por contactar. Le respondere tan pronto como me sea posible.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=http://jadigar.esy.es/javierdiaz"> 
</head>