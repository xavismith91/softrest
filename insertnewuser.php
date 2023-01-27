<?php
if (isset($_POST['submit'])) {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $appat = $_POST['appaterno'];
    $apmat =$_POST['apmaternp'];
    $mail = $_POST['mail'];
    $estado = $_POST['estado'];
    $pcontrasena = $_POST['contrasena'];
    // Conectarse a la base de datos
    $conn = new mysqli("localhost", "user", "", "users");
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    // Insertar los datos en la tabla
    $sql = "INSERT INTO tabla (nombre, appaterno , apmaterno, mail, estado, password) VALUES ('$nombre', '$apellido', '$edad')";
    if ($conn->query($sql) === TRUE) {
        echo "Registro insertado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Cerrar la conexión
    $conn->close();
}
?>
