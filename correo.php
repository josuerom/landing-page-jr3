<?php
	if (isset($_POST('enviar'))) {
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$mensaje = $_POST['mensaje'];

		$header = 'Form: noreply@example.com"."\r\n";
		$header .= "Reply-To: noreply@example.com"."\r\n";
		$header .= "X-Mailer: PHP/".phpversion();
	
		$asunto = "Hola! cordial saludo. Queremos agradecerte por habernos enviado tu opinion acerca de nuestro sitio web. Te comentamenos, que dentro de muy poco nos comunicaremos contigo para conocer que otras sugerencias puedes darnos.\r\n\n";
		$asunto .= "Este mensaje fue enviado por: Josué Romero\r\n";
		$asunto .= "Tu mensaje: ".$mensaje."\r\n";
		$asunto .= "Fecha de envío: ".date('d/m/Y', time());

		$de = "josueromram3@gmail.com";
		$titulo = "¡Gracias por darnos tu opinion!";

		$email = @mail($para, $titulo, $asunto, $header);
		if ($email) {
			echo "<h3>¡Correo enviado satisfactoriamente!</h4>";
			header("Location:index.html");
		}
	}
?>
