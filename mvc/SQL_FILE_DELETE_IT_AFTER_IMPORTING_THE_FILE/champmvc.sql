-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2015 at 06:03 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `champmvc`
--
CREATE DATABASE IF NOT EXISTS `champmvc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `champmvc`;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `head` varchar(50) DEFAULT NULL,
  `subhead` varchar(50) DEFAULT NULL,
  `content` varchar(5000) NOT NULL,
  `type` varchar(50) NOT NULL,
  `imglink` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10006 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `head`, `subhead`, `content`, `type`, `imglink`) VALUES
(10001, 'NULL', 'NULL', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n\r\n"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n\r\n"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n\r\n"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n', 'home', NULL),
(10002, 'ABOUT US', '', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n\r\n"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n\r\n"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n\r\n"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n', 'aboutus', NULL),
(10003, 'OUR SRVICES', '', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', 'services', NULL),
(10004, 'PORTFOLIO', NULL, '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', 'portfolio', NULL),
(10005, 'CONTACT US', NULL, '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', 'contact', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(36) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `feed` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `feed`) VALUES
(1, 'imsparsh', 'sparsh@yahoo.com', '9452666355', 'hell0 yeah.. '),
(2, 'prakhar', 'mhjfdldsad@g.com', '8908909090', ',ngjflk'),
(3, ',jhj', 'mhjfdldsad@g.comgtg', '8908909090', ',/hjjg'),
(4, 'prakhar', 'mhjfdldsad@g.com', '8908909090', ',j.ghj;lg;lgphg'),
(5, 'prakhar', '55555@f.m', '7898909099', 'gdgh'),
(6, 'prakhar gethe', 'teamzenithindia@gmail.com', '8989898989', 'cngfnm'),
(7, 'vikrAM', 'teamzenithindia@gmail.com', '8989898989', 'MEIN CHUTIYA HOON');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `head` int(11) NOT NULL,
  `href` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `head` varchar(100) NOT NULL,
  `link` varchar(50) NOT NULL,
  `descpt` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `head`, `link`, `descpt`) VALUES
(1, 'NEWS AND EVENTS', '', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'),
(2, 'NEWS AND EVENTS', '', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'),
(3, 'NEWS AND EVENTS', 'null', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'),
(4, 'NEWS AND EVENTS', 'null', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(20) NOT NULL,
  `name` varchar(36) NOT NULL,
  `imgurl` varchar(50) NOT NULL,
  `descrpt` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `imgurl`, `descrpt`) VALUES
(1, 'name', '1.jpg', 'kfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf ;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ld kfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf ;ldkfdhf;ld'),
(2, 'name2', '1.jpg', 'kfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf ;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ld kfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ld'),
(3, 'name2', '1.jpg', 'kfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf; ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf ;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ld kfdhf;ldkfdhf;ldkfdhf;ldkfdhf;ld'),
(4, 'NAME', '1.jpg', 'DESCRIPTION A SHORT MSG');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `head` varchar(50) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `imglink` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `head` (`head`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `head`, `content`, `imglink`) VALUES
(1, 'Web Application Development', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n', NULL),
(2, 'Mobile Application Development', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n', NULL),
(3, 'ERP Solutions', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n', NULL),
(4, 'Software development', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n', NULL),
(5, 'Network Managemnet', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `descrpt` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL,
  `desig` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `descrpt`, `img`, `desig`) VALUES
(1, 'dgfg', 'efhgggggghhh   hhhhhhhhhhhhhhhhh  hhhhhhhh  hhhhhhhhhh  hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '1.jpg', 'tttttttt'),
(2, 'dgfg', 'efhgggggghhhhh hhhhhhhhhhhh hhhhhh hhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '1.jpg', 'tttttttt'),
(3, 'dgfg', 'efhgggggghhhhh hhhhhhhhhhhh hhhhhh hhhhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '1.jpg', 'tttttttt'),
(4, 'name', 'description', '1.jpg', 'designation');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `by` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `by`, `msg`) VALUES
(1, 'melk', ';kljg;relghehtjrykjl'),
(2, 'melkmelk', ';kljg;relghehtjrykj l;kljg;relghehtjrykjl;kljg  ;relghehtjrykjl;kljg;relgheh tjrykjl;kljg;relghehtjrykjl; kljg;relghehtjrykjl;kljg;rel ghehtjrykjl;kljg;relghehtjry kjl;kljg;relghehtjrykjl;kljg ;relghehtjrykjl;kljg;relgheh tjrykjl;kljg;relghehtjrykjl;kljg; relghehtjrykjl;kljg;relghehtjrykjl;k ljg;relghehtjrykjl;kljg;relghehtjrykjl; kljg;relghehtjrykjl;kljg;relghehtjrykjl ; kljg;relghehtjrykjl;kljg;relghehtjrykjl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
