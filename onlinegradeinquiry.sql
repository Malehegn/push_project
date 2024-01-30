-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 17, 2016 at 10:04 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `onlinegradeinquiry`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL auto_increment,
  `UserName` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  PRIMARY KEY  (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`adminID`, `UserName`, `Password`) VALUES 
(7, 'admin', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `course`
-- 

CREATE TABLE `course` (
  `courseID` int(11) NOT NULL auto_increment,
  `coursetitle` varchar(50) NOT NULL,
  `coursedescription` varchar(150) NOT NULL,
  `prerequesit` varchar(50) NOT NULL,
  `hrsperweek` varchar(50) NOT NULL,
  `unit` int(11) NOT NULL,
  `dateadded` date NOT NULL,
  PRIMARY KEY  (`courseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

-- 
-- Dumping data for table `course`
-- 

INSERT INTO `course` (`courseID`, `coursetitle`, `coursedescription`, `prerequesit`, `hrsperweek`, `unit`, `dateadded`) VALUES 
(16, 'ITECH312', 'Foundamental programming', 'IS 212', '3', 3, '2016-05-26'),
(17, 'ITECH313', 'System Analysis and Design', 'IS 223', '5', 3, '2016-05-26'),
(19, 'IS 314', 'Operating System', '', '5', 3, '0000-00-00'),
(21, 'IS 315', 'Web Development', 'IS 213', '5', 3, '2011-09-30'),
(36, 'ITECH2321', 'Introduction to Networking', 'null', '4', 0, '2016-05-10'),
(39, 'ITECH4215', 'Advanced database', '', '5', 0, '2016-06-15'),
(45, 'ITECH9812', 'Internet Programming', '', '5', 0, '2016-06-15');

-- --------------------------------------------------------

-- 
-- Table structure for table `department`
-- 

CREATE TABLE `department` (
  `depID` int(10) NOT NULL auto_increment,
  `depName` varchar(30) NOT NULL,
  PRIMARY KEY  (`depID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `department`
-- 

INSERT INTO `department` (`depID`, `depName`) VALUES 
(1, 'Information Technology'),
(2, 'Computer Science'),
(3, 'Information System'),
(4, 'Insormation Science'),
(11, 'economics');

-- --------------------------------------------------------

-- 
-- Table structure for table `major`
-- 

CREATE TABLE `major` (
  `majorID` int(11) NOT NULL auto_increment,
  `programId` int(11) NOT NULL,
  `major` varchar(50) NOT NULL,
  `dateadded` date NOT NULL,
  PRIMARY KEY  (`majorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `major`
-- 

INSERT INTO `major` (`majorID`, `programId`, `major`, `dateadded`) VALUES 
(1, 1, 'none', '2011-09-14'),
(2, 15, 'Math', '2011-09-07'),
(3, 16, 'English', '2011-09-07');

-- --------------------------------------------------------

-- 
-- Table structure for table `notification`
-- 

CREATE TABLE `notification` (
  `id` int(10) NOT NULL auto_increment,
  `position` varchar(20) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `notification`
-- 

INSERT INTO `notification` (`id`, `position`, `message`) VALUES 
(3, 'student', 'Registration date will held on january 13 2008 bye bye	'),
(4, 'teacher', 'Hello teachers this is to announce you the final student grade submition date is on january 12/2016   '),
(7, 'student', 'HI student how the Exam'),
(13, 'student', 'This is Mukera Notification'),
(14, 'teacher', ' Hello teacher how the project'),
(15, 'student', 'hi techer endet neh\r\n'),
(16, 'teacher', 'hi teacher');

-- --------------------------------------------------------

-- 
-- Table structure for table `persection`
-- 

CREATE TABLE `persection` (
  `no` smallint(10) NOT NULL auto_increment,
  `studentID` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `depID` varchar(20) NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `persection`
-- 

INSERT INTO `persection` (`no`, `studentID`, `year`, `section`, `depID`) VALUES 
(1, '99', 'IV', 'A', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `program`
-- 

CREATE TABLE `program` (
  `programId` int(11) NOT NULL auto_increment,
  `programtitle` varchar(50) NOT NULL,
  `programdescription` varchar(150) NOT NULL,
  `dateadded` date NOT NULL,
  PRIMARY KEY  (`programId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `program`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `regularload`
-- 

CREATE TABLE `regularload` (
  `regualrloadId` int(11) NOT NULL auto_increment,
  `year` varchar(150) NOT NULL,
  `sem` varchar(150) NOT NULL,
  `program` varchar(150) NOT NULL,
  `major` varchar(150) NOT NULL,
  `courseID` int(11) NOT NULL,
  PRIMARY KEY  (`regualrloadId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `regularload`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `regularloadtemp`
-- 

CREATE TABLE `regularloadtemp` (
  `regularloadtempID` int(11) NOT NULL auto_increment,
  `year` varchar(150) NOT NULL,
  `sem` varchar(150) NOT NULL,
  `program` varchar(150) NOT NULL,
  `major` varchar(150) NOT NULL,
  `courseID` int(11) NOT NULL,
  PRIMARY KEY  (`regularloadtempID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `regularloadtemp`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `report`
-- 

CREATE TABLE `report` (
  `id` int(20) NOT NULL auto_increment,
  `teacherid` int(20) NOT NULL,
  `studentID` int(20) NOT NULL,
  `courseID` varchar(20) NOT NULL,
  `problem` varchar(40) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `report`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `student`
-- 

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL auto_increment,
  `UserName` int(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `contactnumber` int(11) NOT NULL,
  `uploadphoto` varchar(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `depID` int(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `parentguardian` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dateofbirth` date NOT NULL,
  `placeofbirth` varchar(150) NOT NULL,
  `scholarship` varchar(150) NOT NULL,
  `programId` int(11) NOT NULL,
  `elemschool` varchar(50) NOT NULL,
  `elemadd` varchar(150) NOT NULL,
  `elemschyr` varchar(50) NOT NULL,
  `secschool` varchar(50) NOT NULL,
  `secadd` varchar(150) NOT NULL,
  `secschyr` varchar(50) NOT NULL,
  `terschool` varchar(50) NOT NULL,
  `teradd` varchar(150) NOT NULL,
  `terschyr` varchar(50) NOT NULL,
  `dateadded` date NOT NULL,
  `position` varchar(50) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY  (`studentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

-- 
-- Dumping data for table `student`
-- 

INSERT INTO `student` (`studentID`, `UserName`, `Password`, `contactnumber`, `uploadphoto`, `firstname`, `lastname`, `middlename`, `depID`, `address`, `parentguardian`, `gender`, `dateofbirth`, `placeofbirth`, `scholarship`, `programId`, `elemschool`, `elemadd`, `elemschyr`, `secschool`, `secadd`, `secschyr`, `terschool`, `teradd`, `terschyr`, `dateadded`, `position`, `status`) VALUES 
(99, 1074, 'pass', 924639914, 'tofik.jpg', 'Tofik', 'Seltew', 'Jemal', 1, 'Addis Abbeba Koshe sefer', 'Jemal', 'Male', '2016-06-17', 'Addis Abeba', '', 0, 'Addis abeba', 'Adiss ketema', '1996', 'Adiss abeba ', 'Addiss ketema', '2003', '', '', '', '2016-06-17', 'Student', 1),
(101, 545, '34434', 4454, 'Ina (2).jpg', 'erwrtew', 'hjgkhjkj', 'errt', 1, '3242334', 'abebe', 'Female', '2016-06-15', 'gondar', '', 0, 'swasdad', 'edtrer', '2012', 'fdfgdf', 'rtet', '2018', '', '', '', '2016-06-29', 'Student', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `studsem`
-- 

CREATE TABLE `studsem` (
  `studSemID` int(11) NOT NULL auto_increment,
  `studentID` int(11) NOT NULL,
  `schyr` varchar(150) NOT NULL,
  `sem` varchar(150) NOT NULL,
  `year` varchar(150) NOT NULL,
  `section` varchar(150) NOT NULL,
  `depID` int(20) NOT NULL,
  `program` varchar(150) NOT NULL,
  `major` varchar(150) NOT NULL,
  `courseID` int(11) NOT NULL,
  `ects` varchar(20) NOT NULL,
  `mark` varchar(30) NOT NULL,
  `grades` varchar(50) NOT NULL,
  `gradepnt` varchar(30) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`studSemID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `studsem`
-- 

INSERT INTO `studsem` (`studSemID`, `studentID`, `schyr`, `sem`, `year`, `section`, `depID`, `program`, `major`, `courseID`, `ects`, `mark`, `grades`, `gradepnt`, `remarks`, `status`) VALUES 
(1, 100, '2006', '2nd Semester', 'III', 'D', 1, '', '', 17, '5', '80', 'A-', '18.75', '', 0),
(4, 99, '2008', '1st Semester', 'IV', 'B', 1, '', '', 19, '5', '44', 'D', '5', '', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `studsemtemp`
-- 

CREATE TABLE `studsemtemp` (
  `studsemtempID` int(11) NOT NULL auto_increment,
  `studentID` int(11) NOT NULL,
  `schyr` varchar(150) NOT NULL,
  `sem` varchar(150) NOT NULL,
  `year` varchar(150) NOT NULL,
  `section` varchar(150) NOT NULL,
  `program` varchar(150) NOT NULL,
  `major` varchar(150) NOT NULL,
  `courseID` int(11) NOT NULL,
  `grades` double(50,2) NOT NULL,
  `depID` varchar(20) NOT NULL,
  PRIMARY KEY  (`studsemtempID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `studsemtemp`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tcourse`
-- 

CREATE TABLE `tcourse` (
  `tcourseID` int(11) NOT NULL auto_increment,
  `teacherid` int(11) NOT NULL,
  `courseID` varchar(50) NOT NULL,
  `schyr` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  PRIMARY KEY  (`tcourseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `tcourse`
-- 

INSERT INTO `tcourse` (`tcourseID`, `teacherid`, `courseID`, `schyr`, `semester`) VALUES 
(1, 81, '17', '2007', '1st Semester'),
(2, 81, '19', '2007', '2nd Semister');

-- --------------------------------------------------------

-- 
-- Table structure for table `tcoursetemp`
-- 

CREATE TABLE `tcoursetemp` (
  `tcoursetempID` int(11) NOT NULL auto_increment,
  `teacherid` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `schyr` varchar(150) NOT NULL,
  `semester` varchar(150) NOT NULL,
  PRIMARY KEY  (`tcoursetempID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tcoursetemp`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tdep`
-- 

CREATE TABLE `tdep` (
  `tdepID` int(10) NOT NULL auto_increment,
  `teacherID` int(10) NOT NULL,
  `depID` varchar(10) NOT NULL,
  PRIMARY KEY  (`tdepID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tdep`
-- 

INSERT INTO `tdep` (`tdepID`, `teacherID`, `depID`) VALUES 
(1, 81, '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `teacher`
-- 

CREATE TABLE `teacher` (
  `teacherid` int(11) NOT NULL auto_increment,
  `UserName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contactnum` int(50) NOT NULL,
  `upload` varchar(150) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `dateadded` date NOT NULL,
  PRIMARY KEY  (`teacherid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

-- 
-- Dumping data for table `teacher`
-- 

INSERT INTO `teacher` (`teacherid`, `UserName`, `password`, `contactnum`, `upload`, `lastname`, `firstname`, `middlename`, `address`, `position`, `dateadded`) VALUES 
(81, '1000', 'pass', 954367722, 'blog (2).jpg', 'Mehuru', 'Albert', 'Ainstien', 'Gondar University', 'Teacher', '2016-06-17');

-- --------------------------------------------------------

-- 
-- Table structure for table `tempo`
-- 

CREATE TABLE `tempo` (
  `tempoID` int(30) NOT NULL auto_increment,
  `studentID` int(20) NOT NULL,
  `mark` int(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `depID` varchar(20) NOT NULL,
  PRIMARY KEY  (`tempoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tempo`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tload`
-- 

CREATE TABLE `tload` (
  `tloadID` int(11) NOT NULL auto_increment,
  `teacherid` int(11) NOT NULL,
  `programId` int(11) NOT NULL,
  `major` varchar(150) NOT NULL,
  `year` varchar(150) NOT NULL,
  `section` varchar(150) NOT NULL,
  PRIMARY KEY  (`tloadID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tload`
-- 

INSERT INTO `tload` (`tloadID`, `teacherid`, `programId`, `major`, `year`, `section`) VALUES 
(1, 81, 0, '', 'IV', 'A');

-- --------------------------------------------------------

-- 
-- Table structure for table `tloadtemp`
-- 

CREATE TABLE `tloadtemp` (
  `tloadtempID` int(11) NOT NULL auto_increment,
  `teacherid` int(11) NOT NULL,
  `programId` int(11) NOT NULL,
  `major` varchar(150) NOT NULL,
  `year` varchar(150) NOT NULL,
  `section` varchar(150) NOT NULL,
  `depID` varchar(20) NOT NULL,
  PRIMARY KEY  (`tloadtempID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tloadtemp`
-- 

