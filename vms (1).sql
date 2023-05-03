-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 02:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addvaccine`
--

CREATE TABLE `addvaccine` (
  `id` int(11) NOT NULL,
  `Vname` varchar(111) NOT NULL,
  `Vtype` varchar(111) NOT NULL,
  `Hname` varchar(111) NOT NULL,
  `Vqry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addvaccine`
--

INSERT INTO `addvaccine` (`id`, `Vname`, `Vtype`, `Hname`, `Vqry`) VALUES
(1, 'polio', 'Toxoid', ' aga khan', 200),
(2, 'tentnus', 'Inactivated ', ' aga khan', 100);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_register`
--

CREATE TABLE `hospital_register` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `Hemail` varchar(111) NOT NULL,
  `Hpass` varchar(1111) NOT NULL,
  `Hname` varchar(30) NOT NULL,
  `Haddress` varchar(100) NOT NULL,
  `Hnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_register`
--

INSERT INTO `hospital_register` (`id`, `name`, `Hemail`, `Hpass`, `Hname`, `Haddress`, `Hnumber`) VALUES
(1, 'zohai', 'zoh@gmail', '123', 'abc', 'aaakkks', 292393),
(2, 'ali', 'ali@gmail.com', '123', 'aga khan', 'karimabad', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `parent_register`
--

CREATE TABLE `parent_register` (
  `id` int(11) NOT NULL,
  `Pname` varchar(111) NOT NULL,
  `Pemail` varchar(111) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_register`
--

INSERT INTO `parent_register` (`id`, `Pname`, `Pemail`, `password`) VALUES
(1, 'zohai', 'zoh@gmail', '123'),
(2, 'zzz', 'admin', 'admin'),
(3, '', 'admin', 'admin'),
(4, '', 'admin', 'admin'),
(5, '', 'admin', 'admin'),
(6, 'zohai', 'aaa', 'admin'),
(7, 'zohai', 'aaas', 'admin'),
(8, 'zohai', 'aaas', '123'),
(9, 'zohair adeel', 'zohair@gmail.com', '123'),
(10, 'zzz', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addvaccine`
--
ALTER TABLE `addvaccine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_register`
--
ALTER TABLE `hospital_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_register`
--
ALTER TABLE `parent_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addvaccine`
--
ALTER TABLE `addvaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital_register`
--
ALTER TABLE `hospital_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parent_register`
--
ALTER TABLE `parent_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
