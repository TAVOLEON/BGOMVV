<?php include "TEMPLETES/dashboard-admin.php";
$grupo =$_GET['grupo'];
$id=$_SESSION['curp'];
include "CONF/conexion.php";
include "PHP/contrl-eliminar-aviso-alumno.php";
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_admin WHERE curp='$id'");
?>
<script>
function eliminar(){
  var respuesta = confirm("Estas seguro que deseas eliminar?");
  return respuesta
  
}
</script>
      <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h4>Alumnos</h4>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <?php while($datos = $sqlfoto->fetch_object()){?>
                <img style="width:50px; border-radius:10px;" class="img-fluid"  src="data:/image/jpg;base64,<?php echo base64_encode($datos->foto)?>" alt="">
                <?php  } ?>
              <li class="nav-item dropdown ml-4">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php 
                  include "CONF/conexion.php";
                  echo $_SESSION["nombre"] ," ", $_SESSION["apellidop"]," ", $_SESSION["apellidom"];
                ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="editar-perfil-admin.php">Mi Perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="PHP/cerrar-sesion-admin.php">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </div>
          </div>
        </nav>

        <div id="content">


            <!-- SECCION DE AVISOS -->
          
            <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-6">
                  <h2 class="font-weight-bold mb-0">Alumnos de Grupo <?= $grupo?> </h2>
                  <p class="lead text-muted">Alumnos Inscritos</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./crear-alumno.php"><button class="btn btn-outline-success w-100 aling-self-center">Agregar Alumno</button></a>
                </div>
                <div class="col-lg-3 mt-3">
                  <form method="POST" action="">
                    <div class="input-group">
                      <input class="form-control" type="text" name="matricula" placeholder="Matricula" aria-label="Recipient's " aria-describedby="my-addon">
                      <div class="input-group-append">
                        <button  type="submit "class="btn btn-success" id="btnBuscar" name="btnBuscar" value="ok">Buscar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div> 
            </div>
          </section>
          <?php include "PHP/contrl-buscar-alumno.php";?>
          <section>
            <div class="container">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Matricula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Semestre</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">Opciones</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          include "CONF/conexion.php"; 
                          include "PHP/contrl-eliminar-alumno.php";

                          $sql=$conexion->query("SELECT * FROM alumnos WHERE grupo='$grupo' ");
                          while($datos = $sql->fetch_object()){
                        ?>
                          <tr>
                            <th scope="row"><?= $datos->matricula ?></th>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellidop?></td>
                            <td><?= $datos->apellidom ?></td>
                            <td><?= $datos->semestre ?></td>
                            <td><?= $datos->grupo ?></td>
                            <td><a href="./editar-perfil-alumno-admin.php?matricula=<?= $datos->matricula ?>"><button class="btn btn-outline-info">Editar</button></a>
                            <a href="./ver-horario-alumno-admin.php?matricula=<?= $datos->matricula ?>"><button class="btn btn-outline-warning">Materias</button></a>
                            <form method="POST" action="">
                              <input class="form-control" type="hidden" name="claveborrar" value=<?=$datos->matricula ?>>
                              <a onclick="return eliminar()"><button type="submit" class="btn btn-outline-danger" name="eliminalumno" value="ok">Eliminar</button></a>
                            </form></td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- CIERRE DE DIVS PRINCIPALES -->
        </div> 
      </div>
<?php include "TEMPLETES/pie-dashboard-admin.php";?>