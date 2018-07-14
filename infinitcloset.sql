-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2018 às 02:36
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinitcloset`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avalia`
--

CREATE TABLE `avalia` (
  `cod_avaliacao` double NOT NULL,
  `comentario` mediumtext,
  `coracao` longtext,
  `fotos` longblob,
  `data_hora` date DEFAULT NULL,
  `cod_usuario` double DEFAULT NULL,
  `cod_produto` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `cod_endereco` double NOT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` double DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `cod_usuario` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `favorita`
--

CREATE TABLE `favorita` (
  `cod_fav` double NOT NULL,
  `cod_usuario` double DEFAULT NULL,
  `cod_produto` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `cod_loja` double NOT NULL,
  `descricao` mediumtext,
  `cod_produto` double DEFAULT NULL,
  `contato` double DEFAULT NULL,
  `cod_usuario` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `looks`
--

CREATE TABLE `looks` (
  `cod_publi` double NOT NULL,
  `foto` longblob,
  `link_produto` text,
  `link_loja` text,
  `descricao` mediumtext,
  `tamanho` varchar(5) DEFAULT NULL,
  `cod_usuario` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacote`
--

CREATE TABLE `pacote` (
  `cod_aluguel` double NOT NULL,
  `cod_produto` double DEFAULT NULL,
  `cod_plano` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano`
--

CREATE TABLE `plano` (
  `cod_plano` double NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `num_cartao` double DEFAULT NULL,
  `cod_seguranca` double DEFAULT NULL,
  `banco` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod_produto` double NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `foto` longblob,
  `descricao` mediumtext,
  `tamanho` varchar(5) DEFAULT NULL,
  `dicas_uso` text,
  `condicoes` text,
  `preco_original` double DEFAULT NULL,
  `categoria` text,
  `proposta_troca` text,
  `cod_pacote` double DEFAULT NULL,
  `cod_loja` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `troca`
--

CREATE TABLE `troca` (
  `cod_troca` double NOT NULL,
  `proposta` mediumtext,
  `contato_fornecedor` double DEFAULT NULL,
  `cod_usuario` double DEFAULT NULL,
  `cod_produto` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` double NOT NULL,
  `email` text,
  `senha` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `apelido` varchar(100) DEFAULT NULL,
  `foto` longblob,
  `cpf` decimal(11,0) DEFAULT NULL,
  `rg` decimal(8,0) DEFAULT NULL,
  `contato` decimal(20,0) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `tamanho` varchar(5) DEFAULT NULL,
  `cod_usu_q_add` double DEFAULT NULL,
  `datnascimento` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codusuario`, `email`, `senha`, `login`, `nome`, `sobrenome`, `apelido`, `foto`, `cpf`, `rg`, `contato`, `sexo`, `tamanho`, `cod_usu_q_add`, `datnascimento`) VALUES
(1, '', NULL, NULL, 'Infiniteclosethkjhjhjh', NULL, 'Infinitecloset', NULL, '0', '0', '0', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avalia`
--
ALTER TABLE `avalia`
  ADD PRIMARY KEY (`cod_avaliacao`),
  ADD KEY `fki_produtos_avalia` (`cod_produto`),
  ADD KEY `fki_usuario_avalia` (`cod_usuario`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cod_endereco`),
  ADD KEY `fki_usuario_endereco` (`cod_usuario`);

--
-- Indexes for table `favorita`
--
ALTER TABLE `favorita`
  ADD PRIMARY KEY (`cod_fav`),
  ADD KEY `fki_usuario_favorita` (`cod_usuario`),
  ADD KEY `fki_produto_avalia` (`cod_produto`);

--
-- Indexes for table `loja`
