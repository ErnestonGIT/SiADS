-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para cics
CREATE DATABASE IF NOT EXISTS `cics` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cics`;

-- Volcando estructura para tabla cics.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `ID` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cics.rol: ~2 rows (aproximadamente)
INSERT INTO `rol` (`ID`, `Description`) VALUES
	(1, 'Administrador'),
	(2, 'Coordinadora'),
	(3, 'Estudiante');

-- Volcando estructura para tabla cics.seminarios
CREATE TABLE IF NOT EXISTS `seminarios` (
  `ID` varchar(100) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Description` varchar(200) NOT NULL,
  `F_INICIO` timestamp NOT NULL DEFAULT current_timestamp(),
  `F_FINAL` timestamp NOT NULL DEFAULT current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp(),
  `Cupo` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cics.seminarios: ~0 rows (aproximadamente)
INSERT INTO `seminarios` (`ID`, `Nombre`, `Description`, `F_INICIO`, `F_FINAL`, `createdAt`, `updatedAt`, `Cupo`) VALUES
	('671fef81ada697.09882647', 'Seminario 1', 'Prueba del Primer Seminario', '2024-10-28 20:10:59', '2024-10-30 20:10:59', '2024-10-28 20:10:59', '2024-10-28 20:10:59', 25);

-- Volcando estructura para tabla cics.status
CREATE TABLE IF NOT EXISTS `status` (
  `ID` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cics.status: ~4 rows (aproximadamente)
INSERT INTO `status` (`ID`, `Descripcion`) VALUES
	(0, 'Deshabilitado'),
	(1, 'Habilitado'),
	(2, 'Nuevo usuario'),
	(3, 'Bloqueado');

-- Volcando estructura para tabla cics.students
CREATE TABLE IF NOT EXISTS `students` (
  `ID` varchar(250) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `A_Paterno` varchar(100) NOT NULL,
  `A_Materno` varchar(100) DEFAULT NULL,
  `Boleta` int(11) NOT NULL,
  `Unidad` varchar(250) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Domicilio` varchar(100) DEFAULT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Students_unique` (`Boleta`),
  KEY `FK_Students_Status` (`Status`),
  CONSTRAINT `FK_Students_Status` FOREIGN KEY (`Status`) REFERENCES `status` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cics.students: ~0 rows (aproximadamente)
INSERT INTO `students` (`ID`, `Name`, `A_Paterno`, `A_Materno`, `Boleta`, `Unidad`, `Edad`, `Domicilio`, `Status`) VALUES
	('671fef4bb55fa8.49602606', 'Alejandro', 'Martínez', 'Rodríguez', 2015030790, 'UPIICSA', 25, 'Calle Siempre Viva', 0);

-- Volcando estructura para tabla cics.students_seminarios
CREATE TABLE IF NOT EXISTS `students_seminarios` (
  `ID` int(11) DEFAULT NULL,
  `Students_ID` int(11) DEFAULT NULL,
  `Seminarios_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cics.students_seminarios: ~0 rows (aproximadamente)

-- Volcando estructura para tabla cics.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL DEFAULT '0',
  `password` varchar(250) NOT NULL DEFAULT '0',
  `nombre` varchar(200) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `users_rol_FK` (`rol`),
  CONSTRAINT `users_rol_FK` FOREIGN KEY (`rol`) REFERENCES `rol` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cics.users: ~1 rows (aproximadamente)
INSERT INTO `users` (`ID`, `username`, `password`, `nombre`, `rol`) VALUES
	(1, 'jmr@rednacional.com', '$2y$10$ctqFb32j1rO3mFs2NQ7GcO3SE1b5TzZBzTGRTO.Jz1fIWauAmpNRe', 'Alejandro Martínez', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
