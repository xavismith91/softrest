<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];

	// Conexión a la base de datos
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Conexión fallida: " . $conn->connect_error);
	}

	// Búsqueda del correo electrónico en la tabla de usuarios
	$sql = "SELECT * FROM users WHERE correo = '$email'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$contrasena = $row['contrasena'];

		// Envío del correo electrónico con la contraseña recuperada
		$destinatario = $email;
		$asunto = "Recuperación de contraseña";
		$mensaje = "Su contraseña es: " . $contrasena;
		$headers = "From: recoverpass@ce2000.mx" . "\r\n" .
				   "Reply-To: recoverpass@ce2000.mx" . "\r\n" .
				   "X-Mailer: PHP/" . phpversion();

		if(mail($destinatario, $asunto, $mensaje, $headers)) {
			echo "Se ha enviado un correo electrónico con su contraseña.";
		} else {
			echo "No se puede enviar el correo electrónico.";
		}
	} else {
		echo "No existe cuenta con ese correo electrónico.";
	}

	$conn->close();

    
}
?>