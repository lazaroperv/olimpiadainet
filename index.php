<<<<<<< HEAD
<?php 
    include 'CapaServidor/Components/estructura/header.php';
    include 'CapaServidor/Components/estructura/main.php';
    include 'CapaServidor/Components/estructura/footer.php';
?>
=======
<?php
include 'CapaServidor/Controller/conexion.php';
include 'CapaServidor/Model/Models/listar.php';
include 'CapaServidor/Model/Models/search-products.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Views/Styles/style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-3.6.0.min.js"></script>
    
</head>
<body>
    
        
        <a href="">inicio</a>
        <!-- menu desplegable -->
        <div class="menu-container">
            <button class="menu-button">Click me!</button>
            <ul class="menu">
                <li><a href="#">Opción 1</a></li>
                <li><a href="#">Opción 2</a></li>
                <li><a href="#">Opción 3</a></li>
            </ul>
        </div>
        <a href="CapaCliente/Views/Pages/login.php">inicio de sesion</a>
        <a href="CapaCliente/Views/Pages/altaP.php">Editar Productos</a>
        <!-- menu desplegable -->
        <input type="text" id="search-input" placeholder="Buscar Productos">
        <div id="search-results"></div>
        </header>

        <main>



            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Repudiandae repellat consectetur amet doloribus eligendi ex nam officiis 
                sequi reprehenderit in? Eligendi dignissimos 
                inventore vero exercitationem ipsum fuga in eum provident?
            </p>
           


        </main>

        <footer>
                <div>
                    <h4>Nosotros</h4>
                    <a href="">contacto</a>
                    <a href="">*</a>
                    <a href="">*</a>
                </div>
                <div>
                    <h4>Informacion</h4>
                    <a href="">Formas de pago</a>
                    <a href="">Talles</a>
                </div>

        </footer>

        <script src="CapaServidor/Components/js/search.js"></script>
</body>
</html>









        
>>>>>>> c73311af365c8dea0a1dfc9963ef7ce478b2a306
