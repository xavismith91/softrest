<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el correo electrónico del formulario de inicio de sesión
$correo = $_POST[''];

// Consulta SQL para verificar si el correo electrónico existe en la tabla de usuarios
$sql = "SELECT * FROM usuarios WHERE correo='$correo'";
$result = $conn->query($sql);

// Si se encuentra el correo electrónico en la tabla de usuarios, enviar un correo electrónico con el enlace para restablecer la contraseña
if ($result->num_rows > 0) {
    // Generar un token de restablecimiento de contraseña y guardarlo en la base de datos
    $token = bin2hex(random_bytes(16));
    $sql = "UPDATE usuario SET token='$token' WHERE correo='$correo'";
    $conn->query($sql);

    // Enviar correo electrónico con el enlace para restablecer la contraseña
    $to = $email;
    $subject = "Restablecer contraseña";
    $message = "Hola,\n\nPara restablecer tu contraseña, haz clic en el siguiente enlace: https://www.ejemplo.com/restablecer.php?email=$email&token=$token\n\nSi no solicitaste restablecer tu contraseña, ignora este correo electrónico.\n\nSaludos,\nEl equipo de ejemplo";
    $headers = "From: ejemplo@example.com";
    mail($to, $subject, $message, $headers);

    echo "Se ha enviado un correo electrónico con el enlace para restablecer la contraseña.";
} else {
    echo "No se encontró ningún usuario con ese correo electrónico.";
}

// Cerrar la conexión a la base de datos
$conn->close();

?>
