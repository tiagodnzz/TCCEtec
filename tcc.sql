-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2019 às 00:44
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadimovel`
--

CREATE TABLE `cadimovel` (
  `codava` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `valor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadimovel`
--

INSERT INTO `cadimovel` (`codava`, `nome`, `email`, `telefone`, `celular`, `endereco`, `bairro`, `cidade`, `cep`, `valor`) VALUES
(1, '', '', '', '', '', '', 'Escolher...', '', 'valor'),
(2, 'Tiago Diniz de Oliveira', 'tiagodnzz@gmail.com', '40028922', '11945408898', 'Rua pintassilgo, n 733', 'laranjeiras', 'Caieiras', '07744-435', 'valor'),
(3, 'Tais Diniz de Oliveira', 'teste@teste.com', '3543434343', '11945408898', 'teste', 'laranjeiras', 'Cajamar', '07744-435', 'R$200000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `codcontato` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefone` int(14) NOT NULL,
  `celular` int(14) NOT NULL,
  `mensagem` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`codcontato`, `nome`, `email`, `telefone`, `celular`, `mensagem`) VALUES
(1, 'Tiago Diniz', 'tiagodnzz@gmail.com', 0, 0, 'testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, '),
(2, 'Tiago Diniz', 'tiagodnzz@gmail.com', 0, 0, 'testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, '),
(5, '', '', 1, 0, ''),
(6, 'tiagodnzz@gmail.com', 'tiagodnzz@gmail.com', 94540898, 945408898, 'testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, testando, '),
(7, 'menino ney', 'ney@seferrou.com', 2147483647, 2147483647, 'Ney ta no b.o, Ney ta no b.o, Ney ta no b.o, Ney ta no b.o, '),
(8, 'tiagodnzz@gmail.com', 'tiagodnzz@gmail.com', 0, 0, ''),
(9, '', '', 0, 0, ''),
(10, '', '', 0, 0, ''),
(11, 'Tais Diniz de Oliveira', 'teste@teste.com', 0, 0, 'serjesrjhrj'),
(12, 'Tais Diniz de Oliveira', 'teste@teste.com', 2147483647, 2147483647, 'serjesrjhrj'),
(13, 'TIAGUEIRA', 'blabla@gmail.com', 2147483647, 2147483647, 'vTIAGUEIRAvTIAGUEIRA TIAGUEIRA TIAGUEIRATIAGUEIRA TIAGUEIRATIAGUEIRA vv'),
(14, '', '', 0, 0, ''),
(15, '', '', 0, 0, ''),
(16, 'Maria Clara', 'MariaClara@gmail.com', 1241241242, 2147483647, 'alguma duvida ou mensagem.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `codimovel` int(11) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `local` varchar(150) DEFAULT NULL,
  `descricao` varchar(250) NOT NULL,
  `valor` varchar(11) NOT NULL,
  `imagem` varchar(150) NOT NULL,
  `imagem2` varchar(150) DEFAULT NULL,
  `imagem3` varchar(150) DEFAULT NULL,
  `imagem4` varchar(150) DEFAULT NULL,
  `imagem5` varchar(150) DEFAULT NULL,
  `linkmap` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`codimovel`, `titulo`, `local`, `descricao`, `valor`, `imagem`, `imagem2`, `imagem3`, `imagem4`, `imagem5`, `linkmap`) VALUES
