-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2014 at 10:44 PM
-- Server version: 5.5.17
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testri`
--
CREATE DATABASE IF NOT EXISTS `testri`;
USE  `testri`;
-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `address` (`address`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `address`) VALUES
(2, 'rua flores white'),
(1, 'rua waldemar jardim martha');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `color` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `color`) VALUES
(1, 'martha arruda oliveira', 'white'),
(2, 'roberto oliveira dos', 'brown white dos'),
(3, 'joao martha dos', 'dos azul'),
(4, 'marina white', 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `__docfreq`
--

CREATE TABLE IF NOT EXISTS `__docfreq` (
  `occur` int(11) NOT NULL AUTO_INCREMENT,
  `term` varchar(30) NOT NULL,
  `doc` varchar(40) DEFAULT NULL,
  `freq` int(11) DEFAULT NULL,
  PRIMARY KEY (`occur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `__docfreq`
--

INSERT INTO `__docfreq` (`occur`, `term`, `doc`, `freq`) VALUES
(1, 'jardim', 'people__address', 1),
(2, 'white', 'people__address', 1),
(3, '2', 'people__id', 1),
(4, '1', 'people__id', 1),
(5, 'waldemar', 'people__address', 1),
(6, 'martha', 'people__address', 1),
(7, 'flores', 'people__address', 1),
(8, 'rua', 'people__address', 2),
(9, 'martha', 'info__name', 2),
(10, 'dos', 'info__name', 2),
(11, 'dos', 'info__color', 2),
(12, 'oliveira', 'info__name', 2),
(13, 'arruda', 'info__name', 1),
(14, 'marina', 'info__name', 1),
(15, 'roberto', 'info__name', 1),
(16, 'white', 'info__name', 1),
(17, 'white', 'info__color', 2),
(18, 'pink', 'info__color', 1),
(19, 'brown', 'info__color', 1),
(20, '4', 'info__id', 1),
(21, '3', 'info__id', 1),
(22, 'azul', 'info__color', 1),
(23, '2', 'info__id', 1),
(24, '1', 'info__id', 1),
(25, 'joao', 'info__name', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
