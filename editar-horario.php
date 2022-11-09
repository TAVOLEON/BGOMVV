<?php include "TEMPLETES/dashboard-admin.php";
$matricula=$_GET["matricula"];
include "CONF/conexion.php";
include "PHP/contrl-editar-horario.php";
$curp=$_SESSION['curp'] ;
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_admin WHERE curp='$curp'");
$sqlmat=$conexion->query("SELECT * FROM horario WHERE matricula='$matricula'");
while($datos = $sqlmat->fetch_object()){
  $mat1=$datos->materia1;
  $mat2=$datos->materia2;
  $mat3=$datos->materia3;
  $mat4=$datos->materia4;
  $mat5=$datos->materia5;
  $mat6=$datos->materia6;
  $mat7=$datos->materia7;
  $mat8=$datos->materia8;
  $mat9=$datos->materia9;
  $mat10=$datos->materia10;
}
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
                  <h1 class="font-weight-bold mt-2 mb-0">Asignar Materias</h1>
                  <p class="lead text-muted">Matricula: <?=$matricula?></p>
                </div>
              </div>
            </div>
          </section>

          <section>
            <div class="container">
                <div class="card mt-1">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-9 ">
                        <h6 class="text-muted">Nuevas Materias</h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php 
                            include "CONF/conexion.php";
                            $sql=$conexion->query("SELECT * FROM horario WHERE matricula='$matricula'");
                            while ($datos = $sql->fetch_object()){ ?> 
                          <div class="form-group">
                            <label for="materia1">Materia 1</label>
                            <select id="materia1" class="form-control" name="materia1">
                            <option><?=$mat1?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="materia2">Materia 2</label>
                            <select id="materia2" class="form-control" name="materia2">
                            <option><?=$mat2?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="materia3">Materia 3</label>
                            <select id="materia3" class="form-control" name="materia3">
                            <option><?=$mat3?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="materia4">Materia 4</label>
                            <select id="materia4" class="form-control" name="materia4">
                            <option><?=$mat4?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="materia5">Materia 5</label>
                            <select id="materia5" class="form-control" name="materia5">
                            <option><?=$mat5?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="materia6">Materia 6</label>
                            <select id="materia6" class="form-control" name="materia6">
                            <option><?=$mat6?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="materia7">Materia 7</label>
                            <select id="materia7" class="form-control" name="materia7">
                            <option><?=$mat7?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="materia8">Materia 8</label>
                            <select id="materia8" class="form-control" name="materia8">
                            <option><?=$mat8?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="materia9">Materia 9</label>
                            <select id="materia9" class="form-control" name="materia9">
                            <option><?=$mat9?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="materia10">Materia 10</label>
                            <select id="materia10" class="form-control" name="materia10">
                            <option><?=$mat10?></option>
                            <option>No asignado</option>
                            <?php
                              $sql2=$conexion->query("SELECT * FROM materias");
                              while ($datos2 = $sql2->fetch_object()){
                              ?>
                              <option><?=$datos2->nombre ?> </option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-outline-info" value="ok" name="btnGuardar">Guardar Cambios</button>
                          </div>
                          <?php } ?>
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