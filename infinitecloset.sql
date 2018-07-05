-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 05/07/2018 às 08:39
-- Versão do servidor: 5.7.18-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infinitecloset`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
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
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `nome`, `sobrenome`, `apelido`, `foto`, `cpf`, `rg`, `telefone`, `tamanho`, `nascimento`, `codusuario`, `rua`, `bairro`, `Estado`, `numero`, `cidade`, `cep`) VALUES
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'LIsa', NULL, '10842481745', '36546876', '2299912111', ' G', '2018-01-01', 29, 'Rua Jose', 'Jusu', 'rj', '511', 'Carapebus', '27998000'),
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'LIsa', NULL, NULL, NULL, NULL, NULL, '', 4, '', '', '', '', '', ''),
('Elisa@gmail.com', '123123', 'elisa', 'Souza', 'LIsa', NULL, NULL, '36546876', NULL, NULL, '', 5, '', '', '', '', '', ''),
('Elisa@gmail.com', '123456', 'elisa', 'Souza', 'LIsa', NULL, NULL, '36546876', '', NULL, '', 6, '', '', '', '', '', ''),
('Elisa@gmail.com', '123', 'elisa', 'Souza', '', NULL, NULL, '36546876', '', NULL, '', 7, '', '', '', '', '', ''),
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'LIsa', NULL, NULL, '36546876', NULL, 'P', '', 8, '', '', '', '', '', ''),
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'LIsa', NULL, NULL, '36546876', '', 'M', '', 9, '', '', '', '', '', ''),
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'LIsa', NULL, '10842481745', '36546876', '', ' P ', '', 10, '', '', '', '', '', ''),
('dgh@gmail.com', '123123', 'n', 'n', 'n', NULL, '1084', '36546876', 'nada', 'G', '', 11, '', '', '', '', '', ''),
('Elisa@gmail.com', '123', 'nada', 'm', 'm', NULL, '8787888', '76887699', '65287', ' G', '', 12, '', '', '', '', '', ''),
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'gfgffg', NULL, '108424817', '36546876', '9854', 'G', '', 13, '', '', '', '', '', ''),
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'LIsa', NULL, '765656', '456765', '22991', 'G', '290102', 14, '', '', '', '', '', ''),
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'gfgffg', NULL, '8787888', '36546', '9912111', 'G', '2018-06-12', 15, '', '', '', '', '', ''),
('Elisa@gmail.com', '14', 'elisa', 'Souza', 'LIsa', NULL, '10842481745', '36546876', '2299912111', ' P', '', 16, NULL, 'Jusu', '', '', '', ''),
('Elisa@gmail.com', '', 'elisa', 'Souza', 'LIsa', NULL, '10842481745', '36546876', '2299912111', 'P', '', 17, 'Rua Jose', 'altoalegre', '', '', '', ''),
('Elisa@gmail.com', '2121', 'elisa', 'Souza', 'LIsa', NULL, '', '', '2299912111', ' P -', '', 18, 'Rua Jose', 'Jusu', 'rj', '', '', ''),
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'LIsa', NULL, '', '36546876', '2299912111', ' P ', '', 19, 'Rua Jose', 'Jusu', 'ac', '511', '', ''),
('Elisa@gmail.com', '123', 'elisa', 'Souza', 'LIsa', NULL, '', '', '2299912111', ' P ', '', 20, 'Rua Jose', 'Jusu', 'rj', '511', 'Carapebus', ''),
('Elisa@gmail.com', '321', 'elisa', 'Souza', 'LIsa', NULL, '', '', '2299912111', ' G', '', 21, 'Rua Jose', '', 'rj', '', 'Carapebus', '27998000'),
('mary@gmail.com', '321', 'Mariana', 'mary', 'mary', NULL, '28735000', '36546876', '2299912111', 'G', '', 22, 'Rua Jose', 'caxias', 'rj', '222', 'quissama', '27998000'),
('Elisa@gmail.com', '321', 'elisa', 'Souza', '', NULL, '13521073766', '', '2299912111', 'G', '', 23, 'Rua Jose', '', 'rj', '', 'Carapebus', '27998000'),
('Elisa@gmail.com', '123ab', 'raquel', 'barcelos', 'quel', NULL, '10842481745', '53654102', '22996097510', ' P ', '2016-01-02', 25, 'rua marclecio fontescaetano', 'ubas', 'rj', '511', 'Carapebus', '27998000'),
('lou.alves@gmail.com', '', 'lolo', 'alves', 'lolo', NULL, '563256259', '58454549', '22518425687', 'G', '2000-11-13', 26, 'tal', 'verde', 'mg', '85', 'santa catarina', '56969'),
('Elisa@gmail.com', 'as', 'lou', 'Souza', 'LIsa', NULL, '10842481745', '36546', '2299912111', 'P', '', 27, 'Rua Jose', 'Jusu', 'rj', '511', 'Carapebus', '27998000'),
('Elisa@gmail.com', '123', 'gg', 'gg', 'LIsa', NULL, '10842481745', '36546876', '34454445', 'G', '2017-01-01', 28, 'Rua Jose', 'Jusu', 'pi', '511', 'Carapebus', '27998000');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
