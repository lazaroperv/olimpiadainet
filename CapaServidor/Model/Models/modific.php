<?php
<<<<<<< HEAD
    if(!empty($_POST["modificar"])){
        if(empty($_POST["codigo"]) or empty($_POST["nombre"]) or empty($_POST["descripcion"]) or empty($_POST["precio"])) { 
          
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
            $nom=$_POST["nombre"];
            $des=$_POST["descripcion"];
            $pre=$_POST["precio"];
            $sql=$ruta->query("update productos set nombre='$nom', descripcion='$des', precio='$pre' where cod_pro='$cod'");
            if($sql==1){
                echo '<script>
                    Swal.fire({
                        title: "Producto Actualizado!",
                        text: "Se Guardo en la Tabla Productos!",
                        icon: "success"
                    });
                </script>';
=======
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
>>>>>>> 5e3c1a8c2c63131ff66f2175feb82105f1d552f4
            }
            else{
                echo "No se ha Modificado";
            }
<<<<<<< HEAD
        }
        
        
=======
        }        
>>>>>>> 5e3c1a8c2c63131ff66f2175feb82105f1d552f4
    }
?>