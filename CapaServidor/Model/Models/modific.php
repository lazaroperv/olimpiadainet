<?php
<<<<<<< HEAD
<<<<<<<< HEAD:CapaServidor/Model/Models/modific.php

    if(!empty($_POST["ModificarP"])){
========
    include '../../Controller/conexion.php';
?>
<?php
   
    if(!empty($_POST["SubirP"])){
>>>>>>>> 4f89992 (listd):CapaServidor/Model/Models/alta.php
        if(empty($_POST["codigoP"]) or empty($_POST["descripcionP"]) or empty($_POST["precioP"]) or empty($_POST["stockP"]) or empty($_POST["tipoP"]) or empty($_POST["genero"])) { 
          
            echo "Debe Rellenar el Campo para Continuar!";
        }
        else{
            $codP=$_POST["codigoP"];
            $desP=$_POST["descripcionP"];
            $preP=$_POST["precioP"];
            $stoP=$_POST["stockP"];
            $tipP=$_POST["tipoP"];
<<<<<<<< HEAD:CapaServidor/Model/Models/modific.php
            $genP=$_POST["genero"];
            $sql=$ruta->query("update productos set descripcion='$desP', precio_unitario='$preP', stock='$stoP',tipo='$tipP',genero='$genP' where codigo_producto='$codP'");
========
            $gen=$_POST["genero"];
            $sql=$ruta->query("insert into Productos (codigo_producto,descripcion,precio_unitario,stock,tipo,genero	) values ('$codP','$desP','$preP','$stoP','$tipP','$gen')");
>>>>>>>> 4f89992 (listd):CapaServidor/Model/Models/alta.php
            if($sql==1){
                echo "Producto Actualizado!";
            }
            else{
                echo "No se ha Modificado";    
            } 
        }       
=======
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
            }
            else{
                echo "No se ha Modificado";
            }
        }
        
        
>>>>>>> 4f89992 (listd)
    }
?>