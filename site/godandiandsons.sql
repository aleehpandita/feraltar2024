-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2023 at 02:04 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `godandiandsons`
--

-- --------------------------------------------------------

--
-- Table structure for table `site_configurations`
--

DROP TABLE IF EXISTS `site_configurations`;
CREATE TABLE IF NOT EXISTS `site_configurations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  `contact_phones` varchar(255) DEFAULT NULL COMMENT 'separados por coma',
  `contact_emails` varchar(255) DEFAULT NULL COMMENT 'separados por coma',
  `whatsapp` varchar(255) DEFAULT NULL,
  `national_call_center` varchar(255) DEFAULT NULL,
  `usa_canada_tol_free` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lang` enum('es','en') DEFAULT 'en',
  `google_map_business` varchar(255) DEFAULT NULL,
  `recaptcha_private_key` varchar(255) DEFAULT NULL,
  `recapcha_site_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `site_configurations`
--

INSERT INTO `site_configurations` (`id`, `facebook`, `instagram`, `status`, `contact_phones`, `contact_emails`, `whatsapp`, `national_call_center`, `usa_canada_tol_free`, `address`, `lang`, `google_map_business`, `recaptcha_private_key`, `recapcha_site_key`) VALUES
(1, NULL, NULL, 'active', '+52 (55) 5654 0089,+52 (55) 5740 1466,+52 (55) 4754 5981', 'info@godandiandsons.com,reserve@godandiandsons.com,info@godandi.global', NULL, '01-800-832-6889', '1-800-704-2942', 'Moonshine St. 14/05 Light City, <br class=\"d-none d-md-block\" />MEXICO CITY OFFICE', 'en', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1', '6LfkGzgaAAAAAKrbP2VV0qZF8owP-6f8NmootVif', '6LfkGzgaAAAAABLOURa1KIt4xg1TXNM_FP8FV-OR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
