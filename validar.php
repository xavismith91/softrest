<?php

//declaramos las variables del usuario y contraseña
$usuario = $_POST['usuario'];
$password = $_POST['password'];

//iniciamos la sesion dentro del servidor 
session_start();  
$_SESSION['usuario']=$usuario;

include('db.php');

//se hace conexión a la base de datos para realizar posteriormente la consulta 

$conexion=mysqli_connect("localhost","root","","test");

//hacemos la consulta a la base de datos para obtener los datos del ususario con su contraseña por medio de una variable 
$consulta="SELECT*FROM login where usuario='$usuario' and password='$password'";

//el resultado de la consulta se guardara en la variable "resultado"

$resultado=mysqli_query($conexion, $consulta);
//en el siguiente método recibirá la cantidad de fias de la consulta anterior en caso de tener contenido despliega el acceso al inicio si no declina la operacion

$filas=mysqli_num_rows($resultado);

if ($filas) 
{
    header("location:entrada.php");
}
else
{
   echo'<script type="text/javascript">
        alert("Verifique su Información");
        window.location.href="login.html";
        </script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>