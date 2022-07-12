<html lang="es">
  <head> 
    <title>Eliminar Detalle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/lista.css">
  </head>
  <body>
    <header>
      <div class="alert alert-info">
      <h1>Developers Tech</h1> 
      <h4>ELIMINAR DETALLE DE COMPRA</h4>
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
    <form action="EliminarDetalle" method="POST" align="center">
            <input type="text" autocomplete="off" autofocus class="form-control input-sm" name="bsc" placeholder="Buscar"><button class="btn btn-success">BUSCAR</button>
        </form>
        <br>
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Precio</th>
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
          $query = "SELECT * FROM detallecompra
          Where producto like '%" . $buscar . "%'";
          $sql = mysqli_query ($con, $query);
          while ($info = mysqli_fetch_array($sql))
          {
            $Id = $info['id'];
            $Nombre = $info [ 'producto'];
            $Cantidad = $info ['cantidad'];
            $Precio = $info ['precio'];
        ?>
      <tbody>
          <tr>
          <td><?php echo $Id; ?></td>
          <td><?php echo $Nombre;?></td>
          <td><?php echo $Cantidad;?></td>
          <td><?php echo $Precio;?></td>
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
      $eliminar = "DELETE FROM detallecompra WHERE id='$id'";
      $borrar = mysqli_query($con, $eliminar);
      if($borrar){
        echo '<center><h2>Item Borrado</h2></center>';
        header ("Refresh:3");
        }
      }
      ?>