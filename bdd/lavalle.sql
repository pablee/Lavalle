-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2017 a las 02:50:33
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lavalle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `sku` varchar(15) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `precio` float(8,3) NOT NULL,
  `rubro` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`sku`, `titulo`, `stock`, `precio`, `rubro`, `marca`, `destacado`, `img`) VALUES
('000009', 'Campera Octane', 1, 19.000, 'mecanica', 'lg', 1, 'campera_octane.jpg'),
('0987654321', 'Baul Coocase', 1, 1000.000, 'Cascos', 'Coocase', 1, 'baul_coocase.jpg'),
('1000000256988', 'CASCO HJC RPHA MAX EVO ZOOMWALT MC5SF M', 300, 13045.452, 'CASCOS', 'HJC', 0, 'casco_abierto.jpg'),
('111', 'Casco Airoh', 1, 10.000, 'CASCOS', 'moto', 1, 'casco_airoh.png'),
('1234', 'Botas Sidi', 1, 1.000, 'baul', 'coocase', 1, 'botas_sidi.jpg'),
('256989', 'Guantes Octane', 40, 13045.452, 'CASCOS', 'HJC', 1, 'guantes_octane.jpg'),
('4512048319472', 'CASCO SHOEI QWEST MT.NEGRO L', 2, 9055.137, 'CASCOS', 'SHOEI', 0, 'casco_abierto.jpg'),
('4512048319489', 'CASCO SHOEI QWEST MT.NEGRO XL', 2, 9055.137, 'CASCOS', 'SHOEI', 0, 'casco_abierto.jpg'),
('4512048353155', 'CASCO SHOEI NEOTEC BLANCO XL', 2, 12693.603, 'CASCOS', 'SHOEI', 0, 'casco_abierto.jpg'),
('4512048505226', 'CASCO SHOEI GT-AIR EXPANSE TC-1  L', 1, 12857.740, 'CASCOS', 'SHOEI', 0, 'casco_abierto.jpg'),
('4512048506360', 'CASCO SHOEI X-SPIRIT3 NEGRO XL', 1, 15593.435, 'CASCOS', 'SHOEI', 0, 'casco_abierto.jpg'),
('5600427027724', 'CASCO NEXX XR2 PLAIN BLACK MT XL', 2, 6305.000, 'CASCOS', 'NEXX', 0, 'casco_abierto.jpg'),
('5600427047678', 'CASCO NEXX X.T1 GALAXY  RED L', 2, 7410.000, 'CASCOS', 'NEXX', 0, 'casco_abierto.jpg'),
('5600427054546', 'CASCO NEXX X.R2 ACID NEON AMARILLO MT L', 1, 6694.467, 'CASCOS', 'NEXX', 0, 'casco_abierto.jpg'),
('8029243241423', 'CASCO AIROH AVIATOR 2.2REP.PHILLIPS VERDE MATT XL', 1, 12865.690, 'CASCOS', 'AIROH', 0, 'casco_abierto.jpg'),
('8050762725651', 'CASCO MOMO CLASSIC MT.NEGRO SILVER  L', 3, 4458.675, 'CASCOS', 'MOMO', 0, 'casco_abierto.jpg'),
('8050762725668', 'CASCO MOMO CLASSIC MT.NEGRO SILVER  XL', 1, 4458.675, 'CASCOS', 'MOMO', 0, 'casco_abierto.jpg'),
('8056518006050', 'CASCO ORIGINE ST N125 YANKEE ROJO L', 2, 3402.900, 'CASCOS', 'ORIGINE', 0, 'casco_abierto.jpg'),
('8056518008078', 'CASCO ORIGINE ST N125 VOID NEGRO M', 1, 3402.900, 'CASCOS', 'ORIGINE', 0, 'casco_abierto.jpg'),
('8056518008085', 'CASCO ORIGINE ST N125 VOID NEGRO L', 2, 3402.900, 'CASCOS', 'ORIGINE', 0, 'casco_abierto.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `mail`, `password`) VALUES
(1, 'pablo', 'garcia', 'pgarcia@grimoldi.com', 'lavalle123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`sku`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
