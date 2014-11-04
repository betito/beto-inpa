-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2014 at 06:54 PM
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
CREATE DATABASE IF NOT EXISTS `testri` (
use `testri`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `__docfreq`
--

INSERT INTO `__docfreq` (`occur`, `term`, `doc`, `freq`) VALUES
(1, 'martha', 'people__name', 2),
(2, 'dos', 'people__color', 2),
(3, 'dos', 'people__name', 2),
(4, 'oliveira', 'people__name', 2),
(5, 'arruda', 'people__name', 1),
(6, 'marina', 'people__name', 1),
(7, 'roberto', 'people__name', 1),
(8, 'white', 'people__color', 2),
(9, 'white', 'people__name', 1),
(10, 'pink', 'people__color', 1),
(11, 'brown', 'people__color', 1),
(12, '4', 'people__id', 1),
(13, '3', 'people__id', 1),
(14, 'azul', 'people__color', 1),
(15, '2', 'people__id', 1),
(16, '1', 'people__id', 1),
(17, 'joao', 'people__name', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
