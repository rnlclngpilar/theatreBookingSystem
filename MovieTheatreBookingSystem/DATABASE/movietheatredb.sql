-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2020 at 03:30 PM
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
-- Table structure for table `cinemadetail`
--

DROP TABLE IF EXISTS `cinemadetail`;
CREATE TABLE IF NOT EXISTS `cinemadetail` (
  `cinemaID` int(3) NOT NULL AUTO_INCREMENT,
  `theatreID` int(11) NOT NULL,
  `theatreName` varchar(255) NOT NULL,
  `screenNum` int(2) NOT NULL,
  `seatCapacity` int(3) NOT NULL,
  `movieID` int(11) NOT NULL,
  `movieTitle` varchar(255) NOT NULL,
  `comingSoon` tinyint(1) NOT NULL,
  PRIMARY KEY (`cinemaID`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `cinemadetail`
--

TRUNCATE TABLE `cinemadetail`;
--
-- Dumping data for table `cinemadetail`
--

INSERT INTO `cinemadetail` (`cinemaID`, `theatreID`, `theatreName`, `screenNum`, `seatCapacity`, `movieID`, `movieTitle`, `comingSoon`) VALUES
(1, 1, 'Cineplex Odeon Ajax Cinemas', 1, 250, 9, 'Star Wars:  Episode IX - The Rise of Skywalker', 0),
(2, 1, 'Cineplex Odeon Ajax Cinemas', 2, 375, 3, 'Shazam!', 0),
(3, 1, 'Cineplex Odeon Ajax Cinemas', 3, 175, 15, '100% Wolf', 0),
(4, 1, 'Cineplex Odeon Ajax Cinemas', 4, 0, 19, 'Ma Rainey’s Black Bottom', 1),
(5, 1, 'Cineplex Odeon Ajax Cinemas', 5, 0, 21, 'Death on the Nile', 1),
(6, 2, 'Cineplex Odeon Oshawa Cinemas', 1, 150, 11, 'The Call of the Wild', 0),
(7, 2, 'Cineplex Odeon Oshawa Cinemas', 2, 275, 7, 'Maleficent:  Mistress of Evil', 0),
(8, 2, 'Cineplex Odeon Oshawa Cinemas', 3, 400, 10, 'Sonic the Hedgehog', 0),
(9, 2, 'Cineplex Odeon Oshawa Cinemas', 4, 225, 16, 'The Kid Detective', 0),
(10, 2, 'Cineplex Odeon Oshawa Cinemas', 5, 310, 1, 'The Polar Express', 0),
(11, 2, 'Cineplex Odeon Oshawa Cinemas', 6, 0, 19, 'Ma Rainey’s Black Bottom', 1),
(12, 2, 'Cineplex Odeon Oshawa Cinemas', 7, 0, 20, 'Chicago 10 (Impact Series)', 1),
(13, 2, 'Cineplex Odeon Oshawa Cinemas', 8, 0, 21, 'Death on the Nile', 1),
(14, 3, 'Cineplex Cinemas Pickering and VIP', 1, 130, 18, 'Vanguard (English Dub)', 0),
(15, 3, 'Cineplex Cinemas Pickering and VIP', 2, 290, 4, 'Avengers: Endgame', 0),
(16, 3, 'Cineplex Cinemas Pickering and VIP', 3, 175, 14, 'Honest Thief', 0),
(17, 3, 'Cineplex Cinemas Pickering and VIP', 4, 300, 8, 'Ford v Ferrari', 0),
(18, 3, 'Cineplex Cinemas Pickering and VIP', 5, 0, 19, 'Ma Rainey’s Black Bottom', 1),
(19, 4, 'Cineplex Cinemas Scarborough', 1, 345, 17, 'Freaky', 0),
(20, 4, 'Cineplex Cinemas Scarborough', 2, 210, 2, 'Guardians of the Galaxy, Vol. 2', 0),
(21, 4, 'Cineplex Cinemas Scarborough', 3, 160, 12, 'Tesla', 0),
(22, 4, 'Cineplex Cinemas Scarborough', 4, 0, 20, 'Chicago 10 (Impact Series)', 1),
(23, 4, 'Cineplex Cinemas Scarborough', 5, 0, 21, 'Death on the Nile', 1),
(24, 5, 'Cineplex Cinemas Markham and VIP', 1, 475, 1, 'The Polar Express', 0),
(25, 5, 'Cineplex Cinemas Markham and VIP', 2, 370, 13, 'Mulan', 0),
(26, 5, 'Cineplex Cinemas Markham and VIP', 3, 290, 6, 'Joker', 0),
(27, 5, 'Cineplex Cinemas Markham and VIP', 4, 220, 5, 'Rocketman', 0),
(28, 5, 'Cineplex Cinemas Markham and VIP', 5, 0, 20, 'Chicago 10 (Impact Series)', 1),
(29, 5, 'Cineplex Cinemas Markham and VIP', 6, 0, 21, 'Death on the Nile', 1),
(30, 5, 'Cineplex Cinemas Markham and VIP', 7, 0, 19, 'Ma Rainey\'s Black Bottom', 1),
(0, 0, '0', 0, 0, 0, 'please select a theatre first!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `movieinformation`
--

DROP TABLE IF EXISTS `movieinformation`;
CREATE TABLE IF NOT EXISTS `movieinformation` (
  `movieID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `releaseDate` date NOT NULL,
  `rating` varchar(5) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `3D` tinyint(1) NOT NULL,
  `cc` tinyint(1) NOT NULL,
  `duration` time NOT NULL,
  PRIMARY KEY (`movieID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `movieinformation`
--

TRUNCATE TABLE `movieinformation`;
--
-- Dumping data for table `movieinformation`
--

INSERT INTO `movieinformation` (`movieID`, `title`, `availability`, `releaseDate`, `rating`, `genre`, `description`, `3D`, `cc`, `duration`) VALUES
(1, 'The Polar Express', 1, '2004-11-10', 'G', 'Animation', 'On Christmas Eve, a young boy embarks on a magical adventure to the North Pole on the Polar Express, while learning about friendship, bravery, and the spirit of Christmas.', 1, 1, '01:40:00'),
(2, 'Guardians of the Galaxy, Vol. 2', 1, '2017-05-05', 'PG', 'Science Fiction', 'The Guardians struggle to keep together as a team while dealing with their personal family issues, notably Star-Lord\'s encounter with his father the ambitious celestial being Ego.', 0, 1, '02:18:00'),
(3, 'Shazam!', 1, '2019-04-05', 'PG-13', 'Comedy', 'A newly fostered young boy in search of his mother instead finds unexpected super powers and soon gains a powerful enemy.', 0, 1, '02:12:00'),
(4, 'Avengers: Endgame', 1, '2019-04-26', 'PG-13', 'Action', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.', 1, 1, '03:01:00'),
(5, 'Rocketman', 1, '2019-05-31', 'R', 'Music', 'A musical fantasy about the fantastical human story of Elton John\'s breakthrough years.', 0, 1, '02:01:00'),
(6, 'Joker', 1, '2019-10-04', 'R', 'Thriller', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', 0, 1, '02:02:00'),
(7, 'Maleficent:  Mistress of Evil', 1, '2019-10-18', 'PG', 'Fantasy', 'Maleficent and her goddaughter Aurora begin to question the complex family ties that bind them as they are pulled in different directions by impending nuptials, unexpected allies and dark new forces at play.', 1, 1, '01:59:00'),
(8, 'Ford v Ferrari', 1, '2019-11-15', 'PG-13', 'Biography', 'American car designer Carroll Shelby and driver Ken Miles battle corporate interference and the laws of physics to build a revolutionary race car for Ford in order to defeat Ferrari at the 24 Hours of Le Mans in 1966.', 0, 1, '02:32:00'),
(9, 'Star Wars:  Episode IX - The Rise of Skywalker', 1, '2019-12-20', 'PG-13', 'Science Fiction', 'The surviving members of the resistance face the First Order once again, and the legendary conflict between the Jedi and the Sith reaches its peak bringing the Skywalker saga to its end.', 1, 0, '02:21:00'),
(10, 'Sonic the Hedgehog', 1, '2020-02-14', 'PG', 'Comedy', 'After discovering a small, blue, fast hedgehog, a small-town police officer must help him defeat an evil genius who wants to do experiments on him.', 1, 1, '01:39:00'),
(11, 'The Call of the Wild', 1, '2020-02-21', 'PG', 'Drama', 'A sled dog struggles for survival in the wilds of the Yukon.', 0, 1, '01:40:00'),
(12, 'Tesla', 1, '2020-08-21', 'PG-13', 'Biography', 'A freewheeling take on visionary inventor Nikola Tesla, his interactions with Thomas Edison and J.P. Morgan\'s daughter Anne, and his breakthroughs in transmitting electrical power and light.', 0, 1, '01:42:00'),
(13, 'Mulan', 1, '2020-09-04', 'PG-13', 'Drama', 'A young Chinese maiden disguises herself as a male warrior in order to save her father.', 0, 1, '01:55:00'),
(14, 'Honest Thief', 1, '2020-10-09', 'PG', 'Action', 'Wanting to lead an honest life, a notorious bank robber turns himself in, only to be double-crossed by two ruthless FBI agents.', 0, 1, '01:39:00'),
(15, '100% Wolf', 1, '2020-10-09', 'G', 'Animation', '100% Wolf centers on Freddy Lupin, heir to a proud family line of werewolves. Positive he\'ll become the most fearsome werewolf ever, Freddy is in for a shock when his first \"warfing\" goes awry, turning him into a ferocious - poodle.', 0, 0, '01:36:00'),
(16, 'The Kid Detective', 1, '2020-10-06', '14A', 'Comedy', 'A once-celebrated kid detective, now 32, continues to solve the same trivial mysteries between hangovers and bouts of self-pity. Until a naive client brings him his first \'adult\' case, to find out who brutally murdered her boyfriend.', 0, 0, '01:37:00'),
(17, 'Freaky', 1, '2020-11-13', '14A', 'Horror', 'After swapping bodies with a deranged serial killer, a young girl in high school discovers she has less than 24 hours before the change becomes permanent.', 0, 1, '01:42:00'),
(18, 'Vanguard (English Dub)', 1, '2020-11-20', 'PG-13', 'Action', 'Covert security company Vanguard is the last hope of survival for an accountant after he is targeted by the world\'s deadliest mercenary organization.', 0, 0, '01:58:00'),
(19, 'Ma Rainey’s Black Bottom', 0, '2020-12-04', 'TBD', 'Drama', 'Chicago, 1927. A recording session. Tensions rise between Ma Rainey, her ambitious horn player and the white management determined to control the uncontrollable \"Mother of the Blues\". Based on Pulitzer Prize winner August Wilson\'s play.', 0, 0, '01:34:00'),
(20, 'Chicago 10 (Impact Series)', 0, '2020-12-05', 'R', 'Documentary', 'Archival footage, animation, and music are used to look back at the eight anti-war protesters who were put on trial following the 1968 Democratic National Convention.', 0, 1, '01:50:00'),
(21, 'Death on the Nile', 0, '2020-12-18', 'PG', 'Mystery', 'Belgian sleuth Hercule Poirot’s Egyptian vacation aboard a glamorous river steamer turns into a terrifying search for a murderer when a picture-perfect couple’s idyllic honeymoon is tragically cut short.', 0, 1, '01:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `theatrefeatures`
--

DROP TABLE IF EXISTS `theatrefeatures`;
CREATE TABLE IF NOT EXISTS `theatrefeatures` (
  `theatreID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `handiRamps` tinyint(1) NOT NULL,
  `handiEscalator` tinyint(1) NOT NULL,
  `handiElevator` tinyint(1) NOT NULL,
  `handiParking` tinyint(1) NOT NULL,
  `cc` tinyint(1) NOT NULL,
  `surround` tinyint(1) NOT NULL,
  `atmos` tinyint(1) NOT NULL,
  `ultraAVX` tinyint(1) NOT NULL,
  `IMAX` tinyint(1) NOT NULL,
  `DBOX` tinyint(1) NOT NULL,
  `realD3D` tinyint(1) NOT NULL,
  `VIP` tinyint(1) NOT NULL,
  PRIMARY KEY (`theatreID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `theatrefeatures`
--

TRUNCATE TABLE `theatrefeatures`;
--
-- Dumping data for table `theatrefeatures`
--

INSERT INTO `theatrefeatures` (`theatreID`, `name`, `handiRamps`, `handiEscalator`, `handiElevator`, `handiParking`, `cc`, `surround`, `atmos`, `ultraAVX`, `IMAX`, `DBOX`, `realD3D`, `VIP`) VALUES
(1, 'Cineplex Odeon Ajax Cinemas', 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(2, 'Cineplex Odeon Oshawa Cinemas', 0, 0, 1, 1, 1, 0, 0, 1, 1, 0, 1, 0),
(3, 'Cineplex Cinemas Pickering and VIP', 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1),
(4, 'Cineplex Cinemas Scarborough', 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0),
(5, 'Cineplex Cinemas Markham and VIP ', 0, 1, 1, 1, 0, 0, 0, 0, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `theatrelocationinfo`
--

DROP TABLE IF EXISTS `theatrelocationinfo`;
CREATE TABLE IF NOT EXISTS `theatrelocationinfo` (
  `theatreID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNumber` char(10) NOT NULL,
  `gpsCoord` int(125) NOT NULL,
  PRIMARY KEY (`theatreID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `theatrelocationinfo`
--

TRUNCATE TABLE `theatrelocationinfo`;
--
-- Dumping data for table `theatrelocationinfo`
--

INSERT INTO `theatrelocationinfo` (`theatreID`, `name`, `address`, `phoneNumber`, `gpsCoord`) VALUES
(1, 'Cineplex Odeon Ajax Cinemas', '248 Kingston Road East\r\nAjax, Ontario\r\nL1S 1G1', '9054267772', 1),
(2, 'Cineplex Odeon Oshawa Cinemas', '1351 Grandview Street North\r\nWhitby, Ontario\r\nL1K 0G1\r\n', '9054323486', 1),
(3, 'Cineplex Cinemas Pickering and VIP', '1355 Kingston Road\r\nPickering Town Centre\r\nPickering, Ontario\r\nL1V 1B8\r\n', '2893410630', 1),
(4, 'Cineplex Cinemas Scarborough ', '300 Borough Drive\r\nScarborough Town Centre Scarborough, Ontario\r\nM1P 4P5', '4162905217', 1),
(5, 'Cineplex Cinemas Markham and VIP', '179 Enterprise Blvd., Suite 169\r\nMarkham, Ontario\r\nL6G 0E7', '9054791778', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticketreservation`
--

DROP TABLE IF EXISTS `ticketreservation`;
CREATE TABLE IF NOT EXISTS `ticketreservation` (
  `ticketID` int(11) NOT NULL AUTO_INCREMENT,
  `movieID` int(11) DEFAULT NULL,
  `cinemaID` int(11) DEFAULT NULL,
  `adult` int(2) NOT NULL,
  `senior` int(2) NOT NULL,
  `child` int(2) NOT NULL,
  `wheelchair` tinyint(1) NOT NULL,
  `support` tinyint(1) NOT NULL,
  `theatre` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`ticketID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `ticketreservation`
--

TRUNCATE TABLE `ticketreservation`;
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

-- --------------------------------------------------------

--
-- Table structure for table `userhistory`
--

DROP TABLE IF EXISTS `userhistory`;
CREATE TABLE IF NOT EXISTS `userhistory` (
  `historyID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `theatreAttended` varchar(255) NOT NULL,
  PRIMARY KEY (`historyID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `userhistory`
--

TRUNCATE TABLE `userhistory`;
--
-- Dumping data for table `userhistory`
--

INSERT INTO `userhistory` (`historyID`, `userID`, `title`, `theatreAttended`) VALUES
(1, '2018-234599', 'The Kid Detective', 'Cineplex Odeon Oshawa Cinemas'),
(2, '2018-234599', 'Honest Thief', 'Cineplex Cinemas Pickering and VIP'),
(3, '2018-234599', 'Shazam!', 'Cineplex Odeon Ajax Cinemas'),
(4, '2018-378909', 'Ford v Ferrari', 'Cineplex Cinemas Pickering and VIP'),
(5, '2018-378909', 'Tesla', 'Cineplex Cinemas Scarborough'),
(6, '2019-100038', 'Maleficent:  Mistress of Evil', 'Cineplex Odeon Oshawa Cinemas'),
(7, '2019-100038', 'Guardians of the Galaxy, Vol. 2', 'Cineplex Cinemas Scarborough'),
(8, '2019-100038', 'Star Wars:  Episode IX - The Rise of Skywalker', 'Cineplex Odeon Ajax Cinemas'),
(9, '2019-100038', 'Rocketman', 'Cineplex Cinemas Markham and VIP'),
(10, '2019-100038', 'Freaky', 'Cineplex Cinemas Scarborough'),
(11, '2019-248890', 'Avengers: Endgame', 'Cineplex Cinemas Pickering and VIP'),
(12, '2019-248890', 'Vanguard (English Dub)', 'Cineplex Cinemas Pickering and VIP'),
(13, '2019-319801', 'Joker', 'Cineplex Cinemas Markham and VIP'),
(14, '2019-319801', 'Mulan', 'Cineplex Cinemas Markham and VIP'),
(15, '2019-319801', 'The Call of the Wild', 'Cineplex Odeon Oshawa Cinemas'),
(16, '2019-500200', 'The Polar Express', 'Cineplex Odeon Oshawa Cinemas'),
(17, '2019-500200', 'The Call of the Wild', 'Cineplex Odeon Oshawa Cinemas'),
(18, '2019-500200', '100% Wolf', 'Cineplex Odeon Ajax Cinemas'),
(19, '2020-118882', 'Shazam!', 'Cineplex Odeon Ajax Cinemas'),
(20, '2020-118882', 'Freaky', 'Cineplex Cinemas Scarborough'),
(21, '2020-118882', 'Sonic the Hedgehog', 'Cineplex Odeon Oshawa Cinemas'),
(22, '2020-118882', 'The Kid Detective', 'Cineplex Odeon Oshawa Cinemas'),
(23, '2020-330077', 'Sonic the Hedgehog', 'Cineplex Odeon Oshawa Cinemas'),
(24, '2020-330077', 'Rocketman', 'Cineplex Cinemas Markham and VIP'),
(25, '2020-330077', 'The Polar Express', 'Cineplex Cinemas Markham and VIP'),
(26, '2020-330077', 'Shazam!', 'Cineplex Odeon Ajax Cinemas'),
(27, '2020-330077', '100% Wolf', 'Cineplex Odeon Ajax Cinemas'),
(28, '2020-377891', 'Maleficent:  Mistress of Evil', 'Cineplex Odeon Oshawa Cinemas'),
(29, '2020-412335', 'Avengers: Endgame', 'Cineplex Cinemas Pickering and VIP'),
(30, '2020-412335', 'Vanguard (English Dub)', 'Cineplex Cinemas Pickering and VIP'),
(31, '2020-881155', 'Freaky', 'Cineplex Cinemas Scarborough');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
