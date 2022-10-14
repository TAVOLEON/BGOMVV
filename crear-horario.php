<?php include "TEMPLETES/dashboard-admin.php";?>

      <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h4>Materias</h4>
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
                  <h1 class="font-weight-bold mt-2 mb-0">Crear Horario</h1>
                  <p class="lead text-muted">Llene los campos</p>
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
                        <h6 class="text-muted">Nuevo Horario</h6>
                        <form method="POST" enctype="multipart/form-data">
                        <?php
                            include "CONF/conexion.php";
                            include "PHP/ctrl-crear-horario.php";
                         ?>
                          <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input id="titulo" class="form-control" type="text" name="titulo">
                          </div>
                          <div class="form-group">
                            <label for="horario">Hora</label>
                            <input id="horario" class="form-control" type="text" name="horario">
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-outline-info" value="ok" name="btnpublicar">Crear</button>
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