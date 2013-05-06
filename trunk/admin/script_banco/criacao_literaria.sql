-- phpMyAdmin SQL Dump
-- version 3.3.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2013 at 08:20 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='	' AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mapeamento`
--

INSERT INTO `mapeamento` (`idmapeamento`, `nome`, `cargointituicao`, `cpf`, `email`, `telefone`, `usuario`, `preenchido`, `data`, `hora`) VALUES
(12, 'nome1', 'cargo1', '111.111.111-11', '1111111111@', '(11) 1111-11111', 'wender', '1', '03/05/13', '08:44'),
(13, 'Nome', 'Cargo', '111.111.111-11', '111111111@gmail.com', '(11) 1111-11111', 'wender', '1', '03/05/13', '09:41'),
(14, 'Wender Pereira CorrÃªa', 'Cargo A', '000.000.000-00', 'wendercorrea@gmail.com', '(11) 1111-11111', 'wender', '1', '03/05/13', '16:33');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='	' AUTO_INCREMENT=24 ;

--
-- Dumping data for table `mapeamentopartei`
--

INSERT INTO `mapeamentopartei` (`idmapeamento`, `nomeintituicao`, `cnpj`, `endereco`, `municipio`, `unidadefederativa`, `cep`, `telefone`, `email`, `usuario`, `preenchido`, `data`, `hora`) VALUES
(23, 'ppppppp', 'pppppppp', 'pppppppppp', 'pppppppppppp', 'PA', '11111-1111', '(11) 1111-11111', '111111111111112@123.com', 'wender', '1', '03/05/13', '16:34'),
(22, 'nome1', '11111111', '1', '111111', 'AC', '11111', '(11) 1', '111', 'wender', '1', '03/05/13', '09:44'),
(21, 'Nome 1', '11111111111111111', 'End 11111111111111111', 'Municipio', 'AC', '11111-1111', '(11) 1111-11111', 'ww@gmail.com', 'wender', '1', '03/05/13', '09:42'),
(20, 'nome 1', 'cnpj', '', 'muni a', 'AC', '11111-1111', '(11) 1111-11111', '1111@', 'wender', '1', '03/05/13', '08:06');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=555 ;

--
-- Dumping data for table `pesquisa`
--

INSERT INTO `pesquisa` (`idpesquisa`, `respostas`, `usuario`, `parte`, `data`, `hora`) VALUES
(554, '5a', 'wender', '1', '03/05/13', '16:34'),
(553, '6a', 'wender', '1', '03/05/13', '16:34'),
(552, '4a', 'wender', '1', '03/05/13', '16:34'),
(551, '3a', 'wender', '1', '03/05/13', '16:34'),
(550, '2a', 'wender', '1', '03/05/13', '16:34'),
(549, '1a', 'wender', '1', '03/05/13', '16:34'),
(548, 'dec3', 'wender', '4', '03/05/13', '12:13'),
(547, 'dec2', 'wender', '4', '03/05/13', '12:13'),
(546, 'dec1', 'wender', '4', '03/05/13', '12:13'),
(545, 'dec3', 'wender', '4', '03/05/13', '12:11'),
(544, 'dec2', 'wender', '4', '03/05/13', '12:11'),
(543, 'dec1', 'wender', '4', '03/05/13', '12:11'),
(542, 'dec3', 'wender', '4', '03/05/13', '12:10'),
(541, 'dec2', 'wender', '4', '03/05/13', '12:10'),
(540, 'dec1', 'wender', '4', '03/05/13', '12:10');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pesquisaquais`
--

INSERT INTO `pesquisaquais` (`idpesquisa`, `questao`, `respostas`, `usuario`, `parte`, `data`, `hora`) VALUES
(14, 'qtdComentariosGerais', '11111111 gerais', 'wender', '4', '03/05/13', '12:13'),
(15, 'qtd3', '111111111111', 'wender', '1', '03/05/13', '16:34');

-- --------------------------------------------------------

--
-- Table structure for table `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `idperguntas` int(11) NOT NULL AUTO_INCREMENT,
  `formulario` varchar(45) DEFAULT NULL,
  `questoes` varchar(45) DEFAULT NULL,
  `questaovalores` varchar(255) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
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
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `login`, `senha`, `nome`, `ativo`, `email`, `data`) VALUES
(9, 'wender', '123', 'wender', '0', 'wendercorrea@gmail.com', '05/03/2013');
