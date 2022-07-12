<?php require_once '../db/dbconeg.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head> 
    <title>Agregar Proveedor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/agregar.css">
  </head>
  <body>
    <header>
        <div class="alert alert-info">
        <h1>Developers Tech</h1> 
        <h4> FORMULARIO PARA AGREGAR PROVEEDOR</h4>
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
    $count = "SELECT COUNT(*) total FROM proveedor";
    $sql = mysqli_query($con, $count);
    $total = mysqli_fetch_assoc($sql);
    ?>
    <div class="col-xs-12">
      <h1>Nuevo Proveedor</h1>
      <form method="post" action="AgregarProveedor">
        <label for="codigo">Id del Proveedor:</label>
        <input class="form-control" name="code" type="number" value="<?php echo $total['total'] +1;?>">

        <label for="Nombre">Nombre:</label>
        <input class="form-control" name="Nombre" type="text" placeholder="Nombre del Proveedor">

        <label for="Empresa">Empresa:</label>
        <input class="form-control" name="Empresa" type="text" placeholder="Nombre de la Empresa">

        <label for="Descripcion">Descripcion:</label>
        <input class="form-control" name="Descripcion" type="text-area" placeholder="Detalles de lo Recivido">
        <br>
        <input class="btn btn-info" type="submit" value="Guardar" name="add">
      </form>
    </div>
    <br>
    </body>
</html>
<?php
    if (isset($_POST['add'])) {
        $code = $_POST['code'];
        $nombre= $_POST['Nombre'];
        $empresa = $_POST['Empresa'];
        $Details = $_POST['Descripcion'];
        
        $insert = "Insert Into proveedor(IdProveedor, NombreProv, Empresa, Detalle)
        values(".$code.", '".$nombre."', '".$empresa."', '".$Details."')";

        $sqli = mysqli_query($con, $insert);

        $comprobar = "Select * From proveedor where NombreProv = '".$nombre."' and IdProveedor = '".$code."'";
        $sql = mysqli_query($con, $comprobar);
        $verify = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        if($verify)
        {
            echo '<center><h2>Insertado Correctamente</h2></center>';
            header("location: ./ListaProveedor");
        }
    }
    ?>
