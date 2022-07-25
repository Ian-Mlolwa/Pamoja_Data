-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2022 at 10:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Pamoja_Data`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_data`
--

CREATE TABLE `customer_data` (
  `Customer_Name` varchar(255) NOT NULL,
  `Apartment_Name` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Medium` varchar(255) NOT NULL,
  `Package` varchar(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Technician_Name` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Serial_Number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_data`
--

INSERT INTO `customer_data` (`Customer_Name`, `Apartment_Name`, `Street`, `City`, `Email`, `Phone`, `Medium`, `Package`, `Amount`, `Technician_Name`, `Date`, `Serial_Number`) VALUES
('Sammy', 'murui', '5th Avenue', 'Rongai', 'sammy@gmail.com', '02092993093', 'Ethernet', '20 mbps', 1000, 'John', '2022-07-02', '1212-31332-12211'),
('Ian Mlolwa', 'rongai appartments', '5th Avenue', 'Nairobi', 'ian@gmail.com', '0799208823', 'Fiber', '20 mbps', 4000, 'John', '2022-06-30', '1212-31332-67');

-- --------------------------------------------------------

--
-- Table structure for table `installation_data`
--

CREATE TABLE `installation_data` (
  `Customer_Name` varchar(255) NOT NULL,
  `Medium` varchar(255) NOT NULL,
  `Equipment` varchar(255) NOT NULL,
  `Other_Equipment` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Serial_Number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_report`
--

CREATE TABLE `maintenance_report` (
  `Customer_Name` varchar(255) NOT NULL,
  `Customer_Remarks` varchar(255) NOT NULL,
  `Customer_Rating` varchar(255) NOT NULL,
  `Technician_Remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintenance_report`
--

INSERT INTO `maintenance_report` (`Customer_Name`, `Customer_Remarks`, `Customer_Rating`, `Technician_Remarks`) VALUES
('Ian Mlolwa', 'ben 10', '10', 'echo echo'),
('Ian Mlolwa', 'ben 10', '10', 'echo echo'),
('Sammy', 'Great work', '10', 'good'),
('caleb munene', 'Great work', '7', 'good'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('John', 'sdaf', '7', 'dfsfdsf'),
('IAN KOBI', 'today', '9', 'echo echo'),
('IAN KOBI', 'today', '9', 'echo echo'),
('IAN KOBI', 'today', '9', 'echo echo'),
('IAN KOBI', 'today', '9', 'echo echo'),
('IAN KOBI', 'today', '9', 'echo echo'),
('IAN KOBI', 'today', '9', 'echo echo'),
('IAN KOBI', 'today', '9', 'echo echo'),
('IAN KOBI', 'today', '9', 'echo echo'),
('IAN KOBI', 'today', '9', 'echo echo'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good'),
('Sammy', 'today', '9', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `personnel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `personnel`) VALUES
(1, 'Ian', 'd93591bdf7860e1e4ee2fca799911215', 'ADMIN'),
(4, 'John', 'd9f9133fb120cd6096870bc2b496805b', 'TECHNICIAN'),
(6, 'test', '827ccb0eea8a706c4c34a16891f84e7b', 'ADMIN'),
(7, 'test2', 'e10adc3949ba59abbe56e057f20f883e', 'TECHNICIAN'),
(8, 'Ian Mlolwa', 'a1addb3794dbd39a29c65994586ce95a', 'TECHNICIAN');

-- --------------------------------------------------------

--
-- Table structure for table `work_data`
--

CREATE TABLE `work_data` (
  `Customer_Served` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Technician_Name` varchar(25) NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_data`
--

INSERT INTO `work_data` (`Customer_Served`, `Date`, `Technician_Name`, `Start_Time`, `End_Time`) VALUES
('Ian Mlolwa', '2022-07-14', 'John', '12:54:00', '13:54:00'),
('Sammy', '2022-07-20', 'John', '15:52:00', '15:52:00'),
('caleb munene', '2022-07-20', 'Issac', '15:56:00', '16:56:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('John', '2022-06-30', 'ddc', '17:49:00', '21:45:00'),
('IAN KOBI', '2022-08-05', 'Issac', '18:06:00', '18:09:00'),
('IAN KOBI', '2022-08-05', 'Issac', '18:06:00', '18:09:00'),
('IAN KOBI', '2022-08-05', 'Issac', '18:06:00', '18:09:00'),
('IAN KOBI', '2022-08-05', 'Issac', '18:06:00', '18:09:00'),
('IAN KOBI', '2022-08-05', 'Issac', '18:06:00', '18:09:00'),
('IAN KOBI', '2022-08-05', 'Issac', '18:06:00', '18:09:00'),
('IAN KOBI', '2022-08-05', 'Issac', '18:06:00', '18:09:00'),
('IAN KOBI', '2022-08-05', 'Issac', '18:06:00', '18:09:00'),
('IAN KOBI', '2022-08-05', 'Issac', '18:06:00', '18:09:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00'),
('Sammy', '2022-07-02', 'John', '10:34:00', '09:34:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
