-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2022 at 10:03 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_price` int(11) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `status`, `timestamps`, `product_price`, `product_quantity`) VALUES
(1, 'Iphone 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '1.jpg', 'Active', '2022-07-21 17:25:01', 3, 80),
(2, 'Iphone 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '2.jpg', 'Active', '2022-07-21 17:25:01', 2, 92),
(3, 'Iphone 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '3.jpg', 'Active', '2022-07-21 17:25:01', 8, 120),
(4, 'Iphone 4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '4.jpg', 'Active', '2022-07-21 17:25:01', 11, 182),
(5, 'Iphone 5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '5.jpg', 'Active', '2022-07-21 17:25:01', 13, 350),
(6, 'Iphone 6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '6.jpg', 'Active', '2022-07-21 17:25:01', 25, 182),
(7, 'Iphone 7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '7.jpg', 'Active', '2022-07-21 17:25:01', 1, 180),
(8, 'Iphone 8', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '8.jpg', 'Active', '2022-07-21 17:25:01', 5, 150),
(9, 'Iphone 9', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '9.jpg', 'Active', '2022-07-21 17:25:01', 6, 178),
(10, 'Iphone 10', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '10.jpg', 'Active', '2022-07-21 17:25:01', 4, 3840),
(11, 'Iphone 11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '11.jpg', 'Active', '2022-07-21 17:25:01', 7, 945),
(12, 'Iphone 12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '12.jpg', 'Active', '2022-07-21 17:25:01', 2, 680),
(13, 'Iphone 13', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '13jpg', 'Inactive', '2022-07-21 17:25:54', 3, 462),
(14, 'Iphone 14', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '14.jpg', 'Active', '2022-07-21 17:25:54', 8, 870),
(15, 'Iphone 15', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '15.jpg', 'Inactive', '2022-07-21 17:26:27', 9, 384),
(16, 'Iphone 16', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '16.jpg', 'Inactive', '2022-07-21 17:26:27', 12, 458);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `user_status` enum('Verified','Non-Verified') NOT NULL DEFAULT 'Non-Verified',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email_address`, `phone_number`, `user_status`, `created_at`) VALUES
(1, 'Jhon Smith', 'jhon@test.com', '46897897', 'Verified', '2022-07-21 17:15:31'),
(2, 'Mishal Shah', 'mishal@test.com', '8475985', 'Non-Verified', '2022-07-21 17:15:31'),
(3, 'Jhon Bible', 'jnbible@test.com', '46897797', 'Verified', '2022-07-21 17:16:10'),
(4, 'Mishal James', 'mshljam@test.com', '8475885', 'Non-Verified', '2022-07-21 17:16:10'),
(5, 'Baqar Shah', 'baqar@test.com', '78947451', 'Non-Verified', '2022-07-21 17:19:03'),
(6, 'Sohail Shah', 'sohail@test.com', '49874544', 'Non-Verified', '2022-07-21 17:19:03'),
(7, 'Sabir Shah', 'sabir@test.com', '4987456456456', 'Verified', '2022-07-21 17:19:03'),
(8, 'Jamal Shah', 'jamal@test.com', '8974564566', 'Non-Verified', '2022-07-21 17:19:03'),
(9, 'Akbar shah', 'akbar@test.com', '9879489789', 'Non-Verified', '2022-07-21 17:19:03'),
(10, 'Rahmat Shah', 'rahmat@test.com', '564897564', 'Verified', '2022-07-21 17:19:03'),
(11, 'Jamal Shah', 'jamal@test.com', '564897789', 'Verified', '2022-07-21 17:19:03'),
(12, 'Shakeel Shah', 'shakeel@test.com', '654897879', 'Verified', '2022-07-21 17:19:03'),
(13, 'Akhtar Shah', 'akhtar@test.com', '6548975646', 'Verified', '2022-07-21 17:19:03'),
(14, 'Sardar Sohail', 'sardar@test.com', '564897899', 'Verified', '2022-07-21 17:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_products`
--

DROP TABLE IF EXISTS `user_products`;
CREATE TABLE IF NOT EXISTS `user_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_products`
--

INSERT INTO `user_products` (`id`, `user_id`, `product_id`, `product_price`) VALUES
(1, 1, 2, 5),
(2, 5, 3, 8),
(3, 1, 8, 19),
(4, 2, 9, 45),
(5, 2, 6, 15),
(6, 4, 7, 12),
(7, 3, 12, 25),
(8, 3, 8, 13),
(9, 5, 8, 18),
(10, 3, 8, 11),
(11, 5, 12, 23),
(12, 7, 9, 16),
(13, 6, 15, 22),
(14, 6, 8, 12),
(15, 6, 9, 13),
(16, 7, 9, 15),
(17, 9, 13, 24),
(18, 5, 9, 25),
(19, 8, 12, 45),
(20, 5, 9, 19),
(21, 2, 6, 13),
(22, 5, 9, 12),
(23, 4, 6, 18),
(24, 5, 2, 8),
(25, 9, 3, 17),
(26, 3, 14, 2),
(27, 4, 9, 14),
(28, 1, 12, 15),
(29, 3, 15, 18),
(30, 2, 14, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
