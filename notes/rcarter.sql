-- MySQL dump 10.13  Distrib 5.5.25, for Linux (x86_64)
--
-- Host: localhost    Database: rcarter
-- ------------------------------------------------------
-- Server version	5.5.25-log

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) DEFAULT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`user_id`),
  CONSTRAINT `id` FOREIGN KEY (`user_id`) REFERENCES `shoutbox` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'Love You Babalinda =)'),(2,2,'Love you Rubilindo :)'),(3,3,'Nothing'),(4,4,'Al matrimonio hay que cuidarlo como una plantita, porque sino, se marchita y muere..!'),(5,5,'Nothing'),(8,6,'Nothing'),(9,7,'Jeff, gracias por compartir estos anos conmigo, te amo.'),(10,8,'Nothing'),(11,9,'Marriage is the joining of two people Who share the promise That only marriage can make ... To share the sunshine and the shadows, And to experience a richer, more fulfilling life Because of it.'),(12,10,'Amo a mi familia, amo mi matrimonio. Amo mi vida de casada y d madre!'),(13,11,'el matrimonio es algo divertido y no hay que tenerle miedo a esa palabra.');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `value` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=243 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Afghanistan'),(2,'Aringland Islands'),(3,'Albania'),(4,'Algeria'),(5,'American Samoa'),(6,'Andorra'),(7,'Angola'),(8,'Anguilla'),(9,'Antarctica'),(10,'Antigua and Barbuda'),(11,'Argentina'),(12,'Armenia'),(13,'Aruba'),(14,'Australia'),(15,'Austria'),(16,'Azerbaijan'),(17,'Bahamas'),(18,'Bahrain'),(19,'Bangladesh'),(20,'Barbados'),(21,'Belarus'),(22,'Belgium'),(23,'Belize'),(24,'Benin'),(25,'Bermuda'),(26,'Bhutan'),(27,'Bolivia'),(28,'Bosnia and Herzegovina'),(29,'Botswana'),(30,'Bouvet Island'),(31,'Brazil'),(32,'British Indian Ocean territory'),(33,'Brunei Darussalam'),(34,'Bulgaria'),(35,'Burkina Faso'),(36,'Burundi'),(37,'Cambodia'),(38,'Cameroon'),(39,'Canada'),(40,'Cape Verde'),(41,'Cayman Islands'),(42,'Central African Republic'),(43,'Chad'),(44,'Chile'),(45,'China'),(46,'Christmas Island'),(47,'Cocos (Keeling) Islands'),(48,'Colombia'),(49,'Comoros'),(50,'Congo'),(51,'Congo'),(52,' Democratic Republic'),(53,'Cook Islands'),(54,'Costa Rica'),(55,'Ivory Coast (Ivory Coast)'),(56,'Croatia (Hrvatska)'),(57,'Cuba'),(58,'Cyprus'),(59,'Czech Republic'),(60,'Denmark'),(61,'Djibouti'),(62,'Dominica'),(63,'Dominican Republic'),(64,'East Timor'),(65,'Ecuador'),(66,'Egypt'),(67,'El Salvador'),(68,'Equatorial Guinea'),(69,'Eritrea'),(70,'Estonia'),(71,'Ethiopia'),(72,'Falkland Islands'),(73,'Faroe Islands'),(74,'Fiji'),(75,'Finland'),(76,'France'),(77,'French Guiana'),(78,'French Polynesia'),(79,'French Southern Territories'),(80,'Gabon'),(81,'Gambia'),(82,'Georgia'),(83,'Germany'),(84,'Ghana'),(85,'Gibraltar'),(86,'Greece'),(87,'Greenland'),(88,'Grenada'),(89,'Guadeloupe'),(90,'Guam'),(91,'Guatemala'),(92,'Guinea'),(93,'Guinea-Bissau'),(94,'Guyana'),(95,'Haiti'),(96,'Heard and McDonald Islands'),(97,'Honduras'),(98,'Hong Kong'),(99,'Hungary'),(100,'Iceland'),(101,'India'),(102,'Indonesia'),(103,'Iran'),(104,'Iraq'),(105,'Ireland'),(106,'Israel'),(107,'Italy'),(108,'Jamaica'),(109,'Japan'),(110,'Jordan'),(111,'Kazakhstan'),(112,'Kenya'),(113,'Kiribati'),(114,'Korea (north)'),(115,'Korea (south)'),(116,'Kuwait'),(117,'Kyrgyzstan'),(118,'Lao People\'s Democratic Republic'),(119,'Latvia'),(120,'Lebanon'),(121,'Lesotho'),(122,'Liberia'),(123,'Libyan Arab Jamahiriya'),(124,'Liechtenstein'),(125,'Lithuania'),(126,'Luxembourg'),(127,'Macao'),(128,'Macedonia'),(129,'Madagascar'),(130,'Malawi'),(131,'Malaysia'),(132,'Maldives'),(133,'Mali'),(134,'Malta'),(135,'Marshall Islands'),(136,'Martinique'),(137,'Mauritania'),(138,'Mauritius'),(139,'Mayotte'),(140,'Mexico'),(141,'Micronesia'),(142,'Moldova'),(143,'Monaco'),(144,'Mongolia'),(145,'Montserrat'),(146,'Morocco'),(147,'Mozambique'),(148,'Myanmar'),(149,'Namibia'),(150,'Nauru'),(151,'Nepal'),(152,'Netherlands'),(153,'Netherlands Antilles'),(154,'New Caledonia'),(155,'New Zealand'),(156,'Nicaragua'),(157,'Niger'),(158,'Nigeria'),(159,'Niue'),(160,'Norfolk Island'),(161,'Northern Mariana Islands'),(162,'Norway'),(163,'Oman'),(164,'Pakistan'),(165,'Palau'),(166,'Palestinian Territories'),(167,'Panama'),(168,'Papua New Guinea'),(169,'Paraguay'),(170,'Peru'),(171,'Philippines'),(172,'Pitcairn'),(173,'Poland'),(174,'Portugal'),(175,'Puerto Rico'),(176,'Qatar'),(177,'Runion'),(178,'Romania'),(179,'Russian Federation'),(180,'Rwanda'),(181,'Saint Helena'),(182,'Saint Kitts and Nevis'),(183,'Saint Lucia'),(184,'Saint Pierre and Miquelon'),(185,'Saint Vincent and the Grenadines'),(186,'Samoa'),(187,'San Marino'),(188,'Sao Tome and Principe'),(189,'Saudi Arabia'),(190,'Senegal'),(191,'Serbia and Montenegro'),(192,'Seychelles'),(193,'Sierra Leone'),(194,'Singapore'),(195,'Slovakia'),(196,'Slovenia'),(197,'Solomon Islands'),(198,'Somalia'),(199,'South Africa'),(200,'South Georgia and the South Sandwich Islands'),(201,'Spain'),(202,'Sri Lanka'),(203,'Sudan'),(204,'Suriname'),(205,'Svalbard and Jan Mayen Islands'),(206,'Swaziland'),(207,'Sweden'),(208,'Switzerland'),(209,'Syria'),(210,'Taiwan'),(211,'Tajikistan'),(212,'Tanzania'),(213,'Thailand'),(214,'Togo'),(215,'Tokelau'),(216,'Tonga'),(217,'Trinidad and Tobago'),(218,'Tunisia'),(219,'Turkey'),(220,'Turkmenistan'),(221,'Turks and Caicos Islands'),(222,'Tuvalu'),(223,'Uganda'),(224,'Ukraine'),(225,'United Arab Emirates'),(226,'United Kingdom'),(227,'United States of America'),(228,'Uruguay'),(229,'Uzbekistan'),(230,'Vanuatu'),(231,'Vatican City'),(232,'Venezuela'),(233,'Vietnam'),(234,'Virgin Islands (British)'),(235,'Virgin Islands (US)'),(236,'Wallis and Futuna Islands'),(237,'Western Sahara'),(238,'Yemen'),(239,'Zaire'),(240,'Zambia'),(241,'Zimbabwe');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geolocation`
--

DROP TABLE IF EXISTS `geolocation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geolocation` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `city` (`user_id`),
  CONSTRAINT `city` FOREIGN KEY (`user_id`) REFERENCES `shoutbox` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geolocation`
