SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `criacao_literaria1` DEFAULT CHARACTER SET latin1 ;
USE `criacao_literaria1` ;

-- -----------------------------------------------------
-- Table `criacao_literaria1`.`usuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria1`.`usuarios` (
  `idusuario` INT(16) NOT NULL AUTO_INCREMENT ,
  `login` VARCHAR(45) NOT NULL ,
  `senha` VARCHAR(32) NOT NULL ,
  `nome` VARCHAR(20) NOT NULL ,
  `ativo` CHAR(1) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `tipo` VARCHAR(6) NULL DEFAULT NULL COMMENT 'Adm = administrador\nAvan = avançado' ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  `concluido` VARCHAR(5) NULL DEFAULT '-1' ,
  `autenticacao` VARCHAR(45) NULL DEFAULT NULL ,
  `ip` VARCHAR(45) NULL DEFAULT NULL ,
  `navegador` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idusuario`, `login`) ,
  UNIQUE INDEX `login_UNIQUE` (`login` ASC) ,
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 322
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `criacao_literaria1`.`historico`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria1`.`historico` (
  `idhistorico` INT(11) NOT NULL AUTO_INCREMENT ,
  `usuario` VARCHAR(45) NOT NULL DEFAULT 'Acessodeslogado' ,
  `acao` VARCHAR(45) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idhistorico`, `usuario`) ,
  INDEX `fk_historico_usuarios1_idx` (`usuario` ASC) ,
  CONSTRAINT `fk_historico_usuarios1`
    FOREIGN KEY (`usuario` )
    REFERENCES `criacao_literaria1`.`usuarios` (`login` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 787
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `criacao_literaria1`.`mapeamento`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria1`.`mapeamento` (
  `idmapeamento` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `cargointituicao` VARCHAR(45) NOT NULL ,
  `cpf` VARCHAR(45) NULL DEFAULT NULL ,
  `email` VARCHAR(45) NULL DEFAULT NULL ,
  `telefone` VARCHAR(45) NULL DEFAULT NULL ,
  `usuario` VARCHAR(45) NOT NULL ,
  `preenchido` CHAR(1) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`usuario`) ,
  CONSTRAINT `fk_mapeamento_usuarios1`
    FOREIGN KEY (`usuario` )
    REFERENCES `criacao_literaria1`.`usuarios` (`login` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 275
DEFAULT CHARACTER SET = latin1
COMMENT = '	';


-- -----------------------------------------------------
-- Table `criacao_literaria1`.`mapeamentopartei`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria1`.`mapeamentopartei` (
  `idmapeamento` INT(11) NOT NULL AUTO_INCREMENT ,
  `nomeintituicao` VARCHAR(45) NOT NULL ,
  `cnpj` VARCHAR(45) NULL DEFAULT NULL ,
  `endereco` VARCHAR(80) NOT NULL ,
  `municipio` VARCHAR(45) NOT NULL ,
  `unidadefederativa` VARCHAR(45) NULL DEFAULT NULL ,
  `cep` VARCHAR(18) NOT NULL ,
  `telefone` VARCHAR(45) NULL DEFAULT NULL ,
  `email` VARCHAR(58) NULL DEFAULT NULL ,
  `usuario` VARCHAR(45) NOT NULL ,
  `preenchido` VARCHAR(1) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` CHAR(45) NULL DEFAULT NULL ,
  `usuarios_idusuario` INT(16) NOT NULL ,
  `usuarios_login` VARCHAR(25) NOT NULL ,
  PRIMARY KEY (`usuario`, `usuarios_idusuario`, `usuarios_login`) ,
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC) ,
  INDEX `fk_mapeamentopartei_usuarios1_idx` (`usuarios_idusuario` ASC, `usuarios_login` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 237
DEFAULT CHARACTER SET = latin1
COMMENT = '	';


-- -----------------------------------------------------
-- Table `criacao_literaria1`.`pesquisa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria1`.`pesquisa` (
  `idpesquisa` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `respostas` VARCHAR(45) NULL ,
  `usuario` VARCHAR(45) NOT NULL ,
  `parte` VARCHAR(45) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  INDEX `fk_pesquisa_usuarios_idx` (`usuario` ASC) ,
  PRIMARY KEY (`usuario`) ,
  CONSTRAINT `fk_pesquisa_usuarios`
    FOREIGN KEY (`usuario` )
    REFERENCES `criacao_literaria1`.`usuarios` (`login` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 7417
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `criacao_literaria1`.`respostas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria1`.`respostas` (
  `idperguntas` INT(11) NOT NULL AUTO_INCREMENT ,
  `parte` VARCHAR(45) NULL DEFAULT NULL ,
  `questao` VARCHAR(45) NULL DEFAULT NULL ,
  `respostas` VARCHAR(45) NULL DEFAULT NULL ,
  `valores` VARCHAR(255) NULL DEFAULT NULL ,
  UNIQUE INDEX `idperguntas` (`idperguntas` ASC) ,
  INDEX `fk_respostas_pesquisa1_idx` (`parte` ASC, `respostas` ASC) ,
  CONSTRAINT `fk_respostas_pesquisa1`
    FOREIGN KEY (`parte` , `respostas` )
    REFERENCES `criacao_literaria1`.`pesquisa` (`respostas` , `parte` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 231
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `criacao_literaria1`.`pergunta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria1`.`pergunta` (
  `idpergunta` INT(11) NOT NULL AUTO_INCREMENT ,
  `questao` VARCHAR(45) NOT NULL DEFAULT NULL ,
  `parte` VARCHAR(45) NOT NULL DEFAULT NULL ,
  `pergunta` VARCHAR(255) NULL DEFAULT NULL ,
  `observacao` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idpergunta`, `questao`, `parte`) ,
  INDEX `fk_pergunta_respostas1_idx` (`questao` ASC, `parte` ASC) ,
  CONSTRAINT `fk_pergunta_respostas1`
    FOREIGN KEY (`questao` , `parte` )
    REFERENCES `criacao_literaria1`.`respostas` (`parte` , `questao` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 34
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `criacao_literaria1`.`pesquisaquais`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `criacao_literaria1`.`pesquisaquais` (
  `idpesquisa` INT(11) NOT NULL AUTO_INCREMENT ,
  `questao` VARCHAR(45) NULL DEFAULT NULL ,
  `respostas` LONGTEXT NOT NULL ,
  `usuario` VARCHAR(45) NOT NULL ,
  `parte` VARCHAR(45) NULL DEFAULT NULL ,
  `data` VARCHAR(45) NULL DEFAULT NULL ,
  `hora` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`idpesquisa`, `usuario`) ,
  INDEX `fk_pesquisaquais_usuarios1_idx` (`usuario` ASC) ,
  CONSTRAINT `fk_pesquisaquais_usuarios1`
    FOREIGN KEY (`usuario` )
    REFERENCES `criacao_literaria1`.`usuarios` (`login` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 265
DEFAULT CHARACTER SET = latin1;

USE `criacao_literaria1` ;

-- -----------------------------------------------------
-- Placeholder table for view `criacao_literaria1`.`perguntaserepostas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `criacao_literaria1`.`perguntaserepostas` (`idpesquisa` INT, `usuario` INT, `parte` INT, `questao` INT, `respostas` INT, `valores` INT, `idpergunta` INT, `pergunta` INT, `data` INT, `hora` INT);

-- -----------------------------------------------------
-- View `criacao_literaria1`.`perguntaserepostas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `criacao_literaria1`.`perguntaserepostas`;
USE `criacao_literaria1`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `criacao_literaria1`.`perguntaserepostas` AS select `pesq`.`idpesquisa` AS `idpesquisa`,`pesq`.`usuario` AS `usuario`,`per`.`parte` AS `parte`,`per`.`questao` AS `questao`,`res`.`respostas` AS `respostas`,`res`.`valores` AS `valores`,`per`.`idpergunta` AS `idpergunta`,`per`.`pergunta` AS `pergunta`,`pesq`.`data` AS `data`,`pesq`.`hora` AS `hora` from ((`criacao_literaria1`.`pergunta` `per` join `criacao_literaria1`.`respostas` `res` on(((`per`.`questao` = `res`.`questao`) and (`per`.`parte` = `res`.`parte`)))) join `criacao_literaria1`.`pesquisa` `pesq` on(((`pesq`.`parte` = `res`.`parte`) and (`pesq`.`respostas` = `res`.`respostas`))));


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
