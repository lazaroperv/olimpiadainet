<?php
<<<<<<< HEAD
    if(!empty($_POST["eliminar"])){
        if(empty($_POST["codigo"])) { 
          
            echo '<script>
            Swal.fire({
                title: "Incompleto!",
                text: "Debe Rellenar el Campo para Continuar!",
                icon: "info"
              });
            </script>';
        }
        else{
            $cod=$_POST["codigo"];
            $sql=$ruta->query("delete from productos where cod_pro='$cod'");
            if($sql==1){
                echo '<script>
                Swal.fire({
                    title: "Producto Eliminado!",
                    text: "Se Elimino el Producto!",
                    icon: "success"
                  });
                </script>';
            }
            else{
                echo  '<script>
                Swal.fire({
                    title: "Upss!",
                    text: "No se Elimino el Producto!",
                    icon: "error"
                  });
                </script>';
=======
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
>>>>>>> 5e3c1a8c2c63131ff66f2175feb82105f1d552f4
            }
        }
    }
?>