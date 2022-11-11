<?php include "TEMPLETES/dashboard-docente.php";
$materia =$_GET['materia'];
$id=$_SESSION['curp'];
include "CONF/conexion.php";
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_docentes WHERE curp='$id'");
?>
      <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h4>Materia</h4>
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
                  <a class="dropdown-item" href="editar-perfil-docente.php">Mi Perfil</a>
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
                <div class="col-lg-9">
                  <h2 class="font-weight-bold mb-0">Alumnos de Materia <?= $materia?> </h2>
                  <p class="lead text-muted">Alumnos Inscritos</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./asignar-calificacion-vista-grupal.php?materia=<?= $materia?>"><button  type="submit "class="btn btn-outline-info" id="btnBuscar" name="btnBuscar" value="ok">Asignar Calificaciones</button></a>
                </div>
              </div> 
            </div>
          </section>
      
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
                          $sql1=$conexion->query("SELECT matricula FROM horario WHERE materia1='$materia' OR materia2='$materia' OR materia3='$materia' OR materia4='$materia' OR materia7='$materia' OR materia6='$materia' OR materia5='$materia' OR materia8='$materia' OR materia9='$materia' OR materia10='$materia'  ");
                          while ($datos = $sql1->fetch_object()){ $alumno=$datos->matricula;
                            $sql=$conexion->query("SELECT * FROM alumnos WHERE matricula='$alumno' ");
                            while($datos = $sql->fetch_object()){
                            ?>
                            <tr>
                              <th scope="row"><?= $datos->matricula ?></th>
                              <td><?= $datos->nombre ?></td>
                              <td><?= $datos->apellidop?></td>
                              <td><?= $datos->apellidom ?></td>
                              <td><?= $datos->semestre ?></td>
                              <td><?= $datos->grupo ?></td>
                              <td>
                              <a href="./asignar-calificacion-materia.php?matricula=<?= $datos->matricula?>&&materia=<?=$materia?>"><button class="btn btn-outline-info">Asginar Calificacion</button></a>
                              </td>
                            </tr>
                          <?php
                            }
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
<?php include "TEMPLETES/pie-dashboard-docente.php";?>