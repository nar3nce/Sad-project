-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 04:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sad_db`
--
CREATE DATABASE IF NOT EXISTS `sad_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `sad_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(250) NOT NULL,
  `admin_first_name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `admin_last_name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `admin_username` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `admin_password` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `admin_email` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_first_name`, `admin_last_name`, `admin_username`, `admin_password`, `admin_email`) VALUES
(1, 'narence', 'valencia', 'admin', 'admin', 'nars@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `loan_types`
--

CREATE TABLE `loan_types` (
  `loan_type_id` int(250) NOT NULL,
  `loan_type_name` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `loan_type_rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `loan_types`
--

INSERT INTO `loan_types` (`loan_type_id`, `loan_type_name`, `loan_type_rate`) VALUES
(1, 'auto loann', 1.3333),
(2, 'business loann', 0.955),
(3, 'sample loan type', 2.4),
(4, 'sample loan 2', 1.2);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(255) NOT NULL,
  `payment_method_type` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `payment_method_rate` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`payment_method_id`, `payment_method_type`, `payment_method_rate`) VALUES
(1, 'per month', '20'),
(2, 'per year', '8');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(250) NOT NULL,
  `user_firstname` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `user_lastname` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `user_username` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `user_password` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `user_email` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `user_contact_number` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_username`, `user_password`, `user_email`, `user_contact_number`) VALUES
(1, 'nars@email', 'nars@email', 'nars@email', 'nars@email', 'nars@email', 'nars@email');

-- --------------------------------------------------------

--
-- Table structure for table `user_loans`
--

CREATE TABLE `user_loans` (
  `user_loan_id` int(250) NOT NULL,
  `user_loan_userid` int(250) NOT NULL,
  `user_loan_type_id` int(250) NOT NULL,
  `user_loan_payment_method_id` int(255) NOT NULL,
  `user_loan_amount` double NOT NULL,
  `user_loan_status` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `user_loan_accepted_date` date NOT NULL,
  `user_loan_attachment_name` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_loans`
--

INSERT INTO `user_loans` (`user_loan_id`, `user_loan_userid`, `user_loan_type_id`, `user_loan_payment_method_id`, `user_loan_amount`, `user_loan_status`, `user_loan_accepted_date`, `user_loan_attachment_name`) VALUES
(1, 1, 1, 2, 50000, 'Accepted!', '2021-02-05', '1_1_nars@email_nars@email.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `loan_types`
--
ALTER TABLE `loan_types`
  ADD PRIMARY KEY (`loan_type_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_loans`
--
ALTER TABLE `user_loans`
  ADD PRIMARY KEY (`user_loan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan_types`
--
ALTER TABLE `loan_types`
  MODIFY `loan_type_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_loans`
--
ALTER TABLE `user_loans`
  MODIFY `user_loan_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
