-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2013 at 04:38 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `try`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `item_id`, `item_name`, `item_price`) VALUES
(0, 1, 'firstitem', 200),
(0, 1, 'firstitem', 200),
(0, 1, 'firstitem', 200),
(0, 1, 'firstitem', 200),
(0, 1, 'firstitem', 300),
(0, 1, 'firstitem', 200),
(0, 1, 'firstitem', 200),
(0, 1, 'firstitem', 200),
(27, 1, 'samsung g5', 4500),
(27, 2, 'Nokia 5200', 4500),
(27, 2, 'Nokia 5200', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(3, 'toys'),
(4, 'computers'),
(25, 'Phones'),
(26, 'Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE IF NOT EXISTS `clothes` (
  `Clothes_id` int(11) NOT NULL AUTO_INCREMENT,
  `Clothes_name` char(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`Clothes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`Clothes_id`, `Clothes_name`, `price`) VALUES
(1, 'Men`s Shorts', 350),
(2, 'Men`s Pants', 550);

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE IF NOT EXISTS `computers` (
  `computers_id` int(11) NOT NULL AUTO_INCREMENT,
  `computers_name` char(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`computers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`computers_id`, `computers_name`, `price`) VALUES
(1, 'firstitem', 300),
(2, 'mouse', 300),
(3, 'Desktop', 13500);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `fullname`) VALUES
(22, 'a', 'b', 'acbc'),
(23, 'd', 'd', 'dinesh'),
(25, 'dineshd', 'dhakal', 'Dinesh Dhakal'),
(26, 'kaushal', 'ka', 'Kaushal Saraf'),
(27, 'k', 'k', 'Kaushal'),
(28, 'chit', 'chit', 'Chitrit'),
(29, 'adi', 'adi', 'Aditya'),
(30, 's', 's', 'subbu'),
(31, 'sak', 'sak', 'Saksham Nanda');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `Phones_id` int(11) NOT NULL AUTO_INCREMENT,
  `Phones_name` char(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`Phones_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`Phones_id`, `Phones_name`, `price`) VALUES
(1, 'samsung g5', 4500),
(2, 'Nokia 5200', 4500),
(3, 'Nokia X6', 14000),
(4, 'Samsung S3', 36500),
(5, 'BlackBerry GT', 32000),
(6, 'BlackBerry GE', 34000);

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE IF NOT EXISTS `toys` (
  `toys_id` int(11) NOT NULL AUTO_INCREMENT,
  `toys_name` char(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`toys_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`toys_id`, `toys_name`, `price`) VALUES
(1, 'firstitem', 200),
(2, 'firstitem', 200),
(3, 'secnd', 2),
(4, 'fourthitem', 300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fullname`) VALUES
('k', 'Chrysanthemum.jpg'),
('k', 'images/Chrysanthemum'),
('k', 'images/Chrysanthemum'),
('k', 'images/Koala.jpg'),
('k', 'images/Koala.jpg'),
('kaushal', 'images/Koala.jpg'),
('kaushal', 'images/Koala.jpg'),
('k', ''),
('k', ''),
('saksham', ''),
('s', ''),
('kaus', ''),
('ka', ''),
('p', ''),
('r', ''),
('a', ''),
('sa', ''),
('n', 'nishit'),
('ks', 'Kaushal Saraf'),
('dd', 'dinesh'),
('d', 'dinesh'),
('abc', 'abcd'),
('xyz', 'xyzw'),
('hhj', 'bhbsab'),
('a', 'acbc'),
('d', 'dinesh'),
('d', 'dinesh'),
('dineshd', 'Dinesh Dhakal'),
('kaushal', 'Kaushal Saraf'),
('k', 'Kaushal'),
('chit', 'Chitrit'),
('adi', 'Aditya'),
('s', 'subbu'),
('sak', 'Saksham Nanda');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
