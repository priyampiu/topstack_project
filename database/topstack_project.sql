-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 07:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topstack_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(11) NOT NULL,
  `Department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `Department`) VALUES
(21, 'Computer Science and Technology'),
(22, 'Civil'),
(23, 'Servey'),
(24, 'Electrical'),
(25, 'Electronics and Telecomunication'),
(26, 'Pharmecy'),
(27, 'Automobile'),
(28, 'Mechanical'),
(29, 'Science and Humanity '),
(30, 'Cyber Security ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `Image`) VALUES
(15, 'IMG-628404edc302e1.97190705.jpg'),
(17, 'IMG-628504f99c3ab2.06893747.jpg'),
(23, 'IMG-62852b64e3a445.15421380.jpeg'),
(24, 'IMG-62852b6ed3eda8.04362301.jpg'),
(25, 'IMG-62852b7edf98c9.14876425.jpg'),
(26, 'IMG-62852b8bded0f3.40353426.jpg'),
(27, 'IMG-62852b956e4107.56315461.jpg'),
(28, 'IMG-62852b9e396120.16157599.jpg'),
(29, 'IMG-62852bac083c04.19523491.jpeg'),
(30, 'IMG-62852bba4d62d5.99490452.jpg'),
(31, 'IMG-62852bcaf18379.92924195.jpg'),
(32, 'IMG-62852be28286b8.02558749.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ID` int(11) NOT NULL,
  `Notice_Date` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `File` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`ID`, `Notice_Date`, `Subject`, `File`) VALUES
(11, '03-05-2022', 'First Internal Model', 'File-628521ddf2a746.30355807.pdf'),
(12, '03-05-2022', 'Summer Vacation ', 'File-628529d3316d92.93601385.pdf'),
(13, '14-05-2022', 'Jelet Exam', 'File-62852a00a458f9.03465626.pdf'),
(14, '18-05-2022', 'Industrial Visit', 'File-62852a6b95c655.42398847.pdf'),
(15, '02-06-2022', '2nd Internal', 'File-62852a8b0830d6.28413375.pdf'),
(16, '23-06-2022', '6th Semester Exam', 'File-62852aacdb3657.80366309.pdf'),
(17, '29-06-2022', 'Jelet Result Out', 'File-62852ad41a3335.27644171.jpeg'),
(18, '01-07-2022', 'Counseling ', 'File-62852afd42b773.38550207.pdf'),
(19, '15-06-2022', '5th Semester Result Out', 'File-62852b1d1fe823.14468877.jpeg'),
(20, '05-07-2022', 'Admission ', 'File-62852b47d7a5f9.59494327.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Roll` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Dept_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Name`, `Email`, `Contact`, `Roll`, `Address`, `Dept_Id`) VALUES
(15, 'Priya Maity', 'priyamaity869@gmail.com', '6547382225', '32', 'Khosalpur, Singur, Hooghly, West Bengal, 712409', 21),
(16, 'Barnale Deb', 'bobi@gmail.com', '736725152', '26', 'dankuni,hooghly,westbengal', 21),
(17, 'Oindri Khan', 'oindri@gmail.com', '4326634746', '11', 'Chinsura,Hooghly', 22),
(18, 'Retika Bera', 'retika@gmail.com', '267236734', '54', 'Nalikul,Hooghly', 24),
(19, 'Shreya Maity', 'shreya@gmail.com', '847356522', '23', 'bandel,hooghly', 26),
(20, 'Piu Mandol', 'piu@gmail.com', '576328648', '76', 'Khosalpur, Singur, Hooghly, West Bengal, 712409', 28),
(21, 'Manoj Mandol', 'manoj@gmail.com', '6547382225', '31', 'Pawnan,Singur,Hooghly', 21);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Dept_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `Name`, `Email`, `Contact`, `Subject`, `Dept_Id`) VALUES
(20, 'Debasish Hati', 'debasish@gmail.com', '8765432134', 'C,C++,Java,Compiler', 21),
(21, 'Shibdash Vhattacharya', 'shibdas@gmail.com', '234567891', 'DS,CG,TOC,DIP', 21),
(22, 'Sohan Goswami', 'sohan@gmail.com', '123456789', 'Photoshop,Advance java', 21),
(23, 'Soumali Roy', 'soumali@gmail.com', '9876345678', 'DBMS,CN,SE,OS', 21),
(24, 'Manoj Pathal', 'manoj@gmail.com', '765123454', 'Physics ', 29),
(25, 'Mamon Pathak', 'mamon@gmail.com', '534332563', 'Math', 29),
(26, 'Pusmita Bhattacharya', 'pusmita@gmail.com', '7634725612', 'Chemistry', 29),
(27, 'Jeet Dutta', 'jeet@gmail.com', '468275346', 'Physics ', 29),
(28, 'Suranjan Dhar', 'suranjan@gmail.com', '8476236245', 'Discrete Math', 29),
(29, 'Antara Bhattacharya', 'antara@gmail.com', '643876382', 'management', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Dept_Id` (`Dept_Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Dept_Id` (`Dept_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Dept_Id`) REFERENCES `department` (`ID`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`Dept_Id`) REFERENCES `department` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
