<?php 
session_start();

if(isset($_SESSION['carro']))

$carro=$_SESSION['carro'];

else $carro=false;
?>
<!doctype html>
<html lang="es">
	<head>
	<title>PRODUCTOS AGREGADOS AL CARRITO</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carrito de Compra</title>
	<link rel="stylesheet" type="text/css" href="../css/catalogo.css">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
				<h1>Developrs Tech</h1> 
				<h4>CARRITO DE COMPRAS</h4>
			</div>
		</header>
			<br>
			<div class="Nav-user">
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
				<button class="btn btn-info" title="Cerrar Sesion" name="btnCerrar">Cerrar Sesion</button>
			</form>
		</div>
			<br>
			<center><a href="PrintCar" class="btn-success noPrint"> Imprimir Comprobante</a></center>
		<?php 
			if($carro){
		?>
		<table class="table table-bordered">
			<tr> 
				<th>Producto</th>
				<th>Precio</th>
				<th colspan="2" align="center">Cantidad</th>
				<th>Borrar</th>
				<th>Actualizar</th>
			</tr>
		<?php
			$contador=0;
			$suma=0;
			foreach($carro as $k => $v){
				$subto=$v['cantidad']*$v['precio'];
				$suma=$suma+$subto;
				$contador++;
				//Creo una variable de sesion y le asigno el total a pagar
				$_SESSION['ValorPagar']=$suma;
		?>
	<form name="a<?php echo $v['identificador'] ?>" method="post" action="updatecar?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
			<tr class='prod'> 
				<td><?php echo $v['producto'] ;?></td>
				<td><?php echo $v['precio'] ;?></td>
				<td ><?php echo $v['cantidad']; ?></td>
				<td> 
				<input class="form-control input-sm" name="cantidad" type="number" id="cantidad" value="<?php echo $v['cantidad'] ?>">
				<input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>
				<td><a href="borracar?<?php echo SID ?>&id=<?php echo $v['id']?>"><img src="../img/trash.png"></a></td>
				<td><input name="imageField" type="image" src="../img/refresh.png" style="border: 0px; cursor: pointer;"></td>
			</tr>
			</form>
		<?php 
		}
		?>
		</table>
		<div class="col-xs-12">
			<label>Total de Articulos: <?php echo count($carro);?> </label>		
		<br>		
			<label>Total: $<?php echo number_format($suma,2);?> </label>
		<br>
			<label>Continuar la seleccion de productos</label>
			<a href="catalogo.php?<?php echo SID;?>">IR</a> 
		<br>
			<a href="pagarcompra.php?<?php echo SID;?>"><img src="../img/buy.png" border="0"></a>
		</div>
		<?php }
		else
			{ ?>
			<p align="center"> 
				<label>No hay productos seleccionados</label>
				<br>
				<a href="catalogo.php?<?php echo SID;?>">Volver a la Lista</a> 
		<?php }?>
			</p>
	</body>
</html>