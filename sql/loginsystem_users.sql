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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `vehicle_number` varchar(45) NOT NULL DEFAULT 'None',
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `profile_pic_path` varchar(1024) NOT NULL DEFAULT 'img/pro.png',
  `ID_card` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `address` varchar(1024) DEFAULT NULL,
  `gender` varchar(45) NOT NULL DEFAULT 'male',
  PRIMARY KEY (`user_ID`,`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'chamitha01','Chamitha Nandun','Jayalath','GQ-9743','chamitha01@gmail.com','24da0dd9cb1293ad664f9d1d2ad8f685','admin',NULL,'img/pro.png','952451085v','Southern','N0 12 KumaraUyana, Kurunduwatte, akmeemana','Male'),(2,'chiranga02','Chiranga','Jayalath','TG-5865','cg@gmail.com','24da0dd9cb1293ad664f9d1d2ad8f685','staff',NULL,'img/pro.png',NULL,NULL,NULL,'Female'),(3,'sachira03','Sachira ',' Raja Yapa','CAE-5523','sachir@yahoo.com','24da0dd9cb1293ad664f9d1d2ad8f685','customer','1234','img/pro.png','99546794v','Western','n023, anderson road, werkgj','Male'),(19,'chiranga','chiranga','jayalath','19990423','chiranganj99@gmail.com','0d4bdc80af263512749ce902a60f1883','customer',NULL,'img/pro.png',NULL,NULL,NULL,'male'),(20,'saman01','Saman','Yapa','None','saman34@gmail.com','24da0dd9cb1293ad664f9d1d2ad8f685','staff',NULL,'img/pro.png','123904534v',NULL,'Matara',''),(22,'saman011','Saman','Yapa','None','saman3433@gmail.com','24da0dd9cb1293ad664f9d1d2ad8f685','staff',NULL,'img/pro.png','12390453224v',NULL,'Matara','male');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
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
