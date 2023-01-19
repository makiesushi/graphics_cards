-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2020 at 12:46 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graphics_cards`
--

-- --------------------------------------------------------

--
-- Table structure for table `graphics_cards`
--

DROP TABLE IF EXISTS `graphics_cards`;
CREATE TABLE IF NOT EXISTS `graphics_cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `graphics_cards`
--

INSERT INTO `graphics_cards` (`id`, `brand`, `model`, `price`) VALUES
(1, 'NVIDIA', 'RTX 3080', '700'),
(2, 'NVIDIA', 'RTX 3070', '500'),
(3, 'AMD', 'RX 5700', '530'),
(4, 'AMD', 'RX 5600 XT', '420');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
