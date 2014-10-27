-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2014 at 09:45 PM
-- Server version: 5.5.17
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `urbawebdb`
--
CREATE DATABASE IF NOT EXISTS `urnawebdb`;
use urbawebdb;
-- --------------------------------------------------------

--
-- Table structure for table `voto`
--

CREATE TABLE IF NOT EXISTS `voto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(15) NOT NULL,
  `datahorainicio` datetime NOT NULL,
  `datahorafinal` datetime DEFAULT NULL,
  `coordconfirma` varchar(40) DEFAULT NULL,
  `coordindicado1` varchar(40) DEFAULT NULL,
  `coordindicado2` varchar(40) DEFAULT NULL,
  `consconfirma` varchar(40) DEFAULT NULL,
  `consindicado1` varchar(40) DEFAULT NULL,
  `consindicado2` varchar(40) DEFAULT NULL,
  `consindicado3` varchar(40) DEFAULT NULL,
  `consindicado4` varchar(40) DEFAULT NULL,
  `consindicado5` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricula` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
