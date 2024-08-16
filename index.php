<?php
    include "CapaServidor/Controller/conexion.php";
    include "CapaServidor/Model/Models/listar.php";
?>
<!DOCTYPE html>
<html lang="en">

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
        <a href="CapaCliente/Views/Pages/login.php">inicio de sesion</a>
        <!-- menu desplegable -->
        <input type="search" name="buscar" id="">
    </header>

    <main>

        <h1>Listado</h1>
            <?php

                if ($resultado->num_rows > 0) {

                    // Imprimir datos en un HTML
                    echo '<table>';
                    echo '<tr><th>Código</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Tipo</th>
                        <th>Género</th></tr>';
                    while($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_producto"] . "</td>";
                        echo "<td>" . $row["codigo_producto"] . "</td>";
                        echo "<td>" . $row["descripcion"] . "</td>";
                        echo "<td>" . $row["precio_unitario"] . "</td>";
                        echo "<td>" . $row["stock"] . "</td>";
                        echo "<td>" . $row["tipo"] . "</td>";
                        echo "<td>" . $row["genero"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No hay resultados";
                }
            
                
            ?>

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