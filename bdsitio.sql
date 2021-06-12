-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2021 a las 23:11:21
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compraventa`
--

CREATE TABLE `compraventa` (
  `idcompraVenta` int(11) NOT NULL,
  `fechaCompraVenta` datetime NOT NULL,
  `tipoPago` tinyint(1) NOT NULL,
  `tipoOperacion` tinyint(1) NOT NULL,
  `conceptoCompraVenta` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estadoCompraVenta` bit(1) NOT NULL,
  `usuarioCreacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `IdentificacionTercero` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `usuarioModificacion` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoporcompraventa`
--

CREATE TABLE `productoporcompraventa` (
  `IdProductosPorCompraVentacol` bigint(11) NOT NULL,
  `CodigoProducto` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `IdCompraVenta` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `EstadoProductosPorCompraVenta` bit(1) DEFAULT NULL,
  `UsuarioCreacion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FechaCreacion` datetime DEFAULT NULL,
  `UsuarioModificacion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FechaModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigoProducto` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombreProducto` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionProducto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `unidadMedida` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `marcaProducto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precioActual` float NOT NULL,
  `cantidadActual` int(11) NOT NULL,
  `usuarioCreacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `usuarioModificacion` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaModificacion` datetime DEFAULT NULL,
  `estadoProducto` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigoProducto`, `nombreProducto`, `descripcionProducto`, `unidadMedida`, `marcaProducto`, `precioActual`, `cantidadActual`, `usuarioCreacion`, `fechaCreacion`, `usuarioModificacion`, `fechaModificacion`, `estadoProducto`) VALUES
