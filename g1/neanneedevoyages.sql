-- MySQL dump 10.13  Distrib 5.7.21, for osx10.13 (x86_64)
--
-- Host: localhost    Database: neanneedevoyages
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
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `id` int(10) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) DEFAULT NULL,
  `content` text,
  `img_src` varchar(2048) DEFAULT NULL,
  `img_alt` varchar(70) DEFAULT NULL,
  `article_number` varchar(15) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `slug` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Préparer son voyage à Oman : comment s\'y prendre ? Tout...','La préparation d’un voyage est rarement une mince affaire. C’est d’ailleurs, je trouve un poil angoissant et, à contrario, très excitant. C’est peut-être même la partie que je préfère.','../src/img/articles/article_oman.jpg','Oman','article02','Un voyage inoubliable',NULL),(2,'À la découverte de La Valette, capitale de Malte.','Comme on en parlait dans notre dernier article sur Malte, Manue et moi avons passé environ 1 semaine à Malte.Histoire de se détendre sous le soleil méditerranéen, de prendre du bon temps, mais aussi de découvrir une île dont on ne connaissait que le nom.','../src/img/articles/article_laValette.jpg','La Valette','article03','Malte mon amour',NULL),(3,'San Fransisco en 3 jours : le guide ultime','Depuis quelques temps, on reçoit pas mal de messages et questions concernant San Francisco. Puisque nous l\'avons visité à 2 reprises, on commence à la connaître (un peu).','../src/img/articles/article_sf.jpg','San Fransisco','article01','USA road trip',NULL),(4,'Cascais : soleil et plage du côté de Lisbonne','Ca fait quelques articles que l\'on ne fait que dire du bien de Lisbonne, l\'une des plus belles villes que nous avons eu la chance de visiter. Mais il n\'y a pas que Lisbonne dans la vie, il y a aussi ses alentours. Alors on a eu envie de sortir un peu de la ville et profiter du beau temps pour nous offrir une journée à la plage et un peu de farniente.On a donc tout naturellement été à Cascais, un ville à moins d\'une heure de la capitale portugaise. On s\'est détendu, on a bronzé, mais pas seulement, puisque nous nous sommes rendus au célèbre Boca do Inferno (bouche de l\'enfer)...Ce jour là, on avait repéré qu\'il allait faire particulièrement beau. Alors on a décidé de se la jouer vraiment vacances en sortant un peu de Lisbonne, et en allant à la mer, avec tous les clichés que ca comprend. Plage, glaces, bronzette et crème solaire.','../src/img/articles/article_cascais.jpg','Cascais','article04','Cascais c\'est trop génial !!',NULL);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(120) NOT NULL,
  `title` varchar(110) NOT NULL,
  `h1` varchar(60) NOT NULL,
  `p` varchar(3000) NOT NULL,
  `span-class` varchar(50) NOT NULL,
  `span-text` varchar(100) NOT NULL,
  `img-alt` varchar(100) NOT NULL,
  `img-src` varchar(2048) NOT NULL,
  `nav-title` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'slug','title','h1','p','span-class','span-text','img-alt','img-src','nav-title'),(3,'tokyo','tokyo','tokyo','edfghj','dfghjk','fghj','ghj','cvbj','fghj');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top_detente`
--

DROP TABLE IF EXISTS `top_detente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `top_detente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(30) DEFAULT NULL,
  `img_src` varchar(2048) DEFAULT NULL,
  `img_alt` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top_detente`
--

