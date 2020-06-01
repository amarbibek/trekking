-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2017 at 09:01 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trekking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE IF NOT EXISTS `booked` (
  `id` int(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `login_id`, `name`, `gender`, `age`, `contact`, `price`) VALUES
(6, 'kumar.bee014@gmail.com', 'bibek', 'male', 32, 123, 200),
(7, 'kumar.bee014@gmail.com', 'niru', 'male', 25, 369, 200),
(8, 'kumar.bee014@gmail.com', 'ankit', 'male', 21, 32546, 10000),
(9, 'kumar.bee014@gmail.com', 'dipu', 'male', 21, 325416, 10000),
(10, 'kumar.bee014@gmail.com', 'xyz', 'male', 99, 9876543210, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(11) NOT NULL,
  `tracking_id` bigint(20) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_contact` varchar(11) NOT NULL,
  `sender_address` varchar(255) NOT NULL,
  `sender_pin` int(11) NOT NULL,
  `sender_city` varchar(50) NOT NULL,
  `sender_country` varchar(50) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_email` varchar(70) NOT NULL,
  `receiver_contact` varchar(11) NOT NULL,
  `receiver_address` varchar(255) NOT NULL,
  `receiver_pin` int(11) NOT NULL,
  `receiver_city` varchar(50) NOT NULL,
  `receiver_country` varchar(50) NOT NULL,
  `weight` float NOT NULL,
  `volume` float NOT NULL,
  `basic_price` float NOT NULL,
  `weight_price` float NOT NULL,
  `volume_price` float NOT NULL,
  `total_price` float NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`id`, `tracking_id`, `sender_name`, `sender_email`, `sender_contact`, `sender_address`, `sender_pin`, `sender_city`, `sender_country`, `receiver_name`, `receiver_email`, `receiver_contact`, `receiver_address`, `receiver_pin`, `receiver_city`, `receiver_country`, `weight`, `volume`, `basic_price`, `weight_price`, `volume_price`, `total_price`, `status`) VALUES
(2, 1315530948, 'Niranjan', 'niranjany74@gmail.com', '123456789', '6, chick world', 560057, 'delhi', 'India', 'bibek', 'bibek@x.com', '987654321', '4, btm', 560090, 'mumbai', 'nepal', 10, 48, 1500, 1665, 1725, 4890, 'pending'),
(3, 1315530949, 'niranjan', 'niranjany74@gmail.com', '4569871230', 'india', 57, 'bangalore', 'india', 'bibek', 'kumar.bee@gmail.com', '5896321054', 'nepal', 90, 'kolkata', 'nepal', 5, 48, 2500, 2500, 2875, 7875, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(80) NOT NULL,
  `image` text NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `trekking_agency` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `image`, `date_start`, `date_end`, `location`, `trekking_agency`, `price`) VALUES
(2, 'himalaya trek', 'pics/20-haunting-photos-of-environmental-pollution15.jpg', '2017-03-11', '2017-03-14', 'himalaya', 'himalaya trek', 15000),
(3, 'universe trek', 'pics/593-600x323.jpg', '2017-03-10', '2017-03-30', 'full galaxy', 'galaxy trek', 10000000000),
(4, 'lalbag', 'pics/11148440_912319248825425_3649234922399605896_n.png', '2017-03-10', '2017-03-10', 'lalbag', 'bjs', 200),
(5, 'Darjeeling', 'pics/11061675_751348495020408_7056101916768988275_n.jpg', '2017-04-10', '2017-04-20', 'darjeeling', 'East india trek', 10000),
(6, 'goa trek', 'pics/18805_10153307220934602_580032452773020066_n.jpg', '2017-03-20', '2017-03-30', 'goa', 'goa trekking company', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE IF NOT EXISTS `package_details` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL,
  `source` varchar(52) NOT NULL,
  `destination` varchar(52) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `source`, `destination`, `price`) VALUES
(1, 'delhi', 'mumbai', 1500),
(2, 'bangalore', 'kolkata', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `id` int(11) NOT NULL,
  `tracking_id` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `carriers` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `tracking_id`, `status`, `carriers`, `location`, `date`, `time`) VALUES
(1, 1315530949, 'processing', 'DHL', 'bangalore', '2017-03-03', '10:20:36'),
(2, 1315530949, 'processing', 'FedEx', 'chennai', '2017-03-04', '10:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(52) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `repassword` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `contact`, `country`, `email`, `password`, `repassword`, `active`, `type`) VALUES
(44, 'Bibek', 'kumar', 2147483647, 'Nepal', 'kumar.bee014@gmail.com', 'bibek', 'bibek', 1, 0),
(45, 'niranjan', 'yadav', 2147483647, 'india', 'niranjany74@gmail.com', 'yadavniru', 'yadavniru', 1, 1),
(46, 'abc', 'xyz', 1234567890, 'usa', 'abc@xyz.com', 'abc', 'abc', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
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
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
