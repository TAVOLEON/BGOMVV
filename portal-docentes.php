<?php include "TEMPLETES/dashboard-docente.php";
$curp=$_SESSION['curp'];
$nombre=$_SESSION['nombre'];
include "CONF/conexion.php";
$sqlfoto=$conexion->query("SELECT foto FROM info_personal_docentes WHERE curp='$curp'");
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
          <h4>Inicio</h4>
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
                  <a class="dropdown-item" href="editar-perfil-docente.php">Mi Perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="PHP/cerrar-sesion-admin.php">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </div>
          </div>
        </nav>

        <div id="content">
          

           <!-- SECCION DE BIENVENIDA -->
          
           <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h1 class="font-weight-bold mb-0">Bienvenido <?php echo $_SESSION["nombre"];?></h1>
                  <h2 class="font-weight-bold mb-0">Avisos</h2>
                </div>
                
              </div> 
            </div>
          </section>

          <section>
          <?php 
           include "CONF/conexion.php";
           $sql=$conexion->query("SELECT * FROM anuncios_docentes ");
           while($datos = $sql->fetch_object()){?>
          <div class="container mt-5">
            <div class="card">
              <div class="row ">
                <div class="col-md-7 py-5 text-center">
                  <div class="card-block px-4">
                    <h4 class="card-title"><?=$datos->titulo?></h4>
                    <p class="card-text"><?=$datos->descripcion?></p>
                    <a href="<?=$datos->enlace?>"><button class="btn btn-outline-primary" type="button">Mas informacion</button></a>
                    <p class="card-text pt-3">Fecha de publicacion: <?=$datos->fecha?></p>
                  </div>
                </div>
                <!-- Carousel start -->
                <div class="col-md-5">
                    <img class="d-block img-fluid" style="max-width:450px; max-height:300px;" src="data:/image/jpg;base64,<?php echo base64_encode($datos->imagen)?>">
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          </section>
          

          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h1 class="font-weight-bold mb-0">Grupos Asignados</h1>
                </div>
              </div> 
            </div>
          </section>
          
          <section>
            <div class="container mt-5">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <?php 
                      include "CONF/conexion.php";
                      $sql=$conexion->query("SELECT * FROM grupos WHERE tutor='$nombre'");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-6 stat my-3">
                        <h6 class="text-muted">Grupo <?= $datos->nombre ?></h6>
                         <p>Tutor Asignado <?= $datos->tutor ?></p>
                         <p>Semestre: <?= $datos->semestre ?></p>
                         <p>Especialidad: <?= $datos->especialidad ?></p>
                         <a href="./listar-alumnos-docente.php?grupo=<?= $datos->nombre ?>"><button class="btn btn-outline-primary">Ver Alumnos</button></a>
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
<?php include "TEMPLETES/pie-dashboard-alumno.php";?>