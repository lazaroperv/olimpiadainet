<?php
    if(!empty($_POST["ModificarP"])){
        if(empty($_POST["codigoP"]) or empty($_POST["descripcionP"]) or empty($_POST["precioP"]) or empty($_POST["stockP"]) or empty($_POST["tipoP"]) or empty($_POST["genero"])) { 
          
            echo "Debe Rellenar el Campo para Continuar!";
        }
        else{
            $cod=$_POST["codigoP"];
            $desP=$_POST["descripcionP"];
            $preP=$_POST["precioP"];
            $stoP=$_POST["stockP"];
            $tipP=$_POST["tipoP"];
            $genP=$_POST["genero"];
            $sql=$ruta->query("update productos set descripcion='$desP', precio_unitario='$preP', stock='$stoP',tipo='$tipP',genero='$genP' where codigo_producto='$cod'");
            if($sql==1){
                echo "Producto Actualizado!";
            }
            else{
                echo "No se ha Modificado";
            }
        }        
    }
?>