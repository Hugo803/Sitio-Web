<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">Login Confiteria Americana</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="img/dw.png">
					</div>
					<p></p>
					<form method="post">
					<label>Usuario</label>
					<input type="text" name="txtusuario" class="form-control input-sm" required>
					<label>Password</label>
					<input type="password" name="txtpassword" class="form-control input-sm" required>
					<p></p>
					<button class="btn btn-primary" name="entrar">Entrar</button>
					<a href="./include/Registro" class="btn btn-primary">Registro</a>
					<?php
					require_once('./db/dbconeg.php');
					session_start();
					if(isset($_SESSION['usuario'])){
					header("location: ./include/panelcliente");
					}
					else{
						if(!isset($_POST['entrar'])){
							}
							else{
								$u = $_POST['txtusuario'];
								$c = $_POST['txtpassword'];

								$cs = "Select * From cliente Where Usuario = '".$u."' and password = '".$c."'"; 

								$rqt = mysqli_query($con, $cs);
								$vrf = mysqli_num_rows($rqt);
								if(!isset($_SESSION['usuario'])){
									if($vrf){							
										$row = mysqli_fetch_array($rqt);
										$_SESSION['idcliente'] = $row['IdCliente'];
										$_SESSION['usuario'] = $row['NombreCliente'];
										header("location: ./include/panelcliente");
								}			
								else{
									echo "<br><label>Usuario y/o Contraseña incorrectos</label>";
									header ("Refresh:2");
								}
							}
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