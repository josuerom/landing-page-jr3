<?php
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	$header = 'Form: '.$correo." \r\n";
	$header .= "X-Mailer: PHP/".phpversion()." \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";
	
	$asunto = "Hola! cordial saludo. Queremos agradecerte por habernos enviado tu opinion acerca de nuestro sitio web. Te comentamenos, que dentro de muy poco nos comunicaremos contigo para conocer que otras sugerencias puedes darnos.\r\n\n";
	$asunto .= "Este mensaje fue enviado por: Josué Romero\r\n";
	$asunto .= "Correo: josueromram3@gmail.com\r\n";
	$asunto .= "Tu mensaje: ".$mensaje."\r\n";
	$asunto .= "Fecha de envío: ".date('d/m/Y', time());

	$de = "josueromram3@gmail.com";
	$para = $correo;

	mail($para, "Asunto del mensaje", utf8_decode($asunto), $header);
	header("Location:index.html");
?>
