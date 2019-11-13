-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Jan-2002 às 04:30
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
('menino ney', 'ney@seferrou.com', 2147483647, 2147483647, 'Ney ta no b.o, Ney ta no b.o, Ney ta no b.o, Ney ta no b.o, ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `login` varchar(12) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `endereco` varchar(180) NOT NULL,
  `bairro` text NOT NULL,
  `cidade` text NOT NULL,
  `cep` varchar(9) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nome`, `login`, `senha`, `email`, `telefone`, `celular`, `endereco`, `bairro`, `cidade`, `cep`) VALUES
(20, 'teste', 'teste', 'teste', 'teste@teste.com', '0', '0', 'teste', 'PÃ©ricleslandia', 'Caieiras', '12233-456'),
(21, 'teste', 'teste', 'teste', 'teste@teste.com', 'telefone', 'celular', 'teste', 'laranjeiras', 'Franco da Rocha', '12233-456'),
(22, 'tocansado', 'to', 'cansado', 'tocansado@disso.com', 'telefone', 'celular', 'Rua pintassilgo, n 733', 'laranjeiras', 'Caieiras', '07744-435'),
(23, 'se n for agr vo durmi', 'durmir', '1234', 'sao2da@madruga.com', '(11) 4899-7565', '(11) 96595-994', 'teste', 'laranjeiras', 'Franco da Rocha', '12233-456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
