-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2020 at 03:26 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movietheatredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

DROP TABLE IF EXISTS `useraccount`;
CREATE TABLE IF NOT EXISTS `useraccount` (
  `userID` varchar(128) NOT NULL,
  `firstN` varchar(255) NOT NULL,
  `lastN` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL,
  `favGenre` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `useraccount`
--

TRUNCATE TABLE `useraccount`;
--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`userID`, `firstN`, `lastN`, `email`, `password`, `favGenre`) VALUES
('2018-234599', 'Dave', 'A', 'Dave@ontariotechu.ca', 'kVV!gq', 'Comedy'),
('2018-378909', 'John', 'B', 'John@ontariotechu.ca', 'rY&8kE', 'Biography'),
('2019-100038', 'Ivy', 'C', 'Ivy@gmail.ca', 'M&qDrA', 'Science Fiction'),
('2019-248890', 'Ian', 'D', 'Ian@yahoo.ca', 'zdFY%2', 'Action'),
('2019-319801', 'Carol', 'E', 'Carol@ontariotechu.ca', 'dEZhU$', 'Drama'),
('2019-500200', 'Julie', 'F', 'Julie@yahoo.ca', 'HyxT*P', 'Animation'),
('2020-118882', 'Mike', 'G', 'Mike@ontariotechu.ca', '&5PbCD', 'Comedy'),
('2020-330077', 'Joanne', 'H', 'Joanne@yahoo.ca', 'p*!CBM', 'Animation'),
('2020-377891', 'Crystal', 'I', 'Crystal@gmail.ca', 'BSnA$c', 'Fantasy'),
('2020-412335', 'Gary', 'J', 'Gary@ontariotechu.ca', '@!pYfH', 'Action'),
('2020-881155', 'Lynn', 'K', 'Lynn@gmail.ca', '@VupyS', 'Horror'),
('0000-000000', 'Admin', 'Theatre', 'admin@theatre.db', 'theatre', 'everything'),
('1111-111111', 'Test', 'User', 'test@user.abc', '123', 'none');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
