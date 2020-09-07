-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 11:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deal_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `admin_id` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `activity_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`admin_id`, `action`, `activity_date`) VALUES
(1, 'Added new batch', '2019-07-30 19:30:27'),
(1, 'Added new batch', '2019-07-30 19:33:54'),
(1, 'Added new Distributi', '2019-07-30 19:50:20'),
(2, 'Added new Distributi', '2019-08-01 02:31:29'),
(1, 'Added new batch', '2019-08-01 02:32:27'),
(1, 'Added new drug', '2019-08-01 22:45:39'),
(1, 'Added new drug', '2019-08-01 22:54:48'),
(1, 'Added new drug', '2019-08-02 16:29:03'),
(1, 'Added new drug', '2019-08-02 16:36:11'),
(1, 'Added new drug', '2019-08-02 16:42:15'),
(1, 'Added new drug', '2019-08-02 16:43:11'),
(1, 'Added new drug', '2019-08-02 16:43:19'),
(1, 'Added new drug', '2019-08-02 16:44:02'),
(1, 'Added new drug', '2019-08-02 16:44:46'),
(1, 'Added new drug', '2019-08-02 16:46:20'),
(1, 'Added new drug', '2020-08-13 03:02:39'),
(1, 'Added new drug', '2020-08-13 03:04:39'),
(1, 'Added new drug', '2020-08-13 03:06:54'),
(2, 'Added new batch', '2019-09-10 14:25:50'),
(2, 'Added new drug', '2019-09-10 14:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `Username`, `Password`, `Access`) VALUES
(1, 'Ayanda ', 'Temitayo', 'admin', 'admin', 1),
(2, 'Binta  ', 'Fatima', 'Fatima', '1234', 1),
(3, 'Joe', 'Dickson', 'jDickson', '1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `b_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `Batch_Name` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`b_id`, `admin_id`, `Batch_Name`, `date`) VALUES
(1, 1, 'Batch 1', '2019-07-30 19:33:53'),
(2, 1, 'Batch 2', '2019-08-01 02:32:27'),
(3, 2, 'Batch 1', '2019-09-10 14:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `distribution_center`
--

CREATE TABLE `distribution_center` (
  `id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Contact_info` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribution_center`
--

INSERT INTO `distribution_center` (`id`, `Name`, `Location`, `Contact_info`) VALUES
(1, 'Favours Pharmacy', '23, Minna Road Niger State', '08093245471'),
(2, 'Bayo Pharmacy', 'Unity road, Ilorin kwara State', '07054367898');

-- --------------------------------------------------------

--
-- Table structure for table `drug_table`
--

CREATE TABLE `drug_table` (
  `drug_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `drug_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `prod_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `qty` int(10) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(100) NOT NULL,
  `evaluation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug_table`
--

INSERT INTO `drug_table` (`drug_id`, `admin_id`, `batch_id`, `drug_name`, `description`, `prod_date`, `expiry_date`, `qty`, `price`, `status`, `evaluation`) VALUES
(1, 1, 2, 'Paracetamol', 'For relief of pain, head ache and weakness', '2018-08-15', '2019-09-27', 500, 50, '1', 'refurbished'),
(2, 1, 1, 'Procold', 'Useful for cold, cough and Cattrh', '2018-08-10', '2019-09-27', 2000, 100, '1', 'refurbished'),
(3, 1, 2, 'Vitamin C', 'For relief of pain', '2019-08-01', '2020-02-01', 800, 500, '2', 'normal'),
(4, 2, 1, 'panadol', 'Useful for cold cough and Cattrh', '2019-09-05', '2019-10-24', 2000, 500, '1', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `expiry_table`
--

CREATE TABLE `expiry_table` (
  `id` int(11) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `sales_date` date NOT NULL,
  `dist_center` varchar(100) NOT NULL,
  `drug` varchar(50) NOT NULL,
  `sales_qty` int(20) NOT NULL,
  `sales_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `admin_id`, `sales_date`, `dist_center`, `drug`, `sales_qty`, `sales_price`) VALUES
(1, 1, '2019-08-13', '2', '1', 80, 40),
(2, 1, '2019-08-14', '2', '2', 300, 50),
(3, 1, '2019-08-31', '1', '3', 200, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `distribution_center`
--
ALTER TABLE `distribution_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug_table`
--
ALTER TABLE `drug_table`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `expiry_table`
--
ALTER TABLE `expiry_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distribution_center`
--
ALTER TABLE `distribution_center`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drug_table`
--
ALTER TABLE `drug_table`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expiry_table`
--
ALTER TABLE `expiry_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
