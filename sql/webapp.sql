-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 07:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `AD_ID` int(11) NOT NULL,
  `AD_FNAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `AD_LNAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SCHOOL_ID` int(11) NOT NULL,
  `isDean` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`AD_ID`, `AD_FNAME`, `AD_LNAME`, `SCHOOL_ID`, `isDean`) VALUES
(1, 'John ', 'ProfDoe', 1, 0),

-- --------------------------------------------------------

--
-- Table structure for table `input_form`
--

CREATE TABLE `input_form` (
  `FORM_NO` int(25) NOT NULL,
  `DATE` date DEFAULT NULL,
  `SEMESTER` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ACADEMIC_YEAR` int(15) NOT NULL,
  `ST_ID` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `PREFIX` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `FIRST_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LAST_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ST_LEVEL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DEAN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SCHOOL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PROGRAM` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE_NUMBER` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `REASONS` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `COURSE_CODE` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `COURSE_TITLE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `OTHER_EXPLAIN` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `PRO_ID` int(25) NOT NULL,
  `PRO_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SCHOOL_ID` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`PRO_ID`, `PRO_NAME`, `SCHOOL_ID`) VALUES
(1, 'Computer Engineering', 1),
(2, 'Information and Communication Engineering', 1),
(3, 'Digital Technology for Business Innovation', 1),
(4, 'Software Engineering', 1),
(5, 'Computer Science and Innovation', 1),
(6, 'Multimedia Technology and Animation', 1),
(7, 'Biosciences', 2),
(8, 'Applied Chemistry', 2),
(9, 'Materials Engineering', 2),
(10, 'Laws', 3),
(12, 'Tourism Management', 4),
(13, 'Hospitality Industry Management', 4),
(14, 'Aviation Business Management', 4),
(15, 'Logistics and Supply Chain Management', 4),
(16, 'Business Administration', 4),
(17, 'Postharvest Technology and Logistics', 5),
(18, 'Food Science and Technology', 5),
(19, 'Cosmetic Science', 6),
(20, 'Beauty Technology', 6),
(21, 'Sports and Health Science', 7),
(22, 'Environmental Health', 7),
(23, 'Occupational Health and Safety', 7),
(24, 'Nursing', 8),
(25, 'Medicine', 9),
(26, 'Dental Surgery Program', 10),
(27, 'International Development', 11),
(28, 'Chinese Studies', 12),
(29, 'Business Chinese', 12),
(30, 'Chinese Language and Culture', 12),
(31, 'Teaching Chinese Language', 12),
(32, ' Applied Thai Traditional Medicine Program', 13),
(33, 'Physical Therapy', 13),
(34, 'Traditional Chinese Medicine Program', 13),
(35, 'Accoungting Program', 4),
(36, 'Economics Program', 14),
(38, 'Arts Program in English', 14);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `SCHOOL_ID` int(25) NOT NULL,
  `SCHOOL_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`SCHOOL_ID`, `SCHOOL_NAME`) VALUES
(5, 'School of Agro-Industry'),
(6, 'School of Cosmetic Science'),
(10, 'School of Dentistry'),
(7, 'School of Health Science'),
(1, 'School of Information Technology'),
(13, 'School of Integrative Medicine'),
(3, 'School of Law'),
(14, 'School of Liberal Arts'),
(4, 'School of Management'),
(9, 'School of Medicine'),
(8, 'School of Nursing'),
(2, 'School of Science'),
(12, 'School of Sinology'),
(11, 'School of Social Innovation');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `ST_ID` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `PREFIX` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `F_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `L_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SCHOOL_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PRO_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GPAX` float NOT NULL,
  `AD_ID` int(11) NOT NULL DEFAULT 1,
  `DEAN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `STATUS` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE_NO` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`ST_ID`, `PREFIX`, `F_NAME`, `L_NAME`, `SCHOOL_NAME`, `PRO_NAME`, `GPAX`, `AD_ID`, `DEAN`, `STATUS`, `PHONE_NO`) VALUES
('4751011008', 'Mrs.', 'Jane', 'Doe', 'School of Liberal Arts', 'Arts Program in English', 4, 13, 'John Profdoe', 'Graduate', '0811111111'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`AD_ID`),
  ADD KEY `SCHOOL_ID` (`SCHOOL_ID`);

--
-- Indexes for table `input_form`
--
ALTER TABLE `input_form`
  ADD PRIMARY KEY (`FORM_NO`),
  ADD KEY `DEAN` (`DEAN`),
  ADD KEY `SCHOOL` (`SCHOOL`),
  ADD KEY `PROGRAM` (`PROGRAM`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`PRO_ID`),
  ADD UNIQUE KEY `PRO_NAME` (`PRO_NAME`),
  ADD KEY `SCHOOL_ID` (`SCHOOL_ID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`SCHOOL_ID`),
  ADD UNIQUE KEY `SCHOOL_NAME` (`SCHOOL_NAME`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`ST_ID`) USING BTREE,
  ADD KEY `PRO_NAME` (`PRO_NAME`),
  ADD KEY `SCHOOL_NAME` (`SCHOOL_NAME`),
  ADD KEY `AD_ID` (`AD_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `AD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `input_form`
--
ALTER TABLE `input_form`
  MODIFY `FORM_NO` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisor`
--
ALTER TABLE `advisor`
  ADD CONSTRAINT `advisor_ibfk_1` FOREIGN KEY (`SCHOOL_ID`) REFERENCES `school` (`SCHOOL_ID`);

--
-- Constraints for table `input_form`
--
ALTER TABLE `input_form`
  ADD CONSTRAINT `input_form_ibfk_1` FOREIGN KEY (`DEAN`) REFERENCES `school` (`SCHOOL_NAME`),
  ADD CONSTRAINT `input_form_ibfk_2` FOREIGN KEY (`SCHOOL`) REFERENCES `school` (`SCHOOL_NAME`),
  ADD CONSTRAINT `input_form_ibfk_3` FOREIGN KEY (`PROGRAM`) REFERENCES `program` (`PRO_NAME`);

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`SCHOOL_ID`) REFERENCES `school` (`SCHOOL_ID`);

--
-- Constraints for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD CONSTRAINT `PRO_NAME` FOREIGN KEY (`PRO_NAME`) REFERENCES `program` (`PRO_NAME`),
  ADD CONSTRAINT `SCHOOL_NAME` FOREIGN KEY (`SCHOOL_NAME`) REFERENCES `school` (`SCHOOL_NAME`),
  ADD CONSTRAINT `student_detail_ibfk_1` FOREIGN KEY (`AD_ID`) REFERENCES `advisor` (`AD_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
