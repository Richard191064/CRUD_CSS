-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2024 a las 00:01:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editorial` varchar(100) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `editorial`, `url`) VALUES
(1, 'El dinero es MI amigo', 'Phil Laut', 'Grupo Editorial Tomos', '\r\n'),
(2, 'Saber Gastar', 'Gianco Abundiz Cabrero', 'Aguilar', '\r\n'),
(3, 'Tu primer mill&oacute;n', 'Pedro Osvaldo Ramirez', 'Porrua', ''),
(4, 'Los 10 secretos de la riqueza abundante', 'Adam J. Jackson', 'Sirio', ''),
(5, 'El millonario instant&aacute;neo', 'Mark Fisher ', 'Empresa Activa', ''),
(7, 'El hombre m&aacute;s rico de Babilonia', 'George Samuel Clason ', 'Obelisco', ''),
(8, 'Padre rico, Padre pobre', 'Robert Kiyosaki', 'Aguilar', ''),
(16, 'Corazon de reloj', 'Gabriela Pasarán', 'ITTláhuac México', ''),
(19, 'Caballo de troya \"10\" ', 'Juna Jose Benitez', 'Planeta', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
