<?php

error_reporting(1);
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidop"])and !empty($_POST["apellidom"])and !empty($_POST["curp"])and !empty($_POST["correo"])and !empty($_POST["password"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellidop=$_POST["apellidop"];
        $apellidom=$_POST["apellidom"];
        $curp=$_POST["curp"];
        $rfc=$_POST["rfc"];
        $correo=$_POST["correo"];
        $telefono=$_POST["telefono"];
        $password=$_POST["password"];
        $avatar =addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 

        $sql=$conexion->query("UPDATE admin_usuario SET 
        nombre='$nombre',
        apellidop='$apellidop',
        apellidom='$apellidom',
        curp='$curp',
        rfc='$rfc' ,
        correo='$correo', 
        telefono='$telefono', 
        password='$password',
        avatar='$avatar'
        WHERE id='$id';");
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