('4654', 'mango', 'mango', '12345', '34', 3000, 0, 'System', '2021-06-03 20:30:30', NULL, NULL, b'1'),
('89838374', 'manzana', 'manzana', '2323', '12', 8000, 0, 'System', '2021-06-03 20:31:40', NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceros`
--

CREATE TABLE `terceros` (
  `identificacionTercero` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombreTercero` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emailTercero` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celularTercero` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefonoTercero` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccionTercero` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcionTercero` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estadoTercero` bit(1) NOT NULL,
  `usuarioCreacion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `esCliente` bit(1) NOT NULL,
  `esProveedor` bit(1) NOT NULL,
  `contactoTercero` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL,
  `usuarioModificacion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `terceros`
--

INSERT INTO `terceros` (`identificacionTercero`, `nombreTercero`, `emailTercero`, `celularTercero`, `telefonoTercero`, `direccionTercero`, `descripcionTercero`, `estadoTercero`, `usuarioCreacion`, `esCliente`, `esProveedor`, `contactoTercero`, `fechaCreacion`, `usuarioModificacion`, `fechaModificacion`) VALUES
('1233', 'felipe', 'pipe@gmail.com', '332', '6754', 'cedsa', 'piid', b'1', 'System', b'0', b'0', NULL, '2021-06-04 19:44:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombreUsuario` varchar(20) NOT NULL,
  `primerNombre` varchar(30) NOT NULL,
  `segundoNombre` varchar(30) DEFAULT NULL,
  `primerApellido` varchar(30) NOT NULL,
  `segundoApellido` varchar(30) DEFAULT NULL,
  `email` varchar(70) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `indetificacion` varchar(15) NOT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `perfilUsuario` int(11) NOT NULL,
  `passUsuario` varchar(45) NOT NULL,
  `usuarioCreacion` varchar(15) NOT NULL,
  `fechaCreacion` datetime NOT NULL,
  `usuarioModificacion` varchar(15) DEFAULT NULL,
  `fechaModificacion` datetime DEFAULT NULL,
  `estadoUsuario` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombreUsuario`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `email`, `celular`, `indetificacion`, `direccion`, `perfilUsuario`, `passUsuario`, `usuarioCreacion`, `fechaCreacion`, `usuarioModificacion`, `fechaModificacion`, `estadoUsuario`) VALUES
('daniel221', 'juan', 'david', 'lopez', 'correa', 'lopez@gmail.com', '1233', '1212', 'jnhjknsad', 3, 'cXh1Ni9tSll6dWZWU2hOdGZOMFdBZz09', 'System', '2021-06-04 21:03:31', NULL, NULL, b'1'),
('jorge652', 'jorge', 'daniel', 'lopez', 'lopez', 'lopez@gmail.com', '216161', '6526252', 'cggfag12', 2, 'bE9EL2tNMi9Cb1YrNDlYODNFdlVPdz09', 'System', '2021-06-08 13:28:10', NULL, NULL, b'1'),
('juan1234', 'juan', 'david', 'lopez', 'correa', 'lopez@gmail.com', '77363', '12121', 'calle 1', 1, 'ckNTUjZwM1FuVklwQksxejhvK21hUT09', 'System', '2021-05-31 19:36:05', NULL, NULL, b'1'),
('juan2530', 'juan', 'david', 'lopez', 'correa', 'juanda_21@gmail.com', '123321', '123321', 'calle50', 4, 'ckNTUjZwM1FuVklwQksxejhvK21hUT09', 'System', '2021-06-10 23:42:25', NULL, NULL, b'1'),
('piri', 'juan', 'david', 'lopez', 'correa', 'lopez@gmail.com', '97987', '98798', 'calle', 2, 'dExLbG5YYTI4cm5Hc2IwRjVLNHVUQT09', 'System', '2021-06-01 14:17:35', NULL, NULL, b'1'),
('prueba', 'Juan ', 'David', 'Lopez ', 'Correa', 'david@gmail.com', '313452454', '517625635', 'el triunfo', 1, '1234', 'Usuario', '0000-00-00 00:00:00', NULL, NULL, b'1'),
('sandra541', 'sandra', 'felipe', 'lopez', 'correa', 'kjkjn@gmail.com', '1123213', '673623', 'calle 20', 2, 'aXV2RXM5RXdXNFVOeWNJT0hpQWh4Zz09', 'System', '2021-06-08 13:29:37', NULL, NULL, b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compraventa`
--
ALTER TABLE `compraventa`
  ADD PRIMARY KEY (`idcompraVenta`),
  ADD KEY `indx_fecha_compraVenta` (`fechaCompraVenta`),
  ADD KEY `fk_compraVenta_Terceros1_idx` (`IdentificacionTercero`);

--
-- Indices de la tabla `productoporcompraventa`
--
ALTER TABLE `productoporcompraventa`
  ADD PRIMARY KEY (`IdProductosPorCompraVentacol`),
  ADD KEY `fk_Productos_has_compraVenta_compraVenta1_idx` (`IdCompraVenta`),
  ADD KEY `fk_Productos_has_compraVenta_Productos_idx` (`CodigoProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigoProducto`),
  ADD KEY `indx_nombre_producto` (`nombreProducto`);

--
-- Indices de la tabla `terceros`
--
ALTER TABLE `terceros`
  ADD PRIMARY KEY (`identificacionTercero`),
  ADD KEY `indx_nombre_tercero` (`nombreTercero`),
  ADD KEY `indx_descripcion_tercero` (`descripcionTercero`),
  ADD KEY `indx_contacto_tercero` (`contactoTercero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombreUsuario`),
  ADD KEY `indx_indetificacion_usuario` (`indetificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compraventa`
--
ALTER TABLE `compraventa`
  MODIFY `idcompraVenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productoporcompraventa`
--
ALTER TABLE `productoporcompraventa`
  MODIFY `IdProductosPorCompraVentacol` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compraventa`
--
ALTER TABLE `compraventa`
  ADD CONSTRAINT `fk_compraVenta_Terceros1` FOREIGN KEY (`IdentificacionTercero`) REFERENCES `terceros` (`identificacionTercero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productoporcompraventa`
--
ALTER TABLE `productoporcompraventa`
  ADD CONSTRAINT `fk_Productos_has_compraVenta_Productos` FOREIGN KEY (`CodigoProducto`) REFERENCES `productos` (`codigoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Productos_has_compraVenta_compraVenta1` FOREIGN KEY (`IdCompraVenta`) REFERENCES `compraventa` (`idcompraVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
