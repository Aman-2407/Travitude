-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 09:31 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `searchbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_image`
--

CREATE TABLE `db_image` (
  `id` int(1) NOT NULL,
  `City` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_image`
--

INSERT INTO `db_image` (`id`, `City`, `image`) VALUES
(1, 'Maharashtra', 'Maharashtra.jpg'),
(2, 'Assam', 'Assam.jpg'),
(3, 'Goa', 'goa.jpg'),
(4, 'Himachal Pradesh', 'hp.jpg'),
(5, 'Kerala', 'kerala.jpg'),
(6, 'Rajasthan', 'raj.jpg'),
(7, 'West Bengal', 'west.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
