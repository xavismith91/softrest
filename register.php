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
            <div class="logo">
                <a href="index.html" title="Logo">
                    <img src="images/logocast-2.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="register.php">Registrate</a>
                    </li>
                    <!-- <li>
                        <a href="categories.html">Categorías</a>
                    </li>
                    <li>
                        <a href="foods.html">Comida</a>
                    </li>
                    <li>
                        <a href="contact.html">Contacto</a>
                    </li> -->
                    <li>
                        <a href="login.html">Iniciar Sesion</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->

<style>
		body{background-color: white; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: #999999;
			padding: 30px;
			margin: 100px auto;
			width: 300px;
		}

		input[type=text], input[type=password]{
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
            text-align: center
        
        }

	</style>
</head>
<body>
	<form action="validar.php" method="POST">
		
		<p class="parrafo">
		Usuario<br>
		<input type="text" name="usuario">
		</p>
        <br>
		<p class="parrafo">
		Contraseña<br>
		<input type="password" name="password">
		</p>
        <br>
        <p class="parrafo">
		Correo Electrónico<br>
		<input type="password" name="password">
		</p>
        <br>
		<p class="parrafo_boton"><input type="submit" value="Registrarme"></p> 
	</form>
