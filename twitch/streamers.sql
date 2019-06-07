-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2019 a las 03:29:49
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `streamers`
--

CREATE TABLE `streamers` (
  `ID` int(100) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Edad` int(10) NOT NULL,
  `Fecha Nacimiento` date NOT NULL,
  `Subscriptores` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Esta base de datos trata sobre streamers de Twich';

--
-- Volcado de datos para la tabla `streamers`
--

INSERT INTO `streamers` (`ID`, `Nombre`, `Edad`, `Fecha Nacimiento`, `Subscriptores`) VALUES
(1, 'Tfue', 21, '1998-01-02', '6.5M'),
(2, 'Cizzors', 23, '1996-04-25', '1.6M'),
(3, 'Faker', 23, '1996-05-07', '1.8M'),
(4, 'Tyler1', 24, '1995-03-07', '2.4M'),
(5, 'KennyS', 24, '1995-05-19', '274K'),
(6, 'Elshanks', 22, '1998-12-17', '10M');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `streamers`
--
ALTER TABLE `streamers`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Nombre` (`Nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
