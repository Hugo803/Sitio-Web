<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body style="background-color: gray">
<br><br><br>
<div class="container">
	<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading">Registro de usuario</div>
			<div class="panel panel-body">
				<form method="POST" action="Registro">
				<label>Nombre:</label>
				<input type="text" class="form-control input-sm" name="nombre">
				<label>Usuario:</label>
				<input type="text" class="form-control input-sm" name="usuario" >
				<label>Password:</label>
				<input type="password" class="form-control input-sm" name="password" >
				<p></p>
				<button class="btn btn-primary" name="registrar">Registrar</button>
				<a href="../index" class="btn btn-primary">Cancelar</a>
				<br>
				<?php 
				require_once "../db/dbconeg.php";
				if(isset($_POST['registrar'])){
						$nombre=$_POST['nombre'];
						$usuario=$_POST['usuario'];
						$password=$_POST['password'];

						$sql="SELECT * from cliente where usuario='".$usuario."' and password='".$password."'";
						$result=mysqli_query($con,$sql);

						if(mysqli_num_rows($result) > 0){
							echo "<center><label>Ya existe usuario con esos datos</label></center>";
							header ("Refresh:2");
						}else{
							$sql="INSERT into cliente (NombreCliente, usuario, password)values ('".$nombre."','".$usuario."','".$password."')";
								mysqli_query($con,$sql);
							echo "<center><label align='center'>Registro Completado Correctamente</label></center>";
							header ("Refresh:2");
						}
					}
				?>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>