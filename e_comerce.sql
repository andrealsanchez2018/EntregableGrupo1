-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2020 a las 04:12:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `e_comerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idEstado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombreCategoria`, `idEstado`) VALUES
(1, 'NIÑOS', 1),
(2, 'MUJER', 1),
(3, 'HOMBRE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(11) NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idEstado`, `estado`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imgProducto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idSubCategoria` int(11) DEFAULT NULL,
  `idEstado` int(11) DEFAULT NULL,
  `idUsuario_cre` int(11) NOT NULL,
  `idUsuario_mod` int(11) NOT NULL,
  `fecha_mod` datetime DEFAULT current_timestamp(),
  `fecha_cre` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `precio`, `imgProducto`, `descripcion`, `cantidad`, `idCategoria`, `idSubCategoria`, `idEstado`, `idUsuario_cre`, `idUsuario_mod`, `fecha_mod`, `fecha_cre`) VALUES
(2, 'Camisa Terracota', 70000, 'https://s.hdnux.com/photos/01/11/03/76/19152828/3/480x480.jpg', 'Material polyester', 3, 3, 2, 1, 1, 1, '2020-05-03 18:20:17', '2020-05-03 18:20:17'),
(3, 'Pantalon ajustable', 80000, 'https://d3dz4rogqkqh6r.cloudfront.net/uploads/files/2019/08/yimg_dVLM3t-480x480.jpg', 'Pantalon caqui bebé', 6, 1, 1, 2, 2, 1, '2020-05-03 18:58:42', '2020-05-03 18:58:42'),
(4, 'Zapato mocasin cuero', 200000, 'https://www.tiendasjosh.com/wp-content/uploads/2020/04/TENMA02-CON-4-480x480.jpg', 'Zapato color envejecido', 7, 3, 3, 1, 1, 1, '2020-05-03 19:03:22', '2020-05-03 19:03:22'),
(5, 'Vestido arcoiris', 100000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSFEuK89RNXqxO8ZphJu-1mfMCl7miwgc0-_eVcHXNoAE97VGXD&usqp=CAU', 'Material algodón', 9, 1, 2, 1, 1, 1, '2020-05-04 11:41:27', '2020-05-04 11:41:27'),
(8, 'Sweter amaillo', 120000, 'https://hips.hearstapps.com/ellees.h-cdn.co/assets/15/37/480x480/480x480-5-11e6-99dd-239482788342tendencias-fular-panuelo-estampados-americana-6426420-1-esl-es-americana-jpg.jpg?resize=480:*', '', 5, 2, 2, 1, 1, 1, '2020-05-04 18:19:07', '2020-05-04 18:19:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `rol` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rol`) VALUES
(1, 'Usuario'),
(2, 'Admin'),
(3, 'SuperAdmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `idSubCategoria` int(11) NOT NULL,
  `nombreSubCategoria` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idEstado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`idSubCategoria`, `nombreSubCategoria`, `idEstado`) VALUES
(1, 'pantalon', 1),
(2, 'camisa', 1),
(3, 'zapatos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idRol` int(11) DEFAULT NULL,
  `idEstado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `correo`, `password`, `idRol`, `idEstado`) VALUES
(1, 'Cesar Linares', 'superadmin@gmail.com', '1234', 3, 1),
(2, 'Laura Dominguez', 'admin@gmail.com', '1234', 2, 1),
(3, 'Sara Casas', 'usuario@gmail.com', '1234', 1, 1),
(4, 'Kamilo', 'kamilo@gmail.com', '1234', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`),
  ADD KEY `fk_estado_cat` (`idEstado`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `fk_categoria` (`idCategoria`),
  ADD KEY `fk_subCategoria` (`idSubCategoria`),
  ADD KEY `fk_estado_prod` (`idEstado`),
  ADD KEY `fk_creador` (`idUsuario_cre`),
  ADD KEY `fk_modificador` (`idUsuario_mod`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`idSubCategoria`),
  ADD KEY `fk_estado_subcat` (`idEstado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_estado` (`idEstado`),
  ADD KEY `fk_rol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `idSubCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `fk_estado_cat` FOREIGN KEY (`idEstado`) REFERENCES `estados` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_creador` FOREIGN KEY (`idUsuario_cre`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_estado_prod` FOREIGN KEY (`idEstado`) REFERENCES `estados` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_modificador` FOREIGN KEY (`IdUsuario_mod`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_subCategoria` FOREIGN KEY (`idSubCategoria`) REFERENCES `subcategorias` (`idSubCategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `fk_estado_subcat` FOREIGN KEY (`idEstado`) REFERENCES `estados` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`idEstado`) REFERENCES `estados` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
