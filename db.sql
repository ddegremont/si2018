-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: localhost    Database: perfect_website
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
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factsheets`
--

DROP TABLE IF EXISTS `factsheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factsheets` (
  `title` varchar(64) NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  `imgAlt` varchar(64) NOT NULL,
  `paragraph` text NOT NULL,
  `category` varchar(64) NOT NULL,
  `websiteUrl` varchar(255) NOT NULL,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factsheets`
--

LOCK TABLES `factsheets` WRITE;
/*!40000 ALTER TABLE `factsheets` DISABLE KEYS */;
/*!40000 ALTER TABLE `factsheets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagebox`
--

DROP TABLE IF EXISTS `imagebox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagebox` (
  `title` varchar(64) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  `imgAlt` varchar(64) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagebox`
--

LOCK TABLES `imagebox` WRITE;
/*!40000 ALTER TABLE `imagebox` DISABLE KEYS */;
INSERT INTO `imagebox` VALUES ('title 1','subtitle 1','tmp1.jpg','alt 1',1,'cat1'),('title 2','subtitle 2','tmp1.jpg','alt 2',2,'cat2'),('title 3','subtitle 3','tmp1.jpg','alt 3',3,'cat3'),('title 4','subtitle 4','tmp1.jpg','alt 4',4,'cat4'),('title 5','subtitle 5','tmp1.jpg','alt 5',5,'cat3'),('title 6','subtitle 6','tmp1.jpg','alt 6',6,'cat4'),('title 7','subtitle 7','tmp1.jpg','alt 7',7,'cat1'),('title 8','subtitle 8','tmp1.jpg','alt 8',8,'cat2');
/*!40000 ALTER TABLE `imagebox` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `title` varchar(64) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  `imgAlt` varchar(64) NOT NULL,
  `paragraph` text NOT NULL,
  `signature` varchar(255) NOT NULL,
  `logoSrc` varchar(255) NOT NULL,
  `logoAlt` varchar(64) NOT NULL,
  `company` varchar(64) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES ('title 6','subtitle 6','tmp1.jpg','imgalt 6','paragraphe 6','signature 6','tmp1.jpg','logoalt 6','company 2',6),('title 5','subtitle 5','tmp1.jpg','imgalt 5','paragraphe 5','signature 5','tmp1.jpg','logoalt 5','company 1',7),('title 1','subtitle 1','tmp1.jpg','imgalt 1','paragraphe 1','signature 1','tmp1.jpg','logoalt 1','company 2',8),('title 2','subtitle 2','tmp1.jpg','imgalt 2','paragraphe 2','signature 2','tmp1.jpg','logoalt 2','company 2',9),('title 3','subtitle 3','tmp1.jpg','imgalt 3','paragraphe 3','signature 3','tmp1.jpg','logoalt 3','company 3',10),('title 4','subtitle 4','tmp1.jpg','imgalt 4','paragraphe 4','signature 4','tmp1.jpg','logoalt 4','company 2',11),('title 5','subtitle 5','tmp1.jpg','imgalt 5','paragraphe 5','signature 5','tmp1.jpg','logoalt 5','company 1',12),('title 7','subtitle 7','tmp1.jpg','imgalt 7','paragraphe 7','signature 7','tmp1.jpg','logoalt 7','company 2',13);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `name` varchar(64) NOT NULL,
  `logoSrc` varchar(255) NOT NULL,
  `logoAlt` varchar(64) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top`
--

DROP TABLE IF EXISTS `top`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `top` (
  `title` varchar(64) NOT NULL,
  `subtitle` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `rank` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30120 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top`
--

LOCK TABLES `top` WRITE;
/*!40000 ALTER TABLE `top` DISABLE KEYS */;
INSERT INTO `top` VALUES ('ut','Enim reiciendis voluptate libero.','restaurants',99,1),('aperiam','Sit vel sequi.','restaurants',29,2),('necessitatibus','Aut voluptas.','restaurants',51,3),('recusandae','Magni voluptatem placeat omnis.','restaurants',117,4),('labore','Quo sed sit nam.','restaurants',88,5),('est','Ex deserunt est consequatur.','restaurants',59,6),('quod','Ad architecto corporis.','restaurants',83,7),('rerum','Magnam nostrum et laborum odio.','restaurants',6,8),('placeat','Sit autem culpa minima.','restaurants',42,9),('nesciunt','Voluptatem autem labore sed.','restaurants',20,10),('in','Hic sint ab.','restaurants',31,11),('ut','Ducimus aut non vero.','restaurants',3,12),('quas','Consequatur dolorem laudantium cumque possimus.','restaurants',52,13),('consequuntur','Rem deleniti consequatur.','restaurants',43,14),('consequuntur','Ex fuga fugiat.','restaurants',70,15),('excepturi','Dolore eligendi soluta.','restaurants',0,16),('explicabo','Provident ut rerum.','restaurants',84,17),('sed','Quisquam modi ut perferendis ex.','restaurants',11,18),('labore','Quae ex.','restaurants',113,19),('sed','Similique doloremque dolorem autem.','restaurants',14,20),('dignissimos','Consequatur et ullam.','restaurants',81,21),('et','Sed quia quia dolor.','restaurants',76,22),('esse','Error ut ipsum beatae doloremque.','restaurants',92,23),('odio','Aut est.','restaurants',25,24),('perferendis','Et sint molestiae tempora.','restaurants',72,25),('sapiente','Rem voluptatem.','restaurants',106,26),('illum','Excepturi a repellendus mollitia.','restaurants',45,27),('eos','Quis qui dignissimos.','restaurants',68,28),('architecto','Aperiam molestiae atque quia.','restaurants',37,29),('dolor','Harum quis id.','restaurants',35,30),('fugiat','Sed corporis at.','restaurants',34,31),('consequuntur','Voluptatem reprehenderit suscipit.','restaurants',74,32),('voluptatem','Maxime voluptatem perferendis.','restaurants',109,33),('ea','Asperiores beatae animi praesentium rerum.','restaurants',17,34),('et','Culpa voluptas numquam.','restaurants',15,35),('et','Aut veniam commodi omnis.','restaurants',24,36),('exercitationem','Harum delectus eaque amet.','restaurants',57,37),('dolor','Id et est.','restaurants',41,38),('similique','Fugiat et ut.','restaurants',114,39),('unde','Cum debitis placeat tempora.','restaurants',44,40),('culpa','Illo omnis vitae blanditiis eaque.','restaurants',10,41),('asperiores','Et voluptatibus maiores ea.','restaurants',95,42),('porro','Sapiente dolores ut.','restaurants',36,43),('adipisci','Voluptate beatae.','restaurants',46,44),('et','Officiis ut.','restaurants',69,45),('consectetur','Quia quia saepe aperiam omnis.','restaurants',86,46),('aut','Qui consequatur optio.','restaurants',50,47),('dicta','Quisquam est doloribus.','restaurants',47,48),('molestias','Magni veniam.','restaurants',4,49),('vitae','Laboriosam qui laboriosam quis.','restaurants',105,50),('et','Dolore est quos.','restaurants',40,51),('illum','Voluptatibus molestiae quasi.','restaurants',32,52),('quae','Blanditiis facilis voluptatem.','restaurants',38,53),('odio','Consequatur maxime blanditiis ut.','restaurants',66,54),('amet','Dicta deserunt maiores minima.','restaurants',96,55),('itaque','Vel eaque magni.','restaurants',78,56),('id','Quam voluptas nulla sint.','restaurants',5,57),('id','Cumque assumenda aperiam eum modi.','restaurants',26,58),('sit','Soluta velit fugit aperiam.','restaurants',87,59),('velit','Aperiam eos in.','restaurants',62,60),('voluptatem','Fugit mollitia alias.','restaurants',19,61),('et','Quas dolor error et.','restaurants',54,62),('quasi','Eos ratione corporis voluptas.','restaurants',93,63),('saepe','Ex ipsa minus est.','restaurants',107,64),('aliquam','Ut eaque aut.','restaurants',120,65),('voluptatem','Voluptatum sit eos.','restaurants',98,66),('dicta','Non voluptatem.','restaurants',77,67),('et','Non alias eveniet magni.','restaurants',91,68),('iusto','Enim rerum quasi deserunt.','restaurants',53,69),('eveniet','Et velit et.','restaurants',30,70),('perspiciatis','Repellat dolor rem.','restaurants',119,71),('saepe','Iste aut aperiam adipisci.','restaurants',60,72),('repellat','Nisi earum voluptatem error.','restaurants',73,73),('voluptatem','Maxime odit laudantium eveniet saepe.','restaurants',22,74),('vero','Nam maiores laudantium.','restaurants',55,75),('illo','Occaecati suscipit molestiae distinctio.','restaurants',27,76),('in','Minus sequi illo.','restaurants',9,77),('ducimus','Voluptatem corrupti nemo quia est.','restaurants',28,78),('esse','Culpa magnam veritatis excepturi.','restaurants',63,79),('officiis','Officia iste porro.','restaurants',90,80),('temporibus','Reiciendis vitae fugiat.','restaurants',97,81),('aspernatur','Assumenda sunt repellat ipsum.','restaurants',65,82),('voluptatem','Culpa optio id debitis.','restaurants',71,83),('id','Voluptas doloribus molestias aut.','restaurants',100,84),('veniam','Consequatur soluta ullam provident.','restaurants',67,85),('sed','Excepturi omnis velit fuga.','restaurants',79,86),('nam','Incidunt reiciendis et.','restaurants',7,87),('quis','Veniam sed sit.','restaurants',85,88),('tenetur','Perferendis doloremque aut.','restaurants',102,89),('dignissimos','Sapiente voluptatem dolore.','restaurants',82,90),('ipsum','Inventore ut voluptates.','restaurants',21,91),('nostrum','Et dicta.','restaurants',101,92),('amet','Et a omnis et.','restaurants',115,93),('est','Voluptates ipsa earum.','restaurants',116,94),('nihil','Id consectetur qui.','restaurants',8,95),('sed','Repudiandae adipisci facere maxime.','restaurants',94,96),('amet','Nulla incidunt eius aut.','restaurants',16,97),('cumque','Recusandae dolorum est.','restaurants',108,98),('eius','Dolores et doloribus.','restaurants',61,99),('dolorem','Nesciunt laborum quos et.','restaurants',39,100),('unde','Facilis autem dolor nihil.','restaurants',58,101),('modi','Ea aspernatur et assumenda.','restaurants',103,102),('dicta','Ratione ut quia.','restaurants',1,103),('dolorum','Soluta magni porro.','restaurants',56,104),('a','Rerum consequuntur eligendi quia.','restaurants',64,105),('molestiae','Officia deserunt cupiditate voluptas harum.','restaurants',89,106),('et','Quam harum non dignissimos.','restaurants',12,107),('repellat','Autem et rerum dolorem.','restaurants',112,108),('odio','Harum mollitia omnis qui repudiandae.','restaurants',18,109),('est','Et rem sint.','restaurants',33,110),('a','Assumenda illum sit.','restaurants',48,111),('quis','Architecto deleniti autem molestias.','restaurants',118,112),('ipsa','Nihil sunt mollitia suscipit.','restaurants',23,113),('omnis','Esse magni tenetur.','restaurants',49,114),('natus','Sequi amet molestias cupiditate.','restaurants',2,115),('aut','Et excepturi.','restaurants',110,116),('ut','Dolores consequatur aut aut vel.','restaurants',80,117),('necessitatibus','Voluptatem itaque.','restaurants',111,118),('unde','Natus ut veritatis.','restaurants',13,119),('in','Doloremque aut et.','restaurants',104,120),('neque','Libero ex.','hostels',44,121),('reprehenderit','Autem laborum vel.','spas',34,201),('ad','Qui cum esse qui.','spas',118,202),('quis','Quidem sunt.','spas',106,203),('consequuntur','Id eos animi esse.','spas',71,204),('ut','Aut inventore dicta.','spas',114,205),('qui','Delectus quidem.','spas',102,206),('libero','Rerum molestiae eaque.','spas',119,207),('iure','Laboriosam asperiores ab labore.','spas',72,208),('velit','Iusto quisquam et.','spas',5,209),('voluptatem','Nostrum debitis eum sunt.','hostels',114,301),('nemo','Et ut blanditiis.','hostels',120,302),('reiciendis','Aut ea est atque.','hostels',66,303),('reiciendis','Quaerat rerum mollitia accusamus.','hostels',0,304),('dolores','Dignissimos neque odio.','hostels',10,305),('rerum','Nihil blanditiis in.','hostels',51,306),('quia','Molestias velit temporibus.','hostels',56,307),('aut','Id libero natus quia.','hostels',80,308),('illo','Necessitatibus repellat omnis.','hostels',79,309),('iste','Sit tenetur maxime non.','spas',25,2010),('sint','Quidem qui et.','spas',65,2011),('pariatur','Consequuntur consectetur perspiciatis aliquam.','spas',47,2012),('debitis','Est sint tempora et.','spas',18,2013),('eaque','Laboriosam incidunt est quam.','spas',98,2014),('facilis','Perspiciatis sunt quas quis.','spas',112,2015),('aut','Molestiae nemo dolor facere unde.','spas',50,2016),('voluptatem','Et debitis quos.','spas',32,2017),('et','Sed molestiae omnis.','spas',37,2018),('quo','Rerum nemo aut.','spas',36,2019),('quo','Sint ea possimus qui.','spas',41,2020),('in','Temporibus soluta quibusdam.','spas',53,2021),('voluptas','Temporibus officiis consequuntur.','spas',110,2022),('voluptatem','Laboriosam eos dignissimos.','spas',31,2023),('et','Ex quae expedita.','spas',24,2024),('culpa','Aut tempore.','spas',90,2025),('deserunt','Mollitia deserunt nemo neque.','spas',94,2026),('tempora','Quis veniam.','spas',42,2027),('et','Fugit nemo.','spas',61,2028),('quidem','Nihil sapiente doloribus.','spas',67,2029),('eum','Odio qui quidem eum.','spas',81,2030),('minima','Atque vitae laborum.','spas',48,2031),('rerum','Eos facere aut amet laborum.','spas',68,2032),('necessitatibus','Quisquam dolorem.','spas',57,2033),('a','Est saepe laudantium maiores.','spas',75,2034),('ducimus','Quidem asperiores distinctio quis.','spas',13,2035),('beatae','Omnis blanditiis fugit veniam.','spas',59,2036),('non','Odio sed eos illo.','spas',69,2037),('omnis','Id in natus eligendi suscipit.','spas',92,2038),('quis','Hic ullam minima labore corporis.','spas',19,2039),('et','Ullam doloribus placeat.','spas',43,2040),('commodi','Sint distinctio et magni.','spas',117,2041),('molestiae','Labore aut dolorem illo.','spas',62,2042),('sequi','Veritatis dolorem similique.','spas',64,2043),('qui','Aut et dolorem mollitia.','spas',73,2044),('facere','Saepe ea non.','spas',120,2045),('iure','Eos voluptatem quo.','spas',12,2046),('magni','Aliquid minima nobis ut.','spas',46,2047),('dolores','Et et ut.','spas',14,2048),('fugiat','Dolores possimus sit dolor quisquam.','spas',103,2049),('id','Porro doloremque voluptatibus sunt.','spas',51,2050),('beatae','Maxime cupiditate reprehenderit nostrum.','spas',2,2051),('voluptates','Asperiores occaecati consequatur similique.','spas',83,2052),('eaque','Sapiente rerum.','spas',87,2053),('eum','Voluptas fugit quibusdam accusamus quia.','spas',27,2054),('incidunt','Qui enim quidem aliquid.','spas',115,2055),('ab','Voluptatem recusandae velit.','spas',74,2056),('commodi','Asperiores inventore qui delectus.','spas',108,2057),('quibusdam','Voluptas fuga nisi.','spas',21,2058),('quod','Quis doloremque nemo nemo.','spas',39,2059),('reiciendis','Eum neque sequi.','spas',55,2060),('esse','Pariatur voluptatem delectus.','spas',22,2061),('cum','Harum amet nihil repudiandae qui.','spas',58,2062),('beatae','Et enim accusamus ea.','spas',99,2063),('tempora','Veniam fuga deleniti.','spas',16,2064),('blanditiis','Numquam vero et voluptatum.','spas',40,2065),('delectus','Magnam sit laboriosam.','spas',80,2066),('ut','Quibusdam magnam hic quasi.','spas',45,2067),('voluptate','Modi ipsum repudiandae ex.','spas',20,2068),('commodi','Harum laborum nihil suscipit et.','spas',78,2069),('non','Ut qui non ad.','spas',44,2070),('at','Labore aut assumenda.','spas',23,2071),('dolorum','Distinctio et.','spas',111,2072),('necessitatibus','Molestiae corporis qui tempore.','spas',38,2073),('mollitia','Ipsum tempora quibusdam.','spas',4,2074),('vero','Dolorum aut rerum totam.','spas',96,2075),('quia','Quia adipisci consequuntur reiciendis.','spas',0,2076),('quo','Eum sequi voluptatem.','spas',11,2077),('corrupti','Rerum fuga et.','spas',52,2078),('nam','Optio itaque voluptatem iusto.','spas',70,2079),('cum','Error eveniet minus.','spas',84,2080),('nam','Omnis animi consequatur.','spas',77,2081),('est','Quia est modi doloribus.','spas',79,2082),('vitae','Quis nihil numquam necessitatibus unde.','spas',105,2083),('iusto','Veniam architecto consequatur.','spas',113,2084),('quisquam','Id et nulla est.','spas',56,2085),('ut','Perspiciatis ea officiis qui.','spas',101,2086),('commodi','Explicabo illum.','spas',63,2087),('et','Consequatur unde animi.','spas',7,2088),('praesentium','Incidunt qui quia.','spas',89,2089),('et','Architecto quo et autem consequatur.','spas',60,2090),('eligendi','Laborum id est.','spas',116,2091),('quo','Minus molestias voluptatem.','spas',88,2092),('et','Magni reprehenderit commodi recusandae.','spas',76,2093),('dignissimos','Doloribus eum doloremque.','spas',109,2094),('tempora','Placeat dignissimos iste corporis.','spas',100,2095),('at','Adipisci ea temporibus.','spas',10,2096),('fuga','Sunt ex.','spas',33,2097),('pariatur','Eum exercitationem quaerat.','spas',15,2098),('assumenda','Cumque qui tempore.','spas',66,2099),('facilis','Esse aut in aspernatur.','hostels',60,3010),('perferendis','Repellat quae qui.','hostels',119,3011),('dolor','Inventore est.','hostels',49,3012),('et','Atque voluptatem voluptatibus rem.','hostels',116,3013),('consequatur','Mollitia non qui omnis.','hostels',39,3014),('esse','Non perspiciatis autem.','hostels',85,3015),('et','Magnam dolores commodi necessitatibus.','hostels',57,3016),('et','Et eos et.','hostels',62,3017),('ullam','Soluta temporibus voluptates.','hostels',53,3018),('placeat','Possimus ducimus earum mollitia omnis.','hostels',52,3019),('voluptatem','Magni similique doloremque.','hostels',29,3020),('ipsum','Qui eos neque facere.','hostels',68,3021),('repudiandae','Facere incidunt velit.','hostels',14,3022),('illo','Odit est impedit sunt.','hostels',45,3023),('consequatur','Aut occaecati voluptas.','hostels',43,3024),('aut','Quas et.','hostels',83,3025),('vitae','Ipsum dignissimos.','hostels',90,3026),('commodi','Modi libero quia numquam doloribus.','hostels',9,3027),('quis','Sed rerum ratione eveniet.','hostels',55,3028),('dolores','A dolorem in quae.','hostels',50,3029),('fugit','Doloremque repudiandae quis error.','hostels',33,3030),('placeat','Ratione harum.','hostels',86,3031),('minus','Beatae perspiciatis nihil.','hostels',69,3032),('soluta','Ea minima quod provident.','hostels',77,3033),('nesciunt','Facere nostrum repellendus unde.','hostels',11,3034),('porro','Sapiente fugit perferendis unde maxime.','hostels',70,3035),('recusandae','Illo quibusdam necessitatibus laudantium aliquam.','hostels',16,3036),('alias','Error numquam ipsum.','hostels',38,3037),('dolorum','Voluptatem et quaerat sit.','hostels',7,3038),('optio','Vero qui.','hostels',20,3039),('debitis','Magni ipsa consequatur.','hostels',63,3040),('aliquid','Esse aspernatur et eum.','hostels',54,3041),('molestiae','Et est molestiae.','hostels',6,3042),('officiis','Dolores autem dolore.','hostels',84,3043),('ut','Consequuntur temporibus non laboriosam.','hostels',65,3044),('laudantium','Repellat asperiores praesentium porro est.','hostels',3,3045),('iure','Omnis suscipit est esse.','hostels',67,3046),('quidem','Id qui.','hostels',4,3047),('neque','Eaque aut in ipsum omnis.','hostels',27,3048),('non','Repudiandae ratione sed.','hostels',111,3049),('blanditiis','Est alias fugit.','hostels',25,3050),('et','Maxime in quam.','hostels',104,3051),('explicabo','Ut doloribus enim cupiditate.','hostels',82,3052),('dolores','Omnis et voluptatem qui.','hostels',97,3053),('veniam','Alias quidem velit nesciunt et.','hostels',76,3054),('vero','Magnam nemo aliquam.','hostels',72,3055),('cupiditate','Sequi aperiam quis.','hostels',13,3056),('doloribus','Nisi eveniet dolor vel qui.','hostels',18,3057),('voluptate','Ut sint sit repellendus.','hostels',93,3058),('harum','Sequi sed.','hostels',75,3059),('culpa','Esse placeat minima.','hostels',40,3060),('dolorem','Delectus inventore similique ex.','hostels',30,3061),('sit','A et earum.','hostels',37,3062),('vero','Animi eum quasi labore.','hostels',78,3063),('quo','Ut blanditiis dicta aut.','hostels',12,3064),('quia','Reprehenderit molestias recusandae.','hostels',92,3065),('reiciendis','Neque autem debitis.','hostels',96,3066),('odio','Et eum omnis tempora ex.','hostels',22,3067),('natus','Maxime impedit sequi qui.','hostels',95,3068),('ut','Sint qui odio inventore sit.','hostels',21,3069),('officia','Quis molestiae expedita.','hostels',98,3070),('voluptates','Nisi ut saepe voluptas doloribus.','hostels',107,3071),('architecto','Quo laboriosam earum sed.','hostels',59,3072),('et','Inventore et quibusdam.','hostels',23,3073),('ut','Nisi dolorem.','hostels',41,3074),('magnam','In distinctio est cum.','hostels',117,3075),('velit','Voluptatum modi id dolore.','hostels',31,3076),('error','Ipsum quis quia illum.','hostels',71,3077),('illo','Quam sit.','hostels',5,3078),('modi','Eos fugiat.','hostels',64,3079),('consectetur','Amet et perspiciatis qui.','hostels',1,3080),('ea','Sit eius tenetur voluptas.','hostels',99,3081),('numquam','A officia provident saepe.','hostels',118,3082),('reprehenderit','Incidunt repudiandae.','hostels',112,3083),('debitis','Sunt sed optio.','hostels',17,3084),('odio','Assumenda ratione ullam maxime.','hostels',105,3085),('ipsa','Non aut assumenda recusandae.','hostels',74,3086),('laborum','Ullam suscipit quasi atque.','hostels',48,3087),('maxime','Nihil ex quibusdam mollitia provident.','hostels',101,3088),('accusamus','Doloribus itaque officia saepe.','hostels',89,3089),('nemo','Sunt aut voluptatem.','hostels',46,3090),('quasi','Dolorum qui consectetur aliquid.','hostels',103,3091),('pariatur','Aspernatur corrupti sit.','hostels',113,3092),('dolores','Voluptas consectetur voluptatem.','hostels',28,3093),('dolorum','Explicabo labore aliquam sit.','hostels',109,3094),('quaerat','Mollitia reiciendis ad quam.','hostels',24,3095),('praesentium','Vel reiciendis eaque atque.','hostels',47,3096),('laudantium','Architecto voluptatem eveniet ipsum.','hostels',100,3097),('earum','Incidunt voluptate animi corporis.','hostels',87,3098),('cum','Sit quia quia ipsam.','hostels',2,3099),('quis','Id nesciunt.','spas',6,20100),('ab','Pariatur ut.','spas',9,20101),('qui','Doloribus ut fugiat non.','spas',35,20102),('ut','Perspiciatis aut iusto est.','spas',107,20103),('ducimus','Quia qui molestias odio quibusdam.','spas',95,20104),('voluptatum','Voluptas dolorem aperiam praesentium minima.','spas',85,20105),('vero','Et qui et.','spas',93,20106),('molestiae','Et ut est labore.','spas',29,20107),('et','Sapiente et enim.','spas',97,20108),('nemo','Voluptate voluptas rem ut.','spas',86,20109),('sapiente','Omnis sed consequatur.','spas',91,20110),('eum','Animi dolor deserunt laudantium.','spas',49,20111),('voluptatem','Ipsum qui voluptas.','spas',3,20112),('porro','Iusto qui quia id.','spas',26,20113),('quibusdam','Voluptas eos.','spas',28,20114),('quam','Reiciendis sed saepe.','spas',8,20115),('voluptatibus','Soluta dolorem ut.','spas',1,20116),('similique','Et est iure.','spas',17,20117),('maiores','Itaque velit enim atque.','spas',104,20118),('qui','Iste nesciunt iusto facilis.','spas',54,20119),('similique','Delectus sint qui.','spas',30,20120),('voluptatem','Est voluptas veritatis.','hostels',32,30100),('rerum','Voluptatibus architecto ut.','hostels',110,30101),('nisi','Veritatis laborum repellendus occaecati.','hostels',102,30102),('libero','Quia et rerum quod.','hostels',34,30103),('laboriosam','Perferendis ea mollitia incidunt.','hostels',42,30104),('sequi','Soluta nihil delectus.','hostels',88,30105),('dignissimos','Molestias magni consequuntur.','hostels',115,30106),('nihil','Libero tempore delectus corporis.','hostels',73,30107),('neque','Quasi qui vel inventore.','hostels',36,30108),('illo','Consequatur doloribus ut.','hostels',81,30109),('qui','Odit quia quia et.','hostels',19,30110),('odio','Ex sit.','hostels',91,30111),('eius','Velit repellendus aut odit commodi.','hostels',58,30112),('maxime','Laudantium error ipsum commodi necessitatibus.','hostels',26,30113),('minus','Asperiores officia corporis tenetur.','hostels',35,30114),('eum','Vel quasi nobis.','hostels',15,30115),('quo','Quia placeat deleniti enim.','hostels',8,30116),('alias','Tempora incidunt error.','hostels',108,30117),('libero','Ut doloremque sit repellendus.','hostels',106,30118),('aut','Vitae consectetur et et.','hostels',94,30119);
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

-- Dump completed on 2018-05-23 17:56:30
