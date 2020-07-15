-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 07:49 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_celebrities`
--

CREATE TABLE IF NOT EXISTS `tbl_celebrities` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `image` varchar(256) NOT NULL,
  `used` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_celebrities`
--

INSERT INTO `tbl_celebrities` (`id`, `name`, `image`, `used`) VALUES
(1, 'Pitbull', 'https://upload.wikimedia.org/wikipedia/commons/b/b7/Pitbull%2C_2012_%282%29.jpg', 0),
(2, 'Leonardo DiCaprio', 'https://www.telegraph.co.uk/content/dam/films/2018/09/21/TELEMMGLPICT000027014340_trans%2B%2BM37qcIWR9CtrqmiMdQVx7HKcsGtiuU_lafizKj4PQO0.jpeg', 0),
(3, 'SElina Gomez', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/singer-and-actress-selena-gomez-poses-as-she-arrives-for-news-photo-1586786642.jpg?crop=0.668xw:1.00xh;0.0323xw,0&resize=480:*', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_players`
--

CREATE TABLE IF NOT EXISTS `tbl_players` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_players`
--

INSERT INTO `tbl_players` (`id`, `name`, `score`) VALUES
(1, 'Ramila', 34),
(2, 'Shashika', 15),
(3, 'Gayathra', 100),
(4, 'sathira', 20),
(5, 'sathira', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_celebrities`
--
ALTER TABLE `tbl_celebrities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_players`
--
ALTER TABLE `tbl_players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_celebrities`
--
ALTER TABLE `tbl_celebrities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_players`
--
ALTER TABLE `tbl_players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
