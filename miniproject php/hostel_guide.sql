-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 02:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostel_guide`
--

CREATE TABLE `hostel_guide` (
  `Name` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Student_id` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone Number` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Hostel` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Room number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Complaint type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Complaint` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostel_guide`
--

INSERT INTO `hostel_guide` (`Name`, `Student_id`, `Email`, `Password`, `Phone Number`, `Hostel`, `Room number`, `Date`, `Complaint type`, `Complaint`) VALUES
('Admin', 'Admin', '', 'password', '', '', '', '', '', ''),
('GARIMA CHOURASIYA', '22MCMC15', 'garima67chourasiya@gmail.com', '12345678', '7024951111', 'LH5', '103', '11-02-2023', 'Cleaning', 'Room not cleaned properly.'),
('NEETA KALA', '22MCMC14', 'neetakala47@gmail.com', '11111111', '6266818709', 'LH5', '23', '11-02-2023', 'Drinking Water', 'Water Coolers are not cleaned regularly.'),
('GARIMA CHOURASIYA', '22MCMC15', 'garima67chourasiya@gmail.com', '12345678', '7024951111', 'LH5', '103', '11-02-2023', 'Electricity', 'Fan is not working.'),
('NEETA KALA', '22MCMC14', 'neetakala47@gmail.com', '11111111', '6266818709', 'LH5', '23', '11-02-2023', 'Room Related', 'Cupboard is broken.'),
('GARIMA CHOURASIYA', '22MCMC15', 'garima67chourasiya@gmail.com', '12345678', '7024951111', 'lh3', 'T-01', '11-02-2023', 'Electricity', 'Water heater not functioning.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
