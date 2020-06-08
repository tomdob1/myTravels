-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2020 at 05:04 AM
-- Server version: 5.6.23-log
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_itec30151_n0699098`
--

-- --------------------------------------------------------

--
-- Table structure for table `rainfall`
--

CREATE TABLE `rainfall` (
  `City` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `January` decimal(10,1) NOT NULL,
  `February` decimal(10,1) NOT NULL,
  `March` decimal(10,1) NOT NULL,
  `April` decimal(10,1) NOT NULL,
  `May` decimal(10,1) NOT NULL,
  `June` decimal(10,1) NOT NULL,
  `July` decimal(10,1) NOT NULL,
  `August` decimal(10,1) NOT NULL,
  `September` decimal(10,1) NOT NULL,
  `October` decimal(10,1) NOT NULL,
  `November` decimal(10,1) NOT NULL,
  `December` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rainfall`
--

INSERT INTO `rainfall` (`City`, `Country`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`) VALUES
('Bangkok', 'Thailand', '27.0', '30.9', '49.3', '86.5', '202.4', '185.4', '220.7', '185.4', '311.3', '250.1', '48.8', '14.0'),
('Barcelona', 'Spain', '8.2', '7.9', '8.8', '15.6', '12.5', '6.1', '2.1', '12.6', '22.9', '26.4', '12.4', '9.2'),
('Chiang Mai', 'Thailand', '0.0', '0.0', '1.4', '14.7', '78.6', '59.7', '66.5', '107.8', '107.2', '41.7', '6.2', '0.4'),
('Madrid', 'Spain', '15.3', '12.6', '10.4', '20.7', '21.3', '5.1', '0.6', '0.9', '7.5', '31.4', '24.5', '20.1'),
('Melbourne', 'Australia', '35.4', '36.9', '40.8', '41.7', '48.9', '36.8', '44.3', '37.6', '43.7', '35.3', '62.6', '50.8'),
('Perth', 'Australia', '0.6', '1.7', '1.8', '8.4', '44.5', '78.3', '93.1', '68.1', '43.8', '15.0', '8.0', '1.5'),
('Phuket', 'Thailand', '47.5', '24.6', '96.9', '164.5', '216.6', '196.4', '204.6', '202.6', '280.7', '233.0', '170.9', '87.3'),
('Seville', 'Spain', '15.9', '13.9', '11.4', '21.9', '7.2', '0.3', '0.0', '0.1', '6.4', '30.6', '21.9', '27.1'),
('Sydney', 'Australia', '75.9', '122.6', '95.6', '123.1', '74.9', '163.4', '81.2', '63.7', '54.7', '52.8', '95.9', '71.0');

-- --------------------------------------------------------

--
-- Table structure for table `temperaturemax`
--

CREATE TABLE `temperaturemax` (
  `City` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `January` int(10) NOT NULL,
  `February` int(10) NOT NULL,
  `March` int(10) NOT NULL,
  `April` int(10) NOT NULL,
  `May` int(10) NOT NULL,
  `June` int(10) NOT NULL,
  `July` int(10) NOT NULL,
  `August` int(10) NOT NULL,
  `September` int(10) NOT NULL,
  `October` int(10) NOT NULL,
  `November` int(10) NOT NULL,
  `December` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `temperaturemax`
--

INSERT INTO `temperaturemax` (`City`, `Country`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`) VALUES
('Bangkok', 'Thailand', 33, 34, 35, 36, 35, 34, 34, 34, 34, 33, 34, 33),
('Barcelona', 'Spain', 14, 14, 16, 18, 22, 25, 28, 29, 26, 22, 18, 14),
('Chiang Mai', 'Thailand', 30, 33, 35, 37, 34, 33, 32, 32, 32, 32, 31, 29),
('Madrid', 'Spain', 10, 12, 16, 18, 23, 28, 32, 32, 26, 19, 14, 10),
('Melbourne', 'Australia', 28, 27, 25, 21, 18, 15, 15, 16, 19, 22, 24, 26),
('Perth', 'Australia', 32, 32, 30, 26, 22, 19, 18, 19, 20, 23, 26, 29),
('Phuket', 'Thailand', 33, 34, 34, 34, 33, 33, 32, 32, 32, 32, 32, 32),
('Seville', 'Spain', 16, 16, 22, 24, 28, 33, 37, 36, 32, 26, 21, 17),
('Sydney', 'Australia', 27, 27, 26, 23, 21, 18, 18, 19, 22, 24, 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `temperaturemin`
--

CREATE TABLE `temperaturemin` (
  `City` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `January` int(10) NOT NULL,
  `February` int(10) NOT NULL,
  `March` int(10) NOT NULL,
  `April` int(10) NOT NULL,
  `May` int(10) NOT NULL,
  `June` int(10) NOT NULL,
  `July` int(10) NOT NULL,
  `August` int(10) NOT NULL,
  `September` int(10) NOT NULL,
  `October` int(10) NOT NULL,
  `November` int(10) NOT NULL,
  `December` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `temperaturemin`
--

INSERT INTO `temperaturemin` (`City`, `Country`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`) VALUES
('Bangkok', 'Thailand', 23, 25, 26, 27, 27, 26, 26, 26, 25, 25, 25, 23),
('Barcelona', 'Spain', 5, 6, 8, 10, 14, 17, 20, 21, 18, 14, 9, 6),
('Chiang Mai', 'Thailand', 15, 16, 20, 23, 24, 24, 24, 24, 24, 23, 20, 16),
('Madrid', 'Spain', 1, 2, 5, 7, 10, 15, 18, 18, 14, 9, 5, 2),
('Melbourne', 'Australia', 16, 16, 14, 11, 9, 7, 7, 7, 8, 10, 12, 13),
('Perth', 'Australia', 17, 18, 16, 13, 10, 9, 8, 8, 9, 10, 13, 15),
('Phuket', 'Thailand', 25, 25, 26, 26, 26, 26, 26, 25, 25, 25, 25, 25),
('Seville', 'Spain', 6, 7, 9, 11, 14, 18, 20, 20, 18, 15, 10, 7),
('Sydney', 'Australia', 20, 20, 18, 15, 12, 10, 8, 9, 12, 14, 17, 18);

-- --------------------------------------------------------

--
-- Table structure for table `tourism`
--

CREATE TABLE `tourism` (
  `Country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `January` decimal(10,0) NOT NULL,
  `February` decimal(10,0) NOT NULL,
  `March` decimal(10,0) NOT NULL,
  `April` decimal(10,0) NOT NULL,
  `May` decimal(10,0) NOT NULL,
  `June` decimal(10,0) NOT NULL,
  `July` decimal(10,0) NOT NULL,
  `August` decimal(10,0) NOT NULL,
  `September` decimal(10,0) NOT NULL,
  `October` decimal(10,0) NOT NULL,
  `November` decimal(10,0) NOT NULL,
  `December` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tourism`
--

INSERT INTO `tourism` (`Country`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`) VALUES
('Australia', '733000', '933000', '840000', '700000', '670000', '660000', '790000', '788000', '699000', '780000', '810000', '1077000'),
('Spain', '4196939', '4380126', '5645747', '7169675', '7952788', '8828499', '9887047', '10121985', '8914761', '7624486', '466345', '4314612'),
('Thailand', '3720000', '3590000', '3490000', '3200000', '2720000', '3020000', '3360000', '3430000', '2900000', '3010000', '3380000', '3920000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rainfall`
--
ALTER TABLE `rainfall`
  ADD PRIMARY KEY (`City`);

--
-- Indexes for table `temperaturemax`
--
ALTER TABLE `temperaturemax`
  ADD PRIMARY KEY (`City`);

--
-- Indexes for table `temperaturemin`
--
ALTER TABLE `temperaturemin`
  ADD PRIMARY KEY (`City`);

--
-- Indexes for table `tourism`
--
ALTER TABLE `tourism`
  ADD PRIMARY KEY (`Country`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
