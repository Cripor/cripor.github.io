<?php

$nombre = $_POST['nombre-y-apellido'];
$mail = $_POST['mail-usuario'];
$mensaje = $_POST['mensaje'];

$mensaje = "Este mensaje fué enviado por" . $nombre . ",\r\n";
$mensaje .= "Su e-mail es" . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/y', time());

$para = 'dhe.luthier@gmail.com';
$asunto = 'mensajes para dhe guitars';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:formularioEnviado.html');

?>