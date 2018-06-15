-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 12:15 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro_admin`
--

CREATE TABLE `pro_admin` (
  `admin_id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `admin_username` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin_password` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin_type` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pro_admin`
--

INSERT INTO `pro_admin` (`admin_id`, `Name`, `admin_username`, `admin_password`, `admin_type`, `email`) VALUES
(1, 'MeMe Admin', 'projectmanage@2017', 'projectmanage@2017', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pro_category`
--

CREATE TABLE `pro_category` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_category`
--

INSERT INTO `pro_category` (`cat_id`, `category`) VALUES
(1, 'Blog'),
(2, 'Informative'),
(3, 'E-Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `pro_customer`
--

CREATE TABLE `pro_customer` (
  `C_id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Company` varchar(256) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `Phone` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Nature_of_business` varchar(256) NOT NULL,
  `Date` varchar(256) NOT NULL,
  `CusStatus` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_customer`
--

INSERT INTO `pro_customer` (`C_id`, `S_id`, `Name`, `Company`, `Location`, `Phone`, `Email`, `Nature_of_business`, `Date`, `CusStatus`) VALUES
(1, 5, 'Barry Allen', 'Star Labs', 'Star City', '2254789654', 'barry@gmail.com', 'Laboratory Services', '2017-05-09 04:44:22', 'No'),
(2, 7, 'Larry', 'qq', 'qq', 'qq', 'qq', 'qq', '2017-05-10 09:17:21', 'Yes'),
(5, 1, 'erf', 'erf', 'edrf', 'erf', 'er', 'er', '2017-05-10 11:50:48', 'Yes'),
(6, 11, 'ssss', 'dddd', 'fff', '2345464657', 's@gmail.com', 'gdfg', '2017-07-22 14:24:10', 'Yes'),
(7, 28, 'Daniel', 'Jk ltd', 'UK', '8908768965', 'daniel@gmail.com', 'export', '2017-07-24 11:48:45', 'Yes'),
(8, 29, 'BECKY', 'xyz', 'uk', '9098909878', 'becky@gmail.com', 'shopping', '2017-07-24 12:27:00', 'Yes'),
(9, 29, 'daniel', 'abc', 'uk', '9098987898', 'daniel@gmail.com', 'shopping', '2017-07-24 12:57:50', 'Yes'),
(10, 29, 'sana', 'najeeb', 'sabzi bagh', '9898909898', 'sana@mana.com', 'disturbing', '2017-07-26 14:10:16', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `pro_devs_timesheet`
--

CREATE TABLE `pro_devs_timesheet` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `task` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_devs_timesheet`
--

