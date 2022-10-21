<?php
if (!empty($_GET["titulo"])) {
    $titulo=$_GET["titulo"];
    $sql=$conexion->query("DELETE FROM horarios WHERE titulo='$titulo'");
    if ($sql==1) {
        echo "<div class= 'alert alert-info' >Horario Eliminado </div>";
    } else {
        echo "<div class= 'alert alert-danger' >Error al eliminar </div>";
    }
}    
?>