-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2015 at 04:53 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`linkid`, `projectid`, `linkname`, `linkurl`) VALUES
(6, 6, 'GitHub', 'https://github.com/voodooworks/profile-cms'),
(7, 7, 'GitHub', 'http://github.com');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`projectid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `projectname` varchar(100) NOT NULL,
  `projectpicture` varchar(200) NOT NULL,
  `projectdescription` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectid`, `userid`, `projectname`, `projectpicture`, `projectdescription`) VALUES
(6, 1, 'Profile-CMS', '/assets/images/default_project_header.png', '<p>A profile builder website</p>\r\n'),
(7, 1, 'Tessera', '/assets/images/default_project_header.png', '<p>Aggregated site data in the cloud</p>\r\n');

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
  `usertitle1` text,
  `usertitle2` text,
  `usertitle3` text,
  `userpicture` varchar(200) DEFAULT NULL,
  `userdescription1` varchar(800) DEFAULT NULL,
  `userdescription2` varchar(800) DEFAULT NULL,
  `userdescription3` varchar(800) DEFAULT NULL,
  `urllinkedin` varchar(200) DEFAULT NULL,
  `urltwitter` varchar(200) DEFAULT NULL,
  `urlgithub` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `securityrole`, `firstname`, `lastname`, `email`, `jobtitle`, `resume`, `usertitle1`, `usertitle2`, `usertitle3`, `userpicture`, `userdescription1`, `userdescription2`, `userdescription3`, `urllinkedin`, `urltwitter`, `urlgithub`) VALUES
(1, 'bensoer', 'password', 'user', 'Ben', 'Soer', 'ben@soernet.ca', 'PHP Developer / Entrepeneur', '/uploads/bensoer/resume_bensoer.pdf', 'About Me', 'Sports', 'Skills', '/uploads/bensoer/profile_bensoer.jpg', 'I do Stuff', 'Badminton, Biking, Hiking, Camping', 'Computers, PHP, Java, C, C++, ASP, Swift, Android', 'http://www.linkedin.com', 'http://www.twitter.com', 'http://github.com'),
(2, 'administrator', 'P@$$w0rd', 'admin', 'Michael', 'Adams', 'admin@vw.com', 'Web Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'berttownshend', 'password', 'user', 'Bert', 'Townshend', 'btown@bcit.ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
MODIFY `linkid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `projectid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
