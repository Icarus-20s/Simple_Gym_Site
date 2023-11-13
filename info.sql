-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 06:22 PM
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
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `age`, `email`, `password`) VALUES
(1, 'nishan', 21, 'nishan.kutu19@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'bob', 21, 'bob@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'roka', 22, 'roka@gmail.com', '4df3f70ffe61698701e2561873cd758f'),
(4, 'vagwat', 23, 'vagwat@gmail.com', '3ac8e15eb2592ad61286c03075ae72be'),
(5, 'ashish', 21, 'a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'ram', 22, 'ram@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(7, '1231244', 21, 'kutu@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(8, 'sankalpa', 21, 'sankalpa@gmail.xom', '202cb962ac59075b964b07152d234b70'),
(9, 'Nishan Kutu', 20000, 's@h.com', '2ee17599597d02dbf88b829798db0518'),
(10, 'ishwor', 21, 'ishwor@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
