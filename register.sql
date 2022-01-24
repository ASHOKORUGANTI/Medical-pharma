-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 06:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `homepageproducts`
--

CREATE TABLE `homepageproducts` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepageproducts`
--

INSERT INTO `homepageproducts` (`id`, `name`, `image`, `price`) VALUES
(1, 'Dolo 650mg Tablet 15\'S', '1.jpg', 30.01),
(2, 'V Cough D Tablet', '2.jpg', 35.22),
(3, 'Benadryl Cough Syrup', '3.jpg', 92.51),
(4, 'N-95 Face Mask', '4.jpg', 40.23);

-- --------------------------------------------------------

--
-- Table structure for table `medicalpage`
--

CREATE TABLE `medicalpage` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicalpage`
--

INSERT INTO `medicalpage` (`id`, `name`, `image`, `price`) VALUES
(1, 'Dolo 650mg Tablet 15\'S', '1.jpg', 30.01),
(2, 'V Cough D Tablet', '2.jpg', 35.22),
(3, 'Benadryl Cough Syrup', '3.jpg', 92.51),
(4, 'Telma H 40mg Tablet 15\'S', 'medicalpage4.jpg', 193.6),
(5, 'Thyronorm 150mcg Tablet', 'medicalpage5.jpg', 165.95),
(6, 'Budecort 0.25mg', 'medicalpage6.jpg', 39.05),
(7, 'Dart Tablet (10 Tab)', 'medicalpage7.jpg', 30.15),
(8, 'Neopeptine Liquid 60 ml', 'medicalpage8.jpg', 112.9),
(9, 'Bevon Suspension', 'medicalpage9.jpg', 127.08),
(10, 'Ascoril LS Expectorant 100ml', 'medicalpage10.jpg', 86.4);

-- --------------------------------------------------------

--
-- Table structure for table `medicalproducts`
--

CREATE TABLE `medicalproducts` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicalproducts`
--

INSERT INTO `medicalproducts` (`id`, `name`, `image`, `price`) VALUES
(1, 'AccuSure Automatic Digital BP Monitor', 'medicalproduct2.jpg', 999.9),
(2, 'Choicemmed MD300C2 PulseOximeter', 'medicalproduct3.jpg', 1449),
(3, 'XHF2001 Digital Thermometer', 'medicalproduct4.jpg', 169.96),
(4, 'N-95 Face Mask', '4.jpg', 40.23),
(5, 'Savlon Gel Hand Sanitizer, 100 ml', 'medicalproduct5.jpg', 50.55),
(6, 'AmbiTech NC-11Compressor Nebulizer Machine', 'medicalproduct6.jpg', 1899),
(7, 'RCSP machine Steam Vaporizer 3 in 1 Vaporiser', 'medicalproduct7.jpg', 399),
(8, 'Budecort 100 Inhaler', 'medicalproduct8.jpg', 282.2),
(9, 'Sterilized Personal Protective Equipment Kit', 'medicalproduct9.jpg', 1300.99),
(10, '299 Pieces All-Purpose First Aid Emergency Kit', 'medicalproduct10.jpg', 999.99);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dateofbirth` varchar(13) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `dateofbirth`, `gender`, `username`, `email`, `password`, `confirmpassword`) VALUES
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('Oruganti', 'Ashok', '2001-07-25', 'Male', 'oashok', 'aoruganti29@gmail.com', 'ashok098', 'ashok098'),
('Chakradhar', 'vaddireddy', '2001-07-13', 'Male', 'chakri', 'chakri@hmail.com', 'chakri123', 'chakri123'),
('Oruganti', 'Ashok', '2001-07-25', 'Male', 'oashok', 'aoruganti29@gmail.com', 'ashok098', 'ashok098'),
('deepak', 'G', '2000-03-25', 'male', 'deepakg', 'deepak@gmail.com', 'deepak123', 'deepak123'),
('sai', 'ram', '2018-06-06', 'Male', 'sairam1', 'sairam@yahoo.com', 'sairam890', 'sairam890'),
('O', 'Sujatha', '1964-08-20', 'Femal', 'sujatha12', 'sujatha@gmail.com', 'athajus', 'athajus'),
('Yashaswi', 'Daram', '2000-10-30', 'Male', 'ydaram', 'yashaswidaram@gmail.com', 'yashaswi123', 'yashaswi123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `homepageproducts`
--
ALTER TABLE `homepageproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalpage`
--
ALTER TABLE `medicalpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalproducts`
--
ALTER TABLE `medicalproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicalpage`
--
ALTER TABLE `medicalpage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medicalproducts`
--
ALTER TABLE `medicalproducts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
