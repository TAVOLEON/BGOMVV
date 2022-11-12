<?php include "TEMPLETES/dashboard-docente.php";
$matricula =$_GET['matricula'];
$materia =$_GET['materia'];
$id=$_SESSION['curp'];
include "PHP/contrl-editar-calificaciones-materia.php";
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
                <div class="col-lg-6">
                  <h2 class="font-weight-bold mb-0">Calificaciones Materia: <?= $materia?> </h2>
                  <p class="lead text-muted">Alumno: <?= $matricula?></p>
                </div>
              </div> 
            </div>
          </section>

          <div id="content">
          <!-- MATERIA 1 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND materias_clave='$materia'");
                            while ($datos = $sql->fetch_object()){
                              $id=$datos->id;
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <input id="id" class="form-control" type="hidden" name="id" value="<?=$datos->id?>">
                              <input id="matricula" class="form-control" type="hidden" name="matricula" value="<?=$datos->alumnos_matricula?>">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label>
                              <input id="parcial1" class="form-control text-center" type="number"step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label>
                              <input id="parcial2" class="form-control text-center" type="number"step="0.1" name="parcial2" value="<?=$datos->parcial2?>">
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label>
                              <input id="parcial3" class="form-control text-center" type="number"step="0.1" name="parcial3" value="<?=$datos->parcial3?>">
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label>
                              <input id="parcial4" class="form-control text-center" type="number" step="0.1" name="parcial4" value="<?=$datos->parcial4?>">
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label>
                              <input id="parcial5" class="form-control text-center" type="number"step="0.1" name="parcial5" value="<?=$datos->parcial5?>">
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$final?>">
                              <label for="final" style="font-size: large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                            <div class="col-lg-1 pt-2">
                              <div class="form-group">
                                <button type="submit" class="btn btn-outline-info" value="ok" name="btnGuardarm1">Guardar</button>
                              </div>  
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>
          <!-- CIERRE DE DIVS PRINCIPALES -->
        </div> 
      </div>
<?php include "TEMPLETES/pie-dashboard-docente.php";?>