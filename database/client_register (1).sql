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
-- Database: `client_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`Name`, `Email`, `Password`) VALUES
('Aman', 'av986764@gmail.com', '12345'),
('Freddy', 'fredddy@gmail.com', '123456'),
('Veram', 'jbjsbja@gmail.com', '6723672'),
('Kajal', 'kaju123@gmail.com', '123'),
('Trivgo', 'trav123@gmail.com', '1221'),
('Vinayak', 'vinu123@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
