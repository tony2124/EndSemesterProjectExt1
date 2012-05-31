-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-01-2011 a las 20:32:06
-- Versión del servidor: 5.1.36
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `nombre` varchar(50) NOT NULL,
  `grado` int(11) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `turno` varchar(11) NOT NULL,
  `ciclo` varchar(30) NOT NULL,
  `clave` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`nombre`, `grado`, `grupo`, `turno`, `ciclo`, `clave`) VALUES
('Omar', 6, 'A', 'Matutino', '2001-2010', '9980'),
('Salvador', 6, 'A', 'Matutino', '2001-2010', '9981'),
('Quiroz', 6, 'A', 'Matutino', '2001-2010', '9982'),
('Josue', 6, 'A', 'Matutino', '2001-2010', '9983');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE IF NOT EXISTS `calificaciones` (
  `nombre_materia` varchar(30) NOT NULL,
  `b1` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `promedio` int(11) NOT NULL,
  `clave_alumno` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`nombre_materia`, `b1`, `b2`, `b3`, `b4`, `b5`, `promedio`, `clave_alumno`) VALUES
('Matematicas', 10, 10, 10, 10, 10, 10, '9980'),
('Espanol', 9, 8, 10, 7, 10, 8, '9980'),
('Historia', 10, 10, 9, 10, 10, 10, '9980'),
('Geografia', 10, 9, 9, 9, 9, 9, '9980'),
('Civismo', 10, 10, 7, 10, 10, 9, '9980'),
('Matematicas', 9, 9, 9, 9, 9, 9, '9981'),
('Geografia', 9, 9, 9, 9, 9, 9, '9981'),
('Historia', 9, 9, 9, 9, 9, 9, '9981'),
('Civismo', 9, 9, 9, 9, 9, 9, '9981'),
('Espanol', 9, 9, 9, 9, 9, 9, '9981'),
('Matematicas', 8, 8, 8, 8, 8, 8, '9982'),
('Espanol', 8, 8, 8, 8, 8, 8, '9982'),
('Historia', 8, 8, 8, 8, 8, 8, '9982'),
('Geografia', 8, 8, 8, 8, 8, 8, '9982'),
('Civismo', 8, 8, 8, 8, 8, 8, '9982'),
('Matematicas', 7, 7, 7, 7, 7, 7, '9983'),
('Espanol', 7, 7, 7, 7, 7, 7, '9983'),
('Geografia', 7, 7, 7, 7, 7, 7, '9983'),
('Historia', 7, 7, 7, 7, 7, 7, '9983'),
('Civismo', 7, 7, 7, 7, 7, 7, '9983');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `clave` varchar(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `grado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `materias`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `clave` varchar(6) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `grado` int(11) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `ciclo` varchar(20) NOT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`clave`, `nombre`, `grado`, `grupo`, `ciclo`) VALUES
('9900', 'Froylan', 6, 'A', '80-2011');
