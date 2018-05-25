CREATE DATABASE  IF NOT EXISTS `uadv_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `uadv_db`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: uadv_db
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `idadmin` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(60) NOT NULL,
  `password` varchar(3000) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `airlines`
--

DROP TABLE IF EXISTS `airlines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `airlines` (
  `idairlines` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `airlines` varchar(120) NOT NULL,
  `course` varchar(500) NOT NULL,
  `price` varchar(40) NOT NULL,
  `date` varchar(60) NOT NULL,
  `p` varchar(3000) NOT NULL,
  PRIMARY KEY (`idairlines`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `airlines`
--

LOCK TABLES `airlines` WRITE;
/*!40000 ALTER TABLE `airlines` DISABLE KEYS */;
/*!40000 ALTER TABLE `airlines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `idpartners` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `h1` varchar(60) NOT NULL,
  `p` varchar(3000) NOT NULL,
  `logoalt` varchar(100) NOT NULL,
  `logosrc` varchar(2048) NOT NULL,
  PRIMARY KEY (`idpartners`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pdf`
--

DROP TABLE IF EXISTS `pdf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pdf` (
  `idpdf` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(2048) NOT NULL,
  `h1` varchar(60) NOT NULL,
  `p` varchar(3000) NOT NULL,
  PRIMARY KEY (`idpdf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pdf`
--

LOCK TABLES `pdf` WRITE;
/*!40000 ALTER TABLE `pdf` DISABLE KEYS */;
/*!40000 ALTER TABLE `pdf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `picbox`
--

DROP TABLE IF EXISTS `picbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `picbox` (
  `idpic` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `h1` varchar(60) NOT NULL,
  `imgalt` varchar(100) NOT NULL,
  `imgsrc` varchar(2048) NOT NULL,
  PRIMARY KEY (`idpic`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `picbox`
--

LOCK TABLES `picbox` WRITE;
/*!40000 ALTER TABLE `picbox` DISABLE KEYS */;
INSERT INTO `picbox` VALUES (2,'Paris','Photographie de Paris','image/paris.jpg'),(3,'Londres','Photographie de Londres','image/londres.jpg'),(4,'l\'Italie','Paysage Italien','image/italy.jpg');
/*!40000 ALTER TABLE `picbox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `idpost` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(120) NOT NULL,
  `title` varchar(110) NOT NULL,
  `category` varchar(120) NOT NULL,
  `h1` varchar(60) NOT NULL,
  `p` varchar(3000) NOT NULL,
  `imgalt` varchar(100) NOT NULL,
  `imgsrc` varchar(2048) NOT NULL,
  `url` varchar(2048) NOT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (6,'wineoclock','Wine O&rsquo;Clock','restaurant','Wine O&rsquo;Clock','Wine O&rsquo;Clock, restaurant sp&eacute;cialis&eacute; dans les petites portions, consid&eacute;r&eacute; comme l&rsquo;un des meilleurs de la ville. \r\nQuand partir : Le printemps et l&rsquo;automne sont les meilleurs saisons, car il y a les meilleurs festivals. Les hivers sont froids mais l&rsquo;ambiance de Noel est festive. \r\nComment y aller : En avion. kjfj hdhgdhhdcbh dsjbdsjhuezhfj ccsjhjzncks jcjduerhgjk fdnbjhsdf csfjhzgfzj bhbjhbkjn sdjhsuidf dhd jqhd csjhcbjq sbfsfgufhbcqjkh (Air France ; Czech Airlines ; EasyJet ; Smartwings ; Vueling) Comptez env. 1\r\n                  h 45 pour un vol direct depuis Paris pour l&rsquo;a&eacute;roport V&aacute;clav-Havel, dans le centre-ville de Prague. En train. (Thalys ; SNCF) Depuis.','photo du Wine O&rsquo;Clock,','image/hotel5.jpg','http://www.WineOClock.com'),(7,'wi','te','Hotel','lorem ipsum','Wine O&rsquo;Clock, restaurant sp&eacute;cialis&eacute; dans les petites portions, consid&eacute;r&eacute; comme l&rsquo;un des meilleurs de la ville. Quand partir : Le printemps et l&rsquo;automne sont les meilleurs saisons, car il y a les meilleurs festivals. Les hivers sont froids mais l&rsquo;ambiance de Noel est festive. Comment y aller : En avion. kjfj hdhgdhhdcbh dsjbdsjhuezhfj ccsjhjzncks jcjduerhgjk fdnbjhsdf csfjhzgfzj bhbjhbkjn sdjhsuidf dhd jqhd csjhcbjq sbfsfgufhbcqjkh (Air France ; Czech Airlines ; EasyJet ; Smartwings ; Vueling) Comptez env. 1 h 45 pour un vol direct depuis Paris pour l&rsquo;a&eacute;roport V&aacute;clav-Havel, dans le centre-ville de Prague. En train. (Thalys ; SNCF) Depuis.','tes','image/hotel5.jpg','gefr'),(8,'kitte','kiiiiit','SPAs et Thalassos','lorem','Wine O&rsquo;Clock, restaurant sp&eacute;cialis&eacute; dans les petites portions, consid&eacute;r&eacute; comme l&rsquo;un des meilleurs de la ville. Quand partir : Le printemps et l&rsquo;automne sont les meilleurs saisons, car il y a les meilleurs festivals. Les hivers sont froids mais l&rsquo;ambiance de Noel est festive. Comment y aller : En avion. kjfj hdhgdhhdcbh dsjbdsjhuezhfj ccsjhjzncks jcjduerhgjk fdnbjhsdf csfjhzgfzj bhbjhbkjn sdjhsuidf dhd jqhd csjhcbjq sbfsfgufhbcqjkh (Air France ; Czech Airlines ; EasyJet ; Smartwings ; Vueling) Comptez env. 1 h 45 pour un vol direct depuis Paris pour l&rsquo;a&eacute;roport V&aacute;clav-Havel, dans le centre-ville de Prague. En train. (Thalys ; SNCF) Depuis.','ervrerga','image/hotel5.jpg','tgz');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top`
--

DROP TABLE IF EXISTS `top`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `top` (
  `idtop` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(120) DEFAULT NULL,
  `top` int(10) unsigned DEFAULT NULL,
  `idpost` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idtop`),
  KEY `idMembers_idx` (`idpost`),
  CONSTRAINT `idpost` FOREIGN KEY (`idpost`) REFERENCES `post` (`idpost`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top`
--

LOCK TABLES `top` WRITE;
/*!40000 ALTER TABLE `top` DISABLE KEYS */;
INSERT INTO `top` VALUES (11,'Restaurants',1,6),(12,'Restaurants',2,6),(13,'Restaurants',3,6),(14,'Hotel',1,7),(15,'Hotel',2,7),(16,'Hotel',3,7),(17,'SPAs et Thalassos',1,8),(18,'SPAs et Thalassos',2,8),(19,'SPAs et Thalassos',3,8),(20,'Hotel',4,6),(21,'Restaurants',4,6),(22,'SPAs et Thalassos',4,7);
/*!40000 ALTER TABLE `top` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `twitter`
--

DROP TABLE IF EXISTS `twitter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `twitter` (
  `idtwitter` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(120) NOT NULL,
  `logoalt` varchar(100) NOT NULL,
  `logosrc` varchar(2048) NOT NULL,
  PRIMARY KEY (`idtwitter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `twitter`
--

LOCK TABLES `twitter` WRITE;
/*!40000 ALTER TABLE `twitter` DISABLE KEYS */;
/*!40000 ALTER TABLE `twitter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'uadv_db'
--

--
-- Dumping routines for database 'uadv_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-25  7:29:40
