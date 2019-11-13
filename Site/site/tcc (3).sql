-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 13-Jan-2002 às 15:22
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `tcc`
--
CREATE DATABASE IF NOT EXISTS `tcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadimovel`
--

CREATE TABLE IF NOT EXISTS `cadimovel` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `valor` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cadimovel`
--

INSERT INTO `cadimovel` (`Id`, `nome`, `email`, `telefone`, `celular`, `endereco`, `bairro`, `cidade`, `cep`, `valor`) VALUES
(1, '', '', '', '', '', '', 'Escolher...', '', 'valor'),
(2, 'Tiago Diniz de Oliveira', 'tiagodnzz@gmail.com', '40028922', '11945408898', 'Rua pintassilgo, n 733', 'laranjeiras', 'Caieiras', '07744-435', 'valor'),
(3, 'Tais Diniz de Oliveira', 'teste@teste.com', '3543434343', '11945408898', 'teste', 'laranjeiras', 'Cajamar', '07744-435', 'R$200000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefone` int(14) NOT NULL,
  `celular` int(14) NOT NULL,
  `mensagem` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`nome`, `email`, `telefone`, `celular`, `mensagem`) VALUES
('Tiago Diniz', 'tiagodnzz@gmail.com', 0, 0, 'testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, '),
('Tiago Diniz', 'tiagodnzz@gmail.com', 0, 0, 'testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, '),
('', '', 3, 0, ''),
('', '', 365, 0, ''),
('', '', 1, 0, ''),
('tiagodnzz@gmail.com', 'tiagodnzz@gmail.com', 94540898, 945408898, 'testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, '),
('menino ney', 'ney@seferrou.com', 2147483647, 2147483647, 'Ney ta no b.o, Ney ta no b.o, Ney ta no b.o, Ney ta no b.o, '),
('tiagodnzz@gmail.com', 'tiagodnzz@gmail.com', 0, 0, ''),
('', '', 0, 0, ''),
('', '', 0, 0, ''),
('Tais Diniz de Oliveira', 'teste@teste.com', 0, 0, 'serjesrjhrj'),
('Tais Diniz de Oliveira', 'teste@teste.com', 2147483647, 2147483647, 'serjesrjhrj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE IF NOT EXISTS `imoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) NOT NULL,
  `local` varchar(150) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `valor` varchar(11) NOT NULL,
  `imagem1` varchar(150) NOT NULL,
  `imagem2` varchar(150) NOT NULL,
  `imagem3` varchar(150) NOT NULL,
  `linkmap` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE IF NOT EXISTS `venda` (
  `codigo` int(11) NOT NULL,
  `nome` text NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `comentario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
