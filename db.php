<?php

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$conexion=mysqli_connect("localhost", "root", "", "test");

if ($conn->connect_error) 

{
    die("Conexión Fallida: " . $conn->connect_error);
}


?>