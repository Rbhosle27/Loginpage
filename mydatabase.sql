-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 09:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mobile`) VALUES
(1, 'Rushi', '$2y$10$jBxxmLtbxfFffAT8ZpceDO7BAH3pUWU1Iuprjr9ewGIS.Su2GEV/e', '9730399341'),
(2, 'testuser', '$2y$10$iI8i2Ddfv0oP9BDse5bSd.HLZrC5uU9szMSbo1Vzf7vsP7GLD2oXG', '9730365487'),
(4, 'av', '$2y$10$7W7.c.V.L2Afqf4mieDsb.w4GS.zDM3vj2UshS3Mbx7pU7WQ/kGzG', '9733236548'),
(5, 'Akash', '$2y$10$FVZD1ETYprvZ34iOOTO0COEF2YMN3WYkHRmzxjhEaGDaI6AD7XYEu', '8833236548'),
(7, 'Jaideep', '$2y$10$N6N2Z/QzGatEuHjl4wCCEOz8E/YjNiYTy4c6ehTWTpHTnuMVH9GWa', '8553236548'),
(9, 'tushars', '$2y$10$S8KsauT.IqygVB3xgZ3No.txA5eXeVJ1qFUviK0nAhjuWn/kbAxxG', '8756755677'),
(10, 'Rajesh', '$2y$10$lTcm.JTyNkoZrycILg0x6OaTaudU7FpKMiUfeBhXIuq6pMN2QyttK', '9993236548');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
