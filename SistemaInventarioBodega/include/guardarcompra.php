<?php

require_once('../db/dbconeg.php');
session_start();
$carro = $_SESSION['carro'];

$idCliente = $_SESSION['idcliente'];

$valorcompra = $_SESSION['ValorPagar'];
$fecha = date("Y-m-d H:i:s");
$nombre = $_POST['nombre'];
$emisor = $_POST['emisor'];
$numero = $_POST['numero'];
$mesv = $_POST['mesv'];
$aniov = $_POST['aniov'];
$tipo = $_POST['Tipo'];

$sql = "Insert Into compra (idcliente, fecha, valorcompra, estado, nombretc, numerotc, bancotc, tipotc, mestc, aniotc)values($idCliente,'$fecha',$valorcompra,'Pendiente', '$nombre', '$numero', '$emisor', '$tipo', '$mesv', '$aniov')";

mysqli_query($con, $sql);

$idCompra = mysqli_insert_id($con);

if($idCompra > 0){
	foreach($carro as $k => $v){
		$pro = $v['producto'];
		$pre = $v['precio'];
		$can = $v['cantidad'];

		$sqlitem = "Insert Into detallecompra (idcompra, producto, precio, cantidad) values ($idCompra, '$pro', $pre, $can)";

		mysqli_query($con, $sqlitem);
	}

	$carro = false;
	$_SESSION['carro'] = $carro;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Proceso de Compra</title>
	<link rel="stylesheet" type="text/css" href="../css/catalogo.css">
</head>
<body>
	<header>
		<div class="alert alert-info">
			<h1>Developrs Tech</h1> 
			<h4>COMPROBANTE DE COMPRA</h4>
		</div>
	</header>
		<br>
		<div class="Nav-user noPrint">
		<?php
		if (isset($_SESSION['usuario'])) {
		echo "<h2>Usuario: ".$_SESSION['usuario']."</h2>";
		}
		else{
		header("location: ../index");
		}
		if (isset($_POST['btnCerrar'])) {
		session_destroy();
		header("location: ../index");
		}
		?>

		<form method="POST">
			<a href="catalogo" class="btn btn-info">Volver al Catalogo</a>
			<button class="btn btn-info " title="Cerrar Sesion" name="btnCerrar">Cerrar Sesion</button>
		</form>
	</div>
	<div align="center">
		<h2>Compra procesada con exito...</h2>
		<br>
		<a href='printCompra?idc=<?php echo $idCompra ?>' class="btn-success noPrint">Imprimir comprobante de compra</a>
	</div>
</body>
</html>
<?php
}
else{
	echo "No Puede ser Procesada la Compra...";
}
?>