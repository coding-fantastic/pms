-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2020 at 11:03 AM
-- Server version: 10.3.24-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makaltdc_pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `created_at`) VALUES
(1, 'admin@makaltd.co.ke', 'fcea920f7412b5da7be0cf42b8c93759', '2020-09-05 12:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `agent_identification` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `name`, `phone`, `email`, `agent_identification`, `type`, `created_at`) VALUES
(1, 'nenya', '0722456698', 'nenya@email.com', 123456, 'new type', '2020-09-06 09:09:20'),
(2, 'bruno', '0733695847', 'bruno@email.com', 789456, 'old type', '2020-09-06 09:09:20'),
(0, 'werty', '0722456987', 'wert@email.com', 753951, 'new', '2020-09-07 10:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `agent2`
--

CREATE TABLE `agent2` (
  `agent_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agent_identification` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent2`
--

INSERT INTO `agent2` (`agent_id`, `name`, `phone`, `email`, `agent_identification`, `type`, `created_at`) VALUES
(1, 'jacob', 718263514, 'jacob@email.com', 147852, 'new', '2020-09-07 10:23:49'),
(2, 'victor', 719587496, 'victor@email.com', 369852, 'old', '2020-09-07 10:23:49'),
(3, 'ray', 722659812, 'tayray@email.com', 254136, 'yew', '2020-09-07 10:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `phone3` int(11) NOT NULL,
  `agent` varchar(50) NOT NULL,
  `installer` varchar(50) NOT NULL,
  `statuss` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `amount_paid`, `start_date`, `end_date`, `company_name`, `phone1`, `phone2`, `phone3`, `agent`, `installer`, `statuss`, `created_at`) VALUES
(11, 85471, '2020-08-18', '2020-09-07', 'ridaflo', 736251478, 721457896, 756789412, 'victor', 'wetgvd', 'Active', '2020-09-10 06:13:00'),
(9, 89654, '2020-08-03', '2020-09-19', 'methel', 713467985, 723456987, 712457896, 'ray', 'wetgvd', 'Deactive', '2020-09-09 13:52:45'),
(10, 79632, '2020-09-01', '2020-09-08', 'automotivw', 785963625, 714523698, 722547896, 'victor ', 'waba ', 'Active  ', '2020-09-09 14:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `installer`
--

CREATE TABLE `installer` (
  `installer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idn` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `installer`
--

INSERT INTO `installer` (`installer_id`, `name`, `phone`, `email`, `idn`, `type`, `created_at`) VALUES
(0, 'jacinta', 718236547, 'jacinta@email.com', 147852, 'new', '2020-09-07 10:40:15'),
(0, 'maka', 722369874, 'maka@makaltd.com', 123456, 'old', '2020-09-07 10:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `installer2`
--

CREATE TABLE `installer2` (
  `installer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idn` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installer2`
--

INSERT INTO `installer2` (`installer_id`, `name`, `phone`, `email`, `idn`, `type`, `created_at`) VALUES
(1, 'candy', 718265987, 'candy@email.com', 159874, 'new', '2020-09-07 10:45:29'),
(2, 'waba', 722154852, 'waba@email.com', 123564, 'new', '2020-09-07 10:45:29'),
(3, 'wetgvd', 718254796, 'gvd@email.com', 789654, 'new', '2020-09-08 12:17:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agent2`
--
ALTER TABLE `agent2`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `installer2`
--
ALTER TABLE `installer2`
  ADD PRIMARY KEY (`installer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agent2`
--
ALTER TABLE `agent2`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `installer2`
--
ALTER TABLE `installer2`
  MODIFY `installer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
