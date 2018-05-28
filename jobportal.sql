-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2018 at 03:17 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

DROP TABLE IF EXISTS `interview`;
CREATE TABLE IF NOT EXISTS `interview` (
  `InterviewId` int(11) NOT NULL AUTO_INCREMENT,
  `EmployerId` text NOT NULL,
  `EmployerFullName` text NOT NULL,
  `Message` text,
  `CompanyName` text NOT NULL,
  `CandidateId` text NOT NULL,
  PRIMARY KEY (`InterviewId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`InterviewId`, `EmployerId`, `EmployerFullName`, `Message`, `CompanyName`, `CandidateId`) VALUES
(10, 'mahad', 'Mahad Amir', 'viva', 'asdasdas', 'a'),
(9, 'mahad', 'Mahad Amir', 'Hey, I would like to call you for an interview', 'Mahad Enterprise', 'asad');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

DROP TABLE IF EXISTS `job_application`;
CREATE TABLE IF NOT EXISTS `job_application` (
  `ApplicationId` int(11) NOT NULL AUTO_INCREMENT,
  `CandidateUserName` text NOT NULL,
  `ListingId` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `Reason` text NOT NULL,
  PRIMARY KEY (`ApplicationId`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`ApplicationId`, `CandidateUserName`, `ListingId`, `FullName`, `Email`, `Reason`) VALUES
(16, 'm1', 22, 'Mahad Amir', 'mamir3012@gmail.com', 'asd'),
(17, 'a', 22, 'Asad Khan', 'a1@gmail.com', 'im asad'),
(18, 'asad', 27, 'Asad Khan', 'iasad@gmail.com', 'Something'),
(21, 'a', 27, 'Hamid Nazir', 'h@gmail.com', 'hey'),
(20, 'asad', 29, 'Asad Khan', 'iasad@gmail.com', 'asdasd'),
(22, 'mahad', 26, 'Mahad Amir', 'mamir3012@gmail.com', 'sda');

-- --------------------------------------------------------

--
-- Table structure for table `job_listing`
--

DROP TABLE IF EXISTS `job_listing`;
CREATE TABLE IF NOT EXISTS `job_listing` (
  `ListingId` int(11) NOT NULL AUTO_INCREMENT,
  `Company` text NOT NULL,
  `JobTitle` text NOT NULL,
  `JobDescription` text NOT NULL,
  `Location` text,
  `JobCategory` text NOT NULL,
  `Salary` text,
  `SalaryType` text,
  `Experience` int(11) DEFAULT NULL,
  `ListingTime` text,
  `ListingTimeString` text,
  `PosterId` text,
  PRIMARY KEY (`ListingId`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_listing`
--

INSERT INTO `job_listing` (`ListingId`, `Company`, `JobTitle`, `JobDescription`, `Location`, `JobCategory`, `Salary`, `SalaryType`, `Experience`, `ListingTime`, `ListingTimeString`, `PosterId`) VALUES
(27, 'Mahad Enterprise', 'CS Graduate Required', 'Description', 'Peshawar', 'Others,Information Technology (IT),', '50000', 'per hour', NULL, '1527228955', '06:15:AM - 2018/05/25', 'mahad'),
(22, 'Test Company 2', 'Test Title 2', 'Test Description 2', 'Rawalpindi, Pakistan', 'Information Technology (IT),', '100000', 'per week', NULL, '1527081736', '01:22:PM - 2018/05/23', 'm'),
(26, 'Asad Company', 'Senior Dev Required', 'Senior Dev with 12 years experience required', 'Islamabad, Pakistan', 'Information Technology (IT),', '122,222', 'per month', NULL, '1527227790', '05:56:AM - 2018/05/25', 'm'),
(24, 'samsung', 'secret job', 'asd', 'quetta', 'Others,Information Technology (IT),', '121213', 'per hour', NULL, '1527091327', '04:02:PM - 2018/05/23', 'a'),
(25, 'Test Company 4', 'Test Title 4', 'Test Description 4', 'New Delhi, India', 'Information Technology (IT),', '120000', 'per hour', NULL, '1527150495', '08:28:AM - 2018/05/24', 'm'),
(28, 'Mahad Electronics', 'Sales Manager required', 'Description', 'Multan', 'Others,Management,Engineering,', '10000', 'per hour', NULL, '1527229035', '06:17:AM - 2018/05/25', 'mahad'),
(29, 'Mahad Travelers', 'Driver required with 12 years experience', 'Description', 'Larkana', 'Others,', '10,000', 'per hour', NULL, '1527229111', '06:18:AM - 2018/05/25', 'mahad'),
(30, 'Test viva', 'Viva', 'desc', '', 'Others,', '', 'per hour', NULL, '1527236989', '08:29:AM - 2018/05/25', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE IF NOT EXISTS `resume` (
  `ResumeId` int(11) NOT NULL AUTO_INCREMENT,
  `CandidateId` text NOT NULL,
  `FullName` text NOT NULL,
  `Title` text NOT NULL,
  `Degree` text NOT NULL,
  `University` text NOT NULL,
  `Cgpa` text NOT NULL,
  `WorkExperience` mediumtext,
  `AdditionalInformation` mediumtext,
  `Location` text,
  `ListingTime` text NOT NULL,
  `ListingTimeString` text NOT NULL,
  PRIMARY KEY (`ResumeId`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`ResumeId`, `CandidateId`, `FullName`, `Title`, `Degree`, `University`, `Cgpa`, `WorkExperience`, `AdditionalInformation`, `Location`, `ListingTime`, `ListingTimeString`) VALUES
(1, '12', 'sad1', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'dd', '1527082410', '01:22:PM - 2018/05/23'),
(5, 'm', 'Mahad Amir', 'Senior Dev', 'BSCS', 'COMSATS', '3.29', 'work exp', 'additional info', 'Islamabad, Pakistan', '1527178204', '04:10:PM - 2018/05/24'),
(8, 'a', 'Hamid Nazir', 'Junior Dev', 'BSCS', 'COMSATS', '3.29', 'ddasd', '', 'Rawalpindi, Pakistan', '1527236940', '08:29:AM - 2018/05/25'),
(9, 'asad', 'Asad Khan', 'Senior Developer at Unity Games', 'Bachelor of Science in Computer Science', 'COMSATS University', '3.08', 'Worked at Unity Game as a senior developer from 2011-2017', 'I like cricket', 'FATA, Pakistan', '1527230366', '06:39:AM - 2018/05/25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` text NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `UserName`, `Password`) VALUES
(15, 'm12', '123'),
(13, 'mahad', '123'),
(12, 'a', 'ma'),
(11, 'm1', '1'),
(10, 'm', '123'),
(16, 'asad', 'a'),
(17, 'mahad1', 'a'),
(18, 'hamid', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
