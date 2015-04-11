-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: tund.cefns.nau.edu
-- Generation Time: Apr 11, 2015 at 12:52 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rs854`
--

-- --------------------------------------------------------

--
-- Table structure for table `Assigned_Review`
--

CREATE TABLE IF NOT EXISTS `Assigned_Review` (
  `Review_ID` int(4) NOT NULL DEFAULT '0',
  `User_ID` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Review_ID`,`User_ID`),
  KEY `SE_AUser_ID_FK` (`User_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Assigned_Review`
--

INSERT INTO `Assigned_Review` (`Review_ID`, `User_ID`) VALUES
(4, 90000),
(5, 90000),
(6, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `Position`
--

CREATE TABLE IF NOT EXISTS `Position` (
  `Position_Code` int(4) NOT NULL,
  `Position_Title` varchar(10) NOT NULL,
  `Privilege` int(11) NOT NULL,
  PRIMARY KEY (`Position_Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Position`
--

INSERT INTO `Position` (`Position_Code`, `Position_Title`, `Privilege`) VALUES
(1, 'Administra', 1),
(2, 'Employee', 0),
(3, 'Temp', 0),
(4, 'Consultant', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE IF NOT EXISTS `Review` (
  `Review_ID` int(4) NOT NULL,
  `Review_Flag` int(1) NOT NULL,
  `Leadership_Ability` int(11) NOT NULL,
  `Follow_Directions` int(11) NOT NULL,
  `Gen_Contributions` varchar(250) NOT NULL,
  `Technical_ability` int(11) NOT NULL,
  `Creativity` int(11) NOT NULL,
  `Punctionality` int(11) NOT NULL,
  `Availability` int(11) NOT NULL,
  `Attentiveness` int(11) NOT NULL,
  `Comments` varchar(250) DEFAULT NULL,
  `Work_in_Groups` int(11) NOT NULL,
  `About_User_ID` int(5) DEFAULT NULL,
  `From_User_ID` int(5) DEFAULT NULL,
  PRIMARY KEY (`Review_ID`),
  KEY `SE_About_User_ID_FK` (`About_User_ID`),
  KEY `SE_From_User_ID_FK` (`From_User_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Review`
--

INSERT INTO `Review` (`Review_ID`, `Review_Flag`, `Leadership_Ability`, `Follow_Directions`, `Gen_Contributions`, `Technical_ability`, `Creativity`, `Punctionality`, `Availability`, `Attentiveness`, `Comments`, `Work_in_Groups`, `About_User_ID`, `From_User_ID`) VALUES
(0, 2, 1, 1, 'None', 4, 2, 1, 3, 1, 'None', 2, 69, 90000),
(1, 2, 1, 3, 'None', 4, 3, 5, 3, 1, 'None', 4, 12, 90000),
(2, 2, 3, 3, 'Everything', 4, 3, 5, 3, 4, 'Everything', 4, 12, 90000),
(4, 1, 0, 0, 'N/A', 0, 0, 0, 0, 0, 'N/A', 0, 90000, 69),
(5, 1, 0, 0, 'N/A', 0, 0, 0, 0, 0, 'N/A', 0, 90000, 12),
(6, 1, 0, 0, 'N/A', 0, 0, 0, 0, 0, 'N/A', 0, 90000, 42);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `User_ID` int(5) NOT NULL,
  `User_FName` varchar(10) NOT NULL,
  `User_LName` varchar(10) NOT NULL,
  `User_Status` tinyint(1) NOT NULL,
  `Position_Code` int(4) NOT NULL,
  `User_login` tinyint(1) NOT NULL,
  `User_Password` varchar(15) NOT NULL,
  PRIMARY KEY (`User_ID`),
  KEY `Position_Code` (`Position_Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`User_ID`, `User_FName`, `User_LName`, `User_Status`, `Position_Code`, `User_login`, `User_Password`) VALUES
(1, 'Riley', 'Shelton', 0, 1, 0, 'Potato Cat'),
(0, 'Makayla', 'Shepherd', 0, 1, 0, 'Cats Cats'),
(2, 'John', 'Loudon', 0, 1, 0, 'More Cats'),
(69, 'Josh', 'Melton', 0, 3, 0, 'Kissletoe'),
(12, 'Grant', 'Swenson', 0, 2, 0, 'Dell'),
(42, 'Hayden', 'Westbrook', 0, 4, 0, 'Testing'),
(90000, 'Testing', 'Tester', 0, 4, 0, 'Password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
