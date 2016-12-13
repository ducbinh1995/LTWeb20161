
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2016 at 03:01 PM
-- Server version: 10.0.22-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u710321599_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20)  NOT NULL,
  `password` varchar(20)  NOT NULL,
  `email` varchar(30)  NOT NULL,
  `phone` varchar(15)  NOT NULL,
  `profile_image` text  NOT NULL,
  `first_name` varchar(20)  NOT NULL,
  `last_name` varchar(20)  NOT NULL,
  PRIMARY KEY (`user_id`)
) ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`, `email`, `phone`, `profile_image`, `first_name`, `last_name`) VALUES
('lord', '123456', 'hai@mail.com', '0123456789', 'dsadsa', 'hai', 'do'),
('binh', '123456', 'binh@mail.com', '0234567891', 'qwe', 'binh', 'phi'),
('minh', '123456', 'minh@mail.com', '0345678912', 'asd', 'minh', 'nguyen'),
('tho', '123456', 'tho@mail.com', '0456789123', 'zxc', 'tho', 'do'),
('toan', '123456', 'toan@mail.com', '0567891234', 'ggg', 'toan', 'nguyen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text  NOT NULL,
  PRIMARY KEY (`category_id`)
);

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_name`) VALUES
('dien thoai'),
('may tinh');


CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30)  NOT NULL,
  `description` text  NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` text  NOT NULL,
  `owner_id` int(11) NOT NULL,
  `status` text  NOT NULL,
  PRIMARY KEY (`product_id`),
  FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  FOREIGN KEY (`owner_id`) REFERENCES `user`(`user_id`)
) ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_name`, `description`, `category_id`, `image`, `owner_id`, `status`) VALUES
('oppo F1s', 'selfie dep tu nhien', 1, 'dsdsad', 1, 'selling'),
('Mac XYZ', 'Mac everywhere', 2, 'gfgf', 2, 'selling');


CREATE TABLE IF NOT EXISTS `auction` (
  `auction_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP ,
  `image` text  NOT NULL,
  `current_price` int(11) NOT NULL,
  `step` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`auction_id`),
  FOREIGN KEY (`product_id`) REFERENCES `product`(`product_id`),
  FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`)
) ;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`user_id`, `product_id`, `image`, `current_price`, `step`, `start_date`, `end_date`) VALUES
(1, 1, 'asd', 2000, 100, '12/13/2016', '12/15/2016'),
(2, 2, 'asd', 20000, 1000, '12/13/2016', '12/15/2016');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `buy_date` date NOT NULL,
  PRIMARY KEY (`user_id`,`product_id`),
  FOREIGN KEY (`product_id`) REFERENCES `product`(`product_id`)
) ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `product_id`, `buy_date`) VALUES
(1, 1, '2016-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--



-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` timestamp DEFAULT CURRENT_TIMESTAMP,
  `description` text  NOT NULL,
  PRIMARY KEY (`message_id`),
  FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` ( `user_id`, `description`) VALUES
(1, 'dep trai vl');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--


