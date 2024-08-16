<?php
    if(!empty($_POST["Ingresar"])){
        if(!empty($_POST["email"]) and !empty($_POST["contraseña"])){
            $ema=$_POST["email"];
            $clave=$_POST["contraseña"];
            $sql=$ruta->query("select * from clientes where email='$ema' and contraseña='$clave'");
            if($verificamos= $sql->fetch_object()){
                header("Location:../../../index.php");
            }
            else{
                echo "No tienes Cuenta";
            }
        }
        else{
           
            echo "Debe ingresar Usuario y/o Contraseña";
        }

    }
?>