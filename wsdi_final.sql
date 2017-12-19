-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2017 at 07:42 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsdi_final`
--
CREATE DATABASE IF NOT EXISTS `wsdi_final` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wsdi_final`;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

DROP TABLE IF EXISTS `gallery_images`;
CREATE TABLE IF NOT EXISTS `gallery_images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `image_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`pid`, `user_id`, `prop_name`, `prop_type`, `size`, `build_type`, `bed_num`, `bath_num`, `list_type`, `price`, `preview`, `rented`, `street1`, `street2`, `city`, `parish`, `country`, `time_stamp`) VALUES
(1, 2, '2 Bedroom house', 'Residential', 2500, 'Housing', '2', '1', 'Rent', '35,000', 'preview_1.jpg', 0, 'Lot 1575 Jamaica CR', 'Cornwall Courts', 'Montego Bay', 'St. James', 'Jamaica', '2017-12-17 00:00:00'),
(2, 2, 'High Rise House', 'Residential', 3600, 'Housing', '3', '2', 'Rent', '48,000', 'preview_2.jpg', 0, 'Lot 1286 Trnidad CL', 'Cornwall Courts', 'Montego Bay', 'St. James', 'Jamaica', '2017-12-17 00:00:00'),
(3, 2, 'Luxury House', 'Residential', 10000, 'Housing', '5', '3+', 'Rent', '126,000', 'preview_3.jpg', 0, '_', 'Boaden hill', 'Stony Hill', 'St. Andrew', 'Jamaica', '2017-12-17 00:00:00'),
(13, 1, 'Downtown Flat', 'Residential', 10000, 'Apartment', '1', '1', 'Rent', '17500', 'preview_5.jpg', 0, 'Lot 12', 'Daubon Rd', 'Downtown', 'Kingston', 'Jamaica', '2017-12-19 18:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `mname`, `lname`, `tel1`, `tel2`, `email`, `trn`, `password`, `user_type`) VALUES
(1, 'Mikhail', 'Rene', 'Shaw', '876-585-1482', '876-986-5623', 'mikshaw01@gmail.com', '123-456-787', '$2y$10$fLze2ZudFNRfRYkSTha1DeKbFqo1OPa6xmqMG6Ef2yGYi8Y0M8yby', 'admin'),
(2, 'John', 'Jones', 'Doe', '876-999-9999', '876-555-5555', 'doeboy13@gmail.com', '321-654-987', '$2y$10$jmOTHgZea7.CY1.IvggUMeUHyudPT8W4H6A42AD5e3dR59tNhiEfC', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
