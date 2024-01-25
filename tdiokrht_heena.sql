-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2024 at 01:35 AM
-- Server version: 10.5.20-MariaDB-cll-lve-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdiokrht_heena`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `image_path` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image_path`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hy', 2, '2023-11-28 10:30:02', '2023-12-03 22:01:47'),
(2, '/assets/media/avatars/blank.png', 2, '2023-11-28 05:30:04', '2023-12-03 22:24:35'),
(3, '/assets/media/avatars/blank.png', 2, '2023-11-28 05:32:12', '2023-12-03 22:01:08'),
(4, '/img/admin/ADMIN_23KUOijQyR.jpg', 2, '2023-12-03 21:58:22', '2023-12-03 23:22:52'),
(5, '/img/admin/ADMIN_qkFe3w9J0F.jpg', 2, '2023-12-03 22:02:00', '2023-12-04 10:59:03'),
(6, '/img/admin/ADMIN_1teIyTR6wc.jpg', 2, '2023-12-03 23:21:41', '2023-12-04 11:03:14'),
(7, '/img/admin/ADMIN_SFlpsjLdQz.jpg', 2, '2023-12-03 23:23:13', '2023-12-04 11:03:19'),
(8, '/img/admin/ADMIN_sIYdx1Hgvh.jpg', 2, '2023-12-04 10:58:34', '2023-12-04 11:24:29'),
(9, '/img/admin/ADMIN_yRCdw38OrZ.jpg', 2, '2023-12-04 11:23:11', '2023-12-04 11:24:20'),
(10, '/img/admin/ADMIN_1IqJaQgf3l.jpg', 2, '2023-12-04 11:25:02', '2023-12-04 11:30:47'),
(11, '/img/admin/ADMIN_agOKEXPIzC.jpg', 2, '2023-12-04 11:31:01', '2023-12-04 11:39:36'),
(12, '/img/admin/ADMIN_gBaR6raDIT.jpg', 2, '2023-12-04 11:32:12', '2023-12-04 11:40:43'),
(13, '/img/admin/Banner_rQlX90rfqv.jpg', 2, '2023-12-04 11:39:51', '2023-12-04 18:00:35'),
(14, '/img/admin/ADMIN_gmFVQYDdpU.jpg', 1, '2023-12-04 11:41:43', '2023-12-04 11:41:43'),
(15, '/img/admin/Banner_mjREojgHlG.jpg', 1, '2023-12-04 13:43:55', '2023-12-04 17:50:33'),
(16, '/img/admin/ADMIN_fOKbc6Lyic.jpg', 1, '2023-12-04 16:30:08', '2023-12-04 16:30:08'),
(17, '/img/admin/Banner_GiEq9QjMGm.jpg', 1, '2023-12-04 18:00:53', '2023-12-04 18:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `stock_no` varchar(15) NOT NULL,
  `title` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_quantity` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `language_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `publication_date` date NOT NULL,
  `edition_id` int(11) NOT NULL,
  `pages_count` int(10) NOT NULL,
  `reading_age_group_id` int(11) NOT NULL,
  `length` decimal(10,2) NOT NULL,
  `width` decimal(10,2) NOT NULL,
  `height` decimal(10,2) NOT NULL,
  `weight` int(10) NOT NULL COMMENT 'weight in gram',
  `isbn_10` text NOT NULL,
  `isbn_13` text NOT NULL,
  `cover_image_path` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=out of stock 1=in stock 2=deleted',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `stock_no`, `title`, `price`, `stock_quantity`, `category_id`, `description`, `language_id`, `publisher_id`, `publication_date`, `edition_id`, `pages_count`, `reading_age_group_id`, `length`, `width`, `height`, `weight`, `isbn_10`, `isbn_13`, `cover_image_path`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HB-1', 'BAMBARA PILLIYA', 810.00, 60, 4, 'එයා ආපු කෙනා පමණයි. ඉතින් ආපු කෙනා නෙමෙයිද යන්න ඕනි කෙනා? ආපු කෙනා නේන්නම් යන්න ඕනි කෙනා. ඒ හින්දම එයා ඇවිත් ගිය කෙනා.', 1, 2, '2022-06-22', 1, 150, 3, 12.00, 10.00, 12.00, 70, '9559964356', '9559964356', '/img/books/book_image_1_1.jpg', 1, '2023-11-21 11:11:53', '2023-11-27 12:50:44'),
