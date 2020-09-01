-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 12:11 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `1st_year_2nd_semester`
--

CREATE TABLE `1st_year_2nd_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1st_year_2nd_semester`
--

INSERT INTO `1st_year_2nd_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-1201', 'Objected Oriented Programming\r\n', '3'),
(2, 'CSE-1202', 'Objected Oriented Programming Sessional', '1.5'),
(3, 'MATH-1203', 'Mathematics', '3'),
(4, 'ME-1233', 'Mechanical Engineering', '3'),
(5, 'ME-1234', 'Mechanical Engineering Sessional', '0.75');

-- --------------------------------------------------------

--
-- Table structure for table `1st_year_3rd_semester`
--

CREATE TABLE `1st_year_3rd_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1st_year_3rd_semester`
--

INSERT INTO `1st_year_3rd_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-1301', 'Digital Logic Design', '3'),
(2, 'CSE-1302', 'Digital Logic Design Sessional', '1.5'),
(3, 'CHE-1331', 'Chemistry', '3'),
(4, 'CHE-1332', 'Chemistry Sessional-I', '0.75');

-- --------------------------------------------------------

--
-- Table structure for table `2nd_year_1st_semester`
--

CREATE TABLE `2nd_year_1st_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2nd_year_1st_semester`
--

INSERT INTO `2nd_year_1st_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-2101', 'Data Structures', '3'),
(2, 'CSE-2102', 'Data Structures Sessional', '0.75'),
(3, 'EEE-2121', 'Electronic Devices and Circuits', '3'),
(4, 'EEE-2122', 'Electronic Devices and Circuits', '0.75'),
(5, 'MATH-2131', 'Mathetatics-IV', '3'),
(6, 'HUM-2141', 'Government and Sociology', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `2nd_year_2nd_semester`
--

CREATE TABLE `2nd_year_2nd_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2nd_year_2nd_semester`
--

INSERT INTO `2nd_year_2nd_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-2101', 'Algorithms', '3'),
(2, 'CSE-2102', 'Algorithms Sessional', '1.5'),
(3, 'CSE-2204', 'Software Development Sessional-II', '1.5'),
(4, 'CSE-2205', 'Discrete Mathematics', '3'),
(5, 'MATH-2231', 'Mathematics-V', '3'),
(6, 'HUM-2241', 'Economics', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `2nd_year_3rd_semester`
--

CREATE TABLE `2nd_year_3rd_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2nd_year_3rd_semester`
--

INSERT INTO `2nd_year_3rd_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-2301', 'Microprocessors and Microcomputers', '3'),
(2, 'CSE-2302', 'Microprocessors and Microcomputers Sessional', '1.5'),
(3, 'CSE-2304', 'Numerical Analysis', '3'),
(4, 'CSE-2305', 'Numerical Analysis Sessional', '1.5'),
(5, 'EEE-2321', 'Electrical Technology', '3'),
(6, 'EEE-2322', 'Electrical Technology Sessional', '0.75'),
(7, 'HUM-2341', 'Psychology', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `3rd_year_1st_semester`
--

CREATE TABLE `3rd_year_1st_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3rd_year_1st_semester`
--

INSERT INTO `3rd_year_1st_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-3101', 'Applied Probability and Queuing Theory', '3'),
(2, 'CSE-3104', 'Internet Programming', '0.75'),
(3, 'CSE-3106', 'Software Development Sessional-III', '1.5'),
(4, 'CSE-3107', 'Database System', '3'),
(5, 'CSE-3108', 'Database System Sessional', '1.5'),
(6, 'EEE-3111', 'Electrical Technologies and Pulse System', '3'),
(7, 'EEE-3112', 'Electrical Technologies and Pulse System Sessional', '1.5'),
(8, 'HUM-3141', 'Accounting', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `3rd_year_2nd_semester`
--

CREATE TABLE `3rd_year_2nd_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3rd_year_2nd_semester`
--

INSERT INTO `3rd_year_2nd_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-3201', 'Artificial Intelligence and Expert System', '3'),
(2, 'CSE-3102', 'Artificial Intelligence and Expert System Sessional', '1.5'),
(3, 'CSE-3203', 'Software Engineering', '3'),
(4, 'CSE-3204', 'Software Engineering Sessional', '1.5'),
(5, 'CSE-3205', 'Computer Networks', '3'),
(6, 'CSE-3206', 'Computer Networks Sessional', '1.5'),
(7, 'HUM-3241', 'Industrial Management and Law', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `3rd_year_3rd_semester`
--

CREATE TABLE `3rd_year_3rd_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3rd_year_3rd_semester`
--

INSERT INTO `3rd_year_3rd_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-3301', 'System Programming and Operating Systems', '3'),
(2, 'CSE-3302', 'System Programming and Operating Systems Sessional', '1.5'),
(3, 'CSE-3303', 'Computational Geometry', '3'),
(4, 'CSE-3305', 'Computer Architecture', '3'),
(5, 'EEE-3321', 'Data Communication', '3');

-- --------------------------------------------------------

--
-- Table structure for table `4th_year_1st_semester`
--

CREATE TABLE `4th_year_1st_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4th_year_1st_semester`
--

INSERT INTO `4th_year_1st_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-4101', 'Neural System and Fuzzy System', '3'),
(2, 'CSE-4102', 'Neural System and Fuzzy System Sessional', '1.5'),
(3, 'CSE-4103', 'Compiler Design', '3'),
(4, 'CSE-4104', 'Compiler Design Sessional', '1.5'),
(5, 'CSE-3105', 'Parallel and Distributive Processing', '3'),
(6, 'EEE-4121', 'Electrical Measurement and Instrumentation', '3'),
(7, 'EEE-4122', 'Electrical Measurement and Instrumentation Sessional', '1.5');

-- --------------------------------------------------------

--
-- Table structure for table `4th_year_2nd_semester`
--

CREATE TABLE `4th_year_2nd_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4th_year_2nd_semester`
--

INSERT INTO `4th_year_2nd_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-4201', 'Information System Analysis and Design', '3'),
(2, 'CSE-4202', 'Information System Analysis and Design Sessional', '1.5'),
(3, 'CSE-4203', 'Advanced Computer Architecture', '3'),
(4, 'CSE-4205', 'Digital System Design', '3'),
(5, 'CSE-4206', 'Digital System Design Sessional', '1.5'),
(6, 'CSE-4200', 'Research Project', '1.5'),
(7, 'EEE-4221', 'VLSI Design', '3'),
(8, 'EEE-4223', 'Digital System Processing', '3'),
(9, 'EEE-4225', 'Telecommunication', '3'),
(10, 'EEE-4227', 'Electrical Circuit Design', '3');

-- --------------------------------------------------------

--
-- Table structure for table `4th_year_3rd_semester`
--

CREATE TABLE `4th_year_3rd_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4th_year_3rd_semester`
--

INSERT INTO `4th_year_3rd_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `credit`) VALUES
(1, 'CSE-4301', 'Computer Graphics and Pattern Recognition', '3'),
(2, 'CSE-4302', 'Computer Graphics and Pattern Recognition Sessional', '1.5'),
(3, 'CSE-4303', 'Robotics and Computer Vision', '3'),
(4, 'CSE-4305', 'Information Security and Control', '1.5'),
(5, 'CSE-4300', 'Project and Thesis-II', '1.5'),
(6, 'CSE-43220', 'Industrial Training', '00'),
(7, 'CSE-4307', 'Human Computer Interaction', '3'),
(8, 'CSE-4309', 'Decision Support System', '3'),
(9, 'CSE-4311', 'Knowladge Engineering', '3'),
(10, 'CSE-4313', 'Digital Image Processing', '3');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_user` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_user`, `admin_pass`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` varchar(100) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `credit` varchar(100) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `course_title`, `department`, `credit`, `exam`, `year`, `semester`) VALUES
('CSE-1101', 'Computer Basic and Programming', 'CSE', '3', 'summer-2014', 'First', 'First'),
('CSE-1102', 'Computer Basic and Programming Sessional', 'CSE', '1.5', 'summer-2014', 'First', 'First'),
('HUM-1141', 'English and Human Communication', 'CSE', '3', 'summer-2014', 'First', 'First'),
('Math-1131', 'Mathematics-I', 'CSE', '3', 'summer-2014', 'First', 'First'),
('Phy-1133', 'Physics-I', 'CSE', '3', 'summer-2014', 'First', 'First'),
('Phy-1134', 'Physics Sessional-I', 'CSE', '0.75', 'summer-2014', 'First', 'First'),
('CSE-1201', 'Objected Oriented Programming', 'CSE', '3', 'Fall-2014', 'First', 'Second'),
('CSE-1202', 'Objected Oriented Programming Sessional', 'CSE', '0.75', 'Fall-2014', 'First', 'Second'),
('CSE-1204', 'Software Development Sessional-I', 'CSE', '1.5', 'Fall-2014', 'First', 'Second'),
('EEE-1221', 'Electrical Circuits', 'CSE', '3', 'Fall-2014', 'First', 'Second'),
('EEE-1222', 'Electrical Circuits Sessional', 'CSE', '0.75', 'Fall-2014', 'First', 'Second'),
('MATH-1231', 'Mathematics-I', 'CSE', '3', 'Fall-2014', 'First', 'Second'),
('ME-1223', 'Mechanics and Heat engineering', 'CSE', '3', 'Fall-2014', 'First', 'Second'),
('ME-1224', 'Mechanics and Heat engineering Sessional', 'CSE', '0.75', 'Fall-2014', 'First', 'Second'),
('CSE-4101', 'Neural Networks and Fuzzy Systems', 'CSE', '3.00', 'summer-2017', 'fourth', 'first'),
(' CSE-4102', 'Neural Networks and Fuzzy Systems Sessional', 'CSE', '	0.75', 'summer-2017', 'fourth', 'first'),
('CSE-4201', '	 Information System Analysis and Design', 'CSE', '3.00', 'fall-2017', 'fourth', 'second'),
('CSE-4202', 'Information System Analysis and Design Sessional', 'CSE', '0.75', 'fall-2017', 'fourth', 'second');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(10) NOT NULL,
  `exam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam`) VALUES
