<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'nicolas.seguro@gmail.com';
$asunto = 'Este mail fue enviado desde la web';


mail($para, $asunto, utf8_decode($mensaje), $header);


header('Location: exito.html');
?>