(2, 'HB-2', 'KALU THIRAYA', 10.00, 79, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 2, '2022-06-22', 1, 180, 2, 12.00, 10.00, 10.00, 100, '6246416071', '6246416071', '/img/books/book_image_2_1.jpg', 1, '2023-11-21 11:18:07', '2024-01-09 11:22:43'),
(3, 'HB-3', 'ANUNADA', 1620.00, 50, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 2, '2019-06-12', 1, 200, 3, 12.00, 10.00, 12.00, 120, '6245558778', '6245558778', '/img/books/book_image_3_1.jpg', 1, '2023-11-21 11:20:53', '2023-11-21 11:20:53'),
(4, 'HB-4', 'SANTHANA SITHTHAM', 1350.00, 60, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 2, '2022-08-12', 1, 180, 3, 10.00, 12.00, 10.00, 80, '624562634', '624562634', '/img/books/book_image_4_1.jpg', 1, '2023-11-21 11:23:42', '2023-11-21 11:23:42'),
(5, 'HB-5', 'PUNCHI BHUTHAYA', 15.00, 96, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 2, '2021-01-01', 1, 80, 3, 10.00, 12.00, 10.00, 20, '6246447058', '6246447058', '/img/books/book_image_5_1.jpg', 1, '2023-11-21 11:26:54', '2024-01-09 11:22:43'),
(6, 'HB-6', 'PAMAWI PIPUNU MAL', 900.00, 50, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, 2, '2022-02-17', 1, 160, 3, 10.00, 12.00, 10.00, 30, '6245584191', '6245584191', '/img/books/book_image_6_1.jpg', 1, '2023-11-22 16:38:32', '2023-11-22 16:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `book_authors`
--

CREATE TABLE `book_authors` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_authors`
--

INSERT INTO `book_authors` (`id`, `book_id`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-10-11 09:45:50', '2023-11-27 12:50:44'),
(2, 1, 1, '2023-10-11 11:07:26', '2023-11-27 12:50:44'),
(3, 2, 7, '2023-10-11 11:13:18', '2023-11-22 16:35:35'),
(4, 12, 6, '2023-10-25 10:15:33', '2023-10-26 08:11:30'),
(5, 13, 3, '2023-10-26 04:54:45', '2023-11-20 13:23:30'),
(6, 14, 8, '2023-10-31 14:40:55', '2023-11-21 10:29:18'),
(7, 15, 2, '2023-11-21 07:57:15', '2023-11-21 10:42:24'),
(8, 16, 4, '2023-11-21 10:50:18', '2023-11-21 10:50:18'),
(9, 1, 1, '2023-11-21 11:11:53', '2023-11-27 12:50:44'),
(10, 2, 7, '2023-11-21 11:18:07', '2023-11-22 16:35:35'),
(11, 3, 6, '2023-11-21 11:20:53', '2023-11-21 11:20:53'),
(12, 4, 7, '2023-11-21 11:23:42', '2023-11-21 11:23:42'),
(13, 5, 7, '2023-11-21 11:26:54', '2023-11-22 16:35:02'),
(14, 6, 8, '2023-11-22 16:38:32', '2023-11-22 16:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `book_images`
--

CREATE TABLE `book_images` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `image_path` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `book_images`
--

INSERT INTO `book_images` (`id`, `book_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 1, '/img/books/book_image_1_1.jpg', '2023-11-21 11:11:53', '2023-11-21 11:11:53'),
(2, 1, '/img/books/book_image_1_2.jpg', '2023-11-21 11:11:53', '2023-11-21 11:11:53'),
(3, 1, '/img/books/book_image_1_3.jpg', '2023-11-21 11:11:53', '2023-11-21 11:11:53'),
(4, 1, '/img/books/book_image_1_4.jpg', '2023-11-21 11:11:53', '2023-11-21 11:11:53'),
(5, 1, '/img/books/book_image_1_5.jpg', '2023-11-21 11:11:53', '2023-11-21 11:11:53'),
(6, 1, '/img/books/book_image_1_6.jpg', '2023-11-21 11:11:53', '2023-11-21 11:11:53'),
(7, 2, '/img/books/book_image_2_1.jpg', '2023-11-21 11:18:07', '2023-11-22 09:33:57'),
(8, 2, '/img/books/book_image_2_2.jpg', '2023-11-21 11:18:07', '2023-11-22 09:33:57'),
(9, 2, '/img/books/book_image_2_3.jpg', '2023-11-21 11:18:07', '2023-11-22 09:33:57'),
(10, 2, '/img/books/book_image_2_4.jpg', '2023-11-21 11:18:07', '2023-11-22 09:33:57'),
(11, 2, '/img/books/book_image_2_5.jpg', '2023-11-21 11:18:07', '2023-11-22 09:33:57'),
(12, 2, '/img/books/book_image_2_6.jpg', '2023-11-21 11:18:07', '2023-11-22 09:33:57'),
(13, 3, '/img/books/book_image_3_1.jpg', '2023-11-21 11:20:53', '2023-11-21 11:20:53'),
(14, 3, '/img/books/book_image_3_2.jpg', '2023-11-21 11:20:53', '2023-11-21 11:20:53'),
(15, 3, '/img/books/book_image_3_3.jpg', '2023-11-21 11:20:53', '2023-11-21 11:20:53'),
(16, 3, '/img/books/book_image_3_4.jpg', '2023-11-21 11:20:53', '2023-11-21 11:20:53'),
(17, 3, '/img/books/book_image_3_5.jpg', '2023-11-21 11:20:53', '2023-11-21 11:20:53'),
(18, 3, '/img/books/book_image_3_6.jpg', '2023-11-21 11:20:53', '2023-11-21 11:20:53'),
(19, 4, '/img/books/book_image_4_1.jpg', '2023-11-21 11:23:42', '2023-11-21 11:23:42'),
(20, 4, '/img/books/book_image_4_2.jpg', '2023-11-21 11:23:42', '2023-11-21 11:23:42'),
(21, 4, '/img/books/book_image_4_3.jpg', '2023-11-21 11:23:42', '2023-11-21 11:23:42'),
(22, 4, '/img/books/book_image_4_4.jpg', '2023-11-21 11:23:42', '2023-11-21 11:23:42'),
(23, 4, '/img/books/book_image_4_5.jpg', '2023-11-21 11:23:42', '2023-11-21 11:23:42'),
(24, 4, '/img/books/book_image_4_6.jpg', '2023-11-21 11:23:42', '2023-11-21 11:23:42'),
(25, 5, '/img/books/book_image_5_1.jpg', '2023-11-21 11:26:54', '2023-11-21 11:26:54'),
(26, 5, '/img/books/book_image_5_2.jpg', '2023-11-21 11:26:54', '2023-11-21 11:26:54'),
(27, 5, '/img/books/book_image_5_3.jpg', '2023-11-21 11:26:54', '2023-11-21 11:26:54'),
(28, 5, '/img/books/book_image_5_4.jpg', '2023-11-21 11:26:54', '2023-11-21 11:26:54'),
(29, 5, '/img/books/book_image_5_5.jpg', '2023-11-21 11:26:54', '2023-11-21 11:26:54'),
(30, 5, '/img/books/book_image_5_6.jpg', '2023-11-21 11:26:54', '2023-11-21 11:26:54'),
(31, 6, '/img/books/book_image_6_1.jpg', '2023-11-22 16:38:32', '2023-11-22 16:38:32'),
(32, 6, '/img/books/book_image_6_2.jpg', '2023-11-22 16:38:32', '2023-11-22 16:38:32'),
(33, 6, '/img/books/book_image_6_3.jpg', '2023-11-22 16:38:32', '2023-11-22 16:38:32'),
(34, 6, '/img/books/book_image_6_4.jpg', '2023-11-22 16:38:32', '2023-11-22 16:38:32'),
(35, 6, '/img/books/book_image_6_5.jpg', '2023-11-22 16:38:32', '2023-11-22 16:38:32'),
(36, 6, '/img/books/book_image_6_6.jpg', '2023-11-22 16:38:32', '2023-11-22 16:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `city_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Minuwangoda', 1, '2023-10-27 11:50:39', '2023-10-27 11:50:39'),
(2, 1, 'Colombo', 1, '2023-10-27 11:50:39', '2023-10-27 11:50:39'),
(3, 1, 'Kandy', 1, '2023-10-27 11:50:39', '2023-10-27 11:50:39'),
(4, 3, 'Toa Payoh', 1, '2023-10-27 11:50:39', '2023-10-27 11:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `country_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sri Lanka', '+94', 1, '2023-10-27 11:31:05', '2023-10-27 11:31:05'),
(2, 'United Kingdom', '+44', 1, '2023-10-27 11:32:03', '2023-10-27 11:32:03'),
(3, 'Singapore', '+65', 1, '2023-10-27 11:41:15', '2023-10-27 11:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(15) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `contact_no_personal_country_code` varchar(10) NOT NULL,
  `contact_no_personal` varchar(15) NOT NULL,
  `contact_no_office_country_code` varchar(10) NOT NULL,
  `contact_no_office` varchar(15) NOT NULL,
  `billing_address_country_id` int(11) NOT NULL,
  `billing_address_street_address_line_1` text NOT NULL,
  `billing_address_street_address_line_2` text NOT NULL,
  `billing_address_city_id` int(11) NOT NULL,
  `billing_address_state` varchar(255) NOT NULL,
  `billing_address_zip_code` int(10) NOT NULL,
  `shipping_address_country_id` int(11) NOT NULL,
  `shipping_address_street_address_line_1` text NOT NULL,
  `shipping_address_street_address_line_2` text NOT NULL,
  `shipping_address_city_id` int(11) NOT NULL,
  `shipping_address_state` varchar(255) NOT NULL,
  `shipping_address_zip_code` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `first_name`, `last_name`, `email`, `password`, `contact_no_personal_country_code`, `contact_no_personal`, `contact_no_office_country_code`, `contact_no_office`, `billing_address_country_id`, `billing_address_street_address_line_1`, `billing_address_street_address_line_2`, `billing_address_city_id`, `billing_address_state`, `billing_address_zip_code`, `shipping_address_country_id`, `shipping_address_street_address_line_1`, `shipping_address_street_address_line_2`, `shipping_address_city_id`, `shipping_address_state`, `shipping_address_zip_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CUST000001', 'Iresha', 'Perera', 'iresh.enrich@gmail.com', '$2y$10$U8qHB2ITWsyw50Y2NbVi5e5ol0.8A1q3KIOhYyAI0pY7lkUy8SqzW', '+94', '715441123', '+94', '112297856', 1, 'No. 327 A, Opatha', 'Kotugoda', 1, 'Western', 11550, 1, 'No. 327 A, Opatha', 'Kotugoda', 1, 'Western', 11550, 1, '2023-10-18 01:22:46', '2023-10-25 07:32:06'),
(2, 'CUST000001', 'Vishwa', 'Samarathunga', 'vishwa@gmail.com', '$2y$10$EmiwxhoWXHHrqF3K0B8FAOWqxz2tJ4aNOdZ7IhIxW9KH1NX21zYjy', '', '0762889635', '', '', 0, '', '', 0, '', 0, 0, '', '', 0, '', 0, 1, '2023-10-19 14:25:08', '2023-10-19 14:25:08'),
(3, 'CUST000003', 'Navindu', 'Vishwaravi', 'navindu.enrich@gmail.com', '$2y$10$9w8criI/qVVVZoNQP5YM1Om.ZhCx4P7viPWh28rviNhZFVJ7dQhda', '', '07628893651', '', '', 0, '', '', 0, '', 0, 0, '', '', 0, '', 0, 1, '2023-10-23 12:04:22', '2023-10-23 12:04:22'),
(4, 'CUST000004', 'Dewmi', 'Perera', 'dewmi.enrich@gmail.com', '$2y$10$3YBw0HysmiNNp9g.iDeW7OJ8I8wABN/bG1IiBNK/AC9z2pSIOuiE2', '', '0785441223', '', '', 0, '', '', 0, '', 0, 0, '', '', 0, '', 0, 1, '2023-10-26 04:24:22', '2023-10-26 04:24:22'),
(5, 'CUST000005', 'Martina', 'Fernandoz', 'martinafernandoz99@gmail.com', '$2y$10$Dbb6kAVvC3ulPZY02Nu6PuIKeikFhepQudE9d1ojXEz6ahHGvEZaW', '+94', '+94762889123', '+94', '+94112776123', 1, 'No:1114/B2, Green Road', 'Colombo 10', 2, 'Sri Lanka', 15000, 1, 'No:1114/B2, Green Road', 'Colombo 10', 2, 'Sri Lanka', 18000, 1, '2023-10-29 12:27:01', '2023-10-29 12:31:20'),
(6, 'CUST000006', 'Kamal', 'Perera', 'kamal@gmail.com', '$2y$10$udjA2mpoQH.YV2XBzSr3o.0UVsteGCR2m4NEn43JUHH28pn9bnCBi', '+94', '+94762889351', '+94', '+94710682696', 1, 'No:1114/B2, Green Road, Colombo', 'Colombo 10', 2, 'Sri Lanka', 12000, 1, 'No:1114/B2, Green Road', 'Colombo', 2, 'Sri Lanka', 12000, 1, '2023-11-01 15:50:02', '2023-11-01 15:50:02'),
(7, 'CUST000007', 'Anil', 'Silva', 'anil@gmail.com', '$2y$10$ovuwINYQOfznYWsl6h10NO1yBkqIwiCCFgcP8J2W/yzNLuNU5GDCm', '+94', '+94762889351', '+94', '+94112776685', 1, 'No:1114/B2, Green Road, Colombo', 'Colombo 10', 2, 'Sri Lanka', 12000, 1, 'No:1114/B2, Green Road, Colombo', 'Colombo 10', 2, 'Sri Lanka', 12000, 1, '2023-11-17 19:54:40', '2023-11-17 19:54:40'),
(8, 'CUST000008', 'Saman', 'Perera', 'najoj13921@ikanid.com', '$2y$10$msYIUImf3zrgqiGst1AZmeuasz0LavR5oUziqOsOTSh/49b.FehlC', '+94', '+94762889351', '+94', '+94112776685', 1, 'No:1114/B2, Green Road, Wellawaththa', 'Colombo', 2, 'Sri Lanka', 12000, 1, 'No:1114/B2, Green Road, Wellawaththa', 'Colombo', 2, 'Sri Lanka', 12000, 1, '2023-11-20 12:08:03', '2023-11-20 20:03:02'),
(9, 'CUST000009', 'Antonio', 'Perera', 'antonio@gmail.com', '$2y$10$OulhlQ2fxD3VoF6jPBtG/.nwrgg.qrPM9dGLSPXs4OPHULcU0my1q', '+94', '+94762889123', '+94', '+94112776685', 1, 'No:1114/B2, Green Road, Kandy', 'Kandy', 3, 'Sri Lanka', 12000, 1, 'No:1114/B2, Green Road, Kandy', 'Kandy', 3, 'Sri Lanka', 12000, 1, '2023-11-20 20:08:21', '2023-11-20 20:18:57'),
(10, 'CUST000010', 'Nilantha', 'Peries', 'nilantha@gmail.com', '$2y$10$MfIcQTvJmIElLEe8RPPE4.USns.kA7amNZisO36YSsj8yWYq8SyU6', '+94', '+94762889123', '+94', '+94112776123', 1, 'No:1114/B2, Green Road', 'Kandy', 3, 'Sri Lanka', 12000, 1, 'No:1114/B2, Green Road', 'Kandy', 3, 'Sri Lanka', 12000, 1, '2023-11-20 20:23:47', '2023-11-20 20:23:47'),
(11, 'CUST000011', 'Priyankara', 'Silva', 'priyankara@gmail.com', '$2y$10$pUseX6LOcSmfzeCiECaJOO9MtCX0AMrmBYnHQpe829Mp9feVDTPR.', '+94', '762889636', '+94', '112778825', 1, 'No:1114/B2, Green Road', 'Kandy', 3, 'Sri Lanka', 12000, 1, 'No:1114/B2, Green Road', 'Kandy', 3, 'Sri Lanka', 12000, 1, '2023-11-21 08:19:15', '2023-11-21 08:19:15'),
(12, 'CUST000012', 'Tharindu', 'Perera', 'tharindu.enrich@gmail.com', '$2y$10$2J90JbNYB39Nmt65pE32deZIVg444FBO2lWU7w.61qYZ2czanktOK', '+94', '76612707', '+94', '76612707', 1, 'Test address', 'Test Address', 2, 'Western', 11540, 1, 'Test Address', 'Test Address', 2, 'Western', 11540, 1, '2024-01-03 16:31:01', '2024-01-03 16:31:01'),
(13, 'CUST000013', 'Saniru', 'Nethmina', 'saniru@gmail.com', '$2y$10$4d9JCf1Qw4lAeWtkad9UeOLvD0laa8t5hlY2N2Yyk1W7DvMWtWwV.', '+94', '762558596', '+94', '719632589', 1, 'No:1114/B2, Green Road, Colombo', 'Colombo 10', 2, 'Sri Lanka', 12000, 1, 'No:1114/B2, Green Road, Colombo', 'Colombo 10', 2, 'Sri Lanka', 12000, 1, '2024-01-09 09:36:54', '2024-01-09 09:36:54'),
(15, 'CUST000014', 'Alexsandriya', 'Grace', 'alex@gmail.com', '$2y$10$6tcRpy0uSpj8hyQL.3RFBeg1F.Kv3HWwgAvVJEv907jY3sfzDna/2', '+94', '76852963', '+94', '112859636', 1, 'No:1114/B2, Green Road, Colombo', 'Colombo 10', 2, 'Sri Lanka', 12000, 1, 'No:1114/B2, Green Road, Colombo', 'Colombo 10', 2, 'Sri Lanka', 12000, 1, '2024-01-09 11:14:27', '2024-01-09 11:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '	0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `markable_favorites`
--

CREATE TABLE `markable_favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `markable_type` varchar(255) NOT NULL,
  `markable_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `markable_favorites`
--

INSERT INTO `markable_favorites` (`id`, `user_id`, `markable_type`, `markable_id`, `value`, `metadata`, `created_at`, `updated_at`) VALUES
(4, 1, 'App\\Models\\Book', 10, NULL, '[]', '2023-10-24 08:28:32', '2023-10-24 08:28:32'),
(5, 1, 'App\\Models\\Book', 2, NULL, '[]', '2023-10-24 08:32:20', '2023-10-24 08:32:20'),
(7, 1, 'App\\Models\\Book', 1, NULL, '[]', '2023-10-25 21:50:26', '2023-10-25 21:50:26'),
(8, 4, 'App\\Models\\Book', 1, NULL, '[]', '2023-10-26 04:24:42', '2023-10-26 04:24:42'),
(18, 1, 'App\\Models\\Book', 14, NULL, NULL, '2023-11-01 14:44:08', '2023-11-01 14:44:08'),
(22, 5, 'App\\Models\\Book', 1, NULL, NULL, '2023-11-01 15:47:43', '2023-11-01 15:47:43'),
(23, 5, 'App\\Models\\Book', 11, NULL, NULL, '2023-11-01 15:47:51', '2023-11-01 15:47:51'),
(24, 5, 'App\\Models\\Book', 13, NULL, NULL, '2023-11-01 15:48:00', '2023-11-01 15:48:00'),
(25, 6, 'App\\Models\\Book', 14, NULL, NULL, '2023-11-01 15:50:19', '2023-11-01 15:50:19'),
(28, 6, 'App\\Models\\Book', 13, NULL, NULL, '2023-11-01 15:57:05', '2023-11-01 15:57:05'),
(30, 5, 'App\\Models\\Book', 14, NULL, NULL, '2023-11-06 13:55:21', '2023-11-06 13:55:21'),
(33, 11, 'App\\Models\\Book', 5, NULL, NULL, '2023-11-21 11:33:29', '2023-11-21 11:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `master_authors`
--

CREATE TABLE `master_authors` (
  `id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_authors`
--

INSERT INTO `master_authors` (`id`, `author_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tissa Abeysekera', 1, '2023-10-11 06:26:14', '2023-10-11 06:26:14'),
(2, 'Romesh Gunesekera', 1, '2023-10-11 06:26:37', '2023-10-11 06:26:37'),
(3, 'Shehan Karunatilaka', 1, '2023-10-11 06:27:19', '2023-10-11 06:27:19'),
(4, 'Dayananda Amarakon', 1, '2023-10-19 10:36:46', '2023-10-19 10:45:54'),
(5, 'Test Author', 2, '2023-10-19 10:46:58', '2023-10-19 10:47:12'),
(6, 'Martin Wickramasinghe', 1, '2023-10-25 02:48:43', '2023-10-25 02:48:43'),
(7, 'Waris Dirie', 1, '2023-10-26 07:20:41', '2023-10-26 07:20:41'),
(8, 'PAWAN AGASI', 1, '2023-10-31 14:38:28', '2023-10-31 14:38:28'),
(9, 'dfgsfgdfgdfaaaaaa', 2, '2023-11-01 10:00:56', '2023-11-01 10:01:22'),
(10, 'Wathsala Karunarathna', 2, '2023-11-21 08:11:32', '2023-11-21 08:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `master_categories`
--

CREATE TABLE `master_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_categories`
--

INSERT INTO `master_categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fantasy', 1, '2023-10-11 06:16:38', '2023-10-11 06:16:38'),
(2, 'Romance', 1, '2023-10-11 06:30:46', '2023-10-11 06:30:46'),
(3, 'Fiction', 1, '2023-10-11 06:32:02', '2023-10-11 06:32:02'),
(4, 'Novel', 1, '2023-10-19 11:57:46', '2023-10-19 12:02:57'),
(5, 'sdfgdfgvbvcnx fghjfhgjh', 2, '2023-10-19 12:03:21', '2023-10-19 12:03:28'),
(6, 'Adventure', 1, '2023-11-01 10:07:45', '2023-11-01 10:07:45'),
(7, 'dsgdfgfdgddddddddd', 2, '2023-11-01 10:07:53', '2023-11-01 10:08:15'),
(8, 'Horrorrrr', 2, '2023-11-21 08:15:44', '2023-11-21 08:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `master_couriers`
--

CREATE TABLE `master_couriers` (
  `id` int(11) NOT NULL,
  `courier` varchar(255) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_couriers`
--

INSERT INTO `master_couriers` (`id`, `courier`, `contact_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SL Post', '+94758529636', 1, '2023-11-14 16:01:15', '2023-11-14 16:02:18'),
(2, 'Domex', '+940710000123', 1, '2023-11-14 16:02:38', '2023-11-14 16:05:26'),
(3, 'Pronto', '+94762558123', 1, '2023-11-14 16:05:34', '2023-11-14 16:12:06'),
(4, 'UPS', '0768529636', 1, '2023-11-17 10:03:09', '2023-11-17 10:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `master_courier_city_charges`
--

CREATE TABLE `master_courier_city_charges` (
  `id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `delivery_fee` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_courier_city_charges`
--

INSERT INTO `master_courier_city_charges` (`id`, `courier_id`, `country_id`, `city_id`, `delivery_fee`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 2, 450.00, 1, '2023-11-17 10:10:11', '2023-11-17 10:14:48'),
(2, 3, 1, 3, 350.00, 2, '2023-11-17 10:15:35', '2023-11-17 10:16:05'),
(3, 2, 1, 2, 5.00, 1, '2023-11-20 13:17:47', '2023-11-20 13:17:47'),
(4, 1, 1, 3, 400.00, 2, '2023-11-20 20:17:22', '2023-11-20 20:17:40'),
(5, 4, 1, 3, 600.00, 1, '2023-11-20 20:17:54', '2023-11-20 20:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `master_courier_weight_charges`
--

CREATE TABLE `master_courier_weight_charges` (
  `id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `min_weight` int(10) NOT NULL COMMENT 'weight in gram',
  `max_weight` int(10) NOT NULL COMMENT '	weight in gram',
  `rate` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_courier_weight_charges`
--

INSERT INTO `master_courier_weight_charges` (`id`, `courier_id`, `min_weight`, `max_weight`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 250, 5.00, 1, '2023-11-17 10:04:06', '2023-11-17 10:15:53'),
(2, 1, 250, 500, 200.00, 2, '2023-11-17 10:06:01', '2023-11-17 10:06:09'),
(3, 1, 500, 1000, 250.00, 1, '2023-11-20 05:16:38', '2023-11-20 05:16:38'),
(4, 2, 0, 200, 200.00, 1, '2023-11-20 06:54:51', '2023-11-20 06:54:51'),
(5, 2, 200, 500, 300.00, 1, '2023-11-20 06:55:25', '2023-11-20 06:55:25'),
(6, 2, 500, 1000, 400.00, 1, '2023-11-20 06:55:39', '2023-11-20 06:55:39'),
(7, 4, 0, 250, 200.00, 1, '2023-11-20 12:32:18', '2023-11-20 12:32:18'),
(8, 1, 1000, 2000, 300.00, 1, '2023-11-20 13:09:42', '2023-11-20 13:09:42'),
(9, 1, 2000, 3000, 350.00, 1, '2023-11-20 13:10:58', '2023-11-20 13:10:58'),
(10, 4, 500, 1000, 600.00, 1, '2023-11-20 13:21:40', '2023-11-20 13:21:40'),
(11, 4, 1000, 2000, 650.00, 1, '2023-11-20 13:22:38', '2023-11-20 13:22:38'),
(12, 4, 2000, 3000, 700.00, 1, '2023-11-20 13:26:31', '2023-11-20 13:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `master_editions`
--

CREATE TABLE `master_editions` (
  `id` int(11) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_editions`
--

INSERT INTO `master_editions` (`id`, `edition`, `status`, `created_at`, `updated_at`) VALUES
(1, '1st Edition', 1, '2023-10-11 06:21:37', '2023-10-11 06:21:37'),
(2, '2nd Edition', 1, '2023-10-16 10:12:45', '2023-10-16 10:12:45'),
(3, '3rd Edition', 1, '2023-10-19 11:16:44', '2023-10-19 11:20:14'),
(4, 'dfssdvgsdfvbdfv', 2, '2023-10-19 11:20:31', '2023-10-19 11:20:38'),
(5, 'aaaaaaaaabbbbbbbb', 2, '2023-11-01 10:03:17', '2023-11-01 10:03:44'),
(6, '4th edition', 2, '2023-11-21 08:13:52', '2023-11-21 08:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `master_languages`
--

CREATE TABLE `master_languages` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_languages`
--

INSERT INTO `master_languages` (`id`, `language`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sinhala', 1, '2023-10-11 06:21:59', '2023-10-11 06:21:59'),
(2, 'Tamil', 1, '2023-10-11 06:33:09', '2023-10-11 06:33:09'),
(3, 'English', 1, '2023-10-12 07:13:46', '2023-10-12 07:13:46'),
(4, 'French', 2, '2023-10-19 11:31:15', '2023-11-20 20:01:16'),
(5, 'dfgdsgdfgf', 2, '2023-10-19 11:35:36', '2023-10-19 11:35:42'),
(6, 'dgfg gfhfghqqqqq', 2, '2023-11-01 10:04:00', '2023-11-01 10:04:25'),
(7, 'Frenchfsgdfg', 2, '2023-11-21 08:14:34', '2023-11-21 08:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `master_publishers`
--

CREATE TABLE `master_publishers` (
  `id` int(11) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_publishers`
--

INSERT INTO `master_publishers` (`id`, `publisher_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Malpiyali Books Publishers', 1, '2023-10-11 06:23:03', '2023-10-11 06:23:03'),
(2, 'Sarasavi Book Publishers', 1, '2023-10-11 06:24:19', '2023-10-11 06:24:19'),
(3, 'Vijitha Yapa Book Publishers', 1, '2023-10-11 06:25:02', '2023-10-11 06:25:02'),
(4, 'Kathru Prakashana', 1, '2023-10-19 10:51:48', '2023-10-19 11:11:18'),
(5, 'dsfsadfsdf', 2, '2023-10-19 11:12:09', '2023-10-19 11:12:15'),
(6, 'Kathru Prakashana', 1, '2023-10-31 14:38:44', '2023-11-01 09:13:04'),
(7, 'test testaaaaa', 2, '2023-11-01 10:02:22', '2023-11-01 10:03:00'),
(8, 'Sankha Book Shopdfgsdfgdfg', 2, '2023-11-21 08:13:01', '2023-11-21 08:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `master_reading_age_groups`
--

CREATE TABLE `master_reading_age_groups` (
  `id` int(11) NOT NULL,
  `reading_age_group` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_reading_age_groups`
--

INSERT INTO `master_reading_age_groups` (`id`, `reading_age_group`, `status`, `created_at`, `updated_at`) VALUES
(1, '0 - 2 years', 1, '2023-10-11 06:23:25', '2023-10-11 06:23:25'),
(2, '3 - 13 Years', 1, '2023-10-11 06:33:30', '2023-10-11 06:33:30'),
(3, '18 - 24 Years', 1, '2023-10-19 11:43:28', '2023-10-19 11:49:59'),
(4, 'ghdfhgdfgh', 2, '2023-10-19 11:50:47', '2023-10-19 11:50:56'),
(5, '25 - 35', 2, '2023-11-01 10:06:50', '2023-11-01 10:07:16'),
(6, '30 - 55', 2, '2023-11-21 08:15:03', '2023-11-21 08:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_books`
--

CREATE TABLE `ordered_books` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total_price` float(10,2) NOT NULL COMMENT 'total price=price*quantity',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered_books`
--

INSERT INTO `ordered_books` (`id`, `order_id`, `book_id`, `quantity`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, 15.00, '2024-01-09 11:22:43', '2024-01-09 11:22:43'),
(2, 1, 2, 1, 10.00, '2024-01-09 11:22:43', '2024-01-09 11:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `payhere_order_id` varchar(20) DEFAULT NULL,
  `ordered_date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `delivery_fee` decimal(10,2) NOT NULL,
  `processing_fee` decimal(10,2) NOT NULL DEFAULT 0.00,
  `net_total` decimal(10,2) NOT NULL,
  `delivery_method` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=rejected, 1=new, 2=processing, 3=dispatched, 4=completed',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `payhere_order_id`, `ordered_date`, `customer_id`, `sub_total`, `delivery_fee`, `processing_fee`, `net_total`, `delivery_method`, `status`, `created_at`, `updated_at`) VALUES
(1, '659ce576d68e1', '2024-01-09 06:22:43', 12, 25.00, 5.00, 1.03, 31.03, 1, 1, '2024-01-09 11:22:43', '2024-01-09 11:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('iresh.enrich@gmail.com', 'ZFyvuIPLPBfxrfGSDbZupXM0XUdGTeVIuHQqm3tQSqUEiWrkq3XQRZbs6tJvAX2z', '2023-10-31 11:00:16'),
('iresh.enrich@gmail.com', 'PnQDtgLCsRN9PLsdyLJdOLUuQDovRBOA9vpZ1PFGB3ke3aDUBRO3ZFti0L4r3QPo', '2023-10-31 11:52:59'),
('iresh.enrich@gmail.com', 'dhgIuEqq2G3TYL1UJKme6ML6u496bFBLOVxqFUe1mh7VgUqyqAWLJNsn7VYZWuZR', '2023-10-31 12:48:31'),
('iresh.enrich@gmail.com', 'qQpdgmoX388llyjb99tjgt9t0Z1M8JQ8xf00SMAnaysiVBFp1XZIT3kNhgEExqzB', '2023-10-31 12:56:10'),
('iresh.enrich@gmail.com', 'JuJrCVOeZdqvkIrOanKbZj6i9PgVtuF8wMq8zRaIV2ehGvzSAdJ6OHEp4fkemV52', '2023-10-31 13:01:30'),
('iresh.enrich@gmail.com', 'Bjnv5aBt8tzKPIx9t8tb9XSrDVy2Kbrb636AGub1aBJg3NJ3d6AMXqomGdvJijcD', '2023-10-31 13:04:54'),
('iresh.enrich@gmail.com', 'HtHxsFUlrkWW3ipMA9vJUNXiGCKTjKsvyEvCpcahavtVZp1paHnpJh9uRMPc7Mpg', '2023-10-31 14:18:31'),
('iresh.enrich@gmail.com', 'o63dLn8uyh9q2LdoQTa9HWcGgakeqRLNSEAAKRmPkutj12J4KAy5Ie6j9Dp9qkkz', '2023-11-01 11:33:22'),
('navindu.enrich@gmail.com', 'KeNocFQZXIE8VnnYcTY08SuKgBEQhigy0sH7rrcPrqmkICWOWt61JCvWxzEXflwc', '2023-11-06 15:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payhere_order_id` varchar(20) DEFAULT NULL,
  `payment_id` text DEFAULT NULL,
  `payhere_amount` varchar(10) DEFAULT NULL,
  `payhere_currency` varchar(10) DEFAULT NULL,
  `status_code` varchar(5) DEFAULT NULL COMMENT '2 = success, 0 = pending, -1 = canceled, -2 = failed, -3 = chargedback',
  `md5sig` text DEFAULT NULL,
  `method` varchar(20) DEFAULT NULL,
  `card_holder_name` text DEFAULT NULL,
  `card_no` varchar(50) DEFAULT NULL,
  `card_expiry` varchar(20) DEFAULT NULL,
  `status_message` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payhere_order_id`, `payment_id`, `payhere_amount`, `payhere_currency`, `status_code`, `md5sig`, `method`, `card_holder_name`, `card_no`, `card_expiry`, `status_message`, `created_at`, `updated_at`) VALUES
(1, '659ce576d68e1', '320040669933', '31.03', 'LKR', '2', 'C47C9DE2250FBFF2FD21047880D22E4D', 'VISA', 'D J S S Opatha', '************8949', '0926', 'Successfully received the VISA payment', '2024-01-09 06:22:37', '2024-01-09 06:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `photo` text NOT NULL DEFAULT '/assets/media/avatars/blank.png',
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@black.com', '2023-09-22 07:02:58', '$2y$10$QoGc76BzBKPxl8SldTg87.CF0w.rJlZNFwNl8SbneZv74zX8A0FeW', NULL, '/assets/media/avatars/blank.png', 1, '2023-09-22 07:02:58', '2023-09-25 01:15:08'),
(4, 'sdadas', 'admin2@black.com', NULL, '$2y$10$/0xqf4JDZmELwyS65IIIbeIQX5xiTokRxesR9Hoda1HYSo8fhmjlu', NULL, '/assets/media/avatars/blank.png', 2, '2023-09-24 22:35:28', '2023-09-25 00:59:11'),
(6, 'nimesh', 'sdfsdasdasdf@asdasd', NULL, '$2y$10$hNQU/knifWhNk4k2NBfbaOa57GtEq/CLsqW1.XXFB7KKBXcPTkThe', NULL, '/assets/media/avatars/blank.png', 2, '2023-09-24 23:34:56', '2023-09-25 00:59:16'),
(7, 'nimesh', 'admin3@black.com', NULL, '$2y$10$EG64sreDL69vYisij4A/t.JxZ/srewJ0FEb0pFO.5KO6SjNpc1yIi', NULL, '/assets/media/avatars/blank.png', 1, '2023-09-24 23:53:36', '2023-09-24 23:53:36'),
(8, 'wefrewsfsd', 'adminsdfsdf@black.com', NULL, '$2y$10$htJjI0UO9Omat3dEG0gueu0SH4JJsORaaVpp4iFjINDtxsboCSEUm', NULL, '/assets/media/avatars/blank.png', 2, '2023-09-25 04:43:49', '2023-09-25 04:44:00'),
(9, 'Navindu Vishwaravi Samarathunga', 'navindu.enrich@gmail.com', NULL, '$2y$10$Fi5O4wyCxpdR019qcSJNyu6ti2SFQcfWtoKc.xcXZnNJ1GUn4P8m.', NULL, '/assets/media/avatars/blank.png', 1, '2023-09-27 20:52:50', '2023-11-01 08:38:33'),
(10, 'Test User', 'testuser@gmail.com', NULL, '$2y$10$P4pjTwtqyO.JgjwwInZi1.pJnP6BEtB0JYX.A172v7Ye8JbobK3pK', NULL, '/assets/media/avatars/blank.png', 2, '2023-09-27 21:05:44', '2023-09-27 21:05:51'),
(11, 'test', 'test@gmail.com', NULL, '$2y$10$uHbsDia4gMSbKMw/anyzY.AL.MOfCONLjbNxXnBwu5633J4ZwCdfC', NULL, '/assets/media/avatars/blank.png', 2, '2023-10-06 10:15:40', '2023-10-18 15:45:25'),
(12, 'blabla', 'ghghg@gmail.com', NULL, '$2y$10$Bp8v02Ss.2hbo2Wrm8JN.OGZOTYr4J8/X24yul5fAryTjoXLzB1wq', NULL, '/assets/media/avatars/blank.png', 2, '2023-10-06 10:38:04', '2023-10-06 10:39:05'),
(13, 'ddw', 'dhud@gmail.com', NULL, '$2y$10$TLgUVHFFaMguBOEBQYG3a.JpfN7pa9Dgu8xoECBzaOqOdVE2WMtfi', NULL, '/assets/media/avatars/blank.png', 2, '2023-10-06 10:46:36', '2023-10-06 10:49:12'),
(14, 'sachini', 'sachini@gmail.com', NULL, '$2y$10$8JGrITJ5wefAPrc812Klaexe/qe0d08NOXAAha/2V/ByGHOe.Xaya', NULL, '/assets/media/avatars/blank.png', 2, '2023-10-06 10:47:11', '2023-10-06 11:24:57'),
(15, 'test user', 'iresh.enrich@gmail.com', NULL, '$2y$10$OpViOZHCZ7xANroMicU7aOIjJPW4vpL5OH2JP0P7XT43y/uz7fhMS', NULL, '/assets/media/avatars/blank.png', 2, '2023-10-06 13:55:13', '2023-10-18 15:45:21'),
(16, 'Alex Alex 2', 'alex@gmail.com', NULL, '$2y$10$KJj7z9pPRFrW4beo/wa6PO7elZ/kcEPZ0dTVeOBaM3olIBizW.HSG', NULL, '/assets/media/avatars/blank.png', 2, '2023-10-18 15:38:50', '2023-11-01 10:08:52'),
(17, 'Test User New', 'tu@gmail.com', NULL, '$2y$10$hA7UU45JY2DaX41nuD.ni.zLoIt7G6k3aoZhakoijPk6zgQkXOBHO', NULL, '/assets/media/avatars/blank.png', 2, '2023-10-31 14:44:29', '2023-11-20 19:59:49'),
(18, 'Kamaldddd', 'kamal@gmail.com', NULL, '$2y$10$aTynT.78gHyCsr6TaYgQ9.OwVJufHQk/TA0GML3osk0FuaL29iEIi', NULL, '/assets/media/avatars/blank.png', 2, '2023-11-21 08:34:32', '2023-11-21 08:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `id` int(11) NOT NULL,
  `stock_no` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `body_type` int(11) DEFAULT NULL,
  `make` int(11) DEFAULT NULL,
  `model` int(11) DEFAULT NULL,
  `transmission` int(11) DEFAULT NULL,
  `fuel` int(11) DEFAULT NULL,
  `exterior_color` int(11) DEFAULT NULL,
  `chassis_no` varchar(20) DEFAULT NULL,
  `drive` tinyint(4) DEFAULT NULL COMMENT '0=right hand, 1=left hand',
  `mileage` text DEFAULT NULL,
  `manufacture_year` varchar(10) DEFAULT NULL,
  `seating_capacity` int(11) DEFAULT NULL,
  `twd_fwd` tinyint(4) DEFAULT NULL COMMENT '0=2wd, 1=4wd',
  `doors` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `engine_capacity` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `fob_price` decimal(10,2) DEFAULT NULL,
  `main_image_path` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0=coming soon, 1=on order, 2=now on sale',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`id`, `stock_no`, `title`, `type`, `body_type`, `make`, `model`, `transmission`, `fuel`, `exterior_color`, `chassis_no`, `drive`, `mileage`, `manufacture_year`, `seating_capacity`, `twd_fwd`, `doors`, `length`, `width`, `height`, `weight`, `engine_capacity`, `remark`, `fob_price`, `main_image_path`, `status`, `created_at`, `updated_at`) VALUES
(119, 'JP-1', 'red car', 5, 2, 8, 8, 1, 1, 7, '123123', 0, '123123', '1990', 123123, 0, 123, 12, 123, 123, 123, 123, 'sdfsdfsdf', 123123.00, '/img/vehicles/vehicle_image_main_5L2kw7KamhFcaZG119_1.jpg', 1, '2023-09-26 22:44:16', '2023-10-06 13:52:01'),
(120, 'JP-120', 'qweqwe', 6, 3, 2, 2, 2, 1, 5, '123', 0, '123', '2020', 123, 0, 123, 123, 123, 123, 200, 123, 'bla bla bla', 1212.00, '/img/vehicles/vehicle_image_main_wOe54xpWu8fnyHm120_1.jpg', 1, '2023-09-26 23:22:07', '2023-10-06 14:06:09'),
(121, 'JP-121', 'qweqwe', 4, 2, 2, 2, NULL, 1, 2, '123', 0, '123', '2022', 123, 0, 123, 123, 123, 123, 123, 123, 'sadsada', 123123.00, '/img/vehicles/vehicle_image_main_121_1.jpg', 2, '2023-09-26 23:22:36', '2023-10-05 12:34:12'),
(122, 'JP-122', 'uyuygui', 3, 2, 2, 2, NULL, 1, 2, '123123', 0, '123123', '1996', 123123, 0, 12312, 123, 123123, 12312, 12312, 3123, 'asdfasdasddasdasdqwd asdasd\r\nasdasd\r\nasdasd\r\n\r\nasdasd', 123.00, '/img/vehicles/vehicle_image_main_DD3CIh8VPDHNfFw122_1.jpg', 2, '2023-09-26 23:27:56', '2023-10-05 12:34:57'),
(123, 'JP-1', 'asdwdasd', 3, 2, 2, 2, 2, 1, 2, '123123', 0, '123123', '1978', 123123, 0, 123, 12, 123, 123, 123, 123, 'werwer', 123123.00, '/img/vehicles/vehicle_image_main_RsJXI655NTKgFqu123_1.jpg', 2, '2023-09-27 00:07:53', '2023-10-05 12:28:30'),
(124, 'JP-124', 'Land Rover Freelander 2 SE', 4, 2, 201, 120, NULL, 9, 6, 'CHASSI-123456', 0, '25000', '2018', 6, 1, 6, 1400, 850, 700, 1600, 1800, 'Test Remark 1, Test Remark 2, Test Remark 3', 16000.00, '/img/vehicles/vehicle_image_main_6vg9TGPtuYdZltL124_1.jpg', 2, '2023-09-27 19:41:39', '2023-10-05 12:34:41'),
(125, 'JP-125', 'aczxc', 1, 1, 2, 2, 29, 1, 2, '123123', 0, '123123', '2000', 123, 0, 123123, 123, 12312, 12312, 123, 123123, 'asdsadasd1', 1231.00, '/img/vehicles/vehicle_image_main_5VjRu5GcvOUP0hk125_1.jpg', 2, '2023-10-03 12:34:52', '2023-10-05 12:28:27'),
(126, 'JP-126', 'qweqweqwe', 1, 1, 2, 2, 4, 1, 2, '121', 0, '1212', '2000', 12, 0, 1, 21, 21, 21, 1231, 12312, 'adsasd', 12312.00, '/img/vehicles/vehicle_image_main_f1T1l20tm0Q3UeO126_1.png', 2, '2023-10-03 13:40:57', '2023-10-05 12:28:23'),
(127, 'JP-127', 'Toyota Harrier 2013/12 Elegance', 6, 4, 2, 2, 1, 5, 5, 'CHASSI-123', 0, '25000', '2013', 5, 0, 5, 1450, 650, 700, 1500, 2000, 'Test Remark 1, Test Remark 2, Test Remark 3', 16101.00, '/img/vehicles/vehicle_image_main_127_1.jpg', 1, '2023-10-05 07:47:09', '2023-10-06 14:06:39'),
(128, 'JP-128', 'test', 6, 2, 4, 5, 1, 1, 6, '10101110101', 0, '1000', '10101', 10, 1, 4, 1000, 100, 100000, 1000, 10000, 'test', 100.00, '/img/vehicles/vehicle_image_main_128_1.jpg', 2, '2023-10-06 09:56:39', '2023-10-06 14:20:00'),
(129, 'JP-129', 'test02', 1, 1, 2, 2, 1, 1, 2, '1011', 0, '10', '10', 10, 0, 10, 10, 10, 101, 10, 10, 'test', 1010.00, NULL, 2, '2023-10-06 10:03:15', '2023-10-06 10:07:30'),
(130, 'JP-130', 'Toyota', 24, 38, 5, 120, 2, 9, 5, '3424', 0, '3424', '56456', 5, 1, 4, 6456, 353, 53, 7676, 4355, 'gdfgdgdgd', 13.00, '/img/vehicles/vehicle_image_main_uB7i36seVhLBud6130_1.jpg', 2, '2023-10-06 10:09:52', '2023-10-06 10:11:57'),
(131, 'JP-131', 'tryt', 5, 2, 5, 4, 3, 2, 4, '56556', 0, '465345', '45354', 4454, 1, 4, 4555544, 4554, 5654, 56565, 5656, 'hfghfghfghfghfgh', 6565.00, NULL, 2, '2023-10-06 10:15:34', '2023-10-06 10:16:05'),
(132, 'JP-131', 'tryt', 5, 2, 5, 4, 3, 2, 4, '56556', 0, '465345', '45354', 4454, 1, 4, 4555544, 4554, 5654, 56565, 5656, 'hfghfghfghfghfgh', 6565.00, '/img/vehicles/vehicle_image_main_132_1.jpg', 2, '2023-10-06 10:15:37', '2023-10-06 10:16:08'),
(133, 'JP-131', 'tryt', 5, 2, 5, 4, 3, 2, 4, '56556', 0, '465345', '45354', 4454, 1, 4, 4555544, 4554, 5654, 56565, 5656, 'hfghfghfghfghfgh', 6565.00, '/img/vehicles/vehicle_image_main_133_1.jpg', 2, '2023-10-06 10:15:39', '2023-10-06 10:16:14'),
(134, 'JP-131', 'tryt', 6, 2, 13, 2, 3, 2, 5, '56556', 0, '465345', '45354', 4454, 1, 4, 4555544, 4554, 5654, 56565, 5656, 'hfghfghfghfghfgh', 6565.00, '/img/vehicles/vehicle_image_main_134_1.jpg', 1, '2023-10-06 10:15:43', '2023-10-06 15:46:38'),
(135, 'JP-135', 'tyyt', 9, 4, 7, 5, 2, 3, 4, '5345', 1, '4543545', '45', 5, 0, 5, 243423, 444, 2342, 23424, 242342, 'hjftty5556', 5555.00, '/img/vehicles/vehicle_image_main_135_1.jpg', 2, '2023-10-06 10:29:48', '2023-10-06 12:19:36'),
(136, 'JP-136', 'Sint molestiae imped', 13, 1, 1822, 91, 32, 11, 80, 'Nisi et voluptatem e', 1, '45', '2005', 1000, 0, 99, 28, 63, 93, 11, 7, 'Deleniti quasi est', 705.00, '/img/vehicles/vehicle_image_main_136_1.jpeg', 2, '2023-10-06 11:21:37', '2023-10-06 14:19:56'),
(137, 'JP-137', 'Test Vehicle', 4, 2, 68, 4, 2, 5, 5, 'CHASS123654', 0, '125000', '2020', 5, 0, 5, 750, 8000, 600, 1500, 2000, 'Test', 2000.00, '/img/vehicles/vehicle_image_main_137_1.png', 1, '2023-10-06 15:49:30', '2023-10-06 15:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_options`
--

CREATE TABLE `vehicle_options` (
  `id` int(11) NOT NULL,
  `vehicle_detail_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle_options`
--

INSERT INTO `vehicle_options` (`id`, `vehicle_detail_id`, `option_id`, `created_at`, `updated_at`) VALUES
(53, 57, 1, '2023-08-10 05:36:37', '2023-06-09 07:47:41'),
(54, 57, 4, '2023-08-10 05:36:43', '2023-06-09 07:47:41'),
(55, 57, 5, '2023-08-10 05:36:49', '2023-06-09 07:47:41'),
(61, 22, 1, '2023-06-09 10:34:41', '2023-06-09 10:34:41'),
(62, 22, 4, '2023-06-09 10:34:41', '2023-06-09 10:34:41'),
(63, 22, 5, '2023-06-09 10:34:41', '2023-06-09 10:34:41'),
(70, 5, 1, '2023-06-20 16:56:15', '2023-06-20 16:56:15'),
(110, 121, 1, '2023-09-27 14:51:28', '2023-09-27 14:51:28'),
(111, 121, 5, '2023-09-27 14:51:28', '2023-09-27 14:51:28'),
(153, 122, 1, '2023-09-27 15:24:58', '2023-09-27 15:24:58'),
(154, 122, 2, '2023-09-27 15:24:58', '2023-09-27 15:24:58'),
(155, 122, 6, '2023-09-27 15:24:58', '2023-09-27 15:24:58'),
(156, 122, 10, '2023-09-27 15:24:58', '2023-09-27 15:24:58'),
(157, 122, 12, '2023-09-27 15:24:58', '2023-09-27 15:24:58'),
(158, 122, 14, '2023-09-27 15:24:58', '2023-09-27 15:24:58'),
(159, 122, 18, '2023-09-27 15:24:58', '2023-09-27 15:24:58'),
(317, 124, 1, '2023-09-27 20:43:28', '2023-09-27 20:43:28'),
(318, 124, 2, '2023-09-27 20:43:28', '2023-09-27 20:43:28'),
(319, 124, 3, '2023-09-27 20:43:28', '2023-09-27 20:43:28'),
(320, 124, 4, '2023-09-27 20:43:28', '2023-09-27 20:43:28'),
(321, 124, 5, '2023-09-27 20:43:28', '2023-09-27 20:43:28'),
(322, 124, 6, '2023-09-27 20:43:28', '2023-09-27 20:43:28'),
(323, 124, 7, '2023-09-27 20:43:28', '2023-09-27 20:43:28'),
(324, 124, 8, '2023-09-27 20:43:28', '2023-09-27 20:43:28'),
(373, 125, 1, '2023-10-03 13:37:30', '2023-10-03 13:37:30'),
(374, 125, 5, '2023-10-03 13:37:30', '2023-10-03 13:37:30'),
(381, 123, 1, '2023-10-03 13:38:37', '2023-10-03 13:38:37'),
(382, 123, 5, '2023-10-03 13:38:37', '2023-10-03 13:38:37'),
(383, 123, 9, '2023-10-03 13:38:37', '2023-10-03 13:38:37'),
(384, 126, 1, '2023-10-03 14:01:27', '2023-10-03 14:01:27'),
(385, 126, 5, '2023-10-03 14:01:27', '2023-10-03 14:01:27'),
(424, 129, 5, '2023-10-06 10:07:30', '2023-10-06 10:07:30'),
(432, 130, 3, '2023-10-06 10:11:23', '2023-10-06 10:11:23'),
(433, 130, 11, '2023-10-06 10:11:23', '2023-10-06 10:11:23'),
(434, 130, 15, '2023-10-06 10:11:23', '2023-10-06 10:11:23'),
(435, 130, 19, '2023-10-06 10:11:23', '2023-10-06 10:11:23'),
(436, 130, 23, '2023-10-06 10:11:23', '2023-10-06 10:11:23'),
(437, 130, 27, '2023-10-06 10:11:23', '2023-10-06 10:11:23'),
(438, 130, 31, '2023-10-06 10:11:23', '2023-10-06 10:11:23'),
(467, 135, 10, '2023-10-06 10:29:48', '2023-10-06 10:29:48'),
(468, 135, 11, '2023-10-06 10:29:48', '2023-10-06 10:29:48'),
(469, 135, 19, '2023-10-06 10:29:48', '2023-10-06 10:29:48'),
(534, 119, 1, '2023-10-06 13:52:01', '2023-10-06 13:52:01'),
(535, 119, 5, '2023-10-06 13:52:01', '2023-10-06 13:52:01'),
(536, 119, 9, '2023-10-06 13:52:01', '2023-10-06 13:52:01'),
(537, 119, 13, '2023-10-06 13:52:01', '2023-10-06 13:52:01'),
(538, 136, 2, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(539, 136, 3, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(540, 136, 6, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(541, 136, 7, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(542, 136, 12, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(543, 136, 16, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(544, 136, 17, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(545, 136, 18, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(546, 136, 19, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(547, 136, 20, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(548, 136, 21, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(549, 136, 26, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(550, 136, 27, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(551, 136, 28, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(552, 136, 31, '2023-10-06 13:54:37', '2023-10-06 13:54:37'),
(553, 120, 3, '2023-10-06 14:06:09', '2023-10-06 14:06:09'),
(554, 120, 11, '2023-10-06 14:06:09', '2023-10-06 14:06:09'),
(555, 120, 13, '2023-10-06 14:06:09', '2023-10-06 14:06:09'),
(556, 120, 21, '2023-10-06 14:06:09', '2023-10-06 14:06:09'),
(557, 120, 25, '2023-10-06 14:06:09', '2023-10-06 14:06:09'),
(558, 120, 27, '2023-10-06 14:06:09', '2023-10-06 14:06:09'),
(559, 120, 31, '2023-10-06 14:06:09', '2023-10-06 14:06:09'),
(560, 127, 1, '2023-10-06 14:06:39', '2023-10-06 14:06:39'),
(561, 127, 2, '2023-10-06 14:06:39', '2023-10-06 14:06:39'),
(562, 127, 3, '2023-10-06 14:06:39', '2023-10-06 14:06:39'),
(563, 127, 4, '2023-10-06 14:06:39', '2023-10-06 14:06:39'),
(564, 127, 5, '2023-10-06 14:06:39', '2023-10-06 14:06:39'),
(565, 127, 6, '2023-10-06 14:06:39', '2023-10-06 14:06:39'),
(566, 128, 1, '2023-10-06 14:08:08', '2023-10-06 14:08:08'),
(567, 128, 2, '2023-10-06 14:08:08', '2023-10-06 14:08:08'),
(568, 128, 15, '2023-10-06 14:08:08', '2023-10-06 14:08:08'),
(569, 128, 23, '2023-10-06 14:08:08', '2023-10-06 14:08:08'),
(570, 128, 32, '2023-10-06 14:08:08', '2023-10-06 14:08:08'),
(592, 134, 4, '2023-10-06 15:46:38', '2023-10-06 15:46:38'),
(593, 134, 12, '2023-10-06 15:46:38', '2023-10-06 15:46:38'),
(594, 134, 16, '2023-10-06 15:46:38', '2023-10-06 15:46:38'),
(595, 134, 20, '2023-10-06 15:46:38', '2023-10-06 15:46:38'),
(596, 134, 24, '2023-10-06 15:46:38', '2023-10-06 15:46:38'),
(597, 134, 28, '2023-10-06 15:46:38', '2023-10-06 15:46:38'),
(598, 134, 32, '2023-10-06 15:46:38', '2023-10-06 15:46:38'),
(599, 137, 1, '2023-10-06 15:49:30', '2023-10-06 15:49:30'),
(600, 137, 2, '2023-10-06 15:49:30', '2023-10-06 15:49:30'),
(601, 137, 3, '2023-10-06 15:49:30', '2023-10-06 15:49:30'),
(602, 137, 5, '2023-10-06 15:49:30', '2023-10-06 15:49:30'),
(603, 137, 6, '2023-10-06 15:49:30', '2023-10-06 15:49:30'),
(604, 137, 7, '2023-10-06 15:49:30', '2023-10-06 15:49:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_authors`
--
ALTER TABLE `book_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_images`
--
ALTER TABLE `book_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markable_favorites`
--
ALTER TABLE `markable_favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `markable_favorites_user_id_foreign` (`user_id`),
  ADD KEY `markable_favorites_markable_type_markable_id_index` (`markable_type`,`markable_id`);

--
-- Indexes for table `master_authors`
--
ALTER TABLE `master_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_categories`
--
ALTER TABLE `master_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_couriers`
--
ALTER TABLE `master_couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_courier_city_charges`
--
ALTER TABLE `master_courier_city_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_courier_weight_charges`
--
ALTER TABLE `master_courier_weight_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_editions`
--
ALTER TABLE `master_editions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_languages`
--
ALTER TABLE `master_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_publishers`
--
ALTER TABLE `master_publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_reading_age_groups`
--
ALTER TABLE `master_reading_age_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_books`
--
ALTER TABLE `ordered_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_options`
--
ALTER TABLE `vehicle_options`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book_authors`
--
ALTER TABLE `book_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `book_images`
--
ALTER TABLE `book_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `markable_favorites`
--
ALTER TABLE `markable_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `master_authors`
--
ALTER TABLE `master_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master_categories`
--
ALTER TABLE `master_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_couriers`
--
ALTER TABLE `master_couriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_courier_city_charges`
--
ALTER TABLE `master_courier_city_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_courier_weight_charges`
--
ALTER TABLE `master_courier_weight_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `master_editions`
--
ALTER TABLE `master_editions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_languages`
--
ALTER TABLE `master_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_publishers`
--
ALTER TABLE `master_publishers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_reading_age_groups`
--
ALTER TABLE `master_reading_age_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ordered_books`
--
ALTER TABLE `ordered_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `vehicle_options`
--
ALTER TABLE `vehicle_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
