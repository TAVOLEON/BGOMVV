<?php

if (!empty($_POST["btnpublicar"])) {
    if (!empty($_POST["titulo"]) and !empty($_POST["horario"])){
        $titulo=$_POST["titulo"];
        $horario=$_POST["horario"]; 

        $sql=$conexion->query("INSERT INTO horarios (titulo,horario) VALUES('$titulo','$horario') ");
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



