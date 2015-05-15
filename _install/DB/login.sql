-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2015 às 14:10
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tipo` int(10) unsigned NOT NULL,
  `data` datetime NOT NULL,
  `user` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `access`
--

INSERT INTO `access` (`id`, `tipo`, `data`, `user`) VALUES
(1, 1, '2015-05-07 09:44:37', 1),
(2, 1, '2015-05-07 15:17:43', 1),
(3, 2, '2015-05-07 15:18:41', 1),
(4, 1, '2015-05-07 15:39:13', 1),
(5, 1, '2015-05-07 15:39:54', 1),
(6, 1, '2015-05-07 15:40:49', 1),
(7, 1, '2015-05-07 15:41:27', 1),
(8, 1, '2015-05-07 15:41:35', 1),
(9, 1, '2015-05-07 15:41:44', 1),
(10, 1, '2015-05-07 15:41:44', 1),
(11, 1, '2015-05-07 15:41:45', 1),
(12, 1, '2015-05-07 15:41:45', 1),
(13, 1, '2015-05-07 15:41:45', 1),
(14, 1, '2015-05-07 15:41:45', 1),
(15, 1, '2015-05-07 15:41:46', 1),
(16, 1, '2015-05-07 17:04:51', 1),
(17, 1, '2015-05-08 10:16:02', 1),
(18, 1, '2015-05-08 10:16:56', 1),
(19, 1, '2015-05-08 10:19:57', 1),
(20, 1, '2015-05-08 10:25:42', 1),
(21, 1, '2015-05-08 10:25:57', 1),
(22, 1, '2015-05-08 15:53:16', 1),
(23, 1, '2015-05-08 15:53:39', 1),
(24, 1, '2015-05-11 15:08:46', 1),
(25, 1, '2015-05-11 15:30:43', 1),
(26, 1, '2015-05-11 20:54:20', 1),
(27, 1, '2015-05-12 08:42:14', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `tipo` int(10) unsigned NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `login`, `senha`, `tipo`, `nome`) VALUES
(1, 'daniel', 'senhaaa', 3, 'jose'),
(2, 'Carlos', 'senhaa', 2, 'nome'),
(3, 'login', 'senhaa', 2, 'nome'),
(4, 'login', 'senhaa', 2, 'nome'),
(5, 'novo login', 'senhaa', 2, 'nome'),
(6, 'novo login', 'senhaa', 2, 'nome'),
(7, 'moises', '111111', 0, 'moises');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
