 <!-- PIE DE PAGINA -->


 <footer class="footer mt-5 sticky-bottom">
   <div class="footer__addr">
     <h1 class="footer__logo">Contacto</h1>

     <?php
      include "CONF/conexion.php";
      $sql = $conexion->query("SELECT * FROM secciones_principales WHERE id=16");
      while ($datos = $sql->fetch_object()) { ?>
       <h2><?= $datos->titulo ?></h2>

       <address>
         <?= $datos->subtitulo ?>
         <?= $datos->cuerpo ?>
       <?php
      }
        ?>
       </address>
   </div>

   <?php
    include "CONF/conexion.php";
    $sql = $conexion->query("SELECT * FROM secciones_principales WHERE id=17");
    while ($datos = $sql->fetch_object()) { ?>
     <ul class="footer__nav">
       <li class="nav__item">
         <h2 class="nav__title"><?= $datos->titulo ?></h2>

         <ul class="nav__ul">
           <li>
             <a href="#"><?= $datos->subtitulo ?></a>
           </li>

           <li>
             <a href="#"><?= $datos->cuerpo ?></a>
             <a class="" href="mailto:<?= $datos->cuerpo ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-forward" width="36" height="36" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                 <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
                 <path d="M3 6l9 6l9 -6" />
                 <path d="M15 18h6" />
                 <path d="M18 15l3 3l-3 3" />
               </svg></a>
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
          $sql = $conexion->query("SELECT * FROM secciones_principales WHERE id=19");
          while ($datos = $sql->fetch_object()) { ?>
           <ul class="nav__ul">
             <li>
               <a href="<?= $datos->cuerpo ?>" class="" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="36" height="36" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                   <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                 </svg><?= $datos->titulo ?></a>
             </li>
           </ul>
         <?php
          }
          ?>

         <?php
          include "CONF/conexion.php";
          $sql = $conexion->query("SELECT * FROM secciones_principales WHERE id=20");
          while ($datos = $sql->fetch_object()) { ?>
           <ul class="nav__ul">
             <li>
               <a href="<?= $datos->cuerpo ?>" class="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="36" height="36" viewBox="0 0 24 24" stroke-width="1" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                   <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                 </svg> <?= $datos->titulo ?></a>
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