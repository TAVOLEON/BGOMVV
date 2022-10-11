<?php

if (!empty($_POST["btnpublicar"])) {
    if (!empty($_POST["clave"]) and !empty($_POST["nombre"])){
        $clave=$_POST["clave"];
        $nombre=$_POST["nombre"]; 

        $sql=$conexion->query("INSERT INTO materias (clave,nombre) VALUES('$clave','$nombre') ");
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



