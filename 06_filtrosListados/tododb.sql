-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2019 a las 02:07:37
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tododb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `tarea` varchar(250) NOT NULL,
  `terminada` tinyint(1) NOT NULL DEFAULT 0,
  `fecha` date NOT NULL,
  `fechaCreacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `todo`
--

INSERT INTO `todo` (`id`, `tarea`, `terminada`, `fecha`, `fechaCreacion`) VALUES
(1, 'Hacer un tarea', 1, '2019-08-06', '0000-00-00'),
(2, 'sacar al perro', 0, '0000-00-00', '0000-00-00'),
(3, 'sacar al perro', 1, '2019-10-22', '0000-00-00'),
(4, 'lavar platos', 0, '0000-00-00', '0000-00-00'),
(5, 'hacer compras', 1, '2019-10-02', '0000-00-00'),
(6, 'limpiar biblioteca', 0, '0000-00-00', '0000-00-00'),
(7, 'estudiar discreta', 0, '0000-00-00', '0000-00-00'),
(8, 'estudiar Java', 0, '0000-00-00', '0000-00-00'),
(10, 'cortar el pasto', 0, '0000-00-00', '0000-00-00'),
(11, 'Estudiar Algoritmos', 0, '2019-10-12', '0000-00-00'),
(12, 'estudiar php', 0, '0000-00-00', '0000-00-00'),
(13, 'prueba trim', 0, '0000-00-00', '0000-00-00'),
(14, 'BaÃ±ar perros', 0, '0000-00-00', '0000-00-00'),
(15, 'agregar fecha al form', 0, '0000-00-00', '2019-10-10'),
(16, 'Comprar milanesas', 0, '0000-00-00', '2019-10-13'),
(17, 'Comprar milanesas', 0, '0000-00-00', '2019-10-13'),
(18, 'enviar ejercicios al campus', 0, '0000-00-00', '2019-10-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariostodo`
--

CREATE TABLE `usuariostodo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariostodo`
--

INSERT INTO `usuariostodo` (`id`, `nombre`, `usuario`, `pass`, `email`, `fechaRegistro`) VALUES
(1, 'Jorge Delano', 'jorgelin', '$2y$10$I4tRl0MwLkfU3mw0L/PDf.0EI0J0XFSW1QVTyOKtI0oUYl55viPFm', 'jorgedelano@gmail.com', '2019-10-12'),
(2, 'Osmar Montgomery', 'osmarcito', '$2y$10$ZptNzxaKCpcTeL/vHrT1D.rZYYl49z.PMAOsxwAYF.L2gFSrpoFMq', 'osmarmontgomery@gmail.com', '2019-10-12'),
(3, 'Ramon Sosto', 'ramoncito', '$2y$10$6BTnxif.aGlagY5wstuMZ.xKqeaFQ7sHUuWKqG.djPPucT58kluie', 'ramon.sosto@hotmail.com', '2019-10-12'),
(4, 'Miguel fernandez', 'migue', '$2y$10$KTQKtnN9icsA7EdJU2Ff6eGvgH.aoVap/p6KGvjIUrfN5xWm9slpe', 'miguelito@uol.com', '2019-10-12'),
(5, 'sergio manuel lopez', 'semalo', '$2y$10$m.Jv5/koSMmClXpDXOG.veU.l6V.WsU0ZqPGmdNy5E65lcbBeXQ5C', 'sergio@speedy.com.ar', '2019-10-12'),
(6, 'administrador', 'admin', '$2y$10$UaPuG75vdYcmI4p3J3wW0OwEskYxeyMJ0hCsGrIia.jW6UREQjxke', 'admin@gmail.com', '2019-10-12'),
(7, 'alguien con pass alguien', 'alguien', '$2y$10$OSzdA8aBa434b/Pkm7yMoOQFKO1GAZYL8Rgad/Q2MuaIZojDqwXFu', 'alguien@hotmail.com', '2019-10-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuariostodo`
--
ALTER TABLE `usuariostodo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuariostodo`
--
ALTER TABLE `usuariostodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
