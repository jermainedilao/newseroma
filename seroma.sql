-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2015 at 03:11 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seroma`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE IF NOT EXISTS `amenities` (
`amenityid` int(11) NOT NULL,
  `amenityname` varchar(256) NOT NULL,
  `amenitystatus` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`articleid` int(11) NOT NULL,
  `articletitle` varchar(50) NOT NULL,
  `articlebody` varchar(1000) NOT NULL,
  `articledate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `articleimgname` varchar(255) NOT NULL,
  `articleimgtype` varchar(255) NOT NULL,
  `articleimgurl` varchar(255) NOT NULL,
  `articlestatus` smallint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
`featureid` int(11) NOT NULL,
  `featurename` varchar(256) NOT NULL,
  `featurestatus` smallint(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `finishes`
--

CREATE TABLE IF NOT EXISTS `finishes` (
`finishesid` int(11) NOT NULL,
  `finishesname` varchar(255) NOT NULL,
  `finishesstatus` smallint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`messageid` int(11) NOT NULL,
  `sender` varchar(256) NOT NULL,
  `senderemail` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `recipient` smallint(6) NOT NULL,
  `message` varchar(500) NOT NULL,
  `viewed` int(11) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `replytimestamp` varchar(50) NOT NULL,
  `messagestatus` smallint(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE IF NOT EXISTS `subscriptions` (
`subscriberid` int(11) NOT NULL,
  `subscriberemail` varchar(100) NOT NULL,
  `subscriberstatus` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`subscriberid`, `subscriberemail`, `subscriberstatus`) VALUES
(1, 'jermainedilao@gmail.com', 1),
(2, 'mrosetan@gmail.com', 1),
(3, 'yenhaha@gmail.com', 1),
(4, 'michaelg@gmail.com', 1),
(5, 'rosebecher@gmail.com', 1),
(6, 'johntolentino@gmail.com', 1),
(7, 'salme@salme.com', 1),
(8, 'aljun@aljun.com', 1),
(9, 'kvein@kvein.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
`unitid` int(11) NOT NULL,
  `unitname` varchar(255) NOT NULL,
  `unittype` varchar(255) NOT NULL,
  `unitarea` varchar(255) NOT NULL,
  `unitimgname` varchar(255) NOT NULL,
  `unitimgtype` varchar(255) NOT NULL,
  `unitimgurl` varchar(255) NOT NULL,
  `unitfinishes1` int(11) NOT NULL,
  `unitfinishes2` int(11) NOT NULL,
  `unitfinishes3` int(11) NOT NULL,
  `unitfinishes4` int(11) NOT NULL,
  `unitfinishes5` int(11) NOT NULL,
  `unitstatus` smallint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `contact`, `email`, `status`) VALUES
(1, 'admin', 'admin', 'Condominium Management', '123456789', 'admin@admin.com', 1),
(2, 'jermaine', 'jermaine', 'Jermaine L. Dilao', '09228052232', 'jermainedilao@gmail.com', 1),
(3, 'michael', 'michael', 'Michael Gigaon Mativo', '09336071385', 'michaelmativo08@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
 ADD PRIMARY KEY (`amenityid`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`articleid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
 ADD PRIMARY KEY (`featureid`);

--
-- Indexes for table `finishes`
--
ALTER TABLE `finishes`
 ADD PRIMARY KEY (`finishesid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
 ADD PRIMARY KEY (`subscriberid`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
 ADD PRIMARY KEY (`unitid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
MODIFY `amenityid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `articleid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
MODIFY `featureid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `finishes`
--
ALTER TABLE `finishes`
MODIFY `finishesid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
MODIFY `subscriberid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
MODIFY `unitid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
