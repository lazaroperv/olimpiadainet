<?php

?>
<?php 
    
        $query = "SELECT * FROM productos";
        $resultado = $ruta->query($query);

        // Verificar si hay productos
        if ($resultado->num_rows > 0) {
            // Mostrar listado de productos
            echo "<h1>Listado de productos</h1>";
            echo "<table>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>" .
                    "<th> codigo prod: " . "</th>" . 
                    "<td>" . $row['codigo_producto'] . "</td>";
                    "</tr>";
                echo "<tr>" .
                    "<th> descripcion: " . "</th>" . 
                    "<td>" . $row['descripcion'] . "</td>";
                    "</tr>";
                echo "<tr>" .
                    "<th> precio: $" . "</th>" . 
                    "<td>" . $row['precio_unitario'] . "</td>";
                    "</tr>";
                echo "<tr>" .
                    "<th> codigo prod: " . "</th>" . 
                    "<td>" . $row['stock'] . "</td>";
                    "</tr>";
                echo "<tr>" .
                    "<th> codigo prod: " . "</th>" . 
                    "<td>" . $row['tipo'] . "</td>";
                    "</tr>";
                echo "<tr>" .
                    "<th>  genero: " . "</th>" . 
                    "<td>" . $row['genero'] . "</td>";
                    "</tr>";
            }
            echo "</table>";
        } else {
            echo "No hay productos disponibles";
        }
?>