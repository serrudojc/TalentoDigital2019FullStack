-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2019 a las 22:59:50
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
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariostodo`
--

INSERT INTO `usuariostodo` (`id`, `nombre`, `usuario`, `pass`, `email`, `fechaRegistro`) VALUES
(1, 'jorge delano', 'jorgelin', 'contraseÃ±a', 'jorge@gmail.com', '2019-10-10'),
(2, 'pedro salazar', 'pedrin', '1234', 'pedrito@yahoo.com.ar', '2019-10-10'),
(3, 'beto  tolo', 'beto', '1234', 'beto@hotmail.com', '2019-10-10'),
(4, 'lalo landa', 'lolo', 'admin', 'lolo@gmail.com', '2019-10-10'),
(5, 'aldo bomzo', 'aldito', '1234', 'guero@uol.com', '2019-10-10'),
(6, 'pollo gordo', 'pollito', '1234', 'polo@speedy.com', '2019-10-10'),
(7, 'juan perez', 'juancito', '$2y$10$S9eorUApHrTeGI5qRzVA3ub5sZNoscZHGFoWr1fBdsv', 'juan@yahoo.com.ar', '2019-10-10');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
