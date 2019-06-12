-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2019 a las 08:34:41
-- Versión del servidor: 10.3.14-MariaDB-1:10.3.14+maria~bionic
-- Versión de PHP: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacion3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion3`
--

CREATE TABLE `seccion3` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `telefono` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion3`
--

INSERT INTO `seccion3` (`id`, `nombres`, `apellidos`, `telefono`) VALUES
(1, 'uno', 'uno', '111111'),
(2, 'dos', 'dos', '2222222'),
(3, 'tres', 'qwsdqwefeqwf', '343534');

--
-- Indices de la tabla `seccion3`
--
ALTER TABLE `seccion3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de la tabla `seccion3`
--
ALTER TABLE `seccion3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

