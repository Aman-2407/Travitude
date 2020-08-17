-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 10:03 PM
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
-- Database: `boooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `Adult` int(11) NOT NULL,
  `Child` int(11) NOT NULL,
  `Checkin` date NOT NULL,
  `Checkout` date NOT NULL,
  `Rooms` varchar(45) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`Adult`, `Child`, `Checkin`, `Checkout`, `Rooms`, `Price`) VALUES
(1, 4, '2020-08-27', '2020-08-28', '2000', 2000),
(2, 2, '2020-08-05', '2020-08-22', '5000', 5000),
(3, 3, '2020-08-19', '2020-08-27', '3500', 3500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
