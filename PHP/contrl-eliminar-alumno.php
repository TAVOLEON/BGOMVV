<?php
$grupo=$_GET["grupo"];
error_reporting();
if (!empty($_POST["eliminalumno"])) {
    if (!empty($_POST["claveborrar"])){
        $matricula=$_POST["claveborrar"];
        $sql=$conexion->query("DELETE FROM alumnos WHERE matricula='$matricula'");
        $sql=$conexion->query("DELETE FROM horario WHERE matricula='$matricula'");
        $sql=$conexion->query("DELETE FROM calificaciones WHERE alumnos_matricula='$matricula'");
        if ($sql==1) {
            header("Location: portal-administrativo-alumnos.php");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Eliminar </div>";
        }   
    }
    else {
    }
}
?>


