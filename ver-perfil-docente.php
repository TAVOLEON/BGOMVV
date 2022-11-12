<?php include "TEMPLETES/dashboard-admin.php";
include "CONF/conexion.php";
$curp= $_SESSION["curp"];
$curpdocente= $_GET["curp"];
$sql=$conexion->query("SELECT * FROM docentes WHERE curp='$curpdocente'");
$sql2=$conexion->query("SELECT * FROM info_personal_docentes WHERE curp='$curpdocente'");
?>

      <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h4>Docentes</h4>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown ml-4">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="" alt="">
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
                  <h1 class="font-weight-bold mt-2 mb-0">Perfil</h1>
                  <p class="lead text-muted">CURP : <?=$curpdocente?> </p>
                </div>
              </div>
            </div>
          </section>

          <section>
            <div class="container">
                <div class="card mt-1">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h5 class="text-muted">Informacion de usuario</h5>                   
                          <?php while ($datos=$sql->fetch_object()) { ?>
                            <div class="row text-center">
                              <div class="col-lg-4">
                                <p class="text-muted">Nombre</p>
                                <p><?=$datos->nombre?></p>
                              </div>
                              <div class="col-lg-4">
                                <p class="text-muted">Apellido Paterno</p>
                                <p><?=$datos->apellidop?></p>
                              </div>
                              <div class="col-lg-4">
                                <p class="text-muted">Apellido Materno</p>
                                <p><?=$datos->apellidom?></p>
                              </div>
                            </div> 
                            <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>
          <!-- INFORMACION PERSONAL -->
          <section>
            <div class="container">
                <div class="card mt-1">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12 ">
                        <h5 class="text-muted">Informacion Personal</h5>
                       <?php while ($datos=$sql2->fetch_object()) { ?>
                            <div class="row text-center">
                              <div class="col-lg-4">
                                <p class="text-muted">Fecha de Nacimiento</p>
                                <p><?=$datos->fecha_nacimiento?></p>
                              </div>
                              <div class="col-lg-4">
                                <p class="text-muted">Sexo</p>
                                <p><?=$datos->sexo?></p>
                              </div>
                              <div class="col-lg-4">
                                <p class="text-muted">Estado Civil</p>
                                <p><?=$datos->estado_civil?></p>
                              </div>
                              <div class="col-lg-4">
                                <p class="text-muted">Domicilio</p>
                                <p><?=$datos->domicilio?></p>
                              </div>
                              <div class="col-lg-4">
                                <p class="text-muted">Correo electronico</p>
                                <p><?=$datos->correo_electronico?></p>
                              </div>
                              <div class="col-lg-4">
                                <p class="text-muted">Telefono</p>
                                <p><?=$datos->telefono?></p>
                              </div>
                              <div class="col-lg-4">
                                <p class="text-muted">RFC</p>
                                <p><?=$datos->rfc?></p>
                              </div>
                              <div class="col-lg-4">
                                <p class="text-muted">Foto</p>
                                <img style="width:200px;" class="img-fluid" src="data:/image/jpg;base64,<?php echo base64_encode($datos->foto)?>" alt="">
                              </div>
                            </div> 
                            <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>

          

        </div>
      </div>




<?php include "TEMPLETES/pie-dashboard-admin.php";?>