<?php require_once '../db/dbconeg.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head> 
    <title>Modificar Venta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/agregar.css">
  </head>
  <body>
    <header>
        <div class="alert alert-info">
        <h1>Developers Tech</h1> 
        <h4> FORMULARIO DE MODIFICACION DE DETALLES DE COMPRA </h4>
        </div>
    </header>
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
      <?php
      $id = $_GET['id'];
      $sql = "Select * FROM detallecompra Where id ='".$id."'";
      $query = mysqli_query($con, $sql);
      while($result = mysqli_fetch_array($query)){
    ?>
    <br>
    <div class="col-xs-12">
      <form method="post">
        <label for="codigo">Id de Venta:</label>
        <input class="form-control" name="code" type="number" value="<?php echo $result['id'];?>">

        <label for="Producto">Producto:</label>
        <input class="form-control" name="Producto" type="text" value="<?php echo $result['producto'];?>">

        <label for="cantidad">Cantidad:</label>
        <input class="form-control" name="Cantidad" type="number" value="<?php echo $result['cantidad'];?>">

        <label for="precio">Precio:</label>
        <input class="form-control" name="Precio" type="number" value="<?php echo $result['precio'];?>">

        <?php } ?>
        <br><button class="btn btn-info" type="submit" name="add">Actualizar</button>
      </form>
    </div>
    <br>
    </body>
</html>

<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $idp = $_POST['code'];
      $NomPrd = $_POST['Producto'];
      $cant = $_POST['Cantidad'];
      $price = $_POST['Precio'];
   
      if($NomPrd!=null || $cant!=null || $price!=null){
        $U = "UPDATE detallecompra Set producto = '".$NomPrd."', cantidad = '".$cant."', precio = '".$price."' Where id = '".$idp."'";
        $Update = mysqli_query($con, $U);
        if($Update){
          echo'<script>window.location.href="ModificarDetalle";</script>';
        }
      }
  }
?>