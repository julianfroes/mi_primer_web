-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2023 a las 02:12:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(3) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `NombreP` varchar(30) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Direccion`, `NombreP`, `Descripcion`, `Precio`) VALUES
(3, 'dogosencillo.jpg', 'Dogo especialidad panchita', 'Un dogo con cebolla, lechuga, tomate, mayonesa y salchicha rosarito envuelta en tocino.', 47),
(4, 'hamburguesapollo.jpg', 'Hamburguesa de Pollo', 'Una hamburguesa con una carne, pollo empánizado, salchicha, lechuga, tomate, cebolla y mayonesa.', 103),
(6, 'ensaladalambre.jpg', 'Ensalada Alambre', 'Una ensalada con carne asada, chile verde, queso asadero, lechuga orejona, col, pepino, zanahoria, tomate, fritura o croton. Aderezo Ranch y chipotle.', 100),
(7, 'dogoboneless.jpg', 'Dogoboneless', 'Un dogo tradicional al estilo del compadre acompañado de bonelesss con salsa a elegir.', 70),
(8, 'burguerC.png', 'Hamburquesa El Compadre', 'Hamburguesa de doble carne de diezmillo, queso asadero, tocino, papas sazonadas, salchicha, lechuga, tomate, cebolla, mayonesa.', 1350);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosclientes`
--

CREATE TABLE `usuariosclientes` (
  `ID` int(5) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Usuario` varchar(12) NOT NULL,
  `contraseña` varchar(12) NOT NULL,
  `TipoUsuario` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariosclientes`
--

INSERT INTO `usuariosclientes` (`ID`, `Correo`, `Usuario`, `contraseña`, `TipoUsuario`) VALUES
(1, 'julianfcoroes@gmail.com', 'julian', '12345', 'Admin'),
(2, 'pilinski@gmail.com', 'crit', 'teleton', 'user'),
(3, 'GalloDoro@hotmail.com', 'Valentin', 'Elizalde', 'user'),
(4, 'wawmimi@gmail.com', 'mimi', 'bonita', 'user'),
(5, 'yeyosuna11@gmail.com', 'tadeosuna', '54321', 'user'),
(6, 'arcesuna@gmail.com', 'Arcenio97', '54321', 'user'),
(9, 'ejemplo@outlook.com', 'ejemplo', '12345', 'user'),
(10, 'cesarcum@gmai.com', 'cesarA', '12', 'user'),
(11, 'sadas@hotmail.com', 'aaaaa', 'aaaaa', 'user'),
(12, 'sadasa@hotmail.com', 'aaaaa', 'aaaaa', 'user'),
(13, 'juanito@outlook.com', 'juan', '12345', 'user'),
(14, 'moni@gmail.com', 'moni', '12345', 'user'),
(15, 'mimibonita@hotmail.com', 'mimi', '12345', 'user'),
(16, 'morentxz@Outlook.com', 'morena', '54321', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuariosclientes`
--
ALTER TABLE `usuariosclientes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuariosclientes`
--
ALTER TABLE `usuariosclientes`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
