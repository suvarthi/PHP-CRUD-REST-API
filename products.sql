-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 06:41 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rest_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(250) NOT NULL,
  `manufacturer` varchar(150) NOT NULL,
  `short_description` longtext NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `upload_date` datetime NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `manufacturer`, `short_description`, `price`, `published`, `upload_date`) VALUES
(1, 'iPhone 10S', 'Apple', 'Great iOS device.', 50000.00, 0, '2018-05-28 21:39:17'),
(2, 'BlackBerry', 'Nokia', 'Touch with keypad', 23000.00, 0, '2018-05-28 21:46:42'),
(3, 'Galaxy S3', 'Sumsung', 'Andriod device', 40000.00, 0, '2018-05-28 21:48:47');
