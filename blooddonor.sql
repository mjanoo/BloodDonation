-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 08:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonor`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(100) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `h_email` varchar(100) NOT NULL,
  `h_pnumber` varchar(100) NOT NULL,
  `h_county` varchar(100) NOT NULL,
  `h_location` varchar(100) NOT NULL,
  `h_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `h_name`, `h_email`, `h_pnumber`, `h_county`, `h_location`, `h_password`) VALUES
(2, 'Kenyatta National Hospital', 'knh@go.ke', '+254020134567', 'Kakamega', 'Kikuyu', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Aga Khan Hospital', 'aga@g0.ke', '020555443', 'Nairobi City', 'Parklands', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pnumber`, `county`, `location`, `bloodgroup`, `password`) VALUES
(2, 'cate', 'cate@gmail.com', '0746330777', 'kitui', 'kinoo', '0-', 'a5d9eabe4ecbacddcebe0a840e710670'),
(3, 'James', 'makau007@gmail.com', '0711234567', 'Nairobi', 'kinoo', '0+', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Janet', 'janet@gmail.com', '0713605562', 'nairobi', 'kk', 'AB-', 'c6a8ca30a82d78141ea49e348451732c'),
(5, 'James Makau', 'makaujames@gmail.com', '0712345678', 'Kericho', 'mathare', 'A+', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
