-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 09:08:46
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasena` varchar(15) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(11) NOT NULL,
  `titulo_pelicula` varchar(100) NOT NULL,
  `director` varchar(50) NOT NULL,
  `resena` varchar(200) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `clasificacion` varchar(35) NOT NULL,
  `protagonista` varchar(50) NOT NULL,
  `casa_productora` varchar(50) NOT NULL,
  `cartel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `titulo_pelicula`, `director`, `resena`, `genero`, `fecha_estreno`, `clasificacion`, `protagonista`, `casa_productora`, `cartel`) VALUES
(6, 'ELEMENTOS', 'Ashley Plascencia', 'Una peli de lo más bonita', 'Fantasía', '2022-06-30', 'U (Para todo público)', 'El niño de fuego y la niña de agua', 'Paramount Pictures', '../img/elementos.jpg'),
(9, 'TOY STORY', 'Stacy Plascencia', 'Es una película que narra la aventura de los juguetes de Andy', 'Aventura', '2023-11-14', 'U (Para todo público)', 'Goody', 'Disney', '../img/toy_story.jpg'),
(10, 'AVATARS', 'Stacy Plascencia', 'eSTA BONITA', 'Aventura', '0000-00-00', '12A (Mayores de 12 años)', '', 'Columbia Pictures', '../img/avatar.jpg'),
(11, 'CIVIL WAR', 'Chris Evans', 'Capitán América e Iron Man luchan ', 'Acción', '2023-11-13', 'U (Para todo público)', 'Dante Elorza García ', 'Paramount Pictures', '../img/civil_war.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
