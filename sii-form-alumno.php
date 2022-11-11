<?php include "TEMPLETES/cabecera-home.php";?>
  <head>
    <link rel="stylesheet" href="./CSS/estilo-forms.css">
  </head>
    <!-- CONTENIDO DE INICIO -->

    
    <section id="form" class="mt-5">
      <div class="container">
        <div class="pb-5">
          <div class="row">
            <div class="col-sm-12 col-md-6 text-center">
              <h2 class="mt-2"><br>Portal de Alumnos</h2>
              <?php
                include "CONF/conexion.php";
                include "PHP/controlador-login-alumno.php";
              ?>
              <form action="" method="post">
                <div class="form-group mt-5">
                  <label for="input">Ingrese sus datos</label>
                  <input id="input" class="form-control" type="text" name="usuario" placeholder="Matricula">
                </div>
                <div class="form-group mt-5">
                  <input id="input" class="form-control" type="password" name="password" placeholder="Contrasena / PIN">
                </div>
                <div class="form-group mt-5">
                  <input class=" btn btn-outline-primary boton" type="submit" name="btnIngresar" value="Ingresar">
                </div>
              </form>
            </div>
             <div class="col-sm-12 col-md-6 mt-5 text-center">
              <img src="./IMG/BACHILLER LOGO.png" class="img-fluid img-size-form " alt="">
            </div> 
          </div>
        </div>
      </div>
      
    </section>

    <?php include "TEMPLETES/pie-home.php";?>