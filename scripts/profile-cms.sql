-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2015 at 06:40 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profile-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
`linkid` int(50) NOT NULL,
  `projectid` int(50) NOT NULL,
  `linkname` varchar(200) NOT NULL,
  `linkurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`projectid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `projectname` varchar(100) NOT NULL,
  `projectpicture` varchar(200) NOT NULL,
  `projectdescription` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userid` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `securityrole` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jobtitle` varchar(100) DEFAULT NULL,
  `resume` varchar(200) DEFAULT NULL,
  `userpicture` varchar(200) DEFAULT NULL,
  `userdescription1` varchar(800) DEFAULT NULL,
  `userdescription2` varchar(800) DEFAULT NULL,
  `userdescription3` varchar(800) DEFAULT NULL,
  `urllinkedin` varchar(200) DEFAULT NULL,
  `urltwitter` varchar(200) DEFAULT NULL,
  `urlgithub` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `securityrole`, `firstname`, `lastname`, `email`, `jobtitle`, `resume`, `userpicture`, `userdescription1`, `userdescription2`, `userdescription3`, `urllinkedin`, `urltwitter`, `urlgithub`) VALUES
(1, 'bensoer', 'password', 'user', 'Ben', 'Soer', 'ben@soernet.ca', 'PHP Developer', NULL, NULL, 'Avid Designer', 'Such Wow', 'I write in depth and on par', 'http://www.linkedin.com', 'http://www.twitter.com', 'http://google.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
 ADD UNIQUE KEY `linkid` (`linkid`), ADD KEY `projectid` (`projectid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`projectid`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
MODIFY `linkid` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `projectid` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `links`
--
ALTER TABLE `links`
ADD CONSTRAINT `fk_projectid` FOREIGN KEY (`projectid`) REFERENCES `projects` (`projectid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
ADD CONSTRAINT `fk_userid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
