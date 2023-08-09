-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 09, 2023 at 01:52 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testt`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `name` varchar(50) NOT NULL,
  `quantity` int NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'completed'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `quantity`, `status`) VALUES
('Item 11+-x', 1, 'completed'),
('Item 21+-x', 1, 'completed'),
('Item 13+-x', 3, 'active'),
('Item 21+-x', 1, 'completed'),
('Item 11+-x', 1, 'completed'),
('Item 21+-x', 1, 'completed'),
('Item 21+-x', 1, 'completed'),
('Item 31+-x', 1, 'completed'),
('Item 21+-x', 1, 'completed'),
('Item 31+-x', 1, 'completed'),
('Item 21+-x', 1, 'completed'),
('Item 31+-x', 1, 'completed'),
('Item 41+-x', 1, 'completed'),
('Item 41+-x', 1, 'completed'),
('Item 31+-x', 1, 'completed'),
('Item 11+-x', 1, 'completed'),
('Item 21+-x', 1, 'completed'),
('Item 71+-x', 1, 'completed'),
('Item 91+-x', 1, 'completed'),
('Item 101+-x', 1, 'completed'),
('Item 111+-x', 1, 'completed'),
('Item 121+-x', 1, 'completed'),
('Item 61+-x', 1, 'completed'),
('Item 81+-x', 1, 'completed'),
(' carrot 1+-x', 1, 'completed'),
(' Chilly 1+-x', 1, 'completed'),
(' Cabbage 1+-x', 1, 'completed'),
(' carrot 1+-x', 1, 'completed'),
(' Chilly 4+-x', 4, 'canceled'),
(' Cabbage 1+-x', 1, 'completed'),
(' carrot 2+-x', 2, 'completed'),
(' Chilly 4+-x', 4, 'canceled'),
(' Cabbage 3+-x', 3, 'active'),
(' Cabbage 1+-x', 1, 'completed'),
(' Chilly 3+-x', 3, 'active'),
(' Cream 4+-x', 4, 'canceled'),
(' Cucumber 5+-x', 5, 'completed'),
(' Cabbage 1+-x', 1, 'completed'),
(' carrot 1+-x', 1, 'completed'),
(' carrot 3+-x', 3, 'active'),
(' Chilly 2+-x', 2, 'completed'),
(' Cucumber 4+-x', 4, 'canceled'),
(' Cream 1+-x', 1, 'completed'),
(' carrot 10+-x', 10, 'completed'),
(' Cucumber 6+-x', 6, 'completed'),
(' carrot 1+-x', 1, 'completed'),
(' Cabbage 1+-x', 1, 'completed'),
('\n      \n        \n        \n      \n    \n        \n   ', 1, 'completed'),
('\n      \n        \n        \n      \n    \n        \n   ', 3, 'completed'),
('\n          \n             Cabbage\n          \n      ', 2, 'completed'),
('\n          \n             Orange\n          \n       ', 4, 'completed'),
('\n          \n             Cabbage\n          \n      ', 3, 'completed'),
('\n          \n             Orange\n          \n       ', 13, 'completed'),
('\n          \n             Orange\n          \n       ', 2, 'completed'),
('\n          \n             Cabbage\n          \n      ', 5, 'completed'),
('\n          \n             Orange\n          \n       ', 5, 'completed'),
('\n          \n             Orange\n          \n       ', 1, 'completed'),
('\n          \n             Orange\n          \n       ', 4, 'completed'),
('\n          \n             Orange\n          \n       ', 1, 'completed'),
('\n          \n             Cabbage\n          \n      ', 6, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
CREATE TABLE IF NOT EXISTS `places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `latitude` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `longitude` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
