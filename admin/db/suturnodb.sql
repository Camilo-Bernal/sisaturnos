-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.20-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para suturno
CREATE DATABASE IF NOT EXISTS `suturno` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `suturno`;

-- Volcando estructura para tabla suturno.cargos
CREATE TABLE IF NOT EXISTS `cargos` (
  `idCargo` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(100) NOT NULL,
  PRIMARY KEY (`idCargo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.cargos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` (`idCargo`, `cargo`) VALUES
	(1, 'Auxiliar'),
	(2, 'Jefe'),
	(3, 'Secretaria');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.contrato
CREATE TABLE IF NOT EXISTS `contrato` (
  `idContrato` int(11) NOT NULL AUTO_INCREMENT,
  `tipoContrato` varchar(40) NOT NULL,
  PRIMARY KEY (`idContrato`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.contrato: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `contrato` DISABLE KEYS */;
INSERT INTO `contrato` (`idContrato`, `tipoContrato`) VALUES
	(1, 'Planta Permananete'),
	(6, 'Planta Temporal'),
	(7, 'OPS - SAS');
/*!40000 ALTER TABLE `contrato` ENABLE KEYS */;

-- Volcando estructura para vista suturno.empleados
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `empleados` (
	`idPersonalAsistencial` INT(10) NOT NULL,
	`nombres` VARCHAR(45) NOT NULL COLLATE 'utf8mb4_general_ci',
	`apellidos` VARCHAR(45) NOT NULL COLLATE 'utf8mb4_general_ci',
	`telefono` FLOAT NOT NULL,
	`correoElectronico` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`idContrato` VARCHAR(40) NOT NULL COLLATE 'utf8mb4_general_ci',
	`idNomina` DOUBLE NOT NULL,
	`idProfesion` VARCHAR(45) NOT NULL COLLATE 'utf8mb4_general_ci',
	`idCargo` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`idTipoId` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`idGenero` VARCHAR(45) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Volcando estructura para tabla suturno.genero
CREATE TABLE IF NOT EXISTS `genero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(45) NOT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.genero: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` (`idGenero`, `genero`) VALUES
	(1, 'masculino'),
	(2, 'femenino');
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.nomina
CREATE TABLE IF NOT EXISTS `nomina` (
  `idNomina` int(11) NOT NULL AUTO_INCREMENT,
  `valorNomina` double NOT NULL,
  PRIMARY KEY (`idNomina`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.nomina: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `nomina` DISABLE KEYS */;
INSERT INTO `nomina` (`idNomina`, `valorNomina`) VALUES
	(2, 4000000);
/*!40000 ALTER TABLE `nomina` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.novedades
CREATE TABLE IF NOT EXISTS `novedades` (
  `idNovedad` int(11) NOT NULL AUTO_INCREMENT,
  `idProgramacion` int(11) NOT NULL,
  `fechaInicioNovedad` date NOT NULL,
  `fechaFinNovedad` date NOT NULL,
  `horaInicoNovedad` time NOT NULL,
  `obervacion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idNovedad`),
  KEY `idProgramacion` (`idProgramacion`),
  CONSTRAINT `novedades_ibfk_1` FOREIGN KEY (`idProgramacion`) REFERENCES `programacion` (`idProgramacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.novedades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `novedades` DISABLE KEYS */;
/*!40000 ALTER TABLE `novedades` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.personalasistencial
CREATE TABLE IF NOT EXISTS `personalasistencial` (
  `idPersonalAsistencial` int(10) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `telefono` float NOT NULL,
  `correoElectronico` varchar(50) DEFAULT NULL,
  `idContrato` int(11) NOT NULL,
  `idNomina` int(11) NOT NULL,
  `idProfesion` int(11) NOT NULL,
  `idCargo` int(11) NOT NULL,
  `idTipoId` int(11) NOT NULL,
  `idGenero` int(11) NOT NULL,
  PRIMARY KEY (`idPersonalAsistencial`),
  KEY `idContrato` (`idContrato`),
  KEY `idNomina` (`idNomina`),
  KEY `idProfesion` (`idProfesion`),
  KEY `idCargo` (`idCargo`),
  KEY `idTipoId` (`idTipoId`),
  KEY `idGenero` (`idGenero`),
  CONSTRAINT `personalasistencial_ibfk_1` FOREIGN KEY (`idContrato`) REFERENCES `contrato` (`idContrato`),
  CONSTRAINT `personalasistencial_ibfk_2` FOREIGN KEY (`idNomina`) REFERENCES `nomina` (`idNomina`),
  CONSTRAINT `personalasistencial_ibfk_3` FOREIGN KEY (`idProfesion`) REFERENCES `profesion` (`idProfesion`),
  CONSTRAINT `personalasistencial_ibfk_4` FOREIGN KEY (`idCargo`) REFERENCES `cargos` (`idCargo`),
  CONSTRAINT `personalasistencial_ibfk_5` FOREIGN KEY (`idTipoId`) REFERENCES `tipoid` (`idTipoId`),
  CONSTRAINT `personalasistencial_ibfk_6` FOREIGN KEY (`idGenero`) REFERENCES `genero` (`idGenero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.personalasistencial: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `personalasistencial` DISABLE KEYS */;
/*!40000 ALTER TABLE `personalasistencial` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.profesion
CREATE TABLE IF NOT EXISTS `profesion` (
  `idProfesion` int(11) NOT NULL AUTO_INCREMENT,
  `profesion` varchar(45) NOT NULL,
  PRIMARY KEY (`idProfesion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.profesion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `profesion` DISABLE KEYS */;
INSERT INTO `profesion` (`idProfesion`, `profesion`) VALUES
	(1, 'Enfermera Jefe');
/*!40000 ALTER TABLE `profesion` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.programacion
CREATE TABLE IF NOT EXISTS `programacion` (
  `idProgramacion` int(10) NOT NULL AUTO_INCREMENT,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `horaInico` time NOT NULL,
  `horaFin` time NOT NULL,
  `esFestivo` tinyint(1) NOT NULL,
  `esDomingo` tinyint(1) NOT NULL,
  `numFestivo` int(11) NOT NULL,
  `numDomingos` int(11) NOT NULL,
  `idPersonalAsistencial` int(10) NOT NULL,
  `idServicio` int(11) NOT NULL,
  PRIMARY KEY (`idProgramacion`),
  KEY `idPersonalAsistencial` (`idPersonalAsistencial`),
  KEY `idServicio` (`idServicio`),
  CONSTRAINT `programacion_ibfk_1` FOREIGN KEY (`idPersonalAsistencial`) REFERENCES `personalasistencial` (`idPersonalAsistencial`),
  CONSTRAINT `programacion_ibfk_2` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.programacion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `programacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `programacion` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.recuperarpass
CREATE TABLE IF NOT EXISTS `recuperarpass` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL DEFAULT '0',
  `token` varchar(50) NOT NULL DEFAULT '0',
  `codigo` int(6) NOT NULL DEFAULT 0,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.recuperarpass: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `recuperarpass` DISABLE KEYS */;
/*!40000 ALTER TABLE `recuperarpass` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.servicios
CREATE TABLE IF NOT EXISTS `servicios` (
  `idServicio` int(10) NOT NULL AUTO_INCREMENT,
  `nombreServicio` varchar(45) NOT NULL,
  PRIMARY KEY (`idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.servicios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.tipoid
CREATE TABLE IF NOT EXISTS `tipoid` (
  `idTipoId` int(11) NOT NULL AUTO_INCREMENT,
  `tipoId` varchar(100) NOT NULL,
  PRIMARY KEY (`idTipoId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.tipoid: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipoid` DISABLE KEYS */;
INSERT INTO `tipoid` (`idTipoId`, `tipoId`) VALUES
	(1, 'TI'),
	(2, 'CC'),
	(3, 'PP');
/*!40000 ALTER TABLE `tipoid` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.turnos
CREATE TABLE IF NOT EXISTS `turnos` (
  `idTurno` int(11) NOT NULL AUTO_INCREMENT,
  `tipoTurno` varchar(45) NOT NULL,
  `duracion` int(11) NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL,
  PRIMARY KEY (`idTurno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.turnos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `turnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `turnos` ENABLE KEYS */;

-- Volcando estructura para tabla suturno.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla suturno.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `name`, `user`, `email`, `password`) VALUES
	(1, 'Jesús Camilo Bernal', 'camilo ', 'cabe0320@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
	(2, 'Camilo Bernal', 'jesús', 'jesbernal@umariana.edu.co', '81dc9bdb52d04dc20036dbd8313ed055');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para vista suturno.empleados
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `empleados`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `empleados` AS SELECT e.idPersonalAsistencial, e.nombres, e. apellidos, e.telefono, e.correoElectronico, k.tipoContrato 'idContrato', n.valorNomina 'idNomina' , p.profesion 'idProfesion', c.cargo 'idCargo', t.tipoId 'idTipoId', g.genero 'idGenero'
FROM personalasistencial e, contrato k, nomina n, profesion p, cargos c, tipoid t, genero g
WHERE e.idContrato = k.idContrato AND e.idNomina = n.idNomina AND e.idProfesion = p.idProfesion AND e.idCargo = c.idCargo AND e.idTipoId = t.idTipoId AND e.idGenero = g.idGenero ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
