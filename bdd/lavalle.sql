-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2018 a las 15:34:15
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

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
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(10) UNSIGNED NOT NULL,
  `sku` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `sku`, `cantidad`, `fecha`) VALUES
(1, 0, 1, '2018-01-08'),
(4, 0, 1, '2018-01-19'),
(6, 987654321, 1, '2018-01-19'),
(7, 987654321, 1, '2018-01-19');

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
  `tipo` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `talle` varchar(4) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `publicado` tinyint(1) NOT NULL,
  `img` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`sku`, `titulo`, `stock`, `precio`, `rubro`, `marca`, `tipo`, `modelo`, `talle`, `destacado`, `publicado`, `img`, `img2`, `img3`) VALUES
('1', 'Moto Yamaha', 1, 100000.000, 'Motos', 'Otros', 'Cubs', 'Cubs', '', 1, 1, 'cat_moto.jpg', 'cat_moto.jpg', 'cat_moto.jpg'),
('10', 'CASCO SHOEI GT-AIR EXPANSE TC-1 L', 1, 12.857, 'Accesorios', 'SHOEI', 'Lingas', '', '', 1, 1, 'articulos.jpg', 'articulos.jpg', 'articulos.jpg'),
('1000000256988', 'CASCO HJC RPHA MAX EVO ZOOMWALT MC5SF M', 300, 13045.452, 'Calzado', 'HJC', 'Pista', 'Pista', '', 0, 1, 'casco_abierto.jpg', '', ''),
('1000009', 'Campera Octane', 1, 19.000, 'Calzado', 'sidi', '', '', '', 0, 1, 'campera_octane.jpg', '', ''),
('11', 'CASCO SHOEI X-SPIRIT3 NEGRO XL', 1, 15.593, 'CASCOS', 'SHOEI', '', '', '', 0, 0, 'articulos.csv', '', ''),
('111', 'Botas Sidi', 1, 1.000, 'Accesorios', 'coocase', 'Enduro - calle', 'Enduro - calle', 'L', 0, 1, 'botas_sidi.jpg', '', ''),
('12', 'CASCO NEXX XR2 PLAIN BLACK MT XL', 2, 6.305, 'Cascos', 'NEXX', '', '', '', 0, 1, 'articulos.csv', '', ''),
('1234', 'Botas Sidi', 0, 1.000, 'Accesorios', 'coocase', 'Enduro - calle', 'Enduro - calle', 'M', 0, 1, 'botas_sidi.jpg', '', ''),
('13', 'CASCO NEXX X.T1 GALAXY RED L', 2, 7.410, 'CASCOS', 'NEXX', '', '', '', 0, 0, 'articulos.csv', '', ''),
('152', 'prueba sku', 1, 1.000, 'Accesorios', 'Otros', 'Otros', 'pro secure', '', 0, 1, 'cat_comunicacion.jpg', '', ''),
('1530', 'prueba nuevo sku', 1, 1.000, 'Accesorios', 'Airoh', 'Alarmas', 'qwe', '', 0, 1, 'cat_comunicacion1.jpg', '', ''),
('154', 'nombre prueba', 1, 1.000, 'Cascos', 'Acerbis', 'Abierto', 're pro', '', 0, 1, 'cascos_moto_cross1.jpg', '', ''),
('2', 'CASCO HJC RPHA MAX EVO ZOOMWALT MC5SF M', 300, 13.045, 'CASCOS', 'HJC', 'Abierto', 'Abierto', 'L', 0, 1, 'articulos.csv', '', ''),
('20', 'CASCO HJC RPHA MAX EVO ZOOMWALT MC5SF M', 300, 13.045, 'CASCOS', 'HJC', 'Abierto', 'Abierto', 'L', 0, 1, 'articulos2.csv', '', ''),
('21', 'Campera Octane', 1, 19.000, 'Indumentaria', 'lg', 'Cerrado', 'Cerrado', 'S', 0, 1, 'articulos2.csv', '', ''),
('22', 'Casco Airoh', 1, 10.000, 'CASCOS', 'moto', 'Pista', 'Pista', 'M', 0, 1, 'articulos2.csv', '', ''),
('23', 'Botas Sidi', 1, 1.000, 'Accesorios', 'coocase', 'Motocross', 'Motocross', 'XL', 0, 1, 'articulos2.csv', '', ''),
('2323', '3 imagenes', 1, 1.000, 'Cascos', 'Acerbis', 'Abierto', 'casco', '', 1, 1, 'imagen_13.jpg', 'imagen_23.jpg', 'imagen_33.jpg'),
('24', 'Guantes Octane', 40, 13.045, 'CASCOS', 'HJC', 'Enduro', 'Enduro', 'XXL', 0, 0, 'articulos2.csv', '', ''),
('25', 'CASCO SHOEI QWEST MT.NEGRO L', 2, 9.055, 'CASCOS', 'SHOEI', 'Touring', 'Touring', 'XS', 0, 0, 'articulos2.csv', '', ''),
('256989', 'Guantes Octane', 40, 13045.452, 'CASCOS', 'HJC', '', '', '', 0, 0, 'guantes_octane.jpg', '', ''),
('26', 'CASCO SHOEI QWEST MT.NEGRO XL', 2, 9.055, 'CASCOS', 'Acerbis', 'Enduro', 'Enduro', 'XXL', 0, 0, 'articulos2.csv', '', ''),
('27', 'CASCO SHOEI NEOTEC BLANCO XL', 2, 12.693, 'CASCOS', 'Forma', 'Touring', 'Touring', 'XS', 0, 0, 'articulos2.csv', '', ''),
('28', 'CASCO SHOEI GT-AIR EXPANSE TC-1 L', 1, 12.857, 'CASCOS', 'SHOEI', '', '', '', 0, 0, 'articulos2.csv', '', ''),
('29', 'CASCO SHOEI X-SPIRIT3 NEGRO XL', 1, 15.593, 'CASCOS', 'SHOEI', '', '', '', 0, 0, 'articulos2.csv', '', ''),
('3', 'Campera Octane', 1, 19.000, 'Indumentaria', 'lg', 'Cerrado', 'Cerrado', 'S', 0, 0, 'articulos.csv', '', ''),
('30', 'CASCO NEXX XR2 PLAIN BLACK MT XL', 2, 6.305, 'CASCOS', 'NEXX', 'Abierto', 'Abierto', 'L', 0, 0, 'articulos2.csv', '', ''),
('31', 'CASCO NEXX X.T1 GALAXY RED L', 2, 7.410, 'CASCOS', 'NEXX', 'Cerrado', 'Cerrado', 'S', 0, 0, 'articulos2.csv', '', ''),
('33', 'prueba tipo', 1, 1.000, 'Motos', 'Acerbis', 'Tech', 'Tech', '', 0, 1, 'motos2.jpg', '', ''),
('4', 'Casco Airoh', 1, 10.000, 'CASCOS', 'moto', 'Pista', 'Pista', 'M', 0, 0, 'articulos.csv', '', ''),
('444555', 'prueba tipo', 1, 1.000, 'Motos', 'Acerbis', 'Cuatriciclos', 'pro', '', 0, 1, 'motos.jpg', '', ''),
('4512048319472', 'CASCO SHOEI QWEST MT.NEGRO L', 2, 9055.137, 'CASCOS', 'SHOEI', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('4512048319489', 'CASCO SHOEI QWEST MT.NEGRO XL', 2, 9055.137, 'CASCOS', 'SHOEI', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('4512048353155', 'CASCO SHOEI NEOTEC BLANCO XL', 2, 12693.603, 'CASCOS', 'SHOEI', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('4512048505226', 'CASCO SHOEI GT-AIR EXPANSE TC-1  L', 1, 12857.740, 'CASCOS', 'SHOEI', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('4512048506360', 'CASCO SHOEI X-SPIRIT3 NEGRO XL', 1, 15593.435, 'CASCOS', 'SHOEI', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('5', 'Botas Sidi', 1, 1.000, 'Accesorios', 'coocase', 'Motocross', 'Motocross', 'XL', 0, 0, 'articulos.csv', '', ''),
('52', 'prueba imagenes', 1, 100000.000, 'Motos', 'Acerbis', 'Cuatri', '', '', 1, 1, 'motos5.jpg', 'motos6.jpg', 'motos7.jpg'),
('555', 'Botas', 1, 1000.000, 'calzado', 'nike', 'bota', 'bota', '43', 0, 1, '', '', ''),
('55548976', 'prueba de precio', 1, 100000.000, 'Cascos', 'Acerbis', 'Abiertos', 'Pro', 'M', 0, 1, 'cascos_moto_cross.jpg', '', ''),
('5600427027724', 'CASCO NEXX XR2 PLAIN BLACK MT XL', 2, 6305.000, 'CASCOS', 'NEXX', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('5600427047678', 'CASCO NEXX X.T1 GALAXY  RED L', 2, 7410.000, 'CASCOS', 'NEXX', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('5600427054546', 'CASCO NEXX X.R2 ACID NEON AMARILLO MT L', 1, 6694.467, 'CASCOS', 'NEXX', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('6', 'Guantes Octane', 40, 13.045, 'CASCOS', 'HJC', 'Enduro', 'Enduro', 'XXL', 0, 0, 'articulos.csv', '', ''),
('7', 'CASCO SHOEI QWEST MT.NEGRO L', 2, 9.055, 'CASCOS', 'SHOEI', 'Touring', 'Touring', 'XS', 0, 0, 'articulos.csv', '', ''),
('753', 'prueba de imagenes', 1, 1.000, 'Cascos', 'Acerbis', 'Abierto', '', '', 1, 1, 'imagen_1.jpg', '', ''),
('789789789', 'prueba rubro', 1, 1.000, 'Motos', 'Ninguna', 'Ninguno', 'Ninguno', '', 0, 1, 'baul_coocase.jpg', '', ''),
('8', 'CASCO SHOEI QWEST MT.NEGRO XL', 2, 9.055, 'CASCOS', 'Acerbis', '', '', '', 0, 0, 'articulos.csv', '', ''),
('8021506', '1', 1, 1.000, 'Motos', 'Arai', 'Intercomunicadores', '', '', 1, 1, 'cascos_moto_cross8.jpg', '', ''),
('80215069', '1', 1, 1.000, 'Motos', 'Arai', 'Intercomunicadores', '', '', 1, 1, 'cascos_moto_cross6.jpg', '', ''),
('8021506956082', 'Bota Troylee Alpinestar Tech 7', 3, 12646.000, 'Botas', 'Alpinestar', 'Tech 7', 'Tech 7', '43', 0, 1, 'botas_sidi.jpg', '', ''),
('8029243241423', 'CASCO AIROH AVIATOR 2.2REP.PHILLIPS VERDE MATT XL', 1, 12865.690, 'CASCOS', 'AIROH', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('8050762725651', 'CASCO MOMO CLASSIC MT.NEGRO SILVER  L', 3, 4458.675, 'CASCOS', 'MOMO', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('8050762725668', 'CASCO MOMO CLASSIC MT.NEGRO SILVER  XL', 1, 4458.675, 'CASCOS', 'MOMO', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('8056518006050', 'CASCO ORIGINE ST N125 YANKEE ROJO L', 2, 3402.900, 'CASCOS', 'ORIGINE', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('8056518008078', 'CASCO ORIGINE ST N125 VOID NEGRO M', 1, 3402.900, 'CASCOS', 'ORIGINE', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('8056518008085', 'CASCO ORIGINE ST N125 VOID NEGRO L', 2, 3402.900, 'CASCOS', 'ORIGINE', '', '', '', 0, 0, 'casco_abierto.jpg', '', ''),
('9', 'CASCO SHOEI NEOTEC BLANCO XL', 2, 12.693, 'CASCOS', 'Forma', '', '', '', 0, 0, 'articulos.csv', '', ''),
('987654321', 'Baul Coocase', 1, 1000.000, 'Cascos', 'Coocase', '', '', '', 0, 0, 'baul_coocase.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `id` int(10) UNSIGNED NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suscripcion`
--

INSERT INTO `suscripcion` (`id`, `correo`) VALUES
(1, 'pablo1_garcia@hotmail.com');

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
(1, 'admin', '', 'admin@lavalle.com.ar', 'lavalle123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`sku`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
