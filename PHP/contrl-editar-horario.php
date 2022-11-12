<?php

error_reporting(1);
if (!empty($_POST["btnGuardar"])) {
    if (!empty($_POST["materia1"]) and !empty($_POST["materia2"]) and !empty($_POST["materia3"]) and !empty($_POST["materia4"]) and !empty($_POST["materia5"]) and !empty($_POST["materia6"]) and !empty($_POST["materia7"])){
        $mat1=$_POST["materia1"];
        $mat2=$_POST["materia2"];
        $mat3=$_POST["materia3"];
        $mat4=$_POST["materia4"];
        $mat5=$_POST["materia5"];
        $mat6=$_POST["materia6"];
        $mat7=$_POST["materia7"];
        $mat8=$_POST["materia8"];
        $mat9=$_POST["materia9"];
        $mat10=$_POST["materia10"];

        $sql=$conexion->query("UPDATE horario SET 
        materia1='$mat1',
        materia2='$mat2',
        materia3='$mat3',
        materia4='$mat4',
        materia5='$mat5',
        materia6='$mat6',
        materia7='$mat7',
        materia8='$mat8',
        materia9='$mat9',
        materia10='$mat10'
        WHERE matricula='$matricula'");
        /* ACTUALIZAR MATERIA 1*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m1'");
        while($datos = $sqlm1->fetch_object()){ $idm1=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat1' WHERE id=$idm1");
        /* ACTUALIZAR MATERIA 2*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m2'");
        while($datos = $sqlm1->fetch_object()){ $idm2=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat2' WHERE id=$idm2");
        /* ACTUALIZAR MATERIA 3*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m3'");
        while($datos = $sqlm1->fetch_object()){ $idm3=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat3' WHERE id=$idm3");
        /* ACTUALIZAR MATERIA 4*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m4'");
        while($datos = $sqlm1->fetch_object()){ $idm4=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat4' WHERE id=$idm4");
        /* ACTUALIZAR MATERIA 5*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m5'");
        while($datos = $sqlm1->fetch_object()){ $idm5=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat5' WHERE id=$idm5");
        /* ACTUALIZAR MATERIA 6*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m6'");
        while($datos = $sqlm1->fetch_object()){ $idm6=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat6' WHERE id=$idm6");
        /* ACTUALIZAR MATERIA 7*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m7'");
        while($datos = $sqlm1->fetch_object()){ $idm7=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat7' WHERE id=$idm7");
        /* ACTUALIZAR MATERIA 8*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m8'");
        while($datos = $sqlm1->fetch_object()){ $idm7=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat8' WHERE id=$idm8");
        /* ACTUALIZAR MATERIA 9*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m9'");
        while($datos = $sqlm1->fetch_object()){ $idm7=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat9' WHERE id=$idm9");
        /* ACTUALIZAR MATERIA 10*/
        $sqlm1=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m10'");
        while($datos = $sqlm1->fetch_object()){ $idm7=$datos->id; }
        $sqlm1=$conexion->query("UPDATE calificaciones SET materias_clave='$mat10' WHERE id=$idm10");
        if ($sql==1) {
            header("Location: ver-horario-alumno-admin.php?matricula=$matricula");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
        
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor llene los campos </div>";
    }
}
?>


