<!DOCTYPE html>
<html lang="en">
<?php 
    include '../../../CapaServidor/Controller/conexion.php';
    include '../../../CapaServidor/Model/Models/baja.php';
    include '../../../CapaServidor/Model/Models/modific.php';
    include '../../../CapaServidor/Components/estructura/headerA.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/style.css">
</head>
<body>
<div class="cont">
    <form action="" method="post" class="mb-3 form-check">
        <section>
                <div class="input-group mb-3">
                    <input type="number" name="codigoP" placeholder="Ingrese codigo-producto" required class="inn"  >
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="descripcionP" placeholder="Ingrese su descripcion" class="inn" >
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="precioP" placeholder="Ingrese su precio" class="inn">
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="stockP" placeholder="Stock del producto" class="inn">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="tipoP" placeholder="remera/pantalon/zapatilla" class="inn">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="genero" placeholder="genero" class="inn" >
                </div>
                <div class="input-group mb-3">
                    <input type="submit" name="EliminarP" value="Eliminar" class="btn" >
                </div>
                <div class="input-group mb-3">
                    <input type="submit" name="ModificarP" value="Editar" class="btn" >
                </div>
        </section>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>