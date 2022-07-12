<html lang="es">
  <head> 
    <title>Listado de Clientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/lista.css">
  </head>
  <body>
    <header>
      <div class="alert alert-info">
      <h1>Confiteria Americana</h1> 
      <h4>Listado De Clientes</h4>
      </div>
    </header>
    <div class="col-xs-12">
	<div class="Nav-user">
    <?php
      session_start();
      if (isset($_SESSION['acceso'])) {
        echo "<h2>Usuario: ".$_SESSION['acceso']."</h2>";
      }
      else{
        header("location: ./index");
      }
      if (isset($_POST['btnCerrar'])) {
        session_destroy();
        header("location: ./index");
      }
      ?>
      <form method="POST">
        <button class="btn btn-info" title="Cerrar Sesion" name="btnCerrar">Cerrar Sesion</button>
      </form>
      </div>
    <form action="ListaClientes" method="POST" align="center">
            <input type="text" autocomplete="off" autofocus class="form-control input-sm" name="bsc" placeholder="Buscar"><button class="btn btn-success">BUSCAR</button>
        </form>
        <br>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
          <th>Usuario</th>
          <th>Clave</th>
				</tr>
			</thead>
      <?php
        require_once('../db/dbconeg.php');
        if (!isset($_POST['bsc'])) {

            $_POST['bsc'] = '';
            $buscar = $_POST['bsc'];
          }
          $buscar = $_POST['bsc'];
          $query = "SELECT * FROM cliente
          Where NombreCliente like '%" . $buscar . "%'";
          $sql = mysqli_query ($con, $query);
          while ($info = mysqli_fetch_array($sql))
          {
            $Id = $info['IdCliente'];
            $Nombre = $info [ 'NombreCliente'];
            $Usuario = $info ['usuario'];
            $Contraseña = $info ['password'];
        ?>
			<tbody>
          <tr>
					<td><?php echo $Id; ?></td>
          <td><?php echo $Nombre;?></td>
          <td><?php echo $Usuario;?></td>
          <td><?php echo $Contraseña;}?></td>
				</tr>
      </tbody>
		</table>
	</div>
  <br>
  <br>
  <div>
    <a class="btn btn-success" href="AgregarCliente" target="_blank">Nuevo Cliente</a>
    <a href="Administracion" class="btn btn-info">Regresar al Menu del Administrador</a>
  </div>
</body>
</html>