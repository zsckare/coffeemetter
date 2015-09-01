-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2015 a las 02:55:26
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coffeemetter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cup`
--

CREATE TABLE IF NOT EXISTS `cup` (
  `id_cup` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cup`
--

INSERT INTO `cup` (`id_cup`, `fecha`, `hora`, `timestamp`, `id_user`) VALUES
(15, '2015-08-30', '20:20:57', '2015-08-31 01:09:57', 7),
(16, '2015-08-30', '20:20:36', '2015-08-31 01:15:36', 7),
(17, '2015-08-30', '20:20:19', '2015-08-31 01:16:19', 7),
(18, '2015-08-30', '20:20:13', '2015-08-31 01:27:13', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cup`
--
ALTER TABLE `cup`
  ADD PRIMARY KEY (`id_cup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cup`
--
ALTER TABLE `cup`
  MODIFY `id_cup` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
