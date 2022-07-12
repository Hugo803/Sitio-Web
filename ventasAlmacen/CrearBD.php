<html>
	<head>
		<title>Generando la Base de Datos</title>
	</head>
	<body>
	<h1>Base de Datos</h1>
	
	<?php
		//Estableciendo conexioncon el motor de BD
		//$Conectado=mysql_connect("localhost","root","");
		$Conectado=mysqli_connect("localhost","root","");
		
		//Creando la consulta para crear una BD si es que no existe
		$Consulta="CREATE DATABASE IF NOT EXISTS ventas;";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Seleccionamos la BD recien creada
		//mysql_select_db("BD_alumno", $Conectado);
		mysqli_select_db($Conectado, "ventas");
		
		//Si la tabla existe se elimina de la BD
		$Consulta="DROP TABLE IF EXISTS articulos;";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Creamos la estructura de la tabla Usuario
		$Consulta="CREATE TABLE usuarios (id_usuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL, nombre VARCHAR(50) DEFAULT NULL, apellido VARCHAR(50) DEFAULT NULL, email VARCHAR(50) DEFAULT NULL, password tinytext DEFAULT NULL, fechaCaptura DATE DEFAULT NULL)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 1 en la tabla usuario
		$Consulta="INSERT INTO usuarios (nombre, apellido, email, password, fechaCaptura) VALUES('christian', 'alonzo', 'cadmin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 2 en la tabla usuario
		$Consulta="INSERT INTO usuarios (nombre, apellido, email, password, fechaCaptura) VALUES('douglas', 'amaya', 'dadmin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Creamos la estructura de la tabla Cliente
		$Consulta="CREATE TABLE clientes (id_cliente INT PRIMARY KEY AUTO_INCREMENT NOT NULL, id_usuario INT NOT NULL, nombre VARCHAR(200) DEFAULT NULL, apellido VARCHAR(200) DEFAULT NULL, direccion VARCHAR(200) DEFAULT NULL, email varchar(200) DEFAULT NULL, telefono varchar(200) DEFAULT NULL, rfc varchar(200) DEFAULT NULL)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 1 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Alfredo', 'Alfaro', 'San salvador', 'alfredoalfaro@gmail.com', '78395010', '154');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 2 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Juan', 'Alas', 'San salvador', 'juanalas@gmail.com', '78395011', '155');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 3 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Luis', 'Rodas', 'San salvador', 'luisrodas@gmail.com', '78395022', '156');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 4 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Samuel', 'Garcia', 'San salvador', 'samuelgarcia@gmail.com', '78345011', '157');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 5 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Oscar', 'Bautista', 'San salvador', 'oscarbautista@gmail.com', '75695011', '158');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 6 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Alonso', 'Garcia', 'San salvador', 'alonsogarcia@gmail.com', '78367011', '159');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 7 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Moises', 'Urbina', 'San salvador', 'moisesurbina@gmail.com', '77895011', '160');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 8 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Bertha', 'Morales', 'San salvador', 'berthamorales@gmail.com', '76595011', '161');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 9 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Rosa', 'Siguenza', 'San salvador', 'rosasiguenza@gmail.com', '75275011', '162');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 10 en la tabla Cliente
		$Consulta="INSERT INTO clientes (id_usuario, nombre, apellido, direccion, email, telefono, rfc) VALUES (1, 'Flor', 'Lacayo', 'San salvador', 'florlacayo@gmail.com', '76279811', '163');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Creamos la estructura de la tabla Categoria
		$Consulta="CREATE TABLE categorias (id_categoria INT PRIMARY KEY AUTO_INCREMENT NOT NULL, id_usuario INT NOT NULL, nombreCategoria varchar(150) DEFAULT NULL, fechaCaptura date DEFAULT NULL)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 1 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'Computadora', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 2 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'RAM', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 3 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'Teclados', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 4 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'Monitor', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 5 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'Mouse', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 6 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'Cable', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 7 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'UPS', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 8 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'Regleta', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 9 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'Laptop', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 10 en la tabla Categoria
		$Consulta="INSERT INTO categorias (id_usuario, nombreCategoria, fechaCaptura) VALUES (1, 'CPU', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		
		//Creamos la estructura de la tabla Imagenes
		$Consulta="CREATE TABLE imagenes (id_imagen INT PRIMARY KEY AUTO_INCREMENT NOT NULL, id_categoria INT NOT NULL, nombre varchar(500) DEFAULT NULL, ruta varchar(500) DEFAULT NULL, fechaSubida date DEFAULT NULL)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 1 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (1, 'computadora.jpg', '../../archivos/computadora.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 2 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (2, 'ram.jpg', '../../archivos/ram.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 3 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (3, 'teclado.jpg', '../../archivos/teclado.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 4 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (4, 'monitor.jpg', '../../archivos/monitor.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 5 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (5, 'muse.jpg', '../../archivos/muse.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 6 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (6, 'cable.jpg', '../../archivos/cable.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 7 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (7, 'ups.jpg', '../../archivos/ups.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 8 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (8, 'regleta.jpg', '../../archivos/regleta.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 9 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (9, 'laptop.jpg', '../../archivos/laptop.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 10 en la tabla Imagenes
		$Consulta="INSERT INTO imagenes (id_categoria, nombre, ruta, fechaSubida) VALUES (10, 'dell.jpg', '../../archivos/dell.jpg', '2021-05-29')";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		
		//Creamos la estructura de la tabla Articulo
		$Consulta="CREATE TABLE articulos (id_producto INT PRIMARY KEY AUTO_INCREMENT NOT NULL, id_categoria INT NOT NULL, id_imagen INT NOT NULL, id_usuario INT NOT NULL, nombre VARCHAR(50) DEFAULT NULL, descripcion VARCHAR(500) DEFAULT NULL, cantidad INT DEFAULT NULL, precio FLOAT DEFAULT NULL, fechaCaptura DATE DEFAULT NULL)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 1 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (1, 1, 1, 'dell optiplex', 'computadora escritorio', 39, 300, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 2 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (2, 2, 1, 'ram hyper', 'memoria ram', 56, 50, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 3 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (3, 3, 1, 'teclado', 'teclado gamer', 26, 25, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 4 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (4, 4, 1, 'monitor', 'monitor samsumg', 35, 128, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 5 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (5, 5, 1, 'mause', 'mause omega', 12, 15, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 6 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (6, 6, 1, 'cable', 'cable utp categoria 5', 12, 100, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 7 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (7, 7, 1, 'ups', 'ups apc', 27, 136, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 8 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (8, 8, 1, 'regleta', 'regleta', 28, 16, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 9 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (9, 9, 1, 'laptop', 'laptop acer', 47, 400, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Insertamos registro 10 en la tabla Articulo
		$Consulta="INSERT INTO articulos (id_categoria, id_imagen, id_usuario, nombre, descripcion, cantidad, precio, fechaCaptura) VALUES (10, 10, 1, 'cpu', 'cpu dell', 54, 300, '2021-05-29');";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		//Creamos la estructura de la tabla Articulo
		$Consulta="CREATE TABLE ventas (id_venta INT PRIMARY KEY AUTO_INCREMENT NOT NULL, id_cliente int DEFAULT NULL, id_producto int DEFAULT NULL,id_usuario int DEFAULT NULL, precio float DEFAULT NULL, fechaCompra date DEFAULT NULL)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		//$EjecutarConsulta=mysql_query($Consulta, $Conectado);
		$EjecutarConsulta=mysqli_query($Conectado, $Consulta);
		
		
		
		//Verificando si la BD se creo.
		if($EjecutarConsulta)
		{
			echo ("La BD y la tabla fueron creados de forma satisfactoria, ejecutar el archivo Index.php<br>");
			
		}
		else
		{
			echo("Surgio problema para crear la BD.<br>");
			echo("El problema es: <br>");
			//echo("Codigo de error: <b>".mysql_errno()."</b><br>");
			echo("Codigo de error: <b>".mysqli_errno($Conectado)."</b><br>");
		}
		
		//mysql_close($Conectado);
		mysqli_close($Conectado);
	?>
	</body>
</html>