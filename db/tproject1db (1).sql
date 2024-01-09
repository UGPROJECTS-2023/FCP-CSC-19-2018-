-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 06:58 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `clinicnumber` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `StudentName` char(200) NOT NULL,
  `RegNo` varchar(200) NOT NULL,
  `Course` varchar(200) NOT NULL,
  `Program` varchar(200) NOT NULL,
  `Faculty` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `AppliedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `clinicnumber`, `UserName`, `StudentName`, `RegNo`, `Course`, `Program`, `Faculty`, `Department`, `Gender`, `Email`, `AppliedOn`) VALUES
(66, '112233', 'CI@BUK.EDU.NG', 'CALEB ISAA', 'CST/17/IFT/00028', 'INFORMATION TECHNOLOGY', 'Full Time', 'Faculty of Computer Science And Information Technology', 'Department of Information Technology', 'Male', 'caleb419@yahoo.com', '2022-11-19 15:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RegNo` varchar(100) NOT NULL,
  `Status` varchar(1000) NOT NULL,
  `Reason` varchar(100) DEFAULT NULL,
  `SentBy` varchar(100) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mainclearance`
--

CREATE TABLE `mainclearance` (
  `id` int(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `StudentName` varchar(100) NOT NULL,
  `RegNo` varchar(100) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `CoordinatorStatus` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `Coordinator_Cleared_By` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `lvlCoordinatorStatus` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `lvlCoordinator_Cleared_By` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `sCoordinatorStatus` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `sCoordinator_Cleared_By` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `HoDStatus` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `HoD_Cleared_By` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `pCoordinatorStatus` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `pCoordinator_Cleared_By` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `lTechnicianStatus` varchar(100) NOT NULL DEFAULT 'No respond yet',
  `lTechnician_Cleared_By` varchar(100) NOT NULL DEFAULT 'No respond yet'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainclearance`
--

INSERT INTO `mainclearance` (`id`, `UserName`, `StudentName`, `RegNo`, `Faculty`, `Department`, `Course`, `CoordinatorStatus`, `Coordinator_Cleared_By`, `lvlCoordinatorStatus`, `lvlCoordinator_Cleared_By`, `sCoordinatorStatus`, `sCoordinator_Cleared_By`,  `HoDStatus`, `HoD_Cleared_By`, `pCoordinatorStatus`, `pCoordinator_Cleared_By`, `lTechnicianStatus`, `lTechnician_Cleared_By`) VALUES
(48, 'CI@BUK.EDU.NG', 'CALEB ISAA ', 'CST/17/IFT/00028', 'Faculty of Computer Science And Information Technology', 'Department of Information Technology', 'INFORMATION TECHNOLOGY', 'No respond yet', 'No respond yet',  'No respond yet', 'No respond yet', 'No respond yet', 'No respond yet', 'No respond yet', 'No respond yet', 'No respond yet', 'No respond yet', 'No respond yet', 'No respond yet');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `StudentCategory` varchar(200) NOT NULL,
  `AddedBy` varchar(200) NOT NULL,
  `Office` varchar(100) NOT NULL,
  `AddedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `Description`, `StudentCategory`, `AddedBy`, `Office`, `AddedOn`) VALUES
(14, 'STUDENT PAYMENT RECIEPT FOR ALL LEVELS', 'For All Students', '', 'Head Of Department', '2022-01-31 17:31:59'),
(15, 'SUBMISSION OF TRNSCRIPT, CREDENTIALS TO BE SIGNED.', 'For All Students', 'KABIR MUHAMMAD', 'Head Of Department', '2022-11-17 12:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `UserName` varchar(200) NOT NULL,
  `Faculty` varchar(100) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `UserType` varchar(200) NOT NULL,
  `studentNo` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `Picture` varchar(1000) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `UserName`, `Faculty`, `Department`, `Password`, `Email`, `UserType`, `studentNo`, `course`, `Picture`, `PostingDate`) VALUES
(26, 'Super Admin', 'admin', NULL, NULL, '202cb962ac59075b964b07152d234b70', 'superadmin@gmail.com', 'admin', '', '', NULL, '2021-03-20 20:59:39'),
(118, 'KABIR MUHAMMAD', 'KB@BUK.EDU.NG', 'Faculty of Computer Science And Information Technology', 'Department of Information Technology', '81dc9bdb52d04dc20036dbd8313ed055', 'KABIR001@GMAIL.COM', 'HoD', 'ADM/HOD/001', 'Not a Student', 'Not a Student', '2022-11-17 11:57:15'),
(119, 'CALEB ISAA ', 'CI@BUK.EDU.NG', 'Faculty of Computer Science And Information Technology', 'Department of Information Technology', 'caf1a3dfb505ffed0d024130f58c5cfa', 'caleb419@yahoo.com', 'student', 'CST/17/IFT/00028', 'INFORMATION TECHNOLOGY', '7254ba5688b84e29bf0f71d797a10382.jpg', '2022-11-17 12:02:42'),
(120, 'ADAM MUSAB ABDULLAHI', 'MA@BUK.EDU.NG', 'Faculty of Computer Science And Information Technology', 'Department of Information Technology', '89d4402dc03d3b7318bbac10203034ab', 'musabulkhairadam@gmail.com', 'student', 'CST/19/IFT/00102', 'INFORMATION TECHNOLOGY', '44.jpg', '2022-11-17 12:18:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainclearance`
--
ALTER TABLE `mainclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mainclearance`
--
ALTER TABLE `mainclearance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
