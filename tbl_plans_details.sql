-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2025 at 05:49 AM
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
(1, 1, 'krunal', '1234', '2025-12-12', '123', 699, 55, '2025-02-05 13:14:10', '2025-02-06 11:44:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_plans_details`
--
ALTER TABLE `tbl_plans_details`
  ADD PRIMARY KEY (`pl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_plans_details`
--
ALTER TABLE `tbl_plans_details`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
