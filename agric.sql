-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2024 at 12:01 PM
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
-- Database: `agric`
--

-- --------------------------------------------------------

--
-- Table structure for table `agri_tips`
--

DROP TABLE IF EXISTS `agri_tips`;
CREATE TABLE IF NOT EXISTS `agri_tips` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `date_t` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `agri_tips`
--

INSERT INTO `agri_tips` (`id`, `description`, `region`, `type`, `date_t`) VALUES
(2, 'insecticide Thiamethoxam 30% SC, 21% SC, good control effect on rice planthopper Usage method 1. To control rice planthopper, 25% thiamethoxazine ', 'Harare', 'Agricultural Insecticides', '2020-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

DROP TABLE IF EXISTS `farmers`;
CREATE TABLE IF NOT EXISTS `farmers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `joined_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `surname`, `username`, `password`, `phone`, `region`, `joined_date`) VALUES
(5, 'Gideon', 'Machuve', '0', '', '0775509424', 'Harare', '2020-01-12'),
(6, 'Rufus Mwangi', 'Mwangi', '0', '', '0712345678', 'Mat North', '2024-03-24'),
(11, 'riska', 'maina', 'riska', '12345', '0110174707', 'here', '2024-03-24'),
(12, 'Joseph', 'Kamanja', 'jose', '12345', '071334566', 'embakasi', '2024-03-26'),
(13, 'jeckton charles', '', 'jeck', '12345', '0754323444', 'Nairobi', '2024-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `farm_inputs`
--

DROP TABLE IF EXISTS `farm_inputs`;
CREATE TABLE IF NOT EXISTS `farm_inputs` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(90) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `farm_inputs`
--

INSERT INTO `farm_inputs` (`id`, `name`, `description`, `price`) VALUES
(1, 'Folk Jembe', 'Digging', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `forecasting`
--

DROP TABLE IF EXISTS `forecasting`;
CREATE TABLE IF NOT EXISTS `forecasting` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tempa` varchar(20) NOT NULL,
  `region` varchar(90) NOT NULL,
  `daily` varchar(90) NOT NULL,
  `date_t` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `forecasting`
--

INSERT INTO `forecasting` (`id`, `tempa`, `region`, `daily`, `date_t`) VALUES
(1, '24', 'Harare', 'partly Clouds', '12 Jan 2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `password`, `type`) VALUES
(1, 'john', 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(4, 'sam', 'strover', 'samstrover', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(5, 'chido', 'makura', '', 'd41d8cd98f00b204e9800998ecf8427e', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
