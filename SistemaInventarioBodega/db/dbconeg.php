<?php

$user = "root";
$password = "";
$servidor = "localhost";
$database = "dbnegocio4";

$con = mysqli_connect($servidor, $user, $password, $database);

if (!$con) {
	die("No se puede conectar con la base de datos: ".mysqli_connect_error());
}
?>