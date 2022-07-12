-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 23:38:11
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centroescolarbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `num_lista` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `genero` char(1) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `num_lista`, `nombres`, `apellidos`, `genero`, `id_grado`, `id_seccion`) VALUES
(1, 25, 'Irvin Adrian', 'morales mejia', 'M', 2, 1),
(2, 13, 'Juan Carlos', 'Mejia Duran', 'M', 18, 2),
(3, 13, 'Irvin Adrian', 'Mejia Duran', 'M', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ciclo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `nombre`, `ciclo`) VALUES
(1, 'Primer Grado - Ciclo 1', 'I'),
(2, 'Primer Grado - Ciclo 2', 'II'),
(3, 'Segundo Grado - Cliclo 1', 'I'),
(4, 'Segundo Grado - Cliclo 2', 'II'),
(5, 'Tercer Grado - Cliclo 1', 'I'),
(6, 'Tercer Grado - Cliclo 2', 'II'),
(7, 'Cuarto Grado - Cliclo 1', 'I'),
(8, 'Cuarto Grado - Cliclo 2', 'II'),
(9, 'Quinto Grado - Cliclo 1', 'I'),
(10, 'Quinto Grado - Cliclo 2', 'II'),
(11, 'Sexto Grado - Cliclo 1', 'I'),
(12, 'Sexto Grado - Cliclo 2', 'II'),
(13, 'Séptimo Grado - Cliclo 1', 'I'),
(14, 'Séptimo Grado - Cliclo 2', 'II'),
(15, 'Octavo Grado - Cliclo 1', 'I'),
(16, 'Octavo Grado - Cliclo 2', 'II'),
(17, 'Noveno Grado - Cliclo 1', 'I'),
(18, 'Noveno Grado - Cliclo 2', 'II'),
(19, 'Primer año de Bachillerato - Cliclo 1', 'I'),
(20, 'Primer año de Bachillerato - Cliclo 2', 'II'),
(21, 'Segundo año de Bachillerato - Cliclo 1', 'I'),
(22, 'Segundo año de Bachillerato - Cliclo 2', 'II'),
(23, 'Tercer año de Bachillerato - Cliclo 1', 'I'),
(24, 'Tercer año de Bachillerato - Cliclo 2', 'II'),
(25, 'Bachillerato General - Cliclo 1', 'I'),
(26, 'Bachillerato General - Cliclo 2', 'II');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `num_evaluaciones` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `num_evaluaciones`, `id_grado`) VALUES
(1, 'Ciencia Salud y Medio Ambiente', 4, 1),
(2, 'Lenguaje', 4, 1),
(3, 'Lenguaje', 4, 2),
(4, 'Ciencia salud y medio ambiente', 4, 2),
(5, 'Estudios Sociales', 4, 1),
(6, 'Estudio Sociales', 4, 2),
(7, 'Matematicas', 4, 1),
(8, 'Matematica', 4, 2),
(9, 'ciencia salud y medio ambiente', 4, 3),
(10, 'ciencia salud y medio ambiente', 4, 4),
(11, 'Lenguaje', 4, 3),
(12, 'Lenguaje', 4, 4),
(13, 'Estudio Sociales', 4, 3),
(14, 'Estudios Sociales', 4, 4),
(15, 'Matematica', 4, 3),
(16, 'Matematicas', 4, 4),
(17, 'Ciencia salud y medio ambiente', 4, 5),
(18, 'Ciencia salud y medio ambiente', 4, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `nota` decimal(10,2) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `nota`, `observaciones`, `id_alumno`, `id_materia`) VALUES
(5, '0.00', '', 1, 1),
(6, '0.00', '', 1, 1),
(7, '0.00', '', 1, 1),
(8, '0.00', '', 1, 1),
(9, '10.00', 'Reprobado', 1, 2),
(10, '4.00', 'Reprobado', 1, 2),
(11, '5.00', 'Reprobado', 1, 2),
(12, '3.00', 'Reprobado', 1, 2),
(13, '5.00', 'APROBADO', 2, 2),
(14, '9.00', 'APROBADO', 2, 2),
(15, '5.00', 'APROBADO', 2, 2),
(16, '7.00', 'APROBADO', 2, 2),
(17, '10.00', 'APROBADO', 3, 3),
(18, '10.00', 'APROBADO', 3, 3),
(19, '5.00', 'APROBADO', 3, 3),
(20, '10.00', 'APROBADO', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `nombre` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `nombre`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nombre`, `rol`) VALUES
(1, 'admin', 'admin123', 'Lennin', 'Administrador'),
(2, 'profesor', 'profe123', 'Jose', 'Profesor'),
(3, 'maria', 'maria123', 'Maria', 'Padre');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_alumnos_idgrado_idx` (`id_grado`),
  ADD KEY `FK_alumnos_idseccion_idx` (`id_seccion`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_grado_materias_idx` (`id_grado`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_notas_id_alumno_idx` (`id_alumno`),
  ADD KEY `FK_notas_id_materia_idx` (`id_materia`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `FK_alumnos_idgrado` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_alumnos_idseccion` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `FK_id_grado_materias` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `FK_notas_id_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_notas_id_materia` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
