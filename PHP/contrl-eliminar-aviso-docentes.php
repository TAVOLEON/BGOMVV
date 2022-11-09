<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM anuncios_docentes WHERE id='$id'");
    if ($sql==1) {
        header("Location: portal-administrativo-docentes.php");
    } else {
        echo "<div class= 'alert alert-danger' >Error al eliminar </div>";
    }
}    
?>