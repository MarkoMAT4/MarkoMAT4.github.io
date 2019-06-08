-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 11:14 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pivara`
--

-- --------------------------------------------------------

--
-- Table structure for table `piva`
--

CREATE TABLE `piva` (
  `ID` int(11) NOT NULL,
  `naziv` text NOT NULL,
  `godina_porekla` int(11) NOT NULL,
  `proizvodjacID` int(11) NOT NULL,
  `drzava_tocenja` text NOT NULL,
  `urlSlike` text NOT NULL,
  `procenat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piva`
--

INSERT INTO `piva` (`ID`, `naziv`, `godina_porekla`, `proizvodjacID`, `drzava_tocenja`, `urlSlike`, `procenat`) VALUES
(1, 'Apatinsko pivo', 1823, 1, 'Srbija', 'slike/flase/zaj.png', 4.5),
(2, 'Stella Artois', 1900, 3, 'Srbija', 'slike/flase/stella.png', 5),
(3, 'Budweiser', 1829, 3, 'Srbija', 'slike/flase/bud.png', 3.8),
(4, 'leca iz bileca', 1400, 2, 'Djibuti', 'www.slika.com', 5.5),
(5, 'leca iz bileca', 1400, 2, 'Djibuti', 'www.slika.com', 5.5),
(6, 'Ziljovo pivo', 0, 3, 'Srbijaaaaa', 'https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80', 100),
(7, 'Federikino Pivo', 2019, 2, 'Nemacka', 'https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzEwNC84MzAvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzExMTA1NzIxNTkuanBn', 40);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjaci`
--

CREATE TABLE `proizvodjaci` (
  `ID` int(11) NOT NULL,
  `ime` text NOT NULL,
  `drzava` text NOT NULL,
  `osnivac` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodjaci`
--

INSERT INTO `proizvodjaci` (`ID`, `ime`, `drzava`, `osnivac`) VALUES
(1, 'Apatinska pivara', 'Srbija', 'Pero Apatinovic Apatin Alas'),
(2, 'Niksicnka pivara', 'Crna Gora', 'Mile Niksic'),
(3, 'Anheuser–Busch InBev', 'Belgija', 'Neki brat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `piva`
--
ALTER TABLE `piva`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `proizvodjaci`
--
ALTER TABLE `proizvodjaci`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `piva`
--
ALTER TABLE `piva`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `proizvodjaci`
--
ALTER TABLE `proizvodjaci`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
