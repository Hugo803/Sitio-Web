<html lang="es">
  <head> 
    <title>Eliminar Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/lista.css">
  </head>
  <body>
    <header>
      <div class="alert alert-info">
      <h1>Confiteria Americana</h1> 
      <h4>ELIMINAR PRODUCTO</h4>
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
    <form action="EliminarProducto" method="POST" align="center">
            <input type="text" class="form-control input-sm" autocomplete="off" autofocus name="bsc" placeholder="Buscar"><button class="btn btn-success">BUSCAR</button>
        </form>
        <br>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Código</th>
					<th>Descripción</th>
					<th>Precio</th>
					<th>Categoria</th>
          <th>Accion</th>
				</tr>
			</thead>
      <?php
        require_once('../db/dbconeg.php');
        if (!isset($_POST['bsc'])) {

            $_POST['bsc'] = '';
            $buscar = $_POST['bsc'];
          }
          $buscar = $_POST['bsc'];
          $query = "SELECT * FROM producto 
          Where Nombreproducto like '%" . $buscar . "%' or DescripcionProducto like '%" . $buscar . "%'";
          $sql = mysqli_query ($con, $query);
          while ($info = mysqli_fetch_array($sql))
          {
            $Id = $info['IdProducto'];
            $Nombre = $info [ 'Nombreproducto'];
            $Descripción  = $info [ 'DescripcionProducto'];
            $Precio = $info ['Precio'];
            $Categoria= $info [ 'NombreCatergoria'];
        ?>
			<tbody>
          <tr>
					<td><?php echo $Id; ?></td>
          <td><?php echo $Nombre;?></td>
          <td><?php echo $Descripción; ?></td>
          <td><?php echo $Precio;?></td>
          <td><?php echo $Categoria;?></td>
          <td><form method="POST">
                <input type="hidden" name="id_borrar" value="<?php echo $Id; ?>"/>
              <button class="btn btn-danger" name="borrar">Eliminar</button>
              </form>
          </td>	
          <?php } ?>
				</tr>
      </tbody>
		</table>
	</div>
  <br>
  <div>
    <a href="Administracion" class="btn btn-info">Regresar al Menu del Administrador</a>
  </div>
</body>
</html>
<?php 
      if(isset($_POST['borrar'])){
      $id = $_POST['id_borrar'];
      $eliminar = "DELETE FROM producto WHERE IdProducto='$id'";
      $borrar = mysqli_query($con, $eliminar);
      if($borrar){
        echo '<center><h2>Producto Borrado</h2></center>';
        header ("Refresh:3");
        }
      }
      ?>