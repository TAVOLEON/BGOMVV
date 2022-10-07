<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM anuncios_home WHERE id=$id");
    if ($sql==1) {
        echo "<div class= 'alert alert-info' >Anuncio Eliminado </div>";
    } else {
        echo "<div class= 'alert alert-danger' >Error al eliminar </div>";
    }
}    
?>