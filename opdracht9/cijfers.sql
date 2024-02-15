-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 10:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cijfers`
--

-- --------------------------------------------------------

--
-- Table structure for table `cijfers`
--

CREATE TABLE `cijfers` (
  `id` int(9) NOT NULL,
  `leerling` varchar(255) NOT NULL,
  `cijfer` float NOT NULL,
  `vak` varchar(255) NOT NULL,
  `docent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cijfers`
--

INSERT INTO `cijfers` (`id`, `leerling`, `cijfer`, `vak`, `docent`) VALUES
(1, 'koen', 9, 'engels', 'meneer'),
(2, 'jaap', 5, 'wiskunde', 'meneer'),
(3, 'henk', 7, 'nederlands', 'mevrouw'),
(4, 'ame', 8, 'wiskunde', 'meneer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cijfers`
--
ALTER TABLE `cijfers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cijfers`
--
ALTER TABLE `cijfers`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
