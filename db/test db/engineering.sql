-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2016 at 08:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engineering`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `descr`) VALUES
(9, 'Mahendra Pumpsets', 'Over 1,250 varieties of Pumps suitable for Domestic, Industrial and Agricultural applications and 50 years of manufacturing Expertise in Pumps &amp; Motors.'),
(10, 'Texmo Pumpsets', 'Texmo Industries has been at the forefront and been the pace setters in the electric motor and agricultural pump Industry since.Employing over 1800 people Texmo has a wide network of company branches and dealers making it possible for customers to be able to make use of our products and services in every part of the country. \r\n\r\n'),
(12, 'Falcon Pumpsets', 'Falcon Pumps Pvt.Ltd.is a leading manufacturer of world-class pumping solutions providing technically most advanced, excellent energy efficient and lifelong durable pumping equipments across the globe.'),
(13, 'V Guard Pumpsets', 'With over 500 distributors, 5000 direct dealers, 20,000 retailers and service centers, V-Guard continues to steadily capture the hearts of people across India.');

-- --------------------------------------------------------

--
-- Table structure for table `items_in_order`
--

CREATE TABLE `items_in_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_in_order`
--

INSERT INTO `items_in_order` (`id`, `order_id`, `product_id`, `qty`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `totalcost` varchar(10) NOT NULL,
  `shipto` text NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `shipped_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `user_id`, `totalcost`, `shipto`, `status`, `shipped_date`) VALUES
