-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2017 at 07:06 PM
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
(1, 'Pumpset', 'To Pump water'),
(2, 'Pipe', 'Water Pipe'),
(3, 'Steel Bar', 'Steel Bars'),
(6, 'Springler', 'Water Springler ......'),
(7, 'Water Filter', 'Description');

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
(4, 0, 3, 1),
(5, 0, 2, 3),
(7, 8, 11, 2),
(8, 9, 6, 3);

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
  `status` int(1) DEFAULT '0',
  `shipped_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `user_id`, `totalcost`, `shipto`, `status`, `shipped_date`) VALUES
(8, '2017-01-01 18:06:21', 2, '380', 'Kalpetta', 0, NULL),
(9, '2017-01-01 18:33:25', 2, '11550', 'Kalpetta', 0, NULL);

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
(16, 4, 'pump1.jpg'),
(17, 4, 'pump2.jpg'),
(18, 4, 'pump3.jpg'),
(19, 4, 'pump4.jpg'),
(20, 4, 'pump5.jpg'),
(21, 5, 'pump2.jpg'),
(22, 5, 'pump3.jpg'),
(23, 5, 'pump1.jpg'),
(24, 5, 'pump4.jpg'),
(25, 5, 'pump5.jpg'),
(26, 6, 'pump3.jpg'),
(27, 6, 'pump2.jpg'),
(28, 6, 'pump1.jpg'),
(29, 6, 'pump4.jpg'),
(30, 6, 'pump5.jpg'),
(31, 7, 'pump4.jpg'),
(32, 7, 'pump3.jpg'),
(33, 7, 'pump2.jpg'),
(34, 7, 'pump5.jpg'),
(35, 7, 'pump1.jpg'),
(36, 8, 'pump5.jpg'),
(37, 8, 'pump4.jpg'),
(38, 8, 'pump2.jpg'),
(39, 8, 'pump3.jpg'),
(40, 8, 'pump1.jpg'),
(41, 9, 'Spring1.jpg'),
(42, 9, 'spring2.jpg'),
(43, 9, 'spring3.jpg'),
(44, 9, 'spring4.jpg'),
(45, 9, 'spring5.jpg'),
(46, 10, 'spring5.jpg'),
(47, 10, 'spring4.jpg'),
(48, 10, 'spring3.jpg'),
(49, 10, 'spring2.jpg'),
(50, 10, 'Spring1.jpg'),
(51, 11, 'spring3.jpg'),
(52, 11, 'spring2.jpg'),
(53, 11, 'spring5.jpg'),
(54, 11, 'Spring1.jpg'),
(55, 11, 'spring4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
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
(4, ' impeller centrifugal pumps', 'Close-coupled, centrifugal pumps; electric motor with extended shaft directly connected to the pump.\r\nNM: single-impeller.\r\nNMD: with two back-to-back impellers (with axial thrust balancing).\r\nConnections\r\n: threaded ports ISO 228/1 (BS 2779).\r\nNM, NMD: version with pump casing and lanter bracket in cast iron.\r\nB-NM, B-NMD: version with pump casing and lanter bracket in bronze (the pumps are supplied fully painted).', 1, 'Calpeda', '500', 4, 200, 1, '2017-01-01 16:37:23'),
(5, 'DB Utility Pump', 'With a back pull out design these pumps are gland packed or mechanically sealed and are used for air conditioning, booster service, fire fighting and sprinkler system. Delivery size varies from 32 mm to 150 mm.\r\n', 1, 'Kirloskar', '3500', 4, 50, 1, '2017-01-01 16:39:55'),
(6, 'KE+ Agricultural End Suction Pumps', 'These pumps have a suction lift up to 8 m. With a back pull out type design these pumps are easy to maintain. The bearing is grease lubricated. These pumps are widely used in irrigation, industries or clear water handling and water supply for domestic use.', 1, 'Kirloskar', '3850', 4, 50, 1, '2017-01-01 16:40:46'),
(7, 'KPD, KPD-QF Process Pumps', 'These pumps are developed for process applications and are generally conforming to API 610. These are gland packed or mechanically sealed. These pumps are ideal for air conditioning, condensate extraction, distilleries, edible oil sugar and textile. Delivery size ranges from 20 mm to 200 mm.', 1, 'Kirloskar', '4500', 4, 50, 1, '2017-01-01 16:41:35'),
(8, 'PEARL Mini Family', 'These pumps can withstand wide voltage fluctuations from 180-240 volts. The thermal overload protector prevents motor burning. The stainless steel shaft is used for avoiding rust problem. The locked impeller promises consistent performance. These pumps are very useful in water supply for domestic use in bungalows, apartments, hotels and hospitals. This multi-purpose pump is constructed with high quality materials for durability.', 1, 'Kirloskar', '2250', 4, 50, 1, '2017-01-01 16:44:03'),
(9, 'Spit Metal Pulsating Sprinkler', 'GARDENING TOOL SPIT METAL PULSATING SPRINKLER GARDEN LAWN IRRIGATION 5 QTY Spare Sector Pulsating Sprinkler Head in metal, ideal for large surfaces.Jet interruption device for uniform distribution of water adjustable water flow Radius of coverage 39 feet Main Nozzle size 4mm Watering Degree (coverage) -15Â° to 360Â° Maximum Flow Rate- 960 LPH Min Pressure 2 Kg/cmÂ² Max Pressure 4 Kg/cmÂ²', 6, 'Pepper', '510', 4, 50, 1, '2017-01-01 17:01:20'),
(10, 'KK-IRIS-2010 Female Sprinkler', 'Its depend on the pressure of water...normally 5 to 10 meters ', 1, 'Kisan Kraft', '140', 4, 50, 1, '2017-01-01 17:02:56'),
(11, 'JW - 4 Arms Water Sprinkler', 'Four Arms Water Sprinkler For Gardening Features &amp; Specifications: Rotating Four Arms Sprinkler Comes With an Innovative Design Base Premium Quality and Easy to Use Sprinkler is Suitable for Large Gardens, Lawns and Vegetable Patches for Heavy Sprinkling Covers Approximately 6 to 8 Meters Diameter Depending on Water Pressure Can Operate on 1/2&quot;, 3/4&quot;, 1&quot; Water / Hose Pipe which can be Connected to Outdoor Faucet For Higher Water Pressure Use Push Pull', 6, 'JW', '190', 4, 50, 1, '2017-01-01 17:04:27');

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
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `level` int(1) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `address`, `level`, `phone`) VALUES
(1, 'Administrator', 'admin@admin.com', 'admin', 'dgagdf gdfs gdfg sdfg sdfg ', 1, 456455456),
(2, 'Shobi', 'ppshobi@gmail.com', 'pass', 'Kalpetta', 1, 1234567890),
(4, 'Priya', 'priya@test.com', 'pass', 'Kalpetta', 0, 1234567890),
(5, 'Test', 'test@test.com', '1234', ' hghjgjhg hg jhg gjhg', 0, 1234567890);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `items_in_order`
--
ALTER TABLE `items_in_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
