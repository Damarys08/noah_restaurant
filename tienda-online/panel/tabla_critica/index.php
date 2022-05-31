<?php
include("../../../conexion.php");
$critica = "SELECT * FROM critica";
?>


<!DOCTYPE html>
<html lang="es">
  <head>
  	<title>Sección Critica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>

<!-- MENU BAR -->
<!-- <nav class="navbar navbar-expand-lg fixed-top">
	<div class="container">

		<a class="navbar-brand" href="index.php">Noah Restaurant</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-lg-auto">
				<li class="nav-item">
					<a href="#home" class="nav-link smoothScroll">Inicio</a>
				</li>

				<li class="nav-item">
					<a href="#feature" class="nav-link smoothScroll">Horarios</a>
				</li>

				<li class="nav-item">
					<a href="#about" class="nav-link smoothScroll">Sobre Nosotros</a>
				</li>

				<li class="nav-item">
					<a href="#class" class="nav-link smoothScroll">Principales</a>
				</li>

	  
				<li class="nav-item">
					<a href="#contact" class="nav-link smoothScroll">Contacto</a>
				</li>
			</ul>

			<ul class="social-icon ml-lg-3">
				<li><a href="https://www.facebook.com/NoahSantiago/" class="fa fa-facebook"></a></li>
				<li><a href="#https://twitter.com/restaurantnoah" class="fa fa-twitter"></a></li>
				<li><a href="#https://www.instagram.com/noahrestaurant/?hl=es-la" class="fa fa-instagram"></a></li>
				<li><a href="" class="fa-solid fa-basket-shopping"></a></li>
			</ul>
		</div>

	</div>
</nav>
 -->

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sección Crítica</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th>Nombre</th>
						      <th>Email</th>
						      <th>Mensaje</th>
						    </tr>
						  </thead>
						  <?php $resultado = mysqli_query($conexion, $critica);
        					while ($row = mysqli_fetch_assoc($resultado)) { ?>
						  <tbody>
						    <tr>
						      <th scope="row"><?php echo $row["nombre"]; ?></th>
						      <td><?php echo $row["email"]; ?></td>
						      <td><?php echo $row["mensaje"]; ?></td>
						    </tr>
							<?php }
        					mysqli_free_result($resultado);?>

						    <!-- <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-warning">Open</a></td>
						    </tr>

						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-danger">On hold</a></td>
						    </tr>

						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-success">Progress</a></td>
						    </tr>

						     <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-danger">On hold</a></td>
						    </tr>

						     <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-warning">Open</a></td>

						       <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-warning">Open</a></td>
						    </tr>

						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-success">Progress</a></td>
						    </tr> -->
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>