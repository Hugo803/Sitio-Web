<!Doctype html>
<html lang="es">
  <head> 
    <title>Historia de la empresa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/agregar.css">
  </head>
  <body>
    <header>
      <div class="alert alert-info">
      <h1>Confiteria Americana</h1>
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
        <a href="cliente" class="btn btn-info">Panel de Opciones</a>
        <button class="btn btn-info" title="Cerrar Sesion" name="btnCerrar">Cerrar Sesion</button>
      </form>
      </div>
      <div class="col-xs-12">
      <form action="post">
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