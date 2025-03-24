-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2025 at 07:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Avishkar Deshmukh ', 'Avishkar', 9146964882, 'try.avishkar@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2025-03-21 04:36:52'),
(2, 'Shreya Chavan', 'Shreya', 9226598130, 'shreyachavan@gmail.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', '2025-03-22 16:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `ID` int(5) NOT NULL,
  `ClassName` varchar(50) DEFAULT NULL,
  `Section` varchar(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`ID`, `ClassName`, `Section`, `CreationDate`) VALUES
(12, 'B.A. (English)', 'A', '2023-09-26 19:18:33'),
(13, 'B.A. (Marathi)', 'B', '2023-09-26 19:18:42'),
(14, 'B.A. (Hindi)', 'A', '2023-09-26 19:19:18'),
(15, 'B.A. (Economics)', 'B', '2023-09-26 19:19:26'),
(16, 'B.A. (History)', 'A', '2023-09-26 19:20:14'),
(17, 'B.A. (Political Science)', 'A', '2023-09-26 19:20:32'),
(18, 'B.A. (Geography)', 'B', '2023-09-26 19:20:47'),
(19, 'B.Com', 'A', '2025-03-22 16:50:28'),
(20, 'B.Sc. (Physics)', 'A', '2025-03-22 16:50:28'),
(21, 'B.Sc. (Chemistry)', 'B', '2025-03-22 16:50:28'),
(22, 'B.Sc. (Botany)', 'A', '2025-03-22 16:50:28'),
(23, 'B.C.A.', 'B', '2025-03-22 16:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Subject` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `Email`, `Subject`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'demo', 'Avishkar@gmail.com', 'demo', 'demo', '2025-03-22 16:17:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` mediumtext DEFAULT NULL,
  `ClassId` int(10) DEFAULT NULL,
  `NoticeMsg` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `NoticeTitle`, `ClassId`, `NoticeMsg`, `CreationDate`) VALUES
(2, 'New Exam Schedule', 3, 'The new exam schedule has been published. Check the notice board.', '2025-03-22 16:51:54'),
(3, 'Assignment Submission', 2, 'Submit your assignments by this Friday.', '2025-03-22 16:51:55'),
(4, 'Holiday Notice', 3, 'The college will remain closed on Monday due to maintenance work.', '2025-03-22 16:51:55'),
(5, 'Library Notice', 8, 'Library books must be returned before the end of this month.', '2025-03-22 16:51:55'),
(6, 'Mid-Semester Test', 17, 'Mid-semester test will begin from next week. Prepare accordingly.', '2025-03-22 16:51:55'),
(7, 'Sports Event', 5, 'A sports event will be held next Sunday. Register now!', '2025-03-22 16:51:55'),
(8, 'Workshop on Web Development', 10, 'Attend a workshop on modern web development this weekend.', '2025-03-22 16:51:55'),
(9, 'Fee Payment Reminder', 12, 'Last date for fee payment is approaching. Pay before the deadline.', '2025-03-22 16:51:55'),
(10, 'Mid-Semester Test', 23, 'ready for exams', '2025-03-22 17:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'ABOUT US', '<div style=\"text-align: start;\"><span style=\"color: rgb(19, 19, 19); font-family: &quot;Source Sans 3&quot;; font-size: 18px;\">Shrimant Babasaheb Deshmukh Mahavidyalaya is an educational institute located in Atpadi, a town in the drought-prone area of the eastern part of the Sangli district of Western Maharashtra, India.</span><br style=\"color: rgb(19, 19, 19); font-family: &quot;Source Sans 3&quot;; font-size: 18px;\"><span style=\"color: rgb(19, 19, 19); font-family: &quot;Source Sans 3&quot;; font-size: 18px;\">The college was established in year 1969 by Late Shrimant Babasaheb Deshmukh as a unit of The Atpadi Education Society (1953) providing higher education to the local community in a perimeter of about 40 km. Established with the aim of providing quality education to the local community, the college is named after Shrimant Babasaheb Deshmukh, a prominent figure in the region associated with educational and social initiatives in the year 2012.....&nbsp;</span></div>', NULL, NULL, NULL),
(2, 'contactus', 'CONTACT US', 'AT post: Atpadi', ' sbdmatpadi@rediffmail.com', 23432216, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpublicnotice`
--

CREATE TABLE `tblpublicnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` varchar(200) DEFAULT NULL,
  `NoticeMessage` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpublicnotice`
--

INSERT INTO `tblpublicnotice` (`ID`, `NoticeTitle`, `NoticeMessage`, `CreationDate`) VALUES
(1, 'College Reopening Notice', 'The college will reopen from next Monday. Please check your schedules.', '2025-03-22 16:53:01'),
(2, 'Important Announcement', 'All students are required to attend the upcoming seminar.', '2025-03-22 16:53:01'),
(3, 'Annual Cultural Fest', 'Get ready for an exciting cultural fest this month!', '2025-03-22 16:53:01'),
(4, 'New Admission Open', 'Admissions are now open for the new academic session. Apply soon!', '2025-03-22 16:53:01'),
(5, 'Scholarship Announcement', 'Scholarship applications are now open. Submit your forms before the deadline.', '2025-03-22 16:53:01'),
(6, 'Sports Trials', 'College sports trials will begin next week. Register at the sports department.', '2025-03-22 16:53:01'),
(7, 'Library New Arrivals', 'New books have been added to the library. Visit and explore.', '2025-03-22 16:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `StudentEmail` varchar(200) DEFAULT NULL,
  `StudentClass` varchar(100) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `StuID` varchar(200) DEFAULT NULL,
  `FatherName` mediumtext DEFAULT NULL,
  `MotherName` mediumtext DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `AltenateNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `DateofAdmission` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `StudentName`, `StudentEmail`, `StudentClass`, `Gender`, `DOB`, `StuID`, `FatherName`, `MotherName`, `ContactNumber`, `AltenateNumber`, `Address`, `UserName`, `Password`, `Image`, `DateofAdmission`) VALUES
(13, 'Avishkar', 'try.avishkar@gmail.com', '23', 'Male', '2004-11-19', '1772', 'Tanaji', 'Anuradha', 9146964882, 9146964882, 'Deshmukhwadi Tal:Atpadi', 'Avishkar', 'f91e15dbec69fc40f81f0876e7009648', '9006ce8cbbfae67330fff0f0632bce281742666278.jpg', '2025-03-22 17:57:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
