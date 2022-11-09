<?php include "TEMPLETES/dashboard-admin.php";
include "CONF/conexion.php";
include "PHP/contrl-crear-grupo.php";
$curp=$_SESSION['curp'] ;
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_admin WHERE curp='$curp'");
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
                  <h1 class="font-weight-bold mt-2 mb-0">Crear grupo</h1>
                  <p class="lead text-muted">Modifique los campos</p>
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
                        <h6 class="text-muted">Nuevo Grupo</h6>
                        <form method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" class="form-control" type="text" name="nombre" >
                          </div>
                          <div class="form-group">
                            <label for="tutor">Tutor</label>
                            <select id="tutor" class="form-control" name="tutor">
                            <?php
                              include "CONF/conexion.php";
                              $sql=$conexion->query("SELECT * FROM docentes");
                              while ($datos = $sql->fetch_object()){
                              ?>
                              <option><?=$datos->nombre?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="semestre">Semestre</label>
                            <select id="semestre" class="form-control" name="semestre">
                            <?php
                              include "CONF/conexion.php";
                              $sql=$conexion->query("SELECT * FROM semestres");
                              while ($datos = $sql->fetch_object()){
                              ?>
                              <option><?=$datos->nombre?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="especialidad">Especialidad</label>
                            <input id="especialidad" class="form-control" type="text" name="especialidad">
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-outline-info" value="ok" name="btnGuardar">Guardar</button>
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