<?php

//declaramos las variables 
    $nombre = $_POST['nombre'];
    $appat = $_POST['appat'];
    $appmat =$_POST['appmat'];
    $correo = $_POST['correo'];
    $estado = $_POST['estado'];
    $rol = $_POST['rol'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];
    
//declaramos variables para la conexion a la base de datos

$servername = "localhost"; 
$database = "test";
$username = "root";
$password = "";


// creamos  el query para conexion de la base de datos 

$conn = mysqli_connect($servername, $username, $password, $database);

// revisamos la conexión

if(!$conn)
{
    die("Falló la conexion: " . mysqli_connect_error()); 
}else

echo "Conexion exitosa";

if ($contrasena != $contrasena2)
{
    echo '<script type="text/javascript">
        alert("No se pudo completar el registro");
        window.location.href="registrer.php";
        </script>';
}
else
{
    echo '<script type="text/javascript">
        alert("Bienvenido a tu sesion");
        window.location.href="entrada.php";
        </script>';
}


//hacemos el query para insertar registros 

$sql = "INSERT INTO users (nombre,appat,appmat,correo,estado,rol,contrasena,contrasena2) VALUES ('$nombre','$appat','$appmat','$correo','$estado','$rol','$contrasena','$contrasena2')";

if (mysqli_query($conn,$sql)){
     
     header("location:entrada.php");
}
else
{
   echo'<script type="text/javascript">
        alert("No se pudo completar el registro");
        window.location.href="register.php";
        </script>';
}
mysqli_close($conn);
?>
