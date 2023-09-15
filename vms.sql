-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql106.infinityfree.com
-- Generation Time: Sep 15, 2023 at 09:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34701280_vms`
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
  `Vqty` int(11) NOT NULL,
  `H_id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addvaccine`
--

INSERT INTO `addvaccine` (`id`, `Vname`, `Vtype`, `Hname`, `Vqty`, `H_id`) VALUES
(7, 'polio', 'Toxoid', ' Aga Khan', 34, 6),
(8, 'tentnus', 'Inactivated ', ' Aga Khan', 41, 6),
(9, 'Modrena', 'mRNA', ' Aga Khan', 23, 6),
(10, 'Pfizer', 'Inactivated ', ' Aga Khan', 22, 6),
(11, 'polio', 'Toxoid', ' Karachi Medical', 56, 7),
(12, 'tentnus', 'Inactivated ', ' Karachi Medical', 23, 7),
(13, 'Modrena', 'mRNA', ' Karachi Medical', 123, 7),
(14, 'Pfizer', 'Inactivated ', ' Karachi Medical', 23, 7),
(15, 'polio', 'Toxoid', ' National Hospital', 34, 8),
(16, 'Modrena', 'mRNA', ' National Hospital', 45, 8),
(17, 'tentnus', 'Inactivated ', ' National Hospital', 23, 8),
(18, 'tentnus', 'Inactivated ', ' Saifee', 230, 9),
(19, 'polio', 'Toxoid', ' Saifee', 233, 9),
(20, 'polio', 'Toxoid', ' Jinnah hospital', 255, 10),
(21, 'Modrena', 'mRNA', ' Bahria Hospiatl', 233, 12);

-- --------------------------------------------------------

--
-- Table structure for table `book_appointment`
--

CREATE TABLE `book_appointment` (
  `b_id` int(11) NOT NULL,
  `appointment_date` varchar(111) NOT NULL,
  `Pname` int(11) NOT NULL,
  `Hname` int(11) NOT NULL,
  `Vname` int(11) NOT NULL,
  `child_name` int(11) NOT NULL,
  `request` int(11) DEFAULT NULL,
  `vaccinated` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_appointment`
--

INSERT INTO `book_appointment` (`b_id`, `appointment_date`, `Pname`, `Hname`, `Vname`, `child_name`, `request`, `vaccinated`) VALUES
(1, '2023-05-31', 6, 6, 7, 3, NULL, NULL),
(2, '2023-06-13', 6, 7, 13, 3, NULL, NULL),
(3, '2023-05-31', 4, 6, 8, 1, 1, 0),
(4, '2023-06-01', 5, 6, 8, 4, 0, 0),
(5, '2023-06-20', 4, 6, 7, 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `childinfo`
--

CREATE TABLE `childinfo` (
  `id` int(11) NOT NULL,
  `child_name` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  `child_age` int(11) NOT NULL,
  `any_disease` varchar(111) NOT NULL,
  `P_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `childinfo`
--

INSERT INTO `childinfo` (`id`, `child_name`, `gender`, `child_age`, `any_disease`, `P_id`) VALUES
(1, 'ayesha', 'Female', 3, 'no', 4),
(2, 'ayesha', 'Female', 3, 'no', 4),
(3, 'samad', 'Male', 3, 'no', 6),
(4, 'sami', 'Male', 5, 'no', 5);

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
  `Hnumber` int(11) NOT NULL,
  `Hlogo` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_register`
--

INSERT INTO `hospital_register` (`id`, `name`, `Hemail`, `Hpass`, `Hname`, `Haddress`, `Hnumber`, `Hlogo`) VALUES
(6, 'kashif', 'kashif@gmail.com', '123', 'Aga Khan', 'karimabad aysha manzil ', 312987364, 'img/331068750_1993577757672828_8712876894630333996_n.jpg'),
(7, 'ali', 'ali@gmail.com', '123', 'Karachi Medical', 'b_a29 near nazimabad', 314771423, 'img/KMDC-LOGO.png'),
(8, 'ahmed', 'ahmed@gmail.com', '123', 'National Hospital', 'saddar G527 street 6', 2147483647, 'img/National-hospital.webp'),
(9, 'azhar', 'azhar@gmail.com', '123', 'Saifee', 'five Star V-7256 street 7', 361122736, 'img/saifee.png'),
(10, 'nabeel', 'nabeel@gmail.com', '123', 'Jinnah hospital', 'gurumandir b686 st 56', 2147483647, 'img/67827334_104346174254087_2995876694121775104_n.jpg'),
(11, 'rafay ', 'rafay@gmail.com', '123', 'Liaquat National', 'gulshan iqbal N-03820 st 93', 2147483647, 'img/brand-logo.png'),
(12, 'sarim', 'sarim@gmail.com', '123', 'Bahria Hospiatl', 'Bahria town Karachi ', 381281836, 'img/images.png');

-- --------------------------------------------------------

--
-- Table structure for table `parent_register`
--

CREATE TABLE `parent_register` (
  `id` int(11) NOT NULL,
  `Pname` varchar(111) NOT NULL,
  `Pemail` varchar(111) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_register`
--

INSERT INTO `parent_register` (`id`, `Pname`, `Pemail`, `password`) VALUES
(4, 'Zohair Adeel', 'zohairadeel@gmail.com', '123'),
(5, 'mesum', 'mesumbinshaukat@gmail.com', '123'),
(6, 'mashood', 'mashood@gmail.com', '123'),
(7, 'arshman', 'arshman@gmail.com', '123'),
(8, 'asgar', 'asgar@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addvaccine`
--
ALTER TABLE `addvaccine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN KRY` (`H_id`);

--
-- Indexes for table `book_appointment`
--
ALTER TABLE `book_appointment`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `FOREIGN KEY CID` (`child_name`),
  ADD KEY `FOREIGN KEY PID` (`Pname`),
  ADD KEY `FOREIGN KEY VID` (`Vname`),
  ADD KEY `FOREIGN KEY HID` (`Hname`);

--
-- Indexes for table `childinfo`
--
ALTER TABLE `childinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN KEY` (`P_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `book_appointment`
--
ALTER TABLE `book_appointment`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `childinfo`
--
ALTER TABLE `childinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital_register`
--
ALTER TABLE `hospital_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `parent_register`
--
ALTER TABLE `parent_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addvaccine`
--
ALTER TABLE `addvaccine`
  ADD CONSTRAINT `FOREIGN KRY` FOREIGN KEY (`H_id`) REFERENCES `hospital_register` (`id`);

--
-- Constraints for table `book_appointment`
--
ALTER TABLE `book_appointment`
  ADD CONSTRAINT `FOREIGN KEY Cid` FOREIGN KEY (`child_name`) REFERENCES `childinfo` (`id`),
  ADD CONSTRAINT `FOREIGN KEY HID` FOREIGN KEY (`Hname`) REFERENCES `hospital_register` (`id`),
  ADD CONSTRAINT `FOREIGN KEY VID` FOREIGN KEY (`Vname`) REFERENCES `addvaccine` (`id`),
  ADD CONSTRAINT `FOREIGN KEYP_id` FOREIGN KEY (`Pname`) REFERENCES `parent_register` (`id`);

--
-- Constraints for table `childinfo`
--
ALTER TABLE `childinfo`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`P_id`) REFERENCES `parent_register` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
