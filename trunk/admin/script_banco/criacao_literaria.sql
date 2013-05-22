SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `criacao_literaria` ;
CREATE SCHEMA IF NOT EXISTS `criacao_literaria` DEFAULT CHARACTER SET latin1 ;
SHOW WARNINGS;
USE `criacao_literaria` ;

-- -----------------------------------------------------
-- Table `historico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `historico` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `historico` (
  `idhistorico` INT(11) NOT NULL AUTO_INCREMENT ,
  `usuario` VARCHAR(25) NULL DEFAULT NULL ,
  `acao` VARCHAR(45) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idhistorico`) )
ENGINE = MyISAM
AUTO_INCREMENT = 20
DEFAULT CHARACTER SET = latin1;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mapeamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mapeamento` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `mapeamento` (
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
AUTO_INCREMENT = 31
DEFAULT CHARACTER SET = latin1
COMMENT = '	';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `mapeamentoparteI`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mapeamentoparteI` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `mapeamentoparteI` (
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
AUTO_INCREMENT = 83
DEFAULT CHARACTER SET = latin1
COMMENT = '	';

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pergunta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pergunta` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `pergunta` (
  `idpergunta` INT(11) NOT NULL AUTO_INCREMENT ,
  `questao` VARCHAR(45) NULL DEFAULT NULL ,
  `parte` VARCHAR(45) NULL DEFAULT NULL ,
  `pergunta` VARCHAR(255) NULL DEFAULT NULL ,
  `observacao` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idpergunta`) )
ENGINE = MyISAM
AUTO_INCREMENT = 36
DEFAULT CHARACTER SET = latin1;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pesquisa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pesquisa` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `pesquisa` (
  `idpesquisa` INT(11) NOT NULL AUTO_INCREMENT ,
  `respostas` VARCHAR(45) NULL DEFAULT NULL ,
  `usuario` VARCHAR(45) NULL DEFAULT NULL ,
  `parte` VARCHAR(45) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idpesquisa`) )
ENGINE = MyISAM
AUTO_INCREMENT = 2065
DEFAULT CHARACTER SET = latin1;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pesquisaquais`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pesquisaquais` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `pesquisaquais` (
  `idpesquisa` INT(11) NOT NULL AUTO_INCREMENT ,
  `questao` VARCHAR(45) NULL DEFAULT NULL ,
  `respostas` VARCHAR(255) NULL DEFAULT NULL ,
  `usuario` VARCHAR(45) NULL DEFAULT NULL ,
  `parte` VARCHAR(45) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idpesquisa`) )
ENGINE = MyISAM
AUTO_INCREMENT = 179
DEFAULT CHARACTER SET = latin1;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `respostas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `respostas` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `respostas` (
  `idperguntas` INT(11) NOT NULL AUTO_INCREMENT ,
  `formulario` VARCHAR(45) NULL DEFAULT NULL ,
  `questoes` VARCHAR(45) NULL DEFAULT NULL ,
  `questaovalores` VARCHAR(255) NULL DEFAULT NULL )
ENGINE = MyISAM
DEFAULT CHARACTER SET = latin1;

SHOW WARNINGS;
CREATE UNIQUE INDEX `idperguntas` ON `respostas` (`idperguntas` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuarios` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `usuarios` (
  `idusuario` INT(16) NOT NULL AUTO_INCREMENT ,
  `login` VARCHAR(25) NOT NULL ,
  `senha` VARCHAR(15) NOT NULL ,
  `nome` VARCHAR(20) NOT NULL ,
  `ativo` CHAR(1) NULL DEFAULT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `tipo` VARCHAR(6) NULL DEFAULT NULL COMMENT 'Adm = administrador\nAvan = avançado' ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  `concluido` VARCHAR(5) NULL DEFAULT '-1' ,
  `autenticacao` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idusuario`) )
ENGINE = MyISAM
AUTO_INCREMENT = 41
DEFAULT CHARACTER SET = latin1;

SHOW WARNINGS;
CREATE UNIQUE INDEX `login_UNIQUE` ON `usuarios` (`login` ASC) ;

SHOW WARNINGS;
USE `criacao_literaria` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
