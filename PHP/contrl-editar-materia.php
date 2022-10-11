<?php

error_reporting(1);
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["clave"]) and !empty($_POST["nombre"])){
        $id=$_POST["id"];
        $clave=$_POST["clave"];
        $nombre=$_POST["nombre"];

        $sql=$conexion->query("UPDATE materias SET clave='$clave',nombre='$nombre' WHERE id='$id'");
        if ($sql==1) {
            header("Location: portal-administrativo-materias.php");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
        
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}
?>


