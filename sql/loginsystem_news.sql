CREATE DATABASE  IF NOT EXISTS `loginsystem` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `loginsystem`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: loginsystem
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `idnews` int(6) NOT NULL AUTO_INCREMENT,
  `Headline` varchar(256) DEFAULT NULL,
  `Content` longblob,
  `picture_path` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`idnews`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'New Lubricants Just Arrived','Do you plan to track your Lotus any time soon? Let the auto service team at Cleen Streat Auto Service make sure you\'re ready for the track by sheduling service today. From genuine OEM parts to technicians trained on Lotus models we can make sure that your Lotus is prepared to compete. Schedule an appointment for your Lotus at our service center through our service form, and get the oil change or repairs that you need with us!','img/Lotous.jpg','2018-07-01'),(2,'Aston Martin Service & Maintenance Available','Who do you trust to handle repairs on your Aston Martin? It\'s not like you can bring it in to a local shop or quick lube for an oil change. A car as special as your Aston Martin demands special attention and genuine OEM parts direct from the factory in Gayden, England. From oil changes to advanced repair, the technicians at the Cleen Street auto service center have the knowledge and tools to keep your Aston Martin in like-new condition. Contact our team today through our appoinment form or by phone at 111-1 111 111 to get more details on service options for Aston martin models','img/Aston.jpg','2018-07-02'),(3,'news','Hello','','2018-07-15');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-18  1:05:43
