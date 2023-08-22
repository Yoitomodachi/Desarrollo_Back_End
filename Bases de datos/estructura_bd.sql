SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Base de datos: `empresa`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `empleado`
--
CREATE TABLE `empleado` (
`id` int(11) NOT NULL,
`nombre` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Volcado de datos para la tabla `empleado`
--
INSERT INTO `empleado` (`id`, `nombre`, `edad`) VALUES
(1, 'Juan López', 30),
(2, 'Jorge García', 27),
(3, 'Pedro Álvarez', 54),
(4, 'Luis Sánchez', 40),
(5, 'Miguel Hernández', 35);
--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

