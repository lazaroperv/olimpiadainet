<!DOCTYPE html>
<html lang="en">
<?php 
    include '../../../CapaServidor/Controller/conexion.php';
    include '../../../CapaServidor/Model/Models/alta.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Views/Styles/style.css">
    <script src="Views/Components/menu.js" defer></script>
</head>
<body>
    <header>
        
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
        <a href="login.php">inicio de sesion</a>
        <!-- menu desplegable -->
        <input type="search" name="buscar" id="">
        </header>

        <main>


            <section class="register-customers">
                <form action="" method="post">
                    <div class="form">
                        <h2>Registrese</h2>
                        <div class="in">
                            <input type="number" name="codigoP" placeholder="Ingrese codigo-producto">
                        </div>
                        <div class="in">
                            <input type="text" name="descripcionP" placeholder="Ingrese su descripcion">
                        </div>
                        <div class="in">
                            <input type="number" name="precioP" placeholder="Ingrese su precio">
                        </div>
                        <div class="in">
                            <input type="number" name="stockP" placeholder="Stock del producto">
                        </div>                       
                         <div class="in">
                            <input type="text" name="tipoP" placeholder="tipo prod">
                        </div>
                        <div class="in">
                            <input type="text" name="genero" placeholder="genero">
                        </div>
                        <div class="in">
                            <input type="submit" name="SubirP" value="Subir">
                        </div>
                    </div>
                </form>
            </section>

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


</body>
</html>









        
