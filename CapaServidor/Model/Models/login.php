<style>
    .error-message {
    background-color: #f2dede;
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    color: #666;
    border-radius: 5px;
}
</style>

<?php
session_start();

if(!empty($_POST["Ingresar"])){
    if(!empty($_POST["email"]) and !empty($_POST["contraseña"])){
        $ema=$_POST["email"];
        $clave=$_POST["contraseña"];
        $sql=$ruta->query("select * from clientes where email='$ema' and contraseña='$clave'");
        if($verificamos= $sql->fetch_object()){
            $_SESSION['autenticado'] = true;
            header("Location:../../../index.php");
            exit;
        }
        else{
            ?>
            <div class="error-message">
                <p>No tienes Cuenta</p>
            </div>
            <?php
        }
    }
    else{
        ?>
        <div class="error-message">
            <p>Debe ingresar Usuario y/o Contraseña</p>
        </div>
        <?php
    }
}
?>