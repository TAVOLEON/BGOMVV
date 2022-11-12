<?php

session_start();

if(!empty($_POST["btnIngresar"])) { 
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])){
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = $conexion -> query("SELECT * FROM docentes WHERE curp='$usuario' and pin='$password'");
        $sql2 = $conexion -> query("SELECT * FROM info_personal_docentes WHERE curp='$usuario'");
        if ($datos2 = $sql2 -> fetch_object()) {
            $_SESSION["foto"]=$datos2 -> foto;
        }
        if ($datos = $sql -> fetch_object()) {
            $_SESSION["curp"]=$datos -> curp; 
            $_SESSION["nombre"]=$datos -> nombre;
            $_SESSION["apellidop"]=$datos -> apellidop;
            $_SESSION["apellidom"]=$datos -> apellidom;
            header("location: portal-docentes.php");
        } else {
            echo "<div class= 'alert alert-danger' > Acceso Denegado</div>";
        
        }   
    } else {
        echo "<div class='alert alert-warning' > Por favor llene los campos </div>";
    }
}


?>