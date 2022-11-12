<?php include "TEMPLETES/dashboard-admin.php";
$id=$_SESSION['curp'];
include "CONF/conexion.php";
include "PHP/ctrl-crear-materia.php";
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_admin WHERE curp='$id'");
?>

      <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h4>Materias y Salones</h4>
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
                  <h1 class="font-weight-bold mt-2 mb-0">Crear Materia</h1>
                  <p class="lead text-muted">Llene los campos</p>
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
                        <h6 class="text-muted">Nuevo Materia</h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php";
                         ?>
                          <div class="form-group">
                            <label for="clave">Clave</label>
                            <input id="clave" class="form-control" type="text" name="clave">
                          </div>
                          <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" class="form-control" type="text" name="nombre">
                          </div>
                          <div class="form-group">
                            <label for="hora">Hora</label>
                            <input id="hora" class="form-control" type="text" name="hora">
                          </div>
                          <div class="form-group">
                            <label for="semestre">Semestre</label>
                            <input id="semestre" class="form-control" type="text" name="semestre">
                          </div>
                          <div class="form-group">
                            <label for="docente">Docente</label>
                            <select id="docente" class="form-control" name="docente">
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
                            <label for="salon">Salon</label>
                            <select id="salon" class="form-control" name="salon">
                            <?php
                              include "CONF/conexion.php";
                              $sql=$conexion->query("SELECT * FROM salones");
                              while ($datos = $sql->fetch_object()){
                              ?>
                              <option><?=$datos->nombre ?> </option> 
                              <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-outline-info" value="ok" name="btnpublicar2">Crear</button>
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