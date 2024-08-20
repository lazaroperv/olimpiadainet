<?php 
    include '../../../ CapaServidor/Controller/conexion.php';
    include '../../../ CapaServidor/Model/Models/nClie.php';
?>
<section>

    <div class="registrarse">
        <form action="" method="post">
            <input type="text" name="nombre" id="" placeholder="Ingrese su Nombre" required>
            <input type="text" name="apellido" id="" placeholder="Ingrese su Apellido"required>
            <input type="email" name="email" id="" placeholder="Ingrese su Email" required>
            <input type="password" name="contraseña" id="" placeholder="Ingrese una Contraseña"required>
            <input type="submit" name="RegistrarC" value="Registrar">
        </form>

    </div>

</section>