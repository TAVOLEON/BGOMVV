<?php include "TEMPLETES/dashboard-docente.php";
$materia =$_GET['materia'];
$id=$_SESSION['curp'];
include "CONF/conexion.php";
include "PHP/contrl-editar-calificaciones-grupal.php";
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
                <div class="col-lg-12">
                  <h2 class="font-weight-bold mb-0">Alumnos de Materia <?= $materia?> </h2>
                  <p class="lead text-muted">Alumnos Inscritos</p>
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
                            <th scope="col">Unidad 1</th>
                            <th scope="col">Unidad 2</th>
                            <th scope="col">Unidad 3</th>
                            <th scope="col">Unidad 4</th>
                            <th scope="col">Unidad 5</th>
                            <th scope="col">Final</th>
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
                              <?php include "CONF/conexion.php"; 
                              $sql2=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$alumno' AND materias_clave='$materia'"); 
                              while ($datos = $sql2->fetch_object()){?>
                              <form method="POST" action="">
                                <input id="materia" class="form-control text-center" type="hidden" step="0.1" name="materia" value="<?=$materia?>">
                                <input id="matricula" class="form-control text-center" type="hidden" step="0.1" name="matricula" value="<?=$alumno?>">
                                <td class="col-lg-2"><input id="parcial1" class="form-control text-center" type="number"step="0.1" name="parcial1" value="<?=$datos->parcial1?>"></td>
                                <td class="col-lg-2"><input id="parcial2" class="form-control text-center" type="number"step="0.1" name="parcial2" value="<?=$datos->parcial2?>"></td>
                                <td class="col-lg-2"><input id="parcial3" class="form-control text-center" type="number"step="0.1" name="parcial3" value="<?=$datos->parcial3?>"></td>
                                <td class="col-lg-2"><input id="parcial4" class="form-control text-center" type="number"step="0.1" name="parcial4" value="<?=$datos->parcial4?>"></td>
                                <td class="col-lg-2"><input id="parcial5" class="form-control text-center" type="number"step="0.1" name="parcial5" value="<?=$datos->parcial5?>"></td>
                                <?php $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                                <td class="col-lg-2"><?=$datos->final?>
                                <input id="final" class="form-control text-center" type="hidden" step="0.1" name="final" value="<?=$final?>"></td>
                                <td>
                                <button type="submit" class="btn btn-outline-info" value="ok" name="btnGuardarm1">Guardar</button></a>
                                </td>
                                <?php } ?>
                              </form>
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