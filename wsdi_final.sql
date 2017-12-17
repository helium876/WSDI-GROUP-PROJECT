CREATE DATABASE  IF NOT EXISTS `wsdi_final` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wsdi_final`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: wsdi_final
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
-- Table structure for table `gallery_images`
--

DROP TABLE IF EXISTS `gallery_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `image_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_images`
--


/*!40000 ALTER TABLE `gallery_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery_images` ENABLE KEYS */;


--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `prop_name` varchar(80) DEFAULT NULL,
  `prop_type` varchar(45) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `build_type` varchar(45) DEFAULT NULL,
  `bed_num` varchar(5) DEFAULT NULL,
  `bath_num` varchar(5) DEFAULT NULL,
  `list_type` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `preview` varchar(100) DEFAULT NULL,
  `rented` tinyint(4) DEFAULT NULL,
  `street1` varchar(45) DEFAULT NULL,
  `street2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `parish` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `time_stamp` datetime DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--


/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (1,1,'2 Bedroom house','Residential',2500,'Housing','2','1','Rent','32,000','preview_1.jpg',0,'Lot 1575 Jamaica CR','Cornwall Courts','Montego Bay','St. James','Jamaica','2017-12-17 00:00:00'),(2,1,'High Rise House','Residential',3600,'Housing','3','2','Rent','48,000','preview_2.jpg',0,'Lot 1286 Trnidad CL','Cornwall Courts','Montego Bay','St. James','Jamaica','2017-12-17 00:00:00'),(3,1,'Luxury House','Residential',10000,'Housing','5','3+','Rent','126,000','preview_3.jpg',0,'_','Boaden hill','Stony Hill','St. Andrew','Jamaica','2017-12-17 00:00:00');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;


--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(60) DEFAULT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `lname` varchar(60) DEFAULT NULL,
  `tel1` varchar(12) DEFAULT NULL,
  `tel2` varchar(12) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `trn` varchar(13) DEFAULT NULL,
  `password` varchar(512) DEFAULT NULL,
  `user_type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--


/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mikhail','Rene','Shaw','876-585-1482','876-986-5623','mikshaw01@gmail.com','123-456-789','$2y$10$l7cQNCMhWYY/sZ9Qzw7ufeBvZQr9AtQ5hVQxjsfb.wHgcaaqz9rrG','user'),(2,'John','Jones','Doe','876-999-9999','876-555-5555','doeboy13@gmail.com','321-654-987','$2y$10$uuTIxQP8uZhFbzCs6lpdZezYXxkVVmQ50WDJsmi1YkiOtLlcdQDqm','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-17  9:14:26
