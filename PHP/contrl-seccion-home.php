<?php
error_reporting(1);
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["titulo"])){
        $id=$_POST["id"];
        $titulo=$_POST["titulo"];
        $subtitulo=$_POST["subtitulo"];
        $cuerpo=$_POST["cuerpo"];
        $imagen =addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 

        $sql=$conexion->query("UPDATE secciones_principales SET titulo='$titulo',subtitulo='$subtitulo',cuerpo='$cuerpo',imagen='$imagen' WHERE id='$id'");
        if ($sql==1) {
            header("Location: portal-administrativo-web.php");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
        
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}
?>


