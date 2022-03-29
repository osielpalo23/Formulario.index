-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2022 a las 19:01:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `idNumero` int(1) NOT NULL,
  `Curp` varchar(18) NOT NULL,
  `Nombres` varchar(45) DEFAULT NULL,
  `A_Paterno` varchar(45) DEFAULT NULL,
  `A_Materno` varchar(45) DEFAULT NULL,
  `Celular` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`idNumero`, `Curp`, `Nombres`, `A_Paterno`, `A_Materno`, `Celular`) VALUES
(1, 'AAOD850103HGRBCN02', 'Daniel', 'Abarca', 'Ocampo', 4496643456),
(2, 'AAPE921018MMSBRV01', 'Evangelina', 'Abarca', 'Peralta', 4494329921),
(3, 'BABR591028MMSHRC08', 'Rocio', 'Bahena', 'Barrios', 4491237643),
(4, 'BAPA861125HVZZRN01', 'Angel', 'Baeza', 'Perez', 4494783245),
(5, 'CABP590428MMSDLL09', 'Paula', 'Cadenas', 'Beltran', 4491137654),
(6, 'CAEJ680301HCSBSS03', 'Jesus', 'Caballero', 'Estrada', 4495239003),
(7, 'EACJ911024HMSSLN02', 'Juan', 'Escalona', 'Cuellar', 4493348002),
(8, 'EIAG631214HMSLGL03', 'Guillermo', 'Elizalde', 'Aguilar', 4492296001),
(9, 'FABM770222MMSJNR00', 'Margarita', 'Fajes', 'Buenrostro', 4494567778),
(10, 'FEBM660131MPLRLR02', 'Maria', 'Fernandez', 'Balbuena', 4492279865);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`idNumero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `idNumero` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
