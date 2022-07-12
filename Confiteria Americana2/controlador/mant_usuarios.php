<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Confitería Americana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../engine1/style.css" />
	<script type="text/javascript" src="../engine1/jquery.js"></script>
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
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
	 <div class="example">
    <ul id="nav">
        <li class="current"><a href="admin.php">Home</a></li>
     
        <li><a href="#">Mantenimientos</a>
            <ul>
                <li><a href="mant_usuarios.php">Usuarios</a>
                    <ul>
                        <li><a href="http://www.script-tutorials.com/category/php/">PHP</a></li>
                        <li><a href="http://www.script-tutorials.com/category/mysql/">MySQL</a></li>
                        <li><a href="http://www.script-tutorials.com/category/xslt/">XSLT</a></li>
                        <li><a href="http://www.script-tutorials.com/category/ajax/">Ajax</a></li>
                    </ul>
                </li>
                <li><a href="http://www.script-tutorials.com/category/resources/">By tag name</a>
                    <ul>
                        <li><a href="http://www.script-tutorials.com/tag/captcha/">captcha</a></li>
                        <li><a href="http://www.script-tutorials.com/tag/gallery/">gallery</a></li>
                        <li><a href="http://www.script-tutorials.com/tag/animation/">animation</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="http://www.script-tutorials.com/about/">About</a></li>
        <li><a href="http://www.script-tutorials.com/creating-css3-dropdown-menu/">Go Back To The Tutorial</a></li>
    </ul>
</div>
    <div class="navbar-nav ml-auto">
	<?php

    include("../include/menu.php");

    ?>
	
      <!-- <a class="btn btn-primary active mr-5" href="index.html">Inicio<span class="sr-only">(current)</span></a> -->
      <a class="btn btn-success mr-5" href="../index.php">Iniciar sesión</a>
      <a class="btn btn-success mr-5" href="../Productos.html">Productos</a>
      <a class="btn btn-success mr-5" href="../Fabrica.html">Fabrica</a>
    </div>
  </div>
  
   </nav>
 </div>
 <center>
 <div>
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid">
		



			<?php

				require("../modelo/connect_db.php");
				$sql=("SELECT * FROM login");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usuario</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>Password del administrador</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='../vista/actualizar.php?id=$arreglo[0]'><img src='../images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='mant_usuarios.php?id=$arreglo[0]&idborrar=2'><img src='../images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='mant_usuarios.php'</script>";
					}

			?>
			
				  
			  			  
			  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
	
</div>

</div>
 </center>
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
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>	