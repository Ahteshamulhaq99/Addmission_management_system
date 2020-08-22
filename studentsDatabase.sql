-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 02:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `name`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `std_reg`
--

CREATE TABLE `std_reg` (
  `s_id` int(11) NOT NULL,
  `s_name` text NOT NULL,
  `s_father` text NOT NULL,
  `field` text NOT NULL,
  `s_mobile` int(15) NOT NULL,
  `s_email` text NOT NULL,
  `s_address` text NOT NULL,
  `s_gender` text NOT NULL,
  `standard` varchar(10) NOT NULL,
  `s_roll` int(10) NOT NULL,
  `board` text NOT NULL,
  `s_percent` int(10) NOT NULL,
  `pass_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_reg`
--

INSERT INTO `std_reg` (`s_id`, `s_name`, `s_father`, `field`, `s_mobile`, `s_email`, `s_address`, `s_gender`, `standard`, `s_roll`, `board`, `s_percent`, `pass_year`) VALUES
(32, 'aaaa', 'eeee', 'enviromental science', 2147483647, 'aaaa@gmail.com', '4444444rrrrrrrrrrrrrrr', 'on', '7878', 234, 'karachi', 70, 2018),
(34, 'ali', 'shahab', 'computer science', 2147483647, 'aaaa@gmail.com', 'yrjgkguffyjfjf', 'on', '11', 8989, 'lahore', 70, 2017),
(36, 'ali', 'shahab', 'bba', 2147483647, 'aaaa@gmail.com', '4444444rrrrrrrrrrrrrrr', 'male', '12', 22222, 'karachi', 70, 2018),
(37, 'ali', 'shahab', 'enviromental science', 2147483647, 'aaaa@gmail.com', '4444444rrrrrrrrrrrrrrr', 'male', '12', 22222, 'karachi', 70, 2018),
(38, 'ali', 'shahab', 'enviromental science', 2147483647, 'aaaa@gmail.com', '4444444rrrrrrrrrrrrrrr', 'male', '12', 22222, 'karachi', 70, 2018),
(39, 'ali', 'shahab', 'enviromental science', 2147483647, 'aaaa@gmail.com', '4444444rrrrrrrrrrrrrrr', 'male', '12', 22222, 'karachi', 70, 2018),
(40, 'ali', 'shahab', 'enviromental science', 2147483647, 'aaaa@gmail.com', '4444444rrrrrrrrrrrrrrr', 'male', '12', 22222, 'karachi', 70, 2018),
(41, 'ahtesham', 'shahab', 'bba', 37879789, 'aaaa@gmail.com', 'cduic', 'male', '12', 8989, 'lahore', 122, 222),
(42, 'ahtesham', 'lsjcilsij', 'bba', 34567890, 'aaaa@gmail.com', '123qw', 'male', '12', 22, 'karachi', 33, 2018),
(43, 'ahtesham', 'lsjcilsij', 'bba', 34567890, 'aaaa@gmail.com', '123qw', 'male', '12', 22, 'karachi', 33, 2018),
(44, 'ahtesham', 'lsjcilsij', 'bba', 34567890, 'aaaa@gmail.com', '123qw', 'male', '12', 22, 'karachi', 33, 2018),
(45, 'ahtesham', 'lsjcilsij', 'bba', 34567890, 'aaaa@gmail.com', '123qw', 'male', '12', 22, 'karachi', 33, 2018),
(46, 'ahtesham', 'lsjcilsij', 'bba', 34567890, 'aaaa@gmail.com', '123qw', 'male', '12', 22, 'karachi', 33, 2018),
(47, 'ali', 'shahab', 'bba', 2345, 'abcde@gmail.com', '12346', 'male', '11', 33, 'uuu', 70, 2018),
(48, 'ali', 'shahab', 'bba', 2345, 'abcde@gmail.com', '12346', 'male', '11', 33, 'uuu', 70, 2018),
(49, 'ali', 'shahab', 'bba', 2345, 'abcde@gmail.com', '12346', 'male', '11', 33, 'uuu', 70, 2018),
(50, 'ali', 'shahab', 'bba', 2345, 'abcde@gmail.com', '12346', 'male', '11', 33, 'uuu', 70, 2018),
(51, 'ali', 'shahab', 'bba', 2345, 'abcde@gmail.com', '12346', 'male', '11', 33, 'uuu', 70, 2018),
(52, 'ali', 'shahab', 'bba', 2345, 'abcde@gmail.com', '12346', 'male', '11', 33, 'uuu', 70, 2018),
(53, 'ali', 'shahab', 'bba', 2345, 'abcde@gmail.com', '12346', 'male', '11', 33, 'uuu', 70, 2018),
(54, 'Ahtesham ul haq', 'shahab alam', 'enviromental science', 2147483647, 'jjkdjjdjjdkkj@jjdk.nnjj', 'qqqqqqqqqqqq wwwwwwwwwwwwwwww eeeeeeeeeeeeeee rrrrrrrr', 'male', 'xii', 8989, 'karachi', 70, 2018),
(55, 'ali', 'shahab', 'enviromental science', 12345, 'abcde@gmail.com', '4444444rrrmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmrrrrrrrrrrrr', 'female', '12', 33, 'karachi', 90, 2017),
(56, 'ali', 'shahab', 'enviromental science', 12345, 'abcde@gmail.com', '4444444rrrmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmrrrrrrrrrrrr', 'female', '12', 33, 'karachi', 90, 2017),
(57, 'ali', 'shahab', 'enviromental science', 12345, 'abcde@gmail.com', '4444444rrrmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmrrrrrrrrrrrr', 'female', '12', 33, 'karachi', 90, 2017),
(58, 'aaa', 'bbb', 'software engineer', 123, 'aaaa@gmail.com', '4444444rrrrrrrrrrrrrrr', 'male', '34', 8989, '0occ', 2, 2222),
(59, 'aaaa', 'eeee', 'software engineer', 3456, 'lisjd@kkl.nnn', 'yrjgkguffyjfjf', 'male', '11', 22222, 'karachi', 70, 2017),
(60, 'aaaa', 'eeee', 'software engineer', 3456, 'lisjd@kkl.nnn', 'yrjgkguffyjfjf', 'male', '11', 22222, 'karachi', 70, 2017),
(61, 'ahtesham', 'shahab', 'software engineer', 12333333, 'lisjd@kkl.nnn', 'ssio', 'male', '11', 22222, 'karachi', 70, 2017),
(62, 'ahtesham', 'shahab', 'software engineer', 12333333, 'lisjd@kkl.nnn', 'ssio', 'male', '11', 22222, 'karachi', 70, 2017),
(63, 'ahtesham', 'shahab', 'software engineer', 12333333, 'lisjd@kkl.nnn', 'ssio', 'male', '11', 22222, 'karachi', 70, 2017),
(64, 'ahtesham', 'shahab', 'software engineer', 12333333, 'lisjd@kkl.nnn', 'ssio', 'male', '11', 22222, 'karachi', 70, 2017),
(65, 'ahtesham', 'shahab', 'software engineer', 12333333, 'lisjd@kkl.nnn', 'ssio', 'male', '11', 22222, 'karachi', 70, 2017),
(66, 'ahtesham', 'shahab', 'software engineer', 12333333, 'lisjd@kkl.nnn', 'ssio', 'male', '11', 22222, 'karachi', 70, 2017),
(67, 'ahtesham', 'shahab', 'computer science', 4567, 'aaaa@gmail.com', '12346', 'male', '11', 234, 'sfdv', 70, 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_reg`
--
ALTER TABLE `std_reg`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_id` (`s_id`,`s_name`,`s_father`,`field`,`s_mobile`,`s_email`,`s_address`,`s_gender`,`standard`,`s_roll`,`s_percent`,`pass_year`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `std_reg`
--
ALTER TABLE `std_reg`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
