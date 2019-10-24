-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2019 a las 00:46:00
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
-- Estructura de tabla para la tabla `usuariostodo`
--

CREATE TABLE `usuariostodo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariostodo`
--

INSERT INTO `usuariostodo` (`id`, `nombre`, `apellido`, `usuario`, `pass`, `email`, `fechaRegistro`) VALUES
(1, 'Jorge Delano', '', 'jorgelin', '$2y$10$tulODBB1MPe07/EtN5n4ne/SeLQ5tKfK1OQUQsqBkLIfl1ZVwJSGm', 'jorgedelano@gmail.com', '2019-10-12'),
(2, 'Osmar Montgomery', '', 'osmarcito', '$2y$10$uTX//dG5VrQTzTyo5wFVNeYES2CRsNFDXQGJe.uIO9ZtB7A0LKW8C', 'osmarmontgomery@gmail.com', '2019-10-12'),
(3, 'Ramon Sosto', '', 'ramoncito', '$2y$10$6BTnxif.aGlagY5wstuMZ.xKqeaFQ7sHUuWKqG.djPPucT58kluie', 'ramon.sosto@hotmail.com', '2019-10-12'),
(4, 'Miguel fernandez', '', 'migue', '$2y$10$KTQKtnN9icsA7EdJU2Ff6eGvgH.aoVap/p6KGvjIUrfN5xWm9slpe', 'miguelito@uol.com', '2019-10-12'),
(5, 'sergio manuel lopez', '', 'semalo', '$2y$10$m.Jv5/koSMmClXpDXOG.veU.l6V.WsU0ZqPGmdNy5E65lcbBeXQ5C', 'sergio@speedy.com.ar', '2019-10-12'),
(6, 'administrador', '', 'admin', '$2y$10$UaPuG75vdYcmI4p3J3wW0OwEskYxeyMJ0hCsGrIia.jW6UREQjxke', 'admin@gmail.com', '2019-10-12'),
(7, 'alguien con pass alguien', '', 'alguien', '$2y$10$OSzdA8aBa434b/Pkm7yMoOQFKO1GAZYL8Rgad/Q2MuaIZojDqwXFu', 'alguien@hotmail.com', '2019-10-12'),
(8, 'contraseÃ±a', '', 'contraseÃ±a', '$2y$10$6bwWt5.2qlPSdIxkrxCfi.E3p64ueR96iWSS2n54B7Q74vYNWdydW', 'con@gmail.com', '2019-10-15'),
(9, 'daniel', '', 'daniel', '$2y$10$4ZkT9itGpowFjfw2uaNDbeMB8.p18AlP6AItSIr.Fim4KTm2Htf7O', 'daniel@gmail.com', '2019-10-16'),
(10, 'pepe', 'pepo', 'pepe', '$2y$10$mfkolcn24e67u22w5peAy.gJbLlPpl.zZzzK4x49GHrfvaf5pRetC', 'pepe@gmail.com', '2019-10-21'),
(15, 'marcelo', 'tinelli', 'jorge', '$2y$10$V51x0ZHHyBuQTp9T862N3O83a7jukanx0gznzTMFGorgB7P2mDDPq', 'tinelli@yahoo.com', '2019-10-21'),
(16, 'donato', 'murcia', 'donato', '$2y$10$TNksAPNJWuBjFVY6Lz61v.DEqLypvhlcb63WCHY8FhA2VBSSjjICS', 'donato@gmail.com', '2019-10-21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuariostodo`
--
ALTER TABLE `usuariostodo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuariostodo`
--
ALTER TABLE `usuariostodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
