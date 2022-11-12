<?php
$claveid=$_GET["clave"];
error_reporting();
if (!empty($_POST["eliminarmateria"])) {
    if (!empty($_POST["claveborrar"])){
        $clave=$_POST["claveborrar"];
        $sql=$conexion->query("DELETE FROM materias WHERE clave='$clave'");
        if ($sql==1) {
            header("Location: portal-administrativo-materias.php");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Eliminar </div>";
        }
        
    }
    else {
    }
}
?>


