-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 06:59 AM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etona`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attend_events`
--

DROP TABLE IF EXISTS `attend_events`;
CREATE TABLE IF NOT EXISTS `attend_events` (
  `attend_id` int(10) NOT NULL AUTO_INCREMENT,
  `attending` bit(1) NOT NULL,
  `notattending` bit(1) NOT NULL,
  `pending` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  PRIMARY KEY (`attend_id`),
  KEY `event_id` (`event_id`),
  KEY `idnumber` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attend_events`
--

INSERT INTO `attend_events` (`attend_id`, `attending`, `notattending`, `pending`, `event_id`, `member_id`) VALUES
(1, b'0', b'0', 2, 1, 221);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `usercomment_id` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `comments` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL,
  PRIMARY KEY (`usercomment_id`),
  KEY `idnumber` (`idnumber`),
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`usercomment_id`, `idnumber`, `status_id`, `comments`, `comment_date`, `comment_time`) VALUES
(1, 28, 171, 'halllo', '2017-03-24', '09:57:26'),
(2, 28, 171, 'halllo', '2017-03-24', '10:00:17'),
(3, 28, 171, 'halllohallo', '2017-03-24', '10:01:12'),
(4, 28, 171, 'halllohallo', '2017-03-24', '10:01:12'),
(5, 28, 171, 'halllohallo', '2017-03-24', '10:01:12'),
(6, 28, 173, 'Hi Aries!', '2017-03-25', '01:04:16'),
(7, 28, 173, 'Hi Aries!', '2017-03-25', '01:04:16'),
(8, 32, 173, 'Hi Aries kaklase ako ng ate mo :)', '2017-03-25', '02:56:06'),
(9, 32, 172, 'Hi mo to bwahahahahaha', '2017-03-25', '02:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `coverphotos`
--

DROP TABLE IF EXISTS `coverphotos`;
CREATE TABLE IF NOT EXISTS `coverphotos` (
  `cover#` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` int(10) NOT NULL,
  `image_name` varchar(225) NOT NULL,
  `image_path` varchar(225) NOT NULL,
  PRIMARY KEY (`cover#`),
  KEY `idnumber` (`idnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coverphotos`
--

INSERT INTO `coverphotos` (`cover#`, `idnumber`, `image_name`, `image_path`) VALUES
(3, 28, 'usercover#28 ', './images/'),
(4, 29, 'usercover#29 ', './images/'),
(5, 28, 'usercover#28 ', './images/'),
(6, 28, 'usercover#28 ', './images/'),
(7, 28, 'usercover#28 ', './images/'),
(8, 28, 'usercover#28 ', './images/'),
(9, 32, 'usercover#32 ', './images/');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `file` int(11) NOT NULL AUTO_INCREMENT,
  `idnumber` int(11) NOT NULL,
  `document_name` varchar(200) NOT NULL,
  `document_path` varchar(200) NOT NULL,
  `group_id` int(11) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  PRIMARY KEY (`file`),
  KEY `idnumber` (`idnumber`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`file`, `idnumber`, `document_name`, `document_path`, `group_id`, `date_uploaded`) VALUES
(4, 28, 'file#199 ', './document/', 199, '2017-03-24 08:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `event_creator` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_place` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `group_name` varchar(225) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `idnumber` (`member_id`),
  KEY `group_id` (`group_id`),
  KEY `group_name` (`group_name`),
  KEY `idnumber_2` (`idnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `group_id`, `member_id`, `idnumber`, `event_creator`, `event_name`, `event_place`, `event_date`, `group_name`) VALUES
(1, 199, 221, 29, 'Christian Aries Veracruz Canimo ', 'lele', 's,msa,d', '2017-03-31', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `exclusivestatus`
--

DROP TABLE IF EXISTS `exclusivestatus`;
CREATE TABLE IF NOT EXISTS `exclusivestatus` (
  `exstat_id` int(10) NOT NULL AUTO_INCREMENT,
  `poster_id` int(10) NOT NULL,
  `userprofile_id` int(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL,
  PRIMARY KEY (`exstat_id`),
  KEY `poster_id` (`poster_id`),
  KEY `userpfrofile_id` (`userprofile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exclusivestatus`
--

INSERT INTO `exclusivestatus` (`exstat_id`, `poster_id`, `userprofile_id`, `text`, `post_date`, `post_time`) VALUES
(1, 29, 31, 'oyoy tintin ganda mo', '2017-03-24', '10:16:29'),
(2, 29, 31, 'yo', '2017-03-24', '10:34:43'),
(3, 28, 29, 'uy aries. hahhaha', '2017-03-24', '00:20:17'),
(4, 28, 29, 'hasy', '2017-03-24', '00:20:17'),
(5, 28, 30, 'hey sheey', '2017-03-24', '00:20:17'),
(6, 28, 29, 'oyoyoy', '2017-03-24', '00:20:17'),
(7, 29, 28, 'uy hehe', '2017-03-24', '00:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` int(10) NOT NULL,
  `group_name` varchar(225) NOT NULL,
  `group_creator` varchar(225) NOT NULL,
  `no_members` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`group_id`),
  KEY `idnumber` (`idnumber`),
  KEY `group_creator` (`group_creator`),
  KEY `no_members` (`no_members`),
  KEY `group_name` (`group_name`)
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `idnumber`, `group_name`, `group_creator`, `no_members`, `date_created`) VALUES
(197, 28, 'blabla', 'Christine Veracruz Canimo ', 2, '2017-03-24 09:34:50'),
(198, 29, 'uyy', 'Christian Aries Veracruz Canimo ', 2, '2017-03-24 09:40:19'),
(199, 29, 'hey', 'Christian Aries Veracruz Canimo ', 2, '2017-03-24 11:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `grpnotifs`
--

DROP TABLE IF EXISTS `grpnotifs`;
CREATE TABLE IF NOT EXISTS `grpnotifs` (
  `grpnotif_id` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` int(10) NOT NULL,
  `to_whom` int(10) NOT NULL,
  `grpstat_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `comment_id` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`grpnotif_id`),
  KEY `member_id` (`idnumber`),
  KEY `to_whom` (`to_whom`,`grpstat_id`,`comment_id`),
  KEY `grpnotifs_ibfk_8` (`comment_id`),
  KEY `group_id` (`group_id`),
  KEY `grpstat_id` (`grpstat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grpnotifs`
--

INSERT INTO `grpnotifs` (`grpnotif_id`, `idnumber`, `to_whom`, `grpstat_id`, `group_id`, `comment_id`, `type`, `datetime`) VALUES
(85, 28, 29, 61, 198, 0, 'grppost', '2017-03-24 09:41:16'),
(86, 29, 28, 61, 198, 1, 'grpcomment', '2017-03-24 09:57:09'),
(87, 28, 29, 61, 198, 2, 'grpcomment', '2017-03-24 11:41:10'),
(88, 28, 29, 61, 198, 2, 'grpcomment', '2017-03-24 11:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `grpstatus`
--

DROP TABLE IF EXISTS `grpstatus`;
CREATE TABLE IF NOT EXISTS `grpstatus` (
  `grpstat_id` int(10) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `text` text NOT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`grpstat_id`),
  KEY `idnumber` (`member_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grpstatus`
--

INSERT INTO `grpstatus` (`grpstat_id`, `group_id`, `member_id`, `text`, `post_date`) VALUES
(61, 198, 220, 'kabalbalan naman', '2017-03-24 09:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `grp_comments`
--

DROP TABLE IF EXISTS `grp_comments`;
CREATE TABLE IF NOT EXISTS `grp_comments` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `member_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `grpstat_id` int(10) NOT NULL,
  `grp_comment` text NOT NULL,
  `grpcomment_date` date NOT NULL,
  `grpcomment_time` time NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `member_id` (`member_id`),
  KEY `grpstat_id` (`grpstat_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grp_comments`
--

INSERT INTO `grp_comments` (`comment_id`, `member_id`, `group_id`, `grpstat_id`, `grp_comment`, `grpcomment_date`, `grpcomment_time`) VALUES
(1, 219, 198, 61, 'hirap pakshet', '2017-03-24', '09:56:58'),
(2, 220, 198, 61, 'hahhaha oo na', '2017-03-24', '11:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `date_login` datetime NOT NULL,
  `date_logout` datetime NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `users_id`, `date_login`, `date_logout`) VALUES
(23, 32, '2017-03-25 02:55:17', '0000-00-00 00:00:00'),
(22, 28, '2017-03-25 02:05:38', '2017-03-25 02:37:14'),
(21, 28, '2017-03-25 01:33:14', '0000-00-00 00:00:00'),
(20, 28, '2017-03-25 10:33:20', '2017-03-25 01:32:41'),
(19, 29, '2017-03-25 10:07:45', '2017-03-25 10:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(10) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `mname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `idnumber` (`idnumber`,`fname`),
  KEY `group_id` (`group_id`),
  KEY `mname` (`mname`),
  KEY `lname` (`lname`),
  KEY `fname` (`fname`),
  KEY `idnumber_2` (`idnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `group_id`, `idnumber`, `fname`, `mname`, `lname`) VALUES
(217, 197, 28, 'Christine', 'Veracruz', 'Canimo'),
(218, 197, 29, 'Christian Aries', 'Veracruz', 'Canimo'),
(219, 198, 29, 'Christian Aries', 'Veracruz', 'Canimo'),
(220, 198, 28, 'Christine', 'Veracruz', 'Canimo'),
(221, 199, 29, 'Christian Aries', 'Veracruz', 'Canimo'),
(222, 199, 28, 'Christine', 'Veracruz', 'Canimo');

-- --------------------------------------------------------

--
-- Table structure for table `notifs`
--

DROP TABLE IF EXISTS `notifs`;
CREATE TABLE IF NOT EXISTS `notifs` (
  `notif_id` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` int(10) NOT NULL,
  `to_whom` int(10) NOT NULL,
  `stat_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `exstat_id` int(10) NOT NULL,
  `grpstat_id` int(10) NOT NULL,
  `type` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`notif_id`),
  KEY `idnumber` (`idnumber`),
  KEY `to whom?` (`to_whom`),
  KEY `where?` (`stat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifs`
--

INSERT INTO `notifs` (`notif_id`, `idnumber`, `to_whom`, `stat_id`, `group_id`, `exstat_id`, `grpstat_id`, `type`, `datetime`) VALUES
(44, 28, 29, 0, 197, 0, 0, 'member', '2017-03-24 09:35:22'),
(45, 29, 28, 0, 198, 0, 0, 'member', '2017-03-24 09:40:57'),
(46, 28, 29, 171, 0, 0, 0, 'comment', '2017-03-24 09:57:31'),
(47, 28, 29, 171, 0, 0, 0, 'comment', '2017-03-24 10:00:22'),
(48, 28, 29, 171, 0, 0, 0, 'comment', '2017-03-24 10:01:16'),
(49, 28, 29, 171, 0, 0, 0, 'comment', '2017-03-24 10:03:15'),
(50, 28, 29, 171, 0, 0, 0, 'comment', '2017-03-24 10:09:26'),
(56, 28, 29, 0, 0, 6, 0, 'post', '2017-03-24 11:17:52'),
(57, 29, 28, 0, 0, 7, 0, 'post', '2017-03-24 11:33:16'),
(58, 29, 28, 0, 199, 0, 0, 'member', '2017-03-24 11:33:50'),
(59, 28, 29, 173, 0, 0, 0, 'comment', '2017-03-25 01:04:26'),
(60, 28, 29, 173, 0, 0, 0, 'comment', '2017-03-25 01:06:29'),
(61, 28, 31, 173, 0, 0, 0, 'comment', '2017-03-25 01:06:29'),
(62, 32, 29, 173, 0, 0, 0, 'comment', '2017-03-25 02:56:19'),
(63, 32, 31, 173, 0, 0, 0, 'comment', '2017-03-25 02:56:19'),
(64, 32, 28, 172, 0, 0, 0, 'comment', '2017-03-25 02:56:35'),
(65, 32, 31, 172, 0, 0, 0, 'comment', '2017-03-25 02:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `numberofevents`
--

DROP TABLE IF EXISTS `numberofevents`;
CREATE TABLE IF NOT EXISTS `numberofevents` (
  `primarynum` int(10) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `no_events` int(10) NOT NULL,
  PRIMARY KEY (`primarynum`),
  KEY `idnumber` (`idnumber`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numberofevents`
--

INSERT INTO `numberofevents` (`primarynum`, `group_id`, `idnumber`, `no_events`) VALUES
(42, 197, 29, 0),
(44, 199, 28, 0),
(45, 199, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `numberofgroups`
--

DROP TABLE IF EXISTS `numberofgroups`;
CREATE TABLE IF NOT EXISTS `numberofgroups` (
  `primarynum` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `no_groups` int(10) NOT NULL,
  PRIMARY KEY (`primarynum`),
  KEY `idnumber` (`idnumber`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numberofgroups`
--

INSERT INTO `numberofgroups` (`primarynum`, `idnumber`, `group_id`, `no_groups`) VALUES
(5, 29, 199, 3),
(6, 28, 199, 3);

-- --------------------------------------------------------

--
-- Table structure for table `numberofgrpevents`
--

DROP TABLE IF EXISTS `numberofgrpevents`;
CREATE TABLE IF NOT EXISTS `numberofgrpevents` (
  `primarynum` int(10) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) NOT NULL,
  `no_grpevents` int(11) NOT NULL,
  PRIMARY KEY (`primarynum`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `numberofstatus`
--

DROP TABLE IF EXISTS `numberofstatus`;
CREATE TABLE IF NOT EXISTS `numberofstatus` (
  `primarynum` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` int(10) NOT NULL,
  `no_of_status` int(10) NOT NULL,
  PRIMARY KEY (`primarynum`),
  KEY `idnumber` (`idnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numberofstatus`
--

INSERT INTO `numberofstatus` (`primarynum`, `idnumber`, `no_of_status`) VALUES
(1, 29, 10);

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

DROP TABLE IF EXISTS `profilepic`;
CREATE TABLE IF NOT EXISTS `profilepic` (
  `img_id` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` int(10) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`),
  KEY `idnumber` (`idnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilepic`
--

INSERT INTO `profilepic` (`img_id`, `idnumber`, `image_name`, `image_path`) VALUES
(8, 29, 'user#29 ', './images/'),
(10, 28, 'user#28 ', './images/'),
(11, 32, 'user#32 ', './images/');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `stat_id` int(10) NOT NULL AUTO_INCREMENT,
  `idnumber` int(10) NOT NULL,
  `text` text NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL,
  PRIMARY KEY (`stat_id`),
  KEY `idnumber` (`idnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`stat_id`, `idnumber`, `text`, `post_date`, `post_time`) VALUES
(138, 28, 'hi :D', '2017-03-16', '09:51:11'),
(139, 29, 'hehehe', '2017-03-16', '10:10:26'),
(140, 30, 'hi :)', '2017-03-17', '02:16:23'),
(141, 28, 'panget ni canimo sobra', '2017-03-17', '02:39:26'),
(142, 28, 'gahahahahaha :)', '2017-03-17', '02:39:42'),
(143, 29, 'panget ni canimo', '2017-03-17', '02:41:13'),
(144, 28, 'hello', '2017-03-18', '06:22:25'),
(145, 28, ' :lol:', '2017-03-18', '06:53:32'),
(146, 29, 'ma', '2017-03-18', '07:06:23'),
(147, 29, ' :long:', '2017-03-19', '01:25:45'),
(148, 29, 'hi hahaha', '2017-03-19', '02:29:11'),
(166, 29, 'isa pa', '2017-03-19', '02:33:30'),
(167, 29, 'hehehe', '2017-03-19', '02:35:52'),
(168, 29, 'hi', '2017-03-19', '03:16:33'),
(169, 30, 'hi tintin ganda\r\n', '2017-03-19', '05:59:02'),
(170, 28, ' :lol: :cheese: :)', '2017-03-21', '01:50:35'),
(171, 29, 'hi', '2017-03-21', '03:58:44'),
(172, 28, 'hehehe hi', '2017-03-21', '04:44:12'),
(173, 29, 'yo hahhaha', '2017-03-24', '11:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idnumber` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `emailadd` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `bday` date NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL,
  PRIMARY KEY (`idnumber`),
  KEY `idnumber` (`idnumber`),
  KEY `fname` (`fname`),
  KEY `username` (`username`),
  KEY `mname` (`mname`),
  KEY `lname` (`lname`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idnumber`, `fname`, `mname`, `lname`, `username`, `password`, `gender`, `address`, `emailadd`, `contact`, `bday`, `date_added`, `date_updated`) VALUES
(28, 'Christine', 'Veracruz', 'Canimo', 'tintin', 'ten', 'Female', 'Caloocan City', 'canimochristine04@gmail.com', '09974261210', '1998-02-04', '2017-03-16', '2017-03-16'),
(29, 'Christian Aries', 'Veracruz', 'Canimo', 'aries', 'xtian', 'Male', 'Caloocan City', 'christian@gmail.com', '09278730357', '0000-00-00', '2017-03-16', '2017-03-16'),
(30, 'Sherry', 'Villarivera', 'Calzado', 'Sheyshey', 'calzado', 'Female', 'Quezon City', 'sherry@gmail.com', '09876543213', '1997-10-24', '2017-03-17', '2017-03-17'),
(31, 'Janferr', 'Reyes', 'Catibog', 'janferr', 'anne', 'female', 'Espana', 'janferrcatibog@gmail.com', '09123456789', '1999-01-29', '2017-03-24', '2017-03-24'),
(32, 'John Robert', 'Cristobal', 'Capistrano', 'followyourdreams', 'Daincredi blerc24', 'Male', '119- F Lawa, Obando, Bulacan', 'robertcapistrano24@gmail.com', '09758769951', '1997-08-24', '2017-03-25', '2017-03-25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attend_events`
--
ALTER TABLE `attend_events`
  ADD CONSTRAINT `attend_events_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attend_events_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`stat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coverphotos`
--
ALTER TABLE `coverphotos`
  ADD CONSTRAINT `coverphotos_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `members` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `document_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_3` FOREIGN KEY (`group_name`) REFERENCES `groups` (`group_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_4` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_5` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exclusivestatus`
--
ALTER TABLE `exclusivestatus`
  ADD CONSTRAINT `exclusivestatus_ibfk_1` FOREIGN KEY (`poster_id`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exclusivestatus_ibfk_2` FOREIGN KEY (`userprofile_id`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grpnotifs`
--
ALTER TABLE `grpnotifs`
  ADD CONSTRAINT `grpnotifs_ibfk_2` FOREIGN KEY (`to_whom`) REFERENCES `members` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grpnotifs_ibfk_3` FOREIGN KEY (`grpstat_id`) REFERENCES `grpstatus` (`grpstat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grpnotifs_ibfk_4` FOREIGN KEY (`group_id`) REFERENCES `grpstatus` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grpstatus`
--
ALTER TABLE `grpstatus`
  ADD CONSTRAINT `grpstatus_ibfk_4` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`),
  ADD CONSTRAINT `grpstatus_ibfk_8` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grp_comments`
--
ALTER TABLE `grp_comments`
  ADD CONSTRAINT `grp_comments_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grp_comments_ibfk_3` FOREIGN KEY (`grpstat_id`) REFERENCES `grpstatus` (`grpstat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grp_comments_ibfk_4` FOREIGN KEY (`group_id`) REFERENCES `grpstatus` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_4` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_5` FOREIGN KEY (`fname`) REFERENCES `users` (`fname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_6` FOREIGN KEY (`mname`) REFERENCES `users` (`mname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_7` FOREIGN KEY (`lname`) REFERENCES `users` (`lname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifs`
--
ALTER TABLE `notifs`
  ADD CONSTRAINT `notifs_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifs_ibfk_2` FOREIGN KEY (`to_whom`) REFERENCES `users` (`idnumber`);

--
-- Constraints for table `numberofevents`
--
ALTER TABLE `numberofevents`
  ADD CONSTRAINT `numberofevents_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `members` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `numberofevents_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `members` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `numberofgroups`
--
ALTER TABLE `numberofgroups`
  ADD CONSTRAINT `numberofgroups_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `numberofgroups_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `numberofgrpevents`
--
ALTER TABLE `numberofgrpevents`
  ADD CONSTRAINT `numberofgrpevents_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `numberofstatus`
--
ALTER TABLE `numberofstatus`
  ADD CONSTRAINT `numberofstatus_ibfk_2` FOREIGN KEY (`idnumber`) REFERENCES `status` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profilepic`
--
ALTER TABLE `profilepic`
  ADD CONSTRAINT `profilepic_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
