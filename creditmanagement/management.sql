-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 01:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_data`
--

CREATE TABLE `transaction_data` (
  `id` int(10) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `receiver` varchar(200) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_data`
--

INSERT INTO `transaction_data` (`id`, `sender`, `receiver`, `credits`) VALUES
(1, 'shweta', 'mitesh', 100),
(2, 'A', 'mitesh', 100),
(3, 'pratibha', 'shweta', 200),
(4, 'bhagyashri', 'mitesh', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `credit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `email`, `credit`) VALUES
(1, 'A', 'abcd@gmail.com', 700),
(2, 'Shweta', 'shweta12@gmail.com', 2900),
(3, 'Mitesh', 'mitesh13@gmail.com', 5100),
(4, 'Pratibha', 'pratibha182@gmail.com', 9800),
(5, 'Ravindra', 'ravindra1806@gmail.com', 2000),
(6, 'bhagyashri', 'bhagyashri17@gmail.com', 14900),
(7, 'Mahendra', 'mahi02@gmail.com', 30000),
(8, 'Reshma', 'reshma29@gmail.com', 3000),
(9, 'Kajal patil', 'Kajalkajal251@gmail.com', 60000),
(10, 'Shanaya', 'shanaya2016@gmail.com', 12000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_data`
--
ALTER TABLE `transaction_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_data`
--
ALTER TABLE `transaction_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
