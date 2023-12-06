-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 02:26 PM
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
-- Database: `user_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `second_name` varchar(10) NOT NULL,
  `addres` varchar(30) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `second_name`, `addres`, `telephone`, `email`) VALUES
(14, 'Bugonzi', 'Eman', 'Seeta', '0755867646', 'bugoneman@gmail'),
(15, 'Agaba', 'Cornrad', 'Munyoyo', '0705567046', 'agacornrad@gmail'),
(20, 'Agatha', 'Blessing', 'Jinja', '0789867774', 'athasing@gmail.com'),
(27, 'Kimpi', 'Keren', 'Buloba', '0705997486', 'soziern@gmail.com'),
(28, 'Kasozi', 'Keren', 'Buloba', '0705997486', 'soziern@gmail.com'),
(37, 'Kigongo', 'Lynnett', 'Kigjinja', '0779658786', 'ngonett@gmail.com'),
(39, 'Ssemaukla', 'Claudia', 'Mengo', '0757557686', 'makuladia@gmail.com'),
(43, 'Mabati', 'Nswasi', 'ehuyg', '978476530', 'was@gmail.com'),
(45, 'uhgfjk', 'rtuyuj', 'thtju', '6859', 'ruhjgi@gmail.com'),
(46, 'ewt6rghg', 'tyjugj', 'thim', '456589', 'hjgi@gmail.com'),
(47, 'Ssema', 'Clowie', 'Jinja', '0757865356', 'kiwaelisha@gmail'),
(49, 'Mabati', 'Jiayfcf', 'ehuyg', '978476530', 'was@gmail.com'),
(51, 'Bugonzi', 'Emadxtr', 'Seeta', '0755867646', 'bugoneman@gmail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
