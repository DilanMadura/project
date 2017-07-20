-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2014 at 06:03 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliver_details`
--

CREATE TABLE IF NOT EXISTS `deliver_details` (
  `Id` int(15) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Cus_Address` varchar(90) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Type` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `deliver_details`
--

INSERT INTO `deliver_details` (`Id`, `Name`, `Email`, `Cus_Address`, `quantity`, `price`, `total`, `Date`, `Type`) VALUES
(34, 'kuruma', 'adjfklsj@gmail.com', 'home', 3, 8, 24, '02/11/2014', 'deliver'),
(35, 'Sweeping', 'jlsjfo@dgmi.com', '', 0, 15, 0, '02/11/2014', 'booking'),
(37, 'Sweeping', 'jlsjfo@dgmi.com', '', 0, 15, 0, '02/11/2014', 'booking'),
(38, 'Sweeping', 'jlsjfo@dgmi.com', '', 0, 15, 0, '02/11/2014', 'booking'),
(44, 'Sweeping', 'jlsjfo@dgmi.com', 'jlkls', 3, 15, 45, '02/11/2014', 'booking'),
(47, 'Sweeping', 'jlsjfo@dgmi.com', '456/main street', 3, 15, 45, '02/11/2014', 'booking'),
(48, 'Sweeping', 'jlsjfo@dgmi.com', '45main', 23, 15, 345, '02/11/2014', 'booking'),
(50, 'kuruma', 'adjfklsj@gmail.com', '450,main street', 3, 8, 24, '02/11/2014', 'deliver'),
(52, 'kuruma', 'adjfklsj@gmail.com', '450/\\main street', 3, 8, 24, '02/11/2014', 'deliver'),
(53, 'Apple', 'ksk@F.COM', '45sjkjl', 4, 14, 56, '02/11/2014', 'deliver'),
(55, 'Pizza', 'asbar.creatre@gmail.com', 'house test land', 3, 5, 15, '03/11/2014', 'deliver'),
(56, 'Pizza', 'asbar.creatre@gmail.com', 'house test land', 3, 5, 15, '03/11/2014', 'deliver'),
(58, 'Sweeping', 'jlsjfo@dgmi.com', '789/main street', 35, 15, 525, '03/11/2014', 'booking'),
(59, 'Sweeping', 'jlsjfo@dgmi.com', 'sdfs', 2, 15, 30, '03/11/2014', 'booking'),
(60, 'Sweeping', 'jlsjfo@dgmi.com', 'sdfs', 2, 15, 30, '03/11/2014', 'booking'),
(61, 'Sweeping', 'jlsjfo@dgmi.com', 'sdfsdf', 23, 15, 345, '03/11/2014', 'booking'),
(62, 'Coke', 'youandme@gmail.com', 'rty', 2, 15, 30, '03/11/2014', 'deliver'),
(63, 'Chicken', 'slfjlhousfal@gmail.com', 'k;d', 3, 2, 6, '03/11/2014', 'deliver'),
(64, 'Coke', 'youandme@gmail.com', 'jklsf', 2, 15, 30, '13/11/2014', 'deliver'),
(65, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(66, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(67, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(68, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(69, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(70, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(71, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(72, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(73, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(74, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(75, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(76, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(77, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(78, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(79, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(80, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(81, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(82, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(83, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(84, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(85, 'Cleaning', 'mysqli@gmail.com', 'youandme', 3, 45, 135, '13/11/2014', 'booking'),
(86, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(87, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(88, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(89, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(90, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(91, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(92, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(93, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(94, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(95, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(96, 'Fruits', 'thissimyemai@yahoo.com', 'myhouse', 3, 45.35, 136.05, '13/11/2014', 'deliver'),
(97, 'Sweeping', 'jlsjfo@dgmi.com', 'youatmou', 4, 15, 60, '13/11/2014', 'booking'),
(99, 'Fruits', 'thissimyemai@yahoo.com', 'you', 2, 45.35, 90.7, '13/11/2014', 'deliver'),
(100, 'Fruits', 'thissimyemai@yahoo.com', 'njlsf', 3, 45.35, 136.05, '21/11/2014', 'deliver');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(255) NOT NULL,
  `cust` varchar(90) NOT NULL,
  `food_name` varchar(90) NOT NULL,
  `qty` int(45) NOT NULL,
  `amount` double NOT NULL,
  `code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `cust`, `food_name`, `qty`, `amount`, `code`) VALUES
