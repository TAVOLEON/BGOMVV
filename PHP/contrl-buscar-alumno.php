<?php

error_reporting(1);
if (!empty($_POST["btnBuscar"])) {
    if (!empty($_POST["matricula"])){
        $matricula=$_POST["matricula"];
        $sql=$conexion->query("SELECT * FROM alumnos WHERE matricula='$matricula'");
        if ($sql==1) {
            while($datos = $sql->fetch_object()){
            echo "<section>
            <div class='container'>
              <div class='card'>
                <div class='card-body'>
                  <div class='row'>
                      <table class='table'>
                        <thead>
                          <tr>
                            <th scope='col'>Matricula</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Apellido Paterno</th>
                            <th scope='col'>Apeliido Materno</th>
                            <th scope='col'>Semestre</th>
                            <th scope='col'>Grupo</th>
                            <th scope='col'>Opciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope='row'> $datos->matricula </th>
                            <td> $datos->nombre </td>
                            <td> $datos->apellidop</td>
                            <td> $datos->apellidom</td>
                            <td> $datos->semestre </td>
                            <td> $datos->grupo </td>
                            <td><a href='./editar-aviso-alumno.php?matricula= $datos->matricula'><button class='btn btn-outline-info'>Editar</button></a>
                            <a  onclick='return eliminar()'  href='./portal-administrativo-alumnos.php?id= $datos->matricula'><button class='btn btn-outline-danger'>Eliminar</button></a></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </section>";
         }
        } else {
            echo "<div class= 'alert alert-warning' >Error al Buscar </div>";
        }
        
    }
    else {
        echo "<div class= 'alert alert-warning' > Por favor ingrese matricula</div>";
    }
}
?>


