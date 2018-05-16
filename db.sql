-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2018 a las 19:46:41
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
();

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `correo` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Santa Anita Av. Nicolas Ayllon 2931 of 101 Urb. El Puente  El Agustino (referencia puente Santa Anita)', '01 714 2304', 'atencionalcliente@quantumclubpro.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `evento` varchar(30) DEFAULT NULL,
  `fecha` varchar(60) DEFAULT NULL,
  `nomb_evento` varchar(50) DEFAULT NULL,
  `speaker` varchar(150) DEFAULT NULL,
  `hora` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `imagen` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `evento`, `fecha`, `nomb_evento`, `speaker`, `hora`, `direccion`, `descripcion`, `imagen`) VALUES
(1, 'Evento1', 'Evento 15-Dic-17', 'Desayuno Quantico', 'Elias Ordoñez y Roberto Tello', '9:00 PM A 11:00 PM', 'Hotel Britania,Miraflores', 'Retomamos con fuerza como cada jueves de cada mes, forma parte de nuestra presentación de negocios donde compartiremos la mejor cultura financiera, conoce las diferentes maneras de formar parte de la ', NULL),
(2, 'Evento2', 'Evento 16-Enero-18', 'Trading Day Noviembre', 'Elias Ordoñez & Roberto Tello', '9:00PM A 11:00PM', 'Hotel Britania Miraflores', 'Retomamos con fuerza como cada jueves de cada mes, forma parte de nuestra presentación de negocios donde compartiremos la mejor cultura financiera, conoce las diferentes maneras de formar parte de la ', NULL),
(3, 'Evento3', 'Evento 17-Feb-18', 'Casa Andina', 'Elias Ordoñez & Roberto Tello', '9:00PM A 11:00PM', 'Hotel Britania Miraflores', 'Retomamos con fuerza como cada jueves de cada mes, forma parte de nuestra presentación de negocios donde compartiremos la mejor cultura financiera, conoce las diferentes maneras de formar parte de la ', NULL),
(4, 'Evento4', 'Evento 19-Mar-18', 'Juan Diego Gomez en Lima', 'Elias Ordoñez & Roberto Tello', '9:00PM A 11:00PM', 'Hotel Britania Miraflores', 'Retomamos con fuerza como cada jueves de cada mes, forma parte de nuestra presentación de negocios donde compartiremos la mejor cultura financiera, conoce las diferentes maneras de formar parte de la ', NULL),
(5, 'Evento5', 'Evento 20-Abri-18', 'Pre Lanzamiento', 'Elias Ordoñez & Roberto Tello', '9:00PM A 11:00PM', 'Hotel Britania Miraflores', 'Retomamos con fuerza como cada jueves de cada mes, forma parte de nuestra presentación de negocios donde compartiremos la mejor cultura financiera, conoce las diferentes maneras de formar parte de la ', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `imagen1` blob,
  `caracteristicas` varchar(60) DEFAULT NULL,
  `imagen2` blob,
  `caracteristica2` varchar(60) DEFAULT NULL,
  `caracteristica3` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
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
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
