<?php

error_reporting(1);
if (!empty($_POST["btnRegistrar"])) {
    if (!empty($_POST["curp"]) and !empty($_POST["nombre"])and !empty($_POST["apellidop"])and !empty($_POST["apellidom"])and !empty($_POST["password"])){
        $curp=$_POST["curp"];
        $nombre=$_POST["nombre"];
        $apellidop=$_POST["apellidop"];
        $apellidom=$_POST["apellidom"];
        $pin=$_POST["password"];

        $sql=$conexion->query("INSERT INTO `docentes` (curp, nombre, apellidop, apellidom, pin) VALUES ('$curp', '$nombre', '$apellidop', '$apellidom', '$pin')");
        $sql2=$conexion->query("INSERT INTO `info_personal_docentes` (curp, fecha_nacimiento, sexo, estado_civil, domicilio, correo_electronico, telefono, foto, rfc) VALUES ('$curp', '2000-01-01', 'No Asignado', 'No Asignado', 'No Asignado','NoAsignado@bgomvv.edu', 'No Asignado', 'No Asignado', 'No Asignado')");
        
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


