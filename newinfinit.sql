-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2018 at 05:33 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinitecloset`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(200) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `apelido` varchar(100) DEFAULT NULL,
  `foto` longblob,
  `cpf` varchar(11) DEFAULT NULL,
  `rg` varchar(8) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `tamanho` varchar(5) DEFAULT NULL,
  `nascimento` varchar(20) DEFAULT NULL,
  `codusuario` int(11) NOT NULL,
  `rua` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) NOT NULL,
  `Estado` varchar(200) NOT NULL,
  `numero` varchar(10000) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `nome`, `sobrenome`, `apelido`, `foto`, `cpf`, `rg`, `telefone`, `tamanho`, `nascimento`, `codusuario`, `rua`, `bairro`, `Estado`, `numero`, `cidade`, `cep`) VALUES
('luanete.almeida09@gmail.com', '321', 'Letycia', 'Almeida', 'lety', NULL, '10842481745', '36546876', '2299912111', 'G', '2200-12-22', 42, 'boa paba', 'altoalegre', 'es', '511', 'Vila Velha', '29113060'),
('mary@gmail.com', '4545', 'Mariana', 'Reis', 'LIsa', NULL, '10842481745', '36546876', '2299912111', 'G', '1111-02-03', 41, 'dada', 'altoalegre', 'rj', '511', 'Carapebus', '27998000'),
('Elisa@gmail.com', '987', 'elisa', 'Ferreira', 'LIsa', NULL, '10842481745', '36546876', '2299912111', ' G', '2018-01-23', 40, 'dias', 'Jusu', 'rj', '511', 'Carapebus', '27998000'),
('mary@gmail.com', '333', 'Mariana', 'Reis', 'mary', NULL, '10842481745', '36546876', '2299912111', 'G', '2001-01-02', 39, 'dada', 'mathias', 'rj', '511', 'Carapebus', '27998000'),
('mary@gmail.com', '111', 'Mariana', 'Reis', 'mary', NULL, '10842481745', '36546876', '2299912111', 'G', '2001-01-02', 38, 'dada', 'mathias', 'rj', '511', 'Carapebus', '27998000'),
('mary@gmail.com', '111', 'Mariana', 'Reis', 'mary', NULL, '10842481745', '36546876', '2299912111', 'G', '2001-01-02', 37, 'dada', 'mathias', 'rj', '511', 'Carapebus', '27998000'),
('mary@gmail.com', '111', 'Mariana', 'Reis', 'mary', NULL, '10842481745', '36546876', '2299912111', 'G', '2001-01-02', 36, 'dada', 'mathias', 'rj', '511', 'Carapebus', '27998000'),
('mary@gmail.com', '321', 'Mariana', 'Reis', 'mary', NULL, '10842481745', '36546876', '2299912111', 'G', '2001-01-02', 35, 'dada', 'mathias', 'rj', '511', 'Carapebus', '27998000'),
('mary@gmail.com', '321', 'Mariana', 'Reis', 'mary', NULL, '10842481745', '36546876', '2299912111', 'G', '2001-01-02', 34, 'dada', 'mathias', 'rj', '511', 'Carapebus', '27998000'),
('Elisa@gmail.com', '123', 'elisa', 'Ferreira', 'LIsa', NULL, '2,34', '36546', '2299912111', 'M', '2018-07-12', 33, 'dias', 'altoalegre', 'rj', '511', 'Carapebus', '27998000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
