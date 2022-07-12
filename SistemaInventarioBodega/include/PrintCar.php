<?php
session_start();
if(!isset($_SESSION['carro'])){
	echo "Carrito Vacio";
}else{
	$carro = $_SESSION['carro'];
	$suma = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Impresion de comprobante</title>
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
<h3 align="center">ORDEN DE COMPRA</h3>
<center>
	No. Compra: #Pendiente<br>
			Cliente: <?php echo $_SESSION['usuario'];  ?><br>
			Fecha: <?php echo date('Y-m-d'); ?><br>
			Total de Compra: $<?php echo $_SESSION['ValorPagar']; ?><br>
<table  class="table table-bordered">
	<tr>
		<th>Producto</th>
		<th>Precio</th>
		<th>Cantidad</th>
		<th>Total</th>
	</tr>
	<?php 
	foreach($carro as $k => $v){
		$subtotal = $v['cantidad']*$v['precio'];
		$suma = $suma+$subtotal;
		?>
		<tr>
		<td><?php echo $v['producto']; ?></td>
		<td><?php echo $v['precio']; ?></td>
		<td><?php echo $v['cantidad']; ?></td>
		<td><?php echo $subtotal; ?></td>
	</tr>
		<?php
	}
	}
?>
</table>
<a href="vercarrito" class="btn-success noPrint">Regresar al Carrito</a>
</center>
</body>
</html>