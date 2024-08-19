<?php
   
    if(!empty($_POST["SubirP"])){
        if(empty($_POST["codigoP"]) or empty($_POST["descripcionP"]) or empty($_POST["precioP"]) or empty($_POST["stockP"]) or empty($_POST["tipoP"]) or empty($_POST["genero"])) { 
          
            echo "Debe Rellenar los Campos para Continuar!";
        }
        else{
            $codP=$_POST["codigoP"];
            $desP=$_POST["descripcionP"];
            $preP=$_POST["precioP"];
            $stoP=$_POST["stockP"];
            $tipP=$_POST["tipoP"];
            $gen=$_POST["genero"];
            $sql=$ruta->query("insert into productos (codigo_producto,descripcion,precio_unitario,stock,tipo,genero	) values ('$codP','$desP','$preP','$stoP','$tipP','$gen')");
            if($sql==1){
                echo "Se Guardo en la Tabla Productos!";
            }
            else{
                echo "No se Guardo el Producto!";
            }
        }
    }
?>    