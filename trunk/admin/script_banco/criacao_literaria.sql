CREATE DATABASE  IF NOT EXISTS `criacao_literaria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `criacao_literaria`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: criacao_literaria
-- ------------------------------------------------------
-- Server version	5.0.77-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `historico`
--

DROP TABLE IF EXISTS `historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historico` (
  `idhistorico` int(11) NOT NULL auto_increment,
  `usuario` varchar(25) default NULL,
  `acao` varchar(45) default NULL,
  `data` varchar(45) default NULL,
  `hora` varchar(45) default NULL,
  PRIMARY KEY  (`idhistorico`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico`
--

LOCK TABLES `historico` WRITE;
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
INSERT INTO `historico` VALUES (105,'jaqueline','login','19/06/13','13:00'),(104,'Anabraga','login','19/06/13','10:47'),(103,'ratazana','login','14/06/13','15:46'),(106,'joaofilho','login','27/06/13','10:58'),(107,'julianaamaral','login','04/07/13','12:03'),(108,'','login','07/07/13','16:28');
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapeamento`
--

DROP TABLE IF EXISTS `mapeamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapeamento` (
  `idmapeamento` int(11) NOT NULL auto_increment,
  `nome` varchar(45) NOT NULL,
  `cargointituicao` varchar(45) NOT NULL,
  `cpf` varchar(45) default NULL,
  `email` varchar(45) default NULL,
  `telefone` varchar(45) default NULL,
  `usuario` varchar(45) default NULL,
  `preenchido` char(1) default NULL,
  `data` varchar(45) default NULL,
  `hora` varchar(45) default NULL,
  PRIMARY KEY  (`idmapeamento`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=latin1 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapeamento`
--

