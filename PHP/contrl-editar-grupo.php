<?php
error_reporting();
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["tutor"]) and !empty($_POST["semestre"])){
        $nomb=$_POST["nombre"];
        $tutor=$_POST["tutor"];
        $semestre=$_POST["semestre"];
        $especialidad=$_POST["especialidad"];
        $sql=$conexion->query("UPDATE grupos SET nombre='$nomb', tutor='$tutor', semestre= '$semestre', especialidad='$especialidad' WHERE nombre='$nombre'");
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


