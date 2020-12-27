-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2017 at 02:32 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photo`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `user_id` int(20) NOT NULL,
  `alb_id` int(20) NOT NULL AUTO_INCREMENT,
  `alb_name` varchar(255) NOT NULL,
  PRIMARY KEY (`alb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`user_id`, `alb_id`, `alb_name`) VALUES
(1, 1, 'college'),
(2, 2, 'wallpaper'),
(3, 3, 'ownpic'),
(1, 4, 'travel'),
(4, 5, 'enjoy'),
(4, 6, 'selfie'),
(5, 7, 'travel'),
(5, 8, 'group'),
(5, 9, 'selfie'),
(6, 10, 'bawal'),
(9, 11, 'anik'),
(9, 12, 'swag');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `img_id` int(20) NOT NULL,
  `cmnt_id` int(20) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`cmnt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`img_id`, `cmnt_id`, `comment`) VALUES
(1, 1, 'nice photo....'),
(2, 2, 'ohhh...nice'),
(7, 3, 'wow.....'),
(4, 4, 'nice pic....'),
(1, 5, 'thank u..'),
(3, 6, 'nice...'),
(12, 9, 'nice photo'),
(7, 11, 'beautiful....');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `img_id` int(20) NOT NULL AUTO_INCREMENT,
  `alb_id` int(20) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `alb_id`, `img_name`, `image`) VALUES
(1, 1, 'masti', 'home/image/20160107_133910.jpg'),
(2, 2, 'nature', 'home/image/images (8).jpg'),
(3, 2, 'mypic', 'home/image/apple-black-wallpaper_052244_13.jpg'),
(4, 3, 'mainphoto', 'home/image/IMG-20160706-WA0093.jpg'),
(5, 3, 'mine', 'home/image/IMG-20160706-WA0078.jpg'),
(6, 1, 'group image', 'home/image/IMG-20160522-WA0008.jpg'),
(7, 4, 'beautiul lake', 'home/image/IMG-20160706-WA0078.jpg'),
(8, 5, 'masti', 'home/image/IMG-20160522-WA0002.jpg'),
(9, 5, 'groupic', 'home/image/IMG-20160706-WA0072.jpg'),
(10, 6, 'amita', 'home/image/IMG-20160706-WA0055.jpg'),
(11, 7, '1', 'home/image/IMG-20160811-WA0014.jpg'),
(12, 1, 'guitar', 'home/image/IMG-20160718-WA0002.jpg'),
(15, 11, 'a', 'home/image/20160324_135234.jpg'),
(14, 10, 'owl', 'home/image/IMG-20160904-WA0018.jpg'),
(16, 13, 'abc', 'home/image/20160324_090359.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_gen` varchar(255) NOT NULL,
  `user_birth` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_gen`, `user_birth`, `user_email`, `user_pwd`) VALUES
(1, 'Srijit Kar', 'male', '16/5/1997', '9564247814', '123'),
(2, 'Biswajit Kar', 'male', '5/5/1980', '9749992185', '1234'),
(3, 'jayasri kar', 'female', '4/1/1980', '9433290613', '1456'),
(4, 'amit ghosh', 'male', '5/2/1995', 'amit@gmail.com', '1234'),
(5, 'subhajit', 'female', '2/2/1985', 'subha12', '789'),
(6, 'rakesh', 'male', '23/1/1997', '7059106558', '7200'),
(9, 'rakeshm', 'male', '1/1/1980', '588', '369');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;