(2, 'summer-2013'),
(3, 'fall-2013'),
(4, 'spring-2014'),
(5, 'summer-2014'),
(6, 'fall-2014'),
(7, 'spring-2015'),
(8, 'spring-2013'),
(9, 'summer-2017'),
(10, 'fall-2017');

-- --------------------------------------------------------

--
-- Table structure for table `first_year_first_semester`
--

CREATE TABLE `first_year_first_semester` (
  `Serial_No` int(10) NOT NULL,
  `Sub_code` varchar(100) NOT NULL,
  `Sub_title` varchar(100) NOT NULL,
  `Credit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_year_first_semester`
--

INSERT INTO `first_year_first_semester` (`Serial_No`, `Sub_code`, `Sub_title`, `Credit`) VALUES
(1, 'CSE-1101', 'Computer Basic and Programming', '3'),
(2, 'CSE-1102', 'Computer Basic and Programming Sessional', '1.5'),
(3, 'HUM-1141', 'English and Human Communication', '1.5'),
(4, 'MATH-1103', 'Mathematics-I', '3'),
(5, 'PHY-1132', 'Physics-I', '3'),
(6, 'PHY-1133', 'Physics Sessional-I', '0.75');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `exam` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `stu_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`exam`, `year`, `semester`, `stu_id`) VALUES
('summer-2014', 'First', 'First', '20142067010'),
('summer-2014', 'First', 'First', '20142022010'),
('fall-2014', 'First', 'Second', '20142048010'),
('spring-2014', 'First', 'Second', '20142022010'),
('summer-2017', 'fourth', 'first', '20142022010'),
('fall-2017', 'fourth', 'first', '20142022010');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `serial` int(10) NOT NULL,
  `exam` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `credit` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `letter_grade` varchar(100) NOT NULL,
  `stu_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`serial`, `exam`, `year`, `semester`, `course_code`, `course_title`, `credit`, `grade`, `letter_grade`, `stu_id`) VALUES
