<?php

error_reporting(1);
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["tutor"]) and !empty($_POST["semestre"])){
        $nombre=$_POST["nombre"];
        $tutor=$_POST["tutor"];
        $semestre=$_POST["semestre"];
        $especialidad=$_POST["especialidad"];
        $sql=$conexion->query("INSERT INTO grupos (nombre, tutor, semestre, especialidad) VALUES ('$nombre', '$tutor', '$semestre', '$especialidad')");
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


