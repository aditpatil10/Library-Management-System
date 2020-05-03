-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2020 at 07:14 AM
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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN` bigint(20) DEFAULT NULL,
  `BOOK_ID` bigint(20) NOT NULL,
  `EDITION` bigint(20) DEFAULT NULL,
  `SUBJECT_AREA` text DEFAULT NULL,
  `TITLE` text DEFAULT NULL,
  `LENDABLE` bigint(20) DEFAULT NULL,
  `AUTHOR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `BOOK_ID`, `EDITION`, `SUBJECT_AREA`, `TITLE`, `LENDABLE`, `AUTHOR`) VALUES
(12345678901, 1, 3, 'Mathematics', 'Applied Mathematics-I', 0, 'G.Khumbhojkar'),
(98765432101, 2, 5, 'Programming', 'Reinforcement Learning', 0, 'Richard S Sutton'),
(30920288291, 3, 5, 'Science Fiction', 'The Hitchhiker\'s Guide to the Galaxy', 1, 'Douglas Adams'),
(14974539935, 4, 3, 'Non-Fiction', 'Steve Jobs', 1, 'Walter Issacson'),
(90069909161, 5, 4, 'Literature', 'The Tale of two Cities', 1, 'Charles Dickens'),
(10998213313, 6, 3, 'Non-Fiction', 'The Dairy of a Young Girl', 1, 'Anne Frank'),
(27931229109, 7, 2, 'Programming', 'Fundamentals of Database Systems', 1, 'Ramez Elmasri'),
(12063390540, 8, 4, 'Fiction', 'Harry Potter and the Philsopher\'s Stone', 0, 'J.K Rowling'),
(50680991225, 9, 2, 'Non-Fiction', 'How to Win Friends and Influence People', 0, 'Dale Carnegie'),
(97743045345, 10, 3, 'Literature', 'Treasure Island', 0, 'Robert Louis Stevenson'),
(18533792071, 11, 4, 'Fiction', 'Harry Potter and the Chamber of Secrets', 0, 'J.K Rowling'),
(87927505544, 12, 3, 'Non-Fiction', 'Mamba Mentality', 1, 'Kobe Bryant'),
(33226486961, 13, 3, 'Programming', 'Neural Network Design', 0, 'Hagan'),
(22096364365, 14, 4, 'Literature', 'The Adventures of Tom Sawyer', 1, 'Mark Twain'),
(35270756718, 15, 3, 'Science Fiction', 'Dune', 0, 'Frank Herbert'),
(12345678901, 16, 234, '235sdgfsdg', 'sdgsdg', 1, 'sfdghdfbh'),
(96385274102, 17, 3, 'Fiction', 'Life of Pi', 1, 'Pi');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `ISBN` bigint(20) DEFAULT NULL,
  `BOOK_ID` bigint(20) DEFAULT NULL,
  `SSN` bigint(20) DEFAULT NULL,
  `ISSUE_DATE` date DEFAULT NULL,
  `GRACE_PERIOD` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`ISBN`, `BOOK_ID`, `SSN`, `ISSUE_DATE`, `GRACE_PERIOD`) VALUES
(30920288291, 3, 411726343, '2018-01-20', '2018-02-17'),
(14974539935, 4, 966826841, '2018-01-12', '2018-04-26'),
(90069909161, 5, 351475268, '2018-03-26', '2018-04-23'),
(10998213313, 6, 860693966, '2018-04-26', '2018-05-24'),
(27931229109, 7, 381596986, '2018-09-02', '2018-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `Isbn` bigint(20) NOT NULL,
  `SSN` bigint(20) DEFAULT NULL,
  `TITLE` text DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `SUBJECT_AREA` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`Isbn`, `SSN`, `TITLE`, `DESCRIPTION`, `SUBJECT_AREA`) VALUES
