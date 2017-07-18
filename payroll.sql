CREATE DATABASE  IF NOT EXISTS `payroll` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `payroll`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: payroll
-- ------------------------------------------------------
-- Server version	5.5.8-log

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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `userid` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (1,'admin','yeah','Administrator'),(2,'demo','demo','Demo');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `attendid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `empname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `attendance_type` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `log_in` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `log_out` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `no_of_hours` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`attendid`),
  KEY `FK_attendance_employee_empid` (`empid`),
  CONSTRAINT `FK_attendance_employee_empid` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
INSERT INTO `attendance` VALUES (3,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Regular','08:00','17:00','8','Ok'),(4,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Holiday','08:00','21:00','12','Ok'),(5,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Overtime','08:00','00:00','15','Overtime'),(6,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Regular','08:00','17:00','8','Ok'),(7,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Regular','08:00','17:00','8','Ok'),(8,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Holiday','08:00','21:00','12','Ok'),(9,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Regular','08:00','21:00','12','Ok'),(10,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Holiday','08:00','21:00','12','Ok'),(11,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Holiday','08:00','21:00','12','Ok'),(12,'1575354','Dela Cruz, Jean','Sep. 24, 2015','Regular','08:00','21:00','12','Ok');
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `catid` varchar(45) COLLATE utf8_bin NOT NULL,
  `catname` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `catdesc` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`catid`),
  UNIQUE KEY `catname` (`catname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES ('1','Regular','May Cheese'),('2','Non Regular','Walang Cheese'),('3','Contractual','Malapit na mapanis'),('4','On Call','Customized Tinapay');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `deptid` int(11) NOT NULL,
  `deptname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `deptdesc` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`deptid`),
  UNIQUE KEY `deptname` (`deptname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (0,'Administrative','Management Staff'),(1,'IT Department','Technical Staff'),(2,'Accounting','Finance Staff'),(3,'Logistics','Quality Control');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `designation` (
  `jobid` int(11) NOT NULL AUTO_INCREMENT,
  `jobtitle` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `jobrate` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `jobdesc` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`jobid`),
  UNIQUE KEY `jobtitle` (`jobtitle`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation`
--

LOCK TABLES `designation` WRITE;
/*!40000 ALTER TABLE `designation` DISABLE KEYS */;
INSERT INTO `designation` VALUES (1,'C.E.O','200','Chief Executive Officer'),(2,'Supervisor','100','Team Leader'),(3,'Accountant','85','Budget and Finance'),(4,'Secretary','75','Scheduler');
/*!40000 ALTER TABLE `designation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `empid` varchar(255) COLLATE utf8_bin NOT NULL,
  `department` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `empcat` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `salutation` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `birthdate` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `civilstatus` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mobile1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mobile2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `sss` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `tin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `taxcode` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `philn` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `hdmf` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `bankno` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `hiredate` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`empid`),
  KEY `FK_employee_department_deptname` (`department`),
  KEY `FK_employee_designation_jobtitle` (`designation`),
  KEY `FK_employee_category_catname` (`empcat`),
  CONSTRAINT `FK_employee_category_catname` FOREIGN KEY (`empcat`) REFERENCES `category` (`catname`),
  CONSTRAINT `FK_employee_department_deptname` FOREIGN KEY (`department`) REFERENCES `department` (`deptname`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_employee_designation_jobtitle` FOREIGN KEY (`designation`) REFERENCES `designation` (`jobtitle`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('1575354','Administrative','Accountant','Regular','Ms.','Jean','Ulorquia','Dela Cruz','Jun. 12, 1990','Single','Female','Montalban, Rizal',' ','4585502',' ','09354782136',' ','jeandelacruz612@gmail.com',' ','12532312251','224112232233','S/ME','1422135244','421526234512','42215513','September 24, 2015');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-24 10:22:27
