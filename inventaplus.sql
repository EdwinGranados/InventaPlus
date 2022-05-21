-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-05-2022 a las 18:12:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventaplus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `IdCliente` int(11) NOT NULL,
  `NombreCliente` mediumtext CHARACTER SET utf8 NOT NULL,
  `NIT` int(10) NOT NULL,
  `Correo` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `IdFactura` int(11) NOT NULL,
  `Telefono` int(12) DEFAULT NULL,
  `dirección` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `IdDetalle` int(11) NOT NULL,
  `IdVenta` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  `TotalProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `LOGID` int(11) NOT NULL,
  `LOGUsuario` int(11) NOT NULL,
  `LOGVenta` int(11) DEFAULT NULL,
  `LOGDescripcion` varchar(500) DEFAULT NULL,
  `LogFecha` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProducto` int(11) NOT NULL,
  `NombreProducto` mediumtext CHARACTER SET utf8 NOT NULL,
  `Descripcion` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  `Valor` int(20) NOT NULL,
  `Cantidad` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Usuario` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Contraseña` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Activo` bit(1) NOT NULL,
  `FechaCreacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Usuario`, `Contraseña`, `Activo`, `FechaCreacion`) VALUES
(1, 'Desarrollo', 'Desarrollo', b'1', '2022-05-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Idventa` int(11) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `IdDetalleVenta` int(11) NOT NULL,
  `TotalVenta` int(11) NOT NULL,
  `FechaVenta` date NOT NULL DEFAULT current_timestamp(),
  `SubTotalVenta` int(11) NOT NULL,
  `Descuentos` int(11) NOT NULL DEFAULT 0,
  `Estado` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=registrado,1=gestionado,2=entregado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD KEY `FK_VentaDetalleVenta` (`IdVenta`),
  ADD KEY `FK_ProductosDetalleVenta` (`IdProducto`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`LOGID`),
  ADD KEY `FK_LOGUSUARIO_USURIO` (`LOGUsuario`),
  ADD KEY `FK_LOGVenta_Ventas` (`LOGVenta`) USING BTREE;

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Idventa`),
  ADD KEY `FK_ClienteVenta` (`IdCliente`),
  ADD KEY `FKVentaDetalleVenta` (`IdDetalleVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Idventa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD CONSTRAINT `FK_ProductosDetalleVenta` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`),
  ADD CONSTRAINT `FK_VentaDetalleVenta` FOREIGN KEY (`IdVenta`) REFERENCES `ventas` (`Idventa`);

--
-- Filtros para la tabla `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `FK_LOGUSUARIO_USURIO` FOREIGN KEY (`LOGUsuario`) REFERENCES `usuarios` (`IdUsuario`),
  ADD CONSTRAINT `FK_LOGVenta_Ventas` FOREIGN KEY (`LOGVenta`) REFERENCES `ventas` (`Idventa`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `FK_ClienteVenta` FOREIGN KEY (`IdCliente`) REFERENCES `clientes` (`IdCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
