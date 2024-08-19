<?php
    $ruta= new mysqli("localhost","root","","sportcenter");
    $ruta->set_charset("utf8");
    if ($ruta->connect_error) {
        die("Error de conexión: " . $ruta->connect_error);
    }
?>
 <?php 


    if(!empty($_POST["SubirP"]))
    {
        if(empty($_POST["codigoP"]) or empty($_POST["descripcionP"]) or empty($_POST["precioP"]) or empty($_POST["stockP"]) or empty($_POST["tipoP"]) or empty($_POST["genero"]))
        {
            echo "Debe rellenar los campos";
        }
        else {
            $codP=$_POST["codigoP"];
            $desP=$_POST["descripcionP"];
            $preP=$_POST["precioP"];
            $stoP=$_POST["stockP"];
            $tipP=$_POST["tipoP"];
            $gen=$_POST["genero"];
            $sql=$ruta->query("INSERT INTO productos 
            (codigo_producto,descripcion,precio_unitario,stock,tipo,genero)
             VALUES ('$codP','$desP','$preP','$stoP','$tipP','$gen')");
             if(!$sql){
                echo "Error en la consulta" . $ruta->error; 
             }else
            {          

                echo "se registro";

            }
        }
    }
<<<<<<< HEAD
    else{   
        echo "no relleno los campos";
    }
=======
>>>>>>> ee1b75352504f2afe70f592dfc399404f1f63685
?>