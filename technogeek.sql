-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2017 a las 04:57:33
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `technogeek`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `usuario`, `password`) VALUES
(1, 'administrador', '$2y$10$5ZlWwgA/CEnIN8lmsBKWmON1MPLLlqN3wI1W91kSnjHghOQOhmymO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'acccesorios'),
(2, 'celulares'),
(3, 'computadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_provedor` int(11) DEFAULT NULL,
  `id_productos` int(11) DEFAULT NULL,
  `fecha_comprar` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`estado`) VALUES
('activo'),
('inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fpagos`
--

CREATE TABLE `fpagos` (
  `forma` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fpagos`
--

INSERT INTO `fpagos` (`forma`) VALUES
('contraentrega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `cod_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `proveedor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`cod_marca`, `nombre`, `proveedor`) VALUES
(1, 'Alcatel', 5),
(2, 'Apple', 6),
(3, 'Samsung', 1),
(4, 'Samsung', 2),
(5, 'LG', 4),
(6, 'Huawei', 3),
(7, 'Apple', 7),
(8, 'Apple', 8),
(9, 'HP-Hewlett-Packard', 9),
(10, 'Asus', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `marcas` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `valor` decimal(19,4) DEFAULT NULL,
  `estado` varchar(30) NOT NULL,
  `Imagen` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) DEFAULT NULL,
  `producto_proveedor` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `producto_proveedor`) VALUES
(1, 'PCS & PRINTERS LTDA', 'samsung Celulares'),
(2, 'COMPU GREIFF S.A.S', 'samsung Celulares'),
(3, 'HUAWEI TECHNOLOGIES CO. LTDA.', 'Huawei Celulares'),
(4, 'LG Corp.', 'LG celulares'),
(5, 'ALCATEL LUCENT DE COLOMBIA S.A.', 'Alcatel Celulares'),
(6, 'Apple Inc. ', 'Iphone'),
(7, 'Apple Inc. ', 'mac'),
(8, 'Apple Inc. ', 'Ipad'),
(9, 'HP Colombia', 'computadores'),
(10, 'ASUSTeK Computer Inc. ', 'computadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `identificacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `correo`, `nombre`, `apellido`, `identificacion`, `telefono`, `direccion`, `genero`) VALUES
(3, 'Hola', '$2y$10$VdWZHLAgCi3uj1UlV/J7FO/v9GL9aN8J/eouGty0Li4w3aWAesQrC', '5445456', 'asdsdfsd', 's', 'sad', 'asd', 'asd', 'asdsadsad'),
(4, 'john7', '$2y$10$q.L2WpcRM7uTXeEd2K7pQu5t0Rv8Sf09e1QKYg2BrEc5BO8ISlGcm', 'albertvergara@gmail.com', 'john', 'vergara', '123456789', '87894561', 'bsahgd', 'm'),
(5, 'jaibero', '$2y$10$hBbgLki.PJv3etbIQOwtH.DhKlqq.2AcBkEve38n49x1kn44VshSG', 'jaiber@gmail.com', 'jaiber', 'vargas', '103568947', '3125649874', 'san pacho', 'm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `id_productos` int(11) DEFAULT NULL,
  `valor` decimal(19,4) DEFAULT NULL,
  `fpago` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cod_marca` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD KEY `id_provedor` (`id_provedor`),
  ADD KEY `id_productos` (`id_productos`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estado`);

--
-- Indices de la tabla `fpagos`
--
ALTER TABLE `fpagos`
  ADD PRIMARY KEY (`forma`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`cod_marca`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `marcas` (`marcas`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`),
  ADD KEY `id_productos` (`id_productos`),
  ADD KEY `fpago` (`fpago`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `cod_marca` (`cod_marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `cod_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
