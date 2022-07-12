<!Doctype html>
<html lang="es">
  <head> 
    <title>Sistema de Inventario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  <header>
      <div class="alert alert-info">
      <h1>Confiteria Americana</h1> 
      <h4>BIENVENIDO AL SISTEMA DE INVENTARIO</h4>
      </div>
  </header>
  <br>
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
      <h2>Elija la Accion a realizar</h2>
  
  <table class="col-md-12">
    <tr class="bg-primary">
      <th>Ventas</th>
    </tr>
    <tr class="bg-primary">
      <td class="pad-basic"><a href="ListaVenta" target="_blank"><img src="../img/base.png"><h4>Listado</h4></a></td>
      <td class="pad-basic"><a href="EliminarVenta" target="_blank"><img src="../img/eliminar(2).png"><h4>Eliminar</h4></a></td>
      <td class="pad-basic"><a href="ModificarVenta" target="_blank"><img src="../img/modificar.png"><h4>Modificar</h4></a></td>
      <td class="pad-basic"><a href="reporteVenta" target="_blank"><img src="../img/reporte.png"><h4>Reporte</h4></a></td>
    </tr>
  </table>
   <table class="col-md-12">
    <tr class="bg-primary">
      <th>Detalles de Compras</th>
    </tr>
    <tr class="bg-primary">
      <td class="pad-basic"><a href="ListaDetalle" target="_blank"><img src="../img/base.png"><h4>Listado</h4></a></td>
      <td class="pad-basic"><a href="EliminarDetalle" target="_blank"><img src="../img/eliminar(2).png"><h4>Eliminar</h4></a></td>
      <td class="pad-basic"><a href="ModificarDetalle" target="_blank"><img src="../img/modificar.png"><h4>Modificar</h4></a></td>
      <td class="pad-basic"><a href="reporteDetalle" target="_blank"><img src="../img/reporte.png"><h4>Reporte</h4></a></td>
    </tr>
  </table>
    
    <table class="col-md-12">
    <tr class="bg-primary">
      <th>Clientes</th>
    </tr>
    <tr class="bg-primary">
      <td class="pad-basic"><a href="ListaClientes" target="_blank"><img src="../img/base.png"><h4>Listado</h4></a></td>
      <td class="pad-basic"><a href="AgregarCliente" target="_blank"><img src="../img/añadir.png"><h4>Agregar</h4></a></td>
      <td class="pad-basic"><a href="EliminarCliente" target="_blank"><img src="../img/eliminar(2).png"><h4>Eliminar</h4></a></td>
      <td class="pad-basic"><a href="ModificarCliente" target="_blank"><img src="../img/modificar.png"><h4>Modificar</h4></a></td>
    </tr>
  </table>
    
    <table class="col-md-12">
    <tr class="bg-primary">
      <th>Productos</th>
    </tr>
    <tr class="bg-primary">
      <td class="pad-basic"><a href="ListaProductos" target="_blank"><img src="../img/base.png"><h4>Listado</h4></a></td>
      <td class="pad-basic"><a href="AgregarProducto" target="_blank"><img src="../img/añadir.png"><h4>Agregar</h4></a></td>
      <td class="pad-basic"><a href="EliminarProducto" target="_blank"><img src="../img/eliminar(2).png"><h4>Eliminar</h4></a></td>
      <td class="pad-basic"><a href="ModificarProducto" target="_blank"><img src="../img/modificar.png"><h4>Modificar</h4></a></td>
    </tr>
  </table>
  
  <table class="col-md-12">
    <tr class="bg-primary">
      <th>Proveedor</th>
    </tr>
    <tr class="bg-primary">
      <td class="pad-basic"><a href="ListaProveedor" target="_blank"><img src="../img/base.png"><h4>Listado</h4></a></td>
      <td class="pad-basic"><a href="AgregarProveedor" target="_blank"><img src="../img/añadir.png"><h4>Agregar</h4></a></td>
      <td class="pad-basic"><a href="EliminarProveedor" target="_blank"><img src="../img/eliminar(2).png"><h4>Eliminar</h4></a></td>
      <td class="pad-basic"><a href="ModificarProveedor" target="_blank"><img src="../img/modificar.png"><h4>Modificar</h4></a></td>
    </tr>
  </table>
  
  <table class="col-md-12">
    <tr class="bg-primary">
      <th>Usuarios del Sistema</th>
    </tr>
    <tr class="bg-primary">
      <td class="pad-basic"><a href="ListaUsuario" target="_blank"><img src="../img/base.png"><h4>Listado</h4></a></td>
      <td class="pad-basic"><a href="AgregarUsuario" target="_blank"><img src="../img/añadir.png"><h4>Agregar</h4></a></td>
      <td class="pad-basic"><a href="EliminarUsuario" target="_blank"><img src="../img/eliminar(2).png"><h4>Eliminar</h4></a></td>
      <td class="pad-basic"><a href="ModificarUsuario" target="_blank"><img src="../img/modificar.png"><h4>Modificar</h4></a></td>
    </tr>
  </table>
  </body>
</html>