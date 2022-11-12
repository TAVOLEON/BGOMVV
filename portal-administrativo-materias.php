<?php include "TEMPLETES/dashboard-admin.php";
$id=$_SESSION['curp'];
include "CONF/conexion.php";
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_admin WHERE curp='$id'");
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
          <h4>Materias y Salones</h4>
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


            <!-- SECCION DE SALONES -->
          
            <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <h2 class="font-weight-bold mb-0">Salones</h2>
                  <p class="lead text-muted">Salones de clases</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./crear-salon.php"><button class="btn btn-outline-success w-100 aling-self-center">Agregar Salon</button></a>
                </div>
              </div> 
            </div>
          </section>
          <section>
            <div class="container">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <?php 
                      include "CONF/conexion.php";
                      include "PHP/contrl-eliminar-salon.php";
                      $sql=$conexion->query("SELECT * FROM salones ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->nombre ?></h6>
                         <p><?= $datos->descripcion ?></p>
                         <p><?= $datos->responsable ?></p>
                         <a href="./editar-salon.php?nombre=<?= $datos->nombre ?>"><button class="btn btn-outline-info">Editar</button></a>
                         <a  onclick="return eliminar()"  href="./portal-administrativo-materias.php?nombre=<?= $datos->nombre ?>"><button class="btn btn-outline-danger">Eliminar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>


           <!-- SECCION DE MATERIAS -->
          
           <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <h2 class="font-weight-bold mb-0">Materias</h2>
                  <p class="lead text-muted">Materias en curso</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./crear-materia.php"><button class="btn btn-outline-success w-100 aling-self-center">Agregar Materia</button></a>
                </div>
              </div> 
            </div>
          </section>
          <section>
            <div class="container">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <?php 
                      include "CONF/conexion.php";
                      $sql2=$conexion->query("SELECT * FROM materias ");
                      while($datos = $sql2->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->clave ?></h6>
                         <p><?= $datos->nombre ?></p>
                         <p><?= $datos->hora ?></p>
                         <p><?= $datos->docente ?></p>
                         <a href="./editar-materia.php?clave=<?= $datos->clave ?>"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
          


          <!-- CIERRE DE DIVS PRINCIPALES -->
        </div> 
      </div>
<?php include "TEMPLETES/pie-dashboard-admin.php";?>