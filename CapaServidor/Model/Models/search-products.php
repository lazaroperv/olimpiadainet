<?php
$searchTerm = $_POST['searchTerm'];
$query = "SELECT * FROM productos WHERE descripcion LIKE '%$searchTerm%' OR codigo_producto LIKE '%$searchTerm%'";
$resultado = mysqli_query($ruta, $query);

// Procesa los resultados
$data = array();
while ($row = mysqli_fetch_assoc($resultado)) {
  $data[] = array(
    'title' => $row['codigo_producto'],
    'description' => $row['descripcion']
  );
}

// Cierra la conexión
mysqli_close($ruta);

// Devuelve los resultados en formato JSON
echo json_encode($data);
?>