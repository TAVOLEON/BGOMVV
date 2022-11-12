<?php

//error_reporting(1);
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["titulo"]) and !empty($_POST["descripcion"])){
        $id=$_POST["id"];
        $titulo=$_POST["titulo"];
        $descripcion=$_POST["descripcion"];
        $enlace=$_POST["enlace"];
        $fecha=$_POST["fecha"];
        $imagen =addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 

        $sql=$conexion->query("UPDATE anuncios_alumnos SET fecha='$fecha',titulo='$titulo',descripcion='$descripcion',enlace='$enlace',imagen='$imagen' WHERE id='$id'");
        if ($sql==1) {
            header("Location: portal-administrativo-alumnos.php");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
        
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}
?>


