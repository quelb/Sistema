-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 07-Dez-2018 às 11:54
-- Versão do servidor: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `INFINITE`
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
  `cod_loja` int(11) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `nomeloja` varchar(20) NOT NULL,
  `nomeusuario` varchar(100) NOT NULL,
  `emailloja` varchar(50) NOT NULL,
  `tipodoproduto` varchar(50) NOT NULL
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
  `email` varchar(200) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `foto` longblob,
  `cpf` varchar(11) DEFAULT NULL,
  `rg` varchar(10) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `tamanho` varchar(5) DEFAULT NULL,
  `nascimento` varchar(20) DEFAULT NULL,
  `codusuario` int(11) NOT NULL,
  `rua` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) NOT NULL,
  `Estado` varchar(200) NOT NULL,
  `numero` varchar(10000) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `nome`, `sobrenome`, `foto`, `cpf`, `rg`, `telefone`, `tamanho`, `nascimento`, `codusuario`, `rua`, `bairro`, `Estado`, `numero`, `cidade`, `cep`, `username`) VALUES
('luanete.almeida09@gmail.com', '321', 'Letycia', 'Almeida', NULL, '10842481745', '36546876', '2299912111', 'G', '2200-12-22', 42, 'boa paba', 'altoalegre', 'es', '511', 'Vila Velha', '29113060', ''),
('mary@gmail.com', '4545', 'Mariana', 'Reis', NULL, '10842481745', '36546876', '2299912111', 'G', '1111-02-03', 41, 'dada', 'altoalegre', 'rj', '511', 'Carapebus', '27998000', ''),
('Elisa@gmail.com', '987', 'elisa', 'Ferreira', NULL, '10842481745', '36546876', '2299912111', ' G', '2018-01-23', 40, 'dias', 'Jusu', 'rj', '511', 'Carapebus', '27998000', ''),
('Elisa@gmail.com', '741', 'elisa', 'Ferreira', NULL, '10842481745', '365468767', '2299912111', ' G', '2000-02-02', 47, 'dias', 'Jusu', 'rj', '511', 'Carapebus', '27998000', ''),
('quequel@gmail.com', '45678', 'Raquel', 'Barcelos', NULL, '10842481745', '36546876', '2299912111', 'G', '2015-01-01', 48, 'dada', 'Jusu', 'rj', '511', 'Carapebus', '27998000', ''),
('mary@gmail.com', '234', 'Mariana', 'Reis', NULL, '10842481745', '36546876', '2299912111', 'GG', '2018-01-31', 49, 'dada', 'Jusu', 'rj', '511', 'Carapebus', '27998000', ''),
('quequel@gmail.com', '123', 'Raquel', 'Barcelos', NULL, '10842481745', '36546876', '2299912111', ' G', '2018-01-01', 50, 'dada', 'altoalegre', 'rj', '12', 'Carapebus', '27998000', ''),
('quequel@gmail.com', '123', 'Raquel', 'Barcelos', NULL, '10842481745', '36546876', '2299912111', ' G', '2018-01-01', 51, 'dada', 'altoalegre', 'rj', '12', 'Carapebus', '27998000', ''),
('mah@gmail.com', '321', 'Raquel', 'Barcelos', NULL, '13521073769', '36546876', '2299912111', 'G', '2016-11-01', 52, 'dada', 'Jusu', 'rj', '511', 'Carapebus', '27998000', ''),
('Elisa@gmail.com', '123', 'elisa', 'Ferreira', NULL, '2,34', '36546', '2299912111', 'M', '2018-07-12', 33, 'dias', 'altoalegre', 'rj', '511', 'Carapebus', '27998000', ''),
('mary@gmail.com', '852', 'Mariana', 'Reis', NULL, '10842481745', '152369874', '2299912111', 'G', '1111-01-11', 44, 'dada', 'Jusu', 'rj', '511', 'Carapebus', '27998000', ''),
('Elisa@gmail.com', '000', 'elisa', 'Ferreira', NULL, '10842481745', '987546321', '2299912111', 'G', '', 45, 'dias', 'altoalegre', 'rj', '511', 'Carapebus', '27998000', ''),
('megs.dlt12@gmail.com', 'dd112233', 'Eduarda', 'Souza', NULL, '16314168716', '291569416', '22 999765280', 'P ', '2001-09-23', 46, 'Avenida Francisco Lamego', 'Jardim Carioca', 'rj', '70', 'Campos dos Goytacazes', '28080000', ''),
('GMAIL@GMAIL.COM', '1234', 'YUUUUUUUDD', 'CBFHSMKBGJ', NULL, '4646545', '414414', 'MASNHCBA', 'P', '', 53, 'DFGFGH', 'CAXIAS', 'ac', '1', 'QUISSAMA', '256456', ''),
('fUNCIONANDO@GMAIL.COM', '123', 'Gabriel', 'Souza', NULL, '98547', '32147', '321', 'H', '2018-12-11', 56, 'Ruando', 'bairro', 'rj', '88', 'qUISSAMA', '13421', 'GabrielProgrammer');

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
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`cod_loja`);

--
-- Indexes for table `looks`
--
ALTER TABLE `looks`
  ADD PRIMARY KEY (`cod_publi`),
  ADD KEY `fki_usuario` (`cod_usuario`);

--
-- Indexes for table `pacote`
--
ALTER TABLE `pacote`
  ADD PRIMARY KEY (`cod_aluguel`),
  ADD KEY `fki_produto_pacote` (`cod_produto`);

--
-- Indexes for table `plano`
--
ALTER TABLE `plano`
  ADD PRIMARY KEY (`cod_plano`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod_produto`);

--
-- Indexes for table `troca`
--
ALTER TABLE `troca`
  ADD PRIMARY KEY (`cod_troca`);

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
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