(1, '2016-12-23 00:00:00', 1, '2000', 'Shobi, Kalpetta', NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `product_id`, `location`) VALUES
(1, 32, '1.png'),
(2, 32, '2.png'),
(3, 32, '5.png'),
(4, 32, '10.png'),
(5, 32, '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `descr` text NOT NULL,
  `category` int(11) NOT NULL,
  `mfg` varchar(25) NOT NULL,
  `price` varchar(10) NOT NULL,
  `unit` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `visibility` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descr`, `category`, `mfg`, `price`, `unit`, `qty`, `visibility`, `date`) VALUES
(1, 'Horizontal openwell subme', 'Motor Rating :0.5 HP-2.0 HP (Single Phase, CSCR/Three Phase, DOL)\r\nRated Voltage :240 V, Single Phase : 415 V, Three Phase\r\nFrequency : 50/60 Hz Head Range : 5-31 m\r\nDischarge Range : 30-600 LPM\r\nSpeed : 2880 RPM\r\nDuty : S1 (Continuous)\r\nDegree of Protection : IP 58', 9, 'Mahendra', '1965', 4, 5, 1, '2016-12-29 14:51:52'),
(2, 'Vertical Openwell Submers', 'Motor Rating :0.5 HP-1.5 HP (Single Phase, CSCR/Three Phase, DOL)\r\nRated Voltage :240 V, Single Phase : 415 V, Three Phase\r\nFrequency : 50/60 Hz\r\nHead Range : 85-3 m\r\nDischarge Range : 20-100 LPM\r\nSpeed : 2880 RPM\r\nDuty : S1 (Continuous)\r\nDegree of Protection : IP 58', 9, 'Mahendra', '2050', 4, 7, 1, '2016-12-29 14:54:33'),
(3, 'Horizontal Openwell Subme', 'Motor Rating :3.0 HP-7.5 HP (Three Phase)\r\nRated Voltage :415 V, Three Phase\r\nFrequency : 50/60 Hz\r\nConnection : DOL/STAR DELTA\r\nHead Range : 6-48 m\r\nDischarge Range : 1878-120 LPM\r\nSpeed : 2880 RPM\r\nDuty : S1 (Continuous)\r\nDegree of Protection : IP 58', 9, 'Mahendra', '1765', 4, 10, 1, '2016-12-29 14:56:07'),
(4, 'Vertical Open Well Submer', 'Motor Rating :3.0 HP-12.5 HP (Three Phase)\r\nRated Voltage :415 V, Three Phase\r\nFrequency : 50/60 Hz\r\nConnection : DOL/STAR DELTA\r\nHead Range : 8-100 m\r\nDischarge Range : 115-1050 LPM\r\nSpeed : 2880 RPM\r\nDuty : S1 (Continuous)\r\nDegree of Protection : IP 58', 9, 'Mahendra', '2150', 4, 6, 1, '2016-12-29 14:57:41'),
(5, 'Horizontal Openwell Subme', 'Power Rating :3.0 HP-10 HP (Three Phase)\r\nRated Voltage :415 V, Three Phase\r\nFrequency : 50/60 Hz\r\nConnection : DOL/STAR DELTA\r\nHead Range : 6-50 m\r\nDischarge Range : 120-2046 LPM\r\nSpeed : 2880 RPM\r\nDuty : S1 (Continuous)\r\nDegree of Protection : IP 58\r\n', 9, 'Mahendra', '1765', 4, 8, 1, '2016-12-29 14:58:49'),
(6, '100mm (4&quot;) KR/VR Ser', '10mm (4&quot;) KR Series-Submersible Pumpsets\r\nPerformance of &quot;Mahendra&quot; KR Series Oil Cooled Submersible Pumpset Suitable for 4&quot; (100mm) Borewell at 2880 RPM with 220 V, Single phase (or) 15volts three Phase, AC, 50Hz supply\r\n\r\n10mm (4&quot;) VR Series-Submersible Pumpsets\r\nPerformance of &quot;Mahendra&quot; VR Series Submersible Pumpset Suitable for 4&quot; (100mm) Borewell at 2880 RPM with 220 V, Single phase (upto 3 hp) 415volts three Phase, AC, 50Hz supply\r\n\r\n', 9, 'Mahendra', '3215', 4, 8, 1, '2016-12-29 15:02:49'),
(7, '150mm (6&quot;) Series Bo', 'Motor Rating : 1.0 HP-5.0 HP (Single phase, CSCR/Three Phase, DOL)\r\nMin Borewell Size : 150 mm(6&quot;)\r\nRated Voltage : 240 V, Single Phase:415 V, Three Phase\r\nFrequency : 50/60 Hz\r\nDuty : S1 (Continuous)\r\nDegree of protection : IP 58', 9, 'Mahendra', '3255', 4, 5, 1, '2016-12-29 15:04:18'),
(8, '150 mm(6&quot;) MR/MM Ser', '150mm (6&quot; Borewell) MR Series Submersible Pumps\r\nPerformance of &quot;Mahendra&quot; MR Series Submersible Pumpset Suitable for 6&quot; (150mm) Borewell at 2880 RPM with 415/360 V, three Phase, AC, 50Hz supply\r\n\r\n150mm (6&quot; Borewell) MM Series Submersible Pumps\r\nPerformance of &quot;Mahendra&quot; MM Series Submersible Pumpset Suitable for 6&quot; (150mm) Borewell at 2880 RPM with 415/360 V, three Phase, AC, 50Hz supply\r\n\r\n', 9, 'Mahendra', '3245', 4, 5, 1, '2016-12-29 15:05:37'),
(9, '100mm (4&quot;) KR Series', 'Power Rating : 0.5 HP - 2.0 HP (Three Phase, DOL/Single Phase, CSR)\r\nMin Borewell Size : 100 mm(4&quot;)\r\nRated Voltage : 415 V, Three Phase:240 V, Single phase\r\nFrequency : 50/60 Hz\r\nDuty : S1 (Continuous)\r\nDegree of protection : IP 58\r\n', 9, 'Mahendra', '3255', 4, 7, 1, '2016-12-29 15:08:09'),
(10, '200mm - (8&quot;) Borewel', 'Motor Rating : 10.0 HP - 60.0 HP (Three Phase)\r\nMin Borewell Size : 200 mm(8&quot;)\r\nRated Voltage : 415 V, Three Phase\r\nFrequency : 50/60 Hz\r\nConnection : DOL/STAR DELTA\r\nDuty : S1 (Continuous)\r\nDegree of protection : IP 58\r\n', 9, 'Mahendra', '3214', 4, 7, 1, '2016-12-29 15:09:53'),
(11, 'Single Phase Centrifugal ', 'Motor rating : 1.5 â€“ 2.0 hp\r\n Head range : 6 â€“ 40 m\r\n Discharge : 1.4 â€“ 73.8 m3 / hr\r\n', 10, 'Texmo Industries', '1765', 4, 6, 1, '2016-12-30 13:07:47'),
(12, 'Three Phase Centrifugal M', 'Motor rating : 1 â€“ 30 hp\r\n Head range : 4 â€“ 91 m\r\n Discharge : 2.2 â€“ 234.7 m3 / hr\r\n', 10, 'Texmo Industries', '1999', 4, 5, 1, '2016-12-30 13:09:05'),
(13, 'Three Phase Open Well Sub', 'Motor rating : 1 â€“ 15 hp\r\n Head range : 6 â€“ 119 m\r\n Discharge : 7.6 â€“ 165.6 m3 / hr', 10, 'Texmo Industries', '1867', 4, 7, 1, '2016-12-30 13:10:20'),
(14, 'Single Phase Induction Mo', 'Motor rating : 1.1 â€“ 2.0 hp\r\n', 10, 'Texmo Industries', '2050', 4, 15, 1, '2016-12-30 13:11:48'),
(15, 'Three Phase Induction Mot', ' Motor rating : 0.5 â€“ 30 hp', 10, 'Texmo Industries', '1975', 4, 8, 1, '2016-12-30 13:13:16'),
(16, 'Three Phase Vertical Open', ' Motor rating : 3 - 25  hp\r\n Head range : 21 - 119  m\r\n Discharge : 10.8 - 108 m3 / hr', 10, 'Texmo Industries', '2000', 4, 5, 1, '2016-12-30 13:14:14'),
(17, 'Bore Well Compressor Pump', 'Bore Well Compressor Pumps', 10, 'Texmo Industries', '2150', 4, 5, 1, '2016-12-30 13:15:19'),
(18, 'Multi Stage High Pressure', 'Motor rating : 2 â€“ 20 hp\r\n Head range : 12 â€“ 184 m\r\n Discharge : 4.3 â€“ 36 m3 / hr\r\n', 10, 'Texmo Industries', '1865', 4, 6, 1, '2016-12-30 13:16:19'),
(20, 'Nano 50 - Self Priming Mo', 'Available in Single Phase 0.5 HP to 1.0 HP.\r\nHeavy / Thick Aluminum Body.\r\nHigh graded casting employed Stamping: M-45 Grade Silicon.\r\nForged Gun Metal Impeller.', 12, 'Falcon', '1650', 4, 5, 1, '2016-12-30 13:27:54'),
(22, 'Self Priming FSP - 50/100', '4 Pole Slow Speed at 1500 RPM\r\nHead Range upto 40Mtrs\r\nDischarge upto 56 Liters Per Minute', 12, 'Falcon', '1780', 4, 7, 1, '2016-12-30 13:30:50'),
(23, 'Centrifugal Mono Single P', 'MOTOR BODY : Graded Cast Iron\r\n\r\nSTAMPING : Electrical Grade Silicon Steel Sheet with 3.9 to 4.5 Watt loss/hourt\r\n\r\nROTOR SHAFT : Stainless Steel 420 H&amp;T\r\n\r\nIMPELLER : Graded Cast Iron and Dynamically Balanced', 12, 'Falcon', '1875', 4, 6, 1, '2016-12-30 13:32:46'),
(24, 'Centrifugal Mono Three Ph', 'MOTOR BODY : Graded Cast Iron\r\n\r\nSTAMPING : Electrical Grade Silicon Steel Sheet with 3.9 to 4.5 Watt loss/hourt\r\n\r\nROTOR SHAFT : Stainless Steel 420 H&amp;T\r\n\r\nIMPELLER : Graded Cast Iron and Dynamically Balanced', 12, 'Falcon', '2350', 4, 4, 1, '2016-12-30 13:34:01'),
(25, '3&quot; Tubewell Submersi', 'Body: Stainless steel motor body\r\nImpeller: Centrifugal radial flow type\r\nMotor shaft: Stainless steel shaft', 13, 'V Guard', '2875', 4, 5, 1, '2016-12-30 13:40:33'),
(26, '4&quot; Tubewell Submersi', 'Body: Stainless steel motor body\r\nImpeller: Centrifugal radial flow type (Noryl)\r\nInsulation: Class â€˜Bâ€™', 13, 'V Guard', '2345', 4, 8, 1, '2016-12-30 13:41:46'),
(27, 'VSP Series', 'Body: Aluminum extruded motor body\r\nImpeller: Forged Brass impeller, ensuring longer life\r\nMotor Shaft: High Quality alloy steel', 13, 'V Guard', '3425', 4, 4, 1, '2016-12-30 13:43:16'),
(28, 'Nova Series', 'Body: Aluminum extruded motor body\r\nImpeller: Forged Brass impeller, ensuring longer life.\r\nMotor Shaft: High Quality alloy steel', 13, 'V Guard', '2390', 4, 7, 1, '2016-12-30 13:44:21'),
(29, 'Revo Series', 'Body: Aluminum extruded motor body\r\nImpeller: Forged Brass impeller, ensuring longer life\r\nMotor Shaft: High Quality alloy steel', 13, 'V Guard', '2367', 4, 10, 1, '2016-12-30 13:45:51'),
(30, 'VC Series', 'Body: Rigid Cast Iron/Aluminum motor body\r\nImpeller: Centrifugal radial flow\r\nInsulation: Class', 13, 'V Guard', '3425', 4, 3, 1, '2016-12-30 13:47:01'),
(31, 'VOS Series', 'Body: Stainless motor body with anti corrosive primer coating\r\nImpeller: Dynamically balanced Centrifugal radial flow type\r\nInsulation: Class B', 13, 'V Guard', '2575', 4, 6, 1, '2016-12-30 13:48:25'),
(32, 'submersible pumpset', 'motor ratig', 9, 'mahendra', '5646', 4, 5, 1, '2016-12-31 07:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `name`, `descr`) VALUES
(1, 'KG', 'Kilogram'),
(2, 'mt', 'Meter'),
(4, 'Nos', 'Numbers');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_in_order`
--
ALTER TABLE `items_in_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `items_in_order`
--
ALTER TABLE `items_in_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
