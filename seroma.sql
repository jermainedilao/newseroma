-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2015 at 01:05 AM
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

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`amenityid`, `amenityname`, `amenitystatus`) VALUES
(1, 'Uptown Funk Hall', 0),
(2, ' Multipurpose function hall /business center', 1),
(3, ' Poolside lounge w/bar', 1),
(4, ' Amphitheater', 1),
(5, 'Fitness gym', 1),
(6, 'Multipurpose function hall /business center', 1),
(7, 'Knorr Cubes', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articleid`, `articletitle`, `articlebody`, `articledate`, `articleimgname`, `articleimgtype`, `articleimgurl`, `articlestatus`) VALUES
(2, 'First Article', 'This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. This is my first article. ', '2015-03-05 16:52:20', 'image1.jpg', 'image/jpeg', 'articleimages/image1.jpg', 1),
(3, 'This is my second article. ', 'This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. This is my second article. ', '2015-03-05 16:59:09', 'image2.jpg', 'image/jpeg', 'articleimages/image2.jpg', 1),
(4, 'This is my third article. ', 'This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. This is my third article. ', '2015-03-05 17:03:50', 'image3.jpg', 'image/jpeg', 'articleimages/image3.jpg', 1),
(5, 'This is my fourth article that Ill delete later. ', 'This is my fourth article that Ill delete later. This is my fourth article that Ill delete later. This is my fourth article that Ill delete later. This is my fourth article that Ill delete later. This is my fourth article that Ill delete later. This is my fourth article that Ill delete later. This is my fourth article that Ill delete later. This is my fourth article that Ill delete later. ', '2015-03-07 22:06:07', 'pic1.jpg', 'image/jpeg', 'articleimages/pic1.jpg', 1),
(6, 'This is my fifth Article. ', 'This is my fifth Article. This is my fifth Article. This is my fifth Article. This is my fifth Article. This is my fifth Article. This is my fifth Article. This is my fifth Article. This is my fifth Article. This is my fifth Article. This is my fifth Article. ', '2015-03-07 22:09:48', 'spectrum_of_the_sky_hdtv_1080p-HD1.jpg', 'image/jpeg', 'articleimages/spectrum_of_the_sky_hdtv_1080p-HD1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
`featureid` int(11) NOT NULL,
  `featurename` varchar(256) NOT NULL,
  `featurestatus` smallint(6) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`featureid`, `featurename`, `featurestatus`) VALUES
(1, 'Reception / Lobby area', 1),
(2, 'Heat and smoke detectors with sprinkler system', 1),
(3, ' CCTV (lobby, elevator and elevator lobby, hallways)', 1),
(4, '110% Standby power', 0),
(5, ' Telephone & cable tv outlets', 1),
(6, 'Fire alarm and fire hose cabinets along corridors', 1),
(7, 'Umami', 1);

-- --------------------------------------------------------

--
-- Table structure for table `finishes`
--

CREATE TABLE IF NOT EXISTS `finishes` (
`finishesid` int(11) NOT NULL,
  `finishesname` varchar(255) NOT NULL,
  `finishesstatus` smallint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `finishes`
--

INSERT INTO `finishes` (`finishesid`, `finishesname`, `finishesstatus`) VALUES
(1, 'diamond counter top', 1),
(2, 'cebu king bed', 0),
(3, 'carpet', 1),
(4, 'Jacuzzi', 1),
(5, 'Centralized Aircon', 1),
(6, 'Bulalo', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageid`, `sender`, `senderemail`, `timestamp`, `recipient`, `message`, `viewed`, `reply`, `replytimestamp`, `messagestatus`) VALUES
(2, 'Rosie', 'rosie@rosie.com', '2015-03-08 00:01:53', 2, 'bleh :p', 1, 'Who you!? ', 'March 8, 2015, 1:01 am', 1),
(13, 'Rosie', 'mrosetan@gmail.com', '2015-03-08 00:01:28', 3, 'I love John Tolentino and Kvein Aballe <3', 1, 'Yuck! Three timer!', 'March 8, 2015, 1:01 am', 1),
(14, 'Rosie', 'mrosetan@gmail.com', '2015-03-08 00:01:21', 3, 'And I love you too <3', 1, 'Shup Rosie! You''re so kadiri! You''re already inlove with kvein!!!! Two-timer!', 'March 8, 2015, 1:01 am', 1),
(16, 'Kim Chiu', 'kimchiu@gmail.com', '2015-03-07 23:47:25', 2, 'I really like you! And I think I love you na! <3 Can we meet each other please??? <3.<3', 1, 'Okay.. Let''s meet at starbucks, but sorry in advance.. Im already taken ,</3', 'March 8, 2015, 12:47 am', 1),
(17, 'Rosie', 'mrosetan@gmail.com', '2015-03-07 21:04:43', 3, 'And I love you too <3', 1, '', '', 0),
(18, 'Janella Salvador', 'iamsuperjanella@gmail.com', '2015-03-07 23:52:49', 2, 'Hi, I like you too. And I think I love you na! <3', 1, 'Im sorry. Im already taken.. </3', 'March 8, 2015, 12:52 am', 1),
(19, 'Kim Chiu again...', 'kimchiu@gmail.com', '2015-03-07 23:59:16', 2, 'Talaga?? Break nlng kayo please? :( Tayo nlang? :(', 1, 'Ano ka ba... Lumayo ka sa akin. Ang landi mo p*ta ka! Kadiri mo kim chiu!', 'March 8, 2015, 12:59 am', 1),
(20, 'Kim Chiu again and again', 'kimchiu@gmail.com', '2015-03-08 00:00:44', 2, 'Huhuhuhuhhuhuhu :(( Ill find another YOU nlang :(( huhu </3', 1, 'Okay... Go to BDO. They will find ways.... :) Smile ka lang. Okay lang. Mdami pang gwapo na kagaya ko jan :D', 'March 8, 2015, 1:00 am', 1);

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

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unitid`, `unitname`, `unittype`, `unitarea`, `unitimgname`, `unitimgtype`, `unitimgurl`, `unitfinishes1`, `unitfinishes2`, `unitfinishes3`, `unitfinishes4`, `unitfinishes5`, `unitstatus`) VALUES
(4, 'Papaya', 'Studio Unit', '100 sq.ft', '1484678_10203036505147982_2580492930484556424_n.jpg', 'image/jpeg', 'unitimages/1484678_10203036505147982_2580492930484556424_n.jpg', 1, 2, 3, 4, 5, 1),
(5, 'Bayabas', 'One-Bedroom Unit', '200 sq.ft', '11034304_10203036505267985_8887466405525499903_n.jpg', 'image/jpeg', 'unitimages/11034304_10203036505267985_8887466405525499903_n.jpg', 1, 2, 3, 5, 0, 1),
(6, 'Apol', 'One-Bedroom Unit', '200 sq.ft', '11034304_10203036505267985_8887466405525499903_n.jpg', 'image/jpeg', 'unitimages/11034304_10203036505267985_8887466405525499903_n.jpg', 1, 2, 5, 0, 0, 1),
(7, 'Santol', 'Studio Unit', '100 sq.ft', '1484678_10203036505147982_2580492930484556424_n.jpg', 'image/jpeg', 'unitimages/1484678_10203036505147982_2580492930484556424_n.jpg', 1, 0, 0, 0, 0, 1),
(8, 'Rosie', 'Presidential Suite', '1000 sq. ft.', '11034304_10203036505267985_8887466405525499903_n.jpg', 'image/jpeg', 'unitimages/11034304_10203036505267985_8887466405525499903_n.jpg', 1, 0, 6, 5, 4, 1);

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
(3, 'michael', 'michael', 'Michael Mativo', '09336071385', 'michaelmativo08@gmail.com', 1);

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
MODIFY `articleid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
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
