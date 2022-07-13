-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for corazonartesanal
CREATE DATABASE IF NOT EXISTS `corazonartesanal` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `corazonartesanal`;

-- Dumping structure for table corazonartesanal.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) unsigned DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `edad` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `sexo` enum('hombre','mujer') DEFAULT NULL,
  `tarjeta` varchar(50) DEFAULT NULL,
  `contidad` int(11) DEFAULT NULL,
  `codigoPostal` varchar(255) DEFAULT NULL,
  `referencias` text DEFAULT NULL,
  `tipoPago` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `FK_clientes_productos` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table corazonartesanal.clientes: ~0 rows (approximately)

-- Dumping structure for table corazonartesanal.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(11) DEFAULT NULL,
  `nombreProducto` varchar(256) DEFAULT NULL,
  `tipo` varchar(256) DEFAULT NULL,
  `talla` varchar(256) DEFAULT NULL,
  `modelo` varchar(256) DEFAULT NULL,
  `color` varchar(256) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `existencia` varchar(256) DEFAULT NULL,
  `img` varchar(256) DEFAULT NULL,
  `iva` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `FK_productos_usuario` (`idUser`),
  CONSTRAINT `FK_productos_usuario` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='En la tabla se almacenara los datos requeridos para poder darle de alta aun producto para sacaralo al mercado.';

-- Dumping data for table corazonartesanal.productos: ~0 rows (approximately)

-- Dumping structure for table corazonartesanal.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido_Paterno` varchar(255) DEFAULT NULL,
  `apellido_Materno` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `gmail` varchar(255) DEFAULT NULL,
  `password` longblob DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='En esta tabla es donde va contener todo los datos requerido de los usuarios en el sistema.';

-- Dumping data for table corazonartesanal.usuario: ~0 rows (approximately)

-- Dumping structure for table corazonartesanal.ventas
CREATE TABLE IF NOT EXISTS `ventas` (
  `idVentas` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idVentas`),
  KEY `FK_ventas_clientes` (`idCliente`),
  CONSTRAINT `FK_ventas_clientes` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table corazonartesanal.ventas: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
