<?php

error_reporting(1);
if (!empty($_POST["btnRegistrar"])) {
    if (!empty($_POST["matricula"]) and !empty($_POST["nombre"])and !empty($_POST["apellidop"])and !empty($_POST["apellidom"])and !empty($_POST["password"])){
        $matricula=$_POST["matricula"];
        $nombre=$_POST["nombre"];
        $apellidop=$_POST["apellidop"];
        $apellidom=$_POST["apellidom"];
        $pin=$_POST["password"];
        $semestre=$_POST["semestre"];
        $grupo=$_POST["grupo"];

        $sql=$conexion->query("INSERT INTO `alumnos` (matricula, nombre, apellidop, apellidom, pin, semestre, grupo) VALUES ('$matricula', '$nombre', '$apellidop', '$apellidom', '$pin', '$semestre', '$grupo')");
        $sql2=$conexion->query("INSERT INTO `info_personal_alumnos` (matricula, fecha_nacimiento, curp, sexo, estado_civil, domicilio, correo_electronico, telefono, tutor, telefono_tutor, foto) VALUES ('$matricula', '2000-01-01', 'No Asignado', 'No Asignado', 'No Asignado', 'No Asignado', 'NoAsignado@bgomvv.edu', 'No Asignado', 'No Asignado', 'No Asignado', 'No Asignado')");
        $sql3=$conexion->query("INSERT INTO `horario` (matricula) VALUES ('$matricula')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm1')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm2')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm3')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm4')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm5')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm6')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm7')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm8')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm9')");
        $sql4=$conexion->query("INSERT INTO `calificaciones` (alumnos_matricula,aux) VALUES ('$matricula' , 'm10')");
        
        if ($sql==1) {
            header("Location: listar-alumnos.php?grupo=$grupo");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
        
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}
?>


