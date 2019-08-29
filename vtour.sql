-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 04:24 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `announcement_title` varchar(200) NOT NULL,
  `announcement_description` text NOT NULL,
  `announcement_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `attachment_id` int(11) NOT NULL,
  `attachment_name` varchar(300) NOT NULL,
  `attachment_location` text NOT NULL,
  `announcement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_name` varchar(300) NOT NULL,
  `banner_location` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(2) NOT NULL,
  `course` varchar(10) NOT NULL,
  `course_descriptioon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(300) NOT NULL,
  `image_location` text NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_descripton` text NOT NULL,
  `post_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`attachment_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `attachment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
