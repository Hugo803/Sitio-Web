<?php

require_once('../db/dbconeg.php');
session_start();
$idCompra = $_GET['idc'];

$sql1 = "select * from compra where id = '$idCompra'";

$sql2 = "select * from detallecompra where idcompra = '$idCompra'";

$encabezado = mysqli_query($con, $sql1);
$fila1 = mysqli_fetch_array($encabezado);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Imprimir Comprobante de Compra</title>
	<link rel="stylesheet" type="text/css" href="../css/catalogo.css">
	<style type="text/css">
		@media print{
			.noPrint{
				visibility: hidden;
			}
		}
	</style>
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
<center><a href="javascript:void();" onclick="window.print();" class="btn-success noPrint"> Imprimir</a></center>
<br>
<h3 align="center">ORDEN DE COMPRA</h3>
<center>
	No. Compra: <?php echo $fila1['id'];  ?><br>
	Cliente: <?php echo $fila1['idcliente']; ?><br>
	Fecha: <?php echo $fila1['fecha']; ?><br>
	Total de Compra: $<?php echo $fila1['valorcompra']; ?><br>
<table  class="table table-bordered">
	<tr>
		<th>Producto</th>
		<th>Precio</th>
		<th>Cantidad</th>
		<th>Subtotal</th>
	</tr>
	<?php 
	$total = 0;
	$suma = 0;
	$detalles = mysqli_query($con, $sql2);
	while($v = mysqli_fetch_array($detalles)){
		$subtotal = $v['cantidad']*$v['precio'];
		
		?>
		<tr>
		<td><?php echo $v['producto']; ?></td>
		<td><?php echo $v['precio']; ?></td>
		<td><?php echo $v['cantidad']; ?></td>
		<td><?php echo '$'.$subtotal; ?></td>
	</tr>
	
		<?php
	}
?>
</table>
<center><label>Total Pagado: $<?php echo $fila1['valorcompra'];?></label></center>
<br>
<a href="vercarrito" class="btn-success noPrint">Regresar al Carrito</a> 
</body>
</html>