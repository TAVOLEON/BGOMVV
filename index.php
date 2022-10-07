<?php include "TEMPLETES/cabecera-home.php"?>
<head>
  <link rel="stylesheet" href="./CSS/estilo-inicio.css">
</head>
    <!-- CONTENIDO DE INICIO -->
    <?php 
    include "CONF/conexion.php";
    $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=1");
    while($datos = $sql->fetch_object()){?>
    <section id="inicio" class="mt-5 pt-2">
      <div class="jumbotron pb-5 mt-5">
        <h1 class="display-4"> <strong><?= $datos->titulo ?></strong></h1>
        <p class="lead"><?= $datos->subtitulo ?></p>
        <p class="lead"><?= $datos->cuerpo ?></p>
      </div>
      <?php
    }
      ?>
    </section>

    <!-- SECCION DE ANUNCIOS -->
    <section id="noticias">
      <h1 class="text-center">Noticias</h1>
      <?php include "CONF/conexion.php";
            $sql=$conexion->query("SELECT * FROM anuncios_home"); 
            while($datos = $sql->fetch_object()){?>
            <div class="card mt-3">
              <div class="card-header text-center">
              <?= $datos->titulo ?>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <h5 class="card-title"><?= $datos->titulo ?></h5>
                    <p class="card-text"><?= $datos->descripcion ?></p>
                    <a class="card-text" href="<?= $datos->enlace ?>" target="_blank"><?= $datos->enlace ?></a>
                  </div>
                  <div class="col-lg-8 col-sm-12 p-2" >
                    <img class=" img-fluid img-noticia" style="max-width: 500px;" src="data:/image/jpg;base64,<?php echo base64_encode($datos->imagen)?>" alt="">
                  </div>
                </div>
              </div>
              <div class="card-footer text">
                <h6 class= "text-muted">Fecha: <?= $datos->fecha ?></h6>
              </div>
            <?php
          }?>
      </div>


    <!-- CONTENIDO DE ALUMNO -->
    <?php 
    include "CONF/conexion.php";
    $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=2");
    while($datos = $sql->fetch_object()){?>
    <section id="inicio" class="">
      <div id="alumnos" class="jumbotron pb-2 ">
      <h1 class="display-4"> <strong><?= $datos->titulo ?></strong></h1>
        <p class="lead"><?= $datos->subtitulo ?></p>
        <p class="lead"><?= $datos->cuerpo ?></p>
      </div>
      <?php
      }
      ?>
    </section>

    <!-- SECCION DE CALENDARIO -->
    <?php 
    include "CONF/conexion.php";
    $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=4");
    while($datos = $sql->fetch_object()){?>
    <section id="calendario">
    <div class="container text-center">
          <h1><?= $datos->titulo ?></h1>
          <h3><?= $datos->subtitulo ?></h3>
          <p><?= $datos->cuerpo?></p>
          <a href="#"><img class="img-fluid" src="data:/image/jpg;base64,<?php echo base64_encode($datos->imagen)?>" alt=""></a>
        </div>
        <?php
      }
      ?>
    </section>

    <!-- SECCION DE DOCENTES -->
    <?php 
    include "CONF/conexion.php";
    $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=3");
    while($datos = $sql->fetch_object()){?>
    <section id="inicio" class="">
      <div id="docentes" class="jumbotron pb-2 ">
      <h1 class="display-4"> <strong><?= $datos->titulo ?></strong></h1>
        <p class="lead"><?= $datos->subtitulo ?></p>
        <p class="lead"><?= $datos->cuerpo ?></p>
      </div>
      <?php
      }
      ?>
    </section>
    <!-- DOCENTES -->
    <?php 
    include "CONF/conexion.php";
    $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=5");
    while($datos = $sql->fetch_object()){?>
    <section id="docentes2">
      <div class="container">
        <h1 class="text-center mt-5"><?= $datos->titulo ?></h1>
        <h3 class="text-center mt-5"><?= $datos->subtitulo ?></h3>
        <p class="text-center mt-5"><?= $datos->cuerpo?></p>
      </div>
      <?php
      }
      ?>
    </section>
    <section id="docentes">
      <div class="container">
        <div class="row mt-3">
          <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=6");
          while($datos = $sql->fetch_object()){?>
          <div class="col-sm-12 col-md-4 text-center mb-5 pt-3">
            <div class="">
               <img src="data:/image/jpg;base64,<?php echo base64_encode($datos->imagen)?>" alt="" style="width: 200px; border-radius: 12%;" class=" image-fluid">
            </div>
            <div>
               <h2 class="mt-2"><i class="fas fa-paint-brush"></i><br><?= $datos->titulo?></h2>
               <p class="mt-2"><?= $datos->subtitulo?></p>
               <p class="mt-2"><?= $datos->cuerpo?></p>
            </div>
            <?php
             }
            ?>
          </div>
          
          <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=7");
          while($datos = $sql->fetch_object()){?>
          <div class="col-sm-12 col-md-4 text-center mb-5 pt-3">
            <div class="">
               <img src="data:/image/jpg;base64,<?php echo base64_encode($datos->imagen)?>" alt="" style="width: 200px; border-radius: 12%;" class=" image-fluid">
            </div>
            <div>
               <h2 class="mt-2"><i class="fas fa-paint-brush"></i><br><?= $datos->titulo?></h2>
               <p class="mt-2"><?= $datos->subtitulo?></p>
               <p class="mt-2"><?= $datos->cuerpo?></p>
            </div>
            <?php
             }
            ?>
          </div> 

          <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=8");
          while($datos = $sql->fetch_object()){?>
          <div class="col-sm-12 col-md-4 text-center mb-5 pt-3">
            <div class="">
               <img src="data:/image/jpg;base64,<?php echo base64_encode($datos->imagen)?>" alt="" style="width: 200px; border-radius: 12%;" class=" image-fluid">
            </div>
            <div>
               <h2 class="mt-2"><i class="fas fa-paint-brush"></i><br><?= $datos->titulo?></h2>
               <p class="mt-2"><?= $datos->subtitulo?></p>
               <p class="mt-2"><?= $datos->cuerpo?></p>
            </div>
            <?php
             }
            ?>
          </div> 
          
        </div>
      </div>
    </section>

    <!-- SECCION DE CONOCENOS -->

    <?php 
    include "CONF/conexion.php";
    $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=9");
    while($datos = $sql->fetch_object()){?>
    <section id="inicio" class="">
      <div id="nosotros" class="jumbotron pb-2 ">
      <h1 class="display-4"> <strong><?= $datos->titulo ?></strong></h1>
        <p class="lead"><?= $datos->subtitulo ?></p>
        <p class="lead"><?= $datos->cuerpo ?></p>
      </div>
      <?php
      }
      ?>
    </section>
    
    <!-- MISION -->
    <?php 
    include "CONF/conexion.php";
    $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=10");
    while($datos = $sql->fetch_object()){?>
    <section id="Mision">
      <div class="container">
        <h1 class="text-center mt-5"><?= $datos->titulo ?></h1>
        <div class="row mt-2">
          <div class="col-sm-12 col-md-12 text-center">
            <p class="mt-5"><?= $datos->subtitulo?></p>
            <p class="mt-5"><?= $datos->cuerpo?></p>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </section>

    <!-- VISION-->
    <?php 
    include "CONF/conexion.php";
    $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=11");
    while($datos = $sql->fetch_object()){?>
    <section id="Mision">
      <div class="container">
        <h1 class="text-center mt-5"><?= $datos->titulo ?></h1>
        <div class="row mt-2">
          <div class="col-sm-12 col-md-12 text-center">
           <p class="mt-5"><?= $datos->subtitulo?></p>
            <p class="mt-5"><?= $datos->cuerpo?></p>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </section>


    <!-- VALORES -->

    <?php 
    include "CONF/conexion.php";
    $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=12");
    while($datos = $sql->fetch_object()){?>
    <section id="valores1">
      <div class="container">
        <h1 class="text-center mt-5"><?= $datos->titulo ?></h1>
        <h3 class="text-center mt-5"><?= $datos->subtitulo ?></h3>
        <p class="text-center mt-5"><?= $datos->cuerpo?></p>
      </div>
      <?php
      }
      ?>
    </section>
    <section id="valores2">
      <div class="container">
        
      
        <div class="row mt-3">
          <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=13");
          while($datos = $sql->fetch_object()){?>
          <div class="col-sm-12 col-md-4 text-center mb-5 pt-3">
            <div>
               <h2 class="mt-2"><i class="fas fa-paint-brush"></i><br><?= $datos->titulo?></h2>
               <p class="mt-2"><?= $datos->subtitulo?></p>
               <p class="mt-2"><?= $datos->cuerpo?></p>
            </div>
            <?php
             }
            ?>
          </div> 

          <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=14");
          while($datos = $sql->fetch_object()){?>
          <div class="col-sm-12 col-md-4 text-center mb-5 pt-3">
            <div>
               <h2 class="mt-2"><i class="fas fa-paint-brush"></i><br><?= $datos->titulo?></h2>
               <p class="mt-2"><?= $datos->subtitulo?></p>
               <p class="mt-2"><?= $datos->cuerpo?></p>
            </div>
            <?php
             }
            ?>
          </div> 

          <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=15");
          while($datos = $sql->fetch_object()){?>
          <div class="col-sm-12 col-md-4 text-center mb-5 pt-3">
            <div>
               <h2 class="mt-2"><i class="fas fa-paint-brush"></i><br><?= $datos->titulo?></h2>
               <p class="mt-2"><?= $datos->subtitulo?></p>
               <p class="mt-2"><?= $datos->cuerpo?></p>
            </div>
            <?php
             }
            ?>
          </div> 

            
         </div>
      </div>
    </section>

   
    <!-- PIE DE PAGINA -->

    <?php include "TEMPLETES/pie-home.php"?>