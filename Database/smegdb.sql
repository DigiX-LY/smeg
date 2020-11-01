-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 12:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smegdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(2, 'myousef', 'yousef');

-- --------------------------------------------------------

--
-- Table structure for table `aes_lines`
--

CREATE TABLE `aes_lines` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aes_lines`
--

INSERT INTO `aes_lines` (`id`, `name`) VALUES
(1122, 'ÙƒÙˆØ±ØªÙŠÙ†Ø§'),
(1127, 'editable'),
(1130, 'ÙƒÙ„Ø§Ø³ÙŠÙƒØ§');

-- --------------------------------------------------------

--
-- Table structure for table `main_cat`
--

CREATE TABLE `main_cat` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_cat`
--

INSERT INTO `main_cat` (`id`, `name`) VALUES
(1, 'رئيسية'),
(2, 'صغيرة');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `line_id` int(20) NOT NULL,
  `sub_cat_id` int(20) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `main_cat_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sub_cat_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aes_lines`
--
ALTER TABLE `aes_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_cat`
--
ALTER TABLE `main_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `line_id_fk` (`line_id`),
  ADD KEY `sub_cat_id_fk` (`sub_cat_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `main_cats_id_fk` (`main_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aes_lines`
--
ALTER TABLE `aes_lines`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1131;

--
-- AUTO_INCREMENT for table `main_cat`
--
ALTER TABLE `main_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `sub_cat_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `sub_cat_id_fk` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_cat` (`sub_cat_id`);

--
-- Constraints for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD CONSTRAINT `main_cats_id_fk` FOREIGN KEY (`main_cat_id`) REFERENCES `main_cat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
