<?php

error_reporting(1);
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidop"])and !empty($_POST["apellidom"])){
        $nombre=$_POST["nombre"];
        $apellidop=$_POST["apellidop"];
        $apellidom=$_POST["apellidom"];
        $pin=$_POST["pin"];
    
        $sql=$conexion->query("UPDATE docentes SET 
        nombre='$nombre',
        apellidop='$apellidop',
        apellidom='$apellidom',
        pin='$pin'
        WHERE curp='$curpdocente'");
        if ($sql==1) {
            header("Location: portal-administrativo-docentes.php");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}

 /* SECCION DE INFORMACION PERSONAL */ 
 
error_reporting(1);
if (!empty($_POST["btnGuardar2"])) {
    if (!empty($_POST["fecha_nac"])){
        $fecha_nac=$_POST["fecha_nac"];
        $sexo=$_POST["sexo"];
        $estado_civil=$_POST["estadocivil"];
        $domicilio=$_POST["domicilio"];
        $correo_electronico=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $rfc=$_POST["rfc"];
        $foto =addslashes(file_get_contents($_FILES['foto']['tmp_name']));  

        $sql=$conexion->query("UPDATE `info_personal_docentes` SET 
        `fecha_nacimiento` = '$fecha_nac', 
        `sexo` = '$sexo', 
        `estado_civil` = '$estado_civil', 
        `domicilio` = '$domicilio',
        `correo_electronico` = '$correo_electronico', 
        `telefono` = '$telefono', 
        `rfc` = '$rfc', 
        `foto`='$foto'
        WHERE curp='$curpdocente';");
        if ($sql==1) {
            header("Location: portal-administrativo-docentes.php");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}
?>


 