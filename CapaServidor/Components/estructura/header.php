<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CapaCliente/Views/Styles/style.css">
</head>

<body>
    <header>

        <img src="CapaCliente/Views/Public/logo1.png" alt="logo">
        <!-- menu desplegable -->
        <div class="menu-container">
            <ul class="menu">
                <li><a href="#">Hombres</a></li>
                <li><a href="#">Mujer</a></li>
                <li><a href="#">Zapatillas</a></li>
            </ul>
        </div>
        <input type="search" name="buscar" id="">
        <?php if (isset($_SESSION['autenticado']) && $_SESSION['autenticado']) { ?>
            <a href="CapaServidor/Model/Models/logout.php">Cerrar sesión</a>
        <?php } else { ?>
            <a href="CapaCliente/Views/Pages/login.php">Iniciar sesión</a>
        <?php } ?>
        <!-- esto se tiene que mostrar dependiendo si es el usuario admin o no -->
        <!-- <a href="CapaCliente/Views/Pages/altaP.php">Editar Productos</a> -->

    </header>