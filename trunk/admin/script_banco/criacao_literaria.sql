-- phpMyAdmin SQL Dump
-- version 3.3.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2013 at 02:48 PM
-- Server version: 5.1.44
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `criacao_literaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `historico`
--

CREATE TABLE IF NOT EXISTS `historico` (
  `idhistorico` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `acao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idhistorico`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historico`
--


-- --------------------------------------------------------

--
-- Table structure for table `mapeamento`
--

CREATE TABLE IF NOT EXISTS `mapeamento` (
  `idmapeamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cargointituicao` varchar(45) NOT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `preenchido` char(1) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmapeamento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='	' AUTO_INCREMENT=20 ;

--
-- Dumping data for table `mapeamento`
--


-- --------------------------------------------------------

--
-- Table structure for table `mapeamentopartei`
--

CREATE TABLE IF NOT EXISTS `mapeamentopartei` (
  `idmapeamento` int(11) NOT NULL AUTO_INCREMENT,
  `nomeintituicao` varchar(45) NOT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `endereco` varchar(80) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `unidadefederativa` varchar(45) DEFAULT NULL,
  `cep` varchar(18) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(58) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `preenchido` varchar(1) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `hora` char(45) DEFAULT NULL,
  PRIMARY KEY (`idmapeamento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='	' AUTO_INCREMENT=84 ;

--
-- Dumping data for table `mapeamentopartei`
--

INSERT INTO `mapeamentopartei` (`idmapeamento`, `nomeintituicao`, `cnpj`, `endereco`, `municipio`, `unidadefederativa`, `cep`, `telefone`, `email`, `usuario`, `preenchido`, `data`, `hora`) VALUES
(54, 'wender1', '12121211', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 5041', 'Mutondo1', 'AC1', '24452-0011', '(21) 8220-97331', 'wendercorrea@gmail.com1', 'wender1', '1', '09/05/13', '12:43'),
(55, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '12:43'),
(52, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '12:43'),
(53, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '12:43'),
(51, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '12:42'),
(50, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '12:42'),
(49, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '12:33'),
(48, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '12:33'),
(47, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '12:32'),
(46, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '10:28'),
(45, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '09:28'),
(43, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'RJ', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '08/05/13', '16:15'),
(44, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '09:27'),
(56, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '12:46'),
(57, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '13:08'),
(58, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '13:08'),
(59, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '13:15'),
(60, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '13:15'),
(61, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '13:24'),
(62, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '13:26'),
(63, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '13:28'),
(64, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '13:29'),
(65, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '13:29'),
(66, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:08'),
(67, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:08'),
(68, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:08'),
(69, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:09'),
(70, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:10'),
(71, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:10'),
(72, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:11'),
(73, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:18'),
(74, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:18'),
(75, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:19'),
(76, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '09/05/13', '16:19'),
(77, 'wender', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '10/05/13', '07:49'),
(78, '', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '10/05/13', '08:13'),
(79, '', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '10/05/13', '08:15'),
(80, '', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '10/05/13', '08:15'),
(81, '11111111111111', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '10/05/13', '08:24'),
(82, '11111111111111', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '10/05/13', '08:26'),
(83, '11111111111111', '1212121', 'Rua Doutor Alfredo Backer, 579 bl 01 apt 504', 'Mutondo', 'AC', '24452-001', '(21) 8220-9733', 'wendercorrea@gmail.com', 'wender', '1', '10/05/13', '08:28');

-- --------------------------------------------------------

--
-- Table structure for table `pesquisa`
--

CREATE TABLE IF NOT EXISTS `pesquisa` (
  `idpesquisa` int(11) NOT NULL AUTO_INCREMENT,
  `respostas` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `parte` varchar(45) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpesquisa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=583985 ;

--
-- Dumping data for table `pesquisa`
--


-- --------------------------------------------------------

--
-- Table structure for table `pesquisaquais`
--

CREATE TABLE IF NOT EXISTS `pesquisaquais` (
  `idpesquisa` int(11) NOT NULL AUTO_INCREMENT,
  `questao` varchar(45) DEFAULT NULL,
  `respostas` varchar(255) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `parte` varchar(45) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpesquisa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pesquisaquais`
--

INSERT INTO `pesquisaquais` (`idpesquisa`, `questao`, `respostas`, `usuario`, `parte`, `data`, `hora`) VALUES
(7, 'qtdComentariosGerais', '          11          ', 'wender', '4', '07/05/13', '16:25'),
(8, 'qtdComentariosGerais', '          11                    ', 'wender', '4', '07/05/13', '16:26'),
(9, 'qtdComentariosGerais', '          11                              ', 'wender', '4', '07/05/13', '16:27'),
(10, 'qtdComentariosGerais', 'tyes iik                      ', 'wender', '4', '08/05/13', '17:36'),
(11, 'qtd3', ' ', 'wender', '3', '09/05/13', '12:33'),
(12, 'qtdComentariosGerais', '           ', 'wender', '4', '09/05/13', '12:34'),
(13, 'qtdComentariosGerais', '                     ', 'wender', '4', '09/05/13', '12:34'),
(14, 'qtdComentariosGerais', '                               ', 'wender', '4', '09/05/13', '13:09'),
(15, 'qtdComentariosGerais', '                                         ', 'wender', '4', '09/05/13', '13:09'),
(16, 'qtdComentariosGerais', '                                                   ', 'wender', '4', '09/05/13', '13:24');

-- --------------------------------------------------------

--
-- Table structure for table `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `idperguntas` int(11) NOT NULL AUTO_INCREMENT,
  `formulario` varchar(45) DEFAULT NULL,
  `questoes` varchar(45) DEFAULT NULL,
  `questaovalores` varchar(255) DEFAULT NULL,
  UNIQUE KEY `idperguntas` (`idperguntas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `respostas`
--


-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(16) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `ativo` char(1) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `data` varchar(45) DEFAULT NULL,
  `tipo` varchar(6) DEFAULT NULL COMMENT 'Adm = administrador\nAvan = avançado',
  `hora` varchar(45) DEFAULT NULL,
  `concluido` varchar(5) DEFAULT '-1',
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `login`, `senha`, `nome`, `ativo`, `email`, `data`, `tipo`, `hora`, `concluido`) VALUES
(9, 'wender', '123', 'wender', '0', '', NULL, 'adm', NULL, '0'),
(10, 'wender1', '123', 'wender1', '0', '', NULL, NULL, NULL, '-1'),
(11, 'wender4', '123', 'wender4', '1', 'wendercorrea@gmail.com', '09/05/13', NULL, '15:11', '-1'),
(12, 'wender5', '123', 'wender5', '1', 'wendercorrea@gmail.com', '09/05/13', NULL, '15:12', '-1'),
(13, 'wender6', '123', 'wender6', '1', 'wendercorrea@gmail.com', '09/05/13', NULL, '15:13', '-1'),
(14, 'wender7', '123', 'wender7', '1', 'wendercorrea@gmail.com', '09/05/13', NULL, '15:15', '-1'),
(15, 'wender8', '123', 'wender8', '1', 'wendercorrea@gmail.com', '09/05/13', NULL, '15:17', '-1'),
(16, 'wender9', '123', 'wender9', '1', 'wendercorrea@gmail.com', '09/05/13', NULL, '15:19', '-1'),
(17, 'wender10', '123', 'wender10', '1', 'wendercorrea@gmail.com', '09/05/13', NULL, '15:21', '-1'),
(18, 'wender13', '', 'wender13', '1', 'wendercorrea@gmail.com', '10/05/13', NULL, '09:45', '-1');
