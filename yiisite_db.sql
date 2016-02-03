-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2016 at 03:27 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yiisite_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `expensestypeid` int(10) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `title`, `expensestypeid`, `datetime`, `amount`) VALUES
(1, 'Test work', 1, '21/01/2015', 20.00),
(2, 'second ', 4, '21/01/2015', 10.00),
(3, 'checking', 1, '21/01/2015', 10.00),
(4, 'check it ', 2, 'work', 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `expenses_types`
--

CREATE TABLE IF NOT EXISTS `expenses_types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `expenses_types`
--

INSERT INTO `expenses_types` (`id`, `title`, `status`) VALUES
(1, 'Travel', 1),
(2, 'Food', 1),
(3, 'Entertainment', 1),
(4, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`) VALUES
(1, 'This is a test News', 'news body is here news body is here news body is here news body is here news body is here news body is here news body is here news body is here news body is here news body is here news body is here news body is here news body is here news body is here '),
(2, 'Test news 2', 'This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 This is test newsletter 2 '),
(3, 'Test news 3', 'This is a test work');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
