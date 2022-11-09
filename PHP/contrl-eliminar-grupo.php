<?php
$nombre=$_GET["nombre"];
error_reporting();
if (!empty($_POST["eliminagrupo"])) {
    if (!empty($_POST["claveborrar"])){
        $clave=$_POST["claveborrar"];
        $sql=$conexion->query("DELETE FROM grupos WHERE nombre='$clave'");
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


