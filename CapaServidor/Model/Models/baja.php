<?php
    if(!empty($_POST["EliminarP"])){
        if(empty($_POST["codigoP"])) { 
          
            echo "Debe Rellenar el Campo para Continuar!";
        }
        else{
            $cod=$_POST["codigoP"];
            $sql=$ruta->query("delete from productos where codigo_producto='$cod'");
            if($sql==1){
                echo '<script>alert("El Producto se elimino correctamente");</script>';
            }
            else{
                echo  '<script>alert("No se elimino el producto");</script>';
            }
        }
    }
?>