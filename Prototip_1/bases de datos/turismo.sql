-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-01-2015 a las 03:56:47
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atractivosturisticos`
--

CREATE TABLE IF NOT EXISTS `atractivosturisticos` (
`idAtractivosTuristicos` int(10) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `TipoAtractivo` varchar(40) NOT NULL,
  `idPadre` varchar(10) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Superficie` varchar(20) NOT NULL,
  `Extencion` varchar(20) NOT NULL,
  `Altitud` varchar(20) NOT NULL,
  `Fundacion` varchar(20) NOT NULL,
  `Coordenadas` varchar(30) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `idCiudades` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `atractivosturisticos`
--

INSERT INTO `atractivosturisticos` (`idAtractivosTuristicos`, `Ciudad`, `Provincia`, `Region`, `TipoAtractivo`, `idPadre`, `Descripcion`, `Superficie`, `Extencion`, `Altitud`, `Fundacion`, `Coordenadas`, `Nombre`, `idCiudades`) VALUES
(1, 'Loja', 'Loja', 'Sierra', 'Parque', '1', 'Parque Recreacional', '12', '12', '12', '12', '12', 'Jipiro', 1),
(2, 'Quito', 'Pichincha', 'Sierra', 'Volcan', '1', 'Volcan', 'asd', 'sd', 'sdf', 'asd', 'sdf', 'sdf', 0),
(3, 'Cuenca', 'Azuay', 'Sierra', 'museo', '1', 'Museo Ecuatoriano', '123654', '123654', '123654', '16 Noviembre 1962', '26s45N', 'Junior', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
`idCiudad` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Provincia` varchar(30) NOT NULL,
  `Extencion` varchar(20) NOT NULL,
  `Poblacion` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idCiudad`, `Nombre`, `Provincia`, `Extencion`, `Poblacion`) VALUES
(1, 'Loja', 'Loja', '1.883 kmÂ²', '170.280 habitantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
`idComentario` int(10) NOT NULL,
  `idAtractivosTuristicos` int(10) NOT NULL,
  `Comentario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE IF NOT EXISTS `hoteles` (
`idHotel` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `idCiudad` varchar(10) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Fundacion` varchar(20) NOT NULL,
  `Categoria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
`idImagen` int(10) NOT NULL,
  `idAtractivosTuristicos` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias`
--

CREATE TABLE IF NOT EXISTS `referencias` (
`idReferencia` int(10) NOT NULL,
  `idAtractivosTuristicos` int(10) NOT NULL,
  `Link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportes`
--

CREATE TABLE IF NOT EXISTS `transportes` (
`idTrasnporte` int(10) NOT NULL,
  `TipoTransporte` varchar(20) NOT NULL,
  `idPadre` int(10) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atractivosturisticos`
--
ALTER TABLE `atractivosturisticos`
 ADD PRIMARY KEY (`idAtractivosTuristicos`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
 ADD PRIMARY KEY (`idCiudad`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
 ADD PRIMARY KEY (`idComentario`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
 ADD PRIMARY KEY (`idHotel`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
 ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `referencias`
--
ALTER TABLE `referencias`
 ADD PRIMARY KEY (`idReferencia`);

--
-- Indices de la tabla `transportes`
--
ALTER TABLE `transportes`
 ADD PRIMARY KEY (`idTrasnporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atractivosturisticos`
--
ALTER TABLE `atractivosturisticos`
MODIFY `idAtractivosTuristicos` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
MODIFY `idCiudad` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
MODIFY `idComentario` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
MODIFY `idHotel` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
MODIFY `idImagen` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `referencias`
--
ALTER TABLE `referencias`
MODIFY `idReferencia` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `transportes`
--
ALTER TABLE `transportes`
MODIFY `idTrasnporte` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
