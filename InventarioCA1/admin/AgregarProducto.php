<?php require_once '../db/dbconeg.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head> 
    <title>Agregar Producto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/agregar.css">
  </head>
  <body>
    <header>
        <div class="alert alert-info">
        <h1>Confiteria Americana</h1> 
        <h4> FORMULARIO PARA AGREGAR PRODUCTO </h4>
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
    $count = "SELECT COUNT(*) total FROM producto";
    $sql = mysqli_query($con, $count);
    $total = mysqli_fetch_assoc($sql);
    ?>
    <div class="col-xs-12">
      <h1>Nuevo producto</h1>
      <form method="post" action="AgregarProducto">
        <label for="codigo">Id del producto:</label>
        <input class="form-control" name="code" type="number" value="<?php echo $total['total'] +1;?>">

        <label for="Nombre">Nombre:</label>
        <input class="form-control" name="Nombre" type="text" placeholder="Nombre del producto">
      
        <label for="descripcion">Descripción:</label>
        <textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>
    
        <label for="precio">Peso:</label>
        <input class="form-control" name="precio" type="text" placeholder="Precio del producto">
    
        <label for="categoria">Categoria:</label>
        <input class="form-control" name="categoria" required type="text" placeholder="Categoria">
        <br><input class="btn btn-info" type="submit" value="Guardar" name="add">
      </form>
    </div>
    <br>
    </body>
</html>
<?php
    if (isset($_POST['add'])) {
        $code = $_POST['code'];
        $nombre= $_POST['Nombre'];
        $Descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cat = $_POST['categoria'];

        $insert = "Insert Into producto(IdProducto, Nombreproducto, DescripcionProducto, precio, NombreCatergoria)
        values(".$code.", '".$nombre."', '".$Descripcion."', '".$precio."', '".$cat."')";

        $sqli = mysqli_query($con, $insert);

        $comprobar = "Select * From producto where Nombreproducto = '".$nombre."' and IdProducto = '".$code."'";
        $sql = mysqli_query($con, $comprobar);
        $verify = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        if($verify)
        {
            echo '<center><h2>Insertado Correctamente</h2></center>';
            header("location: ./ListaProductos");
        }
    }
    ?>
