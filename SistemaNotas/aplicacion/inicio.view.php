<!DOCTYPE html>
<?php
require 'functions.php';
$permisos = ['Administrador','Profesor','Padre'];
permisos($permisos);

?>
<html>
<head>
<title>Inicio | Pagina Principal</title>
    <meta name="description" content="Registro de Notas del Liceo Hildebrando Juaréz" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="header">
        <h1>Portada del Creador - "Colegio: Liceo Hildebrando Juaréz"</h1>
        <h3>Usuario:  <?php echo $_SESSION["username"] ?></h3>
</div>
<nav>
    <ul>
        <li class="active"><a href="inicio.view.php">Inicio</a> </li>
        <li><a href="alumnos.view.php">Registro de Alumnos</a> </li>
        <li><a href="listadoalumnos.view.php">Listado de Alumnos</a> </li>
        <li><a href="notas.view.php">Registro de Notas</a> </li>
        <li><a href="listadonotas.view.php">Consulta de Notas</a> </li>
        <li class="right"><a href="logout.php">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
           <h1 class="text-center">"Colegio: Liceo Hildebrando Juaréz"</h1>
        <?php
        if(isset($_GET['err'])){
            echo '<h3 class="error text-center">ERROR: Usuario no autorizado</h3>';
        }
        ?>
        <br>
        <hr>
        <p class="text-center"><strong>Creado por: </strong><br><br>Hugo Ernesto Jovel Martinez<br><br>Universidad Tecnologica de El Salvador</p>
        <br>
        </div>
</div>

<footer>
        <p>Derechos reservados por Liceo Hildebrando Juaréz &copy; 2022</p>
</footer>

</body>

</html>