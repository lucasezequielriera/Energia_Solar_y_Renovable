<?php

	$destinatario = 'infoparaguay@energiasolaryrenovable.com';
	setlocale(LC_ALL, 'es_ES');
    $fecha = strftime("%A %d/%m/%Y, a las %k:%M:%S");

	$nombre = $_POST['nombre'];
	$asunto = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];

	$header = "From: emailweb@energiasolaryrenovable.com";
	$mensaje = "\n\nDatos de Contacto:" . "\n\nNombre: " . $nombre . "\nApellido: " . $apellido .  "\nEmail: " . $email . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
    $asunto = 'De energiasolaryrenovable.com el día ' . $fecha . ' sobre ' . $asunto . ' - ' . $nombre;

	mail($destinatario, utf8_decode($asunto), utf8_decode($mensaje), $header);
	echo "<script>alert('¡Mensaje enviado correctamente!')</script>";
	echo "<script>setTimeout(\"location.href='https://energiasolaryrenovable.com/'\",1000)</script>";

?>