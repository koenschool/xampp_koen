-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 11:53 AM
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
-- Database: `statistiekensysteem`
--

-- --------------------------------------------------------

--
-- Table structure for table `bezoekers`
--

CREATE TABLE `bezoekers` (
  `id` int(11) NOT NULL,
  `land` varchar(100) NOT NULL,
  `ip_adres` varchar(45) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `datum_tijd` datetime NOT NULL,
  `referer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bezoekers`
--

INSERT INTO `bezoekers` (`id`, `land`, `ip_adres`, `provider`, `browser`, `datum_tijd`, `referer`) VALUES
(1, 'nl-NL,fy-NL', '127.0.0.1', 'MSI', 'Firefox', '0000-00-00 00:00:00', 'http://localhost/xampp_koen/casus3/page2.php'),
(2, 'nl-NL,fy-NL', '127.0.0.1', 'MSI', 'Firefox', '0000-00-00 00:00:00', 'http://localhost/xampp_koen/casus3/page2.php'),
(3, 'nl-NL,fy-NL', '127.0.0.1', 'MSI', 'Firefox', '0000-00-00 00:00:00', 'http://localhost/xampp_koen/casus3/page2.php'),
(4, 'nl-NL,fy-NL', '127.0.0.1', 'MSI', 'Firefox', '2024-05-30 11:44:28', 'http://localhost/xampp_koen/casus3/page2.php'),
(5, 'nl-NL,fy-NL', '127.0.0.1', 'MSI', 'Firefox', '2024-05-30 11:44:30', 'http://localhost/xampp_koen/casus3/page2.php'),
(6, 'nl-NL,fy-NL', '::1', 'MSI', 'Google', '2024-05-30 11:45:40', 'geen referer'),
(7, 'nl-NL,fy-NL', '::1', 'MSI', 'Google', '2024-05-30 11:45:54', 'geen referer'),
(8, 'nl-NL,fy-NL', '::1', 'MSI', 'Google', '2024-05-30 11:46:00', 'http://localhost/xampp_koen/casus3/page1.php'),
(9, 'nl-NL,fy-NL', '::1', '77.248.250.209', 'Google', '2024-05-30 11:46:35', 'http://localhost/xampp_koen/casus3/page1.php'),
(10, 'nl-NL,fy-NL', '77.248.250.209', 'dhcp-077-248-250-209.chello.nl', 'Firefox', '2024-05-30 11:47:08', 'http://localhost/xampp_koen/casus3/page2.php'),
(11, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Firefox', '2024-05-30 11:47:47', 'http://localhost/xampp_koen/casus3/page2.php'),
(12, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Google', '2024-05-30 11:47:55', 'http://localhost/xampp_koen/casus3/page1.php'),
(13, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Firefox', '2024-05-30 11:48:38', 'http://localhost/xampp_koen/casus3/page2.php'),
(14, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Firefox', '2024-05-30 11:50:30', 'http://localhost/xampp_koen/casus3/page1.php'),
(15, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Firefox', '2024-05-30 11:50:42', 'http://localhost/xampp_koen/casus3/page2.php'),
(16, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Firefox', '2024-05-30 11:50:45', 'http://localhost/xampp_koen/casus3/page2.php'),
(17, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Google', '2024-05-30 11:51:00', 'geen referer'),
(18, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Firefox', '2024-05-30 11:51:12', 'http://localhost/xampp_koen/casus3/page1.php'),
(19, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Firefox', '2024-05-30 11:51:20', 'http://localhost/xampp_koen/casus3/page2.php'),
(20, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Google', '2024-05-30 11:51:26', 'http://localhost/xampp_koen/casus3/page2.php'),
(21, 'nl-NL,fy-NL', '77.248.250.209', 'MSI', 'Google', '2024-05-30 11:51:35', 'http://localhost/xampp_koen/casus3/page1.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bezoekers`
--
ALTER TABLE `bezoekers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bezoekers`
--
ALTER TABLE `bezoekers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
