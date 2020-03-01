-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2020 at 12:46 AM
-- Server version: 10.3.15-MariaDB-1
-- PHP Version: 7.3.8-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thinkfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('zeel', 'zeel');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `authorEmail` varchar(20) NOT NULL,
  `blog_author` varchar(20) NOT NULL,
  `authorDisease` varchar(20) NOT NULL,
  `blog_bgcolor` varchar(20) NOT NULL,
  `blog_textcolor` varchar(20) NOT NULL,
  `blog_content` varchar(100) NOT NULL,
  `blog_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `authorEmail`, `blog_author`, `authorDisease`, `blog_bgcolor`, `blog_textcolor`, `blog_content`, `blog_time`) VALUES
(1, '', 'Yo!', 'Epilepsy', 'Red', 'blue', 'Helo There', '2020-02-29 18:08:08'),
(2, '', 'Yo!', 'Anxiety', 'blue', 'blue', 'Hello There', '2020-02-29 18:08:29'),
(3, '', 'Hello', 'Psoriasis', 'blue', 'yellow', 'Sometext', '2020-02-29 18:19:02'),
(4, '', 'Hello', 'Psoriasis', 'blue', 'yellow', 'Sometext', '2020-02-29 18:19:54'),
(5, '', 'Hello', 'Psoriasis', 'blue', 'yellow', 'Sometext', '2020-02-29 18:22:26'),
(6, '', '', '', '', '', '', '2020-03-01 07:48:25'),
(7, '', 'Kenobi', 'Psoriasis', 'Red', 'blue', 'General Kenobi', '2020-03-01 07:49:12'),
(8, '', 'Kenobi', 'Psoriasis', 'Red', 'blue', 'General Kenobi', '2020-03-01 07:55:54'),
(9, '', 'Kenobi', 'Psoriasis', 'Red', 'blue', 'General Kenobi', '2020-02-29 21:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fn` text NOT NULL,
  `ln` text NOT NULL,
  `degree` text NOT NULL,
  `city` text NOT NULL,
  `dob` date NOT NULL,
  `exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `fn` text NOT NULL,
  `ln` text NOT NULL,
  `birthdate` date NOT NULL,
  `city` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `emailid` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fn`, `ln`, `birthdate`, `city`, `gender`, `emailid`, `phone`, `password`) VALUES
(4, 'desk', 'table', '2020-02-25', 'herk', '', 'jayesh.waghmare30@gmail.com', '9768153787', 'desktop12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
