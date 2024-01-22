<?php

//declaramos las variables del usuario y contraseña
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$hash = password_hash($contrasena);

//iniciamos la sesion dentro del servidor 
session_start();  
$_SESSION['usuario']=$usuario;


//se hace conexión a la base de datos para realizar posteriormente la consulta 

$conexion=mysqli_connect("localhost","root","","test");


//hacemos la consulta a la base de datos para obtener los datos del ususario con su contraseña por medio de una variable 
//$consulta="SELECT * FROM users where usuario='$usuario' and contrasena='$hash'";

$consulta="SELECT * FROM users where usuario='$usuario' ";


//el resultado de la consulta se guardara en la variable "resultado"

$resultado=mysqli_query($conexion, $consulta);
//en el siguiente método recibirá la cantidad de fias de la consulta anterior en caso de tener contenido despliega el acceso al inicio si no declina la operacion


var_dump($resultado);

// $filas=mysqli_num_rows($resultado);

$filas = mysqli_fetch_array($resultado);

if ($filas) 
{
    header("location:entrada.php"); 
}
else
{
   echo'<script type="text/javascript">
        alert("Verifique su Información"'.$consulta["usuario"].');
        window.location.href="login.php";
        </script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>