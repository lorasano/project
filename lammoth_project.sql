-- phpMyAdmin SQL Dump
-- version 2.11.9.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-07-2009 a las 12:39:39
-- Versión del servidor: 5.1.30
-- Versión de PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lammoth_project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `common_data_users`
--

CREATE TABLE IF NOT EXISTS `common_data_users` (
  `users_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `birth` date NOT NULL,
  `phone` varchar(30) NOT NULL,
  `contact_email` varchar(70) NOT NULL,
  `web` varchar(70) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`users_id`),
  KEY `fk_common_data_users_users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `common_data_users`
--

INSERT INTO `common_data_users` (`users_id`, `firstname`, `lastname`, `address`, `city`, `country`, `birth`, `phone`, `contact_email`, `web`, `photo`) VALUES
(1, 'Master', 'Roshi', 'Kame House', 'Turtle Island', 'Japan', '1968-05-19', '665665665', 'mutenroshi@capsulecorp.jp', 'www.searchthesevenballs.com', ''),
(2, 'Bulma', 'ApellidoRaroJapones', 'Capsule Corp', 'Central', 'Japan', '1907-05-24', '345345345', 'bulma@capsulecorp.jp', 'bulma.capsulecorp.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `com_activities`
--

CREATE TABLE IF NOT EXISTS `com_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `com_activities`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `com_profiles`
--

CREATE TABLE IF NOT EXISTS `com_profiles` (
  `users_id` int(11) NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `creation_year` date NOT NULL,
  `employee_number` int(11) NOT NULL,
  `cif` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `com_sectors_activities_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`users_id`),
  KEY `fk_com_profiles_com_sectors_activities` (`com_sectors_activities_id`),
  KEY `fk_com_profiles_users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcar la base de datos para la tabla `com_profiles`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `com_sectors`
--

CREATE TABLE IF NOT EXISTS `com_sectors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `com_sectors`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `com_sectors_activities`
--

CREATE TABLE IF NOT EXISTS `com_sectors_activities` (
  `id` int(11) NOT NULL,
  `com_sectors_id` int(11) NOT NULL,
  `com_activities_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_com_sectors_has_com_activities_com_sectors` (`com_sectors_id`),
  KEY `fk_com_sectors_has_com_activities_com_activities` (`com_activities_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcar la base de datos para la tabla `com_sectors_activities`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(70) NOT NULL,
  `password` varchar(45) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `type` enum('enterprise','user') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `modified`, `type`) VALUES
(1, 'mutenroshi@capsulecorp.jp', '5aaa3106637f901ffd9633a25e1e3592e2b15fcb', '2009-05-20', '2009-05-20', 'enterprise'),
(2, 'bulma@capsulecorp.jp', '5aaa3106637f901ffd9633a25e1e3592e2b15fcb', '2009-05-20', '2009-05-20', 'enterprise'),
(3, 'hola@hola.com', 'ee7b5b1f9581753e046d93598d60659598d85f07', '2009-06-01', '2009-06-01', 'enterprise'),
(4, 'aja@aja.com', 'a148ad83156721b65106fd2259f513aab5ffbc2d', '2009-06-01', '2009-06-01', 'enterprise'),
(5, 'fran@fran.com', '4e482e6d2345e3e788e4aa2dc241a860672bb9c7', '2009-06-01', '2009-06-01', 'enterprise'),
(6, 'prueba@prueba.com', '4e482e6d2345e3e788e4aa2dc241a860672bb9c7', '2009-06-01', '2009-06-01', 'enterprise'),
(7, 'firefox@firefox.com', '4e482e6d2345e3e788e4aa2dc241a860672bb9c7', '2009-06-01', '2009-06-01', 'enterprise'),
(8, 'login@login.com', '3b788776f4e2792dc1dc313f62fd27ca74678b19', '2009-06-01', '2009-06-01', 'enterprise'),
(9, 'crisanta@crisanta.com', '4e482e6d2345e3e788e4aa2dc241a860672bb9c7', '2009-06-01', '2009-06-01', 'enterprise'),
(10, 'pepearnesto@pepearnesto.com', '5a9f48a900a8f0a19e4d02dcb866128647a784f2', '2009-06-01', '2009-06-01', 'enterprise'),
(11, 'data@data.com', 'd043cdf91fb9194267bcca8d08bee6243d49fe28', '2009-06-01', '2009-06-01', 'enterprise'),
(12, 'jajaja@jajaja.com', 'bd8dbe780f3933f04bee411d5dc4c501611a1226', '2009-06-01', '2009-06-01', 'enterprise'),
(13, 'pass@pass.com', '34f871f6fb3a0b93b6d5b3e2bc46f4cd14ccea38', '2009-06-01', '2009-06-01', 'enterprise'),
(14, 'em@em.com', '4e482e6d2345e3e788e4aa2dc241a860672bb9c7', '2009-06-01', '2009-06-01', 'enterprise'),
(15, 'vistazo@vistazo.com', 'd043cdf91fb9194267bcca8d08bee6243d49fe28', '2009-06-01', '2009-06-01', 'enterprise'),
(16, 'mecagoenla@puta.com', 'd043cdf91fb9194267bcca8d08bee6243d49fe28', '2009-06-01', '2009-06-01', 'enterprise'),
(17, 'sesos@decaracol.es', '4e482e6d2345e3e788e4aa2dc241a860672bb9c7', '2009-06-04', '2009-06-04', 'enterprise'),
(18, 'federico@elgran.de', '31a8f34303aa28c2910f374a88d9a51276ca83ea', '2009-06-05', '2009-06-05', 'enterprise'),
(19, 'caca@tua.es', '5aaa3106637f901ffd9633a25e1e3592e2b15fcb', '2009-06-11', '2009-06-11', 'enterprise'),
(20, 'agus@capsulecorp.jp', '1a704053ea201e477cf49a44be69ad354e4e0e73', '2009-06-11', '2009-06-11', 'enterprise');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `common_data_users`
--
ALTER TABLE `common_data_users`
  ADD CONSTRAINT `fk_common_data_users_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `com_profiles`
--
ALTER TABLE `com_profiles`
  ADD CONSTRAINT `fk_com_profiles_com_sectors_activities` FOREIGN KEY (`com_sectors_activities_id`) REFERENCES `com_sectors_activities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_com_profiles_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `com_sectors_activities`
--
ALTER TABLE `com_sectors_activities`
  ADD CONSTRAINT `fk_com_sectors_has_com_activities_com_activities` FOREIGN KEY (`com_activities_id`) REFERENCES `com_activities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_com_sectors_has_com_activities_com_sectors` FOREIGN KEY (`com_sectors_id`) REFERENCES `com_sectors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
