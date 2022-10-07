<?php

session_start();

if(!empty($_POST["btnIngresar"])) { 
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])){
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = $conexion -> query("SELECT * FROM admin_usuario WHERE curp='$usuario' and password='$password'");
        if ($datos = $sql -> fetch_object()) {
            $_SESSION["id"]=$datos -> id;
            $_SESSION["nombre"]=$datos -> nombre;
            $_SESSION["apellidop"]=$datos -> apellidop;
            $_SESSION["apellidom"]=$datos -> apellidom;
            $_SESSION["correo"]=$datos -> email;
            $_SESSION["curp"]=$datos -> curp; 
            header("location: portal-administrativo-web.php");
        } else {
            echo "<div class= 'alert alert-danger' > Acceso Denegado</div>";
        
        }   
    } else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}


?>