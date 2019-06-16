-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2019 at 10:11 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

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
(15, 'Crni Djordje', 1992, 6, 'Bosna i Hercegovina', 'slike/flase/crnidjordje.png', 5.5),
(16, 'Nektar', 1967, 6, 'Bosna i Hercegovina', 'slike/flase/nektar.png', 5),
(17, 'Becks', 1962, 3, 'Nemacka', 'slike/flase/becks.png', 5.2),
(18, 'Aguila', 1956, 3, 'Nemacka', 'slike/flase/aguila.png', 5.3),
(19, 'Stella Artois', 1922, 3, 'Belgija', 'slike/flase/stella.png', 4.8),
(20, 'Staropramen', 1888, 1, 'Srbija', 'slike/flase/staropramen.png', 5.5),
(21, 'Jelen', 1956, 1, 'Srbija', 'slike/flase/jelen.png', 4.9),
(22, 'Apatinsko', 1933, 1, 'Srbija', 'slike/flase/apatinsko.png', 5.2),
(23, 'Lowenbrau', 1383, 1, 'Srbija', 'slike/flase/lowenbrau.png', 5.1),
(24, 'Hoagaarden', 1445, 7, 'Crna Gora', 'slike/flase/hoagaarden.png', 4.9),
(25, 'Niksicko', 1934, 7, 'Crna Gora', 'slike/flase/niksicko.png', 5.3),
(26, 'Blue Moon', 1995, 7, 'Crna Gora', 'slike/flase/bluemoon.png', 9);

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
(1, 'Apatinska pivara', 'Srbija', 'Molson Coors'),
(3, 'Anheuse Busch InBev', 'Belgija', 'Carlos Brito'),
(6, 'BanjaluÄka pivara', 'Bosna i Hercegovina', 'Franz Pfanner'),
(7, 'Niksicka pivara', 'Crna Gora', 'Vuko Jankov KrivokapiÄ‡');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `proizvodjaci`
--
ALTER TABLE `proizvodjaci`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
