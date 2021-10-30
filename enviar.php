<?php
$name = $_POST['nombre'];
$mail = $_POST['e-mail'];
$message = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header ,= "Content-Type: text/plain";

$message = "Enviado por: " . $name . " \r\n";
$message = "Su e-mail es: " . $mail . " \r\n";
$message = "Mensaje: " . $_POST['message'] . " \r\n";
$message = "Enviado por: " . date('d/m/Y', time());

$para = 'lautaroreinosoquinteto@gmail.com';
$asunto = 'Contacto Página';

mail ($para, $asunto, utf8_decode($message), $header);

header ("Location: index.html");
?>