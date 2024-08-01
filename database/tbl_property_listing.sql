-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 10:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_property_listing`
--
ALTER TABLE `tbl_property_listing`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_property_listing`
--
ALTER TABLE `tbl_property_listing`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
