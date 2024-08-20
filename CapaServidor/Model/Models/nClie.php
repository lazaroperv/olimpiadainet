<<<<<<< HEAD

<?php
     $fechaR = date('Y-m-d H:i:s');

?>
<?php

=======
<?php 
    include '../../Controller/conexion.php';
?>
<?php
     $fechaR = date('Y-m-d H:i:s');

?>
<?php

>>>>>>> c73311af365c8dea0a1dfc9963ef7ce478b2a306
   

    if(!empty($_POST["RegistrarC"]))
    {
        if(empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["email"]) or empty($_POST["contraseña"]) ) 
          {
            echo "Por favor complete todos los campos";
        }
        else{
            $nom=$_POST["nombre"];
            $ape=$_POST["apellido"];
            $ema=$_POST["email"];
            $con=$_POST["contraseña"];
            
            $sql=$ruta->query("INSERT INTO clientes (nombre,apellido,email,contraseña,fecha_registro) 
            VALUES ('$nom','$ape','$ema','$con','$fechaR')");
            if($sql==1){
                echo "Se registroo!";
            }
            else{
                echo "No se pudo registrar!";
            }
        }
    }

?>