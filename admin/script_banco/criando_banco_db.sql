SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `default_schema` ;
USE `default_schema` ;

-- -----------------------------------------------------
-- Table `default_schema`.`perguntaserepostas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `default_schema`.`perguntaserepostas` (
  `idpesquisa` INT(11) NOT NULL ,
  `usuario` VARCHAR(45) NOT NULL ,
  `parte` VARCHAR(45) NOT NULL ,
  `questao` VARCHAR(45) NOT NULL ,
  `respostas` VARCHAR(45) NOT NULL ,
  `valores` VARCHAR(255) NOT NULL ,
  `idpergunta` INT(11) NOT NULL ,
  `pergunta` VARCHAR(255) NOT NULL ,
  `data` VARCHAR(45) NOT NULL ,
  `hora` VARCHAR(45) NOT NULL );


-- -----------------------------------------------------
-- Table `default_schema`.`usuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `default_schema`.`usuarios` (
  `login` VARCHAR(25) NOT NULL ,
  `idusuario` INT(16) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `senha` VARCHAR(32) NOT NULL ,
  `nome` VARCHAR(20) NOT NULL ,
  `ativo` CHAR(1) NOT NULL ,
  `data` VARCHAR(45) NOT NULL ,
  `tipo` VARCHAR(6) NOT NULL ,
  `hora` VARCHAR(45) NOT NULL ,
  `concluido` VARCHAR(5) NOT NULL DEFAULT -1 ,
  `autenticacao` VARCHAR(45) NOT NULL ,
  `ip` VARCHAR(45) NOT NULL ,
  `navegador` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`login`) ,
  INDEX `login_UNIQUE` (`login` ASC) ,
  INDEX `nome_UNIQUE` (`nome` ASC) ,
  INDEX `email_UNIQUE` (`email` ASC) );


-- -----------------------------------------------------
-- Table `default_schema`.`pesquisaquais`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `default_schema`.`pesquisaquais` (
  `idpesquisa` INT(11) NOT NULL ,
  `questao` VARCHAR(45) NOT NULL ,
  `respostas` LONGTEXT NOT NULL ,
  `usuario` VARCHAR(25) NOT NULL ,
  `parte` VARCHAR(45) NOT NULL ,
  `data` VARCHAR(45) NOT NULL ,
  `hora` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idpesquisa`) ,
  INDEX `fk_{6E5CB01E-17E6-41D7-A709-39D73A052708}` (`usuario` ASC) ,
  CONSTRAINT `fk_{6E5CB01E-17E6-41D7-A709-39D73A052708}`
    FOREIGN KEY (`usuario` )
    REFERENCES `default_schema`.`usuarios` (`login` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `default_schema`.`pesquisa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `default_schema`.`pesquisa` (
  `respostas` VARCHAR(45) NOT NULL ,
  `parte` VARCHAR(45) NOT NULL ,
  `idpesquisa` INT(11) NOT NULL ,
  `usuario` VARCHAR(25) NOT NULL ,
  `data` VARCHAR(45) NOT NULL ,
  `hora` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`respostas`) ,
  INDEX `fk_{1D644F9A-710A-4516-AD38-D452780B7C9D}` (`usuario` ASC) ,
  CONSTRAINT `fk_{1D644F9A-710A-4516-AD38-D452780B7C9D}`
    FOREIGN KEY (`usuario` )
    REFERENCES `default_schema`.`usuarios` (`login` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `default_schema`.`mapeamento`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `default_schema`.`mapeamento` (
  `idmapeamento` INT(11) NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `cargointituicao` VARCHAR(45) NOT NULL ,
  `cpf` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `telefone` VARCHAR(45) NOT NULL ,
  `usuario` VARCHAR(25) NOT NULL ,
  `preenchido` CHAR(1) NOT NULL ,
  `data` VARCHAR(45) NOT NULL ,
  `hora` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idmapeamento`, `usuario`) ,
  INDEX `fk_{65FA8BA7-3437-46F9-A68D-D9785DE8922C}` (`usuario` ASC) ,
  CONSTRAINT `fk_{65FA8BA7-3437-46F9-A68D-D9785DE8922C}`
    FOREIGN KEY (`usuario` )
    REFERENCES `default_schema`.`usuarios` (`login` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `default_schema`.`respostas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `default_schema`.`respostas` (
  `parte` VARCHAR(45) NOT NULL ,
  `questao` VARCHAR(45) NOT NULL ,
  `respostas` VARCHAR(45) NOT NULL ,
  `idperguntas` INT(11) NOT NULL ,
  `valores` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`parte`, `questao`) ,
  INDEX `idperguntas` (`idperguntas` ASC) ,
  INDEX `fk_{6495E62E-9D6F-4970-9E6F-99FF2F854CB8}` (`respostas` ASC) ,
  CONSTRAINT `fk_{6495E62E-9D6F-4970-9E6F-99FF2F854CB8}`
    FOREIGN KEY (`respostas` )
    REFERENCES `default_schema`.`pesquisa` (`respostas` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `default_schema`.`pergunta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `default_schema`.`pergunta` (
  `idpergunta` INT(11) NOT NULL ,
  `questao` VARCHAR(45) NOT NULL ,
  `respostas` VARCHAR(45) NOT NULL ,
  `parte` VARCHAR(45) NOT NULL ,
  `pergunta` VARCHAR(255) NOT NULL ,
  `observacao` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`questao`, `parte`) ,
  CONSTRAINT `fk_{6BF751AF-FF56-4DE3-8180-B1F4B9C6AAA4}`
    FOREIGN KEY (`parte` , `questao` )
    REFERENCES `default_schema`.`respostas` (`parte` , `questao` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

USE `default_schema` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
