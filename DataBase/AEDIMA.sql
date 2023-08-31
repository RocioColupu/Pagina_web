-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2023 a las 23:58:34
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aedima`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(5) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `DNI` int(8) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `UserAdmin` varchar(25) NOT NULL,
  `ClaveAdmin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deporte`
--

CREATE TABLE `deporte` (
  `Nombre` varchar(30) NOT NULL,
  `Profesor` varchar(30) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Instalacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `deporte`
--

INSERT INTO `deporte` (`Nombre`, `Profesor`, `Descripcion`, `Instalacion`) VALUES
('Futbol', 'Cuto', 'Fulbito', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indumentaria`
--

CREATE TABLE `indumentaria` (
  `Nombre` varchar(30) NOT NULL,
  `Precio` double(5,2) NOT NULL,
  `Talla` varchar(3) NOT NULL,
  `Deporte` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalacion`
--

CREATE TABLE `instalacion` (
  `Id` int(10) NOT NULL,
  `Sede` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `instalacion`
--

INSERT INTO `instalacion` (`Id`, `Sede`) VALUES
(1, 'Ventanilla'),
(5, 'Puente Piedra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `DNI` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`Nombre`, `Apellido`, `DNI`) VALUES
('Cuto', 'Guadalupe', 66554411);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `idSolicitud` int(5) NOT NULL,
  `idUsuario` int(5) NOT NULL,
  `Deporte` varchar(30) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `DNI` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(5) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `DNI` int(8) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `User` varchar(25) NOT NULL,
  `Clave` varchar(25) NOT NULL,
  `FechaNac` date NOT NULL,
  `Distrito` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Apellido`, `DNI`, `Telefono`, `User`, `Clave`, `FechaNac`, `Distrito`) VALUES
(1, 'Pedrito', 'Perez', 87654321, 987654321, 'peperez', '1234', '2000-01-01', 'Ventanilla');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `deporte`
--
ALTER TABLE `deporte`
  ADD PRIMARY KEY (`Nombre`),
  ADD KEY `Instalacion` (`Instalacion`),
  ADD KEY `Profesor` (`Profesor`);

--
-- Indices de la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  ADD PRIMARY KEY (`Nombre`),
  ADD KEY `Deporte` (`Deporte`);

--
-- Indices de la tabla `instalacion`
--
ALTER TABLE `instalacion`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idSolicitud`),
  ADD KEY `User` (`idUsuario`),
  ADD KEY `Deporte` (`Deporte`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idSolicitud` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `deporte`
--
ALTER TABLE `deporte`
  ADD CONSTRAINT `deporte_ibfk_1` FOREIGN KEY (`Profesor`) REFERENCES `profesor` (`Nombre`),
  ADD CONSTRAINT `deporte_ibfk_10` FOREIGN KEY (`Profesor`) REFERENCES `profesor` (`Nombre`),
  ADD CONSTRAINT `deporte_ibfk_2` FOREIGN KEY (`Profesor`) REFERENCES `profesor` (`Nombre`),
  ADD CONSTRAINT `deporte_ibfk_3` FOREIGN KEY (`Instalacion`) REFERENCES `instalacion` (`Id`),
  ADD CONSTRAINT `deporte_ibfk_4` FOREIGN KEY (`Profesor`) REFERENCES `profesor` (`Nombre`),
  ADD CONSTRAINT `deporte_ibfk_5` FOREIGN KEY (`Instalacion`) REFERENCES `instalacion` (`Id`),
  ADD CONSTRAINT `deporte_ibfk_6` FOREIGN KEY (`Profesor`) REFERENCES `profesor` (`Nombre`),
  ADD CONSTRAINT `deporte_ibfk_7` FOREIGN KEY (`Instalacion`) REFERENCES `instalacion` (`Id`),
  ADD CONSTRAINT `deporte_ibfk_8` FOREIGN KEY (`Profesor`) REFERENCES `profesor` (`Nombre`),
  ADD CONSTRAINT `deporte_ibfk_9` FOREIGN KEY (`Profesor`) REFERENCES `profesor` (`Nombre`);

--
-- Filtros para la tabla `indumentaria`
--
ALTER TABLE `indumentaria`
  ADD CONSTRAINT `indumentaria_ibfk_1` FOREIGN KEY (`Deporte`) REFERENCES `deporte` (`Nombre`),
  ADD CONSTRAINT `indumentaria_ibfk_2` FOREIGN KEY (`Deporte`) REFERENCES `deporte` (`Nombre`);

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`ID`),
  ADD CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`ID`),
  ADD CONSTRAINT `solicitud_ibfk_3` FOREIGN KEY (`Deporte`) REFERENCES `deporte` (`Nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
