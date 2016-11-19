
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2016 at 03:27 PM
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
-- Table structure for table `users`
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
);




CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text  NOT NULL,
  PRIMARY KEY (`category_id`)
);




CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30)  NOT NULL,
  `description` text  NOT NULL,
  `price` int(11)  NOT NULL,
  `category_id` int(11)  NOT NULL,
  `step_price` int(11)  NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `rule` text  NOT NULL,
  `image` text  NOT NULL,
  `owner_id` int(11) NOT NULL,
  `max_price` int(11) NOT NULL,
  `status` text  NOT NULL,
  PRIMARY KEY (`product_id`),
  FOREIGN KEY (`category_id`) REFERENCES `category`(`category_id`),
  FOREIGN KEY (`owner_id`) REFERENCES `user`(`user_id`)
);




CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`message_id`),
  FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`)
);



CREATE TABLE IF NOT EXISTS `auction` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `auction_price` int(11) NOT NULL,
  PRIMARY KEY (`user_id`, `product_id`),
  FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`),
  FOREIGN KEY (`product_id`) REFERENCES `product`(`product_id`)
);


CREATE TABLE IF NOT EXISTS `cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `buy_date` date NOT NULL,
  PRIMARY KEY (`user_id`, `product_id`),
  FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`),
  FOREIGN Key (`product_id`) REFERENCES `product`(`product_id`)
);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
