-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 02:52 PM
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
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `cart_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `data_generate_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`cart_no`, `customer_id`, `item_id`, `address`, `price`, `quantity`, `subtotal`, `data_generate_time`) VALUES
(1, 1, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-02 20:10:48'),
(2, 1, 34, 'kundasale pallekale', 300.00, 1, 300.00, '2023-10-02 20:10:48'),
(3, 1, 35, 'kundasale pallekale', 123456.00, 1, 123456.00, '2023-10-02 20:10:48'),
(4, 1, 37, 'kundasale pallekale', 999.00, 1, 999.00, '2023-10-02 20:10:48'),
(5, 2, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-02 20:10:48'),
(6, 2, 34, 'kundasale pallekale', 300.00, 1, 300.00, '2023-10-02 20:10:48'),
(7, 2, 35, 'kundasale pallekale', 123456.00, 1, 123456.00, '2023-10-02 20:10:48'),
(8, 2, 37, 'kundasale pallekale', 999.00, 1, 999.00, '2023-10-02 20:10:48'),
(9, 3, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-02 20:10:48'),
(10, 3, 34, 'kundasale pallekale', 300.00, 1, 300.00, '2023-10-02 20:10:48'),
(11, 3, 35, 'kundasale pallekale', 123456.00, 1, 123456.00, '2023-10-02 20:10:48'),
(12, 3, 37, 'kundasale pallekale', 999.00, 1, 999.00, '2023-10-02 20:10:48'),
(13, 4, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-02 20:10:48'),
(14, 4, 34, 'kundasale pallekale', 300.00, 1, 300.00, '2023-10-02 20:10:48'),
(15, 4, 35, 'kundasale pallekale', 123456.00, 1, 123456.00, '2023-10-02 20:10:48'),
(16, 4, 37, 'kundasale pallekale', 999.00, 1, 999.00, '2023-10-02 20:10:48'),
(17, 6, 33, 'kundasale pallekale', 200.00, 1, 200.00, '2023-10-02 20:10:48'),
(18, 7, 33, 'kundasale pallekale', 200.00, 1, 200.00, '2023-10-02 20:10:48'),
(19, 8, 32, 'kundasale pallekale', 100.00, 10, 1000.00, '2023-10-03 03:28:13'),
(20, 9, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-04 03:31:07'),
(21, 9, 33, 'kundasale pallekale', 200.00, 1, 200.00, '2023-10-04 03:31:07'),
(22, 10, 32, 'drhrdhdrh', 100.00, 1, 100.00, '2023-10-04 18:32:19'),
(23, 10, 33, 'drhrdhdrh', 200.00, 1, 200.00, '2023-10-04 18:32:19'),
(24, 11, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-04 18:35:21'),
(25, 11, 33, 'kundasale pallekale', 200.00, 1, 200.00, '2023-10-04 18:35:21'),
(26, 12, 32, 'drhrdhdrh', 100.00, 1, 100.00, '2023-10-04 18:41:16'),
(27, 12, 33, 'drhrdhdrh', 200.00, 1, 200.00, '2023-10-04 18:41:16'),
(28, 13, 32, 'AAAAAAAAAAAAAAAAAAAAAAAA', 100.00, 1, 100.00, '2023-10-04 18:49:26'),
(29, 13, 33, 'AAAAAAAAAAAAAAAAAAAAAAAA', 200.00, 1, 200.00, '2023-10-04 18:49:26'),
(30, 14, 32, '111111111111111111111111111111111111', 100.00, 1, 100.00, '2023-10-04 18:52:27'),
(31, 14, 33, '111111111111111111111111111111111111', 200.00, 1, 200.00, '2023-10-04 18:52:27'),
(32, 14, 37, '111111111111111111111111111111111111', 999.00, 1, 999.00, '2023-10-04 18:52:27'),
(33, 14, 40, '111111111111111111111111111111111111', 0.00, 1, 0.00, '2023-10-04 18:52:27'),
(34, 15, 32, '111111111111111111111111111111111111', 100.00, 1, 100.00, '2023-10-04 18:54:46'),
(35, 15, 33, '111111111111111111111111111111111111', 200.00, 1, 200.00, '2023-10-04 18:54:46'),
(36, 15, 37, '111111111111111111111111111111111111', 999.00, 1, 999.00, '2023-10-04 18:54:46'),
(37, 15, 40, '111111111111111111111111111111111111', 0.00, 1, 0.00, '2023-10-04 18:54:46'),
(38, 16, 32, '111111111111111111111111111111111111', 100.00, 6, 600.00, '2023-10-04 19:05:40'),
(39, 16, 33, '111111111111111111111111111111111111', 200.00, 1, 200.00, '2023-10-04 19:05:40'),
(40, 16, 37, '111111111111111111111111111111111111', 999.00, 1, 999.00, '2023-10-04 19:05:40'),
(41, 16, 40, '111111111111111111111111111111111111', 0.00, 1, 0.00, '2023-10-04 19:05:40'),
(42, 17, 32, '111111111111111111111111111111111111', 100.00, 6, 600.00, '2023-10-04 19:06:42'),
(43, 17, 33, '111111111111111111111111111111111111', 200.00, 1, 200.00, '2023-10-04 19:06:42'),
(44, 17, 37, '111111111111111111111111111111111111', 999.00, 1, 999.00, '2023-10-04 19:06:42'),
(45, 17, 40, '111111111111111111111111111111111111', 0.00, 1, 0.00, '2023-10-04 19:06:42'),
(46, 18, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-05 09:37:43'),
(47, 19, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-05 09:43:55'),
(48, 20, 32, 'kundasale pallekale', 100.00, 10, 1000.00, '2023-10-05 09:56:10'),
(49, 21, 32, 'ghipghrpg', 100.00, 1, 100.00, '2023-10-05 09:59:26'),
(50, 21, 33, 'ghipghrpg', 200.00, 1, 200.00, '2023-10-05 09:59:26'),
(51, 21, 34, 'ghipghrpg', 300.00, 1, 300.00, '2023-10-05 09:59:26'),
(52, 22, 32, 'ottappuwa', 100.00, 1, 100.00, '2023-10-05 10:10:59'),
(53, 22, 33, 'ottappuwa', 200.00, 1, 200.00, '2023-10-05 10:10:59'),
(54, 22, 34, 'ottappuwa', 300.00, 1, 300.00, '2023-10-05 10:10:59'),
(55, 23, 33, 'kundasale pallekale', 200.00, 1, 200.00, '2023-10-07 07:54:15'),
(56, 23, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-07 07:54:15'),
(57, 24, 33, 'kundasale pallekale', 200.00, 1, 200.00, '2023-10-07 08:01:49'),
(58, 24, 32, 'kundasale pallekale', 100.00, 1, 100.00, '2023-10-07 08:01:49'),
(59, 25, 32, 'mathara', 100.00, 1, 100.00, '2023-10-07 08:07:01'),
(60, 25, 33, 'mathara', 200.00, 1, 200.00, '2023-10-07 08:07:01'),
(61, 25, 34, 'mathara', 300.00, 1, 300.00, '2023-10-07 08:07:01'),
(62, 26, 43, '643, poththapiriya paara, digana', 99999999.99, 1, 99999999.99, '2023-10-11 07:05:42'),
(63, 26, 42, '643, poththapiriya paara, digana', 99999999.99, 1, 99999999.99, '2023-10-11 07:05:42'),
(64, 27, 43, 'kundasale pallekale', 99999999.99, 1, 99999999.99, '2023-10-11 08:09:01'),
(65, 27, 42, 'kundasale pallekale', 99999999.99, 1, 99999999.99, '2023-10-11 08:09:01'),
(66, 28, 43, 'kundasale pallekale', 99999999.99, 1, 99999999.99, '2023-10-11 08:09:15'),
(67, 28, 42, 'kundasale pallekale', 99999999.99, 1, 99999999.99, '2023-10-11 08:09:15'),
(68, 29, 42, 'kundasale pallekale', 99999999.99, 1, 99999999.99, '2023-10-12 04:42:58'),
(69, 29, 43, 'kundasale pallekale', 99999999.99, 1, 99999999.99, '2023-10-12 04:42:58'),
(70, 30, 43, '@@@@@@@@@@@@@@@@@@@@@@@', 99999999.99, 1, 99999999.99, '2023-10-12 05:10:50'),
(71, 30, 42, '@@@@@@@@@@@@@@@@@@@@@@@', 99999999.99, 1, 99999999.99, '2023-10-12 05:10:50'),
(72, 31, 42, '5678 Oak Lane', 99999999.99, 1, 99999999.99, '2023-10-12 17:49:05'),
(73, 31, 43, '5678 Oak Lane', 99999999.99, 1, 99999999.99, '2023-10-12 17:49:05'),
(74, 32, 42, 'kundasale pallekale', 99999999.99, 1, 99999999.99, '2023-10-12 17:50:34'),
(75, 33, 42, 'Address: Starship USS Celestial', 99999999.99, 1, 99999999.99, '2023-10-12 17:56:43'),
(76, 33, 43, 'Address: Starship USS Celestial', 99999999.99, 1, 99999999.99, '2023-10-12 17:56:43'),
(77, 34, 43, 'kundasale pallekale', 99999999.99, 1, 99999999.99, '2023-10-12 17:57:56'),
(78, 35, 45, 'testkundasale pallekale', 100.00, 1, 100.00, '2023-10-12 18:21:41'),
(79, 35, 46, 'testkundasale pallekale', 200.00, 1, 200.00, '2023-10-12 18:21:41'),
(80, 35, 47, 'testkundasale pallekale', 300.00, 1, 300.00, '2023-10-12 18:21:41'),
(81, 36, 45, '', 100.00, 1, 100.00, '2023-10-12 19:40:03'),
(82, 36, 46, '', 200.00, 1, 200.00, '2023-10-12 19:40:03'),
(83, 36, 47, '', 300.00, 1, 300.00, '2023-10-12 19:40:03'),
(84, 37, 45, '', 100.00, 1, 100.00, '2023-10-12 19:41:07'),
(85, 37, 46, '', 200.00, 1, 200.00, '2023-10-12 19:41:07'),
(86, 37, 47, '', 300.00, 1, 300.00, '2023-10-12 19:41:07'),
(87, 38, 45, '643, poththapiriya paara, digana', 100.00, 1, 100.00, '2023-10-13 03:44:11'),
(88, 38, 46, '643, poththapiriya paara, digana', 200.00, 1, 200.00, '2023-10-13 03:44:11'),
(89, 38, 47, '643, poththapiriya paara, digana', 300.00, 1, 300.00, '2023-10-13 03:44:11'),
(90, 39, 45, '643, poththapiriya paara, digana', 100.00, 1, 100.00, '2023-10-13 03:50:16'),
(91, 39, 46, '643, poththapiriya paara, digana', 200.00, 1, 200.00, '2023-10-13 03:50:16'),
(92, 39, 47, '643, poththapiriya paara, digana', 300.00, 1, 300.00, '2023-10-13 03:50:16'),
(93, 40, 47, 'Address', 300.00, 1, 300.00, '2023-10-13 04:05:02'),
(94, 41, 46, 'kundasale pallekale', 200.00, 1, 200.00, '2023-10-13 08:36:44'),
(95, 42, 46, '1234 main st', 200.00, 1, 200.00, '2023-10-14 06:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(11) NOT NULL,
  `OrderName` varchar(255) NOT NULL,
  `OrderCity` varchar(255) NOT NULL,
  `OrderDistrict` varchar(255) NOT NULL,
  `OrderSTaddress` varchar(255) NOT NULL,
  `OrderAddress` varchar(255) NOT NULL,
  `OrderEmail` varchar(255) NOT NULL,
  `OrderMNumber` int(11) NOT NULL,
  `data_generate_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT 1,
  `TotalAmount` decimal(10,2) DEFAULT NULL,
  `orderstatus` varchar(20) DEFAULT 'You have new order'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `OrderName`, `OrderCity`, `OrderDistrict`, `OrderSTaddress`, `OrderAddress`, `OrderEmail`, `OrderMNumber`, `data_generate_time`, `status`, `TotalAmount`, `orderstatus`) VALUES
(1, 'thushara thilan', 'pallekale', 'kandy', '11/70 henwala', 'kundasale pallekale', 'jonax94195@horsgit.com', 718219236, '2023-10-02 20:11:18', 1, NULL, '1'),
(2, 'thushara thilan', 'pallekale', 'kandy', '11/70 henwala', 'kundasale pallekale', 'jonax94195@horsgit.com', 718219236, '2023-10-02 20:11:18', 1, NULL, 'You have new order'),
(3, 'jonax mervin', 'colombo', 'kandy', 'grgs', 'kundasale pallekale', 'jonax94195@horsgit.com', 718219236, '2023-10-02 20:11:18', 1, NULL, 'You have new order'),
(4, 'jonax mervin', 'colombo', 'kandy', 'grgs', 'kundasale pallekale', 'jonax94195@horsgit.com', 718219236, '2023-10-02 20:11:18', 1, NULL, 'You have new order'),
(5, 'brhrshsh', 'hrdhdr', 'ponnapura', 'drhdrh', 'drhrdhdrh', 'lucif3r7h3arc4n9el@gmail.com', 718219236, '2023-10-02 20:11:18', 1, NULL, 'You have new order'),
(6, 'jonax mervin', 'colombo', 'kandy', 'grgs', 'kundasale pallekale', 'jonax94195@horsgit.com', 718219236, '2023-10-02 20:11:18', 1, NULL, 'You have new order'),
(7, 'thushara thilan', 'kundasale', '00000', '11/70 henwala', 'kundasale pallekale', 'ponnapakaya@gmail.com', 718219236, '2023-10-02 20:11:18', 1, NULL, 'You have new order'),
(8, 'salinasa disasekara', 'bandarawela', 'badulla', 'malliththa', 'kundasale pallekale', 'salinda@gmail.com', 71712589, '2023-10-03 03:28:13', 1, NULL, 'You have new order'),
(9, 'thushara thilan', 'kundasale', '0000', '11/70 henwala', 'kundasale pallekale', 'ponnapakaya@gmail.com', 718219236, '2023-10-04 03:31:07', 1, NULL, 'You have new order'),
(10, 'brhrshsh', 'hrdhdr', 'colombo', 'drhdrh', 'drhrdhdrh', 'lucif3r7h3arc4n9el@gmail.com', 718219236, '2023-10-04 18:32:19', 1, NULL, 'You have new order'),
(11, 'thishara', 'kundasale', '7777777777', '11/70 henwala', 'kundasale pallekale', 'ponnapakaya@gmail.com', 718219236, '2023-10-04 18:35:21', 1, NULL, 'You have new order'),
(12, 'brhrshsh', 'hrdhdr', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'drhdrh', 'drhrdhdrh', 'lucif3r7h3arc4n9el@gmail.com', 718219236, '2023-10-04 18:41:16', 1, NULL, '1'),
(13, 'AAAAAAAAAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAAAAA@gmail.com', 2147483647, '2023-10-04 18:49:26', 1, NULL, 'You have new order'),
(14, '111111111111111111111111111111111111111111111111111111', '111111111111111111111111111111111111111111111111111111', '111111111111111111111111111111111111111111111111111111', '111111111111111111111111111111111111', '111111111111111111111111111111111111', '111111111111111111111111111111111111@gmail.com', 2147483647, '2023-10-04 18:52:27', 1, NULL, 'You have new order'),
(15, '111111111111111111111111111111111111111111111111111111', '111111111111111111111111111111111111111111111111111111', '11111111111111111111111111111111111111111111111111', '111111111111111111111111111111111111', '111111111111111111111111111111111111', '111111111111111111111111111111111111@gmail.com', 0, '2023-10-04 18:54:46', 1, NULL, 'You have new order'),
(16, '111111111111111111111111111111111111111111111111111111', '111111111111111111111111111111111111111111111111111111', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '111111111111111111111111111111111111', '111111111111111111111111111111111111', '111111111111111111111111111111111111@gmail.com', 0, '2023-10-04 19:05:40', 1, NULL, 'You have new order'),
(17, '111111111111111111111111111111111111111111111111111111', '111111111111111111111111111111111111111111111111111111', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '111111111111111111111111111111111111', '111111111111111111111111111111111111', '111111111111111111111111111111111111@gmail.com', 0, '2023-10-04 19:06:42', 1, NULL, 'You have new order'),
(18, 'salinada', 'colombo', '00000000000000000000000000000000000', 'grgs', 'kundasale pallekale', 'jonax94195@horsgit.com', 718219236, '2023-10-05 09:37:43', 1, NULL, 'You have new order'),
(19, 'saminda', 'colombo', 'pure', 'grgs', 'kundasale pallekale', 'jonax94195@horsgit.com', 718219236, '2023-10-05 09:43:55', 1, NULL, 'You have new order'),
(20, 'thisara pramuditha', 'pallengklag', 'kandy', '11/70 henwala', 'kundasale pallekale', 'ponnapakaya@gmail.com', 718219236, '2023-10-05 09:56:10', 1, NULL, 'You have new order'),
(21, 'jonax mervin', 'egjpwghrw', ' grwgwihig', 'grgsye5ny5ey', 'ghipghrpg', 'lucif3r7h3arc4n9el@gmail.com', 119, '2023-10-05 09:59:26', 1, NULL, 'You have new order'),
(22, 'thushara thilan', 'nochchiyagama', 'anurashapura', 'puttalam road', 'ottappuwa', 'hidef36410@finghy.com', 717109098, '2023-10-05 10:10:59', 1, NULL, 'You have new order'),
(23, 'Danoja hewanayaka', 'dambulla', 'gampaha', 'Street Address000000', 'kundasale pallekale', 'eg245075@engug.ruh.ac.lk', 0, '2023-10-07 07:54:14', 1, NULL, '1'),
(24, 'Danoja hewanayaka', 'dambulla', '789789789789789789789', 'Street Address000000', 'kundasale pallekale', 'eg245075@engug.ruh.ac.lk', 0, '2023-10-07 08:01:49', 1, NULL, '1'),
(25, 'sanduni perera', 'mathara', 'mathara', 'mathara', 'mathara', 'mathara@gmail.com', 123456789, '2023-10-07 08:07:01', 1, NULL, '0'),
(26, 'basnayake', 'alawathugoda', 'basnahira', '32/3 alawathugoda, alawwa', '643, poththapiriya paara, digana', 'apinamkaimagnka@gmail.com', 712343725, '2023-10-11 07:05:42', 1, NULL, '1'),
(27, 'Danoja hewanayaka', 'dambulla', '11111', 'Street Address000000', 'kundasale pallekale', 'eg245075@engug.ruh.ac.lk', 0, '2023-10-11 08:09:01', 1, NULL, '0'),
(28, 'Danoja hewanayaka', 'dambulla', 'anurapura', 'Street Address000000', 'kundasale pallekale', 'eg245075@engug.ruh.ac.lk', 0, '2023-10-11 08:09:15', 1, NULL, '0'),
(29, 'Danoja hewanayaka', 'dambulla', '9999999999999999999999999999999999999', 'Street Address000000', 'kundasale pallekale', 'eg245075@engug.ruh.ac.lk', 0, '2023-10-12 04:42:58', 1, NULL, '0'),
(30, '@@@@@@@@@@@@@@@@@@@@@@@', '@@@@@@@@@@@@@@@@@@@@@@@', '@@@@@@@@@@@@@@@@@@@@@@@', '@@@@@@@@@@@@@@@@@@@@@@@', '@@@@@@@@@@@@@@@@@@@@@@@', 'mmjkhjhhhoh@gmail.com', 712343725, '2023-10-12 05:10:50', 1, NULL, '1'),
(31, 'John Smith', 'Los Angeles', 'Los Angeles', ' Sunset Boulevard', '5678 Oak Lane', 'j.smith@email.com', 719999999, '2023-10-12 17:49:05', 1, 99999999.99, '0'),
(32, 'Danoja hewanayaka', 'dambulla', 'kandy', 'Street Address000000', 'kundasale pallekale', 'eg245075@engug.ruh.ac.lk', 0, '2023-10-12 17:50:34', 1, 99999999.99, '1'),
(33, 'Full Name: Quasar Zephyr-X', 'City: Elysium-9', 'District: Nebulon-5', 'Street Address: Hyperspace Lane', 'Address: Starship USS Celestial', 'Emailquantumtraveler@gmail.net', 717109098, '2023-10-12 17:56:43', 1, 99999999.99, '0'),
(34, 'Danoja hewanayaka', 'dambulla', '0', 'Street Address000000', 'kundasale pallekale', 'eg245075@engug.ruh.ac.lk', 0, '2023-10-12 17:57:56', 1, 99999999.99, '0'),
(35, 'testDanoja hewanayaka', 'testdambulla', 'test', 'testStreet Address000000', 'testkundasale pallekale', 'testeg245075@engug.ruh.ac.lk', 0, '2023-10-12 18:21:41', 1, 600.00, '0'),
(36, '', '', '', '', '', '', 0, '2023-10-12 19:40:03', 1, 600.00, '0'),
(37, '', '', '', '', '', '', 0, '2023-10-12 19:41:07', 1, 600.00, '0'),
(38, 'basnayake', 'alawathugoda', '1', '32/3 alawathugoda, alawwa', '643, poththapiriya paara, digana', 'apinamkaimagnka@gmail.com', 712343725, '2023-10-13 03:44:11', 1, 600.00, '0'),
(39, 'basnayake', 'alawathugoda', '1', '32/3 alawathugoda, alawwa', '643, poththapiriya paara, digana', 'apinamkaimagnka@gmail.com', 712343725, '2023-10-13 03:50:16', 1, 600.00, '0'),
(40, 'Full Name', 'Closses City', 'Closses District', 'Street Address', 'Address', 'Emailquantumtraveler@gmail.net', 717109080, '2023-10-13 04:05:02', 1, 300.00, '0'),
(41, 'Danoja hewanayaka', 'dambulla', '000000000000', 'Street Address000000', 'kundasale pallekale', 'eg245075@engug.ruh.ac.lk', 0, '2023-10-13 08:36:44', 1, 200.00, '1'),
(42, 'ab anderson', 'colombo city', 'gampaha city', 'park avenue address', '1234 main st', 'youremail@gmail.com', 712345678, '2023-10-14 06:22:33', 1, 200.00, '0');

-- --------------------------------------------------------

--
-- Table structure for table `order_totals`
--

CREATE TABLE `order_totals` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total_amount` decimal(60,2) NOT NULL,
  `status` int(1) DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_totals`
--

INSERT INTO `order_totals` (`order_id`, `customer_id`, `total_amount`, `status`, `id`) VALUES
(0, 35, 600.00, 0, 1),
(0, 39, 600.00, 0, 2),
(0, 40, 300.00, 0, 3),
(0, 41, 200.00, 0, 4),
(0, 42, 200.00, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` int(1) DEFAULT 1,
  `id_gallery` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`, `status`, `id_gallery`) VALUES
(0, 'Full Name', 'jytr', 0.00, 'product-images/WWW.YIFY-TORRENTS.COM.jpg', 1, 3),
(0, 'Danoja hewanayaka', '002', 100.00, 'product-images/IMG_20231009_091045.jpg', 1, 4),
(0, 'Danoja hewanayaka', '003', 99.00, 'product-images/IMG_3821.JPG', 1, 5),
(0, 'Danoja hewanayaka', '12345679', 100.00, 'product-images/WWW.YIFY-TORRENTS.COM (4).jpg', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `ProfilePic` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Description`, `Address`, `ProfilePic`, `CreationDate`, `status`) VALUES
(32, 'jonax mervin', 'Custom', 100, 'description', '003', 'profile_6524ce5462c041.77962157.jpg', '2023-10-10 12:50:55', '0'),
(33, 'jonax johanson', 'Wall Art', 200, 'ponnaya', 'grjio0p', 'd41d8cd98f00b204e9800998ecf8427e1695747727.jpg', '2023-10-10 12:50:11', '0'),
(34, 'Product Name', 'Custom', 300, 'vrewhwh', 'h4hww4hw4hy', 'd41d8cd98f00b204e9800998ecf8427e1695747753.png', '2023-10-10 12:41:15', '0'),
(35, 'ehtdx v', 'Custom', 123456, 'regergerg', 'grgsye5ny5ey', 'profile_65254be5c51911.21711941.png', '2023-10-11 04:34:45', '0'),
(37, 'product name', 'Wall Art', 999, 'description01', 'note', 'profile_65254c29efefd7.30629631.png', '2023-10-11 04:36:58', '0'),
(40, 'thusharae', 'Wood Burn Art', 0, 'jbkg.vj.vv', '123456', 'profile_65254c354ce266.88468650.png', '2023-10-11 04:37:25', '0'),
(42, 'jonax', 'Wood Burn Art', 7918630561, 't4t4tg', '1999', 'profile_65254c47b33184.73771222.png', '2023-10-12 18:18:41', '0'),
(43, 'jonax', 'Wood Burn Art', 7918630561, 'JKGJVVJ', '000000', 'profile_65254c55f08815.57017217.png', '2023-10-12 18:18:45', '0'),
(44, '00000000000000000', 'Wood Burn Art', 0, '00000000000000000', '00000000000000000', '8ffe037b9877b1082aa9c19e95cd4b72.jpg', '2023-10-10 12:42:42', '0'),
(45, 'item 01', 'Wall Art', 100, 'available', '001', 'profile_6529891b302cf6.42984431.png', '2023-10-13 18:21:04', '0'),
(46, 'item 02', 'Wood Burn Art', 200, 'not available', '002', '6ddfca54fd2a5ded756ee84bc5a6ce4a.png', '2023-10-14 13:50:09', '0'),
(47, 'item 03', 'Custom', 300, 'danne na', '003', 'profile_652a9c9c67ed14.95808488.jpg', '2023-10-14 17:35:06', '0'),
(48, 'fdef', 'Wood Burn Art', 7918630561, '100', '000000', '4e5712832b351bc877c8f725fc6e3968.jpg', '2023-10-14 17:35:13', '0'),
(49, 'jonax', 'Wood Burn Art', 7918630561, 'khx', '000000', '544d7fb2aef59a94f53bbf0c400af4e3.png', '2023-10-14 17:35:48', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`cart_no`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order_totals`
--
ALTER TABLE `order_totals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `cart_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `order_totals`
--
ALTER TABLE `order_totals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_gallery` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_details` (`customer_id`),
  ADD CONSTRAINT `cart_details_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `tblusers` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
