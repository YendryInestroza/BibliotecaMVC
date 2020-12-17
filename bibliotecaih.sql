-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2020 a las 19:50:46
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
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `area` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_area` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `area`, `descripcion_area`) VALUES
(2, 'Estudios Sociales IV', 'Es un campo amplio y multidisciplinario que comprende las ciencias sociales y humanidades.'),
(3, 'Matemáticas II', 'Especialidad en números y demas formas de trasnformación'),
(15, 'Administración', 'Área contable, financiera '),
(6, 'Física II', 'Importante en la educacion '),
(8, 'Informática', 'Conjunto de conocimientos técnicos que se ocupan del tratamiento automático de la información por medio de computadoras.'),
(9, 'Física Deporte', 'Salud Mental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `codigo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `editorial` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edicion` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `year` int(4) NOT NULL,
  `categoria` int(11) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `fingreso` date NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`codigo`, `titulo`, `autor`, `editorial`, `edicion`, `year`, `categoria`, `proveedor`, `fingreso`, `cantidad`) VALUES
('IH-LI-01', 'Blanca Olmedo', 'Lucila Gamero de Medina', 'Gumaya', 'Quinta Edición 2015', 2015, 2, 1, '2020-12-01', 5),
('IH-LI-02', 'Cipotes II', 'Ramón Amaya Amador', 'Gumaya', 'Primera Edición', 1985, 8, 7, '2020-11-09', 10);

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
(1, 'Acosa 25', 'Tegucigalpa, D.C.', '9605-4816', 'Karol Martínez'),
(2, 'Útiles de Honduras ', 'Comayaguela', '2788-5695', 'Carlos Ponce'),
(7, 'PACASA', 'Choluteca ', '2722-5698', 'Andrea Betanco'),
(8, 'Larach Útiles', 'San Pedro Sula ', '9635-7895', 'Pricila Gómez'),
(12, 'Parmalat', 'Somoto', '98787654', 'Byron'),
(13, 'Paper&amp;more', 'Choluteca ', '27256987', 'Sandra Betancourth'),
(18, 'CRS', 'Choluteca ', '27886596', 'Carla Ortez'),
(19, 'La Nueva ', 'San Pedro Sula ', '(504)2788-2569', 'Carlos Santana'),
(21, 'Utiles Franquisia', 'San Marcos de Colón', '(504) 2788-2616', 'Lindsey Inestroza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `f_nacimiento` date NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `f_nacimiento`, `telefono`, `usuario`, `correo`, `pass`, `rol`) VALUES
(1, 'Yendry Michelly ', 'Inestroza Mendez', '1997-08-30', '(504) 9605-4816', 'michy0003', 'michy_30@gmail.com', '1234565678', 'Admin'),
(3, 'María Panchita ', 'Paz Perez', '1985-05-30', '(504) 9862-8965', 'PanchitaPaz', 'pazperzm@gmail.com', 'mariapanchita23', 'Registrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`p_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
