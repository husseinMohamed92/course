-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 08:42 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(80) NOT NULL,
  `psalary` varchar(80) NOT NULL,
  `pphoto` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `psalary`, `pphoto`) VALUES
(1, 'cola', '60', '22.jpg'),
(2, 'suger', '70', '1.jpg'),
(3, 'ice', '60', '2.jpg'),
(4, 'milk', '70', '3.jpg'),
(5, 'pop', '30', '4.jpg'),
(6, 'pfd', '50', '5.jpeg'),
(7, 'pkf', '68', '6.jpg'),
(8, 'da', '98', '7.jpg'),
(9, 'adaf', '99', '8.jpg'),
(10, 'aaad', '44', '9.jpg'),
(11, 'fgwe', '999', '10.jpg'),
(12, 'dah', '91', '11.jpeg'),
(13, 'dfq', '964', '12.jpg'),
(14, 'aaaaaa', '9966', '13.jpg'),
(15, 'dddddd', '65', '14.jpg'),
(16, 'sfdf', '55', '15.jpg'),
(17, 'sfsssss', '66', '16.jpg'),
(18, 'sfa', '55', '17.jpg'),
(19, 'fff', '77', '18.png'),
(20, 'ssssss', '25', '19.jpg'),
(21, 'kjf', '656', '20.jpg'),
(22, 'poi', '45', '21.jpg'),
(23, 'ghk', '663', '22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `degree` tinyint(4) NOT NULL DEFAULT '0',
  `verified` tinyint(4) NOT NULL DEFAULT '0',
  `changedby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `photo`, `active`, `type`, `degree`, `verified`, `changedby`) VALUES
(1, 'admin', 'hussein mohamed', 'f6fdffe48c908deb0f4c3bd36c032e72', 'admin@admin.com', '', 1, 2, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