--

LOCK TABLES `geolocation` WRITE;
/*!40000 ALTER TABLE `geolocation` DISABLE KEYS */;
INSERT INTO `geolocation` VALUES (1,1,'San Antonio'),(2,2,'San Antonio'),(3,3,'Nothing'),(4,4,'Nothing'),(5,5,'San Antonio'),(6,6,'San Antonio'),(7,7,'Nothing'),(8,8,'Nothing'),(9,9,'Nothing'),(10,10,'Nothing'),(11,11,'Nothing');
/*!40000 ALTER TABLE `geolocation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoutbox`
--

DROP TABLE IF EXISTS `shoutbox`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shoutbox` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(25) NOT NULL,
  `ufrom` varchar(50) NOT NULL,
  `sfrom` varchar(50) NOT NULL,
  `pfrom` varchar(50) NOT NULL,
  `ttog` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoutbox`
--

LOCK TABLES `shoutbox` WRITE;
/*!40000 ALTER TABLE `shoutbox` DISABLE KEYS */;
INSERT INTO `shoutbox` VALUES (1,'2013-05-07 04:09:41','Kevin','USA','PERU','','6 Years'),(2,'2013-05-07 04:26:09','Rosa','Peru','USA','','6'),(3,'2013-05-07 23:36:13','Kristel','Perú ','','','1 year And a half'),(4,'2013-05-07 23:43:46','Viviana','Mendoza, Argentina','LV ','','6 y/ married   2.5 date'),(5,'2013-05-08 01:27:06','Silvana','Peru','Valverde','','13 months and 3 weeks married'),(6,'2013-05-08 01:27:54','Silvana','Peru','Valverde','','13 months and 3 weeks married'),(7,'2013-05-08 01:47:11','Yeni','Peru','USA ','','Almost 6 years'),(8,'2013-05-08 02:19:29','betzabe','Lima-Peru','','',''),(9,'2013-05-08 15:07:04','Sara','Lima - Peru','Germany','','6 years'),(10,'2013-05-08 18:00:41','Paola Ortakci','Peru','','','5 years '),(11,'2013-05-09 04:06:33','betzabe','Peru','usa','','19');
/*!40000 ALTER TABLE `shoutbox` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-05-12 18:59:41
