<?php require_once '../db/dbconeg.php'; ?>

<!DOCTYPE html>
<html lang="es">
  <head> 
    <title>Modificar Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/agregar.css">
  </head>
  <body>
    <header>
        <div class="alert alert-info">
        <h1>Confiteria Americana</h1> 
        <h4> FORMULARIO DE MODIFICACION DE USUARIO </h4>
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
      $sql = "Select * FROM administradores Where id ='".$id."'";
      $query = mysqli_query($con, $sql);
      while($result = mysqli_fetch_array($query)){
    ?>
    <br>
    <div class="col-xs-12">
      <form method="post">
        <label for="codigo">Id del Usuario:</label>
        <input class="form-control" name="code" type="number" value="<?php echo $result['id'];?>">

        <label for="Nombre">Nombre:</label>
        <input class="form-control" name="Nombre" type="text" value="<?php echo $result['Nombre'];?>">

        <label for="Nombre">Usuario:</label>
        <input class="form-control" name="user" type="text" value="<?php echo $result['usuario'];?>">
        
        <label for="Nombre">Contraseña:</label>
        <input class="form-control" name="pass" type="text" value="<?php echo $result['password'];?>">

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
      $Nomus = $_POST['Nombre'];
      $us = $_POST['user'];
      $pwd = $_POST['pass'];
   
      if($Nomus!=null || $us!=null || $pwd!=null ){
        $U = "UPDATE administradores Set Nombre = '".$Nomus."', usuario = '".$us."', password = '".$pwd."' Where id = '".$idp."'";
        $Update = mysqli_query($con, $U);
        if($Update){
          echo'<script>window.location.href="ModificarUsuario";</script>';
        }
      }
  }
?>