
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Noah Restaurant
</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../cinecss2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../cinecss2/css/estilos.css">
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
          <a class="navbar-brand" href="index.php">Noah Restaurant
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="tabla_critica/index.html" class="btn">CrÍticas</a>
            </li>
            <li>
              <a href="pedidos/index.php" class="btn">Pedidos</a>
            </li> 
            <li>
              <a href="peliculas/index.php" class="btn">Productos</a>
            </li>
            <li>
              <a href="https://www.tidio.com/panel/conversations" class="btn">Chat en vivo</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="http://localhost/noah/noah_restaurant/tienda-online/panel/">Salir</a></li>
                </ul>
            </li>
          </ul>

                </ul>
            </li>
          </ul>




        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
    <div class="row">
          <div class="col-md-12">
             <fieldset>
              <legend>Listado de los 10 últimos Pedidos</legend>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Cliente</th>
                      <th>N° Pedido</th>
                      <th>Total</th>
                      <th>Fecha</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody> 
                    <?php
                      require '../vendor/autoload.php';
                      $pedido = new Kawschool\Pedido;
                      $info_pedido = $pedido->mostrarUltimos();

                    
                      $cantidad = count($info_pedido);
                      if($cantidad > 0){
                        $c=0;
                      for($x =0; $x < $cantidad; $x++){
                        $c++;
                        $item = $info_pedido[$x];
                    ?>


                    <tr>
                      <td><?php print $c?></td>
                      <td><?php print $item['nombre'].' '.$item['apellidos']?></td>
                      <td><?php print $item['id']?></td>
                      <td><?php print $item['total']?> $</td>
                      <td><?php print $item['fecha']?></td>
                       
                      <td class="text-center">
                        <a href="pedidos/ver.php?id=<?php print $item['id'] ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
                        
                      </td>
                    
                    </tr>

                    <?php
                      }
                    }else{

                    ?>
                    <tr>
                      <td colspan="6">NO HAY REGISTROS</td>
                    </tr>

                    <?php }?>
                  
                  
                  </tbody>

                </table>
             </fieldset>
          </div>
        </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../cinecss2/js/jquery.min.js"></script>
    <script src="../cinecss2/js/bootstrap.min.js"></script>

  </body>
</html>
