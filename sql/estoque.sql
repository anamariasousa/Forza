CREATE DATABASE  IF NOT EXISTS `estoque` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `estoque`;
-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: estoque
-- ------------------------------------------------------
-- Server version	5.7.18-1

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
-- Table structure for table `Acessorios`
--

DROP TABLE IF EXISTS `Acessorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Acessorios` (
  `idAcessorios` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idAcessorios`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Acessorios`
--

LOCK TABLES `Acessorios` WRITE;
/*!40000 ALTER TABLE `Acessorios` DISABLE KEYS */;
INSERT INTO `Acessorios` VALUES (1,'BEBÊ  CONFORTO'),(2,'CADEIRA DE BEBÊ '),(3,'ASSENTO P/ CRIANÇAS'),(4,'NÃO');
/*!40000 ALTER TABLE `Acessorios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Adm`
--

DROP TABLE IF EXISTS `Adm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Adm` (
  `idAdm` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `SENHA` varchar(200) NOT NULL,
  PRIMARY KEY (`idAdm`),
  UNIQUE KEY `EMAIL_UNIQUE` (`EMAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Adm`
--

LOCK TABLES `Adm` WRITE;
/*!40000 ALTER TABLE `Adm` DISABLE KEYS */;
INSERT INTO `Adm` VALUES (1,'ADM01','adm@locadora.com','654321'),(2,'ADM02','subadm@locadora.com','654321');
/*!40000 ALTER TABLE `Adm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Carros`
--

DROP TABLE IF EXISTS `Carros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Carros` (
  `idCarros` int(11) NOT NULL AUTO_INCREMENT,
  `PLACA` varchar(100) NOT NULL,
  `FABRICACAO` int(11) NOT NULL,
  `VALORDIARIA` int(11) NOT NULL,
  `Adm_idAdm` int(11) NOT NULL,
  `IMG` varchar(200) DEFAULT NULL,
  `NomeCarro` varchar(100) DEFAULT NULL,
  `AR` varchar(100) DEFAULT NULL,
  `CAMBIO` varchar(100) DEFAULT NULL,
  `GPS` varchar(100) DEFAULT NULL,
  `ASSENTOS` varchar(100) DEFAULT NULL,
  `PORTAS` varchar(100) DEFAULT NULL,
  `MALAS` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idCarros`,`Adm_idAdm`),
  UNIQUE KEY `PLACA_UNIQUE` (`PLACA`),
  KEY `fk_Carros_Adm1_idx` (`Adm_idAdm`),
  CONSTRAINT `fk_Carros_Adm1` FOREIGN KEY (`Adm_idAdm`) REFERENCES `Adm` (`idAdm`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Carros`
--

LOCK TABLES `Carros` WRITE;
/*!40000 ALTER TABLE `Carros` DISABLE KEYS */;
INSERT INTO `Carros` VALUES (1,'ABC-1555',2017,87,1,'hyundaielantra.png','Hyundai Elantra','A/C','A','Nao','5','1','1'),(2,'HEH-3342',2017,87,1,'hyundaisolaris.png','Hyundai Solaris','A/C','A','Nao','4','4','2'),(3,'LOL-7729',2017,87,1,'vwjetta.png','VW Jetta','A/C','A','Nao','5','4','2'),(4,'KER-9719',2017,87,1,'fordfocus.png','Ford Focus','A/C','A','Nao','5','5','2'),(5,'MWM-5334',2017,113,1,'hyundaicreta.png','Hyundai Creta','A/C','A','Nao','5','5','1'),(6,'MWB-2268',2017,113,1,'bmw1Series.png','BMW Series  1','A/C','M','Nao','5','4','2'),(7,'HWF-5730',2017,113,1,'vwpassat.png','VW Passat','A/C','A','Nao','5','4','2'),(8,'MOE-7107',2017,147,1,'vwtiguan.png','VW Tiguan','A/C','A','Nao','5','4','4'),(9,'LWN-4161',2017,147,2,'mercedesbenzcc.png','Mercedes Benz C.Class','A/C','A','Nao','5','4','2'),(10,'JMT-1213',2017,147,1,'opel-mokka.png','Opel Mokka','A/C','M','Nao','5','4','2'),(11,'LOA-3407',2017,147,1,'mini.png','MINI','A/C','M','Nao','4','3','1'),(12,'IGV-0968',2017,175,1,'opel-astra.png','Opel Astra','A/C','A','Nao','5','5','1'),(13,'GPT-0071',2017,175,2,'peugeot-3008.png','Peugeot 3008','A/C','M','Nao','5','4','3'),(14,'MZA-0682',2017,175,1,'bmw-2-at.png','BMW Serie 2 A.T','A/C','M','Nao','5','2','2'),(15,'AGN-2715',2017,175,1,'fiat-500.png','Fiat 500','A/C','M','Nao','4','2','0'),(16,'NBW-7436',2017,87,2,'peugeot-308.png','Peugeot 308','A/C','M','Nao','5','4','2'),(17,'AIM-3723',2017,113,1,'citroen-c4-.png','Citroen C4','A/C','M','Nao','5','5','2'),(18,'NCI-8665',2017,147,1,'kia-ceed.png','Kia Cee\'d SW','A/C','M','Sim','5','5','2'),(19,'KGP-5324',2017,175,1,'nissan-qashqai.png','Nissan Qashqai','A/C','M','Sim','5','4','2'),(20,'LWB-8422',2017,87,1,'renault-megane.png','Renault Megane','A/C','A','Sim','5','4','2'),(21,'3333',3333,3333,1,NULL,'TTTTT','S','S','S','3','3','3');
/*!40000 ALTER TABLE `Carros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clientes`
--

DROP TABLE IF EXISTS `Clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clientes` (
  `idClientes` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(200) NOT NULL,
  `TELEFONE` bigint(14) NOT NULL,
  `CNH` varchar(45) NOT NULL,
  `SENHA` varchar(200) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idClientes`),
  UNIQUE KEY `CNH_UNIQUE` (`CNH`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clientes`
--

LOCK TABLES `Clientes` WRITE;
/*!40000 ALTER TABLE `Clientes` DISABLE KEYS */;
INSERT INTO `Clientes` VALUES (1,'Antonio Benjamin Cardosoelvkfdfrg',5563983654872,'31482106161','d41d8cd98f00b204e9800998ecf8427e',''),(2,'Livia Juliana Alana Martins',5563982938300,'89759456699',NULL,NULL),(3,'Stefany Evelyn Barros',5563999825159,'23025904793',NULL,NULL),(4,'Ricardo Bryan dos Santos',5563982841884,'75059294904',NULL,NULL),(5,'Lucca Breno Luiz Cardoso',5563987663433,'00790739702',NULL,NULL),(6,'Otavio Lorenzo Calebe Nascimento',5563996928531,'78434065232',NULL,NULL),(7,'Olivia Brenda Hadassa Cavalcanti',5563997646343,'10176363917',NULL,NULL),(8,'Ester Fernanda Campos',5563992183074,'21053589344',NULL,NULL),(9,'Igor Benicio Eduardo Araujo',5563991907951,'04896510416',NULL,NULL),(10,'Mariane Bruna Campos',5563993768497,'04197795067',NULL,NULL),(11,'Ana Rayssa Almeida',556339371602,'14978834155',NULL,NULL),(12,'Eduardo Julio Isaac Lima',5563989098897,'25849216412',NULL,NULL),(13,'Rodrigo Igor Freitas',5563992277869,'63193744151',NULL,NULL),(14,'Daniel Anthony Carlos Eduardo Campos',5563998047840,'44149182443',NULL,NULL),(15,'Bruno Rafael Danilo Gomes',5563982184582,'40539088205',NULL,NULL),(16,'Melissa Luiza Pereira',556335320511,'11882671136',NULL,NULL),(18,'Iago Vinicius Nascimento',5563992403473,'98392890693',NULL,NULL),(19,'Guilherme Murilo Rocha',5563988169751,'78153415433',NULL,NULL),(20,'Alice Isabella Pereira',5563997648264,'23382131046',NULL,NULL),(21,'aaaaaaaaa',11111111,'111111',NULL,NULL),(23,'ss',11,'ss','8f60c8102d29fcd525162d02eed4566b',NULL),(24,'ww',22,'ww','b0baee9d279d34fa1dfd71aadb908c3f',NULL),(25,'ee',33,'ee','934b535800b1cba8f96a5d72f72f1611','annabertozzi@gmail.com'),(28,'qqqqqq',22222,'qq','93279e3308bdbbeed946fc965017f67a','anna@gmail.com'),(30,'aaaaa',11,'11','698d51a19d8a121ce581499d7b701668','annabertozzi077@gmail.com'),(31,'ffff',333333,'aaaa','ece926d8c0356205276a45266d361161','annabertozzif@gmail.com'),(32,'ffffff',11111,'11111','e74d913bd351bd508ab06a7c554da354','anaa@gmail.com');
/*!40000 ALTER TABLE `Clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Extras`
--

DROP TABLE IF EXISTS `Extras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Extras` (
  `idExtras` int(11) NOT NULL AUTO_INCREMENT,
  `SEGURO` varchar(100) NOT NULL,
  `VALOR` float DEFAULT NULL,
  PRIMARY KEY (`idExtras`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Extras`
--

LOCK TABLES `Extras` WRITE;
/*!40000 ALTER TABLE `Extras` DISABLE KEYS */;
INSERT INTO `Extras` VALUES (1,'BASICO',49),(2,'INTERMEDIARIO',79),(3,'FULL',129);
/*!40000 ALTER TABLE `Extras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reservas`
--

DROP TABLE IF EXISTS `Reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reservas` (
  `idReservas` int(11) NOT NULL AUTO_INCREMENT,
  `DATADARESERVA` int(11) DEFAULT NULL,
  `DATADEDEVOLUCAO` int(11) DEFAULT NULL,
  `Clientes_idClientes` int(11) NOT NULL,
  `Carros_idCarros` int(11) NOT NULL,
  `Extras_idExtras` int(11) NOT NULL,
  `ACESSORIO` varchar(45) DEFAULT NULL,
  `VALORES` int(11) DEFAULT NULL,
  PRIMARY KEY (`idReservas`,`Clientes_idClientes`,`Carros_idCarros`,`Extras_idExtras`),
  KEY `fk_Reservas_Clientes1_idx` (`Clientes_idClientes`),
  KEY `fk_Reservas_Carros1_idx` (`Carros_idCarros`),
  KEY `fk_Reservas_Extras1_idx` (`Extras_idExtras`),
  CONSTRAINT `fk_Reservas_Carros1` FOREIGN KEY (`Carros_idCarros`) REFERENCES `Carros` (`idCarros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reservas_Clientes1` FOREIGN KEY (`Clientes_idClientes`) REFERENCES `Clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reservas_Extras1` FOREIGN KEY (`Extras_idExtras`) REFERENCES `Extras` (`idExtras`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservas`
--

LOCK TABLES `Reservas` WRITE;
/*!40000 ALTER TABLE `Reservas` DISABLE KEYS */;
INSERT INTO `Reservas` VALUES (1,20180126,20180202,1,1,1,'CADEIRA INFANTIL',NULL),(2,20171213,20171215,20,3,1,'CADEIRA INFANTIL',NULL),(3,20171213,20171216,19,4,2,'CADEIRA INFANTIL',NULL),(4,20171213,20171216,2,5,2,'CADEIRA INFANTIL',NULL),(5,20171214,20171216,3,6,1,'CADEIRA INFANTIL',NULL),(6,20171214,20171217,4,7,1,'CADEIRA INFANTIL',NULL),(7,20171214,20171217,5,8,1,'CADEIRA INFANTIL',NULL),(8,20171214,20171217,6,9,1,'CADEIRA INFANTIL',NULL),(9,20171214,20171217,7,10,3,'CADEIRA INFANTIL',NULL),(10,20171215,20171217,8,11,1,'CADEIRA INFANTIL',NULL),(11,20171215,20171220,9,12,3,'CADEIRA INFANTIL',NULL),(12,20171215,20171218,10,13,1,'CADEIRA INFANTIL',NULL),(13,20171215,20171218,11,14,1,'CADEIRA INFANTIL',NULL),(14,20171215,20171218,12,15,1,'CADEIRA INFANTIL',NULL),(15,20171215,20171218,13,16,1,'CADEIRA INFANTIL',NULL),(16,20171216,20171218,14,2,1,'CADEIRA INFANTIL',NULL),(17,20171216,20171219,15,3,2,'CADEIRA INFANTIL',NULL),(18,20171216,20171220,16,19,3,'CADEIRA INFANTIL',NULL),(19,20171217,20171220,1,20,1,'CADEIRA INFANTIL',NULL),(20,20171217,20171221,20,5,2,'CADEIRA INFANTIL',NULL);
/*!40000 ALTER TABLE `Reservas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-31 18:18:23
