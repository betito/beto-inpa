-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2014 at 08:54 AM
-- Server version: 5.5.17
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `masterquest`
--

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `cpf` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`cpf`, `email`, `nome`) VALUES
('1', 'teste1email', 'teste1nome'),
('25', 'email25', 'novo25'),
('3', 'email3', 'nome3'),
('64778452291', 'robert.santos@inpa.gov.br', 'roberto oliveira dos santos');

-- --------------------------------------------------------

--
-- Table structure for table `autor_quest`
--

DROP TABLE IF EXISTS `autor_quest`;
CREATE TABLE IF NOT EXISTS `autor_quest` (
  `cpf` varchar(15) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_obra` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `autor_quest`
--

INSERT INTO `autor_quest` (`cpf`, `quest_id`, `id`, `titulo_obra`) VALUES
('64778452291', 1, 1, 'extracao de dados e metadados'),
('64778452291', 1, 2, 'a busca comeca as quartas');

-- --------------------------------------------------------

--
-- Table structure for table `questao`
--

DROP TABLE IF EXISTS `questao`;
CREATE TABLE IF NOT EXISTS `questao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `quest_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quest_id` (`quest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questionario`
--

DROP TABLE IF EXISTS `questionario`;
CREATE TABLE IF NOT EXISTS `questionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solicitante` varchar(50) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `siape` varchar(10) DEFAULT NULL,
  `data_solicitacao` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `questionario`
--

INSERT INTO `questionario` (`id`, `solicitante`, `responsavel`, `siape`, `data_solicitacao`, `email`) VALUES
(1, 'biblioteca', 'jorge', '11111', '15/01/2014', 'jorge.cativo@inpa.gov.br');

-- --------------------------------------------------------

--
-- Table structure for table `questionario1`
--

DROP TABLE IF EXISTS `questionario1`;
CREATE TABLE IF NOT EXISTS `questionario1` (
  `id` int(11) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `vinculo` varchar(20) NOT NULL,
  `tipo_pub` varchar(20) NOT NULL,
  `outro2` varchar(30) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `local` varchar(50) NOT NULL,
  `editora` varchar(50) NOT NULL,
  `ano` int(11) NOT NULL,
  `total_paginas_romano` int(11) NOT NULL,
  `total_paginas_arabico` int(11) NOT NULL,
  `ilustracoes` tinyint(1) NOT NULL,
  `ilustracoes_tipo` varchar(20) NOT NULL,
  `orientador` varchar(50) NOT NULL,
  `coorientador` varchar(50) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `sugestao` varchar(50) NOT NULL,
  `instituicao` varchar(20) NOT NULL,
  `programa_pos` varchar(30) NOT NULL,
  `linha_pesquisa` varchar(100) NOT NULL,
  `resumo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `respostas`
--

DROP TABLE IF EXISTS `respostas`;
CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` varchar(150) NOT NULL,
  `questao_id` int(11) NOT NULL,
  `tipo_campo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `valor` (`valor`,`tipo_campo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
