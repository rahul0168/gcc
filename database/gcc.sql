-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 22, 2021 at 02:34 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tracker`
--

DROP TABLE IF EXISTS `transaction_tracker`;
CREATE TABLE IF NOT EXISTS `transaction_tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone_no` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction_tracker`
--

INSERT INTO `transaction_tracker` (`id`, `phone_no`) VALUES
(1, '9922916180'),
(2, '9922916180'),
(3, '9922916180'),
(4, '9922916180'),
(5, '9922916180'),
(6, '9887766552'),
(7, '9887766552');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