INSERT INTO `pro_devs_timesheet` (`id`, `userid`, `projectname`, `task`, `start`, `end`, `total`, `Date`) VALUES
(1, 0, 'ddd', '0', '16:01:00.000000', '18:02:00.000000', '00:00:00.000000', '0000-00-00'),
(2, 0, 'adasd', '0', '04:01:00.000000', '18:03:00.000000', '00:00:00.000000', '0000-00-00'),
(3, 0, 'dasd', '0', '04:02:00.000000', '19:03:00.000000', '00:00:00.000000', '0000-00-00'),
(4, 0, 'hui', '0', '04:04:00.000000', '06:00:00.000000', '00:00:00.000000', '0000-00-00'),
(5, 0, 'ccc', '0', '19:04:00.000000', '17:03:00.000000', '00:00:00.000000', '0000-00-00'),
(8, 0, 'uuuu', '9', '06:09:00.000000', '08:09:00.000000', '00:00:08.000000', '0000-00-00'),
(9, 0, 'sd', 'ddd', '16:01:00.000000', '19:04:00.000000', '00:00:00.000000', '2017-07-22'),
(10, 0, 'ddd', 'dddddd', '17:03:00.000000', '19:01:00.000000', '00:00:00.000000', '2017-07-22'),
(11, 0, 'aaa', 'assa', '03:03:00.000000', '08:01:00.000000', '00:00:00.000000', '2017-07-22'),
(12, 1, 'dsd', 'dddddd', '18:03:00.000000', '20:03:00.000000', '00:00:00.000000', '2017-07-22'),
(13, 1, 'j', 'd', '04:01:00.000000', '18:01:00.000000', '00:00:00.000000', '2017-07-22'),
(14, 1, 'fff', 'ffff', '17:01:00.000000', '19:01:00.000000', '00:00:00.000000', '2017-07-22'),
(15, 1, 'dede', 'dscdsc', '16:03:00.000000', '18:02:00.000000', '02:59:00.000000', '2017-07-22'),
(16, 1, 'ffdvgdfv', 'vfvfvf', '20:09:00.000000', '21:09:00.000000', '01:00:00.000000', '2017-07-22'),
(17, 1, '', '', '09:09:00.000000', '19:09:00.000000', '10:00:00.000000', '2017-07-22'),
(18, 1, 'htrfg', 'hgrh', '09:09:00.000000', '21:09:00.000000', '12:00:00.000000', '2017-07-22'),
(19, 1, 'wwwww', 'wwwww', '08:04:00.000000', '11:02:00.000000', '03:58:00.000000', '2017-07-24'),
(20, 1, 'cfefeeef', 'fefe', '17:03:00.000000', '20:01:00.000000', '03:58:00.000000', '2017-07-24'),
(21, 1, '', '', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '2017-07-24'),
(22, 1, 'ak', 'module1', '18:00:00.000000', '00:01:00.000000', '-18:00:00.000000', '2017-07-24'),
(23, 1, 'tttttttttttt', 'eeeeeeeeeeee', '10:45', '12:20', '2:35', '2017-07-24'),
(24, 1, '', '', '09:20 AM', '11:55 AM', '3:35', '2017-07-24'),
(25, 1, 'ssasasasa', 'sasasas', '9:02 AM', '10:55 AM', '1:53', '2017-07-24'),
(26, 16, 'aaa', 'aka', '09:20 AM', '11:55 AM', '2:35', '2017-07-24'),
(27, 6, 'hhh', 'ggg', '9:02 AM', '11:55 AM', '2:53', '2017-07-25'),
(28, 1, 'xxxxxxx', 'dddd', '10:10 AM', '11:55 AM', '1:45', '2017-07-26'),
(29, 1, '', '', '9:02 AM', '10:55 AM', '1:53', '2017-07-26'),
(30, 16, 'web app', 'contact Us', '9:15 AM', '5:30 PM', '8:15', '2017-07-26'),
(31, 16, 'ddddd', 'fsdfsdf', '9:02 AM', '5:30 PM', '8:28', '2017-07-26'),
(32, 1, 'nnnnn', 'kkkkk', '9:02 AM', '5:30 PM', '8:28', '2017-07-26'),
(33, 14, 'errewr', 'weee', '9:02 AM', '5:30 PM', '8:28', '2017-07-26'),
(34, 14, 'aasss', 'assass', '10:02 AM', '5:30 PM', '7:28', '2017-07-26'),
(35, 1, '', '', '', '', '', '2017-07-26'),
(36, 23, 'KFC', 'JFHU', '10:45 AM', '11:56 AM', '1:11', '2017-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `pro_dev_feedback`
--

CREATE TABLE `pro_dev_feedback` (
  `id` int(230) NOT NULL,
  `user_id` varchar(235) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `kind` varchar(235) NOT NULL,
  `Name` varchar(340) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Team_Player` int(11) NOT NULL,
  `Ownership` int(11) NOT NULL,
  `Quick_Learner` int(11) NOT NULL,
  `Problem_Solver` int(11) NOT NULL,
  `Passionate` int(11) NOT NULL,
  `proactive` int(11) NOT NULL,
  `Hardworking` int(11) NOT NULL,
  `Attitude` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_dev_feedback`
--

INSERT INTO `pro_dev_feedback` (`id`, `user_id`, `emp_id`, `kind`, `Name`, `Email`, `Team_Player`, `Ownership`, `Quick_Learner`, `Problem_Solver`, `Passionate`, `proactive`, `Hardworking`, `Attitude`) VALUES
(37, '1', 0, 'developer', 'Marko Polo', '', 4, 4, 4, 4, 4, 4, 4, 4),
(38, '4', 0, 'developer', 'Supratim Sen', '', 2, 2, 2, 2, 2, 2, 2, 2),
(39, '2', 0, 'developer', 'Samiksha Sonam', '', 2, 2, 2, 2, 2, 2, 2, 2),
(40, '1', 0, 'developer', 'Samiksha Sonam', '', 3, 3, 3, 3, 3, 3, 3, 3),
(41, '7', 0, '', 'Supratim Sen', '', 3, 3, 3, 3, 3, 3, 3, 3),
(42, '1', 0, 'developer', 'Neha Kumari ', '', 6, 4, 4, 4, 4, 4, 4, 4),
(43, '1', 0, 'developer', 'Neha Kumari ', '', 0, 0, 0, 0, 0, 0, 0, 0),
(44, '1', 0, 'developer', 'Nandan Mishra', '', 2, 2, 2, 2, 2, 2, 2, 2),
(45, '1', 0, 'developer', 'Abhishek kumar', '', 7, 7, 7, 7, 7, 0, 7, 7),
(46, '5', 0, '', 'Neha Kumari', '', 7, 7, 7, 7, 7, 7, 7, 7),
(47, '5', 0, '', 'Supratim Sen', '', 8, 8, 8, 8, 8, 8, 8, 8),
(48, '6', 0, 'developer', 'Supratim Sen', '', 9, 9, 9, 9, 9, 0, 9, 0),
(49, '8', 0, '', 'Abhishek kumar', '', 10, 10, 10, 7, 10, 7, 8, 9),
(50, '6', 0, '', 'Neha Kumari', '', 6, 6, 6, 6, 6, 6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pro_dev_leaveapp`
--

CREATE TABLE `pro_dev_leaveapp` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `status` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_dev_leaveapp`
--

INSERT INTO `pro_dev_leaveapp` (`id`, `userid`, `name`, `from_date`, `to_date`, `purpose`, `status`) VALUES
(1, '1', 'Supratim Sen', '2017-07-18', '2017-07-30', 'hhhhh', 'No'),
(2, '1', 'Supratim Sen', '2017-07-19', '2017-07-19', 'xyz', 'No'),
(3, '1', 'Supratim Sen', '2017-07-19', '2017-07-22', 'dont know', ''),
(4, '4', 'Abhishek kumar', '2017-07-19', '2017-07-29', 'medical treatment', ''),
(5, '5', 'Tumpa jana', '2017-07-21', '2017-07-22', 'Out of station', ''),
(6, '6', 'Abhi', '2017-07-20', '2017-07-25', 'xyz', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `pro_dev_notes`
--

CREATE TABLE `pro_dev_notes` (
  `nid` int(11) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `notes` blob NOT NULL,
  `adddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_dev_notes`
--

INSERT INTO `pro_dev_notes` (`nid`, `dev_id`, `proj_id`, `notes`, `adddate`) VALUES
(1, 1, 2, 0x35302520636f6d706c6574652070726f6a656374, '2017-05-10'),
(2, 1, 1, 0x616263, '2017-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `pro_dev_registration`
--

CREATE TABLE `pro_dev_registration` (
  `D_id` int(11) NOT NULL,
  `DevReg_No` varchar(256) NOT NULL,
  `D_image` varchar(256) NOT NULL,
  `Dev_Name` varchar(256) NOT NULL,
  `D_Username` varchar(256) NOT NULL,
  `Developer_id` varchar(256) NOT NULL,
  `d_doj` date NOT NULL,
  `Email_Id` varchar(256) NOT NULL,
  `vertical_head` varchar(256) NOT NULL,
  `manager` varchar(256) NOT NULL,
  `Phone_No` varchar(256) NOT NULL,
  `D_Gen` varchar(50) NOT NULL,
  `D_Marital` varchar(50) NOT NULL,
  `D_address` varchar(256) NOT NULL,
  `D_State` varchar(256) NOT NULL,
  `D_Zip` varchar(256) NOT NULL,
  `Role` varchar(265) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `Pwd` varchar(256) NOT NULL,
  `RegistDate` date NOT NULL,
  `EmailVerification` varchar(256) NOT NULL DEFAULT '''Yes'',''No''',
  `D_FB` varchar(256) NOT NULL,
  `D_LI` varchar(256) NOT NULL,
  `D_TW` varchar(256) NOT NULL,
  `DevStatus` enum('Yes','No') NOT NULL DEFAULT 'No',
  `admin_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_dev_registration`
--

INSERT INTO `pro_dev_registration` (`D_id`, `DevReg_No`, `D_image`, `Dev_Name`, `D_Username`, `Developer_id`, `d_doj`, `Email_Id`, `vertical_head`, `manager`, `Phone_No`, `D_Gen`, `D_Marital`, `D_address`, `D_State`, `D_Zip`, `Role`, `designation`, `Pwd`, `RegistDate`, `EmailVerification`, `D_FB`, `D_LI`, `D_TW`, `DevStatus`, `admin_user`) VALUES
(1, 'MeMe170500001', '', 'Supratim Sen', 'supra tim', 'MEME2017SUPRATIM', '2017-03-21', 'supratim.sen@memeinfotech.com', '0', '0', '9475642091', 'male', 'single', 'abc', 'abc', '123456', 'vertical_head', 'Php', 'MTIz', '2017-05-08', 'Yes', 'add', 'sds', 'ss', 'Yes', ''),
(2, 'MeMe170500002', '', 'Neha Kumari ', 'neha', '123MeMe', '0000-00-00', 'kumari@gmail.com', '0', '0', '1234567889', 'female', 'Married', 'ww', 'ww', 'ww', 'developer', 'Web Designer', 'MTIz', '2017-07-10', 'Yes', 'ww', '2ww', 'ww', 'Yes', ''),
(3, 'MeMe170500003', '', 'Marko Polo', 'Marko Polo', '123', '0000-00-00', 'polo@gmail.com', '0', '0', '1231231231', 'female', 'married', 'Paris', 'london', '9999', '', 'Web Designer', 'MTIz', '2017-05-10', 'Yes', 'http://facebook.com', 'http://linkedin.com', 'http://twitter.com', 'Yes', 'admin'),
(4, 'Dev170700001', '', 'Abhishek kumar', '', 'abc12345', '2017-04-11', 'abhimona111@gmail.com', '0', '0', '9800943597', '', '', '', '', '', 'developer', 'Php', 'MTIzNDU=', '2017-07-19', 'yes', '', '', '', 'Yes', ''),
(5, 'Dev170700002', '', 'Tumpa jana', '', 'MED12', '2016-01-08', 'tumpa.jana@memeinfotech.com', '0', '0', '9635788660', '', '', '', '', '', 'manager', 'Php', 'MTIz', '2017-07-19', 'Yes', '', '', '', 'Yes', ''),
(6, 'Dev170700003', '', 'Abhi', '', 'meme123', '2017-04-16', 'abhi@yahoo.com', '0', '0', '9898765432', '', '', '', '', '', 'developer', 'Php', 'MTIz', '2017-07-20', 'yes', '', '', '', 'Yes', ''),
(14, 'Dev170700004', '', 'shailvi kumari sharma', 'shailvi', '34', '2017-03-11', 'shailvisharma08@gmail.com', '0', '5', '1234567899', 'female', 'single', 'patna', 'bihar', '800003', 'developer', 'Php', 'Ng==', '2017-07-21', 'yes', 'fff', 'dff', 'ff', 'Yes', ''),
(15, 'Dev170700005', '', 'sana', 'SANA', '35', '2017-07-03', 'sana.najeeb@memeinfotech.com', '0', '5', '8145638108', 'female', 'Single', 'west bengal', 'bengal', '800003', 'manager', 'Php', 'MTIz', '2017-07-21', 'Yes', 'rr', 'rr', 'rr', 'Yes', ''),
(16, 'Dev170700006', '', 'vijeta', 'vijeta', 'meme1234', '2017-07-05', 'vijeta@gmail.com', '0', '0', '980099999', 'female', 'single', 'bcet', 'wb', '713212', 'vertical_head', 'User Interface/User Experience', 'MTIzNA==', '2017-07-22', 'yes', 'abv', 'abc', 'abcd', 'Yes', ''),
(21, 'Dev170700009', '', 'hhh', '', 'hhh', '2017-07-08', 'hhh@hh.com', '1', '', '98', '', '', '', '', '', 'manager', 'Php', 'ODc=', '2017-07-26', 'No', '', '', '', 'Yes', ''),
(22, 'Dev170700010', '', 'abc', '', '12345', '2017-07-01', 'abc@g.com', '1', 'None', '45678', '', '', '', '', '', 'developer', 'Php', 'MTIz', '2017-07-26', 'No', '', '', '', 'Yes', ''),
(23, 'Dev170700011', '', 'tia', '', 'tia123', '2017-04-11', 'tia@gmail.com', '', '5', '9098989098', '', '', '', '', '', 'developer', 'Php', 'MTIz', '2017-07-26', 'Yes', '', '', '', 'Yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `pro_dev_timesheet`
--

CREATE TABLE `pro_dev_timesheet` (
  `sheet_id` int(11) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `excelname` varchar(255) NOT NULL,
  `addedtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro_draft`
--

CREATE TABLE `pro_draft` (
  `Draft_Id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `D_id` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL,
  `Email_Id` varchar(256) NOT NULL,
  `Subject` varchar(256) NOT NULL,
  `Message` blob NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro_inbox`
--

CREATE TABLE `pro_inbox` (
  `M_Id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `D_id` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL,
  `Email_Id` varchar(256) NOT NULL,
  `Subject` varchar(256) NOT NULL,
  `Message` blob NOT NULL,
  `Date` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ur',
  `del_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_inbox`
--

INSERT INTO `pro_inbox` (`M_Id`, `S_id`, `D_id`, `Admin_id`, `Email_Id`, `Subject`, `Message`, `Date`, `status`, `del_status`) VALUES
(6, 0, 0, 1, 'polo@gmail.com', 'Update', 0x48492c3c62723e3c62723e3c7370616e3e546865207374616e64617264206368756e6b206f66204c6f72656d20497073756d20757365642073696e63652074686520313530307320697320726570726f64756365642062656c6f7720666f722074686f736520696e74657265737465642e2053656374696f6e7320312e31302e333220616e6420312e31302e33332066726f6d202264652046696e6962757320426f6e6f72756d206574204d616c6f72756d222062792043696365726f2061726520616c736f20726570726f647563656420696e207468656972206578616374206f726967696e616c20666f726d2c206163636f6d70616e69656420627920456e676c6973682076657273696f6e732066726f6d207468652031393134207472616e736c6174696f6e20627920482e205261636b68616d2e3c62723e3c2f7370616e3e3c62723e5468616e6b73, '2017-05-10 11:52:56', 'r', 0),
(7, 7, 0, 0, 'admin@gmail.com', 'HEllo all of u', 0x48492c3c62723e626a686466696f666a65696a6632653437323330343833322d343970725b7232335b5b5b39303439353930373738333536373132343536373132375926616d703b5e26616d703b252524242523255e2a26616d703b28294f5f3c62723e3c62723e, '2017-05-10 12:13:19', 'ur', 0),
(8, 7, 0, 0, 'admin@gmail.com', 'gfhfghf', 0x686766686766686668, '2017-05-10 12:16:33', 'ur', 0),
(9, 7, 0, 0, 'admin@gmail.com', 'gfh', 0x67666367666367666368, '2017-05-10 12:17:50', 'ur', 0),
(10, 0, 1, 0, 'polo@gmail.com', 'fthfgjgvj', 0x6e686e6a68626a6d62686d626d626d, '2017-05-10 12:20:56', 'ur', 0),
(12, 0, 0, 0, 'admin@gmail.com', 'tttttt', 0x74747474747474747474747474747474747474, '2017-05-10 12:22:50', 'ur', 0),
(13, 0, 0, 1, 'supratim.sen@memeinfotech.com', 'update', 0x776572746768796a756b696c6b777361646667626e686a776575796b693c62723e7765677274666a7765727467686a3c62723e77646566726774683c62723e77646566677274683c62723e776567727468, '2017-05-10 12:31:00', 'r', 0),
(15, 7, 0, 0, 'supratim.sen@memeinfotech.com', 'fffff', 0x666666666666666666, '2017-05-10 12:44:01', 'ur', 0),
(16, 5, 0, 0, 'supratim.sen@memeinfotech.com', 'test email', 0x7465737420656d61696c3c62723e, '2017-05-10 12:46:13', 'ur', 0),
(17, 0, 1, 0, 'nandan.mishra@memeinfotech.com', 'tumpa', 0x74757475747574757475, '2017-05-10 12:46:50', 'ur', 0),
(18, 5, 0, 0, 'admin@gmail.com', 'test email', 0x7465737420656d61696c3c62723e, '2017-05-10 12:47:19', 'ur', 0),
(19, 7, 0, 0, 'admin@gmail.com', '10_May_2017', 0x68692c3c62723e64626373686462666a73646e6b636a3c62723e6e7373646a6673626a666e6a73646d666a3c62723e646e6668626a643c62723e6e73646a666e73646a3c62723e266e6273703b7468616e6b73, '2017-05-10 13:17:33', 'ur', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pro_project`
--

CREATE TABLE `pro_project` (
  `P_id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `D_id` int(11) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `Role` varchar(256) NOT NULL,
  `C_Name` varchar(256) NOT NULL,
  `Domain` varchar(256) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Type` varchar(256) NOT NULL,
  `Category` varchar(256) NOT NULL,
  `assign_by` varchar(50) NOT NULL,
  `File_Upload` varchar(256) NOT NULL,
  `RegistDate` date NOT NULL,
  `assign_date` date NOT NULL,
  `ProStatus` enum('create','assign','working','complete','pending','live') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_project`
--

INSERT INTO `pro_project` (`P_id`, `S_id`, `D_id`, `designation`, `Role`, `C_Name`, `Domain`, `Name`, `Type`, `Category`, `assign_by`, `File_Upload`, `RegistDate`, `assign_date`, `ProStatus`) VALUES
(17, 29, 0, 'Php', '5', '', 'shop', 'xyz shop', 'Static', 'Blog', '', '15008794580', '2017-07-24', '2017-07-26', 'working'),
(18, 29, 15, 'Php', '5', 'daniel', 'abcd', 'abcd', 'Static', 'Blog', '', '15008814280', '2017-07-24', '0000-00-00', 'working'),
(19, 29, 0, 'User Interface/User Experience', '', 'daniel', 'sss', 'sdsd', 'Static', 'Blog', '', '15008980310', '2017-07-24', '0000-00-00', 'working'),
(20, 29, 0, 'Php', '', 'sana', 'xxyyzz', 'range', 'Static', 'Informative', '', '15010589670', '2017-07-26', '0000-00-00', 'working');

-- --------------------------------------------------------

--
-- Table structure for table `pro_project_message`
--

CREATE TABLE `pro_project_message` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_project_message`
--

INSERT INTO `pro_project_message` (`id`, `project_id`, `message`, `date`) VALUES
(1, 1, '<h2>What is Lorem Ipsum?</h2>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>', '2017-05-09 08:46:11'),
(2, 2, 'jhuijiojijij mlklmkl', '2017-05-10 09:29:48'),
(3, 16, 'via email', '2017-07-24 12:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `pro_sales_feedback`
--

CREATE TABLE `pro_sales_feedback` (
  `id` int(230) NOT NULL,
  `user_id` varchar(235) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `kind` varchar(235) NOT NULL,
  `Name` varchar(340) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Team_Player` int(11) NOT NULL,
  `Ownership` int(11) NOT NULL,
  `Quick_Learner` int(11) NOT NULL,
  `Problem_Solver` int(11) NOT NULL,
  `Passionate` int(11) NOT NULL,
  `proactive` int(11) NOT NULL,
  `Hardworking` int(11) NOT NULL,
  `Attitude` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_sales_feedback`
--

INSERT INTO `pro_sales_feedback` (`id`, `user_id`, `emp_id`, `kind`, `Name`, `Email`, `Team_Player`, `Ownership`, `Quick_Learner`, `Problem_Solver`, `Passionate`, `proactive`, `Hardworking`, `Attitude`) VALUES
(40, '', 0, '', 'Neha Sen', '', 10, 10, 10, 10, 10, 10, 10, 10),
(46, '1', 0, '', 'Nandan Mishra', '', 0, 0, 0, 0, 0, 0, 0, 0),
(48, '', 0, 'developer', 'Nandan Mishra', '', 0, 0, 0, 0, 0, 0, 0, 0),
(49, '', 0, 'developer', 'Nandan Mishra', '', 5, 5, 5, 5, 5, 0, 5, 5),
(50, '1', 0, '', 'Nandan Mishra', '', 3, 3, 3, 3, 3, 3, 33, 3),
(51, '1', 0, '', 'Kumar_Sen', '', 8, 8, 8, 8, 8, 8, 8, 8),
(52, '6', 0, '', 'Neha Sen', '', 8, 9, 7, 9, 9, 9, 9, 8),
(53, '8', 0, '', 'Neha Sen', '', 9, 9, 8, 8, 9, 9, 9, 9),
(54, '6', 0, '', 'Nandan Mishra', '', 7, 7, 7, 7, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `pro_sales_timesheet`
--

CREATE TABLE `pro_sales_timesheet` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `start` time(6) NOT NULL,
  `end` time(6) NOT NULL,
  `total` time(6) NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_sales_timesheet`
--

INSERT INTO `pro_sales_timesheet` (`id`, `userid`, `task`, `start`, `end`, `total`, `projectname`, `Date`) VALUES
(1, 5, 'sdsd', '09:02:00.000000', '05:30:00.000000', '08:28:00.000000', 'dsdds', '2017-07-26'),
(2, 5, 'xxx', '09:15:00.000000', '05:30:00.000000', '08:15:00.000000', 'jjsjjsjs', '2017-07-26'),
(3, 5, '', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '', '2017-07-26'),
(4, 5, '', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '', '2017-07-26'),
(5, 5, '', '00:00:00.000000', '00:00:00.000000', '00:00:00.000000', '', '2017-07-26'),
(6, 5, 'sasd', '09:15:00.000000', '03:12:00.000000', '05:57:00.000000', 'asdsad', '2017-07-26'),
(7, 5, 'sss', '09:02:00.000000', '05:30:00.000000', '08:28:00.000000', 'kok', '2017-07-26'),
(8, 6, 'contact Us', '09:02:00.000000', '05:30:00.000000', '08:28:00.000000', 'gecko', '2017-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `pro_sale_leaveapp`
--

CREATE TABLE `pro_sale_leaveapp` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `status` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_sale_leaveapp`
--

INSERT INTO `pro_sale_leaveapp` (`id`, `userid`, `name`, `from_date`, `to_date`, `purpose`, `status`) VALUES
(1, '8', 'Aman', '2017-07-19', '2017-07-23', 'party', 'Yes'),
(2, '8', 'Aman', '2017-07-19', '2017-07-23', 'dddd', ''),
(3, '8', 'Aman', '2017-07-20', '2017-07-17', 'sdfarg', ''),
(4, '6', 'Neha Sen', '2017-07-29', '2017-07-30', 'trgrtg', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `pro_sale_registration`
--

CREATE TABLE `pro_sale_registration` (
  `S_id` int(11) NOT NULL,
  `SaleReg_No` varchar(256) NOT NULL,
  `S_image` varchar(256) NOT NULL,
  `Sale_Name` varchar(256) NOT NULL,
  `S_Username` varchar(256) NOT NULL,
  `Sale_id` varchar(255) NOT NULL,
  `s_doj` date NOT NULL,
  `EmailId` varchar(256) NOT NULL,
  `PhoneNo` varchar(256) NOT NULL,
  `S_Gen` varchar(50) NOT NULL,
  `S_Marital` varchar(256) NOT NULL,
  `S_address` varchar(256) NOT NULL,
  `S_State` varchar(256) NOT NULL,
  `S_Zip` varchar(256) NOT NULL,
  `Role` varchar(256) NOT NULL,
  `S_FB` varchar(50) NOT NULL,
  `S_LI` varchar(50) NOT NULL,
  `S_TW` varchar(50) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `RegistDate` date NOT NULL,
  `EmailVerification` varchar(256) NOT NULL DEFAULT '''Yes'',''No''',
  `SaleStatus` varchar(256) NOT NULL DEFAULT '''Yes'',''No''',
  `admin_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_sale_registration`
--

INSERT INTO `pro_sale_registration` (`S_id`, `SaleReg_No`, `S_image`, `Sale_Name`, `S_Username`, `Sale_id`, `s_doj`, `EmailId`, `PhoneNo`, `S_Gen`, `S_Marital`, `S_address`, `S_State`, `S_Zip`, `Role`, `S_FB`, `S_LI`, `S_TW`, `Password`, `RegistDate`, `EmailVerification`, `SaleStatus`, `admin_user`) VALUES
(5, 'MeMe170500001', '', 'Nandan Mishra', 'Nandan', '11', '0000-00-00', 'nandan.mishra@memeinfotech.com', '98745633210', 'male', 'Married', 'hh', 'west bengal', '666', 'Manager', 'fgh', 'ghg', 'hg', 'MTIzNDU2', '2017-05-08', 'Yes', 'Yes', ''),
(6, 'MeMe170500002', '', 'Neha Sen', 'dd', '123MeMe', '0000-00-00', 'neha.sen@gmail.com', '1234567890', 'female', 'Single', 'dd', 'dd', '455456', 'manager', '', '', '', 'MTIz', '2017-05-10', 'Yes', 'Yes', ''),
(7, 'MeMe170500003', 'Jacob-Morgan_avatar_1430962685-400x400.jpg', 'Kumar_Sen', 'Kumar', '098', '0000-00-00', 'kumar@yahoo.com', '9832138336', 'male', 'Single', 'kolkata', 'west bengal', '713308', 'Sale', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://twitter.com/', 'MTIz', '2017-05-10', 'Yes', 'Yes', ''),
(10, 'Sales170700003', '', 'Samiksha Sonam', '', 'sam12', '2017-07-03', 'samikshasaloni63@gmail.com', '9635417545', '', '', '', '', '', 'Manager', '', '', '', 'c2Ft', '2017-07-21', 'yes', 'Yes', ''),
(11, 'Sales170700004', '', 'Sonal Chhaya', 'Samiksha Sonam', 'sa2', '2017-07-19', 'sonal@gmail.com', '12345678900', 'female', 'Married', 'ss', 'dd', '44', 'Manager', '', '', '', 'c29uYWw=', '2017-07-21', 'yes', 'Yes', ''),
(12, 'Sales170700005', '', 'saloni', '', 'sa4', '2017-07-28', 'samiksha.sonam.63@gmail.com', '56675434578', '', '', '', '', '', 'Manager', '', '', '', 'c2Fsb25p', '2017-07-21', 'No', 'Yes', ''),
(13, 'Sales170700006', '', 'sa', '', 'sd2', '2017-07-07', 'sgg@gmail.com', '32446545758', '', '', '', '', '', 'Manager', '', '', '', 'c2F4', '2017-07-21', 'No', 'Yes', ''),
(14, 'Sales170700007', '', 'sl', '', 'sl', '2017-07-27', 'sl@gmail.com', '9635417545', '', '', '', '', '', 'Employee', '', '', '', 'c2w=', '2017-07-21', 'No', 'Yes', ''),
(15, 'Sales170700008', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0', '', '', '', '', '2017-07-21', 'No', 'Yes', ''),
(16, 'Sales170700009', '', 'Saloni', '', 'dd', '0000-00-00', 'd@gmail.cm', '34468976433', '', '', '', '', '', 'Employee', '', '', '', 'ZGQ=', '2017-07-21', 'No', 'Yes', ''),
(17, 'Sales170700010', '', 'samiksha', '', 'b', '0000-00-00', 'dc@gmail.com', '9635417545', '', '', '', '', '', 'Employee', '', '', '', 'aA==', '2017-07-21', 'No', 'Yes', ''),
(18, 'Sales170700011', '', 's', '', 'g', '0000-00-00', 'dssdv@gmail.com', '9635417545', '', '', '', '', '', 'Employee', '', '', '', 'cw==', '2017-07-21', 'No', 'Yes', ''),
(19, 'Sales170700012', '', 'hh', '', '7', '0000-00-00', 'hgfh@gmail.com', '12345678900', '', '', '', '', '', 'Manager', '', '', '', 'MTIz', '2017-07-21', 'No', 'Yes', ''),
(20, 'Sales170700013', '', 'deba', '', '6', '0000-00-00', 'p@gmail.com', '88', '', '', '', '', '', 'Manager', '', '', '', 'MTI=', '2017-07-21', 'No', 'Yes', ''),
(21, 'Sales170700014', '', 'Samiksha Sonam', '', 'dd', '2017-07-05', 'r@gmail.com', '9635417545', '', '', '', '', '', 'Employee', '', '', '', 'ZA==', '2017-07-21', 'No', 'Yes', ''),
(22, 'Sales170700015', '', 'Samiksha Sonam', '', 'sam1', '2017-07-03', 'samiksha.sonam@memeinfotech.com', '9635417545', '', '', '', '', '', 'Employee', '', '', '', 'c2FtaQ==', '2017-07-21', 'yes', 'Yes', ''),
(23, 'Sales170700016', '', 'pooja', 'pooja', '3435', '2017-03-01', 'poo@gmail.com', '12345678900', 'female', 'Single', 'durgapur', 'west bengal', '713212', 'Manager', 'fghgg', 'dfghf', 'nghngh', 'Nw==', '2017-07-21', 'yes', 'Yes', ''),
(24, 'MeMe170700001', '', 'Samiksha', '', 'ss', '0000-00-00', 'w@gmail.com', '1234567890', '', '', '', '', '', 'manager', '', '', '', 'MTIz', '2017-07-21', 'Yes', 'Yes', 'admin'),
(25, 'MeMe170700002', '', 'saloni', '', 'dd', '0000-00-00', 'j@gmail.com', '1235667788', '', '', '', '', '', 'employee', '', '', '', 'cXc=', '2017-07-21', 'Yes', 'Yes', 'admin'),
(26, 'MeMe170700003', '', 'summy', '', 's', '0000-00-00', 's@gmail.com', '12345678900', '', '', '', '', '', 'Employee', '', '', '', 'MjM0', '2017-07-21', 'Yes', 'Yes', 'admin'),
(27, 'MeMe170700004', '', 'samiksha', '', 'ddd', '0000-00-00', 'd@gmail.com', '1234577655', '', '', '', '', '', 'Employee', '', '', '', 'c2Ft', '2017-07-22', 'Yes', 'Yes', 'admin'),
(28, 'Sales170700017', '', 'vikram', 'vikram', 'meme123', '2017-04-12', 'vikram@gmail.com', '9876543210', 'male', 'Single', 'hudco', 'wb', '713206', 'Manager', 'abcd', '', '', 'MTIz', '2017-07-22', 'yes', 'Yes', ''),
(29, 'MeMe170700005', '', 'abhi', '', 'meme12345', '0000-00-00', 'abhi@gmail.com', '909098765432', '', '', '', '', '', 'Employee', '', '', '', 'MTI=', '2017-07-22', 'Yes', 'Yes', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pro_sent`
--

CREATE TABLE `pro_sent` (
  `M_Id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `D_id` int(11) NOT NULL,
  `Admin_id` int(11) NOT NULL,
  `Email_Id` varchar(256) NOT NULL,
  `Subject` varchar(256) NOT NULL,
  `Message` blob NOT NULL,
  `Date` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'ur',
  `del_status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_sent`
--

INSERT INTO `pro_sent` (`M_Id`, `S_id`, `D_id`, `Admin_id`, `Email_Id`, `Subject`, `Message`, `Date`, `status`, `del_status`) VALUES
(1, 0, 0, 1, 'supratim.sen@memeinfotech.com', 'test message', 0x486920537570726174696d3c62723e, '2017-05-08 14:27:13', 'ur', 0),
(2, 5, 0, 0, 'supratim.sen@memeinfotech.com', 'test', 0x6869696920737570, '2017-05-08 14:51:01', 'ur', 0),
(3, 7, 0, 0, 'supratim.sen@memeinfotech.com', 'update', 0x68692c3c62723e4c6f72656d20497073756d3c7370616e3e266e6273703b69732073696d706c792064756d6d792074657874206f6620746865207072696e74696e6720616e64207479706573657474696e6720696e6475737472792e204c6f72656d20497073756d20686173206265656e2074686520696e6475737472792773207374616e646172642064756d6d79207465787420657665722073696e6365207468652031353030732c207768656e20616e20756e6b6e6f776e207072696e74657220746f6f6b20612067616c6c6579206f66207479706520616e6420736372616d626c656420697420746f206d616b65206120747970652073706563696d656e20626f6f6b2e20497420686173207375727669766564206e6f74206f6e6c7920666976652063656e7475726965732c2062757420616c736f20746865206c65617020696e746f20656c656374726f6e6963207479706573657474696e672c2072656d61696e696e6720657373656e7469616c6c7920756e6368616e6765642e2049742077617320706f70756c61726973656420696e207468652031393630732077697468207468652072656c65617365206f66204c657472617365742073686565747320636f6e7461696e696e67204c6f72656d20497073756d2070617373616765732c20616e64206d6f726520726563656e746c792077697468206465736b746f70207075626c697368696e6720736f667477617265206c696b6520416c64757320506167654d616b657220696e636c7564696e672076657273696f6e73206f66204c6f72656d20497073756d2e3c62723e3c2f7370616e3e5468616e6b73, '2017-05-10 09:57:55', 'ur', 0),
(4, 0, 1, 0, 'kumar@yahoo.com', 'Recuirement', 0x68692c3c62723e6a3b6f69683038393637353433323331343621402324252a282a26616d703b5e255a29282a7d7b3a4c2667743b3f3f3c62723e3c62723e7468616e6b73, '2017-05-10 10:06:57', 'ur', 0),
(5, 0, 0, 1, 'supratim.sen@memeinfotech.com', 'Update', 0x48492c3c62723e3c62723e3c7370616e3e546865207374616e64617264206368756e6b206f66204c6f72656d20497073756d20757365642073696e63652074686520313530307320697320726570726f64756365642062656c6f7720666f722074686f736520696e74657265737465642e2053656374696f6e7320312e31302e333220616e6420312e31302e33332066726f6d202264652046696e6962757320426f6e6f72756d206574204d616c6f72756d222062792043696365726f2061726520616c736f20726570726f647563656420696e207468656972206578616374206f726967696e616c20666f726d2c206163636f6d70616e69656420627920456e676c6973682076657273696f6e732066726f6d207468652031393134207472616e736c6174696f6e20627920482e205261636b68616d2e3c62723e3c2f7370616e3e3c62723e5468616e6b73, '2017-05-10 11:52:56', 'ur', 0),
(6, 0, 0, 1, 'polo@gmail.com', 'Update', 0x48492c3c62723e3c62723e3c7370616e3e546865207374616e64617264206368756e6b206f66204c6f72656d20497073756d20757365642073696e63652074686520313530307320697320726570726f64756365642062656c6f7720666f722074686f736520696e74657265737465642e2053656374696f6e7320312e31302e333220616e6420312e31302e33332066726f6d202264652046696e6962757320426f6e6f72756d206574204d616c6f72756d222062792043696365726f2061726520616c736f20726570726f647563656420696e207468656972206578616374206f726967696e616c20666f726d2c206163636f6d70616e69656420627920456e676c6973682076657273696f6e732066726f6d207468652031393134207472616e736c6174696f6e20627920482e205261636b68616d2e3c62723e3c2f7370616e3e3c62723e5468616e6b73, '2017-05-10 11:52:56', 'ur', 0),
(7, 7, 0, 0, 'admin@gmail.com', 'HEllo all of u', 0x48492c3c62723e626a686466696f666a65696a6632653437323330343833322d343970725b7232335b5b5b39303439353930373738333536373132343536373132375926616d703b5e26616d703b252524242523255e2a26616d703b28294f5f3c62723e3c62723e, '2017-05-10 12:13:19', 'ur', 0),
(8, 7, 0, 0, 'admin@gmail.com', 'gfhfghf', 0x686766686766686668, '2017-05-10 12:16:33', 'ur', 0),
(9, 7, 0, 0, 'admin@gmail.com', 'gfh', 0x67666367666367666368, '2017-05-10 12:17:50', 'ur', 0),
(10, 0, 1, 0, 'polo@gmail.com', 'fthfgjgvj', 0x6e686e6a68626a6d62686d626d626d, '2017-05-10 12:20:56', 'ur', 0),
(11, 0, 1, 0, 'kumar@yahoo.com', 'fthfgjgvj', 0x6e686e6a68626a6d62686d626d626d, '2017-05-10 12:20:56', 'ur', 0),
(12, 0, 0, 0, 'admin@gmail.com', 'tttttt', 0x74747474747474747474747474747474747474, '2017-05-10 12:22:50', 'ur', 0),
(13, 0, 0, 1, 'supratim.sen@memeinfotech.com', 'update', 0x776572746768796a756b696c6b777361646667626e686a776575796b693c62723e7765677274666a7765727467686a3c62723e77646566726774683c62723e77646566677274683c62723e776567727468, '2017-05-10 12:31:00', 'ur', 0),
(14, 0, 0, 1, 'kumar@yahoo.com', 'update', 0x776572746768796a756b696c6b777361646667626e686a776575796b693c62723e7765677274666a7765727467686a3c62723e77646566726774683c62723e77646566677274683c62723e776567727468, '2017-05-10 12:31:00', 'ur', 0),
(15, 7, 0, 0, 'supratim.sen@memeinfotech.com', 'fffff', 0x666666666666666666, '2017-05-10 12:44:01', 'ur', 0),
(16, 5, 0, 0, 'supratim.sen@memeinfotech.com', 'test email', 0x7465737420656d61696c3c62723e, '2017-05-10 12:46:13', 'ur', 0),
(17, 0, 1, 0, 'nandan.mishra@memeinfotech.com', 'tumpa', 0x74757475747574757475, '2017-05-10 12:46:50', 'ur', 0),
(18, 5, 0, 0, 'admin@gmail.com', 'test email', 0x7465737420656d61696c3c62723e, '2017-05-10 12:47:19', 'ur', 0),
(19, 7, 0, 0, 'admin@gmail.com', '10_May_2017', 0x68692c3c62723e64626373686462666a73646e6b636a3c62723e6e7373646a6673626a666e6a73646d666a3c62723e646e6668626a643c62723e6e73646a666e73646a3c62723e266e6273703b7468616e6b73, '2017-05-10 13:17:33', 'ur', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pro_type`
--

CREATE TABLE `pro_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_type`
--

INSERT INTO `pro_type` (`type_id`, `type`) VALUES
(1, 'Static'),
(2, 'Dynamic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro_admin`
--
ALTER TABLE `pro_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `pro_category`
--
ALTER TABLE `pro_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `pro_customer`
--
ALTER TABLE `pro_customer`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `pro_devs_timesheet`
--
ALTER TABLE `pro_devs_timesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_dev_feedback`
--
ALTER TABLE `pro_dev_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_dev_leaveapp`
--
ALTER TABLE `pro_dev_leaveapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_dev_notes`
--
ALTER TABLE `pro_dev_notes`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `pro_dev_registration`
--
ALTER TABLE `pro_dev_registration`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `pro_dev_timesheet`
--
ALTER TABLE `pro_dev_timesheet`
  ADD PRIMARY KEY (`sheet_id`);

--
-- Indexes for table `pro_draft`
--
ALTER TABLE `pro_draft`
  ADD PRIMARY KEY (`Draft_Id`);

--
-- Indexes for table `pro_inbox`
--
ALTER TABLE `pro_inbox`
  ADD PRIMARY KEY (`M_Id`);

--
-- Indexes for table `pro_project`
--
ALTER TABLE `pro_project`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `pro_project_message`
--
ALTER TABLE `pro_project_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_sales_feedback`
--
ALTER TABLE `pro_sales_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_sales_timesheet`
--
ALTER TABLE `pro_sales_timesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_sale_leaveapp`
--
ALTER TABLE `pro_sale_leaveapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_sale_registration`
--
ALTER TABLE `pro_sale_registration`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `pro_sent`
--
ALTER TABLE `pro_sent`
  ADD PRIMARY KEY (`M_Id`);

--
-- Indexes for table `pro_type`
--
ALTER TABLE `pro_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro_admin`
--
ALTER TABLE `pro_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pro_category`
--
ALTER TABLE `pro_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pro_customer`
--
ALTER TABLE `pro_customer`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pro_devs_timesheet`
--
ALTER TABLE `pro_devs_timesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `pro_dev_feedback`
--
ALTER TABLE `pro_dev_feedback`
  MODIFY `id` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `pro_dev_leaveapp`
--
ALTER TABLE `pro_dev_leaveapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pro_dev_notes`
--
ALTER TABLE `pro_dev_notes`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pro_dev_registration`
--
ALTER TABLE `pro_dev_registration`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pro_dev_timesheet`
--
ALTER TABLE `pro_dev_timesheet`
  MODIFY `sheet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pro_draft`
--
ALTER TABLE `pro_draft`
  MODIFY `Draft_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pro_inbox`
--
ALTER TABLE `pro_inbox`
  MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pro_project`
--
ALTER TABLE `pro_project`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pro_project_message`
--
ALTER TABLE `pro_project_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pro_sales_feedback`
--
ALTER TABLE `pro_sales_feedback`
  MODIFY `id` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `pro_sales_timesheet`
--
ALTER TABLE `pro_sales_timesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pro_sale_leaveapp`
--
ALTER TABLE `pro_sale_leaveapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pro_sale_registration`
--
ALTER TABLE `pro_sale_registration`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `pro_sent`
--
ALTER TABLE `pro_sent`
  MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pro_type`
--
ALTER TABLE `pro_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
