-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2018 at 12:54 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorisation`
--

INSERT INTO `authorisation` (`ID`, `USER_ID`, `PERMIS_ID`, `MODIDATE`) VALUES
(1, 17, 4, '28-02-2018 7:49 am'),
(4, 11, 1, ''),
(3, 17, 3, '28-02-2018 8:08 am'),
(5, 17, 5, '02-03-2018 7:50 am'),
(6, 18, 4, '02-03-2018 8:42 am'),
(7, 19, 4, '04-03-2018 6:20 am'),
(8, 20, 6, '17-03-2018 3:57 am');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL,
  `book_isbn` int(11) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_isbn`, `book_title`, `book_author`, `book_category`) VALUES
(2, 7893, 'Laravel Tiger', 'Mutafaf', 'Programming'),
(3, 8934, 'Android Programming', 'Farrukh', 'Programming'),
(6, 8902, 'Intro to Psychology', 'Ayesha', 'Psychology'),
(7, 2345, 'Calculus-1', 'John doe', 'Math'),
(8, 8927, 'Chemistry Part-1', 'Aliza Mam', 'Chemistry'),
(9, 6723, 'Math Part-1', 'Sir Sohail Amanat', 'Math'),
(10, 7896, 'Javascript for begginners', 'Shami ', 'Programming'),
(11, 8978, 'iOS App ', 'Ehtesham Mehmood', 'Mobile Programming'),
(12, 8987, 'Physics', 'Sir Waqas', 'Physics'),
(13, 7890, 'HTML for dummies', 'Ehtesham Shami', 'Programming'),
(14, 1234, 'CodeIgniter Framework Introduction', 'Mutafaf', 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `case_client`
--

DROP TABLE IF EXISTS `case_client`;
CREATE TABLE IF NOT EXISTS `case_client` (
  `caseclientid` int(11) NOT NULL AUTO_INCREMENT,
  `caseregisid` int(11) NOT NULL,
  `clientname` varchar(100) DEFAULT NULL,
  `clientsex` varchar(10) DEFAULT NULL,
  `clientage` varchar(50) DEFAULT NULL,
  `adults` tinyint(1) DEFAULT NULL,
  `minor` bit(10) DEFAULT NULL,
  `clientnote` varchar(150) DEFAULT NULL,
  `isclient` tinyint(1) DEFAULT NULL,
  `datecreateclient` date DEFAULT NULL,
  `isdeleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`caseclientid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `case_client`
--

INSERT INTO `case_client` (`caseclientid`, `caseregisid`, `clientname`, `clientsex`, `clientage`, `adults`, `minor`, `clientnote`, `isclient`, `datecreateclient`, `isdeleted`) VALUES
(1, 1, 'ភួង', 'ស្រី', '34', 0, NULL, 'កែតម្រូវពេលមានបញ្ហា', 1, NULL, 1),
(5, 2, 'Song dara', 'ប្រុស', '4', 0, NULL, NULL, 1, NULL, 0),
(4, 1, 'Suger', 'ស្រី', '23', 0, NULL, NULL, 1, NULL, 1),
(6, 2, '4234', 'ស្រី', '343', 1, NULL, NULL, 1, NULL, 0),
(7, 1, '3232', 'ស្រី', '4', 0, NULL, NULL, 1, NULL, 1),
(8, 1, '434', 'ស្រី', '34', 0, NULL, NULL, 1, NULL, 1),
(9, 1, '34234', 'ស្រី', '43', 0, NULL, NULL, 1, NULL, 1),
(10, 1, '434', 'ស្រី', '434', 1, NULL, NULL, 1, NULL, 1),
(11, 1, '3343', 'ប្រុស', '43', 1, NULL, 'គាត់', 1, NULL, 0),
(12, 1, 'ច័ន្ទ សិរីរ័ត្ន', 'ប្រុស', '23', 1, NULL, '២៤២៣២៣២', 0, NULL, 0),
(13, 10, 'សុខ អាន', 'ស្រី', '23', 1, NULL, NULL, 1, NULL, 0),
(14, 1, 'ច័ន្ទ សិរីរ័ត្ត', 'ស្រី', '52', 1, NULL, '', 1, NULL, 0),
(15, 3, 'យិន ប៊ុនថា', 'ស្រី', '23', 1, NULL, NULL, 1, NULL, 0),
(16, 4, 'រឿន និមល', 'ប្រុស', '23', 1, NULL, 'rw534235235235', 1, NULL, 0),
(17, 1, 'គុង', 'ស្រី', '34', 0, NULL, '', 0, NULL, 0),
(18, 1, '345345', 'ស្រី', '54', 1, NULL, '', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `case_para`
--

DROP TABLE IF EXISTS `case_para`;
CREATE TABLE IF NOT EXISTS `case_para` (
  `caseid` int(11) NOT NULL AUTO_INCREMENT,
  `casename` varchar(100) NOT NULL,
  PRIMARY KEY (`caseid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `case_para`
--

INSERT INTO `case_para` (`caseid`, `casename`) VALUES
(1, 'ព្រហ្មទណ្ឌ');

-- --------------------------------------------------------

--
-- Table structure for table `case_regis`
--

DROP TABLE IF EXISTS `case_regis`;
CREATE TABLE IF NOT EXISTS `case_regis` (
  `caseid` int(11) NOT NULL AUTO_INCREMENT,
  `caseno` varchar(50) NOT NULL,
  `dateregis` date NOT NULL,
  `typeofcase` varchar(50) DEFAULT NULL,
  `accusations` varchar(150) DEFAULT NULL,
  `getfrom` varchar(50) DEFAULT NULL,
  `createdateregist` date DEFAULT NULL,
  `casenote` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`caseid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `case_regis`
--

INSERT INTO `case_regis` (`caseid`, `caseno`, `dateregis`, `typeofcase`, `accusations`, `getfrom`, `createdateregist`, `casenote`) VALUES
(1, '0001/0988', '2018-03-07', 'ពាណិជ្ជកម្ម', 'ឈ្មោះបទល្មើស តាមមាត្រា ច្បាប់', 'តុលាការ', '2018-03-27', '២៣៤២៣៤២៤២៤២'),
(2, '0002', '2018-03-27', 'ពាណិជ្ជកម្ម', 'ឈ្មោះបទល្មើស​ តាមមាត្រា122 ច្បាប់ដថដ', 'កូនក្តី', '2018-03-27', '៤២៣៤២៣៤២៤២៤២៤'),
(3, '003/27-03-20017', '2018-03-27', 'ព្រហ្មទណ្ឌ', 'បង្ខាំងមនុស្សខុសច្បាប់', 'កូនក្តី', '2018-03-13', '២៣៤២៣៤២៣'),
(4, '0004', '2018-03-11', 'ពាណិជ្ជកម្ម', 'ប៉ុនប៉ងលួច', 'តុលាការ', '2018-03-20', 'បាន​ជួយពេលដំណាក់កាលដេែលបានជួប'),
(5, '343', '2018-04-06', 'ពាណិជ្ជកម្ម', 'បទចោទប្រកាន់ មាត្រាលេខ២៩៨៣', 'អាជ្ញាធរស៊ីវិល', '2018-04-06', '២៣៤២៣៥៣៤៥៦៣៤៥\r\nដថសដលសក\r\nថដថលស្សលថ'),
(6, '0093', '2018-04-03', 'រដ្ឋប្បវេណី', 'បេេលេរ្េ', 'នគរបាល', NULL, '៣៤២៣៤២៣៥៤៣៥៣'),
(7, '00928', '2018-02-02', 'ព្រហ្មទណ្ឌ', '42342342', 'នគរបាល', NULL, '4234234'),
(8, '001', '2018-02-03', '', NULL, '', NULL, '42323'),
(9, '5488', '2018-02-01', '', NULL, '', NULL, '23423423423424'),
(10, '5488', '2018-02-01', '', NULL, '', NULL, '23423423423424'),
(11, '1222', '2018-01-02', NULL, NULL, NULL, NULL, NULL),
(12, '12226', '2018-01-02', NULL, NULL, NULL, NULL, NULL),
(13, '212226', '2018-01-02', NULL, NULL, NULL, NULL, NULL),
(14, 'P0001', '2018-01-03', '', NULL, '', NULL, 'sdf434'),
(15, 'P0002', '2018-02-01', 'រដ្ឋប្បវេណី', '', 'តុលាការ', NULL, 'fsdfsfsf'),
(16, 'V001', '2017-02-09', 'ព្រហ្មទណ្ឌ', 'តាមមាត្រាលេខ ៣០៣៨៩', 'តុលាការ', NULL, 'គាត់បានទទួលពីតុលាកាកំពូលនិងសំរេចដេញ'),
(17, '4234234', '0000-00-00', 'ព្រហ្មទណ្ឌ', '234234', 'តុលាការ', NULL, '3242342'),
(18, '', '0000-00-00', '', '', '', NULL, ''),
(19, '42342342', '2018-04-12', 'រដ្ឋប្បវេណី', '4234242', 'តុលាការ', NULL, '24234242'),
(20, '0/7887', '2018-04-11', 'រដ្ឋប្បវេណី', '42342342', 'កូនក្តី', NULL, '42342342');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `CLIENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLIENT_NAME` varchar(100) DEFAULT NULL,
  `CLIENT_SEX` varchar(10) DEFAULT NULL,
  `CLIENT_AGE` int(11) DEFAULT NULL,
  `CLIENT_ADD` varchar(100) DEFAULT NULL,
  `CLIENT_TEL` varchar(50) DEFAULT NULL,
  `CLIENT_NAT_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CLIENT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`CLIENT_ID`, `CLIENT_NAME`, `CLIENT_SEX`, `CLIENT_AGE`, `CLIENT_ADD`, `CLIENT_TEL`, `CLIENT_NAT_ID`) VALUES
(1, 'Ban Yanno', 'srey', 858, 'ypiopi', '01238373', 3423),
(2, 'Yin Bontha', 'ser', 254, 'fdsfs', 'fsfe', 2147483647),
(3, '145654', '656', 565, '654', '565', 465),
(4, 'Ly Rithy', 'M', 98, 'PP', '099887474', 89877),
(5, 'Yuth Yatak', 'bros', 87, 'fd', 'fdfd', 123341),
(6, 'Nga Vuthy', 'F', 21, 'we342', '334', 34343345),
(7, 'Leng Bonlong', 'Bros', 78, 'Phnom Penh, Cambodia', '012238 785', 2147483647),
(8, '45', '34', 243, '6778q', '13478', 23333),
(9, 'Koy Ponlue', 'b', 43, '32', '2342', 324),
(10, 'Leng Seryroty', 's', 890, 'efdf', '3423', 542342),
(11, '354353', '45345', 34534, '34534', '345345', 345345),
(12, '5345', '4534', 4534, '345345', '34534', 345345),
(13, 'បាន យ៉ានណូ', 'ប្រុស', 2, 'Cambodia', '0998', 243434),
(14, 'Keo Monorom', 'ប្រុស', 12, 'Phnom Penh', '012238738', 454578),
(15, 'សេង លាងហុង', 'ប្រុស', 123, 'ភ្នំពេញ', '019383474', 0);

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
-- Table structure for table `court`
--

DROP TABLE IF EXISTS `court`;
CREATE TABLE IF NOT EXISTS `court` (
  `courtid` int(11) NOT NULL AUTO_INCREMENT,
  `courtname` varchar(100) NOT NULL,
  PRIMARY KEY (`courtid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`courtid`, `courtname`) VALUES
(1, 'រាជធានីភ្នំពេញ'),
(2, 'ខេត្តកំពត'),
(3, 'ខេត្តកណ្តាល'),
(4, 'ខេត្តកំពង់ចាម'),
(5, 'ខេត្តបាត់ដំបង');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEP_ID`, `DEP_NAME`, `DEP_DESC`) VALUES
(1, 'Administration', 'រដ្ឋបាល'),
(2, 'Inspection', 'អធិការកិច្ច'),
(3, 'Legal_aid', 'នាយកដ្ឋានទទួលពាក្យបណ្តឹង');

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
-- Table structure for table `issue_para`
--

DROP TABLE IF EXISTS `issue_para`;
CREATE TABLE IF NOT EXISTS `issue_para` (
  `issueid` int(11) NOT NULL AUTO_INCREMENT,
  `issuename` varchar(100) NOT NULL,
  PRIMARY KEY (`issueid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `issue_para`
--

INSERT INTO `issue_para` (`issueid`, `issuename`) VALUES
(1, 'ឆបោក'),
(2, 'បង្ខាំងមនុស្យខុសច្បាច់'),
(3, 'លួចមានស្ថានទម្ងន់ទោស'),
(4, 'ប៉ុនប៉ងលួច');

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
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

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
(50, 'LS001', 'Leng Seng', 'លេង សិង', '11/11/1111', '13-03-2018 9:27 am'),
(52, '33455566', 'banq', 'yanno', '11/11/1111', '18-03-2018 7:01 am');

-- --------------------------------------------------------

--
-- Table structure for table `ligal_aid`
--

DROP TABLE IF EXISTS `ligal_aid`;
CREATE TABLE IF NOT EXISTS `ligal_aid` (
  `ligalaidid` int(11) NOT NULL AUTO_INCREMENT,
  `ligalcode` varchar(100) NOT NULL,
  `lawyerid` int(11) NOT NULL,
  `lawyername` varchar(50) NOT NULL,
  `project` varchar(50) NOT NULL,
  `caseid` int(11) NOT NULL,
  `casename` varchar(50) NOT NULL,
  `courtid` int(11) NOT NULL,
  `courtname` varchar(50) NOT NULL,
  `issueid` int(11) NOT NULL,
  `issuename` varchar(50) NOT NULL,
  `datecreate` date NOT NULL,
  `dateenter` date NOT NULL,
  `datereceive` date NOT NULL,
  `ligalaidnote` varchar(100) NOT NULL,
  PRIMARY KEY (`ligalaidid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ligal_aid`
--

INSERT INTO `ligal_aid` (`ligalaidid`, `ligalcode`, `lawyerid`, `lawyername`, `project`, `caseid`, `casename`, `courtid`, `courtname`, `issueid`, `issuename`, `datecreate`, `dateenter`, `datereceive`, `ligalaidnote`) VALUES
(1, '1593/77777', 1, 'កុយ ពន្លឺ', 'គណ:មេធាវី', 1, 'ព្រហ្មទណ្ឌ', 1, 'រាជធានីភ្នំពេញ', 1, 'ឆបោក', '2018-03-23', '2018-03-23', '2018-03-23', 'រឿងក្តីនិងត្រូវដោះស្រាយតាមផ្លូវច្បាច់');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`, `user_id`) VALUES
(1, 'Test', 'test', 'Hello World !!', 1),
(2, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', 'Lorem Ipsum is simply dummy text.', 1),
(3, 'My test', 'my-test', 'hello there', 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_label`
--

DROP TABLE IF EXISTS `permission_label`;
CREATE TABLE IF NOT EXISTS `permission_label` (
  `PERMIS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PERMIS_LABEL` varchar(50) NOT NULL,
  PRIMARY KEY (`PERMIS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_label`
--

INSERT INTO `permission_label` (`PERMIS_ID`, `PERMIS_LABEL`) VALUES
(1, 'Super'),
(4, 'Inspect'),
(5, 'Adminstrate'),
(6, 'Legal AID');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professional_conditions`
--

INSERT INTO `professional_conditions` (`id`, `lawyer_id`, `date_of_completion`, `date_of_prob`, `is_pursue_study`, `date_of_fulltime`, `date_of_righteousness`, `date_of_without_righteousness`, `date_of_prob_righteousness`, `no_prob_righteousness`, `fulltime_approval`, `firm_name`, `authorisation_number`, `permission_number`, `firm_validity`, `out_bar_validity`, `out_bar_decision`, `prohibition_statement`, `modidate`) VALUES
(1, 50, '22/22/2222', '33/33/3333', 0, '', '22/33/3333', '', '', '', '', '', '', '', '', '', '', '', '13-03-2018 9:27 am'),
(2, 51, '22/22/2222', '22/22/2222', 1, '11/11/1333', '', '', '', '', '', 'ABC', '', '', '', '', '', '', '14-03-2018 4:46 am'),
(3, 52, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '18-03-2018 7:01 am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

DROP TABLE IF EXISTS `tbl_employee`;
CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=194 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `address`, `gender`, `designation`, `age`, `image`) VALUES
(1, 'Bruce Tom', '656 Edsel Road\r\nSherman Oaks, CA 91403', 'Male', 'Driver', 36, '1.jpg'),
(5, 'Clara Gilliam', '63 Woodridge Lane\r\nMemphis, TN 38138', 'Female', 'Programmer', 24, '2.jpg'),
(6, 'Barbra K. Hurley', '1241 Canis Heights Drive\r\nLos Angeles, CA 90017', 'Female', 'Service technician', 26, '3.jpg'),
(7, 'Antonio J. Forbes', '403 Snyder Avenue\r\nCharlotte, NC 28208', 'Male', 'Faller', 32, '4.jpg'),
(8, 'Charles D. Horst', '1636 Walnut Hill Drive\r\nCincinnati, OH 45202', 'Male', 'Financial investigator', 29, '5.jpg'),
(175, 'Ronald D. Colella', '1571 Bingamon Branch Road, Barrington, IL 60010', 'Male', 'Top executive', 32, '6.jpg'),
(174, 'Martha B. Tomlinson', '4005 Bird Spring Lane, Houston, TX 77002', 'Female', 'Systems programmer', 38, '7.jpg'),
(161, 'Glenda J. Stewart', '3482 Pursglove Court, Rossburg, OH 45362', 'Female', 'Cost consultant', 28, '8.jpg'),
(162, 'Jarrod D. Jones', '3827 Bingamon Road, Garfield Heights, OH 44125', 'Male', 'Manpower development advisor', 64, '9.jpg'),
(163, 'William C. Wright', '2653 Pyramid Valley Road, Cedar Rapids, IA 52404', 'Male', 'Political geographer', 33, '10.jpg'),
(178, 'Sara K. Ebert', '1197 Nelm Street\r\nMc Lean, VA 22102', 'Female', 'Billing machine operator', 50, ''),
(177, 'Patricia L. Scott', '1584 Dennison Street\r\nModesto, CA 95354', 'Female', 'Urban and regional planner', 54, ''),
(179, 'James K. Ridgway', '3462 Jody Road\r\nWayne, PA 19088', 'Female', 'Recreation leader', 41, ''),
(180, 'Stephen A. Crook', '448 Deercove Drive\r\nDallas, TX 75201', 'Male', 'Optical goods worker', 36, ''),
(181, 'Kimberly J. Ellis', '4905 Holt Street\r\nFort Lauderdale, FL 33301', 'Male', 'Dressing room attendant', 24, ''),
(182, 'Elizabeth N. Bradley', '1399 Randall Drive\r\nHonolulu, HI 96819', 'Female', ' Software quality assurance analyst', 25, ''),
(183, 'Steve John', '108, Vile Parle, CL', 'Male', 'Software Engineer', 29, ''),
(184, 'Mark Stone', '021, Big street, NYC', 'Male', 'Head of IT', 41, ''),
(185, 'ttt', '23456', 'Male', '23456', 344, '2.jpg'),
(186, '23456', '343', 'Female', '345454', 34, '2.jpg'),
(187, '23456', '343', 'Female', '345454', 34, '2.jpg'),
(188, '23456', '343', 'Female', '345454', 34, '2.jpg'),
(189, '23456', '343', 'Female', '345454', 34, '2.jpg'),
(190, '23456', '343', 'Female', '345454', 34, '2.jpg'),
(191, '23456', '343', 'Female', '345454', 34, '2.jpg'),
(192, '23456', '343', 'Female', '345454', 34, '2.jpg'),
(193, '1', '2', 'Male', '3', 4, '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `status`) VALUES
(1, 'ban', 'yanno', 'ban.yanno@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', b'0');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ID`, `USER_NAME`, `USER_PASSWORD`, `USER_FULLNAME`, `USER_STAFFID`, `USER_DESC`, `MODIDATE`, `DEP_ID`, `isActive`, `isSuper`) VALUES
(11, 'ponleu18', '1', 'Ponleu Koy', 'P122', '', '', 0, 1, 1),
(17, 'test', '1', 'TEST', 'TEST1112', '', '28-02-2018 7:28 am', 2, 1, 0),
(18, 'test1', '1', 'TEST1', 'TEST1', '', '02-03-2018 8:28 am', 1, 1, 0),
(19, 'yarttak', '123456', 'Chhuy Yarttak', 'YT123', '', '04-03-2018 6:18 am', 2, 1, 0),
(20, 'yanno', '1', 'ban yanno', '1111', '', '17-03-2018 3:55 am', 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userv1`
--

DROP TABLE IF EXISTS `userv1`;
CREATE TABLE IF NOT EXISTS `userv1` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userv1`
--

INSERT INTO `userv1` (`id`, `firstname`, `lastname`, `email`, `password`, `updated_at`) VALUES
(1, 'yanno', 'ban', 'ban.yanno@gmail.com', 'b5bc838dbf73ba07d4a5d4f6002c5b9f', '2018-03-10 06:00:51'),
(2, 'song', 'dara', 'songdara@gmail.com', 'b5bc838dbf73ba07d4a5d4f6002c5b9f', '2018-03-10 06:02:57'),
(3, 'pong', 'pdn', 'pengpong@gmail.com', '271a4b18d076c2b0a0c713410658d420', '2018-03-10 06:05:29'),
(4, 'Peng', 'Hen', 'pengheng@gmail.com', 'b5bc838dbf73ba07d4a5d4f6002c5b9f', '2018-03-10 06:32:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
