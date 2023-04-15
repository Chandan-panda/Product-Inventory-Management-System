-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2023 at 08:09 AM
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
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `desc_p` varchar(2048) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `name`, `price`, `desc_p`, `image`) VALUES
(4, 'HR coil', 398000, 'Used in LPG cylinders, automobile, railway wagon chasis and all types of high strength needs.', 'images/hrcoil.jpg'),
(5, 'Plates', 92500, 'Used in Pressure vessels, ship building and engineering structures', 'images/plate.jpg'),
(6, 'CR Sheets & Coils', 433000, 'Used in Steel furniture, white goods like refrigerators, washing machines, automobile bodies, railway coach panelling, drums, barrels, deep drawing and extra deep drawing, etc.', 'images/crsheet.jpg'),
(7, 'Galvanised Sheets', 160000, 'Used in Roofing, panelling, industrial sheeting, air conditioner ducting and structural', 'images/Galvanised_Sheets.jpg'),
(8, 'Spiral Weld pipes', 55000, 'Used in High pressure transportation of crude oil, natural gas and slurry transportation, water supply, sewage disposals, grain silos, civil engineering pilings, etc.', 'images/srpipe.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