(1, 'summer-2014', 'First', 'First', 'CSE-1102', 'Computer Basic and Programming Sessional', '1.5', '4.00', 'A+', '20142022010'),
(2, 'summer-2014', 'First', 'First', 'HUM-1141', 'English and Human Communication', '3', '4.00', 'A+', '20142022010'),
(3, 'summer-2014', 'First', 'First', 'Math-1131', 'Mathematics-I', '3', '4.00', 'A+', '20142022010'),
(4, 'summer-2014', 'First', 'First', 'Phy-1133', 'Physics-I', '3', '4.00', 'A+', '20142022010'),
(5, 'summer-2014', 'First', 'First', 'Phy-1134', 'Physics Sessional-I', '0.75', '3.5', 'A-', '20142022010'),
(6, 'summer-2014', 'First', 'First', 'CSE-1101', 'Computer Basic and Programming', '3', '4.00', 'A+', '20142022010'),
(7, 'summer-2014', 'First', 'First', 'CSE-1101', 'Computer Basic and Programming', '3', '4.00', 'A+', '20142048010'),
(8, 'summer-2014', 'First', 'First', 'CSE-1102', 'Computer Basic and Programming Sessional', '1.5', '4.00', 'A+', '20142048010'),
(9, 'fall-2014', 'First', 'Second', 'CSE-1201', 'Objected Oriented Programming', '3', '3.75', 'A', '20142022010'),
(10, 'fall-2014', 'First', 'Second', 'CSE-1202', 'Objected Oriented Programming Sessional', '0.75', '4.00', 'A+', '20142022010'),
(11, 'fall-2014', 'First', 'Second', 'CSE-1201', 'Objected Oriented Programming', '3', '3.75', 'A', '20142048010'),
(12, 'fall-2014', 'First', 'Second', 'CSE-1202', 'Objected Oriented Programming Sessional', '0.75', '4.00', 'A+', '20142048010'),
(13, 'fall-2014', 'First', 'Second', 'CSE-1204', 'Software Development Sessional-I', '1.5', '4.00', 'A+', '20142022010'),
(14, 'fall-2014', 'First', 'Second', 'EEE-1221', 'Electrical Circuits', '3', '4.00', 'A+', '20142022010'),
(15, 'fall-2014', 'First', 'Second', 'EEE-1222', 'Electrical Circuits Sessional', '0.75', '4.00', 'A+', '20142022010'),
(17, 'fall-2014', 'First', 'Second', 'MATH-1231', 'Mathematics-I', '3', '4.00', 'A+', '20142022010'),
(18, 'fall-2014', 'First', 'Second', 'ME-1223', 'Mechanics and Heat engineering', '3', '4.00', 'A+', '20142022010'),
(19, 'fall-2014', 'First', 'Second', 'ME-1224', 'Mechanics and Heat engineering Sessional', '0.75', '4.00', 'A+', '20142022010'),
(20, 'summer-2014', 'First', 'First', 'HUM-1141', 'English and Human Communication', '3', '4.00', 'A', '20142048010'),
(21, '', '', '', '', '', '', '4.00', 'A', '20142048010');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(10) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(33) NOT NULL,
  `user_name` varchar(74) NOT NULL,
  `user_pass` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_pass`) VALUES
(1, 'Md Nayem', '20142022010'),
(2, 'Zahid Hasan', '20142048010');

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE `u_reg` (
  `u_id` int(100) NOT NULL,
  `Student_id` varchar(100) NOT NULL,
  `Students_Name` varchar(100) NOT NULL,
  `Fathers_Name` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Semester` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`u_id`, `Student_id`, `Students_Name`, `Fathers_Name`, `Department`, `Semester`, `Year`) VALUES
