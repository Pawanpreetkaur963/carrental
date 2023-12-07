-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 06, 2023 at 11:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `date_of_submission` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_text`, `book_id`, `username`, `date_of_submission`) VALUES
(1, 'Nice Book', 4, 'naira@gmail.com', '2023-12-02'),
(3, 'nice book', 1, 'johnsmith@gmail.com', '2023-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `booking_num` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `fromdate` date DEFAULT NULL,
  `todate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`booking_num`, `userid`, `vehicle_id`, `fromdate`, `todate`) VALUES
(1, 4, 1, '2023-12-04', '2023-12-08'),
(2, 4, 3, '2023-12-08', '2023-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `brandid` int(11) DEFAULT NULL,
  `vehicle_manufacturer` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `main_featurer` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`brandid`, `vehicle_manufacturer`, `name`, `main_featurer`) VALUES
(1, 'aaa', 'Audi', 'aaaaaaaaaaa'),
(2, 'wwwwwww', 'Ford', 'aaaaaaaaaaaaazzzzzzzzzzz'),
(3, NULL, 'Chevrolet', NULL),
(4, NULL, 'Toyota', NULL),
(5, NULL, 'Hyundai', NULL),
(6, NULL, 'Mercedes-Benz', 'Mercedes-Benz');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `user_mail` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `register_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `fullname`, `password`, `contactno`, `user_type`, `user_mail`, `dob`, `country`, `register_date`) VALUES
(1, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', '9876543211', 'admin', 'admin@gmail.com', '2023-12-04', 'CA', '2023-12-05'),
(4, 'Naira', '81dc9bdb52d04dc20036dbd8313ed055', '23467886766', 'user', 'n@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicle`
--

CREATE TABLE `tblvehicle` (
  `vehicleid` int(11) DEFAULT NULL,
  `vehiclename` varchar(200) DEFAULT NULL,
  `model` varchar(100) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `seatingcapacity` int(11) DEFAULT NULL,
  `brandid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvehicle`
--

INSERT INTO `tblvehicle` (`vehicleid`, `vehiclename`, `model`, `fuel_type`, `seatingcapacity`, `brandid`) VALUES
(1, '2024 Audi A4 allroad', '2003', 'Petrol', 4, 1),
(2, '2024 Chevrolet Blazer', '2003', 'Petrol', 5, 3),
(3, 'Mid-Size 3-Row SUV', '2007', 'Petrol', 6, 3),
(4, 'Ford Mustang Mach-E', '2004', 'Diesel', 4, 2),
(5, 'Toyota Sequoia', '2004', 'Petrol', 6, 4),
(6, 'Hyundai Tucson', '2003', 'Petrol', 5, 5),
(7, 'Mercedes-Benz EQB', '2007', 'Petrol', 7, 6),
(8, 'Ford Escape', '2007', 'Petrol', 4, 2),
(9, 'Toyota RAV4 Prime', '2007', 'Petrol', 4, 4),
(10, 'Toyota Corolla Hybrid', '2007', 'Petrol', 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
