-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 11:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkdate`
--

CREATE TABLE `checkdate` (
  `name` varchar(100) NOT NULL,
  `Hearing Date` date NOT NULL,
  `casenumber` varchar(100) NOT NULL,
  `courtname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkdate`
--

INSERT INTO `checkdate` (`name`, `Hearing Date`, `casenumber`, `courtname`) VALUES
('Jassim', '2021-02-03', '', ''),
('Sudeep', '2021-02-28', '', ''),
('HUIOP', '2021-03-18', '', ''),
('fghfg', '2021-02-18', 'dfgdf575/567', 'High court'),
('djfhgjdhfg', '2021-02-12', 'dfgdfg657/90', 'High court'),
('KIOLase', '2021-02-19', 'sdfsdf/567', 'HIgh cour'),
('Jonny', '2021-02-26', 'dsfsdf435/77', 'High court'),
('Johnny', '2021-02-17', 'wfsdf456435', 'Low court'),
('Sudheep', '1970-01-01', '', ''),
('Jack', '2021-03-19', 'dfgdfg56/90', 'Supreme court'),
('Yoyo', '2021-03-13', 'sdfsd56./909', 'Suptrem court'),
('Loso', '2021-04-09', 'sdfsdf45/89', 'Low court'),
('Losama', '2021-02-12', 'sdfd345643534', 'Super court'),
('Losama', '2021-02-12', 'sdfd345643534', 'Super court'),
('Songoo', '2021-02-11', 'sdfsdf 67/2020', 'Supreme court'),
('Jassim', '2021-02-27', 'cc45/6080', 'Low court');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `casenumber` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `fname` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `lname` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `courtname` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `datepicker` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`casenumber`, `fname`, `lname`, `courtname`, `datepicker`) VALUES
('123', 'Jass', 'Mohd', '23', '0000-00-00'),
('345', 'Jass', 'Mohd', '34', '0000-00-00'),
('cc no.1234/45', 'Jass', 'Mohd', '34', '0000-00-00'),
('cc no.14534/45', 'Sudheep', 'Kundi', '34', '0000-00-00'),
('cc no.1234/49', 'Mongol', 'DB', '34', '0000-00-00'),
('cc no.1234/49', 'Mongol', 'DB', '34', '0000-00-00'),
('cc no.1234/48', 'Jass', 'Mohd', 'high court', '0000-00-00'),
('cc no.1234/48', 'Jass', 'Mohd', 'high court', '0000-00-00'),
('cc no.1234/48', 'Sudheep', 'Mohd', 'high courtdfgfd', '0000-00-00'),
('cc no.12dfg/90', 'Sudheepdfgfg', 'dfgdf', 'dfgdfg', '0000-00-00'),
('cc no.344/48', 'Kiaosod', 'dfgdf', 'Sipreme court', '0000-00-00'),
('cc no.344/48', 'Kiaosod', 'dfgdf', 'Sipreme court', '0000-00-00'),
('cc no.123dfgdf4/48', 'Nora', 'fate', 'Criminal court', '0000-00-00'),
('cc no.16734/48', 'NADWEEWR', 'sdfsdf', 'Kiosdl Court', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
