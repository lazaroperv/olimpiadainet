<?php
<<<<<<< HEAD
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
=======
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
>>>>>>> 4f89992 (listd)
            $codP=$_POST["codigoP"];
            $desP=$_POST["descripcionP"];
            $preP=$_POST["precioP"];
            $stoP=$_POST["stockP"];
            $tipP=$_POST["tipoP"];
<<<<<<< HEAD
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
=======
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
    }
>>>>>>> 4f89992 (listd)
?>