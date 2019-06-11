-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 07:23 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jbstudios`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE IF NOT EXISTS `customerinfo` (
  `Customer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Contact_Number` bigint(10) NOT NULL,
  `Email_ID` varchar(30) DEFAULT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Customer_ID`),
  UNIQUE KEY `User_Name` (`User_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`Customer_ID`, `Name`, `Contact_Number`, `Email_ID`, `User_Name`, `Password`) VALUES
(1, 'Rahul Brahmbhatt', 9898989898, 'rahulbrahmbhatt13@gmail.com', 'rb18', 'rb18'),
(2, 'Vraj Patel', 9090909090, 'vrajkp99@gmail.com', 'vrajkp99', 'vrajkp99'),
(3, 'Vraj Solanki', 9192939495, 'vrajsolanki490@gmail.com', 'vrajsolanki007', 'vrajsolanki007'),
(4, 'Harsh Patel', 8989898989, 'harshpatel@gmail.com', 'huharshpatel', 'huharshpatel'),
(5, 'Rushil Patel', 9944778800, 'rushilvp@gmail.com', 'rushilvp', 'rushilvp'),
(6, 'Pritesh Jagad', 9999000099, 'pritesh@gmail.com', 'priteshjagad', 'priteshjagad'),
(7, 'Rahul Tiwari', 9924483264, 'rahulbt2016@gmail.com', 'rahulbt98', 'rahulbt98'),
(8, 'Mink', 8128687002, 'minkvirparia9@gmail.com', 'blue lightning', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customerpics`
--

CREATE TABLE IF NOT EXISTS `customerpics` (
  `Customer_ID` int(11) DEFAULT NULL,
  `Pic` varchar(30) DEFAULT NULL,
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerpics`
--

INSERT INTO `customerpics` (`Customer_ID`, `Pic`) VALUES
(1, 'a.jpg'),
(1, 'b.jpg'),
(1, 'c.jpg'),
(1, 'd.jpg'),
(2, 'e.jpg'),
(2, '3.jpg'),
(2, '4.jpg'),
(2, '5.jpg'),
(3, '6.jpg'),
(4, '7.jpg'),
(5, '8.jpg'),
(5, '9.jpg'),
(5, '10.jpg'),
(6, '11.jpg'),
(6, '12.jpg'),
(4, '1.jpg'),
(7, 'jb1.jpg'),
(7, 'jb2.jpg'),
(7, 'jb3.jpg'),
(7, 'jb4.jpg'),
(3, '7.jpg'),
(8, 'jb15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `srNo` int(11) NOT NULL,
  `imageName` varchar(30) NOT NULL,
  `imageCaption` varchar(30) NOT NULL,
  PRIMARY KEY (`srNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`srNo`, `imageName`, `imageCaption`) VALUES
(1, 'jb2.jpg', 'Low Light'),
(2, 'jb12.jpg', 'Happy Days'),
(3, 'jb3.jpg', 'Beautywood'),
(4, 'jb1.jpg', 'Serenity'),
(5, 'jb9.jpg', 'Forever this'),
(6, 'jb13.jpg', 'Pure Soul');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `srNo` int(11) NOT NULL,
  `id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`srNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`srNo`, `id`, `password`) VALUES
(1, 'jbstudios', 'jbstudios');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE IF NOT EXISTS `works` (
  `srNo` int(11) NOT NULL,
  `imageName` varchar(30) NOT NULL,
  `imageType` varchar(20) NOT NULL,
  PRIMARY KEY (`srNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`srNo`, `imageName`, `imageType`) VALUES
(1, 'studio1.jpg', 'studio'),
(2, 'landscape1.jpg', 'landscape'),
(3, 'studio2.jpg', 'studio'),
(4, 'studio25.jpg', 'studio'),
(5, 'landscape2.jpg', 'landscape'),
(6, 'studio27.jpg', 'studio'),
(7, 'studio3.jpg', 'studio'),
(8, 'landscape3.jpg', 'landscape'),
(9, 'studio26.jpg', 'studio'),
(10, 'studio4.jpg', 'studio'),
(11, 'landscape4.jpg', 'landscape'),
(12, 'studio5.jpg', 'studio'),
(13, 'landscape5.jpg', 'landscape'),
(14, 'studio6.jpg', 'studio'),
(15, 'landscape6.jpg', 'landscape'),
(16, 'studio7.jpg', 'studio'),
(17, 'landscape7.jpg', 'landscape'),
(18, 'studio8.jpg', 'studio'),
(19, 'landscape8.jpg', 'landscape'),
(20, 'studio9.jpg', 'studio'),
(21, 'landscape9.jpg', 'landscape'),
(22, 'studio10.jpg', 'studio'),
(23, 'landscape10.jpg', 'landscape'),
(24, 'studio11.jpg', 'studio'),
(25, 'landscape11.jpg', 'landscape'),
(26, 'studio12.jpg', 'studio'),
(27, 'landscape12.jpg', 'landscape'),
(28, 'studio13.jpg', 'studio'),
(29, 'landscape13.jpg', 'landscape'),
(30, 'studio14.jpg', 'studio'),
(31, 'landscape14.jpg', 'landscape'),
(32, 'studio15.jpg', 'studio'),
(33, 'landscape15.jpg', 'landscape'),
(34, 'studio16.jpg', 'studio'),
(35, 'landscape16.jpg', 'landscape'),
(36, 'studio17.jpg', 'studio'),
(37, 'landscape17.jpg', 'landscape'),
(38, 'studio18.jpg', 'studio'),
(39, 'landscape18.jpg', 'landscape'),
(40, 'studio19.jpg', 'studio'),
(41, 'studio20.jpg', 'studio'),
(42, 'studio21.jpg', 'studio'),
(43, 'studio22.jpg', 'studio'),
(44, 'studio23.jpg', 'studio'),
(45, 'studio24.jpg', 'studio'),
(46, 'studio25.jpg', 'studio');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerpics`
--
ALTER TABLE `customerpics`
  ADD CONSTRAINT `customerpics_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customerinfo` (`Customer_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
