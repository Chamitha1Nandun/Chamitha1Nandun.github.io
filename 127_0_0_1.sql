-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2018 at 09:18 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginform`
--
CREATE DATABASE IF NOT EXISTS `loginform` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loginform`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `userName` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `hint` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userName`, `password`, `hint`) VALUES
('', '', 'db'),
('Iyomal', '23456', ''),
('Mal', '56789', NULL),
('Omal', '45678', NULL),
('Roshan', '12346', NULL),
('SACHIRA', 'QWERTY123', NULL),
('Yomal', '34567', NULL),
('yoshan', '12347', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loginst`
--

DROP TABLE IF EXISTS `loginst`;
CREATE TABLE IF NOT EXISTS `loginst` (
  `userName` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `hint` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginst`
--

INSERT INTO `loginst` (`userName`, `password`, `hint`) VALUES
('asd', 'asd', NULL),
('Buddhika', '23456', NULL),
('Chamitha', '56789', NULL),
('Dilani', '45678', NULL),
('jayalath', '1234', NULL),
('Natasha', '45612', NULL),
('Pabasarani', '12345', NULL),
('Toshima', '34567', NULL);
--
-- Database: `loginsystem`
--
CREATE DATABASE IF NOT EXISTS `loginsystem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loginsystem`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
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

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminID`, `user_name`, `mobile_number`, `telephone_number`, `temporary_address`, `qualifications`, `basic_salary`, `join_date`) VALUES
(1, 'chamitha01', '076-7913245', '091-567567', 'Home', 'Bsc. In computer Science', 85000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
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

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_ID`, `user_name`, `first_name`, `last_name`, `email`, `vehicle_type`, `service_type`, `mobile_number`, `free_1`, `free_2`, `vehicle_number`) VALUES
(7, 'sachira03', 'Sachira ', 'Yapa', 'sachir@yahoo.com', 'Car', 'Full', '0915678910', '2018-07-14', '2018-07-27', 'CAE-5523');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `comany_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `no of vehicals` int(11) NOT NULL,
  `due_payment` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `advanced_payment` int(11) DEFAULT NULL,
  `last_serviced_date` date DEFAULT NULL,
  PRIMARY KEY (`comany_ID`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_vehicles`
--

DROP TABLE IF EXISTS `company_vehicles`;
CREATE TABLE IF NOT EXISTS `company_vehicles` (
  `vehicle_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_ID` int(11) NOT NULL,
  `vehicle_no` varchar(45) NOT NULL,
  `last_serviced_date` date DEFAULT NULL,
  `milage_at_last` int(11) DEFAULT NULL,
  `next_serviced_date` date NOT NULL,
  `last_service_type` varchar(45) DEFAULT NULL,
  `detailing` varchar(75) DEFAULT 'None',
  `lubrication` varchar(25) DEFAULT 'Not Done',
  PRIMARY KEY (`vehicle_ID`,`company_ID`,`vehicle_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
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

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`idshop`, `shop1_add`, `shop2_add`, `shop3_add`, `shop1_num1`, `shop2_num1`, `shop3_num1`, `shop1_num2`, `shop2_num2`, `shop3_num2`) VALUES
(1, 'Raid Avenue', 'silver zone', 'panchikawatta', '91-6756789', '768-9485345', '2374g466565', '333333', '44444', '2242423');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `cust_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `telephone_number` varchar(45) DEFAULT NULL,
  `license_number` varchar(45) DEFAULT NULL,
  `insurance_company` varchar(100) DEFAULT NULL,
  `vehicle_type` varchar(45) NOT NULL DEFAULT 'Car',
  PRIMARY KEY (`cust_ID`,`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_ID`, `user_name`, `mobile_number`, `telephone_number`, `license_number`, `insurance_company`, `vehicle_type`) VALUES
(1, 'sachira03', '0915678910', '123455677', '23r23r2r', 'Seylan', 'Car'),
(2, 'kenneth1997', NULL, NULL, NULL, NULL, 'Car'),
(3, 'uoc', '111-111111', '222-222222', 'xxxxxx', 'Colombo', 'Car');

-- --------------------------------------------------------

--
-- Table structure for table `customer_vehicle`
--

DROP TABLE IF EXISTS `customer_vehicle`;
CREATE TABLE IF NOT EXISTS `customer_vehicle` (
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

--
-- Dumping data for table `customer_vehicle`
--

INSERT INTO `customer_vehicle` (`vehicle_id`, `user_ID`, `last_serviced`, `last_milage`, `next_service`, `service_type`, `lubrication`, `tuneup`, `suspension`, `coolent`, `electric`, `break`, `exhaust`, `detail`) VALUES
(1, 3, '2018-04-17', 155500, '200000', 'Full', 'Exterior', 'Not Preformed', 'Checked', 'Not Added', 'Not Checked', 'Not Checked', 'Not Checked', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
CREATE TABLE IF NOT EXISTS `income` (
  `income_ID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  PRIMARY KEY (`income_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`income_ID`, `date`, `description`, `credit`, `debit`, `balance`) VALUES
(1, '2018-07-07', NULL, NULL, NULL, 200000),
(2, '2918-07-12', NULL, NULL, NULL, 400000),
(3, '2018-07-04', 'new', 20000, 40000, 20000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `new`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `new`;
CREATE TABLE IF NOT EXISTS `new` (
);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `idnews` int(6) NOT NULL AUTO_INCREMENT,
  `Headline` varchar(256) DEFAULT NULL,
  `Content` longblob,
  `picture_path` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`idnews`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idnews`, `Headline`, `Content`, `picture_path`, `date`) VALUES
(1, 'New Lubricants Just Arrived', 0x446f20796f7520706c616e20746f20747261636b20796f7572204c6f74757320616e792074696d6520736f6f6e3f204c657420746865206175746f2073657276696365207465616d20617420436c65656e20537472656174204175746f2053657276696365206d616b65207375726520796f7527726520726561647920666f722074686520747261636b2062792073686564756c696e67207365727669636520746f6461792e2046726f6d2067656e75696e65204f454d20706172747320746f20746563686e696369616e7320747261696e6564206f6e204c6f747573206d6f64656c732077652063616e206d616b652073757265207468617420796f7572204c6f74757320697320707265706172656420746f20636f6d706574652e205363686564756c6520616e206170706f696e746d656e7420666f7220796f7572204c6f747573206174206f757220736572766963652063656e746572207468726f756768206f7572207365727669636520666f726d2c20616e642067657420746865206f696c206368616e6765206f722072657061697273207468617420796f75206e656564207769746820757321, 'img/Lotous.jpg', '2018-07-01'),
(2, 'Aston Martin Service & Maintenance Available', 0x57686f20646f20796f7520747275737420746f2068616e646c652072657061697273206f6e20796f7572204173746f6e204d617274696e3f2049742773206e6f74206c696b6520796f752063616e206272696e6720697420696e20746f2061206c6f63616c2073686f70206f7220717569636b206c75626520666f7220616e206f696c206368616e67652e204120636172206173207370656369616c20617320796f7572204173746f6e204d617274696e2064656d616e6473207370656369616c20617474656e74696f6e20616e642067656e75696e65204f454d207061727473206469726563742066726f6d2074686520666163746f727920696e2047617964656e2c20456e676c616e642e2046726f6d206f696c206368616e67657320746f20616476616e636564207265706169722c2074686520746563686e696369616e732061742074686520436c65656e20537472656574206175746f20736572766963652063656e746572206861766520746865206b6e6f776c6564676520616e6420746f6f6c7320746f206b65657020796f7572204173746f6e204d617274696e20696e206c696b652d6e657720636f6e646974696f6e2e20436f6e74616374206f7572207465616d20746f646179207468726f756768206f7572206170706f696e6d656e7420666f726d206f722062792070686f6e65206174203131312d31203131312031313120746f20676574206d6f72652064657461696c73206f6e2073657276696365206f7074696f6e7320666f72204173746f6e206d617274696e206d6f64656c73, 'img/Aston.jpg', '2018-07-02'),
(3, 'news', 0x48656c6c6f, '', '2018-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
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

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ID`, `user_name`, `mobile_no`, `telephone_no`, `specialty`, `station`, `rating`, `salary`, `service_started_date`, `qualifications`, `status`, `temporary_address`) VALUES
(1, 'chiranga02', '077-3457456', '091-5672288', 'Mechanic', 'Galle', '7/10', 42000, NULL, 'none', 'Active', 'None'),
(2, 'yapa1', '091-5672288', NULL, 'Cleaner', 'Matara', '6/10', NULL, NULL, NULL, NULL, 'None'),
(3, 'saman011', '0772345456', '123456788', 'Operator', 'Matara', NULL, 34000, '2018-07-05', 'None', 'Active', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `user_name`, `first_name`, `last_name`, `vehicle_number`, `email`, `password`, `user_type`, `code`, `profile_pic_path`, `ID_card`, `province`, `address`, `gender`) VALUES
(1, 'chamitha01', 'Chamitha Nandun', 'Jayalath', 'GQ-9743', 'chamitha01@gmail.com', '24da0dd9cb1293ad664f9d1d2ad8f685', 'admin', NULL, 'img/pro.png', '952451085v', 'Southern', 'N0 12 KumaraUyana, Kurunduwatte, akmeemana', 'Male'),
(2, 'chiranga02', 'Chiranga', 'Jayalath', 'TG-5865', 'cg@gmail.com', '24da0dd9cb1293ad664f9d1d2ad8f685', 'staff', NULL, 'img/pro.png', NULL, NULL, NULL, 'Female'),
(3, 'sachira03', 'Sachira ', ' Raja Yapa', 'CAE-5523', 'sachir@yahoo.com', '24da0dd9cb1293ad664f9d1d2ad8f685', 'customer', '1234', 'img/pro.png', '99546794v', 'Western', 'n023, anderson road, werkgj', 'Male'),
(4, 'yapa1', 'yapa', 'naya', '1234-444', 'ya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'staff', NULL, 'img/pro.png', NULL, NULL, NULL, 'male'),
(7, 'saman', 'saman', 'yapa', 'avbv-7977', 'saman@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'customer', NULL, 'img/pro.png', NULL, NULL, NULL, 'male'),
(9, 'shantha01', 'shantha', 'yapa', 'avbv-79774', 'samaeeen@gmail.com', '3f088ebeda03513be71d34d214291986', 'customer', NULL, 'img/pro.png', NULL, NULL, NULL, 'male'),
(12, 'uoc', 'uoc', '', '1234', 'uoc@uoc.com', 'abf8412b7c606f8acd8b58968e9b4733', 'customer', NULL, 'img/pro.png', NULL, NULL, NULL, 'male'),
(14, 'ruwan01', 'Ruwantha', 'madushan', '34-6789', 'ruwan01@gmail.com', '3f088ebeda03513be71d34d214291986', 'customer', '3456', 'img/pro.png', '67587950v', 'southern', 'no, 12 wers', 'male'),
(15, 'kenneth1997', 'kenneth', 'hulugalla', '8955225', 'kennethhulugalla@gmail.com', '24da0dd9cb1293ad664f9d1d2ad8f685', 'customer', NULL, 'img/pro.png', NULL, NULL, NULL, 'male'),
(19, 'chiranga', 'chiranga', 'jayalath', '19990423', 'chiranganj99@gmail.com', '0d4bdc80af263512749ce902a60f1883', 'customer', NULL, 'img/pro.png', NULL, NULL, NULL, 'male'),
(20, 'saman01', 'Saman', 'Yapa', 'None', 'saman34@gmail.com', '24da0dd9cb1293ad664f9d1d2ad8f685', 'staff', NULL, 'img/pro.png', '123904534v', NULL, 'Matara', ''),
(22, 'saman011', 'Saman', 'Yapa', 'None', 'saman3433@gmail.com', '24da0dd9cb1293ad664f9d1d2ad8f685', 'staff', NULL, 'img/pro.png', '12390453224v', NULL, 'Matara', 'male');

-- --------------------------------------------------------

--
-- Structure for view `new`
--
DROP TABLE IF EXISTS `new`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new`  AS  select `login`.`user_id` AS `user_id`,`login`.`user_first` AS `user_first`,`login`.`user_last` AS `user_last`,`login`.`user_email` AS `user_email`,`login`.`user_uid` AS `user_uid`,`login`.`user_pwd` AS `user_pwd`,`login`.`user_add` AS `user_add`,`login`.`user_tell` AS `user_tell` from `login` ;
--
-- Database: `student`
--
CREATE DATABASE IF NOT EXISTS `student` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `student`;

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

DROP TABLE IF EXISTS `stu`;
CREATE TABLE IF NOT EXISTS `stu` (
  `userid` varchar(45) NOT NULL DEFAULT '',
  `Name` varchar(45) NOT NULL,
  `Gender` varchar(45) DEFAULT 'Male',
  `University` varchar(45) DEFAULT NULL,
  `Graduation` varchar(45) DEFAULT 'Undergrduate',
  `Faculty` varchar(45) DEFAULT NULL,
  `Year` int(11) DEFAULT '1',
  `Field` varchar(45) NOT NULL,
  `PermenentAdd` text,
  `TempAdd` text,
  `Tel1` varchar(45) DEFAULT NULL,
  `Kuppi` varchar(45) DEFAULT NULL,
  `Time` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `Subject` text,
  `Email` varchar(45) DEFAULT NULL,
  `Tel2` varchar(45) DEFAULT NULL,
  `Interest` mediumtext,
  `Fldcs` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userid`,`Name`,`Field`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`userid`, `Name`, `Gender`, `University`, `Graduation`, `Faculty`, `Year`, `Field`, `PermenentAdd`, `TempAdd`, `Tel1`, `Kuppi`, `Time`, `Subject`, `Email`, `Tel2`, `Interest`, `Fldcs`) VALUES
('123456', 'chamitha', 'Male', 'ruhuna', 'Postgraduate', '', 3, 'null', 'ascascac', 'asdcasc', 'ascacasaasc', 'No', 0000000000, 'None', 'vsdvsdv', 'bn nm', '', 'CS'),
('3456', 'chalitha', 'Male', 'japura', 'Undergrduate', 'scirnce', 1, 'physical', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('45456', 'ruwn', 'Male', 'colombo', 'Undergrduate', NULL, 1, 'is', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Bio-NatasCol', 'Natasha', 'Male', 'Colombo', 'Undergraduate', NULL, 2, 'Bio', NULL, NULL, '0771234567', NULL, NULL, NULL, 'abcd', NULL, NULL, NULL),
('Bio-sandaCMB', 'sandaru', 'Male', 'CMB', 'Postgraduate', '', 1, 'null', 'hbkbhkbh', 'bjbhjbh', '041221128', 'null', 0000000000, 'None', 'asdfg', '', '', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `userid` varchar(45) NOT NULL DEFAULT '',
  `Tutor` varchar(60) NOT NULL,
  `University` varchar(45) DEFAULT NULL,
  `Graduation` varchar(45) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Field` varchar(45) DEFAULT NULL,
  `Permenent_Address` mediumtext,
  `Temp_Address` mediumtext,
  `Kuppi` varchar(22) DEFAULT 'NO',
  `Times` int(11) DEFAULT NULL,
  `Subjects` longtext,
  `Tel_No` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Other_Qulification` longtext,
  `Tel2` varchar(45) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `Faculty` varchar(45) DEFAULT NULL,
  `fldcs` varchar(10) DEFAULT 'No',
  PRIMARY KEY (`userid`,`Tutor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `tutors`
--
CREATE DATABASE IF NOT EXISTS `tutors` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tutors`;

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

DROP TABLE IF EXISTS `profilepic`;
CREATE TABLE IF NOT EXISTS `profilepic` (
  `imageid` int(11) NOT NULL,
  `img_title` varchar(45) DEFAULT NULL,
  `img_data` blob NOT NULL,
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sheduler`
--

DROP TABLE IF EXISTS `sheduler`;
CREATE TABLE IF NOT EXISTS `sheduler` (
  `userName` varchar(45) NOT NULL,
  `sub1` varchar(45) DEFAULT 'None',
  `sub2` varchar(45) DEFAULT 'None',
  `sub3` varchar(45) DEFAULT 'None',
  `sub4` varchar(45) DEFAULT 'None',
  `date1` varchar(45) DEFAULT NULL,
  `date2` varchar(45) DEFAULT NULL,
  `date3` varchar(45) DEFAULT NULL,
  `date4` varchar(45) DEFAULT NULL,
  `time1` varchar(45) DEFAULT NULL,
  `time2` varchar(45) DEFAULT NULL,
  `time3` varchar(45) DEFAULT NULL,
  `time4` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sheduler`
--

INSERT INTO `sheduler` (`userName`, `sub1`, `sub2`, `sub3`, `sub4`, `date1`, `date2`, `date3`, `date4`, `time1`, `time2`, `time3`, `time4`) VALUES
('chamitha', 'maths', '', '', '', '1213123', '', '', '', '312313123', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `userid` varchar(45) NOT NULL DEFAULT '',
  `Tutor` varchar(60) NOT NULL,
  `University` varchar(45) DEFAULT NULL,
  `Graduation` varchar(45) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Field` varchar(45) NOT NULL,
  `Permenent_Address` mediumtext,
  `Temp_Address` mediumtext,
  `Kuppi` varchar(22) DEFAULT 'NO',
  `Times` int(11) DEFAULT NULL,
  `Subjects` longtext,
  `Tel_No` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Other_Qulification` longtext,
  `Tel2` varchar(45) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `Faculty` varchar(45) DEFAULT NULL,
  `fldcs` varchar(10) DEFAULT 'No',
  PRIMARY KEY (`userid`,`Tutor`,`Field`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`userid`, `Tutor`, `University`, `Graduation`, `Year`, `Field`, `Permenent_Address`, `Temp_Address`, `Kuppi`, `Times`, `Subjects`, `Tel_No`, `Email`, `Other_Qulification`, `Tel2`, `gender`, `Faculty`, `fldcs`) VALUES
('1234', 'nimal', 'colombo', '', NULL, 'Physical', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No'),
('2333', 'chamitha', 'ruhuna', 'Undergraduate', 3, 'Bio', '', '', 'No', 0, 'None', 'fbdbdbdfb', 'bcd', '', '', 'null', '', 'null'),
('4567', 'nihal', 'colombo', 'Undergraduate', 2, 'Bio', '', '', 'No', 44, '', '', '', '', '', 'null', '', 'null'),
('Bio-YoshaCol', 'Yoshan', 'Colombo', 'Postgraduate', 4, 'Bio', NULL, NULL, 'NO', NULL, NULL, '077254163', 'tosh@gmail.com', NULL, NULL, 'Male', 'science', 'No'),
('nayasdcsdc', 'nayana', NULL, NULL, NULL, 'physical', NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No'),
('Physical-SACHIBCS', 'SACHIRA ', 'BCS', 'null', 0, 'null', 'GCJCJ', 'MJJ', 'No', 0, 'None', '0764760389', 'SACHIRAYAPA@GMAIL.COM', '        M .,M , , ', '', 'null', 'COMPUTING', 'null');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
