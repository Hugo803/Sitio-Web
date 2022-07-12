<html lang="es">
  <head> 
    <title>Modificar Venta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/lista.css">
  </head>
  <body>
    <header>
      <div class="alert alert-info">
      <h1>Developers Tech</h1> 
      <h4>MODIFICAR DATOS DE VENTA</h4>
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
    <form action="ModificarVenta" method="POST" align="center">
            <input type="text" autocomplete="off" autofocus class="form-control input-sm" name="bsc" placeholder="Buscar"><button class="btn btn-success">BUSCAR</button>
        </form>
        <br>
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Monto</th>
          <th>Estado</th>
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
          $query = "SELECT * FROM compra
          Where valorcompra like '%" . $buscar . "%' or idCliente like '%" . $buscar . "%' or nombretc like '%" . $buscar . "%'";
          $sql = mysqli_query ($con, $query);
          while ($info = mysqli_fetch_array($sql))
          {
            $Id = $info['id'];
            $Nombre = $info [ 'nombretc'];
            $Monto = $info [ 'valorcompra'];
            $Estado = $info [ 'estado'];
        ?>
      <tbody>
          <tr>
          <td><?php echo $Id; ?></td>
          <td><?php echo $Nombre;?></td>
          <td><?php echo '$'.$Monto;?></td>
          <td><?php 
          if($Estado == 'Entregado'){
            echo '<div class = "Estado" style="background: #5cb85c;">'.$Estado.'</div>';
          }
          else{
            echo '<div class = "Estado" style="background: #d9534f;">'.$Estado.'</div>';
          }
          ?>
          </td>
          <td><button class="btn btn-danger" onclick="window.location.href='FormVenta?id=<?php echo $Id ?>'" >Modificar</button></td> 
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