-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 11:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p.i.m.s`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `Inmate_Id` varchar(255) NOT NULL,
  `Obedience` varchar(255) DEFAULT NULL,
  `Efficiency` varchar(255) DEFAULT NULL,
  `TeamWork` bigint(12) DEFAULT NULL,
  `feedback_details` varchar(500) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `receiver`, `Inmate_Id`, `Obedience`, `Efficiency`, `TeamWork`, `feedback_details`, `PostingDate`, `LastupdationDate`, `IsRead`) VALUES
(1, 'admin', '2020-1035', '2020-2552', '1', '1', 2, 'mkh9awuihrbrw webfuiawbrfa abfuaeifhafuio vzbfuahofb osfhbsi', '2020-07-27 12:32:24', NULL, 1),
(2, '2020-1021', 'admin', '2020-1654', '', '1', 1, 'Very Great and hard working ', '2020-08-17 17:14:46', '2020-08-18 13:44:19', 1),
(3, '2020-1021', 'admin', '2020-2050', '', '2', 3, 'He has shown great concern in the Prison activities in general', '2020-08-18 13:31:19', '2020-08-19 19:55:14', 1),
(4, '2020-1021', 'admin', '2020-2050', '2', '1', 2, 'qbuhqwebruwehr guiwetguiw3htuoq34i', '2020-08-19 07:54:02', '2020-08-19 09:37:03', 1),
(5, 'admin', 'receiver', '', NULL, NULL, NULL, 'I have seen your comment i will work on it', '2020-08-19 16:37:11', '2020-08-19 17:10:23', 1),
(6, '2020-1021', 'admin', '2020-1654', '3', '2', 1, 'He is showing signs to enable him get a release favor', '2020-08-20 02:27:05', '2020-08-20 02:27:58', 1),
(7, 'admin', 'receiver', '', NULL, NULL, NULL, 'mnsfkui sjhefbuie fsefui sjhebgius siugh9sefbuhe d', '2020-08-20 08:53:39', NULL, NULL),
(8, '2020-1021', 'admin', '2020-1654', '2', '3', 1, 'He is doing well in the penal activities', '2020-08-20 09:36:10', '2020-08-20 09:36:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inmate_details`
--

