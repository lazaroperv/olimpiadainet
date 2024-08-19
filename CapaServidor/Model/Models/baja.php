<?php
    if(!empty($_POST["EliminarP"])){
        if(empty($_POST["codigoP"])) { 
          
            echo "Debe Rellenar el Campo para Continuar!";
        }
        else{
            $cod=$_POST["codigoP"];
            $sql=$ruta->query("delete from productos where codigo_producto='$cod'");
            if($sql==1){
                echo "Se Elimino el Producto!";
            }
            else{
                echo  "No se Elimino el Producto!";
            }
        }
    }
?>