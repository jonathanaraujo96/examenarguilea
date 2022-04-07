-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2022 a las 19:58:41
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `exaphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `id_fonda` varchar(10) NOT NULL,
  `nomPlatillo` varchar(250) NOT NULL,
  `descripcion` longtext NOT NULL,
  `ingredientes` longtext NOT NULL,
  `costo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `id_fonda`, `nomPlatillo`, `descripcion`, `ingredientes`, `costo`) VALUES
(2, '2', 'kk1', 'jj1', 'gg1', '54'),
(3, '2', 'test menu2', 'desc menu 2', 'ingredientes menu 2', '22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `ne` varchar(50) NOT NULL,
  `ni` varchar(50) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `edo` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `calle`, `ne`, `ni`, `cp`, `colonia`, `municipio`, `ciudad`, `edo`, `pais`) VALUES
(1, 'test nombre', 'test calle', 'test ne', 'test ni', 'test cp', 'test colonia', 'test municipio', 'test ciudad', 'test estado', 'test pais'),
(2, 'test nombre 2', 'test calle 2', 'test ne 2', 'test ni 2', 'test cp 2', 'test colonia 2', 'test municipio 2', 'test ciudad 2', 'test estado 2', 'test pais 2'),
(3, 'test nombre 3', 'test calle 3', 'test ne 3', 'test ni 3', '76857', 'Las Torres', 'Toluca', 'Toluca de Lerdo', 'México', 'México'),
(4, 'test nombre 4', 'test calle 4', 'test ne 4', 'test ni 4', '50980', 'Potrero de San Diego', 'Villa Victoria', 'test ciudad 4', 'México', 'México');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
