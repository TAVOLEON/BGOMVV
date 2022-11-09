<?php

if (!empty($_POST["btnpublicar2"])) {
    if (!empty($_POST["clave"]) and !empty($_POST["nombre"]) and !empty($_POST["semestre"])){
        $clave=$_POST["clave"];
        $nombre=$_POST["nombre"];
        $hora=$_POST["hora"];
        $semestre=$_POST["semestre"]; 
        $docente=$_POST["docente"]; 
        $salon=$_POST["salon"]; 
        
        $sql=$conexion->query("INSERT INTO materias (clave,nombre,hora,semestre,docente,salon) VALUES('$clave','$nombre','$hora','$semestre','$docente','$salon') ");
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