(21, 'ImÃ³vel para venda.', 'Bairro: Portal das Alamedas  <br>  Cidade: Franco da Rocha - SP ', 'DescriÃ§Ã£o Ã“timo sobrado contendo 2 dormitÃ³rios, sala, lavabo, cozinha, Ã¡rea de serviÃ§o com churrasqueira e garagem para 1 carro.   Pontos Fortes PrÃ³ximo ao condomÃ­nio Vila Verde e Atacadista RoldÃ£o, com acesso fÃ¡cil para Anhanguera sentido ', 'R$ 215.000,', '1.jpg', '1-1.jpg', '', NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6162.257855619484!2d-46.746819471094454!3d-23.31211419886544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cee6acef532edb%3A0xf3c59262cf198ef6!2sPortal+das+Alamedas%2C+Franco+da+Rocha+-+SP'),
(22, 'ImÃ³vel para venda.', 'Bairro: Portal das Alamedas   Cidade: Franco da Rocha - SP ', 'DescriÃ§Ã£o Ã“timo sobrado com sala, cozinha com dispensa, 2 dormitÃ³rios, 1 suÃ­te, banheiro, lavabo, Ã¡rea de serviÃ§o, churrasqueira e garagem para 2 carros.   Pontos Fortes PrÃ³ximo ao condomÃ­nio Vila Verde e Atacadista RoldÃ£o, com acesso fÃ¡ci', 'R$ 400.000,', '2.jpg', '2-2.jpg', '2-3.jpg', NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6162.257855619484!2d-46.746819471094454!3d-23.31211419886544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cee6acef532edb%3A0xf3c59262cf198ef6!2sPortal+das+Alamedas%2C+Franco+da+Rocha+-+SP'),
(23, 'ImÃ³vel para venda.', 'Bairro: Jardim Europa   Cidade: Caieiras - SP', 'DescriÃ§Ã£o Excelente casa tÃ©rrea construÃ­da com material de primeira pronta para residir.  OB: Aceita financiamento bancÃ¡rio.   Pontos Fortes Ã“tima localidade com fÃ¡cil acesso para o Rodoanel e FernÃ£o Dias.', 'R$ 380.000,', '3.jpg', '3-1.jpg', '3-2.jpg', NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d14649.219289249957!2d-46.69938582732549!3d-23.3771874802559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94cee53278d36cb3%3A0x3716beeadd470079!2sJARDIM+DOS+ABREUS+-+Morro+Grande%2C+'),
(24, 'ImÃ³vel para venda.', 'Bairro: Portal da EstaÃ§Ã£o   Cidade: Franco da Rocha - SP ', 'DescriÃ§Ã£o Excelente sobrado todo terminado com acabamento de primeira, pronto para residir, sobrado com financiamento pela CAIXA ECONÃ”MICA.   Pontos Fortes PrÃ³ximo ao centro de Franco da Rocha e a estaÃ§Ã£o de trem Baltazar FidÃ©lis', 'R$ 195.000,', '4.jpg', '4-1.jpg', '4-2.jpg', NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3664.124208120281!2d-46.718102384876666!3d-23.311251808288933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cee428fad7d425%3A0x8557f0846da301a3!2sPortal+da+Esta%C3%A7%C3%A3o%2C+Franco+da+R'),
(25, 'Terreno para venda.', 'Bairro: Portal das Alamedas   Cidade: Franco da Rocha - SP', 'DescriÃ§Ã£o Ã“timo lote medindo 6x21 com 126 mÂ².   OBS: R$ 40.000,00 mais transferÃªncias de prestaÃ§Ãµes. Consultar a imobiliÃ¡ria.   Pontos Fortes Ã“ti mo lote com fÃ¡cil acesso para rodovia Presidente Tancredo de Almeida Neves, Campo Limpo, Judia', 'R$40.000,00', '5.jpg', '', '', NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6162.257855619484!2d-46.746819471094454!3d-23.31211419886544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cee6acef532edb%3A0xf3c59262cf198ef6!2sPortal+das+Alamedas%2C+Franco+da+Rocha+-+SP'),
(26, 'Terreno para venda.', 'Bairro: Parque Montreal   Cidade: Franco da Rocha - SP ', 'DescriÃ§Ã£o Ã“timo lote com as seguintes medidas: 10 metros de frente, 25 metros lado esquerdo, 25 metros lado direito e 10 metros de fundo, totalizando uma Ã¡rea de 250 mÂ².   Pontos Fortes Linhas de Ã´nibus no local, prÃ³ximo ao Centro de Franco da', 'R$90.000.00', '6.jpg', '', '', NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14656.631829540831!2d-46.760179967365055!3d-23.31002705061108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cee6b3672c6d17%3A0x5f8f47fffadd089c!2sParque+Montreal%2C+Franco+da+Rocha+-+SP%2C'),
(27, 'imovel qualquer', 'adgtjatjaj', 'adtjaetjaetj', 'R$1.000,00', 'Penguins.jpg', '', '', NULL, NULL, 'zsrhyaetj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `codnoticia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `texto` text NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`codnoticia`, `titulo`, `data`, `texto`, `imagem`) VALUES
(27, 'bla bla bla', '2019-06-30', 'ftgisi', '001.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomeusuario` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codusuario`, `nome`, `email`, `nomeusuario`, `senha`, `tipo`) VALUES
(1, 'Administrador', 'admin@etec.com.br', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador'),
(2, 'Teste', 'teste@etec.com.br', 'teste', 'a1a8d617f884f106ccdcc6470c29cbdc4d9f7990', 'Usuário'),
(25, 'Tiago', 'tiago@gmail.com', 'tiago', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `codvenda` int(11) NOT NULL,
  `codimovel` int(11) NOT NULL,
  `nome` text NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `comentario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`codvenda`, `codimovel`, `nome`, `telefone`, `celular`, `email`, `comentario`) VALUES
(1, 0, '', '', '', '', ''),
(2, 0, 'tiago', '1241241242', '13541341354', 'tiago@gmail.com', ''),
(3, 0, 'tiago', '1241241242', '13541341354', 'tiago@gmail.com', 'zsdgyjkasrykazyfkra'),
(4, 0, 'tiago', '1241241242', '13541341354', 'tiago@gmail.com', 'hfjyf'),
(5, 0, 'tiago', '1241241242', '13541341354', 'tiago@gmail.com', 'dgjaj'),
(6, 0, 'xvcxxc', '1241241242', '13541341354', 'xcnxcncxn', ''),
(7, 0, 'tiago', '1241241242', '13541341354', 'tiago@gmail.com', 'adgjatg'),
(8, 0, 'tiago', '1241241242', '13541341354', 'tiago@gmail.com', 'zxfhgfzfgjdgj'),
(9, 0, 'sfhaej', '1241241242', '13541341354', 'tiago@gmail.com', 'pedro lindo\r\n'),
(10, 0, 'ana', '', '', '', ''),
(11, 0, 'Rafael Nascimento', '1241241242', '13541341354', 'rafael@rafael.com', 'Tenho interesse em comprar esta casa.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadimovel`
--
ALTER TABLE `cadimovel`
  ADD PRIMARY KEY (`codava`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`codcontato`);

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`codimovel`);

--
-- Índices para tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`codnoticia`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`codvenda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadimovel`
--
ALTER TABLE `cadimovel`
  MODIFY `codava` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `codcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `codimovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `codnoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `codvenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
