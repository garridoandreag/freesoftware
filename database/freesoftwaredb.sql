-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 21-09-2021 a las 03:47:24
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `freesoftwaredb`
--

DELIMITER $$
--
-- Funciones
--
DROP FUNCTION IF EXISTS `getComplaintCode`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `getComplaintCode` (`pdepartmend_id` INT, `ptown_id` INT, `pcreated_at` TIMESTAMP) RETURNS VARCHAR(45) CHARSET utf8mb4 COLLATE utf8mb4_unicode_ci BEGIN

DECLARE vdepartment VARCHAR(5);
DECLARE vcode VARCHAR(25);

SET vdepartment = (SELECT department.code FROM department WHERE department.id = pdepartmend_id);
SET vcode = CONCAT(vdepartment,
					lpad(ptown_id,2,0),
                    year(pcreated_at),
                    lpad(month(pcreated_at),2,0),
                    lpad(day(pcreated_at),2,0),
                    lpad(hour(pcreated_at),2,0),
                    lpad(minute(pcreated_at),2,0),
                    lpad(second(pcreated_at),2,0));

RETURN vcode;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directorate_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `branch_directorate_id_foreign` (`directorate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `branch`
--

INSERT INTO `branch` (`id`, `name`, `address`, `directorate_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DIACO CENTRAL', '', 1, 1, '2021-09-09 06:00:00', '2021-09-09 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `branchoffice`
--

DROP TABLE IF EXISTS `branchoffice`;
CREATE TABLE IF NOT EXISTS `branchoffice` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addnit` tinyint(1) NOT NULL DEFAULT '0',
  `nit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `town_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `branchoffice_vendor_id_foreign` (`vendor_id`),
  KEY `branchoffice_town_id_foreign` (`town_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `branchoffice`
--

INSERT INTO `branchoffice` (`id`, `name`, `addnit`, `nit`, `zone`, `address`, `status`, `vendor_id`, `town_id`, `created_at`) VALUES
(1, '& Café Antigua', 0, NULL, 0, 'Calle de Los Nazarenos', 1, 1, 17, '2021-09-09 22:43:54'),
(2, '& Café Obelisco', 0, NULL, 10, '16 Calle 1-01 Zona 10 C.C. Plaza Obelisco', 1, 1, 4, '2021-09-10 15:26:44'),
(3, 'Campero Las Américas', 0, NULL, 13, 'Avenida Las Américas 7-80, zona 13', 1, 8, 4, '2021-09-17 01:41:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'General', 1, '2021-09-09 06:00:00'),
(2, 'Reclamo por garantía', 1, '2021-09-18 02:18:18'),
(3, 'General', 1, NULL),
(4, 'Reclamo por garantía', 1, NULL),
(5, 'Precios altos', 1, NULL),
(6, 'Publicidad engañosa', 1, NULL),
(7, 'Devolución de lo pagado', 1, NULL),
(8, 'Producto en mal estado', 1, NULL),
(9, 'Mal servicio', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anonymous` tinyint(1) NOT NULL DEFAULT '1',
  `nit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `branchoffice_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `town_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `branch_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `category_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `complaint_vendor_id_foreign` (`vendor_id`),
  KEY `complaint_branchoffice_id_foreign` (`branchoffice_id`),
  KEY `complaint_department_id_foreign` (`department_id`),
  KEY `complaint_town_id_foreign` (`town_id`),
  KEY `complaint_branch_id_foreign` (`branch_id`),
  KEY `complaint_category_id_foreign` (`category_id`),
  KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `complaint`
--

INSERT INTO `complaint` (`id`, `summary`, `description`, `code`, `anonymous`, `nit`, `autor`, `status`, `vendor_id`, `branchoffice_id`, `department_id`, `town_id`, `created_at`, `branch_id`, `category_id`) VALUES
(1, 'Prueba de queja', 'Prueba de las 11:03', 'GT-GU0420210910170349', 1, NULL, NULL, 2, 1, 2, 6, 4, '2021-09-10 23:03:49', 1, 1),
(2, 'Prueba de queja', 'Prueba de las 11:29', 'GT-SA1720210910172922', 1, NULL, NULL, 1, 1, 1, 8, 17, '2021-09-10 23:29:22', 1, 1),
(3, 'Prueba de queja', 'Prueba del 16/sep', NULL, 1, NULL, NULL, 2, 1, 2, 6, 4, '2021-09-17 00:21:55', 1, 2),
(4, 'Prueba de queja', 'Queja del 16/sep', NULL, 1, NULL, NULL, 1, 8, 3, 6, 4, '2021-09-17 01:42:24', 1, 1),
(5, 'Prueba de queja', 'prueba de queja 18/sep', NULL, 1, NULL, NULL, 1, 8, 3, 6, 4, '2021-09-19 05:27:36', 1, 1),
(9, 'Prueba de queja', 'prueba 16:27', 'GT-GU0420210920222733', 1, NULL, NULL, 1, 8, 3, 6, 4, '2021-09-21 04:27:33', 1, 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `complaintview`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `complaintview`;
CREATE TABLE IF NOT EXISTS `complaintview` (
`region` varchar(255)
,`region_id` bigint(20) unsigned
,`department` varchar(255)
,`department_id` bigint(20) unsigned
,`town` varchar(255)
,`town_id` bigint(20) unsigned
,`vendor` varchar(255)
,`vendor_id` bigint(20) unsigned
,`id` bigint(20) unsigned
,`codigo` varchar(45)
,`summary` varchar(255)
,`description` text
,`fecha` timestamp
,`category` varchar(255)
,`category_id` bigint(20) unsigned
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `department_region_id_foreign` (`region_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `department`
--

INSERT INTO `department` (`id`, `name`, `code`, `status`, `region_id`, `created_at`) VALUES
(1, 'Alta Verapaz', '', 1, 1, '2021-09-09 20:21:00'),
(2, 'Baja Verapaz', '', 1, 1, '2021-09-09 20:21:00'),
(3, 'Petén', '', 1, 1, '2021-09-09 20:21:00'),
(4, 'Quiché', '', 1, 1, '2021-09-09 20:21:00'),
(5, 'Sololá', '', 1, 1, '2021-09-09 20:21:00'),
(6, 'Guatemala', 'GT-GU', 1, 2, '2021-09-09 20:21:00'),
(7, 'Chimaltenango', '', 1, 2, '2021-09-09 20:21:00'),
(8, 'Sacatepéquez', 'GT-SA', 1, 2, '2021-09-09 20:21:00'),
(9, 'Jutiapa', '', 1, 3, '2021-09-09 20:21:00'),
(10, 'Santa Rosa', '', 1, 3, '2021-09-09 20:21:01'),
(11, 'Escuintla', '', 1, 3, '2021-09-09 20:21:01'),
(12, 'Suchitepéquez', '', 1, 3, '2021-09-09 20:21:01'),
(13, 'Retalhuleu', '', 1, 3, '2021-09-09 20:21:01'),
(14, 'Izabal', '', 1, 4, '2021-09-09 20:21:01'),
(15, 'Zacapa', '', 1, 4, '2021-09-09 20:21:01'),
(16, 'Chiquimula', '', 1, 4, '2021-09-09 20:21:01'),
(17, 'Jalapa', '', 1, 4, '2021-09-09 20:21:01'),
(18, 'El progreso', '', 1, 4, '2021-09-09 20:21:01'),
(19, 'Quetzaltenango', '', 1, 5, '2021-09-09 20:21:02'),
(20, 'Totonicapán', '', 1, 5, '2021-09-09 20:21:02'),
(21, 'Huehuetenango', '', 1, 5, '2021-09-09 20:21:02'),
(22, 'San Marcos', '', 1, 5, '2021-09-09 20:21:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorate`
--

DROP TABLE IF EXISTS `directorate`;
CREATE TABLE IF NOT EXISTS `directorate` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `directorate`
--

INSERT INTO `directorate` (`id`, `name`, `logo`, `status`, `created_at`) VALUES
(1, 'Diaco', 'logo.png', 1, '2021-09-09 20:21:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_10_000535_create_region_table', 2),
(5, '2021_08_10_000912_create_department_table', 3),
(6, '2021_08_10_001016_create_town_table', 3),
(7, '2021_08_10_001038_create_commerce_table', 3),
(8, '2021_08_10_001056_create_branchoffice_table', 4),
(9, '2021_08_10_001120_create_complaint_table', 4),
(10, '2021_08_24_195848_create_directorate_table', 4),
(11, '2021_08_24_200134_create_directoratebranch_table', 4),
(12, '2021_08_24_201843_add_directoratebranch_id_to_complaint_table', 4),
(13, '2021_09_09_164716_create_role_table', 4),
(14, '2021_09_09_165134_create_category_table', 4),
(15, '2021_09_09_165938_add_role_to_users_table', 4),
(16, '2021_09_09_170010_add_branchoffice_to_users_table', 4),
(17, '2021_09_09_170059_add_category_to_complaint_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('13andreagarrido@gmail.com', '$2y$10$gzu9lULNcR/gmMZ1oY837.BHJo5uoHTsqzZ3KDGIHzAZhcw8pWt0e', '2021-09-19 05:59:53'),
('garridoandreag@gmail.com', '$2y$10$xImbAqq.ZS2GmBVf8fs7qOG6iVAf86CYTUqqmbZiacCvpG6aIb.eS', '2021-09-20 20:30:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'Norte', 1, '2021-09-09 20:21:00'),
(2, 'Centro', 1, '2021-09-09 20:21:00'),
(3, 'Sur', 1, '2021-09-09 20:21:00'),
(4, 'Oriente', 1, '2021-09-09 20:21:00'),
(5, 'Occidente', 1, '2021-09-09 20:21:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'Administrador', 1, '2021-09-10 02:20:59'),
(2, 'Empleado', 1, '2021-09-10 02:20:59');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `stadistic`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `stadistic`;
CREATE TABLE IF NOT EXISTS `stadistic` (
`department_id` bigint(20) unsigned
,`department` varchar(255)
,`vendor_id` bigint(20) unsigned
,`vendor` varchar(255)
,`quantity` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `town`
--

DROP TABLE IF EXISTS `town`;
CREATE TABLE IF NOT EXISTS `town` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `town_department_id_foreign` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `town`
--

INSERT INTO `town` (`id`, `name`, `status`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Amatitlán', 1, 6, NULL, NULL),
(2, 'Chinautla', 1, 6, NULL, NULL),
(3, 'Chuarrancho', 1, 6, NULL, NULL),
(4, 'Ciudad de Guatemala', 1, 6, NULL, NULL),
(5, 'Fraijanes', 1, 6, NULL, NULL),
(6, 'Mixco', 1, 6, NULL, NULL),
(7, 'Palencia', 1, 6, NULL, NULL),
(8, 'San José del Golfo', 1, 6, NULL, NULL),
(9, 'Chahal', 1, 1, NULL, NULL),
(10, 'Chisec', 1, 1, NULL, NULL),
(11, 'Cobán', 1, 1, NULL, NULL),
(12, 'Fray Bartolomé de las Casas', 1, 1, NULL, NULL),
(13, 'La Tinta', 1, 1, NULL, NULL),
(14, 'Lanquín', 1, 1, NULL, NULL),
(15, 'Panzós', 1, 1, NULL, NULL),
(16, '	Raxruhá', 1, 1, NULL, NULL),
(17, 'La Antigua', 1, 8, '2021-09-09 06:00:00', '2021-09-09 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `branch_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user_role_id_foreign` (`role_id`),
  KEY `user_branch_id_foreign` (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `status`, `created_at`, `role_id`, `branch_id`) VALUES
(1, 'Admin', '13andreagarrido@gmail.com', NULL, '$2y$10$H9gOgNsvE.ZuENxF9li6.OqICkVnYA//aFFVLDdVAgJQzBTgDZjam', 'LfO5SNgytUAx8lRBADwE1AckjcVH4r9TsnBilbPAokxbgs9WOWqSLN9t6gwf', '1631423061Jeanette Pineda.jpg', 1, '2021-09-10 02:45:48', 1, 1),
(2, 'Andrea Garrido', 'garridoandreag@gmail.com', NULL, '$2y$10$Mty4SX5GSugdbRkXklss1O1Q8u6JcSaw/L.HDJIZ3znYTpNPE5asy', NULL, 'user.png', 1, '2021-09-10 02:52:05', 2, 1),
(3, 'Andrea Garrido', 'andmgg@outlook.com', NULL, '$2y$10$5ohPwvoOEE9Je3TMU/hUauZXC3VbYl4S0C0Nr9L4wbLi21hXt102y', NULL, 'user.png', 1, '2021-09-18 23:23:18', 2, 1),
(4, 'Prueba', 'agarridog1@miumg.edu.gt', NULL, '$2y$10$UbF.Ek/VD9lY/hokkPQhbu04TcabTYD7wNhDxeXeCNravcCPc38bm', NULL, 'user.png', 1, '2021-09-19 01:10:49', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registeredname` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vendor`
--

INSERT INTO `vendor` (`id`, `name`, `registeredname`, `nit`, `status`, `created_at`) VALUES
(1, '& Café', '& Café', '60894368', 1, '2021-09-09 22:30:50'),
(2, '100 Montaditos', '100 Montaditos', '59822879', 1, '2021-09-09 22:30:50'),
(3, '7 Caldos', '7 Caldos', '11685881', 1, '2021-09-09 22:30:50'),
(4, 'Al Macarone', 'Al Macarone', '99043513', 0, '2021-09-09 22:30:50'),
(5, 'American Doughnuts', 'American Doughnuts', '90381113', 1, '2021-09-09 22:30:50'),
(6, 'Ánfora', 'Ánfora', '29100087', 1, '2021-09-09 22:30:50'),
(7, 'Applebees', 'Applebees', '32866669', 1, '2021-09-09 22:30:51'),
(8, 'Pollo Campero', 'Pollo Campero', '12345678', 1, '2021-09-12 10:57:07'),
(9, 'Prueba', 'Prueba', '87654321', 0, '2021-09-12 12:32:08'),
(10, 'Prueba 2', 'Prueba 2', '1234567', 1, '2021-09-12 12:33:01');

-- --------------------------------------------------------

--
-- Estructura para la vista `complaintview`
--
DROP TABLE IF EXISTS `complaintview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `complaintview`  AS  select `region`.`name` AS `region`,`region`.`id` AS `region_id`,`department`.`name` AS `department`,`complaint`.`department_id` AS `department_id`,`town`.`name` AS `town`,`complaint`.`town_id` AS `town_id`,`vendor`.`name` AS `vendor`,`complaint`.`vendor_id` AS `vendor_id`,`complaint`.`id` AS `id`,`complaint`.`code` AS `codigo`,`complaint`.`summary` AS `summary`,`complaint`.`description` AS `description`,`complaint`.`created_at` AS `fecha`,`category`.`name` AS `category`,`complaint`.`category_id` AS `category_id`,`complaint`.`status` AS `status` from (((((`complaint` join `department` on((`complaint`.`department_id` = `department`.`id`))) join `vendor` on((`complaint`.`vendor_id` = `vendor`.`id`))) join `town` on((`complaint`.`town_id` = `town`.`id`))) join `region` on((`department`.`region_id` = `region`.`id`))) join `category` on((`complaint`.`category_id` = `category`.`id`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `stadistic`
--
DROP TABLE IF EXISTS `stadistic`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stadistic`  AS  select `complaintview`.`department_id` AS `department_id`,`complaintview`.`department` AS `department`,`complaintview`.`vendor_id` AS `vendor_id`,`complaintview`.`vendor` AS `vendor`,count(`complaintview`.`id`) AS `quantity` from `complaintview` group by `complaintview`.`department_id`,`complaintview`.`department`,`complaintview`.`vendor_id`,`complaintview`.`vendor` ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_directorate_id_foreign` FOREIGN KEY (`directorate_id`) REFERENCES `directorate` (`id`);

--
-- Filtros para la tabla `branchoffice`
--
ALTER TABLE `branchoffice`
  ADD CONSTRAINT `branchoffice_town_id_foreign` FOREIGN KEY (`town_id`) REFERENCES `town` (`id`),
  ADD CONSTRAINT `branchoffice_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`);

--
-- Filtros para la tabla `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `complaint_branchoffice_id_foreign` FOREIGN KEY (`branchoffice_id`) REFERENCES `branchoffice` (`id`),
  ADD CONSTRAINT `complaint_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `complaint_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `complaint_town_id_foreign` FOREIGN KEY (`town_id`) REFERENCES `town` (`id`),
  ADD CONSTRAINT `complaint_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`);

--
-- Filtros para la tabla `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Filtros para la tabla `town`
--
ALTER TABLE `town`
  ADD CONSTRAINT `town_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
