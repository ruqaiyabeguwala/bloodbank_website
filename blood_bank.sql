-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 11:25 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bgroup` varchar(255) NOT NULL,
  `amount` decimal(65,2) NOT NULL,
  `hospital` text NOT NULL,
  `date` datetime(6) NOT NULL,
  `bd_id` int(255) NOT NULL,
  `b_id` int(255) NOT NULL,
  `confirm` varchar(255) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bgroup`, `amount`, `hospital`, `date`, `bd_id`, `b_id`, `confirm`) VALUES
(76, 'A-', '0.00', 'Hamidia Hospital', '2017-11-16 02:42:14.000000', 2, 0, 'no'),
(77, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 10:24:25.000000', 3, 0, 'no'),
(78, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 10:36:33.000000', 4, 0, 'no'),
(79, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 10:44:47.000000', 5, 0, 'no'),
(80, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 10:49:33.000000', 5, 0, 'no'),
(81, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 10:54:49.000000', 6, 0, 'no'),
(82, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 11:08:04.000000', 7, 13, 'yes'),
(83, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 11:43:23.000000', 9, 13, 'no'),
(84, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 11:47:57.000000', 8, 13, 'no'),
(85, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 11:48:32.000000', 8, 13, 'no'),
(86, 'A-', '0.00', 'Hamidia Hospital', '2017-11-18 11:49:18.000000', 10, 13, 'no'),
(87, 'A-', '0.00', 'Hamidia Hospital', '2017-11-21 04:10:02.000000', 26, 13, 'no'),
(88, 'A-', '0.00', 'Hamidia Hospital', '2018-01-09 01:51:29.000000', 27, 13, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `bd_id` int(11) NOT NULL AUTO_INCREMENT,
  `bgroup` varchar(256) NOT NULL,
  `bamount` decimal(65,2) NOT NULL,
  `hospital` varchar(256) NOT NULL,
  `date` date DEFAULT NULL,
  `b_id` int(255) NOT NULL,
  `sold` text NOT NULL,
  `confirm` varchar(255) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`bd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`bd_id`, `bgroup`, `bamount`, `hospital`, `date`, `b_id`, `sold`, `confirm`) VALUES
(3, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(4, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(5, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(6, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(7, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(8, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(9, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(10, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(26, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(27, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'yes', 'yes'),
(28, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'no', 'no'),
(29, 'A-', '0.00', 'Hamidia Hospital', NULL, 13, 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `rid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`rid`, `name`, `email`, `address`, `pass`) VALUES
('15107615422030', 'kljkhlvlkhc', 'rb@gmail.com', 'gkjljhyfyyjhj', 'admin'),
('15107620414640', 'lsnflksnflk', 'rbc@gmail.com', 'kalwlkfklfn', 'admin'),
('15108389464898', 'Hamidia Hospital', 'hamidia@gmail.com', 'BHOPAL', 'admin'),
('15112771461358', 'Ruqaiya Hospital', 'ruqaiya@gmail.com', 'igh bu hhopal', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  PRIMARY KEY (`b_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`b_id`, `name`, `email`, `bgroup`, `address`, `pass`) VALUES
(13, 'Ruqaiya Beguwala', 'rb@gmail.com', 'A+', 'IGH BU Bhopal', 'admin'),
(14, 'abc def', 'abc@gmail.com', 'B+', 'xyz', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
