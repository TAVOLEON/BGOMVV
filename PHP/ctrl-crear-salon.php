<?php
error_reporting();
if (!empty($_POST["btnpublicar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["descripcion"])) {
        $nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"]; 
        $responsable=$_POST["responsable"]; 
        
        $sql=$conexion->query("INSERT INTO salones (nombre,descripcion,responsable) VALUES('$nombre','$descripcion','$responsable') ");
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



