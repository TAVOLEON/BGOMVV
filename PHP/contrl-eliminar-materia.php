<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM materias WHERE id=$id");
    if ($sql==1) {
        echo "<div class= 'alert alert-info' >Materia Eliminada </div>";
    } else {
        echo "<div class= 'alert alert-danger' >Error al eliminar </div>";
    }
}    
?>