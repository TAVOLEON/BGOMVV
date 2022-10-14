<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM horarios WHERE id=$id");
    if ($sql==1) {
        header("Location: portal-administrativo-materias.php");
    } else {
        echo "<div class= 'alert alert-danger' >Error al eliminar </div>";
    }
}    
?>