-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: perfect_site
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `bat`
--

DROP TABLE IF EXISTS `bat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bat` (
  `bat_id` int(4) NOT NULL AUTO_INCREMENT,
  `bat_src` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bat_title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bat_desc` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`bat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bat`
--

LOCK TABLES `bat` WRITE;
/*!40000 ALTER TABLE `bat` DISABLE KEYS */;
INSERT INTO `bat` VALUES (3,'https://images.unsplash.com/photo-1492634066426-0cc6c9db9632?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fabb8afd456fe2b4e909906d7a56e6f3&auto=format&fit=crop&w=500&q=60','ouiiiiiii','woow le design'),(4,'https://images.unsplash.com/photo-1509070016581-915335454d19?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e1315ac6ca5cc07e38a83dbacef90dce&auto=format&fit=crop&w=1050&q=80','feuille','belle feuille rouge #enjoy !'),(5,'assets/imgs/box/box2.jpg','',''),(6,'assets/imgs/box/box3.jpg','',''),(7,'assets/imgs/box/box4.jpg','','');
/*!40000 ALTER TABLE `bat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fp`
--

DROP TABLE IF EXISTS `fp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fp` (
  `fp_id` int(100) NOT NULL AUTO_INCREMENT,
  `fp_title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fp_subtitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fp_src` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fp_text` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fp_sign` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fp_logo` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fp_select` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`fp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fp`
--

LOCK TABLES `fp` WRITE;
/*!40000 ALTER TABLE `fp` DISABLE KEYS */;
INSERT INTO `fp` VALUES (1,'knqkshcj','lnsknf','https://images.unsplash.com/photo-1496185106368-308ed96f204b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=311179da8759eec710bf17f4d795c95b&auto=format&fit=crop&w=1394&q=80','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','restaurant','','fp');
/*!40000 ALTER TABLE `fp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top`
--

DROP TABLE IF EXISTS `top`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `top` (
  `top_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `top_class` int(3) NOT NULL,
  `top_title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_city` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_select` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`top_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top`
--

LOCK TABLES `top` WRITE;
/*!40000 ALTER TABLE `top` DISABLE KEYS */;
INSERT INTO `top` VALUES (1,99,'djblk','paris','hotel'),(4,10,'chez mamie louloutte','bondy','Restaurant'),(5,1,'ok','kbjkb','spa'),(7,100,'hotel du perou','peru','hotel'),(8,20,'asian touch','pekin','spa'),(9,4,'clskcksls','csomclmsck','Restaurant');
/*!40000 ALTER TABLE `top` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-24 20:00:00