LOCK TABLES `mapeamento` WRITE;
/*!40000 ALTER TABLE `mapeamento` DISABLE KEYS */;
INSERT INTO `mapeamento` VALUES (126,'Felipe  Ribeiro','Economista','797.979.797-97','fl.ribeiro@globo.com','(32)5576-757675','feliperibeiro','1','04/07/13','17:02'),(108,'Felipe Ribeiro','especialista','445.315.341-64','fl.ribeiro@globo.com','(21)3511-6511','ratazana','1','14/06/13','15:47'),(109,'AndrÃ© GonÃ§alves da Silva Bezerra','tÃ©cnico de comunicaÃ§Ã£o','726.622.391-15','andrebezerra@gmail.com','2121358793','andrebezerra','1','14/06/13','16:41'),(115,'Jaqueline Lavor','Produtora Editorial','','','','jaqueline','1','19/06/13','12:52'),(116,'ana claudia de souza','diretora','123456789','anaclaudia.funarte@gmail.com','2122798080','anaclaudia','1','19/06/13','13:20'),(121,'wender','Analista de sistemas','057.512.517-92','wendercorrea@gmail.com','(21)8220-9733','wender','1','27/06/13','15:29'),(119,'teste','testeteste','000.000.0','','','joaofilho','1','27/06/13','11:02'),(120,'teste','testeteste','000.000.000-00','joao.filho@funarte.gov.br','(21)0000-0000','joaofilho','1','27/06/13','11:03'),(122,'wender','Analista de sistemas','057.512.517-92','wendercorrea@gmail.com','(21)8220-9733','wender','1','28/06/13','09:10'),(123,'wender','Analista de sistemas','057.512.517-92','wendercorrea@gmail.com','(21)8220-9733','wender','1','28/06/13','09:42'),(125,'Juliana','Adminstradora Cultural','083.464.646-46','','','julianaamaral','1','04/07/13','12:04'),(127,'Clodo','designer','231.564.651-56','','(15)6561-45614','clodovil','1','07/07/13','16:30');
/*!40000 ALTER TABLE `mapeamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapeamentoparteI`
--

DROP TABLE IF EXISTS `mapeamentoparteI`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapeamentoparteI` (
  `idmapeamento` int(11) NOT NULL auto_increment,
  `nomeintituicao` varchar(45) NOT NULL,
  `cnpj` varchar(45) default NULL,
  `endereco` varchar(80) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `unidadefederativa` varchar(45) default NULL,
  `cep` varchar(18) NOT NULL,
  `telefone` varchar(45) default NULL,
  `email` varchar(58) default NULL,
  `usuario` varchar(45) default NULL,
  `preenchido` varchar(1) default NULL,
  `data` varchar(45) default NULL,
  `hora` char(45) default NULL,
  PRIMARY KEY  (`idmapeamento`)
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=latin1 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapeamentoparteI`
--

LOCK TABLES `mapeamentoparteI` WRITE;
/*!40000 ALTER TABLE `mapeamentoparteI` DISABLE KEYS */;
INSERT INTO `mapeamentoparteI` VALUES (132,'Central IT','22.222.222/2222-22','Rua Alfredo Backer 579','Mutondo','RJ','24452-001','(21)8220-9733','wendercorrea@gmail.com','wender','1','28/06/13','08:34'),(135,'IBGE','','Rua 6456456456','Aracaju','RS','46546-4634','(21)3545-23575','fl.ribeiro@globo.com','feliperibeiro','1','02/07/13','15:04'),(120,'Funarte','','Rua da GÃ¡vea','Rio','MA','45646-4646','','','ratazana','1','14/06/13','16:23'),(125,'funarte','55.555.555/5555-55','rua das flores','rio de janeiro','RJ','21931-300','','','jaqueline','1','19/06/13','13:03'),(126,'Funarte','123456789','rua da imprensa, 16','rio de janeiro','RJ','123456','2122798080','anaclaudia.funarte@gmail.com','anaclaudia','1','19/06/13','13:29'),(133,'Central IT','22.222.222/2222-22','Rua Alfredo Backer 579','Mutondo','RJ','24452-001','(21)8220-9733','wendercorrea@gmail.com','wender','1','28/06/13','09:11'),(134,'Central IT','22.222.222/2222-22','Rua Alfredo Backer 579','Mutondo','RJ','24452-001','(21)8220-9733','wendercorrea@gmail.com','wender','1','28/06/13','09:42'),(136,'Funarte','46.464.867/8677-87','Rua da GÃ¡vea','Rio de janeiro','RJ','64646-4654','(44)4646-46464','fl.ribeiro@globo.com','julianaamaral','1','04/07/13','12:05'),(143,'Arte jonas','','Rua do mendigo','Rio de Janeiro','TO','44654-5646','(21)3511-6510','jb.ribeiro@globo.com','clodovil','1','07/07/13','17:21');
/*!40000 ALTER TABLE `mapeamentoparteI` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pergunta`
--

DROP TABLE IF EXISTS `pergunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pergunta` (
  `idpergunta` int(11) NOT NULL auto_increment,
  `questao` varchar(45) default NULL,
  `parte` varchar(45) default NULL,
  `pergunta` varchar(255) default NULL,
  `observacao` varchar(45) default NULL,
  PRIMARY KEY  (`idpergunta`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pergunta`
--

LOCK TABLES `pergunta` WRITE;
/*!40000 ALTER TABLE `pergunta` DISABLE KEYS */;
INSERT INTO `pergunta` VALUES (1,'1','1','A instituição tem sede própria*?',NULL),(2,'2','1','A instituição tem fins lucrativos*:',NULL),(3,'3','1','Regime jurídico da instituição (marque apenas 1 item)*:',NULL),(4,'4','1',' A instituição atua somente na área cultural (marque apenas 1 item)*',NULL),(5,'5','1','Qual a fonte de recursos da instituição (marque quantos itens julgar necessário)*:',NULL),(6,'6','1','Qual o tamanho aproximado da instituição em termos de número de funcionários ( marque apenas 1 item)*',NULL),(7,'1','2','Qual o principal objetivo dos programas de residência artística? (marque no máximo os 3 itens de maior importância)*',NULL),(8,'2','2',' As ações em reidências artísticas possuem um valor previsto planejado (marque apenas 1 item)?* ',NULL),(9,'3','2','De que forma a instituição financia os diferentes programas em residências artísticas (marque quantos itens julgar necessário):*',NULL),(10,'4','2','Quanto ao local de realização das residências (marque apenas 1 item)*:',NULL),(11,'5','2','Em caso de abrangência nacional, quando as residências puderem se desenvolver em mais de uma região geográfica, quais estão envolvidas? (marque quantos itens julgar necessário)*:',NULL),(12,'6','2',' As residências podem ocorrer em países do exterior (marque apenas um item)?*',NULL),(13,'7','2','Em caso de abrangência internacional, quais os continentes/ subcontinentes / blocos regionais são locais potenciais de realização das residências? (marque quantos itens julgar necessário):',NULL),(14,'8','2','Aponte em quais anos ocorreram programas em residências artísticas (marque quantos itens julgar necessário)* ',NULL),(15,'9','2','Com relação à continuidade destes programas em residências artísticas (marque apenas 1 item)*:',NULL),(16,'10','2',' Em caso dos programas terem ocorridos mais de uma vez e terem periodicidade definida (marque apenas 1 item)*:',NULL),(17,'11','2','Há concessão de algum(a) prêmio/bolsa ou qualquer outra forma de apoio financeiro ao artista? (marque apenas 1 item)*',NULL),(18,'12','2','Qual o valor gasto, em média, no total de cada programa realizado em residências artísticas? (marque apenas 1 item)*',NULL),(19,'13','2','Qual o apoio financeiro concedido (em reais) para que cada artista realize a ação? (marque mais de 1 item em caso de diferentes valores concedidos em cada programa realizado)*:',NULL),(20,'14','2',' O valor concedido já é deduzido do imposto de renda devido*?  (marque apenas 1 item):',NULL),(21,'15','2','Em caso de não estarem incluídos no valor concedido, a instituição arcará com quais dos itens abaixo ( marque quantos itens julgar necessário)*:',NULL),(22,'1','3','Quantos artistas foram apoiados em média ao ano?',NULL),(23,'2','3','O número de artistas apoiados foi o mesmo em todas os programas ( marque apenas 1 item)?',NULL),(24,'3','3',' Qual o período de duração da residência (marque apenas 1 item)*  ?',NULL),(25,'4','3','Em relação à nacionalidade dos artistas contemplados, marque apenas 1 item abaixo*:',NULL),(26,'5','3','Existe a possibilidade de intercâmbio entre artistas brasileiros e internacionais nos programas de residências artísticas (marque apenas 1 item)?*',NULL),(27,'6','3','Quanto à presença de artistas estrangeiros no Brasil e/ou artistas brasileiros no exterior que podem ser contemplados pelos programas, marque apenas 1 item abaixo*:',NULL),(28,'7','3','Os artistas podem ser provenientes de que países/continentes/ blocos internacionais? (marque quantos itens julgar necessário)*:',NULL),(29,'1','4','Quais as principais ações realizadas pelos artistas durante a residência (marque quantos itens julgar necessário)*:',NULL),(30,'2','4','Quais as linguagens envolvidas nas diferentes ações desenvolvidas em residências artísticas? (marque quantos itens julgar necessário)*:',NULL),(31,'3','4','Qual o principal público a ser atingido pelas ações? (marque no máximo os 3 itens mais importantes)*:',NULL),(32,'4','4','Onde as ações são realizadas? (marque quantos itens julgar necessário)*:',NULL),(33,'5','4',' Quais os produtos são resultados das ações realizadas (marque quantos itens julgar necessário)*:',NULL),(34,'6','4','Comentários gerais (no máximo em dez linhas):',NULL),(35,NULL,'',NULL,NULL);
/*!40000 ALTER TABLE `pergunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesquisa`
--

DROP TABLE IF EXISTS `pesquisa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesquisa` (
  `idpesquisa` int(11) NOT NULL auto_increment,
  `respostas` varchar(45) default NULL,
  `usuario` varchar(45) default NULL,
  `parte` varchar(45) default NULL,
  `data` varchar(45) default NULL,
  `hora` varchar(45) default NULL,
  PRIMARY KEY  (`idpesquisa`)
) ENGINE=MyISAM AUTO_INCREMENT=1533 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesquisa`
--

LOCK TABLES `pesquisa` WRITE;
/*!40000 ALTER TABLE `pesquisa` DISABLE KEYS */;
INSERT INTO `pesquisa` VALUES (907,'0a','jaqueline','1','19/06/13','13:03'),(1164,'5a','wender','1','28/06/13','08:34'),(1163,'6e','wender','1','28/06/13','08:34'),(1162,'4c','wender','1','28/06/13','08:34'),(1161,'3j','wender','1','28/06/13','08:34'),(1270,'7l','feliperibeiro','3','02/07/13','15:19'),(1220,'5d','feliperibeiro','1','02/07/13','15:04'),(1219,'6c','feliperibeiro','1','02/07/13','15:04'),(1218,'4b','feliperibeiro','1','02/07/13','15:04'),(1217,'3k','feliperibeiro','1','02/07/13','15:04'),(1216,'2b','feliperibeiro','1','02/07/13','15:04'),(1215,'1a','feliperibeiro','1','02/07/13','15:04'),(1214,'0b','feliperibeiro','1','02/07/13','15:04'),(1165,'0a','wender','1','28/06/13','09:11'),(1160,'2b','wender','1','28/06/13','08:34'),(1159,'1a','wender','1','28/06/13','08:34'),(1158,'0a','wender','1','28/06/13','08:34'),(1239,'14c','feliperibeiro','2','02/07/13','15:12'),(1323,'2b','julianaamaral','1','04/07/13','12:05'),(1238,'12i','feliperibeiro','2','02/07/13','15:12'),(1237,'11b','feliperibeiro','2','02/07/13','15:12'),(1236,'10c','feliperibeiro','2','02/07/13','15:12'),(1235,'9b','feliperibeiro','2','02/07/13','15:12'),(1234,'6b','feliperibeiro','2','02/07/13','15:12'),(1233,'4c','feliperibeiro','2','02/07/13','15:12'),(1232,'2b','feliperibeiro','2','02/07/13','15:12'),(1231,'15c','feliperibeiro','2','02/07/13','15:12'),(1230,'13f','feliperibeiro','2','02/07/13','15:12'),(1229,'8i','feliperibeiro','2','02/07/13','15:12'),(1228,'8d','feliperibeiro','2','02/07/13','15:12'),(1227,'8a','feliperibeiro','2','02/07/13','15:12'),(1226,'7l','feliperibeiro','2','02/07/13','15:12'),(1225,'5c','feliperibeiro','2','02/07/13','15:12'),(1224,'3n','feliperibeiro','2','02/07/13','15:12'),(1223,'1h','feliperibeiro','2','02/07/13','15:12'),(1324,'3k','julianaamaral','1','04/07/13','12:05'),(1269,'7g','feliperibeiro','3','02/07/13','15:19'),(1268,'7f','feliperibeiro','3','02/07/13','15:19'),(1267,'6c','feliperibeiro','3','02/07/13','15:19'),(1266,'5b','feliperibeiro','3','02/07/13','15:19'),(1265,'4b','feliperibeiro','3','02/07/13','15:19'),(1264,'3h','feliperibeiro','3','02/07/13','15:19'),(1263,'2c','feliperibeiro','3','02/07/13','15:19'),(1262,'2c','feliperibeiro','3','02/07/13','15:19'),(1261,'1c','feliperibeiro','3','02/07/13','15:19'),(1222,'1e','feliperibeiro','2','02/07/13','15:12'),(1221,'1c','feliperibeiro','2','02/07/13','15:12'),(1322,'1a','julianaamaral','1','04/07/13','12:05'),(1369,'dec1','feliperibeiro','4','04/07/13','17:04'),(1368,'5i','feliperibeiro','4','04/07/13','17:04'),(1367,'5d','feliperibeiro','4','04/07/13','17:04'),(1366,'4j','feliperibeiro','4','04/07/13','17:04'),(1365,'4f','feliperibeiro','4','04/07/13','17:04'),(1364,'3f','feliperibeiro','4','04/07/13','17:04'),(1363,'2u','feliperibeiro','4','04/07/13','17:04'),(1362,'2k','feliperibeiro','4','04/07/13','17:04'),(1361,'1h','feliperibeiro','4','04/07/13','17:04'),(1360,'1d','feliperibeiro','4','04/07/13','17:04'),(1359,'1c','feliperibeiro','4','04/07/13','17:04'),(1147,'11b','wender','2','27/06/13','15:30'),(1149,'14c','wender','2','27/06/13','15:30'),(1148,'12c','wender','2','27/06/13','15:30'),(1146,'10a','wender','2','27/06/13','15:30'),(1145,'9d','wender','2','27/06/13','15:30'),(1144,'6b','wender','2','27/06/13','15:30'),(1143,'4d','wender','2','27/06/13','15:30'),(1142,'2b','wender','2','27/06/13','15:30'),(1141,'15c','wender','2','27/06/13','15:30'),(1140,'13e','wender','2','27/06/13','15:30'),(1139,'8c','wender','2','27/06/13','15:30'),(1138,'7d','wender','2','27/06/13','15:30'),(1157,'7f','wender','3','27/06/13','15:30'),(1329,'3f','julianaamaral','2','04/07/13','12:06'),(1328,'1c','julianaamaral','2','04/07/13','12:06'),(1327,'5d','julianaamaral','1','04/07/13','12:05'),(1326,'6c','julianaamaral','1','04/07/13','12:05'),(1137,'5d','wender','2','27/06/13','15:30'),(1136,'3c','wender','2','27/06/13','15:30'),(1156,'6b','wender','3','27/06/13','15:30'),(1155,'5b','wender','3','27/06/13','15:30'),(1154,'4b','wender','3','27/06/13','15:30'),(1153,'3g','wender','3','27/06/13','15:30'),(1152,'2c','wender','3','27/06/13','15:30'),(1151,'2c','wender','3','27/06/13','15:30'),(1150,'1a','wender','3','27/06/13','15:30'),(1135,'1g','wender','2','27/06/13','15:30'),(1325,'4b','julianaamaral','1','04/07/13','12:05'),(1309,'dec1','wender','4','03/07/13','13:38'),(824,'7j','ratazana','3','14/06/13','16:23'),(813,'5f','ratazana','1','14/06/13','16:23'),(812,'6c','ratazana','1','14/06/13','16:23'),(811,'4c','ratazana','1','14/06/13','16:23'),(810,'3f','ratazana','1','14/06/13','16:23'),(809,'2b','ratazana','1','14/06/13','16:23'),(807,'0b','ratazana','1','14/06/13','16:23'),(808,'1b','ratazana','1','14/06/13','16:23'),(863,'14a','ratazana','2','14/06/13','16:31'),(862,'12e','ratazana','2','14/06/13','16:31'),(861,'11b','ratazana','2','14/06/13','16:31'),(860,'10c','ratazana','2','14/06/13','16:31'),(859,'9b','ratazana','2','14/06/13','16:31'),(858,'6b','ratazana','2','14/06/13','16:31'),(857,'4c','ratazana','2','14/06/13','16:31'),(856,'2b','ratazana','2','14/06/13','16:31'),(855,'15g','ratazana','2','14/06/13','16:31'),(854,'15e','ratazana','2','14/06/13','16:31'),(853,'13e','ratazana','2','14/06/13','16:31'),(852,'8f','ratazana','2','14/06/13','16:31'),(851,'8d','ratazana','2','14/06/13','16:31'),(850,'7l','ratazana','2','14/06/13','16:31'),(849,'7h','ratazana','2','14/06/13','16:31'),(848,'5d','ratazana','2','14/06/13','16:31'),(847,'5c','ratazana','2','14/06/13','16:31'),(846,'5b','ratazana','2','14/06/13','16:31'),(845,'3k','ratazana','2','14/06/13','16:31'),(844,'3j','ratazana','2','14/06/13','16:31'),(843,'3i','ratazana','2','14/06/13','16:31'),(842,'3e','ratazana','2','14/06/13','16:31'),(841,'3d','ratazana','2','14/06/13','16:31'),(840,'3a','ratazana','2','14/06/13','16:31'),(839,'1h','ratazana','2','14/06/13','16:31'),(838,'1d','ratazana','2','14/06/13','16:31'),(837,'1c','ratazana','2','14/06/13','16:31'),(823,'7i','ratazana','3','14/06/13','16:23'),(822,'7h','ratazana','3','14/06/13','16:23'),(821,'7g','ratazana','3','14/06/13','16:23'),(820,'6b','ratazana','3','14/06/13','16:23'),(819,'5a','ratazana','3','14/06/13','16:23'),(818,'4b','ratazana','3','14/06/13','16:23'),(817,'3h','ratazana','3','14/06/13','16:23'),(816,'2d','ratazana','3','14/06/13','16:23'),(815,'2d','ratazana','3','14/06/13','16:23'),(814,'1h','ratazana','3','14/06/13','16:23'),(910,'3f','jaqueline','1','19/06/13','13:03'),(909,'2a','jaqueline','1','19/06/13','13:03'),(908,'1a','jaqueline','1','19/06/13','13:03'),(836,'dec3','ratazana','4','14/06/13','16:25'),(835,'dec2','ratazana','4','14/06/13','16:25'),(834,'dec1','ratazana','4','14/06/13','16:25'),(833,'5h','ratazana','4','14/06/13','16:25'),(832,'4d','ratazana','4','14/06/13','16:25'),(831,'3f','ratazana','4','14/06/13','16:25'),(830,'3d','ratazana','4','14/06/13','16:25'),(829,'2i','ratazana','4','14/06/13','16:25'),(828,'1h','ratazana','4','14/06/13','16:25'),(827,'1e','ratazana','4','14/06/13','16:25'),(826,'1a','ratazana','4','14/06/13','16:25'),(825,'7l','ratazana','3','14/06/13','16:23'),(911,'4b','jaqueline','1','19/06/13','13:03'),(912,'6b','jaqueline','1','19/06/13','13:03'),(913,'5c','jaqueline','1','19/06/13','13:03'),(914,'1a','jaqueline','2','19/06/13','13:16'),(915,'1b','jaqueline','2','19/06/13','13:16'),(916,'1c','jaqueline','2','19/06/13','13:16'),(917,'3a','jaqueline','2','19/06/13','13:16'),(918,'3b','jaqueline','2','19/06/13','13:16'),(919,'3i','jaqueline','2','19/06/13','13:16'),(920,'3k','jaqueline','2','19/06/13','13:16'),(921,'5c','jaqueline','2','19/06/13','13:16'),(922,'7b','jaqueline','2','19/06/13','13:16'),(923,'8g','jaqueline','2','19/06/13','13:16'),(924,'13f','jaqueline','2','19/06/13','13:16'),(925,'15d','jaqueline','2','19/06/13','13:16'),(926,'2a','jaqueline','2','19/06/13','13:16'),(927,'4b','jaqueline','2','19/06/13','13:16'),(928,'6a','jaqueline','2','19/06/13','13:16'),(929,'9b','jaqueline','2','19/06/13','13:16'),(930,'10b','jaqueline','2','19/06/13','13:16'),(931,'11a','jaqueline','2','19/06/13','13:16'),(932,'12b','jaqueline','2','19/06/13','13:16'),(933,'14a','jaqueline','2','19/06/13','13:16'),(934,'1a','jaqueline','3','19/06/13','13:17'),(935,'2c','jaqueline','3','19/06/13','13:17'),(936,'2c','jaqueline','3','19/06/13','13:17'),(937,'3f','jaqueline','3','19/06/13','13:17'),(938,'4a','jaqueline','3','19/06/13','13:17'),(939,'5a','jaqueline','3','19/06/13','13:17'),(940,'6a','jaqueline','3','19/06/13','13:17'),(941,'7a','jaqueline','3','19/06/13','13:17'),(942,'0a','anaclaudia','1','19/06/13','13:29'),(943,'1a','anaclaudia','1','19/06/13','13:29'),(944,'2b','anaclaudia','1','19/06/13','13:29'),(945,'3c','anaclaudia','1','19/06/13','13:29'),(946,'4a','anaclaudia','1','19/06/13','13:29'),(947,'6e','anaclaudia','1','19/06/13','13:29'),(948,'5a','anaclaudia','1','19/06/13','13:29'),(949,'1c','anaclaudia','2','19/06/13','13:45'),(950,'1d','anaclaudia','2','19/06/13','13:45'),(951,'1f','anaclaudia','2','19/06/13','13:45'),(952,'3d','anaclaudia','2','19/06/13','13:45'),(953,'5c','anaclaudia','2','19/06/13','13:45'),(954,'8c','anaclaudia','2','19/06/13','13:45'),(955,'13i','anaclaudia','2','19/06/13','13:45'),(956,'15c','anaclaudia','2','19/06/13','13:45'),(957,'2a','anaclaudia','2','19/06/13','13:45'),(958,'4c','anaclaudia','2','19/06/13','13:45'),(959,'6b','anaclaudia','2','19/06/13','13:45'),(960,'9a','anaclaudia','2','19/06/13','13:45'),(961,'10b','anaclaudia','2','19/06/13','13:45'),(962,'11b','anaclaudia','2','19/06/13','13:45'),(963,'12c','anaclaudia','2','19/06/13','13:45'),(964,'14c','anaclaudia','2','19/06/13','13:45'),(965,'1e','anaclaudia','3','19/06/13','13:49'),(966,'2b','anaclaudia','3','19/06/13','13:49'),(967,'2b','anaclaudia','3','19/06/13','13:49'),(968,'3b','anaclaudia','3','19/06/13','13:49'),(969,'4b','anaclaudia','3','19/06/13','13:49'),(970,'5b','anaclaudia','3','19/06/13','13:49'),(971,'6b','anaclaudia','3','19/06/13','13:49'),(972,'7g','anaclaudia','3','19/06/13','13:49'),(973,'1b','anaclaudia','4','19/06/13','13:56'),(974,'2e','anaclaudia','4','19/06/13','13:56'),(975,'3e','anaclaudia','4','19/06/13','13:56'),(976,'4e','anaclaudia','4','19/06/13','13:56'),(977,'5c','anaclaudia','4','19/06/13','13:56'),(978,'dec1','anaclaudia','4','19/06/13','13:56'),(979,'dec2','anaclaudia','4','19/06/13','13:56'),(980,'dec3','anaclaudia','4','19/06/13','13:56'),(1166,'1a','wender','1','28/06/13','09:11'),(1167,'2b','wender','1','28/06/13','09:11'),(1168,'3j','wender','1','28/06/13','09:11'),(1169,'4c','wender','1','28/06/13','09:11'),(1170,'6e','wender','1','28/06/13','09:11'),(1171,'5a','wender','1','28/06/13','09:11'),(1172,'0a','wender','1','28/06/13','09:42'),(1173,'1a','wender','1','28/06/13','09:42'),(1174,'2b','wender','1','28/06/13','09:42'),(1175,'3j','wender','1','28/06/13','09:42'),(1176,'4c','wender','1','28/06/13','09:42'),(1177,'6e','wender','1','28/06/13','09:42'),(1178,'5a','wender','1','28/06/13','09:42'),(1179,'1g','wender','2','28/06/13','09:42'),(1180,'3c','wender','2','28/06/13','09:42'),(1181,'5d','wender','2','28/06/13','09:42'),(1182,'7d','wender','2','28/06/13','09:42'),(1183,'8c','wender','2','28/06/13','09:42'),(1184,'13e','wender','2','28/06/13','09:42'),(1185,'15c','wender','2','28/06/13','09:42'),(1186,'2b','wender','2','28/06/13','09:42'),(1187,'4d','wender','2','28/06/13','09:42'),(1188,'6b','wender','2','28/06/13','09:42'),(1189,'9d','wender','2','28/06/13','09:42'),(1190,'10a','wender','2','28/06/13','09:42'),(1191,'11b','wender','2','28/06/13','09:42'),(1192,'12c','wender','2','28/06/13','09:42'),(1193,'14c','wender','2','28/06/13','09:42'),(1194,'1a','wender','3','28/06/13','09:42'),(1195,'2c','wender','3','28/06/13','09:42'),(1196,'2c','wender','3','28/06/13','09:42'),(1197,'3g','wender','3','28/06/13','09:42'),(1198,'4b','wender','3','28/06/13','09:42'),(1199,'5b','wender','3','28/06/13','09:42'),(1200,'6b','wender','3','28/06/13','09:42'),(1201,'7f','wender','3','28/06/13','09:42'),(1321,'0b','julianaamaral','1','04/07/13','12:05'),(1308,'5b','wender','4','03/07/13','13:38'),(1307,'4e','wender','4','03/07/13','13:38'),(1306,'3c','wender','4','03/07/13','13:38'),(1305,'2o','wender','4','03/07/13','13:38'),(1304,'1e','wender','4','03/07/13','13:38'),(1330,'5e','julianaamaral','2','04/07/13','12:06'),(1331,'7c','julianaamaral','2','04/07/13','12:06'),(1332,'8c','julianaamaral','2','04/07/13','12:06'),(1333,'13e','julianaamaral','2','04/07/13','12:06'),(1334,'13f','julianaamaral','2','04/07/13','12:06'),(1335,'13g','julianaamaral','2','04/07/13','12:06'),(1336,'15b','julianaamaral','2','04/07/13','12:06'),(1337,'2a','julianaamaral','2','04/07/13','12:06'),(1338,'4c','julianaamaral','2','04/07/13','12:06'),(1339,'6b','julianaamaral','2','04/07/13','12:06'),(1340,'9c','julianaamaral','2','04/07/13','12:06'),(1341,'10c','julianaamaral','2','04/07/13','12:06'),(1342,'11b','julianaamaral','2','04/07/13','12:06'),(1343,'12b','julianaamaral','2','04/07/13','12:06'),(1344,'14b','julianaamaral','2','04/07/13','12:06'),(1345,'7g','julianaamaral','3','04/07/13','12:06'),(1346,'7h','julianaamaral','3','04/07/13','12:06'),(1347,'1d','julianaamaral','4','04/07/13','12:07'),(1348,'2d','julianaamaral','4','04/07/13','12:07'),(1349,'2p','julianaamaral','4','04/07/13','12:07'),(1350,'2u','julianaamaral','4','04/07/13','12:07'),(1351,'3c','julianaamaral','4','04/07/13','12:07'),(1352,'3d','julianaamaral','4','04/07/13','12:07'),(1353,'4d','julianaamaral','4','04/07/13','12:07'),(1354,'4k','julianaamaral','4','04/07/13','12:07'),(1355,'','julianaamaral','4','04/07/13','12:07'),(1356,'5g','julianaamaral','4','04/07/13','12:07'),(1357,'5i','julianaamaral','4','04/07/13','12:07'),(1358,'dec1','julianaamaral','4','04/07/13','12:07'),(1532,'5e','clodovil','1','07/07/13','17:21'),(1531,'5d','clodovil','1','07/07/13','17:21'),(1530,'5c','clodovil','1','07/07/13','17:21'),(1529,'6e','clodovil','1','07/07/13','17:21'),(1528,'4b','clodovil','1','07/07/13','17:21'),(1527,'3k','clodovil','1','07/07/13','17:21'),(1526,'2b','clodovil','1','07/07/13','17:21'),(1525,'1a','clodovil','1','07/07/13','17:21'),(1524,'0b','clodovil','1','07/07/13','17:21'),(1472,'7i','clodovil','3','07/07/13','16:48'),(1438,'14b','clodovil','2','07/07/13','16:40'),(1437,'12i','clodovil','2','07/07/13','16:40'),(1436,'11b','clodovil','2','07/07/13','16:40'),(1435,'10c','clodovil','2','07/07/13','16:40'),(1434,'9b','clodovil','2','07/07/13','16:40'),(1433,'6b','clodovil','2','07/07/13','16:40'),(1432,'4c','clodovil','2','07/07/13','16:40'),(1431,'2b','clodovil','2','07/07/13','16:40'),(1430,'15d','clodovil','2','07/07/13','16:40'),(1429,'15c','clodovil','2','07/07/13','16:40'),(1428,'13i','clodovil','2','07/07/13','16:40'),(1427,'13f','clodovil','2','07/07/13','16:40'),(1426,'8i','clodovil','2','07/07/13','16:40'),(1425,'8d','clodovil','2','07/07/13','16:40'),(1424,'8a','clodovil','2','07/07/13','16:40'),(1423,'7l','clodovil','2','07/07/13','16:40'),(1422,'7g','clodovil','2','07/07/13','16:40'),(1421,'5d','clodovil','2','07/07/13','16:40'),(1420,'5c','clodovil','2','07/07/13','16:40'),(1419,'3n','clodovil','2','07/07/13','16:40'),(1418,'3f','clodovil','2','07/07/13','16:40'),(1417,'3e','clodovil','2','07/07/13','16:40'),(1416,'3c','clodovil','2','07/07/13','16:40'),(1415,'1j','clodovil','2','07/07/13','16:40'),(1414,'1b','clodovil','2','07/07/13','16:40'),(1471,'7h','clodovil','3','07/07/13','16:48'),(1470,'7g','clodovil','3','07/07/13','16:48'),(1469,'6c','clodovil','3','07/07/13','16:48'),(1468,'5b','clodovil','3','07/07/13','16:48'),(1467,'4b','clodovil','3','07/07/13','16:48'),(1466,'3h','clodovil','3','07/07/13','16:48'),(1465,'2c','clodovil','3','07/07/13','16:48'),(1464,'2c','clodovil','3','07/07/13','16:48'),(1463,'1c','clodovil','3','07/07/13','16:48'),(1523,'dec1','clodovil','4','07/07/13','17:20'),(1522,'5c','clodovil','4','07/07/13','17:20'),(1521,'5b','clodovil','4','07/07/13','17:20'),(1520,'4e','clodovil','4','07/07/13','17:20'),(1519,'4d','clodovil','4','07/07/13','17:20'),(1518,'3d','clodovil','4','07/07/13','17:20'),(1517,'3c','clodovil','4','07/07/13','17:20'),(1516,'2u','clodovil','4','07/07/13','17:20'),(1515,'2n','clodovil','4','07/07/13','17:20'),(1514,'2m','clodovil','4','07/07/13','17:20'),(1513,'2d','clodovil','4','07/07/13','17:20'),(1512,'2c','clodovil','4','07/07/13','17:20'),(1511,'1h','clodovil','4','07/07/13','17:20'),(1510,'1c','clodovil','4','07/07/13','17:20'),(1473,'7l','clodovil','3','07/07/13','16:48');
/*!40000 ALTER TABLE `pesquisa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesquisaquais`
--

DROP TABLE IF EXISTS `pesquisaquais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesquisaquais` (
  `idpesquisa` int(11) NOT NULL auto_increment,
  `questao` varchar(45) default NULL,
  `respostas` longtext,
  `usuario` varchar(45) default NULL,
  `parte` varchar(45) default NULL,
  `data` varchar(45) default NULL,
  `hora` varchar(45) default NULL,
  PRIMARY KEY  (`idpesquisa`)
) ENGINE=MyISAM AUTO_INCREMENT=865 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesquisaquais`
--

LOCK TABLES `pesquisaquais` WRITE;
/*!40000 ALTER TABLE `pesquisaquais` DISABLE KEYS */;
INSERT INTO `pesquisaquais` VALUES (859,'qtd3','Bem te vi','clodovil','1','07/07/13','17:20'),(858,'qtd3','Bem te vi','clodovil','1','07/07/13','17:20'),(857,'qtd3','Bem te vi','clodovil','1','07/07/13','17:19'),(856,'qtd3','Bem te vi','clodovil','1','07/07/13','17:19'),(860,'qtdComentariosGerais','					kjlhxfklhaweklfhklhkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk			                          ','clodovil','4','07/07/13','17:20'),(861,'qtd1','Rsposta','clodovil','4','07/07/13','17:20'),(862,'qtd2','Barco','clodovil','4','07/07/13','17:20'),(863,'qtd5','Ratazana','clodovil','4','07/07/13','17:20'),(864,'qtd3','Bem te vi','clodovil','1','07/07/13','17:21'),(854,'qtd3','5 anos','clodovil','3','07/07/13','16:48'),(855,'qtd7','Tanzania','clodovil','3','07/07/13','16:48'),(848,'qtd12','1000000000','clodovil','2','07/07/13','16:40'),(847,'qtd81','2015','clodovil','2','07/07/13','16:40'),(776,'qtdComentariosGerais','					5555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555			                         ','ratazana','4','14/06/13','16:25'),(770,'qtd3','resposta','ratazana','1','14/06/13','16:01'),(773,'qtd3','resposta','ratazana','1','14/06/13','16:20'),(733,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','1','12/06/13','12:17'),(732,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','1','12/06/13','12:16'),(846,'qtd7','Argentina','clodovil','2','07/07/13','16:40'),(845,'qtd3','Mickey Mouse','clodovil','2','07/07/13','16:40'),(844,'qtd1','Spider','clodovil','2','07/07/13','16:40'),(836,'qtd5','bELGICA','feliperibeiro','4','04/07/13','17:04'),(837,'qtd3','Bem te vi','clodovil','1','07/07/13','16:34'),(821,'qtdComentariosGerais','												teste de recuperaÃ§Ã£o de textos                                                                            ','wender','4','03/07/13','13:38'),(792,'qtd3','Ponto de Cultura','feliperibeiro','1','02/07/13','15:04'),(758,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','1','14/06/13','15:37'),(779,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','1','14/06/13','16:54'),(774,'qtd3','5 anos','ratazana','3','14/06/13','16:23'),(777,'qtd1','Dinamarca','ratazana','4','14/06/13','16:25'),(780,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','1','14/06/13','16:54'),(781,'qtdComentariosGerais','Os artistas apoiados por programas de residÃªncias artÃ­sticas podem ser oriundos de diversos paÃ­ses, havendo a possibilidade do artista vir fazer a residÃªncia no Brasil, bem como, um artista brasileiro realizar a residÃªncia no exterior. Os programas de residÃªncias podem nÃ£o ter um intercÃ¢mbio internacional, sendo realizado apenas por artistas brasileiros. Em mÃ©dia, os programas concedem prÃªmios, bolsas ou outras formas de apoio a um nÃºmero determinado Os artistas apoiados por programas de residÃªncias artÃ­sticas podem ser oriundos de diversos paÃ­ses, havendo a possibilidade do artista vir fazer','anaclaudia','4','19/06/13','13:56'),(831,'qtd4','teatro','julianaamaral','4','04/07/13','12:07'),(778,'qtd7','NigÃ©ria','ratazana','2','14/06/13','16:31'),(756,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','1','12/06/13','12:39'),(835,'qtd4','Russia','feliperibeiro','4','04/07/13','17:04'),(834,'qtd2','Tirando','feliperibeiro','4','04/07/13','17:04'),(833,'qtd1','tREVISO','feliperibeiro','4','04/07/13','17:04'),(832,'qtdComentariosGerais','				abdgCGUQWFGUGBVUOGVB             ','feliperibeiro','4','04/07/13','17:04'),(827,'qtd3','chakubuku','julianaamaral','1','04/07/13','12:05'),(828,'qtd3','fwhhf','julianaamaral','2','04/07/13','12:06'),(829,'qtd7','JapÃ£o','julianaamaral','3','04/07/13','12:06'),(830,'qtdComentariosGerais','		dhqwkhdwkghkufhegujg13jkggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg		             ','julianaamaral','4','04/07/13','12:07'),(796,'qtd81','2016','feliperibeiro','2','02/07/13','15:12'),(795,'qtd8','2008','feliperibeiro','2','02/07/13','15:12'),(794,'qtd7','Somalia','feliperibeiro','2','02/07/13','15:12'),(805,'qtd7','jAMAICA','feliperibeiro','3','02/07/13','15:19'),(804,'qtd3','5 ANOS','feliperibeiro','3','02/07/13','15:19'),(775,'qtd7','JapÃ£o','ratazana','3','14/06/13','16:23'),(677,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','1','10/06/13','12:44'),(793,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','2','02/07/13','15:12'),(676,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','1','10/06/13','12:44'),(838,'qtd3','Bem te vi','clodovil','1','07/07/13','16:35'),(675,'qtd3','ONGS INTERNACIONAIS','feliperibeiro','1','10/06/13','12:43');
/*!40000 ALTER TABLE `pesquisaquais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respostas`
--

DROP TABLE IF EXISTS `respostas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respostas` (
  `idperguntas` int(11) NOT NULL auto_increment,
  `formulario` varchar(45) default NULL,
  `questoes` varchar(45) default NULL,
  `questaovalores` varchar(255) default NULL,
  UNIQUE KEY `idperguntas` (`idperguntas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respostas`
--

LOCK TABLES `respostas` WRITE;
/*!40000 ALTER TABLE `respostas` DISABLE KEYS */;
/*!40000 ALTER TABLE `respostas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idusuario` int(16) NOT NULL auto_increment,
  `login` varchar(25) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `ativo` char(1) NOT NULL,
  `email` varchar(45) NOT NULL,
  `data` varchar(45) default NULL,
  `tipo` varchar(6) default NULL COMMENT 'Adm = administrador\nAvan = avançado',
  `hora` varchar(45) default NULL,
  `concluido` varchar(5) default '-1',
  `autenticacao` varchar(45) default NULL,
  PRIMARY KEY  (`idusuario`,`login`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  UNIQUE KEY `nome_UNIQUE` (`nome`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'wender','57a68c1dbe07ec8cf9d4114cc941ac9d','wender','0','wendercorrea@gmail.com','02/05/13','adm','10:22','4','zvsj7u'),(2,'feliperibeiro','a623e3cfbdb0e361a07e3361f96fd6ec','feliperibeiro','0','fl.ribeiro@globo.com','03/05/13','clien','17:34','4','n4ezah'),(3,'anaclaudia','15c2018bfb3aa30db51927d41c69ea2d','anaclaudia','0','anaclaudia.funarte@gmail.com','03/05/13','clien','17:44','4','3y9s9h'),(4,'andrebezerra','980ac217c6b51e7dc41040bec1edfec8','andrebezerra','0','andrebezerra@gmail.com','06/05/13','clien','12:34','0','imalb3'),(6,'JoseAndre','8036f8486be95eeb335fdc61c05143dc','JoseAndre','1','elorb@globo.com','12/06/13',NULL,'12:35','-1',NULL),(5,'marcelasilva','4e56b093e556baa9f245ea12c19986a8','marcelasilva','0','marcela.viana@funarte.gov.br','05/06/13',NULL,'14:17','-1',NULL),(7,'ratazana','a623e3cfbdb0e361a07e3361f96fd6ec','ratazana','0','fl.ribeiro@globo..com','14/06/13',NULL,'15:46','4',NULL),(8,'Anabraga','e6661fac6e6dcde7cb2d30785827d68a','Anabraga','0','anabraga.funarte@gmail.com','19/06/13',NULL,'10:46','-1',NULL),(9,'pedroamaral','240a4e0ec13162977558a752e90ad56a','pedroamaral','1','pd-amaral@uol.com.br','19/06/13',NULL,'11:47','-1',NULL),(10,'jaqueline','b6dfa2524fb976211acd80fbb56cc474','jaqueline','0','jaquelinefunarte@gmail.com','19/06/13',NULL,'12:41','3',NULL),(103,'joaofilho','09151a42659cfc08aff86820f973f640','joaofilho','0','joao.filho@funarte.gov.br','27/06/13',NULL,'09:37','0',NULL),(104,'julianaamaral','46d0cc39327bfcabcbbed25202c8be81','julianaamaral','0','julianaamaral.funarte@gmail.com','04/07/13',NULL,'12:01','4',NULL),(105,'clodovil','9e30feaaa53bfc1d6363bc23ad6bfc3f','clodovil','0','jb.ribeiro@globo.com','07/07/13',NULL,'16:24','4',NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-08  9:52:58
