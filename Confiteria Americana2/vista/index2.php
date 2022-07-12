 <!DOCTYPE html>
 <?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:controlador/admin.php");
	}
	?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../engine1/style.css" />
	<script type="text/javascript" src="../engine1/jquery.js"></script>
    <title>Confitería Americana</title>
  </head>
  <body>
   <!-- menu -->
   <div class="container2-fluid fixed-top text-white">
   <nav class="navbar navbar-expand-lg navbar-light  bg-info">
     <a class="navbar-brand" href="#"><img src="../img/logo.png " alt="">Confitería Americana</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
	<?php

    include("../include/menu.php");

    ?>
      <!-- <a class="btn btn-primary active mr-5" href="index.html">Inicio<span class="sr-only">(current)</span></a> -->
      <!--<a class="btn btn-success mr-5" href="../index.php">Iniciar sesión</a>-->
      <a class="btn btn-success mr-5" href="../Productos.html">Productos</a>
      <a class="btn btn-success mr-5" href="../Fabrica.html">Fabrica</a>
    </div>
  </div>
   </nav>
 </div>
 <div class="container-fluid mt-1">
              <h6>""</h6>
          </div>
            <!-- slider -->
            <div class="container-fluid slider mt-5">
              <div class="row align-items-end">
            <div id="wowslider-container1">
	           <div class="ws_images"><ul>
		           <li><img src="../data1/images/img5sl.jpg" alt="" title="" id="wows1_0"/></li>
		             <li><img src="../data1/images/img1sl.png" alt="img1sl" title="" id="wows1_1"/></li>
		               <li><img src="../data1/images/img2sl.png" alt="img2sl" title="" id="wows1_2"/></li>
		                 <li><a href="http://wowslider.net"><img src="../data1/images/img3sl.png" alt="jquery slideshow" title="" id="wows1_3"/></a></li>
		                   <li><img src="../data1/images/img4sl.png" alt="img4sl" title="" id="wows1_4"/></li>
	                    </ul></div>
	                     <div class="ws_bullets"><div>
		                     <a href="#" title=""><span><img src="../data1/tooltips/img5sl.jpg" alt=""/>1</span></a>
		                       <a href="#" title="img1sl"><span><img src="../data1/tooltips/img1sl.png" alt="img1sl"/>2</span></a>
		                         <a href="#" title="img2sl"><span><img src="../data1/tooltips/img2sl.png" alt="img2sl"/>3</span></a>
		                           <a href="#" title="img3sl"><span><img src="../data1/tooltips/img3sl.png" alt="img3sl"/>4</span></a>
		                             <a href="#" title="img4sl"><span><img src="../data1/tooltips/img4sl.png" alt="img4sl"/>5</span></a>
	                              </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">responsive slider</a> by WOWSlider.com v8.8</div>
	                               <div class="ws_shadow"></div>
	                              </div>
                              </div>
                            </div>
	                               <script type="text/javascript" src="../engine1/wowslider.js"></script>
	                                <script type="text/javascript" src="../engine1/script.js"></script>

                                  <<!--main-->
  <div class="container mb-5">  <!--Container General-->
        <hr>
          <div class="row mb-5"> <!--row general1-->
          <!--articulos1-->
          <div class="col-12 col-md-9">
            <!--articulo 0-->
            <div class="row mb-5">
              <div class="col-3">
                <img src="../img/Sorpresitas.jpg" alt="" class="img-fluid">
                <p class="lead text-center">Conoce La Famosa Sorpresita</p>
              </div>
              <!--Video-->
             <div class="video col-9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/v9nb-kKROaI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <!--Fin_Video-->
            </div>
            <!--Fin Articulo 0-->
            <!--articulo1-->
            <div class="row mb-5">
              <div class="col-3 mt-5">
                <img src="../img/portada.png" alt="" class="img-fluid">
                <p class="lead text-center">Reseña</p>
              </div>
              <div class="col-9">
                <a href="#"><h3 class="text-danger mt-5">Historia</h3></a>
                  <p>   Confitería Americana fue fundada en 1930 por Carmen Arévalo y Antonio Cabrera,
                     sin saber que darían vida a una de las empresas de mayor tradición en el país. Iniciamos
                     operaciones en una casa situada en la 3.ª calle oriente, en el centro de San Salvador. Al inicio,
                     únicamente fabricábamos dulces artesanales y nuestras reconocidas Sorpresas para niños, productos
                     que han estado presentes en el mercado hasta la fecha.

                     Don Antonio Cabrera, un hombre visionario, decidió abrir una dulcería ya que para ese tiempo El Salvador
                     era un importador neto de confite. Para 1950, en un local más amplió situado en la 5.ª calle oriente, siempre en San Salvador,
                     comenzamos a modernizar nuestros procesos de producción y adquirimos la primera máquina industrial.
                     Actualmente en Confitería Americana tenemos tecnologia de punta, con lo que hemos logrado diversificar nuestra producción a niveles destacados.
                   </p>
                    <hr>
                    <h1><p class="text-danger text-center mt-5">*Nuestro Equipo de Trabajo*</p></h1>
                      <hr>
                </div>
            </div>
            <!--Fin Articulo1-->
          </div>
          <!--Fin Articulos1-->
          <!--aside-->
          <div class="col-12 col-md-3"> <!--Redes-->
          <div class="card bg-light mb-3 " style="max-width: 18rem;">
          <div class="card-body">
            <h3><p class="text-success">Contactanos</p></h3>
              <hr>
            <div class="facebook mb-5">
          <a href="https://www.facebook.com/confiteriamericana"><img src="../img/Facebook.png " alt="" class="img-fluid">Facebook</a>
            </div>
            <div class="tweeter mb-5">
              <a href="https://twitter.com/saboradiversion"><img src="../img/tweeter.png" alt="" class="img-fluid">Twitter</a>
            </div>
            <div class="instagram mb-5">
              <a href="http://instagram.com/confiteriamericana"><img src="../img/instagram2.png" alt="" class="img-fluid">Instagram</a>
            </div>
          </div>
        </div>
          </div> <!--Redes-->

            <!--nuestra gente-->

          <div class="col-4 ">
          <div class="card " style="width: 22rem;">
          <div class="zoom">
            <img class="card-img-top img-fluid" src="../img/pers2.jpg" alt="Card image cap">
          </div>
          <div class="card-body bg-warning">
          <h5 class="card-title">Elaboracion de nuestros productos</h5>
          </div>
          </div>
          </div>

          <div class="col-4 ">
          <div class="card " style="width: 22rem;">
          <div class="zoom">
            <img class="card-img-top img-fluid" src="../img/campeonas.jpg" alt="Card image cap">
          </div>
          <div class="card-body bg-warning">
          <h5 class="card-title">Actividades Recreativas</h5>
          </div>
          </div>
          </div>

          <div class="col-4 ">
          <div class="card " style="width: 22rem;">
          <div class="zoom">
            <img class="card-img-top img-fluid" src="../img/pers3.jpg" alt="Card image cap">
          </div>
          <div class="card-body bg-warning">
          <h5 class="card-title">Festejos Empresariales</h5>
          </div>
          </div>
          </div>
            <!--nuestra gente-->
        </div> <!--Row General1-->
</div> <!--Container General1-->
<!--main-->
        <!--footer-->
        <footer class="container-fluid bg-info text-white py-3 text-center">
          <h5>Confitería Americana</h5>
          <p>5ta Calle Oriente #115, San Salvador, El Salvador</p>
          <p>Teléfono: 2221-1986</p>
          <p>ventas@confiteriamericana.com</p>
        </footer>
        <!--fin footer-->
          <!--scriptsrc-->
          <script src="../js/jquery-3.3.1.min.js"></script>
          <script src="../js/bootstrap.min.js"></script>
          <!--fin scriptsrc-->
  </body>
</html>
