-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2014 at 08:38 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ihax_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ihax`
--

CREATE TABLE IF NOT EXISTS `ihax` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `institute` varchar(100) NOT NULL DEFAULT '',
  `contact` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `level` int(11) NOT NULL DEFAULT '0',
  `timestamp` varchar(14) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ihax`
--

INSERT INTO `ihax` (`username`, `password`, `name`, `institute`, `contact`, `email`, `level`, `timestamp`) VALUES
('deshraj', 'deshraj', 'deshraj', 'jss', '32849284892', 'sdnfmfns@gmail.com', 20, '1397290805'),
('singh21ss3', 'par', 'Piyush', 'JSS', '9871740494', 'piyush.best@gmail.com', 23, '1397289021');

-- --------------------------------------------------------

--
-- Table structure for table `ihax_pages`
--

CREATE TABLE IF NOT EXISTS `ihax_pages` (
  `level` int(11) NOT NULL DEFAULT '0',
  `page` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`level`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ihax_pages`
--

INSERT INTO `ihax_pages` (`level`, `page`) VALUES
(0, 'start.php'),
(1, 'jss.php'),
(2, 'jvm1.php'),
(3, 'nokia.php'),
(4, 'jvm2.php'),
(7, 'infection.php'),
(5, 'hearts.php'),
(6, 'buffer.php'),
(8, 'imagine.php'),
(9, 'notallowed.php'),
(11, 'rar.php'),
(10, 'bit.php'),
(12, 'a,b,c.php'),
(13, 'jvm3.php'),
(14, 'hack.php'),
(15, 'door.php'),
(-1, 'accountdisabled.php'),
(16, 'jvm4.php'),
(17, 'fly.php'),
(18, 'hide.php'),
(19, 'code.php'),
(20, 'mp3.php'),
(21, 'ankit.php'),
(23, 'winner.php'),
(22, 'win.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
