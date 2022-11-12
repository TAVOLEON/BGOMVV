<?php

error_reporting(1);
if (!empty($_POST["btnGuardarm1"])) {
    if (($_POST["parcial1"])>=0 and ($_POST["parcial2"])>=0  and ($_POST["parcial3"])>=0  and ($_POST["parcial4"])>=0  and !empty($_POST["parcial5"])>=0){
        $matricula=$_POST["matricula"];
        $id=$_POST["id"];
        $parcial1=$_POST["parcial1"];
        $parcial2=$_POST["parcial2"];
        $parcial3=$_POST["parcial3"];
        $parcial4=$_POST["parcial4"];
        $parcial5=$_POST["parcial5"];
        $final=$_POST["final"];

        $sql=$conexion->query("UPDATE calificaciones SET 
        parcial1='$parcial1',
        parcial2='$parcial2',
        parcial3='$parcial3',
        parcial4='$parcial4',
        parcial5='$parcial5',
        final='$final'
        WHERE id='$id'");
        if ($sql==1) {
            header("Location: asignar-calificacion.php?matricula=$matricula");
        } else {
            echo "<div class= 'alert alert-warning' >Error al Guardar </div>";
        }
        
    }
    else {
        echo "<div class= 'alert alert-warning' > Los valores deben ser mayores a 0 </div>";
    }
}
?>


