-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 03:32 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(25) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `email`, `message`, `time`) VALUES
(11, 'developer', 'esarqasmi@facebook.com', 'testmessagfe', '2017-11-22 13:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_key` varchar(25) NOT NULL,
  `data_value` varchar(2555) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `data_key`, `data_value`) VALUES
(1, 'map_link', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462565.19765996566!2d54.94754391379438!3d25.075085289835396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai+-+United+Arab+Emirates!5e0!3m2!1sen!2s!4v1511359934400" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `descp` varchar(2550) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `descp`, `image`, `address`) VALUES
(1, 'My project', ' Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum \n ', 'http://localhost/task/uploads/Desert1.jpg', 'Address goes here'),
(2, 'My project', ' Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum \r\n ', 'http://localhost/task/uploads/Desert2.jpg', 'Address goes here'),
(3, 'DHA ISLAMABAD', ' Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum \n ', 'http://localhost/task/uploads/Hydrangeas.jpg', 'DHA ISLAMABAD'),
(4, 'Australian Property', ' Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum \n ', 'http://localhost/task/uploads/lakehomes.jpg', 'Australian Property'),
(5, 'KUALA LUMPUR', ' Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum \n ', 'http://localhost/task/uploads/programme.png', 'KUALA LUMPUR'),
(6, 'AGENCIES', ' Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum  Lorem ispum ', 'http://localhost/task/uploads/Lighthouse.jpg', 'AGENCIES');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `descp` varchar(2500) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `descp`, `path`) VALUES
(9, 'John Doe', ' \r\n I love to introduce m', 'http://localhost/task/uploads/well-dressed-executive-with-crossed-arms_1098-3930.jpg'),
(10, 'John Smith', ' \r\n I love to introduce m', 'http://localhost/task/uploads/man-standing-with-a-black-t-shirt_1187-1045.jpg'),
(11, 'John Doe', ' \r\n I love to introduce m', 'http://localhost/task/uploads/elegant-man-with-thumbs-up_1149-1595.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(25) NOT NULL,
  `testimonial` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `author`, `testimonial`) VALUES
(7, 'John Doe', ' \r\n Our experience with TestPrep-Online''s OLSAT practice pack was great! The content and layout are excellent and the site is so easy to use. '),
(8, 'John Smith', ' \r\n The fact that the practice tests were online and very visual was great, as it helped my kids to be more responsive to exercises. '),
(9, 'Jonathan', ' \r\n I really liked the explanations in the step-by-step mode - they were short and to the point. '),
(10, 'Helen', ' \r\n Your practice test questions are actually very similar to those in the ‘real’ tests');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@test.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
