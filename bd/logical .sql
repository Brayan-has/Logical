-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2023 a las 01:30:06
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logical`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE DATABASE logical;

USE logical;

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `empresa` varchar(150) DEFAULT NULL,
  `hora_entrada` varchar(150) DEFAULT NULL,
  `hora_salida` varchar(150) DEFAULT NULL,
  `jornada` varchar(100) NOT NULL,
  `area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `id_empleado`, `empresa`, `hora_entrada`, `hora_salida`, `jornada`, `area`) VALUES
(1, 1, 'Exito', '9:00 am', '4:30 pm', 'Diurno', 'Desarrollo'),
(2, 2, 'Agaval', '12:00 am', '4:30 pm', 'Diurno', 'Almacen'),
(4, 4, 'Exito', '11:00 am', '12: 00 pm', 'Diurna', 'Back-end'),
(5, 5, 'Exito', '10: 00 pm', '6:30 am', 'Nocturno', 'Bodega'),
(6, 6, 'Agaval', '9:00 am', '4:30 pm', 'Diurno', 'Venta'),
(7, 7, 'Agaval', '6: 00 am', '1: 00 pm', 'Diurno', 'Venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `cargo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `cargo`) VALUES
(1, 'Supervisor'),
(2, 'Administrador'),
(4, 'Operario'),
(5, 'Desarrollador'),
(7, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `nombre`, `mensaje`, `fecha`) VALUES
(17, 'Aura Milena ', '', '2023-10-28 23:23:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contrasena` varbinary(80) NOT NULL,
  `cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `apellido`, `cedula`, `fecha_nacimiento`, `telefono`, `correo`, `contrasena`, `cargo`) VALUES
(1, 'Brayan Stiven', ' Gomez', 321654, '2000-10-05', 321654987, 'Brayan@gmail.com', 0x3230326362393632616335393037356239363462303731353264323334623730, 'Desarrollador'),
(2, 'Duvian Alex', '  Hidalgo Murillo', 321654, '0000-00-00', 321654987, 'Duvian@gmail.com', 0x3230326362393632616335393037356239363462303731353264323334623730, 'Desarrollador'),
(4, 'Samuel', '        Humanes', 5438789, '1998-09-22', 34265454, 'Samuel@gmail.com', 0x3230326362393632616335393037356239363462303731353264323334623730, 'Operario'),
(5, 'Brayan Stiven', '     Gomez', 321654, '2000-10-05', 3216546, 'Brayan@gmail.com', 0x3230326362393632616335393037356239363462303731353264323334623730, 'Desarrollador'),
(6, 'Camilo', ' Humanes', 321654, '2020-10-22', 321654987, 'Camilo@gmail.com', 0x3061613062366233323037663062333833393338316462313936323537346132, 'Desarrollador'),
(7, 'jhon', 'Loaiza', 36547, '1978-06-04', 321654987, 'g.nayarb112@gmail.com', 0x3230326362393632616335393037356239363462303731353264323334623730, 'Administrador'),
(8, 'Hernan', 'Herrera', 654987, '0000-00-00', 321654, 'Hernan@gmail.com', 0x3230326362393632616335393037356239363462303731353264323334623730, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `horario_semana` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `horario_semana`) VALUES
(1, '6:00 am; 2:40 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salario`
--

CREATE TABLE `salario` (
  `id_salario` int(11) NOT NULL,
  `horas_cantidad` int(11) DEFAULT NULL,
  `horas_valor` double DEFAULT NULL,
  `salario` decimal(7,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `salario`
--

INSERT INTO `salario` (`id_salario`, `horas_cantidad`, `horas_valor`, `salario`) VALUES
(1, 2, 5800, 1160.000),
(2, 3, 4.936, 2200.000),
(4, 1, 4.85, 1.000),
(7, 3, 4.5, 2200.000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `salario`
--
ALTER TABLE `salario`
  ADD PRIMARY KEY (`id_salario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `salario`
--
ALTER TABLE `salario`
  MODIFY `id_salario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_asistencia` FOREIGN KEY (`id_asistencia`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `fk_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_horario` FOREIGN KEY (`id_horario`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE;

--
-- Filtros para la tabla `salario`
--
ALTER TABLE `salario`
  ADD CONSTRAINT `fk_salario` FOREIGN KEY (`id_salario`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
