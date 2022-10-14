<?php include "TEMPLETES/dashboard-admin.php";
$id=$_GET["id"];
include "CONF/conexion.php";
$sql=$conexion->query("SELECT * FROM horarios WHERE id=$id");
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
                  <h1 class="font-weight-bold mt-2 mb-0">Editar Horario</h1>
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
                        <h6 class="text-muted"></h6>
                        <?php
                            include "PHP/contrl-editar-horario.php";
                            ?>
                        <form method="POST" enctype="multipart/form-data">
                          <?php
                          while ($datos=$sql->fetch_object()) {?>
                            <div class="form-group">
                              <input id="id" class="form-control" type="hidden" name="id" value="<?=$datos->id?>">
                            </div>
                            <div class="form-group">
                              <label for="titutlo">Titulo</label>
                              <input id="titulo" class="form-control" type="text" name="titulo" value="<?=$datos->titulo?>">
                            </div>
                            <div class="form-group">
                              <label for="horario">Horario</label>
                              <input id="horario" class="form-control" type="text" name="horario" value="<?=$datos->horario?>">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-outline-info" value="ok" name="btnGuardar">Guardar</button>
                              <a onclick="return eliminar()" href="./portal-administrativo-materias.php?id=<?=$datos->id?>"><button class="btn btn-outline-danger">Eliminar</button></a>
                            </div>
                        </form>
                        <?php
                          }
                          include "PHP/contrl-eliminar-horario.php";
                          ?>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>
        </div>
      </div>




<?php include "TEMPLETES/pie-dashboard-admin.php";?>