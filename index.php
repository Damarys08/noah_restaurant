<?php
include("conexion.php");
$critica = "SELECT * FROM critica";
?>





<!DOCTYPE html>
<html lang="es">
<head>

<title>Noah Restaurant</title>
 <!-- favicon -->
 <link rel="icon" href="images/favicon.png.ico">


<!-- <link rel="stylesheet" href="materialize/css/materialize.min.css"> -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">

</head>


<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
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
                    <li><a href="" class="fa-solid fa-basket-shopping"></a>/li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- INICIO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">🔥¡El estilo de vida que mereces!🔥</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Noah Restaurant</h1>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Horarios</a>

                                    <a href="tienda-online/index.php" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Comprar</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                
                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Abrimos:</h2>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Domingo - jueves</strong>

                                <p data-aos="fade-up" data-aos-delay="800">10:00 AM - 12:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Viernes - Sabados</strong>

                                <p data-aos="fade-up" data-aos-delay="800">8:00 AM - 11:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Delivery</strong>

                                <p data-aos="fade-up" data-aos-delay="800">Hasta las 9:00 PM</p>
                                
                               </div>
                          </div>
                     </div>
                </div>
            </div>
            
        </div>

        
                                   
    </section>


     <!-- NOSOTROS -->>
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Bienvenidos </h2>

                                <p data-aos="fade-up" data-aos-delay="400">Somos un restaurante que tiene como objetivo satisfacer las necesidades gastronómicas de nuestros clientes , ofreciendo alimentos y servicios con las más alta calidad. Sobrepasamos las expectativas de nuestros compradores y buscamos ser un espacio de trabajo que permita la realización personal de cada uno de ellos y el desarrollo de sus principales colaboraciones grupales.</p>

                                <p data-aos="fade-up" data-aos-delay="500">A través de la cocina se puede expresar  <a rel="nofollow" target="_parent">belleza, poesía, humor, felicidad, belleza y armonía.</a>
                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Bombay Negroni</h3>
                                        <span>Bebida Clásica
                                            <br>
                                            <br>
                                        </span>

                                       
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="images/team/team-image01.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Jueves: </h3>
                                        <span>2x1 Don Armando Reserva🥃 ⁣⁣⁣⁣⁣⁣⁣⁣</span>

                                        
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>





     <!--PLATILLOS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">¡Preparamos a tu preferencia!</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Especiales del chef</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="images/class/yoga-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Riceless Candy</h3>

                                        <span><strong>Disponibles</strong>

                                        <span class="class-price">$1,450</span>

                                        <p class="mt-3">relleno de aguacate, salmón, tuna y king crab, envuelto en masa de arroz🍚🥑🦀</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="images/class/crossfit-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Pizzeta A La Carbonara</h3>

                                        <span><strong>Disponibles</strong>

                                        <span class="class-price">$600</span>

                                        <p class="mt-3"> perfecto para venir y compartir con los tuyos 🌱🥓🧀.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="images/class/cardio-class.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Carpaccio de Res-Hongos</h3>

                                        <span><strong>Disponibles</strong>

                                        <span class="class-price">$1,075</span>

                                        <p class="mt-3">Con Mousse de Hongos, delitate con nuestra riqueza, especialidad del chef😍🥗</p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>

     <!-- BOTÓN  DE REDIRECCIONAMIENTO -->
    <center><a href="Carousel/index.html" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700" style="width: 1000px;">ENCUENTRA MÁS VARIEDADES</a></center>
    
    
    
    <!-- CONTACTO -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                <!-- FORMULARIO -->
                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Escribenos tú crítica.</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="Nombre">

                            <input type="email" class="form-control" name="cf-email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="Mensaje"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Enviar mensaje</button>
                        </form>
                    </div>
                    <!-- MAPA - UBICACIÓN - GOOGLE MAP -->
                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Donde nos<span> ubicamos?</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Santiago De Los Caballeros, República Dominicana 51000</p>
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.12950899411!2d-70.69857948509305!3d19.449982286874477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf5e8288938d%3A0x538bb9e194ce38d0!2sNOAH%20Restaurant%20%26%20Lounge!5e0!3m2!1ses-419!2sdo!4v1638503130121!5m2!1ses-419!2sdo" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    
                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">Noahrestaurant@email.com</a>
                        </p>
                        <p><i class="fa fa-phone mr-1"></i>   (809) 971-0550</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="//code.tidio.co/lii0atq4qcvixdjldpidetf6yeavnocm.js" async></script>
</body>
</html>