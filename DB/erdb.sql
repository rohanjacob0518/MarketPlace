-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 09, 2023 at 01:51 PM
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
-- Database: `erdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `lat` float NOT NULL,
  `longt` float NOT NULL,
  `place` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `lat`, `longt`, `place`) VALUES
(0, 'Decca', 9.9185, 76.2558, 'Ernakulam District'),
(0, 'Juswin', 9.9185, 76.2558, 'Ernakulam District'),
(0, 'kev', 9.5916, 76.5222, 'Kottayam'),
(0, 'exvk', 9.59025, 76.5165, 'kottayam'),
(12, 'Ullas', 9.9185, 76.2558, 'Ernakulam District');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pname` varchar(20) NOT NULL,
  `merchid` int NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `merchid`, `image`) VALUES
(21, 'Cabbage', 12, 'https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcSsyaKuOM8sfRHr-aNq5zk2aGuW1GoxDVYWVnC__TQOtlAWc-7Dxf5GZVgWJk95fmqDx8BxsyD9h8VbCbc'),
(22, 'Orange', 12, 'https://i.pinimg.com/736x/05/79/5a/05795a16b647118ffb6629390e995adb.jpg'),
(30, 'Carrot', 12, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fseed2plant.in%2Fproducts%2Fcarrot-seeds&psig=AOvVaw22e6eEB19VTL6A_BiAbmKF&ust=1691674719858000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLiH'),
(31, 'Carrot', 12, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fseed2plant.in%2Fproducts%2Fcarrot-seeds&psig=AOvVaw22e6eEB19VTL6A_BiAbmKF&ust=1691674719858000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLiH');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
