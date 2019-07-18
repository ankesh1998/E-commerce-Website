-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 06:25 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon-EOS-100D', 25000),
(2, 'Fujifilm-x-T1', 25000),
(3, 'Nikon-D5300', 95000),
(4, 'Sony-alpha-a9', 80000),
(5, 'BVLGARI 142F', 5000),
(6, 'ROLEX 426M', 125000),
(7, 'MEGIR', 5000),
(8, 'JORD 342L', 6000),
(9, 'Parx plain shirt', 999),
(10, 'Spyker Printed shirt', 1199),
(11, 'Raymond Formal Shirt', 1999),
(12, 'T-M-Lewin shirt', 1499);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Ankesh', 'ankesh1998@outlook.com', 'ankesh1998', 9454192054, 'varanasi', 'vda colony chandmari'),
(2, 'Anshu', 'anshu.pandey15@yahoo.com', 'anshu.pandey', 7238813595, 'varanasi', 'E-183 vda colony chandmari'),
(3, 'Astha srivastava', 'asthasrivastava305@gmail.com', 'aishansh', 8858767057, 'varanasi', 'natiniyadai'),
(4, 'shashank', 'coolspatel@gmail.com', 'shashank', 8423663232, 'varanasi', 'manduahdih'),
(5, 'vipluv pathak', 'vipluvdestroyer@gmail.com', 'vipluv', 9346777777, 'varanasi', 'chowk'),
(6, 'rinku pandey', 'mr.anjalipandey@gmail.com', 'mr.anjali', 9120197846, 'varanasi', 'E-183 vda colony chandmari'),
(7, 'khushi', 'khushi@gmail.com', 'khushi', 9118563692, 'varanasi', 'E-183 vda colony chandmari'),
(8, 'ayush', 'ayushkvns@gmail.com', 'ayushkvns', 8299285949, 'varanasi', 'bhojubeer');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `users_id`, `item_id`, `status`) VALUES
(3, 1, 2, 'Confirmed'),
(5, 1, 2, 'Confirmed'),
(15, 8, 1, 'Confirmed'),
(18, 8, 8, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`users_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
