-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 03:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'home', 'home@gmail.com', '123', ''),
(2, 'home', 'yogeshakthi11@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(3, 'anna', 'anna@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(4, 'home', 'annalakshmi@gmail.com', '202cb962ac59075b964b07152d234b70', 'IMG-20200602-WA0028.jpg'),
(5, 'suger', 'suger@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'IMG_20220327_203322-01.jpeg'),
(6, 'Annalakshmi', 'annala@gmail.com', '92daa86ad43a42f28f4bf58e94667c95', 'IMG_20220327_203322-01.jpeg'),
(7, 'anna', 'home@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'IMG_20220327_203322-01.jpeg'),
(8, 'sandy', 'sandy@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'IMG_20220125_171544.jpg'),
(9, 'suger', 'suger@gmail.com', '202cb962ac59075b964b07152d234b70', 'IMG_20220327_203322-01.jpeg'),
(10, 'bala', 'bala@gmail.com', '92daa86ad43a42f28f4bf58e94667c95', 'IMG_20220327_203322-01.jpeg'),
(0, 'Annalakshmi', 'alakshmi012@gmail.com', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'home', 'home@gmail.com', '123', ''),
(2, 'home', 'yogeshakthi11@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(3, 'anna', 'anna@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(4, 'home', 'annalakshmi@gmail.com', '202cb962ac59075b964b07152d234b70', 'IMG-20200602-WA0028.jpg'),
(5, 'suger', 'suger@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'IMG_20220327_203322-01.jpeg'),
(6, 'Annalakshmi', 'annala@gmail.com', '92daa86ad43a42f28f4bf58e94667c95', 'IMG_20220327_203322-01.jpeg'),
(7, 'anna', 'home@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'IMG_20220327_203322-01.jpeg'),
(8, 'sandy', 'sandy@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'IMG_20220125_171544.jpg'),
(9, 'suger', 'suger@gmail.com', '202cb962ac59075b964b07152d234b70', 'IMG_20220327_203322-01.jpeg'),
(10, 'bala', 'bala@gmail.com', '92daa86ad43a42f28f4bf58e94667c95', 'IMG_20220327_203322-01.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
