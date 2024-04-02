-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 12:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gitoffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE `allowances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double(8,2) NOT NULL,
  `value_type` enum('flat','percentage') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `designations_id` bigint(20) UNSIGNED NOT NULL,
  `wef` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`id`, `title`, `value`, `value_type`, `designations_id`, `wef`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Special Allowance', 15.00, 'percentage', 5, '2023-01-01', NULL, 'active', '2023-09-23 05:18:33', '2023-09-23 05:18:33'),
(2, 'Special Allowance', 15.00, 'percentage', 5, '2023-01-01', NULL, 'active', '2023-09-23 05:20:41', '2023-09-23 05:20:41'),
(3, 'Special Allowance', 15.00, 'percentage', 5, '2023-01-01', NULL, 'active', '2023-09-23 05:21:26', '2023-09-23 05:21:26'),
(4, 'Special Allowance', 15.00, 'percentage', 5, '2023-01-01', NULL, 'active', '2023-09-23 05:21:51', '2023-09-23 05:21:51'),
(5, 'Autonomouns Allowance', 400.00, 'flat', 5, '2023-02-01', NULL, 'active', '2023-09-23 05:23:43', '2023-09-23 05:23:43'),
(6, 'Autonomouns Allowance', 700.00, 'flat', 5, '2023-02-01', NULL, 'active', '2023-09-23 05:23:55', '2023-09-23 05:35:26'),
(7, 'Special Insentive Asso', 15.00, 'percentage', 6, '2023-01-01', NULL, 'active', '2023-09-23 05:24:48', '2023-09-23 05:24:48'),
(8, 'Special Insentive Asso', 15.00, 'percentage', 6, '2023-01-01', '2023-09-23', 'inactive', '2023-09-23 05:25:21', '2023-09-23 05:40:07'),
(9, 'Autonomous Allowance', 1000.00, 'flat', 5, '2023-01-01', NULL, 'active', '2023-09-23 05:26:12', '2023-09-23 05:26:12'),
(10, 'Dean Allowance', 10000.00, 'flat', 3, '2023-01-01', NULL, 'active', '2023-09-30 06:25:21', '2023-09-30 06:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `associations`
--

CREATE TABLE `associations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asso_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associations`
--

INSERT INTO `associations` (`id`, `asso_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Visiting', 'active', '2023-09-11 05:16:07', '2023-09-13 00:31:04'),
(2, 'Adjunct', 'active', '2023-09-11 05:26:09', '2023-09-13 00:30:44'),
(4, 'Contractual (Full Time)', 'active', '2023-09-13 00:32:39', '2023-10-06 02:51:12'),
(5, 'Probationary', 'active', '2023-09-13 00:33:02', '2023-09-13 00:33:02'),
(6, 'Confirmed', 'active', '2023-09-13 00:33:20', '2023-09-13 00:33:20'),
(7, 'Temporary (non teaching)', 'active', '2023-09-22 05:40:40', '2023-09-22 05:40:40'),
(8, 'Transfered', 'active', '2023-10-06 02:40:25', '2023-10-06 02:40:25'),
(9, 'Retired', 'active', '2023-10-06 02:40:59', '2023-10-06 02:40:59'),
(10, 'Resigned', 'active', '2023-10-06 02:42:39', '2023-10-06 02:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `association_staff`
--

CREATE TABLE `association_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `association_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `association_staff`
--

INSERT INTO `association_staff` (`id`, `association_id`, `staff_id`, `start_date`, `end_date`, `reason`, `gcr`, `status`, `created_at`, `updated_at`) VALUES
(14, 5, 11, '2009-09-24', NULL, NULL, NULL, 'active', NULL, NULL),
(15, 5, 12, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(16, 5, 13, '2005-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(17, 5, 14, '2018-12-02', NULL, NULL, NULL, 'active', NULL, NULL),
(18, 5, 15, '2022-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(19, 5, 16, '1989-09-05', NULL, NULL, NULL, 'active', NULL, NULL),
(20, 5, 17, '2023-01-03', NULL, NULL, NULL, 'active', NULL, NULL),
(21, 5, 18, '2016-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(22, 5, 19, '2023-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(23, 5, 20, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(24, 5, 21, '2023-04-09', NULL, NULL, NULL, 'active', NULL, NULL),
(25, 5, 22, '2022-10-10', NULL, NULL, NULL, 'active', NULL, NULL),
(26, 5, 23, '2009-05-10', NULL, NULL, NULL, 'active', NULL, NULL),
(27, 5, 24, '2011-09-28', NULL, NULL, NULL, 'active', NULL, NULL),
(28, 5, 25, '2003-11-15', NULL, NULL, NULL, 'active', NULL, NULL),
(29, 5, 26, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(30, 5, 27, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(31, 5, 28, '2005-08-18', NULL, NULL, NULL, 'active', NULL, NULL),
(32, 5, 29, '2013-05-03', NULL, NULL, NULL, 'active', NULL, NULL),
(33, 5, 30, '2013-02-11', NULL, NULL, NULL, 'active', NULL, NULL),
(34, 5, 31, '2006-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(35, 5, 32, '2008-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(36, 5, 33, '2013-11-07', NULL, NULL, NULL, 'active', NULL, NULL),
(37, 5, 34, '2012-01-12', NULL, NULL, NULL, 'active', NULL, NULL),
(38, 5, 35, '2013-12-26', NULL, NULL, NULL, 'active', NULL, NULL),
(39, 5, 36, '2012-05-16', NULL, NULL, NULL, 'active', NULL, NULL),
(40, 5, 37, '2014-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(41, 5, 38, '2012-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(42, 5, 39, '2014-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(43, 5, 40, '2013-03-15', NULL, NULL, NULL, 'active', NULL, NULL),
(44, 5, 41, '2014-01-10', NULL, NULL, NULL, 'active', NULL, NULL),
(45, 5, 42, '2013-09-14', NULL, NULL, NULL, 'active', NULL, NULL),
(46, 5, 43, '2014-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(47, 5, 44, '2013-02-13', NULL, NULL, NULL, 'active', NULL, NULL),
(48, 5, 45, '2014-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(49, 5, 46, '2005-07-06', NULL, NULL, NULL, 'active', NULL, NULL),
(50, 5, 47, '2014-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(51, 5, 48, '2013-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(52, 5, 49, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(53, 5, 50, '2015-02-18', NULL, NULL, NULL, 'active', NULL, NULL),
(54, 5, 51, '2013-03-05', NULL, NULL, NULL, 'active', NULL, NULL),
(55, 5, 52, '2006-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(56, 5, 53, '2015-02-18', NULL, NULL, NULL, 'active', NULL, NULL),
(57, 5, 54, '2015-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(58, 5, 55, '2015-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(59, 5, 56, '2015-07-06', NULL, NULL, NULL, 'active', NULL, NULL),
(60, 5, 57, '2015-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(61, 5, 58, '2014-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(62, 5, 59, '2015-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(63, 5, 60, '2023-05-23', NULL, NULL, NULL, 'active', NULL, NULL),
(64, 5, 61, '2013-02-13', NULL, NULL, NULL, 'active', NULL, NULL),
(65, 5, 62, '2016-07-15', NULL, NULL, NULL, 'active', NULL, NULL),
(66, 5, 63, '2009-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(67, 5, 64, '2017-07-03', NULL, NULL, NULL, 'active', NULL, NULL),
(68, 5, 65, '2016-09-08', NULL, NULL, NULL, 'active', NULL, NULL),
(69, 5, 66, '2015-11-03', NULL, NULL, NULL, 'active', NULL, NULL),
(70, 5, 67, '2022-10-21', NULL, NULL, NULL, 'active', NULL, NULL),
(71, 5, 68, '2015-11-16', NULL, NULL, NULL, 'active', NULL, NULL),
(72, 5, 69, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(73, 5, 70, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(74, 5, 71, '2017-07-07', NULL, NULL, NULL, 'active', NULL, NULL),
(75, 5, 72, '2012-11-06', NULL, NULL, NULL, 'active', NULL, NULL),
(76, 5, 73, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(77, 5, 74, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(78, 5, 75, '2010-04-12', NULL, NULL, NULL, 'active', NULL, NULL),
(79, 5, 76, '1989-03-04', NULL, NULL, NULL, 'active', NULL, NULL),
(80, 5, 77, '1997-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(81, 5, 78, '2010-09-14', NULL, NULL, NULL, 'active', NULL, NULL),
(82, 5, 79, '2019-09-20', NULL, NULL, NULL, 'active', NULL, NULL),
(83, 5, 80, '1998-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(84, 5, 81, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(85, 5, 82, '1996-03-09', NULL, NULL, NULL, 'active', NULL, NULL),
(86, 5, 83, '2014-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(87, 5, 84, '1997-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(88, 5, 85, '2019-09-16', NULL, NULL, NULL, 'active', NULL, NULL),
(89, 5, 86, '2022-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(90, 5, 87, '2021-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(91, 5, 88, '1997-02-11', NULL, NULL, NULL, 'active', NULL, NULL),
(92, 5, 89, '2023-07-17', NULL, NULL, NULL, 'active', NULL, NULL),
(93, 5, 90, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(94, 5, 91, '2023-06-05', NULL, NULL, NULL, 'active', NULL, NULL),
(95, 5, 92, '1999-10-30', NULL, NULL, NULL, 'active', NULL, NULL),
(96, 5, 93, '2010-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(97, 5, 94, '2008-08-14', NULL, NULL, NULL, 'active', NULL, NULL),
(98, 5, 95, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(99, 5, 96, '1996-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(100, 5, 97, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(101, 5, 98, '2001-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(102, 5, 99, '2010-09-09', NULL, NULL, NULL, 'active', NULL, NULL),
(103, 5, 100, '2022-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(104, 5, 101, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(105, 5, 102, '2012-08-03', NULL, NULL, NULL, 'active', NULL, NULL),
(106, 5, 103, '2006-03-09', NULL, NULL, NULL, 'active', NULL, NULL),
(107, 5, 104, '2007-08-06', NULL, NULL, NULL, 'active', NULL, NULL),
(108, 5, 105, '2016-10-24', NULL, NULL, NULL, 'active', NULL, NULL),
(109, 5, 106, '1999-10-29', NULL, NULL, NULL, 'active', NULL, NULL),
(110, 5, 107, '2004-04-08', NULL, NULL, NULL, 'active', NULL, NULL),
(111, 5, 108, '2021-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(112, 5, 109, '2004-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(113, 5, 110, '2023-05-22', NULL, NULL, NULL, 'active', NULL, NULL),
(114, 5, 111, '2003-06-13', NULL, NULL, NULL, 'active', NULL, NULL),
(115, 5, 112, '2013-02-13', NULL, NULL, NULL, 'active', NULL, NULL),
(116, 5, 113, '2023-08-21', NULL, NULL, NULL, 'active', NULL, NULL),
(117, 5, 114, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(118, 5, 115, '2023-10-10', NULL, NULL, NULL, 'active', NULL, NULL),
(119, 5, 116, '2011-05-16', NULL, NULL, NULL, 'active', NULL, NULL),
(120, 5, 117, '1998-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(121, 5, 118, '2007-04-02', NULL, NULL, NULL, 'active', NULL, NULL),
(122, 5, 119, '2007-05-28', NULL, NULL, NULL, 'active', NULL, NULL),
(123, 5, 120, '2003-09-17', NULL, NULL, NULL, 'active', NULL, NULL),
(124, 5, 121, '2023-10-09', NULL, NULL, NULL, 'active', NULL, NULL),
(125, 5, 122, '2008-08-14', NULL, NULL, NULL, 'active', NULL, NULL),
(126, 5, 123, '2007-07-17', NULL, NULL, NULL, 'active', NULL, NULL),
(127, 5, 124, '2002-07-11', NULL, NULL, NULL, 'active', NULL, NULL),
(128, 5, 125, '2007-03-05', NULL, NULL, NULL, 'active', NULL, NULL),
(129, 5, 126, '2006-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(130, 5, 127, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(131, 5, 128, '2007-07-02', NULL, NULL, NULL, 'active', NULL, NULL),
(132, 5, 129, '2010-09-13', NULL, NULL, NULL, 'active', NULL, NULL),
(133, 5, 130, '2009-08-03', NULL, NULL, NULL, 'active', NULL, NULL),
(134, 5, 131, '2006-04-17', NULL, NULL, NULL, 'active', NULL, NULL),
(135, 5, 132, '2022-10-27', NULL, NULL, NULL, 'active', NULL, NULL),
(136, 5, 133, '2010-11-08', NULL, NULL, NULL, 'active', NULL, NULL),
(137, 5, 134, '2017-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(138, 5, 135, '2017-02-11', NULL, NULL, NULL, 'active', NULL, NULL),
(139, 5, 136, '2007-09-04', NULL, NULL, NULL, 'active', NULL, NULL),
(140, 5, 137, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(141, 5, 138, '2012-08-02', NULL, NULL, NULL, 'active', NULL, NULL),
(142, 5, 139, '2008-08-18', NULL, NULL, NULL, 'active', NULL, NULL),
(143, 5, 140, '2011-11-21', NULL, NULL, NULL, 'active', NULL, NULL),
(144, 5, 141, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(145, 5, 142, '2010-03-18', NULL, NULL, NULL, 'active', NULL, NULL),
(146, 5, 143, '2009-08-05', NULL, NULL, NULL, 'active', NULL, NULL),
(147, 5, 144, '2010-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(148, 5, 145, '2012-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(149, 5, 146, '2009-09-07', NULL, NULL, NULL, 'active', NULL, NULL),
(150, 5, 147, '2013-07-19', NULL, NULL, NULL, 'active', NULL, NULL),
(151, 5, 148, '2022-03-02', NULL, NULL, NULL, 'active', NULL, NULL),
(152, 5, 149, '2013-09-16', NULL, NULL, NULL, 'active', NULL, NULL),
(153, 5, 150, '2022-03-04', NULL, NULL, NULL, 'active', NULL, NULL),
(154, 5, 151, '2014-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(155, 5, 152, '2015-02-03', NULL, NULL, NULL, 'active', NULL, NULL),
(156, 5, 153, '2022-03-07', NULL, NULL, NULL, 'active', NULL, NULL),
(157, 5, 154, '2014-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(158, 5, 155, '2011-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(159, 5, 156, '1993-02-09', NULL, NULL, NULL, 'active', NULL, NULL),
(160, 5, 157, '2022-08-24', NULL, NULL, NULL, 'active', NULL, NULL),
(161, 5, 158, '2011-12-15', NULL, NULL, NULL, 'active', NULL, NULL),
(162, 5, 159, '2012-09-13', NULL, NULL, NULL, 'active', NULL, NULL),
(163, 5, 160, '2010-08-02', NULL, NULL, NULL, 'active', NULL, NULL),
(164, 5, 161, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(165, 5, 162, '2016-04-26', NULL, NULL, NULL, 'active', NULL, NULL),
(166, 5, 163, '2012-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(167, 5, 164, '2011-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(168, 5, 165, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(169, 5, 166, '2013-05-20', NULL, NULL, NULL, 'active', NULL, NULL),
(170, 5, 167, '2016-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(171, 5, 168, '2022-03-02', NULL, NULL, NULL, 'active', NULL, NULL),
(172, 5, 169, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(173, 5, 170, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(174, 5, 171, '2016-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(175, 5, 172, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(176, 5, 173, '2013-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(177, 5, 174, '2023-05-08', NULL, NULL, NULL, 'active', NULL, NULL),
(178, 5, 175, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(179, 5, 176, '2016-09-15', NULL, NULL, NULL, 'active', NULL, NULL),
(180, 5, 177, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(181, 5, 178, '2007-09-04', NULL, NULL, NULL, 'active', NULL, NULL),
(182, 5, 179, '2013-11-29', NULL, NULL, NULL, 'active', NULL, NULL),
(183, 5, 180, '2007-09-14', NULL, NULL, NULL, 'active', NULL, NULL),
(184, 5, 181, '2006-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(185, 5, 182, '2014-08-18', NULL, NULL, NULL, 'active', NULL, NULL),
(186, 5, 183, '2002-06-05', NULL, NULL, NULL, 'active', NULL, NULL),
(187, 5, 184, '2017-04-18', NULL, NULL, NULL, 'active', NULL, NULL),
(188, 5, 185, '1997-08-24', NULL, NULL, NULL, 'active', NULL, NULL),
(189, 5, 186, '2014-08-11', NULL, NULL, NULL, 'active', NULL, NULL),
(190, 5, 187, '2005-08-22', NULL, NULL, NULL, 'active', NULL, NULL),
(191, 5, 188, '2017-08-31', NULL, NULL, NULL, 'active', NULL, NULL),
(192, 5, 189, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(193, 5, 190, '2007-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(194, 5, 191, '2014-09-12', NULL, NULL, NULL, 'active', NULL, NULL),
(195, 5, 192, '2017-09-08', NULL, NULL, NULL, 'active', NULL, NULL),
(196, 5, 193, '2000-12-26', NULL, NULL, NULL, 'active', NULL, NULL),
(197, 5, 194, '2014-09-12', NULL, NULL, NULL, 'active', NULL, NULL),
(198, 5, 195, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(199, 5, 196, '2017-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(200, 5, 197, '2007-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(201, 5, 198, '2007-04-02', NULL, NULL, NULL, 'active', NULL, NULL),
(202, 5, 199, '2008-08-12', NULL, NULL, NULL, 'active', NULL, NULL),
(203, 5, 200, '2017-10-23', NULL, NULL, NULL, 'active', NULL, NULL),
(204, 5, 201, '1993-10-20', NULL, NULL, NULL, 'active', NULL, NULL),
(205, 5, 202, '2013-07-22', NULL, NULL, NULL, 'active', NULL, NULL),
(206, 5, 203, '2019-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(207, 5, 204, '2016-01-04', NULL, NULL, NULL, 'active', NULL, NULL),
(208, 5, 205, '2013-02-14', NULL, NULL, NULL, 'active', NULL, NULL),
(209, 5, 206, '2011-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(210, 5, 207, '2016-01-16', NULL, NULL, NULL, 'active', NULL, NULL),
(211, 5, 208, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(212, 5, 209, '2016-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(213, 5, 210, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(214, 5, 211, '2021-10-04', NULL, NULL, NULL, 'active', NULL, NULL),
(215, 5, 212, '2016-08-02', NULL, NULL, NULL, 'active', NULL, NULL),
(216, 5, 213, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(217, 5, 214, '2007-09-09', NULL, NULL, NULL, 'active', NULL, NULL),
(218, 5, 215, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(219, 5, 216, '2003-09-22', NULL, NULL, NULL, 'active', NULL, NULL),
(220, 5, 217, '2017-07-05', NULL, NULL, NULL, 'active', NULL, NULL),
(221, 5, 218, '2006-05-05', NULL, NULL, NULL, 'active', NULL, NULL),
(222, 5, 219, '2021-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(223, 5, 220, '1996-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(224, 5, 221, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(225, 5, 222, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(226, 5, 223, '2023-05-08', NULL, NULL, NULL, 'active', NULL, NULL),
(227, 5, 224, '2021-10-18', NULL, NULL, NULL, 'active', NULL, NULL),
(228, 5, 225, '2012-08-21', NULL, NULL, NULL, 'active', NULL, NULL),
(229, 5, 226, '2023-05-08', NULL, NULL, NULL, 'active', NULL, NULL),
(230, 5, 227, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(231, 5, 228, '2002-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(232, 5, 229, '2021-11-15', NULL, NULL, NULL, 'active', NULL, NULL),
(233, 5, 230, '2011-06-03', NULL, NULL, NULL, 'active', NULL, NULL),
(234, 5, 231, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(235, 5, 232, '2001-09-18', NULL, NULL, NULL, 'active', NULL, NULL),
(236, 5, 233, '2003-09-29', NULL, NULL, NULL, 'active', NULL, NULL),
(237, 5, 234, '2005-06-15', NULL, NULL, NULL, 'active', NULL, NULL),
(238, 5, 235, '2006-11-13', NULL, NULL, NULL, 'active', NULL, NULL),
(239, 5, 236, '2007-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(240, 5, 237, '2010-03-03', NULL, NULL, NULL, 'active', NULL, NULL),
(241, 5, 238, '2007-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(242, 5, 239, '2008-04-15', NULL, NULL, NULL, 'active', NULL, NULL),
(243, 5, 240, '2016-08-10', NULL, NULL, NULL, 'active', NULL, NULL),
(244, 5, 241, '1989-08-26', NULL, NULL, NULL, 'active', NULL, NULL),
(245, 5, 242, '2016-09-15', NULL, NULL, NULL, 'active', NULL, NULL),
(246, 5, 243, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(247, 5, 244, '2001-09-18', NULL, NULL, NULL, 'active', NULL, NULL),
(248, 5, 245, '2000-04-10', NULL, NULL, NULL, 'active', NULL, NULL),
(249, 5, 246, '2004-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(250, 5, 247, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(251, 5, 248, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(252, 5, 249, '2022-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(253, 5, 250, '1987-07-23', NULL, NULL, NULL, 'active', NULL, NULL),
(254, 5, 251, '2023-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(255, 5, 252, '2023-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(256, 5, 253, '2011-01-11', NULL, NULL, NULL, 'active', NULL, NULL),
(257, 5, 254, '2017-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(258, 5, 255, '2006-09-19', NULL, NULL, NULL, 'active', NULL, NULL),
(259, 5, 256, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(260, 5, 257, '2012-04-02', NULL, NULL, NULL, 'active', NULL, NULL),
(261, 5, 258, '2007-07-04', NULL, NULL, NULL, 'active', NULL, NULL),
(262, 5, 259, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(263, 5, 260, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(264, 5, 261, '2023-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(265, 5, 262, '2008-04-03', NULL, NULL, NULL, 'active', NULL, NULL),
(266, 5, 263, '2011-11-10', NULL, NULL, NULL, 'active', NULL, NULL),
(267, 5, 264, '2005-08-13', NULL, NULL, NULL, 'active', NULL, NULL),
(268, 5, 265, '1999-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(269, 5, 266, '2014-07-15', NULL, NULL, NULL, 'active', NULL, NULL),
(270, 5, 267, '2012-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(271, 5, 268, '2018-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(272, 5, 269, '2004-12-17', NULL, NULL, NULL, 'active', NULL, NULL),
(273, 5, 270, '2006-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(274, 5, 271, '2011-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(275, 5, 272, '2010-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(276, 5, 273, '2015-08-25', NULL, NULL, NULL, 'active', NULL, NULL),
(277, 5, 274, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(278, 5, 275, '2006-08-10', NULL, NULL, NULL, 'active', NULL, NULL),
(279, 5, 276, '2016-01-16', NULL, NULL, NULL, 'active', NULL, NULL),
(280, 5, 277, '2006-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(281, 5, 278, '2016-09-28', NULL, NULL, NULL, 'active', NULL, NULL),
(282, 5, 279, '2007-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(283, 5, 280, '2016-11-03', NULL, NULL, NULL, 'active', NULL, NULL),
(284, 5, 281, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(285, 5, 282, '2017-07-17', NULL, NULL, NULL, 'active', NULL, NULL),
(286, 5, 283, '2007-03-10', NULL, NULL, NULL, 'active', NULL, NULL),
(287, 5, 284, '2016-11-07', NULL, NULL, NULL, 'active', NULL, NULL),
(288, 5, 285, '2009-08-13', NULL, NULL, NULL, 'active', NULL, NULL),
(289, 5, 286, '2018-01-08', NULL, NULL, NULL, 'active', NULL, NULL),
(290, 5, 287, '2015-03-15', NULL, NULL, NULL, 'active', NULL, NULL),
(291, 5, 288, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(292, 5, 289, '1996-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(293, 5, 290, '2008-08-12', NULL, NULL, NULL, 'active', NULL, NULL),
(294, 5, 291, '2009-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(295, 5, 292, '2019-01-07', NULL, NULL, NULL, 'active', NULL, NULL),
(296, 5, 293, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(297, 5, 294, '2020-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(298, 5, 295, '2014-01-13', NULL, NULL, NULL, 'active', NULL, NULL),
(299, 5, 296, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(300, 5, 297, '2014-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(301, 5, 298, '2022-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(302, 5, 299, '2005-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(303, 5, 300, '2022-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(304, 5, 301, '2014-03-19', NULL, NULL, NULL, 'active', NULL, NULL),
(305, 5, 302, '2022-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(306, 5, 303, '2018-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(307, 5, 304, '2022-06-06', NULL, NULL, NULL, 'active', NULL, NULL),
(308, 5, 305, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(309, 5, 306, '2009-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(310, 5, 307, '2022-06-05', NULL, NULL, NULL, 'active', NULL, NULL),
(311, 5, 308, '2014-04-07', NULL, NULL, NULL, 'active', NULL, NULL),
(312, 5, 309, '2022-05-01', NULL, NULL, NULL, 'active', NULL, NULL),
(313, 5, 310, '2015-02-04', NULL, NULL, NULL, 'active', NULL, NULL),
(314, 5, 311, '2022-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(315, 5, 312, '2021-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(316, 5, 313, '2016-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(317, 5, 314, '2019-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(318, 5, 315, '2006-05-05', NULL, NULL, NULL, 'active', NULL, NULL),
(319, 5, 316, '2021-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(320, 5, 317, '2016-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(321, 5, 318, '2023-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(322, 5, 319, '2021-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(323, 5, 320, '2016-01-04', NULL, NULL, NULL, 'active', NULL, NULL),
(324, 5, 321, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(325, 5, 322, '2022-01-24', NULL, NULL, NULL, 'active', NULL, NULL),
(326, 5, 323, '2016-01-14', NULL, NULL, NULL, 'active', NULL, NULL),
(327, 5, 324, '2022-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(328, 5, 325, '2016-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(329, 5, 326, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(330, 5, 327, '2022-07-05', NULL, NULL, NULL, 'active', NULL, NULL),
(331, 5, 328, '2016-08-10', NULL, NULL, NULL, 'active', NULL, NULL),
(332, 5, 329, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(333, 5, 330, '2022-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(334, 5, 331, '2013-05-11', NULL, NULL, NULL, 'active', NULL, NULL),
(335, 5, 332, '2016-08-11', NULL, NULL, NULL, 'active', NULL, NULL),
(336, 5, 333, '2016-10-25', NULL, NULL, NULL, 'active', NULL, NULL),
(337, 5, 334, '2023-03-06', NULL, NULL, NULL, 'active', NULL, NULL),
(338, 5, 335, '2010-06-08', NULL, NULL, NULL, 'active', NULL, NULL),
(339, 5, 336, '2017-09-08', NULL, NULL, NULL, 'active', NULL, NULL),
(340, 5, 337, '2017-10-06', NULL, NULL, NULL, 'active', NULL, NULL),
(341, 5, 338, '2014-06-09', NULL, NULL, NULL, 'active', NULL, NULL),
(342, 5, 339, '2013-05-11', NULL, NULL, NULL, 'active', NULL, NULL),
(343, 5, 340, '2017-10-06', NULL, NULL, NULL, 'active', NULL, NULL),
(344, 5, 341, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(345, 5, 342, '2010-06-08', NULL, NULL, NULL, 'active', NULL, NULL),
(346, 5, 343, '2017-10-06', NULL, NULL, NULL, 'active', NULL, NULL),
(347, 5, 344, '2012-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(348, 5, 345, '2019-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(349, 5, 346, '2014-06-09', NULL, NULL, NULL, 'active', NULL, NULL),
(350, 5, 347, '2017-10-09', NULL, NULL, NULL, 'active', NULL, NULL),
(351, 5, 348, '2003-03-03', NULL, NULL, NULL, 'active', NULL, NULL),
(352, 5, 349, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(353, 5, 350, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(354, 5, 351, '2021-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(355, 5, 352, '2016-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(356, 5, 353, '2021-08-11', NULL, NULL, NULL, 'active', NULL, NULL),
(357, 5, 354, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(358, 5, 355, '2019-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(359, 5, 356, '2010-09-13', NULL, NULL, NULL, 'active', NULL, NULL),
(360, 5, 357, '2021-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(361, 5, 358, '2021-10-21', NULL, NULL, NULL, 'active', NULL, NULL),
(362, 5, 359, '2013-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(363, 5, 360, '2013-02-14', NULL, NULL, NULL, 'active', NULL, NULL),
(364, 5, 361, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(365, 5, 362, '2017-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(366, 5, 363, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(367, 5, 364, '2000-12-18', NULL, NULL, NULL, 'active', NULL, NULL),
(368, 5, 365, '2013-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(369, 5, 366, '2007-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(370, 5, 367, '2010-11-27', NULL, NULL, NULL, 'active', NULL, NULL),
(371, 5, 368, '1998-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(372, 5, 369, '2013-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(373, 5, 370, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(374, 5, 371, '2008-03-07', NULL, NULL, NULL, 'active', NULL, NULL),
(375, 5, 372, '1994-11-28', NULL, NULL, NULL, 'active', NULL, NULL),
(376, 5, 373, '2013-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(377, 5, 374, '1991-01-04', NULL, NULL, NULL, 'active', NULL, NULL),
(378, 5, 375, '2014-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(379, 5, 376, '2002-06-06', NULL, NULL, NULL, 'active', NULL, NULL),
(380, 5, 377, '2021-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(381, 5, 378, '2010-10-15', NULL, NULL, NULL, 'active', NULL, NULL),
(382, 5, 379, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(383, 5, 380, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(384, 5, 381, '2019-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(385, 5, 382, '2016-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(386, 5, 383, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(387, 5, 384, '2022-07-12', NULL, NULL, NULL, 'active', NULL, NULL),
(388, 5, 385, '2010-02-10', NULL, NULL, NULL, 'active', NULL, NULL),
(389, 5, 386, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(390, 5, 387, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(391, 5, 388, '2011-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(392, 5, 389, '2013-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(393, 5, 390, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(394, 5, 391, '2013-07-15', NULL, NULL, NULL, 'active', NULL, NULL),
(395, 5, 392, '2020-08-03', NULL, NULL, NULL, 'active', NULL, NULL),
(396, 5, 393, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(397, 5, 394, '1988-02-22', NULL, NULL, NULL, 'active', NULL, NULL),
(398, 5, 395, '2013-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(399, 5, 396, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(400, 5, 397, '2015-08-17', NULL, NULL, NULL, 'active', NULL, NULL),
(401, 5, 398, '2022-12-14', NULL, NULL, NULL, 'active', NULL, NULL),
(402, 5, 399, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(403, 5, 400, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(404, 5, 401, '2022-03-03', NULL, NULL, NULL, 'active', NULL, NULL),
(405, 5, 402, '2017-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(406, 5, 403, '2022-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(407, 5, 404, '2010-08-09', NULL, NULL, NULL, 'active', NULL, NULL),
(408, 5, 405, '2017-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(409, 5, 406, '2018-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(410, 5, 407, '2021-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(411, 5, 408, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(412, 5, 409, '1994-11-10', NULL, NULL, NULL, 'active', NULL, NULL),
(413, 5, 410, '2019-07-22', NULL, NULL, NULL, 'active', NULL, NULL),
(414, 5, 411, '2021-11-01', NULL, NULL, NULL, 'active', NULL, NULL),
(415, 5, 412, '2014-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(416, 5, 413, '2015-03-17', NULL, NULL, NULL, 'active', NULL, NULL),
(417, 5, 414, '2020-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(418, 5, 415, '2010-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(419, 5, 416, '2021-11-01', NULL, NULL, NULL, 'active', NULL, NULL),
(420, 5, 417, '2022-01-25', NULL, NULL, NULL, 'active', NULL, NULL),
(421, 5, 418, '2017-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(422, 5, 419, '2021-11-01', NULL, NULL, NULL, 'active', NULL, NULL),
(423, 5, 420, '2017-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(424, 5, 421, '2007-09-20', NULL, NULL, NULL, 'active', NULL, NULL),
(425, 5, 422, '2021-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(426, 5, 423, '2017-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(427, 5, 424, '2022-04-11', NULL, NULL, NULL, 'active', NULL, NULL),
(428, 5, 425, '2021-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(429, 5, 426, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(430, 5, 427, '2017-07-31', NULL, NULL, NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_publications`
--

CREATE TABLE `book_publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `castecategories`
--

CREATE TABLE `castecategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caste_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion_id` bigint(20) UNSIGNED NOT NULL,
  `subcastes_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `castecategories`
--

INSERT INTO `castecategories` (`id`, `caste_name`, `religion_id`, `subcastes_name`, `category`, `category_no`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Brahmin', 1, 'Brahmin', '--', '--', 'active', '2023-09-09 06:20:43', '2023-09-09 06:20:43'),
(6, 'Lingayat', 1, 'Jangama', 'GM', 'GM', 'active', '2023-09-11 02:16:08', '2023-10-11 02:21:28'),
(8, 'Lingayat', 1, 'Ganiga', 'OBC', '2A', 'active', '2023-09-25 02:18:53', '2023-10-03 00:06:08'),
(9, 'Maratha', 1, 'Maratha', 'OBC', 'IIIB', 'active', '2023-10-16 05:25:46', '2023-10-16 05:25:46'),
(10, 'Maratha', 1, 'Maratha', 'General', '-', 'active', '2023-11-28 03:03:19', '2023-11-28 03:03:19'),
(11, 'Jain', 1, 'Jain', '-', '-', 'active', '2023-11-28 03:04:52', '2023-11-28 03:04:52'),
(12, 'Jain', 1, 'Chaturtha', '-', '-', 'active', '2023-11-28 03:06:06', '2023-11-28 03:06:06'),
(13, 'Kurbur', 1, 'Kurbur', '-', '-', 'active', '2023-11-28 03:07:19', '2023-11-28 03:07:19'),
(14, 'Panchal', 1, 'Panchal', '-', '-', 'active', '2023-11-28 03:07:50', '2023-11-28 03:07:50'),
(15, 'GSB', 1, 'GSB', '-', '-', 'active', '2023-11-28 03:08:19', '2023-11-28 03:08:19'),
(16, 'Shimpi', 1, 'Shimpi', '-', '-', 'active', '2023-11-28 03:08:41', '2023-11-28 03:08:41'),
(17, 'Hindu ST', 1, 'ST', '-', '-', 'active', '2023-11-28 03:09:13', '2023-11-28 03:09:13'),
(18, 'Devang', 1, 'Devang', '-', '-', 'active', '2023-11-28 03:10:20', '2023-11-28 03:10:20'),
(19, 'Devang', 1, 'Devang', '-', '-', 'active', '2023-11-28 03:10:20', '2023-11-28 03:10:20'),
(20, 'Lingayat', 1, 'Lingayat', '-', '-', 'active', '2023-11-28 03:21:08', '2023-11-28 03:21:08'),
(21, 'Lingayat', 1, 'Panchamsali', '-', '-', 'active', '2023-11-28 04:29:47', '2023-11-28 04:29:47'),
(22, 'Lingayat', 1, 'Ganiger', '-', '-', 'active', '2023-11-28 04:30:41', '2023-11-28 04:30:41'),
(23, 'Brahmin', 1, 'Madava', '-', '-', 'active', '2023-11-28 04:31:30', '2023-11-28 04:31:30'),
(24, 'Lingayat', 1, 'Kurnvirshettar', '-', '-', 'active', '2023-11-28 04:31:55', '2023-11-28 04:31:55'),
(25, 'Brahmin', 1, 'Smarth', '-', '-', 'inactive', '2023-11-28 04:32:21', '2023-11-28 04:34:31'),
(26, 'Lingayat', 1, 'Veerashaiva', '-', '-', 'active', '2023-11-28 04:32:27', '2023-11-28 04:32:27'),
(27, 'Brahmin', 1, 'Daivadny Brahmin', '-', '-', 'active', '2023-11-28 04:33:09', '2023-11-28 04:33:09'),
(28, 'Samgar', 1, 'Samgar', '-', '-', 'active', '2023-11-28 04:33:20', '2023-11-28 04:33:20'),
(29, 'Brahmin', 1, 'Vaishanav', '-', '-', 'active', '2023-11-28 04:33:46', '2023-11-28 04:33:46'),
(30, 'Brahmin', 1, 'Smarth', '-', '-', 'active', '2023-11-28 04:34:16', '2023-11-28 04:34:16'),
(31, 'Daivadnya', 1, 'Daivadnya', '-', '-', 'active', '2023-11-28 04:34:31', '2023-11-28 04:34:31'),
(32, 'Kole', 1, 'Kole', '-', '-', 'active', '2023-11-28 04:35:16', '2023-11-28 04:35:16'),
(33, 'Hanabar', 1, 'Hanabar', '-', '-', 'active', '2023-11-28 04:36:05', '2023-11-28 04:36:05'),
(34, 'SC', 1, 'Holer', '-', '-', 'active', '2023-11-28 04:37:06', '2023-11-28 04:37:06'),
(35, 'ST', 1, 'Nayik', '-', '-', 'active', '2023-11-28 04:37:46', '2023-11-28 04:41:56'),
(36, 'Maratha - konkan', 1, 'Maratha', '-', '-', 'active', '2023-11-28 04:43:36', '2023-11-28 04:43:36'),
(37, 'Rajput', 1, 'Rajput', '-', '-', 'active', '2023-11-28 04:44:10', '2023-11-28 04:44:10'),
(38, 'Nhavi', 1, 'Nhavi', '-', '-', 'active', '2023-11-28 04:44:59', '2023-11-28 04:44:59'),
(39, 'Bedar', 1, 'Bedar', '-', '-', 'active', '2023-11-28 04:46:00', '2023-11-28 04:46:00'),
(40, 'Kurbar', 1, 'Kurbar', '-', '2A', 'active', '2023-11-28 04:48:21', '2023-11-28 04:48:21'),
(41, 'SC - Bhangi', 1, 'Bhangi', '-', '-', 'active', '2023-11-28 04:49:11', '2023-11-28 04:49:11'),
(42, 'Panchal', 1, 'Panchal', '-', '-', 'active', '2023-11-28 04:51:21', '2023-11-28 04:51:21'),
(43, 'SC - Nayak', 1, 'Nayak', '-', '-', 'active', '2023-11-28 04:53:22', '2023-11-28 04:53:22'),
(44, 'OBC', 1, 'OBC', '-', '2A', 'active', '2023-11-28 05:30:53', '2023-11-28 05:30:53'),
(45, 'SC - Lamani', 1, 'Lamani', '-', '-', 'active', '2023-11-28 05:31:29', '2023-11-28 05:31:29'),
(46, 'Jain', 4, 'Digambar', '-', '-', 'active', '2023-11-28 05:45:11', '2023-11-28 05:45:11'),
(47, 'Digambar', 4, 'Chaturttha', '-', '-', 'active', '2023-11-28 05:45:18', '2023-11-28 05:45:18'),
(48, 'Brahmin', 1, 'Kota', '-', '-', 'active', '2023-11-28 05:46:03', '2023-11-28 05:46:03'),
(49, 'SC', 1, 'SC', '-', '-', 'active', '2023-11-28 05:56:46', '2023-11-28 05:56:46'),
(50, 'Jain', 4, 'Pancham', '-', '-', 'active', '2023-11-28 06:12:23', '2023-11-28 06:12:23'),
(51, 'Brahmin', 1, 'Konkanastha', '-', '-', 'active', '2023-11-29 00:36:26', '2023-11-29 00:36:26'),
(52, 'Hindu', 1, 'Bhavasar Kshatriya', '-', '-', 'active', '2023-11-29 00:57:15', '2023-11-29 00:57:15'),
(53, 'Lingayat', 1, 'Banajiga', '-', '-', 'active', '2023-11-29 01:08:03', '2023-11-29 01:08:03'),
(54, 'Hindu', 1, '\'Kayastha', '-', '-', 'active', '2023-11-29 01:12:21', '2023-11-29 01:12:21'),
(55, 'Hindu', 1, 'Hanabar', '-', '-', 'active', '2023-11-29 01:12:47', '2023-11-29 01:13:10'),
(56, 'Brahmin', 1, 'Saraswat', '-', '-', 'active', '2023-11-29 01:20:31', '2023-11-29 01:20:31'),
(57, 'Maratha', 1, 'Kshatriya', '-', '-', 'active', '2023-11-29 01:26:35', '2023-11-29 01:26:35'),
(58, 'JAIN', 1, 'DIGAMBAR', '-', '-', 'active', '2023-11-29 01:31:38', '2023-11-29 01:31:38'),
(59, 'Ganiga', 1, '-', '-', '-', 'active', '2023-11-29 01:37:50', '2023-11-29 01:37:50'),
(60, 'SC', 1, 'Mahar', '-', '-', 'active', '2023-11-29 01:42:50', '2023-11-29 01:42:50'),
(61, 'Hindu', 1, 'Nair', '-', '-', 'active', '2023-11-29 01:44:00', '2023-11-29 01:44:00'),
(62, 'Gavali', 1, 'Gavali', '-', '1', 'active', '2023-11-29 02:14:20', '2023-11-29 02:14:20'),
(63, 'Kuruhin shetty', 1, '-', '-', '-', 'active', '2023-11-29 02:39:52', '2023-11-29 02:39:52'),
(64, 'Hindu', 1, 'Vishwakarma', '-', '-', 'active', '2023-11-29 02:45:02', '2023-11-29 02:45:02'),
(65, 'Kumbhar', 1, 'Kumbhar', '-', '-', 'active', '2023-11-29 02:45:49', '2023-11-29 02:45:49'),
(66, 'Hindu', 1, 'Namdev Shimpi', '-', '-', 'active', '2023-11-29 04:12:47', '2023-11-29 04:12:47'),
(67, 'Hindu', 1, 'Gouda Saraswat Brahmin', '-', '-', 'active', '2023-11-29 04:22:55', '2023-11-29 04:22:55'),
(68, 'Christian', 7, 'Christian', '-', '-', 'active', '2023-11-29 04:38:11', '2023-11-29 04:38:11'),
(69, 'Daivadnya', 1, '-', '-', '-', 'active', '2023-11-29 05:15:53', '2023-11-29 05:15:53'),
(70, 'Hindu', 1, 'Brahmin- Deshastha', '-', '-', 'active', '2023-11-29 05:31:05', '2023-11-29 05:31:05'),
(71, 'kumbhar', 1, 'cat-2a', '-', '-', 'active', '2023-11-29 05:54:37', '2023-11-29 05:54:37'),
(72, 'Hindu', 1, 'Reddy-Lingayat', '-', '-', 'active', '2023-11-29 05:58:29', '2023-11-29 05:58:29'),
(73, 'SC', 1, 'Madiga', '-', '-', 'active', '2023-12-01 00:10:14', '2023-12-01 00:10:14'),
(74, 'ST', 1, 'Medar', '-', '-', 'active', '2023-12-01 00:25:19', '2023-12-01 00:25:19'),
(75, 'Musalim', 3, 'Musalim', '-', '-', 'active', '2023-12-01 00:50:01', '2023-12-01 00:50:01'),
(76, 'Hindu', 1, 'SC Holeyar', '-', '-', 'active', '2023-12-01 05:36:30', '2023-12-01 05:36:30'),
(77, 'Shetty', 1, 'Shetty', '-', '-', 'active', '2023-12-01 05:51:52', '2023-12-01 05:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_publications_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `chapter_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_page_no` int(11) NOT NULL,
  `end_page_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `combining_leave_rules`
--

CREATE TABLE `combining_leave_rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leave_rules_id` bigint(20) UNSIGNED NOT NULL,
  `combined_with` bigint(20) UNSIGNED NOT NULL,
  `sandwiching` enum('Bothside','Oneside') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `wef` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `combining_leave_rules`
--

INSERT INTO `combining_leave_rules` (`id`, `leave_rules_id`, `combined_with`, `sandwiching`, `status`, `wef`, `created_at`, `updated_at`) VALUES
(2, 1, 7, 'Oneside', 'Active', '2023-01-01', '2023-11-29 04:09:06', '2023-12-01 05:44:09'),
(3, 1, 4, 'Bothside', 'Active', '2023-01-01', '2023-11-29 04:09:06', NULL),
(4, 2, 6, 'Bothside', 'Active', '2023-01-01', '2023-11-29 04:09:42', NULL),
(5, 4, 1, 'Bothside', 'Active', '2023-01-01', '2023-12-01 06:03:25', NULL),
(6, 4, 7, 'Bothside', 'Active', '2023-01-01', '2023-12-01 06:03:25', NULL),
(7, 4, 3, 'Bothside', 'Active', '2023-01-01', '2023-12-01 06:03:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conferences_attendees`
--

CREATE TABLE `conferences_attendees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attended_as` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `no_of_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paper_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsored` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `sponsored_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `weblink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conferences_attendee_staff`
--

CREATE TABLE `conferences_attendee_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `conferences_attendee_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conferences_conducteds`
--

CREATE TABLE `conferences_conducteds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_participants` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsored` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsoring_agency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weblink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consolidated_teaching_pays`
--

CREATE TABLE `consolidated_teaching_pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pay` double UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consolidated_teaching_pay_staff`
--

CREATE TABLE `consolidated_teaching_pay_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `consolidated_teaching_pay_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultancies`
--

CREATE TABLE `consultancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `no_of_faculties` int(11) NOT NULL,
  `faculty_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultancy_carried` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acadamic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `co_authors_gits`
--

CREATE TABLE `co_authors_gits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `publications_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `co_authors_others`
--

CREATE TABLE `co_authors_others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `publications_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `create_leave_rule_configrations`
--

CREATE TABLE `create_leave_rule_configrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_shortname` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoe` date NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `dept_shortname`, `yoe`, `status`, `created_at`, `updated_at`, `mobile`) VALUES
(1, 'Mechanical Engineering', 'ME', '1979-08-01', 'active', NULL, '2023-09-09 01:18:45', NULL),
(2, 'Electronics and Communication Engineering', 'EC', '1979-08-01', 'active', NULL, NULL, NULL),
(3, 'Master of Computer Applications', 'MCA', '1999-08-01', 'active', '2023-09-08 02:58:21', '2023-09-08 02:58:21', NULL),
(5, 'Computer Science and Engineering', 'CS', '1885-08-01', 'active', '2023-09-08 03:01:14', '2023-09-08 03:01:14', NULL),
(6, 'Information Science & Engineering', 'ISE', '2000-09-01', 'active', '2023-09-08 04:20:52', '2023-09-08 04:20:52', NULL),
(7, 'Electrtical and Electronics Engineering', 'EEE', '1987-08-01', 'active', '2023-09-08 04:37:56', '2023-09-08 04:37:56', NULL),
(8, 'Civil Engineering', 'CV', '1987-08-01', 'active', '2023-09-08 05:03:13', '2023-09-08 05:03:13', NULL),
(9, 'Aeronautical Engineering', 'AE', '2015-08-01', 'active', '2023-09-08 05:20:39', '2023-09-09 00:57:10', NULL),
(11, 'IT Cell', 'IT', '2023-08-01', 'active', '2023-09-08 05:22:04', '2023-09-09 01:44:56', NULL),
(12, 'Mathematics', 'Maths', '1979-08-01', 'active', '2023-09-08 05:24:52', '2023-09-09 00:29:51', NULL),
(13, 'Physics', 'Phy', '1979-08-01', 'active', '2023-09-08 05:37:34', '2023-09-09 01:19:03', NULL),
(14, 'Chemistry', 'Chem', '1979-08-01', 'active', '2023-09-08 06:06:20', '2023-09-09 04:53:25', NULL),
(15, 'Office', 'Off', '1987-01-01', 'active', '2023-09-09 00:42:27', '2023-10-06 02:41:03', NULL),
(16, 'Library', 'Lib', '1979-01-01', 'active', '2023-10-06 02:41:49', '2023-10-06 02:41:49', NULL),
(17, 'Architecture', 'ARCH', '1995-08-01', 'active', '2023-10-06 02:42:26', '2023-10-06 02:42:26', NULL),
(18, 'Vehicle Maintenance', 'VM', '1995-08-01', 'active', '2023-10-06 02:44:10', '2023-10-06 02:44:10', NULL),
(19, 'Civil Maintanence', 'CM', '1995-10-01', 'active', '2023-10-06 02:44:42', '2023-10-06 02:44:42', NULL),
(20, 'Exam Section', 'ES', '2015-08-01', 'active', '2023-10-06 02:45:23', '2023-10-06 02:45:23', NULL),
(21, 'Sports', 'SP', '2000-01-01', 'active', '2023-10-06 02:45:55', '2023-10-06 02:45:55', NULL),
(22, 'Industry Institute Partnership Cell', 'IIPC', '2018-01-01', 'active', '2023-10-06 02:46:54', '2023-10-06 02:46:54', NULL),
(23, 'Computer Center', 'CC', '2002-01-01', 'active', '2023-10-06 02:47:27', '2023-10-06 02:47:27', NULL),
(24, 'Master of Business Administration', 'MBA', '2015-08-01', 'active', '2023-10-06 02:48:24', '2023-10-06 02:48:24', NULL),
(25, 'EPMC', 'EPMC', '2015-06-01', 'active', '2023-10-06 02:49:17', '2023-10-06 02:49:17', NULL),
(26, 'IT CELL', 'it cell', '2023-06-01', 'inactive', '2023-11-28 02:57:00', '2023-11-28 02:57:14', NULL),
(27, 'Placement', 'pl', '2023-01-01', 'active', '2023-12-01 04:07:51', '2023-12-01 04:07:51', NULL),
(28, 'Maintenance', 'mnt', '2005-01-01', 'active', '2023-12-01 04:28:22', '2023-12-01 04:28:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department_staff`
--

CREATE TABLE `department_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_staff`
--

INSERT INTO `department_staff` (`id`, `department_id`, `staff_id`, `start_date`, `end_date`, `reason`, `gcr`, `status`, `created_at`, `updated_at`) VALUES
(16, 8, 11, '2009-09-24', NULL, NULL, NULL, 'active', NULL, NULL),
(17, 8, 12, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(18, 8, 13, '2005-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(19, 8, 14, '2018-12-02', NULL, NULL, NULL, 'active', NULL, NULL),
(20, 8, 15, '2022-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(21, 7, 16, '1989-09-05', NULL, NULL, NULL, 'active', NULL, NULL),
(22, 8, 17, '2023-01-03', NULL, NULL, NULL, 'active', NULL, NULL),
(23, 1, 18, '2016-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(24, 8, 19, '2023-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(25, 1, 20, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(26, 8, 21, '2023-04-09', NULL, NULL, NULL, 'active', NULL, NULL),
(27, 2, 22, '2022-10-10', NULL, NULL, NULL, 'active', NULL, NULL),
(28, 8, 23, '2009-05-10', NULL, NULL, NULL, 'active', NULL, NULL),
(29, 8, 24, '2011-09-28', NULL, NULL, NULL, 'active', NULL, NULL),
(30, 2, 25, '2003-11-15', NULL, NULL, NULL, 'active', NULL, NULL),
(31, 1, 26, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(32, 1, 27, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(33, 2, 28, '2005-08-18', NULL, NULL, NULL, 'active', NULL, NULL),
(34, 8, 29, '2013-05-03', NULL, NULL, NULL, 'active', NULL, NULL),
(35, 1, 30, '2013-02-11', NULL, NULL, NULL, 'active', NULL, NULL),
(36, 7, 31, '2006-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(37, 8, 32, '2008-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(38, 8, 33, '2013-11-07', NULL, NULL, NULL, 'active', NULL, NULL),
(39, 7, 34, '2012-01-12', NULL, NULL, NULL, 'active', NULL, NULL),
(40, 8, 35, '2013-12-26', NULL, NULL, NULL, 'active', NULL, NULL),
(41, 7, 36, '2012-05-16', NULL, NULL, NULL, 'active', NULL, NULL),
(42, 8, 37, '2014-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(43, 7, 38, '2012-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(44, 8, 39, '2014-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(45, 7, 40, '2013-03-15', NULL, NULL, NULL, 'active', NULL, NULL),
(46, 8, 41, '2014-01-10', NULL, NULL, NULL, 'active', NULL, NULL),
(47, 7, 42, '2013-09-14', NULL, NULL, NULL, 'active', NULL, NULL),
(48, 8, 43, '2014-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(49, 1, 44, '2013-02-13', NULL, NULL, NULL, 'active', NULL, NULL),
(50, 7, 45, '2014-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(51, 8, 46, '2005-07-06', NULL, NULL, NULL, 'active', NULL, NULL),
(52, 8, 47, '2014-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(53, 8, 48, '2013-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(54, 1, 49, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(55, 7, 50, '2015-02-18', NULL, NULL, NULL, 'active', NULL, NULL),
(56, 8, 51, '2013-03-05', NULL, NULL, NULL, 'active', NULL, NULL),
(57, 1, 52, '2006-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(58, 7, 53, '2015-02-18', NULL, NULL, NULL, 'active', NULL, NULL),
(59, 8, 54, '2015-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(60, 8, 55, '2015-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(61, 8, 56, '2015-07-06', NULL, NULL, NULL, 'active', NULL, NULL),
(62, 8, 57, '2015-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(63, 7, 58, '2014-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(64, 8, 59, '2015-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(65, 8, 60, '2023-05-23', NULL, NULL, NULL, 'active', NULL, NULL),
(66, 8, 61, '2013-02-13', NULL, NULL, NULL, 'active', NULL, NULL),
(67, 8, 62, '2016-07-15', NULL, NULL, NULL, 'active', NULL, NULL),
(68, 8, 63, '2009-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(69, 8, 64, '2017-07-03', NULL, NULL, NULL, 'active', NULL, NULL),
(70, 1, 65, '2016-09-08', NULL, NULL, NULL, 'active', NULL, NULL),
(71, 8, 66, '2015-11-03', NULL, NULL, NULL, 'active', NULL, NULL),
(72, 8, 67, '2022-10-21', NULL, NULL, NULL, 'active', NULL, NULL),
(73, 8, 68, '2015-11-16', NULL, NULL, NULL, 'active', NULL, NULL),
(74, 8, 69, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(75, 1, 70, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(76, 8, 71, '2017-07-07', NULL, NULL, NULL, 'active', NULL, NULL),
(77, 8, 72, '2012-11-06', NULL, NULL, NULL, 'active', NULL, NULL),
(78, 8, 73, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(79, 1, 74, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(80, 1, 75, '2010-04-12', NULL, NULL, NULL, 'active', NULL, NULL),
(81, 7, 76, '1989-03-04', NULL, NULL, NULL, 'active', NULL, NULL),
(82, 1, 77, '1997-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(83, 7, 78, '2010-09-14', NULL, NULL, NULL, 'active', NULL, NULL),
(84, 1, 79, '2019-09-20', NULL, NULL, NULL, 'active', NULL, NULL),
(85, 1, 80, '1998-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(86, 2, 81, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(87, 1, 82, '1996-03-09', NULL, NULL, NULL, 'active', NULL, NULL),
(88, 7, 83, '2014-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(89, 1, 84, '1997-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(90, 1, 85, '2019-09-16', NULL, NULL, NULL, 'active', NULL, NULL),
(91, 7, 86, '2022-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(92, 1, 87, '2021-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(93, 1, 88, '1997-02-11', NULL, NULL, NULL, 'active', NULL, NULL),
(94, 7, 89, '2023-07-17', NULL, NULL, NULL, 'active', NULL, NULL),
(95, 7, 90, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(96, 2, 91, '2023-06-05', NULL, NULL, NULL, 'active', NULL, NULL),
(97, 1, 92, '1999-10-30', NULL, NULL, NULL, 'active', NULL, NULL),
(98, 7, 93, '2010-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(99, 1, 94, '2008-08-14', NULL, NULL, NULL, 'active', NULL, NULL),
(100, 7, 95, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(101, 1, 96, '1996-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(102, 2, 97, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(103, 2, 98, '2001-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(104, 7, 99, '2010-09-09', NULL, NULL, NULL, 'active', NULL, NULL),
(105, 1, 100, '2022-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(106, 7, 101, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(107, 7, 102, '2012-08-03', NULL, NULL, NULL, 'active', NULL, NULL),
(108, 1, 103, '2006-03-09', NULL, NULL, NULL, 'active', NULL, NULL),
(109, 2, 104, '2007-08-06', NULL, NULL, NULL, 'active', NULL, NULL),
(110, 1, 105, '2016-10-24', NULL, NULL, NULL, 'active', NULL, NULL),
(111, 2, 106, '1999-10-29', NULL, NULL, NULL, 'active', NULL, NULL),
(112, 1, 107, '2004-04-08', NULL, NULL, NULL, 'active', NULL, NULL),
(113, 7, 108, '2021-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(114, 1, 109, '2004-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(115, 1, 110, '2023-05-22', NULL, NULL, NULL, 'active', NULL, NULL),
(116, 1, 111, '2003-06-13', NULL, NULL, NULL, 'active', NULL, NULL),
(117, 7, 112, '2013-02-13', NULL, NULL, NULL, 'active', NULL, NULL),
(118, 1, 113, '2023-08-21', NULL, NULL, NULL, 'active', NULL, NULL),
(119, 7, 114, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(120, 1, 115, '2023-10-10', NULL, NULL, NULL, 'active', NULL, NULL),
(121, 1, 116, '2011-05-16', NULL, NULL, NULL, 'active', NULL, NULL),
(122, 7, 117, '1998-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(123, 2, 118, '2007-04-02', NULL, NULL, NULL, 'active', NULL, NULL),
(124, 2, 119, '2007-05-28', NULL, NULL, NULL, 'active', NULL, NULL),
(125, 1, 120, '2003-09-17', NULL, NULL, NULL, 'active', NULL, NULL),
(126, 1, 121, '2023-10-09', NULL, NULL, NULL, 'active', NULL, NULL),
(127, 1, 122, '2008-08-14', NULL, NULL, NULL, 'active', NULL, NULL),
(128, 2, 123, '2007-07-17', NULL, NULL, NULL, 'active', NULL, NULL),
(129, 2, 124, '2002-07-11', NULL, NULL, NULL, 'active', NULL, NULL),
(130, 2, 125, '2007-03-05', NULL, NULL, NULL, 'active', NULL, NULL),
(131, 1, 126, '2006-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(132, 1, 127, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(133, 2, 128, '2007-07-02', NULL, NULL, NULL, 'active', NULL, NULL),
(134, 2, 129, '2010-09-13', NULL, NULL, NULL, 'active', NULL, NULL),
(135, 1, 130, '2009-08-03', NULL, NULL, NULL, 'active', NULL, NULL),
(136, 9, 131, '2006-04-17', NULL, NULL, NULL, 'active', NULL, NULL),
(137, 2, 132, '2022-10-27', NULL, NULL, NULL, 'active', NULL, NULL),
(138, 2, 133, '2010-11-08', NULL, NULL, NULL, 'active', NULL, NULL),
(139, 9, 134, '2017-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(140, 2, 135, '2017-02-11', NULL, NULL, NULL, 'active', NULL, NULL),
(141, 2, 136, '2007-09-04', NULL, NULL, NULL, 'active', NULL, NULL),
(142, 2, 137, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(143, 9, 138, '2012-08-02', NULL, NULL, NULL, 'active', NULL, NULL),
(144, 2, 139, '2008-08-18', NULL, NULL, NULL, 'active', NULL, NULL),
(145, 2, 140, '2011-11-21', NULL, NULL, NULL, 'active', NULL, NULL),
(146, 9, 141, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(147, 1, 142, '2010-03-18', NULL, NULL, NULL, 'active', NULL, NULL),
(148, 2, 143, '2009-08-05', NULL, NULL, NULL, 'active', NULL, NULL),
(149, 1, 144, '2010-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(150, 1, 145, '2012-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(151, 2, 146, '2009-09-07', NULL, NULL, NULL, 'active', NULL, NULL),
(152, 1, 147, '2013-07-19', NULL, NULL, NULL, 'active', NULL, NULL),
(153, 9, 148, '2022-03-02', NULL, NULL, NULL, 'active', NULL, NULL),
(154, 2, 149, '2013-09-16', NULL, NULL, NULL, 'active', NULL, NULL),
(155, 9, 150, '2022-03-04', NULL, NULL, NULL, 'active', NULL, NULL),
(156, 1, 151, '2014-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(157, 2, 152, '2015-02-03', NULL, NULL, NULL, 'active', NULL, NULL),
(158, 9, 153, '2022-03-07', NULL, NULL, NULL, 'active', NULL, NULL),
(159, 2, 154, '2014-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(160, 1, 155, '2011-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(161, 2, 156, '1993-02-09', NULL, NULL, NULL, 'active', NULL, NULL),
(162, 9, 157, '2022-08-24', NULL, NULL, NULL, 'active', NULL, NULL),
(163, 2, 158, '2011-12-15', NULL, NULL, NULL, 'active', NULL, NULL),
(164, 1, 159, '2012-09-13', NULL, NULL, NULL, 'active', NULL, NULL),
(165, 2, 160, '2010-08-02', NULL, NULL, NULL, 'active', NULL, NULL),
(166, 2, 161, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(167, 2, 162, '2016-04-26', NULL, NULL, NULL, 'active', NULL, NULL),
(168, 1, 163, '2012-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(169, 2, 164, '2011-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(170, 9, 165, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(171, 1, 166, '2013-05-20', NULL, NULL, NULL, 'active', NULL, NULL),
(172, 2, 167, '2016-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(173, 2, 168, '2022-03-02', NULL, NULL, NULL, 'active', NULL, NULL),
(174, 2, 169, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(175, 9, 170, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(176, 2, 171, '2016-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(177, 2, 172, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(178, 1, 173, '2013-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(179, 2, 174, '2023-05-08', NULL, NULL, NULL, 'active', NULL, NULL),
(180, 9, 175, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(181, 2, 176, '2016-09-15', NULL, NULL, NULL, 'active', NULL, NULL),
(182, 2, 177, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(183, 5, 178, '2007-09-04', NULL, NULL, NULL, 'active', NULL, NULL),
(184, 1, 179, '2013-11-29', NULL, NULL, NULL, 'active', NULL, NULL),
(185, 23, 180, '2007-09-14', NULL, NULL, NULL, 'active', NULL, NULL),
(186, 5, 181, '2006-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(187, 1, 182, '2014-08-18', NULL, NULL, NULL, 'active', NULL, NULL),
(188, 23, 183, '2002-06-05', NULL, NULL, NULL, 'active', NULL, NULL),
(189, 2, 184, '2017-04-18', NULL, NULL, NULL, 'active', NULL, NULL),
(190, 5, 185, '1997-08-24', NULL, NULL, NULL, 'active', NULL, NULL),
(191, 1, 186, '2014-08-11', NULL, NULL, NULL, 'active', NULL, NULL),
(192, 23, 187, '2005-08-22', NULL, NULL, NULL, 'active', NULL, NULL),
(193, 2, 188, '2017-08-31', NULL, NULL, NULL, 'active', NULL, NULL),
(194, 5, 189, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(195, 23, 190, '2007-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(196, 1, 191, '2014-09-12', NULL, NULL, NULL, 'active', NULL, NULL),
(197, 2, 192, '2017-09-08', NULL, NULL, NULL, 'active', NULL, NULL),
(198, 23, 193, '2000-12-26', NULL, NULL, NULL, 'active', NULL, NULL),
(199, 1, 194, '2014-09-12', NULL, NULL, NULL, 'active', NULL, NULL),
(200, 5, 195, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(201, 2, 196, '2017-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(202, 23, 197, '2007-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(203, 1, 198, '2007-04-02', NULL, NULL, NULL, 'active', NULL, NULL),
(204, 23, 199, '2008-08-12', NULL, NULL, NULL, 'active', NULL, NULL),
(205, 2, 200, '2017-10-23', NULL, NULL, NULL, 'active', NULL, NULL),
(206, 5, 201, '1993-10-20', NULL, NULL, NULL, 'active', NULL, NULL),
(207, 1, 202, '2013-07-22', NULL, NULL, NULL, 'active', NULL, NULL),
(208, 2, 203, '2019-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(209, 1, 204, '2016-01-04', NULL, NULL, NULL, 'active', NULL, NULL),
(210, 5, 205, '2013-02-14', NULL, NULL, NULL, 'active', NULL, NULL),
(211, 23, 206, '2011-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(212, 1, 207, '2016-01-16', NULL, NULL, NULL, 'active', NULL, NULL),
(213, 5, 208, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(214, 1, 209, '2016-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(215, 23, 210, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(216, 2, 211, '2021-10-04', NULL, NULL, NULL, 'active', NULL, NULL),
(217, 1, 212, '2016-08-02', NULL, NULL, NULL, 'active', NULL, NULL),
(218, 23, 213, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(219, 6, 214, '2007-09-09', NULL, NULL, NULL, 'active', NULL, NULL),
(220, 23, 215, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(221, 6, 216, '2003-09-22', NULL, NULL, NULL, 'active', NULL, NULL),
(222, 1, 217, '2017-07-05', NULL, NULL, NULL, 'active', NULL, NULL),
(223, 23, 218, '2006-05-05', NULL, NULL, NULL, 'active', NULL, NULL),
(224, 2, 219, '2021-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(225, 1, 220, '1996-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(226, 6, 221, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(227, 23, 222, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(228, 23, 223, '2023-05-08', NULL, NULL, NULL, 'active', NULL, NULL),
(229, 2, 224, '2021-10-18', NULL, NULL, NULL, 'active', NULL, NULL),
(230, 6, 225, '2012-08-21', NULL, NULL, NULL, 'active', NULL, NULL),
(231, 23, 226, '2023-05-08', NULL, NULL, NULL, 'active', NULL, NULL),
(232, 6, 227, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(233, 6, 228, '2002-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(234, 2, 229, '2021-11-15', NULL, NULL, NULL, 'active', NULL, NULL),
(235, 6, 230, '2011-06-03', NULL, NULL, NULL, 'active', NULL, NULL),
(236, 23, 231, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(237, 6, 232, '2001-09-18', NULL, NULL, NULL, 'active', NULL, NULL),
(238, 6, 233, '2003-09-29', NULL, NULL, NULL, 'active', NULL, NULL),
(239, 6, 234, '2005-06-15', NULL, NULL, NULL, 'active', NULL, NULL),
(240, 6, 235, '2006-11-13', NULL, NULL, NULL, 'active', NULL, NULL),
(241, 6, 236, '2007-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(242, 5, 237, '2010-03-03', NULL, NULL, NULL, 'active', NULL, NULL),
(243, 6, 238, '2007-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(244, 6, 239, '2008-04-15', NULL, NULL, NULL, 'active', NULL, NULL),
(245, 6, 240, '2016-08-10', NULL, NULL, NULL, 'active', NULL, NULL),
(246, 5, 241, '1989-08-26', NULL, NULL, NULL, 'active', NULL, NULL),
(247, 6, 242, '2016-09-15', NULL, NULL, NULL, 'active', NULL, NULL),
(248, 17, 243, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(249, 5, 244, '2001-09-18', NULL, NULL, NULL, 'active', NULL, NULL),
(250, 17, 245, '2000-04-10', NULL, NULL, NULL, 'active', NULL, NULL),
(251, 5, 246, '2004-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(252, 13, 247, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(253, 17, 248, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(254, 14, 249, '2022-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(255, 5, 250, '1987-07-23', NULL, NULL, NULL, 'active', NULL, NULL),
(256, 13, 251, '2023-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(257, 14, 252, '2023-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(258, 17, 253, '2011-01-11', NULL, NULL, NULL, 'active', NULL, NULL),
(259, 14, 254, '2017-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(260, 5, 255, '2006-09-19', NULL, NULL, NULL, 'active', NULL, NULL),
(261, 13, 256, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(262, 12, 257, '2012-04-02', NULL, NULL, NULL, 'active', NULL, NULL),
(263, 5, 258, '2007-07-04', NULL, NULL, NULL, 'active', NULL, NULL),
(264, 12, 259, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(265, 17, 260, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(266, 13, 261, '2023-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(267, 17, 262, '2008-04-03', NULL, NULL, NULL, 'active', NULL, NULL),
(268, 17, 263, '2011-11-10', NULL, NULL, NULL, 'active', NULL, NULL),
(269, 5, 264, '2005-08-13', NULL, NULL, NULL, 'active', NULL, NULL),
(270, 15, 265, '1999-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(271, 17, 266, '2014-07-15', NULL, NULL, NULL, 'active', NULL, NULL),
(272, 17, 267, '2012-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(273, 17, 268, '2018-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(274, 15, 269, '2004-12-17', NULL, NULL, NULL, 'active', NULL, NULL),
(275, 5, 270, '2006-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(276, 17, 271, '2011-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(277, 15, 272, '2010-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(278, 17, 273, '2015-08-25', NULL, NULL, NULL, 'active', NULL, NULL),
(279, 17, 274, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(280, 5, 275, '2006-08-10', NULL, NULL, NULL, 'active', NULL, NULL),
(281, 15, 276, '2016-01-16', NULL, NULL, NULL, 'active', NULL, NULL),
(282, 17, 277, '2006-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(283, 17, 278, '2016-09-28', NULL, NULL, NULL, 'active', NULL, NULL),
(284, 5, 279, '2007-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(285, 15, 280, '2016-11-03', NULL, NULL, NULL, 'active', NULL, NULL),
(286, 17, 281, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(287, 17, 282, '2017-07-17', NULL, NULL, NULL, 'active', NULL, NULL),
(288, 5, 283, '2007-03-10', NULL, NULL, NULL, 'active', NULL, NULL),
(289, 15, 284, '2016-11-07', NULL, NULL, NULL, 'active', NULL, NULL),
(290, 5, 285, '2009-08-13', NULL, NULL, NULL, 'active', NULL, NULL),
(291, 17, 286, '2018-01-08', NULL, NULL, NULL, 'active', NULL, NULL),
(292, 15, 287, '2015-03-15', NULL, NULL, NULL, 'active', NULL, NULL),
(293, 17, 288, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(294, 20, 289, '1996-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(295, 5, 290, '2008-08-12', NULL, NULL, NULL, 'active', NULL, NULL),
(296, 5, 291, '2009-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(297, 15, 292, '2019-01-07', NULL, NULL, NULL, 'active', NULL, NULL),
(298, 17, 293, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(299, 15, 294, '2020-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(300, 5, 295, '2014-01-13', NULL, NULL, NULL, 'active', NULL, NULL),
(301, 17, 296, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(302, 5, 297, '2014-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(303, 15, 298, '2022-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(304, 20, 299, '2005-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(305, 15, 300, '2022-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(306, 5, 301, '2014-03-19', NULL, NULL, NULL, 'active', NULL, NULL),
(307, 15, 302, '2022-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(308, 20, 303, '2018-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(309, 15, 304, '2022-06-06', NULL, NULL, NULL, 'active', NULL, NULL),
(310, 20, 305, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(311, 17, 306, '2009-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(312, 15, 307, '2022-06-05', NULL, NULL, NULL, 'active', NULL, NULL),
(313, 5, 308, '2014-04-07', NULL, NULL, NULL, 'active', NULL, NULL),
(314, 20, 309, '2022-05-01', NULL, NULL, NULL, 'active', NULL, NULL),
(315, 5, 310, '2015-02-04', NULL, NULL, NULL, 'active', NULL, NULL),
(316, 15, 311, '2022-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(317, 17, 312, '2021-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(318, 5, 313, '2016-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(319, 20, 314, '2019-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(320, 15, 315, '2006-05-05', NULL, NULL, NULL, 'active', NULL, NULL),
(321, 17, 316, '2021-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(322, 5, 317, '2016-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(323, 20, 318, '2023-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(324, 17, 319, '2021-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(325, 5, 320, '2016-01-04', NULL, NULL, NULL, 'active', NULL, NULL),
(326, 15, 321, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(327, 17, 322, '2022-01-24', NULL, NULL, NULL, 'active', NULL, NULL),
(328, 5, 323, '2016-01-14', NULL, NULL, NULL, 'active', NULL, NULL),
(329, 17, 324, '2022-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(330, 20, 325, '2016-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(331, 15, 326, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(332, 17, 327, '2022-07-05', NULL, NULL, NULL, 'active', NULL, NULL),
(333, 5, 328, '2016-08-10', NULL, NULL, NULL, 'active', NULL, NULL),
(334, 15, 329, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(335, 17, 330, '2022-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(336, 16, 331, '2013-05-11', NULL, NULL, NULL, 'active', NULL, NULL),
(337, 5, 332, '2016-08-11', NULL, NULL, NULL, 'active', NULL, NULL),
(338, 15, 333, '2016-10-25', NULL, NULL, NULL, 'active', NULL, NULL),
(339, 17, 334, '2023-03-06', NULL, NULL, NULL, 'active', NULL, NULL),
(340, 16, 335, '2010-06-08', NULL, NULL, NULL, 'active', NULL, NULL),
(341, 5, 336, '2017-09-08', NULL, NULL, NULL, 'active', NULL, NULL),
(342, 5, 337, '2017-10-06', NULL, NULL, NULL, 'active', NULL, NULL),
(343, 20, 338, '2014-06-09', NULL, NULL, NULL, 'active', NULL, NULL),
(344, 16, 339, '2013-05-11', NULL, NULL, NULL, 'active', NULL, NULL),
(345, 6, 340, '2017-10-06', NULL, NULL, NULL, 'active', NULL, NULL),
(346, 16, 341, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(347, 16, 342, '2010-06-08', NULL, NULL, NULL, 'active', NULL, NULL),
(348, 5, 343, '2017-10-06', NULL, NULL, NULL, 'active', NULL, NULL),
(349, 13, 344, '2012-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(350, 16, 345, '2019-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(351, 16, 346, '2014-06-09', NULL, NULL, NULL, 'active', NULL, NULL),
(352, 5, 347, '2017-10-09', NULL, NULL, NULL, 'active', NULL, NULL),
(353, 13, 348, '2003-03-03', NULL, NULL, NULL, 'active', NULL, NULL),
(354, 16, 349, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(355, 16, 350, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(356, 5, 351, '2021-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(357, 13, 352, '2016-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(358, 5, 353, '2021-08-11', NULL, NULL, NULL, 'active', NULL, NULL),
(359, 20, 354, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(360, 16, 355, '2019-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(361, 13, 356, '2010-09-13', NULL, NULL, NULL, 'active', NULL, NULL),
(362, 5, 357, '2021-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(363, 5, 358, '2021-10-21', NULL, NULL, NULL, 'active', NULL, NULL),
(364, 16, 359, '2013-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(365, 3, 360, '2013-02-14', NULL, NULL, NULL, 'active', NULL, NULL),
(366, 16, 361, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(367, 16, 362, '2017-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(368, 3, 363, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(369, 3, 364, '2000-12-18', NULL, NULL, NULL, 'active', NULL, NULL),
(370, 13, 365, '2013-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(371, 14, 366, '2007-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(372, 13, 367, '2010-11-27', NULL, NULL, NULL, 'active', NULL, NULL),
(373, 3, 368, '1998-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(374, 13, 369, '2013-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(375, 3, 370, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(376, 14, 371, '2008-03-07', NULL, NULL, NULL, 'active', NULL, NULL),
(377, 12, 372, '1994-11-28', NULL, NULL, NULL, 'active', NULL, NULL),
(378, 14, 373, '2013-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(379, 12, 374, '1991-01-04', NULL, NULL, NULL, 'active', NULL, NULL),
(380, 14, 375, '2014-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(381, 27, 376, '2002-06-06', NULL, NULL, NULL, 'active', NULL, NULL),
(382, 24, 377, '2021-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(383, 27, 378, '2010-10-15', NULL, NULL, NULL, 'active', NULL, NULL),
(384, 14, 379, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(385, 24, 380, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(386, 14, 381, '2019-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(387, 12, 382, '2016-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(388, 24, 383, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(389, 14, 384, '2022-07-12', NULL, NULL, NULL, 'active', NULL, NULL),
(390, 12, 385, '2010-02-10', NULL, NULL, NULL, 'active', NULL, NULL),
(391, 14, 386, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(392, 14, 387, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(393, 12, 388, '2011-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(394, 24, 389, '2013-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(395, 28, 390, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(396, 12, 391, '2013-07-15', NULL, NULL, NULL, 'active', NULL, NULL),
(397, 9, 392, '2020-08-03', NULL, NULL, NULL, 'active', NULL, NULL),
(398, 24, 393, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(399, 28, 394, '1988-02-22', NULL, NULL, NULL, 'active', NULL, NULL),
(400, 12, 395, '2013-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(401, 24, 396, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(402, 12, 397, '2015-08-17', NULL, NULL, NULL, 'active', NULL, NULL),
(403, 9, 398, '2022-12-14', NULL, NULL, NULL, 'active', NULL, NULL),
(404, 24, 399, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(405, 12, 400, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(406, 28, 401, '2022-03-03', NULL, NULL, NULL, 'active', NULL, NULL),
(407, 12, 402, '2017-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(408, 9, 403, '2022-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(409, 18, 404, '2010-08-09', NULL, NULL, NULL, 'active', NULL, NULL),
(410, 28, 405, '2017-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(411, 9, 406, '2018-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(412, 12, 407, '2021-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(413, 21, 408, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(414, 18, 409, '1994-11-10', NULL, NULL, NULL, 'active', NULL, NULL),
(415, 9, 410, '2019-07-22', NULL, NULL, NULL, 'active', NULL, NULL),
(416, 12, 411, '2021-11-01', NULL, NULL, NULL, 'active', NULL, NULL),
(417, 18, 412, '2014-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(418, 18, 413, '2015-03-17', NULL, NULL, NULL, 'active', NULL, NULL),
(419, 9, 414, '2020-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(420, 15, 415, '2010-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(421, 12, 416, '2021-11-01', NULL, NULL, NULL, 'active', NULL, NULL),
(422, 9, 417, '2022-01-25', NULL, NULL, NULL, 'active', NULL, NULL),
(423, 18, 418, '2017-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(424, 12, 419, '2021-11-01', NULL, NULL, NULL, 'active', NULL, NULL),
(425, 18, 420, '2017-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(426, 15, 421, '2007-09-20', NULL, NULL, NULL, 'active', NULL, NULL),
(427, 12, 422, '2021-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(428, 18, 423, '2017-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(429, 9, 424, '2022-04-11', NULL, NULL, NULL, 'active', NULL, NULL),
(430, 24, 425, '2021-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(431, 3, 426, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(432, 3, 427, '2017-07-31', NULL, NULL, NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `design_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadditional` tinyint(4) NOT NULL DEFAULT 0,
  `isvacational` enum('Vacational','Non-Vacational') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Vacational',
  `emp_type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0-teaching\r\n1-non teaching',
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `design_name`, `isadditional`, `isvacational`, `emp_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HoD', 1, 'Non-Vacational', 'Teaching', 'active', '2023-09-09 04:29:39', '2023-09-13 00:11:14'),
(2, 'Principal', 1, 'Non-Vacational', 'Teaching', 'active', '2023-09-09 04:32:19', '2023-09-13 00:11:21'),
(3, 'Dean-Administration', 1, 'Non-Vacational', 'Teaching', 'active', '2023-09-09 04:52:45', '2023-10-20 00:16:24'),
(4, 'Section Head (Non-Teaching)', 1, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-12 23:47:25', '2023-10-19 23:42:26'),
(5, 'Assistant Professor', 0, 'Vacational', 'Teaching', 'active', '2023-09-13 00:12:41', '2023-09-13 00:12:41'),
(6, 'Associate Professor', 0, 'Vacational', 'Teaching', 'active', '2023-09-13 00:12:52', '2023-09-13 00:12:52'),
(7, 'Professor', 0, 'Vacational', 'Teaching', 'active', '2023-09-13 00:13:04', '2023-09-13 00:13:04'),
(8, 'Peons', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-13 02:10:28', '2023-09-13 02:12:39'),
(9, 'Helpers', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-13 02:13:19', '2023-09-13 02:13:19'),
(10, 'Office Superintendent', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:28:06', '2023-09-23 00:09:00'),
(11, 'First Division Assistant', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:28:39', '2023-09-15 02:55:35'),
(12, 'Second Division Assistant', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:29:08', '2023-09-14 04:29:08'),
(13, 'Mechanic', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:29:37', '2023-09-14 04:29:37'),
(14, 'Instructor', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:29:54', '2023-09-14 04:29:54'),
(15, 'Foreman', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:30:06', '2023-09-14 04:30:06'),
(16, 'Assistant Instructor', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:31:04', '2023-09-14 04:31:04'),
(17, 'Driver', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:32:20', '2023-09-14 04:32:20'),
(18, 'Attender', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:32:58', '2023-09-16 01:42:27'),
(19, 'System Analyst', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:33:21', '2023-09-14 04:33:21'),
(20, 'Network Administrator', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 04:35:47', '2023-09-14 04:35:47'),
(21, 'Moulder', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-14 23:59:51', '2023-09-14 23:59:51'),
(22, 'Electrician', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-15 00:27:16', '2023-09-15 00:27:16'),
(23, 'Carpenter', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-15 00:47:59', '2023-09-15 01:21:05'),
(24, 'Physical Education Director', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-16 01:44:47', '2023-09-16 01:44:47'),
(25, 'Lady Physical Education Director', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-09-30 06:28:58', '2023-09-30 06:28:58'),
(26, 'Lecturer', 0, 'Non-Vacational', 'Teaching', 'active', '2023-10-03 00:00:05', '2023-10-03 00:00:05'),
(27, 'Senior Scale Lecturer', 0, 'Non-Vacational', 'Teaching', 'active', '2023-10-03 00:03:23', '2023-10-03 00:03:23'),
(28, 'Senior Grade lecturer', 0, 'Non-Vacational', 'Teaching', 'active', '2023-10-06 02:53:31', '2023-10-06 02:53:31'),
(29, 'Ayas', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-10-09 04:04:23', '2023-10-09 04:04:23'),
(30, 'Cleaners', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-10-09 04:04:57', '2023-10-09 04:04:57'),
(31, 'RECEPTIONIST', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-10-09 04:47:08', '2023-10-09 04:47:08'),
(32, 'Accounts', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-10-09 06:08:38', '2023-10-09 06:08:38'),
(33, 'ASSISTANT LIBRARIAN', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-10-09 06:09:33', '2023-10-09 06:09:33'),
(36, 'Dean Student Affairs', 1, 'Non-Vacational', 'Teaching', 'active', '2023-10-20 00:17:29', '2023-10-20 00:17:29'),
(37, 'Dean Research & Development', 1, 'Non-Vacational', 'Teaching', 'active', '2023-10-20 00:17:54', '2023-10-20 00:17:54'),
(38, 'Dean Academics Statutory', 1, 'Non-Vacational', 'Teaching', 'active', '2023-10-20 00:18:23', '2023-10-20 00:18:23'),
(39, 'Dean Academics Development', 1, 'Non-Vacational', 'Teaching', 'active', '2023-10-20 00:18:43', '2023-10-20 00:18:43'),
(40, 'Dean Infrastructure', 1, 'Non-Vacational', 'Teaching', 'active', '2023-10-20 00:19:06', '2023-10-20 00:19:06'),
(41, 'welder', 0, 'Vacational', 'Non-Teaching', 'active', '2023-11-28 23:48:17', '2023-11-28 23:57:26'),
(43, 'Steno Typist', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-12-01 00:50:37', '2023-12-01 00:50:37'),
(44, 'Data Operatar', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-12-01 00:55:49', '2023-12-01 00:55:49'),
(45, 'Fitter', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-12-01 01:34:53', '2023-12-01 01:34:53'),
(46, 'Clerk', 0, 'Vacational', 'Non-Teaching', 'active', '2023-12-01 03:55:38', '2023-12-01 03:55:38'),
(47, 'Nurse', 0, 'Non-Vacational', 'Non-Teaching', 'active', '2023-12-01 05:36:29', '2023-12-01 05:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `designation_ntcpayscale`
--

CREATE TABLE `designation_ntcpayscale` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) NOT NULL,
  `ntcpayscale_id` bigint(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designation_ntcpayscale`
--

INSERT INTO `designation_ntcpayscale` (`id`, `designation_id`, `ntcpayscale_id`, `start_date`, `end_date`, `reason`, `gcr`, `status`, `created_at`, `updated_at`) VALUES
(1, 29, 1, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(2, 30, 1, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(3, 9, 1, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(4, 8, 1, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(5, 29, 2, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(6, 30, 2, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(7, 9, 2, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(8, 8, 2, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(9, 17, 3, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(10, 17, 4, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(11, 31, 5, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(12, 12, 5, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(13, 31, 6, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(14, 12, 6, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(15, 33, 7, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(16, 33, 8, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(17, 23, 9, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(18, 22, 9, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(19, 13, 9, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(20, 21, 9, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(21, 23, 10, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(22, 22, 10, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(23, 13, 10, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(24, 21, 10, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(25, 16, 11, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(26, 16, 12, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(27, 41, 13, '2023-01-01', NULL, NULL, 'GCR 01', 'active', NULL, NULL),
(28, 18, 14, '2023-01-02', NULL, NULL, 'GCR 01', 'active', NULL, NULL),
(29, 8, 14, '2023-01-02', NULL, NULL, 'GCR 01', 'active', NULL, NULL),
(30, 15, 15, '2023-01-02', NULL, NULL, 'GCR 01', 'active', NULL, NULL),
(31, 15, 16, '2023-01-02', NULL, NULL, 'GCR 01', 'active', NULL, NULL),
(32, 44, 17, '2023-01-02', NULL, NULL, 'GCR No: 01', 'active', NULL, NULL),
(33, 43, 18, '2023-01-02', NULL, NULL, '1', 'active', NULL, NULL),
(34, 45, 19, '2023-01-01', NULL, NULL, '1', 'active', NULL, NULL),
(35, 46, 20, '2023-01-02', NULL, NULL, '1', 'active', NULL, NULL),
(36, 47, 21, '2022-01-01', NULL, NULL, '1', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designation_ntpayscale`
--

CREATE TABLE `designation_ntpayscale` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `ntpayscale_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designation_ntpayscale`
--

INSERT INTO `designation_ntpayscale` (`id`, `designation_id`, `ntpayscale_id`, `start_date`, `end_date`, `reason`, `gcr`, `status`, `created_at`, `updated_at`) VALUES
(1, 29, 1, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(2, 30, 1, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(3, 9, 1, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(4, 8, 1, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(5, 18, 2, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(6, 17, 3, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(7, 31, 4, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(8, 12, 4, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(9, 11, 5, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(10, 32, 6, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(11, 10, 6, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(12, 33, 7, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(13, 23, 8, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(14, 22, 8, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(15, 13, 8, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(16, 21, 8, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(17, 16, 9, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(18, 14, 10, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(19, 15, 11, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL),
(20, 19, 12, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designation_staff`
--

CREATE TABLE `designation_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` bigint(20) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr_close` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designation_staff`
--

INSERT INTO `designation_staff` (`id`, `designation_id`, `staff_id`, `dept_id`, `start_date`, `end_date`, `reason`, `gcr`, `gcr_close`, `status`, `created_at`, `updated_at`) VALUES
(31, 26, 11, NULL, '2009-09-24', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(32, 5, 12, NULL, '2017-07-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(33, 16, 13, NULL, '2005-07-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(34, 5, 14, NULL, '2018-12-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(35, 6, 15, NULL, '2022-10-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(36, 26, 16, NULL, '1989-09-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(37, 6, 17, NULL, '2023-01-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(38, 16, 18, NULL, '2016-11-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(39, 6, 19, NULL, '2023-01-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(40, 13, 20, NULL, '2008-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(41, 6, 21, NULL, '2023-04-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(42, 6, 22, NULL, '2022-10-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(43, 26, 23, NULL, '2009-05-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(44, 27, 24, NULL, '2011-09-28', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(45, 6, 25, NULL, '2003-11-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(46, 13, 26, NULL, '2012-10-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(47, 13, 27, NULL, '2012-10-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(48, 26, 28, NULL, '2005-08-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(49, 26, 29, NULL, '2013-05-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(50, 13, 30, NULL, '2013-02-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(51, 26, 31, NULL, '2006-08-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(52, 26, 32, NULL, '2008-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(53, 26, 33, NULL, '2013-11-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(54, 26, 34, NULL, '2012-01-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(55, 26, 35, NULL, '2013-12-26', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(56, 6, 36, NULL, '2012-05-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(57, 26, 37, NULL, '2014-01-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(58, 26, 38, NULL, '2012-07-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(59, 26, 39, NULL, '2014-01-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(60, 26, 40, NULL, '2013-03-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(61, 26, 41, NULL, '2014-01-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(62, 26, 42, NULL, '2013-09-14', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(63, 5, 43, NULL, '2014-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(64, 13, 44, NULL, '2013-02-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(65, 26, 45, NULL, '2014-02-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(66, 16, 46, NULL, '2005-07-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(67, 5, 47, NULL, '2014-09-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(68, 16, 48, NULL, '2013-09-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(69, 13, 49, NULL, '2012-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(70, 26, 50, NULL, '2015-02-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(71, 16, 51, NULL, '2013-03-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(72, 21, 52, NULL, '2006-02-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(73, 26, 53, NULL, '2015-02-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(74, 5, 54, NULL, '2015-07-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(75, 16, 55, NULL, '2015-11-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(76, 5, 56, NULL, '2015-07-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(77, 16, 57, NULL, '2015-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(78, 26, 58, NULL, '2014-08-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(79, 26, 59, NULL, '2015-08-20', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(80, 16, 60, NULL, '2023-05-23', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(81, 13, 61, NULL, '2013-02-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(82, 5, 62, NULL, '2016-07-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(83, 13, 63, NULL, '2009-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(84, 5, 64, NULL, '2017-07-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(85, 41, 65, NULL, '2016-09-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(86, 13, 66, NULL, '2015-11-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(87, 5, 67, NULL, '2022-10-21', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(88, 13, 68, NULL, '2015-11-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(89, 8, 69, NULL, '2008-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(90, 8, 70, NULL, '2008-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(91, 5, 71, NULL, '2017-07-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(92, 13, 72, NULL, '2012-11-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(93, 13, 73, NULL, '2012-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(94, 13, 74, NULL, '2019-09-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(95, 26, 75, NULL, '2010-04-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(96, 16, 76, NULL, '1989-03-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(97, 26, 77, NULL, '1997-09-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(98, 16, 78, NULL, '2010-09-14', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(99, 16, 79, NULL, '2019-09-20', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(100, 26, 80, NULL, '1998-09-21', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(101, 26, 81, NULL, '2004-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(102, 26, 82, NULL, '1996-03-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(103, 16, 83, NULL, '2014-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(104, 26, 84, NULL, '1997-09-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(105, 15, 85, NULL, '2019-09-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(106, 16, 86, NULL, '2022-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(107, 16, 87, NULL, '2021-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(108, 26, 88, NULL, '1997-02-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(109, 16, 89, NULL, '2023-07-17', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(110, 16, 90, NULL, '2023-10-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(111, 7, 91, NULL, '2023-06-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(112, 26, 92, NULL, '1999-10-30', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(113, 13, 93, NULL, '2010-09-21', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(114, 8, 94, NULL, '2008-08-14', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(115, 13, 95, NULL, '2008-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(116, 26, 96, NULL, '1996-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(117, 7, 97, NULL, '2019-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(118, 26, 98, NULL, '2001-10-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(119, 13, 99, NULL, '2010-09-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(120, 16, 100, NULL, '2022-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(121, 13, 101, NULL, '2012-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(122, 13, 102, NULL, '2012-08-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(123, 26, 103, NULL, '2006-03-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(124, 26, 104, NULL, '2007-08-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(125, 30, 105, NULL, '2016-10-24', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(126, 26, 106, NULL, '1999-10-29', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(127, 26, 107, NULL, '2004-04-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(128, 13, 108, NULL, '2021-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(129, 26, 109, NULL, '2004-08-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(130, 16, 110, NULL, '2023-05-22', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(131, 26, 111, NULL, '2003-06-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(132, 13, 112, NULL, '2013-02-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(133, 16, 113, NULL, '2023-08-21', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(134, 13, 114, NULL, '2013-02-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(135, 16, 115, NULL, '2023-10-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(136, 27, 116, NULL, '2011-05-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(137, 8, 117, NULL, '1998-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(138, 26, 118, NULL, '2007-04-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(139, 26, 119, NULL, '2007-05-28', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(140, 26, 120, NULL, '2003-09-17', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(141, 16, 121, NULL, '2023-10-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(142, 26, 122, NULL, '2008-08-14', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(143, 6, 123, NULL, '2007-07-17', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(144, 16, 124, NULL, '2002-07-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(145, 16, 125, NULL, '2007-03-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(146, 26, 126, NULL, '2006-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(147, 13, 127, NULL, '2023-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(148, 6, 128, NULL, '2007-07-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(149, 16, 129, NULL, '2010-09-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(150, 26, 130, NULL, '2009-08-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(151, 16, 131, NULL, '2006-04-17', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(152, 6, 132, NULL, '2022-10-27', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(153, 13, 133, NULL, '2010-11-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(154, 30, 134, NULL, '2017-09-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(155, 16, 135, NULL, '2017-02-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(156, 26, 136, NULL, '2007-09-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(157, 13, 137, NULL, '2008-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(158, 13, 138, NULL, '2012-08-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(159, 26, 139, NULL, '2008-08-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(160, 13, 140, NULL, '2011-11-21', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(161, 13, 141, NULL, '2019-09-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(162, 26, 142, NULL, '2010-03-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(163, 26, 143, NULL, '2009-08-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(164, 26, 144, NULL, '2010-08-20', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(165, 26, 145, NULL, '2012-07-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(166, 26, 146, NULL, '2009-09-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(167, 26, 147, NULL, '2013-07-19', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(168, 16, 148, NULL, '2022-03-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(169, 26, 149, NULL, '2013-09-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(170, 16, 150, NULL, '2022-03-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(171, 26, 151, NULL, '2014-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(172, 26, 152, NULL, '2015-02-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(173, 16, 153, NULL, '2022-03-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(174, 26, 154, NULL, '2014-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(175, 26, 155, NULL, '2011-11-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(176, 6, 156, NULL, '1993-02-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(177, 16, 157, NULL, '2022-08-24', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(178, 13, 158, NULL, '2011-12-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(179, 26, 159, NULL, '2012-09-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(180, 26, 160, NULL, '2010-08-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(181, 13, 161, NULL, '2013-02-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(182, 6, 162, NULL, '2016-04-26', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(183, 26, 163, NULL, '2012-10-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(184, 9, 164, NULL, '2011-10-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(185, 13, 165, NULL, '2022-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(186, 26, 166, NULL, '2013-05-20', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(187, 6, 167, NULL, '2016-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(188, 13, 168, NULL, '2022-03-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(189, 16, 169, NULL, '2022-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(190, 13, 170, NULL, '2022-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(191, 6, 171, NULL, '2016-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(192, 13, 172, NULL, '2022-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(193, 26, 173, NULL, '2013-09-21', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(194, 13, 174, NULL, '2023-05-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(195, 13, 175, NULL, '2022-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(196, 6, 176, NULL, '2016-09-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(197, 13, 177, NULL, '2023-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(198, 16, 178, NULL, '2007-09-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(199, 26, 179, NULL, '2013-11-29', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(200, 16, 180, NULL, '2007-09-14', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(201, 16, 181, NULL, '2006-02-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(202, 5, 182, NULL, '2014-08-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(203, 16, 183, NULL, '2002-06-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(204, 5, 184, NULL, '2017-04-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(205, 8, 185, NULL, '1997-08-24', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(206, 26, 186, NULL, '2014-08-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(207, 16, 187, NULL, '2005-08-22', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(208, 5, 188, NULL, '2017-08-31', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(209, 16, 189, NULL, '2012-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(210, 16, 190, NULL, '2007-09-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(211, 26, 191, NULL, '2014-09-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(212, 5, 192, NULL, '2017-09-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(213, 16, 193, NULL, '2000-12-26', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(214, 26, 194, NULL, '2014-09-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(215, 16, 195, NULL, '2013-02-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(216, 5, 196, NULL, '2017-10-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(217, 16, 197, NULL, '2007-09-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(218, 26, 198, NULL, '2007-04-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(219, 16, 199, NULL, '2008-08-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(220, 5, 200, NULL, '2017-10-23', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(221, 8, 201, NULL, '1993-10-20', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(222, 26, 202, NULL, '2013-07-22', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(223, 26, 203, NULL, '2019-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(224, 5, 204, NULL, '2016-01-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(225, 13, 205, NULL, '2013-02-14', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(226, 16, 206, NULL, '2011-10-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(227, 5, 207, NULL, '2016-01-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(228, 13, 208, NULL, '2012-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(229, 5, 209, NULL, '2016-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(230, 13, 210, NULL, '2008-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(231, 6, 211, NULL, '2021-10-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(232, 5, 212, NULL, '2016-08-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(233, 13, 213, NULL, '2008-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(234, 16, 214, NULL, '2007-09-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(235, 18, 215, NULL, '2013-02-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(236, 16, 216, NULL, '2003-09-22', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(237, 5, 217, NULL, '2017-07-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(238, 18, 218, NULL, '2006-05-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(239, 5, 219, NULL, '2021-10-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(240, 5, 220, NULL, '1996-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(241, 16, 221, NULL, '2012-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(242, 16, 222, NULL, '2022-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(243, 16, 223, NULL, '2023-05-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(244, 5, 224, NULL, '2021-10-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(245, 16, 225, NULL, '2012-08-21', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(246, 16, 226, NULL, '2023-05-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(247, 16, 227, NULL, '2013-02-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(248, 26, 228, NULL, '2002-09-21', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(249, 5, 229, NULL, '2021-11-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(250, 9, 230, NULL, '2011-06-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(251, 13, 231, NULL, '2023-10-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(252, 26, 232, NULL, '2001-09-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(253, 26, 233, NULL, '2003-09-29', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(254, 26, 234, NULL, '2005-06-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(255, 26, 235, NULL, '2006-11-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(256, 26, 236, NULL, '2007-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(257, 7, 237, NULL, '2010-03-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(258, 26, 238, NULL, '2007-09-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(259, 26, 239, NULL, '2008-04-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(260, 5, 240, NULL, '2016-08-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(261, 26, 241, NULL, '1989-08-26', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(262, 5, 242, NULL, '2016-09-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(263, 26, 243, NULL, '2004-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(264, 26, 244, NULL, '2001-09-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(265, 26, 245, NULL, '2000-04-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(266, 26, 246, NULL, '2004-08-20', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(267, 8, 247, NULL, '2019-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(268, 26, 248, NULL, '2004-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(269, 16, 249, NULL, '2022-08-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(270, 26, 250, NULL, '1987-07-23', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(271, 16, 251, NULL, '2023-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(272, 16, 252, NULL, '2023-05-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(273, 5, 253, NULL, '2011-01-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(274, 30, 254, NULL, '2017-09-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(275, 26, 255, NULL, '2006-09-19', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(276, 16, 256, NULL, '2023-10-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(277, 13, 257, NULL, '2012-04-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(278, 26, 258, NULL, '2007-07-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(279, 18, 259, NULL, '2019-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(280, 26, 260, NULL, '2004-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(281, 8, 261, NULL, '2023-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(282, 26, 262, NULL, '2008-04-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(283, 5, 263, NULL, '2011-11-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(284, 26, 264, NULL, '2005-08-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(285, 16, 265, NULL, '1999-11-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(286, 26, 266, NULL, '2014-07-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(287, 5, 267, NULL, '2012-02-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(288, 16, 268, NULL, '2018-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(289, 12, 269, NULL, '2004-12-17', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(290, 26, 270, NULL, '2006-08-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(291, 9, 271, NULL, '2011-10-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(292, 12, 272, NULL, '2010-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(293, 26, 273, NULL, '2015-08-25', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(294, 33, 274, NULL, '2019-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(295, 26, 275, NULL, '2006-08-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(296, 12, 276, NULL, '2016-01-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(297, 23, 277, NULL, '2006-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(298, 5, 278, NULL, '2016-09-28', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(299, 26, 279, NULL, '2007-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(300, 12, 280, NULL, '2016-11-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(301, 30, 281, NULL, '2019-09-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(302, 5, 282, NULL, '2017-07-17', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(303, 26, 283, NULL, '2007-03-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(304, 12, 284, NULL, '2016-11-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(305, 26, 285, NULL, '2009-08-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(306, 5, 286, NULL, '2018-01-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(307, 12, 287, NULL, '2015-03-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(308, 5, 288, NULL, '2019-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(309, 16, 289, NULL, '1996-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(310, 26, 290, NULL, '2008-08-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(311, 26, 291, NULL, '2009-08-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(312, 12, 292, NULL, '2019-01-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(313, 5, 293, NULL, '2019-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(314, 12, 294, NULL, '2020-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(315, 5, 295, NULL, '2014-01-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(316, 5, 296, NULL, '2019-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(317, 26, 297, NULL, '2014-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(318, 12, 298, NULL, '2022-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(319, 44, 299, NULL, '2005-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(320, 12, 300, NULL, '2022-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(321, 5, 301, NULL, '2014-03-19', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(322, 12, 302, NULL, '2022-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(323, 44, 303, NULL, '2018-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(324, 12, 304, NULL, '2022-06-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(325, 12, 305, NULL, '2019-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(326, 5, 306, NULL, '2009-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(327, 12, 307, NULL, '2022-06-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(328, 5, 308, NULL, '2014-04-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(329, 16, 309, NULL, '2022-05-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(330, 26, 310, NULL, '2015-02-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(331, 12, 311, NULL, '2022-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(332, 5, 312, NULL, '2021-10-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(333, 5, 313, NULL, '2016-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(334, 13, 314, NULL, '2019-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(335, 18, 315, NULL, '2006-05-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(336, 5, 316, NULL, '2021-10-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(337, 5, 317, NULL, '2016-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(338, 8, 318, NULL, '2023-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(339, 5, 319, NULL, '2021-10-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(340, 5, 320, NULL, '2016-01-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(341, 13, 321, NULL, '2013-02-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(342, 5, 322, NULL, '2022-01-24', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(343, 5, 323, NULL, '2016-01-14', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(344, 5, 324, NULL, '2022-02-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(345, 45, 325, NULL, '2016-09-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(346, 13, 326, NULL, '2013-02-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(347, 5, 327, NULL, '2022-07-05', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(348, 5, 328, NULL, '2016-08-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(349, 13, 329, NULL, '2013-02-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(350, 5, 330, NULL, '2022-10-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(351, 33, 331, NULL, '2013-05-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(352, 5, 332, NULL, '2016-08-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(353, 30, 333, NULL, '2016-10-25', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(354, 5, 334, NULL, '2023-03-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(355, 12, 335, NULL, '2010-06-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(356, 5, 336, NULL, '2017-09-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(357, 5, 337, NULL, '2017-10-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(358, 33, 338, NULL, '2014-06-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(359, 33, 339, NULL, '2013-05-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(360, 5, 340, NULL, '2017-10-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(361, 33, 341, NULL, '2019-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(362, 12, 342, NULL, '2010-06-08', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(363, 5, 343, NULL, '2017-10-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(364, 5, 344, NULL, '2012-05-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(365, 33, 345, NULL, '2019-05-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(366, 33, 346, NULL, '2014-06-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(367, 5, 347, NULL, '2017-10-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(368, 26, 348, NULL, '2003-03-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(369, 8, 349, NULL, '2008-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(370, 33, 350, NULL, '2019-03-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(371, 5, 351, NULL, '2021-10-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(372, 5, 352, NULL, '2016-08-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(373, 5, 353, NULL, '2021-08-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(374, 8, 354, NULL, '2019-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(375, 33, 355, NULL, '2019-05-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(376, 26, 356, NULL, '2010-09-13', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(377, 5, 357, NULL, '2021-10-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(378, 5, 358, NULL, '2021-10-21', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(379, 8, 359, NULL, '2013-05-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(380, 16, 360, NULL, '2013-02-14', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(381, 8, 361, NULL, '2019-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(382, 8, 362, NULL, '2017-09-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(383, 16, 363, NULL, '2013-02-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(384, 16, 364, NULL, '2000-12-18', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(385, 26, 365, NULL, '2013-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(386, 27, 366, NULL, '2007-07-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(387, 26, 367, NULL, '2010-11-27', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(388, 8, 368, NULL, '1998-01-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(389, 26, 369, NULL, '2013-08-20', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(390, 13, 370, NULL, '2008-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(391, 26, 371, NULL, '2008-03-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(392, 26, 372, NULL, '1994-11-28', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(393, 5, 373, NULL, '2013-09-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(394, 26, 374, NULL, '1991-01-04', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(395, 6, 375, NULL, '2014-09-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(396, 16, 376, NULL, '2002-06-06', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(397, 46, 377, NULL, '2021-09-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(398, 8, 378, NULL, '2010-10-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(399, 5, 379, NULL, '2017-07-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(400, 12, 380, NULL, '2019-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(401, 5, 381, NULL, '2019-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(402, 26, 382, NULL, '2016-09-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(403, 12, 383, NULL, '2019-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(404, 5, 384, NULL, '2022-07-12', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(405, 26, 385, NULL, '2010-02-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(406, 5, 386, NULL, '2023-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(407, 5, 387, NULL, '2023-06-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(408, 26, 388, NULL, '2011-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(409, 33, 389, NULL, '2013-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(410, 15, 390, NULL, '2023-10-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(411, 26, 391, NULL, '2013-07-15', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(412, 6, 392, NULL, '2020-08-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(413, 8, 393, NULL, '2012-10-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(414, 8, 394, NULL, '1988-02-22', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(415, 26, 395, NULL, '2013-08-07', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(416, 18, 396, NULL, '2012-10-16', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(417, 26, 397, NULL, '2015-08-17', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(418, 7, 398, NULL, '2022-12-14', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(419, 18, 399, NULL, '2019-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(420, 5, 400, NULL, '2017-07-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(421, 16, 401, NULL, '2022-03-03', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(422, 5, 402, NULL, '2017-08-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(423, 6, 403, NULL, '2022-10-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(424, 17, 404, NULL, '2010-08-09', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(425, 8, 405, NULL, '2017-04-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(426, 5, 406, NULL, '2018-10-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(427, 26, 407, NULL, '2021-09-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(428, 9, 408, NULL, '2019-09-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(429, 17, 409, NULL, '1994-11-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(430, 5, 410, NULL, '2019-07-22', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(431, 26, 411, NULL, '2021-11-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(432, 17, 412, NULL, '2014-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(433, 17, 413, NULL, '2015-03-17', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(434, 5, 414, NULL, '2020-11-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(435, 47, 415, NULL, '2010-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(436, 26, 416, NULL, '2021-11-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(437, 5, 417, NULL, '2022-01-25', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(438, 17, 418, NULL, '2017-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(439, 26, 419, NULL, '2021-11-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(440, 17, 420, NULL, '2017-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(441, 44, 421, NULL, '2007-09-20', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(442, 5, 422, NULL, '2021-12-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(443, 17, 423, NULL, '2017-02-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(444, 5, 424, NULL, '2022-04-11', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(445, 7, 425, NULL, '2021-11-02', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(446, 6, 426, NULL, '2017-07-01', NULL, NULL, NULL, NULL, 'active', NULL, NULL),
(447, 7, 427, NULL, '2017-07-31', NULL, NULL, NULL, NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expert_talk_conducteds`
--

CREATE TABLE `expert_talk_conducteds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semister` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_of_talk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resource_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_achievements`
--

CREATE TABLE `general_achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `award` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaveentitlements`
--

CREATE TABLE `leaveentitlements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leave_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_rules`
--

CREATE TABLE `leave_rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `longname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortname` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_entitlement` int(11) NOT NULL,
  `min` float NOT NULL,
  `max` int(11) NOT NULL,
  `vacation_type` enum('Vacational','Non-vacational') COLLATE utf8mb4_unicode_ci NOT NULL,
  `carry_forwardable` enum('Yes','No','','') COLLATE utf8mb4_unicode_ci DEFAULT 'No',
  `cf_wef` date DEFAULT NULL,
  `cf_gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encashable` tinyint(1) DEFAULT NULL,
  `enc_wef` date DEFAULT NULL,
  `enc_gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_encashable` int(11) NOT NULL,
  `max_carry_forwardable` int(11) DEFAULT NULL,
  `gap` int(11) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_rules`
--

INSERT INTO `leave_rules` (`id`, `longname`, `shortname`, `max_entitlement`, `min`, `max`, `vacation_type`, `carry_forwardable`, `cf_wef`, `cf_gcr`, `encashable`, `enc_wef`, `enc_gcr`, `max_encashable`, `max_carry_forwardable`, `gap`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Casual Leave', 'CL', 15, 0.5, 3, 'Vacational', 'No', NULL, 'GCR1', 0, '2023-01-01', 'GCR2', 0, 0, 0, 'active', '2023-12-01 05:53:42', '2023-12-01 05:53:42'),
(2, 'Casual Leave', 'CL', 15, 0.5, 3, 'Non-vacational', 'No', '2023-01-01', 'GCR1', 0, '2023-01-01', 'GCR1', 0, 0, 0, 'active', '2023-11-29 04:09:42', '2023-11-29 04:09:42'),
(3, 'Earned Leave', 'EL', 10, 3, 10, 'Vacational', 'No', '2023-01-01', 'GCR1', 0, '2023-01-01', 'GCR2', 0, 0, 0, 'active', '2023-11-29 01:56:50', '2023-11-29 01:56:50'),
(4, 'Restricted Holiday', 'RH', 2, 1, 2, 'Vacational', 'No', NULL, 'GCR1', 0, '2023-01-01', 'GCR2', 0, 0, 0, 'active', '2023-12-01 06:03:44', '2023-12-01 06:03:44'),
(5, 'Earned Leave', 'EL', 15, 3, 15, 'Non-vacational', 'Yes', '2023-01-01', 'GCR1', 1, '2023-01-01', 'GCR1', 240, 240, 0, 'active', '2023-11-29 01:57:53', '2023-11-29 01:57:53'),
(6, 'Restricted Holiday', 'RH', 2, 1, 2, 'Non-vacational', 'No', '2023-01-01', 'GCR1', 0, '2023-01-01', NULL, 0, 0, 0, 'active', '2023-11-29 01:58:27', '2023-11-29 01:58:27'),
(7, 'Duty Leave GIT', 'DL GIT', 5, 1, 5, 'Vacational', 'No', '2023-01-01', 'GCR1', 0, '2023-01-01', 'GCR1', 0, 0, 0, 'active', '2023-11-29 02:00:03', '2023-11-29 02:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `mgmtmembers`
--

CREATE TABLE `mgmtmembers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `level` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(22, '2023_08_22_110846_create_departments_table', 1),
(23, '2023_08_22_110916_create_religions_table', 1),
(24, '2023_08_22_111011_create_castecategories_table', 1),
(25, '2023_08_22_111035_create_designations_table', 1),
(26, '2023_08_22_111120_create_associations_table', 1),
(27, '2023_08_22_111252_create_mgmtmembers_table', 1),
(28, '2023_08_22_111328_create_leaveentitlements_table', 1),
(29, '2023_08_22_111359_create_salaryheads_table', 1),
(30, '2023_08_22_111417_create_payscales_table', 1),
(31, '2023_08_22_111430_create_tdsheads_table', 1),
(32, '2023_08_22_111442_create_renumerationheads_table', 1),
(33, '2023_08_22_111500_create_qualifications_table', 1),
(34, '2023_08_22_111508_create_staff_table', 1),
(35, '2023_09_16_063950_create_ntpayscales_table', 2),
(36, '2023_09_16_064107_create_ntcpayscales_table', 3),
(37, '2023_09_16_064202_create_xntdesign_payscales_table', 4),
(38, '2023_09_16_064510_create_xntcdesign_payscales_table', 4),
(40, '2023_09_16_094531_create_designation_ntcpayscales_table', 5),
(41, '2023_09_16_094519_create_designation_ntpayscales_table', 6),
(42, '2023_09_23_080241_create_allowances_table', 7),
(43, '2023_09_26_071240_create_association_staff_table', 8),
(44, '2023_09_26_071811_create_department_staff_table', 8),
(45, '2023_09_26_072233_create_designation_staff_table', 8),
(46, '2023_09_26_073133_create_staff_teaching_payscale_table', 8),
(47, '2023_09_27_073839_create_ntpayscale_staff_table', 9),
(48, '2023_09_27_074034_create_ntcpayscale_staff_table', 9),
(49, '2023_10_27_072758_create_leave_rules_table', 10),
(50, '2023_10_31_070850_create_create_leave_rule_configrations_table', 10),
(51, '2023_11_09_052948_create_qualification_staffs_table', 10),
(52, '2023_11_17_102221_create_table_combine_leave_rules', 10),
(53, '2023_11_22_092033_create_book_publications_table', 10),
(54, '2023_11_22_092841_create_chapters_table', 10),
(55, '2023_11_22_100257_create_consultancies_table', 10),
(56, '2023_11_22_101535_create_expert_talk_conducteds_table', 10),
(57, '2023_11_22_102251_create_general_achievements_table', 10),
(58, '2023_11_22_105448_create_professional_activity_conducteds_table', 11),
(59, '2023_11_22_110850_create_professional_activity_resource_people_table', 11),
(60, '2023_11_22_111323_create_publications_table', 11),
(61, '2023_11_22_112254_create_co_authors_gits_table', 11),
(62, '2023_11_22_112706_create_co_authors_others_table', 11),
(63, '2023_11_24_073446_create_consolidated_teaching_pay_table', 11),
(64, '2023_11_25_045414_create_professional_activity_attendees_table', 11),
(65, '2023_11_27_111437_create_conferences_attendees_table', 11),
(66, '2023_11_27_111612_create_conferences_conducteds_table', 11),
(67, '2023_11_28_050006_create_conferences_attendee_staff_table', 11),
(68, '2023_11_28_081328_create_consolidated_teaching_pay_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ntcpayscales`
--

CREATE TABLE `ntcpayscales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basepay` bigint(20) NOT NULL,
  `allowance` int(11) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `wef` date NOT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `closedon` date DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ntcpayscales`
--

INSERT INTO `ntcpayscales` (`id`, `basepay`, `allowance`, `year`, `wef`, `gcr`, `closedon`, `status`, `created_at`, `updated_at`) VALUES
(1, 10000, 3000, 1, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:24:35', '2023-11-28 04:24:35'),
(2, 10500, 3000, 2, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:25:24', '2023-11-28 04:25:24'),
(3, 12000, 3000, 1, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:34:17', '2023-11-28 04:34:17'),
(4, 12500, 3000, 2, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:34:50', '2023-11-28 04:34:50'),
(5, 13000, 3000, 1, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:35:47', '2023-11-28 04:35:47'),
(6, 13500, 3000, 2, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:47:25', '2023-11-28 04:47:25'),
(7, 14000, 3000, 1, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:48:34', '2023-11-28 04:48:34'),
(8, 14500, 3000, 2, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:49:11', '2023-11-28 04:49:11'),
(9, 12000, 3000, 1, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:50:47', '2023-11-28 04:50:47'),
(10, 12250, 3000, 2, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:51:52', '2023-11-28 04:51:52'),
(11, 13000, 3000, 1, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:52:44', '2023-11-28 04:52:44'),
(12, 13500, 3000, 2, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:53:22', '2023-11-28 04:53:22'),
(13, 10000, 3000, 1, '2023-01-01', 'GCR 01', NULL, 'active', '2023-11-29 00:01:59', '2023-11-29 00:01:59'),
(14, 10000, 3000, 1, '2023-01-02', 'GCR 01', NULL, 'active', '2023-11-29 00:08:51', '2023-11-29 00:08:51'),
(15, 12000, 3000, 1, '2023-01-02', 'GCR 01', NULL, 'active', '2023-11-29 00:50:09', '2023-11-29 00:50:09'),
(16, 12500, 3000, 2, '2023-01-02', 'GCR 01', NULL, 'active', '2023-11-29 00:51:07', '2023-11-29 00:51:07'),
(17, 13000, 3000, 1, '2023-01-02', 'GCR No: 01', NULL, 'active', '2023-12-01 00:57:17', '2023-12-01 05:46:27'),
(18, 11000, 1000, 1, '2023-01-02', '1', NULL, 'active', '2023-12-01 00:58:05', '2023-12-01 00:58:05'),
(19, 10000, 1000, 1, '2023-01-01', '1', NULL, 'active', '2023-12-01 01:35:57', '2023-12-01 01:35:57'),
(20, 12000, 2000, 1, '2023-01-02', '1', NULL, 'active', '2023-12-01 04:02:49', '2023-12-01 04:02:49'),
(21, 10000, 3000, 1, '2022-01-01', '1', NULL, 'active', '2023-12-01 05:37:32', '2023-12-01 05:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `ntcpayscale_staff`
--

CREATE TABLE `ntcpayscale_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `ntcpayscale_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ntcpayscale_staff`
--

INSERT INTO `ntcpayscale_staff` (`id`, `staff_id`, `ntcpayscale_id`, `start_date`, `end_date`, `reason`, `gcr`, `status`, `created_at`, `updated_at`) VALUES
(2, 13, 11, '2005-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(3, 18, 11, '2016-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(4, 20, 9, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(5, 26, 9, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(6, 27, 9, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(7, 30, 9, '2013-02-11', NULL, NULL, NULL, 'active', NULL, NULL),
(8, 44, 9, '2013-02-13', NULL, NULL, NULL, 'active', NULL, NULL),
(9, 46, 11, '2005-07-06', NULL, NULL, NULL, 'active', NULL, NULL),
(10, 48, 11, '2013-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(11, 49, 9, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(12, 51, 11, '2013-03-05', NULL, NULL, NULL, 'active', NULL, NULL),
(13, 52, 9, '2006-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(14, 55, 11, '2015-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(15, 57, 11, '2015-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(16, 60, 11, '2023-05-23', NULL, NULL, NULL, 'active', NULL, NULL),
(17, 61, 9, '2013-02-13', NULL, NULL, NULL, 'active', NULL, NULL),
(18, 65, 13, '2016-09-08', NULL, NULL, NULL, 'active', NULL, NULL),
(19, 66, 9, '2015-11-03', NULL, NULL, NULL, 'active', NULL, NULL),
(20, 68, 9, '2015-11-16', NULL, NULL, NULL, 'active', NULL, NULL),
(21, 69, 1, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(22, 70, 1, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(23, 72, 9, '2012-11-06', NULL, NULL, NULL, 'active', NULL, NULL),
(24, 73, 9, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(25, 74, 9, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(26, 76, 11, '1989-03-04', NULL, NULL, NULL, 'active', NULL, NULL),
(27, 78, 11, '2010-09-14', NULL, NULL, NULL, 'active', NULL, NULL),
(28, 79, 11, '2019-09-20', NULL, NULL, NULL, 'active', NULL, NULL),
(29, 83, 11, '2014-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(30, 85, 15, '2019-09-16', NULL, NULL, NULL, 'active', NULL, NULL),
(31, 86, 11, '2022-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(32, 87, 11, '2021-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(33, 89, 11, '2023-07-17', NULL, NULL, NULL, 'active', NULL, NULL),
(34, 90, 11, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(35, 93, 9, '2010-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(36, 94, 1, '2008-08-14', NULL, NULL, NULL, 'active', NULL, NULL),
(37, 95, 9, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(38, 99, 9, '2010-09-09', NULL, NULL, NULL, 'active', NULL, NULL),
(39, 100, 11, '2022-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(40, 101, 9, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(41, 102, 9, '2012-08-03', NULL, NULL, NULL, 'active', NULL, NULL),
(42, 105, 1, '2016-10-24', NULL, NULL, NULL, 'active', NULL, NULL),
(43, 108, 9, '2021-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(44, 110, 11, '2023-05-22', NULL, NULL, NULL, 'active', NULL, NULL),
(45, 112, 9, '2013-02-13', NULL, NULL, NULL, 'active', NULL, NULL),
(46, 113, 11, '2023-08-21', NULL, NULL, NULL, 'active', NULL, NULL),
(47, 114, 9, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(48, 115, 11, '2023-10-10', NULL, NULL, NULL, 'active', NULL, NULL),
(49, 117, 1, '1998-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(50, 121, 11, '2023-10-09', NULL, NULL, NULL, 'active', NULL, NULL),
(51, 124, 11, '2002-07-11', NULL, NULL, NULL, 'active', NULL, NULL),
(52, 125, 11, '2007-03-05', NULL, NULL, NULL, 'active', NULL, NULL),
(53, 127, 9, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(54, 129, 11, '2010-09-13', NULL, NULL, NULL, 'active', NULL, NULL),
(55, 131, 11, '2006-04-17', NULL, NULL, NULL, 'active', NULL, NULL),
(56, 133, 9, '2010-11-08', NULL, NULL, NULL, 'active', NULL, NULL),
(57, 134, 1, '2017-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(58, 135, 11, '2017-02-11', NULL, NULL, NULL, 'active', NULL, NULL),
(59, 137, 9, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(60, 138, 9, '2012-08-02', NULL, NULL, NULL, 'active', NULL, NULL),
(61, 140, 9, '2011-11-21', NULL, NULL, NULL, 'active', NULL, NULL),
(62, 141, 9, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(63, 148, 11, '2022-03-02', NULL, NULL, NULL, 'active', NULL, NULL),
(64, 150, 11, '2022-03-04', NULL, NULL, NULL, 'active', NULL, NULL),
(65, 153, 11, '2022-03-07', NULL, NULL, NULL, 'active', NULL, NULL),
(66, 157, 11, '2022-08-24', NULL, NULL, NULL, 'active', NULL, NULL),
(67, 158, 9, '2011-12-15', NULL, NULL, NULL, 'active', NULL, NULL),
(68, 161, 9, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(69, 164, 1, '2011-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(70, 165, 9, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(71, 168, 9, '2022-03-02', NULL, NULL, NULL, 'active', NULL, NULL),
(72, 169, 11, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(73, 170, 9, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(74, 172, 9, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(75, 175, 9, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(76, 177, 9, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(77, 178, 11, '2007-09-04', NULL, NULL, NULL, 'active', NULL, NULL),
(78, 180, 11, '2007-09-14', NULL, NULL, NULL, 'active', NULL, NULL),
(79, 181, 11, '2006-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(80, 183, 11, '2002-06-05', NULL, NULL, NULL, 'active', NULL, NULL),
(81, 185, 1, '1997-08-24', NULL, NULL, NULL, 'active', NULL, NULL),
(82, 187, 11, '2005-08-22', NULL, NULL, NULL, 'active', NULL, NULL),
(83, 189, 11, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(84, 190, 11, '2007-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(85, 193, 11, '2000-12-26', NULL, NULL, NULL, 'active', NULL, NULL),
(86, 195, 11, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(87, 197, 11, '2007-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(88, 199, 11, '2008-08-12', NULL, NULL, NULL, 'active', NULL, NULL),
(89, 201, 1, '1993-10-20', NULL, NULL, NULL, 'active', NULL, NULL),
(90, 205, 9, '2013-02-14', NULL, NULL, NULL, 'active', NULL, NULL),
(91, 206, 11, '2011-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(92, 208, 9, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(93, 210, 9, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(94, 213, 9, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(95, 214, 11, '2007-09-09', NULL, NULL, NULL, 'active', NULL, NULL),
(96, 215, 14, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(97, 216, 11, '2003-09-22', NULL, NULL, NULL, 'active', NULL, NULL),
(98, 218, 14, '2006-05-05', NULL, NULL, NULL, 'active', NULL, NULL),
(99, 221, 11, '2012-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(100, 222, 11, '2022-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(101, 223, 11, '2023-05-08', NULL, NULL, NULL, 'active', NULL, NULL),
(102, 225, 11, '2012-08-21', NULL, NULL, NULL, 'active', NULL, NULL),
(103, 226, 11, '2023-05-08', NULL, NULL, NULL, 'active', NULL, NULL),
(104, 227, 11, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(105, 230, 1, '2011-06-03', NULL, NULL, NULL, 'active', NULL, NULL),
(106, 231, 9, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(107, 247, 1, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(108, 249, 11, '2022-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(109, 251, 11, '2023-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(110, 252, 11, '2023-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(111, 254, 1, '2017-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(112, 256, 11, '2023-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(113, 257, 9, '2012-04-02', NULL, NULL, NULL, 'active', NULL, NULL),
(114, 259, 14, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(115, 261, 1, '2023-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(116, 265, 11, '1999-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(117, 268, 11, '2018-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(118, 269, 5, '2004-12-17', NULL, NULL, NULL, 'active', NULL, NULL),
(119, 271, 1, '2011-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(120, 272, 5, '2010-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(121, 274, 7, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(122, 276, 5, '2016-01-16', NULL, NULL, NULL, 'active', NULL, NULL),
(123, 277, 9, '2006-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(124, 280, 5, '2016-11-03', NULL, NULL, NULL, 'active', NULL, NULL),
(125, 281, 1, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(126, 284, 5, '2016-11-07', NULL, NULL, NULL, 'active', NULL, NULL),
(127, 287, 5, '2015-03-15', NULL, NULL, NULL, 'active', NULL, NULL),
(128, 289, 11, '1996-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(129, 292, 5, '2019-01-07', NULL, NULL, NULL, 'active', NULL, NULL),
(130, 294, 5, '2020-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(131, 298, 5, '2022-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(132, 299, 17, '2005-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(133, 300, 5, '2022-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(134, 302, 5, '2022-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(135, 303, 17, '2018-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(136, 304, 5, '2022-06-06', NULL, NULL, NULL, 'active', NULL, NULL),
(137, 305, 5, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(138, 307, 5, '2022-06-05', NULL, NULL, NULL, 'active', NULL, NULL),
(139, 309, 11, '2022-05-01', NULL, NULL, NULL, 'active', NULL, NULL),
(140, 311, 5, '2022-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(141, 314, 9, '2019-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(142, 315, 14, '2006-05-05', NULL, NULL, NULL, 'active', NULL, NULL),
(143, 318, 1, '2023-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(144, 321, 9, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(145, 325, 19, '2016-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(146, 326, 9, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(147, 329, 9, '2013-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(148, 331, 7, '2013-05-11', NULL, NULL, NULL, 'active', NULL, NULL),
(149, 333, 1, '2016-10-25', NULL, NULL, NULL, 'active', NULL, NULL),
(150, 335, 5, '2010-06-08', NULL, NULL, NULL, 'active', NULL, NULL),
(151, 338, 7, '2014-06-09', NULL, NULL, NULL, 'active', NULL, NULL),
(152, 339, 7, '2013-05-11', NULL, NULL, NULL, 'active', NULL, NULL),
(153, 341, 7, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(154, 342, 5, '2010-06-08', NULL, NULL, NULL, 'active', NULL, NULL),
(155, 345, 7, '2019-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(156, 346, 7, '2014-06-09', NULL, NULL, NULL, 'active', NULL, NULL),
(157, 349, 1, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(158, 350, 7, '2019-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(159, 354, 1, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(160, 355, 7, '2019-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(161, 359, 1, '2013-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(162, 360, 11, '2013-02-14', NULL, NULL, NULL, 'active', NULL, NULL),
(163, 361, 1, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(164, 362, 1, '2017-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(165, 363, 11, '2013-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(166, 364, 11, '2000-12-18', NULL, NULL, NULL, 'active', NULL, NULL),
(167, 368, 1, '1998-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(168, 370, 9, '2008-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(169, 376, 11, '2002-06-06', NULL, NULL, NULL, 'active', NULL, NULL),
(170, 377, 20, '2021-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(171, 378, 1, '2010-10-15', NULL, NULL, NULL, 'active', NULL, NULL),
(172, 380, 5, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(173, 383, 5, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(174, 389, 7, '2013-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(175, 393, 1, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(176, 394, 1, '1988-02-22', NULL, NULL, NULL, 'active', NULL, NULL),
(177, 396, 14, '2012-10-16', NULL, NULL, NULL, 'active', NULL, NULL),
(178, 399, 14, '2019-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(179, 401, 11, '2022-03-03', NULL, NULL, NULL, 'active', NULL, NULL),
(180, 404, 3, '2010-08-09', NULL, NULL, NULL, 'active', NULL, NULL),
(181, 405, 1, '2017-04-01', NULL, NULL, NULL, 'active', NULL, NULL),
(182, 408, 1, '2019-09-11', NULL, NULL, NULL, 'active', NULL, NULL),
(183, 409, 3, '1994-11-10', NULL, NULL, NULL, 'active', NULL, NULL),
(184, 412, 3, '2014-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(185, 413, 3, '2015-03-17', NULL, NULL, NULL, 'active', NULL, NULL),
(186, 415, 21, '2010-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(187, 418, 3, '2017-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(188, 420, 3, '2017-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(189, 421, 17, '2007-09-20', NULL, NULL, NULL, 'active', NULL, NULL),
(190, 423, 3, '2017-02-01', NULL, NULL, NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ntpayscales`
--

CREATE TABLE `ntpayscales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payband` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wef` date NOT NULL,
  `closedon` date DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ntpayscales`
--

INSERT INTO `ntpayscales` (`id`, `title`, `payband`, `wef`, `closedon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KLS Pay Scale', '11000-300-14000-350-17500-400-21500', '2023-01-01', NULL, 'active', '2023-10-09 04:32:52', '2023-10-09 04:32:52'),
(2, 'KLS Pay Scale', '11500-300-14500-350-18000-400-22000', '2023-01-01', NULL, 'active', '2023-10-09 04:42:14', '2023-10-09 04:42:14'),
(3, 'KLS Pay Scale', '13000-300-16000-350-19500-400-23500', '2023-01-01', NULL, 'active', '2023-10-09 04:45:31', '2023-10-09 04:45:31'),
(4, 'KLS Pay Scale', '14000-350-17500-400-21500-450-26000', '2023-01-01', NULL, 'active', '2023-10-09 06:00:33', '2023-10-09 06:00:33'),
(5, 'KLS Pay Scale', '15500-400-19500-450-24000-500-29000', '2023-01-01', NULL, 'active', '2023-10-09 06:02:59', '2023-10-09 06:02:59'),
(6, 'KLS Pay Scale', '19500-450-24000-500-29000-550-34500', '2023-01-01', NULL, 'active', '2023-10-09 06:15:14', '2023-10-09 06:15:14'),
(7, 'KLS Pay Scale', '15500-400-19500-450-24000-500-29000', '2023-01-01', NULL, 'active', '2023-10-09 06:17:16', '2023-10-09 06:17:16'),
(8, 'KLS Pay Scale', '12500-350-16000-400-20000-450-24500', '2023-01-01', NULL, 'active', '2023-10-09 06:19:03', '2023-10-09 06:19:03'),
(9, 'KLS Pay Scale', '14500-400-18500-450-23000-500-28000', '2023-01-01', NULL, 'active', '2023-10-09 06:19:55', '2023-10-09 06:19:55'),
(10, 'KLS Pay Scale', '18000-450-22000-450-26500-500-31500', '2023-01-01', NULL, 'active', '2023-10-09 06:20:53', '2023-10-09 06:20:53'),
(11, 'KLS Pay Scale', '18500-450-23000-500-28000-550-33500', '2023-01-01', NULL, 'active', '2023-10-09 06:21:37', '2023-10-09 06:21:37'),
(12, 'KLS Pay Scale', '27000-500-32000-550-37500-600-43500', '2023-01-01', NULL, 'active', '2023-10-09 06:23:02', '2023-10-09 06:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `ntpayscale_staff`
--

CREATE TABLE `ntpayscale_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `ntpayscale_id` bigint(20) UNSIGNED NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 1,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professional_activity_attendees`
--

CREATE TABLE `professional_activity_attendees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Local','National','International') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('Workshop','FDP','Seminar','webinar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsored` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professional_activity_conducteds`
--

CREATE TABLE `professional_activity_conducteds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Local','National','International') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('Workshop','Seminar','Webinar','FDP','STTP','Certification_Program') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsored` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsoring_agency_name_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professional_activity_resource_people`
--

CREATE TABLE `professional_activity_resource_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resource_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `journal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qual_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qual_shortname` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `qual_name`, `qual_shortname`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Secondary School Leaving Certificate', 'SSLC', 'Active', '2023-12-01 01:58:43', '2023-12-01 01:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_staff`
--

CREATE TABLE `qualification_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qualification_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `qualification_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_university` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` float NOT NULL,
  `yop` date NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `religion_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `religion_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hindu', 'active', NULL, NULL),
(3, 'Islam', 'active', '2023-09-09 01:38:25', '2023-09-09 02:03:00'),
(4, 'Jainism', 'active', '2023-09-09 01:40:19', '2023-09-09 01:40:19'),
(6, 'Buddhism', 'active', '2023-09-09 01:40:49', '2023-09-09 01:40:49'),
(7, 'Christian', 'active', '2023-11-28 04:46:33', '2023-11-28 04:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `renumerationheads`
--

CREATE TABLE `renumerationheads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('UG','PG') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UG',
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salaryheads`
--

CREATE TABLE `salaryheads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salary_head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `religion_id` bigint(20) UNSIGNED NOT NULL,
  `castecategory_id` bigint(20) UNSIGNED NOT NULL,
  `gender` enum('female','male','others') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_increment` date DEFAULT NULL,
  `date_of_superanuation` date NOT NULL,
  `date_of_confirmation` date DEFAULT NULL,
  `bloodgroup` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_card` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adhar_card` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactno` bigint(20) DEFAULT NULL,
  `aicte_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vtu_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esi_no` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `un_no` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_no` bigint(21) DEFAULT NULL,
  `emergency_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_type` enum('Teaching','Non-Teaching') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Teaching',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `fname`, `mname`, `lname`, `local_address`, `permanent_address`, `dob`, `doj`, `religion_id`, `castecategory_id`, `gender`, `date_of_increment`, `date_of_superanuation`, `date_of_confirmation`, `bloodgroup`, `pan_card`, `adhar_card`, `contactno`, `aicte_id`, `vtu_id`, `esi_no`, `un_no`, `emergency_no`, `emergency_name`, `employee_type`, `created_at`, `updated_at`) VALUES
(11, 29, 'Vaibhav', 'R', 'Chate', 'Plot No. 134, Jaya Nagar, near Hindalaga Road, Belgaum.', 'Plot No. 134, Jaya Nagar, near Hindalaga Road, Belgaum.', '1984-01-05', '2009-09-24', 1, 29, 'male', NULL, '2042-01-31', NULL, 'AB+', NULL, NULL, 7406475096, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 04:53:06', '2023-11-28 04:53:06'),
(12, 34, 'Vikas', 'L', 'Gingine', '272 / E, Mahatma Phule Road, Shahapur, Belagavi', '203, Sharada Apartment, Nagal Park, Kolhapur-416 003', '1989-10-02', '2017-07-01', 1, 10, 'male', NULL, '2047-10-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:10:56', '2023-11-28 05:10:56'),
(13, 35, 'B', 'S', 'Ingole', 'H. No. 4056, Kangral Galli, Belgaum.', 'H. No. 4056, Kangral Galli, Belgaum.', '1984-01-01', '2005-07-16', 1, 10, 'male', NULL, '2042-10-31', NULL, 'B+', NULL, '369056514892', 9611955539, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 05:14:21', '2023-11-28 05:14:21'),
(14, 36, 'Nitendra', 'Nagesh', 'Palankar', '6th cross, Radha Krishna Marg, Hindwadi,  Belagavi-590 006', '6th cross, Radha Krishna Marg, Hindwadi,  Belagavi-590 006', '1988-12-03', '2018-12-02', 1, 27, 'male', NULL, '2046-03-31', NULL, 'A+', NULL, NULL, 9964545852, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:19:33', '2023-11-28 05:19:33'),
(15, 37, 'Madhusudan', 'G', 'Kalibhat', 'House No.25/D, Somwarpeth, Tilakwadi, Belagavi 590006.', 'House No.25/D, Somwarpeth, Tilakwadi, Belagavi 590006.', '1987-12-24', '2022-10-03', 1, 5, 'male', NULL, '2045-12-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:23:54', '2023-11-28 05:23:54'),
(16, 38, 'Deepak', 'B', 'Kulkarni', 'Flat No. 12, Maharaja Residency Swamy Vivekanand Road, Angol, Belgaum.', 'Flat No. 12, Maharaja Residency Swamy Vivekanand Road, Angol, Belgaum.', '1966-02-10', '1989-09-05', 1, 5, 'male', NULL, '2024-02-29', NULL, 'B+', 'ADUPK3362Q', '589966350407', 9480456340, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:34:13', '2023-11-28 05:34:13'),
(17, 39, 'Shivamanth', 'S', 'Angadi', 'House No.129,Hothepeth, near Navodaya School 587287', 'House No.129,Hothepeth, near Navodaya School 587287', '1986-06-30', '2023-01-03', 1, 44, 'male', NULL, '2044-06-30', NULL, 'B+', NULL, NULL, 7984785248, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:35:53', '2023-11-28 05:35:53'),
(18, 40, 'Mahesh', 'M', 'Kaddyagol', 'H. No. 266, Vittal Nagar, Honnihal, Post  : Balekundri, Tq & Dist :  Belagavi-591 103', 'H. No. 1, Kurbur galli, Honnihal, Post  : Balekundri, Tq & Dist :  Belagavi-591 103', '1993-10-06', '2016-11-02', 1, 13, 'male', NULL, '2051-10-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 05:36:38', '2023-11-28 05:36:38'),
(19, 41, 'Leeladhar', 'S', 'Pammar', 'House No.697/D-23, Patribasava Nagar, 3rd Cross, Bailhongal Town Belagavi  591102', 'House No.697/D-23, Patribasava Nagar, 3rd Cross, Bailhongal Town Belagavi  591102', '1985-07-15', '2023-01-09', 1, 45, 'male', NULL, '2043-07-31', NULL, 'B+', NULL, NULL, 8956424579, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:40:13', '2023-11-28 05:40:13'),
(20, 42, 'Vinayak', 'B', 'Badiger', 'Laxmi nivas, H. No. 11, Cross No.  15, Gokul Nagar, Mutaga, Belguam.', 'Laxmi nivas, H. No. 11, Cross No.  15, Gokul Nagar, Mutaga, Belguam.', '1977-08-21', '2008-12-01', 1, 14, 'male', NULL, '2035-08-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 05:44:24', '2023-11-28 05:44:24'),
(21, 43, 'Shweta', 'S', 'Patil', 'House No.B.C.127,havelock road camp, Belagavi 590001', 'House No.B.C.127,havelock road camp, Belagavi 590001', '1978-04-02', '2023-04-09', 4, 46, 'female', NULL, '2036-04-30', NULL, 'B+', NULL, NULL, 8095882666, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:49:33', '2023-11-28 05:49:33'),
(22, 44, 'Ramesh', '-', 'Bantwal', 'Dhavalagiri, Vijaynagar LO Padil, Bannur,Puttur,DK 574203', 'Dhavalagiri, Vijaynagar LO Padil, Bannur,Puttur,DK 574203', '1966-09-15', '2022-10-10', 1, 48, 'male', NULL, '2024-09-30', NULL, 'B+', 'AXZPR6416K', '989588933652', 8310797126, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:51:14', '2023-11-28 05:51:14'),
(23, 45, 'Raghunath', 'R', 'Deshpande', 'Shri Chidambar Krupa, Plot No. 2574, Mandoli  Road, Bhavani Nagar, Belgaum.', 'Shri Chidambar Krupa, Plot No. 2574, Mandoli  Road, Bhavani Nagar, Belgaum.', '1981-06-01', '2009-05-10', 1, 25, 'male', NULL, '2039-06-30', NULL, 'AB+', NULL, NULL, 9448230448, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:54:21', '2023-11-28 05:54:21'),
(24, 46, 'Kanchan', 'B', 'Kanagali', 'H. No. 4805/24, S.S.  Samabrekar Building, 3rd Main, Shivaji Nagar, Belgaum.', 'H. No. 4805/24, S.S.  Samabrekar Building, 3rd Main, Shivaji Nagar, Belgaum.', '1979-02-03', '2011-09-28', 1, 20, 'female', NULL, '2037-02-28', NULL, 'O+', NULL, NULL, 9480539679, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 05:58:58', '2023-11-28 05:58:58'),
(25, 47, 'Vani', 'P', 'Datar', 'Maheshwari, G-4, 10th Cross, Bhagyanagar, Hindwadi, Belgaum.', '17.02.2018. Flat No. 301, Druvankur Residency, Hindu nagar, Belagavi.', '1981-11-07', '2003-11-15', 1, 5, 'female', NULL, '2039-07-31', NULL, 'O+', 'ALHPD7365H', '829073481984', 9480001656, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:00:09', '2023-11-28 06:00:09'),
(26, 48, 'Dharma', 'C', 'Madiger', '6th cross, Gokul Nagar, Mutaga, Belgaum', '6th cross, Gokul Nagar, Mutaga, Belgaum', '1991-08-02', '2012-10-16', 1, 49, 'male', NULL, '2049-08-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 06:02:01', '2023-11-28 06:02:01'),
(27, 49, 'Suraj', 'S', 'Balikai', 'Laxmi Nagar, 2nd Cross, Kakari, Belgaum-591 113', 'Laxmi Nagar, 2nd Cross, Kakari, Belgaum-591 113', '1994-06-24', '2012-10-16', 1, 11, 'male', NULL, '2052-06-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 06:06:38', '2023-11-28 06:06:38'),
(28, 50, 'Parag', 'V', 'Datar', 'Flat No. 301, Druvankur Residency, Hindu nagar, Belagavi', 'Flat No. 301, Druvankur Residency, Hindu nagar, Belagavi', '1980-05-08', '2005-08-18', 1, 5, 'male', NULL, '2038-05-31', NULL, 'B+', 'ALHPD7390J', '986759834116', 9481007639, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:08:09', '2023-11-28 06:08:09'),
(29, 51, 'Archana', 'S', 'Shagoti', 'W/o Arjun Virupaxi, Plot No. 18, Sector No. 5, Shri NAGAR, Belgaum.,', 'W/o Arjun Virupaxi, Plot No. 18, Sector No. 5, Shri NAGAR, Belgaum.,', '1988-07-01', '2013-05-03', 1, 20, 'female', NULL, '2046-07-31', NULL, 'O+', NULL, NULL, 9886044742, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:09:09', '2023-11-28 06:09:09'),
(30, 52, 'Sanjeev', 'A', 'Khanapuri', 'At :  Yelimunnoli, Tq  :  Hukkeri,  Belgaum.', 'At :  Yelimunnoli, Tq  :  Hukkeri,  Belgaum.', '1988-06-27', '2013-02-11', 1, 11, 'male', NULL, '2046-06-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 06:10:29', '2023-11-28 06:10:29'),
(31, 53, 'Abhaykumar', 'D', 'Janaj', 'C/o V.B. Shirur, Plot No. 7,  Sl. No. 89/1, Adarsha Nagar, Belgaum.', 'C/o V.B. Shirur, Plot No. 7,  Sl. No. 89/1, Adarsha Nagar, Belgaum.', '1968-06-15', '2006-08-07', 4, 46, 'female', NULL, '2026-06-26', NULL, 'B+', 'AHNPJ8056D', '271602713771', 9480398581, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:14:29', '2023-11-28 06:14:29'),
(32, 54, 'Rajendra', 'S', 'Thakai', 'Pushparaj, H. No. 741/E6, 1st Cross, Vidyanagar, Angol, Belgaum.', 'Pushparaj, H. No. 741/E6, 1st Cross, Vidyanagar, Angol, Belgaum.', '1979-03-19', '2008-03-01', 4, 50, 'male', NULL, '2037-03-31', NULL, 'O+', NULL, NULL, 9986697291, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:15:35', '2023-11-28 06:15:35'),
(33, 55, 'Rajani', 'S', 'Togarsi', 'C/o A.V. Togarsi, Plot No. 271, Ist stage, 1st cross, Hanuman nagar, Belgaum-590 001', 'D / o S.V. Togarsi, Highschool road,  Po : Rattihalli,  Tq  :  Hirekerur-581 116', '1989-07-26', '2013-11-07', 1, 20, 'female', NULL, '2047-07-31', NULL, 'A+', NULL, NULL, 95382974541, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:20:01', '2023-11-28 06:20:44'),
(34, 56, 'Rahul', '-', 'Suryavanshi', 'Plot No. 776, Khanapur Road, Near Big Bazaar, Tilakwadi, Belghaum', 'Plot No. 776, Khanapur Road, Near Big Bazaar, Tilakwadi, Belghaum', '1986-12-13', '2012-01-12', 1, 10, 'female', NULL, '2044-12-31', NULL, 'A+', 'CJRPS4979J', '773742412181', 7411439644, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:20:08', '2023-11-28 06:20:08'),
(35, 57, 'Keerti', 'M', 'Nashimath', '925, Kuvempu Nagar, Belgaum.', 'Guru prasad Nilaya,  Siddarameshwar Colony, 7th cross, Jamakhandi, Bagalkot.', '1988-11-25', '2013-12-26', 1, 20, 'female', NULL, '2046-11-30', NULL, 'A+', NULL, NULL, 7204313708, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:24:26', '2023-11-28 06:24:26'),
(36, 58, 'Balawant', 'K', 'Patil', 'H, No. 2702, Kala Prasad,  Udyambag  Road, Angol,  Belgaum.', 'H, No. 2702, Kala Prasad,  Udyambag  Road, Angol,  Belgaum.', '1982-11-24', '2012-05-16', 1, 10, 'female', NULL, '2040-11-30', NULL, 'A+', 'BKMPP8821M', '249514819068', 9972403678, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:25:31', '2023-11-28 06:25:31'),
(37, 59, 'Sujay', 'C', 'Deshpande', 'H. No. 305, Flat S-1, 2nd Floor, Sai Srushti Apartments, Roy Road, Tilakwadi, Belagavi.', 'H. No. 309 / A, G-2, Gurukrupa appartment, Roy Road, Tilakwadi, Belgaum-590 006.', '1988-07-18', '2014-01-09', 1, 5, 'male', NULL, '2046-07-31', NULL, 'A+', NULL, NULL, 7829558350, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:28:16', '2023-11-28 06:28:16'),
(38, 60, 'Avinasha', 'V', 'Deshpande', 'Shrinivas Nilaya, Block-B, 2nd Cross, Charantimath Garden, Dharwad', 'Shrinivas Nilaya, Block-B, 2nd Cross, Charantimath Garden, Dharwad', '1982-07-22', '2012-07-16', 1, 5, 'male', NULL, '2040-07-31', NULL, 'B-', 'BLAPD4486K', '361933433444', 9663356371, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:30:33', '2023-11-28 06:30:33'),
(39, 61, 'Nitin', 'A', 'Deshpande', 'Plot No. 33, Sector 8, CTS 6373, M.M. Extension, Anyaneya Nagar, Belgaum-590 016', 'Plot No. 33, Sector 8, CTS 6373, M.M. Extension, Anyaneya Nagar, Belgaum-590 016', '1988-03-14', '2014-01-09', 1, 5, 'male', NULL, '2046-03-31', NULL, 'A+', NULL, NULL, 7795822625, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:32:08', '2023-11-28 06:32:08'),
(40, 62, 'Sudhakar', 'C', 'J', 'Shubha Ganga Nilaya, Basaveshwar Street, Jayanagar,  Chickmangalur-577101', 'Shubha Ganga Nilaya, Basaveshwar Street, Jayanagar,  Chickmangalur-577101', '1988-03-13', '2013-03-15', 1, 20, 'male', NULL, '2046-03-31', NULL, 'O+', 'CQUPS6782F', '211857331402', 8105281894, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:34:36', '2023-11-28 06:34:36'),
(41, 63, 'Basavaraj', 'S', 'Saunshi', 'Primary school backside,  At post : Maranabeed,  Tq :  Hangal,   Dist  : Haveri-581 101', 'Primary school backside,  At post : Maranabeed,  Tq :  Hangal,   Dist  : Haveri-581 101', '1987-06-01', '2014-01-10', 1, 20, 'male', NULL, '2045-06-30', NULL, 'null', NULL, NULL, 8904259703, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:35:38', '2023-11-28 06:35:38'),
(42, 64, 'Sateesh', 'N', 'Doddamani', 'C/o Rajiv Yadhalli, Mahantesh Nilay CTS No. 4856 / 100, 1st main 4th cross, Sadashiva nagar, Belgaum', 'Bhagyashree  laxmi nilay, At : Salahalli,   Tq : Ramadurga, Dist :  Belgaum', '1985-07-25', '2013-09-14', 1, 20, 'male', NULL, '2043-07-31', NULL, 'A-', 'AUTPD3493K', '564385060413', 9591209938, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:20:04', '2023-11-28 23:20:04'),
(43, 65, 'Namrata', 'M', 'Angadi', 'D / o M.B. Angadi,  C/o C. G. Belagavi Teacher, H. No. 705 / B, Shettagar Chawl, Near Bharat Talkies, Bailhongal-591 102', 'D / o M.B. Angadi,  C/o C. G. Belagavi Teacher, H. No. 705 / B, Shettagar Chawl, Near Bharat Talkies, Bailhongal-591 102', '1988-01-27', '2014-08-01', 1, 20, 'female', NULL, '2046-01-31', NULL, 'O+', NULL, NULL, 8147231096, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:20:22', '2023-11-28 23:20:22'),
(44, 66, 'Hanmant', 'R', 'Kulkarni', 'PloT No. 156, Laxmi Nivas, KSRTC colony, Shindoli, Belgaum.', 'PloT No. 156, Laxmi Nivas, KSRTC colony, Shindoli, Belgaum.', '1984-07-30', '2013-02-13', 1, 5, 'male', NULL, '2042-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:22:16', '2023-11-28 23:22:16'),
(45, 67, 'Rudresh', 'B', 'Magadum', 'S/o Babu R Magadum, At post  :  Amminabhavi, Tq  :  Hukkeri, Dist  :  Belgaum-591 236', 'S/o Babu R Magadum, At post  :  Amminabhavi, Tq  :  Hukkeri, Dist  :  Belgaum-591 236', '1987-07-09', '2014-02-15', 1, 20, 'male', NULL, '2045-07-31', NULL, 'B+', 'BWRPM9247F', '689520342446', 7760174652, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:24:51', '2023-11-28 23:24:51'),
(46, 68, 'Shri. B', 'S', 'Ingole', 'H. No. 4056, Kangral Galli, Belgaum.', 'H. No. 4056, Kangral Galli, Belgaum.', '1984-10-27', '2005-07-06', 1, 10, 'male', NULL, '2042-10-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:28:11', '2023-11-28 23:28:11'),
(47, 69, 'Uma', 'G', 'Hullur', 'W / o Dr. Prashant G.J.,  S.S. No.  215 /A, Block No. 10, Anand Nagar, 1st Cross, Belgaum - 590 003', 'W / o Dr. Prashant G.J.,  S.S. No.  215 /A, Block No. 10, Anand Nagar, 1st Cross, Belgaum - 590 003', '1977-11-06', '2014-09-02', 1, 20, 'female', NULL, '2035-11-30', NULL, 'A+', NULL, NULL, 9481009194, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:28:13', '2023-11-28 23:28:13'),
(48, 70, 'Mr. Amol', 'K', 'Gadkari', 'H. No. 141, Voshnu galli, M-Vadagaon, Belgaum.', 'H. No. 141, Voshnu galli, M-Vadagaon, Belgaum.', '1984-01-04', '2013-09-02', 1, 10, 'male', NULL, '2042-01-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:32:32', '2023-11-28 23:32:32'),
(49, 71, 'Ganapati', 'G', 'Hegde', 'C/o B.s. Badiger, No. 35, near KLE College, Angol,  Belguam.', 'C/o B.s. Badiger, No. 35, near KLE College, Angol,  Belguam.', '1985-05-21', '2012-08-01', 1, 15, 'male', NULL, '2043-05-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:32:52', '2023-11-28 23:32:52'),
(50, 73, 'Ramesh', 'G', 'B', 'C/o Iranna Makanur, 2nd Main, 2nd  cross,  Ishwar Nagar,  Ranebennur-581 115', 'S/o Basararah G.C, Baligatte,  At post : Byalahal, Chitradurga-577 541', '1986-07-30', '2015-02-18', 1, 20, 'male', NULL, '2044-07-31', NULL, 'AB+', 'BFDPB6330K', '436050871420', 9986586838, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:33:58', '2023-11-28 23:33:58'),
(51, 74, 'Ms. Laxmi', 'K', 'Chougule', 'H. No. 828 / 3, Pawar Chawl,  Vaccine Depot Road, Tilakwadi, Belgaum.', 'H. No. 828 / 3, Pawar Chawl,  Vaccine Depot Road, Tilakwadi, Belgaum.', '1974-09-07', '2013-03-05', 1, 10, 'female', NULL, '2032-09-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:37:20', '2023-11-28 23:37:20'),
(52, 75, 'Veerabhadra', 'G', 'Kamashetti', 'H. No. 63, Shahapur Galli,  Dhamane, Belgaum.', 'H. No. 63, Shahapur Galli,  Dhamane, Belgaum.', '1985-08-20', '2006-02-06', 1, 20, 'male', NULL, '2043-08-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:39:20', '2023-11-28 23:39:20'),
(53, 76, 'Nikhil', 'R', 'Chitragar', 'H. No. 187 / 2B, 3rd cross, Vivekanand Nagar, Gokak-591 307', 'H. No. 187 / 2B, 3rd cross, Vivekanand Nagar, Gokak-591 307', '1988-04-24', '2015-02-18', 1, 5, 'male', NULL, '2046-04-30', NULL, 'O+', 'ANLPC6123A', '713768364759', 9036855485, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:40:40', '2023-11-28 23:40:40'),
(54, 77, 'Pavan', 'V', 'Gudi', '5th Cross, Chidambar Nagar, Belagavi-590 008', 'H. No. 40, Srinagar, Unkal,, Hubali-580 031.', '1987-12-17', '2015-07-01', 1, 5, 'male', NULL, '2045-12-31', NULL, 'null', NULL, NULL, 9036267704, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:41:22', '2023-11-28 23:41:22'),
(55, 78, 'Mr.Sandeep', 'R', 'Mathad', 'H. No. L.I.G-25, Ashok Nagar,  Belagavi-590 016.', 'H. No. L.I.G-25, Ashok Nagar,  Belagavi-590 016.', '1983-07-08', '2015-11-02', 1, 5, 'male', NULL, '2041-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:41:25', '2023-11-28 23:41:25'),
(56, 79, 'Somnath', 'M', 'Khot', 'C/O  S.N. Birje, Plot No. 2042, Sector No. 9, M.M. Extension, Belagavi-590 016', 'C/O  S.N. Birje, Plot No. 2042, Sector No. 9, M.M. Extension, Belagavi-590 016', '1986-11-09', '2015-07-06', 1, 20, 'male', NULL, '2044-11-30', NULL, 'O+', NULL, NULL, 9449321519, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:45:15', '2023-11-28 23:45:15'),
(57, 80, 'Mr. Sanjay', 'R', 'Sullad', 'H. No. 469 / 12-A, Gunjatkar Buiilding, Shiv-shakti Nagar, Angol,  Belagavi-590 006.', 'H. No. 469 / 12-A, Gunjatkar Buiilding, Shiv-shakti Nagar, Angol,  Belagavi-590 006.', '1991-01-21', '2015-12-01', 1, 20, 'male', NULL, '2049-01-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:45:32', '2023-11-28 23:45:32'),
(58, 81, 'Vinay', 'J', 'Shetty', 'H. No. 182, Mallapur, Karwar Road,  Kerwadi-5981 400', 'H. No. 182, Mallapur, Karwar Road,  Kerwadi-5981 400', '1988-05-21', '2014-08-16', 1, 5, 'male', NULL, '2046-05-31', NULL, 'null', 'CXGPS7517H', '412984366102', 9482377709, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:46:17', '2023-11-28 23:46:17'),
(59, 82, 'Vikhyat', 'S', 'Katti', '30 /A, Subhash Chandra Nagar, Angol Extension, Belagavi-590 006.', '30 /A, Subhash Chandra Nagar, Angol Extension, Belagavi-590 006.', '1987-11-26', '2015-08-20', 1, 20, 'male', NULL, '2045-11-30', NULL, 'null', NULL, NULL, 8088007011, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:50:16', '2023-11-28 23:50:16'),
(60, 83, 'Mr.Gajanan', 'L', 'Melge', 'House No.400,Khanapur Belagavi, Road Garlagunji, Garalgunji-Khanapur Belagavi  591302', 'House No.400,Khanapur Belagavi, Road Garlagunji, Garalgunji-Khanapur Belagavi  591302', '1994-07-18', '2023-05-23', 1, 10, 'male', NULL, '2052-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:54:03', '2023-11-28 23:54:03'),
(61, 84, 'Mr. Dattatraya', 'B', 'Mahajan', 'PloT No. 156, Laxmi Nivas, KSRTC colony, Shindoli, Belgaum.', 'PloT No. 156, Laxmi Nivas, KSRTC colony, Shindoli, Belgaum.', '1987-11-01', '2013-02-13', 1, 5, 'male', NULL, '2045-11-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-28 23:56:58', '2023-11-28 23:56:58'),
(62, 85, 'Shashank', 'S', 'Bangi', 'Shanta Nilaya, Ganeshour Galli, Shahapur, Belagavi', 'C/o C.S. Bangi Advocate, Mudhol Road, Jamakhandi', '9991-11-09', '2016-07-15', 1, 20, 'male', NULL, '2049-11-30', NULL, 'A+', NULL, NULL, 9036587871, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 23:57:05', '2023-11-28 23:57:05'),
(63, 86, 'Shri. Nagesh', 'B', 'Handigol', 'Plot No. 64, Hindalnagar, Near Ganapati Temple, Shindoli, Belgaum.', 'Plot No. 64, Hindalnagar, Near Ganapati Temple, Shindoli, Belgaum.', '1982-07-12', '2009-01-01', 1, 5, 'male', NULL, '2040-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:01:34', '2023-11-29 00:01:34'),
(64, 87, 'Sachin', 'R', 'Kulkarni', 'S/o Ramesh Kulkarni, Kanakdas Badavane, Plot No. 46, Sanjivani Nivas, 3rd  stage, Vijaypur.', 'S/o Ramesh Kulkarni, Kanakdas Badavane, Plot No. 46, Sanjivani Nivas, 3rd  stage, Vijaypur.', '1989-11-18', '2017-07-03', 1, 5, 'male', NULL, '2047-11-30', NULL, 'A-', NULL, NULL, 9742980992, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 00:03:13', '2023-11-29 00:03:13'),
(65, 88, 'Akshay', 'M', 'Khatavkar', 'At post  :  Naganwadi,  Tq :  Chandgad, Dist  :  Kolhapur', 'At post  :  Naganwadi,  Tq :  Chandgad, Dist  :  Kolhapur', '1994-05-27', '2016-09-08', 1, 16, 'male', NULL, '2052-05-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:05:24', '2023-11-29 00:05:24'),
(66, 89, 'Mr. Shridhar', 'R', 'Hulikavi', 'Flat No. 1, Mayura Residency, 4th Cross Byhagyanagar,  Belagavi-590 006.', 'Flat No. 1, Mayura Residency, 4th Cross Byhagyanagar,  Belagavi-590 006.', '1986-02-13', '2015-11-03', 1, 5, 'male', NULL, '2044-02-29', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:08:42', '2023-11-29 00:08:42'),
(67, 90, 'Kartik', 'R', 'Kulkarni', 'Plot No.104, Sector No.5, Krishna Kunj, Shree nagar, MM Extension Belagavi 590016', 'Plot No.104, Sector No.5, Krishna Kunj, Shree nagar, MM Extension Belagavi 590016', '1944-10-14', '2022-10-21', 1, 5, 'male', NULL, '2052-10-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 00:12:08', '2023-11-29 00:12:08'),
(68, 91, 'Mr. Avadhoot', 'A', 'Daptardar', 'H. No. 315 /2, Patil Gali, Vadagaon, Belagavi-590 005', 'H. No. 315 /2, Patil Gali, Vadagaon, Belagavi-590 005', '1989-10-05', '2015-11-16', 1, 5, 'male', NULL, '2047-10-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:12:17', '2023-11-29 00:12:17'),
(69, 92, 'Shri. Sachin', 'A', 'Kadad', 'H. No. 269/A, Konwal Galli, Mahaveer Nagar, Angol, Belgaum.', 'H. No. 269/A, Konwal Galli, Mahaveer Nagar, Angol, Belgaum.', '1983-03-23', '2008-12-01', 1, 12, 'male', NULL, '2041-03-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:16:02', '2023-11-29 00:16:02'),
(70, 93, 'V', 'L', 'Katti', 'H. No. 125, Vaze Galli, Vaze  Chal, Vadagaon, Belgaum.', 'H. No. 125, Vaze Galli, Vaze  Chal, Vadagaon, Belgaum.', '1972-12-17', '2008-12-01', 1, 5, 'male', NULL, '2030-12-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:18:48', '2023-11-29 00:18:48'),
(71, 94, 'K', 'P', 'Thejaswi', 'Vrushab Giri, 3rd Cross, A Block, Basaveshwar Nagar, Tq &  Dist  :  Haveri-581 110.', 'Vrushab Giri, 3rd Cross, A Block, Basaveshwar Nagar, Tq &  Dist  :  Haveri-581 110.', '1992-06-18', '2017-07-07', 1, 20, 'male', NULL, '2050-06-30', NULL, 'null', NULL, NULL, 7204523446, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 00:19:29', '2023-11-29 00:19:29'),
(72, 95, 'Mr. Ashish', 'J', 'Balikai', 'H. No. 568/3, Bhendigeri Chal, near Marathi  School No. 34, Raghunath Peth, Angol', 'H.No.851,\" Ahimsa\", 4th Cross Vasant Vihar colony, 2nd Stage Rani Channamma Nagar, Belagavi 590006', '1984-01-13', '2012-11-06', 1, 11, 'male', NULL, '2042-01-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:20:35', '2023-11-29 00:20:35'),
(73, 96, 'Mr.  Bharma', 'I', 'Hanji', 'Halegudaganatti,  Po :Yamakanmardi Tq  :  Hukkeri,   Dist  :  Belgaum.', 'Halegudaganatti,  Po :Yamakanmardi Tq  :  Hukkeri,   Dist  :  Belgaum.', '1992-02-05', '2012-08-01', 1, 20, 'male', NULL, '2050-02-28', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:25:29', '2023-11-29 00:25:29'),
(74, 97, 'Balesh', 'B', 'Hagedal', '347, Ganesh Vandana Apartment, Nehru Road, Tilakwadi, Belagavi-590 006.', '347, Ganesh Vandana Apartment, Nehru Road, Tilakwadi, Belagavi-590 006.', '1993-06-01', '2019-09-11', 1, 17, 'male', NULL, '2051-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:27:49', '2023-11-29 00:27:49'),
(75, 98, 'Harshit', 'B', 'Kulkarni', 'H. No. 138, Koppal Building, 5th cross, Devasthan Marg, Chidambag Nagar, Belgaum', 'H. No. 138, Koppal Building, 5th cross, Devasthan Marg, Chidambag Nagar, Belgaum', '1986-09-20', '2010-04-12', 1, 25, 'male', NULL, '2044-09-30', NULL, 'B+', NULL, NULL, 9742123761, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 00:28:08', '2023-11-29 00:28:08'),
(76, 99, 'Shri. B', 'S', 'Kalburgi', 'Plat No. 1, 3rd Floor, Tejashwita  Complex, CTS No. 1489,  Deshpande Galli, Belgaum.', 'Plat No. 1, 3rd Floor, Tejashwita  Complex, CTS No. 1489,  Deshpande Galli, Belgaum.', '1969-03-27', '1989-03-04', 1, 21, 'male', NULL, '2027-03-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:33:11', '2023-11-29 00:33:11'),
(77, 100, 'J', 'K', 'Kittur', 'C/o K.V. Dharwarkar, 1136, Ananrtshayan Galli, Belgaum', 'C/o K.V. Dharwarkar, 1136, Ananrtshayan Galli, Belgaum', '1966-08-21', '1997-09-02', 1, 5, 'male', NULL, '2024-08-31', NULL, 'B+', NULL, NULL, 9449735400, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 00:35:21', '2023-11-29 00:35:21'),
(78, 101, 'Shri Balveer', 'S', 'Hebballi', 'H. No. 1996, Ganapat Galli, Belgaum.', 'H. No. 1996, Ganapat Galli, Belgaum.', '1974-09-11', '2010-09-14', 1, 22, 'male', NULL, '2032-09-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:37:01', '2023-11-29 00:37:01'),
(79, 102, 'Prakash', 'G', 'Kamashetti', 'H. No. 63, Shahapur Galli,  Dhamane, Belgaum.', 'H. No. 63, Shahapur Galli,  Dhamane, Belgaum.', '1989-07-10', '2019-09-20', 1, 20, 'male', NULL, '2047-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:37:58', '2023-11-29 00:37:58'),
(80, 103, 'S', '-', 'Shivakumar', 'No. 50, Saptagiri, 5th   Cross, Krishi Colony, Bhagyanagar, Belguam', 'No. 50, Saptagiri, 5th   Cross, Krishi Colony, Bhagyanagar, Belguam', '1966-01-17', '1998-09-21', 1, 20, 'male', NULL, '2024-01-31', NULL, 'O+', NULL, NULL, 9448543666, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 00:39:18', '2023-11-29 00:39:18'),
(81, 104, 'Supriya', '-', 'Shanabhag', 'Vaikunta, 4877/24, Jadhav Nagar, Belgaum', 'Vaikunta, 4877/24, Jadhav Nagar, Belgaum', '1978-06-05', '2004-03-01', 1, 51, 'female', NULL, '2036-06-30', NULL, 'O+', 'BADPS4609D', '764613566831', 9480001656, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 00:40:17', '2023-11-29 00:40:17'),
(82, 105, 'Maharudra', 'S', 'Patil', 'Surabhi, Plot No. 13,  Scheme 13, Doordarshan Nagar, Belgaum.', 'Surabhi, Plot No. 13,  Scheme 13, Doordarshan Nagar, Belgaum.', '1969-10-30', '1996-03-09', 1, 21, 'male', NULL, '2027-10-31', NULL, 'O+', NULL, NULL, 9880354230, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 00:44:41', '2023-11-29 00:44:41'),
(83, 106, 'Shri Raghavendra', 'G', 'Harihar', 'Block No.3, Pruthvi Towers, Maruti Nagar, Airport Road, next to S.C.Motors, Belagavi 590016', 'House No.11, tejaswinagar, Dharwad -580002', '1968-07-04', '2014-12-01', 1, 5, 'male', NULL, '2026-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:49:29', '2023-11-29 00:49:29'),
(84, 107, 'Venkatesh', 'N', 'Satwik', 'Plot No. 53, 7th cross, Gokul Nagar, Mutaga, Belgaum.', 'Plot No. 53, 7th cross, Gokul Nagar, Mutaga, Belgaum.', '1974-06-02', '1997-09-03', 1, 29, 'male', NULL, '2032-06-30', NULL, 'O+', NULL, NULL, 9611606975, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 00:50:51', '2023-11-29 00:50:51'),
(85, 108, 'Vinayak', 'T', 'Hendre', 'At post  :  Tadas,  TQ   :  Shiggaon, Dist  :  Haveri.', 'At post  :  Tadas,  TQ   :  Shiggaon, Dist  :  Haveri.', '1987-04-30', '2019-09-16', 1, 16, 'male', NULL, '2045-04-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:55:50', '2023-11-29 00:55:50'),
(86, 109, 'Shridhar', 'M', 'Jagelekar', 'House No.1023,Main Road, Jyoti Nagar, Kangrali-KH Belagavi -590010', 'House No.1023,Main Road, Jyoti Nagar, Kangrali-KH Belagavi -590010', '1980-07-10', '2022-08-01', 1, 10, 'male', NULL, '2038-07-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 00:56:42', '2023-11-29 00:56:42'),
(87, 110, 'Vijay', '-', 'Shirvalkar', 'Plot No.23,survey No.205,OM YASH Building Kanakadas colony,ambedkar Nagar, Near Somangiri Talav Anagol,Tilakwadi -Belagavi', 'Plot No.23,survey No.205,OM YASH Building Kanakadas colony,ambedkar Nagar, Near Somangiri Talav Anagol,Tilakwadi -Belagavi', '1976-01-18', '2021-02-01', 1, 10, 'male', NULL, '2034-01-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:02:51', '2023-11-29 01:04:37'),
(88, 111, 'Anupama', 'N', 'Kallol', '1096/C, Bhagarati, Anantshayan Galli, Belgaum.', '1096/C, Bhagarati, Anantshayan Galli, Belgaum.', '1968-06-27', '1997-02-11', 1, 5, 'female', NULL, '2026-06-30', NULL, 'A+', NULL, NULL, 9880354230, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:02:55', '2023-11-29 01:02:55'),
(89, 112, 'Pradeep', 'Vishnu', 'Patil', 'House No.351, Mahadwar Road , C.R.No.3, Belagavi 590003', 'House No.351, Mahadwar Road , C.R.No.3, Belagavi 590003', '1996-11-18', '2023-07-17', 1, 10, 'male', NULL, '2054-11-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:04:06', '2023-11-29 01:04:06'),
(90, 113, 'Akshay', 'B', 'Patil', 'House No.1175, Margai Galli Kakati Belagavi 591113', 'House No.1175, Margai Galli Kakati Belagavi 591113', '1995-04-11', '2023-10-03', 1, 20, 'male', NULL, '2053-04-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:07:46', '2023-11-29 01:07:46'),
(91, 114, 'P', 'V', 'Gopikrishna', 'H. No. 191, Shri Gajanan Krupa, Chidambar Nagar, Belgaum.', 'H. No. 191, Shri Gajanan Krupa, Chidambar Nagar, Belgaum.', '1965-04-05', '2023-06-05', 1, 52, 'male', NULL, '2036-06-30', NULL, 'AB+', 'ADMPP4645H', '293660862948', 9480422336, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:08:02', '2023-11-29 01:08:02'),
(92, 115, 'Mahantesh', 'M', 'Nadakatti', 'A-402, Ganesh Park Appts., 2nd Cross, Bhagyanagar, Tilakwadi, Belgaum.', 'A-402, Ganesh Park Appts., 2nd Cross, Bhagyanagar, Tilakwadi, Belgaum.', '1968-03-16', '1999-10-30', 1, 21, 'male', NULL, '2026-03-31', NULL, 'A+', NULL, NULL, 9986157902, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:12:19', '2023-11-29 01:12:19'),
(93, 116, 'Shri Gururaj', 'M', 'Saudatti', 'Plot No. 39, Near Parvati Nagar, Babu Tarapad Colony, Udyambag, Belgaum.', 'Plot No. 39, Near Parvati Nagar, Babu Tarapad Colony, Udyambag, Belgaum.', '1981-06-11', '2010-09-21', 1, 5, 'male', NULL, '2039-06-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:12:37', '2023-11-29 01:12:37'),
(94, 117, 'Devendra', '-', 'Karennavar', 'H. No. 427, Patil Galli, Khanapur Road, Macchhe, Belgaum.', 'H. No. 427, Patil Galli, Khanapur Road, Macchhe, Belgaum.', '1990-06-01', '2008-08-14', 1, 13, 'male', NULL, '2048-06-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:14:57', '2023-11-29 01:14:57'),
(95, 118, 'Shri. Sharath', 'R', 'Joshi', 'Plot No. 289, Rajaram, 2nd Cross, Chidambar nagar, Belgaum.', 'Plot No. 289, Rajaram, 2nd Cross, Chidambar nagar, Belgaum.', '1981-06-01', '2008-12-01', 1, 5, 'male', NULL, '2039-06-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:15:25', '2023-11-29 01:15:25'),
(96, 119, 'Anand', 'V', 'Kulkarni', 'CTS No. 329/A, Roy Road, Tilakwadi, Belgaum.', 'CTS No. 329/A, Roy Road, Tilakwadi, Belgaum.', '1967-06-25', '1996-03-01', 1, 25, 'male', NULL, '2025-06-30', NULL, 'AB+', NULL, NULL, 8277639393, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:17:16', '2023-11-29 01:17:16'),
(97, 120, 'Saurav', '-', 'Mitra', '202, Emerald apartment, CTS 2192, 2193, Bhau Daajiba Desai Colony, 2nd Cross, Hanuman Nagar, Belagavi-590 019.', '202, Emerald apartment, CTS 2192, 2193, Bhau Daajiba Desai Colony, 2nd Cross, Hanuman Nagar, Belagavi-590 019.', '1978-02-19', '2019-01-01', 1, 54, 'male', NULL, '2036-02-29', NULL, 'A+', '\'AGGPM2333Q', '\'655887172809', 9987981133, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:17:37', '2023-11-29 01:17:37'),
(98, 121, 'Suresh', 'C', 'Kuri', 'C/o GLB Patil, Plot No. 1963, Sector 9, Malamaruti  Extention Belgaum.', 'C/o GLB Patil, Plot No. 1963, Sector 9, Malamaruti  Extention Belgaum.', '1973-06-01', '2001-10-01', 1, 55, 'male', NULL, '2031-06-30', NULL, 'B+', 'ANYPK8046M', '350239922397', 8147793262, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:21:48', '2023-11-29 01:21:48'),
(99, 122, 'Shri Iranna', 'V', 'Gadadegoudra', 'S. No. 30, Gurudev Galli, Laxmi nagar, Vadagaon, Belguam.', 'S. No. 30, Gurudev Galli, Laxmi nagar, Vadagaon, Belguam.', '1984-01-21', '2010-09-09', 1, 24, 'male', NULL, '2042-01-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:21:57', '2023-11-29 01:21:57'),
(100, 123, 'Mahantesh', 'B', 'Badiger', 'c/o N.B.Chikkamth,27/4 Anagol,Belagavi 590006', 'c/o N.B.Chikkamth,27/4 Anagol,Belagavi 590006', '1976-03-02', '2022-08-01', 1, 20, 'male', NULL, '2034-03-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:23:23', '2023-11-29 01:23:23'),
(101, 124, 'Mr. Rajshekhar', 'B', 'Lakkundi', 'H. No. 17/1, Malaprabha Nagar, Vadagaon, Belgaum.', 'H. No. 17/1, Malaprabha Nagar, Vadagaon, Belgaum.', '1990-01-26', '2012-08-01', 1, 18, 'male', NULL, '2048-01-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:25:32', '2023-11-29 01:25:32'),
(102, 125, 'Mr. Sagar', 'A', 'Patil', 'H. No. 50, Shivalingeshwar Colony, Sahidri Nagar,  Belgaum.', 'H. No. 50, Shivalingeshwar Colony, Sahidri Nagar,  Belgaum.', '1992-06-11', '2012-08-03', 1, 32, 'male', NULL, '2050-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:28:48', '2023-11-29 01:28:48'),
(103, 126, 'Dr. Vinayak', 'R', 'Malik', 'H. No. 3475, Samadevi  Complex, Samadevi Galli, Behind Saraswat Bank, Belgaum.', 'H. No. 3475, Samadevi  Complex, Samadevi Galli, Behind Saraswat Bank, Belgaum.', '1980-07-01', '2006-03-09', 1, 56, 'male', NULL, '2038-07-31', NULL, 'A+', NULL, NULL, 9886406375, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:29:13', '2023-11-29 01:29:13'),
(104, 127, 'Anil', 'B', 'Gavade', 'Shri Durga Residency Apprts., Flat No. UG/1, Shivaji Colony, Shanti Nagar Main Road, Tilakwadi, Belgaum.', 'Shri Durga Residency Apprts., Flat No. UG/1, Shivaji Colony, Shanti Nagar Main Road, Tilakwadi, Belgaum.', '1978-07-05', '2007-08-06', 1, 57, 'male', NULL, '2036-07-31', NULL, 'null', 'AJYPG5564G', '991752610455', 9986471271, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:29:32', '2023-11-29 01:29:32'),
(105, 128, 'Darshan', 'Y', 'Sonolkar', 'H. No. 366, Laxmi Galli, Hangaraga,  Mandoli, Belagavi', 'H. No. 366, Laxmi Galli, Hangaraga,  Mandoli, Belagavi', '1995-05-20', '2016-10-24', 1, 10, 'male', NULL, '2053-05-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:32:24', '2023-11-29 01:32:24'),
(106, 129, 'Satish', 'p', 'Deshpande', 'Plot No. 10, 5th Cross,  Dwaraka Nagar, Tilakwadi, Belgaum.', 'Plot No. 10, 5th Cross,  Dwaraka Nagar, Tilakwadi, Belgaum.', '1968-12-09', '1999-10-29', 1, 25, 'male', NULL, '2026-12-31', NULL, 'B+', 'AEEPD1911M', '945637250172', 9945456070, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:32:48', '2023-11-29 01:32:48'),
(107, 130, 'Dr.Vivek', 'V', 'Kulkarni', 'Plot No. 51, Naragundkar Colony, Guruprasad Colony, Belgaum.', 'Plot No. 51, Naragundkar Colony, Guruprasad Colony, Belgaum.', '1977-07-05', '2004-04-08', 1, 25, 'male', NULL, '2035-07-31', NULL, 'B+', NULL, NULL, 9448014163, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:33:11', '2023-11-29 01:33:11'),
(108, 131, 'Mr.Bhushan', 'S', 'Bhendigeri', 'H. No. 50, Shivalingeshwar Colony, Sahidri Nagar,  Belgaum.', 'H. No. 50, Shivalingeshwar Colony, Sahidri Nagar,  Belgaum.', '1997-03-08', '2021-03-01', 1, 58, 'male', NULL, '2055-03-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:36:18', '2023-11-29 01:36:18'),
(109, 132, 'Sanjeev', 'H', 'Kulkarni', 'H. No. 205, Kamadhenu Residency 3rd Cross, Bhagyanagar, Tilakwadi, Belgaum', 'H. No. 205, Kamadhenu Residency 3rd Cross, Bhagyanagar, Tilakwadi, Belgaum', '1977-12-20', '2004-08-16', 1, 25, 'male', NULL, '2035-12-31', NULL, 'O+', NULL, NULL, 9448590405, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:36:55', '2023-11-29 01:36:55'),
(110, 133, 'Mahantesh', '-', 'Kurani', 'S/O Sadashiv, At Post Yalimunoli, Yalimanoli, Belagavi 591309', 'S/O Sadashiv, At Post Yalimunoli, Yalimanoli, Belagavi 591309', '1991-07-31', '2023-05-22', 1, 20, 'male', NULL, '2049-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:37:47', '2023-11-29 01:37:47'),
(111, 134, 'Shrikant', 'M', 'Bapat', 'C/o S.A. Patil, Plot No. 71/1, 2nd cross, Chidambag Nagar, Tilakwadi, Belgaum.', 'C/o S.A. Patil, Plot No. 71/1, 2nd cross, Chidambag Nagar, Tilakwadi, Belgaum.', '1976-06-09', '2003-06-13', 1, 25, 'male', NULL, '2034-06-30', NULL, 'A+', NULL, NULL, 9972944982, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:40:59', '2023-11-29 01:40:59'),
(112, 135, 'Mr.  Ganesh', 'P', 'Lokur', 'C/o Chandrakant Patil, 381, Ganapat Galli, Angol,  Belgaum-590 007', 'C/o Chandrakant Patil, 381, Ganapat Galli, Angol,  Belgaum-590 007', '1984-09-20', '2013-02-13', 1, 59, 'male', NULL, '2042-09-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:41:37', '2023-11-29 01:41:37'),
(113, 136, 'Nagaraj', '-', 'Sontakki', 'House No.17,Malaprabha Nagar, Vadagaon, Belagavi 590005', 'House No.17,Malaprabha Nagar, Vadagaon, Belagavi 590005', '1997-05-24', '2023-08-21', 1, 18, 'male', NULL, '2055-05-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:42:44', '2023-11-29 01:42:44'),
(114, 137, 'Mr.  Deepak', 'S', 'Pingat', 'Maruti Galli, Kakati, Belgaum.', 'Maruti Galli, Kakati, Belgaum.', '1985-08-03', '2013-02-15', 1, 10, 'male', NULL, '2043-08-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:45:05', '2023-11-29 01:45:05'),
(115, 138, 'Sambhaji', 'S', 'Tarihalkar', 'House No.23, at Tirthkunde, Laxmi Galli, Near Santi Bastwad, Khanapur Belagavi 590014', 'House No.23, at Tirthkunde, Laxmi Galli, Near Santi Bastwad, Khanapur Belagavi 590014', '1996-06-21', '2023-10-10', 1, 10, 'male', NULL, '2054-06-30', NULL, 'O-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:47:15', '2023-11-29 01:47:15'),
(116, 139, 'Arunkumar', '-', 'P', 'No. 413, Besides Karnataka Forest Nursery, 2nd Stage, Rani Channamma Nagar, Belgaum', 'No. 413, Besides Karnataka Forest Nursery, 2nd Stage, Rani Channamma Nagar, Belgaum', '1980-04-16', '2011-05-16', 1, 61, 'male', NULL, '2038-04-30', NULL, 'O+', NULL, NULL, 9448160877, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:49:00', '2023-11-29 01:49:00'),
(117, 140, 'Ms.  R', 'M', 'Yellurkar', '588, Raj hans Galli, Angol, Belgaum.', '588, Raj hans Galli, Angol, Belgaum.', '1969-02-02', '1998-01-01', 1, 13, 'female', NULL, '2027-02-28', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:49:12', '2023-11-29 01:49:12'),
(118, 141, 'Vikrant', 'K', 'Shende', 'Plot No. 44, 4th Cross,  Ambedkar Nagar, Belgaum.', 'Plot No. 44, 4th Cross,  Ambedkar Nagar, Belgaum.', '1978-07-15', '2007-04-02', 1, 60, 'male', NULL, '2036-07-31', NULL, 'null', 'AETPV2619D', '284060359891', 9480537694, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:49:31', '2023-11-29 01:49:31'),
(119, 142, 'Giridhar', 'S', 'Sudi', 'S-2, Geetanjali Apprts., Rani Channamma Nagar, 1ST Stage, Belgaum.', 'S-2, Geetanjali Apprts., Rani Channamma Nagar, 1ST Stage, Belgaum.', '1972-10-26', '2007-05-28', 1, 29, 'male', NULL, '2030-10-31', NULL, 'O+', 'BNPPS0610D', '778372075633', 9738533405, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:53:23', '2023-11-29 01:53:23'),
(120, 143, 'Basavaraj', 'S', 'Jagati', '805, Shree, Vasant Vihar Colony, 2nd stage, Rani Channamma  Nagar, Belgaum.', '805, Shree, Vasant Vihar Colony, 2nd stage, Rani Channamma  Nagar, Belgaum.', '1977-04-01', '2003-09-17', 1, 24, 'male', NULL, '2035-04-30', NULL, 'B+', NULL, NULL, 9845480758, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 01:53:36', '2023-11-29 01:53:36'),
(121, 144, 'Bahubali', 'S', 'Bakhedi', 'House No.9/b, Shastri Galli, Near Basavan Gudi,Basavan Kudachi, Belagavi 591124', 'House No.9/b, Shastri Galli, Near Basavan Gudi,Basavan Kudachi, Belagavi 591124', '1994-11-20', '2023-10-09', 4, 46, 'male', NULL, '2052-11-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 01:58:41', '2023-11-29 01:58:41'),
(122, 145, 'Sachin', 'C', 'Kulkarni', 'Plot No. 5, Sugumna Appts., Mangalwar peth, Tilakwadi, Belguam.', 'Plot No. 5, Sugumna Appts., Mangalwar peth, Tilakwadi, Belguam.', '1979-05-25', '2008-08-14', 1, 25, 'male', NULL, '2035-05-31', NULL, 'O+', NULL, NULL, 9886367506, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:00:04', '2023-11-29 02:00:04'),
(123, 146, 'Anupama', 'S', 'Awati', '9th Cross, Bhagyanagar,  Tilakwadi, Belgaum.', '9th Cross, Bhagyanagar,  Tilakwadi, Belgaum.', '1973-05-30', '2007-07-17', 1, 12, 'female', NULL, '2031-05-31', NULL, 'null', 'AEQPA2525N', '989439839080', 9464440109, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:00:30', '2023-11-29 02:00:30'),
(124, 147, 'Shri. Ranjit', 'B', 'Mokashi', 'H. No. 1107, Anantshayan Galli, Tilak Chouck, Belguam.', 'H. No. 1107, Anantshayan Galli, Tilak Chouck, Belguam.', '1973-10-30', '2002-07-11', 1, 10, 'male', NULL, '2031-10-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:00:37', '2023-11-29 02:00:37'),
(125, 148, 'Mrs.Laxmi', 'A', 'Deshpande', 'Plot No. 34, Veerupax, Babu  Tarapad Nagar,  near Parvati Nagar, Udyambag, Belgaum.', 'Plot No. 34, Veerupax, Babu  Tarapad Nagar,  near Parvati Nagar, Udyambag, Belgaum.', '1979-01-01', '2007-03-05', 1, 5, 'female', NULL, '2037-01-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:03:58', '2023-11-29 02:03:58'),
(126, 149, 'Gururaj', 'D', 'Gokak', 'H. No. 1735, Otari Galli,  Chikkodi.', 'H. No. 1735, Otari Galli,  Chikkodi.', '1979-07-03', '2006-08-01', 1, 29, 'male', NULL, '2037-07-31', NULL, 'O+', NULL, NULL, 9448050777, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:04:05', '2023-11-29 02:04:05'),
(127, 150, 'Parasharam', 'Gangaram', 'Holkar', 'S/O Gangaram, House No.Kanakdas Colony, Ambedkar Nagar, Angol Belagavi Tilakwadi  Hukkeri Belagavi 590006', 'S/O Gangaram, House No.Kanakdas Colony, Ambedkar Nagar, Angol Belagavi Tilakwadi  Hukkeri Belagavi 590006', '1977-07-20', '2023-06-01', 1, 13, 'male', NULL, '2035-07-31', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:04:15', '2023-11-29 02:04:15'),
(128, 151, 'Bhagyashri', 'R', 'Pandurangi', 'C/o B.V. Datar, 3rd Cross, Ganesh Marg, Hindwadi, Belgaum.', 'C/o B.V. Datar, 3rd Cross, Ganesh Marg, Hindwadi, Belgaum.', '1976-07-04', '2007-07-02', 1, 29, 'female', NULL, '2034-07-31', NULL, 'null', 'AINPP5438Q', '401734275284', 9980685658, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:05:14', '2023-11-29 02:05:14'),
(129, 152, 'Shri Prakash', 'S', 'Halannavar', 'Rani Channamma Road,  At Post  :  Kakati, Belgaum.', 'Rani Channamma Road,  At Post  :  Kakati, Belgaum.', '1975-07-23', '2010-09-13', 1, 13, 'male', NULL, '2033-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:08:13', '2023-11-29 02:08:13'),
(130, 153, 'Vinayak', 'V', 'Kulkarni', 'Plot No. 58, Shrinidhi,  Yeashwant Cihar, Nanawadi, Belgaum.', 'Plot No. 58, Shrinidhi,  Yeashwant Cihar, Nanawadi, Belgaum.', '1985-01-01', '2009-08-03', 1, 25, 'male', NULL, '2043-01-31', NULL, 'B+', NULL, NULL, 9972454903, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:09:59', '2023-11-29 02:09:59'),
(131, 154, 'Dhirendra', 'K', 'Katti', 'H. No. 288/1, Agarkar Road, Tilakwadi, Belgaum.', 'H. No. 288/1, Agarkar Road, Tilakwadi, Belgaum.', '1967-07-04', '2006-04-17', 1, 5, 'male', NULL, '2025-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:10:03', '2023-11-29 02:10:03'),
(132, 155, 'Sujata', 'N', 'Bhavikatti', 'W/O S.M Hanchinal, Basava Nilaya, Near Vijaya Nagar High School, Vzakkalagiri, gadag- 582101', 'W/O S.M Hanchinal, Basava Nilaya, Near Vijaya Nagar High School, Vzakkalagiri, gadag- 582101', '1981-05-14', '2022-10-27', 1, 20, 'female', NULL, '2039-05-31', NULL, 'AB+', 'AOYPB3078F', '211127430066', 2535642542, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:12:04', '2023-11-29 02:12:04'),
(133, 156, 'Shri Uday', '-', 'Inchal', 'H. No. 18, plot galli, Kakati, Belguam.', 'H. No. 18, plot galli, Kakati, Belguam.', '1986-07-30', '2010-11-08', 1, 20, 'male', NULL, '2044-07-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:12:23', '2023-11-29 02:12:23'),
(134, 157, 'Sunil', '-', 'Koramaddi', 'No. 83, 1st cross, Shivaji Road, Bhavani Nagar,  Belagavi.', 'No. 83, 1st cross, Shivaji Road, Bhavani Nagar,  Belagavi.', '1989-06-25', '2017-09-01', 1, 62, 'male', NULL, '2047-06-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:16:38', '2023-11-29 02:16:38'),
(135, 158, 'Mr. Sachin', 'A', 'Patil', 'H. No. 364, Patil Galli, Angol, Belagavi.', 'H. No. 364, Patil Galli, Angol, Belagavi.', '1988-10-17', '2017-02-11', 1, 11, 'male', NULL, '2046-10-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:17:29', '2023-11-29 02:17:29'),
(136, 159, 'Veena', 'B', 'Deshmukh', '143, Gurukrupa, 2nd  Cross Vidya nagar, Belgaum.', '143, Gurukrupa, 2nd  Cross Vidya nagar, Belgaum.', '1969-04-26', '2007-09-04', 1, 29, 'female', NULL, '2027-04-30', NULL, 'O+', 'AMDPD2820N', '561623615670', 9916508826, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:19:40', '2023-11-29 02:19:40'),
(137, 160, 'Shri. Santosh', 'B', 'Patil', 'At :Gudaganatti,  Post :Yamkanmardi TQ :  Hukkeri', 'At :Gudaganatti,  Post :Yamkanmardi TQ :  Hukkeri', '1983-06-10', '2008-12-01', 1, 33, 'male', NULL, '2041-06-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:22:08', '2023-11-29 02:22:08'),
(138, 161, 'Vyasraj', 'R', 'Kulkarni', 'Plot No. 4, Vakratunda Residency, Kore galli,  Shahapur, Belguam.', 'Plot No. 4, Vakratunda Residency, Kore galli,  Shahapur, Belguam.', '1986-04-26', '2012-08-02', 1, 5, 'male', NULL, '2044-04-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:22:19', '2023-11-29 02:22:19'),
(139, 162, 'Aashish', 'A', 'Gadgil', '75/B, Vidyanagar, 4th cross, Angolmal, Belgaum.', '75/B, Vidyanagar, 4th cross, Angolmal, Belgaum.', '1986-05-21', '2008-08-18', 1, 51, 'male', NULL, '2044-05-31', NULL, 'O+', 'AQHPG1185D', '481631459741', 9449292671, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:26:02', '2023-11-29 02:26:02'),
(140, 163, 'Shri. Ganesh', 'P', 'Bandi', 'S.B. Kamble Building, Choudeshwari Beedi,   Sonar Galli, Vadagaon, Belguam', 'S.B. Kamble Building, Choudeshwari Beedi,   Sonar Galli, Vadagaon, Belguam', '1984-07-31', '2011-11-21', 1, 20, 'male', NULL, '2042-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:27:14', '2023-11-29 02:27:14'),
(141, 164, 'Dileep', '-', 'Chougule', 'At : Karlakatta,  Post  :  Sambrani, Tq :  Haliyal (U. K) - 581329', 'At : Karlakatta,  Post  :  Sambrani, Tq :  Haliyal (U. K) - 581329', '1986-04-30', '2019-09-11', 1, 10, 'male', NULL, '2044-04-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:27:49', '2023-11-29 02:27:49'),
(142, 165, 'Shreenidhi', 'R', 'Kulkarni', '140, 6th cross, Chidambar Nagar, Belgaum.', '140, 6th cross, Chidambar Nagar, Belgaum.', '1983-06-14', '2010-03-18', 1, 29, 'female', NULL, '2041-06-30', NULL, 'O+', NULL, NULL, 8147401081, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:28:00', '2023-11-29 02:28:00'),
(143, 166, 'Abhishek', '-', 'Deshmukh', 'Tejaswi, H. No. 260, 3rd  Cross, Sant Rajaram Marg, Chidambar Nagar, Belgaum.', 'Tejaswi, H. No. 260, 3rd  Cross, Sant Rajaram Marg, Chidambar Nagar, Belgaum.', '1984-05-24', '2009-08-05', 1, 29, 'male', NULL, '2042-05-31', NULL, 'null', 'AMVPA0789P', '832818156082', 9164503748, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:29:42', '2023-11-29 02:29:42'),
(144, 167, 'Geetanjali', 'S', 'Guggari', 'Plat No. 308, Gilginchi  Apprts, Somwarpeth, Tilakwadi, Belgaum.', 'Plat No. 308, Gilginchi  Apprts, Somwarpeth, Tilakwadi, Belgaum.', '1967-07-02', '2010-08-20', 1, 20, 'female', NULL, '2027-07-31', NULL, 'B+', NULL, NULL, 9480737680, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:32:00', '2023-11-29 02:32:00');
INSERT INTO `staff` (`id`, `user_id`, `fname`, `mname`, `lname`, `local_address`, `permanent_address`, `dob`, `doj`, `religion_id`, `castecategory_id`, `gender`, `date_of_increment`, `date_of_superanuation`, `date_of_confirmation`, `bloodgroup`, `pan_card`, `adhar_card`, `contactno`, `aicte_id`, `vtu_id`, `esi_no`, `un_no`, `emergency_no`, `emergency_name`, `employee_type`, `created_at`, `updated_at`) VALUES
(145, 168, 'Ganesh', 'R', 'Chate', 'PlotNo. 134, Jay nagar,  Adjenct to Hindalga Road, Belgaum.', 'PlotNo. 134, Jay nagar,  Adjenct to Hindalga Road, Belgaum.', '1986-09-21', '2012-07-16', 1, 5, 'male', NULL, '2044-09-30', NULL, 'AB+', NULL, NULL, 9964658103, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:35:54', '2023-11-29 02:35:54'),
(146, 169, 'Shailesh', 'M', 'Keshkamat', 'Flat, S/2, Hari Om Ashraya, CTS 2424/A, Kacheri Galli, Shahapur, Belgaum.', 'Flat, S/2, Hari Om Ashraya, CTS 2424/A, Kacheri Galli, Shahapur, Belgaum.', '1978-07-29', '2009-09-07', 1, 56, 'male', NULL, '2036-07-31', NULL, 'null', 'AMKPK3571G', '311551133327', 9449624168, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:38:45', '2023-11-29 02:38:45'),
(147, 170, 'Vinay', 'M', 'Murgod', 'Plot No. 57, Ashirwad, Autonagar, Belgaum590 016', 'H. No. 1079, Kotambari Galli, Bailhongal, Belgaum-591 102.', '1988-05-29', '2013-07-19', 1, 20, 'male', NULL, '2046-05-31', NULL, 'A+', NULL, NULL, 9742429273, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:40:25', '2023-11-29 02:40:25'),
(148, 171, 'Sandeep', 'S', 'Bandi', '\'c/o Subhash Kulkarni, House,Tilakwadi, belagavi', '\'c/o Subhash Kulkarni, House,Tilakwadi, belagavi', '1991-02-06', '2022-03-02', 1, 63, 'male', NULL, '2049-02-28', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:42:45', '2023-11-29 02:42:45'),
(149, 172, 'Snehal', 'Sagar', 'Santaji', 'H. No. 4064 / A, Kangral galli, Belgaum-590 001', 'H. No. 4064 / A, Kangral galli, Belgaum-590 001', '1987-11-18', '2013-09-16', 1, 10, 'female', NULL, '2045-11-30', NULL, 'O-', 'CFXPK8501G', '811284336664', 8549826723, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:45:23', '2023-11-29 02:45:23'),
(150, 173, 'Rangarao', 'Bajirao', 'Kumbar', 'A1/PO: yellimunnoli , Tal:Hukkeri, District Belagavi, Karnataka 591309', 'A1/PO: yellimunnoli , Tal:Hukkeri, District Belagavi, Karnataka 591309', '1978-07-01', '2022-03-04', 1, 65, 'male', NULL, '2036-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:48:09', '2023-11-29 02:48:09'),
(151, 174, 'Veena', 'D', 'Badiger', 'C / o  Dr. Vilash. S. Pattar Dept. of Periodoutist KLE  VK Institute of dental Science, JNMC campus, Nehru Nagar, Belgaum.', 'D / o  D.M. Badiger, Sampada Building, Ramanagar, Dharwad', '1987-07-14', '2014-08-01', 1, 64, 'female', NULL, '2045-07-31', NULL, 'B+', NULL, NULL, 8147526764, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:48:29', '2023-11-29 02:48:29'),
(152, 175, 'Nikhil', 'J', 'Inamdar', 'H. No. 6052, Gurudatt Nivas, Shivaji colony, Tilakwadi, Belgaum.', 'H. No. 6052, Gurudatt Nivas, Shivaji colony, Tilakwadi, Belgaum.', '1987-02-13', '2015-02-03', 1, 5, 'male', NULL, '2045-02-28', NULL, 'O+', 'ACYPI6358M', '467525927829', 9880940397, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 02:48:54', '2023-11-29 02:48:54'),
(153, 176, 'Sourabh', 'S', 'Inamdar', 'A1/PO: yellimunnoli , Tal:Hukkeri, District Belagavi, Karnataka 591309', 'A1/PO: yellimunnoli , Tal:Hukkeri, District Belagavi, Karnataka 591309', '1996-06-30', '2022-03-07', 1, 5, 'male', NULL, '2054-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 02:52:27', '2023-11-29 02:52:27'),
(154, 177, 'Praveen', 'U', 'Kalkundri', 'Plot No. 16, Maratha Colony near SBI, ATM, Tilakwadi,  Belgaum-590 006', 'Plot No. 16, Maratha Colony near SBI, ATM, Tilakwadi,  Belgaum-590 006', '1985-11-21', '2014-02-01', 1, 10, 'male', NULL, '2043-11-30', NULL, 'B+', 'BRYPK6864J', '774848942883', 9844158801, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:00:41', '2023-11-29 04:00:41'),
(155, 178, 'Suraj', 'J', 'Patil', 'Trimurthy, CCB No. 52,  Mahadwar Road, Cross No.3, Belgaum.', 'Trimurthy, CCB No. 52,  Mahadwar Road, Cross No.3, Belgaum.', '1978-09-20', '2011-11-02', 1, 10, 'male', NULL, '2036-09-30', NULL, 'A+', NULL, NULL, 9980432774, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:04:57', '2023-11-29 04:04:57'),
(156, 179, 'Maya', 'B', 'Upadhye (Chougule)', '434, Devendra Building, Cangress Road,  Near Ist railway gate, Tilakwadi,  Belgaum-590 006', '434, Devendra Building, Cangress Road,  Near Ist railway gate, Tilakwadi,  Belgaum-590 006', '1967-04-21', '1993-02-09', 1, 11, 'female', NULL, '2025-04-30', NULL, 'O+', 'AADPU5458K', '891153091523', 9480344144, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:08:24', '2023-11-29 04:08:24'),
(157, 180, 'Shivashankar', 'C', 'Jotawar', '# 350,Naikwadi,PO : Maradimath, Taluka : Gokak, 591231 Dist.Belagavi', '# 350,Naikwadi,PO : Maradimath, Taluka : Gokak, 591231 Dist.Belagavi', '1970-01-08', '2022-08-24', 1, 20, 'male', NULL, '2028-01-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:09:08', '2023-11-29 04:09:08'),
(158, 181, 'Shri. Shivanand', 'K', 'Nerli', 'Rajaram Nagar, Udyambag, Belgaum.', 'Rajaram Nagar, Udyambag, Belgaum.', '1986-12-08', '2011-12-15', 1, 20, 'male', NULL, '2044-12-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:09:28', '2023-11-29 04:09:28'),
(159, 182, 'Rajeev', 'K', 'Tavildar', 'Mayura Residency, Flat No 10, 4th cross, Bhagyanagar, Belgaum - 5900006', 'Mayura Residency, Flat No 10, 4th cross, Bhagyanagar, Belgaum - 5900006', '1984-04-14', '2012-09-13', 1, 5, 'male', NULL, '2042-04-30', NULL, 'O+', NULL, NULL, 9972712121, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:09:33', '2023-11-29 04:09:33'),
(160, 183, 'Deepak', 'Shrinivas', 'Kulkarni', 'H. No. 1426, Basavan Galli,  Belagavi.', 'H. No. 1426, Basavan Galli,  Belagavi.', '1984-05-08', '2010-08-02', 1, 5, 'male', NULL, '2042-05-31', NULL, 'B+', 'BPEPK9031B', '587098130826', 8050504897, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:12:22', '2023-11-29 04:12:22'),
(161, 184, 'Mr. Anmol', 'J', 'Balikai', 'H. No. 568/3, Bhendigeri Chal, near Marathi School No. 34, Raghunath Peth, Angol,  Belgaum.', 'H. No. 568/3, Bhendigeri Chal, near Marathi School No. 34, Raghunath Peth, Angol,  Belgaum.', '1981-12-20', '2013-02-15', 1, 11, 'male', NULL, '2039-12-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:14:06', '2023-11-29 04:14:06'),
(162, 185, 'Uttam', 'U', 'Deshpnade', 'CCB 46, Adarsha Nagar, 5th Cross, Hindwadi, Belagavi-590 009', 'CCB 46, Adarsha Nagar, 5th Cross, Hindwadi, Belagavi-590 009', '1983-10-05', '2016-04-26', 1, 5, 'male', NULL, '2041-10-31', NULL, 'O-', 'ANUPD9203D', '350006440496', 9880167092, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:15:55', '2023-11-29 04:15:55'),
(163, 186, 'Tushar', 'T', 'Hawal', '3471/28/ Samadevi  Galli, Belgaum.', '3471/28/ Samadevi  Galli, Belgaum.', '1987-11-18', '2012-10-12', 1, 66, 'male', NULL, '2045-11-30', NULL, 'AB+', NULL, NULL, 9738854380, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:15:59', '2023-11-29 04:15:59'),
(164, 187, 'Mr. Umesh', 'M', 'Birje', 'Ward no :05 Ambedkar nagar angol belagaum.', 'Ward no :05 Ambedkar nagar angol belagaum.', '1984-07-28', '2011-10-01', 1, 10, 'male', NULL, '2042-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:19:03', '2023-11-29 04:19:03'),
(165, 188, 'Mahesh', 'R', 'Katabugol', '\'House No.201, kanakdas Galli, Angol Belagavi 590006', '\'House No.201, kanakdas Galli, Angol Belagavi 590006', '1994-05-31', '2022-04-01', 1, 40, 'male', NULL, '2052-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:19:08', '2023-11-29 04:19:08'),
(166, 189, 'Anand', 'Anil', 'Kulkarni', '68, Main Road, Hindwadi, Belgaum-590 011', '68, Main Road, Hindwadi, Belgaum-590 011', '1986-07-03', '2013-05-20', 1, 5, 'female', NULL, '2044-07-21', NULL, 'A+', NULL, NULL, 7829352835, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:19:56', '2023-11-29 04:19:56'),
(167, 190, 'Balbheem', 'N', 'Nadpurohit', '1st Floor, 1st cross, Jai Malhar Building, Anand Nagar, Vadagaon, Belagavi-590 005.', 'Plot No. 34, Survey No. 102, Sambaji Nagar, Vadagaon,  Belagavi-590 005', '1985-09-29', '2016-08-01', 1, 5, 'male', NULL, '2043-09-30', NULL, 'O+', 'AFZPN7161H', '985353937518', 9620340708, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:20:16', '2023-11-29 04:20:16'),
(168, 191, 'Mr. Bharat', 'C', 'Hundre', 'Khadarwad Cross, Devendra Nagar, Udyambag, Belagavi-590 008.', 'Khadarwad Cross, Devendra Nagar, Udyambag, Belagavi-590 008.', '1998-05-24', '2022-03-02', 1, 10, 'male', NULL, '2056-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:22:35', '2023-11-29 04:22:35'),
(169, 192, 'Mr.Mahesh', 'R', 'Patil', '\'House No.147,1st Stage, RC Nagar Belgaum 590006', '\'House No.147,1st Stage, RC Nagar Belgaum 590006', '1995-12-19', '2022-04-01', 1, 33, 'male', NULL, '2053-12-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:26:09', '2023-11-29 04:26:09'),
(170, 193, 'Bharama', 'Kuber', 'Nayak', '\'House No.290/B, Valmiki Galli, Majagaon Belagavi 590006', '\'House No.290/B, Valmiki Galli, Majagaon Belagavi 590006', '1988-07-29', '2022-04-01', 1, 43, 'male', NULL, '2046-07-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:26:13', '2023-11-29 04:26:13'),
(171, 194, 'Sneha', 'S', 'Nargundkar', 'Plot No. 22, Vinayak Nagar, Hindalaga Road, Belagavi-591 108', 'M-O-2, Housing Board colony, Curti, Ponda, Goa-403 401', '1988-05-03', '2016-08-01', 1, 67, 'female', NULL, '2046-05-31', NULL, 'O+', 'AJOPN4874C', '790644398102', 9422605808, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:27:55', '2023-11-29 04:27:55'),
(172, 195, 'Mr.Vinay', 'N', 'Marihal', 'House No.3855,Kotwal Galli, belagavi', 'House No.3855,Kotwal Galli, belagavi', '1990-08-23', '2022-04-01', 1, 20, 'male', NULL, '2048-08-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:29:33', '2023-11-29 04:29:33'),
(173, 196, 'Prashant', 'P', 'Kakkamari', 'Plot No. 531, 2nd stage, Ranichannamma nagar, Belguam-590 006', 'Plot No. 531, 2nd stage, Ranichannamma nagar, Belguam-590 006', '1988-05-01', '2013-09-21', 1, 27, 'male', NULL, '2046-05-31', NULL, 'null', NULL, NULL, 8762813269, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:31:23', '2023-11-29 04:31:23'),
(174, 197, 'Mr.Praveen', 'Chandrakant', 'Sattyennavar', 'Plot No.70,9th Corss, Gokul Nagar, Mutaga, Belagavi', 'Plot No.70,9th Corss, Gokul Nagar, Mutaga, Belagavi', '1990-08-15', '2023-05-08', 1, 34, 'male', NULL, '2048-08-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:32:55', '2023-11-29 04:32:55'),
(175, 198, 'Prakash', 'Huchchappa', 'Bellad', '\'Plot No.05,new 3rd Cross, Samarth Nagar,Manickbag Belagavi', '\'Plot No.05,new 3rd Cross, Samarth Nagar,Manickbag Belagavi', '1992-01-14', '2022-04-01', 1, 20, 'male', NULL, '2050-01-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:33:55', '2023-11-29 04:33:55'),
(176, 199, 'Sagar', 'S', 'Santaji', 'Plot No. 4, 4th Cross, New Good Shed Road,  Belagavi-590 001', 'Plot No. 4, 4th Cross, New Good Shed Road,  Belagavi-590 001', '1991-07-20', '2016-09-15', 1, 10, 'male', NULL, '2049-07-31', NULL, 'B+', 'DRTPS5152N', '345546534908', 8951137898, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:34:42', '2023-11-29 04:34:42'),
(177, 200, 'Mr.Neminath', 'Mahaveer', 'Padmannavar', 'House No.1403/B, Basavan Galli, Belagavi 590001', 'House No.1403/B, Basavan Galli, Belagavi 590001', '1983-11-17', '2023-06-01', 1, 58, 'male', NULL, '2041-11-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:38:09', '2023-11-29 04:38:09'),
(178, 201, 'Shivappa', 'B', 'Ullagaddi', 'H. No. 145,  Mukund  Building, Jere galli, Angol, Belgaum', 'H. No. 145,  Mukund  Building, Jere galli, Angol, Belgaum', '1977-03-10', '2007-09-04', 1, 20, 'male', NULL, '2035-03-31', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:39:29', '2023-11-29 04:39:29'),
(179, 202, 'Kiran', 'D', 'Kattimani', 'H. No. 44, Hosa Oni, Mission Compound, Karwar Road, Hubli- 29', 'H. No. 44, Hosa Oni, Mission Compound, Karwar Road, Hubli- 29', '1986-12-08', '2013-11-29', 7, 68, 'male', NULL, '2044-12-31', NULL, 'null', NULL, NULL, 8951640346, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:42:05', '2023-11-29 04:42:05'),
(180, 203, 'Shri. Shridhar', 'R', 'Latkar', 'H. No. 1717/1A-2, Kelkar Bhag,  Belgaum.', 'H. No. 1717/1A-2, Kelkar Bhag,  Belgaum.', '1977-07-06', '2007-09-14', 1, 5, 'male', NULL, '2035-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:44:00', '2023-11-29 04:44:00'),
(181, 204, 'Vaishnavi', 'R', 'Mathad', '104, Nikhila Apprts., Guruwar peth, Tilakwadi, Belguam.', '104, Nikhila Apprts., Guruwar peth, Tilakwadi, Belguam.', '1979-03-29', '2006-02-06', 1, 5, 'female', NULL, '2037-03-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:44:28', '2023-11-29 04:44:28'),
(182, 205, 'Mahesh', 'A', 'Kori', 'C/o Mahanth Krupa, Opp. Kerudi Hospital, Extension area, Bagalkot-587 101', 'C/o Mahanth Krupa, Opp. Kerudi Hospital, Extension area, Bagalkot-587 101', '1979-08-05', '2014-08-18', 1, 20, 'male', NULL, '2037-08-31', NULL, 'null', NULL, NULL, 8050928970, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:47:05', '2023-11-29 04:47:05'),
(183, 206, 'Shri. Shekhar', 'M', 'Katamble', '43, Shivaja Colony, Tilakwadi, Belgaum.', '43, Shivaja Colony, Tilakwadi, Belgaum.', '1974-02-23', '2002-06-05', 1, 10, 'male', NULL, '2032-02-29', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:49:24', '2023-11-29 04:49:24'),
(184, 207, 'Pratijanya', 'S', 'Ajawan', 'Plot No. 58, Yashwant Vihar  colony, Nanawadi, Belagav,', 'Plot No. 58, Yashwant Vihar  colony, Nanawadi, Belagav,', '1990-04-18', '2017-04-18', 1, 20, 'female', NULL, '2048-04-30', NULL, 'A-', 'AVRPD5272B', '619062413387', 9591119949, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:49:29', '2023-11-29 04:49:29'),
(185, 208, 'Mukund', 'R', 'Kulkarni', 'C/o R.H. Kulkarni, H. No. 226, Near 2nd Railway gate,  Tilakwadi, Belgaum.', 'C/o R.H. Kulkarni, H. No. 226, Near 2nd Railway gate,  Tilakwadi, Belgaum.', '1975-11-26', '1997-08-24', 1, 5, 'male', NULL, '2033-11-30', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:50:26', '2023-11-29 04:50:26'),
(186, 209, 'Yogita', 'N', 'Potdar', 'Plot No. 33, Mahabableshwar Nagar, Near Hindalaga Ganapati Temple, Belgaum', 'Plot No. 33, Mahabableshwar Nagar, Near Hindalaga Ganapati Temple, Belgaum', '1985-07-16', '2014-08-11', 1, 10, 'female', NULL, '2043-06-30', NULL, 'O+', NULL, NULL, 9741456237, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:52:56', '2023-11-29 04:52:56'),
(187, 210, 'Shri. Basavaraj', 'N', 'Chougula', 'Plot No. 94, 1st Stage, Rani  Channamma nagar, Belgaum.', 'Plot No. 94, 1st Stage, Rani  Channamma nagar, Belgaum.', '1978-07-04', '2005-08-22', 1, 20, 'male', NULL, '2036-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:53:04', '2023-11-29 04:53:04'),
(188, 211, 'Vaidehi', 'P', 'Deshpande', 'Plot No. 58, Yashwant Vihar  colony, Nanawadi, Belagav,', 'Plot No. 58, Yashwant Vihar  colony, Nanawadi, Belagav,', '1989-04-05', '2017-08-31', 1, 5, 'female', NULL, '2047-04-30', NULL, 'AB-', 'AVRPD5272B', '619062413387', 9591119949, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:53:51', '2023-11-29 04:53:51'),
(189, 212, 'Tanvi', 'Durgesh', 'Gangodkar', 'H. No. 111, Shah Buidling, Mangalwar peth, Tilakwadi, Belgaum.', 'H. No. 111, Shah Buidling, Mangalwar peth, Tilakwadi, Belgaum.', '1990-04-02', '2012-08-01', 1, 5, 'female', NULL, '2048-04-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:56:04', '2023-11-29 04:56:04'),
(190, 213, 'Shri. Mahesh', 'S', 'Moogbasav', '381, C/o Chandrakant Patil, Tanaji Galli,  Near Ganesh Temple, Angol, Belgaum.', '381, C/o Chandrakant Patil, Tanaji Galli,  Near Ganesh Temple, Angol, Belgaum.', '1972-06-01', '2007-09-03', 1, 20, 'male', NULL, '2030-06-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 04:58:25', '2023-11-29 04:58:25'),
(191, 214, 'Akhil', 'A', 'Deshpande', '\"Sai Deep\", Plot No. 111 / 1 / 1B, Dwarkanagar, Ist  cross, Mandoli Road., Belgaum', '\"Sai Deep\", Plot No. 111 / 1 / 1B, Dwarkanagar, Ist  cross, Mandoli Road., Belgaum', '1988-03-31', '2014-09-12', 1, 5, 'male', NULL, '2046-03-31', NULL, 'A+', NULL, NULL, 9008479574, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 04:59:28', '2023-11-29 04:59:28'),
(192, 215, 'Ramesh', 'B', 'Koti', 'Ward No. 4, Nekar Galli, Bilagi, Bagalkot-587 116.', 'Ward No. 4, Nekar Galli, Bilagi, Bagalkot-587 116.', '1984-03-25', '2017-09-08', 1, 20, 'male', NULL, '2042-03-31', NULL, 'O+', 'BLBPK5759H', '295050686791', 9535953509, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:00:24', '2023-11-29 05:00:24'),
(193, 216, 'Shri.Shrinivas', 'M', 'Kulkarni', 'Shrinivas Building, Hindu Nagar,  Angol, Belgaum.', 'Shrinivas Building, Hindu Nagar,  Angol, Belgaum.', '1974-07-22', '2000-12-26', 1, 23, 'male', NULL, '2032-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:02:36', '2023-11-29 05:02:36'),
(194, 217, 'Prajakta', 'S', 'Patil', '16 / 2, \"Brahma\", ChidambarNagar,  Belgaum-590 006', '16 / 2, \"Brahma\", ChidambarNagar,  Belgaum-590 006', '1990-01-16', '2014-09-12', 1, 10, 'female', NULL, '2048-01-31', NULL, 'A+', NULL, NULL, 9538312226, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:03:21', '2023-11-29 05:03:21'),
(195, 218, 'Rajesh', 'P', 'Shrikhande', 'CCB No. 231, Sambhaji Nagar, Vadagaon, Belgaum.', 'CCB No. 231, Sambhaji Nagar, Vadagaon, Belgaum.', '1990-02-03', '2013-02-15', 1, 28, 'male', NULL, '2048-02-29', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:04:23', '2023-11-29 05:04:23'),
(196, 219, 'Priyanka', 'D', 'Joshi', 'Ward No. 4, Nekar Galli, Bilagi, Bagalkot-587 116.', 'Ward No. 4, Nekar Galli, Bilagi, Bagalkot-587 116.', '1985-07-14', '2017-10-11', 1, 20, 'female', NULL, '2043-07-31', NULL, 'A+', 'AOLPJ6582K', '644186790525', 8904577163, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:05:13', '2023-11-29 05:05:13'),
(197, 220, 'Mr. Rajendra', 'S', 'Deshpande', 'Shalgar Apprts.,1st Floor, F-4,  Acharya Galli, Shahapur, Belgaum.', 'Shalgar Apprts.,1st Floor, F-4,  Acharya Galli, Shahapur, Belgaum.', '1986-05-03', '2007-09-03', 1, 5, 'male', NULL, '2044-05-31', NULL, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:05:30', '2023-11-29 05:05:30'),
(198, 221, 'Roopa', 'K', 'Rao', 'Krishna Kunj, 9th Cross Bhagyanagar,  Tilakwadi, Belgaum.', 'Krishna Kunj, 9th Cross Bhagyanagar,  Tilakwadi, Belgaum.', '1984-01-28', '2007-04-02', 1, 5, 'female', NULL, '2042-01-31', NULL, 'A+', NULL, NULL, 9611001232, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:07:02', '2023-11-29 05:07:02'),
(199, 222, 'Shri.Vinayak', 'V', 'Simu', 'H. No. 283, Maruti Galli, Angol, Belguam.', 'H. No. 283, Maruti Galli, Angol, Belguam.', '1982-07-22', '2008-08-12', 1, 10, 'male', NULL, '2040-07-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:09:23', '2023-11-29 05:09:23'),
(200, 223, 'Vishweshkumar', 'K', 'Aithal', 'C / O V.I. Kundangar, H No. 889 / A, Eshavasyam, Near Shri Ram Mandir, Acharya galli, Shahapur, Belagavi-590 003.', 'Skanda Shankar, Plot No. 96, 2nd cross, Daneshwar Nagar, Vidyagiri,  Dharwad-580 004.', '1990-10-22', '2017-10-23', 1, 5, 'male', NULL, '2048-10-31', NULL, 'O+', 'BHAPA3500M', '239950260917', 8123553947, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:09:43', '2023-11-29 05:09:43'),
(201, 224, 'Ashwin', 'S', 'Karekar', 'H. No. 3348/D, Gondhali Galli, Belgaum.', 'H. No. 3348/D, Gondhali Galli, Belgaum.', '1975-10-02', '1993-10-20', 1, 10, 'male', NULL, '2033-10-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:11:08', '2023-11-29 05:11:08'),
(202, 225, 'Vivekkumar', 'G', 'Tivari', 'H. No. 26, 3rd floor, Behind Ganapati Temple, Rajdhani Colony, Gokul Road, Hubli-580 030', 'H. No. 26, 3rd floor, Behind Ganapati Temple, Rajdhani Colony, Gokul Road, Hubli-580 030', '1986-03-23', '2013-07-22', 1, 5, 'male', NULL, '2044-03-31', NULL, 'null', NULL, NULL, 9590138899, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:11:52', '2023-11-29 05:11:52'),
(203, 226, 'Jyothi', 'B', 'R', 'H. No. 293 / 8, Maradimath, Gokak=591231', 'H. No. 293 / 8, Maradimath, Gokak=591231', '1991-04-22', '2019-06-01', 1, 20, 'female', NULL, '2049-04-30', NULL, 'B+', 'APVPJ9681E', NULL, 7829545971, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:15:58', '2023-11-29 05:15:58'),
(204, 227, 'Shrirangnath', '-', 'Avadhani', 'H. No. 15 /A, Pratiksha, Kavi plots, Station Road, Bijapur Railway Station, Bijapur-586 101', 'H. No. 15 /A, Pratiksha, Kavi plots, Station Road, Bijapur Railway Station, Bijapur-586 101', '1989-07-02', '2016-01-04', 1, 5, 'male', NULL, '2047-01-31', NULL, 'O+', NULL, NULL, 9008878759, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:16:02', '2023-11-29 05:16:02'),
(205, 228, 'Praveen', 'B', 'Parmaj', 'H. No. 321/A, Mahaveer nagar, Udyambag, Khanapur Road, Belgaum.', 'H. No. 321/A, Mahaveer nagar, Udyambag, Khanapur Road, Belgaum.', '1986-02-19', '2013-02-14', 1, 11, 'male', NULL, '2044-02-29', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:17:30', '2023-11-29 05:17:30'),
(206, 229, 'Shri. Nagaraj', 'D', 'Pattar', 'H. No. 1065, Rameshwar Nagar, Macchhe, Belgaum.', 'H. No. 1065, Rameshwar Nagar, Macchhe, Belgaum.', '1987-03-15', '2011-10-01', 1, 69, 'male', NULL, '2045-03-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:19:40', '2023-11-29 05:19:40'),
(207, 230, 'Pradnya', 'H', 'Kulkarni', 'W / o Harshit B Kulkarni, Guru Krupa, Flat No. 204, Hem Ashraya Apartment, Kaivalya Nagar, Belagavi', 'W / o Harshit B Kulkarni, Guru Krupa, Flat No. 204, Hem Ashraya Apartment, Kaivalya Nagar, Belagavi', '1989-01-17', '2016-01-16', 1, 5, 'female', NULL, '2047-01-31', NULL, 'B+', NULL, NULL, 9538570964, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:19:42', '2023-11-29 05:19:42'),
(208, 231, 'Aditya', 'Anand', 'Dev', 'H. No. 1495, Basavan Galli, Shahapur,  Belgaum', 'H. No. 1495, Basavan Galli, Shahapur,  Belgaum.', '1994-05-07', '2012-08-01', 1, 5, 'male', NULL, '2052-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:21:52', '2023-11-29 05:21:52'),
(209, 232, 'Venkatesh', '-', 'Deshpande', 'Plot No. 480, Scheme No. 13, Near Ganapati Temple, T.V. Centre,  Belagavi-590 001.', 'Plot No. 480, Scheme No. 13, Near Ganapati Temple, T.V. Centre,  Belagavi-590 001.', '1987-10-31', '2016-08-01', 1, 5, 'male', NULL, '2045-10-31', NULL, 'null', NULL, NULL, 9740414350, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:25:00', '2023-11-29 05:25:00'),
(210, 233, 'Shri. Shrinivas', 'S', 'Mahajan', 'Laxmi Niavas, Plot No. 156, KSRTC Colony, Shindoli, Belgaum.', 'Laxmi Niavas, Plot No. 156, KSRTC Colony, Shindoli, Belgaum.', '1970-07-14', '2008-12-01', 1, 25, 'male', NULL, '2028-07-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:25:32', '2023-11-29 05:25:32'),
(211, 234, 'Gajanan', 'P', 'Kadam', '205, Ambica landmark, 2nd cross, Bhagyanagar, Belagavi-590 006.', 'Plot No. 2, Krishna, Syndicate Bank Colony, Babale Galli, Angol, Belagavi-590 007.', '1963-09-04', '2021-10-04', 1, 10, 'male', NULL, '2036-10-31', NULL, 'O+', 'AFJPP1799K', NULL, 9448030009, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:27:55', '2023-11-29 05:27:55'),
(212, 235, 'Praveen', '-', 'Mirji', 'Sector No. 32, Plot No. 59, Navanagar,  Bagalkot-587 101', 'Sector No. 32, Plot No. 59, Navanagar,  Bagalkot-587 101', '1980-07-22', '2016-08-02', 1, 5, 'male', NULL, '2038-07-31', NULL, 'A+', NULL, NULL, 9900531456, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:29:28', '2023-11-29 05:29:28'),
(213, 236, 'Shri. Anand', 'G', 'Kulkarni', 'Bhagyashree Building, 10th Cross, Bhagyanagar, Belgaum.', 'Bhagyashree Building, 10th Cross, Bhagyanagar, Belgaum.', '1984-01-05', '2008-12-01', 1, 23, 'male', NULL, '2042-01-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:29:49', '2023-11-29 05:29:49'),
(214, 237, 'Seema', 'K', 'Sawant', 'H. No. 53/1, Hosur, Basawan galli, Shahapur, Belgaum.', 'H. No. 53/1, Hosur, Basawan galli, Shahapur, Belgaum.', '1985-02-02', '2007-09-09', 1, 10, 'female', NULL, '2043-02-28', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:30:18', '2023-11-29 05:30:18'),
(215, 238, 'Shri. Raghvendra', 'K', 'Shinagi', 'Rajaram Nagar, Udyambag, Belgaum.', 'Rajaram Nagar, Udyambag, Belgaum.', '1989-11-02', '2013-02-06', 1, 35, 'male', NULL, '2047-11-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:34:00', '2023-11-29 05:34:00'),
(216, 239, 'Sanjay', '-', 'Alagwadi', 'Krishnai Sankul, H. No. 1050, Anantshayan Galli, Belgaum.', 'Krishnai Sankul, H. No. 1050, Anantshayan Galli, Belgaum.', '1974-09-09', '2003-09-22', 1, 23, 'male', NULL, '2032-09-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:35:53', '2023-11-29 05:35:53'),
(217, 240, 'Manjunath', 'G', 'A', 'H. No. 429, 7th Cross, ITI Layout, 3rd Stage, Opp. R.R. Arch, Mysore Road, Banalore-560 0039', 'S/o Avalappa Goravinakalahalli, Laxmipura(P), Srinivasapura (TQ),  Kolar-563 135', '1985-06-01', '2017-07-05', 1, 20, 'male', NULL, '2043-06-30', NULL, 'A+', NULL, NULL, 7026723766, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:36:22', '2023-11-29 05:36:22'),
(218, 241, 'Smt. Radkhika', 'K', 'Neraserkar', 'Rajaram nagar, (b), GIT Road, Udyambag, Belgaum.', 'Rajaram nagar, (b), GIT Road, Udyambag, Belgaum.', '1974-05-28', '2006-05-05', 1, 10, 'female', NULL, '2032-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:39:19', '2023-11-29 05:39:19'),
(219, 242, 'Snehal', 'D', 'Kulkarni', 'Plot No.34,\'Nilesh\',Hindalga Road, Vinayak Nagar, Belagavi 591108', 'Plot No.34,\'Nilesh\',Hindalga Road, Vinayak Nagar, Belagavi 591108', '1991-07-04', '2021-10-11', 1, 70, 'female', NULL, '2049-07-31', NULL, 'AB-', 'EGEPK3869P', '776657035613', 9740825609, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:39:29', '2023-11-29 05:39:29'),
(220, 243, 'Shri. Mahesh', 'M', 'Sattigeri', '397/8, Savarkar Road, Tilakwadi, Belgaum.', '397/8, Savarkar Road, Tilakwadi, Belgaum.', '1968-07-04', '1996-03-01', 1, 5, 'male', NULL, '2026-07-31', NULL, 'null', NULL, NULL, 9449702248, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:40:50', '2023-11-29 05:40:50'),
(221, 244, 'Prabhakar', 'B', 'Lakkundi', '381, C/o Chandrakant Patil, Tanaji Galli, Near Ganesh Temple Angol, Belgaum.', '381, C/o Chandrakant Patil, Tanaji Galli, Near Ganesh Temple Angol, Belgaum.', '1985-06-17', '2012-08-01', 1, 20, 'male', NULL, '2043-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:41:26', '2023-11-29 05:41:26'),
(222, 245, 'Mr.Rahul', 'R', 'Patil', 'Shivaji Nagar,Khadarwadi, Udyambag, Belagavi 590008', 'Shivaji Nagar,Khadarwadi, Udyambag, Belagavi 590008', '1996-06-03', '2022-04-01', 1, 10, 'male', NULL, '2054-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:43:11', '2023-11-29 05:43:11'),
(223, 246, 'Mr.Kush', 'Appaya', 'Patil', 'House No.143,Laxmi Galli,Honaga, Belagavi 591156', 'House No.143,Laxmi Galli,Honaga, Belagavi 591156', '1987-03-09', '2023-05-08', 1, 10, 'male', NULL, '2045-03-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:48:17', '2023-11-29 05:48:17'),
(224, 247, 'Santosh', 'S', 'Kulkarni', 'Venkatramana, Plot No.262, Sant Rajaram Marg, 3rd Cross, Chidambar Nagar, Belagavi-590006', 'Venkatramana, Plot No.262, Sant Rajaram Marg, 3rd Cross, Chidambar Nagar, Belagavi-590006', '1992-06-22', '2021-10-18', 1, 29, 'male', NULL, '2050-06-30', NULL, 'B+', 'EIYPK6499D', '414437202480', 9481322678, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:49:11', '2023-11-29 05:49:11'),
(225, 248, 'Manisha', 'R', 'Mokashi', 'H. No. 1107, Anantshayan Galli, Tilak Chouck, Belguam.', 'H. No. 1107, Anantshayan Galli, Tilak Chouck, Belguam.', '1976-10-12', '2012-08-21', 1, 10, 'female', NULL, '2034-10-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:49:26', '2023-11-29 05:49:26'),
(226, 249, 'Mrs.Deepa', 'M', 'Badiger', 'House No.520, \'Pancharatna \" Building, Mahaveer nagar, Khanapur road, Belagavi', 'House No.520, \'Pancharatna \" Building, Mahaveer nagar, Khanapur road, Belagavi', '1995-02-14', '2023-05-08', 1, 14, 'female', NULL, '2053-02-28', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:52:33', '2023-11-29 05:52:33'),
(227, 250, 'Amruta', '-', 'Ghadashi {Giri}', '31/A, Laxmi Nagar,  Ganeshpur, Belgaum.', '31/A, Laxmi Nagar,  Ganeshpur, Belgaum.', '1988-02-21', '2013-02-15', 1, 10, 'female', NULL, '2046-02-28', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:53:48', '2023-11-29 05:53:48'),
(228, 251, 'Dr. Harish', 'H', 'Kenchannavar', 'Plot No. 27, 2nd Stage,  Kaveri Nagar, Belguam.', 'Plot No. 27, 2nd Stage,  Kaveri Nagar, Belguam.', '1978-01-14', '2002-09-21', 1, 22, 'male', NULL, '2036-01-31', NULL, 'null', NULL, NULL, 9901375126, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:54:48', '2023-11-29 05:54:48'),
(229, 252, 'Prasann', 'D', 'Kulkarni', 'House No.35,Matru Pitru Krupa, Sindolli Cross, Basavan Kudachi, Belagavi 591124', 'House No.35,Matru Pitru Krupa, Sindolli Cross, Basavan Kudachi, Belagavi 591124', '1986-07-27', '2021-11-15', 1, 5, 'male', NULL, '2044-07-31', NULL, 'B+', 'BFSPK3325N', '417436040584', 9036849123, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 05:56:33', '2023-11-29 05:56:33'),
(230, 253, 'Shubhangi', '-', 'Kangralkar', '1254, Basavan Galli, Shahapur, Belgaum.', '1254, Basavan Galli, Shahapur, Belgaum.', '1978-07-02', '2011-06-03', 1, 10, 'female', NULL, '2036-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:58:06', '2023-11-29 05:58:06'),
(231, 254, 'Mr.Sainath', '-', 'Kumbhar', 'House No.612, Shivaji Nagar, At Post Garalgunji Taluka Khanapur Belagavi 591302', 'House No.612, Shivaji Nagar, At Post Garalgunji Taluka Khanapur Belagavi 591302', '1999-04-15', '2023-10-03', 1, 71, 'male', NULL, '2057-04-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-29 05:58:18', '2023-11-29 05:58:18'),
(232, 255, 'Padmavati', 'S', 'Dandannavar', 'H. No. 2372, Mahantesh Nagar, Belgaum.', 'H. No. 2372, Mahantesh Nagar, Belgaum.', '1973-12-10', '2001-09-18', 1, 72, 'female', NULL, '2031-12-31', NULL, 'null', NULL, NULL, 9886230332, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:02:21', '2023-11-29 06:02:21'),
(233, 256, 'Rakesh', '-', 'Kadkol', '308, Rani Channamma Nagar, 1st Stage, Belguam.', '308, Rani Channamma Nagar, 1st Stage, Belguam.', '1973-07-24', '2003-09-29', 1, 29, 'male', NULL, '2031-07-31', NULL, 'null', NULL, NULL, 8277552389, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:06:06', '2023-11-29 06:06:06'),
(234, 257, 'Shri.Pandurang', 'S', 'Upparamani', 'Plot No. 1683, Mahaveer Nagar, Peeranwadi,  Udyambag, Belguam.', 'Plot No. 1683, Mahaveer Nagar, Peeranwadi,  Udyambag, Belguam.', '1967-01-30', '2005-06-15', 1, 21, 'male', NULL, '2025-01-31', NULL, 'AB+', NULL, NULL, 9242266764, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:11:09', '2023-11-29 06:11:09'),
(235, 258, 'Shri. Kadayya', 'S', 'Mathad', 'Plot No. 965, Mahaveer  Nagar, Khadarwadi Road, Udyambag, Belguam.', 'Plot No. 965, Mahaveer  Nagar, Khadarwadi Road, Udyambag, Belguam.', '1983-07-16', '2006-11-13', 1, 20, 'male', NULL, '2041-07-31', NULL, 'A+', NULL, NULL, 9844665758, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:15:23', '2023-11-29 06:15:23'),
(236, 259, 'Shri. Sudhindra', 'K', 'Madi', 'T-9, Star Towars, Opp.  Canara Bank, near RPD Cross, Tilakwadi, Belgaum.', 'T-9, Star Towars, Opp.  Canara Bank, near RPD Cross, Tilakwadi, Belgaum.', '1968-02-02', '2007-03-01', 1, 5, 'male', NULL, '2026-02-28', NULL, 'null', NULL, NULL, 9986766543, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:18:36', '2023-11-29 06:18:36'),
(237, 260, 'Vijay', 'S', 'Rajpurohit', 'No. 51, Chidambar Nagar, Angol, Belgaum.', 'No. 51, Chidambar Nagar, Angol, Belgaum.', '1975-05-23', '2010-03-03', 1, 25, 'male', NULL, '2033-05-31', NULL, 'B+', 'ADVPR3004P', '510863169614', 9242109675, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:19:36', '2023-11-29 06:19:36'),
(238, 261, 'Neelakanth', '-', 'Karekar', 'C/o S.K. Kakatikar, H. No.  1352, Plot No. 7, Saraswati Nagar, 3rd Cross, Ganeshpur, Belgaum.', 'C/o S.K. Kakatikar, H. No.  1352, Plot No. 7, Saraswati Nagar, 3rd Cross, Ganeshpur, Belgaum.', '1984-11-23', '2007-09-03', 1, 27, 'male', NULL, '2042-11-30', NULL, 'null', NULL, NULL, 9916609481, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:21:36', '2023-11-29 06:21:36'),
(239, 262, 'Sudhindra', 'B', 'Deshpande', 'Plot No. 77, Rani  Channamma Nagar, Belgaum.', 'Plot No. 77, Rani  Channamma Nagar, Belgaum.', '1982-10-19', '2008-04-15', 1, 5, 'male', NULL, '2040-10-30', NULL, 'null', NULL, NULL, 9035280717, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:24:23', '2023-11-29 06:24:23'),
(240, 263, 'Shubha', '-', 'Sanu', 'H. No. 2748, Wangibol, Mahadwar  Road, Kolhapur-416 012', 'H. No. 2748, Wangibol, Mahadwar  Road, Kolhapur-416 012', '1979-09-02', '2016-08-10', 1, 5, 'female', NULL, '2037-09-30', NULL, 'O+', NULL, NULL, 9405040949, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:29:09', '2023-11-29 06:29:09'),
(241, 264, 'M', 'M', 'Math', '\"B\" wing, 204, Ganesh Park, 2nd Cross Bhagyanagar, Tilakwadi, Belgaum.', '\"B\" wing, 204, Ganesh Park, 2nd Cross Bhagyanagar, Tilakwadi, Belgaum.', '1967-07-22', '1989-08-26', 1, 24, 'male', NULL, '2025-07-31', NULL, 'A+', 'ACVPM1986C', '998647745685', 9945001309, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:30:24', '2023-11-29 06:30:24'),
(242, 265, 'Shrivatsa', 'D', 'Perur', 'H. No.  122 /B/2, Vipaynagar, Bubli-32', 'H. No.  122 /B/2, Vipaynagar, Bubli-32', '1992-07-10', '2016-09-15', 1, 5, 'male', NULL, '2050-07-31', NULL, 'null', NULL, NULL, 9845371193, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-29 06:34:34', '2023-11-29 06:34:34'),
(243, 266, 'Dr. Roopali', 'D', 'Kavilkar', 'H. No. 38, Shri Shivaleela, Ashraya Colony, Nanawadi, Belguam.', 'H. No. 38, Shri Shivaleela, Ashraya Colony, Nanawadi, Belguam.', '1971-09-04', '2004-03-01', 4, 46, 'female', NULL, '2029-09-30', NULL, 'AB+', NULL, NULL, 9341123755, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:30:41', '2023-11-30 23:30:41'),
(244, 267, 'Kiran', 'K', 'Tangod', 'S/O Shankar Pirappa Upparamani, Sy.No.321/1a, FF1, Kalpavruksha Apartment, Mahaveer Nagar, Post Udyambag', 'S/O Shankar Pirappa Upparamani, Sy.No.321/1a, FF1, Kalpavruksha Apartment, Mahaveer Nagar, Post Udyambag', '1976-11-07', '2001-09-18', 1, 29, 'male', NULL, '2034-11-30', NULL, 'B+', 'AEQPT0041J', '449515758694', 4565852365, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:31:28', '2023-11-30 23:31:28'),
(245, 268, 'Ms. Nishita', 'R', 'Tadkodkar', 'Flat No. 404, \"A\" wing, Nasco elegence, 4th cross, Bhagyanagar, Tilakwadi, Belgaum.', 'Flat No. 404, \"A\" wing, Nasco elegence, 4th cross, Bhagyanagar, Tilakwadi, Belgaum.', '1971-11-16', '2000-04-10', 1, 5, 'female', NULL, '2029-11-30', NULL, 'A+', NULL, NULL, 9886842529, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:34:26', '2023-11-30 23:34:26'),
(246, 269, 'Sanjeev', 'S', 'Sannakki', 'H. No. 140, Ratanashree,  Guruprasad Nagar, Belgaum', 'H. No. 140, Ratanashree,  Guruprasad Nagar, Belgaum', '1975-08-15', '2004-08-20', 1, 53, 'male', NULL, '2033-08-31', NULL, 'O+', 'BBTPS6288P', '754255728835', 9448853277, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:35:51', '2023-11-30 23:35:51'),
(247, 270, 'Shivappa', '-', 'Balekundri', 'Rajaram nagar, A ,  Udyambag, Belgaum', 'Rajaram nagar, A ,  Udyambag, Belgaum', '1985-07-31', '2019-04-01', 1, 20, 'male', NULL, '2043-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-30 23:37:15', '2023-11-30 23:37:15'),
(248, 271, 'Shri.Ritesh', 'S', 'Dharmayat', 'Plot No. 20, Scheme No. 40, Double Road, Hanuman  Nagar, Belguam', 'Plot No. 20, Scheme No. 40, Double Road, Hanuman  Nagar, Belguam', '1974-05-31', '2004-03-01', 1, 20, 'male', NULL, '2032-05-31', NULL, 'B+', NULL, NULL, 9448989390, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:38:19', '2023-11-30 23:38:19'),
(249, 272, 'Mrs.Swati', 'S', 'Kanbargi', '277/1A,F.No.-14 Nagesh Appartment Agarkar Road, Tilkawadi, Belagavi', '277/1A,F.No.-14 Nagesh Appartment Agarkar Road, Tilkawadi, Belagavi', '1989-01-06', '2022-08-16', 1, 10, 'female', NULL, '2047-01-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-30 23:38:39', '2023-11-30 23:38:39'),
(250, 273, 'D', 'A', 'Kulkarni', 'Plot No. 66, Shrinivas, Guruprasad Nagar, Belgaum.', 'Plot No. 66, Shrinivas, Guruprasad Nagar, Belgaum.', '1965-09-13', '1987-07-23', 1, 25, 'male', NULL, '2023-09-30', NULL, 'A-', 'AETPK7590Q', '461798886734', 9845486735, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:40:27', '2023-11-30 23:40:27'),
(251, 274, 'Somayya', '-', 'Pujeri', 'H.No.119,Kailas Nagar, Sulebhavi, Taluka Dist.Belagavi 591103', 'H.No.119,Kailas Nagar, Sulebhavi, Taluka Dist.Belagavi 591103', '1994-07-15', '2023-02-01', 1, 26, 'male', NULL, '2052-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-30 23:42:33', '2023-11-30 23:42:33'),
(252, 275, 'Mrs.Rutuja', 'Devappa', 'Bastwadkar', 'h.No.610 A, Ganapat Galli, Khadarwadi- Belagavi 5900014', 'h.No.610 A, Ganapat Galli, Khadarwadi- Belagavi 5900014', '2000-12-30', '2023-05-02', 1, 10, 'female', NULL, '2058-12-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-30 23:43:16', '2023-11-30 23:43:16'),
(253, 276, 'Shri Amit', 'V', 'Prasadi', 'C/o Uday Arakeri, Plot No.  46, Saraf Colony, Tilakwadi, Belguam.', 'C/o Uday Arakeri, Plot No.  46, Saraf Colony, Tilakwadi, Belguam.', '1975-08-30', '2011-01-11', 1, 20, 'male', NULL, '2033-08-31', NULL, 'null', NULL, NULL, 9448964011, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:45:08', '2023-11-30 23:45:08'),
(254, 277, 'Mr. Sandeep', '-', 'More', 'No. 585, Gurudev Galli, Laxmi Nagar, Badagaon, Belagavi', 'No. 585, Gurudev Galli, Laxmi Nagar, Badagaon, Belagavi', '1982-07-22', '2017-09-01', 1, 10, 'male', NULL, '2040-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-30 23:47:20', '2023-11-30 23:47:20'),
(255, 278, 'Kuldeep', 'P', 'Sambrekar', 'H. No. 215/5, Somnath Bldg., Anand Nagar, Yellur Road, Vadagaon, Belguam', 'H. No. 215/5, Somnath Bldg., Anand Nagar, Yellur Road, Vadagaon, Belguam', '1984-12-15', '2006-09-19', 1, 10, 'male', NULL, '2042-12-31', NULL, 'O+', 'BNMPS9984H', '637193506365', 9900969887, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:47:31', '2023-11-30 23:47:31'),
(256, 279, 'Amol', 'Vivek', 'Zende', 'House No.115/2, Vaze Gali Vadagaon Belagavi 590005', 'House No.115/2, Vaze Gali Vadagaon Belagavi 590005', '1990-07-23', '2023-10-03', 1, 38, 'male', NULL, '2048-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-30 23:50:23', '2023-11-30 23:50:23'),
(257, 280, 'Mr. Vinay', 'Arvind', 'Deshpande', 'Plot No. 14, Shri Padmalaya, Gul Mohar Colony, Bhagyanagar,  Belguam.', 'Plot No. 14, Shri Padmalaya, Gul Mohar Colony, Bhagyanagar,  Belguam.', '1982-06-25', '2012-04-02', 1, 5, 'male', NULL, '2040-06-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-30 23:52:44', '2023-11-30 23:52:44'),
(258, 281, 'Umesh', 'M', 'Kulkarni', 'Shri Sadaguru Krupa, Plat  No. 16, Kalkamb Maruti Mandir, Belguam.', 'Shri Sadaguru Krupa, Plat  No. 16, Kalkamb Maruti Mandir, Belguam.', '1985-05-30', '2007-07-04', 1, 25, 'male', NULL, '2043-05-31', NULL, 'O-', 'AVPPK8102R', '589761931059', 9449927661, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:53:40', '2023-11-30 23:53:40'),
(259, 282, 'Mr. Mahesh', 'G', 'Kangralkar', 'H. No. 1254-A, Basaan Galli, Shahpaur, Belagavi.', 'H. No. 1254-A, Basaan Galli, Shahpaur, Belagavi.', '1974-07-22', '2019-04-01', 1, 10, 'male', NULL, '2032-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-30 23:55:43', '2023-11-30 23:55:43'),
(260, 283, 'Ms. Shruti', '-', 'Mutkekar', 'H. No. 12167, Dharmaji sankul,  1st floor, Pangul Galli, Belgaum.', 'H. No. 12167, Dharmaji sankul,  1st floor, Pangul Galli, Belgaum.', '1980-11-26', '2004-03-01', 1, 10, 'female', NULL, '2038-11-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-30 23:57:42', '2023-11-30 23:57:42'),
(261, 284, 'Uday', '-', 'Birje', 'House No.138, Sambhaji Road, Khasabag Belagavi, Belagavi Shahapur', 'House No.138, Sambhaji Road, Khasabag Belagavi, Belagavi Shahapur', '1986-12-18', '2023-08-01', 1, 10, 'male', NULL, '2044-12-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-11-30 23:58:56', '2023-11-30 23:58:56'),
(262, 285, 'Mrs. Geetha', 'M', 'Sambrekar', 'H. No. 41/B, Adarshnagar,  1st cross, Vadagaon, Belgaum.', 'H. No. 41/B, Adarshnagar,  1st cross, Vadagaon, Belgaum.', '1967-04-21', '2008-04-03', 1, 10, 'female', NULL, '2025-04-30', NULL, 'A+', NULL, NULL, 9844866232, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:01:27', '2023-12-01 00:01:27'),
(263, 286, 'Ms. Jyoti', 'S', 'Patil', 'H. No. 202, Unity Apprts., Shivalaya Road, Sadashiv Nagar, Belgaum.', 'H. No. 202, Unity Apprts., Shivalaya Road, Sadashiv Nagar, Belgaum.', '1977-09-10', '2011-11-10', 1, 11, 'female', NULL, '2035-09-30', NULL, 'B+', NULL, NULL, 9481322893, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:06:30', '2023-12-01 00:06:30'),
(264, 287, 'Gouri', 'S', 'Khadabadi', 'Plot No. 824, Sector No. 5, Shri Nagar, Malmaruti Extention, Belguam.', 'Plot No. 824, Sector No. 5, Shri Nagar, Malmaruti Extention, Belguam.', '1983-07-18', '2005-08-13', 1, 20, 'female', NULL, '2041-07-31', NULL, 'O+', 'AVPPK1693M', '428881021024', 9986726750, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:06:34', '2023-12-01 00:06:34'),
(265, 288, 'Shri. Upendra', 'A', 'Joshi', 'C/o N.K. Shirpurkar, Kalamruta, Hindu Nagar, near 3rd  Railway  gate, Belgaum.', 'C/o N.K. Shirpurkar, Kalamruta, Hindu Nagar, near 3rd  Railway  gate, Belgaum.', '1975-08-20', '1999-11-02', 1, 23, 'male', NULL, '2033-08-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:11:57', '2023-12-01 00:11:57'),
(266, 289, 'Mrs. Pratiksha', '-', 'Navelkar', 'Niti, CCB-82, Mrutyunjaya Nagar, Khanapur Road, Tilakwadi, Belgaum-590 006', 'Niti, CCB-82, Mrutyunjaya Nagar, Khanapur Road, Tilakwadi, Belgaum-590 006', '1972-10-04', '2014-07-15', 1, 15, 'female', NULL, '2030-10-31', NULL, 'O+', NULL, NULL, 9449624484, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:12:12', '2023-12-01 00:12:12'),
(267, 290, 'Mrs. Anagha', '-', 'Garagatti', '121, Math Galli, Hosur,  Shahapur, Belgaum', '121, Math Galli, Hosur,  Shahapur, Belgaum', '1977-07-22', '2012-02-06', 1, 11, 'female', NULL, '2035-07-31', NULL, 'O+', NULL, NULL, 9535769557, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:17:13', '2023-12-01 00:17:13'),
(268, 291, 'Shivani', 'Jitendra', 'Kalkhembkar', 'Plot No. 32, Ashirwad Building,  Subhandra Chandra Nagar, Tilakwadi, Belagavi-590006.', 'Plot No. 32, Ashirwad Building,  Subhandra Chandra Nagar, Tilakwadi, Belagavi-590006.', '1995-08-04', '2018-02-01', 1, 10, 'female', NULL, '2053-08-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:17:23', '2023-12-01 00:17:23'),
(269, 292, 'Chandrahas', 'G', 'Janagonda', 'Banashankar\" Plot No.13,8th Cross, Bhagyanagar,Belagavi 590006', 'Banashankar\" Plot No.13,8th Cross, Bhagyanagar,Belagavi 590006', '1980-05-28', '2004-12-17', 1, 26, 'male', NULL, '2038-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:17:42', '2023-12-01 00:17:42'),
(270, 293, 'Arati', 'S', 'Shahapurkar', 'H. No. 2087, Kore Galli,  Shahapur, Belgaum.', 'H. No. 2087, Kore Galli,  Shahapur, Belgaum.', '1978-06-01', '2006-08-07', 1, 73, 'female', NULL, '2036-06-30', NULL, 'O+', 'BNKPS0740M', '453554817491', 9972944497, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:18:16', '2023-12-01 00:18:16'),
(271, 294, 'Vidya', 'V', 'Katti', 'H. No. 125, Vaze Galli, Vaze Chal, Vadagaon, Belgaum.', 'H. No. 125, Vaze Galli, Vaze Chal, Vadagaon, Belgaum.', '1983-05-22', '2011-10-01', 1, 5, 'female', NULL, '2041-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:21:45', '2023-12-01 00:21:45'),
(272, 295, 'Ms. Pratibha', 'G', 'Desai', 'Sai Shradha, Plot No. 11, Budha Scheme No. 8, Near 2nd Railway  Gate, Tilakwadi, Belgaum.', 'Sai Shradha, Plot No. 11, Budha Scheme No. 8, Near 2nd Railway  Gate, Tilakwadi, Belgaum.', '1974-11-06', '2010-06-01', 1, 36, 'female', NULL, '2032-11-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:23:45', '2023-12-01 00:23:45'),
(273, 296, 'Ms. Spurti', 'S', 'Khemlapure', 'Flot No. 406, Gilganchi Apartment, Somwat Peth, Tilakwadi,  Belagavi-590 006.', 'Flot No. 406, Gilganchi Apartment, Somwat Peth, Tilakwadi,  Belagavi-590 006.', '1992-01-01', '2015-08-25', 4, 46, 'female', NULL, '2050-01-30', NULL, 'B+', NULL, NULL, 9742785797, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:24:36', '2023-12-01 00:24:36'),
(274, 297, 'Medha', 'V', 'Kulkarni', 'Plot No. 128, Renuka krupa,  4th Cross, Devasthan Marg, Chidambar Nagar, Tilakwadi, Belagavi-590 006.', 'Plot No. 128, Renuka krupa,  4th Cross, Devasthan Marg, Chidambar Nagar, Tilakwadi, Belagavi-590 006.', '1980-07-18', '2019-03-01', 1, 5, 'female', NULL, '2038-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:26:38', '2023-12-01 00:26:38'),
(275, 298, 'Ramesh', 'A', 'Medar', 'Survey No. 42/2, Plat No. 5, Teachers Colony, Khasbag,  Belgaum.', 'Survey No. 42/2, Plat No. 5, Teachers Colony, Khasbag,  Belgaum.', '1984-11-21', '2006-08-10', 1, 74, 'male', NULL, '2042-11-30', NULL, 'A+', 'AQLPM5042P', '416030594585', 9886254987, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:28:14', '2023-12-01 00:28:14'),
(276, 299, 'Mr. Bhushan', 'R', 'Maraganache', 'H. No. 87 / B,  Kalmeshwar Galli, Belagavi.', 'H. No. 87 / B,  Kalmeshwar Galli, Belagavi.', '1994-05-27', '2016-01-16', 1, 10, 'male', NULL, '2052-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:30:40', '2023-12-01 00:30:40'),
(277, 300, 'M', 'D', 'Badiger', 'Laxmi nivas, H. No. 11, Cross No.  15, Gokul Nagar, Mutaga, Belguam.', 'Laxmi nivas, H. No. 11, Cross No.  15, Gokul Nagar, Mutaga, Belguam.', '1966-03-10', '2006-02-01', 1, 14, 'male', NULL, '2024-03-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:32:11', '2023-12-01 00:32:11'),
(278, 301, 'Pavanika', 'T', 'Biradar', 'Flat No. 10, \"A\" block, Akta Apartment, Sadashiv Nagar, Belagavi-590 010.', 'C/o Anandkumar G Patil, Anand Nilaya, Near Hanuman Talkies, Shorapur, Dist  :  Yadagur-585 224.', '1988-07-11', '2016-09-28', 1, 21, 'female', NULL, '2046-07-31', NULL, 'B+', NULL, NULL, 8792650805, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:33:24', '2023-12-01 00:33:24'),
(279, 302, 'Manjula', 'M', 'Ramannavar', 'H. No. 36, Bazaar Galli, Khasbag, Belgaum.', 'H. No. 36, Bazaar Galli, Khasbag, Belgaum.', '1978-03-12', '2007-06-01', 1, 21, 'female', NULL, '2036-03-31', NULL, 'AB+', 'AJDPR2719R', '544414502680', 9902895405, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:33:39', '2023-12-01 00:33:39');
INSERT INTO `staff` (`id`, `user_id`, `fname`, `mname`, `lname`, `local_address`, `permanent_address`, `dob`, `doj`, `religion_id`, `castecategory_id`, `gender`, `date_of_increment`, `date_of_superanuation`, `date_of_confirmation`, `bloodgroup`, `pan_card`, `adhar_card`, `contactno`, `aicte_id`, `vtu_id`, `esi_no`, `un_no`, `emergency_no`, `emergency_name`, `employee_type`, `created_at`, `updated_at`) VALUES
(280, 303, 'Ms. Nutan', 'V', 'Bhosale', 'H. No. 43 / 133. Tanaji Galli, Belagavi', 'H. No. 43 / 133. Tanaji Galli, Belagavi', '1980-02-12', '2016-11-03', 1, 10, 'female', NULL, '2038-02-28', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:35:38', '2023-12-01 00:35:38'),
(281, 304, 'Vaibhav', 'N', 'Gundap', 'Rajaram Nagar, Udyambag, Belagavi-590 008.', 'Rajaram Nagar, Udyambag, Belagavi-590 008.', '1996-02-25', '2019-09-11', 1, 10, 'male', NULL, '2054-02-28', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:37:00', '2023-12-01 00:37:00'),
(282, 305, 'Ms. Priyanka', '-', 'Rajput', 'H. No. 12, Shubhakiran, Double Road, Hanuman Nagar, Kuvempu Nagar, Belagavi-590 019', 'H. No. 12, Shubhakiran, Double Road, Hanuman Nagar, Kuvempu Nagar, Belagavi-590 019', '1993-09-18', '2017-07-17', 1, 10, 'female', NULL, '2051-09-30', NULL, 'A+', NULL, NULL, 9916361485, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:37:23', '2023-12-01 00:37:23'),
(283, 306, 'Kavitha', 'V', 'Hanabaratti', 'H. No. 15, SBI Colony, 1st stage, Rani Channamma Nagar, Belgaum.', 'H. No. 15, SBI Colony, 1st stage, Rani Channamma Nagar, Belgaum.', '1989-03-08', '2007-03-10', 1, 18, 'female', NULL, '2037-03-31', NULL, 'O+', 'ACOPH9219C', '302317870473', 9481558297, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:37:41', '2023-12-01 00:37:41'),
(284, 307, 'Mr. Satyajit', 'P', 'Desai', 'H. No. 413, 6th cross, Bharat Nagar, Shahapur, Belgaum-590 003.', 'H. No. 413, 6th cross, Bharat Nagar, Shahapur, Belgaum-590 003.', '1991-05-25', '2016-11-07', 1, 10, 'male', NULL, '2049-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:39:34', '2023-12-01 00:39:34'),
(285, 308, 'Prasad', 'M', 'Pujar', 'H. No. 489, Sheshagiri Bldg., Sheri Galli, Belgaum.', 'H. No. 489, Sheshagiri Bldg., Sheri Galli, Belgaum.', '1981-10-10', '2009-08-13', 1, 29, 'male', NULL, '2039-11-30', NULL, 'B+', 'AXUPP4397E', '376819597487', 9886447375, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:41:08', '2023-12-01 00:41:08'),
(286, 309, 'Archana', '-', 'Patil', 'Plot No. 7 Ganesh Marg, Hindwadi, Belagavi', 'Plot No. 7 Ganesh Marg, Hindwadi, Belagavi', '1982-07-21', '2018-01-08', 1, 10, 'female', NULL, '2040-07-31', NULL, 'null', NULL, NULL, 9408862309, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:41:13', '2023-12-01 00:41:13'),
(287, 310, 'Mr.  Anand', 'S', 'Mutalikdesai', 'Plot No. 139, Chidambar Nagar, 5th Cross, Devasthana Marg, Belagavi.', 'Plot No. 139, Chidambar Nagar, 5th Cross, Devasthana Marg, Belagavi.', '1971-03-23', '2015-03-15', 1, 5, 'male', NULL, '2029-03-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:44:34', '2023-12-01 00:44:34'),
(288, 311, 'Mr. Vinayak', '-', 'Patil', 'Plot No. 57, Chhaya Kaivalya Nagar,  Tilakwadi, Belagavi-590 006.', 'H. No. 2317, Patil Dairy, Minatai Nagar, Ugar-Kurd, Tq  :  Athani, Dist  :  Belagavi.', '1981-07-22', '2019-01-01', 1, 20, 'male', NULL, '2039-07-31', NULL, 'AB+', NULL, NULL, 9980704770, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:45:40', '2023-12-01 00:45:40'),
(289, 312, 'Pranesh', 'V', 'Katti', 'Plot No. 12, Dyannanidhi,  Syndicate Bank Colony,  Bable Galli, Angol, Belguam.', 'Plot No. 12, Dyannanidhi,  Syndicate Bank Colony,  Bable Galli, Angol, Belguam.', '1973-02-10', '1996-03-01', 1, 23, 'male', NULL, '2031-02-28', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:45:41', '2023-12-01 00:45:41'),
(290, 313, 'Pankaja', 'S', 'Kadalagi(Patil)', 'Krish Residency, Flat No. 305, 3rd Floor, Somwarpeth, Tilakwadi, Belgaum.', 'Krish Residency, Flat No. 305, 3rd Floor, Somwarpeth, Tilakwadi, Belgaum.', '1975-11-20', '2008-08-12', 1, 26, 'female', NULL, '2033-11-30', NULL, 'B+', 'AZAPP8696C', '356276719748', 9480561831, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:46:19', '2023-12-01 00:46:19'),
(291, 314, 'Shubhada', 'S', 'Kulkarni', 'S-4, Trinity Garden Apprts., Somwarpeth, Tilakwadi, Belgaum.', 'S-4, Trinity Garden Apprts., Somwarpeth, Tilakwadi, Belgaum.', '1968-08-21', '2009-08-07', 1, 29, 'female', NULL, '2026-08-31', NULL, 'A+', 'AVIPK4950E', '803499559667', 8050301976, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:51:01', '2023-12-01 00:51:01'),
(292, 315, 'Ms. Mangal', 'B', 'Honnyal', 'H. No. 2140, Vishnu Nagar,  Peeranwadi, Belagavi.', 'Vikram Pujari, Devang Nagar, Iind Cross  Vadagaon,Belagavi', '1991-08-08', '2019-01-07', 1, 13, 'female', NULL, '2049-08-31', NULL, 'A-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:51:32', '2023-12-01 00:51:32'),
(293, 316, 'Ms. Sukoon', 'Qais', 'Bhavnagari', '1386, Plot No. 26 / 27, Opp. NCC Office, Jadhav Nagar, Belagavi-590001.', '1386, Plot No. 26 / 27, Opp. NCC Office, Jadhav Nagar, Belagavi-590001.', '1981-08-14', '2019-01-01', 3, 75, 'female', NULL, '2039-08-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:53:37', '2023-12-01 00:53:37'),
(294, 317, 'Mr. Sanganna', 'M', 'Poleshi', 'H. No. 1200, Ganapat Galli,  Peeranwadi, Belagavi.', 'H. No. 1200, Ganapat Galli,  Peeranwadi, Belagavi.', '1989-06-07', '2020-01-01', 1, 20, 'male', NULL, '2047-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:55:49', '2023-12-01 00:55:49'),
(295, 318, 'Satish', 'S', 'Hukkeri', '658, 2nd stage, Rani  Chanamma Nagar,  Belgaum-529 006', '658, 2nd stage, Rani  Chanamma Nagar,  Belgaum-529 006', '1969-11-29', '2014-01-13', 1, 11, 'male', NULL, '2027-11-30', NULL, 'B+', 'AANPH5786M', '744778277146', 8050409975, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:55:58', '2023-12-01 00:55:58'),
(296, 319, 'Mr. Mohammed', 'Sadiq', 'Desai', 'H. No. 768, Sadalgi Building, Adarsha Nagar, 5th Cross, Hindwadi, Belagavi-5900011.', 'H. No. 768, Sadalgi Building, Adarsha Nagar, 5th Cross, Hindwadi, Belagavi-5900011.', '1985-07-18', '2019-01-01', 3, 75, 'male', NULL, '2043-07-31', NULL, 'A+', NULL, NULL, 7411526527, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:58:47', '2023-12-01 00:58:47'),
(297, 320, 'Pavan', 'N', 'Kunchur', 'C/o P.V. Kadagadkai, 3rd cross, Bhagyanagar, Belgaum', 'C/o P.V. Kadagadkai, 3rd cross, Bhagyanagar, Belgaum', '1984-07-04', '2014-02-01', 1, 5, 'male', NULL, '2042-04-30', NULL, 'B+', NULL, NULL, 8095958867, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 00:59:23', '2023-12-01 00:59:23'),
(298, 321, 'Ms.Shivani', 'S', 'Jadhav', 'h.No.4405 Chavat Galli, Belagavi Belagavi', 'h.No.4405 Chavat Galli, Belagavi Belagavi', '1997-01-10', '2022-06-01', 1, 10, 'female', NULL, '2055-01-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 00:59:35', '2023-12-01 00:59:35'),
(299, 322, 'Vinay', 'S', 'Ashtekar', 'Amruta Apprts, G-1, 190-2B,  Savarkar Road, Tilakwadi, Belguam.', 'Amruta Apprts, G-1, 190-2B,  Savarkar Road, Tilakwadi, Belguam.', '1980-11-15', '2005-06-01', 1, 5, 'male', NULL, '2038-11-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:02:18', '2023-12-01 01:02:18'),
(300, 323, 'Mrs.Deepali', '-', 'Araganji', 'H.No.7,4th Cross,basav Colony, Indal Road, Belagavi 590010', 'H.No.7,4th Cross,basav Colony, Indal Road, Belagavi 590010', '1997-01-22', '2022-06-01', 1, 10, 'female', NULL, '2055-01-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:03:20', '2023-12-01 01:03:20'),
(301, 324, 'Rudragoud', 'S', 'Patil', 'Plot No. 6, Sy. No. 70 / 2,   8th cross, Bhagyanagar, Belgaum-590 006', 'Plot No. 6, Sy. No. 70 / 2,   8th cross, Bhagyanagar, Belgaum-590 006', '1984-07-30', '2014-03-19', 1, 20, 'male', NULL, '2042-07-31', NULL, 'B+', 'ARJPP3561B', '871586047230', 9845954052, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:03:36', '2023-12-01 01:03:36'),
(302, 325, 'Ms.Madhuri', 'G', 'Joshi', '10th Cross,\'Kaml Kutter\', Bhagyanagar, Belagavi 590006', '10th Cross,\'Kaml Kutter\', Bhagyanagar, Belagavi 590006', '1999-06-19', '2022-06-01', 1, 5, 'female', NULL, '2057-06-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:06:05', '2023-12-01 01:06:05'),
(303, 326, 'Laxmi', 'Pravin', 'Kulkarni', 'Amantron Lotus, F/A, 2nd floor, Rajaram Marg, Chidambag Nagar,  Belagavi.', 'Amantron Lotus, F/A, 2nd floor, Rajaram Marg, Chidambag Nagar,  Belagavi.', '1987-07-22', '2018-01-01', 1, 5, 'female', NULL, '2045-03-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:07:39', '2023-12-01 01:07:39'),
(304, 327, 'Mrs.Rajam', 'Mayur', 'Patil', 'Flat No.106, 1st Floor, Ganesh Ashraya Building, Saraf Galli, Shahapur Belagavi', 'H.No.899/6-B, Fulbag Galli, Belagavi 590001', '1987-02-07', '2022-06-06', 1, 10, 'female', NULL, '2045-02-28', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:10:35', '2023-12-01 01:10:35'),
(305, 328, 'Sudhindra', 'T', 'Kulkarni', 'Bhagya Tara building, Omkar Nagar, Shindoli, Belagavi-591 124', 'Bhagya Tara building, Omkar Nagar, Shindoli, Belagavi-591 124', '1982-07-08', '2019-03-01', 1, 5, 'female', NULL, '2040-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:12:24', '2023-12-01 01:12:24'),
(306, 329, 'Mr. Siddharth', 'A', 'Patil', 'H. No. 38/B, Safelya, Behind NCC Office, Jadhav Nagar,  Belagavi.', 'H. No. 38/B, Safelya, Behind NCC Office, Jadhav Nagar,  Belagavi.', '1973-11-05', '2009-01-01', 1, 11, 'male', NULL, '2031-11-30', NULL, 'B+', 'BILPS7206J', '548081886876', 9448245981, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:13:41', '2023-12-01 01:13:41'),
(307, 330, 'Mr.Madhav', 'R', 'Kulkarni', 'H.No.354/B, Nehru Road, Tilakwadi 590006', 'H.No.354/B, Nehru Road, Tilakwadi 590006', '1984-08-27', '2022-06-05', 1, 5, 'male', NULL, '2042-08-31', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:14:48', '2023-12-01 01:14:48'),
(308, 331, 'Parimal', 'V', 'Tergundi', 'H. No. 438, Mohd. Ali Road, Ist gate, Tilakwadi,  Belgaum-590 006', 'H. No. 438, Mohd. Ali Road, Ist gate, Tilakwadi,  Belgaum-590 006', '1975-12-06', '2014-04-07', 1, 5, 'male', NULL, '2033-12-31', NULL, 'O-', 'AJRPT2359M', '542244862600', 7406097807, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:14:50', '2023-12-01 01:14:50'),
(309, 332, 'Manjunath', '-', 'Palankar', 'House No.468/B,Arjun Colony, 2nd Stage, Rani Channamma Nagar, Belagavi', 'House No.468/B,Arjun Colony, 2nd Stage, Rani Channamma Nagar, Belagavi', '1978-05-09', '2022-05-01', 1, 27, 'male', NULL, '2036-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:17:16', '2023-12-01 01:17:16'),
(310, 333, 'Girish', 'R', 'Deshpande', 'R.N. Deshpande, Union Bank of India, Bazar Road, Saundatti-591 126', 'R.N. Deshpande, Union Bank of India, Bazar Road, Saundatti-591 126', '1988-05-06', '2015-02-04', 1, 5, 'male', NULL, '2046-05-31', NULL, 'O+', 'BPEPD4969R', '713830270184', 9743311528, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:19:05', '2023-12-01 01:19:05'),
(311, 334, 'Aditi', 'A', 'Dhamnekar', 'H no.2063 ,bhatkande galli belgaum.', 'H no.2063 ,bhatkande galli belgaum.', '1992-12-31', '2022-12-01', 1, 10, 'female', NULL, '2050-12-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:20:25', '2023-12-01 01:20:25'),
(312, 335, 'Mr.Vijayendra', '-', 'Gurav', 'Sorbhi Nivas 2nd Cross, Subhedar Pallya, Yeshwantpur, Bangalore - 560022', 'Sorbhi Nivas 2nd Cross, Subhedar Pallya, Yeshwantpur, Bangalore - 560022', '1988-09-27', '2021-10-12', 1, 10, 'male', NULL, '2046-09-30', NULL, 'O+', NULL, NULL, 8147419707, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:21:00', '2023-12-01 01:21:00'),
(313, 336, 'Prashant', 'Y', 'Niranjan', 'Plot No. 75, Rajaram Nagar {B},  Udyambag, Belagavi-590 008.', 'Plot No. 75, Rajaram Nagar {B},  Udyambag, Belagavi-590 008.', '1989-11-26', '2016-01-01', 1, 57, 'male', NULL, '2047-11-30', NULL, 'O+', 'AMLPN2646J', '702880585795', 97310268274, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:23:06', '2023-12-01 01:23:06'),
(314, 337, 'Suresh', '-', 'Majati', 'At post  :  Hannikeri, Tq :  Bailhongal, Dist  :  Belagavi.', 'At post  :  Hannikeri, Tq :  Bailhongal, Dist  :  Belagavi.', '1981-07-18', '2019-08-01', 1, 20, 'male', NULL, '2039-07-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:24:01', '2023-12-01 01:24:01'),
(315, 338, 'Mr. Basavaraj', 'A', 'Hudli', 'C/o Raju Mahadev Bachulkar, Radha Krishma Marg, 3rd Cross, Hindwadi, Belgaum.', 'C/o Raju Mahadev Bachulkar, Radha Krishma Marg, 3rd Cross, Hindwadi, Belgaum.', '1977-06-01', '2006-05-05', 1, 20, 'male', NULL, '2035-06-30', NULL, 'O-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:24:28', '2023-12-01 01:24:28'),
(316, 339, 'Mr.Prasad', 'P', 'Kulkarni', 'H.No.1301, Amrut, Konwal Galli, Belagavi 590001', 'H.No.1301, Amrut, Konwal Galli, Belagavi 590001', '1993-01-18', '2021-10-12', 1, 5, 'male', NULL, '2051-01-31', NULL, 'AB+', NULL, NULL, 7204377243, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:25:53', '2023-12-01 01:25:53'),
(317, 340, 'Sudha', 'H', 'Ayatti', 'CCB No. 124, Nitin Smriti, Near Military Canteen, Tilakwadi, Belagavi.', 'CCB No. 124, Nitin Smriti, Near Military Canteen, Tilakwadi, Belagavi.', '1982-08-26', '2016-01-01', 1, 57, 'female', NULL, '2040-08-31', NULL, 'B+', 'AMBPA4250D', '518754331703', 8904859938, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:29:43', '2023-12-01 01:29:43'),
(318, 341, 'Manisha', '-', 'Mehatar', 'S.Y.No.3569/A, Kaveri Road,              3rd Cross Bhavani Nagar, Tilakwadi, Karnataka 590006', 'S.Y.No.3569/A, Kaveri Road,              3rd Cross Bhavani Nagar, Tilakwadi, Karnataka 590006', '1983-02-23', '2023-08-01', 1, 41, 'female', NULL, '2041-02-28', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:31:34', '2023-12-01 01:31:34'),
(319, 342, 'Mr.Mayur', '-', 'Sapre', '32/408,Beside Lokmanya Co-op Society, First Cross, Bhagyanagar, Belagavi', '32/408,Beside Lokmanya Co-op Society, First Cross, Bhagyanagar, Belagavi', '1990-12-17', '2021-10-12', 1, 10, 'male', NULL, '2048-12-31', NULL, 'B+', NULL, NULL, 7829311878, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:31:48', '2023-12-01 01:31:48'),
(320, 343, 'Sharada', 'Mahesh', 'Kori', 'C/o S.B. Koli, Plot No. 15, Shriram Colony, Near Ved Mandir, Rani Chanamma Nagar, 2nd Stage, Belagavi', 'C/o S.B. Koli, Plot No. 15, Shriram Colony, Near Ved Mandir, Rani Chanamma Nagar, 2nd Stage, Belagavi', '1981-12-06', '2016-01-04', 1, 20, 'female', NULL, '2039-12-31', NULL, 'AB+', 'AGLPY5563F', '413917968370', 7026389654, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:33:39', '2023-12-01 01:33:39'),
(321, 344, 'Shri. Praveen', 'Y', 'Zende', 'GIT College Road, 1st Cross,  Rajaram Nagar,  Udyambag, Belguam.', 'GIT College Road, 1st Cross,  Rajaram Nagar,  Udyambag, Belguam.', '1986-10-15', '2013-02-06', 1, 10, 'male', NULL, '2044-10-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:33:51', '2023-12-01 01:33:51'),
(322, 345, 'Ms. Soumya', '-', 'Haritay', 'Ramashree,CCB 218 , 2nd Cross Bhagyanagar, Tilakwadi Belagavi 590006', 'Ramashree,CCB 218 , 2nd Cross Bhagyanagar, Tilakwadi Belagavi 590006', '1995-11-02', '2022-01-24', 1, 56, 'female', NULL, '2053-02-28', NULL, 'O+', NULL, NULL, 8050558707, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:36:51', '2023-12-01 01:36:51'),
(323, 346, 'Ravi', 'U', 'Kalkundri', 'Plot No. 16, Maratha Colony,  Tilakwadi, Belgaum', 'Plot No. 16, Maratha Colony,  Tilakwadi, Belgaum', '1982-12-05', '2016-01-14', 1, 11, 'male', NULL, '2040-12-31', NULL, 'B+', 'BRYPK6863R', '930170603305', 9908909852, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:40:28', '2023-12-01 01:40:28'),
(324, 347, 'Ms.Priyadarshini', '-', 'Khot', 'H.No.725,Padmamba Rani Channamma Nagar, 2nd Stafe, behind Laxmi Mandir, Belagavi 590006', 'H.No.725,Padmamba Rani Channamma Nagar, 2nd Stafe, behind Laxmi Mandir, Belagavi 590006', '1993-03-27', '2022-02-15', 4, 46, 'female', NULL, '2051-03-31', NULL, 'O+', NULL, NULL, 9448691862, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:41:16', '2023-12-01 01:41:16'),
(325, 348, 'Sagar', 'S', 'Balikai', 'H. No. 2177, 2nd cross, laxmi nagar, Kakti, Belagavi-591 113', 'H. No. 2177, 2nd cross, laxmi nagar, Kakti, Belagavi-591 113', '1998-08-12', '2016-09-02', 1, 11, 'male', NULL, '2056-08-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:41:19', '2023-12-01 01:41:19'),
(326, 349, 'Shri. Sachin', 'S', 'Jadhav', 'H. No. 501, Ramdev Galli, madhavpur, Vadagaon, Belgaum.', 'H. No. 501, Ramdev Galli, madhavpur, Vadagaon, Belgaum.', '1990-08-07', '2013-02-06', 1, 10, 'male', NULL, '2048-08-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:43:35', '2023-12-01 01:43:35'),
(327, 350, 'Ms.Rashmi', '-', 'Pai', '\'Sneha Nilaya\' K.E.B.Road,  Desai Plot Raybag 591317', '\'Sneha Nilaya\' K.E.B.Road,  Desai Plot Raybag 591317', '1996-06-19', '2022-07-05', 1, 5, 'female', NULL, '2054-06-30', NULL, 'null', NULL, NULL, 9481943788, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:44:39', '2023-12-01 01:44:39'),
(328, 351, 'Rahul', 'S', 'Kulkarni', '137, Banashankari, Cauvery Nqagar, Belagavi-590 006.', '137, Banashankari, Cauvery Nqagar, Belagavi-590 006.', '1987-07-27', '2016-08-10', 1, 5, 'male', NULL, '2045-07-31', NULL, 'A+', 'BCVPK9685B', '345678901234', 9480005423, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:45:05', '2023-12-01 01:45:05'),
(329, 352, 'Shri. Nagaraj', 'D', 'Nerli', 'Rajaram Nagar, Udyambag, Belgaum.', 'Rajaram Nagar, Udyambag, Belgaum.', '1986-08-10', '2013-02-06', 1, 20, 'male', NULL, '2044-08-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:47:25', '2023-12-01 01:47:25'),
(330, 353, 'Mr.Nikhil', '-', 'Baswatkar', 'H.No.175,Janata Colony, Sulage(Yellur),Tal & Dist Belaga', 'Plot No.9F,Sr.No.126/1,3rd Cross Anand nagar Vadagaon Belagavi', '1991-07-25', '2022-10-01', 1, 10, 'male', NULL, '2049-07-31', NULL, 'A+', NULL, NULL, 8880209573, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:48:26', '2023-12-01 01:48:26'),
(331, 354, 'Shivaleela', 'S', 'Kalyani', 'Shivaleela Kalyani, C/o Appanna Satagouda,  Brahma Nilaya, Sector No. 3,  Opp. Government School, Majagaon, Belagavi-590 009.', 'Permanent  :  Ward No. 3, Vani peth, Guledgudd.   Dist  :  Bagalkot. Tq  :  Badami-587 203', '1982-02-11', '2013-05-11', 1, 20, 'female', NULL, '2040-02-29', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:48:41', '2023-12-01 01:48:41'),
(332, 355, 'Raghavendra', 'Y', 'Jadhav', 'H. No. 67 / B, Somawarpeth, Tilakwadi, Belagavi-590 006.', 'H. No. 67 / B, Somawarpeth, Tilakwadi, Belagavi-590 006.', '1984-11-26', '2016-08-11', 1, 10, 'male', NULL, '2042-11-30', NULL, 'null', 'ANPPJ7113F', '245704300926', 9019374052, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:49:27', '2023-12-01 01:49:27'),
(333, 356, 'Mr. Girish', '-', 'Mahajan', 'H. No. 83, Hosur Basavan Galli, Shahapur, Belagavi.', 'H. No. 472, Narvekar Galli, Shahapur, Belagavi.', '1984-06-01', '2016-10-25', 1, 5, 'male', NULL, '2042-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:52:06', '2023-12-01 01:52:06'),
(334, 357, 'Mr.Omkar', '-', 'Vernekar', 'H.No.260,Saraswati Road, Bharatnagar Shahapur, Belagavi 590003', 'H.No.260,Saraswati Road, Bharatnagar Shahapur, Belagavi 590003', '1995-03-01', '2023-03-06', 1, 31, 'male', NULL, '2053-01-31', NULL, 'B+', NULL, NULL, 7019401379, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:52:12', '2023-12-01 01:52:12'),
(335, 358, 'Mamata.', 'A', 'Parvatikar', 'Plot No. 546, Sourabha, 2nd Stage, Rani Channamma Nagar, Belgaum.', 'Plot No. 546, Sourabha, 2nd Stage, Rani Channamma Nagar, Belgaum.', '1979-07-22', '2010-06-08', 1, 29, 'female', NULL, '2037-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 01:54:59', '2023-12-01 01:54:59'),
(336, 359, 'Vidyadheesh', 'J', 'Pandurangi', 'Satyapranjya, 5th cross, Malamaddi, Dharwad-580 007.', 'Satyapranjya, 5th cross, Malamaddi, Dharwad-580 007.', '1992-07-07', '2017-09-08', 1, 5, 'male', NULL, '2050-07-31', NULL, 'B+', 'BMPPP9858P', '458820895617', 8095013250, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:55:43', '2023-12-01 01:55:43'),
(337, 360, 'Arundhati', 'V', 'Nelli', 'C / O V.I. Nelli,  Plot No. 35, Ram Nagar, Belagavi.', 'C / O V.I. Nelli,  Plot No. 35, Ram Nagar, Belagavi.', '1986-12-20', '2017-10-06', 1, 20, 'female', NULL, '2044-12-31', NULL, 'A+', 'AKFPN2088Q', '689142576634', 9008450807, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 01:59:29', '2023-12-01 01:59:29'),
(338, 361, 'Pradeep', 'S', 'Patil', '2/1, Air port Colony, Sambra, Belgaum-591 124', 'H. No. 966 / 3 /1, Shivaji galli, Ganesh Nagar, Opp. Yeshwant Indane Gas Agency, Sambra, Belagavi-591 124.', '1983-03-24', '2014-06-09', 1, 10, 'male', NULL, '2041-03-31', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:00:23', '2023-12-01 02:00:23'),
(339, 362, 'Ms. Shivaleela', 'S', 'Kalyani', 'Shivaleela Kalyani, C/o Appanna Satagouda,  Brahma Nilaya, Sector No. 3,  Opp. Government School, Majagaon, Belagavi-590 009.', 'Ward No. 3, Vani peth, Guledgudd.   Dist  :  Bagalkot. Tq  :  Badami-587 203', '1982-02-11', '2013-05-11', 1, 20, 'female', NULL, '2040-02-29', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:00:31', '2023-12-01 02:00:31'),
(340, 363, 'Jyoti', 'J', 'Amboji', 'H. No. 315, Shivaji Galli, Mastamardi,  Tq & Dist.  :  Belagavi-590 020.', 'H. No. 315, Shivaji Galli, Mastamardi,  Tq & Dist.  :  Belagavi-590 020.', '1990-04-13', '2017-10-06', 1, 10, 'female', NULL, '2048-04-30', NULL, 'A+', 'AYRPA5110C', '615589637520', 8861334503, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:04:18', '2023-12-01 02:04:18'),
(341, 364, 'Rajendra', 'V', 'Khangaonkar', 'Plot No. 31 /A, Vasudha, Subhahchandra Nagar, Tilakwadi, Belagavi-590006.', 'Plot No. 31 /A, Vasudha, Subhahchandra Nagar, Tilakwadi, Belagavi-590006.', '1987-05-09', '2019-03-01', 1, 10, 'male', NULL, '2045-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:04:35', '2023-12-01 02:04:35'),
(342, 365, 'Mrs.Mamata', 'A', 'Parvatikar (Kulkarni)', 'Plot No. 546, Sourabha, 2nd Stage, Rani Channamma Nagar, Belgaum', 'Plot No. 546, Sourabha, 2nd Stage, Rani Channamma Nagar, Belgaum', '1979-07-22', '2010-06-08', 1, 29, 'female', NULL, '2037-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:06:29', '2023-12-01 02:06:29'),
(343, 366, 'Ranjana', 'B', 'Battur', 'W / O Anand Managutti, 1314, Sector 7, Vantamury colony, Behind K.V.g. Bank, Belagavi-590 016', 'W / O Anand Managutti, 1314, Sector 7, Vantamury colony, Behind K.V.g. Bank, Belagavi-590 016', '1985-06-04', '2017-10-06', 1, 20, 'female', NULL, '2043-06-30', NULL, 'O+', 'ARUPB7738H', '921294910617', 9886535592, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:07:35', '2023-12-01 02:07:35'),
(344, 367, 'Dr. Maruti', 'K', 'Rendale', 'C/o R.B. Pujar,, Shanakar Nagar, Nidashoshi Road,  Sankeshwar-591313', 'C/o R.B. Pujar,, Shanakar Nagar, Nidashoshi Road,  Sankeshwar-591313', '1970-06-01', '2012-05-02', 1, 20, 'male', NULL, '2028-06-30', NULL, 'O+', 'AEDPR1968R', '611673093261', 9448863537, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:08:50', '2023-12-01 02:08:50'),
(345, 368, 'Priya', 'Prashant', 'Kadam', 'H. No.  19, Hanammannavar Galli, Angol., Belagavi-590 006.', 'H. No.  19, Hanammannavar Galli, Angol., Belagavi-590 006.', '1989-10-19', '2019-05-02', 1, 10, 'female', NULL, '2047-10-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:08:58', '2023-12-01 02:08:58'),
(346, 369, 'Mr. Pradeep', 'S', 'Patil', '2/1, Air port Colony, Sambra, Belgaum-591 124', 'H. No. 966 / 3 /1, Shivaji galli, Ganesh Nagar, Opp. Yeshwant Indane Gas Agency, Sambra, Belagavi-591 124.', '1983-03-24', '2014-06-09', 1, 10, 'male', NULL, '2041-03-31', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:11:04', '2023-12-01 02:11:04'),
(347, 370, 'Amruta', 'M', 'Deshpande', 'H. No. 175 / 3, 6th Cross, Rajaram Marg, Chidambar Nagar, Angol, Belagavi-590 006.', 'H. No. 175 / 3, 6th Cross, Rajaram Marg, Chidambar Nagar, Angol, Belagavi-590 006.', '1994-02-24', '2017-10-09', 1, 5, 'female', NULL, '2052-02-29', NULL, 'B+', 'CICPD2741P', '339610946010', 8951867339, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:11:15', '2023-12-01 02:11:15'),
(348, 371, 'Dr.Sudhindra', 'S', 'Kulkarni', 'Flat No. G-2, Swastik  Residency, 5th Cross, Bhagyanagar,  Belgaum.', 'Flat No. G-2, Swastik  Residency, 5th Cross, Bhagyanagar,  Belgaum.', '1976-07-08', '2003-03-03', 1, 5, 'female', NULL, '2034-07-31', NULL, 'B+', 'BFHPS8611G', '289772847062', 9448863772, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:12:51', '2023-12-01 02:12:51'),
(349, 372, 'Kiran', 'B.', 'Naik', 'C/o Balavva V.Karegar, Rajhans, Kurbur Galli, Angol, Belgaum.', 'C/o Balavva V.Karegar, Rajhans, Kurbur Galli, Angol, Belgaum.', '1973-07-12', '2008-12-01', 1, 29, 'male', NULL, '2031-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:14:17', '2023-12-01 02:14:17'),
(350, 373, 'Mr. Rajendra', 'V', 'Khangaonkar', 'Plot No. 31 /A, Vasudha, Subhahchandra Nagar, Tilakwadi, Belagavi-590006.', 'Plot No. 31 /A, Vasudha, Subhahchandra Nagar, Tilakwadi, Belagavi-590006.', '1987-05-09', '2019-03-01', 1, 10, 'male', NULL, '2045-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:14:41', '2023-12-01 02:14:41'),
(351, 374, 'Namita', 'S', 'Bhat', 'Flat No.303,Venugram Vaijna Apartment,Godsewadi-Belagavi-590006', '3471/2B, Samadevi Galli, Belagavi 590001', '1993-04-10', '2021-10-11', 1, 5, 'female', NULL, '2051-04-30', NULL, 'B+', 'BQZPB5633C', '371241811967', 9902920921, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:15:29', '2023-12-01 02:15:29'),
(352, 375, 'Dr. Chetan', 'V', 'Kotabage', 'Plot No. 66, Guruprasad Nagar, Belagavi', 'Aalap, Plot No. 2, Vidya Housing society, Satara, Wai-412 803, Maharastra', '1975-10-12', '2016-08-16', 1, 5, 'male', NULL, '2033-10-31', NULL, 'null', 'BWSPK3584N', '741676326056', 9172343072, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:17:40', '2023-12-01 02:17:40'),
(353, 376, 'Seena', 'M', 'Kalghatgi', 'Nartaki\'s pride Apartment, FlatS-08, New goodshed road,Shahapur- Belagavi 590002', 'Nartaki\'s pride Apartment, FlatS-08, New goodshed road,Shahapur- Belagavi 590002', '1988-02-16', '2021-08-11', 1, 31, 'female', NULL, '2046-02-28', NULL, 'B+', 'CEJPK2285J', '278311286356', 9739525527, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:18:58', '2023-12-01 02:18:58'),
(354, 377, 'Uma', '-', 'Hiremath', 'H. No. 6, Khasbag, Bazar Galli, Belgavi.', 'H. No. 6, Khasbag, Bazar Galli, Belgavi.', '1968-06-01', '2019-04-01', 1, 20, 'female', NULL, '2026-06-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:20:01', '2023-12-01 02:20:01'),
(355, 378, 'Ms. Priya', 'B', 'Jadhav', 'H. No.  19, Hanammannavar Galli, Angol., Belagavi-590 006.', 'H. No.  19, Hanammannavar Galli, Angol., Belagavi-590 006.', '1989-10-19', '2019-05-02', 1, 10, 'female', NULL, '2047-10-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:22:08', '2023-12-01 02:22:08'),
(356, 379, 'Harish', '-', 'Bendigeri', 'H. No. 292, Krishnamai Nivas,  Maruti Galli, Angol, Belgaum.', 'H. No. 292, Krishnamai Nivas,  Maruti Galli, Angol, Belgaum.', '1987-01-02', '2010-09-13', 1, 5, 'female', NULL, '2045-01-31', NULL, 'A+', 'ASRPB6005B', '406107264682', 9686212703, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:22:14', '2023-12-01 02:22:14'),
(357, 380, 'Veena', 'V', 'Kangralkar', 'Plot No.10, Sr.No.34/2, Markendey Nagar, Market Yard, Belagavi 590010', 'Plot No.10, Sr.No.34/2, Markendey Nagar, Market Yard, Belagavi 590010', '1987-08-18', '2021-10-11', 1, 37, 'female', NULL, '2046-12-31', NULL, 'B-', 'AEUPL8357F', '899674794085', 9980705350, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:24:30', '2023-12-01 02:24:30'),
(358, 381, 'Sagar', 'Ramesh', 'Pujar', 'Shrikanthbhah Pujar\" Shrikantha Nilaya Farm House, Banashankari, Post: Cholocha gudda, Taluka Badami, District Bagalkot', 'Shrikanthbhah Pujar\" Shrikantha Nilaya Farm House, Banashankari, Post: Cholocha gudda, Taluka Badami, District Bagalkot', '1990-06-01', '2021-10-21', 1, 5, 'male', NULL, '2048-06-30', NULL, 'A+', 'CGYPP2278M', '827307805891', 9902806192, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:28:31', '2023-12-01 02:28:31'),
(359, 382, 'Prema', 'P', 'Chadichal', 'H. No. 105, Teachers colony, Khasbag, Belgaum.', 'H. No. 105, Teachers colony, Khasbag, Belgaum.', '1972-07-22', '2013-05-02', 1, 18, 'female', NULL, '2030-07-31', NULL, 'B-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:28:39', '2023-12-01 02:28:39'),
(360, 383, 'Mr. Ravi', 'A', 'Kulkarni', 'Shri Banashankari Krupa, H. No. 698, Survey No. 4/2B, Pant Nagar, At Honninal Extn.,  Post : Balekundri {BK}, Belgaum-591 103', 'Shri Banashankari Krupa, H. No. 698, Survey No. 4/2B, Pant Nagar, At Honninal Extn.,  Post : Balekundri {BK}, Belgaum-591 103', '1980-06-22', '2013-02-14', 1, 25, 'male', NULL, '2038-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:31:18', '2023-12-01 02:31:18'),
(361, 384, 'Sunil', 'M', 'Gadad', 'Maruti N Gadad, Ambedkar Galli, M.K. Hubli, Bailhongal, Belagavi.', 'Maruti N Gadad, Ambedkar Galli, M.K. Hubli, Bailhongal, Belagavi.', '1992-06-01', '2019-04-01', 1, 13, 'male', NULL, '2050-06-30', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:31:51', '2023-12-01 02:31:51'),
(362, 386, 'Raju', '-', 'Yellurkar', 'No. 585, Gurudev Galli,  Belagavi.', 'No. 585, Gurudev Galli,  Belagavi.', '1999-01-04', '2017-09-01', 1, 13, 'male', NULL, '2057-01-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:35:14', '2023-12-01 02:35:14'),
(363, 387, 'Smt. Deepa', 'C', 'Soundalgekar', '203, Shree Om Apartments, 9th cross, Bhagyanagar, Belgaum.', '203, Shree Om Apartments, 9th cross, Bhagyanagar, Belgaum.', '1984-07-31', '2013-02-15', 1, 5, 'female', NULL, '2042-07-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:35:34', '2023-12-01 02:35:34'),
(364, 388, 'Shri. P', 'A', 'Santamaria', 'At : Manasapur, TQ:  Khanapur, Belguam.', 'At : Manasapur, TQ:  Khanapur, Belguam.', '1974-03-28', '2000-12-18', 7, 68, 'male', NULL, '2032-03-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 02:39:11', '2023-12-01 02:39:11'),
(365, 389, 'Dr. Papanna', 'B', 'Belavi', 'S/o Babu B Belavi, At post  :  Sarapur, Tq  :  Hukkeri, Dist  :  Belgaum-591 305', 'S/o Babu B Belavi, At post  :  Sarapur, Tq  :  Hukkeri, Dist  :  Belgaum-591 305', '1985-07-30', '2013-08-01', 1, 11, 'male', NULL, '2043-07-30', NULL, 'A+', NULL, NULL, 9481561660, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 02:39:37', '2023-12-01 02:39:37'),
(366, 391, 'Raviraj', 'M', 'Kulkarni', 'Flat No. T-3, Shree Swastik Residency, Bhagyanagar, Tilakwadi, Belgaum', 'Flat No. T-3, Shree Swastik Residency, Bhagyanagar, Tilakwadi, Belgaum', '1976-07-22', '2007-07-16', 1, 5, 'male', NULL, '2034-07-31', NULL, 'O+', 'AVNPK3678E', '233205793598', 9845434048, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 03:55:11', '2023-12-01 03:55:11'),
(367, 392, 'Dr. Anusha', 'N', 'Ekbote', 'Plot No. 303, Manu,  Nakashtra Colony, Budha Scheme, Laxmitake,  Belgaum', 'Plot No. 303, Manu,  Nakashtra Colony, Budha Scheme, Laxmitake,  Belgaum', '1976-01-09', '2010-11-27', 1, 20, 'female', NULL, '2034-01-31', NULL, 'A+', 'AAYPE8230C', '769276529032', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 03:56:32', '2023-12-01 03:56:32'),
(368, 393, 'Mrs. Shobha', 'B', 'Narote', 'H. No. 3919, Devendra Nagar, Khadarwadi Road, Udyambag, Belgaum.', 'H. No. 3919, Devendra Nagar, Khadarwadi Road, Udyambag, Belgaum.', '1968-02-03', '1998-01-01', 1, 13, 'female', NULL, '2026-02-28', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 03:57:37', '2023-12-01 03:57:37'),
(369, 394, 'Rashmi', 'S', 'Adoor', 'W/o. Dr. S.G. Adoor, G-3, RPD Staff old quarters, Bhagyanagar, 2nd cross, Belgaum.', 'W/o. Dr. S.G. Adoor, G-3, RPD Staff old quarters, Bhagyanagar, 2nd cross, Belgaum.', '1987-07-31', '2013-08-20', 1, 5, 'female', NULL, '2045-07-31', NULL, 'null', 'BNDPA2881E', '393956909293', 7829196540, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:00:00', '2023-12-01 04:00:00'),
(370, 395, 'Shri. Shantinath', '-', 'Suppannavar', 'Shivshakti nagar, 4th Railway Gate, Angol, Belguam.', 'Shivshakti nagar, 4th Railway Gate, Angol, Belguam.', '1980-05-01', '2008-12-01', 1, 11, 'male', NULL, '2038-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:02:53', '2023-12-01 04:02:53'),
(371, 396, 'Jhanavi', 'K', 'Haldankar', 'Flat No. 6, Vishwash Apprts., 4th Cross, Bhagyanagar, Belgaum.', 'Flat No. 6, Vishwash Apprts., 4th Cross, Bhagyanagar, Belgaum.', '1978-07-20', '2008-03-07', 1, 31, 'female', NULL, '2036-07-31', NULL, 'O+', 'ASHPK6127H', '931146211113', 9886603161, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:04:30', '2023-12-01 04:04:30'),
(372, 397, 'Sudhir', 'R', 'Jog', '405/1, Akshata Appts., Savarkar Road, Tilakwadi, Belgaum', '405/1, Akshata Appts., Savarkar Road, Tilakwadi, Belgaum', '1970-12-09', '1994-11-28', 1, 5, 'male', NULL, '2028-12-31', NULL, 'A+', 'ABZPJ8050F', '620244856081', 9845658896, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:06:40', '2023-12-01 04:06:40'),
(373, 398, 'Shridhar', 'A', 'Malladi', 'H. No. 421 / B / 17 {2},  Mrutyunjaya Nagar, Bailhongal-591 102,  Belgaum.', 'C / O Bharmu patil, H. No. 358 /  A, Patil Galli, Angol, Belagavi-590 006.', '1984-12-07', '2013-09-02', 1, 11, 'male', NULL, '2042-12-31', NULL, 'A+', NULL, NULL, 9739149479, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:07:41', '2023-12-01 04:07:41'),
(374, 399, 'Prabhakar', 'R', 'Hampiholi', 'H. No. 1/B, Fort, Belgaum.', 'H. No. 1/B, Fort, Belgaum.', '1966-12-28', '1991-01-04', 1, 5, 'male', NULL, '2024-12-31', NULL, 'null', 'AEQPR2353M', NULL, 9448230469, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:10:46', '2023-12-01 04:10:46'),
(375, 400, 'Kiran', 'A', 'Thabaj', 'C/ O M.N. Patil, plot No. 1056, Buda Scheme-40,  Kuvempu Nagar, Belgaum.', 'C/ O M.N. Patil, plot No. 1056, Buda Scheme-40,  Kuvempu Nagar, Belgaum.', '1981-07-01', '2014-09-01', 1, 58, 'male', NULL, '2039-12-31', NULL, 'A+', 'AHDPT9077C', '513107580145', 9916626361, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:12:04', '2023-12-01 04:12:04'),
(376, 401, 'Shri. Keshav', 'B', 'Gudi', 'Plot No. 134, 6th Cross, Chidambar Nagar, Belgaum.', 'Plot No. 134, 6th Cross, Chidambar Nagar, Belgaum.', '1970-07-20', '2002-06-06', 1, 5, 'male', NULL, '2028-07-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:12:30', '2023-12-01 04:12:30'),
(377, 402, 'Sanjeev', 'B', 'Kulkarni', 'Shri Balakrishna, H. No.  217 / 18A,3rd Cross, Ganesh marg, Hindwadi,  Belgaum-590 011.', 'Shri Balakrishna, H. No.  217 / 18A,3rd Cross, Ganesh marg, Hindwadi,  Belgaum-590 011.', '1965-10-23', '2021-09-01', 1, 5, 'female', NULL, '2023-10-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:13:08', '2023-12-01 04:13:08'),
(378, 403, 'Mr. Amit', 'S', 'Salvi', 'Plot No. 52, Rajaram Nagar,  Udyambag, Belgaum.', 'Plot No. 52, Rajaram Nagar,  Udyambag, Belgaum.', '1988-07-25', '2010-10-15', 1, 65, 'male', NULL, '2046-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:16:27', '2023-12-01 04:16:27'),
(379, 404, 'Prasanna', 'S', 'Koujalgi', '\'Flat No. UG-2, Sai Sparsh apartment, 3rd cross, S.V. Colony, Tilakwadi,  Belagavi-590 006.', '\'Flat No. UG-2, Sai Sparsh apartment, 3rd cross, S.V. Colony, Tilakwadi,  Belagavi-590 006.', '1977-07-20', '2017-07-01', 1, 5, 'male', NULL, '2035-07-31', NULL, 'B+', 'AOKPP3673A', '977680212872', 9448863770, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:18:26', '2023-12-01 04:18:26'),
(380, 405, 'Raghunath', '-', 'Daptardar', 'H. No. 394, Savarkar Road, Tilakwadi, Belagavi', 'H. No. 394, Savarkar Road, Tilakwadi, Belagavi', '1977-07-11', '2019-04-01', 1, 5, 'male', NULL, '2035-07-31', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:19:42', '2023-12-01 04:19:42'),
(381, 406, 'Sheela', 'Anand', 'Sangam', '\'Plot No. 42, Sector-8, Anjaneya Nagar, Belagavi-590 016.', 'Pacific Prestige, 2-B, 3rd floor, Flat No. 302, srinivas Arihant nagar, Keshwapur,  Hubli-580 023.', '1980-01-15', '2019-08-01', 1, 5, 'female', NULL, '2038-01-31', NULL, 'A+', 'JPNPS1504C', '600817511764', 9986834263, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:22:34', '2023-12-01 04:22:34'),
(382, 407, 'Balchandra', 'B', 'Diggewadi', 'Anarghya S. No. 30/1/5/16,  First cross, Bhagyanagar, Tilakwadi, Belagavi-590 006.', 'Anarghya S. No. 30/1/5/16,  First cross, Bhagyanagar, Tilakwadi, Belagavi-590 006.', '1966-07-01', '2016-09-01', 1, 20, 'male', NULL, '2024-07-31', NULL, 'B+', 'ABGPD2549E', NULL, 9448339848, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:24:16', '2023-12-01 04:24:16'),
(383, 408, 'Hullappa', '-', 'Godalkundri', 'H. No. 320, Kelageri Galli,  Khanagavi BK, Khanagavi, Belagavi.', 'H. No. 320, Kelageri Galli,  Khanagavi BK, Khanagavi, Belagavi.', '1982-12-04', '2019-04-01', 1, 20, 'male', NULL, '2040-12-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:24:44', '2023-12-01 04:24:44'),
(384, 409, 'Rashmi', 'C', 'Kulkarni', '\'102,SP Emerald Apartment,Vijayanagar, Pipeline Road, Ganeshpur, Near Medplus Belagavoi 591108', '\'102,SP Emerald Apartment,Vijayanagar, Pipeline Road, Ganeshpur, Near Medplus Belagavoi 591108', '1991-01-19', '2022-07-12', 1, 5, 'female', NULL, '2049-01-31', NULL, 'AB+', 'GWFPK1568A', '747925359425', 8951865398, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:26:04', '2023-12-01 04:26:04'),
(385, 410, 'Anjana', '-', 'Joshi', 'H. No. 1725, Kane Maharaja, Ram Mandir, Kelkarbag, Belgaum.', 'H. No. 1725, Kane Maharaja, Ram Mandir, Kelkarbag, Belgaum.', '1983-10-17', '2010-02-10', 1, 5, 'female', NULL, '2041-10-31', NULL, 'B+', 'AMSPJ4879J', NULL, 9886377688, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:28:30', '2023-12-01 04:28:30'),
(386, 411, 'Snehal', 'G', 'Raikar', '\'Shri Kamakshi Krupa Building, 4th Cross Shastri Nagar, Belagavi   590002', '\'Shri Kamakshi Krupa Building, 4th Cross Shastri Nagar, Belagavi   590002', '1999-01-28', '2023-06-01', 1, 27, 'female', NULL, '2057-01-31', NULL, 'B+', 'AVRPD3272B', '676918911203', 9449505687, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:28:55', '2023-12-01 04:28:55'),
(387, 412, 'Chitra', 'D', 'Katti', 'House No.301,Parijata Apartment, Somwar Peth, Tilakwadi- Belagavi 590006', '25/D, Somwar Peth, Joshi chal, Tilakwadi, Belagavi 590006', '1992-05-29', '2023-06-01', 1, 5, 'female', NULL, '2050-05-31', NULL, 'A-', NULL, NULL, 8279792513, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:32:04', '2023-12-01 04:32:04'),
(388, 413, 'Poorva', '-', 'Adhyapak', 'H. No. 863, Acharya Galli, Shahapur, Belguam.', 'H. No. 863, Acharya Galli, Shahapur, Belguam.', '1973-07-07', '2011-08-01', 1, 5, 'female', NULL, '2031-07-31', NULL, 'B+', NULL, NULL, 9591418360, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:32:06', '2023-12-01 04:32:06'),
(389, 414, 'Vaishali', 'V', 'Nesarkar', 'C/o Vivekanand R Nesarkar, H. No. 105, Shivaji Galli, Khadarwadi, Belgaum.', 'C/o Vivekanand R Nesarkar, H. No. 105, Shivaji Galli, Khadarwadi, Belgaum.', '1980-06-17', '2013-04-01', 1, 10, 'female', NULL, '2038-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:32:27', '2023-12-01 04:32:27'),
(390, 415, 'Mrs.Divya', 'Rajesh', 'Holi', 'House No.339,Near Railway Gate,Nandihalli Rod, Desur Belagavi', 'House No.339,Near Railway Gate,Nandihalli Rod, Desur Belagavi', '1996-08-31', '2023-10-03', 1, 10, 'female', NULL, '2054-08-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:33:46', '2023-12-01 04:33:46'),
(391, 416, 'Priyanka', 'S', 'Hande', 'C/p P.M. Hande, H.No. 245,  Korvi Galli, Old Belgaum', 'C/p P.M. Hande, H.No. 245,  Korvi Galli, Old Belgaum', '1983-07-18', '2013-07-15', 1, 10, 'female', NULL, '2041-07-31', NULL, 'null', 'AGKPH1968C', NULL, 9916267091, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:36:19', '2023-12-01 04:36:19'),
(392, 417, 'Kamlesh', 'V', 'Kulkarni', 'Flat No.401,Sairam Arcade,Mandoli Road,Godse nagar, Belagavi', '293,Somwar Peth,karad, Dist : Satara, Maharashtra', '1986-05-04', '2020-08-03', 1, 5, 'male', NULL, '2044-05-31', NULL, 'B+', 'CAPPK5146Q', '536630576649', 8436240014, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:37:38', '2023-12-01 04:37:38'),
(393, 418, 'Kadappa', 'B', 'Vannuri', 'At :  Halegudaganatti, Post : Yamakanmardi Tq : Hukkeri, Belgaum', 'At :  Halegudaganatti, Post : Yamakanmardi Tq : Hukkeri, Belgaum', '1988-04-16', '2012-10-16', 1, 39, 'male', NULL, '2046-04-30', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:38:12', '2023-12-01 04:38:12'),
(394, 419, 'Shri. Y', 'D', 'Sonolkar', 'laxmi galli, At :  Hangaraga, Post  :  Mandoli, Belgaum.', 'laxmi galli, At :  Hangaraga, Post  :  Mandoli, Belgaum.', '1965-11-02', '1988-02-22', 1, 10, 'male', NULL, '2023-11-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:39:20', '2023-12-01 04:39:20'),
(395, 420, 'Smita', 'R', 'Kabbur', 'H. No. 209, 2nd main, 4th cross, Narayanpur,  Dharwad-580 008', 'H. No. 209, 2nd main, 4th cross, Narayanpur,  Dharwad-580 008', '1974-03-10', '2013-08-07', 1, 11, 'female', NULL, '2032-03-31', NULL, 'A+', NULL, NULL, 9480558445, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:40:09', '2023-12-01 04:40:09'),
(396, 421, 'Malleshi', '-', 'Yallurkar', 'Plot No.2, Rajaram Nagar, Udyambag Belagavi 590008', 'Plot No.2, Rajaram Nagar, Udyambag Belagavi 590008', '1975-07-23', '2023-08-01', 1, 13, 'male', NULL, '2033-07-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:42:59', '2023-12-01 04:47:08'),
(397, 422, 'Shreenivas', 'R', 'Kirsur', '116, Subhadra Nilaya,  5th Main, Gururaj Lay out, Behind Vidyapeeth, BSK 3rd Stage, Bangaluru-560 028', '116, Subhadra Nilaya,  5th Main, Gururaj Lay out, Behind Vidyapeeth, BSK 3rd Stage, Bangaluru-560 028', '1983-07-21', '2015-08-17', 1, 20, 'male', NULL, '2041-07-31', NULL, 'A+', 'AUYPK7511L', NULL, 8884064469, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:45:36', '2023-12-01 04:45:36'),
(398, 423, 'Prahlad', 'S', 'Jhoshi', 'Kamitartha Building,4th Cross Malamaddi, Dharwad,Dharwad-karnataka 580007', 'Kamitartha Building,4th Cross Malamaddi, Dharwad,Dharwad-karnataka 580007', '1965-07-22', '2022-12-14', 1, 5, 'male', NULL, '2023-07-31', NULL, 'A-', 'ADXPJ4032D', '295817308937', 9403920583, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 04:47:51', '2023-12-01 04:47:51'),
(399, 424, 'Shankar', '-', 'Yellurkar', '27, Ambedkar Nagar, Angol, Belagavi.', '27, Ambedkar Nagar, Angol, Belagavi.', '1981-04-01', '2019-04-01', 1, 13, 'male', NULL, '2039-04-30', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 04:51:19', '2023-12-01 04:51:19'),
(400, 427, 'Kakasab', '-', 'Mirji', 'C/o Ranganath Complex, Room No. 2, 3rd Cross, K.U. Road, Nirmal Nagar, Dharwad', 'C/o Ranganath Complex, Room No. 2, 3rd Cross, K.U. Road, Nirmal Nagar, Dharwad', '1988-09-20', '2017-07-01', 1, 20, 'male', NULL, '2046-09-30', NULL, 'A+', NULL, NULL, 9739407525, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:14:23', '2023-12-01 05:14:23'),
(401, 428, 'Mr.Jotiba', 'D', 'Halgekar', 'Belgaonkar galli, House No.209, Nandihalli Belagavi nandihalli 590014', 'Belgaonkar galli, House No.209, Nandihalli Belagavi nandihalli 590014', '2001-09-16', '2022-03-03', 1, 10, 'female', NULL, '2059-09-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:16:39', '2023-12-01 05:16:39'),
(402, 429, 'Mandakini', '-', 'Muchandi', 'H. No. 512, Phule Galli, 1st Cross, Nazar Camp, Vadagaon, Belagavi.', 'CCB No. 118, Tanaji Galli, Belagavi.', '1985-09-09', '2017-08-01', 1, 10, 'female', NULL, '2043-09-30', NULL, 'A+', NULL, NULL, 7411872159, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:19:20', '2023-12-01 05:19:20'),
(403, 430, 'Lokmanya', 'S', 'Chikmath', 'House No.419,10th cross \'B\' Block, Basaveshwar Nagar, Haveri -581110', 'House No.419,10th cross \'B\' Block, Basaveshwar Nagar, Haveri -581110', '1988-08-01', '2022-10-01', 1, 54, 'male', NULL, '2046-08-31', NULL, 'A-', 'AOTPC5600B', '798513609254', 9844159482, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:20:11', '2023-12-01 05:20:11'),
(404, 431, 'Gajanan', 'K.', 'Mandlik', 'H. No. 98, Vaze Galli, Vadagaon Belguam.', 'H. No. 98, Vaze Galli, Vadagaon Belguam.', '1981-12-12', '2010-08-09', 1, 10, 'male', NULL, '2039-12-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:21:14', '2023-12-01 05:21:14'),
(405, 432, 'Mr.Mahesh', 'T', 'Kurbar', 'S/o tammanna #209 belgaonkar galli nandihalli belgaum', 'S/o tammanna #209 belgaonkar galli nandihalli belgaum', '1990-09-11', '2017-04-01', 1, 13, 'male', NULL, '2048-09-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:23:39', '2023-12-01 05:23:39'),
(406, 434, 'Parameshwar', 'M', 'Banakar', 'At  :  Kengonda, Post  : katenhalli, TQ  :  Byadagi.  Dist.  :  Haveri-581 110', 'At  :  Kengonda, Post  : katenhalli, TQ  :  Byadagi.  Dist.  :  Haveri-581 110', '1989-06-14', '2018-10-01', 1, 20, 'male', NULL, '2047-06-30', NULL, 'B+', 'BZFPB6182F', '837454337185', 8970494105, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:24:39', '2023-12-01 05:24:39'),
(407, 435, 'Dr.Manjusha', '-', 'Magdum', 'Plot No.338,\'Gagan\'Apts, F5/6, Roy road, Tilakwadi, Belagavi 590006', 'Plot No.338,\'Gagan\'Apts, F5/6, Roy road, Tilakwadi, Belagavi 590006', '1975-07-19', '2021-09-01', 1, 11, 'female', NULL, '2033-07-31', NULL, 'A+', NULL, NULL, 1111111111, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:28:03', '2023-12-01 05:28:03'),
(408, 437, 'Mr. Girish', '-', 'Kadlaskar', 'H. No. 1490, Ganeshpur Galli, Shahapur, Belagavi-590 003.', 'H. No. 1490, Ganeshpur Galli, Shahapur, Belagavi-590 003.', '1980-06-10', '2019-09-11', 1, 14, 'male', NULL, '2038-06-30', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:28:42', '2023-12-01 05:28:42'),
(409, 438, 'Virupaxi', 'S', 'Kambar', 'KLS Staff Quarters, Behimnd IMER 5th Cross, Adarsh Nagar, Hindwadi, Belgaum.', 'KLS Staff Quarters, Behimnd IMER 5th Cross, Adarsh Nagar, Hindwadi, Belgaum.', '1968-07-17', '1994-11-10', 1, 20, 'male', NULL, '2026-07-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:29:49', '2023-12-01 05:29:49'),
(410, 439, 'Anil', 'Kumar', 'Nakkala', '2-142, Seethampeta, beside boil mill, koyyalagudem Mandal,  Andra Pradesh-534312.', '2-142, Seethampeta, beside boil mill, koyyalagudem Mandal,  Andra Pradesh-534312.', '1990-04-19', '2019-07-22', 1, 44, 'male', NULL, '2048-04-30', NULL, 'O+', 'ARMPN9094L', '657335158326', 8885902442, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:31:55', '2023-12-01 05:31:55'),
(411, 440, 'Vinaya', 'V', 'Deshpande', 'Survey No. 71 /2, Plot No. 1, 8th cross, \"A\", Bhagyanagar, Belagavi-590 006.', 'Survey No. 71 /2, Plot No. 1, 8th cross, \"A\", Bhagyanagar, Belagavi-590 006.', '1976-07-22', '2021-11-01', 1, 5, 'female', NULL, '2034-07-31', NULL, 'null', NULL, NULL, 9945128059, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:32:11', '2023-12-01 05:32:11');
INSERT INTO `staff` (`id`, `user_id`, `fname`, `mname`, `lname`, `local_address`, `permanent_address`, `dob`, `doj`, `religion_id`, `castecategory_id`, `gender`, `date_of_increment`, `date_of_superanuation`, `date_of_confirmation`, `bloodgroup`, `pan_card`, `adhar_card`, `contactno`, `aicte_id`, `vtu_id`, `esi_no`, `un_no`, `emergency_no`, `emergency_name`, `employee_type`, `created_at`, `updated_at`) VALUES
(412, 441, 'Shrikant', 'M', 'Kalsekar', 'H. No. 365, Nandihalli  Road, Desur.590 014', 'H. No. 365, Nandihalli  Road, Desur.590 014', '1974-05-07', '2014-02-01', 1, 10, 'male', NULL, '2032-05-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:34:29', '2023-12-01 05:34:29'),
(413, 442, 'Babu', 'P', 'Chalavetkar', 'H. No. 172, Patil Galli, Hangaraga,  Post  :  Mangolli,  Tq  & Dist  :  Belagavi.', 'H. No. 172, Patil Galli, Hangaraga,  Post  :  Mangolli,  Tq  & Dist  :  Belagavi.', '1972-10-14', '2015-03-17', 1, 10, 'male', NULL, '2030-10-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:38:47', '2023-12-01 05:38:47'),
(414, 443, 'Dharmendra', 'A', 'Ponnaswami', 'House No.51, Tulasi Nivas Chawl, Chandranath Nagar, Hubli 580032', 'House No.51, Tulasi Nivas Chawl, Chandranath Nagar, Hubli 580032', '1991-03-16', '2020-11-02', 1, 76, 'male', NULL, '2049-03-31', NULL, 'B+', 'CBZPP1196G', '335459005083', 9620855597, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:39:34', '2023-12-01 05:39:34'),
(415, 444, 'Ms.Uma', 'Sanjay', 'Kamble', 'H. NO. 242, Tanaji Galli, near Majjid,  Majagaon, Belgaum.', 'C / o Vijay Sutar, Kalmeshwar Galli, Majagaon, Belgaum', '1979-10-20', '2010-02-01', 1, 49, 'female', NULL, '2037-10-31', NULL, 'AB+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:42:21', '2023-12-01 05:42:21'),
(416, 445, 'Jeetendra', 'R', 'Gurjar', 'Plot No. 61, Sarathi Nagar, Bouxite Road, Belagavi-590 019.', 'Plot No. 61, Sarathi Nagar, Bouxite Road, Belagavi-590 019.', '1989-02-08', '2021-11-01', 1, 57, 'female', NULL, '2047-02-28', NULL, 'A+', NULL, NULL, 9741703798, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:43:14', '2023-12-01 05:43:14'),
(417, 446, 'Ishwaragowda', 'V', 'Patil', 'C/O HOD, Aeronautical Dept.,Udyambag', 'Ganga Nilaya , Killa, Bilagi  Bagalkot, Karnataka 587116', '1992-01-28', '2022-01-25', 1, 72, 'male', NULL, '2050-01-31', NULL, 'B-', 'CLRPP7082B', '340474820136', 9037800468, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:46:02', '2023-12-01 05:46:02'),
(418, 447, 'Sachin', 'G', 'Navalagi', 'C/o. P.L. Chandangiri, H. No. 2090/8, Koregalli,  Shahapur, Belagavi', 'C/o. P.L. Chandangiri, H. No. 2090/8, Koregalli,  Shahapur, Belagavi', '1978-03-09', '2017-02-01', 1, 38, 'male', NULL, '2036-03-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:46:28', '2023-12-01 05:46:28'),
(419, 448, 'Shrivatsa', 'R', 'Joshi', 'No.01,\" Sudarshan\" Bhavani-nagar,  Vikrampur Extension, Athani 591304', 'No.01,\" Sudarshan\" Bhavani-nagar,  Vikrampur Extension, Athani 591304', '1993-10-03', '2021-11-01', 1, 5, 'male', NULL, '2051-10-31', NULL, 'A+', NULL, NULL, 2222222222, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:47:07', '2023-12-01 05:47:07'),
(420, 449, 'Pramod', 'S', 'Tupare', 'H. No. 263/3, Pawashe Galli, Post  :  Uchagoan, TQ & Dist  :  Belagavi.', 'H. No. 263/3, Pawashe Galli, Post  :  Uchagoan, TQ & Dist  :  Belagavi.', '1986-07-25', '2017-02-01', 1, 10, 'male', NULL, '2044-07-31', NULL, 'B+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:50:14', '2023-12-01 05:50:14'),
(421, 450, 'Ms. Supriya', 'M', 'Rajput', 'H. No. 4, Majoshree, Chougulewadi, Tilakwadi, Belgaum.', 'H. No. 4, Majoshree, Chougulewadi, Tilakwadi, Belgaum.', '1984-12-19', '2007-09-20', 1, 37, 'female', NULL, '2042-12-31', NULL, 'O+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:51:22', '2023-12-01 05:51:22'),
(422, 451, 'Jotiba', 'P', 'Kitturkar', 'First Main, 4th Cross, Shivaji Nagar, Belagavi 590016', 'First Main, 4th Cross, Shivaji Nagar, Belagavi 590016', '1980-04-18', '2021-12-01', 1, 10, 'male', NULL, '2038-04-30', NULL, 'O-', NULL, NULL, 9844486275, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:51:43', '2023-12-01 05:51:43'),
(423, 452, 'Bharat', 'N', 'Dhangawade', 'H. No. 41, Gokul Nagar, Mutaga, Belagavi.', 'H. No. 41, Gokul Nagar, Mutaga, Belagavi.', '1989-05-31', '2017-02-01', 1, 10, 'male', NULL, '2047-05-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non-Teaching', '2023-12-01 05:53:18', '2023-12-01 05:53:18'),
(424, 453, 'Purshotham', 'P', 'Katti', 'Gaonkar Plot No.12, Near Jayanagar Mosque, Dharwad-Karnataka 580007', 'Adarash Nagar, H.No.M-II/36 Vijayapur, Karnataka 586103', '1986-01-01', '2022-04-11', 1, 77, 'male', NULL, '2044-01-31', NULL, 'A+', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 05:55:58', '2023-12-01 05:55:58'),
(425, 454, 'Rajendra', 'M', 'Inamdar', 'C/O Dr.M.H.Inamdar, 15/25, \"Krishna-Kunj\", Raghavendra colony,R.C.Nagar-2nd Stage Belagavi 590006', 'C/O Dr.M.H.Inamdar, 15/25, \"Krishna-Kunj\", Raghavendra colony,R.C.Nagar-2nd Stage Belagavi 590006', '1975-09-13', '2021-11-02', 1, 29, 'male', NULL, '2033-09-30', NULL, 'null', 'AAMPI2423F', NULL, 9480422539, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 06:02:31', '2023-12-01 06:02:31'),
(426, 455, 'Swetha', 'I', 'Goudar', 'A-7/1, JNMC Staff quarters, JNMC campus, Nehru Nagar, Belgavi-590 010.', 'A-7/1, JNMC Staff quarters, JNMC campus, Nehru Nagar, Belgavi-590 010.', '1984-01-01', '2017-07-01', 1, 20, 'female', NULL, '2042-01-31', NULL, 'A+', 'AOLPG1293C', '622079030458', 9448483351, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 06:04:24', '2023-12-01 06:04:24'),
(427, 456, 'Pijush', 'B', 'Barthakur', 'Vastu Shri Apartment, Flat No. 302, 3rd Floor, Angol Road, Belagavi', 'Vastu Shri Apartment, Flat No. 302, 3rd Floor, Angol Road, Belagavi', '1976-02-03', '2017-07-31', 1, 5, 'male', NULL, '2034-02-28', NULL, 'A+', NULL, NULL, 9083104548, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-12-01 06:09:11', '2023-12-01 06:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `staff_teaching_payscale`
--

CREATE TABLE `staff_teaching_payscale` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `teaching_payscale_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_teaching_payscale`
--

INSERT INTO `staff_teaching_payscale` (`id`, `staff_id`, `teaching_payscale_id`, `start_date`, `end_date`, `reason`, `gcr`, `status`, `created_at`, `updated_at`) VALUES
(17, 11, 9, '2009-09-24', NULL, NULL, NULL, 'active', NULL, NULL),
(18, 12, 2, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(19, 14, 2, '2018-12-02', NULL, NULL, NULL, 'active', NULL, NULL),
(20, 15, 6, '2022-10-03', NULL, NULL, NULL, 'active', NULL, NULL),
(21, 16, 9, '1989-09-05', NULL, NULL, NULL, 'active', NULL, NULL),
(22, 17, 6, '2023-01-03', NULL, NULL, NULL, 'active', NULL, NULL),
(23, 19, 6, '2023-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(24, 21, 6, '2023-04-09', NULL, NULL, NULL, 'active', NULL, NULL),
(25, 22, 6, '2022-10-10', NULL, NULL, NULL, 'active', NULL, NULL),
(26, 23, 9, '2009-05-10', NULL, NULL, NULL, 'active', NULL, NULL),
(27, 24, 10, '2011-09-28', NULL, NULL, NULL, 'active', NULL, NULL),
(28, 25, 6, '2003-11-15', NULL, NULL, NULL, 'active', NULL, NULL),
(29, 28, 9, '2005-08-18', NULL, NULL, NULL, 'active', NULL, NULL),
(30, 29, 9, '2013-05-03', NULL, NULL, NULL, 'active', NULL, NULL),
(31, 31, 9, '2006-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(32, 32, 9, '2008-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(33, 33, 9, '2013-11-07', NULL, NULL, NULL, 'active', NULL, NULL),
(34, 34, 9, '2012-01-12', NULL, NULL, NULL, 'active', NULL, NULL),
(35, 35, 9, '2013-12-26', NULL, NULL, NULL, 'active', NULL, NULL),
(36, 36, 6, '2012-05-16', NULL, NULL, NULL, 'active', NULL, NULL),
(37, 37, 9, '2014-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(38, 38, 9, '2012-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(39, 39, 9, '2014-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(40, 40, 9, '2013-03-15', NULL, NULL, NULL, 'active', NULL, NULL),
(41, 41, 9, '2014-01-10', NULL, NULL, NULL, 'active', NULL, NULL),
(42, 42, 9, '2013-09-14', NULL, NULL, NULL, 'active', NULL, NULL),
(43, 43, 2, '2014-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(44, 45, 9, '2014-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(45, 47, 2, '2014-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(46, 50, 9, '2015-02-18', NULL, NULL, NULL, 'active', NULL, NULL),
(47, 53, 9, '2015-02-18', NULL, NULL, NULL, 'active', NULL, NULL),
(48, 54, 2, '2015-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(49, 56, 2, '2015-07-06', NULL, NULL, NULL, 'active', NULL, NULL),
(50, 58, 9, '2014-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(51, 59, 9, '2015-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(52, 62, 2, '2016-07-15', NULL, NULL, NULL, 'active', NULL, NULL),
(53, 64, 2, '2017-07-03', NULL, NULL, NULL, 'active', NULL, NULL),
(54, 67, 2, '2022-10-21', NULL, NULL, NULL, 'active', NULL, NULL),
(55, 71, 2, '2017-07-07', NULL, NULL, NULL, 'active', NULL, NULL),
(56, 75, 9, '2010-04-12', NULL, NULL, NULL, 'active', NULL, NULL),
(57, 77, 9, '1997-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(58, 80, 9, '1998-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(59, 81, 9, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(60, 82, 9, '1996-03-09', NULL, NULL, NULL, 'active', NULL, NULL),
(61, 84, 9, '1997-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(62, 88, 9, '1997-02-11', NULL, NULL, NULL, 'active', NULL, NULL),
(63, 91, 11, '2023-06-05', NULL, NULL, NULL, 'active', NULL, NULL),
(64, 92, 9, '1999-10-30', NULL, NULL, NULL, 'active', NULL, NULL),
(65, 96, 9, '1996-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(66, 97, 11, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(67, 98, 9, '2001-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(68, 103, 9, '2006-03-09', NULL, NULL, NULL, 'active', NULL, NULL),
(69, 104, 9, '2007-08-06', NULL, NULL, NULL, 'active', NULL, NULL),
(70, 106, 9, '1999-10-29', NULL, NULL, NULL, 'active', NULL, NULL),
(71, 107, 9, '2004-04-08', NULL, NULL, NULL, 'active', NULL, NULL),
(72, 109, 9, '2004-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(73, 111, 9, '2003-06-13', NULL, NULL, NULL, 'active', NULL, NULL),
(74, 116, 10, '2011-05-16', NULL, NULL, NULL, 'active', NULL, NULL),
(75, 118, 9, '2007-04-02', NULL, NULL, NULL, 'active', NULL, NULL),
(76, 119, 9, '2007-05-28', NULL, NULL, NULL, 'active', NULL, NULL),
(77, 120, 9, '2003-09-17', NULL, NULL, NULL, 'active', NULL, NULL),
(78, 122, 9, '2008-08-14', NULL, NULL, NULL, 'active', NULL, NULL),
(79, 123, 6, '2007-07-17', NULL, NULL, NULL, 'active', NULL, NULL),
(80, 126, 9, '2006-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(81, 128, 6, '2007-07-02', NULL, NULL, NULL, 'active', NULL, NULL),
(82, 130, 9, '2009-08-03', NULL, NULL, NULL, 'active', NULL, NULL),
(83, 132, 6, '2022-10-27', NULL, NULL, NULL, 'active', NULL, NULL),
(84, 136, 9, '2007-09-04', NULL, NULL, NULL, 'active', NULL, NULL),
(85, 139, 9, '2008-08-18', NULL, NULL, NULL, 'active', NULL, NULL),
(86, 142, 9, '2010-03-18', NULL, NULL, NULL, 'active', NULL, NULL),
(87, 143, 9, '2009-08-05', NULL, NULL, NULL, 'active', NULL, NULL),
(88, 144, 9, '2010-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(89, 145, 9, '2012-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(90, 146, 9, '2009-09-07', NULL, NULL, NULL, 'active', NULL, NULL),
(91, 147, 9, '2013-07-19', NULL, NULL, NULL, 'active', NULL, NULL),
(92, 149, 9, '2013-09-16', NULL, NULL, NULL, 'active', NULL, NULL),
(93, 151, 9, '2014-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(94, 152, 9, '2015-02-03', NULL, NULL, NULL, 'active', NULL, NULL),
(95, 154, 9, '2014-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(96, 155, 9, '2011-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(97, 156, 6, '1993-02-09', NULL, NULL, NULL, 'active', NULL, NULL),
(98, 159, 9, '2012-09-13', NULL, NULL, NULL, 'active', NULL, NULL),
(99, 160, 9, '2010-08-02', NULL, NULL, NULL, 'active', NULL, NULL),
(100, 162, 6, '2016-04-26', NULL, NULL, NULL, 'active', NULL, NULL),
(101, 163, 9, '2012-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(102, 166, 9, '2013-05-20', NULL, NULL, NULL, 'active', NULL, NULL),
(103, 167, 6, '2016-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(104, 171, 6, '2016-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(105, 173, 9, '2013-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(106, 176, 6, '2016-09-15', NULL, NULL, NULL, 'active', NULL, NULL),
(107, 182, 2, '2014-08-18', NULL, NULL, NULL, 'active', NULL, NULL),
(108, 184, 2, '2017-04-18', NULL, NULL, NULL, 'active', NULL, NULL),
(109, 186, 9, '2014-08-11', NULL, NULL, NULL, 'active', NULL, NULL),
(110, 188, 2, '2017-08-31', NULL, NULL, NULL, 'active', NULL, NULL),
(111, 191, 9, '2014-09-12', NULL, NULL, NULL, 'active', NULL, NULL),
(112, 192, 2, '2017-09-08', NULL, NULL, NULL, 'active', NULL, NULL),
(113, 194, 9, '2014-09-12', NULL, NULL, NULL, 'active', NULL, NULL),
(114, 196, 2, '2017-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(115, 198, 9, '2007-04-02', NULL, NULL, NULL, 'active', NULL, NULL),
(116, 200, 2, '2017-10-23', NULL, NULL, NULL, 'active', NULL, NULL),
(117, 202, 9, '2013-07-22', NULL, NULL, NULL, 'active', NULL, NULL),
(118, 203, 9, '2019-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(119, 204, 2, '2016-01-04', NULL, NULL, NULL, 'active', NULL, NULL),
(120, 207, 2, '2016-01-16', NULL, NULL, NULL, 'active', NULL, NULL),
(121, 209, 2, '2016-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(122, 211, 6, '2021-10-04', NULL, NULL, NULL, 'active', NULL, NULL),
(123, 212, 2, '2016-08-02', NULL, NULL, NULL, 'active', NULL, NULL),
(124, 217, 2, '2017-07-05', NULL, NULL, NULL, 'active', NULL, NULL),
(125, 219, 2, '2021-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(126, 220, 2, '1996-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(127, 224, 2, '2021-10-18', NULL, NULL, NULL, 'active', NULL, NULL),
(128, 228, 9, '2002-09-21', NULL, NULL, NULL, 'active', NULL, NULL),
(129, 229, 2, '2021-11-15', NULL, NULL, NULL, 'active', NULL, NULL),
(130, 232, 9, '2001-09-18', NULL, NULL, NULL, 'active', NULL, NULL),
(131, 233, 9, '2003-09-29', NULL, NULL, NULL, 'active', NULL, NULL),
(132, 234, 9, '2005-06-15', NULL, NULL, NULL, 'active', NULL, NULL),
(133, 235, 9, '2006-11-13', NULL, NULL, NULL, 'active', NULL, NULL),
(134, 236, 9, '2007-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(135, 237, 11, '2010-03-03', NULL, NULL, NULL, 'active', NULL, NULL),
(136, 238, 9, '2007-09-03', NULL, NULL, NULL, 'active', NULL, NULL),
(137, 239, 9, '2008-04-15', NULL, NULL, NULL, 'active', NULL, NULL),
(138, 240, 2, '2016-08-10', NULL, NULL, NULL, 'active', NULL, NULL),
(139, 241, 9, '1989-08-26', NULL, NULL, NULL, 'active', NULL, NULL),
(140, 242, 2, '2016-09-15', NULL, NULL, NULL, 'active', NULL, NULL),
(141, 243, 9, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(142, 244, 9, '2001-09-18', NULL, NULL, NULL, 'active', NULL, NULL),
(143, 245, 9, '2000-04-10', NULL, NULL, NULL, 'active', NULL, NULL),
(144, 246, 9, '2004-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(145, 248, 9, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(146, 250, 9, '1987-07-23', NULL, NULL, NULL, 'active', NULL, NULL),
(147, 253, 2, '2011-01-11', NULL, NULL, NULL, 'active', NULL, NULL),
(148, 255, 9, '2006-09-19', NULL, NULL, NULL, 'active', NULL, NULL),
(149, 258, 9, '2007-07-04', NULL, NULL, NULL, 'active', NULL, NULL),
(150, 260, 9, '2004-03-01', NULL, NULL, NULL, 'active', NULL, NULL),
(151, 262, 9, '2008-04-03', NULL, NULL, NULL, 'active', NULL, NULL),
(152, 263, 2, '2011-11-10', NULL, NULL, NULL, 'active', NULL, NULL),
(153, 264, 9, '2005-08-13', NULL, NULL, NULL, 'active', NULL, NULL),
(154, 266, 9, '2014-07-15', NULL, NULL, NULL, 'active', NULL, NULL),
(155, 267, 2, '2012-02-06', NULL, NULL, NULL, 'active', NULL, NULL),
(156, 270, 9, '2006-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(157, 273, 9, '2015-08-25', NULL, NULL, NULL, 'active', NULL, NULL),
(158, 275, 9, '2006-08-10', NULL, NULL, NULL, 'active', NULL, NULL),
(159, 278, 2, '2016-09-28', NULL, NULL, NULL, 'active', NULL, NULL),
(160, 279, 9, '2007-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(161, 282, 2, '2017-07-17', NULL, NULL, NULL, 'active', NULL, NULL),
(162, 283, 9, '2007-03-10', NULL, NULL, NULL, 'active', NULL, NULL),
(163, 285, 9, '2009-08-13', NULL, NULL, NULL, 'active', NULL, NULL),
(164, 286, 2, '2018-01-08', NULL, NULL, NULL, 'active', NULL, NULL),
(165, 288, 2, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(166, 290, 9, '2008-08-12', NULL, NULL, NULL, 'active', NULL, NULL),
(167, 291, 9, '2009-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(168, 293, 2, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(169, 295, 2, '2014-01-13', NULL, NULL, NULL, 'active', NULL, NULL),
(170, 296, 2, '2019-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(171, 297, 9, '2014-02-01', NULL, NULL, NULL, 'active', NULL, NULL),
(172, 301, 2, '2014-03-19', NULL, NULL, NULL, 'active', NULL, NULL),
(173, 306, 2, '2009-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(174, 308, 2, '2014-04-07', NULL, NULL, NULL, 'active', NULL, NULL),
(175, 310, 9, '2015-02-04', NULL, NULL, NULL, 'active', NULL, NULL),
(176, 312, 2, '2021-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(177, 313, 2, '2016-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(178, 316, 2, '2021-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(179, 317, 2, '2016-01-01', NULL, NULL, NULL, 'active', NULL, NULL),
(180, 319, 2, '2021-10-12', NULL, NULL, NULL, 'active', NULL, NULL),
(181, 320, 2, '2016-01-04', NULL, NULL, NULL, 'active', NULL, NULL),
(182, 322, 2, '2022-01-24', NULL, NULL, NULL, 'active', NULL, NULL),
(183, 323, 2, '2016-01-14', NULL, NULL, NULL, 'active', NULL, NULL),
(184, 324, 2, '2022-02-15', NULL, NULL, NULL, 'active', NULL, NULL),
(185, 327, 2, '2022-07-05', NULL, NULL, NULL, 'active', NULL, NULL),
(186, 328, 2, '2016-08-10', NULL, NULL, NULL, 'active', NULL, NULL),
(187, 330, 2, '2022-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(188, 332, 2, '2016-08-11', NULL, NULL, NULL, 'active', NULL, NULL),
(189, 334, 2, '2023-03-06', NULL, NULL, NULL, 'active', NULL, NULL),
(190, 336, 2, '2017-09-08', NULL, NULL, NULL, 'active', NULL, NULL),
(191, 337, 2, '2017-10-06', NULL, NULL, NULL, 'active', NULL, NULL),
(192, 340, 2, '2017-10-06', NULL, NULL, NULL, 'active', NULL, NULL),
(193, 343, 2, '2017-10-06', NULL, NULL, NULL, 'active', NULL, NULL),
(194, 344, 2, '2012-05-02', NULL, NULL, NULL, 'active', NULL, NULL),
(195, 347, 2, '2017-10-09', NULL, NULL, NULL, 'active', NULL, NULL),
(196, 348, 9, '2003-03-03', NULL, NULL, NULL, 'active', NULL, NULL),
(197, 351, 2, '2021-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(198, 352, 2, '2016-08-16', NULL, NULL, NULL, 'active', NULL, NULL),
(199, 353, 2, '2021-08-11', NULL, NULL, NULL, 'active', NULL, NULL),
(200, 356, 9, '2010-09-13', NULL, NULL, NULL, 'active', NULL, NULL),
(201, 357, 2, '2021-10-11', NULL, NULL, NULL, 'active', NULL, NULL),
(202, 358, 2, '2021-10-21', NULL, NULL, NULL, 'active', NULL, NULL),
(203, 365, 9, '2013-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(204, 366, 10, '2007-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(205, 367, 9, '2010-11-27', NULL, NULL, NULL, 'active', NULL, NULL),
(206, 369, 9, '2013-08-20', NULL, NULL, NULL, 'active', NULL, NULL),
(207, 371, 9, '2008-03-07', NULL, NULL, NULL, 'active', NULL, NULL),
(208, 372, 9, '1994-11-28', NULL, NULL, NULL, 'active', NULL, NULL),
(209, 373, 2, '2013-09-02', NULL, NULL, NULL, 'active', NULL, NULL),
(210, 374, 9, '1991-01-04', NULL, NULL, NULL, 'active', NULL, NULL),
(211, 375, 6, '2014-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(212, 379, 2, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(213, 381, 2, '2019-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(214, 382, 9, '2016-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(215, 384, 2, '2022-07-12', NULL, NULL, NULL, 'active', NULL, NULL),
(216, 385, 9, '2010-02-10', NULL, NULL, NULL, 'active', NULL, NULL),
(217, 386, 2, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(218, 387, 2, '2023-06-01', NULL, NULL, NULL, 'active', NULL, NULL),
(219, 388, 9, '2011-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(220, 391, 9, '2013-07-15', NULL, NULL, NULL, 'active', NULL, NULL),
(221, 392, 6, '2020-08-03', NULL, NULL, NULL, 'active', NULL, NULL),
(222, 395, 9, '2013-08-07', NULL, NULL, NULL, 'active', NULL, NULL),
(223, 397, 9, '2015-08-17', NULL, NULL, NULL, 'active', NULL, NULL),
(224, 398, 11, '2022-12-14', NULL, NULL, NULL, 'active', NULL, NULL),
(225, 400, 2, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(226, 402, 2, '2017-08-01', NULL, NULL, NULL, 'active', NULL, NULL),
(227, 403, 6, '2022-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(228, 406, 2, '2018-10-01', NULL, NULL, NULL, 'active', NULL, NULL),
(229, 407, 9, '2021-09-01', NULL, NULL, NULL, 'active', NULL, NULL),
(230, 410, 2, '2019-07-22', NULL, NULL, NULL, 'active', NULL, NULL),
(231, 411, 9, '2021-11-01', NULL, NULL, NULL, 'active', NULL, NULL),
(232, 414, 2, '2020-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(233, 416, 9, '2021-11-01', NULL, NULL, NULL, 'active', NULL, NULL),
(234, 417, 2, '2022-01-25', NULL, NULL, NULL, 'active', NULL, NULL),
(235, 419, 9, '2021-11-01', NULL, NULL, NULL, 'active', NULL, NULL),
(236, 422, 2, '2021-12-01', NULL, NULL, NULL, 'active', NULL, NULL),
(237, 424, 2, '2022-04-11', NULL, NULL, NULL, 'active', NULL, NULL),
(238, 425, 11, '2021-11-02', NULL, NULL, NULL, 'active', NULL, NULL),
(239, 426, 6, '2017-07-01', NULL, NULL, NULL, 'active', NULL, NULL),
(240, 427, 11, '2017-07-31', NULL, NULL, NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tdsheads`
--

CREATE TABLE `tdsheads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_payscales`
--

CREATE TABLE `teaching_payscales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payscale_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basepay` double(8,2) NOT NULL,
  `maxpay` double(8,2) NOT NULL,
  `designations_id` bigint(20) UNSIGNED NOT NULL,
  `agp` double(8,2) NOT NULL,
  `da` double(8,2) NOT NULL,
  `hra` double(8,2) NOT NULL,
  `cca` double(8,2) NOT NULL,
  `wef` date NOT NULL,
  `closedon` date DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teaching_payscales`
--

INSERT INTO `teaching_payscales` (`id`, `payscale_title`, `basepay`, `maxpay`, `designations_id`, `agp`, `da`, `hra`, `cca`, `wef`, `closedon`, `status`, `created_at`, `updated_at`) VALUES
(1, '7th payscale', 165000.00, 395000.00, 5, 60000.00, 100.00, 10.00, 200.00, '2023-01-01', '2023-09-22', 'inactive', '2023-09-22 02:55:08', '2023-09-22 05:12:14'),
(2, '6th payscale', 15600.00, 39100.00, 5, 6000.00, 70.00, 5.00, 80.00, '2023-01-03', NULL, 'active', '2023-09-23 02:08:20', '2023-09-23 02:39:43'),
(3, '6th payscale', 15600.00, 39100.00, 5, 7000.00, 70.00, 5.00, 80.00, '2023-01-01', NULL, 'active', '2023-09-23 02:39:06', '2023-09-23 02:39:31'),
(4, '6th payscale', 15600.00, 39100.00, 5, 8000.00, 70.00, 5.00, 80.00, '2023-01-01', NULL, 'active', '2023-09-23 02:46:05', '2023-09-23 02:46:05'),
(5, '6th payscale', 15600.00, 39100.00, 5, 6000.00, 70.00, 6.00, 80.00, '2023-01-03', NULL, 'inactive', '2023-09-23 02:46:37', '2023-10-09 00:30:14'),
(6, '6th payscale', 37400.00, 67000.00, 6, 9000.00, 70.00, 5.00, 80.00, '2023-01-01', NULL, 'active', '2023-09-23 02:47:10', '2023-10-09 00:29:06'),
(7, '6th payscale', 15600.00, 39100.00, 5, 8000.00, 70.00, 5.00, 80.00, '2023-01-01', '2023-09-23', 'inactive', '2023-09-23 02:47:26', '2023-09-23 02:47:39'),
(9, '5th PayScale', 8000.00, 13500.00, 26, 275.00, 176.00, 8.00, 80.00, '1994-01-01', NULL, 'active', '2023-10-03 00:09:27', '2023-10-09 00:36:38'),
(10, '5th PayScale', 10000.00, 15200.00, 27, 325.00, 176.00, 8.00, 80.00, '1994-01-01', NULL, 'active', '2023-10-03 00:11:26', '2023-10-03 00:11:26'),
(11, '6th payscale', 37400.00, 67000.00, 7, 10000.00, 70.00, 5.00, 80.00, '2023-01-01', NULL, 'active', '2023-11-29 00:52:46', '2023-11-29 00:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'itcell@git.edu', NULL, '$2y$10$uIxRcCmyBPOWcNIs.EGcougnnyh6DqfaRaaXwyG5YHN5DyXcl0lG2', 'Super Admin', 'Active', NULL, NULL, NULL),
(2, 'os_estb@git.edu', NULL, '$2y$10$bkglLwpip36CNGFL.VO5zuAQGoA7A/n2R2AqopDhreDl.TWYwPiKS', 'Establishment', 'Active', NULL, NULL, NULL),
(3, 'os_admin@git.edu', NULL, '$2y$10$MxHGVLqrhoZmDk5zRx.YdOxeNyMhYqyOgevtueK0IuIfJ8nPJoMLG', 'Admission', 'Active', NULL, NULL, NULL),
(4, 'os_accts@git.edu', NULL, '$2y$10$yefZWRhcocpmVloZGQYn2uNDMwUFBfVr40Z.C2/D6EqILExfRRYCS', 'Accounts', 'Active', NULL, NULL, NULL),
(29, 'vrchate@git.edu', NULL, '$2y$10$s8Fzsals05quVU5m0rnaUOApQI8ua5LO6ORuslh/aJWTcfVai/wzu', 'teaching', 'Active', NULL, '2023-11-28 04:53:06', '2023-11-28 04:53:06'),
(32, 'bsingole@git.edu', NULL, '$2y$10$x72Y9G4qW8NorqCdl9ypvO0rkpcloKkxE2i1wXO1NLIbyfCbiMc9e', 'non-teaching', 'Active', NULL, '2023-11-28 05:02:47', '2023-11-28 05:02:47'),
(34, 'vlgingine@git.edu', NULL, '$2y$10$GyOYYFQ9h10.o0lwgmpvMe1wkkD9UyPO.VqxUE69knL5pL3OM6IFy', 'teaching', 'Active', NULL, '2023-11-28 05:10:56', '2023-11-28 05:10:56'),
(35, 'bsingole1@git.edu', NULL, '$2y$10$OGSKFPlPfbKfb5MkXiujIedIbO.4JudyIxqESU70Ge.nIYuwM1ziu', 'non-teaching', 'Active', NULL, '2023-11-28 05:14:21', '2023-11-28 05:14:21'),
(36, 'nnpalankar@git.edu', NULL, '$2y$10$9b3VEmZG6cBeFsgHwN55GOYWnxZDMGnd9FmsvNlvtu0w90Pf4.vze', 'teaching', 'Active', NULL, '2023-11-28 05:19:33', '2023-11-28 05:19:33'),
(37, 'mgkalibha@git.edu', NULL, '$2y$10$6rOrIWcpaWent7AYSNsbqOfw7X9Pa87lnotmQcte0ZF3LI8EHlMO.', 'teaching', 'Active', NULL, '2023-11-28 05:23:54', '2023-11-28 05:23:54'),
(38, 'dbkulkarni@git.edu', NULL, '$2y$10$6WDdfsqauq44EOAaO4IvTOTbp4pWohvKTBK9AnaIfB9jnGRiPQlbi', 'teaching', 'Active', NULL, '2023-11-28 05:34:13', '2023-11-28 05:34:13'),
(39, 'ssangadi@git.edu', NULL, '$2y$10$wGS3KD8EpUZtgSD0kVNw2uNJPg0XPf3tkC9ayXghHwa.G9V9IyfTq', 'teaching', 'Active', NULL, '2023-11-28 05:35:53', '2023-11-28 05:35:53'),
(40, 'mmkadyagol@git.edu', NULL, '$2y$10$2zzJ7ezYjuowlgjuHbY5PuiAZWL/oLQZqH9y/RYzNaa..qUcYKN9.', 'non-teaching', 'Active', NULL, '2023-11-28 05:36:38', '2023-11-28 05:36:38'),
(41, 'lspammar@git.edu', NULL, '$2y$10$XKkAsDJQLOT/vtXS2fXQ8OzCBi.jAP1v8NSnRbIjDxAmwFjh5TWzC', 'teaching', 'Active', NULL, '2023-11-28 05:40:13', '2023-11-28 05:40:13'),
(42, 'vbbadiger@git.edu', NULL, '$2y$10$Vqt7e1/KOgXTXQae/1Il4OaOPjBHYiRlWxqawQqQwYIVm2p6Sl9Ke', 'non-teaching', 'Active', NULL, '2023-11-28 05:44:24', '2023-11-28 05:44:24'),
(43, 'shpatil@git.edu', NULL, '$2y$10$rR66m6ruzYg06vqtPNeei.UY54j4LGLBq7Ar7Jjz42GWssjNM6E2S', 'teaching', 'Active', NULL, '2023-11-28 05:49:33', '2023-11-28 05:49:33'),
(44, 'rbantwal@git.edu', NULL, '$2y$10$1PQ/1ULxjPCaG1oxi.q5Keu1GsWRoLPFNk4LlmtOF3ffS0i6NYCMy', 'teaching', 'Active', NULL, '2023-11-28 05:51:14', '2023-11-28 05:51:14'),
(45, 'rddeshpande@git.edu', NULL, '$2y$10$Y8qeoUmzhyKB96zjwH4KD.4Ozk4FaldaUgYgCV5LHwP4nDbCBbVy6', 'teaching', 'Active', NULL, '2023-11-28 05:54:21', '2023-11-28 05:54:21'),
(46, 'kkkanagali@git.edu', NULL, '$2y$10$9QzRcJ1p1Ggs2c/1ebuFtuLCSIyQju5RE1.1xL2Ph7Gi7S/AfDFMS', 'teaching', 'Active', NULL, '2023-11-28 05:58:58', '2023-11-28 05:58:58'),
(47, 'vanidatar@git.edu', NULL, '$2y$10$ldMKfEYEDieJisGTkk/MQ.B7eUkPNRnEDeKvYDlfL0OTD2eYUuH66', 'teaching', 'Active', NULL, '2023-11-28 06:00:09', '2023-11-28 06:00:09'),
(48, 'dcmadiger@git.edu', NULL, '$2y$10$rCRusedSqYVT1yv092M72eH1UVf.7K5TPWhUvkr6nbQrUiuxTKx5m', 'non-teaching', 'Active', NULL, '2023-11-28 06:02:01', '2023-11-28 06:02:01'),
(49, 'ssbalikai@git.edu', NULL, '$2y$10$xZZ0BXjf.IgtGOTYcNJK..7EBR9m/zD1XcTXhu2DrvDG8hqAsjbFO', 'non-teaching', 'Active', NULL, '2023-11-28 06:06:38', '2023-11-28 06:06:38'),
(50, 'pvdatar@git.edu', NULL, '$2y$10$nSRU55sA6dlsc3Ba4RQ.MuzDJarhsdY4f6GwseJYg/GLTvAmXMhWK', 'teaching', 'Active', NULL, '2023-11-28 06:08:09', '2023-11-28 06:08:09'),
(51, 'anshagoti@git.edu', NULL, '$2y$10$XbfpKucUBZqcMRpoIFT.X.PB80vyeOIbej4Fx4s2iLE6IiNABnlq.', 'teaching', 'Active', NULL, '2023-11-28 06:09:09', '2023-11-28 06:09:09'),
(52, 'SAKhanapuri@git.edu', NULL, '$2y$10$tnp2Ou3E2ew.S7cMEOpBDe56rP2JlZSsUvxetbP1vnxxT9hUQlRZG', 'non-teaching', 'Active', NULL, '2023-11-28 06:10:29', '2023-11-28 06:10:29'),
(53, 'adjanaj@git.edu', NULL, '$2y$10$Hetmy1QRBqnuBju40x7CyOe7YG4f6wG/ONrylNwIdPJ5/KPYNXJiG', 'teaching', 'Active', NULL, '2023-11-28 06:14:29', '2023-11-28 06:14:29'),
(54, 'rjthakai@git.edu', NULL, '$2y$10$ADLPndSri4im5MAsvKPLreXddqyLZ2u.gH0QuRbdVPfG7O2YmjNMe', 'teaching', 'Active', NULL, '2023-11-28 06:15:35', '2023-11-28 06:15:35'),
(55, 'rstogarsi@git.edu', NULL, '$2y$10$Ge5YLMF/1Xox9iSqgHtEL.4TAJaWbg57iRyJV76nx8W9ugH8WDuea', 'teaching', 'Active', NULL, '2023-11-28 06:20:01', '2023-11-28 06:20:01'),
(56, 'rahulsuryavanshi@git.edu', NULL, '$2y$10$j15jkG4Qa3Uh9o//v.T6QOI1trPprErmDjZbZJtdruBgNDrR8jpAS', 'teaching', 'Active', NULL, '2023-11-28 06:20:08', '2023-11-28 06:20:08'),
(57, 'kmnashimath@git.edu', NULL, '$2y$10$RJW6MFqTFclh8WNwLRYHBu/BhbxAQgPalOI4ulmv6AZg6u61C3iAO', 'teaching', 'Active', NULL, '2023-11-28 06:24:26', '2023-11-28 06:24:26'),
(58, 'balwant@git.edu', NULL, '$2y$10$D/iw0lHY.RTHN8s7CoxjWOzfFl0NLb4v68wsvLHiDBW5RdpwjPHfe', 'teaching', 'Active', NULL, '2023-11-28 06:25:31', '2023-11-28 06:25:31'),
(59, 'scdeshpande@git.edu', NULL, '$2y$10$zbK0VW79nXq8NZNmV1jXYuUQA5wcOFRji6SXA9/3sanuBDBaRU8e6', 'teaching', 'Active', NULL, '2023-11-28 06:28:16', '2023-11-28 06:28:16'),
(60, 'avdeshpande@git.edu', NULL, '$2y$10$9.ogvtaTiVbbMaNaYLzzxeHoIUosNK1PrUsigfBi/qL8jNZt67TBO', 'teaching', 'Active', NULL, '2023-11-28 06:30:33', '2023-11-28 06:30:33'),
(61, 'nadeshpande@git.edu', NULL, '$2y$10$rEjGPkP9GPVlNN0ScWYk7.5uVAUn9cPEOnYWoeb/GfZo/lRimSR0K', 'teaching', 'Active', NULL, '2023-11-28 06:32:08', '2023-11-28 06:32:08'),
(62, 'cjsudhakar@git.edu', NULL, '$2y$10$PLGfOwkqzdfKY6VgtUzRgeV7U43OZXdpW6rmgXb0gRqDPHBszcBwe', 'teaching', 'Active', NULL, '2023-11-28 06:34:36', '2023-11-28 06:34:36'),
(63, 'bssaunshi@git.edu', NULL, '$2y$10$WXLLiE9cMJ16URVnKDDz9OH5VDV9TxpqBnNFFGqxRPU38Owm8dztC', 'teaching', 'Active', NULL, '2023-11-28 06:35:37', '2023-11-28 06:35:37'),
(64, 'sndodamani@git.edu', NULL, '$2y$10$eJq6Y9/fh1UxbF/e8xXNvOFdWtS59dW7jh5dyQBxKSJzqu39YLp9y', 'teaching', 'Active', NULL, '2023-11-28 23:20:04', '2023-11-28 23:20:04'),
(65, 'nmangadi@git.edu', NULL, '$2y$10$eSWkCLDXzw9FO.4Mn4Z0ye6VJJNs31Yn7EPHAYQBGD.3Gd32jFJ.K', 'teaching', 'Active', NULL, '2023-11-28 23:20:22', '2023-11-28 23:20:22'),
(66, 'hrkulkarni@git.edu', NULL, '$2y$10$SmyBJ2xKLNvwdkgunYsDG.aqFc0mGrEzGnm9Gm5zzwhBIA/FXD.5G', 'non-teaching', 'Active', NULL, '2023-11-28 23:22:16', '2023-11-28 23:22:16'),
(67, 'rbmagadum@git.edu', NULL, '$2y$10$z7HLoLEu6N4U8EehWzAk..fsYFTj.HJZSXpPHy.aRq8S5BQ5oMFbi', 'teaching', 'Active', NULL, '2023-11-28 23:24:51', '2023-11-28 23:24:51'),
(68, 'bsingole.@git.edu', NULL, '$2y$10$5FTxwAee1uHoXci0fEaqCe4dE/0v1NXESHoHEXPeaTKezoKD6oAUi', 'non-teaching', 'Active', NULL, '2023-11-28 23:28:11', '2023-11-28 23:28:11'),
(69, 'ughullur@git.edu', NULL, '$2y$10$Rf/IOrJQQjsBqdWu16RmUO/BMlQKsT1iNcEAYE2tvuNw6lHT/PsYu', 'teaching', 'Active', NULL, '2023-11-28 23:28:13', '2023-11-28 23:28:13'),
(70, 'Akgadkari@git.edu', NULL, '$2y$10$.hzQzTO2SglpDcRM0KolceuY53A8W72kVghcBIsNcUCE3v/B0rxb2', 'non-teaching', 'Active', NULL, '2023-11-28 23:32:32', '2023-11-28 23:32:32'),
(71, 'gghegde@git.edu', NULL, '$2y$10$jwDGb6JQgb3TcLDV5p6TuOvm1pV58Auq.t5bWXeXH9q7I.y2hnscO', 'non-teaching', 'Active', NULL, '2023-11-28 23:32:52', '2023-11-28 23:32:52'),
(73, 'rameshgb@git.edu', NULL, '$2y$10$QYxniY6vX0XYyzMaFnokaeWssXqS6lahhbgZHCNTo2gWSn9wSSKPW', 'teaching', 'Active', NULL, '2023-11-28 23:33:58', '2023-11-28 23:33:58'),
(74, 'lkchougule@git.edu', NULL, '$2y$10$IseVt5cFBzHmgTMRXjLQkOHvPr0NDfQYKtTqYVLI87UgyJvDljk86', 'non-teaching', 'Active', NULL, '2023-11-28 23:37:20', '2023-11-28 23:37:20'),
(75, 'vgkamashetty@git.edu', NULL, '$2y$10$yqeYF/RuyHR9x.loL0JcjuGWTg2ZXobPHGndu6PzqSc7lrZdLo5Iq', 'non-teaching', 'Active', NULL, '2023-11-28 23:39:20', '2023-11-28 23:39:20'),
(76, 'nrchitragar@git.edu', NULL, '$2y$10$vvjY5XSSJ9vuKYJmdQByRu7IdFIBLn5NNnr.VLhNOOSmxk/oIjG9u', 'teaching', 'Active', NULL, '2023-11-28 23:40:40', '2023-11-28 23:40:40'),
(77, 'pvgudi@git.edu', NULL, '$2y$10$IWmIFNyBTI2tF9XEQKWOGOo.tyGZRVTbBnvQWRBri1WI23Ar1Ux7e', 'teaching', 'Active', NULL, '2023-11-28 23:41:22', '2023-11-28 23:41:22'),
(78, 'srmathad@git.edu', NULL, '$2y$10$2bWozAltB93RYZeOAGShe.uZxfM23H/5q.i6bAnRsMNzExJp//P4e', 'non-teaching', 'Active', NULL, '2023-11-28 23:41:25', '2023-11-28 23:41:25'),
(79, 'smkhot@git.edu', NULL, '$2y$10$Y51t6OnqWU3J2xv14VxSnu5JlQqxCm6QYTmx.fp6HRIb20COU1qrq', 'teaching', 'Active', NULL, '2023-11-28 23:45:15', '2023-11-28 23:45:15'),
(80, 'srsullad@git.edu', NULL, '$2y$10$u.Z3SQ43o4KZx.2wY3gyZ.2QPxMo34VzRiJykLY0.DuDDExyakZti', 'non-teaching', 'Active', NULL, '2023-11-28 23:45:32', '2023-11-28 23:45:32'),
(81, 'vjshetty@git.edu', NULL, '$2y$10$EdkIJQRKL3HiH78HcVIRNOSIEHt9oEGPP6YF0Pk5jPPJcP5QrL0ly', 'teaching', 'Active', NULL, '2023-11-28 23:46:17', '2023-11-28 23:46:17'),
(82, 'vskatti@git.edu', NULL, '$2y$10$hEOg23Dtexc7k5LHBBPLV.7sRO2i6/3KuiXH3goezmDKQDxGLXWoq', 'teaching', 'Active', NULL, '2023-11-28 23:50:16', '2023-11-28 23:50:16'),
(83, 'glmelge@git.edu', NULL, '$2y$10$NGs9sGSqqzfXYYrYoKCWm.v4opctFmxnVFnxfdnHMp/lTUBEK2iSq', 'non-teaching', 'Active', NULL, '2023-11-28 23:54:03', '2023-11-28 23:54:03'),
(84, 'dbmahajan@git.edu', NULL, '$2y$10$I.NBfswhzQsBkAWGcOp9oerc0mhhKbj5bP0bGOwF1LRk/1KNndtiO', 'non-teaching', 'Active', NULL, '2023-11-28 23:56:58', '2023-11-28 23:56:58'),
(85, 'scbangi@git.edu', NULL, '$2y$10$ja0r/vu4YD0WSB.yVykRKOy/pFkq0zUR2dXQFrHxoB7kIyWwv06Sy', 'teaching', 'Active', NULL, '2023-11-28 23:57:05', '2023-11-28 23:57:05'),
(86, 'nbhandigol@git.edu', NULL, '$2y$10$3HZRsme5O083TB/t/xSL/etagKKJRrym.j5IUKkuAAMHH9iIWyISS', 'non-teaching', 'Active', NULL, '2023-11-29 00:01:34', '2023-11-29 00:01:34'),
(87, 'srkulkarni1@git.edu', NULL, '$2y$10$yusGtJw2imNWAbh2Yotg4.Y4ZN6Hzk85qmZ3ObaFIRIbjiXF6tPeq', 'teaching', 'Active', NULL, '2023-11-29 00:03:13', '2023-11-29 00:03:13'),
(88, 'amkhatavakar@git.edu', NULL, '$2y$10$qgJ6XU7J70lcwc831nR7lewmBdqRxiK6c.38UC4Fs6pMYuSdiGwQi', 'non-teaching', 'Active', NULL, '2023-11-29 00:05:24', '2023-11-29 00:05:24'),
(89, 'srhulikavi@git.edu', NULL, '$2y$10$HNcnvu10HESQvmUne92byeKatDIVBgn/3bvlkU9gYvsnloUmkWmhe', 'non-teaching', 'Active', NULL, '2023-11-29 00:08:42', '2023-11-29 00:08:42'),
(90, 'krkulkarni@git.edu', NULL, '$2y$10$i3G2FpjtpZs.cMF1OJQV3ePTlo7XXFpxRwAs6VCQO4nCP6hmZXSg2', 'teaching', 'Active', NULL, '2023-11-29 00:12:08', '2023-11-29 00:12:08'),
(91, 'aadaptadar@git.edu', NULL, '$2y$10$exUOHESwl6mN/bxGYMaxgOxGLnENHAOZTp9O2Fl1IkXfJGDiXzqby', 'non-teaching', 'Active', NULL, '2023-11-29 00:12:17', '2023-11-29 00:12:17'),
(92, 'sakadad@git.edu', NULL, '$2y$10$eKA4cUxOd0iz1QedgV3Xs.OuLtkikB4tC3fyDRYX/P57eRZlk5KZi', 'non-teaching', 'Active', NULL, '2023-11-29 00:16:02', '2023-11-29 00:16:02'),
(93, 'VLKatti@git.edu', NULL, '$2y$10$DLQJKVE49933bQnZg1p0n.xYeQKhv.16w/cwEZMiu2qvNTFKOnHtC', 'non-teaching', 'Active', NULL, '2023-11-29 00:18:48', '2023-11-29 00:18:48'),
(94, 'kpthejaswi@git.edu', NULL, '$2y$10$c4Sx7KauBNO5iWZ2.kot2u2eMxMmSPzisnkpLypxK8MGDHnFrgfW6', 'teaching', 'Active', NULL, '2023-11-29 00:19:29', '2023-11-29 00:19:29'),
(95, 'ajbalikai@git.edu', NULL, '$2y$10$LZAreJJhyGgeSHbEGaTCeeae9MbJGidn5qjiKWcGD5ujml36JGzhO', 'non-teaching', 'Active', NULL, '2023-11-29 00:20:35', '2023-11-29 00:20:35'),
(96, 'bihanji@git.edu', NULL, '$2y$10$yax26eGgulJhHqRwUhtVLOdB5Wj/OEPPhkvfh4IZe.vUvlvoRXzWq', 'non-teaching', 'Active', NULL, '2023-11-29 00:25:29', '2023-11-29 00:25:29'),
(97, 'bbhagedal@git.edu', NULL, '$2y$10$AFfhmn8ToYa6rjDFz4WDI.5LluJ8Fys9C9A.dAbqU2JYWSgP/qjbq', 'non-teaching', 'Active', NULL, '2023-11-29 00:27:49', '2023-11-29 00:27:49'),
(98, 'hbkulkarni@git.edu', NULL, '$2y$10$EqbVlzNtaP0z18583n8tzOFohTEkBCtjHGgApWA7t3Xq.7D6WR9zC', 'teaching', 'Active', NULL, '2023-11-29 00:28:08', '2023-11-29 00:28:08'),
(99, 'bskalburgi@git.edu', NULL, '$2y$10$Bstn4oSiCmjYMvSd2rynFeooAOMHVsVhopP9O7bY1UoRF3/5uXI16', 'non-teaching', 'Active', NULL, '2023-11-29 00:33:11', '2023-11-29 00:33:11'),
(100, 'jkk@git.edu', NULL, '$2y$10$ZRYUPH4e9nyc2kAiWHPpwuJ6MVCwxwePmhfiwjT5fKdpfYBtIPsDK', 'teaching', 'Active', NULL, '2023-11-29 00:35:21', '2023-11-29 00:35:21'),
(101, 'bshebballi@git.edu', NULL, '$2y$10$KcfJ2qYE7zSi.eYbcw2Vx.ipIWXfkTVkVYU35082GRipTJmQ8i1zu', 'non-teaching', 'Active', NULL, '2023-11-29 00:37:01', '2023-11-29 00:37:01'),
(102, 'pgkamashetti@git.edu', NULL, '$2y$10$2N5JWf8/56kVeQ.c.DQPUOYcUHMDarEv7RiFAY1sqKV0eLZUDBFYq', 'non-teaching', 'Active', NULL, '2023-11-29 00:37:58', '2023-11-29 00:37:58'),
(103, 'sshivakumar@git.edu', NULL, '$2y$10$54fRPcCcVWpCpyZHvy0CdeH2dtla1xhF65uSWGw87a7bOZSTqcU.a', 'teaching', 'Active', NULL, '2023-11-29 00:39:18', '2023-11-29 00:39:18'),
(104, 'ssshanbhag@git.edu', NULL, '$2y$10$BjegE6vX7J5fWkKjY59KT.B5SS7sC9dlqvZiYh8/Tsdg2WJhXqbra', 'teaching', 'Active', NULL, '2023-11-29 00:40:17', '2023-11-29 00:40:17'),
(105, 'mspatil@git.edu', NULL, '$2y$10$.oHY5ebPpWVrpUDwIeG.UO0SK5MDHrn34RHM5ZV8CXjq7aRTHlPkS', 'teaching', 'Active', NULL, '2023-11-29 00:44:41', '2023-11-29 00:44:41'),
(106, 'rgharihar@git.edu', NULL, '$2y$10$E6FFfX4ZGt5pkSBgTVjM4eevbH4jmNtaow8dX9RxjeTPZ4Z0C1a4.', 'non-teaching', 'Active', NULL, '2023-11-29 00:49:29', '2023-11-29 00:49:29'),
(107, 'v_satwik@git.edu', NULL, '$2y$10$vxx0uVxlMIqgKLPgVwhA0ee8F1TlxN4pGYwpDK6Xh2rErRZkAAl.a', 'teaching', 'Active', NULL, '2023-11-29 00:50:51', '2023-11-29 00:50:51'),
(108, 'vthendre@git.edu', NULL, '$2y$10$mH7Ag0g2utW7nnmzwzA17eoxkkVmn9Wexa49xkp/PrPRTKus07Tr6', 'non-teaching', 'Active', NULL, '2023-11-29 00:55:50', '2023-11-29 00:55:50'),
(109, 'smjalagekar@git.edu', NULL, '$2y$10$By0YAAtTgY.bOR4Rc7YohOc.T6naZMmcSVgwgkkg7IzruZNoaKc8S', 'non-teaching', 'Active', NULL, '2023-11-29 00:56:42', '2023-11-29 00:56:42'),
(110, 'vcshirvalkar@git.edu', NULL, '$2y$10$Ii667o0qcUEuVYM1wzYBUeA0/t7MFSQzBQQFozc8fEiUBEO25JMJy', 'non-teaching', 'Active', NULL, '2023-11-29 01:02:51', '2023-11-29 01:02:51'),
(111, 'ankallol@git.edu', NULL, '$2y$10$ufuenWEU.nDxLQLOHZUzNuSGh8xFxkcxYbkFuKRnzM5OmEv5W1JIe', 'teaching', 'Active', NULL, '2023-11-29 01:02:55', '2023-11-29 01:02:55'),
(112, 'pvpatil@git.edu', NULL, '$2y$10$r.hRcMJhh72.bDriBCfyPe2YZw2gFTeAjBH1y91vHBSjyqqbeLQZq', 'non-teaching', 'Active', NULL, '2023-11-29 01:04:06', '2023-11-29 01:04:06'),
(113, 'abpatil@git.edu', NULL, '$2y$10$A1JylLUFT0nkp6/itk.YWu0eJr8G5HaxRlYjuD91qiwexaRTnS1Sy', 'non-teaching', 'Active', NULL, '2023-11-29 01:07:46', '2023-11-29 01:07:46'),
(114, 'pvgopikrishna@git.edu', NULL, '$2y$10$wSGJD78zkRXsrU/RkfOlyepTfDIBJkuqu3HDQb53jAQn6M/6xBX4a', 'teaching', 'Active', NULL, '2023-11-29 01:08:02', '2023-11-29 01:08:02'),
(115, 'mnadakatti@git.edu', NULL, '$2y$10$yN0.Fjgq79FBAgxMOe2xaOhgpF36OdxQHmSFNTKSKkwDXDUErkdma', 'teaching', 'Active', NULL, '2023-11-29 01:12:19', '2023-11-29 01:12:19'),
(116, 'gmsaudatti@git.edu', NULL, '$2y$10$mnx8gxdEdWucmMjPre3RLOdKAEQpmJXhJjEKfs7Na.BNbNFZqeG4q', 'non-teaching', 'Active', NULL, '2023-11-29 01:12:37', '2023-11-29 01:12:37'),
(117, 'dkarennavar@git.edu', NULL, '$2y$10$OYurRi.BfTXkNg7eLCt04eF2rl4IyotdAwp2PHsiW01OPd7r73grK', 'non-teaching', 'Active', NULL, '2023-11-29 01:14:57', '2023-11-29 01:14:57'),
(118, 'srjosh@git.edu', NULL, '$2y$10$64Iu86lBGn2oFUS4Eqm7LuhLki9arqUoWvI1w6QAGldDBx9FU2x0i', 'non-teaching', 'Active', NULL, '2023-11-29 01:15:25', '2023-11-29 01:15:25'),
(119, 'agkulkarni@git.edu', NULL, '$2y$10$98hTagrDuID/swxotfgjOe8Hdwr2Fyx8sDcCwFIBoiYAM/Qs1CQa.', 'teaching', 'Active', NULL, '2023-11-29 01:17:16', '2023-11-29 01:17:16'),
(120, 'smitra@git.edu', NULL, '$2y$10$IqDzMi47xhGcrAyDhQPrEO9O2VFmAxfeh6mPsCRvJA6mzPSqfXSse', 'teaching', 'Active', NULL, '2023-11-29 01:17:37', '2023-11-29 01:17:37'),
(121, 'sureshkuri@git.edu', NULL, '$2y$10$4.h1CUh9UKPPn2f0fl6o4eeUnq8jwJEv.zApj8xD.UTtWKQKtAdYu', 'teaching', 'Active', NULL, '2023-11-29 01:21:48', '2023-11-29 01:21:48'),
(122, 'ivgadadegoudra@git.edu', NULL, '$2y$10$nqbypcv7S6la4OwavrSi.OH9PTIRh1nuCSlLDDIyrkJxsDsPIGyb.', 'non-teaching', 'Active', NULL, '2023-11-29 01:21:57', '2023-11-29 01:21:57'),
(123, 'mbbadiger@git.edu', NULL, '$2y$10$GlWGe0Ds/RYVmDf7Tfj7n.7e72ilSLsivlNCAFqcF9DxenxxO04JC', 'non-teaching', 'Active', NULL, '2023-11-29 01:23:23', '2023-11-29 01:23:23'),
(124, 'rblakkundi@git.edu', NULL, '$2y$10$iMzxZ2cxidrTsjzxBDkvrO8tjsBnPm8XxEKJUvz8ie7qHqDA2f/pm', 'non-teaching', 'Active', NULL, '2023-11-29 01:25:32', '2023-11-29 01:25:32'),
(125, 'sapatil@git.edu', NULL, '$2y$10$KoAxkJCf8O7.e119aoC6We1IuEF8bG.WkN.MHIiFIROxTO/M1lCDy', 'non-teaching', 'Active', NULL, '2023-11-29 01:28:48', '2023-11-29 01:28:48'),
(126, 'vrm@git.edu', NULL, '$2y$10$JkIn34xC7rq63JcHMK71lucO5EOHOKgJ8QP7/TIKk1WQOjri.x/Q2', 'teaching', 'Active', NULL, '2023-11-29 01:29:13', '2023-11-29 01:29:13'),
(127, 'abgavade@git.edu', NULL, '$2y$10$Tu4Jkb1apv5cTxFs43mNSerjYBTzOofHWHbhFcMGOI30J4plR2H2m', 'teaching', 'Active', NULL, '2023-11-29 01:29:32', '2023-11-29 01:29:32'),
(128, 'dysonolkar@git.edu', NULL, '$2y$10$tbEXfzoQqFe/N5AYiOW2ou0Q8aIE5qcOcVHzDuaBpF5u4Fw7/8fgm', 'non-teaching', 'Active', NULL, '2023-11-29 01:32:24', '2023-11-29 01:32:24'),
(129, 'spdeshpande@git.edu', NULL, '$2y$10$9Y2YS1PhyhVnT/kNPfEB/O0SmplW9uhZswoKhEWRRAp2ONdDVFLSO', 'teaching', 'Active', NULL, '2023-11-29 01:32:48', '2023-11-29 01:32:48'),
(130, 'vvkulkarni@git.edu', NULL, '$2y$10$wSnzl6PxTcYxmE9F8W/vcukf.IxI/.TevIQb64tqna1N126fyVcwu', 'teaching', 'Active', NULL, '2023-11-29 01:33:11', '2023-11-29 01:33:11'),
(131, 'bsbhendigeri@git.edu', NULL, '$2y$10$XxaSTWD84PtGYyv2skZ/fev1tn2VK3czrgHxpDykB8By/FmsYWRte', 'non-teaching', 'Active', NULL, '2023-11-29 01:36:18', '2023-11-29 01:36:18'),
(132, 'shkulkarni@git.edu', NULL, '$2y$10$j8dkqHweVdL/tvRPLGsHJOMl.d6ZIP09495tJDBDgvU8LpBpdFpnu', 'teaching', 'Active', NULL, '2023-11-29 01:36:55', '2023-11-29 01:36:55'),
(133, 'mskurani@git.edu', NULL, '$2y$10$0ot94QDA83OAZFTST4GTReXt2y52uWPQ8svNCpC93HEEmri6tAWvS', 'non-teaching', 'Active', NULL, '2023-11-29 01:37:47', '2023-11-29 01:37:47'),
(134, 'smbapat@git.edu', NULL, '$2y$10$xcWaRdIZKi1SHypxUZAQh.Fkqp.dmPpyPdBJUbiOru.vafodIo4bO', 'teaching', 'Active', NULL, '2023-11-29 01:40:59', '2023-11-29 01:40:59'),
(135, 'gplokur@git.edu', NULL, '$2y$10$IDhzplQ4KZnTjYj2J8Bdn.1/M1eeseGA1B2EK9p9ESx0HX04c6Cpe', 'non-teaching', 'Active', NULL, '2023-11-29 01:41:37', '2023-11-29 01:41:37'),
(136, 'nrsontakki@git.edu', NULL, '$2y$10$VEzSuneuwj5OvzgxSPWFrehziuozuTYgBWR/lGnt9fo8msvf24FYK', 'non-teaching', 'Active', NULL, '2023-11-29 01:42:44', '2023-11-29 01:42:44'),
(137, 'dspingat@git.edu', NULL, '$2y$10$i0CYo29Bns1JH09QaFrgo.WHYmoUJJCrSG/fiki1WEebADIXfDXM2', 'non-teaching', 'Active', NULL, '2023-11-29 01:45:05', '2023-11-29 01:45:05'),
(138, 'sstarihalkar@git.edu', NULL, '$2y$10$Dd8zyQrl.5HqcLmVdncQJupO3f0cuTQUwC72DdbgzfpJuWgGTiA3G', 'non-teaching', 'Active', NULL, '2023-11-29 01:47:15', '2023-11-29 01:47:15'),
(139, 'akp@git.edu', NULL, '$2y$10$X0odFHf/0H6Qs3z416kWr.dwk1ERyESmVmbDp42yzDyY/rJ5WdDgy', 'teaching', 'Active', NULL, '2023-11-29 01:49:00', '2023-11-29 01:49:00'),
(140, 'rmyellurkar@git.edu', NULL, '$2y$10$gX10dkf9xenL6oXQxsOLWOhlNoAAe90IP0dO2v/hl3.gXAiMmU.Ke', 'non-teaching', 'Active', NULL, '2023-11-29 01:49:12', '2023-11-29 01:49:12'),
(141, 'vikrant_shende@git.edu', NULL, '$2y$10$tAJLt61mBbnAc0VaR2jvi.y1jkGcG871uckjxyjxZUUfZweSSC3Qe', 'teaching', 'Active', NULL, '2023-11-29 01:49:31', '2023-11-29 01:49:31'),
(142, 'giridharsudi@git.edu', NULL, '$2y$10$py7zgyz6LzM1DFwiZR/Nb.zaUmy4d3WG34tNRRkQC9NYO/Y9gkkaC', 'teaching', 'Active', NULL, '2023-11-29 01:53:23', '2023-11-29 01:53:23'),
(143, 'bsjagati@git.edu', NULL, '$2y$10$KMvYUXZDIuxqsGgp2.leae0jVsLA3Jg7Rr2QoxLq0xpVeeTv6U/dC', 'teaching', 'Active', NULL, '2023-11-29 01:53:36', '2023-11-29 01:53:36'),
(144, 'bsbakhedi@git.edu', NULL, '$2y$10$xeyPxybNU9/Wq/.KzwjUlO6Y.XQRYn3oOZYUKNC4AIQD7USoOumQG', 'non-teaching', 'Active', NULL, '2023-11-29 01:58:41', '2023-11-29 01:58:41'),
(145, 'sckulkarni@git.edu', NULL, '$2y$10$KfIE6OfZT.m6IDFjtTfl/ueL4OiTAytJyfHUZ5ImCOGx8O1M1sgW2', 'teaching', 'Active', NULL, '2023-11-29 02:00:04', '2023-11-29 02:00:04'),
(146, 'asawati@git.edu', NULL, '$2y$10$KYyX8bdlZB5MI1wz8GmWieqNsV9QkSxqqqYg8wFx9iVIm6CDLeUXq', 'teaching', 'Active', NULL, '2023-11-29 02:00:30', '2023-11-29 02:00:30'),
(147, 'rbmokashi@git.edu', NULL, '$2y$10$IJ3/TYpkOvrOa7ZLN/Mcqu6QTqFKToW1fVka9KOP/P8Z8GhSLVfL6', 'non-teaching', 'Active', NULL, '2023-11-29 02:00:37', '2023-11-29 02:00:37'),
(148, 'ladeshpande@git.edu', NULL, '$2y$10$aacYR0FXn99EPH9l9uZTHO9Wy5ocujUun8/igXG6Ef2IYna.Lf/Pi', 'non-teaching', 'Active', NULL, '2023-11-29 02:03:58', '2023-11-29 02:03:58'),
(149, 'gdgokak@git.edu', NULL, '$2y$10$qtTRcz/Jb22xy99u62aCyukHvY6o51/Li9USNVt7IPsPrX7vF6qxi', 'teaching', 'Active', NULL, '2023-11-29 02:04:05', '2023-11-29 02:04:05'),
(150, 'pgholkar@git.edu', NULL, '$2y$10$U8sKqGeJl/ImULE42dIDsu8QXapN2g888lF3Wc1pj8ETN1PGt49kC', 'non-teaching', 'Active', NULL, '2023-11-29 02:04:15', '2023-11-29 02:04:15'),
(151, 'brpandurangi@git.edu', NULL, '$2y$10$GvdffthEkTAj6DXOkB64XOlImMlCydPV1bxXLGEzAdwpEuylYXdjO', 'teaching', 'Active', NULL, '2023-11-29 02:05:14', '2023-11-29 02:05:14'),
(152, 'pshalannavar@git.edu', NULL, '$2y$10$Nj1SAyrF7tYQ99XdPqVZ8u8B..aY8w5I1/IBbRpopSGkK80dqfwk.', 'non-teaching', 'Active', NULL, '2023-11-29 02:08:13', '2023-11-29 02:08:13'),
(153, 'vk@git.edu', NULL, '$2y$10$2JXfe.1Jau5MsnbXbI/H4uXNQ1dEhMpwln2KZGIV8bequgBFyDfoy', 'teaching', 'Active', NULL, '2023-11-29 02:09:59', '2023-11-29 02:09:59'),
(154, 'dkkatti@git.edu', NULL, '$2y$10$CrrJWbXp59n7g5zyRrp2KurbSKjk40QGS9IJUzRJV8IkZ0NLrYILK', 'non-teaching', 'Active', NULL, '2023-11-29 02:10:03', '2023-11-29 02:10:03'),
(155, 'snbhavikatti@git.edu', NULL, '$2y$10$qtIq8DZJN9Sfz65a69aj..KNNNTm6HOgnSJV95zOpZKndWLrecEBS', 'teaching', 'Active', NULL, '2023-11-29 02:12:04', '2023-11-29 02:12:04'),
(156, 'uinchal@git.edu', NULL, '$2y$10$BboN/ia0yHZ9Go1EVcKjpOmKcSnoX49rVaHG1PrfGYWDn0yWGGkfG', 'non-teaching', 'Active', NULL, '2023-11-29 02:12:23', '2023-11-29 02:12:23'),
(157, 'sKoramaddi@git.edu', NULL, '$2y$10$sKSr7psnpdskJKOrYkqtxu/zhH6yeKT8j3bZPNTF5oQ0PEpekoFY.', 'non-teaching', 'Active', NULL, '2023-11-29 02:16:38', '2023-11-29 02:16:38'),
(158, 'sapatil1@git.edu', NULL, '$2y$10$iZtGUj..BQVOALHfsgY6Yus0YtqXnRn5/1M3ikvIcIwxUXxWMoN4i', 'non-teaching', 'Active', NULL, '2023-11-29 02:17:29', '2023-11-29 02:17:29'),
(159, 'vbdeshmukh@git.edu', NULL, '$2y$10$OAar4CCu8GYSgwnorYFmZ.GHuQ/nY2H9ZcMg48PBfZjP2ja0HP62q', 'teaching', 'Active', NULL, '2023-11-29 02:19:40', '2023-11-29 02:19:40'),
(160, 'sbpatil@git.edu', NULL, '$2y$10$oQdg2zwHBx0W8wFjGv8FPOWCB1XnXFv3ionsDhANvxxNUqG9UIX6e', 'non-teaching', 'Active', NULL, '2023-11-29 02:22:08', '2023-11-29 02:22:08'),
(161, 'vrkulkarni@git.edu', NULL, '$2y$10$ANboVkASV0vOQbHQxjNgDOu3c55f5rgRCff2PcKDtKRDYTaacdkDm', 'non-teaching', 'Active', NULL, '2023-11-29 02:22:19', '2023-11-29 02:22:19'),
(162, 'aagadgil@git.edu', NULL, '$2y$10$WeVDftkszYGJFn1U2PJ5Bu1qZfI4g7nFHJyoN41PUZQSbGMOB.gx6', 'teaching', 'Active', NULL, '2023-11-29 02:26:02', '2023-11-29 02:26:02'),
(163, 'gpbandi@git.edu', NULL, '$2y$10$oTqRUnMm4u6atgHF9fjffuJPddAA0Zazd4Cj0YCRobgFnBQfZE1vi', 'non-teaching', 'Active', NULL, '2023-11-29 02:27:14', '2023-11-29 02:27:14'),
(164, 'ddchougale@git.edu', NULL, '$2y$10$HZUwYsXL5QTKxgkeH4Z4wuNvY1YyZLT5/4M.9basZtuq9h6aWqAey', 'non-teaching', 'Active', NULL, '2023-11-29 02:27:49', '2023-11-29 02:27:49'),
(165, 'srkulkarni@git.edu', NULL, '$2y$10$TuIKynkTrAyW1feyk1ue/OnHjQxhApO5romdP6fN51GIWsR3o1YBm', 'teaching', 'Active', NULL, '2023-11-29 02:28:00', '2023-11-29 02:28:00'),
(166, 'abhishekd@git.edu', NULL, '$2y$10$Yl2Pcsm0PXAyBCk9/yS0luPtanztd1BehdZe.qEr46MtviyYAwsxO', 'teaching', 'Active', NULL, '2023-11-29 02:29:42', '2023-11-29 02:29:42'),
(167, 'gsguggari@git.edu', NULL, '$2y$10$vyrn4zaPPWHwjRGztbH.0Ocmtk25cOA92WlMInwtkmR9I6nMhPDp6', 'teaching', 'Active', NULL, '2023-11-29 02:32:00', '2023-11-29 02:32:00'),
(168, 'ganeshchate@git.edu', NULL, '$2y$10$b6zYRmrLHvLP00rWLWAgNeqgtp.Cg28k4uZKLG9QgzJ2VEvwMr8E.', 'teaching', 'Active', NULL, '2023-11-29 02:35:54', '2023-11-29 02:35:54'),
(169, 'smkeshkamat@git.edu', NULL, '$2y$10$ajfdvTAZt9slde.Oig3rquta3hz30HNtAgxAIJjvs5LtRTb.2ujuS', 'teaching', 'Active', NULL, '2023-11-29 02:38:45', '2023-11-29 02:38:45'),
(170, 'vmmurgod@git.edu', NULL, '$2y$10$OreOq/eNalXP3fvuchq8nuF2rb1Vt8.RGrxJriUkUrDqe7S2QjODC', 'teaching', 'Active', NULL, '2023-11-29 02:40:25', '2023-11-29 02:40:25'),
(171, 'ssbandi@git.edu', NULL, '$2y$10$A2HMq4.ogGsAPU.FG4ymP.6JLANRlSe2vDwmqZOFZMgfuUZKZixMC', 'non-teaching', 'Active', NULL, '2023-11-29 02:42:45', '2023-11-29 02:42:45'),
(172, 'sssantaji@git.edu', NULL, '$2y$10$VmpF.CnGJ.qRESwCmh955.8fhANtjGTz.jJbBaGS/lREWRc3/EtAK', 'teaching', 'Active', NULL, '2023-11-29 02:45:23', '2023-11-29 02:45:23'),
(173, 'rbkumbar@git.edu', NULL, '$2y$10$p/LyPAJhzKMmuOW3FmciveHM5Qx71ILYottNQ2PR3CpsRQSpdsnWy', 'non-teaching', 'Active', NULL, '2023-11-29 02:48:09', '2023-11-29 02:48:09'),
(174, 'vbadiger@git.edu', NULL, '$2y$10$D5LPIuj94eMUIZ9n6vfwQOaveuGJVlHsucCfXAkGBfPVGUyLqankW', 'teaching', 'Active', NULL, '2023-11-29 02:48:29', '2023-11-29 02:48:29'),
(175, 'njinamdar@git.edu', NULL, '$2y$10$7XucATki/odjOywhiW0JYen4HV.dllhGl03S1mvCXUoToCJzSjPhO', 'teaching', 'Active', NULL, '2023-11-29 02:48:54', '2023-11-29 02:48:54'),
(176, 'ssinamdar@git.edu', NULL, '$2y$10$76O6PBUpp7xfZm2sdaAg1.rYhSfComkClbiMa.TMdfAoZuWE6fKBC', 'non-teaching', 'Active', NULL, '2023-11-29 02:52:27', '2023-11-29 02:52:27'),
(177, 'pukalkundri@git.edu', NULL, '$2y$10$h.rPeMx0NrDVF7kxZ4wXVuCRjLrVWXJsBBuxmXOQL/ZrF6Akb.1Ym', 'teaching', 'Active', NULL, '2023-11-29 04:00:41', '2023-11-29 04:00:41'),
(178, 'sjpatil@git.edu', NULL, '$2y$10$LOvLRsh8i2pU3kUb6wzu2.qXxVTwh4fwsRoK3ZYkly21IkEUpFSSS', 'teaching', 'Active', NULL, '2023-11-29 04:04:57', '2023-11-29 04:04:57'),
(179, 'mbchaugule@git.edu', NULL, '$2y$10$ix8Gq7W9qgSnoRvfljwJsuZ0S2t0YO06.qrh5vZJ04nUW2a0TA306', 'teaching', 'Active', NULL, '2023-11-29 04:08:24', '2023-11-29 04:08:24'),
(180, 'scjotawar@git.edu', NULL, '$2y$10$X3zVxVcfEBTB.g.CPOTd/O.52aI4QMIX9Acu4Diu4gtqVlu19IQSS', 'non-teaching', 'Active', NULL, '2023-11-29 04:09:08', '2023-11-29 04:09:08'),
(181, 'sknerli@git.edu', NULL, '$2y$10$PpwpDufrZ1Ak7DcglMBWE.ktYlVJKZ2QyQxL/fDitOyvd39RPIOiG', 'non-teaching', 'Active', NULL, '2023-11-29 04:09:28', '2023-11-29 04:09:28'),
(182, 'rktavildar@git.edu', NULL, '$2y$10$CELu36dt4hD/nl4sA5OKk.CDgl0ntsQyDryXqGWbU25n6XmHUUSCe', 'teaching', 'Active', NULL, '2023-11-29 04:09:33', '2023-11-29 04:09:33'),
(183, 'dskulkarni@git.edu', NULL, '$2y$10$AGnOMuPxhWaTRraG8MV56uZ2gG/PsEthvOL4AX8VC.XbPWjsueOHu', 'teaching', 'Active', NULL, '2023-11-29 04:12:22', '2023-11-29 04:12:22'),
(184, 'anmol_jb@git.edu', NULL, '$2y$10$iziyYPRw35hmjDZCgmoRKukCVZupM0PTquylMg5VaC9aQfReDS8Tq', 'non-teaching', 'Active', NULL, '2023-11-29 04:14:06', '2023-11-29 04:14:06'),
(185, 'uudeshpande@git.edu', NULL, '$2y$10$urHdmrrfDYaXPjXC9voyBe2cEPKxkiBVsZsAQYB9QnXr4AVm.Hhq2', 'teaching', 'Active', NULL, '2023-11-29 04:15:55', '2023-11-29 04:15:55'),
(186, 'tthawal@git.edu', NULL, '$2y$10$e.vfazSvRLWrNb2SSB3NUeY5lbpNVT.IFhBX1LVQviWUypXwtms32', 'teaching', 'Active', NULL, '2023-11-29 04:15:58', '2023-11-29 04:15:58'),
(187, 'umbirje@git.edu', NULL, '$2y$10$2DfaEPhzd/VwDFtbN87ZzO.4fEPIFJukkmOHS4gNHd2U3mAS3NR5W', 'non-teaching', 'Active', NULL, '2023-11-29 04:19:03', '2023-11-29 04:19:03'),
(188, 'mrkatabugol@git.edu', NULL, '$2y$10$RTs0IAmFpEVCdOvq6uB/COE0tHG6KWSFCIBUogSxDLG.J5RqnrEyO', 'non-teaching', 'Active', NULL, '2023-11-29 04:19:08', '2023-11-29 04:19:08'),
(189, 'aakulkarni@git.edu', NULL, '$2y$10$K//0PxLsVkiSY5s2bfKleeSgb.7uMxiRtuGj8m.tVShCnT/WjQgqK', 'teaching', 'Active', NULL, '2023-11-29 04:19:56', '2023-11-29 04:19:56'),
(190, 'bnnadpurohit@git.edu', NULL, '$2y$10$lVb/zKJAhDz8TtY5JuRdR.wiNT9b/E2GCjZx16P8V0CBK.LKWQDBy', 'teaching', 'Active', NULL, '2023-11-29 04:20:16', '2023-11-29 04:20:16'),
(191, 'bchundre@git.edu', NULL, '$2y$10$UceircT8B9QAVAPim.TwXuRjszgG60dol1M/Mh9cC9h/aBsJGXphm', 'non-teaching', 'Active', NULL, '2023-11-29 04:22:35', '2023-11-29 04:22:35'),
(192, 'mrpatil@git.edu', NULL, '$2y$10$7lrML0J5LtT7NGvjRAiUxOlwJKOVMe.jGcQF9qxN8oiqseDsf2xk.', 'non-teaching', 'Active', NULL, '2023-11-29 04:26:09', '2023-11-29 04:26:09'),
(193, 'bknayak@git.edu', NULL, '$2y$10$2acS71VhicQv4ROZujI6ZOqjg2IwmuGfZkprTFzn6z8.oOjjgdob.', 'non-teaching', 'Active', NULL, '2023-11-29 04:26:13', '2023-11-29 04:26:13'),
(194, 'ssnargundkar@git.edu', NULL, '$2y$10$BrJGp3H/tFMn49ZsQmQ5f.heEHjdu0y4T.EvtTI4xNQq3uxtb7FYW', 'teaching', 'Active', NULL, '2023-11-29 04:27:55', '2023-11-29 04:27:55'),
(195, 'vnmarihal@git.edu', NULL, '$2y$10$O1riXE6JjQBntgkJe2vquuqP0C6dIDbbPSey0sxh7WtvZPjSF/sOG', 'non-teaching', 'Active', NULL, '2023-11-29 04:29:33', '2023-11-29 04:29:33'),
(196, 'ppkakamari@git.edu', NULL, '$2y$10$4j0xghepnrbX4zqEkK86A.u6BTaFmW4rGt7962uksEJYgr1a1U6d.', 'teaching', 'Active', NULL, '2023-11-29 04:31:23', '2023-11-29 04:31:23'),
(197, 'pcsattyennavar@git.edu', NULL, '$2y$10$F7wvafwWnfgjRVJM3cRrp.embIHQ8wnO2x3GUYYfUrTL0HMWax91C', 'non-teaching', 'Active', NULL, '2023-11-29 04:32:55', '2023-11-29 04:32:55'),
(198, 'phbellad@git.edu', NULL, '$2y$10$4adlG3Hc/gAA/t5ygNxI9.t5JYHVTdLwZbPyHepJWwugpWR0Ya0f.', 'non-teaching', 'Active', NULL, '2023-11-29 04:33:55', '2023-11-29 04:33:55'),
(199, 'sssantaji1@git.edu', NULL, '$2y$10$Xs7txgBHNqn5oarkbLFMquXWF3ftkDtAZBoMfpkeHpeEYIJQLXzeK', 'teaching', 'Active', NULL, '2023-11-29 04:34:42', '2023-11-29 04:34:42'),
(200, 'nmpadmannavar@git.edu', NULL, '$2y$10$81zvnfPWPnnRk4vlMp/CxeKLcZqw408tQrJ2DASSaHk0fwB0hXwUG', 'non-teaching', 'Active', NULL, '2023-11-29 04:38:09', '2023-11-29 04:38:09'),
(201, 'shivappa@git.edu', NULL, '$2y$10$G3cnIKMBXgxjAKbzNLk.ruPHUM42b3W9OHe8VKjCppL1VSWWTHXsa', 'non-teaching', 'Active', NULL, '2023-11-29 04:39:29', '2023-11-29 04:39:29'),
(202, 'kdkattimani@git.edu', NULL, '$2y$10$HQmki7yHw38kCfWUts65.ulCP6f8KW8rCyNRrgbXWgYOr33oqjj2m', 'teaching', 'Active', NULL, '2023-11-29 04:42:05', '2023-11-29 04:42:05'),
(203, 'srlatkar@git.edu', NULL, '$2y$10$E/WyjRyDCH2ahcxUEJGGUuUGG7mVNhdjbjb3SwVtCpaEbc8MFsTj6', 'non-teaching', 'Active', NULL, '2023-11-29 04:44:00', '2023-11-29 04:44:00'),
(204, 'vrmathad@git.edu', NULL, '$2y$10$gBEbSQ1grBAo8VuPT3h/4eM7YoDaTVd98V5ONJEGmqY2R5B7lguUC', 'non-teaching', 'Active', NULL, '2023-11-29 04:44:28', '2023-11-29 04:44:28'),
(205, 'maheshkori@git.edu', NULL, '$2y$10$59CaA.AvfRzhb1Y5eVq5W.ZUv0Pj5nFRvrJyBpc4aM4NJUmNhavI6', 'teaching', 'Active', NULL, '2023-11-29 04:47:05', '2023-11-29 04:47:05'),
(206, 'smkatamble@git.edu', NULL, '$2y$10$DqmkXKmQTjQCcfJm.wKnruKmEKBrXYr7AIycOHvJ3XdFeLfEoS5CK', 'non-teaching', 'Active', NULL, '2023-11-29 04:49:24', '2023-11-29 04:49:24'),
(207, 'psajawan@git.edu', NULL, '$2y$10$5QAjC014d345jihQUngoGeHOoWto9Mg71AusZyukopfvpBSYSOMw.', 'teaching', 'Active', NULL, '2023-11-29 04:49:29', '2023-11-29 04:49:29'),
(208, 'mrkulkarni@git.edu', NULL, '$2y$10$HxRkw2Wy6EArh50TnGf1peWvbu9eFPGhsI7nN3uwW6//kwwdpd.vi', 'non-teaching', 'Active', NULL, '2023-11-29 04:50:26', '2023-11-29 04:50:26'),
(209, 'ynpotdar@git.edu', NULL, '$2y$10$YX6TG1CYxewVLopp5rVrNOADBAMY41PHoaPE6/HvEvKfpPnwHNuqq', 'teaching', 'Active', NULL, '2023-11-29 04:52:56', '2023-11-29 04:52:56'),
(210, 'bnchougula@git.edu', NULL, '$2y$10$0U0fGHRE2d/m2ehR/HN1POGFMYfZQnR7JpJKO42eiWdbhR1f9heVa', 'non-teaching', 'Active', NULL, '2023-11-29 04:53:04', '2023-11-29 04:53:04'),
(211, 'vpdeshpande@git.edu', NULL, '$2y$10$dPvCfVF0xNSoBN55w8.26e/3Ahfmn/4uWvkjmpBS3TwrV523rv9gi', 'teaching', 'Active', NULL, '2023-11-29 04:53:51', '2023-11-29 04:53:51'),
(212, 'tdgangodkar@git.edu', NULL, '$2y$10$PZ2akgs8gfBgMD52lKhRlONdP5sGFFyMFRoAiN4Q0EBsAh2j4AGCy', 'non-teaching', 'Active', NULL, '2023-11-29 04:56:04', '2023-11-29 04:56:04'),
(213, 'maheshsm@git.edu', NULL, '$2y$10$orlY6/C28Uxou0kDe2HSTeOk8OdVWV9v6OntvxTc7WlYET.Fg8vIu', 'non-teaching', 'Active', NULL, '2023-11-29 04:58:25', '2023-11-29 04:58:25'),
(214, 'aadeshpande@git.edu', NULL, '$2y$10$0KjCR/AsVO9k/.AW3GxZ1OocCz4P17AwZEfIqA2n1qzwTcU6AFP5C', 'teaching', 'Active', NULL, '2023-11-29 04:59:28', '2023-11-29 04:59:28'),
(215, 'rbkoti@git.edu', NULL, '$2y$10$3V8Ti/J9kZd8iLTikXPPY.JLXgEKVACyNhOZX1Knb9O8T6oUGMhEC', 'teaching', 'Active', NULL, '2023-11-29 05:00:24', '2023-11-29 05:00:24'),
(216, 'shrinivas@git.edu', NULL, '$2y$10$iLbIsGOaTVxvXS2YC2lzeuVxOspI0jD1SThsLO056nU7JczNt3eHW', 'non-teaching', 'Active', NULL, '2023-11-29 05:02:36', '2023-11-29 05:02:36'),
(217, 'prajakta.mech@git.edu', NULL, '$2y$10$Gobc08C2Qxz/Xc297vrA1u1DMpAUJKJ/lEv31Im9YoY8fFE5id/We', 'teaching', 'Active', NULL, '2023-11-29 05:03:21', '2023-11-29 05:03:21'),
(218, 'rpshrikhande@git.edu', NULL, '$2y$10$MbjHWcaW8toG5gw1kHum1uaWVUTgnKQa2LANnLvl8VfqCnThsY1Qy', 'non-teaching', 'Active', NULL, '2023-11-29 05:04:23', '2023-11-29 05:04:23'),
(219, 'pdjoshi@git.edu', NULL, '$2y$10$UIwHzUmEbhkn4KQRwZ7GVueUE5cCXGoX2DKNwz5bRMXLrFhyCtWvO', 'teaching', 'Active', NULL, '2023-11-29 05:05:13', '2023-11-29 05:05:13'),
(220, 'rsdeshpande@git.edu', NULL, '$2y$10$CPiQHoE5fXy9tUp5AWvfuuPAtBwnZH272P4ESbyySCis9cCtN1ehe', 'non-teaching', 'Active', NULL, '2023-11-29 05:05:30', '2023-11-29 05:05:30'),
(221, 'rooparao@git.edu', NULL, '$2y$10$pCyXJrVhSbRaJG0/lirnte1eC0nTXenjXtWNMlVMeCmJMdxMQTB76', 'teaching', 'Active', NULL, '2023-11-29 05:07:02', '2023-11-29 05:07:02'),
(222, 'vvsimu@git.edu', NULL, '$2y$10$DdzVc4Zf0S.o7PL2S.0bC.4HQRcIjuwafXxuqBcBNedvuu5Z5eTmW', 'non-teaching', 'Active', NULL, '2023-11-29 05:09:23', '2023-11-29 05:09:23'),
(223, 'vkaithal@git.edu', NULL, '$2y$10$PYSgCkzBStBbIfGXQM68Oe/L6kC1KZrbxjhgPn3mElr9.cYmgH9v2', 'teaching', 'Active', NULL, '2023-11-29 05:09:43', '2023-11-29 05:09:43'),
(224, 'askarekar@git.edu', NULL, '$2y$10$Zoptt3cC7ICuR0qbE98SLelmHniMS5GvWnpZpluJgNFGO.9gttywu', 'non-teaching', 'Active', NULL, '2023-11-29 05:11:08', '2023-11-29 05:11:08'),
(225, 'vgtiwary@git.edu', NULL, '$2y$10$/230CDd3.4DkA618TbpPGeYbVeMSSOL3FLIddtLL4ccvNTjND2.hu', 'teaching', 'Active', NULL, '2023-11-29 05:11:52', '2023-11-29 05:11:52'),
(226, 'jyothibr@git.edu', NULL, '$2y$10$08rJpU.EaTFSQII5.2cvwO7k.6tika.lOPrL9fwy8sQF4WT6yjvqm', 'teaching', 'Active', NULL, '2023-11-29 05:15:58', '2023-11-29 05:15:58'),
(227, 'spavadhani@git.edu', NULL, '$2y$10$.5cWgMAQz9NeTc/oLMYZhubuS/Hp2NWxHermqL3KzIVFpZayM6Ay.', 'teaching', 'Active', NULL, '2023-11-29 05:16:02', '2023-11-29 05:16:02'),
(228, 'pbparamaj@git.edu', NULL, '$2y$10$RYZvUDb0shyUmjAo/59.relbUwhgyqyd36Zbamp1IZlOMSf5VKxnG', 'non-teaching', 'Active', NULL, '2023-11-29 05:17:30', '2023-11-29 05:17:30'),
(229, 'nagrajpattar@git.edu', NULL, '$2y$10$sXQAkvRJbmSd1jh1eSlt6uYHHf22afFfmKg9T8PAxPFqrkLXBJv9m', 'non-teaching', 'Active', NULL, '2023-11-29 05:19:40', '2023-11-29 05:19:40'),
(230, 'phkulkarni@git.edu', NULL, '$2y$10$GhhNqhgsPOIA7uSFDY4aLeHWMG.2lui7/tD90k0WBl3DlYZGO1Dte', 'teaching', 'Active', NULL, '2023-11-29 05:19:42', '2023-11-29 05:19:42'),
(231, 'aadev@git.edu', NULL, '$2y$10$EOhz2sYHa2XiRj1b6rogjOobhJd2oRns9VpptFcpihsYtlH1ZxT5C', 'non-teaching', 'Active', NULL, '2023-11-29 05:21:52', '2023-11-29 05:21:52'),
(232, 'vvdeshpande1@git.edu', NULL, '$2y$10$11UgqqU02WwF296ujawSQOyJqDGH/DRXbq5I7auBsW8BVkfCOMnFa', 'teaching', 'Active', NULL, '2023-11-29 05:25:00', '2023-11-29 05:25:00'),
(233, 'ssmahajan@git.edu', NULL, '$2y$10$oGc/XSsHtcqwkJotepwXEerOrFt2hzPT1WwZDa5KtKSNTZlSqyrta', 'non-teaching', 'Active', NULL, '2023-11-29 05:25:32', '2023-11-29 05:25:32'),
(234, 'gpkadam@git.edu', NULL, '$2y$10$LuTyZrBCOuayLoknGpBrtOqGNfjR8JujjUkZI9EBeMTJfAiKqXZuS', 'teaching', 'Active', NULL, '2023-11-29 05:27:55', '2023-11-29 05:27:55'),
(235, 'ppmirji@git.edu', NULL, '$2y$10$lcXvNrDkyieq3r4InO2WJ.YIZm374v44NHp.AsGGhwbAlA6yFKVB.', 'teaching', 'Active', NULL, '2023-11-29 05:29:28', '2023-11-29 05:29:28'),
(236, 'agkulkarni1@git.edu', NULL, '$2y$10$OMqOfQCMAOAYKLEUk6F41.dlx/dBMNqDFVTMpaS2elG4UOVYIWGnu', 'non-teaching', 'Active', NULL, '2023-11-29 05:29:49', '2023-11-29 05:29:49'),
(237, 'sksawant@git.edu', NULL, '$2y$10$Zc2cCAL63ibTKOvss9wxZOkZz4Wt0Gqe4q2GzEt/bwhMSGVaX8wqK', 'non-teaching', 'Active', NULL, '2023-11-29 05:30:18', '2023-11-29 05:30:18'),
(238, 'rkshinagi@git.edu', NULL, '$2y$10$MpMLEVSJHC0RRfpvOBQ42OdFjU0uN.tji7AB6A9UD6D0pHe26DmXC', 'non-teaching', 'Active', NULL, '2023-11-29 05:34:00', '2023-11-29 05:34:00'),
(239, 'salagwadi@git.edu', NULL, '$2y$10$ZK.vE5yTtV9FcxuVZaHZDue9qS46K5lirAEyb8TfkmrFNEcId6ghy', 'non-teaching', 'Active', NULL, '2023-11-29 05:35:53', '2023-11-29 05:35:53'),
(240, 'manjunathm@git.edu', NULL, '$2y$10$H3u2NDTcCe9J4N.HMhajb.mgqAL3iXmEEbzRFgf6y5Yst/s9/Nt.m', 'teaching', 'Active', NULL, '2023-11-29 05:36:22', '2023-11-29 05:36:22'),
(241, 'rkneraserkar@git.edu', NULL, '$2y$10$rgH0UYYO.ZJXQyI0dCAWK.QtIl123clZW.5P1V9cCWD37bs1ANscS', 'non-teaching', 'Active', NULL, '2023-11-29 05:39:19', '2023-11-29 05:39:19'),
(242, 'sdkulkarni@git.edu', NULL, '$2y$10$0G2Ab2Glu4hHngdkHjjyQOevsAghUeRoBwcdr0VnorEqNua4gt.zK', 'teaching', 'Active', NULL, '2023-11-29 05:39:29', '2023-11-29 05:39:29'),
(243, 'mmsattigeri@git.edu', NULL, '$2y$10$PyMRy9NmdYpN.gdUZci46eWF7rpg9Jj5RTcdHDh3CEp.L3VC8BD6a', 'teaching', 'Active', NULL, '2023-11-29 05:40:50', '2023-11-29 05:40:50'),
(244, 'pblakkundi@git.edu', NULL, '$2y$10$oMAgVpUDNSraDXzMmdTEj.s8dxc1ZcXTIC0OVbztg86yyC.uBLpt6', 'non-teaching', 'Active', NULL, '2023-11-29 05:41:26', '2023-11-29 05:41:26'),
(245, 'rrpatil@git.edu', NULL, '$2y$10$M9gkQUwfJZkchj38YeV.2.UsSnl7eEeOAlvJbfzrakP6Axgw6fCGK', 'non-teaching', 'Active', NULL, '2023-11-29 05:43:11', '2023-11-29 05:43:11'),
(246, 'kapatil@git.edu', NULL, '$2y$10$TB9hq.lAPS31e6UCTu4O2.sEec0HV97SUsqfdxPzRVuquJH1uECzu', 'non-teaching', 'Active', NULL, '2023-11-29 05:48:17', '2023-11-29 05:48:17'),
(247, 'sskulkarni@git.edu', NULL, '$2y$10$.YupE.fTA/wlKMPtZAAJEO4OJ0pQIG.yObPkoIEmnayJtPPACHYIq', 'teaching', 'Active', NULL, '2023-11-29 05:49:11', '2023-11-29 05:49:11'),
(248, 'mrmokashi@git.edu', NULL, '$2y$10$gH6MYdk/Gd5CDm9nVwtvDuKjDrrCfyLFDiluleyAL31BczqL7xnAO', 'non-teaching', 'Active', NULL, '2023-11-29 05:49:26', '2023-11-29 05:49:26'),
(249, 'dmbadiger@git.edu', NULL, '$2y$10$hQIkOlXAWyOTJT.28MpY7OjmS/pXE45xxTACkbXxS2cwU8prZxPbm', 'non-teaching', 'Active', NULL, '2023-11-29 05:52:33', '2023-11-29 05:52:33'),
(250, 'avghadashi@git.edu', NULL, '$2y$10$IOSkStp4pYGxRZV8Xyw8v.6KBwhPKmtis2VRGFI1NGTOH20DWfVyG', 'non-teaching', 'Active', NULL, '2023-11-29 05:53:48', '2023-11-29 05:53:48'),
(251, 'harishhk@git.edu', NULL, '$2y$10$HVzbSDY.N8KuFF5uXnvh4Ohz.wVUUAz4CGgzJRASSXwBqX11i3JES', 'teaching', 'Active', NULL, '2023-11-29 05:54:48', '2023-11-29 05:54:48'),
(252, 'pdkulkarni@git.edu', NULL, '$2y$10$aW.ntx7ps5Rd3xmnkVGEFeV.Gfn8MhZbOmymmnvQe0BCSZoU.9ryG', 'teaching', 'Active', NULL, '2023-11-29 05:56:33', '2023-11-29 05:56:33'),
(253, 'skangralkar@git.edu', NULL, '$2y$10$egypTd/wnXDI/iKPblVSceI7OIj2qN8cN7dnqnJOsv8sg8/VwfgI2', 'non-teaching', 'Active', NULL, '2023-11-29 05:58:06', '2023-11-29 05:58:06'),
(254, 'skumbhar@git.edu', NULL, '$2y$10$qFVvdequZqvOnM4KKb.VJOiRPcAqEdz.14xJSRjO4x3dGaqkUOW1G', 'non-teaching', 'Active', NULL, '2023-11-29 05:58:18', '2023-11-29 05:58:18'),
(255, 'padmad@git.edu', NULL, '$2y$10$SzZ87aEYoQWaANfpt86UiO8iBrVKypAH7HYVXokuagM4zGVjW/fl.', 'teaching', 'Active', NULL, '2023-11-29 06:02:21', '2023-11-29 06:02:21'),
(256, 'rjkadkol@git.edu', NULL, '$2y$10$qvUOWXLC75Aw.0qmSccRr.lWzCP781lN/IDlHvDb.ZsNGEv4XJvoK', 'teaching', 'Active', NULL, '2023-11-29 06:06:06', '2023-11-29 06:06:06'),
(257, 'psupparamani@git.edu', NULL, '$2y$10$Rr4sLW5aYzvo9rgqvnJRbOCQ1baR8RF1Nk5XucYcPmfPojs28M.V6', 'teaching', 'Active', NULL, '2023-11-29 06:11:09', '2023-11-29 06:11:09'),
(258, 'mathadks@git.edu', NULL, '$2y$10$bT9iycs6ru6gbF5sz4/Ib..K/Z9nR1VM5TxXrEQKJ8q2/GMiLPHq2', 'teaching', 'Active', NULL, '2023-11-29 06:15:23', '2023-11-29 06:15:23'),
(259, 'sudhirmadi@git.edu', NULL, '$2y$10$jvxFpzv0wdgzhfQLkNaIaObcUPB2XrF.20vbkjH0wYVEePIiMi4qi', 'teaching', 'Active', NULL, '2023-11-29 06:18:36', '2023-11-29 06:18:36'),
(260, 'vsrajpurohit@git.edu', NULL, '$2y$10$hjvF5x3Vj1FwEohjtAqtQeQh1crnXVkJDXziu36s9a1BYN7MSlH2K', 'teaching', 'Active', NULL, '2023-11-29 06:19:36', '2023-11-29 06:19:36'),
(261, 'nkarekar@git.edu', NULL, '$2y$10$HQfFhdKTZXeJYRDvJrNZkeQP24B/m7gzS3usZnRB/4PimErZFflTa', 'teaching', 'Active', NULL, '2023-11-29 06:21:36', '2023-11-29 06:21:36'),
(262, 'sbdeshpande@git.edu', NULL, '$2y$10$tf.F4PxfTt.BqI9mij8FUucjjWa8YXRXyrIKPuc8Mf.c6tyMQlX32', 'teaching', 'Active', NULL, '2023-11-29 06:24:23', '2023-11-29 06:24:23'),
(263, 'sgsanu@git.edu', NULL, '$2y$10$h/HL1Y4qRO0iCfH0.e/mTOsH7ammsQ126OWTHvyZlE/NgBFRKkYpS', 'teaching', 'Active', NULL, '2023-11-29 06:29:09', '2023-11-29 06:29:09'),
(264, 'mmmath@git.edu', NULL, '$2y$10$soaYpi9Gcv1mibSy./wFVOhH8mUzNqPwcI24U0FvGoT2cC9QHlS5e', 'teaching', 'Active', NULL, '2023-11-29 06:30:24', '2023-11-29 06:30:24'),
(265, '@git.edu', NULL, '$2y$10$edTy4QISStoyU5j2ADj1Y.TadooVPzb9Qh.upoLYD4375hB0BwvHG', 'teaching', 'Active', NULL, '2023-11-29 06:34:34', '2023-11-29 06:34:34'),
(266, 'rdkavilkar@git.edu', NULL, '$2y$10$4xfAMDiIRH1O.QIOOn99henfToCD2F6EMVdBBYZqvz0F7KIuUbPhW', 'teaching', 'Active', NULL, '2023-11-30 23:30:41', '2023-11-30 23:30:41'),
(267, 'kirankt@git.edu', NULL, '$2y$10$1etjVxJQjvWAwctVzSbZueZXUGMJE/1F59s4hYGq2bp4ZFHFVIC6q', 'teaching', 'Active', NULL, '2023-11-30 23:31:28', '2023-11-30 23:31:28'),
(268, 'nrtadkodkar@git.edu', NULL, '$2y$10$ErvWip1aEKk5GjG2xPtO0O2pIsdi0UCcXBefERAG1nwvtPyYZBbbu', 'teaching', 'Active', NULL, '2023-11-30 23:34:26', '2023-11-30 23:34:26'),
(269, 'sannakkisanjeev@git.edu', NULL, '$2y$10$MxYR56TL6Qrq3GWdWkCIN.XHF/iQzqFgsy6NgcZ5AcZTTHddhJKkO', 'teaching', 'Active', NULL, '2023-11-30 23:35:51', '2023-11-30 23:35:51'),
(270, 'sbalekundri@git.edu', NULL, '$2y$10$kO1L0enlGqLxG.4hkR2zXODAi/bJwH.NzIlHGtlQ11atxIzTF0nya', 'non-teaching', 'Active', NULL, '2023-11-30 23:37:15', '2023-11-30 23:37:15'),
(271, 'rsdharmayat@git.edu', NULL, '$2y$10$X6dz2Hc/wK1Afaz3Ev3pOuHJSbRcNbbSP2JEI5GRlr4RhdWqSXDR2', 'teaching', 'Active', NULL, '2023-11-30 23:38:19', '2023-11-30 23:38:19'),
(272, 'sskanbargi@git.edu', NULL, '$2y$10$gF/x3jfVQ53mYXADwakgbe.2QVeCN4DnL6hfN6JMwhOxYYSC135Ka', 'non-teaching', 'Active', NULL, '2023-11-30 23:38:39', '2023-11-30 23:38:39'),
(273, 'dakulkarni@git.edu', NULL, '$2y$10$Hpo4JDgwRTbIBPuPZl1rUOwgIGNZcJEIm/jiEoQiifnrSZR67mchG', 'teaching', 'Active', NULL, '2023-11-30 23:40:27', '2023-11-30 23:40:27'),
(274, 'smpujeri@git.edu', NULL, '$2y$10$TB8DgvLpu1NR5VtVJLMOVepAu7HWZ9WN57Y6Ur6TmgJ2QrTz14EHu', 'non-teaching', 'Active', NULL, '2023-11-30 23:42:33', '2023-11-30 23:42:33'),
(275, 'rdbastwadkar@git.edu', NULL, '$2y$10$OqjhJNiAMewj4Ua3mm8RNOxPjMnot8rSQ.2BYyWjzzEed5Pd3mtu6', 'non-teaching', 'Active', NULL, '2023-11-30 23:43:16', '2023-11-30 23:43:16'),
(276, 'avprasadi@git.edu', NULL, '$2y$10$JjiAwlKseZ6fJ1wCSNuNb.NxPOYXJkEK5TpcCwGzZtSXf7Z9wFmdu', 'teaching', 'Active', NULL, '2023-11-30 23:45:07', '2023-11-30 23:45:07'),
(277, 'smore@git.edu', NULL, '$2y$10$iU/JibleFGxge.HwUZD47OTTf9b0Z6eHuCxPyi63OaJ1sI6fbiEoe', 'non-teaching', 'Active', NULL, '2023-11-30 23:47:20', '2023-11-30 23:47:20'),
(278, 'kpsambrekar@git.edu', NULL, '$2y$10$vH4XP/Zlo30z4z0Ot.jh5e0Zpo64JFsmjoK1.YG3f.PMsesTLtQ6S', 'teaching', 'Active', NULL, '2023-11-30 23:47:31', '2023-11-30 23:47:31'),
(279, 'avzende@git.edu', NULL, '$2y$10$6Xm6RRcXM2sQTLuIjRHApeufw3cyQHBj4XP2PBYPACJLSaJb/7tQa', 'non-teaching', 'Active', NULL, '2023-11-30 23:50:23', '2023-11-30 23:50:23'),
(280, 'vadeshpande@git.edu', NULL, '$2y$10$RVj8qRCfglzq8CxFSowDgeKPn4huxIwNf7IyCto5O.640VJvA7nYq', 'non-teaching', 'Active', NULL, '2023-11-30 23:52:44', '2023-11-30 23:52:44'),
(281, 'umesh_k@git.edu', NULL, '$2y$10$5EdY51IhetTK2/t5V66XJOv/DNJRPlu.aaVtgi7kGYfY6aDW/eDW6', 'teaching', 'Active', NULL, '2023-11-30 23:53:40', '2023-11-30 23:53:40'),
(282, 'mgkangralkar@git.edu', NULL, '$2y$10$ianWGnFEEI7FKeDDV5Im2.RZJhDVeFHlBCjPTAvQjjcMlgWoVu6ve', 'non-teaching', 'Active', NULL, '2023-11-30 23:55:43', '2023-11-30 23:55:43'),
(283, 'smutkekar@git.edu', NULL, '$2y$10$oTsLgucTtD7ktoegOoT5xuKp7Fd25V1CR3GhwgsmKfdI8YOOIUWHC', 'teaching', 'Active', NULL, '2023-11-30 23:57:42', '2023-11-30 23:57:42'),
(284, 'uabirje@git.edu', NULL, '$2y$10$6ql38SfIcrCuN41bwLBwPe8Enc276j8oGFrWDL9DCeZXJfdF0GKMO', 'non-teaching', 'Active', NULL, '2023-11-30 23:58:56', '2023-11-30 23:58:56'),
(285, 'gmsambrekar@git.edu', NULL, '$2y$10$yhIEWLWNrRyGgAewZ99bbez8kh6f5OLXUJFFCFuBEVVP0TTaw/Q4O', 'teaching', 'Active', NULL, '2023-12-01 00:01:27', '2023-12-01 00:01:27'),
(286, 'jyothipatil@git.edu', NULL, '$2y$10$PU.P0i.g54whEnqdFk9JauaaeGE/JyOvCk64O0rN584iFJrRVI.xO', 'teaching', 'Active', NULL, '2023-12-01 00:06:30', '2023-12-01 00:06:30'),
(287, 'gskhadabadi@git.edu', NULL, '$2y$10$skYBa5UIXf0txTQSRuOp6.fOfDPUbBeL21rkCD9VTs/og4sLV0ATi', 'teaching', 'Active', NULL, '2023-12-01 00:06:34', '2023-12-01 00:06:34'),
(288, 'upendra@git.edu', NULL, '$2y$10$lwFzn7ynCOUikC5qe12gZuB0GbtkDZvof0eP7OegaRSqCzj0NANMW', 'non-teaching', 'Active', NULL, '2023-12-01 00:11:57', '2023-12-01 00:11:57'),
(289, 'pnnavelkar@git.edu', NULL, '$2y$10$GjEKsQFWSI1fQFwqHI7P7eLj8azqGM5Haeno8kbmwwyxvVUJfo3iO', 'teaching', 'Active', NULL, '2023-12-01 00:12:12', '2023-12-01 00:12:12'),
(290, 'argargatti@git.edu', NULL, '$2y$10$R6AADn8vkL.yPkocq0tbDOAfAkSpx6UAdtXrN1TZgAYDZxW/YwPIC', 'teaching', 'Active', NULL, '2023-12-01 00:17:13', '2023-12-01 00:17:13'),
(291, 'sjkalkhambkar@git.edu', NULL, '$2y$10$e/2wTWrDbYIcWuSA.NN.H.HumFULTInHxEnRGn85X5SuaUnqn5oH6', 'non-teaching', 'Active', NULL, '2023-12-01 00:17:23', '2023-12-01 00:17:23'),
(292, 'cgjanagonda@git.edu', NULL, '$2y$10$TXDH.Lz2uqLfXIUSwgmh9eFw2p8mAyGCkWZ253GW9Xao2F/nGUOmm', 'non-teaching', 'Active', NULL, '2023-12-01 00:17:42', '2023-12-01 00:17:42'),
(293, 'asshahapurkar@git.edu', NULL, '$2y$10$ujWUKEuYD9cCoLIB4oYQvuNdf/9RBBZfttFhStE/UBKQbz1VNWtBK', 'teaching', 'Active', NULL, '2023-12-01 00:18:16', '2023-12-01 00:18:16'),
(294, 'vvatti@git.edu', NULL, '$2y$10$5yDWnNkTRVHyCn5iy4GpTOO6X1fJE9R9CfSzJJlU6HnYJR0QUhbzW', 'non-teaching', 'Active', NULL, '2023-12-01 00:21:45', '2023-12-01 00:21:45'),
(295, 'pgdesai@git.edu', NULL, '$2y$10$bL9PmyxwiM2WFEWCL.oROe2nUibMUdZ3O9/Fbm.5WiX9IMC9JF6Wu', 'non-teaching', 'Active', NULL, '2023-12-01 00:23:45', '2023-12-01 00:23:45'),
(296, 'sskhemlapure@git.edu', NULL, '$2y$10$/OjcRynJ2AIfB9OE/hY7Se0/lCCAXSNOhtl2Wdh5OoPMNTh3loXtu', 'teaching', 'Active', NULL, '2023-12-01 00:24:36', '2023-12-01 00:24:36'),
(297, 'mvkulkarni1@git.edu', NULL, '$2y$10$st3RUi9d9NUORh0mauDEHOKZKwtJXQjetZEHI9xkhDxGIQ9uDVHCi', 'non-teaching', 'Active', NULL, '2023-12-01 00:26:38', '2023-12-01 00:26:38'),
(298, 'ramedar@git.edu', NULL, '$2y$10$P8DabK9NNeYaq1.NspPKuOS0bY20BvgCspEkbjJz6ngz9kOoywVnG', 'teaching', 'Active', NULL, '2023-12-01 00:28:14', '2023-12-01 00:28:14'),
(299, 'brmaraganache@git.edu', NULL, '$2y$10$xvVOFFiiFuwrKmvX.9qbvevtQt2ZUYcJ1O3aNuQYmBBG3rr3WtTcm', 'non-teaching', 'Active', NULL, '2023-12-01 00:30:40', '2023-12-01 00:30:40'),
(300, 'mdbadiger@git.edu', NULL, '$2y$10$B7e1sitocQFiOoe95uKI8e/rQoUuuiBSBdTAVJB0o.SkB7j5MJAGq', 'non-teaching', 'Active', NULL, '2023-12-01 00:32:11', '2023-12-01 00:32:11'),
(301, 'ptbiradar@git.edu', NULL, '$2y$10$dABT7NlPIP7KALX/XqFAtuSvMTVhLL1.0C6R/tQQbAZalnGbA/1pq', 'teaching', 'Active', NULL, '2023-12-01 00:33:24', '2023-12-01 00:33:24'),
(302, 'manjular@git.edu', NULL, '$2y$10$LzeS4GAeGog5fhpjDdTY6OkSaHNfMwy5CYmLDJddA3UiJPC.qpbhy', 'teaching', 'Active', NULL, '2023-12-01 00:33:39', '2023-12-01 00:33:39'),
(303, 'nvbhosale@git.edu', NULL, '$2y$10$YweAYLQPloK6A3nLIGhN0en9RIhrPCvHaaZLoWDmG4U1YTvtfKYVC', 'non-teaching', 'Active', NULL, '2023-12-01 00:35:38', '2023-12-01 00:35:38'),
(304, 'vngundap@git.edu', NULL, '$2y$10$LknQsN6S0wqu6VXJ2b1tuuVVQ86aU/SYcYP5HqDkoQA3p5Vh6SwO6', 'non-teaching', 'Active', NULL, '2023-12-01 00:37:00', '2023-12-01 00:37:00'),
(305, 'pkrajput@git.edu', NULL, '$2y$10$tI/X/qAs/xbipDGaqy/YWOhhhp9KPVyY8QtnbKIFjtMCzRjccKw.m', 'teaching', 'Active', NULL, '2023-12-01 00:37:23', '2023-12-01 00:37:23'),
(306, 'khanabaratti@git.edu', NULL, '$2y$10$IGEjzoEOvVsZf/14zCOLSursjdlbPtbP7hEr0GhgvMLF7cy1FAOiG', 'teaching', 'Active', NULL, '2023-12-01 00:37:41', '2023-12-01 00:37:41'),
(307, 'spdesai@git.edu', NULL, '$2y$10$0BHAg1fxv7YzAFOyiMgipeA1CQ.5ZxGPFrFXtpTDWhqe3OimbJSl2', 'non-teaching', 'Active', NULL, '2023-12-01 00:39:34', '2023-12-01 00:39:34'),
(308, 'pmpujar@git.edu', NULL, '$2y$10$ruxj3xN0NAvQibL3WQGcxeXjjTPUXfHHM/s4iBSpXCqtj7fAQHK9.', 'teaching', 'Active', NULL, '2023-12-01 00:41:08', '2023-12-01 00:41:08'),
(309, 'akpatil@git.edu', NULL, '$2y$10$xLl0SkqJWrwqDmkqyd1qVeO1y8lXECTEEUZvQklEzQgJm95ClhhmK', 'teaching', 'Active', NULL, '2023-12-01 00:41:13', '2023-12-01 00:41:13'),
(310, 'asmutalikdesai@git.edu', NULL, '$2y$10$b59mhRzi6grag8sOzYVy3u1HIqJQosITOxsZOXdKBC1/b1YWW0tbe', 'non-teaching', 'Active', NULL, '2023-12-01 00:44:34', '2023-12-01 00:44:34'),
(311, 'vinayakpatil@git.edu', NULL, '$2y$10$mm/rYVEBVc2jVkPPO96UAeuFNACQlJC7Ee/PjVtFCnixTjjA2NXIC', 'teaching', 'Active', NULL, '2023-12-01 00:45:40', '2023-12-01 00:45:40'),
(312, 'pranesh@git.edu', NULL, '$2y$10$pcbwFH7U6/0bj1u32qK/SO8w.jlL9AmB8oF8LmnxLj.6KjvQGD7V.', 'non-teaching', 'Active', NULL, '2023-12-01 00:45:41', '2023-12-01 00:45:41'),
(313, 'pkpatil@git.edu', NULL, '$2y$10$f6iR.G3xJ9OimO2qNU8cmOu46N.RjZB0MfmL5bVAhl8Js5IQR17Ca', 'teaching', 'Active', NULL, '2023-12-01 00:46:19', '2023-12-01 00:46:19'),
(314, 'sskulkarni1@git.edu', NULL, '$2y$10$WnuSGUrDN7/NmAwle9yLOOENhgd2l7kWLI..ZAL1MTqf3PALxJ.BO', 'teaching', 'Active', NULL, '2023-12-01 00:51:01', '2023-12-01 00:51:01'),
(315, 'mbhonnyal@git.edu', NULL, '$2y$10$8EaX1oXNNtHJCWcaXHTT.OgwBGJsd9FJ5Em57WeG.BktAanLyxypK', 'non-teaching', 'Active', NULL, '2023-12-01 00:51:32', '2023-12-01 00:51:32'),
(316, 'sqnoorani@git.edu', NULL, '$2y$10$AmyMJAdHzRDpnmCwf28dM.EFwgQiH7NdyDdLyIf3bUXeRS66q9xpm', 'teaching', 'Active', NULL, '2023-12-01 00:53:37', '2023-12-01 00:53:37'),
(317, 'smpoleshi@git.edu', NULL, '$2y$10$XOmAK/tZndA.CMgbJkNyK.tzYw5avEtKQNdrmMtt16c323wg0s6Q2', 'non-teaching', 'Active', NULL, '2023-12-01 00:55:49', '2023-12-01 00:55:49'),
(318, 'sshukkeri@git.edu', NULL, '$2y$10$9drTXCH5UOXQ8.GT7BfyOO.dJK5oVQQ2WMRkFFnHNq4/lzrhEjjra', 'teaching', 'Active', NULL, '2023-12-01 00:55:58', '2023-12-01 00:55:58'),
(319, 'msdesai@git.edu', NULL, '$2y$10$.IlTDdPmV/VeQje3AAI45e3vSx9QIhg73.d3SKztc0v17ySMH7GSC', 'teaching', 'Active', NULL, '2023-12-01 00:58:47', '2023-12-01 00:58:47');
INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(320, 'pnkunchur@git.edu', NULL, '$2y$10$z.a2O3Giw7tVNhWVqihzk.yLKQLMptCpmO2t831Q0leCsiLQ3Qsyy', 'teaching', 'Active', NULL, '2023-12-01 00:59:23', '2023-12-01 00:59:23'),
(321, 'ssjadhav@git.edu', NULL, '$2y$10$y5p6My2gm1GgCoYbmVBhMO8ga0StMS0H7hkyRwQWd70OI2dRh3GbW', 'non-teaching', 'Active', NULL, '2023-12-01 00:59:35', '2023-12-01 00:59:35'),
(322, 'vsashtekar@git.edu', NULL, '$2y$10$Tdkr92B5kebIDFhl2rPD4.2MoJDPwFHC3a1zT.2g1aGit9rUy/sDi', 'non-teaching', 'Active', NULL, '2023-12-01 01:02:18', '2023-12-01 01:02:18'),
(323, 'daraganji@git.edu', NULL, '$2y$10$icGsNr3VUIlM9jLHSXCgIuQqxwFkp07.aXO3x2fQNOctu9EbEj1g6', 'non-teaching', 'Active', NULL, '2023-12-01 01:03:20', '2023-12-01 01:03:20'),
(324, 'rspatil@git.edu', NULL, '$2y$10$ZitCTyUekqEv5p9O0gxOo.WA.NQfX8.u5SZf.Q.Swl8Dw21NPpAWK', 'teaching', 'Active', NULL, '2023-12-01 01:03:36', '2023-12-01 01:03:36'),
(325, 'mgjoshi@git.edu', NULL, '$2y$10$Bd/ENepziX22ZBQH9zfE4uC4f9gq9faAUJcEdlseksgmrZGsOMHzy', 'non-teaching', 'Active', NULL, '2023-12-01 01:06:05', '2023-12-01 01:06:05'),
(326, 'lvjoshi@git.edu', NULL, '$2y$10$4IHKNVIxJ1nLJcClIF5d4ukZF0sg/fiMHvwusN0ehanw3mgNE2Vd.', 'non-teaching', 'Active', NULL, '2023-12-01 01:07:39', '2023-12-01 01:07:39'),
(327, 'rmpatil@git.edu', NULL, '$2y$10$yttBMxnGnm43Zc6.TX4IzeKo/.gERnbMFuRGVGWnbfjreZYjcyS3u', 'non-teaching', 'Active', NULL, '2023-12-01 01:10:35', '2023-12-01 01:10:35'),
(328, 'stkulkarni@git.edu', NULL, '$2y$10$qRcI1PAHvZVYz6gREvk7ouBD6SJ84BRhEmACgpdcPeZmbAGr41iBe', 'non-teaching', 'Active', NULL, '2023-12-01 01:12:24', '2023-12-01 01:12:24'),
(329, 'siddharthpatil@git.edu', NULL, '$2y$10$iut19kvh4sHRCh8aab6JiOiktUVot/irsaJJUCCYanxdL1es8k9Pq', 'teaching', 'Active', NULL, '2023-12-01 01:13:41', '2023-12-01 01:13:41'),
(330, 'mrkulkarni1@git.edu', NULL, '$2y$10$U3sVMne0pTBWvWqKpdJMk.yDYLQ7Ixwy.CDAbuvMXgz14f.K7r8ka', 'non-teaching', 'Active', NULL, '2023-12-01 01:14:48', '2023-12-01 01:14:48'),
(331, 'pvtergundi@git.edu', NULL, '$2y$10$86LBS.noe9zaigF36NKFsuRuIINqfdfFfYk91L5kyIchnmOrnw6wm', 'teaching', 'Active', NULL, '2023-12-01 01:14:50', '2023-12-01 01:14:50'),
(332, 'mspalankar@git.edu', NULL, '$2y$10$PLOKwwuT/Bvqddwn7Z13MO.62UK.ossq57w54sacA1zYJe3w8fZeq', 'non-teaching', 'Active', NULL, '2023-12-01 01:17:16', '2023-12-01 01:17:16'),
(333, 'grdeshpande@git.edu', NULL, '$2y$10$8LOtKx0Zx4DjhptPHKPEcuHTe2P6vUyhycOIZyCGSR00LZAi487Eq', 'teaching', 'Active', NULL, '2023-12-01 01:19:05', '2023-12-01 01:19:05'),
(334, 'aadhamnekar@git.edu', NULL, '$2y$10$V.mzdNXFziqDv.Bo6WeclustefjpcVXwZW.M4OGf/Rxu9SMvaDyc2', 'non-teaching', 'Active', NULL, '2023-12-01 01:20:25', '2023-12-01 01:20:25'),
(335, 'vcgurav@git.edu', NULL, '$2y$10$3859hjxg9aZo0SGVmeFZquPHvqG.ghmoPEa0FP9zRRd3vGU.GdbrG', 'teaching', 'Active', NULL, '2023-12-01 01:21:00', '2023-12-01 01:21:00'),
(336, 'pyniranjan@git.edu', NULL, '$2y$10$E3lOkxz.to.vKGpiForg5OqeUqZOkHRjqDo.d1pyeQaHBi2ntduhy', 'teaching', 'Active', NULL, '2023-12-01 01:23:06', '2023-12-01 01:23:06'),
(337, 'snmajati@git.edu', NULL, '$2y$10$MVAxwk32VlqIcVoBwbZfQOAX0FLaT2F0y5lIHj7HedYvzULTen.BO', 'non-teaching', 'Active', NULL, '2023-12-01 01:24:01', '2023-12-01 01:24:01'),
(338, 'bahudli@git.edu', NULL, '$2y$10$wo2j9WfoVwSXiWN5bh50BuUOitKAKZq4mnXrlvKeVuv1ZGHtsfXhm', 'non-teaching', 'Active', NULL, '2023-12-01 01:24:28', '2023-12-01 01:24:28'),
(339, 'ppkulkarni@git.edu', NULL, '$2y$10$7TFmgYzBe.YRdUx4vYbGfO76jL8NHcMZw3BOhxRI8s0cZmHmyD8VC', 'teaching', 'Active', NULL, '2023-12-01 01:25:53', '2023-12-01 01:25:53'),
(340, 'shayatti@git.edu', NULL, '$2y$10$AX1i2uHrLhgzl/IZnOm4kOemvhBSuD9UNGlHrOQ627xphZQNFMs2O', 'teaching', 'Active', NULL, '2023-12-01 01:29:43', '2023-12-01 01:29:43'),
(341, 'mmehatar@git.edu', NULL, '$2y$10$QHzvDeUoWX6cjvdTYhNbweQs38HECc0b8KeDWHjBp0Mg.qF9BS7gq', 'non-teaching', 'Active', NULL, '2023-12-01 01:31:34', '2023-12-01 01:31:34'),
(342, 'mssapre@git.edu', NULL, '$2y$10$Mqy9E5bf2tlyRRIABgVv7OY6WhFfq0X4AmPLtXRIFGgx3w9ubTHaS', 'teaching', 'Active', NULL, '2023-12-01 01:31:48', '2023-12-01 01:31:48'),
(343, 'smkori@git.edu', NULL, '$2y$10$4.XLRltKCSBZBqheULGl.eFAzerb3TKIXy5DNandHm3xkST3lBg2m', 'teaching', 'Active', NULL, '2023-12-01 01:33:39', '2023-12-01 01:33:39'),
(344, 'pyzende@git.edu', NULL, '$2y$10$7XC165s5zVLwQ1odU3w3teSp1Y8rvzCAmgRjG0dHfxq/WBCNJ7nJm', 'non-teaching', 'Active', NULL, '2023-12-01 01:33:51', '2023-12-01 01:33:51'),
(345, 'ssharitay@git.edu', NULL, '$2y$10$etRgtWa4X7lyKt6QqJaXke9dFTqeSrCoHTx42FRHxHP1Wu8EK7z0q', 'teaching', 'Active', NULL, '2023-12-01 01:36:51', '2023-12-01 01:36:51'),
(346, 'rukalkundri@git.edu', NULL, '$2y$10$lMFSMEIH959niNaH8WmL8OFtW5iFkiA7gc7xLd6z7M84jypvYVZQu', 'teaching', 'Active', NULL, '2023-12-01 01:40:28', '2023-12-01 01:40:28'),
(347, 'pskhot@git.edu', NULL, '$2y$10$MEf/O0dJDI1jq0jpCLXPnOdb2xSBGEXC7RveOSTR94C4tabqZEk6u', 'teaching', 'Active', NULL, '2023-12-01 01:41:16', '2023-12-01 01:41:16'),
(348, 'sbalikai@git.edu', NULL, '$2y$10$sMUwLZ6YmRTluYtzvnw5d.z3BFPdyt7fFb4Q8E0d6Lc/n/G57JYDi', 'non-teaching', 'Active', NULL, '2023-12-01 01:41:19', '2023-12-01 01:41:19'),
(349, 'sachinjadhav@git.edu', NULL, '$2y$10$kW6zp7MJ77dnaQp6UYd4iuHINT5CAJ06M0/QjUMhvAKEOKHfDDp6C', 'non-teaching', 'Active', NULL, '2023-12-01 01:43:35', '2023-12-01 01:43:35'),
(350, 'rrpai@git.edu', NULL, '$2y$10$NI87LGhePbbIWSYYH/gtouqQP0XUOC9tSFvnPl9lQqpVNigYZyC/i', 'teaching', 'Active', NULL, '2023-12-01 01:44:39', '2023-12-01 01:44:39'),
(351, 'rskulkarni@git.edu', NULL, '$2y$10$rJuGI9p9O8RnCKDhDiNUa.3V7BF1/ybq6GG.PdL5ZJKIwQ/gA6iCW', 'teaching', 'Active', NULL, '2023-12-01 01:45:05', '2023-12-01 01:45:05'),
(352, 'ndnerli@git.edu', NULL, '$2y$10$vC318EYiVX.R0udSr2VLVuDkhVDRKScgvF3lwxcwT0YGjHQlwQyM.', 'non-teaching', 'Active', NULL, '2023-12-01 01:47:25', '2023-12-01 01:47:25'),
(353, 'nmbastawadkar@git.edu', NULL, '$2y$10$JtWFoe6WIY8gX3iKz6ckYOUfgLr3ZpTZ81CZWC75QVJVnAG77GHvS', 'teaching', 'Active', NULL, '2023-12-01 01:48:26', '2023-12-01 01:48:26'),
(354, 'sskalyani@git.edu', NULL, '$2y$10$KneMrgkMI8loUAAfqolA8ObWajRdvoGBSMh0sqN8wLzoApN.nuhia', 'non-teaching', 'Active', NULL, '2023-12-01 01:48:41', '2023-12-01 01:48:41'),
(355, 'ryjadhav@git.edu', NULL, '$2y$10$j/gwI4rWiFgJ/oKIaz3JPuHdiY8cUrBm8w/mLgmXaPbcAC8ODOHem', 'teaching', 'Active', NULL, '2023-12-01 01:49:27', '2023-12-01 01:49:27'),
(356, 'gmahajan@git.edu', NULL, '$2y$10$Q6FnC5uaURdr58RDadnvHuHVC0YOTE0s3ztzR4I.LuJ1fg.L914cO', 'non-teaching', 'Active', NULL, '2023-12-01 01:52:06', '2023-12-01 01:52:06'),
(357, 'opvernekar@git.edu', NULL, '$2y$10$UYGIngXek5.G6KrUEChgP..91TqZYSp3x1knpb2nzSg0q8Mr65uYK', 'teaching', 'Active', NULL, '2023-12-01 01:52:12', '2023-12-01 01:52:12'),
(358, 'mamatakulkarni@git.edu', NULL, '$2y$10$yL/JNxzurVticCkWgIK7pe6tvGFNEfTExy3e8jCKknieuxsuwPczG', 'non-teaching', 'Active', NULL, '2023-12-01 01:54:59', '2023-12-01 01:54:59'),
(359, 'vjpandurangi@git.edu', NULL, '$2y$10$/2W65oe6qpaES3qb2Z5ZtOlb58CSTh.lx8o6N6C.070W4dP8B/.0C', 'teaching', 'Active', NULL, '2023-12-01 01:55:43', '2023-12-01 01:55:43'),
(360, 'avnelli@git.edu', NULL, '$2y$10$p0U1df1fki7tLpYVrQiKz.MkllMTJxxrIUnS4ojyVlYRycVvnu1Bq', 'teaching', 'Active', NULL, '2023-12-01 01:59:29', '2023-12-01 01:59:29'),
(361, 'pspatil@git.edu', NULL, '$2y$10$j5W86VFYZaHavK1GorgIvewxQA3Ek.1IR4BKDsB5wx45OxaCROi46', 'non-teaching', 'Active', NULL, '2023-12-01 02:00:23', '2023-12-01 02:00:23'),
(362, 'sskalyani1@git.edu', NULL, '$2y$10$YVhxtVEM3xvzP1/SG.6kZ.5PI30Oa6v4P3vPNAbvtNbczL.374fkG', 'non-teaching', 'Active', NULL, '2023-12-01 02:00:31', '2023-12-01 02:00:31'),
(363, 'jyamboji@git.edu', NULL, '$2y$10$4iYZBgPslJ9Vpbcn8cZAi.K7LGHeyIi6usR3SDxeio1H0VeTcRTZa', 'teaching', 'Active', NULL, '2023-12-01 02:04:18', '2023-12-01 02:04:18'),
(364, 'rvkhangaonkar@git.edu', NULL, '$2y$10$0Um3MF1TZwvvCp1w1IGC8uqncGor6RLtEnvfgsIvyWOeg9YMLwrFi', 'non-teaching', 'Active', NULL, '2023-12-01 02:04:35', '2023-12-01 02:04:35'),
(365, 'mamatakulkarni1@git.edu', NULL, '$2y$10$mZ/.wCezyHIrvOu7rXAGJu5rGRaXXKM/Yau3z3IAC/n0D8elyHjp6', 'non-teaching', 'Active', NULL, '2023-12-01 02:06:29', '2023-12-01 02:06:29'),
(366, 'rbbattur@git.edu', NULL, '$2y$10$9hvttWlpdGczsrMUvJbK/ebMAqrnfdsoy/p021D6AwzDTIQJIPdpO', 'teaching', 'Active', NULL, '2023-12-01 02:07:35', '2023-12-01 02:07:35'),
(367, 'mkrendale@git.edu', NULL, '$2y$10$UJQAktcymDtWM.kwt9JB4.9N2FgY32AcUX.d/27dvj0MzMX.AP5Gq', 'teaching', 'Active', NULL, '2023-12-01 02:08:50', '2023-12-01 02:08:50'),
(368, 'pKadam@git.edu', NULL, '$2y$10$gfggtHfu1.iWep4TAisoJuzi.YFaLslz19uI33dGLibL1hw1v8iOG', 'non-teaching', 'Active', NULL, '2023-12-01 02:08:58', '2023-12-01 02:08:58'),
(369, 'pspatil1@git.edu', NULL, '$2y$10$/TFhZFjU8nUK8yJRaLGOsOzmEFZKSmoRlmDtleqHZLLKnatiYahQO', 'non-teaching', 'Active', NULL, '2023-12-01 02:11:04', '2023-12-01 02:11:04'),
(370, 'amdeshpande@git.edu', NULL, '$2y$10$EHuJo/jhlUayvXXKA4GDIu41pl3X8lkOhw5h83rt7osPrMmE1Osce', 'teaching', 'Active', NULL, '2023-12-01 02:11:15', '2023-12-01 02:11:15'),
(371, 'sskphy@git.edu', NULL, '$2y$10$MCucIYTm0rq1J5.kJuGxG.cJOQwQ0zC69bQi.x.oKw2/ZmAweRCQq', 'teaching', 'Active', NULL, '2023-12-01 02:12:51', '2023-12-01 02:12:51'),
(372, 'knaik@git.edu', NULL, '$2y$10$j3/51PlbkMyJqRq/Jeaw2.By2Svsh6jdG33PFjVci.nwHkZ9e4EOO', 'non-teaching', 'Active', NULL, '2023-12-01 02:14:17', '2023-12-01 02:14:17'),
(373, 'rvkhangaonkar1@git.edu', NULL, '$2y$10$qbM.etQrGEH5ah.gm2qRfuJS857fdbO9NbELjvvRgtGVdXQG8ZSFm', 'non-teaching', 'Active', NULL, '2023-12-01 02:14:41', '2023-12-01 02:14:41'),
(374, 'nsbhat@git.edu', NULL, '$2y$10$fxsKJFAeRfd2f3EiZiP4KOJJEhSPjpq16uOL5mNNFKk1YUxhsJHtS', 'teaching', 'Active', NULL, '2023-12-01 02:15:29', '2023-12-01 02:15:29'),
(375, 'cvkotabage@git.edu', NULL, '$2y$10$.Hu/vtbnqzAtrIg9pSXTuutfHpGIOIdrEfV2iPutEd8WhD2sxHmtS', 'teaching', 'Active', NULL, '2023-12-01 02:17:40', '2023-12-01 02:17:40'),
(376, 'smkalghatgi@git.edu', NULL, '$2y$10$18tcB5iVl7r12K03b6YZUOAZHSMolt8aQzDOb3gKexl/i7jQbH5oK', 'teaching', 'Active', NULL, '2023-12-01 02:18:58', '2023-12-01 02:18:58'),
(377, 'u Hiremath@git.edu', NULL, '$2y$10$uzqo90vtXdXVMbJYSYptWOwGUrrwBc3asiO2fu/ctAcAqsqn0Vj2m', 'non-teaching', 'Active', NULL, '2023-12-01 02:20:01', '2023-12-01 02:20:01'),
(378, 'ppjadhav@git.edu', NULL, '$2y$10$mSkbSmz4IArDNRHklKxyUefOCA2AUC3ttI2V0kJWhJFfUAYow5wNa', 'non-teaching', 'Active', NULL, '2023-12-01 02:22:08', '2023-12-01 02:22:08'),
(379, 'harishbendigeri@git.edu', NULL, '$2y$10$782oBuXDvL44qTPtCnYusOtjiMhOqBN2M1QAZ1zsrO5rx2GMdB06K', 'teaching', 'Active', NULL, '2023-12-01 02:22:14', '2023-12-01 02:22:14'),
(380, 'vvkangralkar@git.edu', NULL, '$2y$10$kE7fEiYPSPan1tpOvi4iUeeL/h4WvlXTfw6nZQ2XCPyKngREeC7tS', 'teaching', 'Active', NULL, '2023-12-01 02:24:30', '2023-12-01 02:24:30'),
(381, 'srpujar@git.edu', NULL, '$2y$10$5uwseY/GHjoCOAvL7heaM.2vxkhf.oA7Rw.TqzLQaGeh/OY/r7a5K', 'teaching', 'Active', NULL, '2023-12-01 02:28:31', '2023-12-01 02:28:31'),
(382, 'pchadichal@git.edu', NULL, '$2y$10$Clr36XwkRc.BedApj8Bc/uYYtkIp2VsR2egOGPfE8gLw7WOscwdKW', 'non-teaching', 'Active', NULL, '2023-12-01 02:28:39', '2023-12-01 02:28:39'),
(383, 'rakulkarni@git.edu', NULL, '$2y$10$6u.GZQyCJsCqQDoHTsgxk.2EuH1Ho.NnIpKj19dEc7ni6R8.6Ia0.', 'non-teaching', 'Active', NULL, '2023-12-01 02:31:18', '2023-12-01 02:31:18'),
(384, 'sGadad@git.edu', NULL, '$2y$10$5Pc7BynCjYX6h4WUdy4pOOhIx.Fn8q62T9tnZan0Wcbg/5izjOi.K', 'non-teaching', 'Active', NULL, '2023-12-01 02:31:51', '2023-12-01 02:31:51'),
(386, 'rYellurkar@git.edu', NULL, '$2y$10$U1xMg4I.Wjsax3u3TDBuoeqqQSzPetiz5tEnmMs2absEO2ScE7jI2', 'non-teaching', 'Active', NULL, '2023-12-01 02:35:14', '2023-12-01 02:35:14'),
(387, 'dcsoundalgekar@git.edu', NULL, '$2y$10$b8ds2.tyrtl4XY2jFJKhgup3aC72bAusUHoEi3cV8.1hCcoMRcAye', 'non-teaching', 'Active', NULL, '2023-12-01 02:35:34', '2023-12-01 02:35:34'),
(388, 'pasantamaria@git.edu', NULL, '$2y$10$QYOR1pRZkttbrAmpUeyLaeSRvSWkOpSK9TwLPxwwiGLDXJfqQwk2e', 'non-teaching', 'Active', NULL, '2023-12-01 02:39:11', '2023-12-01 02:39:11'),
(389, 'pbbelavi@git.edu', NULL, '$2y$10$Dbik/mvay8CUr0EXSDGWbO4c1kNL/Jkwtu6brveoV/54mnh.CFdRu', 'teaching', 'Active', NULL, '2023-12-01 02:39:37', '2023-12-01 02:39:37'),
(391, 'ravirajmk@git.edu', NULL, '$2y$10$hn0XniuT9j/9NcGTOHjEqu3lHQa41BiWaPCNZRlOVgK42rTDvPwdy', 'teaching', 'Active', NULL, '2023-12-01 03:55:11', '2023-12-01 03:55:11'),
(392, 'anekbote@git.edu', NULL, '$2y$10$Z8qNXvYuOVZp9qFW0H/ZUu.z6jqw/38IzKAXKUn0zjoTfxEMq4rSi', 'teaching', 'Active', NULL, '2023-12-01 03:56:32', '2023-12-01 03:56:32'),
(393, 'sbnarote@git.edu', NULL, '$2y$10$lJNMrXX2WV0xYdbONEKb1uI.84aQ/jo3QoNm41KJ.HwckwAnH4.hC', 'non-teaching', 'Active', NULL, '2023-12-01 03:57:37', '2023-12-01 03:57:37'),
(394, 'rsadoor@git.edu', NULL, '$2y$10$kVS88uqaMxdTGP1RviGLWe6OJEggCJMFtRzP8Ih///xxtfqXqCdwS', 'teaching', 'Active', NULL, '2023-12-01 04:00:00', '2023-12-01 04:00:00'),
(395, 'ssuppannavar@git.edu', NULL, '$2y$10$qNRyytU7fMNG0NfHh43Kq.sKCDtUd6fpmCtY79L1Sm8F.VqyhjM0G', 'non-teaching', 'Active', NULL, '2023-12-01 04:02:53', '2023-12-01 04:02:53'),
(396, 'jhaldankar@git.edu', NULL, '$2y$10$20ukX8DJLRY72J3ixwtDAODjuCwnakddQESsYkOvv6DPcErZo4.Qq', 'teaching', 'Active', NULL, '2023-12-01 04:04:30', '2023-12-01 04:04:30'),
(397, 'srjog@git.edu', NULL, '$2y$10$Zk70vvjTg8rAkZ0y2vO3uOxE0zD4IktXF48b13uoLpneWvEBImz0K', 'teaching', 'Active', NULL, '2023-12-01 04:06:40', '2023-12-01 04:06:40'),
(398, 'samalladi@git.edu', NULL, '$2y$10$LsakU/n4dldMxmdZynv7TO8PQrxtGegTnGpWxd/PPS6U8vOD/H6JO', 'teaching', 'Active', NULL, '2023-12-01 04:07:41', '2023-12-01 04:07:41'),
(399, 'prhampiholi@git.edu', NULL, '$2y$10$hrCKNoBXhdK7YoVd0o85oOTlRHY6IvL0IlF/3wdqbaCrL72hhpXa6', 'teaching', 'Active', NULL, '2023-12-01 04:10:46', '2023-12-01 04:10:46'),
(400, 'kathabaj@git.edu', NULL, '$2y$10$o7rO5kxnkEIsNSog3ZLIuuJJHz7K1Ho1YK.JrqDyS/tRXTNs6T7I2', 'teaching', 'Active', NULL, '2023-12-01 04:12:04', '2023-12-01 04:12:04'),
(401, 'kbgudi@git.edu', NULL, '$2y$10$2UiQA1T1zQZQJFC7ksPHm.dAiyfOgCk8xsLJUYWzpRD.nonOdJhqC', 'non-teaching', 'Active', NULL, '2023-12-01 04:12:30', '2023-12-01 04:12:30'),
(402, 'sgkulkarni@git.edu', NULL, '$2y$10$hPHpZkt8v9aABgcrthVmf.vd9PJ4QxbUAC78lT8tqHBMEF6gxF5O6', 'non-teaching', 'Active', NULL, '2023-12-01 04:13:08', '2023-12-01 04:13:08'),
(403, 'assalvi@git.edu', NULL, '$2y$10$Y0bxREvPe7PMTWU7F1S7iOPWMvOIJkYXz4LZFZLVXKB5g5223Hl2.', 'non-teaching', 'Active', NULL, '2023-12-01 04:16:27', '2023-12-01 04:16:27'),
(404, 'pskoujalgi@git.edu', NULL, '$2y$10$q/FX270cYHLf/sdbtQyvjOjbA1HSkgepRzlZS6azI1qMg6L9UnUva', 'teaching', 'Active', NULL, '2023-12-01 04:18:26', '2023-12-01 04:18:26'),
(405, 'rgdaptardar@git.edu', NULL, '$2y$10$Fh6.sbA2fOd5FRqj5w64xOMB9icKMkdmBGBxpJs..hELEcA2SnYU6', 'non-teaching', 'Active', NULL, '2023-12-01 04:19:42', '2023-12-01 04:19:42'),
(406, 'sasangam@git.edu', NULL, '$2y$10$d343OUPaLg8r1dvxH7a9OungT0Swlhe6IN9iBDlPw4nhDk4GBrDQi', 'teaching', 'Active', NULL, '2023-12-01 04:22:34', '2023-12-01 04:22:34'),
(407, 'bbdiggewadi@git.edu', NULL, '$2y$10$aJOTzRz7Ra6S5PY0931s3ewxSpx3r45dWRX6XMW7jitMBwRXePLZq', 'teaching', 'Active', NULL, '2023-12-01 04:24:16', '2023-12-01 04:24:16'),
(408, 'hbgodalkundri@git.edu', NULL, '$2y$10$hcGCdA9RR/4AML7DzzVDmuU3rwgEmitGZ/82zVTWHJ1OkdPm82Opq', 'non-teaching', 'Active', NULL, '2023-12-01 04:24:44', '2023-12-01 04:24:44'),
(409, 'rckulkarni@git.edu', NULL, '$2y$10$GM/qRV.WNFM2RXVpuoc3F.afu2SY5u6TK3VEX3hlAYQMeWAfglyji', 'teaching', 'Active', NULL, '2023-12-01 04:26:04', '2023-12-01 04:26:04'),
(410, 'asjoshi@git.edu', NULL, '$2y$10$rygKm2VbqxSMGIOE3dyhjeBZHB8UZFvmuR/fq453k7244C7RLuUKa', 'teaching', 'Active', NULL, '2023-12-01 04:28:30', '2023-12-01 04:28:30'),
(411, 'sgraikar@git.edu', NULL, '$2y$10$DVhMik.bCZeqe84XloZ6Ge35aaHgpthroB6eQEoQKbbLHjPwwY3Uy', 'teaching', 'Active', NULL, '2023-12-01 04:28:55', '2023-12-01 04:28:55'),
(412, 'cdkatti@git.edu', NULL, '$2y$10$KGOKxkSJBO3K.UufUVsNje3..dxretKgTyc0IgME8fbqpXLzDfQ7u', 'teaching', 'Active', NULL, '2023-12-01 04:32:04', '2023-12-01 04:32:04'),
(413, 'pvadhyapak@git.edu', NULL, '$2y$10$RMGrovzf8V7T5Wvni/eT3.2oRq52JXa.t/H86CLtqFjyzbscZkAoW', 'teaching', 'Active', NULL, '2023-12-01 04:32:06', '2023-12-01 04:32:06'),
(414, 'mbalibrarian@git.edu', NULL, '$2y$10$HPtAuH.B6Diy7qHcUQ/2uulexnXcF6v6JFV/AkO4SpNCFMzZgeR5e', 'non-teaching', 'Active', NULL, '2023-12-01 04:32:27', '2023-12-01 04:32:27'),
(415, 'drholi@git.edu', NULL, '$2y$10$3p7iovBOekKwHNb2VYuf/.xuuOzYPUPf9m1YMGIDeNvhlcj4dfi1G', 'non-teaching', 'Active', NULL, '2023-12-01 04:33:46', '2023-12-01 04:33:46'),
(416, 'pshande@git.edu', NULL, '$2y$10$4yCdDbAZiFlzH.EuqEN6oujedEZSp6Ia9JGSx0O46bAju7AHpFtB2', 'teaching', 'Active', NULL, '2023-12-01 04:36:19', '2023-12-01 04:36:19'),
(417, 'kvkulkarni@git.edu', NULL, '$2y$10$tyHbhPJ1bszYNrN4NNU39e0oyD2N2LRFXSI6tJBauTwK49f7RM8Iy', 'teaching', 'Active', NULL, '2023-12-01 04:37:37', '2023-12-01 04:37:37'),
(418, 'kbvannuri@git.edu', NULL, '$2y$10$ZhI3O1s3.PTATbTxVHK0RuDLEB9A.h8JivmY7e0see6BsgZCddWaa', 'non-teaching', 'Active', NULL, '2023-12-01 04:38:12', '2023-12-01 04:38:12'),
(419, 'ydsonolkar@git.edu', NULL, '$2y$10$TnMOznEFlbrGiXdOoKbVQuVG8/iTtwrORHpAa8Dgyp8hx7iPb27zu', 'non-teaching', 'Active', NULL, '2023-12-01 04:39:20', '2023-12-01 04:39:20'),
(420, 'srkabbur@git.edu', NULL, '$2y$10$hXd.YpTMmjCRG1VtZ4d5oe8JazBPCtdr5kBZxrF8Y3YSYNt3FPq1e', 'teaching', 'Active', NULL, '2023-12-01 04:40:09', '2023-12-01 04:40:09'),
(421, 'mmyallurkar@git.edu', NULL, '$2y$10$gXMNHK221uxx9JtI3nRb2OKTkAx9hj57sXxDGiLWdcKgdLmTDnZbC', 'non-teaching', 'Active', NULL, '2023-12-01 04:42:59', '2023-12-01 04:42:59'),
(422, 'srkirsur@git.edu', NULL, '$2y$10$mXLcWR4Zzk2VA8H91f9SxeJuuefd1S/YtR90Bpw2VrUskgodWXJi.', 'teaching', 'Active', NULL, '2023-12-01 04:45:36', '2023-12-01 04:45:36'),
(423, 'psjoshi@git.edu', NULL, '$2y$10$pKuV3wd4drXIlfh7Ep6gv.SJzQR9RvUBlpbkqMzQT0CPik2zbfORy', 'teaching', 'Active', NULL, '2023-12-01 04:47:51', '2023-12-01 04:47:51'),
(424, 'sYellurkar@git.edu', NULL, '$2y$10$SjsoLmo4CmxYR6a6EG99tOBPiNY60dMH0VG/S1TYqItzdjavg7PpK', 'non-teaching', 'Active', NULL, '2023-12-01 04:51:19', '2023-12-01 04:51:19'),
(427, 'kkmirji@git.edu', NULL, '$2y$10$0kl3ViL/CgvHuU71wDZ8.OLUDLluNmhxfR6J11dfoBNVE5SMOaqQu', 'teaching', 'Active', NULL, '2023-12-01 05:14:23', '2023-12-01 05:14:23'),
(428, 'jdhalgekar@git.edu', NULL, '$2y$10$4l4Dz4qgaub9crLoNfz0Pex9b3X.2fZR41VVyTJhRc94heLhcjNz6', 'non-teaching', 'Active', NULL, '2023-12-01 05:16:39', '2023-12-01 05:16:39'),
(429, 'mmuchandi@git.edu', NULL, '$2y$10$UJi4piHxg95H7aDuXvb9Q.qMlNVDB4ao7O6WnoEd57MxM12VS.1h6', 'teaching', 'Active', NULL, '2023-12-01 05:19:20', '2023-12-01 05:19:20'),
(430, 'chikmath@git.edu', NULL, '$2y$10$crjaqeYiWSo9lvReNpJPNOd6chbKqOkIiv1W0vZmvQZV1maNVbqWW', 'teaching', 'Active', NULL, '2023-12-01 05:20:11', '2023-12-01 05:20:11'),
(431, 'gkMandlik@git.edu', NULL, '$2y$10$nDVXN.bIjtkecic.VW3Q0OGnEq.CcdI4sED7soPa5Yi0/NzObUq1W', 'non-teaching', 'Active', NULL, '2023-12-01 05:21:14', '2023-12-01 05:21:14'),
(432, 'mtkurbar@git.edu', NULL, '$2y$10$HQet4OZcR/3A9fzX5Wea5OVL0j7O7ZrvqX9Vy94RgHa5oNofj4i5a', 'non-teaching', 'Active', NULL, '2023-12-01 05:23:39', '2023-12-01 05:23:39'),
(434, 'pmbanakar@git.edu', NULL, '$2y$10$.6C16Ngcd71ivKX60M9tx.ijCOhVYjlR3TBKGzgXgKvv00gKg.tBq', 'teaching', 'Active', NULL, '2023-12-01 05:24:39', '2023-12-01 05:24:39'),
(435, 'mmagdum@git.edu', NULL, '$2y$10$mtSDS1wI2TAqX9GgVpm0.O0hrAs/Kya7hog2qYpPo/St.mArR5o4e', 'teaching', 'Active', NULL, '2023-12-01 05:28:03', '2023-12-01 05:28:03'),
(436, 'aknakkala@git.edu', NULL, '$2y$10$bF9zZBm3PRu/nfhFrTLC..eiaGjL2UNU3nrfctAr9PSPEUfJd0d9m', 'teaching', 'Active', NULL, '2023-12-01 05:28:30', '2023-12-01 05:28:30'),
(437, 'gkadlaskar@git.edu', NULL, '$2y$10$MOaGUrniT5wgCtn3MgE2yuL5BdPjr.Jy0jD7GHiR614YVP3SOD6yu', 'non-teaching', 'Active', NULL, '2023-12-01 05:28:42', '2023-12-01 05:28:42'),
(438, 'vskambar@git.edu', NULL, '$2y$10$kH2.dexooVndE7BFPKSdie7E6wRw1E/foUR/WkWfK3hc1XJWD0a86', 'non-teaching', 'Active', NULL, '2023-12-01 05:29:49', '2023-12-01 05:29:49'),
(439, 'aknakkala1@git.edu', NULL, '$2y$10$YaX.alRqcVmbA608230n9uUDo4KiCDJNNIdS39qsMtHz8Hw/S8rdW', 'teaching', 'Active', NULL, '2023-12-01 05:31:55', '2023-12-01 05:31:55'),
(440, 'vvdeshpande@git.edu', NULL, '$2y$10$GLyGvNSo9DO1/DSAxv3L6.pB.IZFjpXzCaOPvdg7tpYeS/B3MXPie', 'teaching', 'Active', NULL, '2023-12-01 05:32:11', '2023-12-01 05:32:11'),
(441, 'smkalsekar@git.edu', NULL, '$2y$10$1HZ3ziV5h14WZagNOuYIBeWFZzs2qqjCylzOlNIDhOQLVRAWss5A6', 'non-teaching', 'Active', NULL, '2023-12-01 05:34:29', '2023-12-01 05:34:29'),
(442, 'bpchalavetkar@git.edu', NULL, '$2y$10$hISfyrmTsGmOt7ieCuqywOWLs702WkLwj1YQVBytZs99pc.vvsq4S', 'non-teaching', 'Active', NULL, '2023-12-01 05:38:47', '2023-12-01 05:38:47'),
(443, 'daponnaswami@git.edu', NULL, '$2y$10$QkpEg2jWmWvI530vuchopOGFtP74ihkr7yJo4guFS6MQR53p6qSga', 'teaching', 'Active', NULL, '2023-12-01 05:39:34', '2023-12-01 05:39:34'),
(444, 'uskamble@git.edu', NULL, '$2y$10$51BAR2sXtSe7MdM9mpN3juqWkaJ3khw8/d5ah5IB/54C14vBlxHCq', 'non-teaching', 'Active', NULL, '2023-12-01 05:42:21', '2023-12-01 05:42:21'),
(445, 'jrgurjar@git.edu', NULL, '$2y$10$RW5fLRk6bNcZSHMC0gb8cuydwkVNV1YuTu5H5FV.i.pAQ998Fd1aW', 'teaching', 'Active', NULL, '2023-12-01 05:43:14', '2023-12-01 05:43:14'),
(446, 'ivpatil@git.edu', NULL, '$2y$10$KmUcKM/T6CiwY2VtzDuZaeSQf79rKYKexNlmMCavjG/BGVeETJZxW', 'teaching', 'Active', NULL, '2023-12-01 05:46:02', '2023-12-01 05:46:02'),
(447, 'sgnavalagi@git.edu', NULL, '$2y$10$ZDZtI.xsB5AzdWzwZDXr4uQwGrk/wpATitOZxbcF/T9J7UtfbJg7O', 'non-teaching', 'Active', NULL, '2023-12-01 05:46:28', '2023-12-01 05:46:28'),
(448, 'shrivatsarj@git.edu', NULL, '$2y$10$Lqhbew2/JQ1hPON6kML7W.2Mi9T6pqbhpbuA2Rv8iUlLNoEESSjlK', 'teaching', 'Active', NULL, '2023-12-01 05:47:07', '2023-12-01 05:47:07'),
(449, 'pstupare@git.edu', NULL, '$2y$10$X3Hq/7VAzeMUgFn2tjjdKO408CwoHWXjAFtFGEj1m9mwGBSKTwb1O', 'non-teaching', 'Active', NULL, '2023-12-01 05:50:14', '2023-12-01 05:50:14'),
(450, 'smrajput@git.edu', NULL, '$2y$10$eEiF5pOxSdwE77HEa130tu0sm.tv7KOTPjbOLNU62RGIhnev18TtG', 'non-teaching', 'Active', NULL, '2023-12-01 05:51:22', '2023-12-01 05:51:22'),
(451, 'jpkitturkar@git.edu', NULL, '$2y$10$64qGICt.0qu3DuB8yualkOgId0UHKyfQtpSPSn0mQ5zMjjIA8q4eC', 'teaching', 'Active', NULL, '2023-12-01 05:51:43', '2023-12-01 05:51:43'),
(452, 'bndhangawade@git.edu', NULL, '$2y$10$sB/se26GtxBP.XbJHgFFIO87DqTUr0cNqPpDDaeIF3K3/jPsIJrrG', 'non-teaching', 'Active', NULL, '2023-12-01 05:53:18', '2023-12-01 05:53:18'),
(453, 'ppkatti@git.edu', NULL, '$2y$10$AdNj2h2nhUPkdn50bAyx..pHjc/mKebGH5QspDOXfjgDbs9MfW0LG', 'teaching', 'Active', NULL, '2023-12-01 05:55:58', '2023-12-01 05:55:58'),
(454, 'rminamdar@git.edu', NULL, '$2y$10$5oZdLqvlCHS5i5lD.5DmVunEBhFnJT1QngZH7UR8jk1DRT3tBwTa2', 'teaching', 'Active', NULL, '2023-12-01 06:02:31', '2023-12-01 06:02:31'),
(455, 'sigoudar@git.edu', NULL, '$2y$10$B1kKz4nfReJRmC5HdEVA..QRw1AOWTMSUz5mXw4mSlmPr.93vCtKK', 'teaching', 'Active', NULL, '2023-12-01 06:04:24', '2023-12-01 06:04:24'),
(456, 'pbarthakur@git.edu', NULL, '$2y$10$EcNe9Ag5w2cBVeBF09FejOMVMa3pv.JJjwqZntPfhSu2ZRh08tLSa', 'teaching', 'Active', NULL, '2023-12-01 06:09:11', '2023-12-01 06:09:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `allowances_designations_id_foreign` (`designations_id`);

--
-- Indexes for table `associations`
--
ALTER TABLE `associations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `association_staff`
--
ALTER TABLE `association_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `association_staff_associations_id_foreign` (`association_id`),
  ADD KEY `association_staff_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `book_publications`
--
ALTER TABLE `book_publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_publications_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `castecategories`
--
ALTER TABLE `castecategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `castecategories_religion_id_foreign` (`religion_id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapters_book_publications_id_foreign` (`book_publications_id`),
  ADD KEY `chapters_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `combining_leave_rules`
--
ALTER TABLE `combining_leave_rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `combining_leave_rules_leave_rules_id_foreign` (`leave_rules_id`),
  ADD KEY `combining_leave_rules_combined_with_foreign` (`combined_with`);

--
-- Indexes for table `conferences_attendees`
--
ALTER TABLE `conferences_attendees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conferences_attendee_staff`
--
ALTER TABLE `conferences_attendee_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conferences_attendee_staff_staff_id_foreign` (`staff_id`),
  ADD KEY `conferences_attendee_staff_conferences_attendee_id_foreign` (`conferences_attendee_id`);

--
-- Indexes for table `conferences_conducteds`
--
ALTER TABLE `conferences_conducteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consolidated_teaching_pays`
--
ALTER TABLE `consolidated_teaching_pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consolidated_teaching_pay_staff`
--
ALTER TABLE `consolidated_teaching_pay_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consolidated_teaching_pay_staff_staff_id_foreign` (`staff_id`),
  ADD KEY `ctp_ctp_id_fk` (`consolidated_teaching_pay_id`);

--
-- Indexes for table `consultancies`
--
ALTER TABLE `consultancies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consultancies_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `co_authors_gits`
--
ALTER TABLE `co_authors_gits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_authors_gits_staff_id_foreign` (`staff_id`),
  ADD KEY `co_authors_gits_publications_id_foreign` (`publications_id`);

--
-- Indexes for table `co_authors_others`
--
ALTER TABLE `co_authors_others`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_authors_others_publications_id_foreign` (`publications_id`);

--
-- Indexes for table `create_leave_rule_configrations`
--
ALTER TABLE `create_leave_rule_configrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_dept_shortname_unique` (`dept_shortname`);

--
-- Indexes for table `department_staff`
--
ALTER TABLE `department_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_staff_departments_id_foreign` (`department_id`),
  ADD KEY `department_staff_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_design_name_unique` (`design_name`);

--
-- Indexes for table `designation_ntcpayscale`
--
ALTER TABLE `designation_ntcpayscale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_ntpayscale`
--
ALTER TABLE `designation_ntpayscale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designation_ntpayscales_designations_id_foreign` (`designation_id`),
  ADD KEY `designation_ntpayscales_ntpayscales_id_foreign` (`ntpayscale_id`);

--
-- Indexes for table `designation_staff`
--
ALTER TABLE `designation_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designation_staff_designations_id_foreign` (`designation_id`),
  ADD KEY `designation_staff_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `expert_talk_conducteds`
--
ALTER TABLE `expert_talk_conducteds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expert_talk_conducteds_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_achievements`
--
ALTER TABLE `general_achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_achievements_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `leaveentitlements`
--
ALTER TABLE `leaveentitlements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_rules`
--
ALTER TABLE `leave_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mgmtmembers`
--
ALTER TABLE `mgmtmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntcpayscales`
--
ALTER TABLE `ntcpayscales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntcpayscale_staff`
--
ALTER TABLE `ntcpayscale_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ntcpayscale_staff_staff_id_foreign` (`staff_id`),
  ADD KEY `ntcpayscale_staff_ntcpayscale_id_foreign` (`ntcpayscale_id`);

--
-- Indexes for table `ntpayscales`
--
ALTER TABLE `ntpayscales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntpayscale_staff`
--
ALTER TABLE `ntpayscale_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ntpayscale_staff_staff_id_foreign` (`staff_id`),
  ADD KEY `ntpayscale_staff_ntpayscale_id_foreign` (`ntpayscale_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `professional_activity_attendees`
--
ALTER TABLE `professional_activity_attendees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_activity_conducteds`
--
ALTER TABLE `professional_activity_conducteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_activity_resource_people`
--
ALTER TABLE `professional_activity_resource_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publications_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification_staff`
--
ALTER TABLE `qualification_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qualification_staffs_qualifications_id_foreign` (`qualification_id`),
  ADD KEY `qualification_staffs_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renumerationheads`
--
ALTER TABLE `renumerationheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaryheads`
--
ALTER TABLE `salaryheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_castecategory_id_foreign` (`castecategory_id`),
  ADD KEY `staff_religion_id_foreign` (`religion_id`),
  ADD KEY `staff_user_id_foreign` (`user_id`);

--
-- Indexes for table `staff_teaching_payscale`
--
ALTER TABLE `staff_teaching_payscale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_teaching_payscale_staff_id_foreign` (`staff_id`),
  ADD KEY `staff_teaching_payscale_teaching_payscales_id_foreign` (`teaching_payscale_id`);

--
-- Indexes for table `tdsheads`
--
ALTER TABLE `tdsheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_payscales`
--
ALTER TABLE `teaching_payscales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payscales_designation_id_foreign` (`designations_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowances`
--
ALTER TABLE `allowances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `associations`
--
ALTER TABLE `associations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `association_staff`
--
ALTER TABLE `association_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;

--
-- AUTO_INCREMENT for table `book_publications`
--
ALTER TABLE `book_publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `castecategories`
--
ALTER TABLE `castecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combining_leave_rules`
--
ALTER TABLE `combining_leave_rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `conferences_attendees`
--
ALTER TABLE `conferences_attendees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conferences_attendee_staff`
--
ALTER TABLE `conferences_attendee_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conferences_conducteds`
--
ALTER TABLE `conferences_conducteds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consolidated_teaching_pays`
--
ALTER TABLE `consolidated_teaching_pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consolidated_teaching_pay_staff`
--
ALTER TABLE `consolidated_teaching_pay_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultancies`
--
ALTER TABLE `consultancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `co_authors_gits`
--
ALTER TABLE `co_authors_gits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `co_authors_others`
--
ALTER TABLE `co_authors_others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `create_leave_rule_configrations`
--
ALTER TABLE `create_leave_rule_configrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `department_staff`
--
ALTER TABLE `department_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=433;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `designation_ntcpayscale`
--
ALTER TABLE `designation_ntcpayscale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `designation_ntpayscale`
--
ALTER TABLE `designation_ntpayscale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `designation_staff`
--
ALTER TABLE `designation_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=448;

--
-- AUTO_INCREMENT for table `expert_talk_conducteds`
--
ALTER TABLE `expert_talk_conducteds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_achievements`
--
ALTER TABLE `general_achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaveentitlements`
--
ALTER TABLE `leaveentitlements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_rules`
--
ALTER TABLE `leave_rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mgmtmembers`
--
ALTER TABLE `mgmtmembers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `ntcpayscales`
--
ALTER TABLE `ntcpayscales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ntcpayscale_staff`
--
ALTER TABLE `ntcpayscale_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `ntpayscales`
--
ALTER TABLE `ntpayscales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ntpayscale_staff`
--
ALTER TABLE `ntpayscale_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_activity_attendees`
--
ALTER TABLE `professional_activity_attendees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_activity_conducteds`
--
ALTER TABLE `professional_activity_conducteds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_activity_resource_people`
--
ALTER TABLE `professional_activity_resource_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qualification_staff`
--
ALTER TABLE `qualification_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `renumerationheads`
--
ALTER TABLE `renumerationheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salaryheads`
--
ALTER TABLE `salaryheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT for table `staff_teaching_payscale`
--
ALTER TABLE `staff_teaching_payscale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `tdsheads`
--
ALTER TABLE `tdsheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teaching_payscales`
--
ALTER TABLE `teaching_payscales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allowances`
--
ALTER TABLE `allowances`
  ADD CONSTRAINT `allowances_designations_id_foreign` FOREIGN KEY (`designations_id`) REFERENCES `designations` (`id`);

--
-- Constraints for table `association_staff`
--
ALTER TABLE `association_staff`
  ADD CONSTRAINT `association_staff_associations_id_foreign` FOREIGN KEY (`association_id`) REFERENCES `associations` (`id`),
  ADD CONSTRAINT `association_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `book_publications`
--
ALTER TABLE `book_publications`
  ADD CONSTRAINT `book_publications_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `castecategories`
--
ALTER TABLE `castecategories`
  ADD CONSTRAINT `castecategories_religion_id_foreign` FOREIGN KEY (`religion_id`) REFERENCES `religions` (`id`);

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_book_publications_id_foreign` FOREIGN KEY (`book_publications_id`) REFERENCES `book_publications` (`id`),
  ADD CONSTRAINT `chapters_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `combining_leave_rules`
--
ALTER TABLE `combining_leave_rules`
  ADD CONSTRAINT `combining_leave_rules_combined_with_foreign` FOREIGN KEY (`combined_with`) REFERENCES `leave_rules` (`id`),
  ADD CONSTRAINT `combining_leave_rules_leave_rules_id_foreign` FOREIGN KEY (`leave_rules_id`) REFERENCES `leave_rules` (`id`);

--
-- Constraints for table `conferences_attendee_staff`
--
ALTER TABLE `conferences_attendee_staff`
  ADD CONSTRAINT `conferences_attendee_staff_conferences_attendee_id_foreign` FOREIGN KEY (`conferences_attendee_id`) REFERENCES `conferences_attendees` (`id`),
  ADD CONSTRAINT `conferences_attendee_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `consolidated_teaching_pay_staff`
--
ALTER TABLE `consolidated_teaching_pay_staff`
  ADD CONSTRAINT `consolidated_teaching_pay_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `ctp_ctp_id_fk` FOREIGN KEY (`consolidated_teaching_pay_id`) REFERENCES `consolidated_teaching_pay_staff` (`id`);

--
-- Constraints for table `consultancies`
--
ALTER TABLE `consultancies`
  ADD CONSTRAINT `consultancies_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `co_authors_gits`
--
ALTER TABLE `co_authors_gits`
  ADD CONSTRAINT `co_authors_gits_publications_id_foreign` FOREIGN KEY (`publications_id`) REFERENCES `publications` (`id`),
  ADD CONSTRAINT `co_authors_gits_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `co_authors_others`
--
ALTER TABLE `co_authors_others`
  ADD CONSTRAINT `co_authors_others_publications_id_foreign` FOREIGN KEY (`publications_id`) REFERENCES `publications` (`id`);

--
-- Constraints for table `department_staff`
--
ALTER TABLE `department_staff`
  ADD CONSTRAINT `department_staff_departments_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `department_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `designation_ntpayscale`
--
ALTER TABLE `designation_ntpayscale`
  ADD CONSTRAINT `designation_ntpayscales_designations_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `designation_ntpayscales_ntpayscales_id_foreign` FOREIGN KEY (`ntpayscale_id`) REFERENCES `ntpayscales` (`id`);

--
-- Constraints for table `designation_staff`
--
ALTER TABLE `designation_staff`
  ADD CONSTRAINT `designation_staff_designations_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`),
  ADD CONSTRAINT `designation_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `expert_talk_conducteds`
--
ALTER TABLE `expert_talk_conducteds`
  ADD CONSTRAINT `expert_talk_conducteds_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `general_achievements`
--
ALTER TABLE `general_achievements`
  ADD CONSTRAINT `general_achievements_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `ntcpayscale_staff`
--
ALTER TABLE `ntcpayscale_staff`
  ADD CONSTRAINT `ntcpayscale_staff_ntcpayscale_id_foreign` FOREIGN KEY (`ntcpayscale_id`) REFERENCES `ntcpayscales` (`id`),
  ADD CONSTRAINT `ntcpayscale_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `ntpayscale_staff`
--
ALTER TABLE `ntpayscale_staff`
  ADD CONSTRAINT `ntpayscale_staff_ntpayscale_id_foreign` FOREIGN KEY (`ntpayscale_id`) REFERENCES `ntpayscales` (`id`),
  ADD CONSTRAINT `ntpayscale_staff_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `qualification_staff`
--
ALTER TABLE `qualification_staff`
  ADD CONSTRAINT `qualification_staffs_qualifications_id_foreign` FOREIGN KEY (`qualification_id`) REFERENCES `qualifications` (`id`),
  ADD CONSTRAINT `qualification_staffs_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_castecategory_id_foreign` FOREIGN KEY (`castecategory_id`) REFERENCES `castecategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_religion_id_foreign` FOREIGN KEY (`religion_id`) REFERENCES `religions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_teaching_payscale`
--
ALTER TABLE `staff_teaching_payscale`
  ADD CONSTRAINT `staff_teaching_payscale_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `staff_teaching_payscale_teaching_payscales_id_foreign` FOREIGN KEY (`teaching_payscale_id`) REFERENCES `teaching_payscales` (`id`);

--
-- Constraints for table `teaching_payscales`
--
ALTER TABLE `teaching_payscales`
  ADD CONSTRAINT `payscales_designation_id_foreign` FOREIGN KEY (`designations_id`) REFERENCES `designations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
