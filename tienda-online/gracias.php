<?php
session_start();
require 'funciones.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Noah Restaurant</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="cinecss2/css/bootstrap.min.css">
    <link rel="stylesheet" href="cinecss2/css/estilos.css"> <link rel="icon" href="img/favicon.png" >
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Palanca de Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html">Inicio</a>
          <a class="navbar-brand" href="index.php">Noah Restaurant</a>

        </div>
        
      </div>
    </nav>

    <div class="container" id="main">
        <div class="row">
            <div class="jumbotron">
                <p>Gracias por su compra</p>
                <p>
                    <a href="index.php">Regresar</a>
                </p>
            </div>



        </div>
      

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="cinecss2/js/jquery.min.js"></script>
    <script src="cinecss2/js/bootstrap.min.js"></script>

  </body>
</html>