(1, '20142022010', 'Md Nayem', 'Md Ahamad', 'CSE', 'summer', '2014'),
(2, '20142048010', 'Zahid Hassan', 'Md Sawkat Ali', 'CSE', 'summer', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(10) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `year`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Fourth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1st_year_2nd_semester`
--
ALTER TABLE `1st_year_2nd_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `1st_year_3rd_semester`
--
ALTER TABLE `1st_year_3rd_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `2nd_year_1st_semester`
--
ALTER TABLE `2nd_year_1st_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `2nd_year_2nd_semester`
--
ALTER TABLE `2nd_year_2nd_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `2nd_year_3rd_semester`
--
ALTER TABLE `2nd_year_3rd_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `3rd_year_1st_semester`
--
ALTER TABLE `3rd_year_1st_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `3rd_year_2nd_semester`
--
ALTER TABLE `3rd_year_2nd_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `3rd_year_3rd_semester`
--
ALTER TABLE `3rd_year_3rd_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `4th_year_1st_semester`
--
ALTER TABLE `4th_year_1st_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `4th_year_2nd_semester`
--
ALTER TABLE `4th_year_2nd_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `4th_year_3rd_semester`
--
ALTER TABLE `4th_year_3rd_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_year_first_semester`
--
ALTER TABLE `first_year_first_semester`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_reg`
--
ALTER TABLE `u_reg`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1st_year_2nd_semester`
--
ALTER TABLE `1st_year_2nd_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `1st_year_3rd_semester`
--
ALTER TABLE `1st_year_3rd_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `2nd_year_1st_semester`
--
ALTER TABLE `2nd_year_1st_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `2nd_year_2nd_semester`
--
ALTER TABLE `2nd_year_2nd_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `2nd_year_3rd_semester`
--
ALTER TABLE `2nd_year_3rd_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `3rd_year_1st_semester`
--
ALTER TABLE `3rd_year_1st_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `3rd_year_2nd_semester`
--
ALTER TABLE `3rd_year_2nd_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `3rd_year_3rd_semester`
--
ALTER TABLE `3rd_year_3rd_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `4th_year_1st_semester`
--
ALTER TABLE `4th_year_1st_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `4th_year_2nd_semester`
--
ALTER TABLE `4th_year_2nd_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `4th_year_3rd_semester`
--
ALTER TABLE `4th_year_3rd_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `first_year_first_semester`
--
ALTER TABLE `first_year_first_semester`
  MODIFY `Serial_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `serial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `u_reg`
--
ALTER TABLE `u_reg`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
