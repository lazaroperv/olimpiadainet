
<?php

    if(!empty($_POST["SubirP"])){
        if(empty($_POST["codigoP"]) or empty($_POST["descripcionP"]) or empty($_POST["precioP"]) or empty($_POST["stockP"]) or empty($_POST["tipoP"]) or empty($_POST["genero"])) { 
          
            echo "Debe Rellenar el Campo para Continuar!";
        }
        else{
            $codP=$_POST["codigoP"];
            $desP=$_POST["descripcionP"];
            $preP=$_POST["precioP"];
            $stoP=$_POST["stockP"];
            $tipP=$_POST["tipoP"];

            $genP=$_POST["genero"];
            $sql=$ruta->query("update productos set descripcion='$desP', precio_unitario='$preP', stock='$stoP',tipo='$tipP',genero='$genP' where codigo_producto='$codP'");

            $gen=$_POST["genero"];
            $sql=$ruta->query("insert into Productos (codigo_producto,descripcion,precio_unitario,stock,tipo,genero	) values ('$codP','$desP','$preP','$stoP','$tipP','$gen')");

            if($sql==1){
                echo '<script>alert("Se modifico Correctamente");</script>';
            }
            else{
                echo '<script>alert("No se modifico correctamente");</script>';
            } 
        }       

    }
?>