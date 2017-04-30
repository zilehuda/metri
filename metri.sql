-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 04:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metri`
--

-- --------------------------------------------------------

--
-- Table structure for table `bintrested`
--

CREATE TABLE `bintrested` (
  `uid` int(11) NOT NULL,
  `uid2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bintrested`
--

INSERT INTO `bintrested` (`uid`, `uid2`) VALUES
(12, 13),
(13, 12),
(15, 13);

-- --------------------------------------------------------

--
-- Table structure for table `intrested`
--

CREATE TABLE `intrested` (
  `uid` int(11) NOT NULL,
  `iid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intrested`
--

INSERT INTO `intrested` (`uid`, `iid`) VALUES
(12, 13),
(13, 4),
(13, 9),
(13, 11),
(13, 12),
(13, 15),
(14, 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `mt` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `radio` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `email`, `age`, `mt`, `religion`, `profile`, `radio`, `pwd`) VALUES
(1, 'asda', 'sadasd', 'adasd@nu.ed', '12', 'urdu', 'muslim', 'self', 'male', '123'),
(2, 'asda', 'sadasd', 'adasd@nu.ed', '12', 'urdu', 'muslim', 'self', 'male', '123'),
(3, 'pawan', 'kumar', 'khatri.pawan22@nu.edu.pk', '14', 'urdu', 'muslim', 'self', 'male', '123'),
(4, 'padas', 'ada', 'pawan@pawan.com', 'asdad', 'urdu', 'muslim', 'self', 'male', '1'),
(5, 'pawan', 'kumar', 'pawan@pawan.com', '123', 'urdu', 'muslim', 'self', 'male', 'c4ca4238a0b923820dcc509a6f75849b'),
(6, 'pawan', 'aa', 'pawan@pawan.com', '123', 'urdu', 'muslim', 'self', 'male', 'c4ca4238a0b923820dcc509a6f75849b'),
(7, 'a', 'a', 'pawan@pawan.com', '1', 'urdu', 'muslim', 'self', 'female', 'c4ca4238a0b923820dcc509a6f75849b'),
(8, 'b', 'b', 'adasd@nu.ed', 'b', 'urdu', 'muslim', 'self', 'male', '92eb5ffee6ae2fec3ad71c777531578f'),
(9, 'c', 'c', 'c@nu.edu.pk', 'c', 'urdu', 'muslim', 'self', 'male', '202cb962ac59075b964b07152d234b70'),
(10, 'p', 'c', 'c@nu.edu.pk', 'c', 'urdu', 'muslim', 'self', 'male', 'c4ca4238a0b923820dcc509a6f75849b'),
(11, 's', 's', 'adasd@nu.ed', '12', 'urdu', 'muslim', 'self', 'male', '03c7c0ace395d80182db07ae2c30f034'),
(12, 'karan', 'kumar', 'khatri.catten22@gmail.com', '12', 'punjabi', 'christen', 'son', 'male', 'c4ca4238a0b923820dcc509a6f75849b'),
(13, 'vijay', 'kumar', 'vijay@yahoo.com', '12', 'punjabi', 'hindu', 'danger', 'male', 'c20ad4d76fe97759aa27a0c99bff6710'),
(14, 'pawank ', 'a', 'pawank@nu.edu.pk', '12', 'sindhi', 'hindu', 'son', 'male', '8ce4b16b22b58894aa86c421e8759df3'),
(15, 'ppp', 'a', 'pp@nu.ed', '13', 'urdu', 'muslim', 'self', 'male', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bintrested`
--
ALTER TABLE `bintrested`
  ADD PRIMARY KEY (`uid`,`uid2`);

--
-- Indexes for table `intrested`
--
ALTER TABLE `intrested`
  ADD PRIMARY KEY (`uid`,`iid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
