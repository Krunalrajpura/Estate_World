-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2025 at 09:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estate-world`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_number` varchar(20) DEFAULT NULL,
  `a_pass` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`a_id`, `a_name`, `a_email`, `a_number`, `a_pass`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '9090909090', '$2y$10$AkbSSl7CV603OmU72XZqj.XogVDdLGSRr9.I.pjHU.fI8ynCLikdi', '2024-07-31 05:23:46', '2024-07-31 05:23:46'),
(2, 'Krunal Rajpura', 'krunal@gmail.com', '8849234410', '$2y$10$AkbSSl7CV603OmU72XZqj.XogVDdLGSRr9.I.pjHU.fI8ynCLikdi', '2024-07-31 05:24:42', '2025-02-05 10:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_number` varchar(20) DEFAULT NULL,
  `c_pass` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`c_id`, `c_name`, `c_email`, `c_number`, `c_pass`, `created_at`, `updated_at`) VALUES
(1, 'Krunal Soni', 'krunalrajpura123@gmail.com', '8849234410', '$2y$10$ZOFBHNAX30ifWRiy97Nu0.k6eVw2T5bhs0CDcP37iuiXzIVIUCH3G', '2024-07-31 15:57:55', '2024-07-31 15:57:55'),
(2, 'Krunal Soni', 'priyankarajpura2011@gmail.com', '8849234410', '$2y$10$QpSonliC88cY6LXaaBgC7uFscPk.NZvKqvzIelLiGxR78ICAiWby6', '2024-12-12 06:56:06', '2024-12-12 06:56:06'),
(3, 'akshar', 'akshar@gmail.com', '8849234410', '$2y$10$Tv9.5.l/aKWVSNhVxcF4KuCm.vvI.5G1IQLKD/6TpsxEebdmlLb06', '2025-01-20 15:16:53', '2025-01-20 15:16:53'),
(4, 'prajapati dhruv m', 'dhruvprajapati5536@gmail.com', '9998974156', '$2y$10$2Qzwxr3ei2oGV47qD/LYpuuYJIleUNABeugNVf7ouXGKA2b7M/TNu', '2025-01-21 05:16:41', '2025-01-21 05:16:41'),
(5, 'himanshu', 'himanshu@gmail.com', '1234567890', '$2y$10$k009rsVXhsT823ldE5905ulyr.ZHapn6132zqlAcyxxk2KWKS5J/u', '2025-02-18 07:38:26', '2025-02-18 07:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_districts`
--

CREATE TABLE `tbl_districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_districts`
--

INSERT INTO `tbl_districts` (`district_id`, `district_name`, `state_id`) VALUES
(1, 'District A', 1),
(2, 'District B', 1),
(3, 'District C', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plans_details`
--

CREATE TABLE `tbl_plans_details` (
  `pl_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `card_num` varchar(20) NOT NULL,
  `exp_date` date NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `amount` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_plans_details`
--

INSERT INTO `tbl_plans_details` (`pl_id`, `c_id`, `o_name`, `card_num`, `exp_date`, `cvv`, `amount`, `points`, `created_at`, `updated_at`) VALUES
(1, 1, 'krunal', '1234', '2025-12-11', '213', 499, 0, '2025-02-05 13:14:10', '2025-02-21 15:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_images`
--

CREATE TABLE `tbl_property_images` (
  `img_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_property_images`
--

INSERT INTO `tbl_property_images` (`img_id`, `property_id`, `image_name`) VALUES
(5, 1, '676661fb0f41d_1734763003.jpg'),
(6, 1, '676661fb1150f_1734763003.jpg'),
(7, 1, '676661fb11eb5_1734763003.jpg'),
(8, 1, '676661fb1263d_1734763003.jpg'),
(17, 5, '678f2f20d25b7_1737436960.jpg'),
(18, 4, '678f3121ab737_1737437473.jpg'),
(19, 4, '678f3121ade31_1737437473.jpg'),
(20, 4, '678f312dc844f_1737437485.jpg'),
(21, 4, '678f312dc8795_1737437485.jpg'),
(22, 4, '678f312dc89c5_1737437485.jpg'),
(23, 6, '67b439c887241_1739864520.jpg'),
(24, 6, '67b439c8881b2_1739864520.jpg'),
(25, 6, '67b439c8884a2_1739864520.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_listing`
--

CREATE TABLE `tbl_property_listing` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `listingFor` varchar(20) NOT NULL,
  `propertyType` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `yearBuilt` int(11) NOT NULL,
  `furnishing` varchar(20) NOT NULL,
  `availableFrom` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `additionalCosts` varchar(255) DEFAULT NULL,
  `interiorFeatures` text DEFAULT NULL,
  `exteriorFeatures` text DEFAULT NULL,
  `specialFeatures` text DEFAULT NULL,
  `nearbyAmenities` text DEFAULT NULL,
  `accessibility` text DEFAULT NULL,
  `description` text NOT NULL,
  `contactName` varchar(255) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `req_status` varchar(20) DEFAULT 'pending',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_property_listing`
--

INSERT INTO `tbl_property_listing` (`p_id`, `c_id`, `listingFor`, `propertyType`, `address`, `size`, `bedrooms`, `bathrooms`, `yearBuilt`, `furnishing`, `availableFrom`, `price`, `additionalCosts`, `interiorFeatures`, `exteriorFeatures`, `specialFeatures`, `nearbyAmenities`, `accessibility`, `description`, `contactName`, `contactNumber`, `contactEmail`, `req_status`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'Sell', 'apartment', 'Tilaknagar', 254, 5, 3, 2024, 'furnished', '2024-04-05', '500000.00', '500000', 'rthbhrthr', 'tgergergerge', 'g4gtrg45y5g', 'yryytryryryr', 'gteteyteg', 'vbdbgdghtrtgr', 'Krunal Soni', '8849234410', 'krunalrajpura123@gmail.com', 'rejected', '2024-08-02 15:45:27', '2024-09-18 06:05:57'),
(4, 3, 'Rent', 'house', 'akshar@gmail.com', 5000, 5, 5, 2020, 'furnished', '2025-12-01', '500000.00', '50000', 'central air conditioning', 'garden , balcony', 'Gym , swimming pool', 'near shopping center', 'public transaportation ', 'Good property', 'Akshar', '7878787858', 'akshar@gmail.com', 'accepted', '2025-01-20 15:19:48', '2025-01-21 05:33:55'),
(5, 4, 'Sell', 'commercial', 'Gandhinagar ', 6000, 0, 5, 1995, 'semi-furnished', '2025-01-21', '99999999.99', '5000000', 'central air', 'parking', 'gym', 'shopping', 'transport', 'nice property', 'dhruv prajapati', '9998974156', 'dhruvprajapati5536@gmail.com', 'accepted', '2025-01-21 05:22:40', '2025-01-21 05:34:15'),
(6, 5, 'Sell', 'house', 'himanshu@gmail.com', 250, 3, 3, 2021, 'semi-furnished', '2025-01-03', '650000.00', '50000', 'bed room ac', 'balcony , road touch', 'cctv', 'lake ', 'road touch', 'very lovely property', 'himanshu', '123456789', 'himanshu@gmail.com', 'pending', '2025-02-18 07:42:00', '2025-02-18 07:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_revealed_details`
--

CREATE TABLE `tbl_revealed_details` (
  `c_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `revealed_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_email` (`a_email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_email` (`c_email`);

--
-- Indexes for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  ADD PRIMARY KEY (`district_id`),
  ADD KEY `idx_state_id` (`state_id`);

--
-- Indexes for table `tbl_plans_details`
--
ALTER TABLE `tbl_plans_details`
  ADD PRIMARY KEY (`pl_id`);

--
-- Indexes for table `tbl_property_images`
--
ALTER TABLE `tbl_property_images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `tbl_property_listing`
--
ALTER TABLE `tbl_property_listing`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_revealed_details`
--
ALTER TABLE `tbl_revealed_details`
  ADD PRIMARY KEY (`c_id`,`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_plans_details`
--
ALTER TABLE `tbl_plans_details`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_property_images`
--
ALTER TABLE `tbl_property_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_property_listing`
--
ALTER TABLE `tbl_property_listing`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
