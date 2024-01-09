<?php

//declaramos las variables 
    $usuario= $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $appat = $_POST['appat'];
    $appmat =$_POST['appmat'];
    $correo = $_POST['correo'];
    $estado = $_POST['estado'];
    $rol = $_POST['rol'];
    $contrasena = $_POST['contrasena'];
    

    //con esta asignacion se encriptará la contraseña 

    // $hash = password_hash($contrasena, PASSWORD_BCRYPT);


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


//hacemos el query para insertar registros 

$sql = "INSERT INTO users (usuario,nombre,appat,appmat,correo,estado,rol,contrasena) VALUES ('$usuario','$nombre','$appat','$appmat','$correo','$estado','$rol','$contrasena')";

if (mysqli_query($conn,$sql)){
     
     header("location:entrada.html");
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
