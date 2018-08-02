-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 12:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `favdrink`
--

CREATE TABLE `favdrink` (
  `nama` varchar(50) NOT NULL,
  `banyak` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favdrink`
--

INSERT INTO `favdrink` (`nama`, `banyak`) VALUES
('kopi bengkalis', 150),
('aneka jus', 142),
('lemon squash', 102),
('green paradise', 100),
('coklat oreo', 107);

-- --------------------------------------------------------

--
-- Table structure for table `favfood`
--

CREATE TABLE `favfood` (
  `nama` varchar(50) NOT NULL,
  `banyak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favfood`
--

INSERT INTO `favfood` (`nama`, `banyak`) VALUES
('Nasi goreng bengkalis', 105),
('Mi bengkalis', 130),
('Indomi goreng', 100),
('sempolet', 121),
('kwetiaw', 103);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
