-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2020 a las 20:31:24
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecaih`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idlibro` int(11) NOT NULL,
  `nom_li` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `autor_li` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `area_li` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `edicion_li` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `editor_li` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `proveedor_li` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `npagina_li` int(11) NOT NULL,
  `fingreso_li` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad_li` int(11) NOT NULL,
  `precio_li` float NOT NULL,
  `observaciones_li` varchar(120) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idlibro`, `nom_li`, `autor_li`, `area_li`, `edicion_li`, `editor_li`, `proveedor_li`, `npagina_li`, `fingreso_li`, `cantidad_li`, `precio_li`, `observaciones_li`) VALUES
(1, 'El color del Mar', 'Sylvia de Holanda', 'Literatura ', 'Primera Edición ', 'Ríos de aguas claras ', 'ACOSA', 188, '2020-07-07', 10, 200, 'Identificación, formulación, evaluación de la lectura'),
(2, 'Contabilidad Financiera ', 'Carlos M. Marin ', 'Contabilidad', 'Cuarta Edición 2011', 'Rumaya ', 'Útiles de Honduras ', 3001, '', 3, 285, 'El libro esta en buen estado '),
(19, 'Presión Verder', 'Ramón Amaya Amador ', 'Literatura ', 'Edición 2008', 'Ramón Amaya Amador ', 'ACOSA', 298, '2018-05-23', 10, 135, '​Es una novela de realismo socialista en la que se describen las condiciones de vida en las plantaciones bananeras '),
(15, 'Sangre y Fuego ', 'George R. R. Martin ', 'Ficción ', 'Primera Edición ', 'Doug Wheatley', 'PACASA', 860, '01/05/2017', 1, 1200, 'Libro dependiente de una serie '),
(16, 'Vientos de Invierno ', 'George R. R. Martin ', 'Ficción ', 'Unica ', 'Doug Wheatley', 'PACASA', 700, '01/05/2017', 1, 1000, 'Parte de la saga de game of thrones'),
(18, 'Blanca Olmedo ', 'Lucila Gamero de Medina ', 'Literatura ', 'Quinta edición 2015', 'Gumaya ', 'Larach Útiles ', 200, '12/06/2016', 10, 140, 'Escritora Hondureña primera mujer en Honduras que publicó un libro'),
(20, 'Cipotes', 'Ramón Amaya Amador', 'Literatura ', 'Segunda Edición', 'Ramón Amaya Amador ', 'ACOSA', 300, '2020-08-16', 10, 100, 'Libro a partir de una historia real ocurrida en la ciudad de Tegucigalpa '),
(21, 'El Señor de los Anillos ', 'J. R. R. Tolkien', 'Novela ', 'Primera Edición ', 'minotauro ', 'ACOSA', 1400, '2015-06-25', 3, 165, 'El Señor de los Anillos es una novela de fantasía épica escrita por el filólogo y escritor británico J. R. R. Tolkien.'),
(22, '1', '1', '1', '1', '1', '1', 100, '2014-06-25', 5, 5, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `p_id` int(11) NOT NULL,
  `nom_prov` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dir_prov` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tel_prov` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `rep_prov` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`p_id`, `nom_prov`, `dir_prov`, `tel_prov`, `rep_prov`) VALUES
(1, 'Acosa', 'Tegucigalpa, D.C.', '9605-4816', 'Karol Martínez'),
(2, 'Útiles de Honduras ', 'Comayaguela', '2788-5695', 'Carlos Ponce'),
(7, 'PACASA', 'Choluteca ', '2722-5698', 'Andrea Betanco'),
(8, 'Larach Útiles', 'San Pedro Sula ', '9635-7895', 'Pricila Gómez'),
(9, 'Útiles de Honduras ', 'as', '121121212', 'Andrea Betanco'),
(10, 'Útiles de Honduras ', 'as', '121121212', 'Andrea Betanco'),
(11, 'Útiles de Honduras ', 'Comayaguela', '12', 'Pricila Gómez'),
(12, 'Parmalat', 'Somoto', '98787654', 'Byron'),
(13, 'Paper&amp;more', 'Choluteca ', '27256987', 'Sandra Betancourth'),
(14, '1', '1', '1', '1'),
(15, '2', '2', '2', '2'),
(16, '3', '3', '3', '3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idlibro`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idlibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
