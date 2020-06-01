-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 07:23 AM
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
  `package_id` int(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `package_id`, `login_id`, `name`, `gender`, `age`, `contact`, `price`, `status`) VALUES
(45, 10, 'niranjany74@gmail.com', 'bibek bihari', 'male', 75, 2596314785, 20000, 'approved'),
(46, 10, 'niranjany74@gmail.com', 'niru nepali', 'male', 92, 8215364987, 20000, 'pending'),
(47, 5, 'niranjany74@gmail.com', 'jhkj', 'male', 22, 354543543, 10000, ''),
(48, 5, 'niranjany74@gmail.com', 'hgjkgjk', 'male', 33, 5435435, 10000, ''),
(49, 3, '', 'Niru', 'male', 25, 515461, 10000000000, ''),
(50, 3, '', 'shibu', 'male', 26, 51984616, 10000000000, ''),
(51, 3, '', 'bibek', 'male', 27, 5486491651, 10000000000, ''),
(52, 12, '', 'jhgkj', 'male', 22, 3465345646, 50, ''),
(53, 2, '', 'hglgkj', 'male', 22, 65453465, 15000, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(52) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'Bibek kumar', 'kumar.bee014@gmail.com', 'nice :)'),
(2, 'mahendra', 'mahendra@gmail.com', 'owsm!!!');

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
  `pick_n_drop_location` varchar(52) NOT NULL,
  `pick_up_time` time NOT NULL,
  `trekking_agency` varchar(50) NOT NULL,
  `inclusives` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `image`, `date_start`, `date_end`, `location`, `pick_n_drop_location`, `pick_up_time`, `trekking_agency`, `inclusives`, `price`) VALUES
(2, 'himalaya trek', 'pics/20-haunting-photos-of-environmental-pollution15.jpg', '2017-03-11', '2017-03-14', 'himalaya', 'bangalore', '06:21:34', 'himalaya trek', 'Hotel service free', 15000),
(3, 'universe trek', 'pics/593-600x323.jpg', '2017-03-10', '2017-03-30', 'full galaxy', 'earth (solar system wala)', '12:00:00', 'galaxy trek', 'no fuel charges', 10000000000),
(5, 'Darjeeling', 'pics/11061675_751348495020408_7056101916768988275_n.jpg', '2017-04-10', '2017-04-20', 'darjeeling', 'yeshwantpur', '09:00:00', 'East india trek', 'tea free', 10000),
(6, 'goa trek', 'pics/18805_10153307220934602_580032452773020066_n.jpg', '2017-03-20', '2017-03-30', 'goa', 'bangalore', '02:00:00', 'goa trekking company', 'night club', 20000),
(7, 'nepal visit', 'pics/19MRTURNER-videoSixteenByNine1050.jpg', '2017-04-01', '2017-04-07', 'central nepal', 'janakpur', '11:00:00', 'mahaveer', 'ice cream', 20000),
(9, 'goa trek', 'pics/18805_10153307220934602_580032452773020066_n.jpg', '2017-03-20', '2017-03-30', 'goa', 'airport', '10:00:00', 'goa trekking company', 'local fenny free :)', 20000),
(11, 'pakistan trip', 'pics/11800179_900078636694438_8983715128387670051_n.jpg', '2017-04-10', '2017-04-30', 'islamabad', 'nepal', '01:20:00', 'indo-pak travels', 'free nuclear weapons', 25000),
(12, 'Star Trek', 'pics/11074726_746327635481409_4551535323001296178_n.jpg', '2017-03-17', '2017-04-18', 'Star', 'dharti', '00:00:00', 'ISRO', 'Chai free h bhai', 50);

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
