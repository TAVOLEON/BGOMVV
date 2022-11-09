<?php
if (!empty($_GET["nombre"])) {
    $nombre=$_GET["nombre"];
    $sql=$conexion->query("DELETE FROM salones WHERE nombre='$nombre'");
    if ($sql==1) {
    } else {
        echo "<div class= 'alert alert-danger' >Error al eliminar </div>";
    }
}    
?>