<style>
    .tarjeta {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        margin: 20px;
        width: 300px;
        display: inline-block;
    }
</style>
<?php 
    $query = "SELECT * FROM productos";
    $resultado = $ruta->query($query);

    // Verificar si hay productos
    if ($resultado->num_rows > 0) {
        // Mostrar listado de productos
        echo "<h1>Listado de productos</h1>";
        while ($row = $resultado->fetch_assoc()) {
            echo "<div class='tarjeta'>";
            echo "<h5>" . $row['descripcion'] . "</h5>";
            echo "<p>Código: " . $row['codigo_producto'] . "</p>";
            echo "<p>Precio: $" . $row['precio_unitario'] . "</p>";
            echo "<p>Stock: " . $row['stock'] . "</p>";
            echo "<p>Tipo: " . $row['tipo'] . "</p>";
            echo "<p>Género: " . $row['genero'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No hay productos disponibles";
    }
?>