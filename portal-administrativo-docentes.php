<?php include "TEMPLETES/dashboard-admin.php";
$id=$_SESSION['curp'];
include "CONF/conexion.php";
include "PHP/contrl-eliminar-aviso-docentes.php";
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
          <h4>Docentes</h4>
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


            <!-- SECCION DE AVISOS -->
          
            <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <h2 class="font-weight-bold mb-0">Avisos</h2>
                  <p class="lead text-muted">Avisos a Docentes</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./crear-aviso-docentes.php"><button class="btn btn-outline-success w-100 aling-self-center">Agregar Aviso</button></a>
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
                      include "PHP/contrl-crear-aviso-docentes.php";
                      $sql=$conexion->query("SELECT * FROM anuncios_docentes ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted">Aviso <?= $datos->id ?></h6>
                         <p><?= $datos->titulo ?></p>
                         <p><?= $datos->descripcion ?></p>
                         <a href="./editar-aviso-alumno.php?id=<?= $datos->id ?>"><button class="btn btn-outline-info">Editar</button></a>
                         <a  onclick="return eliminar()"  href="./portal-administrativo-docentes.php?id=<?= $datos->id ?>"><button class="btn btn-outline-danger">Eliminar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SECCION DE DOCENTES -->
          
          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <h2 class="font-weight-bold mb-0">Docentes</h2>
                  <p class="lead text-muted">Docentes Activos</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./crear-docente.php"><button class="btn btn-outline-success w-100 aling-self-center">Agregar Docente</button></a>
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
                      $sql=$conexion->query("SELECT * FROM docentes ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-6 stat my-3">
                        <h6 class="text-muted">CURP: <?= $datos->curp?></h6>
                         <p>Nombre: <?= $datos->nombre?> <?= $datos->apellidop?> <?= $datos->apellidom?></p>
                         <a href="./editar-perfil-docente-admin.php?curp=<?= $datos->curp ?>"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
s
           
          


          <!-- CIERRE DE DIVS PRINCIPALES -->
        </div> 
      </div>
<?php include "TEMPLETES/pie-dashboard-admin.php";?>