<?php include "TEMPLETES/dashboard-admin.php";
include "CONF/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("SELECT * FROM secciones_principales WHERE id='$id'");
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
                  <h1 class="font-weight-bold mt-2 mb-0">Editar Seccion</h1>
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
                        <?php
                            include "PHP/contrl-seccion-home.php";
                            ?>
                        <form method="POST" enctype="multipart/form-data">
                          <?php
                          while ($datos=$sql->fetch_object()) {?>
                            <div class="form-group">
                              <input id="id" class="form-control" type="hidden" name="id" value="<?=$datos->id?>">
                            </div>
                            <div class="form-group">
                              <label for="titulo">Titulo</label>
                              <input id="titulo" class="form-control" type="text" name="titulo" value="<?=$datos->titulo?>">
                            </div>
                            <div class="form-group">
                              <label for="subtitulo">Subtitulo</label>
                              <input id="subtitulo" class="form-control" type="text" name="subtitulo"  value="<?=$datos->subtitulo?>">
                            <div class="form-group">
                              <label for="cuerpo">Cuerpo</label>
                              <textarea id="cuerpo" class="form-control" name="cuerpo" rows="3"><?=$datos->cuerpo?></textarea>
                            </div>
                            <div class="form-group">
                              <label for="imagen">Imagen</label>
                              <input id="imagen" class="form-control-file" type="file" name="imagen">
                              <img style="width:200px;" class="img-fluid" src="data:/image/jpg;base64,<?php echo base64_encode($datos->imagen)?>" alt="">
                            </div>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-outline-info" value="ok" name="btnGuardar">Guardar</button>
                            </div>
                          <?php
                          }
                          ?>
                          
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