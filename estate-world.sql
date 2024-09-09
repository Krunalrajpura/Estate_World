-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 07:25 AM
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
(2, 'Krunal Rajpura', 'krunal@gmail.com', '9090909090', '$2y$10$O24jo/uGGbvrVwn0i/jJXeaV0Ayk4zty9OhpfftKinw2PYs4KqoJm', '2024-07-31 05:24:42', '2024-07-31 10:20:02');

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
(1, 'Krunal Rajpura', 'krunal@gmail.com', '9090909090', '$2y$10$Y7FYNqnd1IVPMLYUhvdYzesfue4kgBomfyfTeFnFPAShf1IkCUq7S', '2024-07-31 15:45:52', '2024-07-31 15:45:52'),
(2, 'Salmaan Khan', 'salman@gmail.com', '9090909090', '$2y$10$6.rjjubvF0mC/PQQIdlvw.rMZXKhAEYn49CGcrve/vxlsOfE9dptK', '2024-08-01 15:22:42', '2024-08-01 15:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_districts`
--

CREATE TABLE `tbl_districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `state_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_districts`
--

INSERT INTO `tbl_districts` (`district_id`, `district_name`, `state_id`) VALUES
(1, 'Andaman District', 1),
(2, 'Nicobar District', 1),
(3, 'Anantapur', 2),
(4, 'Chittoor', 2),
(5, 'East Godavari', 2),
(6, 'Guntur', 2),
(7, 'Krishna', 2),
(8, 'Kurnool', 2),
(9, 'Nellore', 2),
(10, 'Prakasam', 2),
(11, 'Srikakulam', 2),
(12, 'Visakhapatnam', 2),
(13, 'Vizianagaram', 2),
(14, 'West Godavari', 2),
(15, 'YSR Kadapa', 2),
(16, 'Adilabad', 2),
(17, 'Bhadradri Kothagudem', 2),
(18, 'Hyderabad', 2),
(19, 'Jagtial', 2),
(20, 'Jangaon', 2),
(21, 'Jogulamba Gadwal', 2),
(22, 'Kamareddy', 2),
(23, 'Karimnagar', 2),
(24, 'Khammam', 2),
(25, 'Mahabubabad', 2),
(26, 'Mahbubnagar', 2),
(27, 'Mancherial', 2),
(28, 'Medak', 2),
(29, 'Medchal-Malkajgiri', 2),
(30, 'Nagarkurnool', 2),
(31, 'Nalgonda', 2),
(32, 'Nizamabad', 2),
(33, 'Peddapalli', 2),
(34, 'Rajanna Sircilla', 2),
(35, 'Ranga Reddy', 2),
(36, 'Sangareddy', 2),
(37, 'Wanaparthy', 2),
(38, 'Warangal', 2),
(39, 'Warangal (Rural)', 2),
(40, 'Warangal (Urban)', 2),
(41, 'Anjaw', 3),
(42, 'Changlang', 3),
(43, 'Dibang Valley', 3),
(44, 'East Kameng', 3),
(45, 'East Siang', 3),
(46, 'Kamle', 3),
(47, 'Kolasib', 3),
(48, 'Kurung Kumey', 3),
(49, 'Kra Daadi', 3),
(50, 'Lepa Rada', 3),
(51, 'Lower Dibang Valley', 3),
(52, 'Lower Siang', 3),
(53, 'Longding', 3),
(54, 'Lohit', 3),
(55, 'Namsai', 3),
(56, 'Papum Pare', 3),
(57, 'Siang', 3),
(58, 'Tawang', 3),
(59, 'Tirap', 3),
(60, 'Upper Siang', 3),
(61, 'Upper Subansiri', 3),
(62, 'West Kameng', 3),
(63, 'West Siang', 3),
(64, 'Baksa', 4),
(65, 'Barpeta', 4),
(66, 'Biswanath', 4),
(67, 'Bongaigaon', 4),
(68, 'Cachar', 4),
(69, 'Charaideo', 4),
(70, 'Chirang', 4),
(71, 'Darrang', 4),
(72, 'Dhemaji', 4),
(73, 'Dhubri', 4),
(74, 'Dibrugarh', 4),
(75, 'Goalpara', 4),
(76, 'Golaghat', 4),
(77, 'Hailakandi', 4),
(78, 'Hojai', 4),
(79, 'Jorhat', 4),
(80, 'Kamrup', 4),
(81, 'Kamrup Metropolitan', 4),
(82, 'Karbi Anglong', 4),
(83, 'Karimganj', 4),
(84, 'Kokrajhar', 4),
(85, 'Lakhimpur', 4),
(86, 'Majuli', 4),
(87, 'Morigaon', 4),
(88, 'Nagaon', 4),
(89, 'Nalbari', 4),
(90, 'Dima Hasao', 4),
(91, 'Sivasagar', 4),
(92, 'Sonitpur', 4),
(93, 'South Salmara-Mankachar', 4),
(94, 'Tinsukia', 4),
(95, 'Udalguri', 4),
(96, 'West Karbi Anglong', 4),
(97, 'Araria', 5),
(98, 'Arwal', 5),
(99, 'Aurangabad', 5),
(100, 'Bagaha', 5),
(101, 'Bettiah', 5),
(102, 'Bhagalpur', 5),
(103, 'Bhojpur', 5),
(104, 'Buxar', 5),
(105, 'Darbhanga', 5),
(106, 'East Champaran', 5),
(107, 'Gaya', 5),
(108, 'Gopalganj', 5),
(109, 'Jamui', 5),
(110, 'Jehanabad', 5),
(111, 'Kaimur', 5),
(112, 'Katihar', 5),
(113, 'Khagaria', 5),
(114, 'Kishanganj', 5),
(115, 'Lakhisarai', 5),
(116, 'Madhepura', 5),
(117, 'Madhubani', 5),
(118, 'Munger', 5),
(119, 'Muzaffarpur', 5),
(120, 'Nalanda', 5),
(121, 'Nawada', 5),
(122, 'Patna', 5),
(123, 'Purnia', 5),
(124, 'Rohtas', 5),
(125, 'Saran', 5),
(126, 'Samastipur', 5),
(127, 'Sheikhpura', 5),
(128, 'Sheohar', 5),
(129, 'Sitamarhi', 5),
(130, 'Supaul', 5),
(131, 'Vaishali', 5),
(132, 'West Champaran', 5),
(133, 'Chandigarh', 6),
(134, 'Balod', 7),
(135, 'Baloda Bazar', 7),
(136, 'Balrampur', 7),
(137, 'Bastar', 7),
(138, 'Bemetara', 7),
(139, 'Bijapur', 7),
(140, 'Bilaspur', 7),
(141, 'Dantewada (South Bastar)', 7),
(142, 'Dhamtari', 7),
(143, 'Durg', 7),
(144, 'Gariyaband', 7),
(145, 'Janjgir-Champa', 7),
(146, 'Jashpur', 7),
(147, 'Kabirdham (Kawardha)', 7),
(148, 'Kanker (North Bastar)', 7),
(149, 'Kondagaon', 7),
(150, 'Korba', 7),
(151, 'Koriya', 7),
(152, 'Mahasamund', 7),
(153, 'Mungeli', 7),
(154, 'Narayanpur', 7),
(155, 'Raigarh', 7),
(156, 'Raipur', 7),
(157, 'Rajnandgaon', 7),
(158, 'Sukma', 7),
(159, 'Surajpur', 7),
(160, 'Surguja', 7),
(161, 'Mungeli', 7),
(162, 'Janjgir-Champa', 7),
(163, 'Koriya', 7),
(164, 'Korba', 7),
(165, 'Raigarh', 7),
(166, 'Raipur', 7),
(167, 'Rajnandgaon', 7),
(168, 'Sukma', 7),
(169, 'Surajpur', 7),
(170, 'Surguja', 7),
(171, 'Dadra and Nagar Haveli', 8),
(172, 'Daman', 8),
(173, 'Diu', 8),
(174, 'Central Delhi', 9),
(175, 'East Delhi', 9),
(176, 'New Delhi', 9),
(177, 'North Delhi', 9),
(178, 'North East Delhi', 9),
(179, 'North West Delhi', 9),
(180, 'South Delhi', 9),
(181, 'South East Delhi', 9),
(182, 'South West Delhi', 9),
(183, 'West Delhi', 9),
(184, 'North Goa', 10),
(185, 'South Goa', 10),
(186, 'Ahmedabad', 11),
(187, 'Amreli', 11),
(188, 'Anand', 11),
(189, 'Aravalli', 11),
(190, 'Banaskantha', 11),
(191, 'Bharuch', 11),
(192, 'Bhavnagar', 11),
(193, 'Dahod', 11),
(194, 'Dang', 11),
(195, 'Gandhinagar', 11),
(196, 'Gir Somnath', 11),
(197, 'Jamnagar', 11),
(198, 'Junagadh', 11),
(199, 'Kutch', 11),
(200, 'Mehsana', 11),
(201, 'Narmada', 11),
(202, 'Navsari', 11),
(203, 'Panchmahal', 11),
(204, 'Patan', 11),
(205, 'Porbandar', 11),
(206, 'Rajkot', 11),
(207, 'Sabarkantha', 11),
(208, 'Surat', 11),
(209, 'Surendranagar', 11),
(210, 'Tapi', 11),
(211, 'Vadodara', 11),
(212, 'Valsad', 11),
(213, 'Ambala', 12),
(214, 'Bhiwani', 12),
(215, 'Charkhi Dadri', 12),
(216, 'Faridabad', 12),
(217, 'Fatehabad', 12),
(218, 'Gurugram', 12),
(219, 'Hisar', 12),
(220, 'Jind', 12),
(221, 'Jhajjar', 12),
(222, 'Jammu', 12),
(223, 'Karnal', 12),
(224, 'Kaithal', 12),
(225, 'Kurukshetra', 12),
(226, 'Mewat', 12),
(227, 'Panchkula', 12),
(228, 'Panipat', 12),
(229, 'Rewari', 12),
(230, 'Rohtak', 12),
(231, 'Sirsa', 12),
(232, 'Sonipat', 12),
(233, 'Yamunanagar', 12),
(234, 'Bilaspur', 13),
(235, 'Chamba', 13),
(236, 'Hamirpur', 13),
(237, 'Kangra', 13),
(238, 'Kinnaur', 13),
(239, 'Kullu', 13),
(240, 'Lahul and Spiti', 13),
(241, 'Mandi', 13),
(242, 'Shimla', 13),
(243, 'Sirmaur', 13),
(244, 'Solan', 13),
(245, 'Una', 13),
(246, 'Bokaro', 14),
(247, 'Chatra', 14),
(248, 'Deoghar', 14),
(249, 'Dhanbad', 14),
(250, 'Dumka', 14),
(251, 'East Singhbhum', 14),
(252, 'Garhwa', 14),
(253, 'Giridih', 14),
(254, 'Godda', 14),
(255, 'Gumla', 14),
(256, 'Hazaribagh', 14),
(257, 'Jamtara', 14),
(258, 'Koderma', 14),
(259, 'Khunti', 14),
(260, 'Latehar', 14),
(261, 'Lohardaga', 14),
(262, 'Pakur', 14),
(263, 'Palamu', 14),
(264, 'Ranchi', 14),
(265, 'Sahebganj', 14),
(266, 'Seraikela-Kharsawan', 14),
(267, 'Simdega', 14),
(268, 'West Singhbhum', 14),
(269, 'Bagalkot', 15),
(270, 'Bangalore Rural', 15),
(271, 'Bangalore Urban', 15),
(272, 'Belagavi', 15),
(273, 'Bellary', 15),
(274, 'Bidar', 15),
(275, 'Chamarajanagar', 15),
(276, 'Chickballapur', 15),
(277, 'Chikmagalur', 15),
(278, 'Chitradurga', 15),
(279, 'Dakshina Kannada', 15),
(280, 'Davangere', 15),
(281, 'Dharwad', 15),
(282, 'Gadag', 15),
(283, 'Hassan', 15),
(284, 'Haveri', 15),
(285, 'Kalaburagi', 15),
(286, 'Kodagu', 15),
(287, 'Kolar', 15),
(288, 'Koppal', 15),
(289, 'Mandya', 15),
(290, 'Mysuru', 15),
(291, 'Raichur', 15),
(292, 'Ramanagara', 15),
(293, 'Shimoga', 15),
(294, 'Tumakuru', 15),
(295, 'Udupi', 15),
(296, 'Uttar Kannada', 15),
(297, 'Vijayapura', 15),
(298, 'Vijayanagara', 15),
(299, 'Yadgir', 15),
(300, 'Alappuzha', 16),
(301, 'Ernakulam', 16),
(302, 'Idukki', 16),
(303, 'Kannur', 16),
(304, 'Kasaragod', 16),
(305, 'Kottayam', 16),
(306, 'Kollam', 16),
(307, 'Kozhikode', 16),
(308, 'Malappuram', 16),
(309, 'Palakkad', 16),
(310, 'Pathanamthitta', 16),
(311, 'Thiruvananthapuram', 16),
(312, 'Thrissur', 16),
(313, 'Wayanad', 16),
(314, 'Leh', 17),
(315, 'Kargil', 17),
(316, 'Agatti', 18),
(317, 'Amini', 18),
(318, 'Andrott', 18),
(319, 'Bangaram', 18),
(320, 'Bithra', 18),
(321, 'Kalapeni', 18),
(322, 'Kavaratti', 18),
(323, 'Kiltan', 18),
(324, 'Maliku', 18),
(325, 'Suheli', 18),
(326, 'Agar Malwa', 19),
(327, 'Alirajpur', 19),
(328, 'Anuppur', 19),
(329, 'Ashok Nagar', 19),
(330, 'Balaghat', 19),
(331, 'Barwani', 19),
(332, 'Betul', 19),
(333, 'Bhind', 19),
(334, 'Bhopal', 19),
(335, 'Burhanpur', 19),
(336, 'Chhatarpur', 19),
(337, 'Chhindwara', 19),
(338, 'Damoh', 19),
(339, 'Datia', 19),
(340, 'Dewas', 19),
(341, 'Dhar', 19),
(342, 'Dindori', 19),
(343, 'Guna', 19),
(344, 'Gwalior', 19),
(345, 'Harda', 19),
(346, 'Hoshangabad', 19),
(347, 'Indore', 19),
(348, 'Jabalpur', 19),
(349, 'Jhabua', 19),
(350, 'Katni', 19),
(351, 'Khandwa', 19),
(352, 'Khargone', 19),
(353, 'Mandla', 19),
(354, 'Mandsaur', 19),
(355, 'Morena', 19),
(356, 'Narmadapuram', 19),
(357, 'Narsinghpur', 19),
(358, 'Neemuch', 19),
(359, 'Pachmarhi', 19),
(360, 'Panna', 19),
(361, 'Raisen', 19),
(362, 'Rajgarh', 19),
(363, 'Ratlam', 19),
(364, 'Rewa', 19),
(365, 'Sagar', 19),
(366, 'Satna', 19),
(367, 'Sehore', 19),
(368, 'Seoni', 19),
(369, 'Shahdol', 19),
(370, 'Shajapur', 19),
(371, 'Sheopur', 19),
(372, 'Shivpuri', 19),
(373, 'Sidhi', 19),
(374, 'Singrauli', 19),
(375, 'Tikamgarh', 19),
(376, 'Ujjain', 19),
(377, 'Umaria', 19),
(378, 'Vidisha', 19),
(379, 'Ahmednagar', 20),
(380, 'Akola', 20),
(381, 'Amravati', 20),
(382, 'Aurangabad', 20),
(383, 'Beed', 20),
(384, 'Bhandara', 20),
(385, 'Buldhana', 20),
(386, 'Chandrapur', 20),
(387, 'Dhule', 20),
(388, 'Gadchiroli', 20),
(389, 'Gondia', 20),
(390, 'Hingoli', 20),
(391, 'Jalgaon', 20),
(392, 'Jalna', 20),
(393, 'Kolhapur', 20),
(394, 'Latur', 20),
(395, 'Mumbai City', 20),
(396, 'Mumbai Suburban', 20),
(397, 'Nagpur', 20),
(398, 'Nanded', 20),
(399, 'Nandurbar', 20),
(400, 'Nashik', 20),
(401, 'Osmanabad', 20),
(402, 'Palghar', 20),
(403, 'Parbhani', 20),
(404, 'Pune', 20),
(405, 'Raigad', 20),
(406, 'Ratnagiri', 20),
(407, 'Satara', 20),
(408, 'Sindhudurg', 20),
(409, 'Solapur', 20),
(410, 'Thane', 20),
(411, 'Wardha', 20),
(412, 'Washim', 20),
(413, 'Yavatmal', 20),
(414, 'Bishnupur', 21),
(415, 'Chandel', 21),
(416, 'Churachandpur', 21),
(417, 'Imphal East', 21),
(418, 'Imphal West', 21),
(419, 'Jiribam', 21),
(420, 'Kakching', 21),
(421, 'Kamjong', 21),
(422, 'Kangpokpi', 21),
(423, 'Noney', 21),
(424, 'Senapati', 21),
(425, 'Tamenglong', 21),
(426, 'Tengnoupal', 21),
(427, 'Thoubal', 21),
(428, 'Ukhrul', 21),
(429, 'East Garo Hills', 22),
(430, 'East Jaintia Hills', 22),
(431, 'East Khasi Hills', 22),
(432, 'North Garo Hills', 22),
(433, 'Ri-Bhoi', 22),
(434, 'South Garo Hills', 22),
(435, 'South West Garo Hills', 22),
(436, 'South West Khasi Hills', 22),
(437, 'West Garo Hills', 22),
(438, 'West Jaintia Hills', 22),
(439, 'West Khasi Hills', 22),
(440, 'Aizawl', 23),
(441, 'Champhai', 23),
(442, 'Kolasib', 23),
(443, 'Lawngtlai', 23),
(444, 'Lunglei', 23),
(445, 'Mamit', 23),
(446, 'Saiha', 23),
(447, 'Serchhip', 23),
(448, 'Dimapur', 24),
(449, 'Kiphire', 24),
(450, 'Kohima', 24),
(451, 'Longleng', 24),
(452, 'Mokokchung', 24),
(453, 'Mon', 24),
(454, 'Peren', 24),
(455, 'Phek', 24),
(456, 'Tuensang', 24),
(457, 'Wokha', 24),
(458, 'Zunheboto', 24),
(459, 'Angul', 25),
(460, 'Boudh', 25),
(461, 'Bargarh', 25),
(462, 'Balangir', 25),
(463, 'Balasore', 25),
(464, 'Bhadrak', 25),
(465, 'Bhubaneswar', 25),
(466, 'Cuttack', 25),
(467, 'Dhenkanal', 25),
(468, 'Ganjam', 25),
(469, 'Gajapati', 25),
(470, 'Jajpur', 25),
(471, 'Jagatsinghpur', 25),
(472, 'Jeypore', 25),
(473, 'Kalahandi', 25),
(474, 'Kandhamal', 25),
(475, 'Kendrapara', 25),
(476, 'Kendujhar', 25),
(477, 'Khurda', 25),
(478, 'Koraput', 25),
(479, 'Malkangiri', 25),
(480, 'Nabarangpur', 25),
(481, 'Nayagarh', 25),
(482, 'Nuapada', 25),
(483, 'Rayagada', 25),
(484, 'Sambalpur', 25),
(485, 'Subarnapur', 25),
(486, 'Sundargarh', 25),
(487, 'Karaikal', 26),
(488, 'Mahe', 26),
(489, 'Puducherry', 26),
(490, 'Yanam', 26),
(491, 'Amritsar', 27),
(492, 'Barnala', 27),
(493, 'Bathinda', 27),
(494, 'Faridkot', 27),
(495, 'Fatehgarh Sahib', 27),
(496, 'Fazilka', 27),
(497, 'Ferozepur', 27),
(498, 'Gurdaspur', 27),
(499, 'Hoshiarpur', 27),
(500, 'Jalandhar', 27),
(501, 'Kapurthala', 27),
(502, 'Ludhiana', 27),
(503, 'Mansa', 27),
(504, 'Moga', 27),
(505, 'Muktsar', 27),
(506, 'Nawanshahr', 27),
(507, 'Pathankot', 27),
(508, 'Patiala', 27),
(509, 'Rupnagar', 27),
(510, 'Sangrur', 27),
(511, 'Sri Muktsar Sahib', 27),
(512, 'Tarn Taran', 27),
(513, 'Ajmer', 28),
(514, 'Alwar', 28),
(515, 'Banswara', 28),
(516, 'Baran', 28),
(517, 'Barmer', 28),
(518, 'Bhilwara', 28),
(519, 'Bikaner', 28),
(520, 'Bundi', 28),
(521, 'Chittorgarh', 28),
(522, 'Churu', 28),
(523, 'Dausa', 28),
(524, 'Dholpur', 28),
(525, 'Dungarpur', 28),
(526, 'Ganganagar', 28),
(527, 'Hanumangarh', 28),
(528, 'Jaipur', 28),
(529, 'Jaisalmer', 28),
(530, 'Jalore', 28),
(531, 'Jhalawar', 28),
(532, 'Jhunjhunu', 28),
(533, 'Jodhpur', 28),
(534, 'Karauli', 28),
(535, 'Nagaur', 28),
(536, 'Pali', 28),
(537, 'Rajasthan', 28),
(538, 'Sawai Madhopur', 28),
(539, 'Sikar', 28),
(540, 'Sirohi', 28),
(541, 'Tonk', 28),
(542, 'Udaipur', 28),
(543, 'East Sikkim', 29),
(544, 'North Sikkim', 29),
(545, 'South Sikkim', 29),
(546, 'West Sikkim', 29),
(547, 'Ariyalur', 30),
(548, 'Chengalpattu', 30),
(549, 'Chennai', 30),
(550, 'Coimbatore', 30),
(551, 'Cuddalore', 30),
(552, 'Dharmapuri', 30),
(553, 'Dindigul', 30),
(554, 'Erode', 30),
(555, 'Kallakurichi', 30),
(556, 'Kancheepuram', 30),
(557, 'Kanyakumari', 30),
(558, 'Karur', 30),
(559, 'Krishnagiri', 30),
(560, 'Madurai', 30),
(561, 'Nagapattinam', 30),
(562, 'Namakkal', 30),
(563, 'Nilgiris', 30),
(564, 'Perambalur', 30),
(565, 'Pudukkottai', 30),
(566, 'Ramanathapuram', 30),
(567, 'Salem', 30),
(568, 'Sivaganga', 30),
(569, 'Tenkasi', 30),
(570, 'Thanjavur', 30),
(571, 'Theni', 30),
(572, 'Thoothukudi', 30),
(573, 'Tiruchirappalli', 30),
(574, 'Tirunelveli', 30),
(575, 'Tirupathur', 30),
(576, 'Tirupur', 30),
(577, 'Tiruvallur', 30),
(578, 'Tiruvannamalai', 30),
(579, 'Vellore', 30),
(580, 'Viluppuram', 30),
(581, 'Virudhunagar', 30),
(582, 'Adilabad', 31),
(583, 'Bhadradri Kothagudem', 31),
(584, 'Hyderabad', 31),
(585, 'Jagtial', 31),
(586, 'Jangaon', 31),
(587, 'Jayashankar Bhupalapally', 31),
(588, 'Jogulamba Gadwal', 31),
(589, 'Kamareddy', 31),
(590, 'Karimnagar', 31),
(591, 'Khammam', 31),
(592, 'Mahabubabad', 31),
(593, 'Mahabubnagar', 31),
(594, 'Mancherial', 31),
(595, 'Medak', 31),
(596, 'Medchal-Malkajgiri', 31),
(597, 'Nagarkurnool', 31),
(598, 'Nalgonda', 31),
(599, 'Narayanpet', 31),
(600, 'Nirmal', 31),
(601, 'Nizamabad', 31),
(602, 'Peddapalli', 31),
(603, 'Rajanna Sircilla', 31),
(604, 'Ranga Reddy', 31),
(605, 'Sangareddy', 31),
(606, 'Vikarabad', 31),
(607, 'Warangal (Rural)', 31),
(608, 'Warangal (Urban)', 31),
(609, 'Yadadri Bhuvanagiri', 31),
(610, 'Ambassa', 32),
(611, 'Dhalai', 32),
(612, 'Khowai', 32),
(613, 'North Tripura', 32),
(614, 'Sepahijala', 32),
(615, 'South Tripura', 32),
(616, 'Unakoti', 32),
(617, 'West Tripura', 32),
(618, 'Agra', 33),
(619, 'Aligarh', 33),
(620, 'Allahabad', 33),
(621, 'Ambedkar Nagar', 33),
(622, 'Amethi', 33),
(623, 'Amroha', 33),
(624, 'Auraiya', 33),
(625, 'Ayodhya', 33),
(626, 'Azamgarh', 33),
(627, 'Badaun', 33),
(628, 'Baghpat', 33),
(629, 'Bahraich', 33),
(630, 'Ballia', 33),
(631, 'Balrampur', 33),
(632, 'Banda', 33),
(633, 'Bangarmau', 33),
(634, 'Barabanki', 33),
(635, 'Bareilly', 33),
(636, 'Basti', 33),
(637, 'Bijnor', 33),
(638, 'Budaun', 33),
(639, 'Bulandshahr', 33),
(640, 'Chandauli', 33),
(641, 'Chitrakoot', 33),
(642, 'Deoria', 33),
(643, 'Etah', 33),
(644, 'Etawah', 33),
(645, 'Farrukhabad', 33),
(646, 'Fatehpur', 33),
(647, 'Firozabad', 33),
(648, 'Gautam Buddha Nagar', 33),
(649, 'Ghaziabad', 33),
(650, 'Ghazipur', 33),
(651, 'Gonda', 33),
(652, 'Gorakhpur', 33),
(653, 'Hamirpur', 33),
(654, 'Hardoi', 33),
(655, 'Hathras', 33),
(656, 'Jalaun', 33),
(657, 'Jaunpur', 33),
(658, 'Jhansi', 33),
(659, 'Kannauj', 33),
(660, 'Kanpur Dehat', 33),
(661, 'Kanpur Nagar', 33),
(662, 'Kasganj', 33),
(663, 'Kaushambi', 33),
(664, 'Kushinagar', 33),
(665, 'Lakhimpur Kheri', 33),
(666, 'Lalitpur', 33),
(667, 'Lucknow', 33),
(668, 'Maharajganj', 33),
(669, 'Mahoba', 33),
(670, 'Mainpuri', 33),
(671, 'Mathura', 33),
(672, 'Mau', 33),
(673, 'Meerut', 33),
(674, 'Mirzapur', 33),
(675, 'Moradabad', 33),
(676, 'Muzaffarnagar', 33),
(677, 'Pilibhit', 33),
(678, 'Pratapgarh', 33),
(679, 'Rae Bareli', 33),
(680, 'Rampur', 33),
(681, 'Saharanpur', 33),
(682, 'Sambhal', 33),
(683, 'Sant Kabir Nagar', 33),
(684, 'Sant Ravidas Nagar', 33),
(685, 'Shahjahanpur', 33),
(686, 'Shamli', 33),
(687, 'Shravasti', 33),
(688, 'Siddharthnagar', 33),
(689, 'Sitapur', 33),
(690, 'Sonbhadra', 33),
(691, 'Sultanpur', 33),
(692, 'Unnao', 33),
(693, 'Varanasi', 33),
(694, 'Almora', 34),
(695, 'Bageshwar', 34),
(696, 'Bhilwara', 34),
(697, 'Chamoli', 34),
(698, 'Champawat', 34),
(699, 'Dehradun', 34),
(700, 'Haridwar', 34),
(701, 'Nainital', 34),
(702, 'Pauri Garhwal', 34),
(703, 'Pithoragarh', 34),
(704, 'Rudraprayag', 34),
(705, 'Tehri Garhwal', 34),
(706, 'Udham Singh Nagar', 34),
(707, 'Uttarkashi', 34),
(708, 'Alipurduar', 35),
(709, 'Bankura', 35),
(710, 'Bardhaman', 35),
(711, 'Birbhum', 35),
(712, 'Cooch Behar', 35),
(713, 'Dakshin Dinajpur', 35),
(714, 'Darjeeling', 35),
(715, 'Hooghly', 35),
(716, 'Howrah', 35),
(717, 'Jalpaiguri', 35),
(718, 'Jhargram', 35),
(719, 'Kolkata', 35),
(720, 'Malda', 35),
(721, 'Murshidabad', 35),
(722, 'Nadia', 35),
(723, 'North 24 Parganas', 35),
(724, 'Purulia', 35),
(725, 'South 24 Parganas', 35),
(726, 'Uttar Dinajpur', 35),
(727, 'Anantnag', 36),
(728, 'Bandipora', 36),
(729, 'Baramulla', 36),
(730, 'Budgam', 36),
(731, 'Doda', 36),
(732, 'Ganderbal', 36),
(733, 'Jammu', 36),
(734, 'Kathua', 36),
(735, 'Kishtwar', 36),
(736, 'Kulgam', 36),
(737, 'Pulwama', 36),
(738, 'Ramban', 36),
(739, 'Reasi', 36),
(740, 'Samba', 36),
(741, 'Udhampur', 36),
(742, 'Jammu (Jammu)', 36),
(743, 'Kargil', 36),
(744, 'Leh', 36);

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
(119, 16, '66bb23718bb12_1723540337.jpg'),
(120, 16, '66bb23718bfca_1723540337.jpg'),
(121, 16, '66bb23718c3a3_1723540337.jpg'),
(122, 16, '66bb23718c761_1723540337.jpg'),
(123, 17, '66bb23f14db28_1723540465.jpg'),
(124, 17, '66bb23f14e063_1723540465.jpg'),
(125, 17, '66bb23f14e5b0_1723540465.jpg'),
(126, 17, '66bb23f14eb00_1723540465.jpg');

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
(16, 2, 'Sell', 'apartment', 'Apartment', 1200, 3, 2, 2015, 'furnished', '2024-08-30', 2500000.00, '2000', 'Central Heating, Air Conditioning', 'Balcony, Garage', 'Ocean View', 'Schools, Parks', 'Near Public Transport', 'A beautiful apartment with ocean view.', 'Salmaan Khan', '9090909090', 'salmaan@gmail.com', 'pending', '2024-08-13 09:12:17', '2024-08-13 09:12:17'),
(17, 2, 'Rent', 'house', '456 Maple Avenue, Springfield', 2500, 5, 4, 2010, 'furnished', '2024-02-12', 2000000.00, '3000', 'Fireplace, Hardwood Floors', 'Garden, Pool', 'Energy Efficient', ' Shopping Malls, Restaurants', ' Easy Access', 'Spacious house with a private garden.', 'Salmaan Khan', '9090909090', 'salmaan@gmail.com', 'pending', '2024-08-13 09:14:25', '2024-08-13 09:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE `tbl_states` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`state_id`, `state_name`) VALUES
(1, 'Andaman and Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli and Daman and Diu'),
(9, 'Delhi'),
(10, 'Goa'),
(11, 'Gujarat'),
(12, 'Haryana'),
(13, 'Himachal Pradesh'),
(14, 'Jharkhand'),
(15, 'Karnataka'),
(16, 'Kerala'),
(17, 'Ladakh'),
(18, 'Lakshadweep'),
(19, 'Madhya Pradesh'),
(20, 'Maharashtra'),
(21, 'Manipur'),
(22, 'Meghalaya'),
(23, 'Mizoram'),
(24, 'Nagaland'),
(25, 'Odisha'),
(26, 'Puducherry'),
(27, 'Punjab'),
(28, 'Rajasthan'),
(29, 'Sikkim'),
(30, 'Tamil Nadu'),
(31, 'Telangana'),
(32, 'Tripura'),
(33, 'Uttar Pradesh'),
(34, 'Uttarakhand'),
(35, 'West Bengal'),
(36, 'Jammu and Kashmir');

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
  ADD KEY `state_id` (`state_id`);

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
-- Indexes for table `tbl_states`
--
ALTER TABLE `tbl_states`
  ADD PRIMARY KEY (`state_id`);

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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=745;

--
-- AUTO_INCREMENT for table `tbl_property_images`
--
ALTER TABLE `tbl_property_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `tbl_property_listing`
--
ALTER TABLE `tbl_property_listing`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_states`
--
ALTER TABLE `tbl_states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_districts`
--
ALTER TABLE `tbl_districts`
  ADD CONSTRAINT `tbl_districts_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `tbl_states` (`state_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
