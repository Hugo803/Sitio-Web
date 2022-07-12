<!Doctype html>
<html lang="es">
  <head> 
    <title>Historia de la empresa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <header>
      <div class="alert alert-info">
      <h1>Developers Tech</h1>
      </div>
    </header>
    <h2 align="center">Historia de la empresa</h2>
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
    <div class="col-xs-12">
      <p></p>

      
      <br/>
      <p>¿Necesitas una aplicación móvil para tu negocio? No te preocupes nosotros te la</p>

      <p>desarrollamos, somos una empresa salvadoreña fundada por un grupo de jóvenes</p>

      <p>emprendedores con el objetivo de ayudar a aquellas pequeñas y grandes</p>

      <p>empresas a llevar su negocio a dispositivos móviles sin importar su sistema operativo ya sea: Android o IOS.</p>

      <p>Somos expertos capacitados en el área y podemos garantizar la satisfacción de nuestros clientes, todo el personal es profesional y con experiencia en el desarrollo de aplicaciones.</p>

      <p>¿Sabes porque tu empresa necesita una App?</p>

      <p>Si de tecnología se trata, siempre hay que dar un paso más. Básicamente, hacemos referencia a las marcas que tienen como objetivo vender, mostrarse, generar clientes, fidelizar, captar, etc.</p>

      <p>Para todas ellas, es condición necesaria hacer todo lo que esté a su alcance para alcanzar sus objetivos, como podría ser contratar a una empresa que desarrolle su propia App y no es porque se trate de nosotros, pero definitivamente te recomiendo Developers Tech para que haga el trabajo duro.</p>

      <p>En este caso, vamos a enfocarnos en el desarrollo de estas famosas aplicaciones web, porque para ganar una mayor cuota de mercado, generar mayores ventajas y visibilidad, tu empresa realmente necesita una.</p>
      
      <p>Además de las muchas funciones que cumplen, son uno de los canales de difusión de contenidos más importante que existe hasta el momento, y por ello hoy te queremos hablar de todas las ventajas de una app bien desarrollada.</p>
    </div>
  </body>
</html>
