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
        <h4> FORMULARIO DE MODIFICACION DE VENTA </h4>
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
      $sql = "Select * FROM compra Where id ='".$id."'";
      $query = mysqli_query($con, $sql);
      while($result = mysqli_fetch_array($query)){
    ?>
    <br>
    <div class="col-xs-12">
      <form method="post">
        <label for="codigo">Id de venta:</label>
        <input class="form-control" name="code" type="number" value="<?php echo $result['id'];?>">

        <label for="Nombre">Nombre:</label>
        <input class="form-control" name="Nombre" type="text" value="<?php echo $result['nombretc'];?>">

        <label for="Nombre">Monto de la compra:</label>
        <input class="form-control" name="monto" type="text" value="<?php echo $result['valorcompra'];?>">

        <label for="Estado">Estado:</label>
        <select name="Estado" class="form-control"> 
        <option><?php echo $result['estado']; ?></option>
        <option value="Pendiente">Pendiente</option> 
        <option value="Entregado">Entregado</option> 
        </select> 
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
      $NomCl = $_POST['Nombre'];
      $monto = $_POST['monto'];
      $estado = $_POST['Estado'];
   
      if($NomCl!=null || $monto!=null || $estado != null){
        $U = "UPDATE compra Set nombretc = '".$NomCl."', valorcompra = '".$monto."', estado = '".$estado."' Where id = '".$idp."'";
        $Update = mysqli_query($con, $U);
        if($Update){
          echo'<script>window.location.href="ModificarVenta";</script>';
        }
      }
  }
?>