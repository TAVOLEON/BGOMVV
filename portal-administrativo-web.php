<?php include "TEMPLETES/dashboard-admin.php";?>
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
                  <a class="dropdown-item" href="#">Mi Perfil</a>
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
                <div class="col-lg-9">
                  <h1 class="font-weight-bold mb-0">Bienvenido <?php echo $_SESSION["nombre"];?></h1>
                  <h2 class="font-weight-bold mb-0">Seccion de inicio</h2>
                  <p class="lead text-muted">Bienvenida</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=1 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-12 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=1"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- SECCION DE ANUNCIOS -->
          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <p class="lead text-muted">Anuncios Pagina Principal</p>
                </div>
                <div class="col-lg-3 mt-3">
                <a href="./crear-anuncio-home.php"><button class="btn btn-outline-success w-100 aling-self-center">Agregar</button></a>
                <a href="./index.php#noticias"><button class="btn btn-outline-success w-100 ">Ver</button></a>
                </div>
                <?php
                include "CONF/conexion.php";
                include "PHP/contrl-eliminar-anuncio-home.php";
                ?>
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
                      $sql=$conexion->query("SELECT * FROM anuncios_home");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-3 stat my-3">
                        <h6 class="text-muted">Anuncio <?= $datos->id ?></h6>
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->descripcion ?></p>
                         <a href="./editar-anuncio-home.php?id=<?=$datos->id?>"><button class="btn btn-outline-info">Editar</button></a>
                         <a onclick="return eliminar()" href="./portal-administrativo-web?id=<?=$datos->id?>"><button class="btn btn-outline-danger">Eliminar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

           <!-- SECCION DE ALUMNOS -->
          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <h2 class="font-weight-bold mb-0">Seccion de Alumnos</h2>
                  <p class="lead text-muted">Principal</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#alumnos"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=2");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-12 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=2"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SECCION DE CALENDARIO -->
          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <p class="lead text-muted">Calendario</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#calendario"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=4");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-12 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=4"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SECCION DOCENTES -->

          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <h2 class="font-weight-bold mb-0">Seccion de Docentes</h2>
                  <p class="lead text-muted">Principal</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#docentes"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=3 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-12 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=3"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!--TiTULO SUBSECCION DE DOCENTES -->
          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <p class="lead text-muted">Seccion de Nuestros Docentes</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#docentes2"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=5 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-12 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=5"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- PERFILES DE DOCENTES -->

          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <p class="lead text-muted">Perfiles de Docentes</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#docentes2"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=6");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=6"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                      <?php 
                      include "CONF/conexion.php";
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=7");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=7"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                      <?php 
                      include "CONF/conexion.php";
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=8");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=8"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- SECCION DE CONOCENOS -->
          <section id="">
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <h2 class="font-weight-bold mb-0">Seccion de Nosotros</h2>
                  <p class="lead text-muted">Principal</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#nosotros"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=9 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-12 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=9"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- MISION Y VISION -->
          <section id="">
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <p class="lead text-muted">Seccion de Mision y Vision</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#Mision"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=10 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-6 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=10"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                      <?php 
                      include "CONF/conexion.php";
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=11 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-6 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=11"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!--TiTULO SUBSECCION DE VALORES -->
          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <p class="lead text-muted">Titulo Seccion de Valores</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#valores1"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=12 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-12 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=12"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- VALORES -->
          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                  <p class="lead text-muted"> Valores</p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#valores2"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=13 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=13"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                       <?php 
                      include "CONF/conexion.php";
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=14 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=14"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                       <?php 
                      include "CONF/conexion.php";
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=15 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=15"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
   <!-- SECCIONDE CONTACTANOS -->
          <section>
            <div class="container mt-2">
              <div class="row">
                <div class="col-lg-9">
                 <h2 class="font-weight-bold mb-0">Seccion de Contactanos</h2>
                 <p class="lead text-muted">Telefonos & Email </p>
                </div>
                <div class="col-lg-3 mt-3">
                  <a href="./index.php#valores2"><button class="btn btn-outline-success w-100 aling-self-center">Ver</button></a>
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
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=16 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=16"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                       <?php 
                      include "CONF/conexion.php";
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=17 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=17"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>
                       <?php 
                      include "CONF/conexion.php";
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=19 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=19"><button class="btn btn-outline-info">Editar</button></a>
                      </div>
                      <?php
                      }
                      ?>

                      <?php 
                      include "CONF/conexion.php";
                      $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=20 ");
                      while($datos = $sql->fetch_object()){?>
                      <div class="col-lg-4 stat my-3">
                        <h6 class="text-muted"><?= $datos->titulo ?></h6>
                         <p><?= $datos->subtitulo ?></p>
                         <p><?= $datos->cuerpo ?></p>
                         <a href="./editar-seccion-home.php?id=20"><button class="btn btn-outline-info">Editar</button></a>
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