CREATE TABLE `inmate_details` (
  `id` int(11) NOT NULL,
  `Inmate_Id` varchar(255) NOT NULL,
  `Inmate_FirstName` varchar(255) DEFAULT NULL,
  `Inmate_LastName` varchar(255) DEFAULT NULL,
  `Gender` varchar(25) DEFAULT NULL,
  `Birth_date` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `Address` longtext DEFAULT NULL,
  `Crime` varchar(255) DEFAULT NULL,
  `Block` varchar(2) DEFAULT NULL,
  `Duration` int(11) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inmate_details`
--

INSERT INTO `inmate_details` (`id`, `Inmate_Id`, `Inmate_FirstName`, `Inmate_LastName`, `Gender`, `Birth_date`, `image`, `Height`, `Nationality`, `Address`, `Crime`, `Block`, `Duration`, `creationDate`, `updationDate`) VALUES
(1, '2020-1654', 'Yeshua', 'History', 'male', '0000-00-00', NULL, 3, 'Tanzanian', 'P.O Box 221 Chad', 'Illegal Weapon Possesion', 'B', 20, '2020-07-30 08:47:06', NULL),
(2, '2020-2050', 'James', 'Kitewo', 'male', '0000-00-00', '', 4, 'Tanzanian', 'P.O Box 321 Ghana', 'Car Jacking', 'C', 30, '2020-07-30 08:53:31', NULL),
(3, '2020-2051', 'Vaileth', 'Lyimo', 'female', '0000-00-00', '', 4, 'Tanzanian', 'P.O Box 334 Hanang', 'Computer Crime', 'C', 15, '2020-07-30 09:34:23', NULL),
(4, '2020-2052', 'John', 'Joseph', 'male', '0000-00-00', '', 2, 'Tanzanian', 'P.O Box 334 Moshi', 'Burglary', 'C', 10, '2020-07-30 09:38:54', NULL),
(5, '2020-2053', 'Asewe', 'Mrisho', 'male', '2020-07-01', '', 6, 'Tanzanian', 'P.O Box 345 Dar-es-salaam', 'Robbery', 'B', 23, '2020-07-30 09:55:21', NULL),
(6, '2020-2070', 'Elliot', 'John', 'male', '2019-06-12', '', 6, 'Tanzanian', 'P.O.Box Pwani', 'Terrorism', 'B', 20, '2020-08-20 02:22:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_Id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `staff_firstname` varchar(255) DEFAULT NULL,
  `staff_lastname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_Id`, `password`, `role`, `staff_firstname`, `staff_lastname`, `Email`, `creationDate`, `updationDate`, `Gender`) VALUES
(1, 'admin', '124bd1296bec0d9d93c7b52a71ad8d5b', 'admin', 'admin', NULL, 'admin@gmail.com', '2020-07-09 10:41:54', '2020-08-20 00:08:04', NULL),
(2, '2020-1010', '124bd1296bec0d9d93c7b52a71ad8d5b', '', 'John TheDivine', NULL, 'john@gmail.com', '2020-07-10 18:54:00', NULL, NULL),
(3, '2020-1010', '124bd1296bec0d9d93c7b52a71ad8d5b', '', 'John TheDivine', NULL, 'john@gmail.com', '2020-07-10 19:03:55', NULL, NULL),
(4, '2020-1011', '124bd1296bec0d9d93c7b52a71ad8d5b', '', 'John TheAnointed', NULL, 'john2@gmail.com', '2020-07-10 19:08:06', NULL, NULL),
(5, '2020-1012', '124bd1296bec0d9d93c7b52a71ad8d5b', '', 'John TheApostle', NULL, 'john3@gmail.com', '2020-07-10 19:16:33', NULL, NULL),
(6, '2020-1013', '124bd1296bec0d9d93c7b52a71ad8d5b', '', 'John TheApostle1', NULL, 'john4@gmail.com', '2020-07-10 19:25:53', NULL, NULL),
(7, '2020-1014', '124bd1296bec0d9d93c7b52a71ad8d5b', '$jailor', 'John TheApostle2', NULL, 'john5@gmail.com', '2020-07-10 19:36:30', NULL, NULL),
(8, '2020-1015', '124bd1296bec0d9d93c7b52a71ad8d5b', 'jailor', 'John ', 'TheApostle5', 'john6@gmail.com', '2020-07-10 19:38:02', '2020-07-28 07:05:50', NULL),
(9, '2020-1016', '124bd1296bec0d9d93c7b52a71ad8d5b', 'jailor', 'John ', 'TheApostle4', 'john7@gmail.com', '2020-07-10 19:39:11', '2020-07-28 07:06:13', NULL),
(10, '2020-1016', '124bd1296bec0d9d93c7b52a71ad8d5b', 'supervisor', 'James ', 'TheApostle', 'james@gmail.com', '2020-07-10 19:58:11', '2020-07-25 17:13:01', NULL),
(11, '2020-1018', '124bd1296bec0d9d93c7b52a71ad8d5b', 'interior_minister', 'Jesus ', 'Christ', 'JesusChrist@gmail.com', '2020-07-10 20:31:14', '2020-07-25 12:12:00', NULL),
(12, '2020-1021', 'd6a9a933c8aafc51e55ac0662b6e4d4a', 'jailor', 'Stephen', 'Apostle', 'stephapostle@gmail.com', '2020-07-21 10:49:09', '2020-08-19 23:08:21', NULL),
(13, '2020-1035', 'd6a9a933c8aafc51e55ac0662b6e4d4a', 'supervisor', 'Elijah', 'Prophet', 'elijahproph@gmail.com', '2020-07-21 10:50:44', '2020-08-20 00:08:20', NULL),
(14, '2222-1230', 'd6a9a933c8aafc51e55ac0662b6e4d4a', 'interior_minister', 'Prime ', 'Minister', 'primeminister@gmail.com', '2020-07-21 10:52:22', NULL, NULL),
(15, '2020-1031', 'd6a9a933c8aafc51e55ac0662b6e4d4a', 'supervisor', 'Enoch', 'CheckOut', 'enochcheckout@gmail.com', '2020-07-21 21:12:00', NULL, NULL),
(16, '2020-2043', 'dcddb75469b4b4875094e14561e573d8', 'supervisor', 'Juma', 'Hamisi', 'j@gmail.com', '2020-08-20 09:33:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_log`
--

CREATE TABLE `staff_log` (
  `id` int(11) NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `staff_id` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `staff_name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_log`
--

INSERT INTO `staff_log` (`id`, `sid`, `staff_id`, `userip`, `staff_name`, `status`, `loginTime`, `logout`) VALUES
(24, NULL, '2020-1035', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-24 09:16:43', NULL),
(25, NULL, '2020-1035', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-24 09:18:11', NULL),
(26, NULL, '2010-1035', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-24 09:34:27', NULL),
(27, NULL, 'admin', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-24 10:55:50', NULL),
(28, NULL, '2020-1035', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-24 12:33:01', NULL),
(29, NULL, '2020-1035', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-26 01:07:55', NULL),
(30, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-26 01:50:09', '26-07-2020 03:52:17 AM'),
(31, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-26 01:52:25', '26-07-2020 04:05:19 AM'),
(32, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-26 02:05:26', '26-07-2020 04:14:50 AM'),
(33, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-26 02:15:00', '26-07-2020 04:17:23 AM'),
(34, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-26 02:17:29', '26-07-2020 04:20:06 AM'),
(35, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-26 02:20:12', '26-07-2020 04:21:55 AM'),
(36, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-26 02:22:03', '26-07-2020 05:31:16 AM'),
(37, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-26 03:31:22', '26-07-2020 05:34:15 AM'),
(38, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '1', 1, '2020-07-26 03:34:21', '26-07-2020 05:45:13 AM'),
(39, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-26 03:45:21', '26-07-2020 05:49:18 AM'),
(40, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '', 1, '2020-07-26 03:49:23', '26-07-2020 05:50:18 AM'),
(41, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '', 1, '2020-07-26 03:50:22', '26-07-2020 05:59:29 AM'),
(42, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '1', 1, '2020-07-26 03:59:33', '26-07-2020 06:01:41 AM'),
(43, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '1', 1, '2020-07-26 04:01:47', '26-07-2020 06:03:43 AM'),
(44, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '1', 1, '2020-07-26 04:03:49', '26-07-2020 06:05:19 AM'),
(45, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-26 04:05:24', '26-07-2020 06:06:17 AM'),
(46, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-26 04:06:22', NULL),
(47, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-27 09:48:59', NULL),
(48, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-27 09:49:08', '27-07-2020 11:49:11 AM'),
(49, 15, '2020-1031', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-27 10:50:58', NULL),
(50, 15, '2020-1031', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-27 10:52:59', NULL),
(51, 15, '2020-1031', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-27 10:55:20', NULL),
(52, 15, '2020-1031', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-27 14:05:46', NULL),
(53, 15, '2020-1031', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-27 14:06:20', '27-07-2020 04:06:52 PM'),
(54, 12, '2020-1021', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-27 14:07:10', NULL),
(55, 12, '2020-1021', 0x3132372e302e302e3100000000000000, '0', 1, '2020-07-28 06:53:14', NULL),
(56, NULL, '2020-1021', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-28 07:57:45', NULL),
(57, 12, '2020-1021', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-28 07:57:52', NULL),
(58, 12, '2020-1021', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-28 17:16:13', NULL),
(59, 12, '2020-1021', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-29 00:49:08', NULL),
(60, NULL, 'admin', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-29 12:04:36', NULL),
(61, 12, '2020-1021', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-29 12:23:29', NULL),
(62, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-29 13:20:53', '29-07-2020 03:57:19 PM'),
(63, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-29 13:57:39', '29-07-2020 03:58:57 PM'),
(64, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-29 13:59:02', '29-07-2020 04:01:26 PM'),
(65, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-29 14:01:32', '29-07-2020 04:06:13 PM'),
(66, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-29 14:06:22', '29-07-2020 04:07:45 PM'),
(67, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-29 14:07:51', '29-07-2020 04:13:12 PM'),
(68, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-29 14:13:17', '29-07-2020 04:55:59 PM'),
(69, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '', 1, '2020-07-29 14:56:05', '29-07-2020 04:56:50 PM'),
(70, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '', 1, '2020-07-29 14:56:55', '29-07-2020 04:58:15 PM'),
(71, 13, '2020-1035', 0x3a3a3100000000000000000000000000, '', 1, '2020-07-29 14:58:21', '29-07-2020 05:05:33 PM'),
(72, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-29 15:05:39', '29-07-2020 06:57:21 PM'),
(73, NULL, 'admin', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-29 18:36:37', NULL),
(74, NULL, 'admin', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-07-29 20:31:05', NULL),
(75, 12, '2020-1021', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-30 07:04:31', '30-07-2020 03:37:26 PM'),
(76, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-30 13:37:35', '30-07-2020 03:47:34 PM'),
(77, 12, '2020-1021', 0x3a3a3100000000000000000000000000, '0', 1, '2020-07-30 13:47:40', '30-07-2020 03:55:53 PM'),
(78, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-07-30 18:10:46', NULL),
(79, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-02 15:12:30', NULL),
(80, 14, '2222-1230', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-05 11:21:03', NULL),
(81, NULL, 'admin', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-08-07 07:57:46', NULL),
(82, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-07 08:41:10', '07-08-2020 10:57:06 AM'),
(83, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-07 08:57:39', '07-08-2020 11:22:55 AM'),
(84, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-07 09:23:00', '07-08-2020 12:12:22 PM'),
(85, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-07 10:25:58', NULL),
(86, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-13 08:16:46', NULL),
(87, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-17 13:38:35', '17-08-2020 03:40:33 PM'),
(88, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-17 13:40:39', NULL),
(89, 15, '2020-1031', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-17 14:27:48', '17-08-2020 06:47:55 PM'),
(90, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-17 16:48:03', '17-08-2020 06:48:29 PM'),
(91, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-17 16:48:35', NULL),
(92, 13, '2020-1035', 0x3132372e302e302e3100000000000000, 'Array', 1, '2020-08-17 19:47:09', NULL),
(93, NULL, 'admin', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-08-18 13:03:29', NULL),
(94, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-18 13:30:00', NULL),
(95, 12, '2020-1021', 0x3132372e302e302e3100000000000000, 'Array', 1, '2020-08-19 07:52:14', '19-08-2020 09:54:25 AM'),
(96, 13, '2020-1035', 0x3132372e302e302e3100000000000000, 'Array', 1, '2020-08-19 07:54:30', '19-08-2020 10:59:35 AM'),
(97, 13, '2020-1035', 0x3132372e302e302e3100000000000000, 'Array', 1, '2020-08-19 08:59:41', '19-08-2020 11:20:58 AM'),
(98, NULL, 'admin', 0x3132372e302e302e3100000000000000, NULL, 0, '2020-08-19 09:21:12', NULL),
(99, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-19 16:39:49', '19-08-2020 09:03:36 PM'),
(100, NULL, 'admin', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-08-19 19:03:43', NULL),
(101, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 00:13:40', '20-08-2020 02:23:30 AM'),
(102, NULL, '2020-1021', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-08-20 00:23:45', NULL),
(103, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 00:23:55', '20-08-2020 02:29:54 AM'),
(104, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 00:30:04', '20-08-2020 04:12:47 AM'),
(105, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 02:12:57', '20-08-2020 04:19:14 AM'),
(106, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 02:19:22', '20-08-2020 04:27:37 AM'),
(107, 14, '2222-1230', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 02:30:06', '20-08-2020 04:32:34 AM'),
(108, 14, '2222-1230', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 02:34:09', '20-08-2020 05:35:22 AM'),
(109, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 05:43:23', NULL),
(110, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 05:43:43', NULL),
(111, 14, '2222-1230', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 05:44:13', '20-08-2020 08:57:10 AM'),
(112, NULL, '', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-08-20 06:18:03', NULL),
(113, 14, '2222-1230', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 06:19:46', '20-08-2020 09:19:59 AM'),
(114, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 06:20:10', '20-08-2020 11:48:47 AM'),
(115, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 08:49:02', '20-08-2020 11:49:30 AM'),
(116, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 08:49:39', '20-08-2020 11:50:34 AM'),
(117, 14, '2222-1230', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 08:51:44', '20-08-2020 11:52:08 AM'),
(118, NULL, '', 0x3a3a3100000000000000000000000000, NULL, 0, '2020-08-20 08:52:31', NULL),
(119, 12, '2020-1021', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 09:35:11', '20-08-2020 12:36:18 PM'),
(120, 13, '2020-1035', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 09:37:09', '20-08-2020 12:39:01 PM'),
(121, 14, '2222-1230', 0x3a3a3100000000000000000000000000, 'Array', 1, '2020-08-20 09:39:17', '20-08-2020 12:42:55 PM');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `tid` int(11) NOT NULL,
  `inmate_id` varchar(255) DEFAULT NULL,
  `FileNumber` varchar(255) DEFAULT NULL,
  `FromPrison` varchar(255) DEFAULT NULL,
  `ToPrison` varchar(255) DEFAULT NULL,
  `TransferDate` timestamp NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`tid`, `inmate_id`, `FileNumber`, `FromPrison`, `ToPrison`, `TransferDate`, `updationdate`) VALUES
(1, '2020-2053', '2020-01TR', 'Isanga', 'Maweni', '2020-07-30 10:49:14', NULL),
(2, '2020-1654', '2020-03TR', 'Isanga', 'Lilungu', '2020-08-07 08:52:05', NULL),
(3, '2020-2050', '2020-04TR', 'Uyui', 'Maweni', '2020-08-07 08:52:05', NULL),
(4, '2020-2051', '2020-05TR', 'Karanga', 'Segerea', '2020-08-07 08:52:05', NULL),
(5, '2020-2050', '2020-06TR', 'Maweni', 'Karanga', '2020-08-07 08:52:05', NULL),
(6, '2020-2052', '2020-07TR', 'Butimba', 'Ukonga', '2020-08-07 08:52:05', NULL),
(7, '2020-2053', '2020-08TR', 'Arusha', 'Ruanda', '2020-08-07 08:52:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_details`
--

CREATE TABLE `visitor_details` (
  `id` int(11) NOT NULL,
  `visitor_id` varchar(255) DEFAULT NULL,
  `Firstname` varchar(100) DEFAULT NULL,
  `Lastname` varchar(100) DEFAULT NULL,
  `Inmate_ID` varchar(255) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Birth_date` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `TimeofVisit` varchar(255) DEFAULT NULL,
  `Depart_time` varchar(20) DEFAULT NULL,
  `Relationship` varchar(100) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_details`
--

INSERT INTO `visitor_details` (`id`, `visitor_id`, `Firstname`, `Lastname`, `Inmate_ID`, `Gender`, `Birth_date`, `image`, `TimeofVisit`, `Depart_time`, `Relationship`, `creationDate`, `updationDate`) VALUES
(1, '555-001', 'Goodluck', 'John', '2020-2050', 'female', '1999-06-10', NULL, '12:05 PM', '1:05 PM', 'Cousin', '2020-08-07 09:49:44', NULL),
(2, '555-002', 'Celestine ', 'James', '2020-1654', 'male', '2018-05-17', NULL, '10:03 AM', '12:10 PM', 'Father', '2020-08-07 09:49:44', NULL),
(3, '555-003', 'Suzan', 'Chris', '2020-2053', 'female', '0000-00-00', 'wp6109180.jpg', '3:09 PM', '4:08 PM', 'Nephew', '2020-07-30 10:14:57', NULL),
(4, '555-004', 'Joseph', 'John', '2020-2050', 'male', '2010-01-13', NULL, '8:00 AM ', '9:00 AM', 'Brother', '2020-08-07 10:00:56', NULL),
(5, '555-005', 'Joan', 'Kepha', '2020-2051', 'female', '2017-08-23', NULL, '11:00 AM', '12:00 PM', 'Sister', '2020-08-07 10:00:56', NULL),
(6, '555-006', 'Patrick', 'Meshack', '2020-2053', 'male', '2009-08-12', NULL, '3:00 PM', '4:00 PM', 'Uncle', '2020-08-07 10:00:56', NULL),
(7, '555-007', 'Hellen', 'Mlay', '2020-1654', 'female', '1999-01-12', NULL, '1:00 PM', '3:00 PM', 'Aunty', '2020-08-07 10:00:56', NULL),
(8, '555-008', 'Baraka', 'Joseph', '2020-2051', 'male', '2019-06-10', NULL, '12:00 PM', '2:00 PM', 'Brother', '2020-08-07 10:00:56', NULL),
(9, '', 'Zeelko ', 'Stanley', '2020-2051', 'male', '2019-10-10', '', '6:30 PM', '6:56 PM', 'Brother', '2020-08-20 02:26:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inmate_details`
--
ALTER TABLE `inmate_details`
  ADD PRIMARY KEY (`id`,`Inmate_Id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_log`
--
ALTER TABLE `staff_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `visitor_details`
--
ALTER TABLE `visitor_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inmate_details`
--
ALTER TABLE `inmate_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `staff_log`
--
ALTER TABLE `staff_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visitor_details`
--
ALTER TABLE `visitor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
