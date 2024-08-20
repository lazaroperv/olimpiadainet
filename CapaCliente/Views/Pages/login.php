<?php

include '../../../CapaServidor/Controller/conexion.php';
include '../../../CapaServidor/Model/Models/login.php';
include '../../../CapaServidor/Model/Models/nClie.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../Styles/styleLogin.css">
    <link rel="stylesheet" href="../Styles/style.css">
</head>

<body>
<main>
        <section class="container">
            <div class="form-section iniciar-sesion">
                <h2>Iniciar Sesión</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" name="email" id="email" placeholder="Ingrese su email" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña:</label>
                        <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese contraseña" required>
                    </div>
                    <input type="submit" name="Ingresar" value="Ingresar">
                </form>
            </div>
            <div class="form-section registrarse">
                <h2>Crear Cuenta</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" name="email" id="email" placeholder="Ingrese su Email" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña:</label>
                        <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese una Contraseña" required>
                    </div>
                    <input type="submit" name="RegistrarC" value="Registrarse">
                </form>
            </div>
        </section>
    </main>
</body>

</html>