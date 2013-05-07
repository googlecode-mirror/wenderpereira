SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `criacao_literaria` DEFAULT CHARACTER SET latin1 ;
USE `criacao_literaria` ;

-- -----------------------------------------------------
-- Table `criacao_literaria`.`historico`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria`.`historico` (
  `idhistorico` INT(11) NOT NULL ,
  `usuario` VARCHAR(45) NULL DEFAULT NULL ,
  `acao` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idhistorico`) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `criacao_literaria`.`mapeamento`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria`.`mapeamento` (
  `idmapeamento` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `cargointituicao` VARCHAR(45) NOT NULL ,
  `cpf` VARCHAR(45) NULL DEFAULT NULL ,
  `email` VARCHAR(45) NULL DEFAULT NULL ,
  `telefone` VARCHAR(45) NULL DEFAULT NULL ,
  `usuario` VARCHAR(45) NULL DEFAULT NULL ,
  `preenchido` CHAR(1) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idmapeamento`) )
ENGINE = MyISAM
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1
COMMENT = '	';


-- -----------------------------------------------------
-- Table `criacao_literaria`.`mapeamentoparteI`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria`.`mapeamentoparteI` (
  `idmapeamento` INT(11) NOT NULL AUTO_INCREMENT ,
  `nomeintituicao` VARCHAR(45) NOT NULL ,
  `cnpj` VARCHAR(45) NULL DEFAULT NULL ,
  `endereco` VARCHAR(80) NOT NULL ,
  `municipio` VARCHAR(45) NOT NULL ,
  `unidadefederativa` VARCHAR(45) NULL DEFAULT NULL ,
  `cep` VARCHAR(18) NOT NULL ,
  `telefone` VARCHAR(45) NULL DEFAULT NULL ,
  `email` VARCHAR(58) NULL DEFAULT NULL ,
  `usuario` VARCHAR(45) NULL DEFAULT NULL ,
  `preenchido` VARCHAR(1) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` CHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idmapeamento`) )
ENGINE = MyISAM
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1
COMMENT = '	';


-- -----------------------------------------------------
-- Table `criacao_literaria`.`pesquisa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria`.`pesquisa` (
  `idpesquisa` INT(11) NOT NULL AUTO_INCREMENT ,
  `respostas` VARCHAR(45) NULL DEFAULT NULL ,
  `usuario` VARCHAR(45) NULL DEFAULT NULL ,
  `parte` VARCHAR(45) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idpesquisa`) )
ENGINE = MyISAM
AUTO_INCREMENT = 85
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `criacao_literaria`.`pesquisaquais`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria`.`pesquisaquais` (
  `idpesquisa` INT(11) NOT NULL AUTO_INCREMENT ,
  `questao` VARCHAR(45) NULL DEFAULT NULL ,
  `respostas` VARCHAR(255) NULL DEFAULT NULL ,
  `usuario` VARCHAR(45) NULL DEFAULT NULL ,
  `parte` VARCHAR(45) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idpesquisa`) )
ENGINE = MyISAM
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `criacao_literaria`.`respostas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria`.`respostas` (
  `idperguntas` INT(11) NOT NULL AUTO_INCREMENT ,
  `formulario` VARCHAR(45) NULL DEFAULT NULL ,
  `questoes` VARCHAR(45) NULL DEFAULT NULL ,
  `questaovalores` VARCHAR(255) NULL DEFAULT NULL ,
  UNIQUE INDEX `idperguntas` (`idperguntas` ASC) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `criacao_literaria`.`usuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria`.`usuarios` (
  `idusuario` INT(16) NOT NULL AUTO_INCREMENT ,
  `login` VARCHAR(20) NOT NULL ,
  `senha` VARCHAR(8) NOT NULL ,
  `nome` VARCHAR(20) NOT NULL ,
  `ativo` CHAR(1) NULL DEFAULT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `tipo` VARCHAR(6) NULL DEFAULT NULL COMMENT 'Adm = administrador\nAvan = avançado' ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  `concluido` VARCHAR(5) NULL DEFAULT '-1' ,
  PRIMARY KEY (`idusuario`) ,
  UNIQUE INDEX `login_UNIQUE` (`login` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = latin1;

USE `criacao_literaria` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
