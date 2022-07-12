<?php require_once '../db/dbconeg.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head> 
    <title>Modificar Proveedor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/agregar.css">
  </head>
  <body>
    <header>
        <div class="alert alert-info">
        <h1>Confiteria Americana</h1> 
        <h4> FORMULARIO DE MODIFICACION DE Proveedor </h4>
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
      $sql = "Select * FROM Proveedor Where IdProveedor ='".$id."'";
      $query = mysqli_query($con, $sql);
      while($result = mysqli_fetch_array($query)){
    ?>
    <br>
    <div class="col-xs-12">
      <form method="post">
        <label for="codigo">Id del Proveedor:</label>
        <input class="form-control" name="code" type="number" value="<?php echo $result['IdProveedor'];?>">

        <label for="Nombre">Nombre:</label>
        <input class="form-control" name="Nombre" type="text" value="<?php echo $result['NombreProv'];?>">

        <label for="Empresa">Empresa:</label>
        <input class="form-control" name="Empresa" type="text" value="<?php echo $result['Empresa'];?>">

        <label for="Descripcion">Descripcion:</label>
        <input class="form-control" name="Descripcion" type="text-area" value="<?php echo $result['Detalle'];?>">
        <br>
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
      $NomPrd = $_POST['Nombre'];
      $Empresa = $_POST['Empresa'];
      $Detalle = $_POST['Descripcion'];
   
      if($NomPrd!=null || $Empresa!=null || $Detalle!=null){
        $U = "UPDATE Proveedor Set NombreProv = '".$NomPrd."', Empresa = '".$Empresa."',Detalle = '".$Detalle."' Where IdProveedor = '".$idp."'";
        $Update = mysqli_query($con, $U);
        if($Update){
          echo'<script>window.location.href="ModificarProveedor";</script>';
        }
      }
  }
?>