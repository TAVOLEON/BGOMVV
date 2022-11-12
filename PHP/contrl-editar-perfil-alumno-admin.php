<?php

error_reporting(1);
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidop"])and !empty($_POST["apellidom"])and !empty($_POST["semestre"]) and !empty($_POST["pin"])and !empty($_POST["grupo"])){
        $nombre=$_POST["nombre"];
        $apellidop=$_POST["apellidop"];
        $apellidom=$_POST["apellidom"];
        $pin=$_POST["pin"];
        $semestre=$_POST["semestre"];
        $grupo=$_POST["grupo"];
    
        $sql=$conexion->query("UPDATE alumnos SET 
        nombre='$nombre',
        apellidop='$apellidop',
        apellidom='$apellidom',
        pin='$pin',
        semestre='$semestre',
        grupo='$grupo'
        WHERE matricula='$matricula';");
        if ($sql==1) {
            header("Location: portal-administrativo-alumnos.php");
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
        $curp=$_POST["curp"];
        $sexo=$_POST["sexo"];
        $estado_civil=$_POST["estadocivil"];
        $domicilio=$_POST["domicilio"];
        $correo_electronico=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $tutor=$_POST["tutor"];
        $telefonotutor=$_POST["telefonotutor"];
        $foto =addslashes(file_get_contents($_FILES['foto']['tmp_name']));  

        $sql=$conexion->query("UPDATE `info_personal_alumnos` SET 
        `fecha_nacimiento` = '$fecha_nac', 
        `curp` = '$curp', 
        `sexo` = '$sexo', 
        `estado_civil` = '$estado_civil', 
        `domicilio` = '$domicilio',
        `correo_electronico` = '$correo_electronico', 
        `telefono` = '$telefono', 
        `tutor` = '$tutor', 
        `telefono_tutor` = '$telefonotutor', 
        `foto`='$foto'
        WHERE matricula='$matricula';");
        if ($sql==1) {
            header("Location: portal-administrativo-alumnos.php");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}
?>


