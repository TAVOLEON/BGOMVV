<?php 
session_start();
if (empty($_SESSION["curp"])) {
  header("location: sii-login.php");
} 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/estilo-portal-admin.css">
    <script src="https://kit.fontawesome.com/65ef544d4b.js" crossorigin="anonymous"></script>

    <title>Sistema de Informacion BGOMVV</title>
  </head>
  <body>


    <div class="d-flex">
      <div id="sidebar-container" class="bg-info text-white" >
        <div class="logo">
          <h4 class="font-weight-bold">Bachillerato MVV</h4>
        </div>
        <div class="menu text-light">
          <a class="d-block text-light p-3" href="./portal-docentes.php">Inicio</a>
          <a class="d-block text-light p-3" href="./portal-docentes-materias.php">Materias</a>
          </a>
          
        </div>
      </div>

     
