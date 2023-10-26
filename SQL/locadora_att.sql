-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbLocadora
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbcategoria`
--

DROP TABLE IF EXISTS `tbcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbcategoria` (
  `codigo_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcategoria`
--

LOCK TABLES `tbcategoria` WRITE;
/*!40000 ALTER TABLE `tbcategoria` DISABLE KEYS */;
INSERT INTO `tbcategoria` VALUES (0,'terror'),(1,'A?ao'),(2,'Com?dia'),(3,'Drama');
/*!40000 ALTER TABLE `tbcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbclasse`
--

DROP TABLE IF EXISTS `tbclasse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbclasse` (
  `codigo_classe` int(11) NOT NULL,
  `nome_classe` varchar(20) NOT NULL,
  `preco_classe` decimal(4,2) NOT NULL,
  PRIMARY KEY (`codigo_classe`),
  CONSTRAINT `ck_NomeClasse` CHECK (`nome_classe` in ('lan?amento','Cat?logo'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbclasse`
--

LOCK TABLES `tbclasse` WRITE;
/*!40000 ALTER TABLE `tbclasse` DISABLE KEYS */;
INSERT INTO `tbclasse` VALUES (1,'Lan?amento',15.99),(2,'Cat?logo',9.99);
/*!40000 ALTER TABLE `tbclasse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbcliente`
--

DROP TABLE IF EXISTS `tbcliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbcliente` (
  `codigo_cli` int(11) NOT NULL,
  `CPF_cli` char(11) DEFAULT NULL,
  `nome_cli` varchar(20) NOT NULL,
  `data_cadastro` date DEFAULT NULL,
  `cidade_cli` varchar(20) DEFAULT NULL,
  `UF_cli` char(2) DEFAULT 'PR',
  PRIMARY KEY (`codigo_cli`),
  UNIQUE KEY `un_CPFcli` (`CPF_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcliente`
--

LOCK TABLES `tbcliente` WRITE;
/*!40000 ALTER TABLE `tbcliente` DISABLE KEYS */;
INSERT INTO `tbcliente` VALUES (1,'12345678901','Joao Silva','2023-10-24','Sao Paulo','SP'),(2,'23456789012','Maria Santos','2023-10-23','Rio de Janeiro','RJ'),(3,'34567890123','Pedro Oliveira','2023-10-22','Belo Horizonte','MG');
/*!40000 ALTER TABLE `tbcliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbemprestimodevolucao`
--

DROP TABLE IF EXISTS `tbemprestimodevolucao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbemprestimodevolucao` (
  `codigo_cli` int(11) NOT NULL,
  `codigo_filme` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `data_devolucao_prevista` date NOT NULL,
  `data_devolucao_efetiva` date DEFAULT NULL,
  `valor_multa` decimal(4,2) DEFAULT 0.00,
  PRIMARY KEY (`codigo_cli`,`codigo_filme`,`data_emprestimo`),
  KEY `fk_tbEmpDev_tbFilme` (`codigo_filme`),
  CONSTRAINT `fk_tbEmpDev_tbCliente` FOREIGN KEY (`codigo_cli`) REFERENCES `tbcliente` (`codigo_cli`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tbEmpDev_tbFilme` FOREIGN KEY (`codigo_filme`) REFERENCES `tbfilme` (`codigo_filme`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbemprestimodevolucao`
--

LOCK TABLES `tbemprestimodevolucao` WRITE;
/*!40000 ALTER TABLE `tbemprestimodevolucao` DISABLE KEYS */;
INSERT INTO `tbemprestimodevolucao` VALUES (1,1,'2023-10-20','2023-10-27','2023-10-27',0.00),(1,2,'2023-10-15','2023-10-22','2023-10-22',0.00),(1,2,'2023-10-23','2023-10-30','2023-10-31',2.00),(1,3,'2023-10-20','2023-10-27','2023-10-29',5.00),(2,1,'2023-10-21','2023-10-28','2023-10-28',0.00),(2,2,'2023-10-21','2023-10-28','2023-10-28',0.00),(2,3,'2023-10-19','2023-10-26','2023-10-26',0.00),(3,1,'2023-10-18','2023-10-25','2023-10-25',0.00),(3,2,'2023-10-22','2023-10-29','2023-10-30',3.50),(3,3,'2023-10-22','2023-10-29','2023-10-29',0.00);
/*!40000 ALTER TABLE `tbemprestimodevolucao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbfilme`
--

DROP TABLE IF EXISTS `tbfilme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbfilme` (
  `codigo_filme` int(11) NOT NULL,
  `codigo_titulo` int(11) DEFAULT NULL,
  `nome_distribuidor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo_filme`),
  KEY `fk_tbFilme_tbTitulo` (`codigo_titulo`),
  CONSTRAINT `fk_tbFilme_tbTitulo` FOREIGN KEY (`codigo_titulo`) REFERENCES `tbtitulo` (`codigo_titulo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbfilme`
--

LOCK TABLES `tbfilme` WRITE;
/*!40000 ALTER TABLE `tbfilme` DISABLE KEYS */;
INSERT INTO `tbfilme` VALUES (1,1,'Warner Bros'),(2,2,'Sony Pictures'),(3,3,'Paramount Pictures');
/*!40000 ALTER TABLE `tbfilme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbtitulo`
--

DROP TABLE IF EXISTS `tbtitulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbtitulo` (
  `codigo_titulo` int(11) NOT NULL,
  `nome_titulo` varchar(50) NOT NULL,
  `ano` decimal(4,0) DEFAULT NULL,
  `codigo_categoria` int(11) DEFAULT NULL,
  `codigo_classe` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_titulo`),
  KEY `fk_tbTitulo_tbCategoria` (`codigo_categoria`),
  KEY `fk_tbTitulo_tbClasse` (`codigo_classe`),
  CONSTRAINT `fk_tbTitulo_tbCategoria` FOREIGN KEY (`codigo_categoria`) REFERENCES `tbcategoria` (`codigo_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tbTitulo_tbClasse` FOREIGN KEY (`codigo_classe`) REFERENCES `tbclasse` (`codigo_classe`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbtitulo`
--

LOCK TABLES `tbtitulo` WRITE;
/*!40000 ALTER TABLE `tbtitulo` DISABLE KEYS */;
INSERT INTO `tbtitulo` VALUES (1,'Os Vingadores',2012,1,1),(2,'Coringa',2019,3,2),(3,'A Origem',2010,3,1);
/*!40000 ALTER TABLE `tbtitulo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-26 19:31:17
