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

-- Dumping structure for table corazonartesanal.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table corazonartesanal.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table corazonartesanal.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table corazonartesanal.migrations: ~6 rows (approximately)
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_08_18_145713_create_users_table', 2),
	(6, '2022_08_18_170259_create_users_table', 3),
	(7, '2022_08_18_170539_create_users_table', 4);

-- Dumping structure for table corazonartesanal.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table corazonartesanal.password_resets: ~0 rows (approximately)

-- Dumping structure for table corazonartesanal.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table corazonartesanal.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table corazonartesanal.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `nombreProducto` varchar(256) NOT NULL,
  `tipo` varchar(256) NOT NULL,
  `modelo` varchar(256) NOT NULL,
  `talla` varchar(256) NOT NULL,
  `existencia` varchar(256) NOT NULL,
  `color` varchar(256) NOT NULL,
  `precio` double NOT NULL,
  `iva` double NOT NULL,
  `img` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idProducto`) USING BTREE,
  KEY `FK_productos_usuario` (`idUser`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COMMENT='En la tabla se almacenara los datos requeridos para poder darle de alta aun producto para sacaralo al mercado.';

-- Dumping data for table corazonartesanal.productos: ~6 rows (approximately)
INSERT IGNORE INTO `productos` (`idProducto`, `idUser`, `nombreProducto`, `tipo`, `modelo`, `talla`, `existencia`, `color`, `precio`, `iva`, `img`, `created_at`, `updated_at`) VALUES
	(57, 1, 'Ropa para niñas Colo rosa, hecho con estilo Nahual', 'Playera', 'Cuello redondo', 'CHICA', '4', 'Rosada', 230, 10, 'ca3.jpg', '2022-08-17 15:38:14', '2022-08-17 15:38:14'),
	(58, 1, 'Ropa para niñas Colo rosa, hecho con estilo Nahual', 'Playera', 'Cuello redondo', 'CHICA', '5', 'Rosada', 230, 10, 'ca6.jpg', '2022-08-17 15:41:12', '2022-08-17 15:41:12'),
	(59, 1, 'Ropa para niñas Colo rosa, hecho con estilo Nahual', 'Playera', 'Cuello redondo', 'CHICA', '5', 'Rosada', 230, 10, 'ca6.jpg', '2022-08-17 15:42:11', '2022-08-17 15:42:11'),
	(60, 1, 'Sudadera con bordado', 'Playera', 'Cuello redondo', 'CHICA', '6', 'Rosada', 230, 5, 'f12.jpg', '2022-08-17 16:48:22', '2022-08-17 16:48:22'),
	(61, 1, 'Ropa para niñas Color rosa, hecho con estilo Nahual', 'blusa', 'bordado', 'CHICA', '6', 'Rojo', 230, 10, 'ca1.jpg', '2022-08-17 17:18:07', '2022-08-17 17:18:07'),
	(62, 1, 'Sudadera con bordado', 'Playera@gmail.com', 'Cuello redondo', 'CHICA', '77', 'Rosada', 230, 10, 'jn.jpg', '2022-08-17 23:12:38', '2022-08-17 23:12:38');

-- Dumping structure for table corazonartesanal.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidoMaterno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_user_unique` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table corazonartesanal.users: ~2 rows (approximately)
INSERT IGNORE INTO `users` (`id`, `name`, `apellidoPaterno`, `apellidoMaterno`, `telefono`, `email`, `user`, `password`, `tipo`, `email_verified_at`, `remember_token`, `api_token`, `created_at`, `updated_at`) VALUES
	(2, 'Administrator', 'Administrator', 'Administrator', '9191735421', 'admin@gmail.com', 'Administrador', '$2y$10$KW7StiFrPujeHlZ0JFf74uVK9h3NOdu8w2pspEN61j/O4kOHW.Vji', 'ADMIN', '2022-08-18 17:15:36', 'joGvCfX2gjm7BrBRiW6Yo6cf2l2UF4yK6IasBsYiQzFmqXRm3MfGbjcBqfBI', NULL, '2022-08-18 22:15:36', '2022-08-18 22:15:36');

-- Dumping structure for table corazonartesanal.users_old
CREATE TABLE IF NOT EXISTS `users_old` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido_Paterno` varchar(255) DEFAULT NULL,
  `apellido_Materno` varchar(255) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` longblob DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `remember_token` text DEFAULT NULL,
  PRIMARY KEY (`idUser`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='En esta tabla es donde va contener todo los datos requerido de los usuarios en el sistema.';

-- Dumping data for table corazonartesanal.users_old: ~7 rows (approximately)
INSERT IGNORE INTO `users_old` (`idUser`, `nombre`, `apellido_Paterno`, `apellido_Materno`, `telefono`, `email`, `password`, `user`, `tipo`, `created_at`, `update_at`, `remember_token`) VALUES
	(1, 'Jeronimo', 'Gomez', 'Cruz', '9191142435', 'gomezjero98gmail.com', _binary 0x313233343536373737373839, 'jgc12345', 'admin', '2022-07-15 19:09:38', '2022-07-15 19:09:40', NULL),
	(2, 'Jeronimo', 'Gomez', 'Cruz', '919 241-25-44', 'gomezjero98@gmail.com', _binary 0x243279243130247874304a694169444962794d546c726541434a6832755855704a31794a365a2f644a6e6d7a41756d424a6c65332f78363765536669, 'jj2335', 'admin', NULL, NULL, NULL),
	(3, 'Omar', 'Perez', 'Lopez', '123456789', 'omarlp10@gmail.com', _binary 0x24327924313024467133674354576c59574e6c594c7a7942315169434f7656375258334f395054612f5a37744c3162464b4447324f454b4c706c3761, 'opl12345', 'Cliente', NULL, NULL, NULL),
	(4, 'Juan', 'Gomez', 'Cruz', '(919) 241-25-44', 'jegc12345@gmail.com', _binary 0x243279243130245833592f375874706b68415277424f5a713855617a75636e6c48596f6973664b574b6f4d75324d5257735a6a324f64796a786f7465, 'est4689', 'admin', NULL, NULL, NULL),
	(5, 'Jeronimo', 'Gomez', 'Cruz', '1234563789', 'laselva2022@gmail.com', _binary 0x24327924313024416a504c704b376246354679735a2e4834674573737558496a474b6e434c46507965586a55433646587a477a32454441555534524f, 'Jgc12345', 'cliente', NULL, NULL, NULL),
	(6, 'fred', 'gg', 'cc', '1234563789', 'fred@gmail.com', _binary 0x24327924313024413657636e4448617776596f37445238633742544d4f2e4b757058344b564e783376487a394d723769376d4471776571644d524469, 'Jgc12345', 'admin', NULL, NULL, NULL),
	(7, 'Omar Rene', 'Perez', 'Lopez', '9191735421', 'omar@gmail.com', _binary 0x243279243130247a4379346c2e7567425679386d756e53316c6532672e6e582e4432576c3033504341593961774a32505a514f696732435251414371, 'omarrenepl', 'admin', NULL, NULL, NULL);

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
