<?php include "TEMPLETES/dashboard-admin.php";
include "CONF/conexion.php";
include "PHP/contrl-crear-aviso-docentes.php";
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
                  <h1 class="font-weight-bold mt-2 mb-0">Crear Aviso</h1>
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
                        <h6 class="text-muted">Nuevo Aviso</h6>
                        <form method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                          <label for="fecha">Numero de aviso</label>
                            <input id="id" class="form-control" type="number" name="id" >
                          </div>
                          <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input id="fecha" class="form-control" type="date" name="fecha">
                          </div>
                          <div class="form-group">
                            <label for="nombre">Titulo</label>
                            <input id="nombre" class="form-control" type="text" name="titulo">
                          </div>
                          <div class="form-group">
                              <label for="descripcion">Descripcion</label>
                              <textarea id="descripcion" class="form-control" name="descripcion" rows="3"></textarea>
                            </div>
                          <div class="form-group">
                            <label for="enlace">Enlace</label>
                            <input id="enlace" class="form-control" type="url" name="enlace">
                          </div>
                          <div class="form-group">
                              <label for="imagen">Imagen</label>
                              <input id="imagen" class="form-control-file" type="file" name="imagen">
                            </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-outline-info" value="ok" name="btnGuardar">Guardar Cambios</button>
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