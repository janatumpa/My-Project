-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2017 at 11:37 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 5.6.30-7+deb.sury.org~xenial+1

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
(1, 5, 'Barry Allen', 'Star Labs', 'Star City', '2254789654', 'barry@gmail.com', 'Laboratory Services', '2017-05-09 04:44:22', 'Yes');

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
  `Email_Id` varchar(256) NOT NULL,
  `Phone_No` varchar(256) NOT NULL,
  `D_Gen` varchar(50) NOT NULL,
  `D_Marital` varchar(50) NOT NULL,
  `D_address` varchar(256) NOT NULL,
  `D_State` varchar(256) NOT NULL,
  `D_Zip` varchar(256) NOT NULL,
  `Designation` varchar(256) NOT NULL,
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

INSERT INTO `pro_dev_registration` (`D_id`, `DevReg_No`, `D_image`, `Dev_Name`, `D_Username`, `Developer_id`, `Email_Id`, `Phone_No`, `D_Gen`, `D_Marital`, `D_address`, `D_State`, `D_Zip`, `Designation`, `Pwd`, `RegistDate`, `EmailVerification`, `D_FB`, `D_LI`, `D_TW`, `DevStatus`, `admin_user`) VALUES
(1, 'MeMe170500001', '', 'Supratim Sen', '', 'MEME2017SUPRATIM', 'supratim.sen@memeinfotech.com', '9475642091', '', '', '', '', '', 'Php', 'c3VwcmF0aW0=', '2017-05-08', 'Yes', '', '', '', 'Yes', '');

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
(1, 0, 0, 1, 'supratim.sen@memeinfotech.com', 'test message', 0x486920537570726174696d3c62723e, '2017-05-08 14:27:13', 'r', 0),
(2, 5, 0, 0, 'supratim.sen@memeinfotech.com', 'test', 0x6869696920737570, '2017-05-08 14:51:01', 'r', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pro_project`
--

CREATE TABLE `pro_project` (
  `P_id` int(11) NOT NULL,
  `S_id` int(11) NOT NULL,
  `D_id` int(11) NOT NULL,
  `C_Name` varchar(256) NOT NULL,
  `Domain` varchar(256) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Type` varchar(256) NOT NULL,
  `Category` varchar(256) NOT NULL,
  `File_Upload` varchar(256) NOT NULL,
  `RegistDate` date NOT NULL,
  `assign_date` date NOT NULL,
  `ProStatus` enum('create','assign','working','complete','pending','live') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_project`
--

INSERT INTO `pro_project` (`P_id`, `S_id`, `D_id`, `C_Name`, `Domain`, `Name`, `Type`, `Category`, `File_Upload`, `RegistDate`, `assign_date`, `ProStatus`) VALUES
(1, 5, 1, 'Barry Allen', 'flash', 'flash', 'Informative', 'Dynamin', '14943051510,2017-05-09_Pending Functionality.docx', '2017-05-09', '2017-05-09', 'working');

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
(1, 1, '<h2>What is Lorem Ipsum?</h2>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>', '2017-05-09 08:46:11');

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
  `EmailId` varchar(256) NOT NULL,
  `PhoneNo` varchar(256) NOT NULL,
  `S_Gen` varchar(50) NOT NULL,
  `S_Marital` varchar(256) NOT NULL,
  `S_address` varchar(256) NOT NULL,
  `S_State` varchar(256) NOT NULL,
  `S_Zip` varchar(256) NOT NULL,
  `Position` varchar(256) NOT NULL,
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

INSERT INTO `pro_sale_registration` (`S_id`, `SaleReg_No`, `S_image`, `Sale_Name`, `S_Username`, `Sale_id`, `EmailId`, `PhoneNo`, `S_Gen`, `S_Marital`, `S_address`, `S_State`, `S_Zip`, `Position`, `S_FB`, `S_LI`, `S_TW`, `Password`, `RegistDate`, `EmailVerification`, `SaleStatus`, `admin_user`) VALUES
(5, 'MeMe170500001', '', 'Nandan Mishra', '', 'MeMe2017', 'nandan.mishra@memeinfotech.com', '98745633210', '', '', '', '', '', 'TL', '', '', '', 'MTIzNDU2', '2017-05-08', 'Yes', 'Yes', '');

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
(2, 5, 0, 0, 'supratim.sen@memeinfotech.com', 'test', 0x6869696920737570, '2017-05-08 14:51:01', 'ur', 0);

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
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pro_dev_notes`
--
ALTER TABLE `pro_dev_notes`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pro_dev_registration`
--
ALTER TABLE `pro_dev_registration`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pro_draft`
--
ALTER TABLE `pro_draft`
  MODIFY `Draft_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pro_inbox`
--
ALTER TABLE `pro_inbox`
  MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pro_project`
--
ALTER TABLE `pro_project`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pro_project_message`
--
ALTER TABLE `pro_project_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pro_sale_registration`
--
ALTER TABLE `pro_sale_registration`
  MODIFY `S_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pro_sent`
--
ALTER TABLE `pro_sent`
  MODIFY `M_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pro_type`
--
ALTER TABLE `pro_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
