<?php include "TEMPLETES/dashboard-docente.php";
$matricula=$_GET["matricula"];
$curp=$_SESSION['curp'];
include "CONF/conexion.php";
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_docentes WHERE curp='$curp'");
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
          <h4>Materias de Tutorado</h4>
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
                  <a class="dropdown-item" href="editar-perfil-alumno.php">Mi Perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="PHP/cerrar-sesion-admin.php">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </div>
          </div>
        </nav>

        <div id="content">
          

           <!-- SECCION DE BIENVENIDA -->
          
           <section>
            <div class="container mt-2">
              <div class="row">
                <?php $sql=$conexion->query("SELECT * FROM alumnos WHERE matricula='$matricula'");
                 while ($datos = $sql->fetch_object()){?>
                <div class="col-lg-12 ">
                  <h1 class="font-weight-bold mb-0 text-center">Materias Asignadas</h1>
                  <h5 class="font-weight-bold mb-0"> <?=$datos->nombre?> <?=$datos->apellidop?> <?=$datos->apellidom?> </h5>
                  <h6 class="font-weight-bold mb-0"> <?=$matricula?></h6>
                </div>
                <?php } ?>
              </div> 
            </div>
          </section>

          <section>
            <div class="container">
                <div class="card mt-5">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h6 class="text-muted"></h6>
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m1'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m2'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m3'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m4'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m5'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m6'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m7'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m8'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m9'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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
                        <?php
                            include "CONF/conexion.php"; $sql=$conexion->query("SELECT * FROM calificaciones WHERE alumnos_matricula='$matricula' AND aux='m10'");
                            while ($datos = $sql->fetch_object()){
                              $final= ($datos->parcial1 + $datos->parcial2 + $datos->parcial3 + $datos->parcial4 + $datos->parcial5)/5; ?>
                          <div class="row text-center">
                            <div class="col-lg-2">
                              <label for="materia" style="font-size: medium">Materia</label><br>
                              <label for="materia" style="font-size: x-large; "><?=$datos->materias_clave?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial1" style="font-size: small;">Unidad 1</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial2" style="font-size: small;">Unidad 2</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial2?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial3" style="font-size: small;">Unidad 3</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial3?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial4" style="font-size: small;">Unidad 4</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial4?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="parcial5" style="font-size: small;">Unidad 5</label><br>
                              <label class="text-center" style="font-size: x-large;"><?=$datos->parcial1?></label>
                            </div>
                            <div class="col-lg-2">
                              <label for="final" style="font-size: small;">Calificacion Final</label><br>
                              <input id="final" class="form-control" type="hidden" name="final" value="<?=$datos->final?>">
                              <label for="final" style="font-size: x-large;"><?=$final?></label>
                            </div>
                            <?php } ?>
                          </div>
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