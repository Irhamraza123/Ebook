-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 02:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject-irham`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(1, 4, 'bag', 0, 1, 'images (1).jpg'),
(2, 4, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C.Id` int(30) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C.Id`, `Name`, `Phone`, `Email`, `Username`, `Password`, `Address`, `City`) VALUES
(1, 'Irham', 2147483647, 'irhamraza110@yahoo.com', 'irham_110', '1245', 'north nazimabad', 'karachi'),
(2, 'Irham', 2147483647, 'irhamraza110@yahoo.com', 'irham_110', '1245', 'north nazimabad', 'karachi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_description` varchar(300) NOT NULL,
  `p_img` varchar(300) NOT NULL,
  `p_price` int(20) NOT NULL,
  `p_author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_description`, `p_img`, `p_price`, `p_author`) VALUES
(1, 'bag', 'this is a bag', 'comic-1.jpg', 4, 'hdfhd'),
(2, 'Batman', 'this is a novel', 'comic-1.jpg', 50, 'irham');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U.id` int(30) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U.id`, `Name`, `Phone`, `Email`, `Username`, `Password`, `Address`, `City`, `role`, `image`) VALUES
(1, 'sudais', 2147483647, 'saqib@gmail.com', 'sudais_110', 'admin', 'azizabad', 'karachi', 0, ''),
(3, 'Irham', 2147483647, 'irhamraza110@yahoo.com', 'irham_110', '2333', 'north nazimabad', 'karachi', 1, ''),
(4, 'Minaam', 2147483647, 'minaam@gmail.com', 'minaam_110', 'admin', 'north nazimabad block H', 'karachi', 0, ''),
(10, 'Irham Raza', 2147483647, 'irhamraza456@gmail.com', 'Irham_125', 'admin', 'north nazimabad', 'karachi', 0, ''),
(17, 'irham', 2147483647, 'irhamraza110@yahoo.com', 'irham', '1235', 'north nazimabad', 'karachi', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C.Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U.id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C.Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U.id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
