-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2025 a las 03:26:11
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paseos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idAdministradores` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Clave` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdministradores`, `Nombre`, `Apellido`, `Correo`, `Clave`) VALUES
(1, 'Ana', 'Torres', 'ana@admin.com', 'admin1'),
(2, 'Luis', 'Lopez', 'luis@admin.com', 'admin2'),
(3, 'Sofía', 'Ramírez', 'sofia@admin.com', 'admin3'),
(4, 'Pedro', 'Sánchez', 'pedro@admin.com', 'admin4'),
(5, 'María', 'Jiménez', 'maria@admin.com', 'admin5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `Horario` datetime NOT NULL,
  `EstadoCita_idEstadoCita` int(11) NOT NULL,
  `Perro_idPerro` int(11) NOT NULL,
  `Tarifa_idTarifas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dueño`
--

CREATE TABLE `dueño` (
  `idDueño` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Clave` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `dueño`
--

INSERT INTO `dueño` (`idDueño`, `Nombre`, `Apellido`, `Correo`, `Clave`) VALUES
(1, 'Carlos', 'Pérez', 'carlos@gmail.com', '1234'),
(2, 'Laura', 'Gómez', 'laura@gmail.com', 'abcd'),
(3, 'Andrés', 'Rodríguez', 'andres@gmail.com', 'pass'),
(4, 'Diana', 'Martínez', 'diana@gmail.com', 'clave'),
(5, 'Jorge', 'Ruiz', 'jorge@gmail.com', 'perro123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocita`
--

CREATE TABLE `estadocita` (
  `idEstadoCita` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopaseador`
--

CREATE TABLE `estadopaseador` (
  `idEstadoPaseador` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estadopaseador`
--

INSERT INTO `estadopaseador` (`idEstadoPaseador`, `Nombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Suspendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paseador`
--

CREATE TABLE `paseador` (
  `idPaseador` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Clave` varchar(45) NOT NULL,
  `FotoPaseador` blob NOT NULL,
  `EstadoPaseador_idEstadoPaseador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `paseador`
--

INSERT INTO `paseador` (`idPaseador`, `Nombre`, `Apellido`, `Correo`, `Clave`, `FotoPaseador`, `EstadoPaseador_idEstadoPaseador`) VALUES
(6, 'Carlos', 'López', 'carlos.lopez@email.com', 'clave123', '', 1),
(7, 'María', 'García', 'maria.garcia@email.com', 'pass456', '', 2),
(8, 'Pedro', 'Martínez', 'pedro.martinez@email.com', 'segura789', '', 1),
(9, 'Laura', 'Ramírez', 'laura.ramirez@email.com', 'clave000', '', 3),
(10, 'Jorge', 'Torres', 'jorge.torres@email.com', 'contrasena1', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paseo`
--

CREATE TABLE `paseo` (
  `idPaseo` int(11) NOT NULL,
  `Inicio` time NOT NULL,
  `Duracion` smallint(6) NOT NULL,
  `Cita_idCita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perro`
--

CREATE TABLE `perro` (
  `idPerro` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Foto` blob NOT NULL,
  `Dueño_idDueño` int(11) NOT NULL,
  `Raza_idRaza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `idRaza` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE `tarifa` (
  `idTarifas` int(11) NOT NULL,
  `ValorTarifa` varchar(45) NOT NULL,
  `TipoTarifa_idTipoTarifa` int(11) NOT NULL,
  `Paseador_idPaseador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdministradores`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `fk_Cita_EstadoCita1_idx` (`EstadoCita_idEstadoCita`),
  ADD KEY `fk_Cita_Perro1_idx` (`Perro_idPerro`),
  ADD KEY `fk_Cita_Tarifa1_idx` (`Tarifa_idTarifas`);

--
-- Indices de la tabla `dueño`
--
ALTER TABLE `dueño`
  ADD PRIMARY KEY (`idDueño`);

--
-- Indices de la tabla `estadocita`
--
ALTER TABLE `estadocita`
  ADD PRIMARY KEY (`idEstadoCita`);

--
-- Indices de la tabla `estadopaseador`
--
ALTER TABLE `estadopaseador`
  ADD PRIMARY KEY (`idEstadoPaseador`);

--
-- Indices de la tabla `paseador`
--
ALTER TABLE `paseador`
  ADD PRIMARY KEY (`idPaseador`),
  ADD KEY `fk_Paseador_EstadoPaseador1_idx` (`EstadoPaseador_idEstadoPaseador`);

--
-- Indices de la tabla `paseo`
--
ALTER TABLE `paseo`
  ADD PRIMARY KEY (`idPaseo`),
  ADD KEY `fk_Paseo_Cita1_idx` (`Cita_idCita`);

--
-- Indices de la tabla `perro`
--
ALTER TABLE `perro`
  ADD PRIMARY KEY (`idPerro`),
  ADD KEY `fk_Perro_Dueño1_idx` (`Dueño_idDueño`),
  ADD KEY `fk_Perro_Raza1_idx` (`Raza_idRaza`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`idRaza`);

--
-- Indices de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD PRIMARY KEY (`idTarifas`),
  ADD KEY `fk_Tarifas_Paseador1_idx` (`Paseador_idPaseador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdministradores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dueño`
--
ALTER TABLE `dueño`
  MODIFY `idDueño` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estadocita`
--
ALTER TABLE `estadocita`
  MODIFY `idEstadoCita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadopaseador`
--
ALTER TABLE `estadopaseador`
  MODIFY `idEstadoPaseador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `paseador`
--
ALTER TABLE `paseador`
  MODIFY `idPaseador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `paseo`
--
ALTER TABLE `paseo`
  MODIFY `idPaseo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perro`
--
ALTER TABLE `perro`
  MODIFY `idPerro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `idRaza` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `idTarifas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `fk_Cita_EstadoCita1` FOREIGN KEY (`EstadoCita_idEstadoCita`) REFERENCES `estadocita` (`idEstadoCita`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cita_Perro1` FOREIGN KEY (`Perro_idPerro`) REFERENCES `perro` (`idPerro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cita_Tarifa1` FOREIGN KEY (`Tarifa_idTarifas`) REFERENCES `tarifa` (`idTarifas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paseador`
--
ALTER TABLE `paseador`
  ADD CONSTRAINT `fk_Paseador_EstadoPaseador1` FOREIGN KEY (`EstadoPaseador_idEstadoPaseador`) REFERENCES `estadopaseador` (`idEstadoPaseador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paseo`
--
ALTER TABLE `paseo`
  ADD CONSTRAINT `fk_Paseo_Cita1` FOREIGN KEY (`Cita_idCita`) REFERENCES `cita` (`idCita`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perro`
--
ALTER TABLE `perro`
  ADD CONSTRAINT `fk_Perro_Dueño1` FOREIGN KEY (`Dueño_idDueño`) REFERENCES `dueño` (`idDueño`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Perro_Raza1` FOREIGN KEY (`Raza_idRaza`) REFERENCES `raza` (`idRaza`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD CONSTRAINT `fk_Tarifas_Paseador1` FOREIGN KEY (`Paseador_idPaseador`) REFERENCES `paseador` (`idPaseador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
