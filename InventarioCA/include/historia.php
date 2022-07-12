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
      <h1>Confiteria Americana</h1>
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
      <p>Ver el siguiente video de como se hace el dulce.</p>

      <p align="center"><iframe  width="560" height="480"  src="https://www.youtube.com/embed/5V-QaZ0Fs-M" title="Creacion de Dulces" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
      <br/>
      <p>Antes de los dorados años 30, El Salvador no había incursionado aún en la industria de la confitería. Fue precisamente hasta inicios de esa década cuando Antonio Cabrera fundó la que hasta nuestros días se conoce como la Confitería Americana.</p>

      <p>Cabrera, de origen venezolano, había llegado al territorio salvadoreño hacía dos años y de inmediato descubrió ese nicho de negocios. Fue así como junto a su esposa salvadoreña, Carmen Arévalo, se embarcó en el ambicioso proyecto de la industria dulcera, estableciéndose en pleno centro de San Salvador.</p>

      <p>José Luis Cabrera, actual presidente de la empresa, dice que su padre se sintió atraído por el notable movimiento comercial que había en ese entonces en nuestro país. El primer año comenzó la producción de caramelos con sólo dos empleados y muchos libros sobre dulcería.</p>

      <p>La empresa superó muchos retos, incluyendo las malas épocas, como comprueba una vieja libreta de su madre en la que quedó plasmado que un día tan sólo vendieron $0.65, dice don José Luis.</p>

      <p>Al principio los dulces se envolvían a mano, pero en los años 40 se compraron las primeras máquinas empacadoras, con lo que la producción fue aumentando al igual que el personal. Eso les permitió comenzar a exportar en la década de 1950, especialmente a Nicaragua y Honduras.</p>

      <p>En ese entonces, la industria era tan artesanal que las exportaciones se enviaban en tombillas (cestas). El producto de mayor demanda, y que mantiene su demanda hasta la fecha, son los famosos dulces de vaquita.</p>

      <p>Hoy día, además de poseer la tienda en el centro capitalino, posee la Central Dulcera en Antiguo Cuscatlán, generando en total 240 empleos.</p>

      <p>La planta dulcera opera desde hace 20 años y ahí se produce un portafolio de más de 50 variedades, entre dulces, chicles y bombones. El 60 % de la producción se exporta a los países centroamericanos y a República Dominicana y, en el corto plazo, la empresa proyecta exportar a Estados Unidos, para aprovechar la demanda de productos nostálgicos.</p>

      <p>La trayectoria de 89 años de la empresa será reconocida el próximo 5 de junio por la Asociación Salvadoreña de Industriales (ASI), que le otorgará el premio PYME 2013.</p>

    </div>
  </body>
</html>
