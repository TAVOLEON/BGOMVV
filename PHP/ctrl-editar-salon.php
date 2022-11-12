<?php
error_reporting();
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["descripcion"])) {
        $nom=$_POST["nombre"];
        $descripcion=$_POST["descripcion"]; 
        $responsable=$_POST["responsable"]; 
        
        $sql=$conexion->query("UPDATE salones SET nombre= '$nom',descripcion='$descripcion', responsable = '$responsable' WHERE nombre = '$nombre' ");
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



