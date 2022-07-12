<html lang="es">
  <head> 
    <title>Confiteria Americana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <header>
      <div class="alert alert-info">
      <h1>Confiteria Americana</h1>
      </div>
    </header>
    <h2 align="center">ESTAMOS FELIZ DE QUE VISITE NUESTRA PLATAFORMA EN LINEA</h2>
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
        <button class="btn btn-info" title="Cerrar Sesion" name="btnCerrar">Cerrar Sesion</button>
      </form>
      </div>
    <section>
      <div class="arts">
      <div class = "box">
        <H4>CATALOGO</H4>
        <img src = "../img/productos.png" alt = "Imagen no Disponible">
        <P>Listado De Productos</P>
        <div class="acciones">      
          <a class="button" href="catalogo">Ver</a>
        </div>
      </div>
    </div>
    <div class="arts">
      <div class = "box">
        <H4>¿QUIENES SOMOS?</H4>
        <img src = "../img/empresa.png" alt = "Imagen no Disponible">
        <P>Detalles de la empresa</P>
        <div class="acciones">      
          <a class="button" href="catalogo">Ver</a>
        </div>
      </div>
    </div>
    <div class="arts">
      <div class = "box">
        <H4>CONTACTANOS</H4>
        <img src = "../img/contact.png" alt = "Imagen no Disponible">
        <P>Formulario de Contacto</P>
        <div class="acciones">      
          <a class="button" href="contact">Ver</a>
        </div>
      </div>
    </div>
    </section>    
  </body>
</html>