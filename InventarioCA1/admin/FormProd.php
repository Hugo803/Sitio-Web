<?php require_once '../db/dbconeg.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head> 
    <title>Modificar Producto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/agregar.css">
  </head>
  <body>
    <header>
        <div class="alert alert-info">
        <h1>Confiteria Americana</h1> 
        <h4> FORMULARIO DE MODIFICACION DE PRODUCTO </h4>
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
    <br>
    <div class="col-xs-12">
      <form method="post">
        <label for="codigo">Id del producto:</label>
        <input class="form-control" name="code" type="number" value="<?php echo $result['IdProducto'];?>">

        <label for="Nombre">Nombre:</label>
        <input class="form-control" name="Nombre" type="text" value="<?php echo $result['Nombreproducto'];?>">
      
        <label for="descripcion">Descripción:</label>
        <textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $result['DescripcionProducto'];?></textarea>
    
        <label for="Precio">Precio:</label>
        <input class="form-control" name="Precio" type="text" value="<?php echo $result['Precio'];?>">
    
        <label for="categoria">Categoria:</label>
        <input class="form-control" name="categoria" required type="text" value="<?php echo $result['NombreCatergoria'];?>">
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
      $Desc = $_POST['descripcion'];
      $Precio = $_POST['Precio'];
      $Cat = $_POST['categoria'];
  
      if($NomPrd!=null || $Cat!=null || $Precio!=null || $Desc!=null){
        $U = "UPDATE producto Set Nombreproducto = '".$NomPrd."', DescripcionProducto = '".$Desc."', Precio = '".$Precio."', NombreCatergoria = '".$Cat."' Where IdProducto = '".$idp."'";
        $Update = mysqli_query($con, $U);
        if($Update){
          echo'<script>window.location.href="ModificarProducto";</script>';
        }
      }
  }
?>