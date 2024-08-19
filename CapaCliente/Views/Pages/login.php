<?php 
    include '../../../CapaServidor/Controller/conexion.php';
    include '../../../CapaServidor/Model/Models/login.php';
    include '../../../CapaServidor/Model/Models/nClie.php';
?>
<section>

    <div class="iniciar sesion">
    <form action="" method="post">
            <input type="email" name="email" id="" placeholder="ingrese su email" required>
            <input type="password" name="contraseña" id="" placeholder="ingrese contraseña"required>
            <input type="submit" name="Ingresar" value="ingresar">
    </form>
    <a href="RegistroU.php">Registrate!</a>
    </div>
</section>