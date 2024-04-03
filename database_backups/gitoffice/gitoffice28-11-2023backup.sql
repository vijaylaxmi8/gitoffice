-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 01:12 PM
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
(44, 5, 41, '2014-01-10', NULL, NULL, NULL, 'active', NULL, NULL);

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
(50, 'Jain', 4, 'Pancham', '-', '-', 'active', '2023-11-28 06:12:23', '2023-11-28 06:12:23');

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
  `sandwiching` enum('Allowed','Non-Allowed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `wef` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(26, 'IT CELL', 'it cell', '2023-06-01', 'inactive', '2023-11-28 02:57:00', '2023-11-28 02:57:14', NULL);

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
(46, 8, 41, '2014-01-10', NULL, NULL, NULL, 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `design_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadditional` tinyint(4) NOT NULL DEFAULT 0,
  `emp_type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0-teaching\r\n1-non teaching',
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `design_name`, `isadditional`, `emp_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HoD', 1, 'Teaching', 'active', '2023-09-09 04:29:39', '2023-09-13 00:11:14'),
(2, 'Principal', 1, 'Teaching', 'active', '2023-09-09 04:32:19', '2023-09-13 00:11:21'),
(3, 'Dean-Administration', 1, 'Teaching', 'active', '2023-09-09 04:52:45', '2023-10-20 00:16:24'),
(4, 'Section Head (Non-Teaching)', 1, 'Non-Teaching', 'active', '2023-09-12 23:47:25', '2023-10-19 23:42:26'),
(5, 'Assistant Professor', 0, 'Teaching', 'active', '2023-09-13 00:12:41', '2023-09-13 00:12:41'),
(6, 'Associate Professor', 0, 'Teaching', 'active', '2023-09-13 00:12:52', '2023-09-13 00:12:52'),
(7, 'Professor', 0, 'Teaching', 'active', '2023-09-13 00:13:04', '2023-09-13 00:13:04'),
(8, 'Peons', 0, 'Non-Teaching', 'active', '2023-09-13 02:10:28', '2023-09-13 02:12:39'),
(9, 'Helpers', 0, 'Non-Teaching', 'active', '2023-09-13 02:13:19', '2023-09-13 02:13:19'),
(10, 'Office Superintendent', 0, 'Non-Teaching', 'active', '2023-09-14 04:28:06', '2023-09-23 00:09:00'),
(11, 'First Division Assistant', 0, 'Non-Teaching', 'active', '2023-09-14 04:28:39', '2023-09-15 02:55:35'),
(12, 'Second Division Assistant', 0, 'Non-Teaching', 'active', '2023-09-14 04:29:08', '2023-09-14 04:29:08'),
(13, 'Mechanic', 0, 'Non-Teaching', 'active', '2023-09-14 04:29:37', '2023-09-14 04:29:37'),
(14, 'Instructor', 0, 'Non-Teaching', 'active', '2023-09-14 04:29:54', '2023-09-14 04:29:54'),
(15, 'Foreman', 0, 'Non-Teaching', 'active', '2023-09-14 04:30:06', '2023-09-14 04:30:06'),
(16, 'Assistant Instructor', 0, 'Non-Teaching', 'active', '2023-09-14 04:31:04', '2023-09-14 04:31:04'),
(17, 'Driver', 0, 'Non-Teaching', 'active', '2023-09-14 04:32:20', '2023-09-14 04:32:20'),
(18, 'Attender', 0, 'Non-Teaching', 'active', '2023-09-14 04:32:58', '2023-09-16 01:42:27'),
(19, 'System Analyst', 0, 'Non-Teaching', 'active', '2023-09-14 04:33:21', '2023-09-14 04:33:21'),
(20, 'Network Administrator', 0, 'Non-Teaching', 'active', '2023-09-14 04:35:47', '2023-09-14 04:35:47'),
(21, 'Moulder', 0, 'Non-Teaching', 'active', '2023-09-14 23:59:51', '2023-09-14 23:59:51'),
(22, 'Electrician', 0, 'Non-Teaching', 'active', '2023-09-15 00:27:16', '2023-09-15 00:27:16'),
(23, 'Carpenter', 0, 'Non-Teaching', 'active', '2023-09-15 00:47:59', '2023-09-15 01:21:05'),
(24, 'Physical Education Director', 0, 'Non-Teaching', 'active', '2023-09-16 01:44:47', '2023-09-16 01:44:47'),
(25, 'Lady Physical Education Director', 0, 'Non-Teaching', 'active', '2023-09-30 06:28:58', '2023-09-30 06:28:58'),
(26, 'Lecturer', 0, 'Teaching', 'active', '2023-10-03 00:00:05', '2023-10-03 00:00:05'),
(27, 'Senior Scale Lecturer', 0, 'Teaching', 'active', '2023-10-03 00:03:23', '2023-10-03 00:03:23'),
(28, 'Senior Grade lecturer', 0, 'Teaching', 'active', '2023-10-06 02:53:31', '2023-10-06 02:53:31'),
(29, 'Ayas', 0, 'Non-Teaching', 'active', '2023-10-09 04:04:23', '2023-10-09 04:04:23'),
(30, 'Cleaners', 0, 'Non-Teaching', 'active', '2023-10-09 04:04:57', '2023-10-09 04:04:57'),
(31, 'RECEPTIONIST', 0, 'Non-Teaching', 'active', '2023-10-09 04:47:08', '2023-10-09 04:47:08'),
(32, 'Accounts', 0, 'Non-Teaching', 'active', '2023-10-09 06:08:38', '2023-10-09 06:08:38'),
(33, 'ASSISTANT LIBRARIAN', 0, 'Non-Teaching', 'active', '2023-10-09 06:09:33', '2023-10-09 06:09:33'),
(36, 'Dean Student Affairs', 1, 'Teaching', 'active', '2023-10-20 00:17:29', '2023-10-20 00:17:29'),
(37, 'Dean Research & Development', 1, 'Teaching', 'active', '2023-10-20 00:17:54', '2023-10-20 00:17:54'),
(38, 'Dean Academics Statutory', 1, 'Teaching', 'active', '2023-10-20 00:18:23', '2023-10-20 00:18:23'),
(39, 'Dean Academics Development', 1, 'Teaching', 'active', '2023-10-20 00:18:43', '2023-10-20 00:18:43'),
(40, 'Dean Infrastructure', 1, 'Teaching', 'active', '2023-10-20 00:19:06', '2023-10-20 00:19:06');

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
(26, 16, 12, '2023-01-01', NULL, NULL, 'GC1', 'active', NULL, NULL);

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
(61, 26, 41, NULL, '2014-01-10', NULL, NULL, NULL, NULL, 'active', NULL, NULL);

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
  `shortname` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_entitlement` int(11) NOT NULL,
  `min` float NOT NULL,
  `max` int(11) NOT NULL,
  `vacation_type` enum('Vacational','Non_vacational','Both','') COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Casual Leave', 'CL', 15, 0.5, 3, 'Both', 'No', '2023-01-01', 'GCR1', 0, '2023-01-01', 'GCR1', 0, 0, 0, 'active', '2023-11-28 06:07:23', '2023-11-28 06:07:23'),
(2, 'Restricted Holiday', 'RH', 2, 1, 2, 'Both', 'No', '2023-01-02', 'GCR1', 0, '2023-01-01', 'GCR2', 0, 0, 0, 'active', '2023-11-28 06:10:46', '2023-11-28 06:10:46');

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
(12, 13500, 3000, 2, '2023-01-01', 'GC1', NULL, 'active', '2023-11-28 04:53:22', '2023-11-28 04:53:22');

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
(7, 30, 9, '2013-02-11', NULL, NULL, NULL, 'active', NULL, NULL);

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
  `qual_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qual_shortname` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, 'Christian', 'active', '2023-11-28 04:46:33', '2023-11-28 04:46:33'),
(8, 'Christian', 'active', '2023-11-28 04:46:51', '2023-11-28 04:46:51');

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
(41, 63, 'Basavaraj', 'S', 'Saunshi', 'Primary school backside,  At post : Maranabeed,  Tq :  Hangal,   Dist  : Haveri-581 101', 'Primary school backside,  At post : Maranabeed,  Tq :  Hangal,   Dist  : Haveri-581 101', '1987-06-01', '2014-01-10', 1, 20, 'male', NULL, '2045-06-30', NULL, 'null', NULL, NULL, 8904259703, NULL, NULL, NULL, NULL, NULL, NULL, 'Teaching', '2023-11-28 06:35:38', '2023-11-28 06:35:38');

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
(36, 36, 8, '2012-05-16', NULL, NULL, NULL, 'active', NULL, NULL),
(37, 37, 9, '2014-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(38, 38, 9, '2012-07-16', NULL, NULL, NULL, 'active', NULL, NULL),
(39, 39, 9, '2014-01-09', NULL, NULL, NULL, 'active', NULL, NULL),
(40, 40, 9, '2013-03-15', NULL, NULL, NULL, 'active', NULL, NULL),
(41, 41, 9, '2014-01-10', NULL, NULL, NULL, 'active', NULL, NULL);

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
(8, '6th payscale', 37400.00, 67000.00, 6, 9000.00, 70.00, 5.00, 80.00, '2023-01-01', NULL, 'active', '2023-09-23 02:55:04', '2023-09-23 02:55:04'),
(9, '5th PayScale', 8000.00, 13500.00, 26, 275.00, 176.00, 8.00, 80.00, '1994-01-01', NULL, 'active', '2023-10-03 00:09:27', '2023-10-09 00:36:38'),
(10, '5th PayScale', 10000.00, 15200.00, 27, 325.00, 176.00, 8.00, 80.00, '1994-01-01', NULL, 'active', '2023-10-03 00:11:26', '2023-10-03 00:11:26');

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
(63, 'bssaunshi@git.edu', NULL, '$2y$10$WXLLiE9cMJ16URVnKDDz9OH5VDV9TxpqBnNFFGqxRPU38Owm8dztC', 'teaching', 'Active', NULL, '2023-11-28 06:35:37', '2023-11-28 06:35:37');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_rules_longname_unique` (`longname`),
  ADD UNIQUE KEY `leave_rules_shortname_unique` (`shortname`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `book_publications`
--
ALTER TABLE `book_publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `castecategories`
--
ALTER TABLE `castecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combining_leave_rules`
--
ALTER TABLE `combining_leave_rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `department_staff`
--
ALTER TABLE `department_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `designation_ntcpayscale`
--
ALTER TABLE `designation_ntcpayscale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `designation_ntpayscale`
--
ALTER TABLE `designation_ntpayscale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `designation_staff`
--
ALTER TABLE `designation_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ntcpayscale_staff`
--
ALTER TABLE `ntcpayscale_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ntpayscales`
--
ALTER TABLE `ntpayscales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ntpayscale_staff`
--
ALTER TABLE `ntpayscale_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `staff_teaching_payscale`
--
ALTER TABLE `staff_teaching_payscale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tdsheads`
--
ALTER TABLE `tdsheads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teaching_payscales`
--
ALTER TABLE `teaching_payscales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

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
