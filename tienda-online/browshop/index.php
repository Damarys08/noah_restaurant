<!DOCTYPE html>
<html lang="es">
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
            <span class="sr-only">Navegación de palanca</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Noah Restaurant
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="" class="btn">CARRITO <span class="badge">0</span></a>
            </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
      <?php
        require 'vendor/autoload.php';
        $pelicula = new peliculas\peliculas_shop;
        

      ?>
        

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="cinecss2/js/jquery.min.js"></script>
    <script src="cinecss2/js/bootstrap.min.js"></script>

  </body>
</html>
