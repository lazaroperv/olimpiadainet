<section>
<?php 
    include '../../../CapaServidor/Controller/conexion.php';
    include '../../../CapaServidor/Model/Models/baja.php';
    include '../../../CapaServidor/Model/Models/alta.php';
?>

            <div>
                <input type="number" name="codigoP" placeholder="Ingrese codigo-producto" required>
                <input type="submit" name="traer" value="Traer">
            </div>
            <div class="in">
                <input type="text" name="descripcionP" placeholder="Ingrese su descripcion" >
            </div>
            <div class="in">
                <input type="number" name="precioP" placeholder="Ingrese su precio">
            </div>
            <div class="in">
                <input type="number" name="stockP" placeholder="Stock del producto" >
            </div>
            <div class="in">
                <input type="text" name="tipoP" placeholder="remera/pantalon/zapatilla">
            </div>
            <div class="in">
                <input type="text" name="genero" placeholder="genero" >
            </div>
            <div class="in">
                <input type="submit" name="EliminarP" value="Eliminar">
            </div>
            <div class="in">
                <input type="submit" name="ModificarP" value="Editar">
            </div>
</section>