<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Castillo</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <!-- <div class="logo">
                <a href="index.html" title="Logo">
                    <img src="images/logocast-2.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div> -->

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="register.php">Registrate</a>
                    </li>
                    <li>
                        <a href="login.html">Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

   

<style>
		body{background-color: orange; box-sizing: border-box; font-family: Arial;}

		form{
			background-color:  #f7f2ed  ;
			padding: 30px;
			margin: 90px;
			width: 300px;
		}

		input[type=text], input[type=password], input[type="mail"]{
			padding: 10px;
			width: 280px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 20px 0px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
        
        .parrafo
        {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }

        
        .parrafo_boton{
            padding: 10px;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

	</style>
</head>
<body>

	<form action="insertnewuser.php" method="POST">
		<p class="parrafo">
        Nombre<br>
		<input type="text" name="nombre" required>
		</p>
        <br>
		<p class="parrafo">
		Apellido Paterno<br>
		<input type="text" name="appat" required>
		</p>
        <br>
        <p class="parrafo">
		Apellido Materno<br>
		<input type="text" name="appmat" required>
		</p>
        <br>
        <p class="parrafo">
		Correo<br>
		<input type="text" name="correo" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
		</p>
        <br>
		<p class="parrafo">
		Estado<br>
		<input type="text" name="estado" required>
		</p>
        <br>
        <p class="parrafo">
		Rol<br>
		<input type="text" name="rol" required>
		</p>
        <br>
        <p class="parrafo" value="contrasena">
		Constraseña<br>
		<input type="password" name="$contrasena" required>
		</p>
        <br>
        <p class="parrafo" value="$contrasena2">
		Confirmar Contraseña<br>
		<input type="password" name="contrasena2" required>
		</p>
        <br>
        <p class="parrafo_boton"><input type="submit" value="Registrarme"></p> 
	</form>


   