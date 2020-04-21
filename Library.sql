-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2020 at 09:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `ISBN` int(11) NOT NULL,
  `BOOK_ID` int(11) NOT NULL,
  `EDITION` varchar(55) NOT NULL,
  `SUBJECT_AREA` varchar(55) NOT NULL,
  `TITLE` varchar(55) NOT NULL,
  `LENDABLE` tinyint(1) NOT NULL,
  `AUTHOR` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Borrows`
--

CREATE TABLE `Borrows` (
  `Isbn` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `Issue Date` date NOT NULL,
  `Grace Period` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Catalog`
--

CREATE TABLE `Catalog` (
  `Isbn` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `DESCRIPTION` longtext NOT NULL,
  `SUBJECT_AREA` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Librarians`
--

CREATE TABLE `Librarians` (
  `SSN` int(11) NOT NULL,
  `NAME` varchar(55) NOT NULL,
  `LIBRARIAN_TYPE` int(11) NOT NULL,
  `PHONE_NO.` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Librarians_type`
--

CREATE TABLE `Librarians_type` (
  `Lib_id` int(11) NOT NULL,
  `Designation` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE `Members` (
  `SSN` int(11) NOT NULL,
  `FNAME` varchar(55) NOT NULL,
  `MNAME` varchar(55) NOT NULL,
  `LNAME` varchar(55) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `HOME_MAILING ADDRESS` mediumtext NOT NULL,
  `CAMPUS_ADDRESS` mediumtext NOT NULL,
  `IS_ACTIVE` tinyint(1) NOT NULL,
  `DATE_OF_JOINING` date NOT NULL,
  `MEMBER_TYPE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Members_Type`
--

CREATE TABLE `Members_Type` (
  `Member_ID` int(11) NOT NULL,
  `Type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Returns`
--

CREATE TABLE `Returns` (
  `Isbn` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `Return_date` date NOT NULL,
  `Fine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `BOOK_ID` (`BOOK_ID`);

--
-- Indexes for table `Borrows`
--
ALTER TABLE `Borrows`
  ADD KEY `Isbn` (`Isbn`),
  ADD KEY `Book_id` (`Book_id`),
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `Catalog`
--
ALTER TABLE `Catalog`
  ADD KEY `Isbn` (`Isbn`),
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `Librarians`
--
ALTER TABLE `Librarians`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `LIBRARIAN_TYPE` (`LIBRARIAN_TYPE`);

--
-- Indexes for table `Librarians_type`
--
ALTER TABLE `Librarians_type`
  ADD PRIMARY KEY (`Lib_id`);

--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `MEMBER_TYPE` (`MEMBER_TYPE`);

--
-- Indexes for table `Members_Type`
--
ALTER TABLE `Members_Type`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `Returns`
--
ALTER TABLE `Returns`
  ADD KEY `Isbn` (`Isbn`),
  ADD KEY `Book_id` (`Book_id`),
  ADD KEY `SSN` (`SSN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Borrows`
--
ALTER TABLE `Borrows`
  ADD CONSTRAINT `borrows_ibfk_1` FOREIGN KEY (`Isbn`) REFERENCES `Books` (`ISBN`),
  ADD CONSTRAINT `borrows_ibfk_2` FOREIGN KEY (`Book_id`) REFERENCES `Books` (`BOOK_ID`),
  ADD CONSTRAINT `borrows_ibfk_3` FOREIGN KEY (`SSN`) REFERENCES `Members` (`SSN`);

--
-- Constraints for table `Catalog`
--
ALTER TABLE `Catalog`
  ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`Isbn`) REFERENCES `Books` (`ISBN`),
  ADD CONSTRAINT `catalog_ibfk_2` FOREIGN KEY (`SSN`) REFERENCES `Librarians` (`SSN`);

--
-- Constraints for table `Librarians`
--
ALTER TABLE `Librarians`
  ADD CONSTRAINT `librarians_ibfk_1` FOREIGN KEY (`LIBRARIAN_TYPE`) REFERENCES `Librarians_type` (`Lib_id`);

--
-- Constraints for table `Members`
--
ALTER TABLE `Members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`MEMBER_TYPE`) REFERENCES `Members_Type` (`Member_ID`);

--
-- Constraints for table `Returns`
--
ALTER TABLE `Returns`
  ADD CONSTRAINT `returns_ibfk_1` FOREIGN KEY (`Book_id`) REFERENCES `Books` (`BOOK_ID`),
  ADD CONSTRAINT `returns_ibfk_2` FOREIGN KEY (`Isbn`) REFERENCES `Books` (`ISBN`),
  ADD CONSTRAINT `returns_ibfk_3` FOREIGN KEY (`SSN`) REFERENCES `Members` (`SSN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
