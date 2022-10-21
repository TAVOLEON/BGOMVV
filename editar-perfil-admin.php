<?php include "TEMPLETES/dashboard-admin.php";
include "CONF/conexion.php";
$curp= $_SESSION["curp"];
$sql=$conexion->query("SELECT * FROM administradores WHERE curp='$curp'");
$sql2=$conexion->query("SELECT * FROM info_personal_admin WHERE curp='$curp'");
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_admin WHERE curp='$curp'");
?>

      <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h4>Pagina WEB</h4>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <?php while($datos = $sqlfoto->fetch_object()){?>
                <img style="width:50px; border-radius:10px;" class="img-fluid"  src="data:/image/jpg;base64,<?php echo base64_encode($datos->foto)?>" alt="">
                <?php  } ?>
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
                  <h1 class="font-weight-bold mt-2 mb-0">Mi perfil</h1>
                  <p class="lead text-muted"> <?php
                  echo $_SESSION["nombre"] ," ", $_SESSION["apellidop"]," ", $_SESSION["apellidom"];
                ?></p>
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
                        <h5 class="text-muted">Informacion de usuario</h5>
                        <?php include "PHP/contrl-editar-perfil-admin.php"; ?>
                        <form method="POST" enctype="multipart/form-data">
                          <?php
                           while ($datos=$sql->fetch_object()) { ?>
                            <div class="form-group">
                              <label for="nombre">Nombre</label>
                              <input id="nombre" class="form-control" type="text" name="nombre" value="<?=$datos->nombre?>">
                            </div>
                            <div class="form-group">
                              <label for="apellidop">Apellido Paterno</label>
                              <input id="apellidop" class="form-control" type="text" name="apellidop" value="<?=$datos->apellidop?>">
                            </div>
                            <div class="form-group">
                              <label for="apellidom">Apellido Materno</label>
                              <input id="apellidom" class="form-control" type="text" name="apellidom" value="<?=$datos->apellidom?>">
                            </div>
                            <div class="form-group">
                              <label for="pin">Password/PIN</label>
                              <input id="pin" class="form-control" type="password" name="pin" value="<?=$datos->pin?>">
                            </div>
                            
                            <div class="form-group">
                              <label for="curp">CURP</label>
                              <input id="curp" class="form-control" type="text" name="curp" value="<?=$datos->curp?>">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-outline-info" value="ok" name="btnGuardar">Guardar</button>
                            </div>
                            <?php } ?>
                        </form>
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
                      <div class="col-lg-9 ">
                        <h5 class="text-muted">Informacion Personal</h5>
                        <form method="POST" enctype="multipart/form-data">
                          <?php
                           while ($datos=$sql2->fetch_object()) { ?>
                            <div class="form-group">
                              <label for="fecha_nac">Fecha de nacimiento</label>
                              <input id="fecha_nac" class="form-control" type="date" name="fecha_nac" value="<?=$datos->fecha_nacimiento?>">
                            </div>
                            <div class="form-group">
                              <label for="sexo">Sexo</label>
                              <input id="sexo" class="form-control" type="text" name="sexo" value="<?=$datos->sexo?>">
                            </div>
                            <div class="form-group">
                              <label for="estadocivil">Estado Civil</label>
                              <input id="estadocivil" class="form-control" type="text" name="estadocivil" value="<?=$datos->estado_civil?>">
                            </div>
                            <div class="form-group">
                              <label for="domicilio">Domicilio</label>
                              <input id="domicilio" class="form-control" type="text" name="domicilio" value="<?=$datos->domicilio?>">
                            </div>
                            
                            <div class="form-group">
                              <label for="correo">Correo electronico</label>
                              <input id="correo" class="form-control" type="email" name="correo" value="<?=$datos->correo_electronico?>">
                            </div>
                            <div class="form-group">
                              <label for="telefono">Telefono</label>
                              <input id="telefono" class="form-control" type="text" name="telefono" value="<?=$datos->telefono?>">
                            </div>
                            <div class="form-group">
                              <label for="rfc">RFC</label>
                              <input id="rfc" class="form-control" type="text" name="rfc" value="<?=$datos->rfc?>">
                            </div>
                            <div class="form-group">
                              <label for="foto">Foto</label>
                              <input id="foto" class="form-control-file" type="file" name="foto">
                              <img style="width:200px;" class="img-fluid" src="data:/image/jpg;base64,<?php echo base64_encode($datos->foto)?>" alt="">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-outline-info" value="ok" name="btnGuardar2">Guardar</button>
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