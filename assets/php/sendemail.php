<?php 



error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) ); //Aqu� se genera un control de errores "NO BORRAR NI SUSTITUIR"
require_once "Mail.php"; //Aqu� se llama a la funci�n mail "NO BORRAR NI SUSTITUIR"

$to = 'heipry@gmail.com'; //Aqu� definimos quien recibir� el formulario
$from = $_POST['email']; //Aqu� definimos que cuenta mandar� el correo, generalmente perteneciente al mismo dominio
$host = 'smtp.eancar.com'; //Aqu� definimos cual es el servidor de correo saliente desde el que se enviaran los correos
$username = 'web1.eancar.com'; //Aqui se define el usuario de la cuenta de correo
$password = 'Web1.eancar'; //Aqu� se define la contrase�a de la cuenta de correo que enviar� el mensaje
$subject = $_POST['subject']; //Aqu� se define el asunto del correo
$body = $_POST['name'].": ".$_POST['message']; //Aqu� se define el cuerpo de correo


//A partir de aqu� empleamos la funci�n mail para enviar el formulario

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