-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 10, 2022 at 09:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `imagepath` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `A_ID` int(11) NOT NULL,
  `ad` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `year_used` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `subbrand` varchar(250) NOT NULL,
  `cc` varchar(250) NOT NULL,
  `engine` varchar(250) NOT NULL,
  `tyre` varchar(250) NOT NULL,
  `license` varchar(250) NOT NULL,
  `asking_price` varchar(250) NOT NULL,
  `negosiate` varchar(250) NOT NULL,
  `your_location` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`A_ID`, `ad`, `model`, `year`, `year_used`, `company`, `subbrand`, `cc`, `engine`, `tyre`, `license`, `asking_price`, `negosiate`, `your_location`, `image`) VALUES
(4, '  bmw for sale', '  2008ii', '  2009', '', '  bmw', 'null', '2000', '  v8', '  mrfujhk', '  dhaka', '3000000  ', '3000000', 'dhaka', ''),
(5, ' jhdfdf', ' edvcdc', ' dvcv', '', ' dvdv', 'dvcdvd', 'dvsdv', ' sdferf', ' fdfv', ' dvdv ', 'vd ', '234454545', 'dvd', ''),
(6, ' tokdgknj', ' fdgs', ' 231676', '', ' cb', 'vbcx', 'vbv', ' vb', ' xv', ' vxbvc', 'vxb ', '', 'vcxbv', '');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE `product1` (
  `ad` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `year_used` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `subbrand` varchar(250) NOT NULL,
  `cc` varchar(250) NOT NULL,
  `engine` varchar(250) NOT NULL,
  `tyre` varchar(250) NOT NULL,
  `license` varchar(250) NOT NULL,
  `asking_price` varchar(250) NOT NULL,
  `negosiate` varchar(250) NOT NULL,
  `your_location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`ad`, `model`, `year`, `year_used`, `company`, `subbrand`, `cc`, `engine`, `tyre`, `license`, `asking_price`, `negosiate`, `your_location`) VALUES
('BMW', 'BMW 222', '2000', '12', 'BMW', 'BMW', '2000', 'Automatic,Manual', 'Petrol,Diese', 'Jessore ', '2300000', '44000000', 'Dhaka '),
('Honda City', 'Honda City', '1999', '11', 'Honda', 'Honda', '1233', 'Automatic,Manual', 'Petrol,Diesel,Hybrid', 'Khulna', '200000', '200000', 'khulna'),
('Hyundai Creta', 'Hyundai Creta', '2010', '9', 'Hyundai Creta', 'Hyundai Creta', '1300', 'Automatic,Manual', 'Petrol,Diesel', 'chuadanga', '4500000', '65000000', 'Dhaka'),
('Kia Seltos', 'Kia Seltos', '2010', '5', 'Kia Seltos', 'Kia Seltos', '1233', 'Automatic,Manual', 'Petrol,Diesel', 'Dhaka', '23456778', '76654432', 'Dhaka'),
('Tata Nexon EV', 'Hyundai Grand i10 Nios', '2011', '10', 'Hyundai Grand ', 'Compact SUV', '1200', 'Automatic', 'Electric', 'Dhaka , Bangladesh', '11000000', '2500000', 'Dhaka ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `R_ID` int(11) NOT NULL,
  `FULLNAME` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`R_ID`, `FULLNAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Md. Mahfuzur Rahmna', 'mdmahfuzur980@gmail.com', '12345'),
(5, 'Azasd', 'azad123@gmail.com', '54321'),
(7, 'Rasel', 'rasel123@gmail.com', '1234'),
(8, 'rasel ahmed', 'raselahmed@gmail.com', 'admin'),
(9, 'saiful ', 'saiful@gmail.com', 'saiful1'),
(10, 'Maliha', 'm1223@gmail.com', '12345'),
(12, 'hello', 'hello123@gmail.com', '12345'),
(13, 'sajib', 'sa2@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`ID`, `EMAIL`) VALUES
(1, 'mdmah123@gmail.com'),
(3, 'md23@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `product1`
--
ALTER TABLE `product1`
  ADD PRIMARY KEY (`ad`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
