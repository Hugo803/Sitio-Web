<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catalogo de Confitera Americana</title>
  <link rel="stylesheet" type="text/css" href="../css/catalogo.css">
</head>
<body>
  <header>
      <div class="alert alert-info">
      <h1>Confiteria Americana</h1> 
      <h4>BIENVENIDO AL CATALOGO DE PRODUCTOS</h4>
      </div>
  </header>
  <br>
  <div class="Nav-user">
    <?php
      session_start();
      if (isset($_SESSION['usuario'])) {
        echo "<h2>Usuario: ".$_SESSION['usuario']."</h2>";
      }
      else{
        header("location: ../index");
      }
      if (isset($_POST['btnCerrar'])) {
        session_destroy();
        header("location: ../index");
      }
      ?>
      <form method="POST">
        <a href="panelcliente" class="btn btn-info">Panel de Opciones</a>
        <button class="btn btn-info" title="Cerrar Sesion" name="btnCerrar">Cerrar Sesion</button>
      </form>
      </div>
      <?php
      //Para Carrito de Compra
      if(isset($_SESSION['carro']))
      $carro=$_SESSION['carro'];
      else $carro=false;
      ?>
      <br>
      <form action="catalogo" method="POST" align="center">
        <input class="form-control" name="bsc" type="text" placeholder="Buscar"><button>BUSCAR</button>
            <br><br>
        <a class="button" href="vercarrito" style="background-color: #5cb85c;">Mostrar Carretilla</a>
        <br><br>
        </form>        
      <div class="arts">
      <?php
      require_once '../db/dbconeg.php';
      if (!isset($_POST['bsc'])) {
          $_POST['bsc'] = '';
          $buscar = $_POST['bsc'];
        }
        $buscar = $_POST['bsc'];
        $query = "SELECT * FROM producto Where Nombreproducto like '%" . $buscar . "%' or DescripcionProducto like '%" . $buscar . "%'";
        $sql = mysqli_query ( $con, $query);

      while ($info = mysqli_fetch_array($sql))
      {
        $id = $info['IdProducto'];
        $Nombre = $info [ 'Nombreproducto'];
        $Descripción  = $info [ 'DescripcionProducto'];
        $Precio = $info['Precio'];
        $Stock = $info['Existencia'];
      ?>  
      <div class = "box">
        <H4> <?Php echo $id," - ", $Nombre; ?> </H4>
        <img src = "../img/product.png" alt = "Imagen no Disponible">
        <P> <?Php echo $Descripción; ?> </P>
        <P> <?Php echo 'DISPONIBLE: '.$Stock; ?> </P>
        <div class="acciones">
          <H5> <?Php echo "$".$Precio; ?> </H5>
          <?php
          if(!$carro || !isset($carro[md5($info['IdProducto'])]['identificador']) || $carro[md5($info['IdProducto'])]['identificador']!=md5($info['IdProducto'])){
          ?>
          <a class="button" href="agregacar?<?php echo SID ?>&id=<?php echo $id;?>">Añadir al Carrito</a>
        <?php }
          else
          {?>
            <a class = "button" style="background-color: #FF5936;" href="borracar?<?php echo SID ?>&id=<?php echo $id; ?>">Quitar del Carrito</a>
        <?php } ?>
        </div>
      </div>
    <?php } ?>
    </div>
</body>
</html>