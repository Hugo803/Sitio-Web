<?php session_start(); 
$carro=$_SESSION['carro']; ?>
<!Doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/agregar.css">
	<title>Pagar Compra</title>
	<script lang="Javascript" type="text/javascript">
//Para validar tarjeta de credito 
function ValidarTJ(numero_tarjeta) { 
	var cadena = numero_tarjeta.toString(); 
	var longitud = cadena.length; 
	var cifra = null; var 
	cifra_cad=null;  
	var suma=0; 
	if (isEmpty(cadena)){ 
		alert("El número de la tarjeta no es válido"); 
		document.forms[0].numero.focus(); return false; 
	}  
	for (var i=0; i < longitud; i+=2){ 
		cifra = parseInt(cadena.charAt(i))*2; 
		if (cifra > 9){  
				cifra_cad = cifra.toString(); 
				cifra = parseInt(cifra_cad.charAt(0)) + parseInt(cifra_cad.charAt(1)); 
			} 
			suma+=cifra; 
		} 
		for (var i=1; i < longitud; i+=2){ 
			suma += parseInt(cadena.charAt(i)); 
	}  
//if ((suma % 10) == 0 || !isEmpty(cadena)){  
	if ((suma % 10) == 0){  
		return true 
	} 
	else { 
		alert("El número de la tarjeta no es válido"); 
		document.forms[0].numero.focus(); 
		return false; 
	} 
}  
function VenceTJ(mes,anio) { 
	var vmes  = parseInt(mes); 
	var vanio = parseInt(anio); 
	var ahora = new Date();  
	if ((vmes <= ahora.getMonth()+1) && (vanio<=ahora.getFullYear())){  
		alert("El vencimiento de la tarjeta no es válido"); 
		document.forms[0].mesv.focus(); 
		return false; 
		} 
		else { 
		//ValidarTJ(document.forms[0].numero.value); 
		return true; 
		} 
		}
		</script></head>
<body>
	<header>
		<div class="alert alert-info">
			<h1>Confiteria Americana</h1>
			<h4>CARRITO DE COMPRAS</h4>
		</div>
	</header>
	<br>
	<div class="Nav-user">
		<?php
		if (isset($_SESSION['usuario'])) {
		echo "<h2>Usuario: ".$_SESSION['usuario']."</h2>
	";
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
<div class="col-xs-12">
<form name="frmAutorizar" action="guardarcompra" method="post" onsubmit="return validenviar(this);">
	<h3 align="center">Valor a Pagar
	<?php 
			echo "$".$_SESSION['ValorPagar']; 
		?></h3>
		<br>
<br>

<label for="nombre">Nombre según tarjeta:</label>

<input type="text" class="form-control" name="nombre" size="40" maxlength="50">
<br>

<label for="emisor">Banco Emisor :</label>

<input type="text" class="form-control" name="emisor" size="40" maxlength="35">
<br>

	<label for="numero">Numero :</label>

<input type="text" class="form-control" name="numero" id="numero" size="20" maxlength="16" autocomplete="off" onblur="ValidarTJ(document.frmAutorizar.numero.value);">
<br>

	<label for="Tipo">Tipo :</label>

<select class="form-control" size="1" name="Tipo" onblur="ValidarTJ(document.frmAutorizar.numero.value);">
	<option selected>Visa</option>
	<option>Mastercard</option>
</select>
<br>
	<label>Fecha Vencimiento :</label>

<select class="form-select" size="1" name="mesv">
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
</select>
/
<select class="form-select" size="1" name="aniov" onblur="VenceTJ(document.frmAutorizar.mesv.value,document.frmAutorizar.aniov.value);">
	<option>
		<?php 
		echo date('Y');
		?></option>
	<?php     
		for ($j=1;$j<=10;$j++){      
			$anio=date('Y')+$j;      
			echo '<option>'.$anio.'</option>
';     
		}     
		?>
</select>
<br>
<p>
<label>Valores reflejados no incluyen IVA.</label>
</p>
<br>
<input type="hidden" name="idcliente" value='<?php echo $_SESSION['usuario'];?>'>
<input class="btn btn-info" type="submit" name="btnComprar" Value="Realizar Pago" />
</form>
</div>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd -->
</html>
<script languaje="JavaScript"> 
		function validenviar(theform) { 
			if(ValidarTJ(theform.numero.value)&&VenceTJ(theform.mesv.value,theform.aniov.value)) 
			{ //theform.submit(); return(true);  } else { theform.numero.focus(); return(false);     }//--> 
	}  </script>