LOCK TABLES `top_detente` WRITE;
/*!40000 ALTER TABLE `top_detente` DISABLE KEYS */;
INSERT INTO `top_detente` VALUES (1,'Dubrovnik','../src/img/Tops/Spa/s1.jpg','Spa Dubrovnik'),(2,'Evora','../src/img/Tops/Spa/s2.jpg','spa evora'),(3,'Florence','../src/img/Tops/Spa/s3.jpg','spa florence'),(4,'Genève','../src/img/Tops/Spa/s4.jpg','spa geneve'),(5,'Grenade','../src/img/Tops/Spa/s5.jpg','spa grenade'),(6,'Hanoï','../src/img/Tops/Spa/s6.jpg','spa hanoi'),(7,'La Havane','../src/img/Tops/Spa/s7.jpg','spa havana'),(8,'Helsinki','../src/img/Tops/Spa/s8.jpg','spa helsinki'),(9,'Honolulu','../src/img/Tops/Spa/s9.jpg','spa honolulu'),(10,'Istanbul','../src/img/Tops/Spa/s10.jpg','spa instanbul'),(11,'Jakarta','../src/img/Tops/Spa/s11.jpg','spa jakarta'),(12,'Kaohsiung','../src/img/Tops/Spa/s12.jpg','spa kaohsiung'),(13,'Krakovie','../src/img/Tops/Spa/s13.jpg','spa krakau'),(14,'Kyoto','../src/img/Tops/Spa/s14.jpg','spa kyoto'),(15,'Lima','../src/img/Tops/Spa/s15.jpg','spa lima'),(16,'Lisbonne','../src/img/Tops/Spa/s16.jpg','spa lisboa');
/*!40000 ALTER TABLE `top_detente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top_hotels`
--

DROP TABLE IF EXISTS `top_hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `top_hotels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(30) DEFAULT NULL,
  `img_src` varchar(2048) DEFAULT NULL,
  `img_alt` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top_hotels`
--

LOCK TABLES `top_hotels` WRITE;
/*!40000 ALTER TABLE `top_hotels` DISABLE KEYS */;
INSERT INTO `top_hotels` VALUES (1,'Abu Dabhi','../src/img/Tops/Hotel/abudabhi.jpg','Hôtel Abu Dabhi'),(2,'Addis Ababa ','../src/img/Tops/Hotel/addisababa.jpg','Hôtel Addis Ababa'),(3,'Belgrade','../src/img/Tops/Hotel/belgrade.jpg','Hôtel Belgrade'),(4,'Belize City','../src/img/Tops/Hotel/belize.jpg','Hôtel Belize City'),(5,'Berlin','../src/img/Tops/Hotel/berlin.jpg','Hotel Berlin'),(6,'Bilbao','../src/img/Tops/Hotel/bilbao.jpg','Hotel Bilbao'),(7,'Bordeaux','../src/img/Tops/Hotel/bordeaux.jpg','Hotel Bordeaux'),(8,'Bucharest','../src/img/Tops/Hotel/bucharest.jpg','Hotel Bucarest'),(9,'Le Caire','../src/img/Tops/Hotel/cairo.jpg','Hotel Cairo'),(10,'Cap Town','../src/img/Tops/Hotel/capeTown.jpg','Hotel Cape Town'),(11,'Cardiff','../src/img/Tops/Hotel/cardiff.jpg','Hotel Cardiff'),(12,'Charleston','../src/img/Tops/Hotel/charleston.jpg','Hotel Charleston');
/*!40000 ALTER TABLE `top_hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top_resto`
--

DROP TABLE IF EXISTS `top_resto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `top_resto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(20) NOT NULL,
  `img_src` varchar(2048) NOT NULL,
  `img_alt` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top_resto`
--

LOCK TABLES `top_resto` WRITE;
/*!40000 ALTER TABLE `top_resto` DISABLE KEYS */;
INSERT INTO `top_resto` VALUES (1,'Abu Dhabi','../src/img/Tops/Resto/abudabhi.jpg','Abu Dhabi'),(2,'Agra','../src/img/Tops/Resto/agra.jpg','Agra'),(3,'Amsterdam','../src/img/Tops/Resto/amsterdam.jpg','Amsterdam'),(4,'Ankara','../src/img/Tops/Resto/ankara.jpg','Ankara'),(5,'Antigua','../src/img/Tops/Resto/antigua.jpg','Antigua'),(6,'Athens','../src/img/Tops/Resto/athens.jpg','Athens'),(7,'Avignon','../src/img/Tops/Resto/avignon.jpg','Avignon'),(8,'Bangkok','../src/img/Tops/Resto/bangkok.jpg','Bangkok'),(9,'Barcelona','../src/img/Tops/Resto/barcelona.jpg','Barcelona'),(10,'Beijing','../src/img/Tops/Resto/beijing.jpg','Beijing'),(11,'Beirut','../src/img/Tops/Resto/beirut.jpg','Beirut'),(12,'Chicago','../src/img/Tops/Resto/chicago.jpg','Chicago'),(13,'Colombo','../src/img/Tops/Resto/colombo.jpg','Colombo'),(14,'Copenhagen','../src/img/Tops/Resto/copenhagen.jpg','Copenhagen'),(15,'Dakar','../src/img/Tops/Resto/dakar.jpg','Dakar'),(16,'Delhi','../src/img/Tops/Resto/dehli.jpg','Delhi');
/*!40000 ALTER TABLE `top_resto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-25  3:35:21
