-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 08:34 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointments`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Username` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `CID` int(11) NOT NULL,
  `DID` int(11) NOT NULL,
  `DOV` date NOT NULL,
  `Timestamp` datetime NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Username`, `Fname`, `Gender`, `CID`, `DID`, `DOV`, `Timestamp`, `Status`) VALUES
('ashit19', 'Ashit Chuphal', 'male', 4, 5, '2021-01-05', '2021-01-04 12:31:58', 'Booking Registered.Wait for the update');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `CID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Town` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`CID`, `Name`, `Address`, `Town`, `City`, `Contact`) VALUES
(1, 'Panchikkal Clinic', 'Yalakki Shettar Colony', 'Vijaya Nagar', 'Dharwad', 2147483647),
(2, 'The Reach Clinic', 'Mahakavi Vemana Rd', 'Koramangala', 'Bangalore', 2147483647),
(3, 'Harleys Clinic', 'Platinum Heights', 'Andheri West', 'Mumbai', 2147483647),
(4, 'Batra Clinic', 'Satyam Shivam Sundaram', 'Sion', 'Mumbai', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `deleted_doctors`
--

CREATE TABLE `deleted_doctors` (
  `DID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Experience` varchar(30) NOT NULL,
  `Specialisation` varchar(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Experience` varchar(30) NOT NULL,
  `Specialisation` varchar(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Region` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DID`, `Name`, `Gender`, `DOB`, `Experience`, `Specialisation`, `Contact`, `Address`, `Username`, `Password`, `Region`) VALUES
(1, 'Rahul Singh', 'Male', '1961-02-02', '7', 'Physician', '7535944473', 'Bangalore', 'rahulsingh02', 'rahulsingh02', 'Rammurthynagar'),
(2, 'Preeth Panchikkal', 'Male', '1970-02-02', '10', 'Dentist', '9956478921', 'Dharwad', 'preethpanchikkal02', 'preeth@020', 'Gandhinagar'),
(3, 'Shreya Kamoor', 'Female', '1966-09-05', '5', 'Gynecologist', '9739167312', 'Bangalore', 'shreya05', 'shreya@050', 'Ulsoor'),
(4, 'Anil Kumar', 'Male', '1978-12-10', '12', 'Surgeon', '8956264789', 'Mumbai', 'kumaranil', 'anilkumar1', 'Navi Mumbai'),
(5, 'Mukesh Bathra', 'Male', '1951-07-01', '25', 'Hair Specialist', '7045000666', 'Maharashtra', 'mbatra07', 'mbatra@195', 'Mumbai'),
(6, 'Pradeep Pandey', 'Male', '1970-08-09', '9', 'Orthopedic Surgeon', '7500408060', 'Uttarakhand', 'ppandey08', 'ppandey197', 'Haldwani');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_available`
--

CREATE TABLE `doctor_available` (
  `CID` int(11) NOT NULL,
  `DID` int(11) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_available`
--

INSERT INTO `doctor_available` (`CID`, `DID`, `Day`, `starttime`, `endtime`) VALUES
(1, 1, 'Tuesday', '08:00:00', '20:00:00'),
(1, 1, 'Thursday', '08:00:00', '20:00:00'),
(1, 1, 'Saturday', '08:00:00', '20:00:00'),
(2, 4, 'Monday', '12:00:00', '15:00:00'),
(2, 4, 'Wednesday', '12:00:00', '15:00:00'),
(4, 5, 'Monday', '10:00:00', '15:00:00'),
(4, 5, 'Tuesday', '10:00:00', '15:00:00'),
(4, 5, 'Wednesday', '10:00:00', '15:00:00'),
(4, 5, 'Thursday', '10:00:00', '15:00:00'),
(4, 5, 'Friday', '10:00:00', '15:00:00'),
(4, 5, 'Saturday', '10:00:00', '15:00:00'),
(1, 2, 'Tuesday', '09:00:00', '18:00:00'),
(1, 2, 'Wednesday', '09:00:00', '18:00:00'),
(1, 2, 'Thursday', '09:00:00', '18:00:00'),
(1, 2, 'Friday', '09:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Name`, `Gender`, `DOB`, `Phone`, `Username`, `Password`, `Email`) VALUES
('Ashit Chuphal', 'male', '1999-11-19', '8892624798', 'ashit19', 'Ashit@19', 'chuphalashit@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `deleted_doctors`
--
ALTER TABLE `deleted_doctors`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
