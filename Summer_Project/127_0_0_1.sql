-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 04:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-chores`
--
CREATE DATABASE IF NOT EXISTS `e-chores` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e-chores`;

-- --------------------------------------------------------

--
-- Table structure for table `compdetail`
--

CREATE TABLE `compdetail` (
  `Compid` varchar(30) NOT NULL,
  `Compname` varchar(30) NOT NULL,
  `Registrationno` varchar(80) NOT NULL,
  `Areaofwork` varchar(300) NOT NULL,
  `Contactno` bigint(20) NOT NULL,
  `eMailid` varchar(50) NOT NULL,
  `Ownername` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Jobid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `compdetail`
--

INSERT INTO `compdetail` (`Compid`, `Compname`, `Registrationno`, `Areaofwork`, `Contactno`, `eMailid`, `Ownername`, `Address`, `Jobid`) VALUES
('housemaid ', 'CareTaker Provider', '', 'CareTaker', 249867465, 'a@p.b', 'Arya Stark', 'Davos', 'Caretaker'),
('housemaid2', 'CareTaker Provider 2', '', 'CareTaker', 36546541, 'adg@ag.afg', 'Danaerys Targareon', 'Dragon Hill', 'Caretaker'),
('secura', 'Security Company', '', 'Security', 9936509334, 'company@gmail.com', 'Ashutosh Bajpai', 'Lucknow', 'OfficeBoy'),
('secura2', 'Security Company 2', '', 'Security', 321687654, 'a@b.c', 'Jon Snow', 'Winterfell', 'Guard');

-- --------------------------------------------------------

--
-- Table structure for table `empdetail`
--

CREATE TABLE `empdetail` (
  `Empid` varchar(40) NOT NULL,
  `Empname` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Jobid` varchar(30) NOT NULL,
  `Experience` int(11) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Contactno` bigint(20) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Compid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empdetail`
--

INSERT INTO `empdetail` (`Empid`, `Empname`, `Address`, `Jobid`, `Experience`, `Dob`, `Gender`, `Contactno`, `Photo`, `Compid`) VALUES
('OfficeBoy1', 'Jon Snow', 'Winterfell', 'OfficeBoy', 5, '0000-00-00', 'male', 3654364, '9925087e4dce856e9c9a6ea5e2e62d45.png', 'secura'),
('OfficeBoy2', 'Sansa Stark', 'Winterfell', 'OfficeBoy', 5, '0000-00-00', 'female', 6513543, '17800214_1793576714294178_4454127063317481879_n.jpg', 'secura'),
('OfficeBoy3', 'Arya Stark', 'Winterfell', 'OfficeBoy', 5, '0000-00-00', 'female', 3546435121, 'dp.png', 'secura');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `Userid` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Companyid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `msgid` int(11) NOT NULL,
  `senderid` varchar(30) NOT NULL,
  `receiverid` varchar(30) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` varchar(500) NOT NULL,
  `Dateofmsg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`msgid`, `senderid`, `receiverid`, `subject`, `message`, `Dateofmsg`) VALUES
(1, 'admin', 'secura', 'Hello', 'This is a new message', '2017-08-26 02:56:11'),
(2, 'admin', 'secura', 'Welcome to Our PlatformH', 'We hope that you will enjoy the services that are being provided by the platform', '2017-08-26 02:57:17'),
(3, 'jondoe', 'housemaid', 'Maalin Bhej', 'Kanto honi chahiye', '2017-09-21 07:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobid` varchar(50) NOT NULL,
  `jobname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logindetail`
--

CREATE TABLE `logindetail` (
  `Id` varchar(30) NOT NULL,
  `Userpass` varchar(30) NOT NULL,
  `Usertype` varchar(10) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `logindetail`
--

INSERT INTO `logindetail` (`Id`, `Userpass`, `Usertype`, `Status`) VALUES
('admin', '123456', 'admin', 'true'),
('housemaid ', 'adfafddaf', 'company', 'false'),
('housemaid2', 'rrrrrrrrrrr', 'company', 'false'),
('jondoe', '123456', 'user', 'false'),
('secura', '123456', 'company', 'false'),
('secura2', '123456', 'company', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contents` varchar(500) NOT NULL,
  `remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `subject`, `date`, `contents`, `remark`) VALUES
(1, 'This is the first news', '2017-08-08 17:57:25', 'This is to inform all our users that we are online and ready to provide all the assistance we can. Have a nice day all!!! :)', 'Welcome to e-chores');

-- --------------------------------------------------------

--
-- Table structure for table `sentitem`
--

CREATE TABLE `sentitem` (
  `msgid` int(11) NOT NULL,
  `senderid` varchar(30) NOT NULL,
  `receiverid` varchar(30) NOT NULL,
  `Subject` varchar(80) NOT NULL,
  `message` varchar(500) NOT NULL,
  `Dateofmsg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sentitem`
--

INSERT INTO `sentitem` (`msgid`, `senderid`, `receiverid`, `Subject`, `message`, `Dateofmsg`) VALUES
(1, 'admin', 'secura', 'Hello', 'This is a new message', '2017-08-26 02:56:11'),
(2, 'jondoe', 'housemaid', 'Maalin Bhej', 'Kanto honi chahiye', '2017-09-21 07:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `reqid` int(11) NOT NULL,
  `userid` varchar(80) NOT NULL,
  `compid` varchar(30) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Request` varchar(800) NOT NULL,
  `dateofreq` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `response` varchar(800) DEFAULT NULL,
  `dateofresp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `servicestatus` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`reqid`, `userid`, `compid`, `Subject`, `Request`, `dateofreq`, `response`, `dateofresp`, `servicestatus`) VALUES
(1, 'jondoe', 'secura', 'Secutiry Purpose', 'Daily chores play an important role in making daily life smooth and easy if it is performed in proper way. But it is hard to find an efficient person who can execute all the things in proper way. In the same way security is very important for offices, homes etc. but it is cumbersome task to find trained person who can be trusted.', '2017-08-27 18:56:11', NULL, '2017-08-27 18:58:17', 'accepted'),
(2, 'jondoe', 'secura', 'For Office Purposes', 'Daily chores play an important role in making daily life smooth and easy if it is performed in proper way. But it is hard to find an efficient person who can execute all the things in proper way. In the same way security is very important for offices, homes etc. but it is cumbersome task to find trained person who can be trusted.', '2017-08-27 18:56:38', NULL, '0000-00-00 00:00:00', 'requested'),
(3, 'jondoe', 'secura', 'For Home Purpose', 'Daily chores play an important role in making daily life smooth and easy if it is performed in proper way. But it is hard to find an efficient person who can execute all the things in proper way. In the same way security is very important for offices, homes etc. but it is cumbersome task to find trained person who can be trusted.', '2017-08-27 18:57:36', NULL, '2017-08-27 18:58:20', 'declined'),
(4, 'jondoe', 'housemaid', 'Bhej be', 'kjgblakjhglkjan', '2017-09-21 07:39:39', NULL, '0000-00-00 00:00:00', 'requested');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Userid` varchar(80) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Contactno` bigint(20) NOT NULL,
  `emailid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `name`, `gender`, `address`, `Contactno`, `emailid`) VALUES
('jondoe', 'Jon Doe', 'male', 'Lucknow', 0, 'jon@gmial.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compdetail`
--
ALTER TABLE `compdetail`
  ADD PRIMARY KEY (`Compid`);

--
-- Indexes for table `empdetail`
--
ALTER TABLE `empdetail`
  ADD PRIMARY KEY (`Empid`),
  ADD KEY `Compid` (`Compid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `logindetail`
--
ALTER TABLE `logindetail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `sentitem`
--
ALTER TABLE `sentitem`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sentitem`
--
ALTER TABLE `sentitem`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `empdetail`
--
ALTER TABLE `empdetail`
  ADD CONSTRAINT `empdetail_ibfk_1` FOREIGN KEY (`Compid`) REFERENCES `compdetail` (`Compid`);

--
-- Constraints for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD CONSTRAINT `servicerequest_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`Userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
