-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Out-2019 às 15:06
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instamvp`
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
  `user` varchar(30) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `subtitle` varchar(300) NOT NULL,
  `hashtags` varchar(100) NOT NULL,
  `dateNow` datetime NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user`, `photo`, `subtitle`, `hashtags`, `dateNow`, `likes`) VALUES
(54, 'laerciom', '5db995c8cac90.jpg', 'Eu e minha nega ', '#love ', '2019-10-30 10:53:12', 0),
(55, 'jeff', '5db997b62e4a1.jpg', 'Eu putÃ£o', '#varÃ£o', '2019-10-30 11:01:26', 0),
(56, 'gcaires', '5db998a6513b8.jpg', 'Sei lÃ¡', '#criatividade0', '2019-10-30 11:05:26', 0);

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
  `bio` text,
  `verified` int(11) DEFAULT NULL,
  `followers` int(11) DEFAULT NULL,
  `follow` int(11) DEFAULT NULL,
  `posts` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phoneMail` (`phoneMail`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `phoneMail`, `completeName`, `user`, `pass`, `bio`, `verified`, `followers`, `follow`, `posts`, `photo`) VALUES
(1, 'gcaires', 'Guilherme Caires', 'gcaires', '1', 'Oi, bem vindo ao meu perfil!', NULL, 0, 0, 0, 'gcaires.jpg'),
(2, 'jeff', 'Jefferson Eloy', 'jeff', '1', 'Oi, bem vindo ao meu perfil!', NULL, 0, 0, 0, 'jeff.jpg'),
(3, '1', 'Iai Fake', 'fake', '1', 'Oi, bem vindo ao meu perfil!', NULL, 0, 0, 0, 'default.jpg'),
(5, 'laerciom', 'Laercio Marques', 'laerciom', '12345678', 'Oi, bem vindo ao meu perfil!', NULL, 0, 0, 0, 'laerciom.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
