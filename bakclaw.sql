-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2018 at 03:15 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakclaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorisation`
--

DROP TABLE IF EXISTS `authorisation`;
CREATE TABLE IF NOT EXISTS `authorisation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `PERMIS_ID` int(11) NOT NULL,
  `MODIDATE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USER_PERM` (`USER_ID`,`PERMIS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorisation`
--

INSERT INTO `authorisation` (`ID`, `USER_ID`, `PERMIS_ID`, `MODIDATE`) VALUES
(1, 17, 4, '28-02-2018 7:49 am'),
(4, 11, 1, ''),
(3, 17, 3, '28-02-2018 8:08 am'),
(5, 17, 5, '02-03-2018 7:50 am'),
(6, 18, 4, '02-03-2018 8:42 am'),
(7, 19, 4, '04-03-2018 6:20 am');

-- --------------------------------------------------------

--
-- Table structure for table `continuing_education`
--

DROP TABLE IF EXISTS `continuing_education`;
CREATE TABLE IF NOT EXISTS `continuing_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyer_id` int(11) NOT NULL,
  `number_of_hours` int(11) NOT NULL,
  `date_of_study` varchar(100) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `continuing_education`
--

INSERT INTO `continuing_education` (`id`, `lawyer_id`, `number_of_hours`, `date_of_study`, `modidate`) VALUES
(1, 44, 5, '12-03-2018 8:02 am', '12-03-2018 8:02 am'),
(2, 45, 8, '12-03-2018 8:07 am', '12-03-2018 8:07 am'),
(3, 46, 10, '12-03-2018 8:13 am', '12-03-2018 8:13 am'),
(4, 46, 5, '12-03-2018 8:13 am', '12-03-2018 8:13 am'),
(5, 47, 1, '12-03-2018 8:18 am', '12-03-2018 8:18 am');

-- --------------------------------------------------------

--
-- Table structure for table `council_decision`
--

DROP TABLE IF EXISTS `council_decision`;
CREATE TABLE IF NOT EXISTS `council_decision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `decision` varchar(250) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `council_decision`
--

INSERT INTO `council_decision` (`id`, `decision`, `isActive`) VALUES
(1, 'ស្តីបន្ទោសផ្ទាល់មាត់', 1),
(2, 'ស្តីបន្ទោសជាលាយលក្ខណ៍អក្សរ', 1),
(3, 'លុបឈ្មោះចេញពីបញ្ជី ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `DEP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEP_NAME` varchar(150) NOT NULL,
  `DEP_DESC` varchar(100) NOT NULL,
  PRIMARY KEY (`DEP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEP_ID`, `DEP_NAME`, `DEP_DESC`) VALUES
(1, 'Administration', 'រដ្ឋបាល'),
(2, 'Inspection', 'អធិការកិច្ច');

-- --------------------------------------------------------

--
-- Table structure for table `depart_permission`
--

DROP TABLE IF EXISTS `depart_permission`;
CREATE TABLE IF NOT EXISTS `depart_permission` (
  `DPPM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEP_ID` int(11) NOT NULL,
  `PERMIS_ID` int(11) NOT NULL,
  PRIMARY KEY (`DPPM_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depart_permission`
--

INSERT INTO `depart_permission` (`DPPM_ID`, `DEP_ID`, `PERMIS_ID`) VALUES
(1, 1, 5),
(2, 2, 4),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `discipline`
--

DROP TABLE IF EXISTS `discipline`;
CREATE TABLE IF NOT EXISTS `discipline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyer_id` int(11) NOT NULL,
  `lawyer_code` varchar(100) NOT NULL,
  `complaints_code` varchar(100) NOT NULL,
  `complaints_desc` text NOT NULL,
  `is_presidential_reconciliation` tinyint(4) NOT NULL,
  `is_inspection` tinyint(4) NOT NULL,
  `complaints_path` varchar(250) NOT NULL,
  `cd_id` int(11) NOT NULL COMMENT 'id from council decision',
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discipline`
--

INSERT INTO `discipline` (`id`, `lawyer_id`, `lawyer_code`, `complaints_code`, `complaints_desc`, `is_presidential_reconciliation`, `is_inspection`, `complaints_path`, `cd_id`, `modidate`) VALUES
(3, 19, '', '', 'Hello summary', 1, 1, '', 3, '12-03-2018 1:32 am'),
(2, 17, '', '', 'Summary', 0, 0, '', 1, '10-03-2018 3:06 pm'),
(4, 35, '', '', '', 0, 0, '', 1, '12-03-2018 3:26 am'),
(5, 36, '', '', '', 0, 0, '', 0, '12-03-2018 3:30 am'),
(6, 37, '', '', 'TEST', 0, 0, '', 0, '12-03-2018 3:31 am'),
(7, 38, '', '', '', 0, 0, '', 0, '12-03-2018 3:33 am'),
(8, 43, '', '', '', 0, 0, '', 0, '12-03-2018 7:58 am'),
(9, 44, '', '', 'Summary', 0, 0, '', 0, '12-03-2018 8:02 am'),
(10, 45, '', '', '', 0, 0, '', 0, '12-03-2018 8:07 am'),
(11, 46, '', '', 'Hello', 1, 1, '', 2, '12-03-2018 8:13 am'),
(12, 47, '', '', '', 0, 0, '', 0, '12-03-2018 8:18 am'),
(13, 51, '', '', '', 0, 0, '', 2, '14-03-2018 4:46 am');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

DROP TABLE IF EXISTS `lawyers`;
CREATE TABLE IF NOT EXISTS `lawyers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyer_code` varchar(100) NOT NULL,
  `lawyer_name_en` varchar(100) NOT NULL,
  `lawyer_name_kh` varchar(250) NOT NULL,
  `lawyer_dob` varchar(100) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lawyer_code` (`lawyer_code`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `lawyer_code`, `lawyer_name_en`, `lawyer_name_kh`, `lawyer_dob`, `modidate`) VALUES
(1, '007', 'Koy Ponleu', 'កុយ ពន្លឺ', '18/10/1984', '07-03-2018 8:32 am'),
(2, '008', 'Ban Yanno', 'បាន យ៉ាន់ណូ', '11/10/1990', '07-03-2018 8:35 am'),
(3, '009', 'Chhuy Yarttak', 'ឈុយ យ៉ាតតាក់', '11/10/1990', '07-03-2018 8:52 am'),
(31, 'JJ111', 'jklsdf', 'JKDLSD', '44/44/4444', '12-03-2018 3:08 am'),
(38, 'jjdd', 'klsdfjkl', 'UEI', '11/11/1111', '12-03-2018 3:33 am'),
(36, 'Y1', 'MONNN', 'MONNN', '11/11/1111', '12-03-2018 3:30 am'),
(37, '333333', 'nnsdfn', 'NNDN', '11/11/1111', '12-03-2018 3:31 am'),
(34, 'PP112233', 'Kan', 'កាន', '11/12/2000', '12-03-2018 3:23 am'),
(51, '143', 'Suon Visal', 'សួន វិសាល', '10/03/1965', '14-03-2018 4:46 am'),
(50, 'LS001', 'Leng Seng', 'លេង សិង', '11/11/1111', '13-03-2018 9:27 am');

-- --------------------------------------------------------

--
-- Table structure for table `permission_label`
--

DROP TABLE IF EXISTS `permission_label`;
CREATE TABLE IF NOT EXISTS `permission_label` (
  `PERMIS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PERMIS_LABEL` varchar(50) NOT NULL,
  PRIMARY KEY (`PERMIS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_label`
--

INSERT INTO `permission_label` (`PERMIS_ID`, `PERMIS_LABEL`) VALUES
(1, 'Super'),
(4, 'Inspect'),
(5, 'Adminstrate');

-- --------------------------------------------------------

--
-- Table structure for table `professional_conditions`
--

DROP TABLE IF EXISTS `professional_conditions`;
CREATE TABLE IF NOT EXISTS `professional_conditions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyer_id` int(11) NOT NULL,
  `date_of_completion` varchar(100) NOT NULL,
  `date_of_prob` varchar(100) NOT NULL,
  `is_pursue_study` tinyint(1) NOT NULL,
  `date_of_fulltime` varchar(100) NOT NULL,
  `date_of_righteousness` varchar(100) NOT NULL,
  `date_of_without_righteousness` varchar(100) NOT NULL,
  `date_of_prob_righteousness` varchar(100) NOT NULL,
  `no_prob_righteousness` varchar(100) NOT NULL,
  `fulltime_approval` varchar(100) NOT NULL,
  `firm_name` varchar(250) NOT NULL,
  `authorisation_number` varchar(100) NOT NULL,
  `permission_number` varchar(100) NOT NULL,
  `firm_validity` varchar(100) NOT NULL,
  `out_bar_validity` varchar(100) NOT NULL,
  `out_bar_decision` varchar(100) NOT NULL,
  `prohibition_statement` varchar(250) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lawyer_id` (`lawyer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professional_conditions`
--

INSERT INTO `professional_conditions` (`id`, `lawyer_id`, `date_of_completion`, `date_of_prob`, `is_pursue_study`, `date_of_fulltime`, `date_of_righteousness`, `date_of_without_righteousness`, `date_of_prob_righteousness`, `no_prob_righteousness`, `fulltime_approval`, `firm_name`, `authorisation_number`, `permission_number`, `firm_validity`, `out_bar_validity`, `out_bar_decision`, `prohibition_statement`, `modidate`) VALUES
(1, 50, '22/22/2222', '33/33/3333', 0, '', '22/33/3333', '', '', '', '', '', '', '', '', '', '', '', '13-03-2018 9:27 am'),
(2, 51, '22/22/2222', '22/22/2222', 1, '11/11/1333', '', '', '', '', '', 'ABC', '', '', '', '', '', '', '14-03-2018 4:46 am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(50) NOT NULL,
  `USER_PASSWORD` varchar(50) NOT NULL,
  `USER_FULLNAME` varchar(100) NOT NULL,
  `USER_STAFFID` varchar(20) NOT NULL,
  `USER_DESC` varchar(150) NOT NULL,
  `MODIDATE` varchar(100) NOT NULL,
  `DEP_ID` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `isSuper` tinyint(4) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ID`, `USER_NAME`, `USER_PASSWORD`, `USER_FULLNAME`, `USER_STAFFID`, `USER_DESC`, `MODIDATE`, `DEP_ID`, `isActive`, `isSuper`) VALUES
(11, 'ponleu18', '1', 'Ponleu Koy', 'P122', '', '', 0, 1, 1),
(17, 'test', '1', 'TEST', 'TEST1112', '', '28-02-2018 7:28 am', 2, 1, 0),
(18, 'test1', '1', 'TEST1', 'TEST1', '', '02-03-2018 8:28 am', 1, 1, 0),
(19, 'yarttak', '123456', 'Chhuy Yarttak', 'YT123', '', '04-03-2018 6:18 am', 2, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
