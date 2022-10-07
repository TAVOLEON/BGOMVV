 <!-- PIE DE PAGINA -->


 <footer class="footer mt-5 sticky-bottom">
      <div class="footer__addr">
        <h1 class="footer__logo">Contacto</h1>

        <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=16");
          while($datos = $sql->fetch_object()){?>
        <h2><?= $datos->titulo?></h2>
    
        <address>
        <?= $datos->subtitulo?>
        <?= $datos->cuerpo?>
          <?php
          }
          ?>
        </address>
      </div>

      <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=17");
          while($datos = $sql->fetch_object()){?>
      <ul class="footer__nav">
        <li class="nav__item">
          <h2 class="nav__title"><?= $datos->titulo?></h2>
    
          <ul class="nav__ul">
            <li>
              <a href="#"><?= $datos->subtitulo?></a>
            </li>
    
            <li>
              <a href="#"><?= $datos->cuerpo?></a>
              <a class="btn btn-outline-secondary" href="mailto:<?= $datos->cuerpo?>" >Enviar Correo</a>
            </li>
    
          </ul>
          <?php
          }
          ?>
        </li>
    
        <li class="nav__item">
          <h2 class="nav__title">Redes Sociales</h2>
          <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=19");
          while($datos = $sql->fetch_object()){?>
          <ul class="nav__ul">
            <li>
              <a href="<?= $datos->cuerpo?>" class="btn btn-outline-primary" target="_blank"><?= $datos->titulo?></a>
            </li>
      </ul>
      <?php
          }
          ?>

          <?php 
          include "CONF/conexion.php";
          $sql=$conexion->query("SELECT * FROM secciones_principales WHERE id=20");
          while($datos = $sql->fetch_object()){?>
          <ul class="nav__ul">
            <li>
              <a href="<?= $datos->cuerpo?>" class="btn btn-outline-primary" target="_blank"><?= $datos->titulo?></a>
            </li>
      </ul>
      <?php
          }
          ?>
    
      <div class="legal">
        <p>&copy; 2022 Copyright.</p>
    
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  </body>
</html>