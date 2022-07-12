<!Doctype html>
<html lang="es">
  <head> 
    <title>Formulario de contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/agregar.css">
  </head>
  <body>
    <header>
      <div class="alert alert-info">
      <h1>Developrs Tech</h1>
      </div>
    </header>
    <h2 align="center">Formulario de Contacto</h2>
    <br/>
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
          require_once('../db/dbconeg.php');
    $count = "SELECT COUNT(*) total FROM quejas";
    $sql = mysqli_query($con, $count);
    $total = mysqli_fetch_assoc($sql);
    ?>
      <div class="col-xs-12">
        <form action="contact" method="POST">
          <label for="code">Id:</label>
          <input type="text" required name="code" class="form-control" value="<?php echo $total['total'] +1; ?>">
          <label for="Usuario">Usuario:</label>
          <input type="text" required name="Usuario" class="form-control" value="<?php echo $_SESSION['usuario'] ?>">
          <label for="email">Email:</label>
          <input type="email" required name="email" class="form-control">
          <label for="descripcion">Descripción:</label>
          <textarea required name="descripcion" cols="30" rows="5" class="form-control"></textarea>
          <input class="btn btn-info" type="submit" value="Guardar" name="add">
        </form>
      </div>
    </body>
</html>
<?php
    if (isset($_POST['add'])) {
        $code = $_POST['code'];
        $idcliente= $_SESSION['idcliente'];
        $nombre= $_POST['Usuario'];
        $Descripcion = $_POST['descripcion'];
        $email = $_POST['email'];

        $insert = "Insert Into quejas(id, icliente, usuario, detalles, email)
        values(".$code.", '".$idcliente."', '".$nombre."', '".$Descripcion."', '".$email."')";

        $sqli = mysqli_query($con, $insert);

        $comprobar = "Select * From quejas where usuario = '".$nombre."' and id = '".$code."'";
        $sql = mysqli_query($con, $comprobar);
        $verify = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        if($verify)
        {
            echo '<center><h2>Gracias por tus Comentarios</h2></center>';
            header("location: ./contact");
        }
    }
    ?>