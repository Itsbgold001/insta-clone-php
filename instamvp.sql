-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 23-Out-2019 às 02:19
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `instamvp`
--
CREATE DATABASE IF NOT EXISTS `instamvp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `instamvp`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `subtitle` varchar(300) NOT NULL,
  `hashtags` varchar(100) NOT NULL,
  `dateNow` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phoneMail` varchar(40) NOT NULL,
  `completeName` varchar(40) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `bio` text DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `followers` int(11) DEFAULT NULL,
  `follow` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phoneMail` (`phoneMail`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `phoneMail`, `completeName`, `user`, `pass`, `bio`, `verified`, `followers`, `follow`) VALUES
(1, '1', 'Nome Sobrenome', 'teste', '1', NULL, NULL, NULL, NULL),
(2, 'gcaires@gmail.com', 'Guilherme Caires', 'gcaires', '123', NULL, NULL, NULL, NULL),
(3, 'jeff@gmail.com', 'Jefferson Eloy', 'jeffEloy', '321', NULL, NULL, NULL, NULL),
(4, 'laercio@gmail.com', 'Laercio Seila', 'laercio', 'senha', NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