(2147483647, 'Asbar', 'Pizza', 1, 5, 1),
(2147483647, 'Asbar', 'Fruits', 1, 45.35, 12),
(2147483647, 'Asbar', 'Sweeping', 1, 15, 2),
(2147483647, 'Asbar', 'kuruma', 3, 24, 54535),
(547464, 'Asbar', 'Pizza', 1, 5, 1),
(547464, 'Asbar', 'Fruits', 1, 45.35, 12),
(547464, 'Asbar', 'Sweeping', 1, 15, 2),
(547464, 'Asbar', 'kuruma', 3, 24, 54535),
(2147483647, 'Asbar', 'Pizza', 1, 5, 1),
(2147483647, 'Asbar', 'Fruits', 1, 45.35, 12),
(2147483647, 'Asbar', 'Sweeping', 1, 15, 2),
(54746400, 'Asbar', 'kuruma', 3, 24, 54535),
(5474653, 'Asbar', 'Pizza', 1, 5, 1),
(5474653, 'Asbar', 'Fruits', 1, 45.35, 12),
(5474653, 'Asbar', 'Sweeping', 1, 15, 2),
(5474653, 'Asbar', 'kuruma', 3, 24, 54535),
(2147483647, 'Asbar', 'Pizza', 1, 5, 1),
(2147483647, 'Asbar', 'Fruits', 1, 45.35, 12),
(2147483647, 'Asbar', 'Sweeping', 1, 15, 2),
(2147483647, 'Asbar', 'kuruma', 3, 24, 54535),
(54746, 'Asbar', 'Pizza', 1, 5, 1),
(54746, 'Asbar', 'Fruits', 1, 45.35, 12),
(54746, 'Asbar', 'Sweeping', 1, 15, 2),
(54746, 'Asbar', 'kuruma', 3, 24, 54535),
(54746, 'Asbar', 'Pizza', 1, 5, 1),
(54746, 'Asbar', 'Fruits', 1, 45.35, 12),
(54746, 'Asbar', 'Sweeping', 1, 15, 2),
(54746, 'Asbar', 'kuruma', 3, 24, 54535),
(54746, 'Asbar', 'Pizza', 1, 5, 1),
(54746, 'Asbar', 'Fruits', 1, 45.35, 12),
(54746, 'Asbar', 'Sweeping', 1, 15, 2),
(54746, 'Asbar', 'kuruma', 3, 24, 54535),
(54746, 'Asbar', 'Pizza', 1, 5, 1),
(54746, 'Asbar', 'Fruits', 1, 45.35, 12),
(54746, 'Asbar', 'Sweeping', 1, 15, 2),
(54746, 'Asbar', 'kuruma', 3, 24, 54535),
(54746, 'Asbar', 'Pizza', 1, 5, 1),
(54746, 'Asbar', 'Fruits', 1, 45.35, 12),
(54746, 'Asbar', 'Sweeping', 1, 15, 2),
(54746, 'Asbar', 'kuruma', 3, 24, 54535),
(54746, 'Asbar', 'Pizza', 1, 5, 1),
(54746, 'Asbar', 'Fruits', 1, 45.35, 12),
(54746, 'Asbar', 'Sweeping', 1, 15, 2),
(54746, 'Asbar', 'kuruma', 3, 24, 54535),
(54746, 'Asbar', 'Pizza', 1, 5, 1),
(54746, 'Asbar', 'Fruits', 1, 45.35, 12),
(54746, 'Asbar', 'Sweeping', 1, 15, 2),
(54746, 'Asbar', 'kuruma', 3, 24, 54535),
(54746, 'Asbar', 'Pizza', 1, 5, 1),
(54746, 'Asbar', 'Fruits', 1, 45.35, 12),
(54746, 'Asbar', 'Sweeping', 1, 15, 2),
(54746, 'Asbar', 'kuruma', 3, 24, 54535),
(54746, 'Asbar', 'Pizza', 1, 5, 1),
(54746, 'Asbar', 'Fruits', 1, 45.35, 12),
(54746, 'Asbar', 'Sweeping', 1, 15, 2),
(54746, 'Asbar', 'kuruma', 3, 24, 54535),
(547471, 'Asbar', 'Pizza', 1, 5, 1),
(547471, 'Asbar', 'Fruits', 1, 45.35, 12),
(547471, 'Asbar', 'Sweeping', 1, 15, 2),
(547471, 'Asbar', 'kuruma', 3, 24, 54535),
(5474723, 'Asbar', 'Pizza', 1, 5, 1),
(5474723, 'Asbar', 'Fruits', 1, 45.35, 12),
(5474723, 'Asbar', 'Sweeping', 1, 15, 2),
(5474723, 'Asbar', 'kuruma', 3, 24, 54535),
(547472, 'Asbar', 'Pizza', 1, 5, 1),
(547472, 'Asbar', 'Fruits', 1, 45.35, 12),
(547472, 'Asbar', 'Sweeping', 1, 15, 2),
(547472, 'Asbar', 'kuruma', 3, 24, 54535),
(54747, 'Asbar', 'Pizza', 1, 5, 1),
(54747, 'Asbar', 'Fruits', 1, 45.35, 12),
(54747, 'Asbar', 'Sweeping', 1, 15, 2),
(54747, 'Asbar', 'kuruma', 3, 24, 54535),
(5474866, 'Asbar', 'Pizza', 1, 5, 1),
(5474866, 'Asbar', 'Fruits', 1, 45.35, 12),
(5474866, 'Asbar', 'Sweeping', 1, 15, 2),
(5474866, 'Asbar', 'kuruma', 3, 24, 54535),
(54748, 'Asbar', 'Pizza', 1, 5, 1),
(54748, 'Asbar', 'Fruits', 1, 45.35, 12),
(54748, 'Asbar', 'Sweeping', 1, 15, 2),
(54748, 'Asbar', 'kuruma', 3, 24, 54535),
(54748, 'Asbar', 'Pizza', 1, 5, 1),
(54748, 'Asbar', 'Fruits', 1, 45.35, 12),
(54748, 'Asbar', 'Sweeping', 1, 15, 2),
(54748, 'Asbar', 'kuruma', 3, 24, 54535),
(54749368, 'Asbar', 'Pizza', 1, 5, 1),
(54749368, 'Asbar', 'Fruits', 1, 45.35, 12),
(2147483647, 'Asbar', 'Sweeping', 1, 15, 2),
(54749368, 'Asbar', 'kuruma', 3, 24, 54535),
(2147483647, 'Asbar', 'Pizza', 1, 5, 1),
(2147483647, 'Asbar', 'Fruits', 1, 45.35, 12),
(54749433, 'Asbar', 'Sweeping', 1, 15, 2),
(54749433, 'Asbar', 'kuruma', 3, 24, 54535),
(5474944, 'Asbar', 'Pizza', 1, 5, 1),
(5474944, 'Asbar', 'Fruits', 1, 45.35, 12),
(5474944, 'Asbar', 'Sweeping', 1, 15, 2),
(5474944, 'Asbar', 'kuruma', 3, 24, 54535),
(5474946, 'Asbar', 'Pizza', 1, 5, 1),
(5474946, 'Asbar', 'Fruits', 1, 45.35, 12),
(5474946, 'Asbar', 'Sweeping', 1, 15, 2),
(5474946, 'Asbar', 'kuruma', 3, 24, 54535),
(547494, 'Asbar', 'Pizza', 1, 5, 1),
(547494, 'Asbar', 'Fruits', 1, 45.35, 12),
(547494, 'Asbar', 'Sweeping', 1, 15, 2),
(547494, 'Asbar', 'kuruma', 3, 24, 54535),
(2147483647, 'Asbar', 'Pizza', 1, 5, 1),
(2147483647, 'Asbar', 'Fruits', 1, 45.35, 12),
(547496080, 'Asbar', 'Sweeping', 1, 15, 2),
(2147483647, 'Asbar', 'kuruma', 3, 24, 54535),
(2147483647, 'Asbar', 'Pizza', 1, 5, 1),
(2147483647, 'Asbar', 'Fruits', 1, 45.35, 12),
(2147483647, 'Asbar', 'Sweeping', 1, 15, 2),
(2147483647, 'Asbar', 'kuruma', 3, 24, 54535),
(547496, 'Asbar', 'Pizza', 1, 5, 1),
(547496, 'Asbar', 'Fruits', 1, 45.35, 12),
(547496, 'Asbar', 'Sweeping', 1, 15, 2),
(547496, 'Asbar', 'kuruma', 3, 24, 54535),
(2147483647, 'Asbar', 'Pizza', 1, 5, 1),
(2147483647, 'Asbar', 'Fruits', 1, 45.35, 12),
(2147483647, 'Asbar', 'Sweeping', 1, 15, 2),
(2147483647, 'Asbar', 'kuruma', 3, 24, 54535),
(54749, 'Asbar', 'Pizza', 1, 5, 1),
(54749, 'Asbar', 'Fruits', 1, 45.35, 12),
(54749, 'Asbar', 'Sweeping', 1, 15, 2),
(54749, 'Asbar', 'kuruma', 3, 24, 54535),
(5474, 'Asbar', 'Pizza', 1, 5, 1),
(5474, 'Asbar', 'Fruits', 1, 45.35, 12),
(5474, 'Asbar', 'Sweeping', 1, 15, 2),
(5474, 'Asbar', 'kuruma', 3, 24, 54535),
(5474, 'Asbar', 'Pizza', 1, 5, 1),
(5474, 'Asbar', 'Fruits', 1, 45.35, 12),
(5474, 'Asbar', 'Sweeping', 1, 15, 2),
(5474, 'Asbar', 'kuruma', 3, 24, 54535);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `Id` int(15) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `service_type` varchar(45) NOT NULL,
  `quantity` int(10) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Merchant_email` varchar(60) NOT NULL,
  `Merchant_phn` int(15) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `product_code` varchar(260) NOT NULL,
  `service_type` varchar(260) NOT NULL,
  `merchant_phn` int(15) NOT NULL,
  `merchant_email` varchar(45) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `type` varchar(25) NOT NULL,
  `date` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(450) NOT NULL,
  `product_desc` varchar(300) NOT NULL,
  PRIMARY KEY (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`product_code`, `service_type`, `merchant_phn`, `merchant_email`, `product_name`, `product_img_name`, `type`, `date`, `price`, `description`, `product_desc`) VALUES
('1', 'food', 721436789, 'asbar.creatre@gmail.com', 'Pizza', 'download.jpg', 'deliver', '03/10/2014', 5, '2 Extra Larges with 2 Toppings', ''),
('12', 'grocery', 2147483647, 'thissimyemai@yahoo.com', 'Fruits', 'download(1).jpg', 'deliver', '03/04/2013', 45.35, '', ''),
('2', 'Home service', 45789145, 'jlsjfo@dgmi.com', 'Sweeping', 'images.jpg', 'book', '02/12/2004', 15, '', ''),
('3', 'food', 72143569, 'ksk@F.COM', 'Apple', 'download2.jpg', 'deliver', '03/04/2013', 14, '', ''),
('54535ea5cb0a7', 'food', 2147483647, 'slfjlhousfal@gmail.com', 'Chicken', 'buffalo_chicken_leg_600.jpg', 'deliver', '03/04/2013', 2, '', ''),
('54535fd4cae85', 'food', 78124545, 'adjfklsj@gmail.com', 'kuruma', 'download.jpg', 'deliver', '03/04/2013', 8, 'Spicy sauce, Chicken & Onions ', ''),
('5455c4c54859a', 'Home service', 78175048, 'mysqli@gmail.com', 'Cleaning', 'images(1).jpg', 'book', '02/05/2014', 45, '', ''),
('5455c4f57d57f', 'Home service', 45780445, 'hellow$sow@gmail.com', 'Painting', 'download(7).jpg', 'book', '03/04/2013', 78.36, '', ''),
('54563cf49ad9d', 'Home service', 784597827, 'uistomao@gmail.com', 'welding', 'download11.jpg', 'book', '01/01/2014', 78.35, '', ''),
('5456431d55af8', 'food', 725789524, 'youandme@gmail.com', 'Coke', 'down.png', 'deliver', '03/04/2013', 15, '', ''),
('54574d4aad15c', 'Home service', 2147483647, 'houser@gmail.com', 'Mechanic service', 'home-service.jpg', 'book', '03/04/2013', 45.32, '', ''),
('54574e867fa83', 'grocery', 787045607, 'youandme@gmail.com', 'Simple grocery', 'save.jpg', 'deliver', '03/04/2013', 789.235, '', ''),
('5457505172209', 'cloth', 2147483647, 'youandmew@gmail.com', 'Kid', 'kid.jpg', 'deliver', '03/04/2013', 78.36, '', ''),
('545751919ea16', 'cloth', 2147483647, 'ytowtyyou@gmail.com', 'Pink Clothes', 'pink-clothes.jpg', 'deliver', '', 25.36, '', ''),
('545751e27d8a0', 'cloth', 78956453, 'hellow@mygmail.com', 'Trousers', 'images(14).jpg', 'deliver', '03/04/2013', 78.36, '', ''),
('5789', 'cloth', 721436789, 'ahb@gmail.com', 'skirt', 'download4.jpg', 'deliver', '03/04/2013', 16, '', ''),
('789', 'grocery', 721465498, 'ashhi@gmail.com', 'Beans', 'images2.jpg', 'deliver', '03/04/2013', 17, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE IF NOT EXISTS `ship` (
  `id` int(90) NOT NULL,
  `coun` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `addrs1` varchar(90) NOT NULL,
  `addrs2` varchar(90) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(45) NOT NULL,
  `zip` varchar(45) NOT NULL,
  `phn` int(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`id`, `coun`, `name`, `addrs1`, `addrs2`, `city`, `state`, `zip`, `phn`) VALUES
(0, 'sri lanka', 'Asbar', 'house', 'house1', 'rahtna', 'myhou', '7760', 721435989),
(1, 'fdslj', 'jljl', 'jlj', 'jlj', 'jlkjl', 'nlkl', 'jlllsf', 4210),
(2, 'fdslj', 'jljl', 'jlj', 'jlj', 'jlkjl', 'nlkl', 'jlllsf', 4210),
(3, 'Abkhazia', 'jljl', 'jlj', 'jlj', 'jlkjl', 'nlkl', 'jlllsf', 4210),
(4, 'Abkhazia', 'sjf', 'jlj', 'jlj', 'jlkjl', 'nlkl', 'jlllsf', 4210),
(5, 'Abkhazia', 'sjf', 'jl', 'jlj', 'jlkjl', 'nlkl', 'jlllsf', 4210),
(6, 'Abkhazia', 'sjf', 'jl', 'jljl', 'jlkjl', 'nlkl', 'jlllsf', 4210),
(7, 'Abkhazia', 'sjf', 'jl', 'jljl', 'jl', 'nlkl', 'jlllsf', 4210),
(8, 'Abkhazia', 'sjf', 'jl', 'jljl', 'jl', 'jl', 'jlllsf', 4210),
(9, 'Abkhazia', 'sjf', 'jl', 'jljl', 'jl', 'jl', 'j', 4210),
(10, 'Abkhazia', 'sjf', 'jl', 'jljl', 'jl', 'jl', 'j', 4123),
(5474, 'Abkhazia', 'sflj', 'jlj', 'ljlj', 'jl', 'jljl', 'jl', 4653),
(54742, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(54743, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(54744, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(54746, 'Abkhazia', 'sfdjkl', 'jklj', 'jlk', 'jlkj', 'ljlk', 'j', 0),
(54747, 'Abkhazia', 'ghjm', 'yghbmn', 'gkjb,', 'hjnm', 'hjnm', '452', 532),
(54748, 'Abkhazia', 'sjfdl', 'jklj', 'jlk', 'lj', 'ljl', 'jlj', 4521),
(54749, 'Abkhazia', 'asbar', 'shjfosl', 'jlsf', 'jlsfs', 'ljflsf', 'jflsjf', 0),
(547425, '', '', '', '', '', '', '', 0),
(547427, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(547429, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(547430, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547431, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547432, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547434, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547435, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547436, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547438, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547439, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547450, 'Abkhazia', 'jkl', 'jkl', 'jlkj', 'jl', 'jlj', 'jl', 0),
(547456, 'Abkhazia', 'hl', 'jlk', 'jlj', 'ljl', 'jl', 'jl', 0),
(547458, 'Abkhazia', 'sfdjkl', 'jklj', 'jlk', 'jlkj', 'ljlk', 'j', 0),
(547471, 'Abkhazia', 'ghjm', 'yghbmn', 'gkjb,', 'hjnm', 'hjnm', '452', 532),
(547472, 'Abkhazia', 'ghjm', 'yghbmn', 'gkjb,', 'hjnm', 'hjnm', '452', 532),
(547494, 'Abkhazia', 'sjfdl', 'jklj', 'jlk', 'lj', 'ljl', 'jlj', 4521),
(547496, 'lk', 'Asbar', 'jkljl', 'jlk', 'jlk', 'jkl', 'jkl', 0),
(5474272, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(5474274, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(5474286, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(5474287, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(5474289, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(5474311, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474324, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474328, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474336, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474344, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474347, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474353, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474355, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474356, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474357, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474388, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474394, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474397, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474399, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(5474508, 'Abkhazia', 'jkl', 'jkl', 'jlkj', 'jl', 'jlj', 'jl', 0),
(5474916, 'Abkhazia', 'sjfdl', 'jklj', 'jlk', 'lj', 'ljl', 'jlj', 4521),
(5474944, 'Abkhazia', 'sjfdl', 'jklj', 'jlk', 'lj', 'ljl', 'jlj', 4521),
(5474946, 'Abkhazia', 'sjfdl', 'jklj', 'jlk', 'lj', 'ljl', 'jlj', 4521),
(5474948, 'Abkhazia', 'sjfdl', 'jklj', 'jlk', 'lj', 'ljl', 'jlj', 4521),
(54742271, 'Abkhazia', 'sjf', 'jl', 'jljl', 'jl', 'jl', 'j', 4123),
(54742840, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(54742984, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(54743100, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(54743211, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(54743224, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(54743310, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(54743319, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(54743551, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(54743989, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(54745010, 'Abkhazia', 'jkl', 'jkl', 'jlkj', 'jl', 'jlj', 'jl', 0),
(54745042, 'Abkhazia', 'jkl', 'jkl', 'jlkj', 'jl', 'jlj', 'jl', 0),
(54745053, 'Abkhazia', 'jkl', 'jkl', 'jlkj', 'jl', 'jlj', 'jl', 0),
(54745109, 'Abkhazia', 'hl', 'jlk', 'jlj', 'ljl', 'jl', 'jl', 0),
(54745720, 'Abkhazia', 'hl', 'jlk', 'jlj', 'ljl', 'jl', 'jl', 0),
(547425000, 'Abkhazia', 'jkl', 'jkj', 'jl', 'j', 'lj', 'jl', 21),
(547427193, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353),
(547431417, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547433353, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547434967, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547435579, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547436940, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547439142, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547440000, 'Abkhazia', 'Isuru', 'sfj', 'jl', 'jl', 'jjlk', 'ljl', 43252),
(547496047, 'Abkhazia', 'jhl', 'jkl', 'kj', 'kj', 'kj', 'lkj', 4521),
(2147483647, 'Abkhazia', 'asjfdkl', 'jl', 'lj', 'ljllj', 'jl', '456', 353);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `Name` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`Name`, `Email`, `Password`) VALUES
('Asbar', 'asbar.create@gmail.com', '45gh'),
('bhj', 'ghm', 'fghq'),
('vghj', 'gh', 'fgh'),
('vghj', 'gh', 'fgh'),
('Abar', '789', 'ahio@gmail.com'),
('Abar', '789', 'ahio@gmail.com'),
('Asli', '045', 'mohommadasbarali@gmail.com'),
('Asli', '045', 'mohommadasbarali@gmail.com'),
('Asli', '078', 'mohommadasbarali@gmail.com'),
('Asbars', '078', 'asbar@gmail.com'),
('first', 'nowimat@gmail.com', '789'),
('Asbar', 'asfjlsfjl', 'hh'),
('asbar', 'asbar.create@gmail.com', '789'),
('sjfkl', 'asbar@gmai.c', ''),
('sjfkl', 'asbar@gmai.c', ''),
('Asbarr', 'house@gmail', ''),
('sfsf', 'jlsfj@JKLSJF.COM', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
