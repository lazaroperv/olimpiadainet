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
            <input type="submit" name="Ingresar" value="Ingresar">
    </form>
    </div>
    <div class="registrarse">
        <form action="" method="post">
            <input type="text" name="nombre" id="" placeholder="Ingrese su Nombre" required>
            <input type="text" name="apellido" id="" placeholder="Ingrese su Apellido"required>
            <input type="email" name="email" id="" placeholder="Ingrese su Email" required>
            <input type="password" name="contraseña" id="" placeholder="Ingrese una Contraseña"required>
            <input type="submit" name="RegistrarC" value="Ingresar">
        </form>

    </div>

</section>