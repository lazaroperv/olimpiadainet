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
<<<<<<< HEAD
    if(!empty($_POST["Ingresar"])){
        if(!empty($_POST["email"]) and !empty($_POST["contraseña"])){
            $ema=$_POST["email"];
            $clave=$_POST["contraseña"];
            $sql=$ruta->query("select * from clientes where email='$ema' and contraseña='$clave'");
            $sqll=$ruta->query("select * from administradores where email='$ema' and contraseña='$clave'");
            if($verificamos= $sqll->fetch_object()){
                header("Location:../../../indexA.php");
            }
            if($verificamos= $sql->fetch_object()){
                header("Location:../../../index.php");
            }elseif($verificamos= $sql->fetch_object()){
                header("Location:../../../index.php");
            }
            else{
                echo "No tienes Cuenta";
            }
=======
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
>>>>>>> e804bdff8b514a6dab36eb33ae75be9ddf71a2a7
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