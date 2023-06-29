-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 10:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `forstore`
--

CREATE TABLE `forstore` (
  `email` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `sneaker` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `size` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forstore`
--

INSERT INTO `forstore` (`email`, `name`, `address`, `phone`, `sneaker`, `price`, `size`) VALUES
('user@gmail.com', 'User1', '123,ajsasfff, kjnehu, dsf', '2711615243', 'Sneaker 1', 1200, 7);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `srno` int(50) NOT NULL,
  `imgSrc` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`srno`, `imgSrc`, `title`, `description`, `price`) VALUES
(3, './img/1.jpg', 'Sneaker 1', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1200'),
(4, './img/2.jpg', 'Sneaker 2', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1100'),
(5, './img/3.jpg', 'Sneaker 3', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1050'),
(6, './img/4.jpg', 'Sneaker 4', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1000'),
(7, './img/5.jpg', 'Sneaker 5', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2000'),
(8, './img/6.jpg', 'Sneaker 6', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1200'),
(9, './img/7.jpg', 'Sneaker 7', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1080'),
(10, './img/8.jpg', 'Sneaker 8', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1300'),
(11, './img/9.jpg', 'Sneaker 9', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2000'),
(12, './img/10.jpg', 'Sneaker 10', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1580'),
(13, './img/11.jpg', 'Sneaker 11', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1120'),
(14, './img/12.jpg', 'Sneaker 12', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1110'),
(15, './img/13.jpg', 'Sneaker 13', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2200'),
(16, './img/14.jpg', 'Sneaker 14', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2500'),
(17, './img/15.jpg', 'Sneaker 15', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2400'),
(18, './img/16.jpg', 'Sneaker 16', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2120'),
(19, './img/17.jpg', 'Sneaker 17', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '3000'),
(20, './img/18.jpg', 'Sneaker 18', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '2220');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `name`, `phone`, `address`) VALUES
('user@gmail.com', '12345', 'User1', '2711615243', '123,ajsasfff, kjnehu, dsf'),
('user2@gmail.com', '12345', 'user 2', '2222122232', 'kjbsdb jnasdnnd sndsnds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `srno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
