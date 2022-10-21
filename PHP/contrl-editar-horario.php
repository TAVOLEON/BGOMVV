<?php

error_reporting(1);
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["titulo"]) and !empty($_POST["horario"])){
        $id=$_POST["id"];
        $titulo=$_POST["titulo"];
        $horario=$_POST["horario"];

        $sql=$conexion->query("UPDATE horarios SET titulo='$titulo',horario='$horario' WHERE id='$id'");
        if ($sql==1) {
            header("Location: portal-administrativo-materias.php");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
        
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}
?>


