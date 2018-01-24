<?php
header("Content-type: text/html;charset=\"utf-8\"");
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$asunto = $_POST['asunto'];
$texto = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Asunto: " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $texto . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'rodrigoleon2016@hotmail.com';
$asunto = 'Prueba de mail WEB';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='';</script>";

?>