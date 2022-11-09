<?php include "TEMPLETES/dashboard-admin.php";
$matricula=$_GET["matricula"];
include "CONF/conexion.php";
include "PHP/contrl-editar-calificaciones.php";

$curp=$_SESSION['curp'] ;
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_admin WHERE curp='$curp'");
$sqlmat=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' and aux='m1");
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
                  <img src="" alt="">
                <?php
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
          <section>
            <div class="container">
              <div class="row">
                <div class="col-lg-9">
                  <h1 class="font-weight-bold mt-2 mb-0">Asignar Calificaciones</h1>
                  <p class="lead text-muted">Matricula: <?=$matricula?> </p>
                </div>
              </div>
            </div>
          </section>
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
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m1'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

          <!-- MATERIA 2 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m2'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="parcial1" class="form-control text-center" type="number" step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

          <!-- MATERIA 3 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m3'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="parcial1" class="form-control text-center" type="number" step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

          <!-- MATERIA 4 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m4'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="parcial1" class="form-control text-center" type="number" step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

          <!-- MATERIA 5 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m5'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="parcial1" class="form-control text-center" type="number" step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

          <!-- MATERIA 6 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m6'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="parcial1" class="form-control text-center" type="number" step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

          <!-- MATERIA 7 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m7'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="parcial1" class="form-control text-center" type="number" step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

          <!-- MATERIA 8 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m8'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="parcial1" class="form-control text-center" type="number" step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

          <!-- MATERIA 9 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m9'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="parcial1" class="form-control text-center" type="number" step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

          <!-- MATERIA 10 -->
           
          <section>
            <div class="container">
                <div class="card mt-2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m10'");
                            while ($datos = $sql->fetch_object()){
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
                              <input id="parcial1" class="form-control text-center" type="number" step="0.1" name="parcial1" value="<?=$datos->parcial1?>">
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
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
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

        </div>
      </div>




<?php include "TEMPLETES/pie-dashboard-admin.php";?>