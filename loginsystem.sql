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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `telephone_number` varchar(45) DEFAULT NULL,
  `temporary_address` varchar(45) DEFAULT 'None',
  `qualifications` varchar(45) DEFAULT NULL,
  `basic_salary` int(11) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  PRIMARY KEY (`adminID`,`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'chamitha01','076-7913245','091-567567','Home','Bsc. In computer Science',85000,NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointments` (
  `appointment_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `vehicle_type` varchar(45) NOT NULL DEFAULT 'Car',
  `service_type` varchar(45) NOT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `free_1` date DEFAULT NULL,
  `free_2` date DEFAULT NULL,
  `vehicle_number` varchar(45) NOT NULL,
  PRIMARY KEY (`appointment_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `comany_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `no of vehicals` int(11) NOT NULL DEFAULT '1',
  `due_payment` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `advanced_payment` int(11) DEFAULT NULL,
  `last_serviced_date` date DEFAULT NULL,
  PRIMARY KEY (`comany_ID`,`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,'New',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_vehicles`
--

DROP TABLE IF EXISTS `company_vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_vehicles` (
  `vehicle_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_ID` int(11) NOT NULL,
  `vehicle_no` varchar(45) NOT NULL,
  `last_serviced_date` date DEFAULT NULL,
  `milage_at_last` int(11) DEFAULT NULL,
  `next_serviced_date` date NOT NULL,
  `last_service_type` varchar(45) DEFAULT NULL,
  `detailing` varchar(75) DEFAULT 'None',
  `lubrication` varchar(25) DEFAULT 'Not Done',
  PRIMARY KEY (`vehicle_ID`,`company_ID`,`vehicle_no`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_vehicles`
--

LOCK TABLES `company_vehicles` WRITE;
/*!40000 ALTER TABLE `company_vehicles` DISABLE KEYS */;
INSERT INTO `company_vehicles` VALUES (1,1,'GS-3454','2017-02-04',23567,'2018-09-23','Full','None','Not Done');
/*!40000 ALTER TABLE `company_vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `idshop` int(11) NOT NULL AUTO_INCREMENT,
  `shop1_add` varchar(100) NOT NULL,
  `shop2_add` varchar(100) DEFAULT NULL,
  `shop3_add` varchar(100) DEFAULT NULL,
  `shop1_num1` varchar(45) DEFAULT NULL,
  `shop2_num1` varchar(45) DEFAULT NULL,
  `shop3_num1` varchar(45) DEFAULT NULL,
  `shop1_num2` varchar(45) DEFAULT NULL,
  `shop2_num2` varchar(45) DEFAULT NULL,
  `shop3_num2` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idshop`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Raid Avenue','silver zone','panchikawatta','91-6756789','768-9485345','2374g466565','333333','44444','2242423');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_vehicle`
--

DROP TABLE IF EXISTS `customer_vehicle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_vehicle` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `last_serviced` date DEFAULT NULL,
  `last_milage` int(11) DEFAULT NULL,
  `next_service` varchar(45) DEFAULT NULL,
  `service_type` varchar(45) DEFAULT NULL,
  `lubrication` varchar(20) DEFAULT 'Preformed',
  `tuneup` varchar(100) DEFAULT 'Not Preformed',
  `suspension` varchar(100) DEFAULT 'Not Checked',
  `coolent` varchar(100) DEFAULT 'Not Added',
  `electric` varchar(100) DEFAULT 'Not Checked',
  `break` varchar(100) DEFAULT 'Not Checked',
  `exhaust` varchar(100) DEFAULT 'Not Checked',
  `detail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`vehicle_id`,`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_vehicle`
--

LOCK TABLES `customer_vehicle` WRITE;
/*!40000 ALTER TABLE `customer_vehicle` DISABLE KEYS */;
INSERT INTO `customer_vehicle` VALUES (1,3,'2018-04-17',155500,'200000','Full','Exterior','Not Preformed','Checked','Not Added','Not Checked','Not Checked','Not Checked',NULL);
/*!40000 ALTER TABLE `customer_vehicle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `cust_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `telephone_number` varchar(45) DEFAULT NULL,
  `license_number` varchar(45) DEFAULT NULL,
  `insurance_company` varchar(100) DEFAULT NULL,
  `vehicle_type` varchar(45) NOT NULL DEFAULT 'Car',
  PRIMARY KEY (`cust_ID`,`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'sachira03','0915678910','123455677','23r23r2r','Seylan','Car'),(2,'kenneth1997',NULL,NULL,NULL,NULL,'Car'),(3,'uoc','111-111111','222-222222','xxxxxx','Colombo','Car');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `income` (
  `income_ID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  PRIMARY KEY (`income_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `income`
--

LOCK TABLES `income` WRITE;
/*!40000 ALTER TABLE `income` DISABLE KEYS */;
INSERT INTO `income` VALUES (1,'2018-07-07',NULL,NULL,NULL,200000),(2,'2918-07-12',NULL,NULL,NULL,400000),(3,'2018-07-04','new',20000,40000,20000);
/*!40000 ALTER TABLE `income` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `staff_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `mobile_no` varchar(45) NOT NULL,
  `telephone_no` varchar(45) DEFAULT NULL,
  `specialty` varchar(45) NOT NULL DEFAULT 'Normal Worker',
  `station` varchar(45) NOT NULL,
  `rating` varchar(45) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `service_started_date` date DEFAULT NULL,
  `qualifications` varchar(250) DEFAULT 'None',
  `status` varchar(20) DEFAULT 'Active',
  `temporary_address` varchar(100) NOT NULL DEFAULT 'None',
  PRIMARY KEY (`staff_ID`,`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'chiranga02','077-3457456','091-5672288','Mechanic','Galle','7/10',42000,NULL,'none','Active','None'),(2,'yapa1','091-5672288',NULL,'Cleaner','Matara','6/10',NULL,NULL,NULL,NULL,'None'),(3,'saman011','0772345456','123456788','Operator','Matara',NULL,34000,'2018-07-05','None','Active','None');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

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
  `last_name` varchar(100) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'chamitha01','Chamitha Nandun','Jayalath','GQ-9743','chamitha01@gmail.com','24da0dd9cb1293ad664f9d1d2ad8f685','admin',NULL,'pics/me.jpg','952451085v','Southern','N0 12 KumaraUyana, Kurunduwatte, akmeemana','Male'),(2,'chiranga02','Chiranga','Jayalath','TG-5865','cg@gmail.com','24da0dd9cb1293ad664f9d1d2ad8f685','staff',NULL,'img/pro.png',NULL,NULL,NULL,'Female'),(3,'sachira03','Sachira ',' Raja Yapa','CAE-5523','sachir@yahoo.com','24da0dd9cb1293ad664f9d1d2ad8f685','customer','1234','img/pro.png','99546794v','Western','n023, anderson road, werkgj','Male'),(19,'chiranga','chiranga','jayalath','19990423','chiranganj99@gmail.com','0d4bdc80af263512749ce902a60f1883','customer',NULL,'img/pro.png',NULL,NULL,NULL,'Female'),(20,'saman01','Saman','Yapa','None','saman34@gmail.com','24da0dd9cb1293ad664f9d1d2ad8f685','staff',NULL,'img/pro.png','123904534v',NULL,'Matara','Male'),(22,'saman011','Saman','Yapa','None','saman3433@gmail.com','24da0dd9cb1293ad664f9d1d2ad8f685','staff',NULL,'img/pro.png','12390453224v',NULL,'Matara','Male'),(24,'company01','New',NULL,'None','company@gmail.com','24da0dd9cb1293ad664f9d1d2ad8f685','company',NULL,'img/pro.png',NULL,NULL,NULL,'None');
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

-- Dump completed on 2018-07-18  9:53:45
