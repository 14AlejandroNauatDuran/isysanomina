-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-06-2022 a las 16:21:32
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yii2_nomina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alb_cer`
--

DROP TABLE IF EXISTS `alb_cer`;
CREATE TABLE IF NOT EXISTS `alb_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc32_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc32_incen_id_idx` (`produc32_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alb_cer`
--

INSERT INTO `alb_cer` (`id`, `produc32_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.01835'),
(2, 1, 3301, 4000, '0.02054'),
(3, 1, 4001, 5500, '0.02183'),
(4, 1, 5501, 7000, '0.02300'),
(5, 1, 7001, 8000, '0.02378'),
(6, 1, 8001, NULL, '0.02664');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amatto_s_mt_e_cer`
--

DROP TABLE IF EXISTS `amatto_s_mt_e_cer`;
CREATE TABLE IF NOT EXISTS `amatto_s_mt_e_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc21_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc21_incen_id_idx` (`produc21_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `amatto_s_mt_e_cer`
--

INSERT INTO `amatto_s_mt_e_cer` (`id`, `produc21_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.02738'),
(2, 1, 3301, 4000, '0.03002'),
(3, 1, 4001, 5500, '0.03081'),
(4, 1, 5501, 7000, '0.03269'),
(5, 1, 7001, 8000, '0.03468'),
(6, 1, 8001, 10000, '0.03571'),
(7, 1, 10001, NULL, '0.03680');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amatto_s_mt_e_dir`
--

DROP TABLE IF EXISTS `amatto_s_mt_e_dir`;
CREATE TABLE IF NOT EXISTS `amatto_s_mt_e_dir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc22_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc22_incen_id_idx` (`produc22_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `amatto_s_mt_e_dir`
--

INSERT INTO `amatto_s_mt_e_dir` (`id`, `produc22_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 2, 1, 3300, '0.01534'),
(2, 2, 3301, 4000, '0.01681'),
(3, 2, 4001, 5500, '0.01725'),
(4, 2, 5501, 7000, '0.01831'),
(5, 2, 7001, 8000, '0.01943'),
(6, 2, 8001, 10000, '0.02000'),
(7, 2, 10001, NULL, '0.02061');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amsv`
--

DROP TABLE IF EXISTS `amsv`;
CREATE TABLE IF NOT EXISTS `amsv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc13_incen_id` int(1) NOT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc13_incen_id_idx` (`produc13_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `amsv`
--

INSERT INTO `amsv` (`id`, `produc13_incen_id`, `factor`) VALUES
(1, 3, '2.79295');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `at_au_cer`
--

DROP TABLE IF EXISTS `at_au_cer`;
CREATE TABLE IF NOT EXISTS `at_au_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc38_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc38_incen_id_idx` (`produc38_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `at_au_cer`
--

INSERT INTO `at_au_cer` (`id`, `produc38_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.01312'),
(2, 1, 3301, 4000, '0.01468'),
(3, 1, 4001, 5500, '0.01515'),
(4, 1, 5501, 7000, '0.01563'),
(5, 1, 7001, NULL, '0.01608');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `at_au_dir`
--

DROP TABLE IF EXISTS `at_au_dir`;
CREATE TABLE IF NOT EXISTS `at_au_dir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc39_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc39_incen_id_idx` (`produc39_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `at_au_dir`
--

INSERT INTO `at_au_dir` (`id`, `produc39_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 2, 1, 3300, '0.00655'),
(2, 2, 3301, 4000, '0.00734'),
(3, 2, 4001, 5500, '0.00757'),
(4, 2, 5501, 7000, '0.00782'),
(5, 2, 7001, NULL, '0.00804');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `at_au_via`
--

DROP TABLE IF EXISTS `at_au_via`;
CREATE TABLE IF NOT EXISTS `at_au_via` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc44_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc44_incen_id_idx` (`produc44_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `at_au_via`
--

INSERT INTO `at_au_via` (`id`, `produc44_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '1.41481'),
(2, 3, 40, 54, '1.58374'),
(3, 3, 55, NULL, '0.71196');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `at_cer`
--

DROP TABLE IF EXISTS `at_cer`;
CREATE TABLE IF NOT EXISTS `at_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc26_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc26_incen_id_idx` (`produc26_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `at_cer`
--

INSERT INTO `at_cer` (`id`, `produc26_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.01250'),
(2, 1, 3301, 4000, '0.01370'),
(3, 1, 4001, 5500, '0.01407'),
(4, 1, 5501, 7000, '0.01493'),
(5, 1, 7001, 8000, '0.01583'),
(6, 1, 8001, 10000, '0.01631'),
(7, 1, 10001, NULL, '0.01680');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `at_dir`
--

DROP TABLE IF EXISTS `at_dir`;
CREATE TABLE IF NOT EXISTS `at_dir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc27_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc27_incen_id_idx` (`produc27_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `at_dir`
--

INSERT INTO `at_dir` (`id`, `produc27_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 2, 1, 3300, '0.00700'),
(2, 2, 3301, 4000, '0.00767'),
(3, 2, 4001, 5500, '0.00787'),
(4, 2, 5501, 7000, '0.00835'),
(5, 2, 7001, 8000, '0.00887'),
(6, 2, 8001, 10000, '0.00913'),
(7, 2, 10001, NULL, '0.00940');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `at_via`
--

DROP TABLE IF EXISTS `at_via`;
CREATE TABLE IF NOT EXISTS `at_via` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc31_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc31_incen_id_idx` (`produc31_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `at_via`
--

INSERT INTO `at_via` (`id`, `produc31_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '1.41481'),
(2, 3, 40, 54, '1.58374'),
(3, 3, 55, NULL, '1.71196');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a_lav`
--

DROP TABLE IF EXISTS `a_lav`;
CREATE TABLE IF NOT EXISTS `a_lav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc6_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc6_incen_id_idx` (`produc6_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `a_lav`
--

INSERT INTO `a_lav` (`id`, `produc6_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '2.96758'),
(2, 3, 40, 54, '3.11545'),
(3, 3, 55, NULL, '3.33911');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a_pll_mc_e_css`
--

DROP TABLE IF EXISTS `a_pll_mc_e_css`;
CREATE TABLE IF NOT EXISTS `a_pll_mc_e_css` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc_incen_id_idx` (`produc_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `a_pll_mc_e_css`
--

INSERT INTO `a_pll_mc_e_css` (`id`, `produc_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.05272'),
(2, 1, 3301, 4000, '0.05902'),
(3, 1, 4001, 5500, '0.06271'),
(4, 1, 5501, 7000, '0.06606'),
(5, 1, 7001, 8000, '0.06831'),
(6, 1, 8001, 10000, '0.07655'),
(7, 1, 10001, NULL, '0.08038');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs`
--

DROP TABLE IF EXISTS `cs`;
CREATE TABLE IF NOT EXISTS `cs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc18_incen_id` int(1) NOT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc18_incen_id_idx` (`produc18_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cs`
--

INSERT INTO `cs` (`id`, `produc18_incen_id`, `factor`) VALUES
(1, 3, '1.93427'),
(2, 1, '0.00775');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_mc_a_pll_e_s`
--

DROP TABLE IF EXISTS `cs_mc_a_pll_e_s`;
CREATE TABLE IF NOT EXISTS `cs_mc_a_pll_e_s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc4_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc4_incen_id_idx` (`produc4_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cs_mc_a_pll_e_s`
--

INSERT INTO `cs_mc_a_pll_e_s` (`id`, `produc4_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 2, 1, 3300, '0.04591'),
(2, 2, 3301, 4000, '0.05141'),
(3, 2, 4001, 5500, '0.05462'),
(4, 2, 5501, 7000, '0.05753'),
(5, 2, 7001, 8000, '0.05949'),
(6, 2, 8001, 10000, '0.06666'),
(7, 2, 10001, NULL, '0.07000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_p_ap_cer`
--

DROP TABLE IF EXISTS `c_p_ap_cer`;
CREATE TABLE IF NOT EXISTS `c_p_ap_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc23_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc23_incen_id_idx` (`produc23_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `c_p_ap_cer`
--

INSERT INTO `c_p_ap_cer` (`id`, `produc23_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.02282'),
(2, 1, 3301, 4000, '0.02501'),
(3, 1, 4001, 5500, '0.02567'),
(4, 1, 5501, 7000, '0.02723'),
(5, 1, 7001, NULL, '0.02890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_p_ap_via`
--

DROP TABLE IF EXISTS `c_p_ap_via`;
CREATE TABLE IF NOT EXISTS `c_p_ap_via` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc29_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc29_incen_id_idx` (`produc29_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `c_p_ap_via`
--

INSERT INTO `c_p_ap_via` (`id`, `produc29_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '2.58233'),
(2, 3, 40, 54, '2.89067'),
(3, 3, 55, NULL, '3.12467');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `depto_nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `depto_nombre`) VALUES
(1, 'Cosecha y Campo'),
(2, 'Lavadoras'),
(3, ' Molinos y Envasados '),
(4, ' Mantenimiento Industrial '),
(5, ' Mantenimiento Esp. Coloradas '),
(6, ' Embarques ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descarga`
--

DROP TABLE IF EXISTS `descarga`;
CREATE TABLE IF NOT EXISTS `descarga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `des_in_id` int(2) NOT NULL,
  `detalle` varchar(45) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `des_in_id_idx` (`des_in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `des_in`
--

DROP TABLE IF EXISTS `des_in`;
CREATE TABLE IF NOT EXISTS `des_in` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombreD` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

DROP TABLE IF EXISTS `direccion`;
CREATE TABLE IF NOT EXISTS `direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calle_cruzamiento` varchar(45) NOT NULL,
  `no_ext` char(6) DEFAULT NULL,
  `no_int` char(6) DEFAULT NULL,
  `colonia` varchar(35) DEFAULT NULL,
  `poblacion` varchar(35) DEFAULT NULL,
  `municipio` varchar(35) DEFAULT NULL,
  `entidad_fede` varchar(35) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `cp` char(7) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empleado_clave` char(6) DEFAULT NULL,
  `apellido_P` char(20) DEFAULT NULL,
  `apellido_M` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `puesto_id` int(2) NOT NULL,
  `turnos_id` int(2) NOT NULL,
  `tipo_empleado_id` int(1) NOT NULL,
  `direccion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_empleado_id_idx` (`tipo_empleado_id`),
  KEY `turnos_id_idx` (`turnos_id`),
  KEY `direccion_id_idx` (`direccion_id`),
  KEY `puesto_id_idx` (`puesto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e_a`
--

DROP TABLE IF EXISTS `e_a`;
CREATE TABLE IF NOT EXISTS `e_a` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc25_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc25_incen_id_idx` (`produc25_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `e_a`
--

INSERT INTO `e_a` (`id`, `produc25_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.02282'),
(2, 1, 3301, 4000, '0.02501'),
(3, 1, 4001, 5500, '0.02567'),
(4, 1, 5501, 7000, '0.02723'),
(5, 1, 7001, NULL, '0.02890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `e_a_via`
--

DROP TABLE IF EXISTS `e_a_via`;
CREATE TABLE IF NOT EXISTS `e_a_via` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc30_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc30_incen_id_idx` (`produc30_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `e_a_via`
--

INSERT INTO `e_a_via` (`id`, `produc30_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '2.58233'),
(2, 3, 40, 54, '2.89067'),
(3, 3, 55, NULL, '3.12467');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

DROP TABLE IF EXISTS `incidencia`;
CREATE TABLE IF NOT EXISTS `incidencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) DEFAULT NULL,
  `conepto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lav`
--

DROP TABLE IF EXISTS `lav`;
CREATE TABLE IF NOT EXISTS `lav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc5_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc5_incen_id_idx` (`produc5_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lav`
--

INSERT INTO `lav` (`id`, `produc5_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '4.15455'),
(2, 3, 40, 54, '4.43096'),
(3, 3, 55, NULL, '4.71158');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mon`
--

DROP TABLE IF EXISTS `mon`;
CREATE TABLE IF NOT EXISTS `mon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producc_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `producc_incen_id_idx` (`producc_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mon`
--

INSERT INTO `mon` (`id`, `producc_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(8, 1, 1, 3300, '0.06828'),
(9, 1, 3301, 4000, '0.07485'),
(10, 1, 4001, 5500, '0.07683'),
(11, 1, 5501, 7000, '0.08153'),
(12, 1, 7001, 8000, '0.08648'),
(15, 1, 8001, 10000, '0.09143'),
(16, 1, 10001, NULL, '0.09640');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_b_cer`
--

DROP TABLE IF EXISTS `m_b_cer`;
CREATE TABLE IF NOT EXISTS `m_b_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc41_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc41_incen_id_idx` (`produc41_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `m_b_cer`
--

INSERT INTO `m_b_cer` (`id`, `produc41_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.06828'),
(2, 1, 3301, 4000, '0.07485'),
(3, 1, 4001, 5500, '0.07683'),
(4, 1, 5501, 7000, '0.08153'),
(5, 1, 7001, 8000, '0.08648'),
(6, 1, 8001, 10000, '0.09143'),
(7, 1, 10001, NULL, '0.09640');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_b_dir`
--

DROP TABLE IF EXISTS `m_b_dir`;
CREATE TABLE IF NOT EXISTS `m_b_dir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc42_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc42_incen_id_idx` (`produc42_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `m_b_dir`
--

INSERT INTO `m_b_dir` (`id`, `produc42_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 2, 1, 3300, '0.06828'),
(2, 2, 3301, 4000, '0.07485'),
(3, 2, 4001, 5500, '0.07683'),
(4, 2, 5501, 7000, '0.08153'),
(5, 2, 7001, 8000, '0.08648'),
(6, 2, 8001, 10000, '0.09143'),
(7, 2, 10001, NULL, '0.09640');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_b_via`
--

DROP TABLE IF EXISTS `m_b_via`;
CREATE TABLE IF NOT EXISTS `m_b_via` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc43_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc43_incen_id_idx` (`produc43_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `m_b_via`
--

INSERT INTO `m_b_via` (`id`, `produc43_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '2.69635'),
(2, 3, 40, 54, '3.01832'),
(3, 3, 55, NULL, '3.26264');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_e_ll_l_cer`
--

DROP TABLE IF EXISTS `m_e_ll_l_cer`;
CREATE TABLE IF NOT EXISTS `m_e_ll_l_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc35_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc35_incen_id_idx` (`produc35_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `m_e_ll_l_cer`
--

INSERT INTO `m_e_ll_l_cer` (`id`, `produc35_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.02499'),
(2, 1, 3301, 4000, '0.02801'),
(3, 1, 4001, 5500, '0.02887'),
(4, 1, 5501, 7000, '0.02978'),
(5, 1, 7001, NULL, '0.03066');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_e_ll_l_dir`
--

DROP TABLE IF EXISTS `m_e_ll_l_dir`;
CREATE TABLE IF NOT EXISTS `m_e_ll_l_dir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc36_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc36_incen_id_idx` (`produc36_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `m_e_ll_l_dir`
--

INSERT INTO `m_e_ll_l_dir` (`id`, `produc36_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 2, 1, 3300, '0.01249'),
(2, 2, 3301, 4000, '0.01400'),
(3, 2, 4001, 5500, '0.01444'),
(4, 2, 5501, 7000, '0.01488'),
(5, 2, 7001, NULL, '0.01533');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_e_ll_l_vie`
--

DROP TABLE IF EXISTS `m_e_ll_l_vie`;
CREATE TABLE IF NOT EXISTS `m_e_ll_l_vie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc37_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc37_incen_id_idx` (`produc37_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `m_e_ll_l_vie`
--

INSERT INTO `m_e_ll_l_vie` (`id`, `produc37_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '2.69635'),
(2, 3, 40, 54, '3.01832'),
(3, 3, 55, NULL, '3.26264');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `omp`
--

DROP TABLE IF EXISTS `omp`;
CREATE TABLE IF NOT EXISTS `omp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc11_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc11_incen_id_idx` (`produc11_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `omp`
--

INSERT INTO `omp` (`id`, `produc11_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '5.15947'),
(2, 3, 40, 54, '5.77561'),
(3, 3, 55, NULL, '6.24312');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ot`
--

DROP TABLE IF EXISTS `ot`;
CREATE TABLE IF NOT EXISTS `ot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc_incen10_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc10_incen_id_idx` (`produc_incen10_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ot`
--

INSERT INTO `ot` (`id`, `produc_incen10_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 9, '2.96758'),
(2, 3, 10, 19, '3.11545'),
(3, 3, 20, NULL, '3.33911');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otx_aco`
--

DROP TABLE IF EXISTS `otx_aco`;
CREATE TABLE IF NOT EXISTS `otx_aco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc15_incen_id` int(1) NOT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc15_incen_id_idx` (`produc15_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `otx_aco`
--

INSERT INTO `otx_aco` (`id`, `produc15_incen_id`, `factor`) VALUES
(1, 3, '1.64340');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otx_amo`
--

DROP TABLE IF EXISTS `otx_amo`;
CREATE TABLE IF NOT EXISTS `otx_amo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc16_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc16_incen_id_idx` (`produc16_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `otx_amo`
--

INSERT INTO `otx_amo` (`id`, `produc16_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.06828'),
(2, 1, 3301, 4000, '0.07485'),
(3, 1, 4001, 5500, '0.07683'),
(4, 1, 5501, 7000, '0.08153'),
(5, 1, 7001, 8000, '0.08648'),
(6, 1, 8001, 10000, '0.09143'),
(7, 1, 10001, NULL, '0.09640');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otx_otc`
--

DROP TABLE IF EXISTS `otx_otc`;
CREATE TABLE IF NOT EXISTS `otx_otc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc17_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc17_incen_id_idx` (`produc17_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `otx_otc`
--

INSERT INTO `otx_otc` (`id`, `produc17_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.05272'),
(2, 1, 3301, 4000, '0.05902'),
(3, 1, 4001, 5500, '0.06271'),
(4, 1, 5501, 7000, '0.06606'),
(5, 1, 7001, 8000, '0.06831'),
(6, 1, 8001, 10000, '0.07655'),
(7, 1, 10001, NULL, '0.08038');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

DROP TABLE IF EXISTS `produccion`;
CREATE TABLE IF NOT EXISTS `produccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_incen_id` int(1) NOT NULL,
  `turnos1_id` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `prod_incen_id_idx` (`prod_incen_id`),
  KEY `turnos1_id_idx` (`turnos1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produc_incen`
--

DROP TABLE IF EXISTS `produc_incen`;
CREATE TABLE IF NOT EXISTS `produc_incen` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nombreP` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `produc_incen`
--

INSERT INTO `produc_incen` (`id`, `nombreP`) VALUES
(1, ' CERNIDAS'),
(2, ' DIRECTAS'),
(3, ' VIAJES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

DROP TABLE IF EXISTS `puesto`;
CREATE TABLE IF NOT EXISTS `puesto` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `puesto_clave` char(15) NOT NULL,
  `puesto_nombre` varchar(60) NOT NULL,
  `departamento_id` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departamento_id_idx` (`departamento_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`id`, `puesto_clave`, `puesto_nombre`, `departamento_id`) VALUES
(1, ' OMPR', 'Oper. de Maq. Pesada Retro', 1),
(2, ' OMP', 'Oper. de Maq. Pesada ', 1),
(3, ' OT', 'Oper. TractocamiÃ³n', 1),
(4, ' M_B', 'MecanicoB', 1),
(5, ' CS', 'Chofer de Servicios', 1),
(6, ' TCOS', 'Trabajador de Cosecha', 1),
(7, ' TCAM', 'Trabajador de Campo', 1),
(8, ' LAV', 'Lavadorista', 2),
(9, ' LAV_AY', 'Lavadorista (Ayudante)', 2),
(10, ' OM', 'Oper. de Montacarga', 3),
(11, ' ALI', 'Alimentador', 3),
(12, ' MOL_CRI', 'Molinero Cribero', 3),
(13, ' MOL_CRI_DIR', 'Molinero Cribero Directas', 3),
(14, ' PLL', 'Pesador Llenador', 3),
(15, ' PLL_DIR', 'Pesador Llenador Directas', 3),
(16, ' COST_SA', 'Costrador de sacos', 3),
(17, ' COST_SA_DIR', 'Costrador de sacos Directas', 3),
(18, ' OPER_BIGBAG', 'Operador de Maq. Big bag', 3),
(19, ' EST', 'Estibador', 3),
(20, ' EST_DIR', 'Estibador Directas', 3),
(21, ' SU_MOL', 'Suplente', 3),
(22, ' TL', 'Trabajdor de Limpieza', 3),
(24, 'C', 'ENCARGADO DE CARPINTERIA', 4),
(25, 'EA', 'EBANISTA/ALUMINIERO', 4),
(26, 'P', 'PLOMERO', 4),
(27, 'AP', 'PLOMERO(AYUDANTE)', 4),
(28, 'TMM', 'TRABAJADOR DE MANTTO.(MUELLE)', 4),
(29, 'E', 'ELECTRICISTA INSTALA', 4),
(30, 'S', 'SOLDADOR', 4),
(31, 'MT', 'MECANICO TORNERO A', 4),
(32, 'AMME', 'AUX. MANTTO.MOLINOS Y ENV.', 4),
(33, 'AMM', 'AYUDANTE DE MANTTO. MOLINOS', 4),
(34, 'TMC', 'TRABAJADOR DE MANTTO (CAMPO)', 4),
(35, 'ALB', 'ALBAÑIL', 4),
(36, 'MM', 'MANIOBRISTA DE MUELLE', 4),
(37, 'AT', 'AYUDANTE DE TALLER', 4),
(38, 'ATL', 'AYUDANTE DE TALLER LAV.', 4),
(39, 'EAB', 'ELECT. AUTOMOTRIZ B', 5),
(40, 'EAA', 'ELECT. AUTOMOTRIZ A', 5),
(41, 'MA', 'MECANICO A', 5),
(42, 'LL', 'LLANTERO', 5),
(43, 'LU', 'LUBRICADOR', 5),
(44, 'AYUT', 'AYUDANTE DE TALLER', 5),
(45, 'TLIM', 'TRABAJADOR DE LIMPIEZA', 5),
(46, 'TTV', 'TRAB. DE TRABAJOS VARIOS', 6),
(47, 'TTVE', 'TRAB. DE TRABAJOS VARIOS(EVENTUAL)', 6),
(48, 'TLIG', 'TRABAJADOR LIMPIEZA (IGLESIA)', 6),
(49, 'TLSIN', 'TRABAJADOR DE LIMPIEZA (SINDICATO)', 6),
(50, 'TLPRO', 'TRABAJADOR DE LIM (PRODUCCION)', 6),
(51, 'SV', 'SERVICIOS VARIOS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_ap_dir`
--

DROP TABLE IF EXISTS `p_ap_dir`;
CREATE TABLE IF NOT EXISTS `p_ap_dir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc24_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc24_incen_id_idx` (`produc24_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `p_ap_dir`
--

INSERT INTO `p_ap_dir` (`id`, `produc24_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 2, 1, 3300, '0.01277'),
(2, 2, 3301, 4000, '0.01401'),
(3, 2, 4001, 5500, '0.01438'),
(4, 2, 5501, 7000, '0.01526'),
(5, 2, 7001, NULL, '0.01619');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salarios`
--

DROP TABLE IF EXISTS `salarios`;
CREATE TABLE IF NOT EXISTS `salarios` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `departamento1_id` int(1) NOT NULL,
  `puesto1_id` int(2) NOT NULL,
  `monto` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `departamento1_id_idx` (`departamento1_id`),
  KEY `puesto1_id_idx` (`puesto1_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salarios`
--

INSERT INTO `salarios` (`id`, `departamento1_id`, `puesto1_id`, `monto`) VALUES
(1, 1, 1, '396.22'),
(2, 1, 2, '328.05'),
(3, 1, 3, '300.82'),
(4, 1, 4, '284.24'),
(5, 1, 5, '223.72'),
(6, 1, 6, '212.52'),
(7, 1, 7, '212.52'),
(8, 1, 51, '256.85'),
(9, 2, 2, '328.05'),
(10, 2, 8, '256.26'),
(11, 2, 9, '211.47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semana`
--

DROP TABLE IF EXISTS `semana`;
CREATE TABLE IF NOT EXISTS `semana` (
  `id` int(11) NOT NULL,
  `n_semana_con` varchar(45) DEFAULT NULL,
  `fecha_ini` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL,
  `empleado_id` varchar(45) DEFAULT NULL,
  `turno_id` varchar(45) DEFAULT NULL,
  `miercoles` varchar(45) DEFAULT NULL,
  `jueves` varchar(45) DEFAULT NULL,
  `viernes` varchar(45) DEFAULT NULL,
  `sabado` varchar(45) DEFAULT NULL,
  `domingo` varchar(45) DEFAULT NULL,
  `lunes` varchar(45) DEFAULT NULL,
  `martes` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s_mt_e_cer`
--

DROP TABLE IF EXISTS `s_mt_e_cer`;
CREATE TABLE IF NOT EXISTS `s_mt_e_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc19_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc19_incen_id_idx` (`produc19_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `s_mt_e_cer`
--

INSERT INTO `s_mt_e_cer` (`id`, `produc19_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.02489'),
(2, 1, 3301, 4000, '0.02729'),
(3, 1, 4001, 5500, '0.02801'),
(4, 1, 5501, 7000, '0.02971'),
(5, 1, 7001, 8000, '0.03153'),
(6, 1, 8001, 10000, '0.03246'),
(7, 1, 10001, NULL, '0.03345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s_mt_e_dir`
--

DROP TABLE IF EXISTS `s_mt_e_dir`;
CREATE TABLE IF NOT EXISTS `s_mt_e_dir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc20_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc20_incen_id_idx` (`produc20_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `s_mt_e_dir`
--

INSERT INTO `s_mt_e_dir` (`id`, `produc20_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 2, 1, 3300, '0.01395'),
(2, 2, 3301, 4000, '0.01528'),
(3, 2, 4001, 5500, '0.01568'),
(4, 2, 5501, 7000, '0.01664'),
(5, 2, 7001, 8000, '0.01766'),
(6, 2, 8001, 10000, '0.01818'),
(7, 2, 10001, NULL, '0.01874');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s_mt_e_via`
--

DROP TABLE IF EXISTS `s_mt_e_via`;
CREATE TABLE IF NOT EXISTS `s_mt_e_via` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc28_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc28_incen_id_idx` (`produc28_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `s_mt_e_via`
--

INSERT INTO `s_mt_e_via` (`id`, `produc28_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '2.81709'),
(2, 3, 40, 54, '3.15346'),
(3, 3, 55, NULL, '3.40874');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc`
--

DROP TABLE IF EXISTS `tc`;
CREATE TABLE IF NOT EXISTS `tc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc12_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc12_incen_id_idx` (`produc12_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tc`
--

INSERT INTO `tc` (`id`, `produc12_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '3.08378'),
(2, 3, 40, 54, '3.42153'),
(3, 3, 55, NULL, '3.74562');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empleado`
--

DROP TABLE IF EXISTS `tipo_empleado`;
CREATE TABLE IF NOT EXISTS `tipo_empleado` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `tipo_nombre` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_empleado`
--

INSERT INTO `tipo_empleado` (`id`, `tipo_nombre`) VALUES
(1, ' Sindicato '),
(2, ' Confianza ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tlm_c`
--

DROP TABLE IF EXISTS `tlm_c`;
CREATE TABLE IF NOT EXISTS `tlm_c` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc3_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc3_incen_id_idx` (`produc3_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tlm_c`
--

INSERT INTO `tlm_c` (`id`, `produc3_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(7, 1, 1, 3300, '0.03195'),
(8, 1, 3301, 4000, '0.03578'),
(9, 1, 4001, 5500, '0.03801'),
(10, 1, 5501, 7000, '0.04005'),
(11, 1, 7001, 8000, '0.04139'),
(12, 1, 8001, NULL, '0.04638');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tl_cer`
--

DROP TABLE IF EXISTS `tl_cer`;
CREATE TABLE IF NOT EXISTS `tl_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc40_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc40_incen_id_idx` (`produc40_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tl_cer`
--

INSERT INTO `tl_cer` (`id`, `produc40_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.03307'),
(2, 1, 3301, 4000, '0.03703'),
(3, 1, 4001, 5500, '0.03936'),
(4, 1, 5501, 7000, '0.04145'),
(5, 1, 7001, 8000, '0.04285'),
(6, 1, 8001, NULL, '0.04801');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_3_pcos`
--

DROP TABLE IF EXISTS `tm_3_pcos`;
CREATE TABLE IF NOT EXISTS `tm_3_pcos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc34_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc34_incen_id_idx` (`produc34_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tm_3_pcos`
--

INSERT INTO `tm_3_pcos` (`id`, `produc34_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 3, 1, 39, '1.45469'),
(2, 3, 40, 54, '1.52718'),
(3, 3, 55, NULL, '1.63682');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_ts_cer`
--

DROP TABLE IF EXISTS `tm_ts_cer`;
CREATE TABLE IF NOT EXISTS `tm_ts_cer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc33_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc33_incen_id_idx` (`produc33_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tm_ts_cer`
--

INSERT INTO `tm_ts_cer` (`id`, `produc33_incen_id`, `rangoA`, `rangoB`, `factor`) VALUES
(1, 1, 1, 3300, '0.01852'),
(2, 1, 3301, 4000, '0.02073'),
(3, 1, 4001, 5500, '0.02203'),
(4, 1, 5501, 7000, '0.02320'),
(5, 1, 7001, 8000, '0.02400'),
(6, 1, 8001, NULL, '0.02688');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttv`
--

DROP TABLE IF EXISTS `ttv`;
CREATE TABLE IF NOT EXISTS `ttv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc7_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc7_incen_id_idx` (`produc7_incen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttv_ll`
--

DROP TABLE IF EXISTS `ttv_ll`;
CREATE TABLE IF NOT EXISTS `ttv_ll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc8_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc8_incen_id_idx` (`produc8_incen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttv_m`
--

DROP TABLE IF EXISTS `ttv_m`;
CREATE TABLE IF NOT EXISTS `ttv_m` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc9_incen_id` int(1) NOT NULL,
  `rangoA` int(11) DEFAULT NULL,
  `rangoB` int(11) DEFAULT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc9_incen_id_idx` (`produc9_incen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

DROP TABLE IF EXISTS `turnos`;
CREATE TABLE IF NOT EXISTS `turnos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `turno_clave` char(5) NOT NULL,
  `turno_nombre` char(20) NOT NULL,
  `hora_inicio` time(6) NOT NULL,
  `hora_fin` time(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id`, `turno_clave`, `turno_nombre`, `hora_inicio`, `hora_fin`) VALUES
(1, ' PRI', 'Primero', '07:00:00.000000', '15:00:00.000000'),
(2, ' SEG', 'Segundo', '15:00:00.000000', '23:00:00.000000'),
(3, ' TER', 'Tercero', '23:00:00.000000', '07:00:00.000000'),
(4, ' CORT', 'Cortado', '07:00:00.000000', '17:00:00.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_campo`
--

DROP TABLE IF EXISTS `t_campo`;
CREATE TABLE IF NOT EXISTS `t_campo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produc14_incen_id` int(1) NOT NULL,
  `factor` decimal(8,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produc14_incen_id_idx` (`produc14_incen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_campo`
--

INSERT INTO `t_campo` (`id`, `produc14_incen_id`, `factor`) VALUES
(1, 3, '3.08378');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `confirmado` tinyint(1) DEFAULT NULL,
  `token` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `telefono`, `admin`, `confirmado`, `token`) VALUES
(2, ' Alejandro ', 'Nauat', 'alejandrodelacruznauatduran@gmail.com', '$2y$10$w/3Smq33KDEfN8YMva4qCucT/jtcPyMw6oAZB50zrlmc2KRQmRPDy', '9861068725', 0, 1, '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alb_cer`
--
ALTER TABLE `alb_cer`
  ADD CONSTRAINT `produc32_incen_id` FOREIGN KEY (`produc32_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `amatto_s_mt_e_cer`
--
ALTER TABLE `amatto_s_mt_e_cer`
  ADD CONSTRAINT `produc21_incen_id` FOREIGN KEY (`produc21_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `amatto_s_mt_e_dir`
--
ALTER TABLE `amatto_s_mt_e_dir`
  ADD CONSTRAINT `produc22_incen_id` FOREIGN KEY (`produc22_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `amsv`
--
ALTER TABLE `amsv`
  ADD CONSTRAINT `produc13_incen_id` FOREIGN KEY (`produc13_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `at_au_cer`
--
ALTER TABLE `at_au_cer`
  ADD CONSTRAINT `produc38_incen_id` FOREIGN KEY (`produc38_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `at_au_dir`
--
ALTER TABLE `at_au_dir`
  ADD CONSTRAINT `produc39_incen_id` FOREIGN KEY (`produc39_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `at_au_via`
--
ALTER TABLE `at_au_via`
  ADD CONSTRAINT `produc44_incen_id` FOREIGN KEY (`produc44_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `at_cer`
--
ALTER TABLE `at_cer`
  ADD CONSTRAINT `produc26_incen_id` FOREIGN KEY (`produc26_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `at_dir`
--
ALTER TABLE `at_dir`
  ADD CONSTRAINT `produc27_incen_id` FOREIGN KEY (`produc27_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `at_via`
--
ALTER TABLE `at_via`
  ADD CONSTRAINT `produc31_incen_id` FOREIGN KEY (`produc31_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `a_lav`
--
ALTER TABLE `a_lav`
  ADD CONSTRAINT `produc6_incen_id` FOREIGN KEY (`produc6_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `a_pll_mc_e_css`
--
ALTER TABLE `a_pll_mc_e_css`
  ADD CONSTRAINT `produc_incen_id` FOREIGN KEY (`produc_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cs`
--
ALTER TABLE `cs`
  ADD CONSTRAINT `produc18_incen_id` FOREIGN KEY (`produc18_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cs_mc_a_pll_e_s`
--
ALTER TABLE `cs_mc_a_pll_e_s`
  ADD CONSTRAINT `produc4_incen_id` FOREIGN KEY (`produc4_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `c_p_ap_cer`
--
ALTER TABLE `c_p_ap_cer`
  ADD CONSTRAINT `produc23_incen_id` FOREIGN KEY (`produc23_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `c_p_ap_via`
--
ALTER TABLE `c_p_ap_via`
  ADD CONSTRAINT `produc29_incen_id` FOREIGN KEY (`produc29_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `descarga`
--
ALTER TABLE `descarga`
  ADD CONSTRAINT `des_in_id` FOREIGN KEY (`des_in_id`) REFERENCES `des_in` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `direccion_id` FOREIGN KEY (`direccion_id`) REFERENCES `direccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `puesto_id` FOREIGN KEY (`puesto_id`) REFERENCES `puesto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tipo_empleado_id` FOREIGN KEY (`tipo_empleado_id`) REFERENCES `tipo_empleado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `turnos_id` FOREIGN KEY (`turnos_id`) REFERENCES `turnos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `e_a`
--
ALTER TABLE `e_a`
  ADD CONSTRAINT `produc25_incen_id` FOREIGN KEY (`produc25_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `e_a_via`
--
ALTER TABLE `e_a_via`
  ADD CONSTRAINT `produc30_incen_id` FOREIGN KEY (`produc30_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `lav`
--
ALTER TABLE `lav`
  ADD CONSTRAINT `produc5_incen_id` FOREIGN KEY (`produc5_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `producc_incen_id` FOREIGN KEY (`producc_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `m_b_cer`
--
ALTER TABLE `m_b_cer`
  ADD CONSTRAINT `produc41_incen_id` FOREIGN KEY (`produc41_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `m_b_dir`
--
ALTER TABLE `m_b_dir`
  ADD CONSTRAINT `produc42_incen_id` FOREIGN KEY (`produc42_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `m_b_via`
--
ALTER TABLE `m_b_via`
  ADD CONSTRAINT `produc43_incen_id` FOREIGN KEY (`produc43_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `m_e_ll_l_cer`
--
ALTER TABLE `m_e_ll_l_cer`
  ADD CONSTRAINT `produc35_incen_id` FOREIGN KEY (`produc35_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `m_e_ll_l_dir`
--
ALTER TABLE `m_e_ll_l_dir`
  ADD CONSTRAINT `produc36_incen_id` FOREIGN KEY (`produc36_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `m_e_ll_l_vie`
--
ALTER TABLE `m_e_ll_l_vie`
  ADD CONSTRAINT `produc37_incen_id` FOREIGN KEY (`produc37_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `omp`
--
ALTER TABLE `omp`
  ADD CONSTRAINT `produc11_incen_id` FOREIGN KEY (`produc11_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ot`
--
ALTER TABLE `ot`
  ADD CONSTRAINT `produc10_incen_id` FOREIGN KEY (`produc_incen10_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `otx_aco`
--
ALTER TABLE `otx_aco`
  ADD CONSTRAINT `produc15_incen_id` FOREIGN KEY (`produc15_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `otx_amo`
--
ALTER TABLE `otx_amo`
  ADD CONSTRAINT `produc16_incen_id` FOREIGN KEY (`produc16_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `otx_otc`
--
ALTER TABLE `otx_otc`
  ADD CONSTRAINT `produc17_incen_id` FOREIGN KEY (`produc17_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `prod_incen_id` FOREIGN KEY (`prod_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `turnos1_id` FOREIGN KEY (`turnos1_id`) REFERENCES `turnos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD CONSTRAINT `departamento_id` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `p_ap_dir`
--
ALTER TABLE `p_ap_dir`
  ADD CONSTRAINT `produc24_incen_id` FOREIGN KEY (`produc24_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salarios`
--
ALTER TABLE `salarios`
  ADD CONSTRAINT `departamento1_id` FOREIGN KEY (`departamento1_id`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `puesto1_id` FOREIGN KEY (`puesto1_id`) REFERENCES `puesto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `s_mt_e_cer`
--
ALTER TABLE `s_mt_e_cer`
  ADD CONSTRAINT `produc19_incen_id` FOREIGN KEY (`produc19_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `s_mt_e_dir`
--
ALTER TABLE `s_mt_e_dir`
  ADD CONSTRAINT `produc20_incen_id` FOREIGN KEY (`produc20_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `s_mt_e_via`
--
ALTER TABLE `s_mt_e_via`
  ADD CONSTRAINT `produc28_incen_id` FOREIGN KEY (`produc28_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tc`
--
ALTER TABLE `tc`
  ADD CONSTRAINT `produc12_incen_id` FOREIGN KEY (`produc12_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tlm_c`
--
ALTER TABLE `tlm_c`
  ADD CONSTRAINT `produc3_incen_id` FOREIGN KEY (`produc3_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tl_cer`
--
ALTER TABLE `tl_cer`
  ADD CONSTRAINT `produc40_incen_id` FOREIGN KEY (`produc40_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tm_3_pcos`
--
ALTER TABLE `tm_3_pcos`
  ADD CONSTRAINT `produc34_incen_id` FOREIGN KEY (`produc34_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tm_ts_cer`
--
ALTER TABLE `tm_ts_cer`
  ADD CONSTRAINT `produc33_incen_id` FOREIGN KEY (`produc33_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ttv`
--
ALTER TABLE `ttv`
  ADD CONSTRAINT `produc7_incen_id` FOREIGN KEY (`produc7_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ttv_ll`
--
ALTER TABLE `ttv_ll`
  ADD CONSTRAINT `produc8_incen_id` FOREIGN KEY (`produc8_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ttv_m`
--
ALTER TABLE `ttv_m`
  ADD CONSTRAINT `produc9_incen_id` FOREIGN KEY (`produc9_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t_campo`
--
ALTER TABLE `t_campo`
  ADD CONSTRAINT `produc14_incen_id` FOREIGN KEY (`produc14_incen_id`) REFERENCES `produc_incen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
