<?php 
    $fechaR = date('Y-m-d H:i:s');


     if(!empty($_POST["RegistrarC"])){
        if(empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["email"]) or empty($_POST["contraseña"]) ) 
          {
            echo "Por favor complete todos los campos";
        }
        else{
            $nom=$_POST["nombre"];
            $ape=$_POST["apellido"];
            $ema=$_POST["email"];
            $con=$_POST["contraseña"];
            
            
            $sql=$ruta->query("insert into clientes (nombre,apellido,email,contraseña,fecha_registro) values ('$nom','$ape','$ema','$con','$fechaR')");
            if($sql==1){
                echo "Se registroo!";
            }
            else{
                echo "No se Guardo el Producto!";
            }
        }
    }

?>