(10998213313, 213535704, 'The Dairy of a Young Girl', 'abcd', 'Non-Fiction'),
(12063390540, 213535704, 'Harry Potter and the Philsopher\'s Stone', 'abcd', 'Fiction'),
(12345678901, 213535704, 'Applied Mathematics-I', 'abcd', 'Mathematics'),
(14974539935, 213535704, 'Steve Jobs', 'abcd', 'Non-Fiction'),
(18533792071, 213535704, 'Harry Potter and the Chamber of Secrets', 'abcd', 'Fiction'),
(20585409442, 213535704, 'Wonder', 'abcd', 'Fiction'),
(22096364365, 213535704, 'The Adventures of Tom Sawyer', 'abcd', 'Literature'),
(23945493696, 213535704, 'Wool', 'abcd', 'Fiction'),
(25974233867, 213535704, 'HEAD FIRST JAVA', 'abcd', 'Programming'),
(27260506091, 213535704, 'Outlander', 'abcd', 'Fiction'),
(27931229109, 213535704, 'Fundamentals of Database Systems', 'abcd', 'Programming'),
(30774107178, 213535704, ' Catch-22', 'abcd', 'Literature'),
(30920288291, 213535704, 'The Hitchhiker\'s Guide to the Galaxy', 'abcd', 'Science Fiction'),
(33226486961, 213535704, 'Neural Network Design', 'abcd', 'Programming'),
(35270756718, 213535704, 'Dune', 'abcd', 'Science Fiction'),
(38425519962, 213535704, 'Foundation', 'abcd', 'Science Fiction'),
(49163453748, 213535704, 'Frankenstein', 'abcd', 'Science Fiction'),
(50243324191, 213535704, 'The book Thief', 'abcd', 'Fiction'),
(50680991225, 213535704, 'How to Win Friends and Influence People', 'abcd', 'Non-Fiction'),
(51895206346, 213535704, 'Sapiens: A Brief History of Humankind', 'abcd', 'Non-Fiction'),
(52164525743, 213535704, ' One Hundred Years of Solitude', 'abcd', 'Literature'),
(56118942707, 213535704, ' CLEAN CODE: A HANDBOOK OF AGILE SOFTWARE CRAFTSMANSHIP', 'abcd', 'Programming'),
(61595403446, 213535704, 'When Breath Becomes Air', 'abcd', 'Non-Fiction'),
(67047678276, 213535704, 'The Great Gatsby', 'abcd', 'Literature'),
(68027409809, 213535704, 'A Brief History of Time', 'abcd', 'Non-Fiction'),
(69493902479, 213535704, ' Ulysses', 'abcd', 'Literature'),
(75645730061, 213535704, 'Surely You’re Joking, Mr. Feynman!', 'abcd', 'Non-Fiction'),
(76660995554, 213535704, 'The Illaid', 'abcd', 'Literature'),
(77012553153, 213535704, 'Manual for Living', 'abcd', 'Non-Fiction'),
(77418583213, 213535704, 'INTRODUCTION TO ALGORITHMS', 'abcd', 'Programming'),
(77614910635, 213535704, 'Jurassic Park', 'abcd', 'Science Fiction'),
(82608175688, 213535704, 'Don Quixote', 'abcd', 'Literature'),
(85269652460, 213535704, 'Solaris', 'abcd', 'Science Fiction'),
(87927505544, 213535704, 'Mamba Mentality', 'abcd', 'Non-Fiction'),
(90069909161, 213535704, 'The Tale of two Cities', 'abcd', 'Literature'),
(91820234170, 213535704, 'WORKING EFFECTIVELY WITH LEGACY CODE', 'abcd', 'Programming'),
(96385274102, 213535704, 'Life of Pi', '1111', 'Fiction'),
(97743045345, 213535704, 'Treasure Island', 'abcd', 'Literature'),
(98765432101, 213535704, 'Reinforcement Learning', 'abcd', 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `librarians`
--

CREATE TABLE `librarians` (
  `SSN` bigint(20) NOT NULL,
  `NAME` text DEFAULT NULL,
  `LIBRARIAN_TYPE` bigint(20) DEFAULT NULL,
  `Phone_NO.` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarians`
--

INSERT INTO `librarians` (`SSN`, `NAME`, `LIBRARIAN_TYPE`, `Phone_NO.`) VALUES
(155281869, 'Jorie Franek', 2, 8321547364),
(213535704, 'Lynnell Cowper', 5, 2912060410),
(225463109, 'Iggy McLelland', 4, 2613723716),
(360634758, 'Glyn More', 4, 6256458599),
(449502580, 'Gianina Benoey', 3, 3972552223),
(474072792, 'Kristan Sowray', 3, 5956061990),
(510550817, 'Farrell Doorbar', 1, 6201926085),
(599451697, 'Tammie Offill', 1, 6501232211),
(647510432, 'Carolee Barrass', 2, 9785647898),
(708483095, 'Corri Vasilchenko', 1, 9506525403),
(759762980, 'Morten Danks', 1, 4998960967),
(775114634, 'Almeda Hanner', 4, 8784300209),
(785522354, 'Olia Damiral', 1, 6677375476),
(855875642, 'Brynne Devlin', 4, 2867031117),
(890687421, 'Beatrice Culcheth', 2, 5957743686);

-- --------------------------------------------------------

--
-- Table structure for table `librarians_type`
--

CREATE TABLE `librarians_type` (
  `Lib_id` bigint(20) NOT NULL,
  `Designation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarians_type`
--

INSERT INTO `librarians_type` (`Lib_id`, `Designation`) VALUES
(1, 'Department Associate Librarians'),
(2, 'Chief Librarian'),
(3, 'Checkout Staff'),
(4, 'Library Assistants'),
(5, 'Reference Librarians');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `SSN` bigint(20) NOT NULL,
  `FNAME` text DEFAULT NULL,
  `MNAME` text DEFAULT NULL,
  `LNAME` text DEFAULT NULL,
  `PHONE` bigint(20) DEFAULT NULL,
  `HOME_MAILING ADDRESS` text DEFAULT NULL,
  `CAMPUS_ADDRESS` text DEFAULT NULL,
  `IS_ACTIVE` bigint(20) DEFAULT NULL,
  `DATE_OF_JOINING` date DEFAULT NULL,
  `MEMBERSHIP_EXPIRY` date NOT NULL,
  `MEMBER_TYPE` bigint(20) DEFAULT NULL,
  `COMMENTS` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`SSN`, `FNAME`, `MNAME`, `LNAME`, `PHONE`, `HOME_MAILING ADDRESS`, `CAMPUS_ADDRESS`, `IS_ACTIVE`, `DATE_OF_JOINING`, `MEMBERSHIP_EXPIRY`, `MEMBER_TYPE`, `COMMENTS`) VALUES
(351475268, 'Sisely', 'K', 'Thirlwall', 4374591441, '588 Butterfield Pass', '85051 Elgar Drive', 1, '1992-08-07', '2024-05-01', 0, NULL),
(381596986, 'Jdavie', 'X', 'Mulheron', 1331319795, '3 American Ash Center', '65 Milwaukee Junction', 1, '2016-10-29', '2020-07-07', 0, NULL),
(411726343, 'Sella', 'I', 'Ashpital', 5352450062, '81363 Hazelcrest Crossing', '84 Burrows Crossing', 1, '2001-08-25', '2020-08-07', 0, NULL),
(466947778, 'Mathian', 'T', 'Davidsohn', 6989940088, '7 Crescent Oaks Pass', '3 Troy Crossing', 1, '2004-04-19', '2020-09-07', 1, NULL),
(487534189, 'Philippine', 'G', 'Carss', 9033284088, '24582 Kim Crossing', '1091 Gerald Alley', 0, '1993-12-20', '2020-10-07', 1, NULL),
(502838902, 'Odele', 'L', 'Lanham', 7666906720, '15072 Dottie Avenue', '74 Jay Hill', 1, '2014-07-26', '2020-11-07', 0, NULL),
(518201102, 'Dirk', 'P', 'Lindro', 4665687098, '21350 Moulton Avenue', '63975 Rutledge Drive', 1, '2008-12-26', '2020-12-07', 0, NULL),
(527295112, 'Cosimo', 'D', 'Snartt', 5361477027, '1526 Independence Way', '69 Aberg Crossing', 1, '1992-03-27', '2020-01-02', 0, NULL),
(550473765, 'Ernst', 'P', 'Capozzi', 6163307748, '94 Fair Oaks Parkway', '39788 Onsgard Pass', 1, '2008-09-23', '2020-02-02', 1, NULL),
(596621494, 'Diana', 'Y', 'Walworth', 9327400222, '12499 Fisk Hill', '91 Bunting Parkway', 0, '1998-01-16', '2020-02-02', 0, NULL),
(642188827, 'Cassi', 'C', 'Fairbard', 5783558417, '0 New Castle Drive', '4 Graceland Avenue', 0, '2008-03-04', '2020-03-02', 1, NULL),
(643252660, 'Hillary', 'M', 'Woofinden', 4609086056, '35446 Marquette Crossing', '79 Shasta Place', 0, '1993-07-15', '2020-04-02', 1, NULL),
(667761714, 'Tobit', 'Y', 'Snawdon', 3493927088, '7 Killdeer Way', '9279 Little Fleur Terrace', 0, '1999-09-11', '2020-05-02', 0, NULL),
(696721702, 'Alie', 'V', 'Jehan', 6601088860, '85337 Meadow Valley Avenue', '2 Boyd Hill', 0, '1995-07-30', '2020-06-02', 1, NULL),
(705694312, 'Chelsy', 'H', 'Spellecy', 5923156478, '814 Cherokee Point', '829 Meadow Valley Junction', 0, '2010-04-07', '2020-07-02', 0, NULL),
(732820010, 'Konstantine', 'V', 'Artist', 3965968657, '91 Melody Crossing', '3 Bluestem Way', 0, '2017-01-17', '2020-08-02', 0, NULL),
(758419097, 'Nonah', 'N', 'Ponton', 8504296600, '72 Calypso Plaza', '88 Mockingbird Alley', 0, '2018-01-05', '2020-09-02', 0, NULL),
(790220195, 'Ema', 'N', 'Donn', 9324369010, '3731 Elka Hill', '9727 Golf Course Drive', 1, '2016-11-01', '2020-10-02', 0, NULL),
(799003369, 'Russ', 'J', 'Feldmus', 1471581983, '13480 Manufacturers Road', '97246 Donald Parkway', 0, '2017-05-19', '2020-11-02', 0, NULL),
(806957816, 'Lotta', 'F', 'Cockarill', 4483996789, '27 Manley Junction', '342 Blaine Crossing', 1, '2000-08-02', '2020-12-02', 0, NULL),
(860693966, 'Gavra', 'S', 'Cars', 7133728527, '0546 Butternut Lane', '1334 Lerdahl Parkway', 1, '2020-04-06', '2020-01-27', 0, NULL),
(864651125, 'Bartolemo', 'O', 'Westbury', 3207699481, '076 Reinke Pass', '00726 Manufacturers Lane', 1, '1997-10-09', '2020-02-27', 0, NULL),
(883488595, 'Tatiania', 'Y', 'Iacofo', 8241061769, '26196 Dovetail Court', '0 Onsgard Avenue', 0, '1990-10-09', '2020-03-27', 0, NULL),
(905360861, 'Ogdan', 'P', 'Ambrosetti', 5038601958, '65674 Waxwing Terrace', '89 Division Point', 1, '2016-12-21', '2020-04-27', 1, NULL),
(910066118, 'Nelie', 'Z', 'Magrane', 5035195906, '90675 Dovetail Place', '8878 Fuller Crossing', 0, '2004-07-30', '2020-05-27', 0, NULL),
(945973828, 'Elise', 'D', 'Marchiso', 6384633547, '8740 Brown Drive', '279 Surrey Avenue', 0, '2006-09-23', '2020-06-27', 0, NULL),
(966826841, 'Mariel', 'J', 'Kiefer', 3424955280, '75 Fallview Place', '1 Coleman Center', 1, '1992-05-24', '2020-07-27', 1, NULL),
(975730668, 'Tonye', 'S', 'Jeggo', 7894872199, '54139 Hoard Parkway', '02 Doe Crossing Circle', 0, '1996-12-10', '2020-08-27', 1, NULL),
(990483425, 'Lexy', 'W', 'Geard', 8029149648, '2217 Hermina Junction', '88 Manley Circle', 1, '2015-11-26', '2020-09-27', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `members_type`
--

CREATE TABLE `members_type` (
  `Member_ID` bigint(20) NOT NULL,
  `Type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members_type`
--

INSERT INTO `members_type` (`Member_ID`, `Type`) VALUES
(0, 'Student'),
(1, 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `Recipt_no` int(11) NOT NULL,
  `ISBN` bigint(20) DEFAULT NULL,
  `BOOK_ID` bigint(20) DEFAULT NULL,
  `SSN` bigint(20) DEFAULT NULL,
  `Return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`Recipt_no`, `ISBN`, `BOOK_ID`, `SSN`, `Return_date`) VALUES
(1, 30920288291, 3, 411726343, '2018-02-10'),
(2, 14974539935, 4, 966826841, '2018-03-12'),
(3, 90069909161, 5, 351475268, '2018-04-12'),
(4, 10998213313, 6, 860693966, '2018-05-20'),
(5, 27931229109, 7, 381596986, '2018-09-28'),
(17, 14974539935, 4, 966826841, '2020-05-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BOOK_ID`),
  ADD KEY `ISBN` (`ISBN`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD UNIQUE KEY `BOOK_ID_2` (`BOOK_ID`),
  ADD KEY `SSN` (`SSN`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `BOOK_ID` (`BOOK_ID`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`Isbn`),
  ADD KEY `SSN` (`SSN`);

--
-- Indexes for table `librarians`
--
ALTER TABLE `librarians`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `LIBRARIAN_TYPE` (`LIBRARIAN_TYPE`);

--
-- Indexes for table `librarians_type`
--
ALTER TABLE `librarians_type`
  ADD PRIMARY KEY (`Lib_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `MEMBER_TYPE` (`MEMBER_TYPE`);

--
-- Indexes for table `members_type`
--
ALTER TABLE `members_type`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`Recipt_no`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `SSN` (`SSN`),
  ADD KEY `BOOK_ID` (`BOOK_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BOOK_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `Recipt_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `catalog` (`Isbn`);

--
-- Constraints for table `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `borrows_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `members` (`SSN`),
  ADD CONSTRAINT `borrows_ibfk_3` FOREIGN KEY (`ISBN`) REFERENCES `catalog` (`Isbn`),
  ADD CONSTRAINT `borrows_ibfk_4` FOREIGN KEY (`BOOK_ID`) REFERENCES `books` (`BOOK_ID`);

--
-- Constraints for table `catalog`
--
ALTER TABLE `catalog`
  ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`SSN`) REFERENCES `librarians` (`SSN`);

--
-- Constraints for table `librarians`
--
ALTER TABLE `librarians`
  ADD CONSTRAINT `librarians_ibfk_1` FOREIGN KEY (`LIBRARIAN_TYPE`) REFERENCES `librarians_type` (`Lib_id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`MEMBER_TYPE`) REFERENCES `members_type` (`Member_ID`);

--
-- Constraints for table `returns`
--
ALTER TABLE `returns`
  ADD CONSTRAINT `returns_ibfk_2` FOREIGN KEY (`ISBN`) REFERENCES `catalog` (`Isbn`),
  ADD CONSTRAINT `returns_ibfk_3` FOREIGN KEY (`SSN`) REFERENCES `members` (`SSN`),
  ADD CONSTRAINT `returns_ibfk_4` FOREIGN KEY (`BOOK_ID`) REFERENCES `books` (`BOOK_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
