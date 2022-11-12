<?php include "TEMPLETES/dashboard-admin.php";
$matricula =$_GET['matricula'];
$id=$_SESSION['curp'];
include "CONF/conexion.php";
include "PHP/contrl-eliminar-aviso-alumno.php";
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
          <h4>Alumnos</h4>
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
                <div class="col-lg-6">
                  <h2 class="font-weight-bold mb-0">Materias Asignadas</h2>
                  <p class="lead text-muted">Alumno : <?=$matricula?></p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./editar-horario.php?matricula=<?= $matricula?>"><button class="btn btn-outline-success w-100 aling-self-center">Asignar Materias</button></a>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./asignar-calificacion.php?matricula=<?= $matricula?>"><button class="btn btn-outline-success w-100 aling-self-center">Asignar Calificaciones</button></a>
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
                      $sql=$conexion->query("SELECT * FROM horario WHERE matricula='$matricula'");
                      while($datos = $sql->fetch_object()){
                        $materia1= $datos->materia1;
                        $materia2= $datos->materia2;
                        $materia3= $datos->materia3;
                        $materia4= $datos->materia4;
                        $materia5= $datos->materia5;
                        $materia6= $datos->materia6;
                        $materia7= $datos->materia7;
                        $materia8= $datos->materia8;
                        $materia9= $datos->materia9;
                        $materia10= $datos->materia10; }?>
                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 1 Nombre: <?= $materia1 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia1'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                         <a href="./editar-materia.php?clave=<?=$datos->clave ?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>

                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 2 Nombre: <?= $materia2 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia2'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                         
                         <a href="./editar-materia.php?clave=<?=$datos->clave ?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>

                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 3 Nombre: <?= $materia3 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia3'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                         
                         <a href="./editar-materia.php?clave=<?=$datos->clave ?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>

                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 4 Nombre: <?= $materia4 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia4'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                         
                         <a href="./editar-materia.php?clave=<?=$datos->clave ?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>

                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 5 Nombre: <?= $materia5 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia5'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                         
                         <a href="./editar-materia.php?clave=<?=$datos->clave ?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>

                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 6 Nombre: <?= $materia6 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia6'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                         
                         <a href="./editar-materia.php?clave=<?=$datos->clave ?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>
                      
                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 7 Nombre: <?= $materia7 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia7'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                        
                         <a href="./editar-materia.php?clave=<?=$datos->clave?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>

                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 8 Nombre: <?= $materia8 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia8'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                        
                         <a href="./editar-materia.php?clave=<?=$datos->clave?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>

                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 9 Nombre: <?= $materia9 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia9'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                        
                         <a href="./editar-materia.php?clave=<?=$datos->clave?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>

                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Materia 10 Nombre: <?= $materia10 ?></h6>     
                        <?php $sql=$conexion->query("SELECT * FROM materias WHERE nombre='$materia10'");
                        while($datos = $sql->fetch_object()){ ?>
                         <p>Clave: <?= $datos->clave ?></p>
                         <p>Hora: <?= $datos->hora ?></p>                    
                         <p>Semestre: <?= $datos->semestre ?></p>                    
                         <p>Docente: <?= $datos->docente ?></p>                    
                         <p>Salon: <?= $datos->salon ?></p>                    
                        
                         <a href="./editar-materia.php?clave=<?=$datos->clave?>"><button class="btn btn-outline-primary">Ver materia</button></a>
                         <?php } ?>
                      </div>


                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- CIERRE DE DIVS PRINCIPALES -->
        </div> 
      </div>
<?php include "TEMPLETES/pie-dashboard-admin.php";?>