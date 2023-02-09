<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Castillo</title>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.html" title="Logo">
                    <img src="images/tipogracast.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="entrada.php">Inicio</a>
                    </li>
                    <li>
                        <a href="categories.html">Categorías</a>
                    </li>
                    <li>
                        <a href="foods.html">Comida</a>
                    </li>
                    <!-- <li>
                        <a href="contact.html">Contacto</a>
                    </li> -->
                    <li>
                        <a href="login.html">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Busca Tu Comida Favorita." required>
                <input type="submit" name="submit" value="Buscar" class="btn btn-primary">
            </form>

        </div>
    </section> 

  

    
    <section class="categories">
        <div class="container">
            <h2 class="text-center"> Castillo</h2>
            <h2 class="text-center">Los Más Pedidos</h2>

            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Hamburguesas
                </h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Gourmet</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    


  
    
    


    
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Nuestro Menú</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc" id="prim-prod">
                    <h4>Pizza Italiana c/Jamón Serrano. </h4>
                    <p class="food-price">$250</p>
                    <p class="food-detail">
                        <p class="food-detail">Hecha con nuestra casera masa madre.</p>
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Guacamole Burger</h4>
                    <p class="food-price">$230</p>
                    <p class="food-detail">
                        Nuestra mejor Hamburguesa hecha con nuestro fresco guacaolme y una calidad de salsa excepcional.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/double-roast-bbq-burger.png" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>BBQ Burger</h4>
                    <p class="food-price">$90</p>
                    <p class="food-detail">
                        Nuestra mejor hamburguesa y salsa hecha en casa y aros crujientes llega para ser una de tus favoritas y papas crujientes.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Pizza Maria Bonita</h4>
                    <p class="food-price">$300</p>
                    <p class="food-detail">
                        Esta cuenta con arúbula y jamon serrano y hecha en casa con masa madre y horno casero.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/hawaian.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Hawaian Pizza</h4>
                    <p class="food-price">$250</p>
                    <p class="food-detail">
                        La Tradicional.
                    </p>
                    <br>
                    <a href="order.html" class="btn btn-primary">Ordenar</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-momo.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Giosas</h4>
                    <p class="food-price">$200 / 6 Pz.</p>
                    <p class="food-detail">
                        Giosas caseras rellenas con carne o vegetales.
                    </p>
                    <br>
                    <a href="order.html" class="btn btn-primary">Ordenar</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="categories.html">Ver Más</a>
        </p>
        <br>
        <br>
        <div>
                    
    </section>
    


    <section class="social">
        <div class="container text-center">
            <h2 class="text-center">Realiza tu Pedido.</h2>
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=525518083383"target="_blank" ><img src="https://img.icons8.com/fluent/48/000000/whatsapp.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    


    <section class="footer">
        <div class="container text-center">
        </div>
    </section>
    

</body>
</html>